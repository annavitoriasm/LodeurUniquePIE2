const buttonOp = document.getElementsByClassName("button-buy")[0];
const buttonCl = document.getElementsByClassName("btn-cls-login")[0];
const modal = document.querySelector("dialog");

buttonOp.onclick = function () {
    if (!document.cookie.includes("login=")) {
        modal.showModal();
    }
    else{
        modal.close();
        window.location.href = "/src/pages/order.php";
    }
};

function closeModal() {
    modal.close();
}

function setLogin(value) {
    // Definindo o cookie 'login' com o valor 'loggedIn' ou 'loggedOut'
    document.cookie = "login=" + value + "; path=/; max-age=" + (30 * 24 * 60 * 60);
    modal.close();
    window.location.href = "/src/pages/order.php";
}

function onLoginButtonClick() {
    setLogin("loggedIn");
}