<?php
/**
 * Created by PhpStorm.
 * User: JosephMaxim
 * Date: 2016-08-27
 * Time: 8:52 PM
 */

define('ROOT_PATH', dirname(__FILE__) . '/');
define('CORE_PATH', ROOT_PATH . 'core/');

require('config/config.php');
require(CORE_PATH . "Bootstrap.php");
require(CORE_PATH . "Controller.php");
require(CORE_PATH . "Model.php");
require(CORE_PATH . "View.php");

$app = new Bootstrap();