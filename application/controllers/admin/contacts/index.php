<?php

class indexController extends Controller {
	public function index() {
        
        if(!$this->user->isLogged()){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        if(!strpos(" ".$this->user->getLvl()." ", '0') && !strpos(" ".$this->user->getLvl()." ", '1')){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        
        $this->config->title = "ADM";
        $this->config->description = "Контактные данные";
        $this->data['title'] = $this->config->description;
		$this->getChild(array('common/header_admin', 'common/footer_admin'));
		return $this->load->view('admin/contacts/index', $this->data);
	}
}
?>