<div class="admin_add gall_add">
	<div class="ad_up">
		<h2>Добавление</h2>
	</div>
<?php 
echo $this->Form->create('Gallery', array('type' => 'file'));
echo $this->Form->input('category_id', array('label' => 'Выберите категорию:'));
echo $this->Form->input('title', array('label' => 'Название:'));
//echo $this->Form->input('body', array('label' => 'Текст', 'id' => 'editor'));
echo $this->Form->input('img', array('label' => 'Изображение:', 'type' => 'file'));
echo $this->Form->end('Создать');
?>
</div>