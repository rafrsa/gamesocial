-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Out-2018 às 18:36
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gamesocial`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `comentarios`
--

CREATE TABLE `comentarios` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `mensagem` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `comentarios`
--

INSERT INTO `comentarios` (`id`, `data`, `usuario_id`, `post_id`, `mensagem`) VALUES
(1, '2018-10-16 00:15:24', 1, 1, 'Que notícia boa!!!'),
(2, '2018-10-16 05:30:10', 1, 1, 'hahahahaha legal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `nivel`
--

CREATE TABLE `nivel` (
  `id` int(11) NOT NULL,
  `nivel` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `nivel`
--

INSERT INTO `nivel` (`id`, `nivel`) VALUES
(1, 'Admin'),
(2, 'Usuário');

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `data` datetime NOT NULL,
  `usuario_id` int(11) NOT NULL,
  `mensagem` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `data`, `usuario_id`, `mensagem`) VALUES
(1, '2018-10-16 11:14:26', 1, 'Primeiro post'),
(2, '2018-10-15 04:15:00', 1, 'Segundo post');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL,
  `usuario` varchar(100) NOT NULL,
  `senha` varchar(500) NOT NULL,
  `imagem` varchar(500) DEFAULT NULL,
  `nivel_id` int(11) NOT NULL,
  `data` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `imagem`, `nivel_id`, `data`) VALUES
(1, 'Usuário Teste 1', 'user1', '202cb962ac59075b964b07152d234b70', '', 2, '2018-10-15 04:07:17'),
(2, 'rafa', 'rafafre', 'e034fb6b66aacc1d48f445ddfb08da98', NULL, 2, '2018-10-18 13:25:14'),
(3, 'teste', 'teste', '698dc19d489c4e4db73e28a713eab07b', NULL, 2, '2018-10-18 13:27:30'),
(4, 'tete', 'tete', '2db313fabca57504d9dc776e46b304f6', NULL, 2, '2018-10-18 13:30:14'),
(5, 'asd', 'asd', '7815696ecbf1c96e6894b779456d330e', NULL, 2, '2018-10-18 13:32:18'),
(6, 'iu', 'iu', '9a281eea0823964dfb2915823c248417', NULL, 2, '2018-10-18 13:33:32'),
(7, 'uyuy', 'yuy', '4336b5054faa60a018471a9972bb2e89', NULL, 2, '2018-10-18 13:34:28'),
(8, 'asddd', 'asdasd', 'b3ddbc502e307665f346cbd6e52cc10d', NULL, 2, '2018-10-18 13:35:08'),
(9, 'as', 'as', 'f970e2767d0cfe75876ea857f92e319b', NULL, 2, '2018-10-18 13:35:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comentarios`
--
ALTER TABLE `comentarios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nivel`
--
ALTER TABLE `nivel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comentarios`
--
ALTER TABLE `comentarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `nivel`
--
ALTER TABLE `nivel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
