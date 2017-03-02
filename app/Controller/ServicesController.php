<?php
App::uses('CakeEmail', 'Network/Email');
class ServicesController extends AppController{

	public $uses = array('Service', 'Block', 'Review');

	public function admin_index(){
		$service_tree = $this->Service->find('threaded');
		$services1 = $this->_catMenuHtml($service_tree);
		$this->set(compact('services1', 'service_tree'));
	}

	public function index($service_alias = null){
		if(is_null($service_alias)){
			throw new NotFoundException("Такой страницы нету");
		}

		$service = $this->Service->findByAlias($service_alias);
		if(!$service){
			throw new NotFoundException("Такой страницы нету");
		}
		$services = $this->Service->find('all');
		$service_tree = $this->Service->find('threaded');
		$service_id = $service['Service']['id'];
		$service2 = $this->Service->query("SELECT * FROM services WHERE id=$service_id");
		$reviews = $this->Review->find('all', array(
			'conditions' => array('service_id' => $service_id),
			'order' => array('Review.id' => 'desc')
		));
		//мета теги
		$title_for_layout = $service['Service']['title'];
		// var_dump($service2);
		$meta['keywords'] = $service['Service']['kl_slova'];
		// $meta['description'] = $service['Service']['description'];
		$meta['description'] = $service2[0]['services']['metaDescription'];
		//Получаем 1 уровень вложенных услуг
		$getChildrenServices = $this->_getChildrenServices($services, $service_id);
		// debug($getChildrenServices);
		$blocks = $this->getRightBlock($service_id);
		
		$breadcrumbs = $this->_searchParent($services, $service);

		$parent_services = $this->Service->find('all',array(
			'conditions' => array('parent_id'=>0)
			));
		$this->set(compact('services', 'service_alias', 'service', 'service_id', 'title_for_layout', 'meta', 'breadcrumbs', 'getChildrenServices', 
			'blocks', 'service_tree', 'parent_services', 'reviews'));
	}

	protected function _searchParent($services, $service){
		$data = array();
		foreach ($services as $v) {
			if($v['Service']['id'] == $service['Service']['parent_id']){
				$data['Breadcrumbs']['id'] = $v['Service']['id'];
				$data['Breadcrumbs']['title'] = $v['Service']['title'];
				$data['Breadcrumbs']['alias'] = $v['Service']['alias'];
				$data['Breadcrumbs']['parent_id'] = $v['Service']['parent_id'];
				// $data['test'] = $data[$service['Service']['parent_id']]['Breadcrumbs']['parent_id'];
				// $this->_searchParent($services, $data['test']);
			}
		}
		return $data;
	}

	protected function _getChildrenServices($services, $service_id){
		$data = array();
		foreach ($services as $item) {
			if($item['Service']['parent_id'] == $service_id){
				$data[$service_id]['Children'][$item['Service']['id']] = $item['Service'];
			}
		}
		return $data;
	}

	public function getRightBlock($service_id){
		$blocks = $this->Block->find('all', array(
			'conditions' => array(
				'service_id' => $service_id
				),
			));
		return $blocks;
	}


	protected function _catMenuHtml($service_tree = false){
		if(!$service_tree) return false;
		$html = '';
		foreach ($service_tree as $item) {
			$html .= $this->_catMenuTemplate($item);
		}
		return $html;
	}

	protected function _catMenuTemplate($services1){
		ob_start();
		include APP . "View/Elements/services_tpl.ctp";
		return ob_get_clean();
	}

	public function admin_add(){
		if($this->request->is('post')){
			$this->Service->create();

			// $data = $this->request->data['Service'];
			$slug = Inflector::slug($this->request->data['Service']['title']);
			$data[] = $this->request->data['Service'];
			$data[] = array('alias'=>$slug);
			$data = array_merge($data[0],$data[1]);
			
			if($this->Service->save($data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				// debug($data);
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}
			$s_list = $this->Service->find('list');
			$this->set(compact('s_list'));
	}

	public function admin_edit($service_id){
		$service = $this->Service->findById($service_id);
		if(!$service_id){
			throw new NotFoundException('Такой страницы нет...');
		}
		if($this->request->is(array('post', 'put'))){
			$this->Service->id = $service_id;
			// var_dump($this->request->data);
			if($this->Service->save($this->request->data)){
				$this->Session->setFlash('Сохранено', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
			}
		}

		//Заполняем данные в форме
		if(!$this->request->data){
			$this->request->data = $service;
			$s_list = $this->Service->find('list');
			$this->set(compact('service_id', 'service', 's_list'));
		}

		$this->set(compact('service_id'));

	}

	public function admin_delete($service_id){
		$service_id = $service_id;
		$this->set(compact('service_id'));
		// if (!$this->Service->exists($service_id)) {
		// 	throw new NotFounddException('Такой статьи нет');
		// }
		// if($this->Service->delete($service_id)){
		// 	$this->Session->setFlash('Удалено', 'default', array(), 'good');
		// }else{
		// 	$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		// }
		// return $this->redirect($this->referer());
	}
	public function admin_deleteconfirm($service_id){
		if (!$this->Service->exists($service_id)) {
			throw new NotFounddException('Такой статьи нет');
		}
		if($this->Service->delete($service_id)){
			$this->Session->setFlash('Удалено', 'default', array(), 'good');
		}else{
			$this->Session->setFlash('Ошибка', 'default', array(), 'bad');
		}

		return $this->redirect('/admin');
	}

	protected function _catsSelect($cats, $category_id, $tab = ''){
		$string = '';
		foreach($cats as $item){
			$string .= $this->_catsSelectTemplate($item, $category_id, $tab);
		}
		return $string;
	}

	protected function _catsSelectTemplate($category, $category_id, $tab){
		ob_start();
		include APP . "View/Elements/cats_select_tpl.ctp";
		return ob_get_clean();
	}

	public function sendmail(){
		var_dump($this->request->data);
		if( !empty($this->request->data) ){
			$email = new CakeEmail();
			// $email->config('Smtp');
			$email->from(array('i.beiskenov@yandex.ru' => 'Бейскенов Ильяс Саматович - beiskenov.com'));
			$email->to('i.beiskenov@yandex.ru');
			$email->subject('Новая заявка с сайта');
			$message = 'ФИО: '. $this->request->data['Service']['fio'] . ' Телефон: '. $this->request->data['Service']['phone'] . ' Почта: ' . $this->request->data['Service']['email'];
			if( $email->send($message) ){
				$this->Session->setFlash('<script>alert("Письмо успешно отправлено")</script>', 'default', array(), 'good');
				return $this->redirect($this->referer());
			}else{
				$this->Session->setFlash('Ошибка!', 'default', array(), 'bad');
				return $this->redirect($this->referer());
			}
		}
	}

}