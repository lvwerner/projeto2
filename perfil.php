<?php
        session_start();

        // Se o usuário não estiver logado, redirecionar para a página de login
        if (!isset($_SESSION['cpf'])) {
            header("Location: login.html");
            exit();
        }
        ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ficha de Ocorrência</title>
    <link rel="stylesheet" href="perfil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <style>
        body {
            background-color: rgba(173, 172, 191, 0.361);
            font-family: 'Open Sans', coursive;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: transparent !important; /* Cor azul para a barra de navegação */
        }

        .navbar-light .navbar-toggler-icon {
            background-color: #ffffff; /* Cor branca para o ícone do botão de alternância */
        }

        .offcanvas-body {
            background-color: #e6f7ff; /* Fundo azul claro para o menu offcanvas */
        }

        .user-data {
            background-color: #ffffff; /* Fundo branco para destacar os dados do usuário */
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>

</head>

<body>
<nav id="navbarra" class="navbar navbar-expand-lg d-none d-lg-block">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="index.php">Ficha de Ocorrência</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="perfil.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="atendente.php">Atendimento</a>
                </li>
                <form action="logout.php" method="post">
                    <input type="submit" name="logout" value="Sair" class="logout-button nav-link" />
                </form>

            </ul>
        </div>
    </nav>
    <!-- Menu em offcanva -->
    <!-- Breve explicação das classes
                - d-lg-none: Indica ao Bootstrap que este menu offcanvas não irá aparecer em telas maiores que 992px.
                - navbar-toggler: Indica ao Bootstrap que este é um botão de alternância.
                - data-bs-toggle: Indica que este botão será utilizado para alternar a visibilidade do offcanvas.
                - data-bs-target: Indica qual elemento terá sua visibilidade alternada.
                - offcanvas-start: Indica que o menu offcanvas deve começar com seus elementos alinhados à esquerda da tela.
                - aria-label: É utilizado para melhorar a acessibilidade da página da web.
            -->
    <div class="d-lg-none">

        <nav class="navbar navbar-light bg-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand" href="#">S.A. Bombeiros</a>
            </div>
        </nav>

        <div class="offcanvas offcanvas-start" id="offcanvasNav">

            <div class="offcanvas-header">
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Fechar"></button>
            </div>

            <div class="offcanvas-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.php">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="atendente.php">Atendimento</a>
                    </li>
                </ul>
                <form action="logout.php" method="post">
                    <input type="submit" name="logout" value="Sair" class="logout-button nav-link" />
                </form>

            </div>

        </div>

    </div>
    </header>
    
    <div class="container user-data">
       <?php

        $mysqli = new mysqli("localhost", "root", "", "sa_bombeiros");

        if ($mysqli->connect_error) {
            die("Erro de conexão com o banco de dados: " . $mysqli->connect_error);
        }

        $cpfUsuarioLogado = $_SESSION['cpf'];
        $query = "SELECT * FROM usuarios WHERE cpf = '$cpfUsuarioLogado'";
        $result = $mysqli->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "Nome Completo: " . $row["nome_completo"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "CPF: " . $row["cpf"] . "<br>";
            echo $_SESSION['tipo'];
        } else {
            echo "Não foram encontrados registros para o usuário logado.";
        }

        $mysqli->close();
        ?>
    </div>

    <!-- Seu código HTML existente continua aqui... -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-eA2FpH/T4XuG5f6Kd3zZDr/CXBUw5iBRi15W5zt79MXIgdXTZWRpfaSGfIfDj5" crossorigin="anonymous"></script>
</body>

</html>
