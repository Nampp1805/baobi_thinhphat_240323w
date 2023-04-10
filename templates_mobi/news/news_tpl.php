<h2 class="title-main"><span><?=(!empty($titleCate)) ? $titleCate : @$titleMain?></span></h2>
<div class="content-main">
    <?php if(isset($news) && count($news) > 0) { ?> 
        <div class="div_hiden">
            <div class="flex-news">
                <?php foreach($news as $v) { ?>
                    <div class="news w-clear" data-aos="fade-up" data-aos-delay="<?=($k*50+100)?>">
                        <a class="pic-news scale-img text-decoration-none w-clear" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>">
                            <img class="d-block w-100 lazy" data-src="<?=THUMBS?>/400x300x1/<?=UPLOAD_NEWS_L.$v['photo']?>" onerror="this.src='<?=THUMBS?>/400x300x1/assets/images/noimage.png';" alt="<?=$v['name'.$lang]?>">
                          
                        </a>
                        <div class="info-news">
                            <h3>
                                <a class="name-news text-decoration-none text-split" href="<?=$v[$sluglang]?>" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a>
                            </h3>
                            <p class="time-news"><?=ngaydang?>: <?=date("d/m/Y h:i A",$v['date_created'])?></p>
                            <div class="desc-news text-split"><?=$v['desc'.$lang]?></div>
                        </div>
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

