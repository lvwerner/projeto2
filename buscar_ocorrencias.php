<!DOCTYPE html>
<html>
<head>
    <title>Dados da Tabela</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">

    <style>
        /* Estilos para a tabela */
        table {
            border-collapse: collapse;
            width: 60%;
            max-width: 800px;
            margin: 0 auto;
            border: 2px solid lightblue;
            border-radius: 8px; /* Adicionando bordas arredondadas */
        }
        th, td {
            border: 1px solid lightblue;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #e6f0ff; /* Um tom mais escuro de azul para o cabeçalho */
            color: #14406e; /* Cor do texto mais escura para o cabeçalho */
        }

        /* Estilos para tornar a tabela responsiva */
        @media only screen and (max-width: 600px) {
            table {
                width: 100%;
            }
        }
        #body {
            background-color: rgba(173, 172, 191, 0.361);
            font-family: 'Open Sans', coursive;
        }
        .tabelinha {
            background-color: #ffffff;
            padding: 15px;
            margin-top: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .tabelinha a{
            color: #14406e;
            text-decoration: none;
        }
        .tabelinha:hover{
            background-color: #e6f7ff;
        }
    </style>
</head>
<body id="body">
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
    </div>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "sa_bombeiros";
    $tablename = "ficha_ocorrencia";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM $tablename";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        while ($row = $result->fetch_assoc()) {
            echo '<tr>';
            echo '<td class="tabelinha"><a href="#" onclick="showDetails(' . $row['id'] . ')">Ficha de Ocorrência ' . $row['id'] . ' +</a></td>';
            echo '</tr>';
            echo '<tr class="details" id="details_' . $row['id'] . '" style="display: none;">';
            echo '<td colspan="2">';
            echo '<table style="border-collapse: collapse; width: 100%; border: 2px solid lightblue; border-radius: 8px;">';
            foreach ($row as $key => $value) {
                echo '<tr>';
                echo '<th style="background-color: #e6f0ff; color: #14406e; text-align: left; padding: 8px; border: 1px solid lightblue;">' . htmlspecialchars($key) . '</th>';
                echo '<td style="border: 1px solid lightblue; text-align: left; padding: 8px;">' . htmlspecialchars($value) . '</td>';
                echo '</tr>';
            }
            echo '</table>';
            echo '</td>';
            echo '</tr>';
        }
        echo "</table>";
    } else {
        echo "Nenhum resultado encontrado na tabela '$tablename'.";
    }

    $conn->close();
    ?>

    <script>
        function showDetails(id) {
            const details = document.getElementById('details_' + id);
            if (details.style.display === 'none') {
                details.style.display = 'table-row';
            } else {
                details.style.display = 'none';
            }
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>
</html>
