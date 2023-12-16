var isMessageOpen = false;
var isFirstClick = true;

function openMessage() {
    if (!isMessageOpen) {
        document.getElementById('message').style.display = 'block';
        isMessageOpen = true;
        isFirstClick = true;
    }
}

function closeMessage() {
    document.getElementById('message').style.display = 'none';
    isMessageOpen = false;
}

document.addEventListener('click', function (event) {
    if (isMessageOpen && !document.getElementById('message').contains(event.target) && !isFirstClick) {
        // If the message box is open, the click is not inside the message box, and it's not the first click
        event.preventDefault();
        alert('Please close the message box before interacting with other elements.');
    }

    // Update isFirstClick after the first click
    isFirstClick = false;
});