<?php
class welcome extends SS_Controller{
	public function index(){	
		/* print_r($this->ssM('test')->selectAll());
	    $this->ssS->display('welcome/index.tpl'); */
	  /*  $a= welcomeModel::test();
	   print_r($a); */
	   $this->ssS->display('welcome/index.tpl');
	}
	
	
	
}