<?php

namespace app\components\php_helpers;

use app\models\Gk;
use app\models\Player;
use app\models\PlayersStamina;

class PlayerStaminaController {
    function __construct($game_progress, $players) {
        $this->game_progress = $game_progress;
        $this->players = [];
        for($i = 0; $i < count($players); $i++) {
            $this->players[$players[$i]->id] =  new PlayersStamina();
            $this->players[$players[$i]->id]->player_id = $players[$i]->id;
            $this->players[$players[$i]->id]->game_progress_id = $this->game_progress->id;
            $this->players[$players[$i]->id]->player_stamina = $players[$i]->power;
            $this->players[$players[$i]->id]->save();
        }

    }

    public function updatePlayersStamina() {

    }
}
