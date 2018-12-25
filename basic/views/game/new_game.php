<?
/* @var $this yii\web\View */
$this->title = 'Captain Tsubasa volume 2. Game';
$this->registerCssFile('/css/game_start.css');

?>
<div class="match row">
    <div class="match__tour col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h2 class="match__tour_title"><?= $tour->name?></h2>
    </div>
    <div class="match__info row col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="match__info_game col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <h3 class="info__game_title">Game: <?= $game->game_number?></h3>
        </div>
        <div class="match__info_teams col-lg-6 col-md-6 col-sm-6 col-xs-6">
            <div class="team">
                <h4 class=team__info_title"><?= str_replace('_',' ',$player_team->name)?></h4>
            </div>
            <div class="team">
                <h4 class=team__info_title">VS</h4>
            </div>
            <div class="team">
                <h4 class=team__info_title"><?= str_replace('_',' ',$enemy_team->name)?></h4>
            </div>
        </div>
    </div>
</div>
<script>
    window.onload = function () {
        let gamepad = new Gamepad();
        gamepad.startMatchBehavor();
    }
</script>