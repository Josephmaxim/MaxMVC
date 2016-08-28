<?php

/**
 * Created by PhpStorm.
 * User: JosephMaxim
 * Date: 2016-08-27
 * Time: 8:54 PM
 */
class Index extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('index');
    }

    public function test()
    {
        echo 'yay';
    }
}