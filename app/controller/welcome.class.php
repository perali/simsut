<?php
class welcome extends SS_Controller{
	public function index(){	
		$arr1 = array('10'=>1,2,3);
		$arr2 = array(4,5,6);
		$arr = ssMergeArr($arr1,$arr2,1);
		print_r($arr);
		//$this->ssS->display('welcome/index.tpl');
	}
	
	
	
}