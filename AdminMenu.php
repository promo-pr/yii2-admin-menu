<?php
namespace promo\admin;

use yii\bootstrap\Widget;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;

class AdminMenu extends Widget
{
    public $itemsLeft;

    public $itemsRight;

    public function run()
    {
        $this->registerClientScripts();

        NavBar::begin([
            'options' => [
                'class' => 'admin-menu',
            ],
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-left'],
            'encodeLabels' => false,
            'activateParents' => true,
            'items' => $this->itemsLeft,
        ]);
        echo Nav::widget([
            'options' => ['class' => 'navbar-nav navbar-right'],
            'encodeLabels' => false,
            'activateParents' => true,
            'items' => $this->itemsRight,
        ]);
        NavBar::end();
    }

    protected function registerClientScripts()
    {
        $view = $this->getView();
        $asset = Yii::$container->get(AdminMenuAsset::className());
        $asset::register($view);
    }
}