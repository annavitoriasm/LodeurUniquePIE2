<?php
require_once('src/pages/sqlconfig.php');

# Conectando ao Supabase
$connection = new PDO($dsn, $dbUser, $dbPassword, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

# Verifica se o usuário já existe e se existe validará o login, se não cadastrará o usuário
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
    # Livrando os parametros de possíveis caracteres especiais
    $Data = array_map('trim', $_POST);

    # Filtrando os campos
    $Data['email'] = isset($Data['email']) ? $Data['email'] : '';
    $Data['senha'] = isset($Data['senha']) ? $Data['senha'] : "";
    
    $sql = 'SELECT email FROM usuario WHERE email = :email'; 

    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':email', $Data['email'], PDO::PARAM_STR);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$resultado)
    { 
        $sql = "INSERT INTO usuario (email, senha) VALUES (:email, :senha)"; 

        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':email', $Data['email'], PDO::PARAM_STR);
        $stmt->bindParam(':senha', $Data['senha'], PDO::PARAM_STR);   
        $stmt->execute();
        
        echo "Usuário cadastrado"; 
    } else {
        echo "Este email já está registrado.";
    }
    
}
?>