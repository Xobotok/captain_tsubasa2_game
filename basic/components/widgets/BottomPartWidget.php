<?php
namespace app\components\widgets;
use Yii;
use yii\base\Widget;
use yii\helpers\VarDumper;
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 27.12.2018
 * Time: 17:28
 */
class BottomPartWidget extends Widget {

    public $tpl;
    public $data;
    public $tree;
    public $html;

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'play_menu';
        }
        $this->tpl .= '.php';
    }

    public function run() {
        $this->html = $this->getRender();
        return $this->html;
    }


    protected function getRender() {
        ob_start();
        include __DIR__ . '/bottom_part_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}