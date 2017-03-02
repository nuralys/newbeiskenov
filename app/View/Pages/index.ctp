<section>
	<div class="cr ov">
	<div class="heading_up">
				<h1>О ХИРУРГЕ</h1>
				<ul>
					<li><a href="/">Главная</a></li>
					<li>О хирурге</li>
				</ul>
			</div>
				<div class="content">
					<div class="about_txt">
						<img src="/img/surger.jpg"/>
						<a itemprop="url" href="http://beiskenov.com/page/about"><h2 itemprop="name"><strong><?=$page['Page']['fio']?></strong></h2>
</a>
						<?=$page['Page']['body']?>
					</div>
					
					<a class="callback services_cb" href="#pozvonim" id="call_back_doc">Записаться на прием</a>
				</div>
				<aside class="u_aside">
					<div class="useful">
						<span class="heading">Полезная информация</span>
						<ul class="c_ul">
							<?php foreach($blog as $blog_item):?>
							<li><a href="/blog/<?=$blog_item['Blog']['id']?>"><?=$blog_item['Blog']['title']?></a></li>
						<?php endforeach?>
						</ul>
					</div>
				</aside>
			</div>
		</section>