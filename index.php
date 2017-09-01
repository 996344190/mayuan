<?php
header("content-type:text/html;charset=utf-8");

//设置错误级别
error_reporting(E_ALL);
//echo "<pre>";print_r(__FILE__);exit;
//ini_set('display_errors','NO');
ini_set('date.timezone','Asia/Shanghai');
session_start();
define('DI',DIRECTORY_SEPARATOR);

define('__URL__',$_SERVER['SCRIPT_NAME']);




//定义框架根目录
define('ROOT_PATH',__DIR__.DI);


//定义常量
include ROOT_PATH.'FrameWork'.DI.'define.php';

//自动加载文件

include FRAMEWORK_PATH.'autoload.php';



\FrameWork\Core\EasyMvc::start();







