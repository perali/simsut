<?php
class welcomeModel extends SS_Model{
    function test(){
    	return $this->ssM('test')->selectAll();
    }
}