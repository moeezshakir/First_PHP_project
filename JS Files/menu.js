// JavaScript to show or hide the "scroll to top" button based on the scroll position
let scrollToTopButton = document.getElementById("scrollToTopButton");
window.onscroll = function () {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        scrollToTopButton.style.display = "flex";
    } else {
        scrollToTopButton.style.display = "none";
    }
}

// JavaScript to scroll to the top of the page when the button is clicked
function scrollToTop() {
    window.scrollTo(0, 0);
}