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
        'css/icons/icomoon/styles.css',
        'css/minified/bootstrap.min.css',
        'css/minified/core.min.css',
        'css/minified/components.min.css',
        'css/minified/colors.min.css'


    ];
    public $js = [
        'js/plugins/loaders/pace.min.js',
        'js/core/libraries/jquery.min.js',
        'js/core/libraries/bootstrap.min.js',
        'js/plugins/loaders/blockui.min.js',
        'js/plugins/visualization/d3/d3.min.js',
        'js/plugins/visualization/d3/d3_tooltip.js',
        'js/plugins/forms/styling/switchery.min.js',
        'js/plugins/forms/styling/uniform.min.js',
        'js/plugins/forms/selects/bootstrap_multiselect.js',
        'js/plugins/ui/moment/moment.min.js',
        'js/plugins/pickers/daterangepicker.js',
        'js/core/app.js',
        //'assets/js/pages/dashboard.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
