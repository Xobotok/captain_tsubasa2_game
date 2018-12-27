<?
$this->registerCssFile('/css/game_play.css');
?>

<div class="game__part top__part" id = "top_part">
<div class="top__part_title"><h3>Meeting</h3></div>
    <div class="top__part_image"><img src="/img/team_<?=$player_team->id?>/meeting_coach.jpg" alt=""></div>
</div>
<div class="game__part bot__part" id = "bottom_part">
Нижняя часть
</div>

<script>
    window.onload = function () {
musicPlayer.playMusic('../../music/menu/bigmeeting.mp3');
    }
</script>