<h1>Отзывы</h1>
<p><a href="/admin/reviews/add">Добавить отзыв</a></p>
<ul>
	<?php foreach($data as $item): ?>
		<li>
			<p> <?=$item['Review']['title']?></p>
			<p> <?=$item['Review']['body']?></p>
			(<a href="reviews/edit/<?=$item['Review']['id']?>">Редактировать</a> | 
	<?php echo $this->Form->postLink('Удалить', array('action' => 'admin_delete', $item['Review']['id']), array('confirm' => 'Подтвердите удаление')); ?>
	)
		</li>
	<?php endforeach ?>
</ul>