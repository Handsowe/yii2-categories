<?php
namespace app\vendor\yiimodules\categories;
use yii\web\AssetBundle;
class ModuleAsset extends AssetBundle
{
    // the alias to your assets folder in your file system
    public $sourcePath = '@categories-assets';
    // finally your files.. 
    public $css = [
		'jstree/dist/themes/default/style.min.css',
    ];
    public $js = [
      'jstree/dist/jstree.min.js',
      'jquery.slugify.js',
    ];
    // that are the dependecies, for makeing your Asset bundle work with Yii2 framework
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}

?>