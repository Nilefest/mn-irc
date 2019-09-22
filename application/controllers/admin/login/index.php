<?php
class indexController extends Controller {
	public function index() {        
        if($this->user->isLogged()){
            $this->response->redirect($this->config->domen.'admin');
        }
        
        $this->config->css = array('login');
        $this->config->description = 'LogIn';
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('admin/login/index', $this->data);
	}
}
?>