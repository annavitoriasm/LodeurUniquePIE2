const cartContent = document.querySelector('.cart-content');
const cartIcon = document.querySelector('.cart-toggle');
const closeCart = document.querySelector('.close-cart');

// abrir e fechar o carrinho //
cartIcon.addEventListener('click', () => document.querySelector('.cart').classList.toggle('active'));
closeCart.addEventListener('click', () => document.querySelector('.cart').classList.remove('active'));