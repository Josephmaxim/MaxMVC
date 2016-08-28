<?php

/**
 * Created by PhpStorm.
 * User: JosephMaxim
 * Date: 2016-08-27
 * Time: 8:54 PM
 */
class Bootstrap
{
    public function __construct()
    {

        if(isset($_GET['url'])){
            $urlPath = $_GET['url'];
        }else{
            $urlPath = null;
        }

        $trimmedUrl = rtrim($urlPath, '/');
        $url = explode('/', $trimmedUrl);

        // Load index on base Url
        if(empty($url[0])){
            include('controller/index.php');
            $controller = new Index();
            return false;
        }


        $file = 'controller/' . $url[0] . '.php';

        if(file_exists($file)){
            include("$file");
            $controller = new $url[0];

            if(isset($url[1])){
                if(method_exists($url[0], $url[1])){
                    $controller -> {$url[1]}();
                    if(isset($url[2])){
                        $controller -> {$url[1]}($url[2]);
                    }
                }else{
                    $this->Call404Error();
                }
            }
        }else{
            $this->Call404Error();
        }
    }

    private function Call404Error() {
        include('controller/error404.php');
        new Error404();
    }
}