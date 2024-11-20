<?php
require '../../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

$email = $_POST['email'];
$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host = $_ENV['mail_host'];
    $mail->SMTPAuth = true;
    # email e senha do remetente
    $mail->Username = $_ENV['mail_user'];
    $mail->Password = $_ENV['mail_pass'];
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    # Remetente e destinatário
    $mail->setFrom($_ENV['mail_user'], 'LodeurUnique');
    $mail->addAddress($email);

    # Conteúdo do e-mail
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = "Validação de e-mail no LodeurUnique";
    $mail->Body = "
        <html>
        <head>
            <style>
              .button {
                display: inline-block;
                padding: 12px 24px;
                font-size: 16px;
                font-weight: bold;
                color: #ffffff !important;
                background-color: #222;
                border-radius: 8px;
                transition: background-color 0.3s ease;
                text-decoration: none;
                color: inherit;
              }

              body {
                text-align: center;
              }
              .container {
                max-width: 600px;
                margin: 0 auto;
              }
              .txt {
                text-align: justify;
              }
              .button:hover {
                  background-color: #000;
              }
        </style>
        </head>
        <body class='container'>
            <img src='https://i.imgur.com/9Akpe7W.png' alt='logo' width='200'>
            <p><br>Olá!</p>
            <p class='txt'>Obrigado por se cadastrar no LodeurUnique! Por favor, clique no botão abaixo para finalizar o seu cadastro no site.</p>
            <a href='http://localhost:6969/src/pages/valid.php' class='button'>Confirmar email</a>
            <p><br>Atenciosamente,<br>
            Equipe LodeurUnique</p>
        </body>
        </html>
    ";

    $mail->send();
    exit;
} catch (Exception $e) {
    echo "Erro ao enviar o e-mail: {$mail->ErrorInfo}";
    sleep(2);
    header("Location: http://localhost:6969/");
    exit;
}
?>