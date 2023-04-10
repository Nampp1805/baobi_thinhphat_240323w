<?php
    /* Background */
    /*$nametype = "background";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Background";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['background'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 900;
    $config['photo']['photo_static'][$nametype]['height'] = 300;
    $config['photo']['photo_static'][$nametype]['thumb'] = '900x300x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';*/

    /* Hình seo trang chủ */
    // $nametype = "seo";
    // $config['photo']['photo_static'][$nametype]['title_main'] = "Hình seo trang chủ";
    // $config['photo']['photo_static'][$nametype]['check'] = array();
    // $config['photo']['photo_static'][$nametype]['images'] = true;
    // $config['photo']['photo_static'][$nametype]['width'] = 500;
    // $config['photo']['photo_static'][$nametype]['height'] = 282;
    // $config['photo']['photo_static'][$nametype]['thumb'] = '500x282x1';
    // $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Banner */

    /* Logo */
    $nametype = "logo";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Logo";
    $config['photo']['photo_static'][$nametype]['check'] = array();
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 160;
    $config['photo']['photo_static'][$nametype]['height'] = 98;
    $config['photo']['photo_static'][$nametype]['thumb'] = '120x100x2';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Favicon */
    $nametype = "favicon";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Favicon";
    $config['photo']['photo_static'][$nametype]['check'] = array();
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 48;
    $config['photo']['photo_static'][$nametype]['height'] = 48;
    $config['photo']['photo_static'][$nametype]['thumb'] = '48x48x2';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Slideshow */
    $nametype = "slide";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['desc_photo'] = true;
    $config['photo']['man_photo'][$nametype]['content_photo'] = true;
    $config['photo']['man_photo'][$nametype]['content_cke_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 600;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '1366x600x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Video */
    /*"noibat" => "Nổi bật",*/
    $nametype = "video";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Video";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['video_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;

    /* Đối tác */
    $nametype = "doitac";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Đối tác";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 5;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 183;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 113;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '175x95x2';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Social */
    $nametype = "social";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Social";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 4;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 30;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 30;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '30x30x2';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';

    /* Watermark */
    /*$nametype = "watermark";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Watermark";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['watermark'] = true;
    $config['photo']['photo_static'][$nametype]['watermark-advanced'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 580;
    $config['photo']['photo_static'][$nametype]['height'] = 580;
    $config['photo']['photo_static'][$nametype]['thumb'] = '580x580x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';*/

    /* Watermark tin tức */
    /*$nametype = "watermark-news";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Watermark tin tức";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['watermark'] = true;
    $config['photo']['photo_static'][$nametype]['watermark-advanced'] = false;
    $config['photo']['photo_static'][$nametype]['width'] = 50;
    $config['photo']['photo_static'][$nametype]['height'] = 50;
    $config['photo']['photo_static'][$nametype]['thumb'] = '50x50x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.png|.PNG|.Png';*/

    /* Video */
    /*$nametype = "video";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Video";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['video'] = true;
    $config['photo']['photo_static'][$nametype]['name'] = true;
    $config['photo']['photo_static'][$nametype]['desc'] = true;
    $config['photo']['photo_static'][$nametype]['content'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 250;
    $config['photo']['photo_static'][$nametype]['height'] = 150;
    $config['photo']['photo_static'][$nametype]['thumb'] = '250x150x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';*/

    /* Popup */
    /*$nametype = "popup";
    $config['photo']['photo_static'][$nametype]['title_main'] = "Popup";
    $config['photo']['photo_static'][$nametype]['check'] = array("hienthi" => "Hiển thị");
    $config['photo']['photo_static'][$nametype]['images'] = true;
    $config['photo']['photo_static'][$nametype]['name'] = true;
    $config['photo']['photo_static'][$nametype]['link'] = true;
    $config['photo']['photo_static'][$nametype]['width'] = 800;
    $config['photo']['photo_static'][$nametype]['height'] = 530;
    $config['photo']['photo_static'][$nametype]['thumb'] = '800x530x1';
    $config['photo']['photo_static'][$nametype]['img_type'] = '.jpg|.gif|.png|.jpeg|.gif';*/

    /* Slideshow product */
    /*$nametype = "slide-product";
    $config['photo']['man_photo'][$nametype]['title_main_photo'] = "Slideshow sản phẩm";
    $config['photo']['man_photo'][$nametype]['check_photo'] = array("hienthi" => "Hiển thị");
    $config['photo']['man_photo'][$nametype]['number_photo'] = 2;
    $config['photo']['man_photo'][$nametype]['images_photo'] = true;
    $config['photo']['man_photo'][$nametype]['avatar_photo'] = true;
    $config['photo']['man_photo'][$nametype]['link_photo'] = true;
    $config['photo']['man_photo'][$nametype]['name_photo'] = true;
    $config['photo']['man_photo'][$nametype]['width_photo'] = 1366;
    $config['photo']['man_photo'][$nametype]['height_photo'] = 600;
    $config['photo']['man_photo'][$nametype]['thumb_photo'] = '200x100x1';
    $config['photo']['man_photo'][$nametype]['img_type_photo'] = '.jpg|.gif|.png|.jpeg|.gif';*/

?>