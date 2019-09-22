<?php
class indexController extends Controller {
	public function index() {
        $this->load->model('articles');
        $this->data['about'] = $this->articlesModel->getArticles(array('title' => 'news'))[0]['content'];
        
        $this->load->model('news');
        $this->data['news'] = $this->newsModel->getNews(array(), array('date' => 'DESC'));
        
        $this->config->css = array('news');
        $this->config->description = "Новини";
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('news/index', $this->data);
	}
}
?>