<?php

namespace ityakutia\owl;

use yii\web\AssetBundle;

class OwlAsset extends AssetBundle
{
    public $sourcePath = '@ityakutia/owl/assets/';
    
    public $css = [
        'css/owl.carousel.min.css',
        'css/owl.theme.default.min.css',
    ];
    public $js = [
        'js/owl.carousel.min.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
