-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Set-2018 às 14:51
-- Versão do servidor: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `corkexpress`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `admin`
--

CREATE TABLE `admin` (
  `idadmin` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `tipouser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `mes`
--

CREATE TABLE `mes` (
  `id_mes` int(11) NOT NULL,
  `numero_mes` int(11) NOT NULL,
  `mes` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `mes`
--

INSERT INTO `mes` (`id_mes`, `numero_mes`, `mes`) VALUES
(1, 1, 'Janeiro'),
(2, 2, 'Fevereiro'),
(3, 3, 'Março'),
(4, 4, 'Abril'),
(5, 5, 'Maio'),
(6, 6, 'Junho'),
(7, 7, 'Julho'),
(8, 8, 'Agosto'),
(9, 9, 'Setembro'),
(10, 10, 'Outubro'),
(11, 11, 'Novembro'),
(12, 12, 'Dezembro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacoes`
--

CREATE TABLE `notificacoes` (
  `idnotifics` int(11) NOT NULL,
  `assunto` text NOT NULL,
  `texto` text NOT NULL,
  `data` date NOT NULL,
  `estado` int(11) NOT NULL,
  `tipo_notifics` int(11) NOT NULL,
  `idremetente` int(11) NOT NULL,
  `iddestinatario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `salario`
--

CREATE TABLE `salario` (
  `idsalario` int(11) NOT NULL,
  `nif` int(9) NOT NULL,
  `ano` int(11) NOT NULL,
  `mes` int(11) NOT NULL,
  `dias` int(11) NOT NULL,
  `salariobruto` double NOT NULL,
  `salarioniss` double NOT NULL,
  `salarioirs` double NOT NULL,
  `salariofinal` double NOT NULL,
  `turno` varchar(40) NOT NULL,
  `tipo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `salario`
--

INSERT INTO `salario` (`idsalario`, `nif`, `ano`, `mes`, `dias`, `salariobruto`, `salarioniss`, `salarioirs`, `salariofinal`, `turno`, `tipo`) VALUES
(1, 2147483647, 2018, 4, 22, 321, 35.31, 25.68, 260.01, 'Noite', 'Mensal'),
(3, 2147483647, 2018, 7, 22, 23, 2.53, 1.84, 19.1889, 'Noite', 'Mensal'),
(4, 2147483647, 2018, 11, 22, 120, 13.2, 9.6, 97.2, 'Noite', 'Natal');

-- --------------------------------------------------------

--
-- Estrutura da tabela `trabalhadores`
--

CREATE TABLE `trabalhadores` (
  `idtrabalhador` int(40) NOT NULL,
  `nome` varchar(20) NOT NULL,
  `apelido` varchar(20) NOT NULL,
  `nif` int(9) NOT NULL,
  `nib` int(9) NOT NULL,
  `niss` int(12) NOT NULL,
  `categoria` varchar(30) NOT NULL,
  `morada` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `tipouser` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `trabalhadores`
--

INSERT INTO `trabalhadores` (`idtrabalhador`, `nome`, `apelido`, `nif`, `nib`, `niss`, `categoria`, `morada`, `email`, `password`, `username`, `tipouser`) VALUES
(1, 'Hugo', 'Mendes', 123456789, 321654987, 258741369, 'Administrador', 'Rua Mendes', 'hencanacao@pp.oo', '1234', 'hugo', 1),
(2, 'goncalo', 'lavrador', 2147483647, 31231231, 312312331, 'Finanças', 'ytuytuytuyt', 'ads@gmail.com', 'lavrador', 'goncalo', 0),
(3, 'Maria', 'Albertina', 214743647, 13213213, 132123121, 'Operador', 'asdas', 'dasd@fds.com', 'ewe', 'mari', 0),
(22, 'maria', 'dsadas', 3123, 1321, 312, 'Finanças', 'adsasd', 'ads@gmail.com', 'asda', 'asd', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idadmin`);

--
-- Indexes for table `mes`
--
ALTER TABLE `mes`
  ADD PRIMARY KEY (`id_mes`);

--
-- Indexes for table `notificacoes`
--
ALTER TABLE `notificacoes`
  ADD PRIMARY KEY (`idnotifics`);

--
-- Indexes for table `salario`
--
ALTER TABLE `salario`
  ADD PRIMARY KEY (`idsalario`);

--
-- Indexes for table `trabalhadores`
--
ALTER TABLE `trabalhadores`
  ADD PRIMARY KEY (`idtrabalhador`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idadmin` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mes`
--
ALTER TABLE `mes`
  MODIFY `id_mes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notificacoes`
--
ALTER TABLE `notificacoes`
  MODIFY `idnotifics` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `salario`
--
ALTER TABLE `salario`
  MODIFY `idsalario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `trabalhadores`
--
ALTER TABLE `trabalhadores`
  MODIFY `idtrabalhador` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
