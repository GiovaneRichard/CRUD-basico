-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Maio-2021 às 15:30
-- Versão do servidor: 10.4.18-MariaDB
-- versão do PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `nome_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `descricao`, `imagem`, `nome_url`) VALUES
(1, 'Grãos', 'Grãos diversos', '5d31d9bb2dc479100a109245.jpg', 'graos'),
(2, 'Bebidas', 'Bebidas', 'Captura de tela 2021-04-29 114309.jpg', 'bebidas'),
(3, 'Massas', 'Massas em geral', '07896021313211-550x550.jpg', 'massas'),
(4, 'Café', 'Café diversos', 'pilao_1.jpg', 'cafe'),
(5, 'Biscoitos e Bolachas', 'Biscoitos e Bolachas diversos', '1853594517_1GG.jpg', 'biscoitos-e-bolachas'),
(6, 'Laticínios', 'Laticínios diversos', 'iogurte_nestl_ninho_solei_morango_170g_b5c541b0-1602-450e-b60b-913e3b222d7f.jpeg', 'laticinios');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `descricao` varchar(50) NOT NULL,
  `descricao_longa` varchar(400) NOT NULL,
  `valor` decimal(8,2) NOT NULL,
  `categoria` int(11) NOT NULL,
  `imagem` varchar(100) NOT NULL,
  `nome_url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `descricao`, `descricao_longa`, `valor`, `categoria`, `imagem`, `nome_url`) VALUES
(1, 'Arroz Tio João', 'Arroz parboilizado Tio João', 'Arroz parboilizado Tio João 5kg, validade dezembro de 2022', '26.70', 1, 'arroz-tio-joao-parboilizado-1kg.jpg', 'arroz-tio-joao'),
(2, 'Miojo', 'Macarrão Instantâneo Nissin', 'Macarrão Instantâneo miojo Nissin, turma da mônica', '2.70', 3, '1000003120.jpg', 'miojo'),
(3, 'Bolacha de Mel', 'Bolacha de Mel gusman', 'Bolacha de Mel gusman, pacote 350g ', '4.80', 2, '1853594517_1GG.jpg', 'bolacha-de-mel'),
(4, 'Lasanha Amália', 'Lasanha Amália', 'Lasanha Amália direto ao forno, 500g', '5.65', 3, '07896021313211-550x550.jpg', 'lasanha-amalia'),
(5, 'Cerveja Eisenbahn', 'Cerveja lata Eisenbahn', 'Cerveja lata Eisenbahn, 350ml ', '4.80', 2, 'cerveja-eisenbahn-pilsen-lata-350ml_1.jpg', 'cerveja-eisenbahn'),
(6, 'Cerveja Belorizontina', 'Cerveja garrafa Belorizontina', 'Cerveja  Belorizontina garrafa 355ml', '3.20', 2, 'image.png', 'cerveja-belorizontina'),
(7, 'Coca-Cola', 'Coca-Cola litro', 'Coca-Cola pet 1L', '5.20', 2, 'm_85911527094417.jpeg', 'coca-cola');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `cpf` varchar(20) NOT NULL,
  `telefone` varchar(20) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(35) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
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
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
