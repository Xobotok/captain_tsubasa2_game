class Camera{
    constructor(){

    }
    show(time = 600) {
        $("#mask").fadeTo(time, 0.0);
    }
    blind(time = 100) {
        $("#mask").fadeTo(time, 1.0);
    }
    light(time = 600) {
        $("#mask").fadeTo(time, 0.0);
    }
}
let camera = new Camera();