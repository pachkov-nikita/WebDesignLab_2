let password = document.getElementById("pass");
let confirm_password = document.getElementById("pass_rep");

function confirmPassword(){
    if(password.value != confirm_password.value) {
        confirm_password.setCustomValidity('Passwords do not match');
    } else {
        confirm_password.setCustomValidity('');
    }
}

password.onchange = confirmPassword;
confirm_password.onkeyup = confirmPassword;