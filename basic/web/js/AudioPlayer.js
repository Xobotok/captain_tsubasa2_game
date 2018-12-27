class AudioPlayer {
    constructor() {
        this.sound_off_button = $("#sound_off");
        this.sound_off_button[0].addEventListener("click", ()=> {
            this.stopMusic();
        });
        this.music_player1 = $("<audio id = 'sound_track1' src='' ></audio>");
        this.music_player2 = $("<audio id = 'sound_track2' src='' ></audio>");
        this.music_player1.appendTo("body");
        this.music_player2.appendTo("body");
        //Две дорожки для бесперебойного зацикливания музыки
        this.audio_player = $("<audio src='' autoplay></audio>");
    }

    playMusic(track) {
        this.music_player1[0].src = track;
        this.music_player2[0].src = track;
        this.music_player1[0].addEventListener('loadedmetadata', () => {
            this.playSound(0);
        });
    }

    playSound() {
        this.music_player1[0].pause();
        this.music_player1[0].currentTime = 0.0;
        this.music_player1[0].play();
        let time = this.music_player1[0].duration;
        setTimeout(() => {
            this.playSound2();
        }, time * 1000 - 60);
    }

    playSound2() {
        this.music_player2[0].pause();
        this.music_player2[0].currentTime = 0.0;
        this.music_player2[0].play();
        let time = this.music_player1[0].duration;
        setTimeout(() => {
            this.playSound2();
        }, time * 1000 - 60);
    }
    stopMusic() {
        if(this.music_player1[0].volume !== 0) {
            this.music_player1[0].volume = 0;
        } else {
            this.music_player1[0].volume = 1;
        }
        if (this.music_player2[0].volume !== 0) {
            this.music_player2[0].volume = 0;
        } else {
            this.music_player2[0].volume = 1;
        }

    }
}
let musicPlayer = new AudioPlayer();
