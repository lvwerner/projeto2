<?php
// Inclua a conexão com o banco de dados
include("connect.php"); // Substitua "conexao.php" pelo nome do arquivo de conexão real

// Consulta SQL para obter todos os dados e nomes de colunas da tabela ficha_ocorrencia
$describeQuery = "DESCRIBE ficha_ocorrencia";
$describeResult = $conn->query($describeQuery);

// Execute a consulta e obtenha os resultados das colunas da tabela
$columnNames = array();

if ($describeResult) {
    if ($describeResult->num_rows > 0) {
        while ($row = $describeResult->fetch_assoc()) {
            $columnNames[] = $row['Field'];
        }
    }
} else {
    // Trate erros na consulta DESCRIBE
    $columnNames = array("error" => "Erro ao obter nomes das colunas.");
}

// Consulta SQL para buscar todas as ocorrências da tabela ficha_ocorrencia
$allDataQuery = "SELECT * FROM ficha_ocorrencia";
$allDataResult = $conn->query($allDataQuery);

// Prepare um array para armazenar todos os dados das ocorrências
$allData = array();

if ($allDataResult) {
    if ($allDataResult->num_rows > 0) {
        while ($row = $allDataResult->fetch_assoc()) {
            $allData[] = $row;
        }
    }
} else {
    // Trate erros na consulta para buscar todos os dados
    $allData = array("error" => "Erro ao buscar todos os dados.");
}

// Exibir os nomes das colunas
echo "Nomes das colunas da tabela ficha_ocorrencia: <br>";
foreach ($columnNames as $columnName) {
    echo $columnName . "<br>";
}

// Exibir todos os dados da tabela ficha_ocorrencia
echo "<br>Todos os dados da tabela ficha_ocorrencia: <br>";
foreach ($allData as $data) {
    foreach ($data as $key => $value) {
        echo $key . ": " . $value . "<br>";
    }
    echo "<br>";
}
?>
