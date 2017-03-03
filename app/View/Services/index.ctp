<div class="container">
	<div class="cr">
		<!-- <div class="category-list__title">
				ПОЛЕЗНАЯ ИНФОРМАЦИЯ
		</div> -->
		<div class="content">
			<div class="title">
				<h1><?=$service['Service']['title']?></h1>
				<ul>
				<li><a href="/" title="Главная страница">Главная</a></li>
				<?php if($breadcrumbs): ?>
				<li><a href="/services/<?=$breadcrumbs['Breadcrumbs']['alias']?>" title="<?=$breadcrumbs['Breadcrumbs']['title']?>"><?=$breadcrumbs['Breadcrumbs']['title']?></a></li>
			<?php endif ?>
				<li><?=$service['Service']['title'] ?></li>
			</ul>
			</div>

			<!-- Хлебные крошки -->
			
			<!-- Хлебные крошки -->

			<!-- Дочерние услуги -->
			<ul class="serv_ul">
				<?php if(!empty($getChildrenServices[$service_id]['Children'])) : ?>
					<?php foreach ($getChildrenServices[$service_id]['Children'] as $k => $v) : ?>
						<li class="active"><a href="/services/<?=$v['alias']?>" title="<?=$v['title']?>"><?=$v['title']?></a></li>
					<?php endforeach ?>
				<?php endif ?>
			</ul>
			<!-- Дочерние услуги -->

			<?=$service['Service']['body']?>
			
			<div class="portfolio-slider">
			<?php foreach($blocks as $block) : ?>
				<div class="portfolio-item">
					
					<a href="/img/blocks/<?=$block['Block']['img']?>" class="fancybox portfolio-item__img">
						<img src="/img/blocks/<?=$block['Block']['img']?>" alt="<?=$block['Block']['title']?>">
					</a>
					<div class="portfolio-item__name">
						<?=$block['Block']['title']?>
					</div>
				</div>
				<?php endforeach; ?>
			</div>
			<!-- Цены -->
			 <div class="price_bot">
				<?php if($service['Service']['price']): ?>
				<span>Цена:</span>
				<span>от <?=$service['Service']['price']?> тг.
				<?php endif ?> 
				<?php if($service['Service']['price_to']): ?>
					- до <?=$service['Service']['price_to']?> тг.</span>
				<?php endif ?>
				<?php //debug($blocks); ?>
			</div>
			<!-- Цены -->

			<script type="text/javascript">(function() {
			  if (window.pluso)if (typeof window.pluso.start == "function") return;
			  if (window.ifpluso==undefined) { window.ifpluso = 1;
			    var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
			    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
			    s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
			    var h=d[g]('body')[0];
			    h.appendChild(s);
			  }})();</script>
			<div class="pluso" data-background="transparent" data-options="big,round,line,horizontal,counter,theme=04" data-services="vkontakte,odnoklassniki,facebook,twitter,google,moimir"></div>

			<div class="reviews">
					<h2 class="title_min">ОТЗЫВЫ | <?=$service['Service']['title'] ?> </h2>
				<ul class="review_list">
					<?php foreach($reviews as $review): ?>
						<li>
							<div class="name">
								<?=$review['Review']['title']?>
							</div>
							<?=$review['Review']['body']?>
						</li>
					<?php endforeach ?>
				</ul>
			 </div>
			 <div class="feed_bot">
				<div class="f_up">
					<p>Записаться на прием  <del>5000 тг</del></p>
					<p>запишитесь на <span>бесплатный</span> прием ДО КОНЦА АКЦИИ ОСТАЛОСЬ:</p>
				</div>
				<div class="f_bot-container">
					<div class="f_bot">
						<img src="/img/phone.jpg">
						<div class="count_l">
							<span>Час</span>
							<span>Минута</span>
							<span>Секунда</span>
							<div class="countbox"><div class="countbox-num"><div class="countbox-hours1"><span></span>1</div><div class="countbox-hours2"><span></span>7</div><div class="countbox-hours-text"></div></div><div class="countbox-space"></div><div class="countbox-num"><div class="countbox-mins1"><span></span>5</div><div class="countbox-mins2"><span></span>6</div><div class="countbox-mins-text"></div></div><div class="countbox-space"></div><div class="countbox-num"><div class="countbox-secs1"><span></span>0</div><div class="countbox-secs2"><span></span>6</div><div class="countbox-secs-text"></div></div></div>						
						</div>
					</div>
				</div>
				<a href="" class="button">
					Записаться
				</a>
			</div>
		</div>
	</div>
</div>