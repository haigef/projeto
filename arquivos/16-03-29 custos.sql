-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 30-Mar-2016 às 03:09
-- Versão do servidor: 5.6.11
-- versão do PHP: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de Dados: `custos`
--
CREATE DATABASE IF NOT EXISTS `custos` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `custos`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `areas`
--

CREATE TABLE IF NOT EXISTS `areas` (
  `Codigo_Areas` int(11) NOT NULL,
  `Codigo_Fabrica` int(11) NOT NULL,
  `Descricao` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Tipo` int(11) NOT NULL,
  `Data_Alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Id_Alterador` int(11) NOT NULL,
  `Delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Codigo_Areas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabrica`
--

CREATE TABLE IF NOT EXISTS `fabrica` (
  `Codigo_Fabrica` int(11) NOT NULL,
  `Descricao` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Tipo` int(11) NOT NULL,
  `Data_Alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Id_Alterador` int(11) NOT NULL,
  `Delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Codigo_Fabrica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id_usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) CHARACTER SET utf8 NOT NULL,
  `Login` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Senha` varchar(40) CHARACTER SET utf8 NOT NULL,
  `E-mail` varchar(45) CHARACTER SET utf8 NOT NULL,
  `Perfil` int(11) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
