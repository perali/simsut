<?php
//include './core/function/core.function.php';
/*
 * 2014-09-19 by perali
 * ss 核心控制器类
 */
class SS_Controller
{
    public function display($view=null,$con=null){
    	empty($con)?$con=get_class($this):$con=$con;
        if(empty($view)){
        	ssError('你没有提供相应模板!');
        	die();
        }
        include './app/view/'.$con."/".$view.".html";
    }
}