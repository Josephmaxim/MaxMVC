<?php
/**
 * Created by PhpStorm.
 * User: JosephMaxim
 * Date: 2016-08-27
 * Time: 10:35 PM
 */

// Edit this based on your server credential.
define('baseUrl', "http://localhost/MaxMVC/");

$GLOBALS['config'] = array(
    'baseUrl' => baseUrl,
    'publicUrl' => baseUrl . "public/",
    'cssUrl' => baseUrl . "public/css/",
    'jsUrl' => baseUrl . "public/js/",
    'imgUrl' => baseUrl . "public/img/",
    'database' => array(
        'host' => 'root',
        'username' => '',
        'password' => '',
        'db_name' => ''
    )
);