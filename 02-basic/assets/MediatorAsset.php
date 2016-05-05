<?php

namespace app\assets;

use yii\web\AssetBundle;

/**
 * This asset bundle provides the [mediator-js library](http://example.com/)
 *
 */
class MediatorAsset extends AssetBundle
{
    public $sourcePath = '@bower/mediator-js/lib/';
    public $js = [
        'mediator.js',
    ];
}
