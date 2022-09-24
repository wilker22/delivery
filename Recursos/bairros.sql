-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 21-Abr-2021 às 07:32
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `food`
--

--
-- Extraindo dados da tabela `bairros`
--

INSERT INTO `bairros` (`id`, `nome`, `slug`, `cidade`, `valor_entrega`, `ativo`, `criado_em`, `atualizado_em`, `deletado_em`) VALUES
(1, 'Água Verde', 'agua-verde', 'Curitiba', '25.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(2, 'Ahú', 'ahu', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(3, 'Centro', 'centro', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(4, 'Alto da Glória', 'alto-da-gloria', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(5, 'Alto da Rua XV', 'alto-da-rua-xv', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(6, 'Bacacheri', 'bacacheri', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(7, 'Portão', 'portao', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(8, 'Cristo Rei', 'cristo-rei', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(9, 'Bairro Alto', 'bairro-alto', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(10, 'Batel', 'batel', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(11, 'Bigorrilho', 'bigorrilho', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(12, 'Boa Vista', 'boa-vista', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(13, 'Bom Retiro', 'bom-retiro', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(14, 'Cabral', 'cabral', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(15, 'Cajuru', 'cajuru', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(16, 'Capão da Imbuia', 'capao-da-embuia', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(17, 'Centro Cívico', 'centro-civico', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(18, 'Guabirotuba', 'guabirotuba', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(19, 'Hugo Lange', 'hugo-langue', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(20, 'Jardim Botânico', 'jardim-botanico', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(21, 'Jardim das Américas', 'jardim-das-americas', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(22, 'Jardim Social', 'jardim-social', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(23, 'Juvevê', 'juveve', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(24, 'Mercês', 'merces', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(25, 'Parolin', 'parolim', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(26, 'Prado Velho', '', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(27, 'Rebouças', '', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(28, 'São Francisco', 'sao-francisco', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(29, 'São Lourenço', '', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(30, 'Tarumã', '', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(31, 'Uberaba', '', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(32, 'Vila Izabel', '', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL),
(34, 'Cascatinha', '', 'Curitiba', '15.00', 1, '2021-04-21 02:30:50', '2021-04-21 02:30:50', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
