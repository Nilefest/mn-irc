<?php

class footer_adminController extends Controller {
	public function index() {        
        $this->data['js'] = $this->config->js;        
		return $this->load->view('common/footer_admin', $this->data);
	}
}
?>
