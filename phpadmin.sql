/*
SQLyog Ultimate v8.82 
MySQL - 5.1.45-community : Database - phpadminpanel
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`phpadminpanel` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `phpadminpanel`;

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `your_name` varchar(26) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`your_name`,`email`,`message`) values ('kaushik ','kaushikmis77@gmail.com','        IM HERE'),('kaushik ','kaushikmis77@gmail.com','         YES I CAN'),('kaushik ','kaushikmis77@gmail.com','        message printing');

/*Table structure for table `register1` */

DROP TABLE IF EXISTS `register1`;

CREATE TABLE `register1` (
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `register1` */

insert  into `register1`(`first_name`,`last_name`,`Email`,`Password`) values ('Kaushal','Mishra','kaushal@gmail.com','1234546'),('Kaushik','Mishra','kaushik@gmail.com','142536'),('ram','kumar','ram@gmail.com','123456'),('william','sons','willom@gmail.com','123456');

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `role_as` tinyint(4) unsigned DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

/*Data for the table `users` */

insert  into `users`(`id`,`name`,`phone`,`email`,`password`,`role_as`,`created_at`) values (1,'kaushik','142536789','kaushikmis77@gmail.com','1020304',1,'2024-03-17 23:55:20'),(3,'gunguna','8596741230','gunguna@gmail.com','102030',0,'2024-03-19 23:39:50'),(5,'ram','54562653','jjbaker@gmail.com','000000',0,'2024-03-19 23:39:36'),(6,'kaushik','1425367890','atul@gmail.com','123456',0,'2024-03-19 23:39:40'),(7,'Ram Rahim','8874563216','ramrahim@gmail.com','123456',0,'2024-03-19 23:39:44'),(8,'jay','8596741236','jay@gmail.com','142536',1,'2024-03-19 23:39:59');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
