function getEventTarget(e) {
    e = e || window.event;
    return e.target || e.srcElement;
}

var personal = document.getElementById('personal-item');
var chat = document.getElementById('chat');
personal.onclick = function(event) {
    var settings = "#" + personal.id + "-settings";
    $( settings ).toggleClass( "delete" )
    $( chat ).toggleClass( "delete" )
};
