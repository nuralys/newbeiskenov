<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title><?php echo $title_for_layout; ?></title>
		<meta name='yandex-verification' content='586db967c2aca82e' />
		<?php if(isset($meta['keywords'])): ?>
		<meta name="keywords" content="<?=$meta['keywords']?>">
		<?php endif; ?>
		<?php if(isset($meta['description'])): ?>
		<meta name="description" content="<?=$meta['description']?>">
		<meta name='wmail-verification' content='a2c607c98b00123ea4a1b43f630f02bb' />
		<?php endif; ?>
		<?php
		echo $this->fetch('meta');
		?>
		<link href="/img/favicon.ico" type="image/x-icon" rel="icon">

		<meta http-equiv="content-type" content="text/html;charset=utf-8"/>

		<meta content="initial-scale=1, minimum-scale=1, width=device-width" name="viewport">
		<link href="/css/normalize.css" rel="stylesheet" type="text/css">
		<link href="/css/style.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" type="text/css" href="/css/slide.min.css">
		<link href="/css/animate.css" rel="stylesheet" type="text/css">
		<link rel="stylesheet" href="/css/jquery.fancybox.css" type="text/css" media="screen" />


	</head>
<body>
	<div class="page">
		<header>
			<div class="head-top-container">
				<div class="cr">
					<div class="head-top">
						<ul class="head-top__nav">
							<li><a href="/">Главная</a></li>
							<li><a>Услуги</a>
								<div class="sub-container">
									<ul class="sub-menu">
										<li><a href="/services/masterskaya_idealnoy_grudi">Мастерская идеальной груди</a></li>
										<li><a href="/services/plastika_tela">Пластика тела</a></li>
										<li><a href="/services/plastika_litsa">Пластика лица</a></li>
									</ul>
								</div>
							</li>
							<li><a href="/page/about">О хирурге</a></li>
							<li><a href="/price">Цены</a></li>
							<li><a href="/blogs">Полезная информация </a></li>
							<li><a href="/gallery">Галерея</a></li>
							<li><a href="/news"> Новости/Акции </a></li>
							<li><a href="/contacts">Контакты </a></li>
						</ul>
						<div class="mob_start">
							<span></span>
			                <span></span>
			                <span></span>
						</div>
						<div class="head-top__address">
							Адрес: г. ул. Азербайжана Мамбетова  8/2
						</div>
					</div>
				</div>
			</div>
			<div class="head-bottom">
				<div class="cr">
					<a href="/" class="head-bottom__logo logo" title="Пластическая хирургия в Астане">
						<img alt="Пластическая хирургия в Астане" title="Пластическая хирургия в Астане" src="/img/logo.png" />
					</a>
					<div class="head-bottom__soc-seti">
						<a href="https://www.facebook.com/profile.php?id=100011515033463" target="_blank"><img src="/img/fb.jpg" alt="facebook И. Бейскенов"></a>
						<a href="https://vk.com/beiskenov" target="_blank"><img src="/img/vk.jpg" alt="vk И. Бейскенов"></a>
						<a href="https://www.instagram.com/dr_beiskenov/" target="_blank"><img src="/img/insta.jpg" alt="instagram И. Бейскенов"></a>
					</div>
					<div class="head-bottom__phone">					
						<button id="button">Показать номер</button>
						<span class="tel"><a href="tel:+77018006266" title="Мобильный телефон">+7 701 800 62 66</a></span>
						<span class="n1">+7</span>		
					</div>
				</div>
			</div>
		</header>
			<?php echo $this->Session->flash(); ?>
			<?php echo $this->fetch('content') ?>
		</div><!-- end .container -->
	</div>	
	<?=$this->element('footer')?>
    <script src="/js/jquery.js" type="text/javascript"></script>
     <script src="/js/jquery.fancybox.pack.js" type="text/javascript"></script>
	<script src="/js/app.js" type="text/javascript"></script>
	<script src="/js/wow.min.js"></script>
	<script src="/js/tab.js"></script>
<script>
  new WOW().init();
</script>
</body>
</html>