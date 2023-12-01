
<?php
session_start();

// Função para verificar se o usuário está autenticado como "atendente"
function verificarAutenticacaoAtendente() {
    if (!isset($_SESSION['cpf']) || $_SESSION['tipo'] !== 'atendente') {
        // Se não atender às condições, redirecionar para uma página de erro ou qualquer outra página apropriada
        header("Location: pagina_de_erro.html");
        exit;
    }
}

// Função para conectar ao banco de dados
function conectarBancoDeDados() {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "sa_bombeiros";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    return $conn;
}

verificarAutenticacaoAtendente();
$conn = conectarBancoDeDados();

// Verifica se um ID de usuário foi fornecido na URL
$editUsuarioId = null;
if (isset($_GET['edit'])) {
    $editUsuarioId = $_GET['edit'];
}

// Processo de atualização dos dados do usuário
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $novoNomeCompleto = $_POST["novo_nome_completo"];
    $novoEmail = $_POST["novo_email"];
    $novoCpf = $_POST["novo_cpf"];
    $novaSenha = $_POST["nova_senha"];
    $novoTipo = $_POST["novo_tipo"];

    // Atualize os dados do usuário no banco de dados se o ID for fornecido
    if ($editUsuarioId !== null) {
        $atualizarQuery = "UPDATE usuarios SET nome_completo = '$novoNomeCompleto', email = '$novoEmail', cpf = '$novoCpf', senha = '$novaSenha', tipo = '$novoTipo' WHERE id = $editUsuarioId";

        if ($conn->query($atualizarQuery) === TRUE) {
            // Redirecione para a mesma página após a atualização
            header("Location: {$_SERVER['PHP_SELF']}");
            exit;
        } else {
            echo "Erro ao atualizar o usuário: " . $conn->error;
        }
    }
}

// Consulta para buscar todos os usuários
$usuariosQuery = "SELECT id, nome_completo, email, cpf, senha, tipo FROM usuarios";
$usuariosResult = $conn->query($usuariosQuery);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0">
    <title>Visualizar Usuários</title>
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
        width: 80%;
        margin: 3% auto;
    }

    #card-title {
        text-align: center;
    }

    .card-body {
        text-align: center;
    }

    .table {
        margin-top: 20px;
    }
</style>

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
    </div>
    <div class="atend">
        <div class="card">
            <h5 class="card-header">Visualizar e Editar Usuários</h5>
            <div class="card-body">
                <h5 class="card-title" id="card-title">Lista de Usuários</h5>
                <table class="table table-striped sm-col-6">
                    <thead>
                        <tr>
                            <th>ID do Bombeiro</th>
                            <th>Nome Completo</th>
                            <th>Email</th>
                            <th>CPF</th>
                            <th>Senha</th>
                            <th>Tipo</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($usuariosResult->num_rows > 0) {
                            while ($row = $usuariosResult->fetch_assoc()) {
                                echo "<tr>";
                                echo "<td>" . $row["id"] . "</td>";
                                echo "<td>" . $row["nome_completo"] . "</td>";
                                echo "<td>" . $row["email"] . "</td>";
                                echo "<td>" . $row["cpf"] . "</td>";
                                echo "<td>" . $row["senha"] . "</td>";
                                echo "<td>" . $row["tipo"] . "</td>";
                                // Adicione um botão para edição (vai para a mesma página com um parâmetro de ID)
                                echo '<td><a href="?edit=' . $row["id"] . '" class="btn btn-primary">Editar</a></td>';
                                echo "</tr>";
                            }
                        } else {
                            echo "<tr><td colspan='7'>Nenhum usuário encontrado.</td></tr>";
                        }
                        ?>
                    </tbody>
                </table>
                <a href="cadastro.html"><button class="btn btn-primary">Cadastrar um novo Bombeiro</button></a>

            </div>
        </div>
        <?php
        if ($editUsuarioId !== null) {
            // Recupera os dados do usuário com base no ID fornecido para edição
            $query = "SELECT id, nome_completo, email, cpf, senha, tipo FROM usuarios WHERE id = $editUsuarioId";
            $result = $conn->query($query);
            $usuario = $result->fetch_assoc();
        ?>
            <div class="card">
                <h5 class="card-header">Editar Usuário</h5>
                <div class="card-body">
                    <h5 class="card-title" id="card-title">Editar Usuário</h5>
                    <form method="POST">
                        <div class="mb-3">
                            <label for="novo_nome_completo" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="novo_nome_completo" name="novo_nome_completo" value="<?php echo $usuario['nome_completo']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="novo_email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="novo_email" name="novo_email" value="<?php echo $usuario['email']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="novo_cpf" class="form-label">CPF</label>
                            <input type="text" class="form-control" id="novo_cpf" name="novo_cpf" value="<?php echo $usuario['cpf']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="nova_senha" class="form-label">Senha</label>
                            <input type="password" class="form-control" id="nova_senha" name="nova_senha" value="<?php echo $usuario['senha']; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="novo_tipo">Tipo</label>
                            <select class="form-control" name="novo_tipo">
                                <option value="atendente" <?php echo ($usuario["tipo"] === "atendente") ? "selected" : ""; ?>>Atendente</option>
                                <option value="bombeiro" <?php echo ($usuario["tipo"] !== "atendente") ? "selected" : ""; ?>>Bombeiro</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Salvar Alterações</button>
                    </form>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

    <div class="card">
        <h5 class="card-header">Ocorrências</h5>
        <div class="card-body">
            <h5 class="card-title" id="card-title">Histórico de Ocorrências</h5>
            <p class="card-text">Você pode visualizar ou gerar o PDF das ocorrências registradas no sistema.</p>
            <!-- Adicione o menu suspenso para selecionar um bombeiro pelo nome completo -->
            <select id="bombeiroSelect" class="form-select mb-3">
                <option value="">Selecione um Bombeiro</option>
                <option><?php
                include("connect.php");
                // Consulta para buscar os nomes de bombeiros distintos da tabela "usuario"
                $bombeiroQuery = "SELECT id, nome_completo FROM usuarios";
                $bombeiroResult = $conn->query($bombeiroQuery);
                if ($bombeiroResult->num_rows > 0) {
                    while ($row = $bombeiroResult->fetch_assoc()) {
                        // Exibe o nome completo do bombeiro na opção
                        echo "<option value='" . $row["id"] . "'>" . $row["nome_completo"] . "</option>";
                    }
                }
                ?></option>
            </select>
            <a href="buscar_ocorrencias.php"><button class="btn btn-primary" id="ver-button">Ver</button></a>
            
        </div>
    </div>
    

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function () {
        // Lidar com o clique no botão "Ver"
        $("#ver-button").click(function () {
            var bombeiroIdSelecionado = $("#bombeiroSelect").val();

            if (bombeiroIdSelecionado !== "") {
                $.ajax({
                    url: "buscar_ocorrencias.php",
                    type: "POST",
                    data: { bombeiroId: bombeiroIdSelecionado },
                    dataType: "json",
                    success: function (data) {
                        var ocorrenciasList = $("#ocorrencias-list");
                        ocorrenciasList.empty();

                        if (data.length > 0) {
                            data.forEach(function (ocorrencia) {
                                var listItem = $("<li class='list-group-item'></li>").text(ocorrencia.descricao);
                                ocorrenciasList.append(listItem);
                            });
                        } else {
                            ocorrenciasList.append("<li class='list-group-item'>Nenhuma ocorrência encontrada para o bombeiro selecionado.</li>");
                        }
                    },
                    
                });
            } else {
                alert("Por favor, selecione um bombeiro.");
            }
        });
    });

</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>
