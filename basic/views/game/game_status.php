<?
$this->registerCssFile('/css/game_play.css');
?>

<div class="game__part top__part" id = "top_part">
<div class="top__part_title"><h3>Meeting</h3></div>
    <div class="top__part_image"><img src="/img/team_<?=$player_team->id?>/meeting_coach.jpg" alt=""></div>
</div>
<div class="game__part bot__part row" id = "bottom_part">
<div class="col-lg-4 bot__part_menu">
<div class="menu__container">

    <div class="menu">
        <div class="menu__button">
            <img src="/img/interface/menu/ball.png" alt="" class="ball invisible" id = "talk_ball">
            <input class ="menu__button_input" type="radio" name="time" value="yes" checked="checked" id = "talk"><span>Talk</span>
            <label for = "talk" class ="menu__button_label"></label>
        </div>
        <div class="menu__button">
            <img src="/img/interface/menu/ball.png" alt="" class="ball invisible" id = "password_ball">
            <input class ="menu__button_input" type="radio" name="time" value="yes" id = "password"><span>Password</span>
            <label for = "password" class ="menu__button_label"></label>
        </div>
        <div class="menu__button">
            <img src="/img/interface/menu/ball.png" alt="" class="ball invisible" id = "status_ball">
            <input class ="menu__button_input" type="radio" name="time" value="yes" id = "status"><span>Status</span>
            <label for = "status" class ="menu__button_label"></label>
        </div>
        <div class="menu__button">
            <img src="/img/interface/menu/ball.png" alt="" class="ball invisible" id = "play_ball">
            <input class ="menu__button_input" type="radio" name="time" value="yes" id = "play"><span>Play</span>
            <label for = "play" class ="menu__button_label"></label>
        </div>
    </div>
</div>
</div>
    <div class="col-lg-8 bot__part_info">
        <div class="dialog__conteiner">
            Ok, guys!
        </div>
    </div>
</div>

<script>
    window.onload = function () {
musicPlayer.playMusic('../../music/menu/bigmeeting.mp3');
        gamepad.universalMenuBehavior();
        actions.playMatchAction();
    }
</script>