<?php

/**
 * Created by PhpStorm.
 * User: JosephMaxim
 * Date: 2016-08-27
 * Time: 9:21 PM
 */
class Error404 extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->view->render('error404');
    }
}