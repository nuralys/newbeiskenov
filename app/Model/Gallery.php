<?php 

class Gallery extends AppModel{
	public $belongsTo = 'Category';

	public $validate = array(
		'title' => array(
			'rule' => 'notEmpty',
			'message' => 'Введите название товара'
		),
		'img' => array(
			'uploadError' => array(
				'rule' => 'uploadError',
				'message' => 'Ошибка загрузки картинки',
				'allowEmpty' => true
			),
			'mimeType' => array(
				'rule' => array('mimeType', array('image/gif', 'image/png', 'image/jpg', 'image/jpeg')),
				'message' => 'Разрешены к загрузке картинки JPG, PNG и GIF',
				'allowEmpty' => true
			),
			'fileSize' => array(
				'rule' => array('fileSize', '<=', '1MB'),
				'message' => 'Максимальный размер файла - 1 Мб',
				'allowEmpty' => true
			),
			'customUploadImg' => array(
				'rule' => 'customUploadImg',
				'message' => 'Ошибка обработки загрузки картинки',
				'allowEmpty' => true
			)
		)
	);

	public function customUploadImg($file = array()){
		if(!is_uploaded_file($file['img']['tmp_name'])){
			return false;
		}
		$ext = strtolower(preg_replace("#.+\.([a-z]+)$#", "$1", $file['img']['name']));
		$fileName = $this->genNameFile($ext);
		$path = WWW_ROOT . 'img/gallery/' . $fileName;
		//$path_th = WWW_ROOT . 'img/gallery/thumbs/' . $fileName;
		if(!move_uploaded_file($file['img']['tmp_name'], $path)){
			return false;
		}
		//$this->resizeImg($path, $path_th, 165, 165, $ext);
		$this->data[$this->alias]['img'] = $fileName;
		return true;
	}

	public function genNameFile($ext){
		$name = md5(microtime()) . ".{$ext}";
		if(is_file(WWW_ROOT . 'img/gallery/' . $name)){
			$name = $this->genNameFile($ext);
		}
		return $name;
	}
}