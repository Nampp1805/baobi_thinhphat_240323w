<?php
	include "config.php";
	
	$id_color = (!empty($_POST['id_color'])) ? htmlspecialchars($_POST['id_color']) : 0;
	$id_pro = (!empty($_POST['id_pro'])) ? htmlspecialchars($_POST['id_pro']) : 0;
	$rowDetailPhoto = $d->rawQuery("select photo, id_parent, id from #_gallery where id_color = ? and id_parent = ? and com = ? and type = ? and kind = ? and val = ?",array($id_color,$id_pro,'product','san-pham','man','san-pham'));
	$rowDetail = $d->rawQueryOne("select name$lang, photo from #_product where id = ? and type = ? limit 0,1",array($id_pro,'san-pham'));
    /* Get Color Detail */
    $rowColorDetail = $d->rawQueryOne("select name$lang, photo, type_show from #_color where id = ? limit 0,1",array($id_color));
    if($rowColorDetail['type_show']==1){
        $linkPhoto = UPLOAD_COLOR_L;
        $Photo = $rowColorDetail['photo'];
    }else{
        $linkPhoto = UPLOAD_PRODUCT_L;
        $Photo = $rowDetail['photo'];
    }
    /* Get List Photo More */
    $rowListPhoto = $d->rawQuery("select photo from #_gallery where id_parent = ? and com='product' and type = ? and kind='man' and val = ? and find_in_set('hienthi',status) order by numb,id desc",array($id_pro,'san-pham','san-pham'));
?>
<?php if($rowDetailPhoto && count($rowDetailPhoto) > 0) { ?>
	<a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?=ASSET.WATERMARK?>/product/540x540x1/<?=UPLOAD_PRODUCT_L.$rowDetailPhoto[0]['photo']?>" title="<?=$rowDetail['name'.$lang]?>">
        <?=$func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetailPhoto[0]['photo'], 'alt' => $rowDetail['name'.$lang]])?>
    </a>
    <div class="gallery-thumb-pro">
        <div class="owl-page owl-carousel owl-theme owl-pro-detail"
            data-xsm-items = "5:10" 
            data-sm-items = "5:10" 
            data-md-items = "5:10" 
            data-lg-items = "5:10" 
            data-xlg-items = "5:10" 
            data-nav = "1" 
            data-navtext = "<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" 
            data-navcontainer = ".control-pro-detail">
            <?php foreach($rowDetailPhoto as $v) { ?>
                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=ASSET.WATERMARK?>/product/540x540x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$rowDetail['name'.$lang]?>">
                    <?=$func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $rowDetail['name'.$lang]])?>
                </a>
            <?php } ?>
        </div>
        <div class="control-pro-detail control-owl transition"></div>
    </div>
<?php }else{ ?>
    <a id="Zoom-1" class="MagicZoom" data-options="zoomMode: off; hint: off; rightClick: true; selectorTrigger: hover; expandCaption: false; history: false;" href="<?=ASSET.WATERMARK?>/product/540x540x1/<?=$linkPhoto.$Photo?>" title="<?=$rowDetail['name'.$lang]?>">
        <?=$func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => $linkPhoto, 'image' => $Photo, 'alt' => $rowDetail['name'.$lang]])?>
    </a>
    <div class="gallery-thumb-pro">
        <div class="owl-page owl-carousel owl-theme owl-pro-detail"
            data-xsm-items = "5:10" 
            data-sm-items = "5:10" 
            data-md-items = "5:10" 
            data-lg-items = "5:10" 
            data-xlg-items = "5:10" 
            data-nav = "1" 
            data-navtext = "<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-left' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='15 6 9 12 15 18' /></svg>|<svg xmlns='http://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-chevron-right' width='44' height='45' viewBox='0 0 24 24' stroke-width='1.5' stroke='#2c3e50' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><polyline points='9 6 15 12 9 18' /></svg>" 
            data-navcontainer = ".control-pro-detail">
            <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=ASSET.WATERMARK?>/product/540x540x1/<?=UPLOAD_PRODUCT_L.$rowDetail['photo']?>" title="<?=$rowDetail['name'.$lang]?>">
                <?=$func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $rowDetail['photo'], 'alt' => $rowDetail['name'.$lang]])?>
            </a>
            <?php foreach($rowListPhoto as $v) { ?>
                <a class="thumb-pro-detail" data-zoom-id="Zoom-1" href="<?=ASSET.WATERMARK?>/product/540x540x1/<?=UPLOAD_PRODUCT_L.$v['photo']?>" title="<?=$rowColorDetail['name'.$lang]?>">
                    <?=$func->getImage(['isLazy' => false, 'sizes' => '540x540x1', 'isWatermark' => true, 'prefix' => 'product', 'upload' => UPLOAD_PRODUCT_L, 'image' => $v['photo'], 'alt' => $rowColorDetail['name'.$lang]])?>
                </a>
            <?php } ?>
        </div>
        <div class="control-pro-detail control-owl transition"></div>
    </div>
<?php } ?>