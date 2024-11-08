const cartContent = document.querySelector('.cart-content');
const cartIcon = document.querySelector('.cart-toggle');
const closeCart = document.querySelector('.close-cart');
const totalPriceElement = document.querySelector('.total-price');

// Variável para armazenar os produtos do carrinho //
let cart = [];

// Função para adicionar produto ao carrinho //
function addToCart(name, price, image) {
    const existingProduct = cart.find(item => item.name === name);
    if (existingProduct) {
        return 0;
    } else {
        cart.push({ name, price, image, quantity: 1 });
    }
    listCart();
}

// Adiciona produtos ao carrinho //
document.querySelectorAll('.btn').forEach(btn => {
    btn.addEventListener('click', (e) => {
        e.preventDefault();
        const productBox = e.target.closest('.box');
        const name = productBox.querySelector('h3').textContent;
        const price = parseFloat(productBox.querySelector('.price').textContent.replace('R$', ''));
        const image = productBox.querySelector('img').src;
        addToCart(name, price, image);
    });
});

// Função para atualizar o total do carrinho //
function updateTotal() {
    const total = cart.reduce((sum, item) => sum + item.price * item.quantity, 0);
    totalPriceElement.textContent = `R$${total.toFixed(2)}`;
}

// Função para listar o carrinho //
function listCart() {
    cartContent.innerHTML = '';
    cart.forEach((item, index) => {
        const cartBox = document.createElement('div');
        cartBox.classList.add('cart-content');
        cartBox.innerHTML = `
            <div class="cart-content">
                <div class="cart-box">
                        <img class="cart-img" src="${item.image}" alt="">
                    <div class="detail-box">
                        <div class="cart-product-title">${item.name}</div>
                        <div class="cart-price">R$${item.price.toFixed(2)}</div>
                    </div>
                </div>
            </div>
            <div class="buttons">
                <div class="quantity">
                    <h3 class="quantity__title">Qty.</h3>
                    <div class="quantity__content">
                        <input class="cart-quantity" id="number-qty" type="number" min="1" max="99" value="${item.quantity}">
                    </div>
                </div>
                <img class="cart-remove" src="src/public/img/trash-bin.png" alt="">
            </div>
        `;
        cartContent.appendChild(cartBox);

        // Adiciona eventos para atualizar quantidade e remover item //
        cartBox.querySelector('.cart-quantity').addEventListener('change', (e) => {
            item.quantity = parseInt(e.target.value) || 1;
            updateTotal();
        });
        cartBox.querySelector('.cart-remove').addEventListener('click', () => {
            cart.splice(index, 1);
            listCart();
            updateTotal();
        });
    });
    updateTotal();
}

// abrir e fechar o carrinho //
cartIcon.addEventListener('click', () => document.querySelector('.cart').classList.toggle('active'));
closeCart.addEventListener('click', () => document.querySelector('.cart').classList.remove('active'));