<?php
header('Content-type:text/html;Charset=utf-8');
/*
 * 2014-09-19 by perali
 * 框架唯一入口文件函数
 */
function ssIndex(){
	if(ssConnentMysql()==true){
	    ssSetControler();
	}
}

/*
 * 2014-09-19 by perali
 *  框架设置控制器函数
 */
function ssSetControler(){
    isset($_GET['c'])?$c=$_GET['c']:$c='welcome';
    isset($_GET['act'])?$act=$_GET['act']:$act='index';
    //访问控制器
    if(file_exists("./app/controller/".$c.".class.php")){
        include_once "./app/controller/".$c.".class.php";
        $con = new $c;
        $con->$act();
    }else{
        ssError("当前控制器不存在！");
    }
    
}


/*
 * 2014-09-19 by perali
 * 框架的错误处理函数
 */

function ssError($str=null){
	empty($str)?$str='内部错误':$str=$str;
	include_once './core/system/error/error.php';
	die();
}


/*
 * 2014-09-20 by perali
 * 框架连接数据库函数
 */


function ssConnentMysql(){
    include './app/config.php';
	if(!empty($DATABASE)){
        $dsn = $DATATYPE.":host=".$DATAHOST.";dbname=".$DATABASE;
        Try
        {
            $pdo = new PDO($dsn, $DATAUSER, $DATAPWD); 
            $pdo->exec("SET names utf8");
            return true;
        }
        Catch (PDOException $e)
        {
            ssError('数据库未连接成功,请检查配置文件!
                ');
            return false;
        }
	}else{
		return true;
	}
}





