<div class="footer">
    <div class="footer-article">
        <div class="wrap-content d-flex flex-wrap align-items-start justify-content-between">
            <div class="footer-news" data-aos="fade-up" data-aos-delay="300">
                <p class="footer-title"><?= $footer['name' . $lang] ?>
                </p>
                <div class="footer-info"><?= htmlspecialchars_decode($footer['content' . $lang]) ?></div>


            </div>
            <div class="footer-news" data-aos="fade-up" data-aos-delay="300">
                <p class="footer-title"><?= chinhsach ?></p>
                <ul class="footer-ul">
                    <?php if (count($policy)) {
                        foreach ($policy as $v) { ?>
                            <li>
                                <span class="icon-ch"></span>
                                <a href="<?= $v[$sluglang] ?>" title="<?= $v['name' . $lang] ?>"><?= $v['name' . $lang] ?></a>
                            </li>
                    <?php }
                    } ?>
                </ul>
            </div>
            <div class="footer-news" data-aos="fade-up" data-aos-delay="300">
                <p class="footer-title">Fanpage</p>
                <?= $addons->set('fanpage-facebook', 'fanpage-facebook', 1); ?>
            </div>
            <?php if (count($social)) { ?>
                <div class="social social-footer d-flex align-items-center">
                    <p class="footer-title">follow us
                    </p>
                    <div class="parent-social">
                        <?php foreach ($social as $k => $v) { ?>
                            <div class="common-social">
                                <a href="<?= $v['link'] ?>" class="text-decoration-none d-block">
                                    <img class="d-block w-100 lazy" data-src="<?= THUMBS ?>/30x30x2/<?= UPLOAD_PHOTO_L . $v['photo'] ?>" onerror="this.src='<?= THUMBS ?>/30x30x1/assets/images/noimage.png';" alt="<?= $v['name' . $lang] ?>">
                                </a>

                                <a href="<?= $v['link'] ?>"><?= $v['name' . $lang] ?></a>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
            <div class="footer-news" data-aos="fade-up" data-aos-delay="300">
                <p class="footer-title"><?= dangkynhantin ?></p>
                <form class="validation-newsletter form-newsletter" novalidate method="post" action="" enctype="multipart/form-data">
                    <div class="newsletter-input">
                        <input type="email" class="form-control text-sm common-textinput" id="email-newsletter" name="dataNewsletter[email]" placeholder="<?= nhapemail ?>" required />
                        <div class="invalid-feedback"><?= vuilongnhapdiachiemail ?></div>
                    </div>
                    <div class="newsletter-button">
                        <div class="icon-buton">
                            <span class="icon-ft7"  type="submit" name="submit-newsletter"></span>
                            <input type="submit" class="btn btn-sm" name="submit-newsletter" value="<?= gui ?>" disabled>
                        </div>

                        <input type="hidden" class="btn btn-sm" name="recaptcha_response_newsletter" id="recaptchaResponseNewsletter">
                    </div>
                </form>
            </div>

        </div>
    </div>
    <div class="footer-powered">
        <div class="wrap-content d-flex flex-wrap align-items-center justify-content-between">
            <div class="copyright">All rights reserved. Designed by Nina.vn </div>
            <div class="statistic">
                <span><?= dangonline ?>: <?= $online ?></span>
                <span><?= tongtruycap ?>: <?= $counter['total'] ?></span>
            </div>
        </div>
    </div>
    <?php if (!$func->isGoogleSpeed()) { ?>
        <?= $addons->set('footer-map', 'footer-map', 1); ?>
        <?= $addons->set('messages-facebook', 'messages-facebook', 1); ?>
    <?php } ?>
</div>
<?php if (!$func->isGoogleSpeed()) { ?>
    

    <div>
        <a class="btn-zalo btn-frame text-decoration-none" target="_blank" href="https://zalo.me/<?= preg_replace('/[^0-9]/', '', $optsetting['zalo']); ?>">
            <div class="animated infinite zoomIn kenit-alo-circle"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill"></div>
            <i>
                <img class="d-block lazy" data-src="assets/images/zl.png" onerror="this.src='<?= THUMBS ?>/35x35x1/assets/images/noimage.png';" alt="Zalo">
            </i>
        </a>
        <a class="btn-phone btn-frame text-decoration-none" href="tel:<?= preg_replace('/[^0-9]/', '', $optsetting['hotline']); ?>">
            <div class="animated infinite zoomIn kenit-alo-circle"></div>
            <div class="animated infinite pulse kenit-alo-circle-fill"></div>
            <i>
                <img class="d-block lazy" data-src="assets/images/hl.png" onerror="this.src='<?= THUMBS ?>/35x35x1/assets/images/noimage.png';" alt="Hotline">
            </i>
        </a>
    </div>
<?php } ?>
<?php /*
    <?php if(count($chinhanh)){ ?>
    <div class="bando">
        <div class="wrap-content">
            <div class="bando1 d-flex flex-wrap justify-content-end">
                <?php foreach($chinhanh as $k => $v) { ?>
                <a class="text-decoration-none transition <?=($k==0) ? 'active': ''?>" data-id="<?=$v['id']?>"><span><?=$v['name'.$lang]?></span></a>    
                <?php } ?>
            </div>
        </div>
        <div id="footer-map"><?=htmlspecialchars_decode($chinhanh[0]['desc'.$lang])?></div>
    </div>
    <?php } ?>

    <div class="footer-tags" data-aos="fade-up" data-aos-delay="300">
        <div class="wrap-content">
            <p class="footer-title">Tags sản phẩm:</p>
            <ul class="footer-tags-lists w-clear mb-3">
                <?php foreach($tagsProduct as $v) { ?>
                    <li class="mr-1 mb-1"><a class="btn btn-sm btn-danger rounded" href="<?=$v[$sluglang]?>" target="_blank" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                <?php } ?>
            </ul>
            <p class="footer-title">Tags tin tức:</p>
            <ul class="footer-tags-lists w-clear">
                <?php foreach($tagsNews as $v) { ?>
                    <li class="mr-1 mb-1"><a class="btn btn-sm btn-danger rounded" href="<?=$v[$sluglang]?>" target="_blank" title="<?=$v['name'.$lang]?>"><?=$v['name'.$lang]?></a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
*/ ?>