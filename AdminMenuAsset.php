<?php
namespace promo\admin;

use yii\web\AssetBundle;

class AdminMenuAsset extends AssetBundle
{
    public $sourcePath = "@promo/admin/assets";
    public $css = [
        'css/admin-menu.css'
    ];
}