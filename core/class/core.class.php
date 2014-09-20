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
    public function __construct($table=null){
    	empty($table)?$this->table = get_class($this):$this->table = $table;
    	$this->pdo = ssConMysql();
    }
   
    public function select(){
    	$result = $this->pdo->query('select * from '.$this->table)->fetchAll();
    	return $result;
    }
}