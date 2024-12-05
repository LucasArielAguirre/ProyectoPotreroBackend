-- MySQL dump 10.13  Distrib 8.0.40, for Win64 (x86_64)
--
-- Host: localhost    Database: proyecto_nike
-- ------------------------------------------------------
-- Server version	8.0.40

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `imagen` varchar(2083) NOT NULL,
  `descripcion` text NOT NULL,
  `cantidad` int NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `categoria` enum('hombre','mujer','niños','general') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'Nike Air Max 90 LV8','https://lucasarielaguirre.github.io/ProyectoPotreroLucasAguirre/public/img/producto3.webp','Zapatillas de Moda para Mujer',10,257000.00,'niños'),(2,'Air Jordan 1 Low OG','https://lucasarielaguirre.github.io/ProyectoPotreroLucasAguirre/public/img/producto2.webp','Zapatillas Jordan para Hombre',15,259999.00,'mujer'),(3,'Nike SB Dunk Low Pro','https://lucasarielaguirre.github.io/ProyectoPotreroLucasAguirre/public/img/producto4.webp','Zapatillas de Moda Unisex',10,209999.00,'hombre'),(4,'Nike Air Force 1 07','https://lucasarielaguirre.github.io/ProyectoPotreroLucasAguirre/public/img/producto6.webp','Zapatillas de Moda para Hombre',10,210000.00,'hombre'),(5,'Air Jordan 1 High 85','https://lucasarielaguirre.github.io/ProyectoPotreroLucasAguirre/public/img/Producto1.webp','Zapatillas Jordan para Hombre',15,380000.00,'hombre'),(6,'Nike Air Max 90 LV8','https://lucasarielaguirre.github.io/ProyectoPotreroLucasAguirre/public/img/producto3.webp','Zapatillas de Moda para Mujer',10,256999.00,'mujer'),(7,'Nike Air Force 1 07','https://lucasarielaguirre.github.io/ProyectoPotreroLucasAguirre/public/img/producto6.webp','Zapatillas de Moda para Hombre',10,200999.00,'hombre'),(8,'Air Jordan 1 High 85','https://lucasarielaguirre.github.io/ProyectoPotreroLucasAguirre/public/img/Producto1.webp','Zapatillas Jordan para Hombre',15,379999.00,'hombre'),(9,'Air Jordan 20','https://lucasarielaguirre.github.io/ProyectoPotreroLucasAguirre/public/img/producto2.webp','Zapatillas de Moda para Mujer',2,380000.00,'mujer');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-12-05 11:02:58
