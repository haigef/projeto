-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Máquina: 127.0.0.1
-- Data de Criação: 26-Jul-2016 às 15:59
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

DROP TABLE IF EXISTS `areas`;
CREATE TABLE IF NOT EXISTS `areas` (
  `Codigo_Areas` int(11) NOT NULL,
  `Codigo_Fabrica` int(11) NOT NULL,
  `Descricao` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Tipo` int(11) NOT NULL,
  `Data_Alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Codigo_Alterador` int(11) DEFAULT NULL,
  `_delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Codigo_Areas`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `fabrica`
--

DROP TABLE IF EXISTS `fabrica`;
CREATE TABLE IF NOT EXISTS `fabrica` (
  `Id_Fabrica` int(11) NOT NULL AUTO_INCREMENT,
  `Codigo_Fabrica` varchar(4) NOT NULL,
  `Descricao` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Tipo` varchar(6) NOT NULL,
  `Data_Alteracao` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Codigo_Alterador` int(11) DEFAULT NULL,
  `_delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Id_Fabrica`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `Codigo_Usuario` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(45) CHARACTER SET utf8 NOT NULL,
  `Login` varchar(40) CHARACTER SET utf8 NOT NULL,
  `Senha` varchar(40) CHARACTER SET utf8 NOT NULL,
  `E-mail` varchar(45) CHARACTER SET utf8 NOT NULL,
  `Perfil` varchar(15) NOT NULL,
  `Data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `_delete` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`Codigo_Usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
