<h1>Редактирование</h1>
<?php 
echo $this->Form->create('Block', array('type' => 'file'));
echo $this->Form->input('service_id', array('label' => 'Выберите услугу'));
echo $this->Form->input('title');
echo $this->Form->input('img', array('label' => 'Изображение', 'type' => 'file'));
echo $this->Form->end('Сохранить');

