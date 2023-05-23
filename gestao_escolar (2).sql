-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2023 at 08:52 PM
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
(2, 'Brincadeiras de esconde-esconde'),
(3, 'Atividades com Bolas'),
(4, 'Brincadeiras de Roda'),
(5, 'Dança Livre'),
(6, 'pula pula'),
(8, 'futebol');

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
(8, 'farina', 'F', '874555612', 1, 5, 'Dança Livre', '2023-05-05'),
(14, 'Marcia', 'F', '875666380', 3, 2, 'Atividades com Bolas', '2023-05-09'),
(15, 'zoe', 'F', '846660000', 4, 5, 'pula pula', '2023-05-11'),
(16, 'eliseu lucas', 'M', '847006457', 4, 4, 'pula pula', '2023-05-14');

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
(2, '3 ano'),
(9, '4 ano');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(45) DEFAULT NULL,
  `lastname` varchar(45) DEFAULT NULL,
  `genre` char(1) DEFAULT NULL,
  `birthday` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `genre`, `birthday`, `email`) VALUES
(1, 'João', 'Silva', 'm', '1980-09-12', 'joao@silva.com'),
(2, 'Pedro', 'Souza', 'm', '1980-09-20', 'pedro@souza.com'),
(3, 'Ana', 'Paula', 'f', '1985-02-21', 'ana@aaa.com'),
(4, 'Camila', 'Ferreira', 'f', '1981-03-05', 'camila@aaa.com'),
(5, 'Leiticia', 'Soares', 'f', '1982-05-06', 'leticia@soares.com');

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
(12, 'marcia', 'marcia@gmai.com', '3259cb20a537c3539f365141fa16b8651163f575', 2, 'Ativo'),
(15, 'Marcia Nuvunga', 'tchakayta.nuvunga@gmail.com', '271a77093bf07cdb81c0e82ce12c41dfa0a4d6ab', 1, 'Ativo'),
(32, 'maria', 'maria@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 3, 'Ativo'),
(36, 'Administrador', 'admin@gmail.com', '074fe681c9742d991dc00dc287aba5094ff8c678', 1, 'Ativo'),
(38, 'Vistante', 'vis@gmail.com', '074fe681c9742d991dc00dc287aba5094ff8c678', 3, 'Ativo'),
(42, 'zayn', 'zay@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 'Inativo'),
(46, 'luisa', 'luisa@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 'Inativo'),
(47, 'visita', 'visita@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 0, 'Inativo'),
(48, 'jose', 'jose@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2, 'Ativo');

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userid`);

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
  MODIFY `id_atividades` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `estudante`
--
ALTER TABLE `estudante`
  MODIFY `id_estudante` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `niveis`
--
ALTER TABLE `niveis`
  MODIFY `id_niveis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
