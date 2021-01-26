-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 26-Jan-2021 às 23:56
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.0

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
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `senha`) VALUES
(1, 'André', 'andreluan176@gmail.com', '4438fc033f8aef433f9db5348b70e8e5');

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

CREATE TABLE `pedidos` (
  `id_pedido` int(11) NOT NULL,
  `numero_pedido` int(11) NOT NULL,
  `id_cliente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `numero_pedido`, `id_cliente`) VALUES
(36, 1, 1),
(37, 68870, 1),
(38, 768383, 1),
(39, 16861, 1),
(40, 532847, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pesquisa`
--

CREATE TABLE `pesquisa` (
  `id_pesquisa` int(11) NOT NULL,
  `nome_pesquisa` varchar(255) NOT NULL,
  `imagem_pesquisa` varchar(255) NOT NULL,
  `preco_pesquisa` float NOT NULL,
  `tipo_pesquisa` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `pesquisa`
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
-- Estrutura da tabela `produto`
--

CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL,
  `nome_produto` varchar(255) NOT NULL,
  `preco_produto` float NOT NULL,
  `qtd_produto` int(11) NOT NULL,
  `id_pedido` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `produto`
--

INSERT INTO `produto` (`id_produto`, `nome_produto`, `preco_produto`, `qtd_produto`, `id_pedido`) VALUES
(48, 'Alface', 11.92, 8, 36),
(49, 'Macaxeira', 19.95, 5, 36),
(50, 'Hortelã', 5.96, 4, 37),
(51, 'Cenoura', 1.635, 2, 37),
(52, 'Cenoura', 3.27, 3, 37),
(53, 'Batata-doce', 2.99, 1, 37),
(54, 'Banana', 0, 0, 39),
(55, 'Banana', 4.95, 5, 40),
(56, 'Batata-doce', 20.93, 7, 40);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`id_pedido`),
  ADD KEY `fk_cliente_pedido` (`id_cliente`);

--
-- Índices para tabela `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id_produto`),
  ADD KEY `fk_pedido_produto` (`id_pedido`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `id_pedido` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT de tabela `produto`
--
ALTER TABLE `produto`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `pedidos`
--
ALTER TABLE `pedidos`
  ADD CONSTRAINT `fk_cliente_pedido` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id`);

--
-- Limitadores para a tabela `produto`
--
ALTER TABLE `produto`
  ADD CONSTRAINT `fk_pedido_produto` FOREIGN KEY (`id_pedido`) REFERENCES `pedidos` (`id_pedido`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
