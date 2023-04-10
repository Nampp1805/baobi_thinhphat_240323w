<h2 class="title-main"><span><?=$titleMain?></span></h2>
<?php if(isset($product) && count($product) > 0) { ?> 
    <div class="div_hiden">
        <div class="flex-thuvien d-flex flex-wrap align-items-start">
            <?php foreach($product as $v) { ?>
                <div class="item_tv" data-aos="fade-up" data-aos-delay="<?=($k*50+100)?>">
                    <a class="img hieuung1 text-decoration-none d-block" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                        <img class="d-block w-100 lazy" data-src="<?=THUMBS?>/600x500x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" onerror="this.src='<?=THUMBS?>/600x500x1/assets/images/noimage.png';" alt="<?=$v['name'.$lang]?>">
                    </a>
                    <h3>
                        <a class="text-decoration-none name-product text-split" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
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