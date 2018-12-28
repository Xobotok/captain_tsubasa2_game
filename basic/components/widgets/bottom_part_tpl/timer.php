<div class="timer__container">
    <div class="timer" id = "timer">
        <h3 class="timer__period" id = "timer_period"></h3>
        <h3 class="timer__time"><span  id = "timer_minutes"></span> : <span id = "timer_seconds"></span></h3>
    </div>
</div>

<script>
    window.onload = function () {
        gamepad.universalMenuBehavior();
        timer.renderTime();
    }
</script>