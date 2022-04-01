$(document).ready(function () {

    //   lineheight.js
    if (window.matchMedia('(min-width:641px)').matches) {
        $(".card-height img").heightLine({
            fontSizeCheck: true
        });
    } else {
        $(".card-height img").heightLine("destroy");
    }
});
