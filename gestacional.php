<?php
// Incluir o arquivo de conexão com o banco de dados
$conexao = include 'connect.php';

// Recuperar os dados do formulário
 $periodo_gestacao = $_POST['periodo_gestacao'];
 $faz_uso_medicacao = isset($_POST['faz_uso_medicacao']) ? 'Sim' : 'Não';
 $nome_medico = $_POST['nome_medico'];
 $complicacoes =isset($_POST['complicacoes']) ? 'Sim' : 'Não';
 $primeiro_filho = isset($_POST['primeiro_filho']) ? 'Sim' : 'Não';
 $quantidade_filhos = $_POST['quantidade_filhos'];
 $inicio_contracoes = $_POST['inicio_contracoes'];
 $duracao_contracoes = $_POST['duracao_contracoes'];
 $intervalo_contracoes = $_POST['intervalo_contracoes'];
 $pressao_evacuar = isset($_POST['pressao_evacuar']) ? 'Sim' : 'Não';
 $ruptura_bolsa = isset($_POST['ruptura_bolsa']) ? 'Sim' : 'Não';
 $inspecao_visual = isset($_POST['isnpecao_visual']) ? 'Sim' : 'Não';
 $hora_nascimento = $_POST['hora_nascimento'];
 $sexo_bebe = isset($_POST['sexo_bebe']) ? 'Sim' : 'Não';
 $nome_bebe = $_POST['nome_bebe'];

 // Preparar a instrução SQL para inserir os dados na tabela
 $sql = "INSERT INTO dados_gestacao (periodo_gestacao, faz_uso_medicacao, nome_medico, complicacoes, primeiro_filho, quantidade_filhos, inicio_contracoes, duracao_contracoes, intervalo_contracoes, pressao_evacuar, ruptura_bolsa, inspecao_visual, hora_nascimento, sexo_bebe, nome_bebe) 
 VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

 // Preparar a declaração
 $stmt = $conexao->prepare($sql);

 // Vincular os parâmetros com os valores
 $stmt->bind_param("sssssisssssssss", $periodo_gestacao, $faz_uso_medicacao, $nome_medico, $complicacoes, $primeiro_filho, $quantidade_filhos, $inicio_contracoes, $duracao_contracoes, $intervalo_contracoes, $pressao_evacuar, $ruptura_bolsa, $inspecao_visual, $hora_nascimento, $sexo_bebe, $nome_bebe);

 // Executar a instrução SQL
 if ($stmt->execute()) {
 echo "Dados inseridos com sucesso!";
 } else {
 echo "Erro ao inserir os dados: " . $stmt->error;
 

 // Fechar a declaração e a conexão com o banco de dados
 $stmt->close();
 $conexao->close();
}
?>