<h2 class="title-main"><span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span></h2>
<div class="content-main">
    <?php if(isset($news) && count($news) > 0) { ?> 
        <div class="div_hiden">
            <div class="flex-news">
                <?php foreach($news as $v) { ?>
                    <div class="common-daily common-daily1" onclick="window.location.href='<?= $vlist['link'] ?>'">
						<a class="img-daily">
							<?= $func->getImage(['class' => 'w-100', 'sizes' => '386x376x1', 'upload' => UPLOAD_NEWS_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
						</a>
						<p class="name-daily">
							<i class="fas fa-map-marker-alt"></i>
							<?= $v['name' . $lang] ?>
						</p>
						<p class="phone-daily">
							<i class="fas fa-phone-alt"></i>
							Hotline: <?= $v['phone'] ?>
						</p>
					</div>
                <?php } ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="col-12">
            <div class="alert alert-warning w-100" role="alert">
                <strong><?=khongtimthayketqua?></strong>
            </div>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="col-12">
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
</div>

