-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 25-Ago-2022 às 20:42
-- Versão do servidor: 5.7.33
-- versão do PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `conteco-contabilidade`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `area_atuacaos`
--

CREATE TABLE `area_atuacaos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `conteudo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_meta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `area_atuacaos`
--

INSERT INTO `area_atuacaos` (`id`, `slug`, `titulo`, `conteudo`, `seo_titulo`, `seo_meta`) VALUES
(1, 'area-medica-e-laboratórios', 'Área Médica e Laboratórios', '<p class=\"about-one__right-text\">CONTECO CONTABILIDADE possui o escritório em Nova\r\n                                Friburgo-RJ, com sede própria, fundada em 1969 e com uma equipe especializada,\r\n                                presta Serviços de Contabilidade, de Controle de Tributos, Departamento do Pessoal e\r\n                                uma total assistência em assuntos tributários, trabalhistas e previdenciários para\r\n                                todos os tipos de atividade empresarial, quer sejam, comércios atacadistas ou\r\n                                varejistas, empresas de prestação de serviços, associações sem fins lucrativos e\r\n                                etc...\r\n                            </p>\r\n                            <p class=\"about-one__right-text\">\r\n                                Dividido em setores especializados, nosso Departamento de Contabilidade atende tanto\r\n                                a micros e pequenas empresas, quanto a médias empresas, tendo atualmente em sua\r\n                                carteira de clientes uma grande quantidade de atividades empresariais distintas,\r\n                                tais como empresas de Clínicas Médicas, Laboratórios, Casas de Saúde, Confecções,\r\n                                Restaurantes, Lanchonetes, Loja de colchões, Padarias, Comércio de Roupas e muitas\r\n                                outras atividades.\r\n                            </p>\r\n                            <p class=\"about-one__right-text\">\r\n                                Por sua expertise tributária, nosso Departamento de Contabilidade também orienta e\r\n                                confecciona, Declarações de Imposto de Renda de Pessoas Físicas e Jurídicas\r\n                                (Declarações de Ajuste), DIRF, DECLAN, DCTR, SEDIF SPED FISCAL, SIMPLES NACIONAL,\r\n                                etc.\r\n                            </p>', 'Conteco Contabilidade', 'Consultoria Contábil Especializada. Há mais de 50 anos de experiência.');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `area_atuacaos`
--
ALTER TABLE `area_atuacaos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `area_atuacaos`
--
ALTER TABLE `area_atuacaos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
