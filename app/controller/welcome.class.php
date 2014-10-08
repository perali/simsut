<?php
class welcome extends SS_Controller{
	public function index(){	
		/* if(!$this->ssS->isCached('welcome/index.tpl')){
			$url = md5($_SERVER['REQUEST_URI']);
			$this->ssS->display('welcome/index.tpl',$url);
		} */
		//局部缓存
		//$this->ssS->caching = 1;
		/* $date = date("Y-m-d H:i:s");
		$this->ssS->assign("date", $date);
		function insert_get_current_time($date){  
    		return date("Y-m-d H:i:s");  
		} 
		$this->ssS->display('welcome/test.tpl'); 
		*/
		/* $fa = time();
		$this->ssS->assign('fa',$fa);
		function smarty_block_nocache($fa){
			return time();
		}
		$this->ssS->registerPlugin('function', 'nocache', 'smarty_block_nocache');
		$this->ssS->display('welcome/test.tpl'); */
		$this->ssS->display('welcome/index.tpl');
	}
	
	
	public function test(){
		//$this->ssFail('a');
		$this->ssS->display('welcome/test.tpl');
	}
	
}