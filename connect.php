<?php
$host = "localhostsql211.infinityfree.com";
$usuario = "if0_35295512";
$senha = "sabombinhas";
$banco = "if0_35295512_sa_bombeiros";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

return $conexao; // Retorna a conexão para ser usada em outros scripts
?>
