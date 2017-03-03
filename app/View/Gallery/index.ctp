<div class="container">
	<div class="cr">
		<div class="category-list__title">
			<h1>Галерея</h1>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>Галерея</li>
			</ul>
		</div>
		<div class="content">
			<ul class="gallery-list">
			<?php foreach($random as $item):?>
				<li >
					<a title="<?=$item['Gallery']['title'] ?>" href="/img/gallery/<?=$item['Gallery']['img'] ?>" class="fancybox gallery-item" rell="gallery">
						<img src="/img/gallery/<?=$item['Gallery']['img'] ?>" alt="<?=$item['Gallery']['title'] ?>">
					</a>
				</li>
				<?php endforeach ?>
			</ul>
			<div class="tabs-container">
				<ul class="tabs-head">
					<li class="tabs-head__link active">
						Пластика лица
					</li>
					<li class="tabs-head__link">
						Мастерская идеальной груди
					</li>
					<li class="tabs-head__link">
						Пластика тела
					</li>
				</ul>
				<div class="tabs-body">
					<div class="tabs-body__item active">
						<ul class="gallery-list">
						<?php foreach($plastika_litsa as $item_pl) : ?>
							<li>
								<a title="<?=$item_pl['Gallery']['title'] ?>" href="/img/gallery/<?=$item_pl['Gallery']['img'] ?>" class="fancybox gallery-item" rell="gallery">
									<img src="/img/gallery/<?=$item_pl['Gallery']['img'] ?>" alt="<?=$item_pl['Gallery']['title'] ?>">
								</a>
							</li>
						<?php endforeach ?>
						</ul>
					</div>
					<div class="tabs-body__item">
						<ul class="gallery-list">
						<?php foreach($grud as $item_gr) : ?>
							<li>
								<a title="<?=$item_gr['Gallery']['title'] ?>" href="/img/gallery/<?=$item_gr['Gallery']['img']?>" class="fancybox gallery-item" rell="gallery">
									<img src="/img/gallery/<?=$item_gr['Gallery']['img'] ?>" alt="<?=$item_gr['Gallery']['title'] ?>">
								</a>
							</li>
						<?php endforeach ?>
						</ul>
					</div>
					<div class="tabs-body__item">
						<ul class="gallery-list">
						<?php foreach($plastika_tela as $item_tl) : ?>
							<li>
								<a title="<?=$item_tl['Gallery']['title']?>"> href="/img/gallery/<?=$item_tl['Gallery']['img'] ?>" class="fancybox gallery-item" rell="gallery">
									<img src="/img/gallery/<?=$item_tl['Gallery']['img'] ?>" alt="<?=$item_tl['Gallery']['title']?>">
								</a>
							</li>
						
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>