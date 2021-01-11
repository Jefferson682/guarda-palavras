-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Tempo de geração: 11-Jan-2021 às 03:52
-- Versão do servidor: 5.7.32
-- versão do PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `GP_Banco`
--
CREATE DATABASE IF NOT EXISTS `GP_Banco` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `GP_Banco`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `GP_user`
--

DROP TABLE IF EXISTS `GP_user`;
CREATE TABLE IF NOT EXISTS `GP_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `senha` varchar(32) NOT NULL,
  PRIMARY KEY (`id_user`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `GP_word`
--

DROP TABLE IF EXISTS `GP_word`;
CREATE TABLE IF NOT EXISTS `GP_word` (
  `id_word` int(11) NOT NULL AUTO_INCREMENT,
  `wordPT` varchar(255) NOT NULL,
  `wordEN` varchar(255) NOT NULL,
  `obs` varchar(255) DEFAULT NULL,
  `id_pessoa` int(11) NOT NULL,
  PRIMARY KEY (`id_word`),
  KEY `fk_user` (`id_pessoa`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `GP_word`
--
ALTER TABLE `GP_word`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`id_pessoa`) REFERENCES `GP_user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;