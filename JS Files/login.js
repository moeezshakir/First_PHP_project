const showPopupBtn = document.querySelector(".login-btn");
const showPopupBtn2 = document.querySelector(".Signup-btn");
const formPopup = document.querySelector(".form-popup");
const hidePopupBtn = formPopup.querySelector(".close-btn");
const showPopupBtn3 = document.querySelector(".forgot-pass-link");
const loginlink = document.querySelector("#login-link");
const signuplink = document.querySelector("#signup-link");
let a = 0;
// Show login popup
showPopupBtn.addEventListener("click", () => {
    if (a == 0) {
        document.body.classList.toggle("show-popup");
        a = 1;
    }
    document.querySelector('.login').style.display = "flex";
    document.querySelector('.signup').style.display = "none";
    document.querySelector('.forgot').style.display = "none";

});

// Show Signup popup
showPopupBtn2.addEventListener("click", () => {
    if (a == 0) {
        document.body.classList.toggle("show-popup");
        a = 1;
    }
    document.querySelector('.signup').style.display = "flex";
    document.querySelector('.login').style.display = "none";
    document.querySelector('.forgot').style.display = "none";
});

// Show Signup popup
showPopupBtn3.addEventListener("click", () => {
    if (a == 0) {
        document.body.classList.toggle("show-popup");
        a = 1;
    }
    document.querySelector('.forgot').style.display = "flex";
    document.querySelector('.login').style.display = "none";
    document.querySelector('.signup').style.display = "none";
});

// Hide login popup
hidePopupBtn.addEventListener("click", () => {
    document.body.classList.remove("show-popup");
    a = 0;
});

loginlink.addEventListener("click", () => {
    showPopupBtn.click();
});

signuplink.addEventListener("click", () => {
    showPopupBtn2.click();
});

document.querySelector('#logIn').addEventListener("click", () => loginlink.click());
document.querySelector('#signUp').addEventListener("click", () => signuplink.click());

