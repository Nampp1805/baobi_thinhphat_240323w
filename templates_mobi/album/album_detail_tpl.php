<h2 class="title-main"><span><?=$rowDetail['name'.$lang]?></span></h2>
<div class="content-main album-gallery">
    <?php if(isset($rowDetailPhoto) && count($rowDetailPhoto) > 0) { ?>
        <div class="div_hiden">
            <div class="flex-product d-flex flex-wrap align-items-start">
                <?php foreach($rowDetailPhoto as $v) { ?>
                <p class="item_tv mb-0" data-aos="fade-up" data-aos-delay="<?=($k*50+100)?>">
                    <a class="d-block album-image hieuung1 mb-0" rel="album-<?=$rowDetail['id']?>" href="<?=ASSET.UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$rowDetail['name'.$lang]?>">
                        <img class="d-block w-100 lazy" data-src="<?=THUMBS?>/600x500x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" onerror="this.src='<?=THUMBS?>/600x500x1/assets/images/noimage.png';" alt="<?=$v['name'.$lang]?>">
                    </a>
                </p>
                <?php } ?>
            </div>
        </div>
    <?php } ?>
</div>