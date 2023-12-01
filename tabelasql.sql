-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 01/12/2023 às 02:57
-- Versão do servidor: 10.4.28-MariaDB
-- Versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sa_bombeiros`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `ficha_ocorrencia`
--

CREATE TABLE `ficha_ocorrencia` (
  `id` int(11) NOT NULL,
  `oq_aconteceu` text DEFAULT NULL,
  `aconteceu_outros_vezes` enum('Sim','Não') DEFAULT NULL,
  `tempo_aconteceu` text DEFAULT NULL,
  `possui_problema_saude` enum('Sim','Não') DEFAULT NULL,
  `quais_doencas` text DEFAULT NULL,
  `faz_uso_medicacao` enum('Sim','Não') DEFAULT NULL,
  `horario_ultima_medicacao` time DEFAULT NULL,
  `quais_medicacoes` text DEFAULT NULL,
  `alergico_alguma_coisa` enum('Sim','Não') DEFAULT NULL,
  `especificacao_alergia` text DEFAULT NULL,
  `ingeriu_limento_liquido` enum('Sim','Não') DEFAULT NULL,
  `horas_ingeriu` time DEFAULT NULL,
  `dia` text DEFAULT NULL,
  `sexo_paciente` enum('Masculino','Feminino','Outro') DEFAULT NULL,
  `nome_hospital` varchar(255) DEFAULT NULL,
  `nome_paciente` varchar(255) DEFAULT NULL,
  `idade` varchar(45) DEFAULT NULL,
  `fone` varchar(20) DEFAULT NULL,
  `rg_cpf_paciente` varchar(20) DEFAULT NULL,
  `nome_acompanhante` varchar(255) DEFAULT NULL,
  `idade_acompanhante` varchar(45) DEFAULT NULL,
  `local_ocorrencia` varchar(255) DEFAULT NULL,
  `periodo_gestacao` varchar(45) DEFAULT NULL,
  `faz_uso_medicacao_2` enum('Sim','Não') DEFAULT NULL,
  `nome_medico` varchar(255) DEFAULT NULL,
  `complicacoes` enum('Sim','Não') DEFAULT NULL,
  `primeiro_filho` enum('Sim','Não') DEFAULT NULL,
  `quantidade_filhos` varchar(45) DEFAULT NULL,
  `inicio_contracoes` time DEFAULT NULL,
  `duracao_contracoes` time DEFAULT NULL,
  `intervalo_contracoes` time DEFAULT NULL,
  `pressao_evacuar` enum('Sim','Não') DEFAULT NULL,
  `ruptura_bolsa` enum('Sim','Não') DEFAULT NULL,
  `inspecao_visual` enum('Sim','Não') DEFAULT NULL,
  `hora_nascimento` time DEFAULT NULL,
  `sexo_bebe` enum('Masculino','Feminino','Outro') DEFAULT NULL,
  `nome_bebe` varchar(255) DEFAULT NULL,
  `causas_animais` int(11) DEFAULT NULL,
  `causas_meio_transporte` int(11) DEFAULT NULL,
  `causas_desmoronamento` int(11) DEFAULT NULL,
  `causas_emergencia_medica` int(11) DEFAULT NULL,
  `causas_queda_altura2m` int(11) DEFAULT NULL,
  `causas_tentativa_suicidio` int(11) DEFAULT NULL,
  `causas_queda_propria_altura` int(11) DEFAULT NULL,
  `causas_afogamento` int(11) DEFAULT NULL,
  `causas_agressao` int(11) DEFAULT NULL,
  `causas_atropelamento` int(11) DEFAULT NULL,
  `causas_choque_eletrico` int(11) DEFAULT NULL,
  `causas_desabamento` int(11) DEFAULT NULL,
  `causas_domestico` int(11) DEFAULT NULL,
  `causas_esportivo` int(11) DEFAULT NULL,
  `causas_intoxicacao` int(11) DEFAULT NULL,
  `causas_queda_bicicleta` int(11) DEFAULT NULL,
  `causas_queda_moto` int(11) DEFAULT NULL,
  `causas_queda_nivel_2m` int(11) DEFAULT NULL,
  `causas_trabalho` int(11) DEFAULT NULL,
  `causas_transferencia` int(11) DEFAULT NULL,
  `outras_causas` text DEFAULT NULL,
  `espontanea` int(11) DEFAULT NULL,
  `comando_verbal` int(11) DEFAULT NULL,
  `estimulo_doloroso` int(11) DEFAULT NULL,
  `nenhuma` int(11) DEFAULT NULL,
  `orientado` int(11) DEFAULT NULL,
  `palavras_frase_apropriadas` int(11) DEFAULT NULL,
  `conflito` int(11) DEFAULT NULL,
  `palavras_inapropriadas` int(11) DEFAULT NULL,
  `palavras_inapropriadas2` int(11) DEFAULT NULL,
  `choro_persistente` int(11) DEFAULT NULL,
  `palavras_incompreensiveis` int(11) DEFAULT NULL,
  `sons_incompreensiveis` int(11) DEFAULT NULL,
  `nenhuma_resposta_verbal` int(11) DEFAULT NULL,
  `obedece_comandos` int(11) DEFAULT NULL,
  `obedece_prontamente` int(11) DEFAULT NULL,
  `localiza_dor` int(11) DEFAULT NULL,
  `localiza_dor_ou_estimulo_tatil` int(11) DEFAULT NULL,
  `movimento_de_retirada` int(11) DEFAULT NULL,
  `retirada_do_segmento_estimulado` int(11) DEFAULT NULL,
  `flexao_anormal` int(11) DEFAULT NULL,
  `flexao_anormal2` int(11) DEFAULT NULL,
  `extensao_anormal` int(11) DEFAULT NULL,
  `extensao_anormal2` int(11) DEFAULT NULL,
  `nenhuma_resposta_motora` int(11) DEFAULT NULL,
  `ausencia` int(11) DEFAULT NULL,
  `total_gcs_1` varchar(45) DEFAULT NULL,
  `total_gcs_2` varchar(45) DEFAULT NULL,
  `pressao_arterial1` varchar(20) DEFAULT NULL,
  `pressao_arterial2` varchar(20) DEFAULT NULL,
  `pulso` varchar(20) DEFAULT NULL,
  `respiracao` varchar(20) DEFAULT NULL,
  `pulsacao1` varchar(20) DEFAULT NULL,
  `pulsacao2` varchar(20) DEFAULT NULL,
  `temperatura` varchar(20) DEFAULT NULL,
  `perfusao` varchar(20) DEFAULT NULL,
  `anormal` varchar(40) DEFAULT NULL,
  `normal` varchar(45) DEFAULT NULL,
  `psiquiatrico` enum('Sim','Não') DEFAULT NULL,
  `respiratorio` varchar(45) DEFAULT NULL,
  `diabetes` varchar(45) DEFAULT NULL,
  `obstetrico` varchar(45) DEFAULT NULL,
  `transporte` varchar(45) DEFAULT NULL,
  `prob_outros` text DEFAULT NULL,
  `localFerimento` varchar(255) DEFAULT NULL,
  `lado` varchar(255) DEFAULT NULL,
  `face` varchar(255) DEFAULT NULL,
  `tipo` varchar(255) DEFAULT NULL,
  `cabecaGrau` int(11) DEFAULT NULL,
  `cabecaGrau2` int(11) NOT NULL,
  `cabecaGrau3` int(11) NOT NULL,
  `cabecaGrau4` int(11) NOT NULL,
  `pescocoGrau` int(11) DEFAULT NULL,
  `pescocoGrau2` int(11) NOT NULL,
  `pescocoGrau3` int(11) NOT NULL,
  `pescocoGrau4` int(11) NOT NULL,
  `tantGrau` int(11) DEFAULT NULL,
  `tantGrau2` int(11) NOT NULL,
  `tantGrau3` int(11) NOT NULL,
  `tantGrau4` int(11) NOT NULL,
  `tposGrau` int(11) DEFAULT NULL,
  `tposGrau2` int(11) NOT NULL,
  `tposGrau3` int(11) NOT NULL,
  `tposGrau4` int(11) NOT NULL,
  `genitalGrau` int(11) DEFAULT NULL,
  `genitalGrau2` int(11) NOT NULL,
  `genitalGrau3` int(11) NOT NULL,
  `genitalGrau4` int(11) NOT NULL,
  `middireitoGrau` int(11) DEFAULT NULL,
  `middireitoGrau2` int(11) NOT NULL,
  `middireitoGrau3` int(11) NOT NULL,
  `middireitoGrau4` int(11) NOT NULL,
  `midesquerdoGrau` int(11) DEFAULT NULL,
  `midesquerdoGrau2` int(11) NOT NULL,
  `midesquerdoGrau3` int(11) NOT NULL,
  `midesquerdoGrau4` int(11) NOT NULL,
  `msdGrau` int(11) DEFAULT NULL,
  `msdGrau2` int(11) NOT NULL,
  `msdGrau3` int(11) NOT NULL,
  `msdGrau4` int(11) NOT NULL,
  `mseGrau` int(11) DEFAULT NULL,
  `mseGrau2` int(11) NOT NULL,
  `mseGrau3` int(11) NOT NULL,
  `mseGrau4` int(11) NOT NULL,
  `Abdomem_sensivel_rigido` tinyint(1) DEFAULT NULL,
  `Afundamento_cranio` tinyint(1) DEFAULT NULL,
  `Agitacao` tinyint(1) DEFAULT NULL,
  `Apineia` tinyint(1) DEFAULT NULL,
  `Bradicardia` tinyint(1) DEFAULT NULL,
  `Bradipneia` tinyint(1) DEFAULT NULL,
  `Bronco_aspirando` tinyint(1) DEFAULT NULL,
  `Cianose_labios` tinyint(1) DEFAULT NULL,
  `Cianose_extremidade` tinyint(1) DEFAULT NULL,
  `Convulsao` tinyint(1) DEFAULT NULL,
  `Decorticacao` tinyint(1) DEFAULT NULL,
  `Deformidade` tinyint(1) DEFAULT NULL,
  `Descerebracao` tinyint(1) DEFAULT NULL,
  `Desmaio` tinyint(1) DEFAULT NULL,
  `Desvio_traqueia` tinyint(1) DEFAULT NULL,
  `Dispneia` tinyint(1) DEFAULT NULL,
  `Dor_local` tinyint(1) DEFAULT NULL,
  `Edema_generalizados` tinyint(1) DEFAULT NULL,
  `Edema_localizados` tinyint(1) DEFAULT NULL,
  `Enfisema_subcutaneo` tinyint(1) DEFAULT NULL,
  `Estase_jugular` tinyint(1) DEFAULT NULL,
  `Face_palida` tinyint(1) DEFAULT NULL,
  `Hipertensao` tinyint(1) DEFAULT NULL,
  `Hipotensao` tinyint(1) DEFAULT NULL,
  `Hemorragia_interna` tinyint(1) DEFAULT NULL,
  `Hemorragia_externa` tinyint(1) DEFAULT NULL,
  `Nauseas_vomitos` tinyint(1) DEFAULT NULL,
  `Nasoragia` tinyint(1) DEFAULT NULL,
  `Obito` tinyint(1) DEFAULT NULL,
  `Otorreia` tinyint(1) DEFAULT NULL,
  `OVACE` tinyint(1) DEFAULT NULL,
  `Parada_cardiaca` tinyint(1) DEFAULT NULL,
  `Parada_respiratoria` tinyint(1) DEFAULT NULL,
  `Priaprismo` tinyint(1) DEFAULT NULL,
  `Prurido_pele` tinyint(1) DEFAULT NULL,
  `Pupilas_anisocoria` tinyint(1) DEFAULT NULL,
  `Pupilas_isocoria` tinyint(1) DEFAULT NULL,
  `Pupilas_midriase` tinyint(1) DEFAULT NULL,
  `Pupilas_miose` tinyint(1) DEFAULT NULL,
  `Pupilas_reagente` tinyint(1) DEFAULT NULL,
  `Pupilas_nao_reagente` tinyint(1) DEFAULT NULL,
  `Sede` tinyint(1) DEFAULT NULL,
  `Sinal_battle` tinyint(1) DEFAULT NULL,
  `Sinal_guaxinim` tinyint(1) DEFAULT NULL,
  `Sudorese` tinyint(1) DEFAULT NULL,
  `Taquipneia` tinyint(1) DEFAULT NULL,
  `Taquicardia` tinyint(1) DEFAULT NULL,
  `Tontura` tinyint(1) DEFAULT NULL,
  `Outros` tinyint(1) DEFAULT NULL,
  `Deitada` tinyint(1) DEFAULT NULL,
  `Semi_deitada` tinyint(1) DEFAULT NULL,
  `Sentada` tinyint(1) DEFAULT NULL,
  `Aspiracao` tinyint(1) DEFAULT NULL,
  `Avaliacao_Inicial` tinyint(1) DEFAULT NULL,
  `Avaliacao_Dirigida` tinyint(1) DEFAULT NULL,
  `Avaliacao_Continuada` tinyint(1) DEFAULT NULL,
  `Chave_de_Rautek` tinyint(1) DEFAULT NULL,
  `Canula_de_Guedel` tinyint(1) DEFAULT NULL,
  `Desobstrucao_de_VA` tinyint(1) DEFAULT NULL,
  `Emprego_do_DEA` tinyint(1) DEFAULT NULL,
  `Gerenciamento_de_Riscos` tinyint(1) DEFAULT NULL,
  `Limpeza_de_Ferimento` tinyint(1) DEFAULT NULL,
  `Curativos` tinyint(1) DEFAULT NULL,
  `Compressivo` tinyint(1) DEFAULT NULL,
  `Encravamento` tinyint(1) DEFAULT NULL,
  `Ocular` tinyint(1) DEFAULT NULL,
  `Queimadura` tinyint(1) DEFAULT NULL,
  `Simples` tinyint(1) DEFAULT NULL,
  `Tres_pontas` tinyint(1) DEFAULT NULL,
  `Imobilizacoes` tinyint(1) DEFAULT NULL,
  `Membro_Inf_Dir` tinyint(1) DEFAULT NULL,
  `Membro_Inf_Esq` tinyint(1) DEFAULT NULL,
  `Membro_Sup_Dir` tinyint(1) DEFAULT NULL,
  `Membro_Sup_Esq` tinyint(1) DEFAULT NULL,
  `Quadril` tinyint(1) DEFAULT NULL,
  `Cervical` tinyint(1) DEFAULT NULL,
  `Maca_sobre_rodas` tinyint(1) DEFAULT NULL,
  `Maca_rigida` tinyint(1) DEFAULT NULL,
  `Ponte` tinyint(1) DEFAULT NULL,
  `Retirado_capacete` tinyint(1) DEFAULT NULL,
  `RCP` tinyint(1) DEFAULT NULL,
  `Rolamento_90` tinyint(1) DEFAULT NULL,
  `Rolamento_180` tinyint(1) DEFAULT NULL,
  `Tomada_decisao` tinyint(1) DEFAULT NULL,
  `Tratado_choque` tinyint(1) DEFAULT NULL,
  `Uso_de_canula` tinyint(1) DEFAULT NULL,
  `Uso_colar` tinyint(1) DEFAULT NULL,
  `Tam_colar` varchar(45) DEFAULT NULL,
  `Uso_Ked` tinyint(1) DEFAULT NULL,
  `Uso_Ttf` tinyint(1) DEFAULT NULL,
  `Ventilacao_suporte` tinyint(1) DEFAULT NULL,
  `Oxigenioterapia` varchar(45) DEFAULT NULL,
  `LPM` int(11) DEFAULT NULL,
  `Reanimador` varchar(45) DEFAULT NULL,
  `Meio_auxiliares` tinyint(1) DEFAULT NULL,
  `CELESC` tinyint(1) DEFAULT NULL,
  `Def_civil` tinyint(1) DEFAULT NULL,
  `Policia` tinyint(1) DEFAULT NULL,
  `Policia_Civil` tinyint(1) DEFAULT NULL,
  `Policia_Militar` tinyint(1) DEFAULT NULL,
  `Policia_PRE` tinyint(1) DEFAULT NULL,
  `Policia_PRF` tinyint(1) DEFAULT NULL,
  `Samu` tinyint(1) DEFAULT NULL,
  `USA` tinyint(1) DEFAULT NULL,
  `USB` tinyint(1) DEFAULT NULL,
  `CIT` tinyint(1) DEFAULT NULL,
  `Digite` varchar(255) DEFAULT NULL,
  `material` varchar(255) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `material_extra` varchar(255) DEFAULT NULL,
  `quantidade_extra` int(11) DEFAULT NULL,
  `objetos_recolhidos` varchar(255) DEFAULT NULL,
  `dist_comportamento` enum('Sim','Não') DEFAULT NULL,
  `encontr_capacete` enum('Sim','Não') DEFAULT NULL,
  `encontr_cinto` enum('Sim','Não') DEFAULT NULL,
  `para_brisas_avariado` enum('Sim','Não') DEFAULT NULL,
  `caminhando_na_cena` enum('Sim','Não') DEFAULT NULL,
  `painel_avariado` enum('Sim','Não') DEFAULT NULL,
  `volante_torcido` enum('Sim','Não') DEFAULT NULL,
  `n_usd` varchar(45) DEFAULT NULL,
  `n_ocorr` varchar(45) DEFAULT NULL,
  `desp` varchar(255) DEFAULT NULL,
  `km_final` varchar(45) DEFAULT NULL,
  `cod_ir` varchar(45) DEFAULT NULL,
  `cod_ps` varchar(45) DEFAULT NULL,
  `h_ch` varchar(255) DEFAULT NULL,
  `cod_sia_sus` varchar(255) DEFAULT NULL,
  `medico_responsavel` varchar(255) DEFAULT NULL,
  `socorrista1` varchar(255) DEFAULT NULL,
  `socorrista2` varchar(255) DEFAULT NULL,
  `socorrista3` varchar(255) DEFAULT NULL,
  `demandante` varchar(255) DEFAULT NULL,
  `equipe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `ficha_ocorrencia`
--

INSERT INTO `ficha_ocorrencia` (`id`, `oq_aconteceu`, `aconteceu_outros_vezes`, `tempo_aconteceu`, `possui_problema_saude`, `quais_doencas`, `faz_uso_medicacao`, `horario_ultima_medicacao`, `quais_medicacoes`, `alergico_alguma_coisa`, `especificacao_alergia`, `ingeriu_limento_liquido`, `horas_ingeriu`, `dia`, `sexo_paciente`, `nome_hospital`, `nome_paciente`, `idade`, `fone`, `rg_cpf_paciente`, `nome_acompanhante`, `idade_acompanhante`, `local_ocorrencia`, `periodo_gestacao`, `faz_uso_medicacao_2`, `nome_medico`, `complicacoes`, `primeiro_filho`, `quantidade_filhos`, `inicio_contracoes`, `duracao_contracoes`, `intervalo_contracoes`, `pressao_evacuar`, `ruptura_bolsa`, `inspecao_visual`, `hora_nascimento`, `sexo_bebe`, `nome_bebe`, `causas_animais`, `causas_meio_transporte`, `causas_desmoronamento`, `causas_emergencia_medica`, `causas_queda_altura2m`, `causas_tentativa_suicidio`, `causas_queda_propria_altura`, `causas_afogamento`, `causas_agressao`, `causas_atropelamento`, `causas_choque_eletrico`, `causas_desabamento`, `causas_domestico`, `causas_esportivo`, `causas_intoxicacao`, `causas_queda_bicicleta`, `causas_queda_moto`, `causas_queda_nivel_2m`, `causas_trabalho`, `causas_transferencia`, `outras_causas`, `espontanea`, `comando_verbal`, `estimulo_doloroso`, `nenhuma`, `orientado`, `palavras_frase_apropriadas`, `conflito`, `palavras_inapropriadas`, `palavras_inapropriadas2`, `choro_persistente`, `palavras_incompreensiveis`, `sons_incompreensiveis`, `nenhuma_resposta_verbal`, `obedece_comandos`, `obedece_prontamente`, `localiza_dor`, `localiza_dor_ou_estimulo_tatil`, `movimento_de_retirada`, `retirada_do_segmento_estimulado`, `flexao_anormal`, `flexao_anormal2`, `extensao_anormal`, `extensao_anormal2`, `nenhuma_resposta_motora`, `ausencia`, `total_gcs_1`, `total_gcs_2`, `pressao_arterial1`, `pressao_arterial2`, `pulso`, `respiracao`, `pulsacao1`, `pulsacao2`, `temperatura`, `perfusao`, `anormal`, `normal`, `psiquiatrico`, `respiratorio`, `diabetes`, `obstetrico`, `transporte`, `prob_outros`, `localFerimento`, `lado`, `face`, `tipo`, `cabecaGrau`, `cabecaGrau2`, `cabecaGrau3`, `cabecaGrau4`, `pescocoGrau`, `pescocoGrau2`, `pescocoGrau3`, `pescocoGrau4`, `tantGrau`, `tantGrau2`, `tantGrau3`, `tantGrau4`, `tposGrau`, `tposGrau2`, `tposGrau3`, `tposGrau4`, `genitalGrau`, `genitalGrau2`, `genitalGrau3`, `genitalGrau4`, `middireitoGrau`, `middireitoGrau2`, `middireitoGrau3`, `middireitoGrau4`, `midesquerdoGrau`, `midesquerdoGrau2`, `midesquerdoGrau3`, `midesquerdoGrau4`, `msdGrau`, `msdGrau2`, `msdGrau3`, `msdGrau4`, `mseGrau`, `mseGrau2`, `mseGrau3`, `mseGrau4`, `Abdomem_sensivel_rigido`, `Afundamento_cranio`, `Agitacao`, `Apineia`, `Bradicardia`, `Bradipneia`, `Bronco_aspirando`, `Cianose_labios`, `Cianose_extremidade`, `Convulsao`, `Decorticacao`, `Deformidade`, `Descerebracao`, `Desmaio`, `Desvio_traqueia`, `Dispneia`, `Dor_local`, `Edema_generalizados`, `Edema_localizados`, `Enfisema_subcutaneo`, `Estase_jugular`, `Face_palida`, `Hipertensao`, `Hipotensao`, `Hemorragia_interna`, `Hemorragia_externa`, `Nauseas_vomitos`, `Nasoragia`, `Obito`, `Otorreia`, `OVACE`, `Parada_cardiaca`, `Parada_respiratoria`, `Priaprismo`, `Prurido_pele`, `Pupilas_anisocoria`, `Pupilas_isocoria`, `Pupilas_midriase`, `Pupilas_miose`, `Pupilas_reagente`, `Pupilas_nao_reagente`, `Sede`, `Sinal_battle`, `Sinal_guaxinim`, `Sudorese`, `Taquipneia`, `Taquicardia`, `Tontura`, `Outros`, `Deitada`, `Semi_deitada`, `Sentada`, `Aspiracao`, `Avaliacao_Inicial`, `Avaliacao_Dirigida`, `Avaliacao_Continuada`, `Chave_de_Rautek`, `Canula_de_Guedel`, `Desobstrucao_de_VA`, `Emprego_do_DEA`, `Gerenciamento_de_Riscos`, `Limpeza_de_Ferimento`, `Curativos`, `Compressivo`, `Encravamento`, `Ocular`, `Queimadura`, `Simples`, `Tres_pontas`, `Imobilizacoes`, `Membro_Inf_Dir`, `Membro_Inf_Esq`, `Membro_Sup_Dir`, `Membro_Sup_Esq`, `Quadril`, `Cervical`, `Maca_sobre_rodas`, `Maca_rigida`, `Ponte`, `Retirado_capacete`, `RCP`, `Rolamento_90`, `Rolamento_180`, `Tomada_decisao`, `Tratado_choque`, `Uso_de_canula`, `Uso_colar`, `Tam_colar`, `Uso_Ked`, `Uso_Ttf`, `Ventilacao_suporte`, `Oxigenioterapia`, `LPM`, `Reanimador`, `Meio_auxiliares`, `CELESC`, `Def_civil`, `Policia`, `Policia_Civil`, `Policia_Militar`, `Policia_PRE`, `Policia_PRF`, `Samu`, `USA`, `USB`, `CIT`, `Digite`, `material`, `quantidade`, `material_extra`, `quantidade_extra`, `objetos_recolhidos`, `dist_comportamento`, `encontr_capacete`, `encontr_cinto`, `para_brisas_avariado`, `caminhando_na_cena`, `painel_avariado`, `volante_torcido`, `n_usd`, `n_ocorr`, `desp`, `km_final`, `cod_ir`, `cod_ps`, `h_ch`, `cod_sia_sus`, `medico_responsavel`, `socorrista1`, `socorrista2`, `socorrista3`, `demandante`, `equipe`) VALUES
(4, '', 'Não', '', 'Não', '', 'Não', '00:00:00', '', 'Não', '', 'Não', '00:00:00', '', 'Feminino', '', '', '', '', '', '', '', '', '', 'Não', '', 'Não', 'Não', '', '00:00:00', '00:00:00', '00:00:00', 'Não', 'Não', 'Não', '00:00:00', 'Feminino', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'diabetes', 'obstetrico', 'transporte', '', '', 'ferimentos', 'ferimentos', 'ferimentos', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'aefrqwerfe', 'Não', 'qwrefwe', 'Não', '', 'Não', '00:00:00', '', 'Não', '', 'Não', '00:00:00', '', 'Feminino', '', '', '', '', '', '', '', '', '', 'Não', '', 'Não', 'Não', '', '00:00:00', '00:00:00', '00:00:00', 'Não', 'Não', 'Não', '00:00:00', 'Feminino', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'diabetes', 'obstetrico', 'transporte', '', '', 'ferimentos', 'ferimentos', 'ferimentos', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '', 'Não', '', 'Não', '', 'Não', '00:00:00', '', 'Não', '', 'Não', '00:00:00', '', 'Feminino', '', '', '', '', '', '', '', '', '', 'Não', '', 'Não', 'Não', '', '00:00:00', '00:00:00', '00:00:00', 'Não', 'Não', 'Não', '00:00:00', 'Feminino', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'respiratorio', 'diabetes', 'obstetrico', 'transporte', '', '', 'ferimentos', 'ferimentos', 'ferimentos', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(7, '', 'Não', '', 'Não', '', 'Não', '00:00:00', '', 'Não', '', 'Não', '00:00:00', '', 'Feminino', '', '', '', '', '', '', '', '', '', 'Não', '', 'Não', 'Não', '', '00:00:00', '00:00:00', '00:00:00', 'Não', 'Não', 'Não', '00:00:00', 'Feminino', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', 'respiratorio', 'diabetes', 'obstetrico', 'transporte', '', '', 'ferimentos', 'ferimentos', 'ferimentos', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 0, 0, 0, '', NULL, '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', NULL, NULL, NULL, NULL, '', NULL, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome_completo` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cpf` varchar(11) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_completo`, `email`, `cpf`, `senha`, `tipo`) VALUES
(1, 'Vinicius Werner', 'wernerne@hotmail.com', '12345678900', '12354678', 'atendente'),
(2, 'João Vitor', 'vitinrosas@gmail.com', '12121212121', '14785236', 'bombeiro'),
(3, 'Djennifer', 'dj@gmail.com', '00987654321', 'dj1234567', ''),
(4, 'teste', 'teste@gmail.com', '09809809877', 'Teste123', '');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `ficha_ocorrencia`
--
ALTER TABLE `ficha_ocorrencia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ficha_ocorrencia`
--
ALTER TABLE `ficha_ocorrencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
