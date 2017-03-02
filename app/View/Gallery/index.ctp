		<section>
			<div class="cr ov">
		<div class="heading_up">
			<h1>Галерея</h1>
			<ul>
				<li><a href="/">Главная</a></li>
				<li>Галерея</li>
			</ul>
		</div>
				<div class="content">
					<div class="galery">
						<ul class="random">
							<?php foreach($random as $item):?>
								<li>
									<a class="fancybox" href="img/gallery/<?=$item['Gallery']['img'] ?>" data-fancybox-group="gallery" title="<?=$item['Gallery']['title'] ?>"><img src="img/gallery/<?=$item['Gallery']['img'] ?>" alt="<?=$item['Gallery']['title'] ?>"></a>
								</li>
							<?php endforeach ?>
							
						</ul>
						<div class="tabs">
							<ul class="ul_tab">	
								<li class="active"><span>Пластика лица</span></li>
								<li><span>Мастерская идеальной груди</span></li>
								<li><span>Пластика тела</span></li>
							</ul>
							<div class="gal_tab">
								<div>
									
									<div class="gal_tab">
							<ul>
							<?php foreach($plastika_litsa as $item_pl) : ?>
								<li>
									<a class="fancybox" href="img/gallery/<?=$item_pl['Gallery']['img'] ?>" data-fancybox-group="gallery" title="<?=$item_pl['Gallery']['title'] ?>"><img src="img/gallery/<?=$item_pl['Gallery']['img'] ?>" alt="<?=$item_pl['Gallery']['title'] ?>"></a>
								</li>
							<?php endforeach ?>
							</ul>
						</div>
								</div>
								<div>
									
									<div class="gal_tab">
							<ul>
								<?php foreach($grud as $item_gr) : ?>
								<li>
									<a class="fancybox" href="img/gallery/<?=$item_gr['Gallery']['img'] ?>" data-fancybox-group="gallery" title="<?=$item_gr['Gallery']['title'] ?>"><img src="img/gallery/<?=$item_gr['Gallery']['img'] ?>" alt="<?=$item_gr['Gallery']['title'] ?>"></a>
								</li>
							<?php endforeach ?>
																
							</ul>
						</div>
								</div>
								<div>
									
									<div class="gal_tab">
							<ul>
								<?php foreach($plastika_tela as $item_tl) : ?>
								<li>
									<a class="fancybox" href="img/gallery/<?=$item_tl['Gallery']['img'] ?>" data-fancybox-group="gallery" title="<?=$item_tl['Gallery']['title'] ?>"><img src="img/gallery/<?=$item_tl['Gallery']['img'] ?>" alt="<?=$item_tl['Gallery']['title'] ?>"></a>
								</li>
							<?php endforeach ?>			
							</ul>
						</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>