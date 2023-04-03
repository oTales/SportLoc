-- MySQL Administrator dump 1.4
--
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.27-MariaDB


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


--
-- Create schema dblogin
--

CREATE DATABASE /*!32312 IF NOT EXISTS*/ dblogin;
USE dblogin;

--
-- Table structure for table `dblogin`.`lista`
--

DROP TABLE IF EXISTS `lista`;
CREATE TABLE `lista` (
  `idlista` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `idusuarios` int(10) unsigned NOT NULL DEFAULT 0,
  `nome` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`idlista`,`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dblogin`.`lista`
--

/*!40000 ALTER TABLE `lista` DISABLE KEYS */;
INSERT INTO `lista` (`idlista`,`idusuarios`,`nome`) VALUES 
 (2,6,'tarcisotca@gmail.com');
/*!40000 ALTER TABLE `lista` ENABLE KEYS */;


--
-- Table structure for table `dblogin`.`quadras`
--

DROP TABLE IF EXISTS `quadras`;
CREATE TABLE `quadras` (
  `idquadras` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) NOT NULL DEFAULT '',
  `Local` varchar(100) NOT NULL DEFAULT '',
  `quantidadePessoas` int(10) unsigned NOT NULL DEFAULT 0,
  `descricao` text NOT NULL DEFAULT '',
  PRIMARY KEY (`idquadras`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dblogin`.`quadras`
--

/*!40000 ALTER TABLE `quadras` DISABLE KEYS */;
INSERT INTO `quadras` (`idquadras`,`nome`,`Local`,`quantidadePessoas`,`descricao`) VALUES 
 (1,'senai','Governador Valadares',10,'321312eqweqw'),
 (2,'praca','Governador Valadares',11,'eqwewqeqweqw');
/*!40000 ALTER TABLE `quadras` ENABLE KEYS */;


--
-- Table structure for table `dblogin`.`usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios` (
  `idusuarios` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL DEFAULT '',
  `email` varchar(45) NOT NULL DEFAULT '',
  `senha` varchar(45) NOT NULL DEFAULT '',
  PRIMARY KEY (`idusuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dblogin`.`usuarios`
--

/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`idusuarios`,`nome`,`email`,`senha`) VALUES 
 (1,'tales','familiatmt@gmail.com','tales0107'),
 (2,'Lauany','lauany@gmail.com','01072004'),
 (3,'tales0707','talesirineu@gmail.com','12345'),
 (4,'chata','chata@gmail.com','12345'),
 (5,'Tales Irineu ','familiatmt@gmail.com','72311782178'),
 (6,'Tarciso','tarcisotca@gmail.com','12345'),
 (7,'tarciso','tarcisotca@gmail.com','12345');
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
