<?php
class articlesModel extends Model {    
	public function addArticle($data) {
		$sql = "INSERT INTO `articles`(`type`,`title`,`content`,`categorie`) VALUE (";
		$sql .= "'".$data['type']."', ";
		$sql .= "'".$data['title']."', ";
		$sql .= "'".$data['content']."', ";
		$sql .= "'".$data['categorie']."')";
		$this->db->query($sql);
		return $sql;
	}
    
	public function getArticles($data = array(), $sort = array(), $options = array()) {
		$sql = "SELECT * FROM `articles`";
		
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
    
	public function deleteArticles($data = array()) {
		$sql = "DELETE FROM `articles`";
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
    
	public function updateArticles($new_data = array(), $data = array()) {
		$sql = "UPDATE `articles`";
		
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
}
?>
