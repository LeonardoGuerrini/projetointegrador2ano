-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21/11/2024 às 12:15
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
-- Banco de dados: `wissen`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `usuario` varchar(40) DEFAULT NULL,
  `cpf` bigint(11) DEFAULT NULL,
  `endereco` varchar(255) NOT NULL,
  `cep` int(8) NOT NULL,
  `dataNs` date DEFAULT NULL,
  `numeroTel` bigint(11) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `usuario`, `cpf`, `endereco`, `cep`, `dataNs`, `numeroTel`, `senha`) VALUES
(3, 'Leonardo Gomes', 'leo@gmail.com', 'leonardo', 1232893764, 'Rua sei lá', 10929102, '1999-07-18', 43912345678, 'leo123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `carrinho`
--

CREATE TABLE `carrinho` (
  `id` int(11) NOT NULL,
  `nomelivro` varchar(50) DEFAULT NULL,
  `quantidade` int(11) DEFAULT NULL,
  `valor_unitario` decimal(7,2) DEFAULT NULL,
  `valor_total` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `compras`
--

CREATE TABLE `compras` (
  `id_compra` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `dtcompra` date DEFAULT NULL,
  `valortotal` decimal(7,1) DEFAULT NULL,
  `metodo` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estrutura para tabela `livro`
--

CREATE TABLE `livro` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(100) DEFAULT NULL,
  `genero` varchar(40) DEFAULT NULL,
  `estoque` int(11) DEFAULT NULL,
  `valor` decimal(7,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Despejando dados para a tabela `livro`
--

INSERT INTO `livro` (`id`, `nome`, `descricao`, `genero`, `estoque`, `valor`) VALUES
(8, 'Chainsaw Man Vol. 01', 'Denji é um jovem extremamente pobre que junto de Pochita, seu demônio de estimação, trabalha feito u', 'Mangá', 50, 27.70),
(9, 'Berserk Vol. 01', 'O misterioso Guts, o \"Espadachim Negro\", carrega em sua mão mecânica uma enorme espada, e em seu pes', 'Mangá', 50, 29.99),
(10, 'Invista em imóveis com pouco dinheiro', 'Neste guia prático e completo, Gabriel Porto ensina passo a passo, cada detalhe da sua jornada como ', 'Finanças e Investimentos', 50, 34.90),
(11, 'Pai Rico, Pai Pobre', 'A escola prepara as crianças para o mundo real? Essa é a primeira pergunta com a qual o leitor se de', 'Finanças e Investimentos', 50, 36.87),
(12, 'Na Raça', 'Uma das mais bem-sucedidas histórias de empreendedorismo do Brasil começou com uma demissão. Em 2001', 'Negócios', 50, 29.99),
(13, 'As Armas Da Persuasão', 'Depois de passar anos caindo na lábia de vendedores, arrecadadores de doações e operadores de telema', 'Negócios', 50, 26.49),
(14, 'Fahrenheit 451', 'Guy Montag é um bombeiro. Sua profissão é atear fogo nos livros. Em um mundo onde as pessoas vivem e', 'Ficção científica', 50, 34.90),
(15, 'A Sútil Arte de Ligar o F*da-se', 'Chega de tentar buscar um sucesso que só existe na sua cabeça. Chega de se torturar para pensar posi', 'Autoajuda', 50, 38.13);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `carrinho`
--
ALTER TABLE `carrinho`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`id_compra`);

--
-- Índices de tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `carrinho`
--
ALTER TABLE `carrinho`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `compras`
--
ALTER TABLE `compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
