DROP TABLE IF EXISTS `notas`;
CREATE TABLE IF NOT EXISTS `notas` (
  `folio` int NOT NULL AUTO_INCREMENT,
  `clave` int NOT NULL,
  `fecha` date NOT NULL,
  `num_ventas` int NOT NULL,
  `articulo` varchar(100) NOT NULL,
`temporada` varchar(100) NOT NULL,
    PRIMARY KEY (`folio`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;