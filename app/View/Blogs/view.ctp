<div class="container">
	<div class="cr">
		
		<div class="content">
			
			<div class="title">
				<h1><?=$post['Blog']['title']?></h1>
				<ul>
				<li><a href="/" title="Главная страница">Главная</a></li>
				<li><a href="/blogs">Полезная информация</a></li>
				<li><?=$post['Blog']['title']?></li>
			</ul>
			</div>
			<div class="second-page-img">
				<img src="/img/blog/<?=$post['Blog']['img']?>" alt="<?=$post['Blog']['title']?>" />
				<?=$post['Blog']['body']?>
			</div>
			
		</div>
	</div>
</div>