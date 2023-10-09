<?php
$conexao = include "connect.php"; // Inclua o arquivo de conexão

    // Coleta dos dados do formulário
    $data = $_POST['data'];
    $sexo = $_POST['sexo'];
    $nome_hospital = $_POST['nome_hospital'];
    $nome_paciente = $_POST['nome_paciente'];
    $idade = $_POST['idade'];
    $fone = $_POST['fone'];
    $rg_cpf_paciente = $_POST['rg_cpf_paciente'];
    $nome_acompanhante = $_POST['nome_acompanhante'];
    $idade_acompanhante = $_POST['idade_acompanhante'];
    $local_ocorrencia = $_POST['local_ocorrencia'];

    // Preparar e executar a consulta SQL
    $sql = "INSERT INTO Pacientes (data, sexo, nome_hospital, nome_paciente, idade, fone, rg_cpf_paciente, nome_acompanhante, idade_acompanhante, local_ocorrencia) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexao->prepare($sql);
    $stmt->bind_param("ssssissiis", $data, $sexo, $nome_hospital, $nome_paciente, $idade, $fone, $rg_cpf_paciente, $nome_acompanhante, $idade_acompanhante, $local_ocorrencia);

    if ($stmt->execute()) {
        echo "Dados inseridos com sucesso!";
    } else {
        echo "Erro ao inserir dados: " . $stmt->error;
    }

    $stmt->close();

$conexao->close();
?>
