<div class="grid-pro-detail d-flex flex-wrap justify-content-between align-items-start">
    <div class="left-pro-detail">
        <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?=ASSET.WATERMARK?>/product/580x580x2/<?=UPLOAD_PRODUCT_L.$rowDetail['photo']?>" title="<?=$rowDetail['name'.$lang]?>">
            <img class="d-block w-100 lazy" data-src="<?=WATERMARK?>/product/580x560x2/<?=UPLOAD_PRODUCT_L.$rowDetail['photo']?>" onerror="this.src='<?=THUMBS?>/580x560x1/assets/images/noimage.png';" alt="<?=$rowDetail['name'.$lang]?>">
        </a>
        <?php if($rowDetailPhoto) { if(count($rowDetailPhoto) > 0) { ?>
            <div class="gallery-thumb-pro">
                <div class="owl-page owl-carousel owl-theme owl-pro-detail"
                    data-xsm-items = "3:10" 
                    data-sm-items = "4:10" 
                    data-md-items = "5:10" 
                    data-lg-items = "5:10" 
                    data-xlg-items = "5:10" 
                    data-nav = "1" 
                    data-navtext = "<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" 
                    data-navcontainer = ".control-pro-detail">
                    <div>
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=ASSET.WATERMARK?>/product/580x560x2/<?=UPLOAD_PRODUCT_L.$rowDetail['photo']?>" title="<?=$rowDetail['name'.$lang]?>">
                            <img class="d-block w-100" src="<?=WATERMARK?>/product/580x560x2/<?=UPLOAD_PRODUCT_L.$rowDetail['photo']?>" onerror="this.src='<?=THUMBS?>/580x580x1/assets/images/noimage.png';" alt="<?=$rowDetail['name'.$lang]?>">
                        </a>
                    </div>
                    <?php foreach($rowDetailPhoto as $v) { 
                        if($v['name'.$lang]!='') { $namehinh = $v['name'.$lang];} else {$namehinh = $rowDetail['name'.$lang];}
                        ?>
                    <div>
                        <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=ASSET.WATERMARK?>/product/580x580x2/<?=UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$rowDetail['name'.$lang]?>">
                            <img class="d-block w-100" src="<?=WATERMARK?>/product/580x580x2/<?=UPLOAD_PRODUCT_L.$v['photo']?>" onerror="this.src='<?=THUMBS?>/580x580x1/assets/images/noimage.png';" alt="<?=$v['name'.$lang]?>">
                        </a>
                    </div>
                    <?php } ?>
                </div>
                <div class="control-pro-detail control-owl transition"></div>
            </div>
        <?php } } ?>
    </div>

    <div class="right-pro-detail">
        <div class="title-pro-detail mb-2"><?=$rowDetail['name'.$lang]?></div>
        <?php /*if($config['star']['active']==true) { ?>
        <div class="comment-pro-detail mb-3">
            <div class="comment-star mb-0 mr-2">
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <i class="far fa-star"></i>
                <span style="width: <?=$comment->avgStar()?>%">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </span>
            </div>
            <div class="comment-count"><a>(<?=$comment->total?> nhận xét)</a></div>
        </div>
        <?php }*/ ?>
        <div class="social-plugin social-plugin-pro-detail w-clear">
            <?php
                $params = array();
                $params['oaid'] = $optsetting['oaidzalo'];
                echo $func->markdown('social/share', $params);
            ?>
        </div>
        <div class="desc-pro-detail baonoidung"><?=(!empty($rowDetail['desc'.$lang])) ? htmlspecialchars_decode($rowDetail['desc'.$lang]) : ''?></div>
        <ul class="attr-pro-detail">
            <?php if(!empty($rowDetail['code'])) { ?>
                <li class="w-clear"> 
                    <label class="attr-label-pro-detail"><?=masp?>:</label>
                    <div class="attr-content-pro-detail"><?=$rowDetail['code']?></div>
                </li>
            <?php } ?>
            <li class="w-clear"> 
                <label class="attr-label-pro-detail"><?=luotxem?>:</label>
                <div class="attr-content-pro-detail"><?=$rowDetail['view']?></div>
            </li>
            <?php if(!empty($productBrand['id'])) { ?>
                <li class="w-clear">
                    <label class="attr-label-pro-detail"><?=thuonghieu?>:</label>
                    <div class="attr-content-pro-detail brand-pro-detail">
                        <a class="text-decoration-none" href="<?=$productBrand[$sluglang]?>" title="<?=$productBrand['name'.$lang]?>"><?=$productBrand['name'.$lang]?></a>
                    </div>
                </li>
            <?php } ?>
            <li class="w-clear">
                <label class="attr-label-pro-detail"><?=gia?>:</label>
                <div class="attr-content-pro-detail">
                    <?php if($rowDetail['regular_price']) { ?>
                        <span class="price-new-pro-detail"><?=$func->formatMoney($rowDetail['sale_price'])?></span>
                        <span class="price-old-pro-detail"><?=$func->formatMoney($rowDetail['regular_price'])?></span>
                    <?php } else { ?>
                        <span class="price-new-pro-detail"><?=($rowDetail['sale_price']) ? $func->formatMoney($rowDetail['sale_price']) : lienhe?></span>
                    <?php } ?>
                </div>
            </li>
            <?php /*if($config['order']['active']==true) { ?>
                <?php if(!empty($rowColor)) { ?>
                    <li class="color-block-pro-detail w-clear">
                        <label class="attr-label-pro-detail d-block"><?=mausac?>:</label>
                        <div class="attr-content-pro-detail d-flex flex-wrap">
                            <?php foreach($rowColor as $k => $v) { ?>
                                <?php if($v['type_show']==1) { ?>
                                    <label for="color-pro-detail-<?=$v['id']?>" class="color-pro-detail text-decoration-none <?php if($k==0) echo 'active';?>" data-idproduct="<?=$rowDetail['id']?>" style="background-image: url(<?=UPLOAD_COLOR_L.$v['photo']?>)">
                                        <input type="radio" value="<?=$v['id']?>" id="color-pro-detail-<?=$v['id']?>" name="color-pro-detail" <?php if($k==0) echo 'checked="checked"';?>>
                                    </label>
                                <?php } else { ?>
                                    <label for="color-pro-detail-<?=$v['id']?>" class="color-pro-detail text-decoration-none <?php if($k==0) echo 'active';?>" data-idproduct="<?=$rowDetail['id']?>" style="background-color: #<?=$v['color']?>">
                                        <input type="radio" value="<?=$v['id']?>" id="color-pro-detail-<?=$v['id']?>" name="color-pro-detail" <?php if($k==0) echo 'checked="checked"';?>>
                                    </label>
                                <?php } ?>
                            <?php } ?>
                        </div>
                    </li>
                <?php } ?>
                <?php if(!empty($rowSize)) { ?>
                    <li class="size-block-pro-detail w-clear">
                        <label class="attr-label-pro-detail d-block"><?=kichthuoc?>:</label>
                        <div class="attr-content-pro-detail d-flex flex-wrap">
                            <?php foreach($rowSize as $k => $v) { ?>
                                <label for="size-pro-detail-<?=$v['id']?>" class="size-pro-detail text-decoration-none <?php if($k==0) echo 'active';?>">
                                    <input type="radio" value="<?=$v['id']?>" id="size-pro-detail-<?=$v['id']?>" name="size-pro-detail" <?php if($k==0) echo 'checked="checked"';?> >
                                    <?=$v['name'.$lang]?>
                                </label>
                            <?php } ?>
                        </div> 
                    </li>
                <?php } ?>
            <?php }*/ ?>
            <?php if($config['order']['active']==true) { ?>
            <li class="d-flex flex-wrap align-items-center mt-3 mb-3"> 
                <label class="attr-label-pro-detail d-block mr-2 mb-0"><?=soluong?>:</label>
                <div class="attr-content-pro-detail d-flex flex-wrap align-items-center justify-content-between">
                    <div class="quantity-pro-detail">
                        <span class="quantity-minus-pro-detail">-</span>
                        <input type="number" class="qty-pro" min="1" value="1" readonly />
                        <span class="quantity-plus-pro-detail">+</span>
                    </div>
                </div>
            </li>
            <li>
                <div class="cart-pro-detail d-flex flex-wrap align-items-center justify-content-between">
                    <a class="transition addnow addcart text-decoration-none d-flex align-items-center justify-content-center" data-id="<?=$rowDetail['id']?>" data-action="addnow"><i class="bi bi-cart2"></i><span><?=themvaogiohang?></span></a>
                    <a class="transition buynow addcart text-decoration-none d-flex align-items-center justify-content-center" data-id="<?=$rowDetail['id']?>" data-action="buynow"><i class="bi bi-cart2"></i><span><?=muangay?></span></a>
                </div>
            </li>
            <?php } ?>  
        </ul>
    </div>
</div>

<div class="tabs-pro-detail">
    <ul class="nav nav-tabs" id="tabsProDetail" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="info-pro-detail-tab" data-toggle="tab" href="#info-pro-detail" role="tab"><?=chitiet?> <?=$titleMain?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="commentfb-pro-detail-tab" data-toggle="tab" href="#commentfb-pro-detail" role="tab"><?=binhluan?></a>
        </li>
    </ul>
    <div class="tab-content pt-4 pb-4" id="tabsProDetailContent">
        <div class="tab-pane fade show active baonoidung" id="info-pro-detail" role="tabpanel">
            <?=htmlspecialchars_decode($rowDetail['content'.$lang])?>
            <div class="tags-pro-detail w-clear">
                <?php if(!empty($rowTags)) { foreach($rowTags as $v) { ?>
                    <a class="btn btn-sm btn-danger rounded" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><i class="fas fa-tags"></i><?=$v['name'.$lang]?></a>
                <?php } } ?>
            </div>
        </div>
        <div class="tab-pane fade" id="commentfb-pro-detail" role="tabpanel">
            <div class="fb-comments" data-href="<?=$func->getCurrentPageURL()?>" data-numposts="3" data-colorscheme="light" data-width="100%"></div>
        </div>
    </div>
</div>

<?php /*if($config['star']['active']==true) { ?>
    <?php include TEMPLATE."product/comment.php"; ?>
<?php }*/ ?>


<h2 class="title-main"><span><?=$titleMain?> <?=lienquan?></span></h2>
<div class="content-main">
    <?php if(!empty($product)) { ?>
        <div class="d-hiden">
            <div class="flex-product">
                <?php foreach($product as $k => $v) { ?>
                    <div class="box-product" data-aos="fade-up" data-aos-delay="<?= ($k * 50 + 100) ?>">
				<p class="pic-product">
					<a class="d-block scale-img" href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>">
						<img class="d-block w-100 lazy" data-src="<?= WATERMARK ?>/product/580x560x1/<?= UPLOAD_PRODUCT_L . $v['photo'] ?>" onerror="this.src='<?= THUMBS ?>/580x560x1/assets/images/noimage.png';" alt="<?= $v['name' . $lang] ?>">
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
            <strong><?=khongtimthayketqua?></strong>
        </div>
    <?php } ?>
    <div class="clear"></div>
    <div class="pagination-home w-100"><?=(!empty($paging)) ? $paging : ''?></div>
</div>