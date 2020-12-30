-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 19-Jun-2017 às 19:46
-- Versão do servidor: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `questionario`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `quiz`
--

CREATE TABLE `quiz` (
  `id` int(11) NOT NULL,
  `professor` varchar(20) NOT NULL,
  `pergunta1` varchar(2) NOT NULL,
  `pergunta2` varchar(2) NOT NULL,
  `pergunta3` varchar(2) NOT NULL,
  `pergunta4` varchar(2) NOT NULL,
  `pergunta5` varchar(2) NOT NULL,
  `pergunta6` varchar(2) NOT NULL,
  `pergunta7` varchar(2) NOT NULL,
  `pergunta8` varchar(2) NOT NULL,
  `pergunta9` varchar(2) NOT NULL,
  `pergunta10` varchar(2) NOT NULL,
  `data_quiz` varchar(10) NOT NULL,
  `turma` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de Resultado do QUIZ';

--
-- Extraindo dados da tabela `quiz`
--

INSERT INTO `quiz` (`id`, `professor`, `pergunta1`, `pergunta2`, `pergunta3`, `pergunta4`, `pergunta5`, `pergunta6`, `pergunta7`, `pergunta8`, `pergunta9`, `pergunta10`, `data_quiz`, `turma`) VALUES
(114, 'Marcus', '10', '8', '8', '10', '10', '5', '10', '2', '5', '5', '19/06/17', '356-7'),
(116, 'Marcus', '10', '10', '10', '10', '10', '10', '10', '10', '10', '10', '19/06/17', '4444');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tab_usuario`
--

CREATE TABLE `tab_usuario` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `senha` varchar(8) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COMMENT='Tabela de Usuarios';

--
-- Extraindo dados da tabela `tab_usuario`
--

INSERT INTO `tab_usuario` (`id`, `nome`, `senha`) VALUES
(1, 'thais', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tab_usuario`
--
ALTER TABLE `tab_usuario`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
--
-- AUTO_INCREMENT for table `tab_usuario`
--
ALTER TABLE `tab_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
