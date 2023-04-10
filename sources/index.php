<?php
if (!defined('SOURCES')) die("Error");
$popup = $d->rawQueryOne("select name$lang, photo, link from #_photo where type = ? and act = ? and find_in_set('hienthi',status) limit 0,1", array('popup', 'photo_static'));
$slider = $d->rawQuery("select name$lang, photo, link, content$lang,desc$lang from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('slide'));

$about = $d->rawQueryOne("select name$lang,content$lang,desc$lang, photo,photo1, slogan$lang, slogan1$lang from #_static where type = ? limit 0,1", array('gioi-thieu'));
$baner1 = $d->rawQueryOne("select name$lang,content$lang,desc$lang, link,photo,photo1, slogan$lang, slogan1$lang from #_static where type = ? limit 0,1", array('baner'));

$brand = $d->rawQuery("select name$lang, slugvi, slugen, id, photo from #_product_brand where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'));
$pronb = $d->rawQuery("select name$lang, slugvi, slugen, id, photo, regular_price, sale_price, discount, type from #_product where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb, id desc", array('san-pham'));
$splistnb = $d->rawQuery("select name$lang, slugvi, slugen, id, photo from #_product_list where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'));

$newsnb = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('tin-tuc'));
$daily = $d->rawQuery("select name$lang, slugvi, slugen,  date_created, id, photo, link, phone from #_news where type = ?  and find_in_set('hienthi',status) order by numb,id desc", array('dai-ly'));
$tieuchi = $d->rawQuery("select name$lang, slugvi, slugen, desc$lang, date_created, id, photo from #_news where type = ?  and find_in_set('hienthi',status) order by numb,id desc", array('tieu-chi'));

$videonb = $d->rawQuery("select id,name$lang,link_video from #_photo where type = ? and find_in_set('hienthi',status) order by numb, id desc", array('video'));

$partner = $d->rawQuery("select name$lang, link, photo from #_photo where type = ? and find_in_set('hienthi',status) order by numb, id desc", array('doitac'));

/* SEO */
$lgseo = $d->rawQueryOne("select * from #_seopage where type = ? limit 0,1", array('home'));
$seoDB = $seo->getOnDB(0, 'setting', 'update', 'setting');
if (!empty($lgseo['title' . $seolang])) $seo->set('h1', $lgseo['title' . $seolang]);
if (!empty($lgseo['title' . $seolang])) $seo->set('title', $lgseo['title' . $seolang]);
if (!empty($lgseo['keywords' . $seolang])) $seo->set('keywords', $lgseo['keywords' . $seolang]);
if (!empty($lgseo['description' . $seolang])) $seo->set('description', $lgseo['description' . $seolang]);
$seo->set('url', $func->getPageURL());
$imgJson = (!empty($lgseo['options'])) ? json_decode($lgseo['options'], true) : null;
if (empty($imgJson) || ($imgJson['p'] != $lgseo['photo'])) {
    $imgJson = $func->getImgSize($logo['photo'], UPLOAD_SEOPAGE_L . $lgseo['photo']);
    $seo->updateSeoDB(json_encode($imgJson), 'photo', $lgseo['id']);
}
if (!empty($imgJson)) {
    $seo->set('photo', $configBase . THUMBS . '/' . $imgJson['w'] . 'x' . $imgJson['h'] . 'x2/' . UPLOAD_SEOPAGE_L . $lgseo['photo']);
    $seo->set('photo:width', $imgJson['w']);
    $seo->set('photo:height', $imgJson['h']);
    $seo->set('photo:type', $imgJson['m']);
}
