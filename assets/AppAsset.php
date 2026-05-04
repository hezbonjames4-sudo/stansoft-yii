<?php

declare(strict_types=1);

namespace app\assets;

use yii\web\AssetBundle;

class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'https://api.fontshare.com/v2/css?f[]=satoshi@400,500,700,900&display=swap',
        'css/styles.css',
    ];

    public $js = [
        'https://unpkg.com/lucide@latest',
        'js/script.js',
    ];
}
