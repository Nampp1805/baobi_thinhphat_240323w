<div class="wrap-about padding-top-bottom">
	<div class="wrap-content d-flex flex-wrap justify-content-between align-items-center flex-row-reverse position-relative">
		<div class="gtleft">
			<p class="slgt"><?= $about['slogan' . $lang] ?></p>
			<div class="desc"><?= htmlspecialchars_decode($about['desc' . $lang]) ?></div>
			<h2 class="name"><?= $about['name' . $lang] ?></h2>
			<span class="bor-prod about"></span>
			<p class="slgt"><?= htmlspecialchars_decode($about['content' . $lang]) ?></p>
			<a href="gioi-thieu" class="xemthem transition text-decoration-none"><span><?= xemthem ?></span></a>
		</div>
		<div class="hinhgt">
			<div class="slick-gt">
				<a href="gioi-thieu" class="hieuung d-block" title="<?= $about['name' . $lang] ?>">
					<img class="d-block w-100" src="<?= THUMBS ?>/586x465x1/<?= UPLOAD_NEWS_L . $about['photo'] ?>" onerror="this.src='<?= THUMBS ?>/586x465x1/assets/images/noimage.png';" alt="<?= $about['name' . $lang] ?>">
				</a>
				<?php if ($about['photo1'] != '') { ?>
					<a href="gioi-thieu" class="hieuung d-block" title="<?= $about['name' . $lang] ?>">
						<img class="d-block w-100" src="<?= THUMBS ?>/586x465x1/<?= UPLOAD_NEWS_L . $about['photo1'] ?>" onerror="this.src='<?= THUMBS ?>/586x465x1/assets/images/noimage.png';" alt="<?= $about['name' . $lang] ?>">
					</a>
				<?php } ?>
			</div>
		</div>
	</div>
</div>
<?php if (count($tieuchi)) { ?>
	<div class="wrap-tieuchi">
		<div class="owl-page owl-carousel owl-theme" data-aos="fade-up" data-aos-delay="300" data-xsm-items="2:0" data-sm-items="2:0" data-md-items="2:0" data-lg-items="2:0" data-xlg-items=":0" data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-partner">
			<?php foreach ($tieuchi as $k => $vlist) { ?>
				<div class="common-tieuchi">
					<div class="img-procedure">
						<?= $func->getImage(['class' => '', 'sizes' => '63x50x2', 'upload' => UPLOAD_NEWS_L, 'image' => $vlist['photo'], 'alt' => $vlist['name' . $lang]]) ?>
					</div>
					<div class="name3">
						<?= $vlist['name' . $lang] ?>
					</div>
				</div>

			<?php } ?>
		</div>
	</div>
<?php } ?>
<div class="wrap-product wrap-content padding-top-bottom">
	<p class="title-pro">Product Hot</p>
	<h2 class="title-main" data-aos="fade-up" data-aos-delay="300">
		<span>SẢN PHẨM NỔI BẬT</span>
		<span class="bor-prod"></span>
	</h2>
	<div class="cap1 d-flex flex-wrap justify-content-center" data-aos="fade-up" data-aos-delay="300">
		<a class="clicksp transition text-decoration-none" data-list="0">TẤT CẢ</a>
		<?php if (count($splistnb)) {
			foreach ($splistnb as $vlist) { ?>
				<a class="clicksp transition text-decoration-none" data-list="<?= $vlist['id'] ?>"><?= $vlist['name' . $lang] ?></a>
		<?php }
		} ?>
	</div>
	<div class="paging-product1"></div>
</div>
<div class="banner-header d-block position-relative" href="">
	<img class="d-block baner1" src="<?= UPLOAD_NEWS_L . $baner1['photo'] ?>" onerror="this.src='<?= THUMBS ?>/1366x500x1/assets/images/noimage.png';" alt="<?= $setting['name' . $lang] ?>">
	
</div>

<?php if (count($daily)) { ?>
	<div class="wrap-content wrap-daily position-relative">
		<p class="title-pro">Our agent</p>
		<h2 class="title-main" data-aos="fade-up" data-aos-delay="300">
			<span>Đại Lý Uy TÍn</span>
			<span class="bor-prod"></span>
		</h2>
		<div class="position-relative">
			<div class="parent-daily owl-page owl-carousel owl-theme" data-aos="fade-up" data-aos-delay="300" data-xsm-items="2:10" data-sm-items="2:10" data-md-items="2:10" data-lg-items="2:10" data-xlg-items="2:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-daily">
				<?php foreach ($daily as $k => $vlist) { ?>
					<div class="common-daily" onclick="window.location.href='<?= $vlist['link'] ?>'">
						<a class="img-daily">
							<?= $func->getImage(['class' => 'w-100', 'sizes' => '580x565x1', 'upload' => UPLOAD_NEWS_L, 'image' => $vlist['photo'], 'alt' => $vlist['name' . $lang]]) ?>
						</a>
						<p class="name-daily">
							<i class="fas fa-map-marker-alt"></i>
							<?= $vlist['name' . $lang] ?>
						</p>
						<p class="phone-daily">
							<i class="fas fa-phone-alt"></i>
							Hotline: <?= $vlist['phone'] ?>
						</p>

					</div>
				<?php } ?>
			</div>
			<div class="control-daily control-owl transition"></div>
		</div>
	</div>
<?php } ?>
</div>

<?php if (count($newsnb)) { ?>
	<div class="wrap-newsnb padding-top-bottom">
		<div class="wrap-content">
			<p class="title-pro">News & Event</p>
			<h2 class="title-main" data-aos="fade-up" data-aos-delay="300"><span><?= tintucnoibat ?></span><span class="bor-prod"></span></h2>
			<div class="position-relative">
				<div class="parent-tintuc owl-page owl-carousel owl-theme" data-xsm-items="2:10" data-sm-items="2:10" data-md-items="2:10" data-lg-items="2:10" data-xlg-items="2:10" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-news">
					<?php foreach ($newsnb as $v) { ?>
						<div class="item_tt">
							<a class="img d-block scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
								<img class="d-block w-100 lazy" data-src="<?= THUMBS ?>/380x270x1/<?= UPLOAD_NEWS_L . $v['photo'] ?>" onerror="this.src='<?= THUMBS ?>/380x270x1/assets/images/noimage.png';" alt="<?= $v['name' . $lang] ?>">
							</a>
							<div class="tttt">
								<div class="date">
									<i class="fas fa-calendar-alt"></i>
									<?= date("jS Y", $vlist['date_created']) ?>
								</div>
								<h3><a class="text-split-2 text-decoration-none" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
								<p class="desc text-split"><?= $v['desc' . $lang] ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="control-news control-owl transition"></div>
			</div>
		</div>
	</div>
<?php } ?>

<?php if (count($partner)) { ?>
	<div class="wrap-partner padding-top-bottom">
		<div class="wrap-content">
			<div class="owl-page owl-carousel owl-theme" data-aos="fade-up" data-aos-delay="300" data-xsm-items="2:10" data-sm-items="2:10" data-md-items="3:10" data-lg-items="4:10" data-xlg-items="5:10" data-rewind="1" data-autoplay="0" data-loop="0" data-lazyload="0" data-mousedrag="1" data-touchdrag="1" data-smartspeed="500" data-autoplayspeed="3500" data-dots="0" data-nav="1" data-navtext="<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" data-navcontainer=".control-partner">
				<?php foreach ($partner as $v) { ?>
					<div>
						<a class="partner d-block" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
							<img class="d-block w-100 lazy" data-src="<?= THUMBS ?>/183x113x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" onerror="this.src='<?= THUMBS ?>/150x120x1/assets/images/noimage.png';" alt="<?= $v['name' . $lang] ?>">
						</a>
					</div>
				<?php } ?>
			</div>
		</div>
	</div>
<?php } ?>