<?php
// Incluir o arquivo de conexão com o banco de dados
$conexao = include 'connect.php';
 // Recupere os dados do formulário
 $causas_animais = isset($_POST['causas_animais']) ? 1 : 0;
 $causas_meio_transporte = isset($_POST['causas_meio_transporte']) ? 1 : 0;
 $causas_desmoronamento = isset($_POST['causas_desmoronamento']) ? 1 : 0;
 $causas_emergencia_medica = isset($_POST['causas_emergencia_medica']) ? 1 : 0;
 $causas_queda_altura_2m = isset($_POST['causas_queda_altura_2m']) ? 1 : 0;
 $causas_tentativa_suicidio = isset($_POST['causas_tentativa_suicidio']) ? 1 : 0;
 $causas_queda_propria_altura = isset($_POST['causas_queda_propria_altura']) ? 1 : 0;
 $causas_afogamento = isset($_POST['causas_afogamento']) ? 1 : 0;
 $causas_agressao = isset($_POST['causas_agressao']) ? 1 : 0;
 $causas_atropelamento = isset($_POST['causas_atropelamento']) ? 1 : 0;
 $causas_choque_eletrico = isset($_POST['causas_choque_eletrico']) ? 1 : 0;
 $causas_desabamento = isset($_POST['causas_desabamento']) ? 1 : 0;
 $causas_domestico = isset($_POST['causas_domestico']) ? 1 : 0;
 $causas_esportivo = isset($_POST['causas_esportivo']) ? 1 : 0;
 $causas_intoxicacao = isset($_POST['causas_intoxicacao']) ? 1 : 0;
 $causas_queda_bicicleta = isset($_POST['causas_queda_bicicleta']) ? 1 : 0;
 $causas_queda_moto = isset($_POST['causas_queda_moto']) ? 1 : 0;
 $causas_queda_nivel_2m = isset($_POST['causas_queda_nivel_2m']) ? 1 : 0;
 $causas_trabalho = isset($_POST['causas_trabalho']) ? 1 : 0;
 $causas_transferencia = isset($_POST['causas_transferencia']) ? 1 : 0;
 $outras_causas = $_POST['outras_causas'];

 // Preparar a instrução SQL para inserir os dados na tabela
 $sql = "INSERT INTO dados_ocorrencia ( causas_animais, causas_meio_transporte, causas_desmoronamento, causas_emergencia_medica, 
 causas_queda_altura_2m, causas_tentativa_suicidio, causas_queda_propria_altura, causas_afogamento, 
 causas_agressao, causas_atropelamento, causas_choque_eletrico, causas_desabamento, causas_domestico, 
 causas_esportivo, causas_intoxicacao, causas_queda_bicicleta, causas_queda_moto, causas_queda_nivel_2m, 
 causas_trabalho, causas_transferencia, outras_causas
 ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

 // Preparar a declaração
 $stmt = $conexao->prepare($sql);

  // Vincular os parâmetros com os valores
$stmt->bind_param(  
    "iiiiiiiiiiiiiiiiiiiis", // Tipos de dados (i para int, s para string)
    $causas_animais, $causas_meio_transporte, $causas_desmoronamento, $causas_emergencia_medica,
    $causas_queda_altura_2m, $causas_tentativa_suicidio, $causas_queda_propria_altura, $causas_afogamento,
    $causas_agressao, $causas_atropelamento, $causas_choque_eletrico, $causas_desabamento, $causas_domestico,
    $causas_esportivo, $causas_intoxicacao, $causas_queda_bicicleta, $causas_queda_moto, $causas_queda_nivel_2m,
    $causas_trabalho, $causas_transferencia, $outras_causas
    );

 // Executar a instrução SQL
 if ($stmt->execute()) {
 echo "Dados inseridos com sucesso!";
 } else {
 echo "Erro ao inserir os dados: " . $stmt->error;
 }

 // Fechar a declaração e a conexão com o banco de dados
 $stmt->close();
 $conexao->close();
?>