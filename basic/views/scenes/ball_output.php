<link rel="stylesheet" type="text/css" href="/css/ball_output.css">
<div class="scene__container">
    <img src="/img/scenes/backgrounds/land_pass/long_right_team_background.png" alt="" id="background">
    <div class="player__container" id = "player_container">
        <img src="/img/scenes/ball_output/<?=$team?>/<?=$player?>/kick1.png" alt="" id="kick1" class="scene__container_player">
        <img src="/img/scenes/ball_output/<?=$team?>/<?=$player?>/kick2.png" alt="" id="kick2" class="scene__container_player">
    </div>
    <div class="ball__container" id="ball_container">
        <img src="/img/scenes/ball/pass_extrasmallball.png" alt="" id="ball1">
        <img src="/img/scenes/ball/pass_extrasmallball2.png" alt="" id="ball2">
        <img src="/img/scenes/ball/pass_smallball.png" alt="" id="ball3">
        <img src="/img/scenes/ball/pass_smallball2.png" alt="" id="ball4">
        <img src="/img/scenes/ball/pass_normalball.png" alt="" id="ball5">
        <img src="/img/scenes/ball/pass_normalball2.png" alt="" id="ball6">
        <img src="/img/scenes/ball/pass_bigball.png" alt="" id="ball7">
        <img src="/img/scenes/ball/pass_bigball1.png" alt="" id="ball8">
        <img src="/img/scenes/ball/pass_bigball2.png" alt="" id="ball9">
        <img src="/img/scenes/ball/pass_bigball3.png" alt="" id="ball10">
    </div>
    <script>
        camera.blind(0);
        setTimeout(function () {
            ballPassAnimation();
            camera.light(600);
        }, 300)

    </script>
