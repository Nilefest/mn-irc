<?php
class indexController extends Controller {
	public function index($id = false) {
        $this->response->redirect($this->config->domen);  
	}
    
    public function show($id = false) {
        if(!$id) $this->response->redirect($this->config->domen);
        
        $this->load->model('documents');
        $document = $this->documentsModel->getDocuments(array('id' => $id))[0];
        $this->data['document'] = $document['content'];
        
        if(empty($document)) $this->response->redirect($this->config->domen);
        
        $this->data['document'] = htmlspecialchars_decode($this->data['document']);
        
        $this->config->css = array('documents');
        $this->config->title = "Документи";
        $this->config->description = $document['title'];
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('document/index', $this->data);        
    }
}
?>