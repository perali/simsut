<?php
class welcome extends SS_Controller{
	public function index(){
	    $smarty = ssS();
	    /*$a = 'perali';
	    $smarty->assign('a',$a);
        //$re = ssM('test')->selectOne(array('id'=>10,'name'=>'terry'));
	    //$re = ssM('test')->selectQuery(" * ","id='5' and name='terry'");
	    $re = ssM('test')->query('delete from test where id=3');
	    $smarty->assign('re',$re); */
	    //echo ssM('test')->deleteAll();
	   	echo ssM('test')->deleteOne(array('id'=>6,'name'=>'perali'));
	   	//echo(1);
	    //$smarty->assign('re',$re);
	    $smarty->display('welcome/index.tpl'); 
	}
	
	
	public function test(){
		ssS()->display('welcome/test.tpl');
	}
}