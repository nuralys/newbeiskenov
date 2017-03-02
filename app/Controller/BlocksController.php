<?php 

class BlocksController extends AppController{

	public function index(){

	}
	public function admin_index(){
		$blocks = $this->Block->find('all');
		$this->set(compact('blocks'));
	}
	public function admin_add(){
		if($this->request->is('post')){
			$this->Block->create();
			$data = $this->request->data['Block'];
			if(!$data['img']['name']){
				unset($data['img']);
			}
			if($this->Block->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect('/admin/blocks');
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
			$services = $this->Block->Service->find('list');
			$this->set(compact('services'));
	}

	public function admin_edit($block_id){
		if(is_null($block_id) || !(int)$block_id){
			throw new NotFoundException('Такой страницы нет...');
		}
		$block = $this->Block->findById($block_id);
		if(!$block_id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Block->id = $block_id;
			$data1 = $this->request->data['Block'];
			if(!$data1['img']['name']){
				unset($data1['img']);
			}
			if($this->Block->save($data1)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $block;
			$services = $this->Block->Service->find('list');
			$this->set(compact('block_id', 'services', 'block'));
		}
	}

	public function admin_delete($block_id){
		if (!$this->Block->exists($block_id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Block->delete($block_id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}

		return $this->redirect('/admin/blocks');
	}
}