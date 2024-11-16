<?php
// Recebe os produtos do banco de dados da tabela carrinho e transforma no formato JSON //

include_once('src/pages/orderConfig.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {

    if ($_POST['action'] == 'carregar_carrinho') {

        $query = "SELECT p.id, p.caminho_imagem, p.nome_produto, p.preco, c.quantidade FROM carrinho c
                  JOIN produtos p 
                  ON p.id = c.produto_id";

        $resultado = $conexao->query($query);

        if ($resultado->num_rows > 0) {
            $itens = [];

            while ($row = $resultado->fetch_assoc()) {
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
    
    // Atualiza a quantidade do produto no carrinho //

    if ($_POST['action'] == 'atualizar_quantidade' && isset($_POST['id_produto']) && isset($_POST['quantidade'])) {

        $id_produto = intval($_POST['id_produto']);
        $quantidade = intval($_POST['quantidade']);

        if ($quantidade >= 1) {

            $update_query = "UPDATE carrinho 
                             SET quantidade = ? 
                             WHERE produto_id = ?";

            $stmt = $conexao->prepare($update_query);
            $stmt->bind_param('ii', $quantidade, $id_produto);

            if ($stmt->execute()) {
                echo json_encode(['success' => true]);
            } else {
                echo json_encode(['success' => false]);
            }

            $stmt->close();
        } else {
            echo json_encode(['success' => false]);
        }
    }

      // Remover produto do carrinho //

      if ($_POST['action'] == 'remover_produto' && isset($_POST['id_produto'])) {

        $id_produto = intval($_POST['id_produto']);

        $delete_query = "DELETE FROM carrinho 
                         WHERE produto_id = ?";

        $stmt = $conexao->prepare($delete_query);
        $stmt->bind_param('i', $id_produto);

        if ($stmt->execute()) {
            echo json_encode(['success' => true]);
        } else {
            echo json_encode(['success' => false]);
        }

        $stmt->close();
    }

    $conexao->close();
    exit();
}
?>