const buttonOp = document.getElementsByClassName("button-buy")[0];
const buttonCl = document.getElementsByClassName("btn-cls-login")[0];
const modal = document.querySelector("dialog");

buttonOp.onclick = function() {
    modal.showModal();
};

buttonCl.onclick = function() {
    modal.close();
};