function phpControllerGetRequest(controller, action, successFunction) {
    $.ajax({
        url: "/"+controller + "/" + action,
        type: "GET",
        success: function (res) {
            successFunction(res);
        }
    })
}
function renderToFullImage(component) {
    $("#top_full_image").empty();
    let elem = $(component);
        elem.appendTo($("#top_full_image")[0])

}
function stringToHtml(string) {

}
function getRandomInt(min, max) {
    return Math.floor(Math.random() * (max - min)) + min;
}