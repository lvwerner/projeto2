<?php

$CPF = $_POST["CPF"];
$Senha = $_POST["Senha"];

$con = mysqli_connect('localhost','root','root');
mysqli_select_db('sa_bombas', $con);

	
$query = "SELECT cpf, senha FROM user WHERE cpf = $CPF and senha = $Senha";

$result = mysqli_query($query);

if($result){
        $string = "login bem sucedido";
        $data = array("minha_string" => $string);
        $json_texto = json_encode($data);
        echo($json_texto);
    
}else{
    $string = "CPF ou Senha informados inválidos";
    $data = array("minha_string" => $string);
    $json_texto = json_encode($data);
    echo($json_texto);
}
?>

<!-- PHP para autenticação tanto do login quanto para cadastro -->
<?php
session_start();

// Conectar ao banco de dados MySQL
$mysqli = new mysqli("localhost", "seu_usuario", "sua_senha", "seu_banco_de_dados");

// Verificar a conexão
if ($mysqli->connect_error) {
    die("Erro de conexão com o banco de dados: " . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['login'])) {
        // Receber dados do formulário de login
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

        // Consultar o banco de dados para verificar o login
        $query = "SELECT * FROM usuarios WHERE cpf='$cpf' AND senha='$senha'";
        $result = $mysqli->query($query);

        if ($result->num_rows == 1) {
            // Login bem-sucedido, criar uma sessão
            $_SESSION['cpf'] = $cpf;

            // Redirecionar para a página protegida (ficha.html)
            header("Location: ficha.html");
        } else {
            // Login falhou, redirecionar para a página de login novamente
            header("Location: login.html");
        }
    } elseif (isset($_POST['cadastro'])) {
        // Receber dados do formulário de cadastro
        $nome_completo = $_POST['nome_completo'];
        $email = $_POST['email'];
        $cpf = $_POST['cpf'];
        $senha = $_POST['senha'];

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
}

// Fechar a conexão com o banco de dados
$mysqli->close();
?>
