<div class="title-main"><span><?=$titleMain?></span></div>
<?php if(isset($product) && count($product) > 0) { ?> 
    <div class="div_hiden album-gallery" >
        <div class="flex-thuvien d-flex flex-wrap align-items-start">
            <?php foreach($product as $v) { ?>
                <div class="item_tv" data-aos="fade-up" data-aos-duration="1000">
                    <a class="mb-2 d-block hieuung" rel="album-<?=$rowDetail['id']?>" href="<?=ASSET.UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$v['name'.$lang]?>">
                        <img class="d-block w-100 lazy" data-src="<?=THUMBS?>/580x580x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" onerror="this.src='<?=THUMBS?>/580x580x1/assets/images/noimage.png';" alt="<?=$v['name'.$lang]?>">
                    </a>
                    <h3>
                        <a class="text-decoration-none name-product text-split" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                    </h3>
                </div>
            <?php } ?>
        </div>
        <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
    </div>
<?php } else { ?>
    <div class="alert alert-warning" role="alert">
        <strong><?=khongtimthayketqua?></strong>
    </div>
<?php } ?>