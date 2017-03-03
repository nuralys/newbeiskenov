<div class="container">
	<div class="cr">
		<div class="category-list__title">
			<h1> Новости и акции</h1>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>Новости и акции</li>
			</ul>
		</div>
		
		<div class="content">
			<ul class="news-list">
			<?php foreach($news as $item) : ?>
				<li>
					<div class="news-item">
						<div class="news-item__img">
							<img src="/img/news/thumbs/<?=$item['News']['img'] ?>" alt="<?=$item['News']['title']?>">
						</div>
						<a href="/news/<?=$item['News']['id']?>" class="news-item__title">
							<?=$item['News']['title']?>
						</a>
						<div class="news-item__date">
							<?php echo $this->Time->format($item['News']['date'], '%d-%m-%Y', 'invalid'); ?>
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