<div class="header">
	<div class="header-top">
		<div class="wrap-content d-flex flex-wrap align-items-center justify-content-between">
			<p class="info-header">
				<marquee behavior="" direction="">
				<span class="star d-inline-block">
				<?= $slogan['name' . $lang] ?></span>
				</marquee>
			</p>
			<p class="info-header"> <i class="fas fa-map-marker-alt"></i><?= ($optsetting['address']) ?></p>
			<p class="info-header"><i class="fas fa-envelope"></i> <?= $optsetting['email'] ?></p>
			<div class="social social-header list-unstyled p-0 m-0 d-flex flex-wrap">
				<?php if (count($social1)) {
					foreach ($social1 as $k => $v) { ?>
						<a class="d-block" href="<?= $v['link'] ?>">
							<img class="d-block w-100 lazy" data-src="<?= THUMBS ?>/30x30x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" onerror="this.src='<?= THUMBS ?>/30x30x1/assets/images/noimage.png';" alt="<?= $v['name' . $lang] ?>">
						</a>
				<?php }
				} ?>
			</div>
		</div>
	</div>
	<div class="header-bottom">
		<div class="wrap-content d-flex flex-wrap align-items-center justify-content-between">
			<a class="logo-header d-block" href="">
				<img class="d-block" src="<?= UPLOAD_PHOTO_L . $logo['photo'] ?>" onerror="this.src='<?= THUMBS ?>/160x98x1/assets/images/noimage.png';" alt="<?= $setting['name' . $lang] ?>">
			</a>
			<div class="search">
				<div class="d-flex align-items-center justify-content-between">
					<input type="text" id="keyword" placeholder="<?= nhaptukhoatimkiem ?>" onkeypress="doEnter(event,'keyword');" value="<?php if (!empty($_GET['keyword'])) {
																																				echo $_GET['keyword'];
																																			} ?>" />
					<p onclick="onSearch('keyword');" class="d-flex align-items-center justify-content-center"><i class="bi bi-search"></i></p>
				</div>
			</div>
			<div class="common-hotline">
				<div class="hotline-header">
					<span class="hotline-header-phone"></span>
					<div class="common-title-header">
						<span class="title-hotline">Tư vấn mua hàng:</span>
						<span class="number-hotline"><?= $optsetting['phone1'] ?></span>
					</div>
				</div>
				<div class="hotline-header">
					<span class="hotline-header-phone"></span>
					<div class="common-title-header">
						<span class="title-hotline">Khiếu nại & góp ý :</span>
						<span class="number-hotline"><?= $optsetting['phone2'] ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>