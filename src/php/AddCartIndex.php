<?php
require_once('src/pages/sqlconfig.php');

# Conectando ao Supabase
$connection = new PDO($dsn, $dbUser, $dbPassword, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

// Verifica se o produto já existe no carrinho e adiciona os produtos no carrinho //
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
    # Livrando os parametros de possíveis caracteres especiais
    $Data = array_map('trim', $_POST);
    
    # Filtrando os campos
    $Data['produto_id'] = isset($Data['produto_id']) ? preg_replace('/\D/', '', $Data['produto_id']) : '';
    $Data['quantidade'] = isset($Data['quantidade']) ? preg_replace('/\D/', '', $Data['quantidade']) : 1;
    
    $sql = "SELECT id, quantidade FROM carrinho WHERE produto_id = :produto_id"; 

    $stmt = $connection->prepare($sql);
    $stmt->bindParam(':produto_id', $Data['produto_id'], PDO::PARAM_INT);
    $stmt->execute();

    $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$resultado)
    { 
        $sql = "INSERT INTO carrinho (produto_id, quantidade) VALUES (:produto_id, :quantidade)"; 

        $stmt = $connection->prepare($sql);
        $stmt->bindParam(':produto_id', $Data['produto_id'], PDO::PARAM_INT);
        $stmt->bindParam(':quantidade', $Data['quantidade'], PDO::PARAM_INT);
        $stmt->execute();
        
        echo "Produto adicionado ao carrinho."; 
    } 
    
}
?>