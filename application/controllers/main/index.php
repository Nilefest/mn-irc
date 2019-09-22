<?php
class indexController extends Controller {
	public function index() {
        
        $this->load->model('articles');
        $this->data['article'] = $this->articlesModel->getArticles(array('title' => 'about'))[0]['content'];
        
        $this->data['article'] = htmlspecialchars_decode($this->data['article']);
        
        $this->config->main = true;
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('main/index', $this->data);
	}
}
?>