const panelConfirm = document.querySelector('.panel-confirm');
const emailForm = document.getElementById('form-login');

function confirmEmail() {
    panelConfirm.classList.remove('pCClose');
    panelConfirm.classList.add('pCOpen');
    emailForm.action = './src/pages/validate_email.php';
    setTimeout(function() {
        window.close();
    }, 15000);
}

function closePage() {
    emailForm.action = './src/pages/validate_email.php';
    window.close();
}