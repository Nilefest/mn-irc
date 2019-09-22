<?php
class newsModel extends Model {    
	public function addNew($data) {
		$sql = "INSERT INTO `news`(`title`,`content`,`date`) VALUE (";
		$sql .= "'".$data['title']."', ";
		$sql .= "'".$data['content']."',";
		$sql .= "'".date('d-m-Y')."')";
		$this->db->query($sql);
		return $sql;
	}
    
	public function getNews($data = array(), $sort = array(), $options = array()) {
		$sql = "SELECT * FROM `news`";
		
		if(!empty($data)) {
			$count = count($data);
			$sql .= " WHERE";
			foreach($data as $key => $value) {
				$sql .= " $key = '" . $value . "'";
				
				$count--;
				if($count > 0) $sql .= " AND";
			}
		}
        
		if(!empty($sort)) {
			$count = count($sort);
			$sql .= " ORDER BY";
			foreach($sort as $key => $value) {
				$sql .= " $key " . $value;
				
				$count--;
				if($count > 0) $sql .= ",";
			}
		}
		
		if(!empty($options)) {
			if ($options['start'] < 0) {
				$options['start'] = 0;
			}
			if ($options['limit'] < 1) {
				$options['limit'] = 20;
			}
			$sql .= " LIMIT " . (int)$options['start'] . "," . (int)$options['limit'];
		}
		$query = $this->db->query($sql);
        
		return $query;
	}
    
	public function deleteNews($data = array()) {
		$sql = "DELETE FROM `news`";
		if(!empty($data)) {
			$count = count($data);
			$sql .= " WHERE";
			foreach($data as $key => $value) {
				$sql .= " $key = '" . $value . "'";				
				$count--;
				if($count > 0) $sql .= " AND";
			}
		}
		$query = $this->db->query($sql);
		return $sql;
	}
    
	public function updateNews($new_data = array(), $data = array()) {
		$sql = "UPDATE `news`";
		
        if(!empty($new_data)) {
			$count = count($new_data);
			$sql .= " SET";
			foreach($new_data as $key => $value) {
				$sql .= " $key = '" . $value . "'";
                
				$count--;
				if($count > 0) $sql .= ", ";
			}
		}
        else{
            return false;
        }
        
        if(!empty($data)) {
			$count = count($data);
			$sql .= " WHERE";
			foreach($data as $key => $value) {
				$sql .= " $key = '" . $value . "'";
                
				$count--;
				if($count > 0) $sql .= " AND";
			}
		}
		$query = $this->db->query($sql);
        
		return $sql;
	}
    
	public function maxId() {
		$sql = "SELECT max(`id`) as 'max' FROM `news`";
        
		$query = $this->db->query($sql);
        
		return $query[0]['max'];
	}
}
?>
