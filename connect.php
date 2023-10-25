<?php
$host = "localhost";
$usuario = "root";
$senha = "root";
$banco = "sa_bombeiros";

$conexao = new mysqli($host, $usuario, $senha, $banco);

if ($conexao->connect_error) {
    die("Erro na conexão: " . $conexao->connect_error);
}

return $conexao; // Retorna a conexão para ser usada em outros scripts
?>
