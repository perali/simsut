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
	    $re = ssM('test')->deleteAll();
	    $smarty->assign('re',$re);
	    $smarty->display('welcome/index.tpl'); 
	}
	
	
	public function test(){
		ssS()->display('welcome/test.tpl');
	}
}