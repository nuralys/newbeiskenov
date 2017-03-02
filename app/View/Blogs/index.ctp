<section>
		<div class="cr ov">
	<div class="heading_up">
			<h1>ПОЛЕЗНАЯ ИНФОРМАЦИЯ</h1>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>Полезная информация</li>
			</ul>
		</div>

				<div class="content">
						<div class="blog_ul">
							<ul>
							
							<?php foreach($blogs as $item) : ?>
								<li>
									<div class="b_item">
										<a href="/blog/<?=$item['Blog']['id'] ?>"><img src="img/blog/thumbs/<?=$item['Blog']['img'] ?>"/></a>
										<a href="/blog/<?=$item['Blog']['id'] ?>"><?=$item['Blog']['title'] ?></a>
										<span class="date">
											<?php echo $this->Time->format($item['Blog']['date'], '%d-%m-%Y', 'invalid'); ?>
										</span>
									</div>
								</li>
							<?php endforeach ?>
							</ul>
						</div>
				</div>
				<aside class="u_aside">
				<?php //debug($news); ?>
					<div class="useful">
						<span class="heading">Новости и акции</span>
						<ul class="c_ul">
						<?php foreach($news as $news_item):?>
							<li><a href="/news/<?=$news_item['News']['id']?>"><?=$news_item['News']['title']?></a></li>
						<?php endforeach?>
						</ul>
					</div>
				</aside>
			</div>
		</section>