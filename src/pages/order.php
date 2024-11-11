<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>L'odeur Unique | Pedido</title>
  <link rel="stylesheet" href="../css/order.css">
  <link rel="stylesheet" href="../css/output.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
  <script src="https://kit.fontawesome.com/46a37dcaa9.js" crossorigin="anonymous"></script>
</head>

<body class="text-[rgb(0,0,0)]">

  <header>
    <div class="navbar-mobile">
      <a id="logo" href="../../index.html">L'odeur Unique</a>
      <nav id="nav">
        <button id="btn-mobile"><span id="hamburger"></span></button>
        <ul id="menu">
          <li><a href="../../index.html" class="font-medium">Início</a></li>
          <li><a href="../../index.html#about" class="font-medium">Sobre</a></li>
          <li><a href="../../index.html#shop" class="font-medium">Produtos</a></li>
          <li><a href="../../index.html#message" class="font-medium">Contato</a></li>
          <li><a>
              <div class="cart-icon"></div>
            </a></li>
        </ul>
      </nav>
    </div>
  </header>

  <div id="container" class="flex m-[80px] mt-6 mb-0">

    <div id="content" class="w-[700px] flex-1 relative">

      <div id="container-form">
        <form class="w-[650px] ml-16 mt-[-15px]">
          <div class="border-b border-gray-900/10 pb-12">
            <h2 class="text-2xl font-semibold text-gray-900">Informações</h2>
            <p class="mt-1 text-base/6 text-gray-600">Preencha as informações corretamente para realizar seu pedido no
              L'odeur Unique!</p>

            <div class="mt-8 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
              <div class="sm:col-span-3">
                <label class="block text-sm/6 font-medium text-gray-900">Primeiro Nome</label>
                <div class="mt-2">
                  <input type="text" name="nome" id="nome"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                </div>
              </div>

              <div class="sm:col-span-3">
                <label class="block text-sm/6 font-medium text-gray-900">Sobrenome</label>
                <div class="mt-2">
                  <input type="text" name="sobrenome" id="sobrenome"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                </div>
              </div>

              <div class="flex sm:col-span-6 gap-[30px]">

                <div class="sm:col-span-3">
                  <label class="block text-sm/6 font-medium text-gray-900">CPF</label>
                  <div class="mt-2">
                    <input type="text" name="cpf" id="cpf"
                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                  </div>
                </div>

                <div class="sm:col-span-3">
                  <label class="block text-sm/6 font-medium text-gray-900">Data de Nascimento</label>
                  <div class="mt-2">
                    <input type="date" name="dataNasc" id="dataNasc"
                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                  </div>
                </div>

                <div class="sm:col-span-3">
                  <label class="block text-sm/6 font-medium text-gray-900">Telefone </label>
                  <div class="mt-2">
                    <input type="text" name="telefone" id="telefone""
                      class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                  </div>

                </div>

              </div>

              <div class="sm:col-span-3">
                <label class="block text-sm/6 font-medium text-gray-900">Estado</label>
                <div class="mt-2">
                  <select id="estado" name="estado"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-black sm:max-w-xs sm:text-sm/6">
                    <option>MA</option>
                    <option>PI</option>
                  </select>
                </div>
              </div>

              <div class="sm:col-span-3">
                <label class="block text-sm/6 font-medium text-gray-900">Cidade</label>
                <div class="mt-2">
                  <select id="cidade" name="cidade"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-black sm:max-w-xs sm:text-sm/6">
                    <option>Caxias</option>
                    <option>Teresina</option>
                  </select>
                </div>
              </div>

            </div>

            <div class="col-span-full mt-[30px]">
              <label class="block text-sm/6 font-medium text-gray-900">Endereço</label>
              <div class="mt-2">
                <input type="text" name="endereco" id="endereco"
                  class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
              </div>
            </div>


            <div class="flex sm:col-span-2 sm:col-start-1 gap-[30px] mt-[30px]">
              <div class="">
                <label class="block text-sm/6 font-medium text-gray-900">CEP</label>
                <div class="mt-2">
                  <input type="text" name="cep" id="cep"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                </div>
              </div>

              <div class="">
                <label class="block text-sm/6 font-medium text-gray-900">Número</label>
                <div class="mt-2">
                  <input type="text" name="numeroEnd" id="numeroEnd"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                </div>
              </div>

              <div class="">
                <label class="block text-sm/6 font-medium text-gray-900">Complemento</label>
                <div class="mt-2">
                  <input type="text" name="complemento" id="complemento"
                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-black sm:text-sm/6">
                </div>
              </div>
            </div>


          </div>
      </div>

      <div class="pb-12 ml-[63px]">

        <h3 class="text-2xl font-medium text-gray-900 mt-[15px] mb-5">Forma de Pagamento</h3>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

          <div class="flex w-[800px] gap-[15px]">

            <div class="shadow-md w-[210px] rounded-lg border border-gray-200 bg-gray-50 p-4 ps-4">
              <div class="flex items-start">
                <div class="flex h-5 items-center">
                  <input id="pix" type="radio" name="pix"
                    value="" class="h-4 w-4 border-gray-300 bg-white text-black focus:ring-2 focus:ring-black" />
                </div>

                <div class="ms-4 text-sm">
                  <label" class="font-medium leading-none text-gray-900">
                    <i class="fa-brands fa-pix"></i>
                    Pix
                  </label>
                  <p class="mt-1 text-xs font-normal text-gray-500 ">Geramos o QR Code e o
                    código para você! </p>
                </div>
              </div>

              <div class="mt-4 flex items-center gap-2">

                <div class="h-3 w-px shrink-0 bg-gray-200"></div>

              </div>
            </div>

            <div class="shadow-md w-[210px] rounded-lg border border-gray-200 bg-gray-50 p-4 ps-4">
              <div class="flex items-start">
                <div class="flex h-5 items-center">
                  <input id="credito" aria-describedby="pay-on-delivery-text" type="radio" name="credito"
                    value="" class="h-4 w-4 border-gray-300 bg-white text-black focus:ring-2 focus:ring-black" />
                </div>

                <div class="ms-4 text-sm">
                  <label class="font-medium leading-none text-gray-900">
                    <i class="fa-solid fa-credit-card"></i>
                    Cartão de crédito
                  </label>
                  <p class="mt-1 text-xs font-normal text-gray-500 ">Com parcelamento</p>
                </div>
              </div>

              <div class="mt-4 flex items-center gap-2">
                <button type="button"
                  class="text-sm font-medium text-gray-500 hover:text-gray-900">xxxx/xxx/...</button>

                <div class="h-3 w-px shrink-0 bg-gray-200"></div>

                <button type="button" class="text-sm font-medium text-gray-500 hover:text-gray-900">Editar</button>
              </div>
            </div>


            <div class="shadow-md w-[210px] rounded-lg border border-gray-200 bg-gray-50 p-4 ps-4">
              <div class="flex items-start">
                <div class="flex h-5 items-center">
                  <input id="debito" aria-describedby="pay-on-delivery-text" type="radio" name="debito"
                    value="" class="h-4 w-4 border-gray-300 bg-white text-black focus:ring-2 focus:ring-black" />
                </div>

                <div class="ms-4 text-sm">
                  <label class="font-medium leading-none text-gray-900">
                    <i class="fa-solid fa-credit-card"></i>
                    Cartão de débito
                  </label>
                  <p id="pay-on-delivery-text" class="mt-1 text-xs font-normal text-gray-500 ">Local ou internacional
                  </p>
                </div>
              </div>

              <div class="mt-4 flex items-center gap-2">
                <button type="button"
                  class="text-sm font-medium text-gray-500 hover:text-gray-900">xxxx/xxx/...</button>

                <div class="h-3 w-px shrink-0 bg-gray-200"></div>

                <button type="button" class="text-sm font-medium text-gray-500 hover:text-gray-900">Editar</button>
              </div>
            </div>

          </div>

        </div>

        <div class="grid grid-cols-1 gap-4 md:grid-cols-3 mt-[15px]">

          <div class="flex w-[500px] gap-[15px]">

            <div class="shadow-md w-[210px] rounded-lg border border-gray-200 bg-gray-50 p-4 ps-4">
              <div class="flex items-start">
                <div class="flex h-5 items-center">
                  <input id="boleto" aria-describedby="pay-on-delivery-text" type="radio" name="boleto"
                    value="" class="h-4 w-4 border-gray-300 bg-white text-black focus:ring-2 focus:ring-black" />
                </div>

                <div class="ms-4 text-sm">
                  <label class="font-medium leading-none text-gray-900">
                    <i class="fa-solid fa-barcode"></i>
                    Boleto bancário
                  </label>
                  <p class="mt-1 text-xs font-normal text-gray-500 ">Pode levar até 5 dias
                    para processar o pagamento.</p>
                </div>
              </div>

              <div class="mt-4 flex items-center gap-2">

                <div class="h-3 w-px shrink-0 bg-gray-200"></div>

              </div>
            </div>

            <div class="shadow-md w-[210px] rounded-lg border border-gray-200 bg-gray-50 p-4 ps-4">
              <div class="flex items-start">
                <div class="flex h-5 items-center">
                  <input id="paypal" aria-describedby="pay-on-delivery-text" type="radio" name="paypal"
                    value="" class="h-4 w-4 border-gray-300 bg-white text-black focus:ring-2 focus:ring-black" />
                </div>

                <div class="ms-4 text-sm">
                  <label class="font-medium leading-none text-gray-900">
                    <i class="fa-brands fa-paypal"></i>
                    PayPal
                  </label>
                  <p class="mt-1 text-xs font-normal text-gray-500 ">Precisará do cadastro de
                    sua conta PayPal</p>
                </div>
              </div>

              <div class="mt-4 flex items-center gap-2">

                <div class="h-3 w-px shrink-0 bg-gray-200"></div>

              </div>
            </div>

          </div>

        </div>

      </div>
      </fieldset>
    </div>
  </div>
  </div>

  <div class="mb-10 flex items-center justify-end gap-x-6 w-[790px]">
    <button type="button" class="text-sm/6 w-20 font-semibold text-gray-900">Cancelar</button>
    <a href="payment.html">
      <button
        class="rounded-md w-20 bg-black px-3 py-2 text-sm font-semibold hover:bg-[rgba(19,19,19,0.96)] text-white shadow-sm focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-neutral-900">
          Finalizar
      </button>
    </a>
  </div>
  </form>
  </div>

  <!-- LISTA PEDIDO -->
  <div class="cart active mr-[180px] pl-[65px] pr-0 z-20">
    <h2 class="cart-title text-2xl font-medium text-gray-900">Confirmar Pedido </h2>
    <div class="cart-content"></div>

    <i class="detail"></i>
    <div class="total">
      <div class="total-title font-bold text-gray-900">Total</div>
      <div class="total-price font-bold text-gray-900">R$0,00</div>
    </div>
  </div>

  </div>

  </div>

</body>

</html>

<?php

include_once('loginConfig.php');

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
$primeiroNome = $_POST['primeiroNome'];
$sobrenome = $_POST['sobrenome'];
$cpf = $_POST['cpf'];
$dataNasc = $_POST['dataNasc'];
$email = $_POST['email'];
$endreco = $_POST['endreco'];
$cidade = $_POST['cidade'];
$estado = $_POST['estado'];
$cep = $_POST['cep'];

$result = mysqli_query($conexao, "INSERT INTO usuario(usuario,senha,primeiroNome,sobrenome,cpf,dataNasc,email,endereço,cidade,estado,cep)
VALUES ('$usuario','$senha','$primeiroNome','$sobrenome','$cpf','$dataNasc','$email','$endereço','$cidade','$estado','$cep')");

?>