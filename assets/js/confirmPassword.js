const password = document.querySelector('#password');
const confirm_password = document.querySelector('#confirm_password');
const button = document.querySelector('#btn');

password.addEventListener('focusout', validationHandler);
confirm_password.addEventListener('keyup', validationHandler);

function buttonToggler(e) {
    if (
        password.value &&
        confirm_password.value &&
        password.value === confirm_password.value
    ) {
        if (button.classList.contains('disabled')) {
            button.classList.remove('disabled');
        }
    } else {
        if (!button.classList.contains('disabled')) {
            button.classList.add('disabled');
        }
    }
}

function validationHandler(e) {
    if (password.value != confirm_password.value) {
        confirm_password.classList.remove('valid');
        confirm_password.classList.add('invalid');
    } else {
        confirm_password.classList.remove('invalid');
        confirm_password.classList.add('valid');
    }
    buttonToggler();
}
