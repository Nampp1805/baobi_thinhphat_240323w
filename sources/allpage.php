<?php
    if(!defined('SOURCES')) die("Error");

    /* Query allpage */
    $copyright = $d->rawQueryOne("select name$lang from #_static where type = ? limit 0,1", array('copyright'));
    $favicon = $d->rawQueryOne("select photo from #_photo where type = ? and act = ? limit 0,1", array('favicon','photo_static'));
    $logo = $d->rawQueryOne("select id, photo, options from #_photo where type = ? and act = ? limit 0,1", array('logo','photo_static'));
    $banner = $d->rawQueryOne("select name$lang,desc$lang,content$lang photo from #_photo where type = ? and act = ? limit 0,1", array('banner','photo_static'));
    $slogan = $d->rawQueryOne("select name$lang from #_static where type = ? limit 0,1", array('slogan'));
    $social1 = $d->rawQuery("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,5", array('social1'));
    $social = $d->rawQuery("select name$lang, photo, link from #_photo where type = ? and find_in_set('hienthi',status) order by numb,id desc limit 0,5", array('social'));
    $splist = $d->rawQuery("select name$lang, slugvi, slugen, id from #_product_list where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'));
    $ttlist = $d->rawQuery("select name$lang, slugvi, slugen, id from #_news_list where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('tin-tuc'));
    $footer = $d->rawQueryOne("select name$lang, content$lang, desc$lang from #_static where type = ? limit 0,1", array('footer'));
    $policy = $d->rawQuery("select name$lang, slugvi, slugen, id, photo from #_news where type = ? and find_in_set('hienthi',status) order by numb,id desc", array('chinh-sach'));


    $tagsProduct = $d->rawQuery("select name$lang, slugvi, slugen, id from #_tags where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('san-pham'));
    $tagsNews = $d->rawQuery("select name$lang, slugvi, slugen, id from #_tags where type = ? and find_in_set('noibat',status) and find_in_set('hienthi',status) order by numb,id desc", array('tin-tuc'));
    /* Get statistic */
    $counter = $statistic->getCounter();
    $online = $statistic->getOnline();

    /* Newsletter */
    if(!empty($_POST['submit-newsletter']))
    {
        $responseCaptcha = $_POST['recaptcha_response_newsletter'];
        $resultCaptcha = $func->checkRecaptcha($responseCaptcha);
        $scoreCaptcha = (!empty($resultCaptcha['score'])) ? $resultCaptcha['score'] : 0;
        $actionCaptcha = (!empty($resultCaptcha['action'])) ? $resultCaptcha['action'] : '';
        $testCaptcha = (!empty($resultCaptcha['test'])) ? $resultCaptcha['test'] : false;
        $dataNewsletter = (!empty($_POST['dataNewsletter'])) ? $_POST['dataNewsletter'] : null;

        /* Valid data */
        if(empty($dataNewsletter['email']))
        {
            $flash->set('error', emailkhongduoctrong);
        }

        if(!empty($dataNewsletter['email']) && !$func->isEmail($dataNewsletter['email']))
        {
            $flash->set('error', emailkhonghople);
        }

        $error = $flash->get('error');

        if(!empty($error))
        {
            $func->transfer($error, $configBase, false);
        }

        /* Save data */
        if(($scoreCaptcha >= 0.5 && $actionCaptcha == 'Newsletter') || $testCaptcha == true)
        {
            $data = array();
            if(!empty($dataNewsletter))
            {
                foreach($dataNewsletter as $k => $v)
                {
                    if(!empty($v))
                    {
                        $data[$k] = $v;
                    }
                }
            }
            $data['date_created'] = time();
            $data['type'] = 'dangkynhantin';

            if($d->insert('newsletter',$data))
            {
                $func->transfer(dangkynhantinthanhcong, $configBase);
            }
            else
            {
                $func->transfer(dangkynhantinthatbai, $configBase, false);
            }
        }
        else
        {
            $func->transfer(dangkynhantinthatbai, $configBase, false);
        }
    }
?>