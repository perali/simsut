<?php
header('Content-type:text/html;Charset=utf-8');
/*
 * 2014-09-19 by perali
 * 框架唯一入口文件函数
 */

function ssIndex(){
    isset($_GET['c'])?$c=$_GET['c']:$c='welcome';
    isset($_GET['act'])?$act=$_GET['act']:$act='index';
    //访问控制器
    include_once "./app/controller/".$c.".class.php";
    //实例化对象
    $con = new $c;
    $con->$act();
}


/*
 * 2014-09-19 by perali
 * 框架的错误处理函数
 */

function ssError($str=null){
	empty($str)?$str='内部错误':$str=$str;
	include_once './core/system/error/error.php';
}


