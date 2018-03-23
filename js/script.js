//Checks if email inputted for password reset is correct
function emailValidation() {
    var str = document.getElementById("password_reset_email").value;
    for (i = 0; i < str.length; i++) {
        if (str[i] == '@') {
            document.getElementById("password_reset_success_alert").classList.remove('alert-warning');
            document.getElementById("password_reset_success_alert").classList.add('alert-success');
            document.getElementById("password_reset_success_alert").innerText = "Success! Please check your email for further instructions.";
            document.getElementById("password_reset_success_alert").style.display = "block";
        }
        else {
            document.getElementById("password_reset_success_alert").classList.remove('alert-success');
            document.getElementById("password_reset_success_alert").classList.add('alert-warning');
            document.getElementById("password_reset_success_alert").innerText = "Please enter a valid email address and try again.";
            document.getElementById("password_reset_success_alert").style.display = "block";
        }
    }
}