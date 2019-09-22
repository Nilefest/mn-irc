<?php

class indexController extends Controller {
	public function index() {
        
        if(!$this->user->isLogged()){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        if(!strpos(" ".$this->user->getLvl()." ", '0')){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        
        $this->config->title = "ADM";
        $this->config->description = "Пользователи";
        $this->data['title'] = $this->config->description;
		$this->getChild(array('common/header_admin', 'common/footer_admin'));
		return $this->load->view('admin/users/index', $this->data);
	}
}
?>