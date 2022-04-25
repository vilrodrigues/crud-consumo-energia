-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2022 at 05:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `consumo_energia`
--

-- --------------------------------------------------------

--
-- Table structure for table `consumidores`
--

CREATE TABLE `consumidores` (
  `id_consumidor` int(11) NOT NULL,
  `nome` varchar(30) NOT NULL,
  `sexo` varchar(30) NOT NULL,
  `endereco` varchar(30) NOT NULL,
  `cep` varchar(30) NOT NULL,
  `bairro` varchar(30) NOT NULL,
  `cpf` varchar(30) NOT NULL,
  `nascimento` date NOT NULL,
  `vencimento` date NOT NULL,
  `unidade_consumidora` varchar(30) NOT NULL,
  `kwh` double NOT NULL,
  `total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `consumidores`
--

INSERT INTO `consumidores` (`id_consumidor`, `nome`, `sexo`, `endereco`, `cep`, `bairro`, `cpf`, `nascimento`, `vencimento`, `unidade_consumidora`, `kwh`, `total`) VALUES
(42, 'vilson', 'M', 'Rua Salvador', '123', 'soijdo', '3234', '2022-04-14', '2022-04-12', '4234234', 234234, 234234),
(43, 'amanda2', 'F', 'ewefwef', '324234', 'dwfwef', '234234', '2022-04-11', '2022-03-28', '123123123', 234234, 234234),
(48, 'teste1', 'M', 'teste1', '23492347', 'teste1', '574683475', '2022-04-11', '2022-04-21', '4234234', 234234, 24234),
(49, 'teste2', 'F', 'teste2', '324234', 'teste2', '234234234', '2022-04-03', '2022-04-13', '4234234', 4234234, 4656),
(56, '  testee', 'f', 'testee', '123123123', 'testee', '31231', '2022-04-05', '2022-04-19', '123123123', 12312312, 12132123),
(57, 'testeee', 'f', 'testeee', '312311', 'ftedteee', '312313', '2022-04-04', '2022-04-15', '123123', 123123, 123123),
(58, 'qwdqwd', 'd', 'qwdqwdq', '234234', 'qwdqwd', '234234', '2022-04-03', '2022-04-22', '234', 234234, 234234);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `consumidores`
--
ALTER TABLE `consumidores`
  ADD PRIMARY KEY (`id_consumidor`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `consumidores`
--
ALTER TABLE `consumidores`
  MODIFY `id_consumidor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
