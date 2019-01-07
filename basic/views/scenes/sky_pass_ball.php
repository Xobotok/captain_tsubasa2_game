<link rel="stylesheet" type="text/css" href="/css/sky_pass_ball.css">
<div class="scene__container">
    <div class="background__container" id = "background1">

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
</div>
<script>
    camera.blind();
    setTimeout(function () {
        ballPassFlyAnimation();
        camera.light();
    }, 300)

</script>