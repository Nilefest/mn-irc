<?php
class indexController extends Controller {
	public function index() {
        $this->load->model('contacts');
        $this->data['map'] = $this->contactsModel->getContacts(array('type' => 'map'))[0]['contact'];
        $this->data['phones'] = $this->contactsModel->getContacts(array('type' => 'phone'));
        $this->data['social'] = $this->contactsModel->getContacts(array('type' => 'social'));
        $this->data['mail'] = $this->contactsModel->getContacts(array('type' => 'mail'))[0]['contact'];
        
        $this->config->description = "Зв'язок з нами";
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('contacts/index', $this->data);
	}
}
?>