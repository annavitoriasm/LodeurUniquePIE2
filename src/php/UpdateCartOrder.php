<?php
require_once('../pages/order.php');

# Conectando ao Supabase
$connection = new PDO($dsn, $dbUser, $dbPassword, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

# Recebe os produtos do banco de dados da tabela carrinho e transforma no formato JSON 
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {

    if ($_POST['action'] == 'carregar_carrinho') {

        $sql = 'SELECT p.id, p.caminho_imagem, p.nome_produto, p.preco, c.quantidade FROM carrinho c
                JOIN produtos p 
                ON p.id = c.produto_id';

        $stmt = $connection->prepare($sql);
        $stmt->execute();

        $resultado =  $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($resultado) > 0) {
            $itens = [];

            foreach ($resultado as $row) {
                $itens[] = [
                    'id' => $row['id'],
                    'caminho_imagem' => htmlspecialchars($row['caminho_imagem']),
                    'nome_produto' => htmlspecialchars($row['nome_produto']),
                    'preco' => number_format($row['preco'], 2, '.', ''),
                    'quantidade' => $row['quantidade']
                ];
            }

            echo json_encode(['items' => $itens]);
        } else {
            echo json_encode(['items' => []]);
        }

    } 
    
    # Atualiza a quantidade do produto no carrinho 
    if ($_POST['action'] == 'atualizar_quantidade' && isset($_POST['id_produto']) && isset($_POST['quantidade'])) {

        # Livrando os parâmetros de possíveis caracteres especiais
        $Data = array_map('trim', $_POST);

        # Filtrando os campos
        $id_produto = intval($_POST['id_produto']);
        $quantidade = intval($_POST['quantidade']);
   
        if ($quantidade >= 1) {

            $sql = 'UPDATE carrinho 
                    SET quantidade = :quantidade 
                    WHERE produto_id = :produto_id';

            $stmt = $connection->prepare($sql);
            $stmt->bindParam(':produto_id', $id_produto, PDO::PARAM_INT);
            $stmt->bindParam(':quantidade', $quantidade, PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }

        } else {
            echo json_encode(['success' => false]);
        }
    }

      # Remover produto do carrinho 
      if ($_POST['action'] == 'remover_produto' && isset($_POST['id_produto'])) {

        $id_produto = intval($_POST['id_produto']);

        $sql = 'DELETE FROM carrinho 
                WHERE produto_id = :produto_id';

        $stmt = $conexao->prepare($sql);
        $stmt->bindParam(':produto_id', $id_produto, PDO::PARAM_INT);

        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }
    }

    # Evitando reenvio de formulário
    header('Location: ' . $_SERVER['PHP_SELF']);
    exit;
}
?>