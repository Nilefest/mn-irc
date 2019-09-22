<?php

class footerController extends Controller {
	public function index() {
        
        $this->load->model('documents');
        $this->data['documents'] = $this->documentsModel->getDocuments();
        
        $this->load->model('news');
        $this->data['news'] = $this->newsModel->getNews();
        
        $this->load->model('contacts');
        $this->data['map'] = $this->contactsModel->getContacts(array('type' => 'map'))[0]['contact'];
        
        $this->data['js'] = $this->config->js;        
		return $this->load->view('common/footer', $this->data);
	}
}
?>
