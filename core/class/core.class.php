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

class SS_Model
{
    protected $table;
    private   $pdo;
    public function __construct($table=null){
    	if(empty($table)){
    		ssError('ssM函数参数不对,请根据手册传参');
    	}else{
            $this->table = $table;
    	    $this->pdo = ssConMysql();
        }
    }  
    /*
     * 默认无参,从当前模型表选出所有数据
     */ 
    public function selectAll(){
    	return $this->pdo->query('select * from '.$this->table)->fetchAll();
    }
    /*
     * $arr not null 以关联数组的模式传参
     */
    public function selectOne($arr=null){
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
    		return $this->pdo->query('select * from '.$this->table.$sql)->fetchAll();
    	}
    }
    /*
     * $str $str2 默认分割select语句,例:select * from test where id =1
     * $str = ' * ';
     * $str2 = "id = '1'" 注意:传参中字符串务必使用单引号,外边用双引号
     */
    public function selectQuery($str1=null,$str2=null){
    	if(empty($str1)){
    		ssError('selectQuery的参数不对,请根据手册传参');
    	}else{
    	    if(empty($str2)){
    	        return  $this->pdo->query(' select '.$str1.' from '.$this->table)->fetchAll();
    	    }else{
    	        return  $this->pdo->query(' select '.$str1.' from '.$this->table.' where '.$str2)->fetchAll();
    	    }
    	}
    }
    
    /*
     * 最开放式的语句
     * $str 最完整的sql语句，但是单位select语句的时候,但会结果集数组,否则直接执行该语句
     */
     public function query($str=null){
    	if(empty($str)){
    		ssError('query参数不对，请根据手册传参');
    	}else{
    	    if(substr($str,0,1)=='s'){
    	        return $this->pdo->query($str)->fetchAll();
    	    }else{
    	        if($this->pdo->query($str)){return true;}else{return false;}
    	    }
    		
    	}
    } 
    
    /*
     * 默认删除模型所有数据,不需要传值
     */
    public function deleteAll(){
    	return $this->pdo->query('delete from '.$this->table);
    }
    
    /*
     * 和上述selectOne参数规则一致
     */
    public function deleteOne($arr=null){
    	if(empty($arr)){
    		ssError('deleteOne参数不对，请使用手册传参');
    	}else{
    		$sql = ' where ';
    		$con = 0;
    		foreach($arr as $key=>$val){
    			$con++;
    			if($con==count($arr)){
    				$sql.=$key." = "."'".$val."'";
    			}else{
    				$sql.=$key." = "."'".$val."'"." and ";
    			}
    		}
    		return $this->pdo->query('delete  from '.$this->table.$sql);
    	}
    }
    
    
}