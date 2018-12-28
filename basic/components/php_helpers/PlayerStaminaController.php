<?php

namespace app\components\php_helpers;

use app\models\Gk;
use app\models\Player;
use app\models\PlayersStamina;

class PlayerStaminaController {
    function __construct($game_progress, $no2, $no3, $no4, $no5, $no6, $no7, $no8, $no9, $no10, $no11) {
        $this->game_progress = $game_progress;
        $this->no2 = new PlayersStamina();
        $this->no2->player_id = $no2;
        $this->no2->game_progress_id = $this->game_progress;
        $this->no3 = new PlayersStamina();
        $this->no3->player_id = $no3;
        $this->no3->game_progress_id = $this->game_progress;
        $this->no4 = new PlayersStamina();
        $this->no4->player_id = $no4;
        $this->no4->game_progress_id = $this->game_progress;
        $this->no5 = new PlayersStamina();
        $this->no5->player_id = $no5;
        $this->no5->game_progress_id = $this->game_progress;
        $this->no6 = new PlayersStamina();
        $this->no6->player_id = $no6;
        $this->no6->game_progress_id = $this->game_progress;
        $this->no7 = new PlayersStamina();
        $this->no7->player_id = $no7;
        $this->no7->game_progress_id = $this->game_progress;
        $this->no8 = new PlayersStamina();
        $this->no8->player_id = $no8;
        $this->no8->game_progress_id = $this->game_progress;
        $this->no9 = new PlayersStamina();
        $this->no9->player_id = $no9;
        $this->no9->game_progress_id = $this->game_progress;
        $this->no10 = new PlayersStamina();
        $this->no10->player_id = $no10;
        $this->no10->game_progress_id = $this->game_progress;
        $this->no11 = new PlayersStamina();
        $this->no11->player_id = $no11;
        $this->no11->game_progress_id = $this->game_progress;
    }

    public function addPlayersStamina() {
        $this->no2->player_stamina = Player::findOne($this->no2)->power;
        $this->no2->save();
        $this->no3->player_stamina = Player::findOne($this->no3)->power;
        $this->no3->save();
        $this->no4->player_stamina = Player::findOne($this->no4)->power;
        $this->no4->save();
        $this->no5->player_stamina = Player::findOne($this->no5)->power;
        $this->no5->save();
        $this->no6->player_stamina = Player::findOne($this->no6)->power;
        $this->no6->save();
        $this->no7->player_stamina = Player::findOne($this->no7)->power;
        $this->no7->save();
        $this->no8->player_stamina = Player::findOne($this->no8)->power;
        $this->no8->save();
        $this->no9->player_stamina = Player::findOne($this->no9)->power;
        $this->no9->save();
        $this->no10->player_stamina = Player::findOne($this->no10)->power;
        $this->no10->save();
        $this->no11->player_stamina = Player::findOne($this->no11)->power;
        $this->no11->save();
    }

    public function updatePlayersStamina($no2_stamina, $no3_stamina, $no4_stamina, $no5_stamina, $no6_stamina,
                                         $no7_stamina, $no8_stamina, $no9_stamina, $no10_stamina, $no11_stamina) {
        $this->no2->player_stamina = $no2_stamina;
        $this->no2->save();
        $this->no3->player_stamina = $no3_stamina;
        $this->no3->save();
        $this->no4->player_stamina = $no4_stamina;
        $this->no4->save();
        $this->no5->player_stamina = $no5_stamina;
        $this->no5->save();
        $this->no6->player_stamina = $no6_stamina;
        $this->no6->save();
        $this->no7->player_stamina = $no7_stamina;
        $this->no7->save();
        $this->no8->player_stamina = $no8_stamina;
        $this->no8->save();
        $this->no9->player_stamina = $no9_stamina;
        $this->no9->save();
        $this->no10->player_stamina = $no10_stamina;
        $this->no10->save();
        $this->no11->player_stamina = $no11_stamina;
        $this->no11->save();
    }
}
