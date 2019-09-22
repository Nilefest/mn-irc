<?php

class DB {
	private $driver;
	
	public function __construct($driver, $hostname, $port, $username, $password, $database) {
		$class = $driver . 'Driver';
		if(is_readable(ENGINE_DIR . 'database/' . $driver . '.php')) {
			require_once(ENGINE_DIR . 'database/' . $driver . '.php');
		} else {
			exit('Ошибка: Не удалось загрузить драйвер базы данных ' . $driver . '!');
		}
		$this->driver = new $class($hostname, $port, $username, $password, $database);
	}
		
  	public function query($sql) {
		return $this->driver->query($sql);
  	}
}
?>
