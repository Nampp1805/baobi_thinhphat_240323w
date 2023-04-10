<h2 class="title-main"><span><?= (!empty($titleCate)) ? $titleCate : @$titleMain ?></span></h2>
<?php if ($com == 'tim-kiem') { ?>
    <div class="div_kq_search mb-4"><?= $titleMain ?> (<?= $total ?>): <span>"<?php echo $tukhoa_show; ?>"</span></div>
<?php } ?>
<div class="content-main">
    <?php if (!empty($product)) { ?>
        <div class="d-hiden">
            <div class="flex-product">
                <?php foreach ($product as $k => $v) { ?>
                    <div class="box-product" data-aos="fade-up" data-aos-delay="<?= ($k * 50 + 100) ?>">
				<p class="pic-product">
					<a class="d-block scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
						<img class="d-block w-100 lazy" data-src="<?= WATERMARK ?>/product/580x560x2/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" onerror="this.src='<?= THUMBS ?>/580x560x1/assets/images/noimage.png';" alt="<?= $v['name' . $lang] ?>">
					</a>
				</p>
				<h3 class="mb-0"><a class="text-decoration-none text-split name-product" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a></h3>
				<p class="code"> <?= $v["code"] ?> </p>

				<p class="price-product">
					<?php if ($v['discount']) { ?>
						<span class="price-new"><?= $func->formatMoney($v['sale_price']) ?></span>
						<span class="price-old"><?= $func->formatMoney($v['regular_price']) ?></span>
						<span class="price-per"><?= '-' . $v['discount'] . '%' ?></span>
					<?php } else { ?>
						<?php if ($v['sale_price']) { ?>
							<span class="price-new">Giá : <?= ($v['sale_price']) ? $func->formatMoney($v['sale_price']) : lienhe ?></span>
						<?php } else { ?>
							 <span class="price-new"><?= $optsetting['phone_product'] ?>Giá: Liên hệ</span>
						<?php } ?>
					<?php } ?>
				</p>
			</div>
                <?php } ?>
            </div>
        </div>
    <?php } else { ?>
        <div class="alert alert-warning w-100" role="alert">
            <strong><?= khongtimthayketqua ?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home w-100"><?= (!empty($paging)) ? $paging : '' ?></div>
</div>