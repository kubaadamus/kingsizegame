$(document).ready(function() {
    $("#transition").addClass("translate_x_right");
});

function PageTransition(href) {
    $("#transition").removeClass("translate_x_right");
    setTimeout(() => {
        location.href = href;
    }, 1200);
}