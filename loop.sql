
CREATE TABLE `produto` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `nome` varchar(20) CHARACTER SET utf8 NOT NULL,
  `troco_por` varchar(100) CHARACTER SET utf8 NOT NULL,
  `id_user` int(11) NOT NULL,
  `info` varchar(241) CHARACTER SET utf8 NOT NULL,
  `categoria` char(1) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

CREATE TABLE `usuario` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `username` varchar(20) CHARACTER SET utf8 NOT NULL,
  `senha` varchar(50) CHARACTER SET utf8 NOT NULL,
  `email` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `produto`
  ADD CONSTRAINT `produto_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `usuario` (`id_user`);