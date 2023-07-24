-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 21, 2019 at 11:18 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `avaliacao`
--

-- --------------------------------------------------------

--
-- Table structure for table `alunocurso`
--

CREATE TABLE IF NOT EXISTS `alunocurso` (
  `alucurid` int(11) NOT NULL AUTO_INCREMENT,
  `modid` int(11) NOT NULL,
  `aluid` int(11) NOT NULL,
  PRIMARY KEY (`alucurid`),
  KEY `modid` (`modid`,`aluid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `alunocurso`
--

INSERT INTO `alunocurso` (`alucurid`, `modid`, `aluid`) VALUES
(3, 11, 1),
(2, 22, 1);

-- --------------------------------------------------------

--
-- Table structure for table `alunos`
--

CREATE TABLE IF NOT EXISTS `alunos` (
  `aluid` int(11) NOT NULL AUTO_INCREMENT,
  `alunome` varchar(150) NOT NULL,
  `aluemail` varchar(200) NOT NULL,
  `alusenha` varchar(100) NOT NULL,
  `alurecupera` int(11) NOT NULL,
  `aluativo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`aluid`),
  KEY `procurid` (`aluativo`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=98 ;

--
-- Dumping data for table `alunos`
--

INSERT INTO `alunos` (`aluid`, `alunome`, `aluemail`, `alusenha`, `alurecupera`, `aluativo`) VALUES
(1, 'administrador', 'ricardo.zanata@etec.sp.gov.br', 'e10adc3949ba59abbe56e057f20f883e', 811201811, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `curid` int(11) NOT NULL AUTO_INCREMENT,
  `curnome` varchar(150) NOT NULL,
  `curativo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`curid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `cursos`
--

INSERT INTO `cursos` (`curid`, `curnome`, `curativo`) VALUES
(1, 'Téc. Desenv. de Sistemas', 1),
(2, 'ETIM-Administração', 1),
(3, 'ETIM-Informática', 1),
(4, 'Téc. Administração', 1),
(5, 'Téc. Eletrônica', 1),
(6, 'Téc. Eletrotécnica', 1),
(7, 'Téc. Informática', 1),
(8, 'Ensino Médio', 1),
(9, 'ETIM-Desenv. de Sistemas', 1);

-- --------------------------------------------------------

--
-- Table structure for table `indicadores`
--

CREATE TABLE IF NOT EXISTS `indicadores` (
  `indid` int(11) NOT NULL AUTO_INCREMENT,
  `inddescricao` varchar(1024) NOT NULL,
  `indobservacao` varchar(1024) NOT NULL,
  `indativo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`indid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `indicadores`
--

INSERT INTO `indicadores` (`indid`, `inddescricao`, `indobservacao`, `indativo`) VALUES
(1, 'CRITÉRIOS DE AVALIAÇÃO', '', 1),
(2, 'METODOLOGIA DE ENSINO', '', 1),
(3, 'PLANEJAMENTO', '', 1),
(4, 'EQUIPE GESTORA', '', 1),
(5, 'AUTOAVALIAÇÃO', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `moduloseries`
--

CREATE TABLE IF NOT EXISTS `moduloseries` (
  `modid` int(11) NOT NULL AUTO_INCREMENT,
  `curid` int(11) NOT NULL,
  `moddescricao` varchar(50) NOT NULL,
  `modativo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`modid`),
  KEY `curid` (`curid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `moduloseries`
--

INSERT INTO `moduloseries` (`modid`, `curid`, `moddescricao`, `modativo`) VALUES
(1, 3, '1º ETIM INFO', 1),
(2, 3, '2º ETIM INFO', 1),
(3, 3, '3º ETIM INFO', 1),
(4, 9, '1º ETIM DS', 1),
(5, 9, '2º ETIM DS', 1),
(6, 9, '3º ETIM DS', 1),
(7, 2, '1º ETIM ADM', 1),
(8, 2, '2º ETIM ADM', 1),
(9, 2, '3º ETIM ADM', 1),
(10, 8, '1º EM', 1),
(11, 8, '2º EM', 1),
(12, 8, '3º EM', 1),
(13, 7, '1º INFO', 1),
(14, 7, '2º INFO', 1),
(15, 7, '3º INFO', 1),
(16, 1, '1º DS', 1),
(17, 1, '2º DS', 1),
(18, 1, '3º DS', 1),
(19, 4, '1º ADM', 1),
(20, 4, '2º ADM', 1),
(21, 4, '3º ADM', 1),
(22, 6, '1º ELETROTÉCNICA', 1),
(23, 6, '2º ELETROTÉCNICA', 1),
(24, 6, '3º ELETROTÉCNICA', 1),
(25, 6, '4º ELETROTÉCNICA', 1),
(26, 5, '1º ELETRÔNICA', 1),
(27, 5, '2º ELETRÔNICA', 1),
(28, 5, '3º ELETRÔNICA', 1),
(29, 5, '4º ELETRÔNICA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opcoes`
--

CREATE TABLE IF NOT EXISTS `opcoes` (
  `opcid` int(11) NOT NULL AUTO_INCREMENT,
  `opcdescricao` varchar(150) NOT NULL,
  `opativo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`opcid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `opcoes`
--

INSERT INTO `opcoes` (`opcid`, `opcdescricao`, `opativo`) VALUES
(1, 'I', 1),
(2, 'R', 1),
(3, 'B', 1),
(4, 'MB', 1),
(5, 'a', 1),
(6, 'b', 1),
(7, 'c', 1),
(8, 'd', 1),
(9, 'e', 1),
(10, 'f', 1),
(11, 'a1', 1),
(12, 'b1', 1),
(13, 'c1', 1),
(14, 'd1', 1),
(15, 'e1', 1),
(16, 'f1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `perguntas`
--

CREATE TABLE IF NOT EXISTS `perguntas` (
  `perid` int(11) NOT NULL AUTO_INCREMENT,
  `perdescricao` varchar(1024) NOT NULL,
  `indid` int(11) NOT NULL,
  `perativo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`perid`),
  KEY `indid` (`indid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `perguntas`
--

INSERT INTO `perguntas` (`perid`, `perdescricao`, `indid`, `perativo`) VALUES
(1, 'Seu professor discute os critérios das avaliações e analisa os resultados visando a melhoria contínua?', 1, 1),
(2, 'Elabora avaliações compatíveis (coerentes) com o conteúdo desenvolvido?', 1, 1),
(3, 'Seu professor utiliza metodologia que motiva para a aprendizagem?', 2, 1),
(4, 'Realiza exemplos práticos de fácil entendimento pelos alunos?', 2, 1),
(5, 'Retoma algum conteúdo quando o aluno apresenta dúvidas?', 2, 1),
(6, 'Seu professor demonstra ter planejado a aula?', 3, 1),
(7, 'Apresenta os objetivos propostos para aquela aula ou período?', 3, 1),
(8, 'Você percebe que ele se interessa pelo andamento das rotinas, cumprindo horário e apresentando uma postura ética e profissional?', 3, 1),
(9, 'Diante disso, você considera que os gestores apresentam o comprometimento descrito acima?', 4, 1),
(10, 'Como discente, eu me comprometi com as atividades propostas: fui assíduo nas aulas, respeitei os horários de aula chegando e saindo nos horários previstos, dediquei-me aos exercícios, trabalho e avaliações propostos?', 5, 1),
(11, 'Muitas vezes, as aulas não são dadas conforme o planejamento do professor por falta de cooperação (bagunça) da sala de aula. Você tem comportamento adequado nas aulas?', 5, 1),
(12, 'Muitas vezes o aluno apresenta dificuldade, porém não tem um plano de estudos fora da sala aula e só estuda quando o professor solicita. Você tem iniciativa própria para ampliar seus conhecimentos?', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `professorcurso`
--

CREATE TABLE IF NOT EXISTS `professorcurso` (
  `procurid` int(11) NOT NULL AUTO_INCREMENT,
  `modid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  PRIMARY KEY (`procurid`),
  KEY `curid` (`proid`),
  KEY `modid` (`modid`),
  KEY `modid_2` (`modid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=105 ;

--
-- Dumping data for table `professorcurso`
--

INSERT INTO `professorcurso` (`procurid`, `modid`, `proid`) VALUES
(1, 19, 1),
(2, 19, 3),
(3, 19, 6),
(4, 19, 10),
(5, 19, 14),
(6, 20, 1),
(7, 20, 3),
(8, 20, 6),
(9, 20, 10),
(10, 20, 24),
(11, 27, 4),
(12, 27, 8),
(13, 27, 17),
(14, 27, 21),
(15, 27, 26),
(16, 22, 7),
(17, 22, 15),
(18, 22, 17),
(19, 22, 21),
(20, 22, 26),
(21, 24, 4),
(22, 24, 8),
(23, 24, 15),
(24, 24, 19),
(25, 25, 4),
(26, 25, 7),
(27, 25, 15),
(28, 25, 19),
(29, 25, 21),
(30, 25, 26),
(31, 9, 1),
(32, 9, 3),
(33, 9, 5),
(34, 9, 6),
(35, 9, 8),
(36, 9, 10),
(37, 9, 13),
(38, 9, 16),
(39, 9, 18),
(40, 9, 20),
(41, 9, 22),
(42, 9, 25),
(43, 9, 27),
(44, 2, 2),
(45, 2, 8),
(46, 2, 9),
(47, 2, 11),
(48, 2, 12),
(49, 2, 13),
(50, 2, 14),
(51, 2, 16),
(52, 2, 18),
(53, 2, 20),
(54, 2, 22),
(55, 2, 23),
(56, 2, 25),
(57, 2, 27),
(58, 10, 5),
(59, 10, 8),
(60, 10, 9),
(61, 10, 13),
(62, 10, 14),
(63, 10, 16),
(64, 10, 20),
(65, 10, 22),
(66, 10, 25),
(67, 10, 27),
(68, 11, 5),
(69, 11, 8),
(70, 11, 13),
(71, 11, 14),
(72, 11, 16),
(73, 11, 18),
(74, 11, 20),
(75, 11, 22),
(76, 11, 25),
(77, 11, 27),
(78, 12, 5),
(79, 12, 8),
(80, 12, 13),
(81, 12, 14),
(82, 12, 16),
(83, 12, 18),
(84, 12, 20),
(85, 12, 22),
(86, 12, 25),
(87, 12, 27),
(88, 18, 2),
(89, 18, 12),
(90, 18, 23),
(91, 4, 2),
(92, 4, 5),
(93, 4, 8),
(94, 4, 9),
(95, 4, 11),
(96, 4, 12),
(97, 4, 13),
(98, 4, 14),
(99, 4, 16),
(100, 4, 20),
(101, 4, 22),
(102, 4, 23),
(103, 4, 25),
(104, 4, 27);

-- --------------------------------------------------------

--
-- Table structure for table `professores`
--

CREATE TABLE IF NOT EXISTS `professores` (
  `proid` int(11) NOT NULL AUTO_INCREMENT,
  `pronome` varchar(150) NOT NULL,
  `proativo` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`proid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `professores`
--

INSERT INTO `professores` (`proid`, `pronome`, `proativo`) VALUES
(1, 'ALCIDES CORREA DE LIMA JUNIOR', 1),
(2, 'ALFREDO ALEXANDRE DE OLIVEIRA', 1),
(3, 'CARLOS FERNANDO CARRARA', 1),
(4, 'DANILO RAFAEL ALVIANO BERNARDES', 1),
(5, 'DIEGO FREITAS DO NASCIMENTO', 1),
(6, 'EDUARDO DE OLIVEIRA ROCHA', 1),
(7, 'FÁBIO ANGELO CORONA', 1),
(8, 'FERNANDA DE OLIVEIRA PEREIRA', 1),
(9, 'FRANCIELEN IRENE FERREIRA', 1),
(10, 'JAIRO GARCIA', 1),
(11, 'JESPER LUIS FERREIRA LIMA', 1),
(12, 'JOAO LUIS CHAGAS SANCHES', 1),
(13, 'JOSE VINICIUS ZAPTE BERGAMO', 1),
(14, 'LUCIANA DA COSTA RIBEIRO', 1),
(15, 'MARCIO CAETANO RODRIGUES', 1),
(16, 'MARIANNA DUARTE RODRIGUES', 1),
(17, 'MATHEUS PEREIRA VIEIRA', 1),
(18, 'MONICA LUCIA VELOSO PEREIRA', 1),
(19, 'PAULO AFONSO FERREIRA JUNIOR', 1),
(20, 'REGINA APARECIDA FERREIRA', 1),
(21, 'REINALDO AUGUSTO MELICIO', 1),
(22, 'RENAN AUGUSTO VIEIRA SILVA', 1),
(23, 'RICARDO DA SILVA ZANATA', 1),
(24, 'RODRIGO GEMENES', 1),
(25, 'THIAGO DUARTE DO VALLE', 1),
(26, 'THIAGO XAVIER DA SILVA PALMA', 1),
(27, 'TIAGO YAMAZAKI IZUMIDA ANDRADE', 1);

-- --------------------------------------------------------

--
-- Table structure for table `respostas`
--

CREATE TABLE IF NOT EXISTS `respostas` (
  `resid` int(11) NOT NULL AUTO_INCREMENT,
  `resano` int(11) NOT NULL,
  `aluid` int(11) NOT NULL,
  `modid` int(11) NOT NULL,
  `proid` int(11) NOT NULL,
  `perid` int(11) NOT NULL,
  `resnota` int(11) NOT NULL,
  PRIMARY KEY (`resid`),
  KEY `aluid` (`aluid`),
  KEY `modid` (`modid`),
  KEY `proid` (`proid`),
  KEY `perid` (`perid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuid` int(11) NOT NULL AUTO_INCREMENT,
  `usunome` varchar(150) NOT NULL,
  `usulogin` varchar(50) NOT NULL,
  `ususenha` varchar(50) NOT NULL,
  PRIMARY KEY (`usuid`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`usuid`, `usunome`, `usulogin`, `ususenha`) VALUES
(1, 'RICARDO DA SILVA ZANATA', 'zanata', '69a9e8468328fd925d0b0ad6a313ba52'),
(2, 'NATHALIA ALBANEZI', 'nathi', '7e8f2c69712fcabd2add8e655a0158c9');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `moduloseries`
--
ALTER TABLE `moduloseries`
  ADD CONSTRAINT `moduloseries_ibfk_1` FOREIGN KEY (`curid`) REFERENCES `cursos` (`curid`);

--
-- Constraints for table `perguntas`
--
ALTER TABLE `perguntas`
  ADD CONSTRAINT `perguntas_ibfk_1` FOREIGN KEY (`indid`) REFERENCES `indicadores` (`indid`);

--
-- Constraints for table `professorcurso`
--
ALTER TABLE `professorcurso`
  ADD CONSTRAINT `professorcurso_ibfk_1` FOREIGN KEY (`modid`) REFERENCES `moduloseries` (`modid`),
  ADD CONSTRAINT `professorcurso_ibfk_2` FOREIGN KEY (`proid`) REFERENCES `professores` (`proid`);

--
-- Constraints for table `respostas`
--
ALTER TABLE `respostas`
  ADD CONSTRAINT `respostas_ibfk_1` FOREIGN KEY (`perid`) REFERENCES `perguntas` (`perid`),
  ADD CONSTRAINT `respostas_ibfk_2` FOREIGN KEY (`proid`) REFERENCES `professores` (`proid`),
  ADD CONSTRAINT `respostas_ibfk_3` FOREIGN KEY (`modid`) REFERENCES `moduloseries` (`modid`),
  ADD CONSTRAINT `respostas_ibfk_4` FOREIGN KEY (`aluid`) REFERENCES `alunos` (`aluid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
