		<section>
			<div class="cr ov">
<div class="heading_up">
			<h1>НОВОСТИ И АКЦИИ</h1>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>Новости/Акции</li>
			</ul>
		</div>

				<div class="content">
						<div class="blog_ul">
							<ul>
							<?php foreach($news as $item) : ?>
								<li>
									<div class="b_item">
										<a href="/news/<?=$item['News']['id'] ?>"><img src="img/news/thumbs/<?=$item['News']['img'] ?>"/></a>
										<a href="/news/<?=$item['News']['id'] ?>"><?=$item['News']['title'] ?></a>
										<span class="date">
										<?php echo $this->Time->format($item['News']['date'], '%d-%m-%Y', 'invalid'); ?>
										</span>
									</div>
								</li>
							<?php endforeach ?>
							</ul>
						</div>
				</div>
				<aside class="u_aside">
					<div class="useful">
						<span class="heading">Полезные информации</span>
						<ul class="c_ul">
							<?php foreach($blog as $blog_item):?>
							<li><a href="/blog/<?=$blog_item['Blog']['id']?>"><?=$blog_item['Blog']['title']?></a></li>
						<?php endforeach?>
						</ul>
					</div>
				</aside>
			</div>
		</section>