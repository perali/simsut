<?php
class welcome extends SS_Controller{
	public function index(){
	    $smarty = new Smarty();
	    $a = 'perali';
	    $smarty->assign('a',$a);
	    $smarty->display('welcome/index.tpl'); 
	}
}