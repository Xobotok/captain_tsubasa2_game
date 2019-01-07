function ballPassAnimation() {
    let ball1 = $("#ball1");
    let ball2 = $("#ball2");
    let ball3 = $("#ball3");
    let ball4 = $("#ball4");
    let ball5 = $("#ball5");
    let ball6 = $("#ball6");
    let ball7 = $("#ball7");
    let ball8 = $("#ball8");
    let ball9 = $("#ball9");
    let ball10 = $("#ball10");
    let container = $("#ball_container");
    container.addClass("pass__animation_start");
    let player_container = $("#player_container").addClass("player__animation_start");
    let player1 = $("#kick1");
    let player2 = $("#kick2");
    let width = 25;

    let interval = setInterval(function () {
       width+=8;
        container.css('width', width+"px");
        if (width > 200) {
            clearInterval(interval);
        }
    }, 100);
    setTimeout(function () {
        player1.css("display", 'none');
        player2.css("display", 'block');
    },70);
    setTimeout(function () {
    ball1.css("display", 'none');
        ball2.css("display", 'inline-block');
        player1.css("display", 'none');
        player2.css("display", 'block');
    },150);
    setTimeout(function () {
    ball2.css("display", 'none');
        ball1.css("display", 'inline-block');
    },200);
    setTimeout(function () {
        ball1.css("display", 'none');
        ball3.css("display", 'inline-block');
    },250);
    setTimeout(function () {
        ball3.css("display", 'none');
        ball4.css("display", 'inline-block');
    },300);
    setTimeout(function () {
        ball4.css("display", 'none');
        ball3.css("display", 'inline-block');
    },350);
    setTimeout(function () {
        ball3.css("display", 'none');
        ball5.css("display", 'inline-block');
    },400);
    setTimeout(function () {
        ball5.css("display", 'none');
        ball6.css("display", 'inline-block');
    },450);
    setTimeout(function () {
        ball6.css("display", 'none');
        ball5.css("display", 'inline-block');
    },550);
    setTimeout(function () {
        ball5.css("display", 'none');
        ball7.css("display", 'inline-block');
    },700);
    setTimeout(function () {
        ball7.css("display", 'none');
        ball8.css("display", 'inline-block');
    },800);
    setTimeout(function () {
        ball8.css("display", 'none');
        ball7.css("display", 'inline-block');
    },900);
    setTimeout(function () {
        ball7.css("display", 'none');
        ball8.css("display", 'inline-block');
    },1000);
    setTimeout(function () {
        ball8.css("display", 'none');
        ball7.css("display", 'inline-block');
    },1200);
    setTimeout(function () {
        ball7.css("display", 'none');
        ball8.css("display", 'inline-block');
    },1300);
    setTimeout(function () {
        ball8.css("display", 'none');
        ball9.css("display", 'inline-block');
    },1400);
    setTimeout(function () {
        ball9.css("display", 'none');
        ball10.css("display", 'inline-block');
    },1500);
    setTimeout(function () {
        ball10.css("display", 'none');
        ball9.css("display", 'inline-block');
    },1600);
    setTimeout(function () {
        ball10.css("display", 'none');
        ball9.css("display", 'inline-block');
        container.css("right", 854+"px");
        container.css("top", 93+"px");
        player_container.css("top", 123+"px");
        player_container.css("right", 124+"px");
       /* setInterval(function () {
            if(ball10.css("display") === "none") {
                ball10.css("display",'inline-block');
                ball9.css("display",'none')
            } else {
                ball9.css("display",'inline-block');
                ball10.css("display",'none')
            }
        },100)*/
        ballPassMoveAnimation();
    },1650);
}
function ballPassMoveAnimation() {
    $.ajax({
        url: '/scenes/sky-pass-ball',
        type: 'GET',
        success: function (data) {
            camera.blind(0);
            $("#top_full_image").empty();
            $(data).appendTo($("#top_full_image")[0]);
            camera.light(100);

        }
    })
}
function ballPassFlyAnimation() {
    let ball1 = $("#ball1");
    let ball2 = $("#ball2");
    let ball3 = $("#ball3");
    let ball4 = $("#ball4");
    let ball5 = $("#ball5");
    let ball6 = $("#ball6");
    let ball7 = $("#ball7");
    let ball8 = $("#ball8");
    let ball9 = $("#ball9");
    let ball10 = $("#ball10");
    let ball_container = $("#ball_container");
    ball_container.addClass("ball__fly_start");
    let width = 25;
    let interval = setInterval(function () {
        width+=15;
        ball_container.css('width', width+"px");
        if (width > 200) {
            clearInterval(interval);
        }
    }, 100);
    setTimeout(function () {
        ball1.css("display", 'none');
        ball2.css("display", 'inline-block');
    },150);
    setTimeout(function () {
        ball2.css("display", 'none');
        ball1.css("display", 'inline-block');
    },200);
    setTimeout(function () {
        ball1.css("display", 'none');
        ball5.css("display", 'inline-block');
    },300);
    setTimeout(function () {
        ball5.css("display", 'none');
        ball6.css("display", 'inline-block');
    },400);
    setTimeout(function () {
        ball6.css("display", 'none');
        ball5.css("display", 'inline-block');
    },500);
    setTimeout(function () {
        ball5.css("display", 'none');
        ball7.css("display", 'inline-block');
    },600);
    setTimeout(function () {
        ball7.css("display", 'none');
        ball8.css("display", 'inline-block');
    },650);
    setTimeout(function () {
        ball8.css("display", 'none');
        ball7.css("display", 'inline-block');
    },700);
    setTimeout(function () {
        ball7.css("display", 'none');
        ball9.css("display", 'inline-block');
    },750);
    setTimeout(function () {
        ball9.css("display", 'none');
        ball10.css("display", 'inline-block');
    },800);
    setTimeout(function () {
        ball10.css("display", 'none');
        ball9.css("display", 'inline-block');
    },850);
    setTimeout(function () {
        ball9.css("display", 'none');
        ball10.css("display", 'inline-block');
    },900);
    setTimeout(function () {
        ball10.css("display", 'none');
        ball9.css("display", 'inline-block');
    },950);
    setTimeout(function () {
        ball9.css("display", 'none');
        ball10.css("display", 'inline-block');
    },1000);
}
function ballPassFlyAnimationReverse() {
    let ball1 = $("#ball1");
    let ball2 = $("#ball2");
    let ball3 = $("#ball3");
    let ball4 = $("#ball4");
    let ball5 = $("#ball5");
    let ball6 = $("#ball6");
    let ball7 = $("#ball7");
    let ball8 = $("#ball8");
    let ball9 = $("#ball9");
    let ball10 = $("#ball10");
    let ball_container = $("#ball_container");
    ball_container.addClass("ball__fly_start");
    let width = 25;
    let interval = setInterval(function () {
        width+=15;
        ball_container.css('width', width+"px");
        if (width > 200) {
            clearInterval(interval);
        }
    }, 100);
    setTimeout(function () {
        ball1.css("display", 'none');
        ball2.css("display", 'inline-block');
    },150);
    setTimeout(function () {
        ball2.css("display", 'none');
        ball1.css("display", 'inline-block');
    },200);
    setTimeout(function () {
        ball1.css("display", 'none');
        ball5.css("display", 'inline-block');
    },300);
    setTimeout(function () {
        ball5.css("display", 'none');
        ball6.css("display", 'inline-block');
    },400);
    setTimeout(function () {
        ball6.css("display", 'none');
        ball5.css("display", 'inline-block');
    },500);
    setTimeout(function () {
        ball5.css("display", 'none');
        ball7.css("display", 'inline-block');
    },600);
    setTimeout(function () {
        ball7.css("display", 'none');
        ball8.css("display", 'inline-block');
    },650);
    setTimeout(function () {
        ball8.css("display", 'none');
        ball7.css("display", 'inline-block');
    },700);
    setTimeout(function () {
        ball7.css("display", 'none');
        ball9.css("display", 'inline-block');
    },750);
    setTimeout(function () {
        ball9.css("display", 'none');
        ball10.css("display", 'inline-block');
    },800);
    setTimeout(function () {
        ball10.css("display", 'none');
        ball9.css("display", 'inline-block');
    },850);
    setTimeout(function () {
        ball9.css("display", 'none');
        ball10.css("display", 'inline-block');
    },900);
    setTimeout(function () {
        ball10.css("display", 'none');
        ball9.css("display", 'inline-block');
    },950);
    setTimeout(function () {
        ball9.css("display", 'none');
        ball10.css("display", 'inline-block');
    },1000);
}