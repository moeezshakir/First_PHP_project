// Jquery for API call when the button is clicked for see mre detail about product
$(document).ready(function () {
    $(".seeMore").click(function () {
        // $(this).siblings('.para').toggle();
        $(this).closest('.card').find('.para').toggle();
        var card = $(this).closest('.card');
        card.toggleClass('expanded');
    });
});

$(document).ready(function () {
    $(".seeDetail").click(function () {
        // $(this).siblings('.para2').toggle();
        $(this).closest('.card').find('.para2').toggle();
        var card = $(this).closest('.card');
        card.toggleClass('expanded2');
    });
});

// JavaScript to open description page when the button is clicked
function opendiscription() {
    window.open('description.html', '_self');
}