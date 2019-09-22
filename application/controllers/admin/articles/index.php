<?php

class indexController extends Controller {
	public function index() {
        
        if(!$this->user->isLogged()){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        if(!strpos(" ".$this->user->getLvl()." ", '0') && !strpos(" ".$this->user->getLvl()." ", '1')){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        
        $this->load->model('articleCategories');
        $this->data['categories'] = $this->articleCategoriesModel->getArticleCategories();
        
        $this->load->model('articles');
        if(isset($this->request->post['add'])) $this->articlesModel->addArticle(array('type' => 'article', 'title' => $this->request->post['title'], 'content' => $this->request->post['article']));
        else if(isset($this->request->post['rem'])) $this->articlesModel->deleteArticles(array('id' => $this->request->post['id']));
        
        $this->data['articles'] = $this->articlesModel->getArticles(array('type' => 'article'));
        $this->data['domen'] = $this->config->domen;
        
        $this->config->title = "ADM";
        $this->config->description = "Статьи";
        $this->data['title'] = $this->config->description;
		$this->getChild(array('common/header_admin', 'common/footer_admin'));
		return $this->load->view('admin/articles/index', $this->data);/**/
	}
}
?>