<section>
	<div class="cr ov">
		<div class="heading_up">
				<h1>ПОЛЕЗНАЯ ИНФОРМАЦИЯ</h1>
				<ul>
					<li><a href="/">Главная</a></li>
					<li><a href="/blog">Полезная информация</a></li>
					<li><?=$post['Blog']['title']?></li>
				</ul>
			</div>
				<div class="content">
					<div class="about_txt">
						<img src="/img/blog/<?=$post['Blog']['img']?>"/>
						<h6><?=$post['Blog']['title']?></h6>
						<div class="date_p">
							<span><?php echo $this->Time->format($post['Blog']['date'], '%d-%m-%Y', 'invalid'); ?></span>
						</div>
						<?=$post['Blog']['body']?>
					</div>
					<script type="text/javascript" src="//yastatic.net/share/share.js" charset="utf-8"></script><div class="yashare-auto-init" data-yashareL10n="ru" data-yashareType="small" data-yashareQuickServices="vkontakte,facebook,twitter,odnoklassniki,moimir,gplus" data-yashareTheme="counter"></div>
				</div>
				<aside class="u_aside">
					<div class="useful">
						<span class="heading">Полезные информации</span>
						<ul class="c_ul">
							<?php foreach($blog as $item):?>
							<?php if($item['Blog']['id'] != $post['Blog']['id'] ): ?>
							<li><a href="/blog/<?=$item['Blog']['id']?>"><?=$item['Blog']['title']?></a></li>
						<?php endif ?>
						<?php endforeach ?>
						</ul>
					</div>
				</aside>
			</div>
		</section>