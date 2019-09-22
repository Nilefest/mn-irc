<?php

class User {
	private $registry;
	private $id = null;
	private $name = null;
	private $lvl = -1;

  	public function __construct($registry) {
		$this->registry = $registry;
		if (isset($this->registry->session->data['mirc_login'])) {
			$query = $this->registry->db->query("SELECT * FROM users WHERE login = '".$this->registry->session->data['mirc_login']."' AND pass = '".md5($this->registry->session->data['mirc_pass'])."'");
            if(!empty($query)){
                $this->id = $query[0]['id'];
                $this->name = $query[0]['name'];
                $this->lvl = $query[0]['lvl'];
            }
            else{
                $this->logout();
            }
		}
  	}

  	public function logout() {
		unset($this->registry->session->data['mirc_login']);
		unset($this->registry->session->data['mirc_pass']);
	
		$this->id = null;
		$this->name = null;
		$this->lvl = -1;
  	}
  
  	public function isLogged() {
        if($this->lvl >= 0){
            return true;
        }
        else{
            return false;
        }
  	}
  
  	public function getId() {
		return $this->id;
  	}
	
  	public function getName() {
		return $this->name;
  	}
	
  	public function getLvl() {
		return $this->lvl;
  	}
}
?>
