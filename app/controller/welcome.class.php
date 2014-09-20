<?php
class welcome extends SS_Controller{
	public function index(){
		$this->assign('name', 'perali');
	    $this->display();
	}
}