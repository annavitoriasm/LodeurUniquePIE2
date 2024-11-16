<?php 
// Verifica se o produto já existe no carrinho e adiciona os produtos no carrinho //

include_once('src/pages/orderConfig.php'); 

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{ 
    
    $produto_id = $_POST['produto_id']; 
    $quantidade = isset($_POST['quantidade']) ? intval($_POST['quantidade']) : 1; 
    
    $resultado = $conexao->prepare("SELECT id, quantidade FROM carrinho WHERE produto_id = ?"); 
    $resultado->bind_param("i", $produto_id); 
    $resultado->execute(); 
    $resultado->store_result(); 

    if ($resultado->num_rows == 0) 
    { 
    
        $inserir = $conexao->prepare("INSERT INTO carrinho (produto_id, quantidade) VALUES (?, ?)"); 
        $inserir->bind_param("ii", $produto_id, $quantidade); 
        $inserir->execute(); 
        
        echo "Produto adicionado ao carrinho."; 
    } 
    
    $resultado->close(); 
    $conexao->close(); 
} else { 
    echo "Erro de requisição";
} 
?>