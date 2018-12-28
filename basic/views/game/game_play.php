<?
$this->registerCssFile('/css/game_play.css');
$this->registerJsFile('/js/Timer.js');
?>
<div class="game__part top__part" id = "top_part">
        <?= \app\components\widgets\TopPartWidget::widget(['tpl'=>'full_image'])?>
    <h1><?= $player_team->getNo2->name?></h1>
</div>
<div class="game__part bot__part row" id = "bottom_part">
    <div class="col-lg-4 bot__part_menu">
        <?= \app\components\widgets\BottomPartWidget::widget(['tpl'=>'timer'])?>
        <?= \app\components\widgets\BottomPartWidget::widget(['tpl'=>'score', 'player_team_name' => $player_team->name, 'enemy_team_name' => $enemy_team->name, 'game_progress' => $game_progress])?>
    </div>
    <div class="col-lg-8 bot__part_info">
        <?= \app\components\widgets\BottomPartWidget::widget(['tpl'=>'commentator'])?>
    </div>
</div>

<script>
    window.onload = function () {
        gamepad.universalMenuBehavior();
        timer.renderTime();
        refreshScore();
        camera.show(1700);
    }
</script>