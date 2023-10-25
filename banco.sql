-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 23-Out-2023 às 22:36
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.0.25

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
-- Estrutura da tabela `ficha_ocorrencia`
--

CREATE TABLE `ficha_ocorrencia` (
  `id` int(11) NOT NULL,
  `oq_aconteceu` text DEFAULT NULL,
  `aconteceu_outros_vezes` enum('Sim','Não') DEFAULT NULL,
  `tempo_aconteceu` date DEFAULT NULL,
  `possui_problema_saude` enum('Sim','Não') DEFAULT NULL,
  `quais_doencas` text DEFAULT NULL,
  `faz_uso_medicacao` enum('Sim','Não') DEFAULT NULL,
  `horario_ultima_medicacao` time DEFAULT NULL,
  `quais_medicacoes` text DEFAULT NULL,
  `alergico_alguma_coisa` enum('Sim','Não') DEFAULT NULL,
  `especificacao_alergia` text DEFAULT NULL,
  `ingeriu_limento_liquido` enum('Sim','Não') DEFAULT NULL,
  `horas_ingeriu` time DEFAULT NULL,
  `dia` date DEFAULT NULL,
  `sexo_paciente` enum('Masculino','Feminino','Outro') DEFAULT NULL,
  `nome_hospital` varchar(255) DEFAULT NULL,
  `nome_paciente` varchar(255) DEFAULT NULL,
  `idade` int(11) DEFAULT NULL,
  `fone` varchar(20) DEFAULT NULL,
  `rg_cpf_paciente` varchar(20) DEFAULT NULL,
  `nome_acompanhante` varchar(255) DEFAULT NULL,
  `idade_acompanhante` int(11) DEFAULT NULL,
  `local_ocorrencia` varchar(255) DEFAULT NULL,
  `periodo_gestacao` enum('Sim','Não') DEFAULT NULL,
  `faz_uso_medicacao_2` enum('Sim','Não') DEFAULT NULL,
  `nome_medico` varchar(255) DEFAULT NULL,
  `complicacoes` enum('Sim','Não') DEFAULT NULL,
  `primeiro_filho` enum('Sim','Não') DEFAULT NULL,
  `quantidade_filhos` int(11) DEFAULT NULL,
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
  `total_gcs_1` int(11) DEFAULT NULL,
  `total_gcs_2` int(11) DEFAULT NULL,
  `pressao_arterial1` varchar(20) DEFAULT NULL,
  `pressao_arterial2` varchar(20) DEFAULT NULL,
  `pulso` varchar(20) DEFAULT NULL,
  `respiracao` varchar(20) DEFAULT NULL,
  `pulsacao1` varchar(20) DEFAULT NULL,
  `pulsacao2` varchar(20) DEFAULT NULL,
  `temperatura` varchar(20) DEFAULT NULL,
  `perfusao` varchar(20) DEFAULT NULL,
  `anormal` int(11) DEFAULT NULL,
  `normal` int(11) DEFAULT NULL,
  `psiquiatrico` enum('Sim','Não') DEFAULT NULL,
  `respiratorio` enum('Sim','Não') DEFAULT NULL,
  `diabetes` enum('Sim','Não') DEFAULT NULL,
  `obstetrico` enum('Sim','Não') DEFAULT NULL,
  `transporte` enum('Sim','Não') DEFAULT NULL,
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
  `Tam_colar` int(11) DEFAULT NULL,
  `Uso_Ked` tinyint(1) DEFAULT NULL,
  `Uso_Ttf` tinyint(1) DEFAULT NULL,
  `Ventilacao_suporte` tinyint(1) DEFAULT NULL,
  `Oxigenioterapia` int(11) DEFAULT NULL,
  `LPM` int(11) DEFAULT NULL,
  `Reanimador` int(11) DEFAULT NULL,
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
  `n_usd` int(11) DEFAULT NULL,
  `n_ocorr` int(11) DEFAULT NULL,
  `desp` varchar(255) DEFAULT NULL,
  `km_final` int(11) DEFAULT NULL,
  `cod_ir` enum('Sim','Não') DEFAULT NULL,
  `cod_ps` enum('Sim','Não') DEFAULT NULL,
  `h_ch` varchar(255) DEFAULT NULL,
  `cod_sia_sus` varchar(255) DEFAULT NULL,
  `medico_responsavel` varchar(255) DEFAULT NULL,
  `socorrista1` varchar(255) DEFAULT NULL,
  `socorrista2` varchar(255) DEFAULT NULL,
  `socorrista3` varchar(255) DEFAULT NULL,
  `demandante` varchar(255) DEFAULT NULL,
  `equipe` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
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
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome_completo`, `email`, `cpf`, `senha`, `tipo`) VALUES
(1, 'Luíza Lange', 'luludosgrau@hotmail.com', '12345678900', '12354678', 'atendente'),
(2, 'Valdisney Mortadelo da Silva CNPJOTO', 'valdisneylsinho@gmail.com', '12121212121', '14785236', 'bombeiro');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `ficha_ocorrencia`
--
ALTER TABLE `ficha_ocorrencia`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `ficha_ocorrencia`
--
ALTER TABLE `ficha_ocorrencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
