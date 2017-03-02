<div class="container">
	<div class="cr">
		<div class="category-list__title">
			Полезная информация
		</div>
		<ul>
			<li><a href="/">Главная</a></li>
			<li>Полезная информация</li>
		</ul>
		<div class="content">
			<ul class="news-list">
			<?php foreach($blogs as $item) : ?>
				<li>
					<div class="news-item">
						<div class="news-item__img">
							<img src="/img/blog/thumbs/<?=$item['Blog']['img'] ?>" alt="<?=$item['Blog']['title']?>">
						</div>
						<a href="/blog/<?=$item['Blog']['id']?>" class="news-item__title">
							<?=$item['Blog']['title']?>
						</a>
						<div class="news-item__date">
							<?php echo $this->Time->format($item['Blog']['date'], '%d-%m-%Y', 'invalid'); ?>
						</div>
						<p>
							Пластическая хирургия часто становится темой публикаций в СМИ и обсуждений в социальных сетях и на форумах. Клиенты хирургов делятся собственными впечатлениями, а те, кто только подумывает об операции...
						</p>
					</div>
				</li>
				<?php endforeach ?>
			</ul>
		</div>
	</div>
</div>