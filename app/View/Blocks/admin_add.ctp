<div class="admin_add gall_add">
	<div class="ad_up">
		<h2>Добавление блока</h2>
	</div>
<?php 

echo $this->Form->create('Block', array('type' => 'file'));
echo $this->Form->input('service_id', array('label' => 'Выберите категорию:'));
echo $this->Form->input('title',array('label' => 'Тайтл:'));
echo $this->Form->input('img', array('label' => 'Изображение:','type' => 'file'));
echo $this->Form->end('Создать');
?>
</div>