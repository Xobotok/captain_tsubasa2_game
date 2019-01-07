class Actions {
    constructor(gamePad) {
        this.gamePad = gamePad;
    }
    startAction() {
        this.gamePad.setKeyStartBehavior(() => {
            if ($("#kick_off").prop("checked")) {
                location.replace("/game/start")
            }
            if ($("#continue").prop("checked")) {
                alert("Игра продолжилас")
            }
        });
        this.gamePad.setKeyABehavior(() => {
            if ($("#kick_off").prop("checked")) {
                location.replace("/game/start")
            }
            if ($("#continue").prop("checked")) {
                alert("Игра продолжилас")
            }
        });
    }
    statusMatchAction(){
        this.gamePad.setKeyStartBehavior(()=>{
            location.replace("/game/status")
        });
        this.gamePad.setKeyABehavior(()=>{
            location.replace("/game/status")
        })
    }
    playMatchAction() {
        this.gamePad.setKeyStartBehavior(()=>{
            location.replace("/game/play")
        });
        this.gamePad.setKeyABehavior(()=>{
            location.replace("/game/play")
        })
    }
    ballOutputAction() {
        camera.blind(0);
       $.ajax({
           url: '/scenes/ball-output',
           type: 'GET',
           success: function (data) {
               $("#top_full_image").empty();
               $(data).appendTo($("#top_full_image")[0]);
               camera.light(800);
           }
           }
       )
    }

}
let actions = new Actions(gamepad);