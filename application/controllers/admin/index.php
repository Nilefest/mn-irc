<?php

class indexController extends Controller {
	public function index() {
        if(!$this->user->isLogged()){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        
        $this->config->title = "МІРЦ";
        $this->config->description = "ADM";
        $this->data['title'] = $this->config->description;
		$this->getChild(array('common/header_admin', 'common/footer_admin'));
		return $this->load->view('admin/index', $this->data);
	}
}
?>