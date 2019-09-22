<?php
/*
    Базовый класс для модели
*/

abstract class Model {
	private $registry;
	
	public function __construct($registry) {
		$this->registry = $registry;
	}
	
	public function __get($key) {
		return $this->registry->$key;
	}
	
	public function __set($key, $value) {
		$this->registry->$key = $value;
	}
    
    public function getMaxId($table){
        $sql = "SELECT MAX(id) as 'maxid' FROM $table";
		$query = $this->db->query($sql);
		return $query;
    }
    
    public function getCount($table, $column = array(), $group_by = false){
        $sql = "SELECT";
        if(!empty($column)) foreach($column as $key => $value) $sql .= " `" . $value . "`,";
        $sql .= " count(id) as 'count' FROM $table";
        if($group_by) $sql .= " GROUP BY ".$group_by;
		$query = $this->db->query($sql);
		return $query;
    }
    
    public function query($sql){
		$query = $this->db->query($sql);
		return $query;
    }
}
?>
