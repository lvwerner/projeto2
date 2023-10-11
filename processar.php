<?php
// Inclua o arquivo de conexão com o banco de dados (connect.php)
$conexao = include 'connect.php';

// Recupere todas as variáveis dos dados enviados via POST
$oq_aconteceu = $_POST['oq_aconteceu'];
$aconteceu_outros_vezes = isset($_POST['aconteceu_outros_vezes']) ? 'Sim' : 'Não';
$tempo_aconteceu = $_POST['tempo_aconteceu'];
$possui_problema_saude = isset($_POST['possui_problema_saude']) ? 'Sim' : 'Não';
$quais_doencas = $_POST['quais_doencas'];
$faz_uso_medicacao = isset($_POST['faz_uso_medicacao']) ? 'Sim' : 'Não';
$horario_ultima_medicacao = $_POST['horario_ultima_medicacao'];
$quais_medicacoes = $_POST['quais_medicacoes'];
$alergico_alguma_coisa = isset($_POST['alergico_alguma_coisa']) ? 'Sim' : 'Não';
$especificacao_alergia = $_POST['especificacao_alergia'];
$ingeriu_limento_liquido = isset($_POST['ingeriu_limento_liquido']) ? 'Sim' : 'Não';
$horas_ingeriu = $_POST['horas_ingeriu'];
$dia = $_POST['dia'];
$sexo_paciente = isset($_POST['sexo_paciente']) ? 'Sim' : 'Não';
$nome_hospital = $_POST['nome_hospital'];
$nome_paciente = $_POST['nome_paciente'];
$idade = $_POST['idade'];
$fone = $_POST['fone'];
$rg_cpf_paciente = $_POST['rg_cpf_paciente'];
$nome_acompanhante = $_POST['nome_acompanhante'];
$idade_acompanhante = $_POST['idade_acompanhante'];
$local_ocorrencia = $_POST['local_ocorrencia'];
$periodo_gestacao = $_POST['periodo_gestacao'];
$faz_uso_medicacao_2 = isset($_POST['faz_uso_medicacao_2']) ? 'Sim' : 'Não';
$nome_medico = $_POST['nome_medico'];
$complicacoes = isset($_POST['complicacoes']) ? 'Sim' : 'Não';
$primeiro_filho = isset($_POST['primeiro_filho']) ? 'Sim' : 'Não';
$quantidade_filhos = $_POST['quantidade_filhos'];
$inicio_contracoes = $_POST['inicio_contracoes'];
$duracao_contracoes = $_POST['duracao_contracoes'];
$intervalo_contracoes = $_POST['intervalo_contracoes'];
$pressao_evacuar = isset($_POST['pressao_evacuar']) ? 'Sim' : 'Não';
$ruptura_bolsa = isset($_POST['ruptura_bolsa']) ? 'Sim' : 'Não';
$inspecao_visual = isset($_POST['inspecao_visual']) ? 'Sim' : 'Não';
$hora_nascimento = $_POST['hora_nascimento'];
$sexo_bebe = isset($_POST['sexo_bebe']) ? 'Sim' : 'Não';
$nome_bebe = $_POST['nome_bebe'];
$causas_animais = isset($_POST['causas_animais']) ? 1 : 0;
$causas_meio_transporte = isset($_POST['causas_meio_transporte']) ? 1 : 0;
$causas_desmoronamento = isset($_POST['causas_desmoronamento']) ? 1 : 0;
$causas_emergencia_medica = isset($_POST['causas_emergencia_medica']) ? 1 : 0;
$causas_queda_altura2m = isset($_POST['causas_queda_altura2m']) ? 1 : 0;
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
$espontanea = isset($_POST['espontanea']) ? $_POST['espontanea'] : 0;
$comando_verbal = isset($_POST['comando_verbal']) ? $_POST['comando_verbal'] : 0;
$estimulo_doloroso = isset($_POST['estimulo_doloroso']) ? $_POST['estimulo_doloroso'] : 0;
$nenhuma = isset($_POST['nenhuma']) ? $_POST['nenhuma'] : 0;
$orientado = isset($_POST['orientado']) ? $_POST['orientado'] : 0;
$palavras_frase_apropriadas = isset($_POST['palavras_frase_apropriadas']) ? $_POST['palavras_frase_apropriadas'] : 0;
$conflito = isset($_POST['conflito']) ? $_POST['conflito'] : 0;
$palavras_inapropriadas = isset($_POST['palavras_inapropriadas']) ? $_POST['palavras_inapropriadas'] : 0;
$palavras_inapropriadas2 = isset($_POST['palavras_inapropriadas2']) ? $_POST['palavras_inapropriadas2'] : 0;
$choro_persistente = isset($_POST['choro_persistente']) ? $_POST['choro_persistente'] : 0;
$palavras_incompreensiveis = isset($_POST['palavras_incompreensiveis']) ? $_POST['palavras_incompreensiveis'] : 0;
$sons_incompreensiveis = isset($_POST['sons_incompreensiveis']) ? $_POST['sons_incompreensiveis'] : 0;
$nenhuma_resposta_verbal = isset($_POST['nenhuma_resposta_verbal']) ? $_POST['nenhuma_resposta_verbal'] : 0;
$obedece_comandos = isset($_POST['obedece_comandos']) ? $_POST['obedece_comandos'] : 0;
$obedece_prontamente = isset($_POST['obedece_prontamente']) ? $_POST['obedece_prontamente'] : 0;
$localiza_dor = isset($_POST['localiza_dor']) ? $_POST['localiza_dor'] : 0;
$localiza_dor_ou_estimulo_tatil = isset($_POST['localiza_dor_ou_estimulo_tatil']) ? $_POST['localiza_dor_ou_estimulo_tatil'] : 0;
$movimento_de_retirada = isset($_POST['movimento_de_retirada']) ? $_POST['movimento_de_retirada'] : 0;
$retirada_do_segmento_estimulado = isset($_POST['retirada_do_segmento_estimulado']) ? $_POST['retirada_do_segmento_estimulado'] : 0;
$flexao_anormal = isset($_POST['flexao_anormal']) ? $_POST['flexao_anormal'] : 0;
$flexao_anormal2 = isset($_POST['flexao_anormal2']) ? $_POST['flexao_anormal2'] : 0;
$extensao_anormal = isset($_POST['extensao_anormal']) ? $_POST['extensao_anormal'] : 0;
$extensao_anormal2 = isset($_POST['extensao_anormal2']) ? $_POST['extensao_anormal2'] : 0;
$nenhuma_resposta_motora = isset($_POST['nenhuma_resposta_motora']) ? $_POST['nenhuma_resposta_motora'] : 0;
$ausencia = isset($_POST['ausencia']) ? $_POST['ausencia'] : 0;
$total_gcs_1 = isset($_POST['total_gcs_1']) ? $_POST['total_gcs_1'] : 0;
$total_gcs_2 = isset($_POST['total_gcs_2']) ? $_POST['total_gcs_2'] : 0;
$pressao_arterial1 = isset($_POST['pressao_arterial1']) ? $_POST['pressao_arterial1'] : "";
$pressao_arterial2 = isset($_POST['pressao_arterial2']) ? $_POST['pressao_arterial2'] : "";
$pulso = isset($_POST['pulso']) ? $_POST['pulso'] : "";
$respiracao = isset($_POST['respiracao']) ? $_POST['respiracao'] : "";
$pulsacao1 = isset($_POST['pulsacao1']) ? $_POST['pulsacao1'] : "";
$pulsacao2 = isset($_POST['pulsacao2']) ? $_POST['pulsacao2'] : "";
$temperatura = isset($_POST['temperatura']) ? $_POST['temperatura'] : "";
$perfusao = isset($_POST['perfusao']) ? $_POST['perfusao'] : "";
$anormal = isset($_POST['anormal']) ? $_POST['anormal'] : "";
$normal = isset($_POST['normal']) ? $_POST['normal'] : "";
$psiquiatrico = isset($_POST['psiquiatrico']) ? 1 : 0;
$respiratorio = isset($_POST['respiratorio']) ? $_POST['respiratorio'] : '';
$diabetes = isset($_POST['diabetes']) ? $_POST['diabetes'] : '';
$obstetrico = isset($_POST['obstetrico']) ? $_POST['obstetrico'] : '';
$transporte = isset($_POST['transporte']) ? $_POST['transporte'] : '';
$prob_outros = isset($_POST['prob-outros']) ? $_POST['prob-outros'] : '';

// Insira os dados no banco de dados usando uma declaração preparada
$sql = "INSERT INTO ficha_ocorrencia (oq_aconteceu, aconteceu_outros_vezes, tempo_aconteceu, possui_problema_saude, quais_doencas, faz_uso_medicacao, horario_ultima_medicacao, quais_medicacoes, alergico_alguma_coisa, especificacao_alergia, ingeriu_limento_liquido, horas_ingeriu, dia, sexo_paciente, nome_hospital, nome_paciente, idade, fone, rg_cpf_paciente, nome_acompanhante, idade_acompanhante, local_ocorrencia, periodo_gestacao, faz_uso_medicacao_2, nome_medico, complicacoes, primeiro_filho, quantidade_filhos, inicio_contracoes, duracao_contracoes, intervalo_contracoes, pressao_evacuar, ruptura_bolsa, inspecao_visual, hora_nascimento, sexo_bebe, nome_bebe, causas_animais, causas_meio_transporte, causas_desmoronamento, causas_emergencia_medica, causas_queda_altura2m, causas_tentativa_suicidio, causas_queda_propria_altura, causas_afogamento, causas_agressao, causas_atropelamento, causas_choque_eletrico, causas_desabamento, causas_domestico, causas_esportivo, causas_intoxicacao, causas_queda_bicicleta, causas_queda_moto, causas_queda_nivel_2m, causas_trabalho, causas_transferencia, outras_causas, espontanea, comando_verbal, estimulo_doloroso, nenhuma, orientado, palavras_frase_apropriadas, conflito, palavras_inapropriadas, palavras_inapropriadas2, choro_persistente, palavras_incompreensiveis, sons_incompreensiveis, nenhuma_resposta_verbal, obedece_comandos, obedece_prontamente, localiza_dor, localiza_dor_ou_estimulo_tatil, movimento_de_retirada, retirada_do_segmento_estimulado, flexao_anormal, flexao_anormal2, extensao_anormal, extensao_anormal2, nenhuma_resposta_motora, ausencia, total_gcs_1, total_gcs_2, pressao_arterial1, pressao_arterial2, pulso, respiracao, pulsacao1, pulsacao2, temperatura, perfusao, anormal, normal, psiquiatrico, respiratorio, diabetes, obstetrico, transporte, prob_outros) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare a declaração
$stmt = $conexao->prepare($sql);

// Verifique se a declaração foi preparada com sucesso
if ($stmt) {
    // Faça o binding dos parâmetros com os valores
    $stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
        $oq_aconteceu, $aconteceu_outros_vezes, $tempo_aconteceu, $possui_problema_saude, $quais_doencas, $faz_uso_medicacao,
        $horario_ultima_medicacao, $quais_medicacoes, $alergico_alguma_coisa, $especificacao_alergia, $ingeriu_limento_liquido,
        $horas_ingeriu, $dia, $sexo_paciente, $nome_hospital, $nome_paciente, $idade, $fone, $rg_cpf_paciente, $nome_acompanhante,
        $idade_acompanhante, $local_ocorrencia, $periodo_gestacao, $faz_uso_medicacao_2, $nome_medico, $complicacoes,
        $primeiro_filho, $quantidade_filhos, $inicio_contracoes, $duracao_contracoes, $intervalo_contracoes, $pressao_evacuar,
        $ruptura_bolsa, $inspecao_visual, $hora_nascimento, $sexo_bebe, $nome_bebe, $causas_animais, $causas_meio_transporte,
        $causas_desmoronamento, $causas_emergencia_medica, $causas_queda_altura2m, $causas_tentativa_suicidio,
        $causas_queda_propria_altura, $causas_afogamento, $causas_agressao, $causas_atropelamento, $causas_choque_eletrico,
        $causas_desabamento, $causas_domestico, $causas_esportivo, $causas_intoxicacao, $causas_queda_bicicleta,
        $causas_queda_moto, $causas_queda_nivel_2m, $causas_trabalho, $causas_transferencia, $outras_causas, $espontanea,
        $comando_verbal, $estimulo_doloroso, $nenhuma, $orientado, $palavras_frase_apropriadas, $conflito,
        $palavras_inapropriadas, $palavras_inapropriadas2, $choro_persistente, $palavras_incompreensiveis, $sons_incompreensiveis,
        $nenhuma_resposta_verbal, $obedece_comandos, $obedece_prontamente, $localiza_dor, $localiza_dor_ou_estimulo_tatil,
        $movimento_de_retirada, $retirada_do_segmento_estimulado, $flexao_anormal, $flexao_anormal2, $extensao_anormal, $extensao_anormal2,
        $nenhuma_resposta_motora, $ausencia, $total_gcs_1, $total_gcs_2, $pressao_arterial1, $pressao_arterial2, $pulso,
        $respiracao, $pulsacao1, $pulsacao2, $temperatura, $perfusao, $anormal, $normal, $psiquiatrico, $respiratorio, $diabetes,
        $obstetrico, $transporte, $prob_outros);

    // Execute a declaração
    if ($stmt->execute()) {
        // Inserção bem-sucedida
        echo "Inserção bem-sucedida no banco de dados.";
    } else {
        // Erro na inserção
        echo "Erro ao inserir os dados no banco de dados: " . $stmt->error;
    }

    // Feche a declaração e a conexão com o banco de dados
    $stmt->close();
    $conexao->close();
} else {
    // Erro na preparação da declaração
    echo "Erro na preparação da declaração: " . $conexao->error;
}
?>
