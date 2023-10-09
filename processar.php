<?php
$conexao = include "connect.php"; // Inclua o arquivo de conexão

// Coleta dos dados do formulário
$oq_aconteceu = $_POST['oq_aconteceu'];
$aconteceu_outras_vezes = isset($_POST['aconteceu_outras_vezes']) ? 'Sim' : 'Não';
$tempo_aconteceu = $_POST['tempo_aconteceu'];
$possui_problema_saude = isset($_POST['possui_problema_saude']) ? 'Sim' : 'Não';
$quais_doencas = $_POST['quais_doencas'];
$faz_uso_medicacao = isset($_POST['faz_uso_medicacao']) ? 'Sim' : 'Não';
$horario_ultima_medicacao = $_POST['horario_ultima_medicacao'];
$quais_medicacoes = $_POST['quais_medicacoes'];
$alergico_alguma_coisa =isset($_POST['alergico_alguma_coisa']) ? 'Sim' : 'Não';
$especificacao_alergia = $_POST['especificacao_alergia'];
$ingeriu_limento_liquido = isset($_POST['ingeriu_limento_liquido']) ? 'Sim' : 'Não';
$horas_ingeriu = $_POST['horas_ingeriu'];

// Insira os dados na tabela
$sql = "INSERT INTO dadospaciente (oq_aconteceu, aconteceu_outras_vezes, tempo_aconteceu, possui_problema_saude, quais_doencas, faz_uso_medicacao, horario_ultima_medicacao, quais_medicacoes, alergico_alguma_coisa, especificacao_alergia, ingeriu_limento_liquido, horas_ingeriu) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conexao->prepare($sql);
$stmt->bind_param("ssssssssssss", $oq_aconteceu, $aconteceu_outras_vezes, $tempo_aconteceu, $possui_problema_saude, $quais_doencas, $faz_uso_medicacao, $horario_ultima_medicacao, $quais_medicacoes, $alergico_alguma_coisa, $especificacao_alergia, $ingeriu_limento_liquido, $horas_ingeriu);

if ($stmt->execute()) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro ao inserir dados: " . $stmt->error;
}

$stmt->close();
$conexao->close();
?>
