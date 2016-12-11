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

/*Table structure for table `account` */

DROP TABLE IF EXISTS `account`;

CREATE TABLE `account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `account` */

insert  into `account`(`id`,`name`,`created_at`,`updated_at`) values 
(1,'Ridge Property Maintenance',NULL,NULL),
(2,'Test Account',NULL,NULL);

/*Table structure for table `account_user` */

DROP TABLE IF EXISTS `account_user`;

CREATE TABLE `account_user` (
  `user_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  UNIQUE KEY `user_id` (`user_id`,`account_id`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `account_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `account_user_ibfk_2` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `account_user` */

/*Table structure for table `password_resets` */

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(50) NOT NULL,
  `token` text,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Data for the table `password_resets` */

/*Table structure for table `priority` */

DROP TABLE IF EXISTS `priority`;

CREATE TABLE `priority` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(15) NOT NULL,
  `days_to_complete` int(2) unsigned NOT NULL,
  `hours_to_complete` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

/*Data for the table `priority` */

insert  into `priority`(`id`,`name`,`days_to_complete`,`hours_to_complete`) values 
(1,'very low',14,0),
(2,'low',10,0),
(3,'medium',7,0),
(4,'high',4,0),
(5,'very high',2,0),
(6,'emergency',0,3);

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
  `account_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `account_id` (`account_id`),
  CONSTRAINT `property_ibfk_1` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

/*Data for the table `property` */

insert  into `property`(`id`,`address_line_1`,`address_line_2`,`postcode`,`town`,`created_at`,`updated_at`,`configuration`,`account_id`) values 
(1,'10 Briers Avenue','','TN34 2NN','Hastings',NULL,'2016-11-14 21:31:17',NULL,1),
(2,'Flat 1, 1 Egerton Road',NULL,'TN39 3HH','Bexhill',NULL,NULL,NULL,1),
(3,'60 St Georges Road',NULL,'TN39 3EE','Hastings',NULL,NULL,NULL,1),
(4,'Flat 2, 1 Egerton Road','','TN393HH','Bexhill','2016-11-01 21:25:01','2016-11-01 21:25:01',NULL,NULL),
(5,'53 Lower Cookham Rd.','','SL6 8JX','Maidenhead','2016-11-01 22:25:21','2016-11-14 21:43:22',NULL,NULL);

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(25) NOT NULL DEFAULT 'Not Set',
  `last_name` varchar(35) NOT NULL DEFAULT 'Not Set',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_name` varchar(25) NOT NULL DEFAULT 'Not Set',
  `email` varchar(50) NOT NULL,
  `password` text,
  `remember_token` varchar(100) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_name` (`user_name`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

/*Data for the table `user` */

insert  into `user`(`id`,`first_name`,`last_name`,`created_at`,`updated_at`,`user_name`,`email`,`password`,`remember_token`,`name`) values 
(1,'Daryoosh','Falak Rafat','2016-11-10 20:26:11','2016-11-10 20:26:11','dary','dary@me.com','$2y$10$c7ls6hFKNqyXgHDoart4HutCrhuBm/Sif/p3T8484ytOVMpnsWl0q',NULL,'first user'),
(2,'Not Set','Not Set','2016-11-23 22:06:02','2016-11-24 21:36:43','Not Set','dary.falak@googlemail.com','$2y$10$cC9.uart.CLdnKKOAEwhf.INwt148wQortXgpU/A0dntLrlJH73TC','h6JZYZjBgNVuaI7BCz6kHfyCHb5HGlekUhTfR72l4VIqe5vZpHNkRWDxDdqB','dary');

/*Table structure for table `work_order` */

DROP TABLE IF EXISTS `work_order`;

CREATE TABLE `work_order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `description` text NOT NULL,
  `completed_date` timestamp NULL DEFAULT NULL,
  `priority_id` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `property_id_fk_property` (`property_id`),
  KEY `priority` (`priority_id`),
  CONSTRAINT `property_id_fk_property` FOREIGN KEY (`property_id`) REFERENCES `property` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `work_order_ibfk_1` FOREIGN KEY (`priority_id`) REFERENCES `priority` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `work_order` */

insert  into `work_order`(`id`,`property_id`,`created_at`,`updated_at`,`description`,`completed_date`,`priority_id`) values 
(1,1,'2016-12-08 21:03:38','2016-12-01 19:39:42','Latin: Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed iaculis pulvinar quam et aliquet. Praesent finibus porttitor vehicula. Nulla vestibulum erat diam, a consequat turpis faucibus eu. Aliquam efficitur sollicitudin mattis. Vivamus sed dui in nunc tempor dapibus a vel dui. Maecenas pulvinar elit luctus enim tempor, nec ultrices dolor lobortis. Praesent facilisis ante et lorem tincidunt euismod. Cras lacinia, enim at tincidunt porttitor, dui dolor convallis neque, vel commodo ligula augue quis turpis.\r\n\r\nClass aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nunc tempus posuere commodo. Donec feugiat lacus sit amet viverra semper. Nam justo ante, pharetra ut mattis non, blandit non sapien. Suspendisse elit eros, rhoncus vel lectus nec, scelerisque ultrices sem. Cras efficitur eu lacus vitae vehicula.','2016-11-24 19:23:11',1),
(5,2,'2016-11-13 21:33:46','2016-11-14 20:48:06','No Description. Edit work order to add one',NULL,1),
(6,2,'2016-11-13 21:33:46','2016-11-14 20:48:06','No Description. Edit work order to add one\r\n',NULL,1),
(7,2,'2016-11-13 21:33:46','2016-11-13 21:33:46','Everything is broken!',NULL,6),
(8,2,'2016-11-13 21:34:16','2016-11-13 21:34:16','test',NULL,1),
(9,1,'2016-11-13 21:57:50','2016-11-14 20:40:14','test patch!',NULL,1),
(12,1,'2016-12-01 19:19:33','2016-12-01 19:19:33','test 45 priority',NULL,1),
(13,1,'2016-12-08 21:38:36','2016-12-08 21:38:36','test',NULL,2);

/*Table structure for table `work_order_comment` */

DROP TABLE IF EXISTS `work_order_comment`;

CREATE TABLE `work_order_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `work_order_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `work_order_id` (`work_order_id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `work_order_comment_ibfk_1` FOREIGN KEY (`work_order_id`) REFERENCES `work_order` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `work_order_comment_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

/*Data for the table `work_order_comment` */

insert  into `work_order_comment`(`id`,`work_order_id`,`comment`,`created_at`,`updated_at`,`user_id`) values 
(2,1,'test 2 edited again','2016-11-07 21:36:15','2016-11-14 20:20:36',1),
(3,1,'Test comment edited','2016-11-09 19:03:55','2016-11-09 21:00:02',1),
(5,1,'Test time date','2016-11-10 21:08:06','2016-11-10 21:08:06',1),
(6,1,'test time again','2016-11-10 21:09:31','2016-11-10 21:09:31',1),
(9,5,'dfdfg','2016-11-13 21:41:06','2016-11-13 21:41:06',1),
(10,1,'test','2016-11-24 21:28:42','2016-11-24 21:28:42',1),
(11,1,'test','2016-11-24 21:31:14','2016-11-24 21:31:14',1),
(12,5,'test','2016-11-24 21:32:28','2016-11-24 21:32:28',2),
(13,1,'test','2016-11-24 21:42:39','2016-11-24 21:42:39',2);

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
