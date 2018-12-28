<?php
namespace app\components\widgets;
use Yii;
use yii\base\Widget;
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 27.12.2018
 * Time: 17:28
 */
class TopPartWidget extends Widget {

    public $tpl;
    public $data;
    public $html;
    public $player;
    public $image;

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'full_image';
        }
        $this->tpl .= '.php';
    }

    public function run() {
    if($this->tpl === 'full_image.php') {
        $this->html = $this->getFullImageRender();
    } else {
        $this->html = $this->getRender();
    }

        return $this->html;
    }
    protected function getRender() {
        ob_start();
        include __DIR__ . '/top_part_tpl/' . $this->tpl;
        return ob_get_clean();
    }
    protected function getFullImageRender() {
        ob_start();
        include __DIR__ . '/top_part_tpl/' . $this->tpl;
        return ob_get_clean();
    }


}