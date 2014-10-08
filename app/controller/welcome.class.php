<?php
class welcome extends SS_Controller{
	public function index(){
	   $this->ssS->display('welcome/index.tpl');
	}
	
	
	public function test(){
		$this->ssS->display('welcome/test.tpl');
	}
	
}