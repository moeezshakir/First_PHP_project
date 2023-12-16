function openDetail(n) {
    let box = document.querySelector('.detailbox' + n);
    box.style.transform = 'translateX(0px)';
}

function closeDetail(n) {
    let box = document.querySelector('.detailbox' + n);
    box.style.transform = 'translateX(310px)';
}
