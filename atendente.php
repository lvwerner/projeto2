<?php
session_start();

// Verificar se o usuário está autenticado e é do tipo "atendente"
if (!isset($_SESSION['cpf']) || $_SESSION['tipo'] !== 'atendente') {
    // Se não atender às condições, redirecionar para uma página de erro ou qualquer outra página apropriada
    header("Location: pagina_de_erro.html");
    exit; // Certifique-se de sair do script após o redirecionamento
}

// Se o usuário é um "atendente", ele pode continuar a visualizar o conteúdo da página "atendente.html"

// Restante do código da página "atendente.html"
// ...
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <title>Ficha de Ocorrência</title>
    <!-- <link rel="stylesheet" href="atendente.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&display=swap" rel="stylesheet">
</head>
<style>
    body {
        background-color: rgba(67, 67, 67, 0.361);
    }

    .card-header {
        text-align: center;
    }

    .card {
        width: 45%;
        margin-top: 3%;
        left: 3%;
        right: 3%;
    }

    .card2 {
        height: 60%;
        margin-top: -27%;
        left: 52%;
        right: 3%;
    }

    #card-title {
        text-align: center;
    }

    .card-body {
        text-align: center;
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar- bg-light d-none d-lg-block">
        <div class="container">
            <a class="navbar-brand mb-0 h1" href="ficha.html">Ficha de Ocorrência</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="ficha.html">Página Inicial</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="perfil.php">Perfil</a>
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
                                <a class="nav-link" href="perfil.php">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="login.html">Login</a>
                            </li>
                            <form action="logout.php" method="post">
                                <input type="submit" name="logout" value="Sair" class="logout-button nav-link" />
                            </form>
                        </ul>
                        <form action="logout.php" method="post">
                            <input type="submit" name="logout" value="Logout" class="logout-button" />
                        </form>

                    </div>

                </div>

            </div>
            </header>
            <div class="atend">
                <div class="card">
                    <h5 class="card-header">Cadastrar</h5>
                    <div class="card-body">
                        <h5 class="card-title" id="card-title">Cadastre um novo Bombeiro</h5>

                        <a href="cadastro.html" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
                <div class="card">
                    <h5 class="card-header">Ocorrências</h5>
                    <div class="card-body">
                        <h5 class="card-title" id="card-title">Histórico de Ocorrências</h5>
                        <p class="card-text">Você pode visualizar ou gerar o PDF das ocorrências registradas no sistema.</p>
                        <button class="btn btn-primary" id="ver-button">Ver</button>
                        <a href="#" class="btn btn-primary">Gerar PDF</a>
                    </div>
                </div>
                <div id="ocorrencias-container">
                    <!-- Aqui serão exibidas as informações das ocorrências -->
                </div>

                <div class=" card card2">
                    <h5 class="card-header">Ocorrências</h5>
                    <div class="card-body">
                        <h5 class="card-title" id="card-title">Histórico</h5>
                    </div>


                    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                    <script>
                        $(document).ready(function () {
                            // Lidar com o clique no botão "Ver"
                            $("#ver-button").click(function () {
                                $.ajax({
                                    url: "buscar_ocorrencias.php",
                                    type: "GET",
                                    dataType: "json",
                                    success: function (data) {
                                        // Manipular os dados recebidos e exibi-los na tela
                                        var container = $("#ocorrencias-container");
                                        container.empty();
                                        if (data.length > 0) {
                                            var lista = "<ul>";
                                            data.forEach(function (ocorrencia) {
                                                lista += "<li>" + ocorrencia.descricao + "</li>";
                                            });
                                            lista += "</ul>";
                                            container.html(lista);
                                        } else {
                                            container.html("Nenhuma ocorrência encontrada.");
                                        }
                                    },
                                    error: function () {
                                        alert("Erro ao buscar as ocorrências.");
                                    }
                                });
                            });
                        });
                    </script>
                    <br><br><br><br><br><br><br><br><br><br><br><br>
                </div>
            </div>

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
                crossorigin="anonymous"></script>        </body>