-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 06/09/2018 às 20:17
-- Versão do servidor: 5.6.39-83.1
-- Versão do PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `ecostake_pool`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `$pac`
--

CREATE TABLE `$pac` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `$pac`
--

INSERT INTO `$pac` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `808`
--

CREATE TABLE `808` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `808`
--

INSERT INTO `808` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(3, 'febre', '', 104),
(4, 'Top1', '', 1),
(5, 'laurobeleche', '', 65);

-- --------------------------------------------------------

--
-- Estrutura para tabela `apr`
--

CREATE TABLE `apr` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `apr`
--

INSERT INTO `apr` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `arion`
--

CREATE TABLE `arion` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `arion`
--

INSERT INTO `arion` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `block_stakes`
--

CREATE TABLE `block_stakes` (
  `id` int(11) NOT NULL,
  `moeda` varchar(64) NOT NULL,
  `qnt` double NOT NULL,
  `txid` varchar(64) NOT NULL,
  `ciclo` int(64) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `participantes` mediumtext NOT NULL,
  `fee` double NOT NULL,
  `tipo` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `block_stakes`
--

INSERT INTO `block_stakes` (`id`, `moeda`, `qnt`, `txid`, `ciclo`, `data`, `participantes`, `fee`, `tipo`) VALUES
(30, 'mic3', 10, 'llll', 1, '2018-09-06 22:03:08', '{\"laurobeleche\":{\"moedas\":0.01521568627451},\"febre\":{\"moedas\":0.0019019607843137},\"Nyel\":{\"moedas\":5.7058823529412},\"123456\":{\"moedas\":0.0019019607843137},\"adrianaarantes10\":{\"moedas\":3.9750980392157},\"ecostakepool\":{\"moedas\":0.3}}', 0.3, 'stake'),
(31, 'mic3', 1000, 'llçç', 2, '2018-09-06 22:08:58', '{\"laurobeleche\":{\"moedas\":1.521568627451},\"febre\":{\"moedas\":0.19019607843137},\"Nyel\":{\"moedas\":570.58823529412},\"123456\":{\"moedas\":0.19019607843137},\"adrianaarantes10\":{\"moedas\":397.50980392157},\"ecostakepool\":{\"moedas\":30}}', 30, 'stake'),
(32, '$pac', 100, 'jjjjj', 1, '2018-09-06 22:13:24', '{\"ecostakepool\":{\"moedas\":3}}', 3, 'stake'),
(33, 'dvrs', 100, 'llll', 1, '2018-09-06 22:14:35', '{\"ecostakepool\":{\"moedas\":35.333333333333},\"febre\":{\"moedas\":64.666666666667}}', 3, 'stake');

-- --------------------------------------------------------

--
-- Estrutura para tabela `btcc`
--

CREATE TABLE `btcc` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `btcc`
--

INSERT INTO `btcc` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'dinheirofree', '', 550),
(3, 'febre', '', 0),
(4, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `car_dep`
--

CREATE TABLE `car_dep` (
  `id` int(11) NOT NULL,
  `nome` varchar(32) NOT NULL,
  `moeda` varchar(64) NOT NULL,
  `endereco` varchar(64) NOT NULL,
  `status` int(11) NOT NULL,
  `mn` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `car_dep`
--

INSERT INTO `car_dep` (`id`, `nome`, `moeda`, `endereco`, `status`, `mn`) VALUES
(2, 'MouseCoin', 'mic3', 'MhoVL9YR2bzC3eV3AStaayqzRMtGc6TW1v', 1, 0),
(3, 'Sprouts', 'sprts', 'manutenção', 3, 0),
(4, 'Diverse', 'dvrs', 'FsAqFESECsB6cT2ZYPpQQU7nv5mm6b5QwC', 1, 0),
(5, 'VulcanoCore', 'vulc', 'VUgLnpitBBFZw7iW9tmeoW6vx2WYxa91rh', 1, 1),
(6, 'StakeBit', 'sbit', 'ShHrvvanpYRwsQ83oybbUR7xV2mBj84VqW', 1, 0),
(7, 'Varius', 'varius', 'VLYbTV7XugPhpB3wfXrPRZawdioGNnqG5i', 1, 0),
(8, 'PeepCoin', 'pcn', 'PCJ95G3dr26NtBcSxsaCdWSo5Jr1CtDNqe', 1, 0),
(9, 'Eddie', 'eddie', 'EZh7G6EEttRjtRraQnjnTcrVyHW3FSzTdu', 1, 0),
(10, '808', '808', '8cqYHzasvtndc1JPMX3zcPdWzzx1LXemJd', 1, 0),
(11, 'EGameX', 'egamex', 'EQ628NuzKiy66rxfp8g3WWDHvYiLmfAjvv', 1, 0),
(12, 'HTML', 'html', 'HjS2f6prxAjXEK6KsGPqRd82L4zTLE87Yy', 1, 0),
(13, 'XP', 'xp', 'XKRKUN6jqA2M2wxrER7QydGw3YeCp818je', 1, 0),
(14, 'StrongHands MN', 'shmn', 'MEN37eRaTSYEpZjUfEjtyDoH2T7AKmhKh6', 1, 1),
(15, 'Deviant', 'dev', 'dGnXi7cL5CwWbH38SU9ETUnq8vsuE3vjuw', 1, 1),
(16, 'MonkeyProject', 'monk', 'MZkQZRky9hMLsr67AyFvk8EKrATbRGiQkh', 1, 1),
(17, 'LibertyCoin', 'lbrt', 'LZGNnQRPzXxkTa3YkHDrCGBNZb57TUzkpe', 1, 1),
(18, 'AprCoin', 'apr', '5qDooHoWP6M6CfWV3D5ceUYwnyhWtFbtBf', 1, 1),
(19, 'TrocaNinja', 'tnj', 'JLMpCcTf1UaHHTahRn3CxP2rBWw829KmhT', 1, 0),
(20, 'CaluraCoin', 'clc', 'DKxNxXejf5SX1eu1dRqk9ZsbnM1LyAAECJ', 1, 0),
(21, 'WomenCoin', 'women', 'WWLKFpPdfxB6qRkZ9eF4SfgnAf1GoxPEgb', 1, 0),
(22, 'MutualX', 'mutx', 'MA5hhno8dPJPqESJ6m6F996bE6hiZLdGX7', 1, 1),
(23, 'Xgame', 'xgame', 'XUNh2r8vEqwy2MitGm66duiUxk1jTn6z6R', 1, 0),
(24, 'CompoundCoin', 'comp', 'CUp6LjnttgsYXn4JmtM6cQUa7z7wFpye3B', 1, 0),
(25, 'BitcoinCure', 'btcc', 'FTJoJHgb12BSUZZGWUX5b7w3FHHVTHAYp7', 1, 0),
(26, 'PenguinCoin', 'peng', 'PNW67StrKBigs742Mzy7zd2hmJrrtde8QH', 1, 1),
(27, 'ArionCoin', 'arion', 'AM14XnRrLBb3nqfNB3rDfEyAF6Bkkucdky', 1, 1),
(28, 'PacCoin', '$pac', 'PHVjHkz8HsfqJCsDekkq6xRkETSiQgWdNq', 1, 1),
(31, 'Crown', 'crw', '1Kj9ViDn1eYEgsjQPgwXgFsEURa2YtrAZC', 1, 1),
(33, 'Gold Poker', 'gpkr', 'desativado', 1, 1),
(35, 'Roi Coin', 'roi', 'manutenção', 1, 0),
(36, 'Power Coin', 'pwr', 'manutenção', 1, 0),
(37, 'LionBit', 'lbxp', 'manutenção', 1, 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `ciclos`
--

CREATE TABLE `ciclos` (
  `id` int(11) NOT NULL,
  `moeda` varchar(64) NOT NULL,
  `ciclo` int(11) NOT NULL,
  `participantes` mediumtext NOT NULL,
  `inicio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fim` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `ciclos`
--

INSERT INTO `ciclos` (`id`, `moeda`, `ciclo`, `participantes`, `inicio`, `fim`) VALUES
(18, 'mic3', 1, '{\"laurobeleche\":{\"moedas\":\"8\",\"part\":0.0015686274509804},\"febre\":{\"moedas\":\"1\",\"part\":0.00019607843137255},\"Nyel\":{\"moedas\":\"3000\",\"part\":0.58823529411765},\"123456\":{\"moedas\":\"1\",\"part\":0.00019607843137255},\"adrianaarantes10\":{\"moedas\":\"2090\",\"part\":0.40980392156863}}', '2018-09-06 22:02:43', '2018-09-06 22:03:19'),
(19, 'mic3', 2, '{\"laurobeleche\":{\"moedas\":\"8.0152156862745\",\"part\":0.0015686274509804},\"febre\":{\"moedas\":\"1.0019019607843\",\"part\":0.00019607843137255},\"Nyel\":{\"moedas\":\"3005.7058823529\",\"part\":0.58823529411765},\"123456\":{\"moedas\":\"1.0019019607843\",\"part\":0.00019607843137255},\"adrianaarantes10\":{\"moedas\":\"2093.9750980392\",\"part\":0.40980392156863}}', '2018-09-06 22:08:00', '2018-09-06 22:09:02'),
(20, '$pac', 1, 'null', '2018-09-06 22:13:01', '2018-09-06 22:13:34'),
(21, 'dvrs', 1, '{\"ecostakepool\":{\"moedas\":\"1\",\"part\":0.33333333333333},\"febre\":{\"moedas\":\"2\",\"part\":0.66666666666667}}', '2018-09-06 22:14:17', '2018-09-06 22:14:41');

-- --------------------------------------------------------

--
-- Estrutura para tabela `clc`
--

CREATE TABLE `clc` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `clc`
--

INSERT INTO `clc` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'viverdebtc', '', 1),
(3, 'febre', '', 0),
(4, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `comp`
--

CREATE TABLE `comp` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `comp`
--

INSERT INTO `comp` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `conf`
--

CREATE TABLE `conf` (
  `id` int(11) NOT NULL,
  `fee` int(11) NOT NULL,
  `fee_mn` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `conf`
--

INSERT INTO `conf` (`id`, `fee`, `fee_mn`) VALUES
(1, 3, 5);

-- --------------------------------------------------------

--
-- Estrutura para tabela `cor_clientes`
--

CREATE TABLE `cor_clientes` (
  `id` int(11) NOT NULL,
  `corretor` varchar(64) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `fee` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `cor_fee`
--

CREATE TABLE `cor_fee` (
  `id` int(11) NOT NULL,
  `corretor` varchar(64) NOT NULL,
  `cliente` varchar(64) NOT NULL,
  `moeda` varchar(64) NOT NULL,
  `ciclo` int(11) NOT NULL,
  `fee` double NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `crw`
--

CREATE TABLE `crw` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `crw`
--

INSERT INTO `crw` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `depositos`
--

CREATE TABLE `depositos` (
  `id` int(11) NOT NULL,
  `investidor` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `discord` varchar(64) NOT NULL,
  `moeda` varchar(32) NOT NULL,
  `qnt` double NOT NULL,
  `txid` varchar(128) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `obs` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `depositos`
--

INSERT INTO `depositos` (`id`, `investidor`, `coinvestidor`, `discord`, `moeda`, `qnt`, `txid`, `data`, `obs`, `status`) VALUES
(7, 'patysgrj', '', '', 'egamex', 500, 'f5793409adcabcedca1d3f9c08c628e9867127abc8797714ef', '2018-09-02 03:27:39', '', 0),
(8, 'lub93796@awsoo.com', '', '', 'sprts', 10000, 'a9b1b7ccc34c5bc1e85b6f0f92407ee0b665e0edfc2fcef5ed', '2018-09-03 04:14:01', '', 1),
(9, 'saito', '', '', 'sprts', 10000, '7a28c258d2cebad56fac84ace7b38bfcaf932a891c93ffe751', '2018-09-03 06:39:31', '', 1),
(10, 'viverdebtc', '', '', 'clc', 1, '63ab4ac2f6b20ccfe0d9e1b3e2dcf119bb2d2b744aefdd8f56', '2018-09-03 21:09:19', '', 1),
(11, 'febre', '', '', 'sprts', 390565.35, 'kkkkkkk', '2018-09-03 22:38:47', '', 1),
(12, 'dinheirofree', '', '', '$pac', 10, 'e5cf4e2143954bb5f15576dc2ae0c8cc7db202fa88fda05198', '2018-09-04 20:04:23', '', 1),
(13, 'rsbit29', '', '', 'xgame', 1001, '2285c1d62476cd0bfa26017e039232fc977f7c06c38fec1284', '2018-09-04 22:18:37', '', 0),
(14, 'Nyel', '', '', 'mic3', 1000, '440abfaab0f2e2bd4f0477ae6aecc15e3789b239a64a2ade02', '2018-09-04 23:07:59', '', 1),
(15, 'Nyel', '', '', 'mic3', 2000, '0dc3f93510acb9b56525dbc0488a5df4eba557b97501b62b70', '2018-09-04 23:54:38', '', 1),
(16, 'dinheirofree', '', '', 'btcc', 50, '40080de49089c31e532b8052c804ec1a6bff379dccbf82ca6e', '2018-09-05 03:26:58', '', 1),
(17, 'dinheirofree', '', '', 'btcc', 500, '49b1e3b5707f8cfdd6455ea4dd622d86caca55f63d11903e5f', '2018-09-05 03:41:16', '', 1),
(18, 'laurobeleche', '', '', 'mic3', 10, '234324234', '2018-09-05 19:42:19', '', 1),
(19, 'adrianaarantes10', '', '', 'egamex', 81545, '85eb0f31f2dc678878e1cc412575ebdebb84776ab771d97764', '2018-09-05 20:15:34', '', 1),
(20, 'adrianaarantes10', '', '', 'mic3', 2090, 'cdabbc63c5a133960928e9417c3d4540bb1f2072babf7edf71', '2018-09-05 20:15:58', '', 1),
(21, 'febre', '', '', 'peng', 10000, 'kjhffffffffffffffffffff', '2018-09-06 00:27:26', '', 1),
(22, 'laurobeleche', '', '', 'mutx', 12, 'asdasd', '2018-09-06 02:16:02', '', 1),
(23, 'cashdtime', '', '', 'html', 1900.39814326, '7cefaecd1fdd0ea115a9cf8112222bd274d8e0f5552e13a90f', '2018-09-06 12:48:53', '', 0),
(24, 'febre', '', '', 'dvrs', 1, 'lllllll', '2018-09-06 12:54:00', '', 1),
(25, 'febre', '', '', 'vulc', 1, 'kjhffffffffffffffffffff', '2018-09-06 12:54:14', '', 1),
(26, 'febre', '', '', 'sbit', 1, 'kjhffffffffffffffffffff', '2018-09-06 12:54:28', '', 1),
(27, 'febre', '', '', 'varius', 1, 'kkkkkkk', '2018-09-06 12:54:42', '', 1),
(28, 'febre', '', '', 'pcn', 1, 'kjhffffffffffffffffffff', '2018-09-06 12:54:55', '', 1),
(29, 'febre', '', '', 'eddie', 1, 'kjhffffffffffffffffffff', '2018-09-06 12:55:08', '', 1),
(30, 'febre', '', '', '808', 1, 'kjhffffffffffffffffffff', '2018-09-06 12:55:21', '', 1),
(31, 'febre', '', '', 'egamex', 1, 'kjhffffffffffffffffffff', '2018-09-06 12:55:37', '', 1),
(32, 'febre', '', '', '808', 1, 'kjhffffffffffffffffffff', '2018-09-06 12:57:01', '', 1),
(33, 'febre', '', '', 'html', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:03:32', '', 1),
(34, 'febre', '', '', 'xp', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:09:58', '', 1),
(35, 'febre', '', '', 'shmn', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:10:12', '', 1),
(36, 'febre', '', '', 'dev', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:10:36', '', 1),
(37, 'febre', '', '', 'monk', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:10:48', '', 1),
(38, 'febre', '', '', 'lbrt', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:11:06', '', 1),
(39, 'febre', '', '', 'apr', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:11:20', '', 1),
(40, 'febre', '', '', 'tnj', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:11:34', '', 1),
(41, 'febre', '', '', 'clc', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:11:51', '', 1),
(42, 'febre', '', '', 'women', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:12:06', '', 1),
(43, 'febre', '', '', 'xgame', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:17:10', '', 1),
(44, 'febre', '', '', 'comp', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:17:23', '', 1),
(45, 'febre', '', '', 'btcc', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:17:37', '', 1),
(46, 'febre', '', '', 'peng', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:17:52', '', 1),
(47, 'febre', '', '', 'arion', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:18:05', '', 1),
(48, 'febre', '', '', '$pac', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:18:19', '', 1),
(49, 'febre', '', '', 'crw', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:18:35', '', 1),
(50, 'febre', '', '', 'gpkr', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:18:52', '', 1),
(51, 'febre', '', '', 'roi', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:19:10', '', 1),
(52, 'febre', '', '', 'pwr', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:19:24', '', 1),
(53, 'febre', '', '', 'lbxp', 1, 'kkkkkkk', '2018-09-06 13:19:37', '', 1),
(54, 'febre', '', '', 'lbxp', 1, 'kjhffffffffffffffffffff', '2018-09-06 13:19:48', '', 1),
(55, 'laurobeleche', '', '', '808', 6, 'ggggg', '2018-09-06 13:46:55', '', 1),
(56, 'mtezini', '', '', 'peng', 1000, '2690576492785ebbbc55b4cd97b2185f91ef1576b9c3788e07', '2018-09-06 14:26:15', '', 0),
(57, 'febre', '', '', '808', 1, 'kjhffffffffffffffffffff', '2018-09-06 21:15:35', '', 1),
(58, 'Top1', '', '', '808', 1, 'lllll', '2018-09-06 21:45:47', '', 1),
(59, 'Top1', '', '', '$pac', 1, 'llll', '2018-09-06 21:51:37', '', 1),
(60, 'febre', '', '', '$pac', 1, 'kjhffffffffffffffffffff', '2018-09-06 21:54:33', '', 1),
(61, 'febre', '', '', 'mic3', 1, 'kjhffffffffffffffffffff', '2018-09-06 21:58:20', '', 1),
(62, 'febre', '', '', 'dvrs', 2, 'kjhffffffffffffffffffff', '2018-09-06 21:58:40', '', 1),
(63, 'febre', '', '', 'vulc', 2, 'kjhffffffffffffffffffff', '2018-09-06 21:58:54', '', 1),
(64, 'febre', '', '', 'vulc', 2, 'kjhffffffffffffffffffff', '2018-09-06 21:58:58', '', 1),
(65, 'febre', '', '', 'vulc', 2, 'kkkkkkk', '2018-09-06 21:59:13', '', 1),
(66, 'febre', '', '', 'sbit', 2, 'kjhffffffffffffffffffff', '2018-09-06 21:59:28', '', 1),
(67, 'febre', '', '', 'varius', 2, 'kjhffffffffffffffffffff', '2018-09-06 21:59:43', '', 1),
(68, 'febre', '', '', 'pcn', 2, 'kjhffffffffffffffffffff', '2018-09-06 22:00:00', '', 1),
(69, 'febre', '', '', 'eddie', 2, 'kjhffffffffffffffffffff', '2018-09-06 22:00:17', '', 1),
(70, 'febre', '', '', '808', 100, 'kjhffffffffffffffffffff', '2018-09-06 22:00:33', '', 1),
(71, 'febre', '', '', 'egamex', 2, 'lllllll', '2018-09-06 22:00:49', '', 1),
(72, 'laurobeleche', '', '', '808', 66, '66', '2018-09-06 22:34:40', '', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `dev`
--

CREATE TABLE `dev` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `dev`
--

INSERT INTO `dev` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `dvrs`
--

CREATE TABLE `dvrs` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `dvrs`
--

INSERT INTO `dvrs` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 36.333333333333),
(2, 'febre', '', 66.666666666667),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `eddie`
--

CREATE TABLE `eddie` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `eddie`
--

INSERT INTO `eddie` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 2),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `egamex`
--

CREATE TABLE `egamex` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `egamex`
--

INSERT INTO `egamex` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'adrianaarantes10', '', 81545),
(3, 'febre', '', 2),
(4, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `gpkr`
--

CREATE TABLE `gpkr` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `gpkr`
--

INSERT INTO `gpkr` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `html`
--

CREATE TABLE `html` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `html`
--

INSERT INTO `html` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `lbrt`
--

CREATE TABLE `lbrt` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `lbrt`
--

INSERT INTO `lbrt` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `mic3`
--

CREATE TABLE `mic3` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `mic3`
--

INSERT INTO `mic3` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'laurobeleche', '', 9.5367843137255),
(2, 'ecostakepool', '', 0),
(3, 'febre', '', 1.1920980392157),
(4, 'Nyel', '', 3576.294117647),
(5, '123456', '', 1.1920980392157),
(6, 'adrianaarantes10', '', 2491.4849019608),
(7, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `monk`
--

CREATE TABLE `monk` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `monk`
--

INSERT INTO `monk` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `mutx`
--

CREATE TABLE `mutx` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `mutx`
--

INSERT INTO `mutx` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'laurobeleche', '', 11),
(3, 'febre', '', 0),
(4, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `pcn`
--

CREATE TABLE `pcn` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `pcn`
--

INSERT INTO `pcn` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 3),
(3, 'Top1', '', -2);

-- --------------------------------------------------------

--
-- Estrutura para tabela `peng`
--

CREATE TABLE `peng` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `peng`
--

INSERT INTO `peng` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 9988),
(3, 'Top1', '', 500),
(4, 'laurobeleche', '', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `saques`
--

CREATE TABLE `saques` (
  `id` int(11) NOT NULL,
  `investidor` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `moeda` varchar(32) NOT NULL,
  `qnt` double NOT NULL,
  `carteira` varchar(128) NOT NULL,
  `txid` varchar(128) NOT NULL,
  `segc` varchar(64) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `obs` text NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `saques`
--

INSERT INTO `saques` (`id`, `investidor`, `coinvestidor`, `email`, `moeda`, `qnt`, `carteira`, `txid`, `segc`, `data`, `obs`, `status`) VALUES
(1, 'febre', '', '100000@sss.com', 'sprts', 100000, 'kmjjjjjjjjjjjj', '', 'bfahynzdtqvebfabfa', '2018-08-29 14:26:47', '', 2),
(2, 'febre', '', 'febredobitcoin@gmail.com', 'sprts', 100000, 'lkkkkjjjjjjjjjjjjjjjjjjjjjj', '', 'bfahynafgbfabfabfa', '2018-08-29 14:27:45', '', 2),
(3, 'febre', '', 'febredobitcoin@gmail.com', 'sprts', 390565.3463013, 'lkkkkjjjjjjjjjjjjjjjjjjjjjjkljk', '', 'bfahynzdtqvebfabfa', '2018-08-29 17:33:37', '', 2),
(4, 'laurobeleche', '', '', 'dvrs', 123, 'asdasd', '', 'hynclpafgclpclpclp', '2018-08-29 19:57:44', '', 0),
(5, 'febre', '', '', 'sprts', 100000, 'lkkkkjjjjjjjjjjjjjjjjjjjjjj', '', 'bfahynzdtqvebfabfa', '2018-08-30 02:11:18', '', 2),
(6, 'febre', '', '', 'sprts', 390565.3463013, 'kkkkkkk,mnnn', 'kkkkkkk', 'bfahynzdtqvebfabfa', '2018-08-31 17:04:59', '', 1),
(7, 'febre', '', '', 'peng', 499, 'lkkkkjjjjjjjjjjjjjjjjjjjjjj', 'kjhffffffffffffffffffff', 'bfahynafgbfabfabfa', '2018-09-06 01:44:50', '', 1),
(8, 'febre', '', '', 'peng', 10, 'lkkkkjjjjjjjjjjjjjjjjjjjjjjhhhhhhh', 'kjhffffffffffffffffffff', 'bfahynzdtqvebfabfa', '2018-09-06 02:47:30', '', 1),
(9, 'Top1', '', '', 'mic3', 1, 'nnn', 'kjhffffffffffffffffffff', 'bfaxpunkwxpunkwxpu', '2018-09-06 13:27:58', '', 1),
(10, 'Top1', '', '', 'sprts', 1, 'hhhj', 'kkkkkkk', 'bfaxpuxpuxpubfabfa', '2018-09-06 13:28:12', '', 1),
(11, 'Top1', '', '', 'dvrs', 1, 'jjjj', 'kkkkkkk', 'bfaxpubfaxpubfabfa', '2018-09-06 13:28:29', '', 1),
(12, 'Top1', '', '', 'vulc', 1, 'mjn', 'kkkkkkk', 'xpunkwxpunkwbfabfa', '2018-09-06 13:28:52', '', 1),
(13, 'Top1', '', '', 'sbit', 1, 'bgfd', 'kkkkkkk', 'nkwxpubtmyodbfabfa', '2018-09-06 13:29:10', '', 1),
(14, 'Top1', '', '', 'varius', 1, 'mnhg', 'kjhffffffffffffffffffff', 'bfaxpunkwxpunkwbfa', '2018-09-06 13:29:27', '', 1),
(15, 'Top1', '', '', 'pcn', 1, 'bbgg', 'kjhffffffffffffffffffff', 'bfaxpunkwbfabfabfa', '2018-09-06 14:57:56', '', 1),
(16, 'Top1', '', '', 'eddie', 1, 'fred', 'kjhffffffffffffffffffff', 'clpqveclphynbfabfa', '2018-09-06 14:58:13', '', 1),
(17, 'Top1', '', '', 'egamex', 1, 'lkkk', 'kjhffffffffffffffffffff', 'bfaxpubfabfabfabfa', '2018-09-06 14:58:35', '', 1),
(18, 'Top1', '', '', 'html', 1, 'jjhh', 'lllllll', 'bfaxpubfabfabfabfa', '2018-09-06 14:58:53', '', 1),
(19, 'Top1', '', '', 'xp', 1, 'kjjjj', 'kjhffffffffffffffffffff', 'bfankwbtmbfabfabfa', '2018-09-06 14:59:09', '', 1),
(20, 'Top1', '', '', 'shmn', 1, 'lllll', 'kjhffffffffffffffffffff', 'bfaxpubfabfabfabfa', '2018-09-06 14:59:23', '', 1),
(21, 'Top1', '', '', 'dev', 1, 'bnb', 'kjhffffffffffffffffffff', 'bfaxpuafgbfabfabfa', '2018-09-06 15:09:42', '', 1),
(22, 'Top1', '', '', 'monk', 1, 'bbg', 'kjhffffffffffffffffffff', 'bfaafghynbfabfabfa', '2018-09-06 15:09:59', '', 1),
(23, 'Top1', '', '', 'lbrt', 1, 'mjj', 'kkkkkkk', 'bfaxpunkwbfabfabfa', '2018-09-06 15:10:16', '', 1),
(24, 'Top1', '', '', 'apr', 1, 'oii', '', 'xpunkwbfabfabfabfa', '2018-09-06 15:10:31', '', 2),
(25, 'Top1', '', '', 'apr', 1, 'kkkk', 'kkkkkkk', 'bfaxpubfabfabfabfa', '2018-09-06 15:10:49', '', 1),
(26, 'Top1', '', '', 'tnj', 1, 'nhb', 'kjhffffffffffffffffffff', 'nkwxpubfabfabfabfa', '2018-09-06 21:19:24', '', 1),
(27, 'Top1', '', '', 'clc', 1, 'ded', 'kkkkkkk', 'afghynclpbfabfabfa', '2018-09-06 21:19:51', '', 1),
(28, 'Top1', '', '', 'women', 1, 'jhh', 'kjhffffffffffffffffffff', 'afgafgafgbfabfabfa', '2018-09-06 21:20:15', '', 1),
(29, 'Top1', '', '', 'mutx', 1, 'mmmn', 'kjhffffffffffffffffffff', 'qveclpbfabfabfabfa', '2018-09-06 21:20:35', '', 1),
(30, 'Top1', '', '', 'xgame', 1, 'mmmn', 'kkkkkkk', 'hynclphynbfabfabfa', '2018-09-06 21:20:54', '', 1),
(31, 'Top1', '', '', 'comp', 1, 'fffff', 'kkkkkkk', 'afghynafgbfabfabfa', '2018-09-06 21:21:16', '', 1),
(32, 'Top1', '', '', 'btcc', 1, 'bvc', 'kjhffffffffffffffffffff', 'qveclphynbfabfabfa', '2018-09-06 21:24:25', '', 1),
(33, 'Top1', '', '', 'peng', 1, 'mmnnn', 'kjhffffffffffffffffffff', 'nkwbtmnkwnkwbfabfa', '2018-09-06 21:24:42', '', 1),
(34, 'Top1', '', '', 'arion', 1, 'jhhh', 'kkkkkkk', 'nkwbtmbtmbtmbfabfa', '2018-09-06 21:24:59', '', 1),
(35, 'Top1', '', '', '$pac', 1, 'kjj', 'kkkkkkk', 'btmbtmbtmbfabfabfa', '2018-09-06 21:25:21', '', 1),
(36, 'Top1', '', '', 'crw', 1, 'gggg', 'kkkkkkk', 'yodzdtzdtbfabfabfa', '2018-09-06 21:25:39', '', 1),
(37, 'Top1', '', '', 'gpkr', 1, 'ddddd', 'kjhffffffffffffffffffff', 'zdtzdtzdtzdtbfabfa', '2018-09-06 21:25:59', '', 1),
(38, 'Top1', '', '', '$pac', 1, 'bbbb', 'kjhffffffffffffffffffff', 'btmbtmbtmbfabfabfa', '2018-09-06 21:52:27', '', 1),
(39, 'febre', '', '', '$pac', 1, 'lkkkkjjjjjjjjjjjjjjjjjjjjjj', 'kjhffffffffffffffffffff', 'bfahynzdtqvebfabfa', '2018-09-06 21:57:05', '', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sbit`
--

CREATE TABLE `sbit` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `sbit`
--

INSERT INTO `sbit` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 2),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `shmn`
--

CREATE TABLE `shmn` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `shmn`
--

INSERT INTO `shmn` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `sprts`
--

CREATE TABLE `sprts` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `sprts`
--

INSERT INTO `sprts` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'laurobeleche', '', 0),
(2, 'ecostakepool', '', 0),
(3, 'febre', '', 390564.35),
(4, 'lub93796@awsoo.com', '', 10000),
(5, 'saito', '', 10000),
(6, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tips`
--

CREATE TABLE `tips` (
  `id` int(11) NOT NULL,
  `de` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `para` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `moeda` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `qnt` double NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Fazendo dump de dados para tabela `tips`
--

INSERT INTO `tips` (`id`, `de`, `para`, `moeda`, `qnt`, `date`) VALUES
(1, 'laurobeleche', '123456', 'mic3', 1, '2018-09-05 19:45:22'),
(2, 'febre', 'Top1', 'peng', 500, '2018-09-06 00:29:56'),
(3, 'laurobeleche', 'febre', 'mic3', 1, '2018-09-06 01:04:37'),
(4, 'laurobeleche', 'febre', 'mic3', 1, '2018-09-06 01:09:05'),
(5, 'febre', 'laurobeleche', 'mic3', 1, '2018-09-06 01:22:38'),
(6, 'febre', 'laurobeleche', 'mic3', 1, '2018-09-06 01:39:55'),
(7, 'febre', 'laurobeleche', 'peng', 1, '2018-09-06 01:42:10'),
(8, 'laurobeleche', 'febre', 'mic3', 1, '2018-09-06 01:54:20'),
(9, 'laurobeleche', 'febre', 'peng', 1, '2018-09-06 01:54:34'),
(10, 'febre', 'laurobeleche', 'peng', 1, '2018-09-06 02:08:50'),
(11, 'laurobeleche', 'febre', 'mutx', 1, '2018-09-06 02:16:29'),
(12, 'febre', 'Top1', 'dvrs', 1, '2018-09-06 12:59:51'),
(13, 'febre', 'Top1', 'eddie', 1, '2018-09-06 13:00:13'),
(14, 'febre', 'Top1', 'html', 1, '2018-09-06 13:04:31'),
(15, 'febre', 'Top1', 'egamex', 1, '2018-09-06 13:06:21'),
(16, 'febre', 'Top1', 'mic3', 1, '2018-09-06 13:07:07'),
(17, 'febre', 'Top1', 'sprts', 1, '2018-09-06 13:07:26'),
(18, 'febre', 'Top1', 'sbit', 1, '2018-09-06 13:08:08'),
(19, 'febre', 'Top1', 'vulc', 1, '2018-09-06 13:08:15'),
(20, 'febre', 'Top1', 'pcn', 1, '2018-09-06 13:09:00'),
(21, 'febre', 'Top1', 'varius', 1, '2018-09-06 13:09:09'),
(22, 'febre', 'Top1', 'apr', 1, '2018-09-06 13:13:36'),
(23, 'febre', 'Top1', 'clc', 1, '2018-09-06 13:13:45'),
(24, 'febre', 'Top1', 'dev', 1, '2018-09-06 13:13:51'),
(25, 'febre', 'Top1', 'lbrt', 1, '2018-09-06 13:14:05'),
(26, 'febre', 'Top1', 'monk', 1, '2018-09-06 13:14:15'),
(27, 'febre', 'Top1', 'mutx', 1, '2018-09-06 13:14:22'),
(28, 'febre', 'Top1', 'shmn', 1, '2018-09-06 13:14:43'),
(29, 'febre', 'Top1', 'women', 1, '2018-09-06 13:14:52'),
(30, 'febre', 'Top1', 'xp', 1, '2018-09-06 13:15:21'),
(31, 'febre', 'Top1', 'tnj', 1, '2018-09-06 13:15:30'),
(32, 'febre', 'Top1', 'arion', 1, '2018-09-06 13:24:14'),
(33, 'febre', 'Top1', 'btcc', 1, '2018-09-06 13:24:20'),
(34, 'febre', 'Top1', 'comp', 1, '2018-09-06 13:24:31'),
(35, 'febre', 'Top1', 'crw', 1, '2018-09-06 13:24:38'),
(36, 'febre', 'Top1', 'gpkr', 1, '2018-09-06 13:24:46'),
(37, 'febre', 'Top1', '$pac', 1, '2018-09-06 13:25:12'),
(38, 'febre', 'Top1', 'xgame', 1, '2018-09-06 13:25:35'),
(39, 'febre', 'Top1', 'peng', 1, '2018-09-06 13:27:04'),
(40, 'febre', 'Top1', 'pcn', -1, '2018-09-06 15:03:13'),
(41, 'febre', 'Top1', '$pac', 1, '2018-09-06 21:55:23'),
(42, 'Top1', 'febre', '$pac', 1, '2018-09-06 21:56:21'),
(43, '', 'febre', '808', 1, '2018-09-06 23:06:51'),
(44, '', 'febre', '808', 1, '2018-09-06 23:09:00'),
(45, 'laurobeleche', 'febre', '808', 1, '2018-09-06 23:12:52');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tnj`
--

CREATE TABLE `tnj` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `tnj`
--

INSERT INTO `tnj` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `adm` int(11) NOT NULL DEFAULT '0',
  `nome` varchar(32) NOT NULL,
  `senha` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `exibicao` varchar(64) NOT NULL,
  `mutualcoin` double NOT NULL,
  `buzzcoin` double NOT NULL,
  `hold` double NOT NULL,
  `hight` double NOT NULL,
  `monk` double NOT NULL,
  `kb3` double NOT NULL,
  `xgox` double NOT NULL,
  `aerm` double NOT NULL,
  `eddie` double NOT NULL,
  `discord` varchar(64) NOT NULL,
  `hashver` text NOT NULL,
  `ativacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `adm`, `nome`, `senha`, `email`, `exibicao`, `mutualcoin`, `buzzcoin`, `hold`, `hight`, `monk`, `kb3`, `xgox`, `aerm`, `eddie`, `discord`, `hashver`, `ativacao`) VALUES
(2, 0, 'lauroteste', '89e19d540e787db9b1bd027c1435caa7', 'lauroteste@gmail.com', 'lauro', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', 0),
(3, 1, 'laurobeleche', '0642f981282bdabdce14bf5fce1ea03a', 'laurobeleche@gmail.com', 'Lauro', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'f7fc37a843c7a69c868acc48969193411ba17fba', 1),
(4, 1, 'febre', '63ae2525d1009f3ff4ca8ed41ed87730', 'febredobitcoin@gmail.com', 'febre', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '540fe7ca84f96a6c0b02178f3b4310c152ea4c3d', 0),
(5, 1, 'FelicioX', '1257cf22b834224f8103b22d1626afc0', 'felicio_sx92@hotmail.com', 'Felicio S. Xavier', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '1f13b880d91153c08ab3878174248b1f72ba34a8', 0),
(6, 0, 'pqp26', 'bc61967e95dc1d8e1492ca3cb0e5bf1f', 'vagnerinfo@hotmail.com', 'vagner', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '95755446c77d885f026662e981380f4b7738c324', 0),
(7, 0, 'Wejudo', 'd68e1b2a3ea4ee5e7a8fa492f220ba48', 'wejudo@gmail.com', 'Wejudo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '88eeafb92e77a4672628f70787f0ceea8643116b', 1),
(8, 0, 'naldo100', 'd0238f2671525477d6cccab801b96f31', 'quintas.tributario@gmail.com', 'Naldo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'e2ae295ea94f5db9af0fcd0415175bb425178b99', 0),
(9, 0, 'patysgrj', 'e9e98119ebb74065d218caeeedb52b69', 'patysgrj@bol.com.br', 'paty', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'fb2a3a3d0460b47bcc1ff2091f2f440cf44c44c8', 0),
(10, 0, 'luisbang', '13445b2c88fb3781cd5cabcba9840bbe', 'yeong37@hotmail.com', 'luis#8029', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'ff1bbac8f5e5c6fb5744bee4860945a0ba044341', 0),
(11, 0, 'Fernando', 'fd198cb42c181ba19a3ded378627b589', '7fernandobrito@gmail.com', 'Fernando', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '80868878563911e62b1e7edd172144e0ab582d12', 1),
(12, 0, 'Elisiane', 'bd2a68f8444e5c58627ee1077ac1dc04', 'elisianepamela7@gmail.com', 'Eps', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '35a3359fe546ed57834ae14e8bcef0d1844cc6c0', 0),
(13, 0, 'Renatovenancio', 'f209e1b9693feba9e96f5b42d1e96162', 'Renato-venacio2012@hotmail.com', 'Renato venancio', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '3a901cd76ac27b1bfeaefd18de4637b0f0c6db6f', 0),
(14, 0, 'matheus0904', '7baadccfb5f568cf65b05b02b8e2ff0d', 'matheus0904@hotmail.com', 'Matheus de Almeida', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2026236facfb703d08eb4b4ebb090555fee9aa69', 0),
(15, 0, '390.santos', '0ea9769674c08a9652e95debf17f24a6', '390.santos@gmail.com', 'Stakeprohero', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'c8229bd65d763b6a62619f18e9fad6863641f837', 0),
(16, 0, 'Top1', 'e8120b4f280446ea8d18487dc0b80a74', 'fuuepoia@gmail.com', 'Top1', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '3c9974c792375e3bf3a72d1821acd594a673dd3a', 0),
(17, 0, 'luizgranjeiro', '2ca63e962fd489619d49ffba1aa9b28d', 'luizantonio79@yahoo.com.br', 'LUIZ GRANJEIRO', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '3bd087d0c772c3963f03693b34009b1117568a65', 0),
(18, 0, 'tulyorenan', '0d11244282b8d7147127de50f38ccf12', 'tulyorenan@gmail.com', 'tulyorenan', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b44c95204e607cf7313b4007fc866e69f0e0b348', 1),
(19, 0, 'sametklou123', 'c4455c69146e776edff29196093dc63a', 'samet.basturk@hotmail.com', 'sametklou', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '01daae8cd4d6447eae544ee69a554068d9700365', 0),
(20, 0, 'edsonmelo', 'da449d56ff35109508d686567f8a409b', 'edsonmelo1985@gmail.com', 'EdsonMelo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '63ffc8080c30c85976ce3f1e1acb7c9e43f334da', 1),
(21, 0, 'Geo', '7e0b553df795d3a20c2f54f8d79286ae', 'geoffrey.conrad@gmail.com', 'Geoffrey Conrad', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '36cc202730352b3de4a9f8fda52ade08e6144df6', 0),
(22, 0, 'bomfim', '9c11bd22f948511c09e211ebf97ba905', 'bomfim.rbbr@hotmail.com', 'bomfim', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '53a420056b329921303a3a04c124fd3a48c2ffbb', 1),
(23, 0, '123456', 'e10adc3949ba59abbe56e057f20f883e', 'gjx15689@nbzmr.com', 'usura uka uka', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '72e080cdf17585efe02f184e3403033b38239363', 1),
(24, 0, 'lub93796@awsoo.com', 'e472994745a31d5d88d357202a7f086b', 'lub93796@awsoo.com', 'Tresna', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '20da9fa8c42dc050d50ca9d7088d3dcfd71e1697', 0),
(25, 0, 'saito', '2bd5fbdf57a68c68f9b2587509762d07', 's.kengo.sk@gmail.com', 'saito', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '4913b3996912cc55476262f29c037fabbcc596e5', 1),
(26, 0, 'housing', 'd45ebc365b0441f5197a3ded47a12ccc', 'housing@vermine.nl', 'naam', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '67687b8fb574c59addfa1397e5698be93d4aee90', 0),
(27, 0, 'Anubis', '4ab636ef797bc61b117ab2c819c7cc37', 'webmaster@penguincoin.io', 'Anubis', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'f4ae4a2633b5369cb08ecbb6204c0330a19b4bf1', 0),
(28, 0, 'ramonsenna', '7d78ba360d35ef1e7df86879811c1d73', 'ramonsennabh@gmail.com', 'Ramon Ferreira Sena', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7f5bd419193c4da5b1d75d903a93f1129090096d', 1),
(29, 0, 'ali01', '1c17e23fead07939729f8681fd3c0d2d', 'alijayadi250@gmail.com', 'alijayadi01', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '1840e402b8ad253bb1f5913dc1972684bfee6ab1', 1),
(30, 0, 'Silviop4', '916828ba06fb5e2ab660c085b95d8764', 'silviop4@gmail.com', 'Silvio Pereira da Silva', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'd379ebc610f8365d86863240789a985a35459ad3', 0),
(31, 0, 'Gui', '8009d7636907b4f48715437154fe7060', 'gaapmafort@hotmail.com', 'Guilherme', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '540c484e9085b0b2a192b751c90f0bf924a909f8', 0),
(32, 0, 'viverdebtc', 'e4f9739b0c60000c7fe21366dfdac434', 'viverdebtc@gmail.com', 'viverdebtc', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'e7481751f31412c6ce2c210c9e3a1e54ed8daba3', 1),
(33, 0, 'joseirineu', '4325c5309b8e6591cb69ef597acfdf79', 'mendesholandaj@gmail.com', 'jose irineu mendes holanda', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '6ce2525849a554c9e91dcc28f2db82cbd436b0dc', 1),
(34, 0, 'Posminer', '80c8902aebba64bbdbc48713f2acff21', 'newmysms@gmail.com', 'Leonardo S', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'd6a5c066e80ca4199f26b98ea3887ddc5e8bb71e', 1),
(35, 0, 'joaocffjr', '10aca19536c8f5f5cbd12e02710c045f', 'joao_cffjr@hotmail.com', 'joaocffjr', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'baf587f1aed18ba4d7951cf1491541c4db13a2b2', 0),
(36, 0, 'rodnasci', 'be2994f146b0e61c58253b355ba40110', 'rodrigoblog10@gmail.com', 'Rodrigo Faria', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '13da88109c5256202cf708872e3566b477eb78db', 1),
(37, 0, 'Georgeo', '07fa28f2708354f575d84e68e93d11e4', 'georgeo.ribeiro@hotmail.com', 'Georgeo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '9ee7d8d0dcce94e43b44d721eda00f894e453561', 0),
(38, 0, 'Ednho', '3884bb5939db177f5ea93ca922c8e5ff', 'edsonshigeeda@gmail.com', 'ES', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '5d9c5890b014d4b84304456c0134f561a3480609', 1),
(39, 0, 'Jrchuvas', 'aef427c90c0d8ce9cb928935626eb526', 'jr.chuvas@gmail.com', 'Jr.chuvas', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '041f8f73e9d3f85ea378bdffe5a191060b9d1897', 1),
(40, 0, 'soldado100', 'c09d76cf27bcd120d7197875c7f3a689', 'jhonatanddt@gmail.com', 'jhonatan', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'e10fe5bb4e61deb166f5fbc5abf59180e7cb9979', 0),
(41, 0, 'gutogn', 'a3cd78db7351dbc10bfa4908cc181223', 'gutogn@gmail.com', 'Gustavo Gonçalves', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'afae2bf1ec95418ac8a58c072f93b7037476b82e', 1),
(42, 0, 'reidagambiarra', '6797f82f504379e72c59879b12594d39', 'reidagambiarra@gmail.com', 'reidagambiarra', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '487b77b2783aefc3771452307fda270d16688eca', 0),
(43, 0, 'joaquimlopes', '04e98745b108597a36df58a2cb37d126', 'joaquimlopes.email@gmail.com', 'joaquimlopes', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7898a60c4365a2180ab2aeddc7fc6e2f11d46b1a', 1),
(44, 0, 'Kedjpa', 'f7bac261c4e802b25f1f86a3fe926e44', 'Viniciusbcanonico@gmail.com', 'Kmdslr', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b731493d62048760738e2f3b41dbba3805806027', 0),
(45, 0, 'ysakreis ', '31b4857c988cb60ead23c89fe2f32992', 'ysakreis@gmail.com', 'Isac Evangelista dos Reis', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '043d4aa04a302df5fe77e18fcee782a751744be3', 0),
(46, 0, 'virtugrana', '3eec1281ac020030efb5693ab91d3178', 'virtugrana@hotmail.com', 'virtugrana', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '6e3dc898278c59ae4d069cb7b007fc38481b82a7', 0),
(47, 0, 'rgxnpx', '4feaa23446fd2063817d57776f234cf3', 'rgxnpx@gmail.com', 'rgxnpx', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '3f38a62c6882c2fe77d2066b5472c4b75b68c144', 0),
(48, 0, 'Therock2309', 'f26b5523cece58b58b70faaefa17bb50', 'therock2309@hotmail.com', 'MIRANDA', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'f14c4267f5e2d2fb8ae2197f2e2fdcdb0e9c734c', 0),
(49, 0, 'dogman', '497791490cdd68825ef5a6ebd8b5c9e0', 'spectrecoin2016@gmail.com', 'dogman', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '985268a5bef2c474b776b3022c9f782245999b58', 1),
(50, 0, 'lual', '82bab2a316a0c5afc0ad6ec3d64a8b43', 'luanalucius@gmail.com', 'Luana Lucios ', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'a38493b4afc44877bc282f8adfac0663ca69478f', 0),
(51, 0, 'adrianoplay182', '3ea52640859cdeea32e8cd89fedaf0a7', 'adrianosouza182@live.com', 'adrianoplay182', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '6757515f3d73bc61c3d84b294735f897eb4829dc', 1),
(52, 0, 'luizandre58', '110a2d34f1bea8475e23232568da626f', 'andrebotafogo58@gmail.com', 'Luiz André gomes', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7045b72233a25a6818b0b29e8d0910b8266122e8', 1),
(53, 0, 'Nyel', '4ce5d4c4ce151e104bddb817535717af', 'nyedsonnyel@gmail.com', 'Nyedson', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'c098691a245979a1efe126720d6ca48072b889a6', 1),
(54, 0, 'vagneraraujo', 'a209fed02bdb3bc1950d807199013e5d', 'vagnersa2000@hotmail.com', 'Vagner Araujo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '01ca5bb969ca26caf1332942be9d3827c40528eb', 0),
(55, 0, 'carlosbrum', '04bf4f82befc0a20c86198f45fc28889', 'carlosbrum@email.com', 'Carlos Brum', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '2bf2cee8346770b1b7568c7ca49f2e446b455df9', 1),
(56, 0, 'Akino600', 'e95f3155231e294683c6cb32d9fee4b4', 'doug_ha@hotmail.com', 'Consultor Bitcoin', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '5f77c16c05e7a2c536a8061c821abc525cae1d6c', 1),
(57, 0, 'Accy Nery Neto', '23efbdcf13ed3aa3b2649ce625070aa6', 'accy0717@gmail.com', 'Accy Mery Neto', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'aeca28ca5a02dd3bbdb300b5a5c93c9ba962fb89', 0),
(58, 0, 'valterdr', '40180f520a7d8086c791d5afffd38dea', 'valter.dias@me.com', 'Valter Dias Ribeiro', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7488f5217b33bf50f97b3fe34d1d974c96e836af', 1),
(59, 0, 'freitasjones ', '2379d93fb034e032a1df1f8927ed4cce', 'jeffersonribeiro7@hotmail.com', 'Jefferson Freitas', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'c547502ff5b6d47405cabb172ad73a92100c57b1', 0),
(60, 0, 'dinheirofree', 'd8e4e4b3d2a51e5ba9bfd0e5b812fdca', 'misplayersp@gmail.com', 'dinheirofree', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'd6329dcfb93db99a3185a38f82e9a9f97c0c2eab', 1),
(61, 0, 'rsbit29', 'd9316cf2eb775a2a9c829799bcf6e98f', 'rsbit29@gmail.com', 'Rsbit29', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b62d53cce6d577f81d971831760434a3c15d5162', 1),
(62, 0, 'gilvanclayton', 'aa4729d44df9b8d6cde59a4ac5af6962', 'gilvanclayton@hotmail.com', 'gilvan', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'ea0bcc58392d32cc0fe54e48c28efdc36c7809b5', 1),
(63, 0, 'Marcos Fontenele', '713141447b5cad9de1f931f8747b5095', 'multiversoonline2017@gmail.com', 'Marcos Fontenele', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'f43ab219e1e19c245b303202c275f702676a8b88', 0),
(64, 0, 'alvaroyellow', 'bfb3206155832047330e55a331d6734e', 'alvaroyellow@hotmail.com', 'alvaroyellow', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '80216422d61696881b93778708f3caa12501de66', 0),
(65, 0, 'Duka', '4a50141180b305b519012e2ff706c8a0', 'duk7br@gmail.com', 'DukaSilva', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b5a54c7d900e3fb54c644a7f9470f23e13b56d84', 1),
(66, 0, 'Alisson97', 'd3955fb7de6b72e5d96a405e2095558c', 'allissonlucas71@gmail.com', 'Alisson Santos', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '8f5942aaf43ce8595532da0379848e2f1631641b', 1),
(67, 0, 'josoec1989', '3340ea01040fd5ee2be33eb100ff8ced', 'josoegarcia@gmail.com', 'JOSOE CUSTODIO GARCIA', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '1a5de6b4fe8ff6444308847e6eb20a8f43916399', 0),
(68, 0, 'Jeunesse', '9862574cfadd061924fe9d108e376b0b', 'Boltservicos@hotmail.com', 'Diogoangra', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '26244e628d4a50c75c809f25681845eeea7c471d', 0),
(69, 0, 'pdseven', '287457b8b4b7b4e732e14dddb4b01e67', 'pdseven@outlook.com', 'Diego', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'ff813d295ff2e557086f504da0d37c3459d3992a', 1),
(70, 0, 'Wins', 'd0f4008117b906f5cff109153338924c', 'wins.droid@gmail.com', 'Wins', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '530450654c883a095d0519b132797579104873ca', 1),
(71, 0, 'maiconrbit', '898a1ba7baafb875c315749b53c1bb12', 'maiconrbit@gmail.com', 'maicon', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '1f66f6538b922f06586f285d59b4970b44468e5c', 1),
(72, 0, 'D3D3C0', 'd6f4e13623a89bc29ece8145077a0d18', 'andrefrancadasilva01@gmail.com', 'D3D3C0', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '5903db3a6f583e3fc068edcef6d2d790a00fab2c', 0),
(73, 0, 'WillLima', '3a0c65bd0d293ed93e387d2cb10d30b4', 'williansantos@msn.com', 'Will', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '26b6baa30c5f2beccdab5c3dc6af0d8ca101362f', 1),
(74, 0, 'danielluby', '1130b764eb599293c32050a7ca64ada3', 'daniell1216@hotmail.com', 'Danielluby', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '444cde26183093606baca2062a72c41a9a628323', 0),
(75, 0, 'Tiberiu ', 'dab75772f4170e23c7fbe2d541ef2981', 'mitre.tiberiu@gmail.com', 'TiberiuM', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '94807a51b4b5e90bf94f24873b3053019dfac49d', 0),
(76, 0, 'kprell40', '08e2e3bc85bf13e3286458fe76e10e40', 'kprell26@gmail.com', 'Kevin', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'ba3af7a5bc4e97c0db124cbcd5f3cd2fd26eb70a', 0),
(77, 0, 'Duk7', '32166625eb0e3d39e87f1bfb4b08540e', 'amarildo_duka@hotmail.com', 'Dukabr', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '745b0c14de17787eaa42dbe1ef2268a201804cad', 1),
(78, 0, 'wagner1', '370d08b8f1700047d4ce93281d8c97eb', 'wagnerooliveira@gmail.com', 'wagner1', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '66a12f9d762a405c36f3b956830b250d46f9379a', 1),
(79, 0, 'cicerow', 'd87c92992c5fff0637b1c336c44999e0', 'cicerowarken@gmail.com', 'Cicero augusto de lima warken', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '7b97d84f0a306631861c915d56e941c97567b771', 1),
(80, 0, 'coincash', 'c62d929e7b7e7b6165923a5dfc60cb56', 'rodolfoideias@gmail.com', 'Rodolfo', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b8e494fd0b08acfa35564921c4d61e86c9465e62', 0),
(81, 0, 'adrianaarantes10', 'a45eae864ab4a9ad74d5bda43319fbf1', 'adriana.arantes05@hotmail.com', 'Adriana', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '858e693594319dba664882662a4bf5e0dd52cc77', 1),
(82, 0, 'MarceloxD', 'a9ed90b21172fc2caed45b145214b6bd', 'marcelomartinsgoncalves55@gmail.com', 'Marcelo Martins', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'a722fd0bc93107226426b741e776dba86ed2c507', 0),
(83, 0, 'Digao86', '897683241e203dec06e92e8329ba2b5e', 'Rspdigao86@gmail.com', 'Digao86', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '91dc2faa8994e6483045d233bd3956b0f4004af0', 0),
(84, 0, 'josemaramorim', '43d063b5fa593d86c16ad79a60cee2b7', 'amorimtrade@gmail.com', 'Amorim', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '5cb6e5454d354e08b21540026d3d7edcf86cab07', 0),
(85, 0, 'Douglas', '4ccef7e13611c849f778a6df248fd6f3', 'Douglaslucasdasilva8@gmail.com', 'Douglas', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '6b246d2206bf84ba3000a73d1c7d88905c6c9444', 0),
(86, 0, 'Felix', '4e435d4633a022d3950a0b443aa0ff9c', 'felicianodearaujo@gmail.com', 'Feliciano', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '661b761c2e2ec698b61c464bc86e336781835fa1', 0),
(87, 0, 'Westerley Campos', '1ddf211aeded067316521210b7139ceb', 'westdfcampos@gmail.com', 'westdfcampos', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '12bdbe7a0ad3f2d37080836359b4b10ca1fd2dc6', 0),
(88, 0, 'Hermano', '1fbe7696c2c74729a05d694e91126cfc', 'arinelson_hermano@hotmail.com', 'Register ', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '38d79a89580887d652155e137ba1f73187c9083d', 1),
(89, 0, 'edyjatuba', '2ee85defb19c4615dc8f65a093f6aa73', 'edyjatuba@gmail.com', 'Edgar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '95af71975025d155fd730ce328a373b1b419d050', 0),
(90, 0, 'ditrox20', 'b904f7d1957a6ae2361d6a84f581b3ea', 'ditrox20@gmail.com', 'Ditrox', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'eb8299ecf55b68c2144262c83202ee6e25c27592', 1),
(91, 0, 'cashdtime', 'bb88f291f24c3ec3244a7d51c99767fb', 'cashdtime@gmail.com', 'abdulnaeem akhtar', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '85e1966fe3a06f81e4e57bc542203ae62b6458b7', 1),
(92, 0, 'mtezini', '55004b1d53966cb339c1459c399398f7', 'mtezini@gmail.com', 'Marcelo Vaccari', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'b0871c85d37d999cde74aeefc67c9e6acd591af5', 0),
(93, 0, 'teste2020', '25d55ad283aa400af464c76d713c07ad', 'ugresyxd.0ve@20mail.it', 'teste', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'cbfdf23df743376eaf0bbbfe6e6499d1397c7bbe', 0),
(94, 0, 'valterdr2', '40180f520a7d8086c791d5afffd38dea', 'valter.dias@gmail.com', 'Valter Ribeiro', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'd008e7c87a9ba7d72cb58220c7118e9be6bf20a6', 0),
(95, 0, 'valter77', 'bae05d07c856a02d3f26f8bd54b40795', 'valter570@gmail.com', 'Valter', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '1556eb6357a9e6d4f75dab39829cc7a9aa470107', 1),
(96, 0, 'alohaohanablue', '00651d67e3e67f55e9a4621527409499', 'cindyclaire1820@icloud.com', 'alohaohanablue', 0, 0, 0, 0, 0, 0, 0, 0, 0, '', 'efceb196df9cda0e1a69fa3d8a4af399f93c7534', 1);

-- --------------------------------------------------------

--
-- Estrutura para tabela `varius`
--

CREATE TABLE `varius` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `varius`
--

INSERT INTO `varius` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 2),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `vulc`
--

CREATE TABLE `vulc` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `vulc`
--

INSERT INTO `vulc` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 6),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `women`
--

CREATE TABLE `women` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `women`
--

INSERT INTO `women` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `xgame`
--

CREATE TABLE `xgame` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `xgame`
--

INSERT INTO `xgame` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

-- --------------------------------------------------------

--
-- Estrutura para tabela `xp`
--

CREATE TABLE `xp` (
  `id` int(11) NOT NULL,
  `nome` varchar(64) NOT NULL,
  `coinvestidor` varchar(64) NOT NULL,
  `moedas` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Fazendo dump de dados para tabela `xp`
--

INSERT INTO `xp` (`id`, `nome`, `coinvestidor`, `moedas`) VALUES
(1, 'ecostakepool', '', 1),
(2, 'febre', '', 0),
(3, 'Top1', '', 0);

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `$pac`
--
ALTER TABLE `$pac`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `808`
--
ALTER TABLE `808`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `apr`
--
ALTER TABLE `apr`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `arion`
--
ALTER TABLE `arion`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `block_stakes`
--
ALTER TABLE `block_stakes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `btcc`
--
ALTER TABLE `btcc`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `car_dep`
--
ALTER TABLE `car_dep`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `ciclos`
--
ALTER TABLE `ciclos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `clc`
--
ALTER TABLE `clc`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `comp`
--
ALTER TABLE `comp`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `conf`
--
ALTER TABLE `conf`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cor_clientes`
--
ALTER TABLE `cor_clientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cor_fee`
--
ALTER TABLE `cor_fee`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `crw`
--
ALTER TABLE `crw`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `depositos`
--
ALTER TABLE `depositos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `dev`
--
ALTER TABLE `dev`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `dvrs`
--
ALTER TABLE `dvrs`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `eddie`
--
ALTER TABLE `eddie`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `egamex`
--
ALTER TABLE `egamex`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `gpkr`
--
ALTER TABLE `gpkr`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `html`
--
ALTER TABLE `html`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `lbrt`
--
ALTER TABLE `lbrt`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `mic3`
--
ALTER TABLE `mic3`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `monk`
--
ALTER TABLE `monk`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `mutx`
--
ALTER TABLE `mutx`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pcn`
--
ALTER TABLE `pcn`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `peng`
--
ALTER TABLE `peng`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `saques`
--
ALTER TABLE `saques`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sbit`
--
ALTER TABLE `sbit`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `shmn`
--
ALTER TABLE `shmn`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `sprts`
--
ALTER TABLE `sprts`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tips`
--
ALTER TABLE `tips`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `tnj`
--
ALTER TABLE `tnj`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `varius`
--
ALTER TABLE `varius`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `vulc`
--
ALTER TABLE `vulc`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `women`
--
ALTER TABLE `women`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `xgame`
--
ALTER TABLE `xgame`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `xp`
--
ALTER TABLE `xp`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `$pac`
--
ALTER TABLE `$pac`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `808`
--
ALTER TABLE `808`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `apr`
--
ALTER TABLE `apr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `arion`
--
ALTER TABLE `arion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `block_stakes`
--
ALTER TABLE `block_stakes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de tabela `btcc`
--
ALTER TABLE `btcc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `car_dep`
--
ALTER TABLE `car_dep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT de tabela `ciclos`
--
ALTER TABLE `ciclos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `clc`
--
ALTER TABLE `clc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `comp`
--
ALTER TABLE `comp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `conf`
--
ALTER TABLE `conf`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `cor_clientes`
--
ALTER TABLE `cor_clientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `cor_fee`
--
ALTER TABLE `cor_fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `crw`
--
ALTER TABLE `crw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `depositos`
--
ALTER TABLE `depositos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de tabela `dev`
--
ALTER TABLE `dev`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `dvrs`
--
ALTER TABLE `dvrs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `eddie`
--
ALTER TABLE `eddie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `egamex`
--
ALTER TABLE `egamex`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `gpkr`
--
ALTER TABLE `gpkr`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `html`
--
ALTER TABLE `html`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `lbrt`
--
ALTER TABLE `lbrt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `mic3`
--
ALTER TABLE `mic3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `monk`
--
ALTER TABLE `monk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `mutx`
--
ALTER TABLE `mutx`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pcn`
--
ALTER TABLE `pcn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `peng`
--
ALTER TABLE `peng`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `saques`
--
ALTER TABLE `saques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT de tabela `sbit`
--
ALTER TABLE `sbit`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `shmn`
--
ALTER TABLE `shmn`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `sprts`
--
ALTER TABLE `sprts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de tabela `tips`
--
ALTER TABLE `tips`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT de tabela `tnj`
--
ALTER TABLE `tnj`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT de tabela `varius`
--
ALTER TABLE `varius`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `vulc`
--
ALTER TABLE `vulc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `women`
--
ALTER TABLE `women`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `xgame`
--
ALTER TABLE `xgame`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `xp`
--
ALTER TABLE `xp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
