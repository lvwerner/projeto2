<?php
session_start();

// Conectar ao banco de dados MySQL
$mysqli = new mysqli("localhost", "root", "", "sa_bombeiros");

// Verificar a conexão
if ($mysqli->connect_error) {
    die("Erro de conexão com o banco de dados: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['cadastro'])) {
    // Receber dados do formulário de cadastro
    $nome_completo = $_POST['nome'];
    $email = $_POST['Email'];
    $cpf = $_POST['CPF'];
    $senha = $_POST['Senha'];

    // Inserir os dados na tabela de usuários
    $query = "INSERT INTO usuarios (nome_completo, email, cpf, senha) VALUES ('$nome_completo', '$email', '$cpf', '$senha')";

    if ($mysqli->query($query) === TRUE) {
        // Cadastro bem-sucedido, criar uma sessão
        $_SESSION['cpf'] = $cpf;

        // Redirecionar para a página protegida (ficha.html)
        header("Location: ficha.html");
    } else {
        // Erro no cadastro, redirecionar para a página de cadastro novamente
        header("Location: cadastro.html");
    }
}

// Fechar a conexão com o banco de dados
$mysqli->close();
?>
