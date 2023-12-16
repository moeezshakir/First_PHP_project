// login fuction
function login() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Disable the login button to prevent multiple submissions
    document.getElementById("login-btnm").disabled = true;

    // Check if fields are not empty
    if (email.trim() === '' || password.trim() === '') {
        document.getElementById("error-message").innerHTML = "Please fill in all fields";
        // Re-enable the login button
        document.getElementById("login-btnm").disabled = false;
        return;
    }

    var formData = new FormData();
    formData.append("email", email);
    formData.append("password", password);

    fetch("loginEnter.php", {
        method: "POST",
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = "Home.php"; // Redirect to the home page
            } else {
                document.getElementById("error-message").innerHTML = data.message;
            }
        })
        .catch(error => console.error('Error:', error))
        .finally(() => {
            // Re-enable the login button regardless of the result
            document.getElementById("login-btnm").disabled = false;
        });
}

function forgot() {
    var email = document.getElementById("email1").value;

    // Disable the login button to prevent multiple submissions
    document.getElementById("forgot-btnm").disabled = true;

    // Check if the email field is not empty
    if (email.trim() === '') {
        document.getElementById("verifyAndShow").innerHTML = "Please fill the email field";
        // Re-enable the login button
        document.getElementById("forgot-btnm").disabled = false;
        return;
    }

    var formData = new FormData();
    formData.append("email", email);

    fetch("forgot.php", {
        method: "POST",
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            // Display the message or a default message
            document.getElementById("verifyAndShow").innerHTML = data.message || "No message received";
        })
        .catch(error => console.error('Error:', error))
        .finally(() => {
            // Re-enable the login button regardless of the result
            document.getElementById("forgot-btnm").disabled = false;
        });
}

function register() {
    var email = document.getElementById("email2").value;
    var username = document.getElementById("username2").value;
    var password = document.getElementById("password1").value;
    var policyChecked = document.getElementById("policy").checked;

    // Disable the register button to prevent multiple submissions
    document.getElementById("register-btnm").disabled = true;

    // Check if fields are not empty and if the policy checkbox is checked
    if (email.trim() === '' || username.trim() === '' || password.trim() === '' || !policyChecked) {
        document.getElementById("verify").innerHTML = "Please fill in all fields and agree to the Terms & Conditions.";
        // Re-enable the register button
        document.getElementById("register-btnm").disabled = false;
        return;
    }

    var formData = new FormData();
    formData.append("email", email);
    formData.append("username", username);
    formData.append("password", password);
    formData.append("policy", policyChecked);

    fetch("userRegister.php", {
        method: "POST",
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                window.location.href = "login.php"; // Redirect to the login page
            } else {
                document.getElementById("verify").innerHTML = innerText = data.message;
            }
        })
        .catch(error => console.error('Error:', error))
        .finally(() => {
            // Re-enable the register button regardless of the result
            document.getElementById("register-btnm").disabled = false;
        });
}