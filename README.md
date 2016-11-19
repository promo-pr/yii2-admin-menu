# Admin menu widget for Yii 2

[![Latest Version](https://img.shields.io/github/tag/promo-pr/yii2-admin-menu.svg?style=flat-square&label=release)](https://github.com/promo-pr/yii2-admin-menu/releases)
[![Total Downloads](https://img.shields.io/packagist/dt/promo-pr/yii2-admin-menu.svg?style=flat-square)](https://packagist.org/packages/promo-pr/yii2-admin-menu)

`Yii2 Asset` is a wrapper for [Material icons](https://material.io/icons/),
are beautifully crafted, delightful, and easy to use in your web projects.


## Install

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ php composer.phar require --prefer-dist promo-pr/yii2-admin-menu "*"
```

or add

```json
"promo-pr/yii2-admin-menu": "*"
```

to the require section of your `composer.json` file.


## Usage

Once the extension is installed, simply use it in your code:

### Like a AssetBundle ###

```php
use promo/admin/AdminMenu;

echo AdminMenu::widget([
    'itemsLeft' => [],
    'itemsRight' => [],
]);

}
```
