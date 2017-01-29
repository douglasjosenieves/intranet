CREATE TABLE `asing_fichas_exclusivas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` varchar(45) DEFAULT NULL,
  `id_opcion` varchar(45) DEFAULT NULL,
  `categoria` varchar(45) DEFAULT NULL,
  `anulado` varchar(1) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=latin1;
