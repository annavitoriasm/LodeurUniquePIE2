<?php
require_once('../pages/sqlconfig.php');

# Captura e sanitização inicial dos dados enviados via POST
$Data = array_map('trim', $_POST);

# Tratamento específico de campos
$Data['cpf'] = isset($Data['cpf']) ? preg_replace('/\D/', '', $Data['cpf']) : '';
$Data['cep'] = isset($Data['cep']) ? preg_replace('/\D/', '', $Data['cep']) : '';
$Data['numeroend'] = isset($Data['numeroend']) ? (int)$Data['numeroend'] : 0;

if (isset($Data['data_nasc']) && !empty($Data['data_nasc'])) {
    $Data['data_nasc'] = date("Y-m-d", strtotime(str_replace('/', '-', $Data['data_nasc'])));
} else {
    $Data['data_nasc'] = '1970-01-01';
}

# Sanitização adicional para evitar XSS
$Data = array_map(function($value) {
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}, $Data);

# Conexão ao banco de dados (Supabase)
$connection = new PDO($dsn, $dbUser, $dbPassword, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
]);

# Definição e preparação da query SQL
$sql = "INSERT INTO cliente_pedido
        (nome, sobrenome, cpf, data_nasc, telefone, estado, cidade, endereco, cep, numeroend, complemento)
        VALUES (:nome, :sobrenome, :cpf, :data_nasc, :telefone, :estado, :cidade, :endereco, :cep, :numeroend, :complemento)";

$stmt = $connection->prepare($sql);

# Execução da query com os parâmetros tratados
$stmt->execute([
    ':nome' => $Data['nome'] ?? '',
    ':sobrenome' => $Data['sobrenome'] ?? '',
    ':cpf' => $Data['cpf'],
    ':data_nasc' => $Data['data_nasc'],
    ':telefone' => $Data['telefone'] ?? '',
    ':estado' => $Data['estado'] ?? '',
    ':cidade' => $Data['cidade'] ?? '',
    ':endereco' => $Data['endereco'] ?? '',
    ':cep' => $Data['cep'],
    ':numeroend' => $Data['numeroend'],
    ':complemento' => $Data['complemento'] ?? ''
]);

?>