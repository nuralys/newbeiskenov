<div class="admin">
	<div class="ad_up">
		<h2>Новости и Акции</h2>
		<a class="add_b" href="news/add">+ Добавить новость/акцию</a>
	</div>
<ul class="art_list">
<?php foreach($news as $item) : ?>
	<li><?=$item['News']['title']?> (<a href="news/edit/<?=$item['News']['id']?>">Редактировать</a> | 
	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['News']['id']), array('confirm' => 'Подтвердите удаление')); ?>
	)</li>
<?php endforeach ?>
</ul>
</div>