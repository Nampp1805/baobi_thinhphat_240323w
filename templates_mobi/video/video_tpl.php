<h2 class="title-main"><span><?=@$titleMain?></span></h2>
<?php if(isset($video) && count($video) > 0) { ?> 
    <div class="div_hiden">
        <div class="wrap-video d-flex flex-wrap align-items-start">
            <?php for($i=0;$i<count($video);$i++) { ?>
                <div class="video">
                    <p class="pic-video">
                        <a class="scale-img text-decoration-none" data-fancybox="video" data-src="<?=$video[$i]['link_video']?>" title="<?=$video[$i]['name'.$lang]?>">
                            <?=$func->getImage(['class' => 'lazy w-100', 'size-error' => '480x360x1', 'url' => 'https://img.youtube.com/vi/'.$func->getYoutube($video[$i]['link_video']).'/0.jpg', 'alt' => $video[$i]['name'.$lang]])?>
                        </a>
                    </p>
                    <h3>
                        <a class="name-video text-split scale-img text-decoration-none" data-fancybox="video" data-src="<?=$video[$i]['link_video']?>" title="<?=$video[$i]['name'.$lang]?>"><?=$video[$i]['name'.$lang]?></a>
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