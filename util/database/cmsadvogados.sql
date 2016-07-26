-- phpMyAdmin SQL Dump
-- version 4.6.3deb1~xenial.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 25, 2016 at 09:49 PM
-- Server version: 5.7.13-0ubuntu0.16.04.2
-- PHP Version: 7.0.4-7ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmsadvogados`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_advogados`
--

CREATE TABLE `tb_advogados` (
  `advogados_id` int(11) NOT NULL,
  `advogados_nome` varchar(100) NOT NULL,
  `advogados_oab` varchar(10) NOT NULL,
  `advogados_descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_advogados`
--

INSERT INTO `tb_advogados` (`advogados_id`, `advogados_nome`, `advogados_oab`, `advogados_descricao`) VALUES
(6, 'Joao da silva', '222321-12', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.'),
(7, 'Joao da silva', '222321-12', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_area_atuacao`
--

CREATE TABLE `tb_area_atuacao` (
  `area_id` int(11) NOT NULL,
  `area_titulo` varchar(150) NOT NULL,
  `area_descricao` longtext NOT NULL,
  `categoria` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_area_atuacao`
--

INSERT INTO `tb_area_atuacao` (`area_id`, `area_titulo`, `area_descricao`, `categoria`) VALUES
(5, 'Area juridica', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', 'juridica'),
(6, 'Area juridica', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.', 'juridica');

-- --------------------------------------------------------

--
-- Table structure for table `tb_contato`
--

CREATE TABLE `tb_contato` (
  `contato_id` int(11) NOT NULL,
  `contato_numerofixo` varchar(25) NOT NULL,
  `contato_numeromovel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_contato`
--

INSERT INTO `tb_contato` (`contato_id`, `contato_numerofixo`, `contato_numeromovel`) VALUES
(1, '99887766', '99889988'),
(10, '99999999', '99999999'),
(11, '99999999', '99999999');

-- --------------------------------------------------------

--
-- Table structure for table `tb_redessociais`
--

CREATE TABLE `tb_redessociais` (
  `rede_id` int(11) NOT NULL,
  `rede_link` varchar(100) NOT NULL,
  `rede_username` varchar(50) NOT NULL,
  `rede_icone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_redessociais`
--

INSERT INTO `tb_redessociais` (`rede_id`, `rede_link`, `rede_username`, `rede_icone`) VALUES
(1, 'http://juliovmleo', 'facebook', 'face'),
(4, 'instagram.com.br', '@jOaoDaSilva', 'insta'),
(5, 'instagram.com.br', '@jOaoDaSilva', 'insta');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sede_empresa`
--

CREATE TABLE `tb_sede_empresa` (
  `sede_id` int(11) NOT NULL,
  `sede_rua` varchar(255) NOT NULL,
  `sede_numero` int(5) NOT NULL,
  `sede_bairro` varchar(50) NOT NULL,
  `sede_complemento` varchar(25) NOT NULL,
  `sede_cep` varchar(20) NOT NULL,
  `sede_imagem` varchar(50) NOT NULL,
  `sede_mapa` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sede_empresa`
--

INSERT INTO `tb_sede_empresa` (`sede_id`, `sede_rua`, `sede_numero`, `sede_bairro`, `sede_complemento`, `sede_cep`, `sede_imagem`, `sede_mapa`) VALUES
(10, 'maximiano machado', 221, 'centro', 'proximo ao hiper', '412101-12', 'escritorio.png', 'iframe do google maps'),
(11, 'maximiano machado', 221, 'centro', 'proximo ao hiper', '412101-12', 'escritorio.png', 'iframe do google maps');

-- --------------------------------------------------------

--
-- Table structure for table `tb_sobre`
--

CREATE TABLE `tb_sobre` (
  `sobre_id` int(11) NOT NULL,
  `sobre_titulo` varchar(50) NOT NULL,
  `sobre_descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_sobre`
--

INSERT INTO `tb_sobre` (`sobre_id`, `sobre_titulo`, `sobre_descricao`) VALUES
(16, 'Sobre nós', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.'),
(17, 'Sobre nós', 'Lorem Ipsum é simplesmente uma simulação de texto da indústria tipográfica e de impressos, e vem sendo utilizado desde o século XVI, quando um impressor desconhecido pegou uma bandeja de tipos e os embaralhou para fazer um livro de modelos de tipos. Lorem Ipsum sobreviveu não só a cinco séculos, como também ao salto para a editoração eletrônica, permanecendo essencialmente inalterado. Se popularizou na década de 60, quando a Letraset lançou decalques contendo passagens de Lorem Ipsum, e mais recentemente quando passou a ser integrado a softwares de editoração eletrônica como Aldus PageMaker.');

-- --------------------------------------------------------

--
-- Table structure for table `tb_usuario`
--

CREATE TABLE `tb_usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nome` varchar(150) NOT NULL,
  `usuario_login` varchar(255) NOT NULL,
  `usuario_senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_usuario`
--

INSERT INTO `tb_usuario` (`usuario_id`, `usuario_nome`, `usuario_login`, `usuario_senha`) VALUES
(7, 'julio', 'julio', 'julio');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_advogados`
--
ALTER TABLE `tb_advogados`
  ADD PRIMARY KEY (`advogados_id`);

--
-- Indexes for table `tb_area_atuacao`
--
ALTER TABLE `tb_area_atuacao`
  ADD PRIMARY KEY (`area_id`);

--
-- Indexes for table `tb_contato`
--
ALTER TABLE `tb_contato`
  ADD PRIMARY KEY (`contato_id`);

--
-- Indexes for table `tb_redessociais`
--
ALTER TABLE `tb_redessociais`
  ADD PRIMARY KEY (`rede_id`);

--
-- Indexes for table `tb_sede_empresa`
--
ALTER TABLE `tb_sede_empresa`
  ADD PRIMARY KEY (`sede_id`);

--
-- Indexes for table `tb_sobre`
--
ALTER TABLE `tb_sobre`
  ADD PRIMARY KEY (`sobre_id`);

--
-- Indexes for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  ADD PRIMARY KEY (`usuario_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_advogados`
--
ALTER TABLE `tb_advogados`
  MODIFY `advogados_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tb_area_atuacao`
--
ALTER TABLE `tb_area_atuacao`
  MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb_contato`
--
ALTER TABLE `tb_contato`
  MODIFY `contato_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_redessociais`
--
ALTER TABLE `tb_redessociais`
  MODIFY `rede_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb_sede_empresa`
--
ALTER TABLE `tb_sede_empresa`
  MODIFY `sede_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb_sobre`
--
ALTER TABLE `tb_sobre`
  MODIFY `sobre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `tb_usuario`
--
ALTER TABLE `tb_usuario`
  MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
