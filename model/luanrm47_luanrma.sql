-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jun-2020 às 20:45
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `luanrm47_luanrma`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `contato`
--

CREATE TABLE `contato` (
  `ID_Contato` int(11) NOT NULL,
  `CONTATO_NOME` varchar(254) NOT NULL,
  `CONTATO_EMAIL` varchar(254) NOT NULL,
  `CONTATO_COMENTARIO` tinytext DEFAULT NULL,
  `DT_CRIACAO` datetime DEFAULT current_timestamp(),
  `DT_MODIFICACAO` datetime DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `contato`
--

INSERT INTO `contato` (`ID_Contato`, `CONTATO_NOME`, `CONTATO_EMAIL`, `CONTATO_COMENTARIO`, `DT_CRIACAO`, `DT_MODIFICACAO`) VALUES
(1, 'Luan', 'reginaldo@hotmail.com', 'teste', '2020-06-30 15:14:28', '2020-06-30 15:14:28'),
(2, 'teste', 'teste@teste.com', 'testete', '2020-06-30 15:14:55', '2020-06-30 15:14:55'),
(3, 'Reginaldo', 'pedro@hotmail.com', 'tetetete', '2020-06-30 15:15:32', '2020-06-30 15:15:32'),
(4, 'Reginaldo', 'pedro@hotmail.com', '5646464', '2020-06-30 15:17:20', '2020-06-30 15:17:20'),
(5, 'teste', 'pedro@hotmail.com', '535', '2020-06-30 15:17:30', '2020-06-30 15:17:30'),
(6, 'fred', 'reginaldo@hotmail.com', 'ewrtrgerge', '2020-06-30 15:17:39', '2020-06-30 15:17:39'),
(7, 'Reginaldo', 'reginaldo@hotmail.com', 'teste', '2020-06-30 15:25:31', '2020-06-30 15:25:31'),
(8, 'Luan', 'reginaldo@hotmail.com', 'teste', '2020-06-30 15:42:36', '2020-06-30 15:42:36');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `contato`
--
ALTER TABLE `contato`
  ADD PRIMARY KEY (`ID_Contato`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `contato`
--
ALTER TABLE `contato`
  MODIFY `ID_Contato` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
