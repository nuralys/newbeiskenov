<?php

class GalleryController extends AppController{

	public $uses = array('Gallery' ,'Service');

	public function admin_index(){
		$data = $this->Gallery->find('all');
		$this->set(compact('data'));
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Gallery->create();
			$data = $this->request->data['Gallery'];
			if(!$data['img']['name']){
				unset($data['img']);
			}
			if($this->Gallery->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
			$categories = $this->Gallery->Category->find('list');
			$this->set(compact('categories'));
	}

	public function admin_edit($id){

	}

	public function admin_delete($id){
		if (!$this->Gallery->exists($id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Gallery->delete($id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}
		return $this->redirect($this->referer());
	}

	public function index(){
		$title_for_layout = 'Галерея';
		$random = $this->Gallery->find('all', array(
			'limit' => 9,
			'order' => 'rand()'
			));
		$plastika_litsa = $this->Gallery->find('all', array(
			'conditions' => array('category_id' => 1)
			));
		$grud = $this->Gallery->find('all', array(
			'conditions' => array('category_id' => 2)
			));
		$plastika_tela = $this->Gallery->find('all', array(
			'conditions' => array('category_id' => 3)
			));
		$parent_services = $this->Service->find('all',array(
			'conditions' => array('parent_id'=>0)
			));
		$this->set(compact('random', 'plastika_litsa', 'grud', 'plastika_tela', 'parent_services', 'title_for_layout'));
	}
}