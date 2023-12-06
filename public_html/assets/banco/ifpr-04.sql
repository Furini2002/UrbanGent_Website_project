-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 25/09/2023 às 04:52
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
-- Banco de dados: `test`
--
CREATE DATABASE IF NOT EXISTS `test` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `test`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `cpfcnpj` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `cep` varchar(20) NOT NULL,
  `endereco` varchar(100) NOT NULL,
  `numero` int(10) NOT NULL,
  `cidade` varchar(100) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `status` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpfcnpj`, `email`, `telefone`, `cep`, `endereco`, `numero`, `cidade`, `estado`, `status`) VALUES
(3, 'lucas', '2147483647', '', '0', '0', '', 0, '', '', 'Inativo'),
(4, 'lucas', '2147483647', 'llfurini2002@gmail.com', '2147483647', '87570000', 'rua das flores', 123, 'curitiba', 'PR', 'Ativo'),
(9, 'Izaura Maia', '2147483647', 'maia.iza@gmail.com', '2147483647', '87962330', 'Rua Governador Parigot de Souza treze de maio', 123, 'Terra Roxa', 'PR', 'Inativo'),
(11, 'Ricardo Junior de Almeida', '196325', 'ricardo.alm@yaholl.com', '0', '87570', 'Avenida brigadeiro da Chica', 123, 'Florianopolis', 'SC', 'Ativo'),
(12, 'Ana', '129635', '', '0', '0', '', 0, '', '', 'Ativo'),
(13, 'Amanda Rober Oliveira e CIA', '12.485.633/3222-44', 'amandas.transportadora@hotmail.com', '(44) 36439685', '96582-000', 'Rua Almada', 145, 'São Paulo', 'SP', 'Ativo'),
(14, 'JC Consultoria', '26.562.781/0001-00', 'JC@teste02.com', '(44) 99886633', '96852-300', 'Rua Brigadeiro Faria Lima', 968, 'Palmas', '', 'Ativo');

-- --------------------------------------------------------

--
-- Estrutura para tabela `grupocliente`
--

CREATE TABLE `grupocliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `grupocliente`
--

INSERT INTO `grupocliente` (`id`, `nome`) VALUES
(1, 'Idosos'),
(4, 'Teste 01');

-- --------------------------------------------------------

--
-- Estrutura para tabela `grupousuario`
--

CREATE TABLE `grupousuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `grupousuario`
--

INSERT INTO `grupousuario` (`id`, `nome`) VALUES
(1, 'teste 1'),
(2, 'teste 2');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `unidademedida` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id`, `nome`, `unidademedida`) VALUES
(1, 'Oleo de soja', 'litro'),
(4, 'Erva de terere pura folha sabor burritos - Black', 'pacote');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuario`
--

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuario`
--

INSERT INTO `usuario` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'Marcelinho Carioca', 'marcelinho600@gmail.com', '4321'),
(24, 'Lucas Furini', 'llfurini2002@gmail.com', '123123123'),
(25, 'Amanada Portela', 'amandinha@gmail.com', '147258'),
(27, 'Julia Bragança', 'j.bragança@gmail.com', '852');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `grupocliente`
--
ALTER TABLE `grupocliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `grupousuario`
--
ALTER TABLE `grupousuario`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de tabela `grupocliente`
--
ALTER TABLE `grupocliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `grupousuario`
--
ALTER TABLE `grupousuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
