document.addEventListener("DOMContentLoaded", function () {
    const btnClose = document.getElementById("btn-cls");
    const btnClose2 = document.getElementById("btn-cls2");
    const modal = document.getElementById("dialog");

    modal.showModal();

    btnClose.addEventListener("click", function () {
        modal.close();
    });

    btnClose2.addEventListener("click", function () {
        modal.close();
    });
});
