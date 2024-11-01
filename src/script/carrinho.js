const quantidadeInputs = document.getElementsByClassName("product-quantity");
for(let index = 0; index < quantidadeInputs.length; index +=1) {
    quantidadeInputs[index].addEventListener("change", atualizarValor);
}

function atualizarValor() {
    let valorTotal = 0;
    const produtosCarrinho = document.getElementsByClassName("cart-product");
    for(let index = 0; index < produtosCarrinho.length; index +=1) {
        const valorProduto = produtosCarrinho[index].getElementsByClassName("cart-price")[0].innerText.replace("R$", " ").replace(",", ".");
        const quantidadeProduto = produtosCarrinho[index].getElementsByClassName("product-quantity")[0].value;

        valorTotal += valorProduto * quantidadeProduto;
    }
    valorTotal = valorTotal.toFixed(2)
    document.querySelector(".total-price span").innerText = "R$" + valorTotal;
}
