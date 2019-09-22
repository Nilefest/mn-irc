<?php
class indexController extends Controller {
	public function index() {
        if(isset($this->request->post['send'])){
            $this->load->model('comments');
            $this->commentsModel->addComment(array('name' => $this->request->post['name'],
                                                   'title' => $this->request->post['title'],
                                                   'content' => $this->request->post['message']));
        }
        
        $this->load->model('comments');
        $this->data['comments'] = $this->commentsModel->getComments();
        
        $this->config->css = array('comments');
        $this->config->description = 'Відгуки';
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('comments/index', $this->data);
	}
}
?>