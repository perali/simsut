<?php
class welcome extends SS_Controller{
	public function index(){
	    $smarty = new Smarty();
	    $a = 'perali';
	    $smarty->assign('a',$a);
	    //$re = ss_M('test')->selectAll();
        $re = ssM('test')->selectOne(array('id'=>10,'name'=>'terry'));
	    $smarty->assign('re',$re);
	    $smarty->display('welcome/index.tpl'); 
	}
}