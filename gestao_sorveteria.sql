-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 27/10/2024 às 18:16
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `gestao_sorveteria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(5) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `marca` varchar(60) NOT NULL,
  `descricao` text NOT NULL,
  `departamento` varchar(40) NOT NULL,
  `secao` varchar(40) NOT NULL,
  `quantidade` int(5) NOT NULL,
  `preco` decimal(15,2) NOT NULL,
  `foto1` varchar(60) NOT NULL,
  `foto2` varchar(60) NOT NULL,
  `foto3` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `marca`, `descricao`, `departamento`, `secao`, `quantidade`, `preco`, `foto1`, `foto2`, `foto3`) VALUES
(1, 'Sorvete de Morango', 'Maranata', 'Sorvete de massa de fabricação própria, feitos com produtos de alta qualidade.', 'Sorvete', 'Morango', 100, 4.00, 'foto2.jpg', 'foto1.jpg', 'foto2.jpg'),
(2, 'Abacaxi ao Vinho', 'Maranata', 'especial da casa', 'sorveteria', 'Abacaxi ao Vinho', 0, 5.00, 'foto1.jpg', 'foto2.jpg', 'foto3'),
(3, 'Sorvete de chocolate', 'Maranata', 'O sabor que repete...', 'Sorveteria', 'Chocolate', 10, 4.00, 'foto0.jpg', '', ''),
(4, 'Sorvete de Flocos', 'Maranata', 'O sabor que repete...', 'Sorveteria', 'Flocos', 50, 4.00, 'foto3.jpg', '', '');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_user` int(4) NOT NULL,
  `nome` varchar(60) NOT NULL,
  `sobrenome` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `senha` varchar(15) NOT NULL,
  `adm` tinyint(1) NOT NULL,
  `endereco` text NOT NULL,
  `cidade` varchar(50) NOT NULL,
  `cep` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`id_user`, `nome`, `sobrenome`, `email`, `senha`, `adm`, `endereco`, `cidade`, `cep`) VALUES
(1, 'Administrador', 'Administrador', 'adm@email.com', '123', 1, 'Endereço Teste', 'Teste', '14871370'),
(2, 'Usuario', 'Usuario', 'user@email.com', '123', 0, 'Endereço Teste', 'Itamogi', '37973000');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;