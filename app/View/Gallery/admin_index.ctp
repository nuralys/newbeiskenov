<div class="admin_add">
	<div class="ad_up">
		<h2>Галерея</h2>
		<a class="add_b" href="gallery/add">+ Добавить</a>
	</div>
<ul class="galer_a">
<?php foreach($data as $item) : ?>
	<li>
		<div><?=$item['Gallery']['title']?> ( 
		<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Gallery']['id']), array('confirm' => 'Подтвердите удаление')); ?>)</div>
		<img src="/img/gallery/<?=$item['Gallery']['img']?>" width="200">		
	</li>
<?php endforeach ?>
</ul>
</div>