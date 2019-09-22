<?php

class indexController extends Controller {
	public function index() {
        
        if(!$this->user->isLogged()){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        if(!strpos(" ".$this->user->getLvl()." ", '0') && !strpos(" ".$this->user->getLvl()." ", '1')){
            $this->response->redirect($this->config->domen.'admin/login');
        }
        
        $this->load->model('news');
        if(isset($this->request->post['add'])){
            $this->newsModel->addNew(array('title' => $this->request->post['title'], 'content' => $this->request->post['article']));
            $max_id = $this->newsModel->maxId();
            if(!empty($this->request->files['img']['tmp_name'])){
                copy($this->request->files['img']['tmp_name'],APPLICATION_DIR."public/img/news/".$max_id.".PNG");
            }
        }
        else if(isset($this->request->post['rem'])){
            $this->newsModel->deleteNews(array('id' => $this->request->post['id']));
        }
        $this->data['news'] = $this->newsModel->getNews();
        
        $this->data['domen'] = $this->config->domen;
        
        $this->config->title = "ADM";
        $this->config->description = "Новости";
        $this->data['title'] = $this->config->description;
		$this->getChild(array('common/header_admin', 'common/footer_admin'));
		return $this->load->view('admin/news/index', $this->data);
	}
}
?>