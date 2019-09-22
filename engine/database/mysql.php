<?php
/*

*/
final class mysqlDriver {
	private $link;
	private $count = 0;
	public function __construct($hostname, $port, $username, $password, $database) {
        $hostname .= ':'.$port;
		if (!$this->link = @mysql_connect($hostname, $username, $password)) {
	  		exit('Ошибка: Не удалось соединиться с сервером базы данных!');
		}

		if (!mysql_select_db($database, $this->link)) {
	  		exit('Ошибка: Не удалось соединиться с базой ' . $database);
		}
		
		mysql_query("SET NAMES 'utf8'", $this->link);
		mysql_query("SET CHARACTER SET utf8", $this->link);
		mysql_query("SET CHARACTER_SET_CONNECTION=utf8", $this->link);
		mysql_query("SET SQL_MODE = ''", $this->link);
  	}
		
  	public function query($sql) {
		$resource = mysql_query($sql, $this->link);
		
		$this->count++;
		
		if ($resource) {
			if (is_resource($resource)) {
				$i = 0;
				$data = array();
				
				while($result = mysql_fetch_assoc($resource)) {
					$data[$i] = $result;
					$i++;
				}
				
				mysql_free_result($resource);
				
				$query = new stdClass();
				$query->row = isset($data[0]) ? $data[0] : array();
				$query->rows = $data;
				$query->num_rows = $i;
				
				unset($data);
				return $query;	
			} else {
				return true;
			}
		} else {
			exit('Ошибка: ' . mysql_error($this->link) . '<br>Номер ошибки: ' . mysql_errno($this->link) . '<br>' . $sql);
		}
  	}
	
	public function __destruct() {
		mysql_close($this->link);
	}
}
?>
