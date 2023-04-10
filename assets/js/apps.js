/* Validation form */
validateForm("validation-newsletter");
validateForm("validation-cart");
validateForm("validation-user");
validateForm("validation-contact");

/* Lazys */
NN_FRAMEWORK.Lazys = function(){
    if(isExist($(".lazy")))
    {
        var lazyLoadInstance = new LazyLoad({
            elements_selector: ".lazy"
        });
    }
};

/* Load name input file */
NN_FRAMEWORK.loadNameInputFile = function(){
    if(isExist($(".custom-file input[type=file]")))
    {
        $('body').on('change','.custom-file input[type=file]', function(){
            var fileName = $(this).val();
            fileName = fileName.substr(fileName.lastIndexOf('\\') + 1, fileName.length);
            $(this).siblings('label').html(fileName);
        });
    }
};

/* Toc */
NN_FRAMEWORK.Toc = function(){
    if(isExist($(".toc-list")))
    {
        $(".toc-list").toc({
            content: "div#toc-content",
            headings: "h2,h3,h4"
        });

        if(!$(".toc-list li").length) $(".meta-toc").hide();

        $('.toc-list').find('a').click(function(){
            var x = $(this).attr('data-rel');
            goToByScroll(x,100);
        });
    }
};
/* Back to top */
NN_FRAMEWORK.GoTop = function(){
    $(window).scroll(function(){
        if(!$('.scrollToTop').length) $("body").append('<div class="scrollToTop"><img src="'+GOTOP+'" alt="Go Top"/></div>');
        if($(this).scrollTop() > 100) $('.scrollToTop').fadeIn();
        else $('.scrollToTop').fadeOut();
    });

    $('body').on("click",".scrollToTop",function() {
        $('html, body').animate({scrollTop : 0},800);
        return false; 
    });
};

/* Alt images */
NN_FRAMEWORK.AltImg = function(){
    $('img').each(function(index, element) {
        if(!$(this).attr('alt') || $(this).attr('alt')=='')
        {
            $(this).attr('alt',WEBSITE_NAME);
        }
    });
};

/* Menu */
NN_FRAMEWORK.Menu = function(){
    /* Menu remove empty ul */
    if(isExist($('.menu')))
    {
        $('.menu ul li a').each(function(){
            $this = $(this);

            if(!isExist($this.next('ul').find('li')))
            {
                $this.next('ul').remove();
                $this.removeClass('has-child');
            }
        });
    }
    /*$(window).bind("load resize", function(){
        if($(document).width() > 768){
            var api = $(".peShiner").peShiner({ api: true,glow:0, paused: true, reverse: true, repeat: 1, color: 'ocean'});
            api.resume();
        }
    });*/
    /* Menu fixed */
    $(window).scroll(function(){
        var cach_top = $(window).scrollTop();
        var heaigt_header = $('.header').height() + 50;

        if(cach_top > heaigt_header){
            if(!$('.menu,.menu-res').hasClass('fix_head animate__animated animate__fadeInDown')){
                $('.menu,.menu-res').addClass('fix_head animate__animated animate__fadeInDown');
            }
        }else{
            $('.menu,.menu-res').removeClass('fix_head animate__animated animate__fadeInDown');
        }
    });
    /*
    $('.clicktk').click(function(event) {
        $('.search').stop().slideToggle(500);
    });
    */
    /* Mmenu */
    if(isExist($("nav#menu")))
    {
        $('nav#menu').mmenu({
            "extensions": ["border-full", "position-left", "position-front","theme-white"],
            navbar: {
                title: 'MENU'
            },
            navbars: [{
                position: 'top',
                content: ['prev', 'title', 'close']
            }]
            // ,
            // "slidingSubmenus": false,
            // "pageScroll": {
            //     "scroll": true,
            //     "update": true
            // }
        });
    }
    // if(isExist($(".bando1")))
    // {
    // $(".bando1 a").click(function(event) {
    //     $(".bando1 a").removeClass('active');
    //     $(this).addClass('active');
    //     var id = $(this).data('id');
    //     $.ajax({
    //         url: 'api/map.php',
    //         type: 'POST',
    //         dataType: 'html',
    //         data: {id: id},
    //         success: function(result){
    //             if(result!=''){
    //                 $('#footer-map').html(result);
    //             }
    //         }
    //     });
    //     return false;
    // });
    // }
};

/* Tools */
NN_FRAMEWORK.Tools = function(){
    if(isExist($(".toolbar")))
    {
        $(".footer").css({marginBottom:$(".toolbar").innerHeight()});
    }
};

/* Popup */
NN_FRAMEWORK.Popup = function(){
    if(isExist($("#popup")))
    {
        $('#popup').modal('show');
    }
};

/* Wow */
/*NN_FRAMEWORK.Wows = function(){
    new WOW().init();
};*/

/* Pagings */
NN_FRAMEWORK.Pagings = function(){
    /* Products */
    if(isExist($(".paging-product")))
    {
        loadPaging("api/product.php?perpage=8",'.paging-product');
        NN_FRAMEWORK.Lazys();
    }
    if(isExist($(".paging-product1")))
    {   
        $(".clicksp").click(function(){
            $(".clicksp").removeClass('active');
            $(this).addClass('active');
            var list = $(this).data("list");
            loadPaging("api/product.php?perpage=8&idList="+list,'.paging-product1');
            NN_FRAMEWORK.Lazys();
        });
        $(".clicksp:first").trigger('click');
    }

    /* Categories */
    if(isExist($(".paging-product-category")))
    {
        $(".paging-product-category").each(function(){
            var list = $(this).data("list");
            loadPaging("api/product.php?perpage=8&idList="+list,'.paging-product-category-'+list);
            NN_FRAMEWORK.Lazys();
        })
    }
    if(isExist($(".paging-product-category1")))
    {
        $(".paging-product-category1").each(function(){
            var list = $(this).data("list");
            loadPaging("api/product.php?perpage=8&idList="+list+"&idCat=0",'.paging-product-category1-'+list);
            NN_FRAMEWORK.Lazys();
        });
        $(".clicksp").click(function(){
            $(this).parents('.cap2').find('.clicksp').removeClass('active');
            $(this).addClass('active');
            var list = $(this).data("list");
            var cat = $(this).data("cat");
            loadPaging("api/product.php?perpage=8&idList="+list+"&idCat="+cat,'.paging-product-category1-'+list);
            NN_FRAMEWORK.Lazys();
        });
    }
};

/* Photobox */
NN_FRAMEWORK.Photobox = function(){
    if(isExist($(".album-gallery")))
    {
        $('.album-gallery').photobox('a',{thumbs:true,loop:false});
    }
};

/* Comment */
/*NN_FRAMEWORK.Comment = function(){
    if(isExist($(".comment-page")))
    {
        $(".comment-page").comments({
            url: 'api/comment.php'
        });
    }
};*/

/* DatePicker */
/*NN_FRAMEWORK.DatePicker = function(){
    if(isExist($('#birthday')))
    {
        $('#birthday').datetimepicker({
            timepicker: false,
            format: 'd/m/Y',
            formatDate: 'd/m/Y',
            minDate: '01/01/1950',
            maxDate: TIMENOW
        });
    }
};*/

/* Search */
NN_FRAMEWORK.Search = function(){
    if(isExist($(".icon-search")))
    {
        $(".icon-search").click(function(){
            if($(this).hasClass('active'))
            {
                $(this).removeClass('active');
                $(".search-grid").stop(true,true).animate({opacity: "0",width: "0px"}, 200);   
            }
            else
            {
                $(this).addClass('active');                            
                $(".search-grid").stop(true,true).animate({opacity: "1",width: "230px"}, 200);
            }
            document.getElementById($(this).next().find("input").attr('id')).focus();
            $('.icon-search i').toggleClass('bi bi-x-lg');
        });
    }
};

/* Videos */
NN_FRAMEWORK.Videos = function(){
    /* Fancybox */
    $('.fancybox').fancybox({
        transitionEffect: "fade",
        transitionEffect: "slide",
        transitionEffect: "circular",
        transitionEffect: "tube",
        transitionEffect: "zoom-in-out",
        transitionEffect: "rotate",
        transitionEffect: "fade",
        transitionDuration: 800,
        animationEffect: "fade",
        animationDuration: 800,
        slideShow: {
            autoStart: true,
            speed: 3000
        },
        arrows: true,
        infobar: true,
        toolbar: true,
        hash: false
    });

    if(isExist($('[data-fancybox="video"]')))
    {
        $('[data-fancybox="video"]').fancybox({
            transitionEffect: "fade",
            transitionDuration: 800,
            animationEffect: "fade",
            animationDuration: 800,
            arrows: true,
            infobar: false,
            toolbar: true,
            hash: false
        });
    }
    if(isExist($('.item-video2')))
    {
        $('.item-video2').click(function(event) {
            var id = $(this).data('id');
            $.ajax({
                url:'api/video.php',
                type: "POST",
                dataType: 'html',
                data: {
                    id: id
                },
                beforeSend: function(){
                    holdonOpen();
                },
                success: function(result){
                    $('.item-video1').html(result);
                    holdonClose();
                }
            });
        });
    }
};

/* Owl Data */
NN_FRAMEWORK.OwlData = function(obj){
    if(!isExist(obj)) return false;
    var xsm_items = obj.attr("data-xsm-items");
    var sm_items = obj.attr("data-sm-items");
    var md_items = obj.attr("data-md-items");
    var lg_items = obj.attr("data-lg-items");
    var xlg_items = obj.attr("data-xlg-items");
    var rewind = obj.attr("data-rewind");
    var autoplay = obj.attr("data-autoplay");
    var loop = obj.attr("data-loop");
    var lazyLoad = obj.attr("data-lazyload");
    var mouseDrag = obj.attr("data-mousedrag");
    var touchDrag = obj.attr("data-touchdrag");
    var animations = obj.attr("data-animations");
    var smartSpeed = obj.attr("data-smartspeed");
    var autoplaySpeed = obj.attr("data-autoplayspeed");
    var autoplayTimeout = obj.attr("data-autoplaytimeout");
    var dots = obj.attr("data-dots");
    var nav = obj.attr("data-nav");
    var navText = false;
    var navContainer = false;
    var responsive = {};
    var responsiveClass = true;
    var responsiveRefreshRate = 200;

    if(xsm_items != '') { xsm_items = xsm_items.split(":"); }
    if(sm_items != '') { sm_items = sm_items.split(":"); }
    if(md_items != '') { md_items = md_items.split(":"); }
    if(lg_items != '') { lg_items = lg_items.split(":"); }
    if(xlg_items != '') { xlg_items = xlg_items.split(":"); }
    if(rewind == 1) { rewind = true; } else { rewind = false; };
    if(autoplay == 1) { autoplay = true; } else { autoplay = false; };
    if(loop == 1) { loop = true; } else { loop = false; };
    if(lazyLoad == 1) { lazyLoad = true; } else { lazyLoad = false; };
    if(mouseDrag == 1) { mouseDrag = true; } else { mouseDrag = false; };
    if(animations != '') { animations = animations; } else { animations = false; };
    if(smartSpeed > 0) { smartSpeed = Number(smartSpeed); } else { smartSpeed = 800; };
    if(autoplaySpeed > 0) { autoplaySpeed = Number(autoplaySpeed); } else { autoplaySpeed = 800; };
    if(autoplayTimeout > 0) { autoplayTimeout = Number(autoplayTimeout); } else { autoplayTimeout = 5000; };
    if(dots == 1) { dots = true; } else { dots = false; };
    if(nav == 1)
    {
        nav = true;
        navText = obj.attr("data-navtext");
        navContainer = obj.attr("data-navcontainer");

        if(navText != '')
        {
            navText = (navText.indexOf("|") > 0) ? navText.split("|") : navText.split(":");
            navText = [navText[0],navText[1]];
        }

        if(navContainer != '')
        {
            navContainer = navContainer;
        }
    }
    else
    {
        nav = false;
    };

    responsive = {
        0: {
            items: Number(xsm_items[0]),
            margin: Number(xsm_items[1])
        },
        481: {
            items: Number(sm_items[0]),
            margin: Number(sm_items[1])
        },
        769: {
            items: Number(md_items[0]),
            margin: Number(md_items[1])
        },
        1025: {
            items: Number(lg_items[0]),
            margin: Number(lg_items[1])
        },
        1200: {
            items: Number(xlg_items[0]),
            margin: Number(xlg_items[1])
        }
    };

    obj.owlCarousel({
        rewind: rewind,
        autoplay: autoplay,
        loop: loop,
        lazyLoad: lazyLoad,
        mouseDrag: mouseDrag,
        touchDrag: touchDrag,
        smartSpeed: smartSpeed,
        autoplaySpeed: autoplaySpeed,
        autoplayTimeout: autoplayTimeout,
        dots: dots,
        nav: nav,
        navText: navText,
        navContainer: navContainer,
        responsiveClass: responsiveClass,
        responsiveRefreshRate: responsiveRefreshRate,
        responsive: responsive
    });

    if(autoplay)
    {
        obj.on("translate.owl.carousel", function(event){
            obj.trigger('stop.owl.autoplay');
        });

        obj.on("translated.owl.carousel", function(event){
            obj.trigger('play.owl.autoplay',[autoplayTimeout]);
        });
    }

    if(animations && isExist(obj.find("[owl-item-animation]")))
    {
        var animation_now = '';
        var animation_count = 0;
        var animations_excuted = [];
        var animations_list = (animations.indexOf(",")) ? animations.split(",") : animations;

        obj.on("changed.owl.carousel", function(event){
            $(this).find(".owl-item.active").find("[owl-item-animation]").removeClass(animation_now);
        });

        obj.on("translate.owl.carousel", function(event){
            var item = event.item.index;

            if(Array.isArray(animations_list))
            {
                var animation_trim = animations_list[animation_count].trim();

                if(!animations_excuted.includes(animation_trim))
                {
                    animation_now = 'animate__animated ' + animation_trim;
                    animations_excuted.push(animation_trim);
                    animation_count++;
                }
                
                if(animations_excuted.length == animations_list.length)
                {
                    animation_count = 0;
                    animations_excuted = [];
                }
            }
            else
            {
                animation_now = 'animate__animated ' + animations_list.trim();
            }
            $(this).find('.owl-item').eq(item).find('[owl-item-animation]').addClass(animation_now);
        });
    }
};

/* Owl Page */
NN_FRAMEWORK.OwlPage = function(){
    if(isExist($(".owl-page")))
    {
        $(".owl-page").each(function(){
            NN_FRAMEWORK.OwlData($(this));
        });
    }
    /*if(isExist($(".owl-tieuchi")))
    {
        $('.owl-tieuchi').owlCarousel({
            rewind: true,
            autoplay: true,
            loop: true,
            lazyLoad: true,
            mouseDrag: true,
            touchDrag: true,
            smartSpeed: 250,
            autoplaySpeed: 1000,
            nav: false,
            dots: false,
            responsiveClass:true,
            responsiveRefreshRate: 200,
            responsive: {
                0: {
                    items: 2,
                    margin: 10
                },
                481: {
                    items: 3,
                    margin: 10
                },
                769: {
                    items: 3,
                    margin: 10
                }
            }
        });
    }*/
};

/* Dom Change */
NN_FRAMEWORK.DomChange = function(){
    /* Video Fotorama */
    /*$('#video-fotorama').one('DOMSubtreeModified', function(){
        $("#fotorama-videos").fotorama();
    });*/

    /* Video Select */
    $('#video-select').one('DOMSubtreeModified', function(){
        $('.listvideos').change(function() 
        {
            var id = $(this).val();
            $.ajax({
                url:'api/video.php',
                type: "POST",
                dataType: 'html',
                data: {
                    id: id
                },
                beforeSend: function(){
                    holdonOpen();
                },
                success: function(result){
                    $('.video-main').html(result);
                    holdonClose();
                }
            });
        });
    });

    /* Chat Facebook */
    $('#messages-facebook').one('DOMSubtreeModified', function(){
        $(".js-facebook-messenger-box").on("click", function(){
            $(".js-facebook-messenger-box, .js-facebook-messenger-container").toggleClass("open"), $(".js-facebook-messenger-tooltip").length && $(".js-facebook-messenger-tooltip").toggle()
        }), $(".js-facebook-messenger-box").hasClass("cfm") && setTimeout(function(){
            $(".js-facebook-messenger-box").addClass("rubberBand animated")
        }, 3500), $(".js-facebook-messenger-tooltip").length && ($(".js-facebook-messenger-tooltip").hasClass("fixed") ? $(".js-facebook-messenger-tooltip").show() : $(".js-facebook-messenger-box").on("hover", function(){
            $(".js-facebook-messenger-tooltip").show()
        }), $(".js-facebook-messenger-close-tooltip").on("click", function(){
            $(".js-facebook-messenger-tooltip").addClass("closed")
        }));
        $(".search_open").click(function(){
            $(".search_box_hide").toggleClass('opening');
        });
    });
};

/* Cart */
NN_FRAMEWORK.Cart = function(){
    /* Add */
    $("body").on("click",".addcart",function(){
        $this = $(this);
        $parents = $this.parents(".right-pro-detail");
        var id = $this.data("id");
        var action = $this.data("action");
        var quantity = $parents.find(".quantity-pro-detail").find(".qty-pro").val();
        quantity = (quantity) ? quantity : 1;
        var color = $parents.find(".color-block-pro-detail").find(".color-pro-detail input:checked").val();
        color = (color) ? color : 0;
        var size = $parents.find(".size-block-pro-detail").find(".size-pro-detail input:checked").val();
        size = (size) ? size : 0;

        if(id)
        {
            $.ajax({
                url:'api/cart.php',
                type: "POST",
                dataType: 'json',
                async: false,
                data: {
                    cmd: 'add-cart',
                    id: id,
                    color: color,
                    size: size,
                    quantity: quantity
                },
                beforeSend: function(){
                    holdonOpen();
                },
                success: function(result){
                    if(action=='addnow')
                    {
                        $('.count-cart').html(result.max);
                        $.ajax({
                            url:'api/cart.php',
                            type: "POST",
                            dataType: 'html',
                            async: false,
                            data: {
                                cmd: 'popup-cart'
                            },
                            success: function(result){
                                $("#popup-cart .modal-body").html(result);
                                $('#popup-cart').modal('show');
                                NN_FRAMEWORK.Lazys();
                                holdonClose();
                            }
                        });
                    }
                    else if(action=='buynow')
                    {
                        window.location = CONFIG_BASE + "gio-hang";
                    }
                }
            });
        }
    });

    /* Delete */
    $("body").on("click",".del-procart",function(){
        confirmDialog("delete-procart", LANG['delete_product_from_cart'], $(this));
    });

    /* Counter */
    $("body").on("click",".counter-procart",function(){
        var $button = $(this);
        var quantity = 1;
        var input = $button.parent().find("input");
        var id = input.data('pid');
        var code = input.data('code');
        var oldValue = $button.parent().find("input").val();
        if($button.text() == "+") quantity = parseFloat(oldValue) + 1;
        else if(oldValue > 1) quantity = parseFloat(oldValue) - 1;
        $button.parent().find("input").val(quantity);
        updateCart(id,code,quantity);
    });

    /* Quantity */
    $("body").on("change","input.quantity-procart",function(){
        var quantity = ($(this).val() < 1) ? 1 : $(this).val();
        $(this).val(quantity);
        var id = $(this).data("pid");
        var code = $(this).data("code");
        updateCart(id,code,quantity);
    });

    /* City */
    if(isExist($(".select-city-cart")))
    {
        $(".select-city-cart").change(function(){
            var id = $(this).val();
            loadDistrict(id);
            loadShip();
        });
    }

    /* District */
    if(isExist($(".select-district-cart")))
    {
        $(".select-district-cart").change(function(){
            var id = $(this).val();
            loadWard(id);
            loadShip();
        });
    }

    /* Ward */
    if(isExist($(".select-ward-cart")))
    {
        $(".select-ward-cart").change(function(){
            var id = $(this).val();
            loadShip(id);
        });
    }

    /* Payments */
    if(isExist($(".payments-label")))
    {
        $(".payments-label").click(function(){
            var payments = $(this).data("payments");
            $(".payments-cart .payments-label, .payments-info").removeClass("active");
            $(this).addClass("active");
            $(".payments-info-"+payments).addClass("active");
        });
    }

    /* Colors */
    if(isExist($(".color-pro-detail")))
    {
        $(".color-pro-detail input").click(function(){
            $this = $(this).parents("label.color-pro-detail");
            $parents = $this.parents(".attr-pro-detail");
            $parents_detail = $this.parents(".grid-pro-detail");
            $parents.find(".color-block-pro-detail").find(".color-pro-detail").removeClass("active");
            $parents.find(".color-block-pro-detail").find(".color-pro-detail input").prop("checked",false);
            $this.addClass("active");
            $this.find("input").prop("checked",true);
            var id_color = $parents.find(".color-block-pro-detail").find(".color-pro-detail input:checked").val();
            var id_pro = $this.data('idproduct');

            $.ajax({
                url:'api/color.php',
                type: "POST",
                dataType: 'html',
                data: {
                    id_color: id_color,
                    id_pro: id_pro
                },
                beforeSend: function(){
                    holdonOpen();
                },
                success: function(result){
                    if(result)
                    {
                        $parents_detail.find('.left-pro-detail').html(result);
                        MagicZoom.refresh("Zoom-1");
                        NN_FRAMEWORK.OwlData($('.owl-pro-detail'));
                        NN_FRAMEWORK.Lazys();
                    }
                    holdonClose();
                }
            });
        });
    }

    /* Sizes */
    if(isExist($(".size-pro-detail")))
    {
        $(".size-pro-detail input").click(function(){
            $this = $(this).parents("label.size-pro-detail");
            $parents = $this.parents(".attr-pro-detail");
            $parents.find(".size-block-pro-detail").find(".size-pro-detail").removeClass("active");
            $parents.find(".size-block-pro-detail").find(".size-pro-detail input").prop("checked",false);
            $this.addClass("active");
            $this.find("input").prop("checked",true);
        });
    }

    /* Quantity detail page */
    if(isExist($(".quantity-pro-detail span")))
    {
        $(".quantity-pro-detail span").click(function(){
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if($button.text() == "+")
            {
                var newVal = parseFloat(oldValue) + 1;
            }
            else
            {
                if(oldValue > 1) var newVal = parseFloat(oldValue) - 1;
                else var newVal = 1;
            }
            $button.parent().find("input").val(newVal);
        });
    }
};

/* Slick */
NN_FRAMEWORK.SlickPage = function(){
    if(isExist($(".slick-v-3")))
    {
        $('.slick-v-3').slick({
            infinite: true,
            autoplaySpeed: 3000,
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveHeight: true,
            vertical: true,
            autoplay: true,
            arrows:false,
            dots: false,
            responsive: [{
                breakpoint: 481,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            }]
        });
    }
    if(isExist($(".slick-gt")))
    {
        $('.slick-gt').slick({
            infinite: true,
            autoplaySpeed: 3000,
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
            vertical: true,
            autoplay: true,
            arrows:true,
            dots: false,
        });
    }
    if(isExist($(".danhmucct")))

    {

        $('.plus-nClick1').click(function(e) {

          $(this).parents('.level0').toggleClass('opened');

          $(this).parents('.level0').children('ul').slideToggle(200);

        });

        $('.plus-nClick2').click(function(e) {

          $(this).parents('.level1').toggleClass('opened');

          $(this).parents('.level1').children('ul').slideToggle(200);

        });

        $('.plus-nClick3').click(function(e) {

            $(this).parents('.level2').toggleClass('opened');

            $(this).parents('.level2').children('ul').slideToggle(200);

        });

        $('.plus-nClick4').click(function(e) {

            $(this).parents('.level3').toggleClass('opened');

            $(this).parents('.level3').children('ul').slideToggle(200);

        });

    }
};

/* Aos */
NN_FRAMEWORK.AosAnimation = function(){
    AOS.init({
        duration: 1000,
        offset: 50,
    });
    $( window ).load(function() {
        AOS.refresh
    });
    $(window).scroll(function(){
        AOS.refresh
    });
};

/* Ready */
$(document).ready(function(){
    NN_FRAMEWORK.AosAnimation();
    NN_FRAMEWORK.SlickPage();
    NN_FRAMEWORK.Lazys();
    NN_FRAMEWORK.Tools();
    NN_FRAMEWORK.Popup();
    /*NN_FRAMEWORK.Wows();*/
    NN_FRAMEWORK.AltImg();
    NN_FRAMEWORK.GoTop();
    NN_FRAMEWORK.Menu();
    NN_FRAMEWORK.OwlPage();
    NN_FRAMEWORK.Pagings();
    NN_FRAMEWORK.Cart();
    NN_FRAMEWORK.Videos();
    NN_FRAMEWORK.Photobox();
    /*NN_FRAMEWORK.Comment();*/
    NN_FRAMEWORK.Search();
    NN_FRAMEWORK.DomChange();
    /*NN_FRAMEWORK.DatePicker();*/
    NN_FRAMEWORK.loadNameInputFile();
    NN_FRAMEWORK.Toc();
});