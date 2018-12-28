<?php

/* @var $this yii\web\View */

$this->title = 'Captain Tsubasa volume 2. Menu';
$this->registerCssFile('css/start_menu.css');
?>
<div class="menu">
    <div class="menu__button">
        <label class ="menu__button_label"><img src="/img/interface/menu/ball.png" alt="" class="ball invisible" id = "kick_off_ball">
            <input class ="menu__button_input" type="radio" name="time" value="yes" checked="checked" id = "kick_off"><span>Kick &nbsp; off</span></label>
    </div>
    <div class="menu__button">
        <label class ="menu__button_label"><img src="/img/interface/menu/ball.png" alt="" class="ball invisible" id = "continue_ball">
            <input class ="menu__button_input" type="radio" name="time" value="no" id = "continue"><span>Continue</span></label>
    </div>
</div>
<script>
    window.onload = function () {
        gamepad.universalMenuBehavior();
        actions.startAction();
        camera.show();
    }
</script>