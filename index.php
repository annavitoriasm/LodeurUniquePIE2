<?php include_once('src/php/UpdateCart.php'); ?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>L'odeur Unique | Home</title>
    <link rel="stylesheet" href="src/css/style.css">
</head>

<body>
    <!-- Música Ambiente - Criar card -->
    <audio autoplay loop>
        <!-- <source src="src/public/audio/tema.mp3">  -->
    </audio>
    <!-- Navbar do mobile -->
    <header>
        <div class="navbar-mobile">
            <a id="logo" href="#logo">L'odeur Unique</a>
            <nav id="nav">
                <button id="btn-mobile"><span id="hamburger"></span></button>
                <ul id="menu">
                    <li><a href="#home">Início</a></li>
                    <li><a href="#about">Sobre</a></li>
                    <li><a href="#shop">Produtos</a></li>
                    <li><a href="#message">Contato</a></li>
                    <li><a href="#" class="cart-toggle">
                        <div class="cart-icon"></div>
                    </a></li>
                </ul>
            </nav>
        </div>

        <!-- Carrinho -->
        <div class="cart">
            <h2 class="cart-title">Carrinho</h2>
            <div class="cart-content" id="cart-content">

            </div>

            <i class="detail"></i>
            <div class="total">
                <div class="total-title">Total</div>
                <div class="total-price" id="total-price">R$0,00</div>
            </div>
            <a href="src/pages/order.php">
                <button type="button" class="button-buy">Comprar</button>
            </a>
            <img class="close-cart" src="src/public/img/close.png" alt="">
        </div>
    </header>

    <!-- POPUP LOGIN -->
    <dialog>

        <div class="container-login">
            <div class="title-login">
                <div class="text-login">
                    <h3 class="h3-login">Login</h3>
                    <p class="desc-login">Por favor, preencha os dados para acessar a conta e realizar compras.</p>
                </div>
                <button class="btn-cls-login">
                    <img class="close-cart" src="src/public/img/close.png" class="close-login">
                </button>
            </div>
            <form id="form-login" action="" method="POST">
                <input required type="email" placeholder="Email" class="box inp-login" name="email">
                <input required type="password" placeholder="Senha" class="box inp-login" name="senha">
                <input required type="number" placeholder="CPF" class="box inp-login" name="cpf">
                <button type="submit" class=" btn-login">Entrar</button>
            </form>
        </div>

    </dialog>

    <!-- COOKIES -->
    <div id="cookieBanner">
        <i class="fa-solid fa-cookie-bite"></i>
        Este site utiliza cookies para melhorar sua experiência de navegação, analisar o tráfego do site e personalizar o conteúdo.
        <button onclick="setConsent('accepted')">Aceitar</button>
        <button class="reject" onclick="setConsent('rejected')">Rejeitar</button>
    </div>

    <!-- CARROSSEL -->
    <section class="home" id="home">
        <div class="box-slider">
            <div class="slid-img">
                <img src="src/public/img/banner1.png" alt="" class="slider on">
                <img src="src/public/img/banner2.png" alt="" class="slider">
            </div>
            <div class="box-b">
                <button class="b-crsl" id="prev"><img src="src/pages/produtos/style/icons/arrow-carrossel.png" alt=""></button>
                <button class="b-crsl" id="next"><img src="src/pages/produtos/style/icons/arrow-carrossel.png" alt=""></button>
            </div>
        </div>
    </section>

    <!-- CONTAINER MARCAS -->
    <section class="marcas">
        <div class="box-container">

            <div href="#" class="box">
                <img src="src/public/img/1logo-dior.png">
            </div>

            <div href="#" class="box">
                <img src="src/public/img/2logo-ck.png">
            </div>

            <div href="#" class="box">
                <img src="src/public/img/3logo-sl.png">
            </div>

            <div href="#" class="box">
                <img src="src/public/img/4logo-dg.png">
            </div>

            <div href="#" class="box">
                <img src="src/public/img/5logo-pr.png">
            </div>

        </div>
    </section>

    <!-- CONTAINER "SOBRE NÓS" -->
    <section class="about" id="about">
        <div class="content">
            <div class="box">
                <h3>Sobre nós</h3>
                <p>
                    Um grupo de universitários uniu seus conhecimentos para criar um site de perfumaria que
                    satisfaça a experiência do usuário. Realizou-se o possível de estética e usabilidade,
                    dedicando-nos à pesquisa e desenvolvimento para conceber uma interface visualmente agradável.
                    Os detalhes do site, desde a navegação até os elementos visuais, foram organizados para
                    proporcionar um bom uso. Combinando as tecnologias de HTML, CSS e JavaScript,
                    o site não só oferece uma exemplificação de produtos, mas também uma
                    estética minimalista que reflete a conciliação ao tema perfumaria.
                </p>
            </div>
        </div>
    </section>

    <!-- PRODUTOS -->
    <section class="shop" id="shop">
        <h1 class="heading">Nossos produtos</h1>
        <div class="box-container">

            <div class="box">
                <div class="img">
                    <a href="src/pages/produtos/1product.html">
                        <img decoding="async" src="src/public/img/perfume-teste.webp">
                    </a>
                    <div class="icons">
                        <a href="produtos/1product.html" class="view"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>LANCÔME LA NUIT TRÉSOR</h3>
                    <div class="price">R$298.00-<span>R$300.00</span></div>
                    <form action="" method="POST">
                        <input required type="hidden" placeholder="produto_id"  name="produto_id" min="1" max="1" value="1">
                        <input required type="hidden" placeholder="quantidade"  name="quantidade" min="1" max="1" value="1">
                        <button type="submit" class="btn" name="submit">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <a href="src/pages/produtos/2product.html">
                        <img decoding="async" src="src/public/img/Yparfum.png" style="padding-top: 10px;">
                    </a>
                    <div class="icons">
                        <a href="src/pages/produtos/2product.html" class="view"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3> Y LE PARFUM MASCULINO</h3>
                    <div class="price">R$1198.99-<span>R$1200.00</span></div>
                    <form action="" method="POST">
                        <input required type="hidden" placeholder="produto_id"  name="produto_id" min="2" max="2" value="2">
                        <input required type="hidden" placeholder="quantidade"  name="quantidade" min="1" max="1" value="1">
                        <button type="submit" class="btn" name="submit">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <a href="src/pages/produtos/3product.html">
                        <img decoding="async" src="src/public/img/ck.png" style="width: 230px; padding: 10px;">
                    </a>
                    <div class="icons">
                        <a href="src/pages/produtos/3product.html" class="view"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>CK EUPHORIA</h3>
                    <div class="price">R$567.00-<span>R$570.00</span></div>
                    <form action="" method="POST">
                        <input required type="hidden" placeholder="produto_id"  name="produto_id" min="3" max="3" value="3">
                        <input required type="hidden" placeholder="quantidade"  name="quantidade" min="1" max="1" value="1">
                        <button type="submit" class="btn" name="submit">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <a href="src/pages/produtos/4product.html">
                        <img decoding="async" src="src/public/img/sauvage.png" style="padding-top: 10px;">
                    </a>
                    <div class="icons">
                        <a href="src/pages/produtos/4product.html" class="view"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>SAUVAGE ELIXIR</h3>
                    <div class="price">R$1595.99-<span>R$1599.00</span></div>
                    <form action="" method="POST">
                        <input required type="hidden" placeholder="produto_id"  name="produto_id" min="4" max="4" value="4">
                        <input required type="hidden" placeholder="quantidade"  name="quantidade" min="1" max="1" value="1">
                        <button type="submit" class="btn" name="submit">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <a href="src/pages/produtos/5product.html">
                        <img decoding="async" src="src/public/img/DG.png" style="width: 230px; padding: 10px;">
                    </a>
                    <div class="icons">
                        <a href="src/pages/produtos/5product.html" class="view"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>DEVOTION DOLCE & GABBANA</h3>
                    <div class="price">R$648.99-<span>R$650.00</span></div>
                    <form action="" method="POST">
                        <input required type="hidden" placeholder="produto_id"  name="produto_id" min="5" max="5" value="5">
                        <input required type="hidden" placeholder="quantidade"  name="quantidade" min="1" max="1" value="1">
                        <button type="submit" class="btn" name="submit">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <a href="src/pages/produtos/6product.html">
                        <img decoding="async" src="src/public/img/mi.png">
                    </a>
                    <div class="icons">
                        <a href="src/pages/produtos/6product.html" class="view"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>1 MILLION RABANE</h3>
                    <div class="price">R$709.99-<span>R$711.99</span></div>
                    <form action="" method="POST">
                        <input required type="hidden" placeholder="produto_id"  name="produto_id" min="6" max="6" value="6">
                        <input required type="hidden" placeholder="quantidade"  name="quantidade" min="1" max="1" value="1">
                        <button type="submit" class="btn" name="submit">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <a href="src/pages/produtos/7product.html">
                        <img decoding="async" src="src/pages/produtos/style/img/Azarro1.png">
                    </a>
                    <div class="icons">
                        <a href="src/pages/produtos/7product.html" class="view"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>WANTED AZARRO</h3>
                    <div class="price">R$560.00-<span>R$600.00</span></div>
                    <form action="" method="POST">
                        <input required type="hidden" placeholder="produto_id"  name="produto_id" min="7" max="7" value="7">
                        <input required type="hidden" placeholder="quantidade"  name="quantidade" min="1" max="1" value="1">
                        <button type="submit" class="btn" name="submit">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <a href="src/pages/produtos/8product.html">
                        <img decoding="async" src="src/pages/produtos/style/img/polo1.png">
                    </a>
                    <div class="icons">
                        <a href="src/pages/produtos/8product.html" class="view"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>RALPH LAUREN POLO</h3>
                    <div class="price">R$670.00-<span>R$800.00</span></div>
                    <form action="" method="POST">
                        <input required type="hidden" placeholder="produto_id"  name="produto_id" min="8" max="8" value="8">
                        <input required type="hidden" placeholder="quantidade"  name="quantidade" min="1" max="1" value="1">
                        <button type="submit" class="btn" name="submit">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <a href="src/pages/produtos/9product.html">
                        <img decoding="async" src="src/public/img/belle.png"
                            style="width: 250px; height: 210px; margin-top: 40px;">
                    </a>
                    <div class="icons">
                        <a href="src/pages/produtos/9product.html" class="view"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>LA VIE BELLE</h3>
                    <div class="price">R$699.00-<span>R$800.00</span></div>
                    <form action="" method="POST">
                        <input required type="hidden" placeholder="produto_id"  name="produto_id" min="9" max="9" value="9">
                        <input required type="hidden" placeholder="quantidade"  name="quantidade" min="1" max="1" value="1">
                        <button type="submit" class="btn" name="submit">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <a href="src/pages/produtos/10product.html">
                        <img decoding="async" src="src/pages/produtos/style/img/VICTORY1 (1).png"
                            style="width: 200px; height: 200px; margin-top: 49px;">
                    </a>
                    <div class="icons">
                        <a href="src/pages/produtos/10product.html" class="view"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3> INVICTUS VICTORY ELIXIR</h3>
                    <div class="price">R$770.00-<span>R$800.00</span></div>
                    <form action="" method="POST">
                        <input required type="hidden" placeholder="produto_id"  name="produto_id" min="10" max="10" value="10">
                        <input required type="hidden" placeholder="quantidade"  name="quantidade" min="1" max="1" value="1">
                        <button type="submit" class="btn" name="submit">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>

            <div class="box">
                <div class="img">
                    <a href="src/pages/produtos/11product.html">
                        <img decoding="async" src="src/pages/produtos/style/img/chloé1 (1).png">
                    </a>
                    <div class="icons">
                        <a href="src/pages/produtos/11product.html" class="view"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>CHLOÉ NATURELLE</h3>
                    <div class="price">R$580.00-<span>R$750.00</span></div>
                    <form action="" method="POST">
                        <input required type="hidden" placeholder="produto_id"  name="produto_id" min="11" max="11" value="11">
                        <input required type="hidden" placeholder="quantidade"  name="quantidade" min="1" max="1" value="1">
                        <button type="submit" class="btn" name="submit">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>
            <div class="box">
                <div class="img">
                    <a href="src/pages/produtos/12product.html">
                        <img decoding="async" src="src/pages/produtos/style/img/erba1 (1).png">
                    </a>
                    <div class="icons">
                        <a href="src/pages/produtos/12product.html" class="view"></a>
                        <a href="#" class="heart"></a>
                        <a href="#" class="share"></a>
                    </div>
                </div>
                <div class="content">
                    <h3>ERBA PURA EAU</h3>
                    <div class="price">R$2500.00-<span>R$2700.00</span></div>
                    <form action="" method="POST">
                        <input required type="hidden" placeholder="produto_id"  name="produto_id" min="12" max="12" value="12">
                        <input required type="hidden" placeholder="quantidade"  name="quantidade" min="1" max="1" value="1">
                        <button type="submit" class="btn" name="submit">ADICIONAR AO CARRINHO</button>
                    </form>
                </div>
            </div>

        </div>
    </section>

    <!-- CONTAINER "CONTATO" -->
    <section class="message" id="message">
        <form>
            <h3>Entre em contato</h3>
            <input type="text" placeholder="Nome completo" class="box">
            <input type="email" placeholder="Email" class="box">
            <input type="number" placeholder="Celular" class="box">
            <textarea placeholder="Mensagem" class="box" cols="30" rows="10"></textarea>
            <input type="submit" value="Enviar" class="btn">
        </form>
    </section>

    <!-- SERVIÇOS -->
    <section class="services">

        <div class="box">
            <img decoding="async" src="src/public/img/icon-1.png" alt="">
            <h3>Entrega grátis</h3>
            <p>Aproveite nossa entrega grátis para todas as suas compras, sem custo adicional! Escolha seus produtos favoritos e receba-os diretamente na sua porta, sem pagar taxas de envio. Compre agora e aproveite essa vantagem exclusiva!</p>
        </div>

        <div class="box">
            <img decoding="async" src="src/public/img/icon-2.png" alt="">
            <h3>Pagamento seguro</h3>
            <p>Garantimos um atendimento seguro, protegendo suas informações pessoais e financeiras com rigorosos protocolos de segurança e tecnologias avançadas, treinados para tratar seus dados de forma confidencial. Compre com tranquilidade e confiança!</p>
        </div>

        <div class="box">
            <img decoding="async" src="src/public/img/icon-3.png" alt="">
            <h3>Suporte 24 horas</h3>
            <p>Estamos disponíveis para você 24 horas por dia, 7 dias por semana! Nossa equipe de suporte está sempre pronta para ajudar, seja por telefone, chat online, e-mail ou redes sociais. Conte conosco a qualquer momento para uma experiência de compra impecável!</p>
        </div>

    </section>

    <!-- FOOTER -->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>Links</h3>
                <a class="link" href="#home"> Início</a>
                <a class="link" href="#about"> Sobre</a>
                <a class="link" href="#shop"> Produtos</a>
                <a class="link" href="#message"> Mensagem</a>
            </div>

            <div class="box">
                <h3>Contato</h3>
                <a class="link" href="#"> 99 8899-5555 </a>
                <a class="link" href="#"> lodeurunique@gmail.com </a>
                <a class="link" href="#"> Caxias-MA - (65606-060) </a>
            </div>

            <div class="credit">
                <p>© Site de perfumes criado por <span>ADS 1 Período</span> || Todos os direitos reservados. </p>
            </div>
    </section>

</body>
<script src="src/script/main.js"></script>
<script src="src/script/menumobile.js"></script>
<script src="src/script/carrinho.js"></script>
<script src="src/script/login.js"></script>
<script src="src/script/cookies.js"></script>

<?php include_once('src/php/AddCart.php'); ?>

</html>

<script> 
// Recebe os produtos no formato JSON e lista os produtos no carrinho //

function carregarCarrinho() 
{
    fetch(window.location.href, { 
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            action: 'carregar_carrinho'
        })
    })
    .then(response => response.json())
    .then(data => {

        let cartContent = document.getElementById('cart-content');
        cartContent.innerHTML = '';

        let total = 0;
        data.items.forEach(item => {
            cartContent.innerHTML += `
                <div class="cart-box">
                    <img class="cart-img" src="${item.caminho_imagem}" alt="">
                    <div class="detail-box">
                        <div class="cart-product-title">${item.nome_produto}</div>
                        <div class="cart-price">R$${item.preco}</div>
                    </div>
                </div>
                <div class="buttons">
                    <div class="quantity">
                        <h3 class="quantity__title">Qty.</h3>
                        <div class="quantity__content">
                            <input class="cart-quant" type="number" min="1" max="99" value="${item.quantidade}" data-id="${item.id}">
                        </div>
                    </div>
                    <button type="button" class="update-quantity" data-id="${item.id}">Atualizar</button>
                    <img class="cart-remove" src="src/public/img/trash-bin.png" alt="">
                </div>
            
            `;
            // Atualiza o total //
            total += parseFloat(item.preco) * item.quantidade;
        });

        // Atualiza o valor total //
        document.getElementById('total-price').textContent = 
        `R$${total.toLocaleString('pt-BR', { minimumFractionDigits: 2, maximumFractionDigits: 2 }).replace('.','').replace(',', '.')}`;
    })
    .catch(error => console.error('Erro ao carregar o carrinho:', error));
}

// Atualizar a quantidade de um produto no carrinho //

function atualizarQuantidade(id, quantidade) {
    fetch(window.location.href, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            action: 'atualizar_quantidade',
            id_produto: id,
            quantidade: quantidade
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            carregarCarrinho();
        } else {
            alert('Erro ao atualizar a quantidade.');
        }
    })
    .catch(error => console.error('Erro ao atualizar a quantidade:', error));
}

// Evento para verificar a ação de mudança na quantidade //

document.addEventListener('click', (event) => {
    if (event.target && event.target.classList.contains('update-quantity')) {
        const id = event.target.getAttribute('data-id');
        const quantidade = document.querySelector(`input[data-id="${id}"]`).value;
        
        if (quantidade >= 1) {
            atualizarQuantidade(id, quantidade);
        } else {
            alert('A quantidade deve ser maior ou igual a 1.');
        }
    }
});

// Função para remover um produto do carrinho //

function removerProduto(id_produto) {
    fetch(window.location.href, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: new URLSearchParams({
            action: 'remover_produto',
            id_produto: id_produto
        })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            alert('Produto removido com sucesso!');
            carregarCarrinho();
        } else {
            alert('Erro ao remover o produto.');
        }
    })
    .catch(error => console.error('Erro ao remover o produto:', error));
}

// Evento para verificar a ação de remoção do produto //

document.addEventListener('click', (event) => {
    if (event.target && event.target.classList.contains('cart-remove')) {
        const id = event.target.closest('.buttons').querySelector('input.cart-quant').getAttribute('data-id');
        
        if (confirm("Você tem certeza que deseja remover este produto do carrinho?")) {
            removerProduto(id);
        }
    }
});

window.onload = carregarCarrinho;
</script>
