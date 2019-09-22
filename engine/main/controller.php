<?php

abstract class Controller {
	private $registry;
	protected $data = array();
	
	public function __construct($registry) {
		$this->registry = $registry;
	}
	
	public function __get($key) {
		return $this->registry->$key;
	}
	
	public function __set($key, $value) {
		$this->registry->$key = $value;
	}
	
	public function getChild($child = array()) {
		foreach($child as $item) {
			$this->action->make($item);
            $this->data[basename($item)] = $this->action->go(true);
		}
	}
    
    public function ppa($arr = array()){
        echo "<pre>";
        print_r($arr);
        echo "</pre>";
    }
}
?>
