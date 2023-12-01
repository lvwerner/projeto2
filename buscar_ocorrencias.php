<!DOCTYPE html>
<html>
<head>
    <title>Dados da Tabela</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<?php
// Configurações do banco de dados
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sa_bombeiros"; // Nome do seu banco de dados
$tablename = "ficha_ocorrencia"; // Nome da tabela a ser exibida

// Cria a conexão com o banco de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica a conexão
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta SQL para selecionar todos os dados da tabela
$sql = "SELECT * FROM $tablename";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr>";
    // Exibe o cabeçalho da tabela com o nome das colunas
    while ($row = $result->fetch_assoc()) {
        foreach ($row as $key => $value) {
            echo "<th>" . htmlspecialchars($key) . "</th>";
        }
        break; // Apenas exibe o cabeçalho uma vez
    }
    echo "</tr>";

    // Exibe os dados da tabela
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "Nenhum resultado encontrado na tabela '$tablename'.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

</body>
</html>
