<?php
/*
 * 2014-09-19 by perali
 * ss 核心控制器类
 */
class SS_Controller
{
  
}


/*
 * 2014-09-20
 * ss 核心模型类
 */

class ss_Model
{
    protected $table;
    private   $pdo;
    public function __construct($table){
    	if(empty($table)){
    		ssError('ssM函数参数不对,请根据手册传参');
    	}else{
            $this->table = $table;
    	    $this->pdo = ssConMysql();
        }
    }   
    public function selectAll(){
    	return $this->pdo->query('select * from '.$this->table)->fetchAll();
    }
    
    public function selectOne($arr){
    	if(!isset($arr)){
    		ssError('selectOne函数参数不对,请根据手册传参');
    	}else{
    	    $sql = ' where ';
    	        $con = 0;
    	        foreach($arr as $key=>$val){
    	           $con++;
    	           if($con==count($arr)){
    	              $sql.=$key."="."'".$val."'";
    	           }else{
    	              $sql.=$key."="."'".$val."'"." and ";
    	           }
                }	
    		return $this->pdo->query('select * from '.$this->table.$sql)->fetch();
    	}
    }
}