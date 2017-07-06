
/*
SQLyog Ultimate v11.11 (32 bit)
MySQL - 5.5.5-10.1.21-MariaDB : Database - abogados
*********************************************************************
*/


/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`abogados` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `abogados`;

/*Table structure for table `abogado` */

DROP TABLE IF EXISTS `abogado`;

CREATE TABLE `abogado` (
  `id_abogado` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(25) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `fecha_contratacion` date NOT NULL,
  `especialidad` enum('Civil','Familia','Penalista','') NOT NULL,
  `valor_hora` int(11) NOT NULL,
  PRIMARY KEY (`id_abogado`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `abogado` */

insert  into `abogado`(`id_abogado`,`rut`,`nombre`,`apellido`,`fecha_contratacion`,`especialidad`,`valor_hora`) values (1,'15420763','Elvira','Vial','2016-06-07','Civil',10000),(2,'14230720','Cesar','Vargas','2016-08-09','Familia',15000);

/*Table structure for table `atencion` */

DROP TABLE IF EXISTS `atencion`;

CREATE TABLE `atencion` (
  `id_atencion` int(11) NOT NULL AUTO_INCREMENT,
  `fecha_hora` datetime NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_abogado` int(11) NOT NULL,
  `estado` enum('Agendada','Confirmada','Anulada','Perdida','Realizada') NOT NULL,
  PRIMARY KEY (`id_atencion`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `atencion` */

insert  into `atencion`(`id_atencion`,`fecha_hora`,`id_cliente`,`id_abogado`,`estado`) values (1,'2017-06-30 09:30:00',5,2,'Confirmada'),(2,'2017-07-05 11:00:00',6,1,'Agendada');

/*Table structure for table `usuario` */

DROP TABLE IF EXISTS `usuario`;

CREATE TABLE `usuario` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rut` varchar(55) NOT NULL,
  `nombre` varchar(55) NOT NULL,
  `apellido` varchar(55) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `telefonos` varchar(255) NOT NULL,
  `fecha_creacion` date NOT NULL,
  `tipo_persona` enum('NATURAL','JURIDICA') NOT NULL,
  `rol` enum('CLIENTE','GERENTE','ADMINISTRADOR','SECRETARIA') NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `usuario` */

insert  into `usuario`(`id`,`rut`,`nombre`,`apellido`,`direccion`,`telefonos`,`fecha_creacion`,`tipo_persona`,`rol`,`password`) values (5,'17399099','Pedro','fuenzalida','antonio varas 666','5556874','2016-10-20','NATURAL','CLIENTE','40bd001563085fc35165329ea1ff5c5ecbdbbeef'),(6,'89862200','Impresiones Pepe','','Pedro de valdivia 1200','87895874','2017-06-07','JURIDICA','CLIENTE','40bd001563085fc35165329ea1ff5c5ecbdbbeef'),(7,'15782658','pedro','sanchez','san camilo 747','8798579','2017-04-11','NATURAL','GERENTE','40bd001563085fc35165329ea1ff5c5ecbdbbeef'),(8,'9642875','Maria','Gutierrez','Psj. los daneses 785','4785478','2015-05-11','NATURAL','SECRETARIA','40bd001563085fc35165329ea1ff5c5ecbdbbeef'),(9,'13872548','Felipe','Valenzuela','Santa isabel 254','5787978','2016-10-04','NATURAL','ADMINISTRADOR','40bd001563085fc35165329ea1ff5c5ecbdbbeef');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;




insert  into `usuario`(`rut`,`nombre`,`apellido`,`direccion`,`telefonos`,`fecha_creacion`,`tipo_persona`,`rol`,`password`) values ('admin','admin','fuenzalida','antonio varas 666','5556874','2016-10-20','NATURAL','ADMINISTRADOR','40bd001563085fc35165329ea1ff5c5ecbdbbeef');

insert  into `usuario`(`rut`,`nombre`,`apellido`,`direccion`,`telefonos`,`fecha_creacion`,`tipo_persona`,`rol`,`password`) values ('cliente','cliente','fuenzalida','antonio varas 666','5556874','2016-10-20','NATURAL','CLIENTE','40bd001563085fc35165329ea1ff5c5ecbdbbeef');