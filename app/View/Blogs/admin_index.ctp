<div class="admin">
	<div class="ad_up">
		<h2>Полезная информация</h2>
		<a class="add_b" href="blog/add">+ Добавить статью</a>
	</div>
<ul class="art_list">
<?php foreach($blogs as $item) : ?>
	<li><?=$item['Blog']['title']?> (<a href="blog/edit/<?=$item['Blog']['id']?>">Редактировать</a> | 
	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Blog']['id']), array('confirm' => 'Подтвердите удаление')); ?>
	)</li>
<?php endforeach ?>
</ul>
</div>