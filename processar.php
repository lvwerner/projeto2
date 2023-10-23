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
$sexo_paciente = isset($_POST['sexo_paciente']) ? 'Masculino' : 'Feminino';
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
$localFerimento = $_POST['localFerimento'];
$lado = $_POST['lado'];
$face = $_POST['face'];
$tipo = $_POST['tipo'];
$cabecaGrau =  isset($_POST['cabecaGrau']) ? 1 : 0;
$cabecaGrau2 =  isset($_POST['cabecaGrau2']) ? 1 : 0;
$cabecaGrau3 =  isset($_POST['cabecaGrau3']) ? 1 : 0;
$cabecaGrau4 =  isset($_POST['cabecaGrau4']) ? 1 : 0;
$pescocoGrau = isset($_POST['pescocoGrau']) ? 1 : 0;
$pescocoGrau2 = isset($_POST['pescocoGrau2']) ? 1 : 0;
$pescocoGrau3 = isset($_POST['pescocoGrau3']) ? 1 : 0;
$pescocoGrau4 = isset($_POST['pescocoGrau4']) ? 1 : 0;
$tantGrau = isset($_POST['tantGrau']) ? 1 : 0;
$tantGrau2 = isset($_POST['tantGrau2']) ? 1 : 0;
$tantGrau3 = isset($_POST['tantGrau3']) ? 1 : 0;
$tantGrau4 = isset($_POST['tantGrau4']) ? 1 : 0;
$tposGrau = isset($_POST['tposGrau']) ? 1 : 0;
$tposGrau2 = isset($_POST['tposGrau2']) ? 1 : 0;
$tposGrau3 = isset($_POST['tposGrau3']) ? 1 : 0;
$tposGrau4 = isset($_POST['tposGrau4']) ? 1 : 0;
$genitalGrau = isset($_POST['genitalGrau']) ? 1 : 0;
$genitalGrau2 = isset($_POST['genitalGrau2']) ? 1 : 0;
$genitalGrau3 = isset($_POST['genitalGrau3']) ? 1 : 0;
$genitalGrau4 = isset($_POST['genitalGrau4']) ? 1 : 0;
$middireitoGrau = isset($_POST['middireitoGrau']) ? 1 : 0;
$middireitoGrau2 = isset($_POST['middireitoGrau2']) ? 1 : 0;
$middireitoGrau3 = isset($_POST['middireitoGrau3']) ? 1 : 0;
$middireitoGrau4 = isset($_POST['middireitoGrau4']) ? 1 : 0;
$midesquerdoGrau = isset($_POST['midesquerdoGrau']) ? 1 : 0;
$midesquerdoGrau2 = isset($_POST['midesquerdoGrau2']) ? 1 : 0;
$midesquerdoGrau3 = isset($_POST['midesquerdoGrau3']) ? 1 : 0;
$midesquerdoGrau4 = isset($_POST['midesquerdoGrau4']) ? 1 : 0;
$msdGrau = isset($_POST['msd_grau']) ? 1 : 0;
$msdGrau2 = isset($_POST['msd_grau2']) ? 1 : 0;
$msdGrau3 = isset($_POST['msd_grau3']) ? 1 : 0;
$msdGrau4 = isset($_POST['msd_grau4']) ? 1 : 0;
$mseGrau = isset($_POST['mse_grau']) ? 1 : 0;
$mseGrau2 = isset($_POST['mse_grau2']) ? 1 : 0;
$mseGrau3 = isset($_POST['mse_grau3']) ? 1 : 0;
$mseGrau4 = isset($_POST['mse_grau4']) ? 1 : 0;
$Abdomem_sensivel_rigido = isset($_POST['Abdomem_sensivel_rigido']) ? 1 : 0;
$Afundamento_cranio = isset($_POST['Afundamento_cranio']) ? 1 : 0;
$Agitacao = isset($_POST['Agitacao']) ? 1 : 0;
$Apineia = isset($_POST['Apineia']) ? 1 : 0;
$Bradicardia = isset($_POST['Bradicardia']) ? 1 : 0;
$Bradipneia = isset($_POST['Bradipneia']) ? 1 : 0;
$Bronco_aspirando = isset($_POST['Bronco_aspirando']) ? 1 : 0;
$Cianose_labios = isset($_POST['Cianose_labios']) ? 1 : 0;
$Cianose_extremidade = isset($_POST['Cianose_extremidade']) ? 1 : 0;
$Convulsao = isset($_POST['Convulsao']) ? 1 : 0;
$Decorticacao = isset($_POST['Decorticacao']) ? 1 : 0;
$Deformidade = isset($_POST['Deformidade']) ? 1 : 0;
$Descerebracao = isset($_POST['Descerebracao']) ? 1 : 0;
$Desmaio = isset($_POST['Desmaio']) ? 1 : 0;
$Desvio_traqueia = isset($_POST['Desvio_traqueia']) ? 1 : 0;
$Dispneia = isset($_POST['Dispneia']) ? 1 : 0;
$Dor_local = isset($_POST['Dor_local']) ? 1 : 0;
$Edema_generalizados = isset($_POST['Edema_generalizados']) ? 1 : 0;
$Edema_localizados = isset($_POST['Edema_localizados']) ? 1 : 0;
$Enfisema_subcutaneo = isset($_POST['Enfisema_subcutaneo']) ? 1 : 0;
$Estase_jugular = isset($_POST['Estase_jugular']) ? 1 : 0;
$Face_palida = isset($_POST['Face_palida']) ? 1 : 0;
$Hipertensao = isset($_POST['Hipertensao']) ? 1 : 0;
$Hipotensao = isset($_POST['Hipotensao']) ? 1 : 0;
$Hemorragia_interna = isset($_POST['Hemorragia_interna']) ? 1 : 0;
$Hemorragia_externa = isset($_POST['Hemorragia_externa']) ? 1 : 0;
$Nauseas_vomitos = isset($_POST['Nauseas_vomitos']) ? 1 : 0;
$Nasoragia = isset($_POST['Nasoragia']) ? 1 : 0;
$Obito = isset($_POST['Obito']) ? 1 : 0;
$Otorreia = isset($_POST['Otorreia']) ? 1 : 0;
$OVACE = isset($_POST['OVACE']) ? 1 : 0;
$Parada_cardiaca = isset($_POST['Parada_cardiaca']) ? 1 : 0;
$Parada_respiratoria = isset($_POST['Parada_respiratoria']) ? 1 : 0;
$Priaprismo = isset($_POST['Priaprismo']) ? 1 : 0;
$Prurido_pele = isset($_POST['Prurido_pele']) ? 1 : 0;
$Pupilas_anisocoria = isset($_POST['Pupilas_anisocoria']) ? 1 : 0;
$Pupilas_isocoria = isset($_POST['Pupilas_isocoria']) ? 1 : 0;
$Pupilas_midriase = isset($_POST['Pupilas_midriase']) ? 1 : 0;
$Pupilas_miose = isset($_POST['Pupilas_miose']) ? 1 : 0;
$Pupilas_reagente = isset($_POST['Pupilas_reagente']) ? 1 : 0;
$Pupilas_nao_reagente = isset($_POST['Pupilas_nao_reagente']) ? 1 : 0;
$Sede = isset($_POST['Sede']) ? 1 : 0;
$Sinal_battle = isset($_POST['Sinal_battle']) ? 1 : 0;
$Sinal_guaxinim = isset($_POST['Sinal_guaxinim']) ? 1 : 0;
$Sudorese = isset($_POST['Sudorese']) ? 1 : 0;
$Taquipneia = isset($_POST['Taquipneia']) ? 1 : 0;
$Taquicardia = isset($_POST['Taquicardia']) ? 1 : 0;
$Tontura = isset($_POST['Tontura']) ? 1 : 0;
$Outros = isset($_POST['Outros']) ? 1 : 0;
$Deitada = isset($_POST['Deitada']) ? 1 : 0;
$Semi_deitada = isset($_POST['Semi_deitada']) ? 1 : 0;
$Sentada = isset($_POST['Sentada']) ? 1 : 0;
$Aspiração = isset($_POST['Aspiração']) ? 1 : 0;
$Avaliacao_Inicial = isset($_POST['Avaliacao_Inicial']) ? 1 : 0;
$Avaliacao_Dirigida = isset($_POST['Avaliacao_Dirigida']) ? 1 : 0;
$Avaliacao_Continuada = isset($_POST['Avaliacao_Continuada']) ? 1 : 0;
$Chave_de_Rautek = isset($_POST['Chave_de_Rautek']) ? 1 : 0;
$Canula_de_Guedel = isset($_POST['Canula_de_Guedel']) ? 1 : 0;
$Desobstrução_de_VA = isset($_POST['Desobstrução_de_VA']) ? 1 : 0;
$Emprego_do_DEA = isset($_POST['Emprego_do_DEA']) ? 1 : 0;
$Gerenciamento_de_Riscos = isset($_POST['Gerenciamento_de_Riscos']) ? 1 : 0;
$Limpeza_de_Ferimento = isset($_POST['Limpeza_de_Ferimento']) ? 1 : 0;
$Curativos = isset($_POST['Curativos']) ? 1 : 0;
$Compressivo = isset($_POST['Compressivo']) ? 1 : 0;
$Encravamento = isset($_POST['Encravamento']) ? 1 : 0;
$Ocular = isset($_POST['Ocular']) ? 1 : 0;
$Queimadura = isset($_POST['Queimadura']) ? 1 : 0;
$Simples = isset($_POST['Simples']) ? 1 : 0;
$Tres_pontas = isset($_POST['Tres_pontas']) ? 1 : 0;
$Imobilizações = isset($_POST['Imobilizações']) ? 1 : 0;
$Membro_Inf_Dir = isset($_POST['Membro_Inf_Dir']) ? 1 : 0;
$Membro_Inf_Esq = isset($_POST['Membro_Inf_Esq']) ? 1 : 0;
$Membro_Sup_Dir = isset($_POST['Membro_Sup_Dir']) ? 1 : 0;
$Membro_Sup_Esq = isset($_POST['Membro_Sup_Esq']) ? 1 : 0;
$Quadril = isset($_POST['Quadril']) ? 1 : 0;
$Cervical = isset($_POST['Cervical']) ? 1 : 0;
$Maca_sobre_rodas = isset($_POST['Maca_sobre_rodas']) ? 1 : 0;
$Maca_rigida = isset($_POST['Maca_rigida']) ? 1 : 0;
$Ponte = isset($_POST['Ponte']) ? 1 : 0;
$Retirado_capacete = isset($_POST['Retirado_capacete']) ? 1 : 0;
$RCP = isset($_POST['RCP']) ? 1 : 0;
$Rolamento_90 = isset($_POST['Rolamento_90']) ? 1 : 0;
$Rolamento_180 = isset($_POST['Rolamento_180']) ? 1 : 0;
$Tomada_decisao = isset($_POST['Tomada_decisao']) ? 1 : 0;
$Tratado_choque = isset($_POST['Tratado_choque']) ? 1 : 0;
$Uso_de_canula = isset($_POST['Uso_de_canula']) ? 1 : 0;
$Uso_colar = isset($_POST['Uso_colar']) ? 1 : 0;
$Tam_colar = $_POST['Tam_colar'];
$Uso_Ked = isset($_POST['Uso_Ked']) ? 1 : 0;
$Uso_Ttf = isset($_POST['Uso_Ttf']) ? 1 : 0;
$Ventilacao_suporte = isset($_POST['Ventilacao_suporte']) ? 1 : 0;
$Oxigenioterapia = $_POST['Oxigenioterapia'];
$LPM = $_POST['LPM'];
$Reanimador = $_POST['Reanimador'];
$Meio_auxiliares = isset($_POST['Meio_auxiliares']) ? 1 : 0;
$CELESC = isset($_POST['CELESC']) ? 1 : 0;
$Def_civil = isset($_POST['Def_civil']) ? 1 : 0;
$Policia = isset($_POST['Policia']) ? 1 : 0;
$Policia_Civil = isset($_POST['Policia_Civil']) ? 1 : 0;
$Policia_Militar = isset($_POST['Policia_Militar']) ? 1 : 0;
$Policia_PRE = isset($_POST['Policia_PRE']) ? 1 : 0;
$Policia_PRF = isset($_POST['Policia_PRF']) ? 1 : 0;
$Samu = isset($_POST['Samu']) ? 1 : 0;
$EUA = isset($_POST['EUA']) ? 1 : 0;
$USB = isset($_POST['USB']) ? 1 : 0;
$CIT = isset($_POST['CIT']) ? 1 : 0;
$Digite = $_POST['Digite'];
$material = $_POST['material'];
$quantidade = $_POST['quantidade'];
$material_extra = $_POST['material_extra'];
$quantidade_extra = $_POST['quantidade_extra'];
$objetos_recolhidos = $_POST['objetos_recolhidos'];
$encontr_capacete = $_POST['encontr_capacete'];
$encontr_cinto = $_POST['encontr_cinto'];
$para_brisas_avariado = $_POST['para_brisas_avariado'];
$caminhando_na_cena = $_POST['caminhando_na_cena'];
$painel_avariado = $_POST['painel_avariado'];
$volante_torcido = $_POST['volante_torcido'];
$n_usd = $_POST['n_usd'];
$n_ocorr = $_POST['n_ocorr'];
$desp = $_POST['desp'];
$km_final = $_POST['km_final'];
$cod_ir = $_POST['cod_ir'];
$cod_ps = $_POST['cod_ps'];
$h_ch = $_POST['h_ch'];
$cod_sia_sus = $_POST['cod_sia_sus'];
$medico_responsavel = $_POST['medico_responsavel'];
$socorrista1 = $_POST['socorrista1'];
$socorrista2 = $_POST['socorrista2'];
$socorrista3 = $_POST['socorrista3'];
$demandante = $_POST['demandante'];
$equipe = $_POST['equipe'];


// Insira os dados no banco de dados usando uma declaração preparada
$sql = "INSERT INTO ficha_ocorrencia (oq_aconteceu, aconteceu_outros_vezes, tempo_aconteceu, possui_problema_saude, quais_doencas, faz_uso_medicacao, horario_ultima_medicacao, quais_medicacoes, alergico_alguma_coisa, especificacao_alergia, ingeriu_limento_liquido, horas_ingeriu, dia, sexo_paciente, nome_hospital, nome_paciente, idade, fone, rg_cpf_paciente, nome_acompanhante, idade_acompanhante, local_ocorrencia, periodo_gestacao, faz_uso_medicacao_2, nome_medico, complicacoes, primeiro_filho, quantidade_filhos, inicio_contracoes, duracao_contracoes, intervalo_contracoes, pressao_evacuar, ruptura_bolsa, inspecao_visual, hora_nascimento, sexo_bebe, nome_bebe, causas_animais, causas_meio_transporte, causas_desmoronamento, causas_emergencia_medica, causas_queda_altura2m, causas_tentativa_suicidio, causas_queda_propria_altura, causas_afogamento, causas_agressao, causas_atropelamento, causas_choque_eletrico, causas_desabamento, causas_domestico, causas_esportivo, causas_intoxicacao, causas_queda_bicicleta, causas_queda_moto, causas_queda_nivel_2m, causas_trabalho, causas_transferencia, outras_causas, espontanea, comando_verbal, estimulo_doloroso, nenhuma, orientado, palavras_frase_apropriadas, conflito, palavras_inapropriadas, palavras_inapropriadas2, choro_persistente, palavras_incompreensiveis, sons_incompreensiveis, nenhuma_resposta_verbal, obedece_comandos, obedece_prontamente, localiza_dor, localiza_dor_ou_estimulo_tatil, movimento_de_retirada, retirada_do_segmento_estimulado, flexao_anormal, flexao_anormal2, extensao_anormal, extensao_anormal2, nenhuma_resposta_motora, ausencia, total_gcs_1, total_gcs_2, pressao_arterial1, pressao_arterial2, pulso, respiracao, pulsacao1, pulsacao2, temperatura, perfusao, anormal, normal, psiquiatrico, respiratorio, diabetes, obstetrico, transporte, prob_outros, localFerimento, lado, face, tipo, cabecaGrau, cabecaGrau2, cabecaGrau3, cabecaGrau4, pescoco_grau, tant_grau, tpos_grau, genital_grau, mid_direito_grau, mid_esquerdo_grau, msd_grau, mse_grau, Abdomem_sensivel_rigido, Afundamento_cranio, Agitacao, Apineia, Bradicardia, Bradipneia, Bronco_aspirando, Cianose_labios, Cianose_extremidade, Convulsao, Decorticacao, Deformidade, Descerebracao, Desmaio, Desvio_traqueia, Dispneia, Dor_local, Edema_generalizados, Edema_localizados, Enfisema_subcutaneo, Estase_jugular, Face_palida, Hipertensao, Hipotensao, Hemorragia_interna, Hemorragia_externa, Nauseas_vomitos, Nasoragia, Obito, Otorreia, OVACE, Parada_cardiaca, Parada_respiratoria, Priaprismo, Prurido_pele, Pupilas_anisocoria, Pupilas_isocoria, Pupilas_midriase, Pupilas_miose, Pupilas_reagente, Pupilas_nao_reagente, Sede, Sinal_battle, Sinal_guaxinim, Sudorese, Taquipneia, Taquicardia, Tontura, Outros, Deitada, Semi_deitada, Sentada, Aspiração, Avaliacao_Inicial, Avaliacao_Dirigida, Avaliacao_Continuada, Chave_de_Rautek, Canula_de_Guedel, Desobstrução_de_VA, Emprego_do_DEA, Gerenciamento_de_Riscos, Limpeza_de_Ferimento, Curativos, Compressivo, Encravamento, Ocular, Queimadura, Simples, Tres_pontas, Imobilizações, Membro_Inf_Dir, Membro_Inf_Esq, Membro_Sup_Dir, Membro_Sup_Esq, Quadril, Cervical, Maca_sobre_rodas, Maca_rigida, Ponte, Retirado_capacete, RCP, Rolamento_90, Rolamento_180, Tomada_decisao, Tratado_choque, Uso_de_canula, Uso_colar, Tam_colar, Uso_Ked, Uso_Ttf, Ventilacao_suporte, Oxigenioterapia, LPM, Reanimador, Meio_auxiliares, CELESC, Def_civil, Policia, Policia_Civil, Policia_Militar, Policia_PRE, Policia_PRF, Samu, EUA, USB, CIT, Digite, material, quantidade, material_extra, quantidade_extra, objetos_recolhidos, encontr_capacete, encontr_cinto, para_brisas_avariado, caminhando_na_cena, painel_avariado, volante_torcido, n_usd, n_ocorr, desp, km_final, cod_ir, cod_ps, h_ch, cod_sia_sus, medico_responsavel, socorrista1, socorrista2, socorrista3, demandante, equipe) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

// Prepare a declaração
$stmt = $conexao->prepare($sql);

// Verifique se a declaração foi preparada com sucesso
if ($stmt) {
    // Faça o binding dos parâmetros com os valores
    $stmt->bind_param("sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss",
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
        $obstetrico, $transporte, $prob_outros, $localFerimento, $lado, $face, $tipo, $cabecaGrau, $cabecaGrau2, $cabecaGrau3, $cabecaGrau4, $pescocoGrau, $pescocoGrau2, $pescocoGrau3, $pescocoGrau4, $tantGrau, $tantGrau2, $tantGrau3, $tantGrau4, $tposGrau, $tposGrau2, $tposGrau3, $tposGrau4,
        $genitalGrau, $genitalGrau2, $genitalGrau3, $genitalGrau4, $middireitoGrau, $middireitoGrau2, $middireitoGrau3, $middireitoGrau4, $midesquerdoGrau, $midesquerdoGrau2, $midesquerdoGrau3, $midesquerdoGrau4, $msdGrau, $msdGrau2, $msdGrau3, $msdGrau4, $mseGrau, $mseGrau2, $mseGrau3, $mseGrau4, $Abdomen_sensivel_rigido, $Afundamento_cranio, $Agitacao,
        $Apineia, $Bradicardia, $Bradipneia, $Bronco_aspirando, $Cianose_labios, $Cianose_extremidade, $Convulsao, $Decorticacao, $Deformidade, 
        $Descerebracao, $Desmaio, $Desvio_traqueia, $Dispneia, $Dor_local, $Edema_generalizados, $Edema_localizados, $Enfisema_subcutaneo, 
        $Estase_jugular, $Face_palida, $Hipertensao, $Hipotensao, $Hemorragia_interna, $Hemorragia_externa, $Nauseas_vomitos, $Nasoragia, $Obito, 
        $Otorreia, $OVACE, $Parada_cardiaca, $Parada_respiratoria, $Priaprismo, $Prurido_pele, $Pupilas_anisocoria, $Pupilas_isocoria, $Pupilas_midriase, 
        $Pupilas_miose, $Pupilas_reagente, $Pupilas_nao_reagente, $Sede, $Sinal_battle, $Sinal_guaxinim, $Sudorese, $Taquipneia, $Taquicardia, 
        $Tontura, $Outros, $Deitada, $Semi_deitada, $Sentada, $Aspiração, $Avaliacao_Inicial, $Avaliacao_Dirigida, $Avaliacao_Continuada, $Chave_de_Rautek, 
        $Canula_de_Guedel, $Desobstrução_de_VA, $Emprego_do_DEA, $Gerenciamento_de_Riscos, $Limpeza_de_Ferimento, $Curativos, $Compressivo, $Encravamento, 
        $Ocular, $Queimadura, $Simples, $Tres_pontas, $Imobilizações, $Membro_Inf_Dir, $Membro_Inf_Esq, $Membro_Sup_Dir, $Membro_Sup_Esq, $Quadril, $Cervical, 
        $Maca_sobre_rodas, $Maca_rigida, $Ponte, $Retirado_capacete, $RCP, $Rolamento_90, $Rolamento_180, $Tomada_decisao, $Tratado_choque, $Uso_de_canula, 
        $Uso_colar, $Tam_colar, $Uso_Ked, $Uso_Ttf, $Ventilacao_suporte, $Oxigenioterapia, $LPM, $Reanimador, $Meio_auxiliares, $CELESC, $Def_civil, $Policia, 
        $Policia_Civil, $Policia_Militar, $Policia_PRE, $Policia_PRF, $Samu, $EUA, $USB, $CIT, $Digite, $material, $quantidade, $material_extra, 
        $quantidade_extra, $objetos_recolhidos, $encontr_capacete, $encontr_cinto, $para_brisas_avariado, $caminhando_na_cena, $painel_avariado, $volante_torcido, 
        $n_usd, $n_ocorr, $desp, $km_final, $cod_ir, $cod_ps, $h_ch, $cod_sia_sus, $medico_responsavel, $socorrista1, $socorrista2, $socorrista3, $demandante, $equipe
        );

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
