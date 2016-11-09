/*
SQLyog Community v12.2.6 (64 bit)
MySQL - 5.7.12-0ubuntu1.1 : Database - pmms
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`pmms` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `pmms`;

/*Table structure for table `property` */

DROP TABLE IF EXISTS `property`;

CREATE TABLE `property` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `address_line_1` varchar(30) NOT NULL,
  `address_line_2` varchar(30) DEFAULT NULL,
  `postcode` varchar(9) NOT NULL,
  `town` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `configuration` json DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `property` */

insert  into `property`(`id`,`address_line_1`,`address_line_2`,`postcode`,`town`,`created_at`,`updated_at`,`configuration`) values 
(1,'10 Briers Avenue',NULL,'TN34 2NN','Hastings',NULL,NULL,NULL),
(2,'Flat 1, 1 Egerton Road',NULL,'TN39 3HH','Bexhill',NULL,NULL,NULL),
(3,'60 St Georges Road',NULL,'TN39 3EE','Hastings',NULL,NULL,NULL),
(4,'Flat 2, 1 Egerton Road','','TN393HH','Bexhill','2016-11-01 21:25:01','2016-11-01 21:25:01',NULL),
(5,'Test line 1','Test line 2','TE57 P00','Test Town','2016-11-01 22:25:21','2016-11-01 22:25:21',NULL);

/*Table structure for table `work_order` */

DROP TABLE IF EXISTS `work_order`;

CREATE TABLE `work_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `property_id_fk_property` (`property_id`),
  CONSTRAINT `property_id_fk_property` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `work_order` */

insert  into `work_order`(`id`,`property_id`,`created_at`,`updated_at`,`description`) values 
(1,1,NULL,NULL,'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis pulvinar quam et aliquet. Praesent finibus porttitor vehicula. Nulla vestibulum erat diam, a consequat turpis faucibus eu. Aliquam efficitur sollicitudin mattis. Vivamus sed dui in nunc tempor dapibus a vel dui. Maecenas pulvinar elit luctus enim tempor, nec ultrices dolor lobortis. Praesent facilisis ante et lorem tincidunt euismod. Cras lacinia, enim at tincidunt porttitor, dui dolor convallis neque, vel commodo ligula augue quis turpis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc tempus posuere commodo. Donec feugiat lacus sit amet viverra semper. Nam justo ante, pharetra ut mattis non, blandit non sapien. Suspendisse elit eros, rhoncus vel lectus nec, scelerisque ultrices sem. Cras efficitur eu lacus vitae vehicula.'),
(2,1,NULL,NULL,''),
(3,1,NULL,NULL,''),
(4,1,NULL,NULL,''),
(5,2,NULL,NULL,''),
(6,2,NULL,NULL,'');

/*Table structure for table `work_order_comment` */

DROP TABLE IF EXISTS `work_order_comment`;

CREATE TABLE `work_order_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_order_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `work_order_id` (`work_order_id`),
  CONSTRAINT `work_order_comment_ibfk_1` FOREIGN KEY (`work_order_id`) REFERENCES `work_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `work_order_comment` */

insert  into `work_order_comment`(`id`,`work_order_id`,`comment`,`created_at`,`updated_at`) values 
(2,1,'test 2','2016-11-07 21:36:15','2016-11-07 21:36:15');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
