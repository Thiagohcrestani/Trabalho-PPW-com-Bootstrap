-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 29-Set-2018 às 01:08
-- Versão do servidor: 5.5.55-log
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projetoppw2`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nome_usuario` varchar(45) NOT NULL,
  `cpf_usuario` varchar(14) DEFAULT NULL,
  `rg_usuario` varchar(20) DEFAULT NULL,
  `endereco_usuario` varchar(45) DEFAULT NULL,
  `num_usuario` varchar(15) DEFAULT NULL,
  `bairro_usuario` varchar(25) DEFAULT NULL,
  `cep_usuario` varchar(10) DEFAULT NULL,
  `cidade_usuario` varchar(20) DEFAULT NULL,
  `uf_usuario` char(2) DEFAULT NULL,
  `email_usuario` varchar(50) NOT NULL,
  `login_usuario` varchar(15) NOT NULL,
  `senha_usuario` varchar(32) NOT NULL,
  `nivel_usuario` int(11) NOT NULL,
  `status_usuario` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nome_usuario`, `cpf_usuario`, `rg_usuario`, `endereco_usuario`, `num_usuario`, `bairro_usuario`, `cep_usuario`, `cidade_usuario`, `uf_usuario`, `email_usuario`, `login_usuario`, `senha_usuario`, `nivel_usuario`, `status_usuario`) VALUES
(23, 'RENATO FIGUEIRA FRANCESCATTO', '29170867852', '261008316', 'RUA ORLANDO VILAS BOAS', '1801', 'INTERLAGOS', '85955000', 'PALOTINA', 'PR', '', 'RENATO', '202cb962ac59075b964b07152d234b70', 0, 'A'),
(31, 'THALLYS EDUARDO CALORY', '08559393978', '107187057', 'RUA ALDIR PEDRON', '11401', 'CENTRO', '85950000', 'PALOTINA', 'PR', 'thallyscalory@hotmail.com', 'THALLYS', 'a8b8831c72bbd0ad793d31117cdfb799', 0, 'A'),
(36, 'CALORY SISTEMAS', '08559393978', '646465456', 'RUA ALDIR PEDRON', '1403', 'CENTRO', '85950000', 'PALOTINA', 'PR', '', 'CALORY', '81dc9bdb52d04dc20036dbd8313ed055', 3, 'A'),
(39, 'Thiago Henrique Crestani', '09735756978', '107187057', 'Rua Thomas Flores', '833', 'Centro', '85955000', 'Maripá', 'PR', 'thiago_crestani@hotmail.com', 'Thiago', '827ccb0eea8a706c4c34a16891f84e7b', 0, 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
