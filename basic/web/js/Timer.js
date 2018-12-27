class Timer {
    constructor(time = 1800){
        this.time = time;
        this.currentTimer = 0;
        this.remainingTimer = time;
        this.timer = "";
        this.period = 1;
        this.bonusTime = (Math.floor(Math.random() * (360 - 120) + 120));
    }
    tik() {
        if(this.currentTimer < this.time + this.bonusTime) {
            if (this.currentTimer <= this.time) {
                this.renderTime();
            }
            this.currentTimer += 10;
            this.remainingTimer -=10;
        } else {
            this.endTime();
        }
        this.act();
    }
    renderTime() {
        $("#timer_period").text(this.period + " st");
        $("#timer_minutes").text(this.toMinutes());
        if(this.toSeconds() > 0){
            $("#timer_seconds").text(this.toSeconds())
        }else{
            $("#timer_seconds").text(this.toSeconds() + "0");
        }

    }
    toMinutes() {
        return Math.floor(this.remainingTimer /60);
    }
    toSeconds() {
        return ((this.remainingTimer %60) *6 /6).toFixed();
    }
    startTimer() {
        this.timer = setInterval(()=>{
            this.tik();
        }, 1000)

    }
    stopTimer() {
       clearInterval(this.timer);
    }
    getCurrentTime() {
        return [this.toMinutes(),this.toSeconds()];
    }
    endTime() {
        clearInterval(this.timer);
        console.log(this.remainingTimer);
        this.period+=1;
        this.currentTimer = 0;
        this.remainingTimer = this.time;
        console.log("Endtime!")
    }
    act() {

    }
}
let timer = new Timer();