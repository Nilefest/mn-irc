<?php

class indexController extends Controller {
	public function index() {
        
        if(!$this->user->isLogged()){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        if(!strpos(" ".$this->user->getLvl()." ", '0') && !strpos(" ".$this->user->getLvl()." ", '1')){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        
        $this->load->model('articles');
        if(isset($this->request->post['save'])){
            $this->articlesModel->updateArticles(array('content' => $this->request->post['article']),array('title' => "about"));
        }
        $this->data['about'] = htmlspecialchars_decode($this->articlesModel->getArticles(array('title' => 'about'))[0]['content']);
        
        $this->config->title = "ADM";
        $this->config->description = "Главная страница О НАС";
        $this->data['title'] = $this->config->description;
		$this->getChild(array('common/header_admin', 'common/footer_admin'));
		return $this->load->view('admin/about/index', $this->data);
	}
}
?>