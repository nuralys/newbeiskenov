<?php

class NewsController extends AppController{

	public $uses = array('News', 'Blog', 'Service');
	public function admin_index(){
		$news = $this->News->find('all');
		
		$this->set(compact('news'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->News->create();
			$data = $this->request->data['News'];
			// debug($data);
			 if(!$data['img']['name']){
			 	unset($data['img']);
			}
			if($this->News->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
	}
	public function admin_edit($id){
		if(is_null($id) || !(int)$id || !$this->News->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$data = $this->News->findById($id);
		if(!$id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->News->id = $id;
			$data1 = $this->request->data['News'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->News->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $data;
			
			$this->set(compact('id', 'data'));
		}
	}

	public function admin_delete($id){
		if (!$this->News->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->News->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function index(){
		$news = $this->News->find('all',array(
			
			'order' => array('created' => 'desc')
			));
		$blog = $this->Blog->find('all');
		$parent_services = $this->Service->find('all',array(
			'conditions' => array('parent_id'=>0),
			
			));
		$title_for_layout = 'Новости, акции';
		$meta['keywords'] = 'новости, акции, события, хирургия';
		$meta['description'] = 'Новости из мира медицины, а также акции и события хирургии';
		$this->set(compact('news', 'blog', 'parent_services', 'title_for_layout', 'meta'));
	}

	public function view($id){
		if(is_null($id) || !(int)$id || !$this->News->exists($id)){
			throw new NotFoundException('Такой страницы нет...');
		}
		$post = $this->News->findById($id);
		$news = $this->News->find('all', array(
			'fields' => array('id', 'title')
			));
		$parent_services = $this->Service->find('all',array(
			'conditions' => array('parent_id'=>0)
			));
		
		$title_for_layout = $post['News']['title'];
		$meta['keywords'] =$post['News']['keywords'];
		$meta['description'] =$post['News']['description'];
		$this->set(compact('post', 'news', 'parent_services', 'title_for_layout', 'meta'));
	}
}