<?php
class welcome extends SS_Controller{
	public function index(){
	    //$smarty = ssS();
	    /*$a = 'perali';
	    $smarty->assign('a',$a);
        //$re = ssM('test')->selectOne(array('id'=>10,'name'=>'terry'));
	    //$re = ssM('test')->selectQuery(" * ","id='5' and name='terry'");
	    $re = ssM('test')->query('delete from test where id=3');
	    $smarty->assign('re',$re); */
	    //echo ssM('test')->deleteAll();
	   	//echo ssM('test')->deleteOne(array('id'=>6,'name'=>'perali'));
	   	//ssM('test')->updateOne(array('id'=>'10','name'=>'perali'),array('id'=>'10'));
	   	//echo(1);
	    //$smarty->assign('re',$re);
	    //echo 1;
	   	$this->ssS->display('welcome/index.tpl');
	    $this->ssM('test')->deleteAll();
	    //print_r($this->ssS);//->display('welcome/index.tpl');
	    //$smarty->display('welcome/index.tpl'); 
	}
	
	
	public function test(){
		//ssS()->display('welcome/test.tpl');
	}
}