-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2023 at 07:26 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gestao_escolar`
--

-- --------------------------------------------------------

--
-- Table structure for table `atividades`
--

CREATE TABLE `atividades` (
  `id_atividades` int(11) NOT NULL,
  `atividades` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `atividades`
--

INSERT INTO `atividades` (`id_atividades`, `atividades`) VALUES
(1, 'xixixixixi'),
(2, 'Brincadeiras de esconde-esconde'),
(3, 'Atividades com Bolas'),
(4, 'Brincadeiras de Roda'),
(5, 'Dança Livre');

-- --------------------------------------------------------

--
-- Table structure for table `estudante`
--

CREATE TABLE `estudante` (
  `id_estudante` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `sexo` char(1) NOT NULL CHECK (`sexo` in ('M','F')),
  `contacto` varchar(13) NOT NULL,
  `niveis` int(11) NOT NULL,
  `idade` int(11) NOT NULL CHECK (`idade` between 2 and 5),
  `atividades` varchar(255) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `estudante`
--

INSERT INTO `estudante` (`id_estudante`, `nome`, `sexo`, `contacto`, `niveis`, `idade`, `atividades`, `data`) VALUES
(4, 'eliseu lucas', 'M', '847006457', 2, 2, 'Brincadeiras de Roda', '2023-05-05'),
(8, 'farina', 'F', '874555612', 1, 5, 'Dança Livre', '2023-05-05'),
(9, 'marcia', 'F', '847612321', 1, 5, 'Jogos de Tabuleiro', '2023-05-05'),
(10, 'marcia', 'F', '828200417', 1, 5, 'Jogos de Tabuleiro', '2023-05-05');

-- --------------------------------------------------------

--
-- Table structure for table `niveis`
--

CREATE TABLE `niveis` (
  `id_niveis` int(11) NOT NULL,
  `niveis` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `niveis`
--

INSERT INTO `niveis` (`id_niveis`, `niveis`) VALUES
(1, '3 ano'),
(2, '3 ano');

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(50) NOT NULL,
  `nivel` int(2) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `email`, `senha`, `nivel`, `status`) VALUES
(5, 'eliseu', 'eliseulucass30@gmail.com', '074fe681c9742d991dc00dc287aba5094ff8c678', 1, 'Ativo'),
(6, 'eliseu', 'eliseulucas@gmail.com', '074fe681c9742d991dc00dc287aba5094ff8c678', 1, 'Ativo'),
(8, 'luis', 'luis@gmail.com', '7c4a8d09ca3762af61e59520943dc26494f8941b', 1, 'Ativo'),
(9, 'marcia', 'marcia@gmail.com', '3259cb20a537c3539f365141fa16b8651163f575', 2, 'Ativo'),
(12, 'marcia', 'marcia@gmai.com', '3259cb20a537c3539f365141fa16b8651163f575', 2, 'Ativo'),
(13, 'joao', 'joao@gmail.com', 'e83249bd3ba79932e16fb1fb5100dafade9954c2', 2, 'Ativo'),
(14, 'elton', 'elton@gmail.com', '982fd8b711279888a3b54f5af24f185041d22ee6', 3, 'Ativo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `atividades`
--
ALTER TABLE `atividades`
  ADD PRIMARY KEY (`id_atividades`);

--
-- Indexes for table `estudante`
--
ALTER TABLE `estudante`
  ADD PRIMARY KEY (`id_estudante`);

--
-- Indexes for table `niveis`
--
ALTER TABLE `niveis`
  ADD PRIMARY KEY (`id_niveis`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `atividades`
--
ALTER TABLE `atividades`
  MODIFY `id_atividades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `estudante`
--
ALTER TABLE `estudante`
  MODIFY `id_estudante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `niveis`
--
ALTER TABLE `niveis`
  MODIFY `id_niveis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
