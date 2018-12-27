<?
$this->registerCssFile('/css/game_play.css');
$this->registerJsFile('/js/Timer.js');
?>

<div class="game__part top__part" id = "top_part">
    <div class="top__part_title"><h3>Meeting</h3></div>
    <div class="top__part_image"><img src="/img/team_<?=$player_team->id?>/meeting_coach.jpg" alt=""></div>
</div>
<div class="game__part bot__part row" id = "bottom_part">
    <div class="col-lg-4 bot__part_menu">
        <div class="timer__container">
            <div class="timer" id = "timer">
            <h3 class="timer__period" id = "timer_period"></h3>
                <h3 class="timer__time"><span  id = "timer_minutes"></span> : <span id = "timer_seconds"></span></h3>
            </div>
        </div>
    </div>
    <div class="col-lg-8 bot__part_info">
        <?= \app\components\widgets\BottomPartWidget::widget(['tpl'=>'menu'])?>
    </div>
</div>

<script>
    window.onload = function () {
        gamepad.universalMenuBehavior();
        timer.renderTime();
    }
</script>