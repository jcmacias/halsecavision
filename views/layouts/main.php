<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
use app\assets\AppAsset;

AppAsset::register($this);
$bodyHomeIndex=1;
?>
<?php $this->beginPage() ?>
<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml" dir="ltr" lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="keywords" content="Bathroom Home & Garden Kitchen Repair Parts Tools Water Heaters Supplies Sinks Water Taps Accessories ecommerce, open source, shop, online shopping, store ">
    <meta name="description" content="Zen Cart! :  - Bathroom Home & Garden Kitchen Repair Parts Tools Water Heaters Supplies Sinks Water Taps Accessories ecommerce, open source, shop, online shopping, store">
    <meta name="author" content="Halseca Vision" />
    <script type="text/javascript">
        //<![CDATA[
        try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"3fa07cfbd0f1cee5b27c719a11108932",petok:"1f500e5c2f96302ac6d4af5b9d49117906297e3e-1498407186-86400",zone:"template-help.com",rocket:"0",apps:{"abetterbrowser":{"ie":"7"}}}];!function(a,b){a=document.createElement("script"),b=document.getElementsByTagName("script")[0],a.async=!0,a.src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=85b614c0f6/cloudflare.min.js",b.parentNode.insertBefore(a,b)}()}}catch(e){};
        //]]>
    </script>
    <link rel="icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=latin,cyrillic-ext,latin-ext,cyrillic' rel='stylesheet' type='text/css'>
<!--    <base href="http://livedemo00.template-help.com/zencart_55417/">-->
<!--    <link rel="canonical" href="http://livedemo00.template-help.com/zencart_55417/">-->

    <script type="text/javascript" src="js/jscript_jquery-1.7.1.min.js"></script>
<!--    <script type="text/javascript" src="js/jscript_jquery.carouFredSel-6.2.1-packed.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_jquery.elevateZoom-3.0.8.min.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_jquery.equalheights.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_jquery.matchHeight.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_jquery.mousewheel.min.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_jquery.nivo.slider.pack.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_jquery.simplr.smoothscroll.min.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_jquery.touchSwipe.min.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_jquery.ui.totop.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_menu_top.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_script_bootstrap.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_stotal-storage.min.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_suggestionbox.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_top.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_xeasyTooltip.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_xjquery.easing.1.3.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_xjquery.jqtransform.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_xjquery.lightbox-0.5.js"></script>-->
<!--    <script type="text/javascript" src="js/jscript_xjscript_script.app.js"></script>-->
    <script>
        if (typeof zcJS == "undefined" || !zcJS) {
            window.zcJS = { name: 'zcJS', version: '0.1.0.0' };
        };

        zcJS.ajax = function (options) {
            options.url = options.url.replace("&amp;", "&");
            var deferred = $.Deferred(function (d) {
                var securityToken = '325246477a4fcb5ff2b5c25305e177ce';
                var defaults = {
                        cache: false,
                        type: 'POST',
                        traditional: true,
                        dataType: 'json',
                        timeout: 5000,
                        data: $.extend(true,{
                            securityToken: securityToken
                        }, options.data)
                    },
                    settings = $.extend(true, {}, defaults, options);

                d.done(settings.success);
                d.fail(settings.error);
                d.done(settings.complete);
                var jqXHRSettings = $.extend(true, {}, settings, {
                    success: function (response, textStatus, jqXHR) {
                        d.resolve(response, textStatus, jqXHR);
                    },
                    error: function (jqXHR, textStatus, errorThrown) {
                        console.log(jqXHR);
                        d.reject(jqXHR, textStatus, errorThrown);
                    },
                    complete: d.resolve
                });
                $.ajax(jqXHRSettings);
            }).fail(function(jqXHR, textStatus, errorThrown) {
                var response = jqXHR.getResponseHeader('status');
                var responseHtml = jqXHR.responseText;
                var contentType = jqXHR.getResponseHeader("content-type");
                switch (response)
                {
                    case '403 Forbidden':
                        var jsonResponse = JSON.parse(jqXHR.responseText);
                        var errorType = jsonResponse.errorType;
                        switch (errorType)
                        {
                            case 'ADMIN_BLOCK_WARNING':
                                break;
                            case 'AUTH_ERROR':
                                break;
                            case 'SECURITY_TOKEN':
                                break;

                            default:
                                alert('An Internal Error of type '+errorType+' was received while processing an ajax call. The action you requested could not be completed.');
                        }
                        break;
                    default:
                        if (jqXHR.status === 200 && contentType.toLowerCase().indexOf("text/html") >= 0) {
                            document.open();
                            document.write(responseHtml);
                            document.close();
                        } else {
                            alert('An unknown response '+response+': :'+contentType+': :'+errorThrown+' was received while processing an ajax call. The action you requested could not be completed.');
                        }
                }
            });

            var promise = deferred.promise();
            return promise;
        };
        zcJS.timer = function (options) {
            var defaults = {
                    interval: 10000,
                    startEvent: null,
                    intervalEvent: null,
                    stopEvent: null

                },
                settings = $.extend(true, {}, defaults, options);

            var enabled = new Boolean(false);
            var timerId = 0;
            var mySelf;
            this.Start = function()
            {
                this.enabled = new Boolean(true);

                mySelf = this;
                mySelf.settings = settings;
                if (mySelf.enabled)
                {
                    mySelf.timerId = setInterval(
                        function()
                        {
                            if (mySelf.settings.intervalEvent)
                            {
                                mySelf.settings.intervalEvent(mySelf);
                            }
                        }, mySelf.settings.interval);
                    if (mySelf.settings.startEvent)
                    {
                        mySelf.settings.startEvent(mySelf);
                    }
                }
            };
            this.Stop = function()
            {
                mySelf.enabled = new Boolean(false);
                clearInterval(mySelf.timerId);
                if (mySelf.settings.stopEvent)
                {
                    mySelf.settings.stopEvent(mySelf);
                }
            };
        };
    </script>


    <!--[if IE]>
    <script type="text/javascript" src="catalog/view/javascript/jquery/fancybox/jquery.fancybox-1.3.4-iefix.js"></script>
    <![endif]-->
    <!--[if lt IE 8]><div style='clear:both;height:59px;padding:0 15px 0 15px;position:relative;z-index:10000;text-align:center;'><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." /></a></div><![endif]-->

    <script>

        $(document).ready(function() {
            var origsrc = $("#productMainImage span img").attr("src");
            $("#productAdditionalImages .additionalImages a img").hover(
                function () {
                    $("#productMainImage span img").attr('src', this.src);
                });

            $('.main-image #productMainImage .image a img').elevateZoom({
                easing : true,
                zoomWindowFadeIn: 500,
                zoomWindowFadeOut: 500,
                lensFadeIn: 500,
                lensFadeOut: 500
            });

            var origsrc = $("#productMainImage span img").attr("src");
            var orighref = $("#productMainImage span a").attr("href");
            $("#productAdditionalImages .additionalImages a img").hover(
                function () {
                    $("#productMainImage span.image a").attr('href', this.src);
                    $('.main-image #productMainImage .image a img').elevateZoom({
                        easing : true,
                        zoomWindowFadeIn: 500,
                        zoomWindowFadeOut: 500,
                        lensFadeIn: 500,
                        lensFadeOut: 500
                    });
                });
        });

    </script>



    <!--[if lte IE 9]> <html class="ie9_all" lang="en"> <![endif]-->
    <!--[if gte IE 9]>
    <style type="text/css">
        section {
            filter: none;
        }
    </style>
    <![endif]-->

<body id="indexHomeBody">
<?php $this->beginBody() ?>

<div id="page">
    <!-- ========== IMAGE BORDER TOP ========== -->

    <!-- BOF- BANNER TOP display -->

    <!-- EOF- BANNER TOP display -->

    <!-- ====================================== -->

    <!-- ========== HEADER ========== -->




    <header>
        <div class="nav">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-md-7 col-lg-7 fright">
                        <div id="currencies-block-top" class="top_dropdown_menu">
                            <!-- ========== CURRENCIES ========= -->
<!--                            <form name="currencies" id="currencies_form" action="http://livedemo00.template-help.com/zencart_55417/index.php?main_page=index" method="get" >-->
<!--                                <input type="hidden" name="currency" id="currency_value" value="" />-->
<!--                                <input type="hidden" name="main_page" value="index" />-->
<!--                                <div class="btn-group">-->
<!--                              <span class="trigger_down dropdown-toggle" data-toggle="dropdown">-->
<!--                                <span class="lbl">USD </span>-->
<!--                              </span>-->
<!--                                    <ul class="dropdown-menu" role="menu">-->
<!--                                        <li class='current_cur'><a href="javascript:void(0);" onclick='document.getElementById("currency_value").value="USD";'>US Dollar</a></li><li><a href='javascript:void(0);' onclick='document.getElementById("currency_value").value="EUR";document.getElementById("currencies_form").submit();'>Euro</a></li><li><a href='javascript:void(0);' onclick='document.getElementById("currency_value").value="GBP";document.getElementById("currencies_form").submit();'>GB Pound</a></li>                              </ul>-->
<!--                                </div>-->
<!--                            </form>-->
                            <!-- ====================================== -->
                        </div>
                        <ul class="header_user_info customer_links">
                            <!-- ========== NAVIGATION LINKS ========== -->

                            <li ><a style = "font-size: 37px" href="http://www.facebook.com"><i class="fa fa-facebook-square fa-2" aria-hidden="true"></i></a></li>
                            <li ><a style = "font-size: 37px" href="http://www.twitter.com"><i class="fa fa-twitter-square fa-2" aria-hidden="true"></i></a></li>

                            <!-- ====================================== -->
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-5 col-lg-5">
                        <div class="phone">
                            <p>(954) 951-6477</p>
                            <span>Hours: 8am-5pm  M-Fr</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom">
            <div class="container">
                <div class="row clearfix">
                    <div id="header_logo" class="col-xs-12 col-sm-3">
                        <!-- ========== LOGO ========== -->
                        <a href="/"><img src="/images/logo.png"  alt="" style="width: 365px;padding-top: 10px;"/></a>
                        <!-- ========================== -->
                    </div>
                    <div class="col-xs-12 col-sm-9 col-md-9">
                        <div class="header_cust_block clearfix">
                            <p>Free Quote</p>
                            <div>
                                <span><a href="mailto:info@halsecavision.com">Contact us today.</a></span>
                                <span>We'll help you to find the best price.</span>
                            </div>
                        </div>
                        <div class="shopping_cart" id="shopping_cart">
                            <!-- ========== SHOPPING CART ========== -->
                            <div class="shop-box-wrap">
                                <span class="cart_title" >Purchace List</span><span class="st3"> (empty) </span>                                </div>
                            <div class="shopping_cart_content" id="shopping_cart_content" >
                                <div class="none"> Your list is empty</div>                                </div>
                        </div>
                        <!-- =================================== -->
                        <div id="search_block" class="clearfix">
                            <!-- ========== SEARCH ========== -->
                            <form name="quick_find_header" action="#" method="get" class="form-inline form-search pull-right">
                                <input type="hidden" name="main_page" value="advanced_search_result" /><input type="hidden" name="search_in_description" value="1" /><input type="hidden" name="zenid" value="40mv0tfoegcguu0cep33hhokj3" />                                        <label class="sr-only" for="searchInput">Search</label>
                                <input class="form-control" id="searchInput" type="text" name="keyword" />
                                <button type="submit" class="button-search"><i class="fa fa-search"></i><b>Search</b></button>
                            </form>
                            <!-- ============================ -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">

                        <div class="top_menu clearfix">
                            <div class="cat-title">MENU</div>
                            <!--bof-mega menu display-->

                            <div id="mega-wrapper" class="stickUpTop"><!-- bof mega-wrapper -->

                                <ul class="mega-menu col-sm-12"><!-- bof mega-menu -->
                                    <li class="quicklinks-li"><a  class="drop" href="<?= Url::to(['site/index']);?>">Home</a></li>
                                    <li class="quicklinks-li"><a  class="drop" href="<?= Url::to(['product/index']);?>">Product<span class="label">New!</span></a></li>
                                    <li class="quicklinks-li"><a  class="drop" href="<?= Url::to(['purchase/index']);?>">Purchase</a></li>
                                    <li class="quicklinks-li"><a  class="drop" href="<?= Url::to(['category/index']);?>">Categories<span class="label">New!</span></a></li>
                                    <li class="quicklinks-li"><a  class="drop" href="<?= Url::to(['site/']);?>">How Work</a></li>
                                    <li class="quicklinks-li"><a  class="drop" href="<?= Url::to(['site/about']);?>">About</a></li>
                                    <li class="quicklinks-li"><a  class="drop" href="<?= Url::to(['site/contact']);?>">Contact</a></li>

                                </ul><!-- eof mega-menu -->

                            </div><!-- eof mega-wrapper -->

                            <!--eof-mega menu display-->
                            <div class="clearBoth"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ========== CATEGORIES TABS ========= -->
    <!-- ==================================== -->


    <!-- ============================ -->
    <section class="ie9_all">
        <div class="container">
            <?php echo Breadcrumbs::widget([
                'homeLink' => [
                    'label' => '<i class="fa fa-home" style="font-size: 20px; color:#3499DA"></i>',
                    'url' => Yii::$app->homeUrl,
                    'separator'=>'>>',
                    'encode'=>false,
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ]);?>
        </div>
    <?= $content ?>
</section>
    <!-- ========== FOOTER ========== -->
    <footer>
        <div class="footer-container">



            <div class="container">
                <div class="row">
                    <div class="footer-menu col-xs-12 col-sm-3">
                        <h2 class="title_btn1">Quick Links</h2>

                        <div class="ezpagesFooterCol col1" style="width: 100%">
                            <ul>
                                <li><a href="">Home</a></li>
                                <li><a href="">New Products</a></li>
                                <li><a href="">Specials</a></li>
                                <li><a href="">All Products</a></li>
                                <li><a href="">Reviews</a></li>
                                <li><a href="">Contacts</a></li>
                                <li><a href=" ">FAQs</a></li>
                            </ul>
                        </div>					</div>
                    <div class="account col-xs-12 col-sm-3 mb">
                        <h2 class="title_btn2">Customers</h2>
                        <ul class="account_list">
                            <li><a href=" ">Log In</a></li>
                            <li><a href="">Create Account</a></li>
                            <li><a href="">Shipping &amp; Returns</a></li>
                            <li><a href="">Privacy Notice</a></li>
                            <li><a href="">Conditions of Use</a></li>
                        </ul>
                    </div>
                    <div class="social col-xs-12 col-sm-3 mb">
                        <h2 class="title_btn3">Follow Us</h2>
                        <ul class="social_list">
                            <li><a href="http://www.facebook.com">Facebook</a></li>
                            <li><a href="http://www.twitter.com">Twitter</a></li>
                            <li><a href="#">RSS</a></li>
                        </ul>
                    </div>
                    <div class="contact-block col-xs-12 col-sm-3 mb">
                        <h2 class="title_btn4">Contact Us</h2>
                        <div class="contact_list">
                            <p>4700 W Prospect Rd #103,<br/>
                                Fort Lauderdale, FL, 33309</p>
                            <div class="phone">
                                (954) 951-6477  </div>
                        </div>
                    </div>
                    <div><!-- {%FOOTER_LINK} --></div>
                </div>
                <div class="back_to_top"><a href="#"></a></div>
            </div>


        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <!-- ========== COPYRIGHT ========== -->
                        <p>&copy; HalsecaVision <?= date('Y') ?></p>
                        <!-- =============================== -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ============================ -->
</div>
<!-- ========================================= -->

<script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-7078796-5']);
    _gaq.push(['_trackPageview']);
    (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
    })();</script>
<?php $this->endBody() ?>
</body><!-- Google Tag Manager --><noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-P9FT69"height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript><script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src='//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);})(window,document,'script','dataLayer','GTM-P9FT69');</script><!-- End Google Tag Manager -->
</html>
<?php $this->endPage() ?>
