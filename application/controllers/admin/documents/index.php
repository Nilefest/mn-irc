<?php

class indexController extends Controller {
	public function index() {
        
        if(!$this->user->isLogged()){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        if(!strpos(" ".$this->user->getLvl()." ", '0') && !strpos(" ".$this->user->getLvl()." ", '1')){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        
        $this->load->model('documents');
        if(isset($this->request->post['add'])){
            $this->documentsModel->addDocument(array('title' => $this->request->post['title'], 'content' => $this->request->post['article']));
        }
        else if(isset($this->request->post['rem'])){
            $this->documentsModel->deleteDocuments(array('id' => $this->request->post['id']));
        }
        $this->data['documents'] = $this->documentsModel->getDocuments();
        
        $this->data['domen'] = $this->config->domen;
        
        $this->config->title = "ADM";
        $this->config->description = "Документы";
        $this->data['title'] = $this->config->description;
		$this->getChild(array('common/header_admin', 'common/footer_admin'));
		return $this->load->view('admin/documents/index', $this->data);
	}
}
?>