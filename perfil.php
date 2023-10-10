<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <title>Ficha de Ocorrência</title>
    <link rel="stylesheet" href="perfil.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg navbar- bg-light d-none d-lg-block">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="#">Ficha de Ocorrência</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="ficha.html">Página Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sobre.html">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="perfil.html">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login.html">Login</a>
                </li>
                <form action="logout.php" method="post">
                    <input type="submit" name="logout" value="Sair" class="logout-button nav-link" />
                </form>
            </ul>
        </div>
    </nav>
    <!-- Menu em offcanvas -->
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
                        <a class="nav-link" href="ficha.html">Página Inicial</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.html">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="perfil.html">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Login</a>
                    </li>
                    <form action="logout.php" method="post">
                    <input type="submit" name="logout" value="Sair" class="logout-button nav-link" />
                </form>
                </ul>
            </div>

        </div>

    </div>
    </header>
    <?php
session_start();

// Verificar se o usuário está logado na sessão
if (!isset($_SESSION['cpf'])) {
    // Redirecionar para a página de login, caso não esteja logado
    header("Location: login.html");
    exit();
}

// Conectar ao banco de dados
$mysqli = new mysqli("localhost", "root", "", "sa_bombeiros");

// Verificar a conexão
if ($mysqli->connect_error) {
    die("Erro de conexão com o banco de dados: " . $mysqli->connect_error);
}

// Obter o CPF do usuário logado na sessão
$cpfUsuarioLogado = $_SESSION['cpf'];

// Consultar os dados do usuário logado
$query = "SELECT * FROM usuarios WHERE cpf = '$cpfUsuarioLogado'";
$result = $mysqli->query($query);

// Verificar se a consulta retornou resultados
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "ID: " . $row["id"] . "<br>";
    echo "Nome Completo: " . $row["nome_completo"] . "<br>";
    echo "Email: " . $row["email"] . "<br>";
    echo "CPF: " . $row["cpf"] . "<br>";
} else {
    echo "Não foram encontrados registros para o usuário logado.";
}

// Fechar a conexão com o banco de dados
$mysqli->close();
?>
