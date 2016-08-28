<?php

/**
 * Created by PhpStorm.
 * User: JosephMaxim
 * Date: 2016-08-27
 * Time: 8:52 PM
 */
class View
{
    public function __construct()
    {

    }

    public function render($file)
    {
        include('view/includes/header.php');
        require('view/' . $file . '.php');
        include('view/includes/footer.php');
    }

    public function GetPublicFile($folder)
    {
        $urlHost = $_SERVER['REQUEST_URI'] . '/';
        $publicDir = $urlHost . 'public/';
        if(!isset($folder)){
            return $publicDir;
        }elseif($folder == 'css'){
            return $publicDir . "css/";
        }elseif($folder == 'js'){
            return $publicDir . "js/";
        }elseif($folder == 'img'){
            return $publicDir . "img/";
        }
    }
}