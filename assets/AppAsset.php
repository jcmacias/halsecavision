<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'css/stylesheet_bootstrap.css',
        'css/stylesheet_bootstrap_theme.css',
        'css/stylesheet_categories.css',
        'css/stylesheet_custom.css',
        'css/stylesheet_font-awesome.min.css',
        'css/stylesheet_lightbox-0.5.css',
        'css/stylesheet_mega_menu.css',
        'css/stylesheet_product_list.css',
        'css/stylesheet_responsive.css',
        'css/stylesheet_suggestionbox.css',
        'css/index_home.css',
        'css/homeslider.css',
    ];
    public $js = [
//        'js/jscript_jquery-1.7.1.min.js',
        'js/jscript_jquery.carouFredSel-6.2.1-packed.js',
        'js/jscript_jquery.elevateZoom-3.0.8.min.js',
        'js/jscript_jquery.equalheights.js',
        'js/jscript_jquery.matchHeight.js',
        'js/jscript_jquery.mousewheel.min.js',
        'js/jscript_jquery.nivo.slider.pack.js',
        'js/jscript_jquery.simplr.smoothscroll.min.js',
        'js/jscript_jquery.touchSwipe.min.js',
        'js/jscript_jquery.ui.totop.js',
        'js/jscript_menu_top.js',
        'js/jscript_script_bootstrap.js',
        'js/jscript_stotal-storage.min.js',
        'js/jscript_suggestionbox.js',
        'js/jscript_top.js',
        'js/jscript_xeasyTooltip.js',
        'js/jscript_xjquery.easing.1.3.js',
        'js/jscript_xjquery.jqtransform.js',
        'js/jscript_xjquery.lightbox-0.5.js',
        'js/jscript_xjscript_script.app.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
