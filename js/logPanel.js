document.addEventListener('DOMContentLoaded', (event) => {
    const eyeIcon = document.querySelector('.icon-eye');
    const passwordInput = document.querySelector('.input-block_password');
    const loginButton = document.querySelector('.log-in-button');
    const emailInput = document.querySelector('.input-block_email');
    const passwordInputInput = document.querySelector('.input-block');

    const errorMessageEmailEmpty = document.querySelector('.errorMessage_EmailEmpty');
    const errorMessageIncorrectFormatEmail = document.querySelector('.errorMessage_IncorrectFormatEmail');
    const errorMessagePassword = document.querySelector('.errorMessage_Password');
    const errorBoxEmptyError = document.querySelector('.error-box_emptyError');
    const errorBoxIncorrectData = document.querySelector('.error-box_incorrectData');

    const emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|org|net|edu|gov|mil|biz|info|mobi|name|aero|asia|jobs|museum)$/;

    eyeIcon.addEventListener('click', () => {
        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.src = './images/img_log/eye-off.svg';
        } else {
            passwordInput.type = 'password';
            eyeIcon.src = './images/img_log/icon-eye.svg';
        }
    });

    loginButton.addEventListener('click', () => {
        const emailValue = emailInput.value.trim();
        const passwordValue = passwordInput.value.trim();

        let valid = true;
        let emailValid = true;

        if (!emailValue) {
            errorMessageEmailEmpty.style.display = 'block';
            emailInput.style.borderColor = 'red';
            valid = false;
            emailValid = false;
        } else {
            errorMessageEmailEmpty.style.display = 'none';
        }

        if (emailValue && !emailPattern.test(emailValue)) {
            errorMessageIncorrectFormatEmail.style.display = 'block';
            emailInput.style.borderColor = 'red';
            valid = false;
            emailValid = false;
        } else if (emailPattern.test(emailValue)) {
            errorMessageIncorrectFormatEmail.style.display = 'none';
            if (!errorMessageEmailEmpty.style.display === 'block') {
                emailInput.style.borderColor = 'rgba(234, 234, 234, 1)';
            }
        }

        if (!passwordValue) {
            errorMessagePassword.style.display = 'block';
            passwordInputInput.style.borderColor =  'red';
            valid = false;
        } else {
            errorMessagePassword.style.display = 'none';
            passwordInputInput.style.borderColor = 'rgba(234, 234, 234, 1)';
        }

        if (!emailValue || !passwordValue) {
            errorBoxEmptyError.style.display = 'none';
            errorBoxIncorrectData.style.display = 'flex';
        } else if (!emailValid && passwordValue) {
            errorBoxIncorrectData.style.display = 'none';
            errorBoxEmptyError.style.display = 'flex';
        } else {
            errorBoxEmptyError.style.display = 'none';
            errorBoxIncorrectData.style.display = 'none';
            if (valid) {
                emailInput.style.borderColor = 'rgba(234, 234, 234, 1)';
                console.log('Все хорошо');
            }
        }
    });
});