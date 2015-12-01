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
        'assets/css/icons/icomoon/styles.css',
        'assets/css/minified/bootstrap.min.css',
        'assets/css/minified/core.min.css',
        'assets/css/minified/components.min.css',
        'assets/css/minified/colors.min.css'


    ];
    public $js = [
        'assets/js/plugins/loaders/pace.min.js',
        'assets/js/core/libraries/jquery.min.js',
        'assets/js/core/libraries/bootstrap.min.js',
        'assets/js/plugins/loaders/blockui.min.js',
        'assets/js/plugins/visualization/d3/d3.min.js',
        'assets/js/plugins/visualization/d3/d3_tooltip.js',
        'assets/js/plugins/forms/styling/switchery.min.js',
        'assets/js/plugins/forms/styling/uniform.min.js',
        'assets/js/plugins/forms/selects/bootstrap_multiselect.js',
        'assets/js/plugins/ui/moment/moment.min.js',
        'assets/js/plugins/pickers/daterangepicker.js',
        'assets/js/core/app.js',
        //'assets/js/pages/dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
