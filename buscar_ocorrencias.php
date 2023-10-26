<?php
// Inclua a conexão com o banco de dados
include("connect.php"); // Substitua "conexao.php" pelo nome do arquivo de conexão real

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Verifique se o ID do bombeiro foi fornecido
    if (isset($_POST['bombeiroId'])) {
        // Obtenha o ID do bombeiro selecionado a partir do POST
        $bombeiroId = $_POST['bombeiroId'];

        // Consulta SQL para buscar as ocorrências relacionadas ao bombeiro selecionado
        $ocorrenciaQuery = "SELECT descricao FROM ficha_ocorrencia WHERE bombeiro = $bombeiroId";

        // Execute a consulta e obtenha os resultados
        $ocorrenciaResult = $conn->query($ocorrenciaQuery);

        // Prepare um array para armazenar as ocorrências
        $ocorrencias = array();

        if ($ocorrenciaResult) {
            if ($ocorrenciaResult->num_rows > 0) {
                while ($row = $ocorrenciaResult->fetch_assoc()) {
                    $ocorrencias[] = $row;
                }
            }
        } else {
            // Trate erros na consulta
            $ocorrencias = array("error" => "Erro na consulta.");
        }

        // Envie o array de ocorrências como resposta em formato JSON
        header('Content-Type: application/json');
        echo json_encode($ocorrencias);
    } else {
        // Trate o caso em que o ID do bombeiro não foi fornecido
        echo json_encode(array("error" => "ID do bombeiro não fornecido."));
    }
} else {
    // Trate outras solicitações (não POST)
    echo json_encode(array("error" => "Método de solicitação inválido."));
}
