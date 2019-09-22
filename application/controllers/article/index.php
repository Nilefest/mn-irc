<?php
class indexController extends Controller {
	public function index($id = false) {
        $this->response->redirect($this->config->domen);  
	}
    
    public function show($id = false) {
        if(!$id) $this->response->redirect($this->config->domen);
        
        $this->load->model('articles');
        $article = $this->articlesModel->getArticles(array('id' => $id, 'type' => 'article'))[0];
        $this->data['article'] = $article;
        
        if(empty($article)) $this->response->redirect($this->config->domen);
        
        $this->data['article']['content'] = htmlspecialchars_decode($this->data['article']['content']);

        $this->config->title = "Статті";
        $this->config->description = $article['title'];
		$this->getChild(array('common/header', 'common/footer'));
		return $this->load->view('article/index', $this->data);        
    }
}
?>