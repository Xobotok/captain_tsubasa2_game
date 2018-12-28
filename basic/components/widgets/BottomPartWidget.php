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
    public $html;
    public $game_progress;
    public $player_team_name;
    public $enemy_team_name;

    public function init() {
        parent::init();
        if ($this->tpl === null) {
            $this->tpl = 'play_menu';
        }
        $this->tpl .= '.php';
    }

    public function run() {
        if($this->tpl ==="score.php") {
            $this->html = $this->getRenderScore(str_replace('_',' ', $this->player_team_name), str_replace('_',' ', $this->enemy_team_name),$this->game_progress);
        } else {
            $this->html = $this->getRender();
        }

        return $this->html;
    }
    protected function getRender() {
        ob_start();
        include __DIR__ . '/bottom_part_tpl/' . $this->tpl;
        return ob_get_clean();
    }

    protected function getRenderScore($player_team_name, $enemy_team_name, $game_progress) {
        ob_start();
        include __DIR__ . '/bottom_part_tpl/' . $this->tpl;
        return ob_get_clean();
    }

}