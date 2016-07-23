CREATE TABLE `tb_advogados` (
  `advogados_id` int(11) NOT NULL,
  `advogados_nome` varchar(100) NOT NULL,
  `advogados_oab` varchar(10) NOT NULL,
  `advogados_descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tb_area_atuacao` (
  `area_id` int(11) NOT NULL,
  `area_titulo` varchar(150) NOT NULL,
  `area_descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tb_contato` (
  `contato_id` int(11) NOT NULL,
  `contato_numerofixo` varchar(25) NOT NULL,
  `contato_numeromovel` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tb_redessociais` (
  `rede_id` int(11) NOT NULL,
  `rede_link` varchar(100) NOT NULL,
  `rede_username` varchar(50) NOT NULL,
  `rede_icone` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tb_sede_empresa` (
  `sede_id` int(11) NOT NULL,
  `sede_rua` varchar(255) NOT NULL,
  `sede_numero` int(5) NOT NULL,
  `sede_bairro` varchar(50) NOT NULL,
  `sede_complemento` varchar(25) NOT NULL,
  `sede_cep` int(10) NOT NULL,
  `sede_imagem` varchar(50) NOT NULL,
  `sede_mapa` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tb_sobre` (
  `sobre_id` int(11) NOT NULL,
  `sobre_titulo` varchar(50) NOT NULL,
  `sobre_descricao` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `tb_usuario` (
  `usuario_id` int(11) NOT NULL,
  `usuario_nome` varchar(150) NOT NULL,
  `usuario_login` varchar(255) NOT NULL,
  `usuario_senha` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `tb_advogados` ADD PRIMARY KEY (`advogados_id`);
ALTER TABLE `tb_area_atuacao` ADD PRIMARY KEY (`area_id`);
ALTER TABLE `tb_contato` ADD PRIMARY KEY (`contato_id`);
ALTER TABLE `tb_redessociais` ADD PRIMARY KEY (`rede_id`);
ALTER TABLE `tb_sede_empresa` ADD PRIMARY KEY (`sede_id`);
ALTER TABLE `tb_sobre` ADD PRIMARY KEY (`sobre_id`);
ALTER TABLE `tb_usuario` ADD PRIMARY KEY (`usuario_id`);

ALTER TABLE `tb_advogados` MODIFY `advogados_id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tb_area_atuacao` MODIFY `area_id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tb_contato` MODIFY `contato_id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tb_redessociais` MODIFY `rede_id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tb_sede_empresa` MODIFY `sede_id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tb_sobre` MODIFY `sobre_id` int(11) NOT NULL AUTO_INCREMENT;
ALTER TABLE `tb_usuario` MODIFY `usuario_id` int(11) NOT NULL AUTO_INCREMENT;
