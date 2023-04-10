<?php if (count($slider)) { ?>
    <div class="slideshow">
        <div class="owl-page owl-carousel owl-theme" data-xsm-items="1:0" data-sm-items="1:0" data-md-items="1:0" data-lg-items="1:0" data-xlg-items="1:0" data-rewind="1" data-autoplay="1" data-loop="0" data-lazyload="0" data-mousedrag="0" data-touchdrag="0" data-smartspeed="800" data-autoplayspeed="800" data-autoplaytimeout="5000" data-dots="0" data-animations="animate__fadeInDown, animate__backInUp, animate__rollIn, animate__backInRight, animate__zoomInUp, animate__backInLeft, animate__rotateInDownLeft, animate__backInDown, animate__zoomInDown, animate__fadeInUp, animate__zoomIn" data-nav="1" data-navtext="<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-left' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='5' y1='12' x2='9' y2='16' /><line x1='5' y1='12' x2='9' y2='8' /></svg>|<svg xmlns='https://www.w3.org/2000/svg' class='icon icon-tabler icon-tabler-arrow-narrow-right' width='50' height='37' viewBox='0 0 24 24' stroke-width='1' stroke='#ffffff' fill='none' stroke-linecap='round' stroke-linejoin='round'><path stroke='none' d='M0 0h24v24H0z' fill='none'/><line x1='5' y1='12' x2='19' y2='12' /><line x1='15' y1='16' x2='19' y2='12' /><line x1='15' y1='8' x2='19' y2='12' /></svg>" data-navcontainer=".control-slideshow">
            <?php foreach ($slider as $v) { ?>
                <div class="slideshow-item" owl-item-animation>
                    <a class="slideshow-image" href="<?= $v['link'] ?>" target="_blank" title="<?= $v['name' . $lang] ?>">
                        <picture>
                            <source media="(max-width: 500px)" srcset="thumbs/500x200x1/<?= UPLOAD_PHOTO_L . $v['photo'] ?>">
                            <?= $func->getImage(['class' => 'lazy w-100', 'sizes' => '1366x600x1', 'upload' => UPLOAD_PHOTO_L, 'image' => $v['photo'], 'alt' => $v['name' . $lang]]) ?>
                        </picture>

                    </a>
                    <?php if ($v['name' . $lang] != '') { ?>
                        <div class="ttsl">
                            <p class="desc mb-0 animate__animated animate__delay-1s"><?= $v['desc' . $lang] ?></p>
                            <a href="<?= $v['link'] ?>" class="name text-decoration-none animate__animated animate__delay-1s"><?= $v['name' . $lang] ?>
                                <span class="border-slide"></span>
                            </a>
                            <div class="desc mb-0 animate__animated animate__delay-1s"><?= htmlspecialchars_decode($v['content' . $lang]) ?></div>
                            <div class="button-now">
                                <a href="lien-he" class="call-now">Liên hệ ngay</a>
                                <a href="<?= $v['link'] ?>" class="shopping-now">Shop now</a>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
        <div class="control-slideshow control-owl transition"></div>
    </div>
<?php } ?>