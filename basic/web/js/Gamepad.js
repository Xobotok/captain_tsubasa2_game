/**
 * Created by Xobat on 25.12.2018.
 */
class Gamepad {
    constructor(keyUp = [38,87], keyDown =[40,83], keyLeft = [37,65], keyRight =[39,68], keyStart =[13,8], keySelect = [16,18],
                keyA =[90], keyB =[88], keyAA =[67], keyBB = [86]){
        this._keyUp = keyUp;
        this._keyDown = keyDown;
        this._keyLeft = keyLeft;
        this._keyRight = keyRight;
        this._keyStart = keyStart;
        this._keySelect = keySelect;
        this._keyA = keyA;
        this._keyB = keyB;
        this._keyAA = keyAA;
        this._keyBB = keyBB;
    }

    get keyUp() {
        return this._keyUp;
    }

    set keyUp(value) {
        this._keyUp = value;
    }

    get keyDown() {
        return this._keyDown;
    }

    set keyDown(value) {
        this._keyDown = value;
    }

    get keyLeft() {
        return this._keyLeft;
    }

    set keyLeft(value) {
        this._keyLeft = value;
    }

    get keyRight() {
        return this._keyRight;
    }

    set keyRight(value) {
        this._keyRight = value;
    }

    get keyStart() {
        return this._keyStart;
    }

    set keyStart(value) {
        this._keyStart = value;
    }

    get keySelect() {
        return this._keySelect;
    }

    set keySelect(value) {
        this._keySelect = value;
    }

    get keyA() {
        return this._keyA;
    }

    set keyA(value) {
        this._keyA = value;
    }

    get keyB() {
        return this._keyB;
    }

    set keyB(value) {
        this._keyB = value;
    }

    get keyAA() {
        return this._keyAA;
    }

    set keyAA(value) {
        this._keyAA = value;
    }

    get keyBB() {
        return this._keyBB;
    }

    set keyBB(value) {
        this._keyBB = value;
    }
    setKeyDownBehavior(func) {
        $('html').keydown((event)=>{
           for(let i = 0; i< this._keyDown.length; i++) {
               if (event.keyCode === this._keyDown[i]) {
                   event.preventDefault();
                   func();
               }
           }
        });
    }
    setKeyUpBehavior(func) {
        $('html').keydown((event)=>{
            for(let i = 0; i< this._keyUp.length; i++) {
                if (event.keyCode === this._keyUp[i]) {
                    event.preventDefault();
                    func();
                }
            }
        });
    }
    setKeyRightBehavior(func) {
        $('html').keydown((event)=>{
            for(let i = 0; i< this._keyRight.length; i++) {
                if (event.keyCode === this._keyRight[i]) {
                    event.preventDefault();
                    func();
                }
            }
        });
    }
    setKeyLeftBehavior(func) {
        $('html').keydown((event)=>{
            for(let i = 0; i< this._keyLeft.length; i++) {
                if (event.keyCode === this._keyLeft[i]) {
                    event.preventDefault();
                    func();
                }
            }
        });
    }
    setKeySelectBehavior(func) {
        $('html').keydown((event)=>{
            for(let i = 0; i< this._keySelect.length; i++) {
                if (event.keyCode === this._keySelect[i]) {
                    event.preventDefault();
                    func();
                }
            }
        });
    }
    setKeyStartBehavior(func) {
        $('html').keydown((event)=>{
            for(let i = 0; i< this._keyStart.length; i++) {
                if (event.keyCode === this._keyStart[i]) {
                    event.preventDefault();
                    func();
                }
            }
        });
    }
    setKeyABehavior(func) {
        $('html').keydown((event)=>{
            for(let i = 0; i< this._keyA.length; i++) {
                if (event.keyCode === this._keyA[i]) {
                    event.preventDefault();
                    func();
                }
            }
        });
    }
    setKeyBBehavior(func) {
        $('html').keydown((event)=>{
            for(let i = 0; i< this._keyB.length; i++) {
                if (event.keyCode === this._keyB[i]) {
                    event.preventDefault();
                    func();
                }
            }
        });
    }
    setKeyAABehavior(func) {
        $('html').keydown((event)=>{
            for(let i = 0; i< this._keyAA.length; i++) {
                if (event.keyCode === this._keyAA[i]) {
                    event.preventDefault();
                    func();
                }
            }
        });
    }
    setKeyBBBehavior(func) {
        $('html').keydown((event)=>{
            for(let i = 0; i< this._keyBB.length; i++) {
                if (event.keyCode === this._keyBB[i]) {
                    event.preventDefault();
                    func();
                }
            }
        });
    }
    universalMenuBehavior(){
        let buttons = $('input[type="radio"]');
        function refreshBalls() {
            for (let i = 0; i < buttons.length; i++) {
                let ball = $("#"+$(buttons[i]).prop("id")+"_ball");
                ball.removeClass("visible").addClass('invisible');
                if (buttons[i].checked) {
                    $(buttons[i]).prop("id");
                    ball.removeClass("invisible").addClass("visible");
                }
            }
        }
        refreshBalls();
        this.setKeyDownBehavior(()=> {
            for(let i = 0; i < buttons.length; i++) {
                if ($(buttons[i]).prop('checked') === true) {
                    $(buttons[i]).prop('checked', false);
                    if( i === buttons.length - 1) {
                        $(buttons[0]).prop('checked', true);
                        refreshBalls();
                        break;
                    } else {
                        $(buttons[i+1]).prop('checked', true);
                        refreshBalls();
                        break;
                    }
                }
            }
            });
        this.setKeyUpBehavior(()=> {
            for(let i = 0; i < buttons.length; i++) {
                if ($(buttons[i]).prop('checked') === true) {
                    $(buttons[i]).prop('checked', false);
                    if( i === 0) {
                        $(buttons[buttons.length - 1]).prop('checked', true);
                        refreshBalls();
                        break;
                    } else {
                        $(buttons[i-1]).prop('checked', true);
                        refreshBalls();
                        break;
                    }
                }
            }
        });
    }
}

let gamepad = new Gamepad();
