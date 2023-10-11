<?php
// Conexão com o banco de dados (substitua com suas configurações)
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "sa_bombeiros";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

// Consulta para buscar as ocorrências
$sql = "SELECT * FROM ficha_ocorrencia";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $ocorrencias = array();

    while ($row = $result->fetch_assoc()) {
        $ocorrencias[] = $row;
    }

    // Retorna os dados no formato JSON
    echo json_encode($ocorrencias);
} else {
    echo "Nenhuma ocorrência encontrada.";
}

$conn->close();
?>
