-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 03/02/2021 às 23:46
-- Versão do servidor: 10.4.17-MariaDB
-- Versão do PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `feiraorg`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'André', 'andreluan176@gmail.com', '4438fc033f8aef433f9db5348b70e8e5');

-- --------------------------------------------------------

--
-- Estrutura para tabela `envio`
--

CREATE TABLE `envio` (
  `id_envio` int(11) NOT NULL,
  `nome_cliente` varchar(255) NOT NULL,
  `endereco` varchar(255) NOT NULL,
  `forma_pag` varchar(255) NOT NULL,
  `data_envio` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `envio`
--

INSERT INTO `envio` (`id_envio`, `nome_cliente`, `endereco`, `forma_pag`, `data_envio`) VALUES
(7, 'Andrea Luiza', 'Ruablablabla', 'Crédito', '2021-02-03 19:12:36.000000'),
(8, 'adsda', 'Ruablablabla', 'Crédito', '2021-02-03 19:34:49.000000'),
(9, 'adsda', 'Ruablablabla', 'Débito', '2021-02-03 19:44:15.000000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `numero_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `numero_pedido`, `id_cliente`) VALUES
(50, 37872, 1),
(51, 21203, 1),
(52, 116677, 1),
(54, 764098, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pedido_fz`
--

CREATE TABLE `pedido_fz` (
  `id_pedido` int(11) NOT NULL,
  `numero_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pedido_fz`
--

INSERT INTO `pedido_fz` (`id_pedido`, `numero_pedido`, `id_cliente`) VALUES
(47, 1, 1),
(49, 402097, 1),
(50, 37872, 1),
(51, 21203, 1),
(53, 171952, 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `id_pesquisa` int(11) NOT NULL,
  `nome_pesquisa` varchar(255) NOT NULL,
  `imagem_pesquisa` varchar(255) NOT NULL,
  `preco_pesquisa` float NOT NULL,
  `tipo_pesquisa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `pesquisa`
--

INSERT INTO `pesquisa` (`id_pesquisa`, `nome_pesquisa`, `imagem_pesquisa`, `preco_pesquisa`, `tipo_pesquisa`) VALUES
(101, 'Abacate', 'frutas/abacate.jpg', 1.49, 'Und.'),
(102, 'Banana', 'frutas/banana.png', 0.99, 'Und.'),
(103, 'Laranja', 'frutas/laranja.png', 1.09, 'Und.'),
(104, 'Maçã', 'frutas/maca.png', 0.49, 'Und.'),
(105, 'Pêra', 'frutas/pera.png', 1.49, 'Und.'),
(106, 'Alface', 'folhagem/alface.png', 1.49, 'Und.'),
(107, 'Brócolis', 'folhagem/brocolis.png', 0.99, 'Und.'),
(108, 'Cebolinho', 'folhagem/cebolinho.jpg', 1.09, 'Und.'),
(109, 'Espinafre', 'folhagem/espinafre.jpg', 1.59, 'Und.'),
(110, 'Hortelã', 'folhagem/hortela.jpg', 1.49, 'Und.'),
(111, 'Batata-doce', 'raizes/batata-doce.jpg', 2.99, 'Kg'),
(112, 'Batata-inglesa', 'raizes/batata-inglesa.png', 3.09, 'Kg'),
(113, 'Macaxeira descascada', 'raizes/macaxeira-descasca.jpg', 4.99, 'Kg'),
(114, 'Macaxeira', 'raizes/macaxeira.jpg', 3.99, 'Kg'),
(115, 'Nabo', 'raizes/nabo.jpg', 2.49, 'Kg'),
(116, 'Cenoura', 'verduras/cenoura.jpg', 1.09, 'Und.'),
(117, 'Chuchu', 'verduras/chuchu.png', 0.99, 'Und.'),
(118, 'Pepino', 'verduras/pepino.png', 0.99, 'Und.'),
(119, 'Quiabo', 'verduras/quiabo.png', 0.69, 'Und.'),
(120, 'Tomate', 'verduras/tomate.png', 0.99, 'Und.');

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `preco_produto` float NOT NULL,
  `qtd_produto` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `preco_produto`, `qtd_produto`, `id_pedido`) VALUES
(72, 'Abacate', 5.96, 4, 50),
(73, 'Abacate', 4.47, 3, 51);

-- --------------------------------------------------------

--
-- Estrutura para tabela `produto_fz`
--

CREATE TABLE `produto_fz` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `preco_produto` float NOT NULL,
  `qtd_produto` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Despejando dados para a tabela `produto_fz`
--

INSERT INTO `produto_fz` (`id_produto`, `nome_produto`, `preco_produto`, `qtd_produto`, `id_pedido`) VALUES
(74, 'Abacate', 4.47, 3, 53),
(75, 'Banana', 2.97, 3, 53),
(76, 'Maçã', 1.47, 3, 53);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `envio`
--
ALTER TABLE `envio`
  ADD PRIMARY KEY (`id_envio`);

--
-- Índices de tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_cliente_pedido` (`id_cliente`);

--
-- Índices de tabela `pedido_fz`
--
ALTER TABLE `pedido_fz`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_cliente_2` (`id_cliente`);

--
-- Índices de tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_pedido_produto` (`id_pedido`);

--
-- Índices de tabela `produto_fz`
--
ALTER TABLE `produto_fz`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_pedidofz_produtofz` (`id_pedido`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `envio`
--
ALTER TABLE `envio`
  MODIFY `id_envio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de tabela `produto_fz`
--
ALTER TABLE `produto_fz`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- Restrições para tabelas despejadas
--

--
-- Restrições para tabelas `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_cliente_pedido` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);

--
-- Restrições para tabelas `pedido_fz`
--
ALTER TABLE `pedido_fz`
  ADD CONSTRAINT `fk_pedidofz_cliente` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);

--
-- Restrições para tabelas `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_pedido_produto` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`);

--
-- Restrições para tabelas `produto_fz`
--
ALTER TABLE `produto_fz`
  ADD CONSTRAINT `fk_pedidofz_produtofz` FOREIGN KEY (`id_pedido`) REFERENCES `pedido_fz` (`id_pedido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
