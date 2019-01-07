<?php
/**
 * Created by PhpStorm.
 * User: Xobat
 * Date: 07.01.2019
 * Time: 23:33
 */

namespace app\components\engine;


class GamePlay {
    function __construct() {
        $active_team = ""; //Команда, владеющая мячом.
        $active_player = "";//Игрок, владеющий мячом.
        $pass_to = ""; //Игрок, которому летит мяч.
        $players_around = []; //Игроки, учавствующие в действии.
    }
}