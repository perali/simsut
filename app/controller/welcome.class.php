<?php
class welcome extends SS_Controller{
	public function index(){
	    $smarty = new Smarty();
	    $a = 'perali';
	    $smarty->assign('a',$a);
	    $M = new ss_Model('test');
	    $re = $M ->select();
        $smarty->assign('re',$re);
	    $smarty->display('welcome/index.tpl'); 
	}
}