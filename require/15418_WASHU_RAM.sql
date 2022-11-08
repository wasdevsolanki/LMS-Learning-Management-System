/*
SQLyog Ultimate v12.5.0 (64 bit)
MySQL - 10.4.19-MariaDB : Database - 15418_washu_ram
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`15418_washu_ram` /*!40100 DEFAULT CHARACTER SET utf8mb4 */;

USE `15418_washu_ram`;

/*Table structure for table `batch_course` */

DROP TABLE IF EXISTS `batch_course`;

CREATE TABLE `batch_course` (
  `batch_course_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_id` int(11) DEFAULT NULL,
  `course_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `number_of_topics` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`batch_course_id`),
  KEY `batch_id` (`batch_id`),
  KEY `course_id` (`course_id`),
  CONSTRAINT `batch_course_ibfk_1` FOREIGN KEY (`batch_id`) REFERENCES `batches` (`batch_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `batch_course_ibfk_2` FOREIGN KEY (`course_id`) REFERENCES `courses` (`course_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=70 DEFAULT CHARSET=utf8mb4;

/*Data for the table `batch_course` */

insert  into `batch_course`(`batch_course_id`,`batch_id`,`course_id`,`status_id`,`number_of_topics`,`created_at`,`updated_at`) values 
(64,18,11,3,5,NULL,NULL),
(65,18,12,3,4,NULL,NULL),
(66,18,13,3,5,NULL,NULL),
(69,20,17,3,5,NULL,NULL);

/*Table structure for table `batch_course_topic` */

DROP TABLE IF EXISTS `batch_course_topic`;

CREATE TABLE `batch_course_topic` (
  `batch_course_topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `batch_course_id` int(11) DEFAULT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `topic_priority` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`batch_course_topic_id`),
  KEY `batch_course_id` (`batch_course_id`),
  KEY `topic_id` (`topic_id`),
  KEY `status_id` (`status_id`),
  CONSTRAINT `batch_course_topic_ibfk_1` FOREIGN KEY (`batch_course_id`) REFERENCES `batch_course` (`batch_course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `batch_course_topic_ibfk_2` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `batch_course_topic_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=57 DEFAULT CHARSET=utf8mb4;

/*Data for the table `batch_course_topic` */

insert  into `batch_course_topic`(`batch_course_topic_id`,`batch_course_id`,`topic_id`,`status_id`,`topic_priority`,`created_at`,`updated_at`) values 
(30,64,10,2,1,'2021-10-24 21:44:32',NULL),
(31,64,11,2,2,'2021-10-24 21:44:32',NULL),
(32,64,13,2,3,'2021-10-24 21:44:32',NULL),
(33,64,15,2,4,'2021-10-24 21:44:32',NULL),
(34,64,18,2,5,'2021-10-24 21:44:32',NULL),
(35,65,18,2,1,'2021-10-24 21:46:43',NULL),
(36,65,15,2,2,'2021-10-24 21:46:43',NULL),
(37,65,12,2,3,'2021-10-24 21:46:43',NULL),
(38,65,13,2,4,'2021-10-24 21:46:43',NULL),
(39,66,10,2,1,'2021-10-24 21:48:09',NULL),
(40,66,11,2,2,'2021-10-24 21:48:09',NULL),
(41,66,13,2,3,'2021-10-24 21:48:09',NULL),
(42,66,15,2,4,'2021-10-24 21:48:09',NULL),
(43,66,14,2,5,'2021-10-24 21:48:09',NULL),
(52,69,15,2,3,'2021-10-25 11:03:55',NULL),
(53,69,12,2,2,'2021-10-25 11:03:55',NULL),
(54,69,14,2,1,'2021-10-25 11:03:55',NULL),
(55,69,13,2,4,'2021-10-25 11:03:55',NULL),
(56,69,10,2,5,'2021-10-25 11:03:55',NULL);

/*Table structure for table `batches` */

DROP TABLE IF EXISTS `batches`;

CREATE TABLE `batches` (
  `batch_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT NULL,
  `batch_title` varchar(100) DEFAULT NULL,
  `batch_description` text DEFAULT NULL,
  `batch_start_date` date DEFAULT NULL,
  `batch_end_date` date DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`batch_id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;

/*Data for the table `batches` */

insert  into `batches`(`batch_id`,`status_id`,`batch_title`,`batch_description`,`batch_start_date`,`batch_end_date`,`created_at`,`updated_at`) values 
(16,3,'2019','PHP Basic, PHP Advance, Java Basic, Java Advance, Networking,','2019-01-01','2019-12-31',NULL,NULL),
(17,3,'2020','PHP Basic, PHP Advance, Java Basic, Java Advance, Networking.','2020-01-01','2020-12-30',NULL,NULL),
(18,3,'2021','PHP Basic, PHP Advance, Java Basic, Java Advance, Networking','2021-01-01','2021-12-31',NULL,NULL),
(20,3,'2024','PHP Basic, Kotlin ','2024-01-01','2024-01-30',NULL,NULL);

/*Table structure for table `courses` */

DROP TABLE IF EXISTS `courses`;

CREATE TABLE `courses` (
  `course_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT NULL,
  `course_title` varchar(100) DEFAULT NULL,
  `course_description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`course_id`),
  KEY `status_id` (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4;

/*Data for the table `courses` */

insert  into `courses`(`course_id`,`status_id`,`course_title`,`course_description`,`created_at`,`updated_at`) values 
(11,1,'PHP Basic','Variables and operators.\r\nControl structures, arrays and PHP array functions.\r\nExternal files.\r\nFunctions, arguments, passing by reference, globals and scope.\r\nOOP in PHP4 and PHP5.\r\nMySQL database form PHP.\r\nSQLite.\r\nSessions and Cookies','2021-10-24 21:27:19',NULL),
(12,1,'PHP Advance','    Advanced OOP. Namespaces. Inheritance. ...\r\n    SPL (Standard PHP Library) Iterators. Interfaces.\r\n    XML. Reading &amp; Writing XML with SimpleXML. XPath.\r\n    JSON encoding and decoding.\r\n    Web Services &amp; APIs. SOAP. REST.\r\n    Anonymous functions, Lambdas, and Closures.\r\n    DateTime &amp; Timezones.\r\n    Regular Expressions.','2021-10-24 21:27:40',NULL),
(13,1,'Java Basic','OOPS concepts (Data Abstraction, Encapsulation, Inheritance, Polymorphism)\r\nBasic Java constructs like loops and data types.\r\nString handling.\r\nCollection framework.\r\nMultithreading.\r\nException handling.\r\nGenerics.\r\nSynchronisation','2021-10-24 21:28:32',NULL),
(14,1,'Java Advance','Basics of a Web application. What is a web application? ...\r\nWeb Container and Web Application Project Set up. To set up Tomcat Container on a machine. ...\r\nServlets. What are Servlets? ...\r\nSession Management. What is a session? ...\r\nJSPs. Introduction to JSP and need for JSPs. ...\r\nJSP Elements. ...\r\nJSP Tag library','2021-10-24 21:29:04',NULL),
(15,1,'Networking','    Networking Trends.\r\n    QoS over Data Networks.\r\n    Label Switching.\r\n    Gigabit and 10 Gb Ethernet.\r\n    Storage Area Networks.\r\n    IP over DWDM.\r\n    Wireless Data Networks.\r\n    Voice over IP.','2021-10-24 21:29:29',NULL),
(17,1,'Kotlin Basic','Cross Platform for Andriod deelopment','2021-10-25 11:00:36',NULL);

/*Table structure for table `roles` */

DROP TABLE IF EXISTS `roles`;

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT NULL,
  `role_type` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`role_id`),
  KEY `status_id` (`status_id`),
  CONSTRAINT `roles_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4;

/*Data for the table `roles` */

insert  into `roles`(`role_id`,`status_id`,`role_type`,`created_at`,`updated_at`) values 
(1,NULL,'student',NULL,NULL),
(2,NULL,'teacher',NULL,NULL),
(3,NULL,'admin',NULL,NULL);

/*Table structure for table `status` */

DROP TABLE IF EXISTS `status`;

CREATE TABLE `status` (
  `status_id` int(11) NOT NULL AUTO_INCREMENT,
  `status` enum('Active','InActive','Enrolled','Disenrolled','InProcess','Completed') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`status_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4;

/*Data for the table `status` */

insert  into `status`(`status_id`,`status`,`created_at`,`updated_at`) values 
(1,'Active',NULL,NULL),
(2,'InActive',NULL,NULL),
(3,'InProcess',NULL,NULL),
(4,'Completed',NULL,NULL),
(5,'Enrolled',NULL,NULL),
(6,'Disenrolled',NULL,NULL),
(7,NULL,NULL,NULL);

/*Table structure for table `topic_file` */

DROP TABLE IF EXISTS `topic_file`;

CREATE TABLE `topic_file` (
  `topic_file_id` int(11) NOT NULL AUTO_INCREMENT,
  `topic_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `file_name` varchar(100) DEFAULT NULL,
  `file_path` text DEFAULT NULL,
  `file_type` enum('doc','ppt','pdf','png','jpg','jpeg') DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`topic_file_id`),
  KEY `topic_id` (`topic_id`),
  CONSTRAINT `topic_file_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`topic_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4;

/*Data for the table `topic_file` */

insert  into `topic_file`(`topic_file_id`,`topic_id`,`status_id`,`file_name`,`file_path`,`file_type`,`created_at`,`updated_at`) values 
(20,10,2,'card.jpg','C:xampp	mpphpA9E.tmp','jpg',NULL,NULL),
(21,10,2,'card1.jpg','C:xampp	mpphpAAF.tmp','jpg',NULL,NULL),
(22,10,1,'sample.png','C:xampp	mpphpAB0.tmp','png',NULL,NULL),
(23,10,1,'vector-1.jpg','C:xampp	mpphpAB1.tmp','jpg',NULL,NULL),
(24,10,1,'vector-2.jpg','C:xampp	mpphpAB2.tmp','jpg',NULL,NULL),
(25,11,1,'card3.jpg','C:xampp	mpphpEF4D.tmp','jpg',NULL,NULL),
(26,11,1,'card4.jpg','C:xampp	mpphpEF4E.tmp','jpg',NULL,NULL),
(27,11,1,'vector-1.jpg','C:xampp	mpphpEF4F.tmp','jpg',NULL,NULL),
(28,12,1,'img.jpg','C:xampp	mpphpB908.tmp','jpg',NULL,NULL),
(29,12,1,'index.php','C:xampp	mpphpB909.tmp','',NULL,NULL),
(30,12,1,'process.php','C:xampp	mpphpB90A.tmp','',NULL,NULL),
(31,13,1,'index.php','C:xampp	mpphp387C.tmp','',NULL,NULL),
(32,13,1,'process.php','C:xampp	mpphp387D.tmp','',NULL,NULL),
(33,14,1,'img.jpg','C:xampp	mpphpB148.tmp','jpg',NULL,NULL),
(34,15,1,'Learning Management System (SRS).pptx','C:xampp	mpphp3C92.tmp','',NULL,NULL),
(35,16,1,'sample-1.png','C:xampp	mpphpCF1E.tmp','png',NULL,NULL),
(36,16,1,'sample-2.PNG','C:xampp	mpphpCF1F.tmp','png',NULL,NULL),
(37,16,1,'sample-3.PNG','C:xampp	mpphpCF30.tmp','png',NULL,NULL),
(38,17,1,'sample-2.PNG','C:xampp	mpphp78FE.tmp','png',NULL,NULL),
(39,17,1,'sample-3.PNG','C:xampp	mpphp790E.tmp','png',NULL,NULL),
(40,18,1,'ERD.png','C:xampp	mpphpF35.tmp','png',NULL,NULL);

/*Table structure for table `topics` */

DROP TABLE IF EXISTS `topics`;

CREATE TABLE `topics` (
  `topic_id` int(11) NOT NULL AUTO_INCREMENT,
  `status_id` int(11) DEFAULT NULL,
  `topic_title` varchar(100) DEFAULT NULL,
  `topic_description` text DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`topic_id`),
  KEY `status_id` (`status_id`),
  CONSTRAINT `topics_ibfk_1` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4;

/*Data for the table `topics` */

insert  into `topics`(`topic_id`,`status_id`,`topic_title`,`topic_description`,`created_at`,`updated_at`) values 
(10,2,'Variables and operators','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2021-10-24 21:34:00',NULL),
(11,2,'Control structures','adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2021-10-24 21:37:09',NULL),
(12,2,'arrays','dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupida','2021-10-24 21:38:01',NULL),
(13,2,'PHP array functions','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cu','2021-10-24 21:38:34',NULL),
(14,2,'External files.','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cu','2021-10-24 21:39:05',NULL),
(15,2,'OOPS concepts','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cu','2021-10-24 21:39:40',NULL),
(16,2,'Networking Trends','consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui off','2021-10-24 21:40:18',NULL),
(17,2,'Container on a machine.','concepts (Data Abstraction, Encapsulation, Inheritance, Polymorphism) Basic Java constructs like loops and data types. String handling. Collection framework. Multithreading. Exception handling. Generics. Synchronisation','2021-10-24 21:41:01',NULL),
(18,2,'Inheritance',' dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum','2021-10-24 21:41:40',NULL);

/*Table structure for table `user_role` */

DROP TABLE IF EXISTS `user_role`;

CREATE TABLE `user_role` (
  `user_role_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `role_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_role_id`),
  KEY `user_id` (`user_id`),
  KEY `role_id` (`role_id`),
  CONSTRAINT `user_role_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_role_ibfk_2` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=216 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_role` */

insert  into `user_role`(`user_role_id`,`user_id`,`role_id`,`status_id`,`created_at`,`updated_at`) values 
(168,16,1,1,'2021-10-14 21:35:40',NULL),
(169,17,1,1,'2021-10-14 21:37:10',NULL),
(170,18,1,1,'2021-10-14 21:37:13',NULL),
(171,19,1,1,'2021-10-14 21:37:16',NULL),
(173,16,2,2,'2021-10-14 21:41:45',NULL),
(174,29,2,1,'2021-10-14 21:51:37',NULL),
(175,29,1,2,'2021-10-14 21:57:04',NULL),
(178,26,1,1,'2021-10-14 22:35:21',NULL),
(179,25,1,2,'2021-10-14 22:35:24',NULL),
(180,29,3,2,'2021-10-14 23:26:32',NULL),
(181,27,2,1,'2021-10-15 00:34:37',NULL),
(183,25,2,1,'2021-10-15 00:36:50',NULL),
(184,26,2,1,'2021-10-15 21:08:43',NULL),
(185,44,1,1,'2021-10-15 23:43:56',NULL),
(186,45,1,1,'2021-10-15 23:45:31',NULL),
(187,45,2,1,'2021-10-15 23:51:34',NULL),
(188,45,3,2,'2021-10-16 01:14:56',NULL),
(189,46,1,1,'2021-10-16 23:01:13',NULL),
(190,40,1,1,'2021-10-17 00:04:02',NULL),
(191,39,1,1,'2021-10-17 01:25:49',NULL),
(192,24,1,1,'2021-10-17 01:26:48',NULL),
(193,23,1,1,'2021-10-17 01:29:38',NULL),
(194,22,1,1,'2021-10-17 01:33:55',NULL),
(195,32,1,1,'2021-10-17 01:36:45',NULL),
(196,31,1,1,'2021-10-17 01:51:29',NULL),
(197,15,1,1,'2021-10-17 02:11:12',NULL),
(198,14,1,1,'2021-10-17 02:15:24',NULL),
(199,49,1,1,'2021-10-17 06:26:33',NULL),
(200,49,2,2,'2021-10-17 11:05:10',NULL),
(201,48,1,1,'2021-10-18 01:24:15',NULL),
(202,49,3,2,'2021-10-18 01:24:24',NULL),
(203,48,2,2,'2021-10-18 01:24:45',NULL),
(204,14,2,1,'2021-10-18 01:25:24',NULL),
(205,46,2,1,'2021-10-23 13:43:30',NULL),
(206,48,3,2,'2021-10-23 14:17:26',NULL),
(207,26,3,1,'2021-10-23 14:18:07',NULL),
(208,46,3,2,'2021-10-23 23:07:47',NULL),
(209,40,2,1,'2021-10-23 23:14:16',NULL),
(210,31,2,1,'2021-10-23 23:22:03',NULL),
(211,32,2,1,'2021-10-23 23:29:04',NULL),
(212,31,3,2,'2021-10-24 00:00:58',NULL),
(213,50,1,1,'2021-10-25 10:36:44',NULL),
(214,50,2,1,'2021-10-25 10:53:25',NULL),
(215,40,3,1,'2021-10-26 19:14:13',NULL);

/*Table structure for table `user_role_batch_course_enrollment` */

DROP TABLE IF EXISTS `user_role_batch_course_enrollment`;

CREATE TABLE `user_role_batch_course_enrollment` (
  `enrollment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_role_id` int(11) DEFAULT NULL,
  `batch_course_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`enrollment_id`),
  KEY `user_role_id` (`user_role_id`),
  KEY `batch_course_id` (`batch_course_id`),
  KEY `status_id` (`status_id`),
  CONSTRAINT `user_role_batch_course_enrollment_ibfk_1` FOREIGN KEY (`user_role_id`) REFERENCES `user_role` (`user_role_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_role_batch_course_enrollment_ibfk_2` FOREIGN KEY (`batch_course_id`) REFERENCES `batch_course` (`batch_course_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `user_role_batch_course_enrollment_ibfk_3` FOREIGN KEY (`status_id`) REFERENCES `status` (`status_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=207 DEFAULT CHARSET=utf8mb4;

/*Data for the table `user_role_batch_course_enrollment` */

insert  into `user_role_batch_course_enrollment`(`enrollment_id`,`user_role_id`,`batch_course_id`,`status_id`,`created_at`,`updated_at`) values 
(184,199,64,1,'2021-10-24 21:48:49',NULL),
(185,201,64,1,'2021-10-24 21:48:55',NULL),
(186,189,64,1,'2021-10-24 21:49:00',NULL),
(187,195,64,1,'2021-10-24 21:49:07',NULL),
(188,196,64,1,'2021-10-24 21:49:14',NULL),
(189,174,64,1,'2021-10-24 21:49:24',NULL),
(190,181,64,1,'2021-10-24 22:38:59',NULL),
(191,195,64,1,'2021-10-24 23:51:58',NULL),
(192,189,64,1,'2021-10-24 23:52:09',NULL),
(194,209,64,1,'2021-10-25 00:09:54',NULL),
(197,199,64,1,'2021-10-25 00:54:09',NULL),
(202,198,64,1,'2021-10-25 10:20:01',NULL),
(205,181,65,1,'2021-10-26 15:51:08',NULL),
(206,178,64,1,'2021-10-26 19:55:40',NULL);

/*Table structure for table `users` */

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `approved_by` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL,
  `image` blob DEFAULT NULL,
  `home_town` text DEFAULT NULL,
  `is_approve` enum('Pending','Approved','Rejected') DEFAULT 'Pending',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `email` (`email`),
  KEY `approved_by` (`approved_by`),
  CONSTRAINT `users_ibfk_1` FOREIGN KEY (`approved_by`) REFERENCES `user_role` (`user_role_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf8mb4;

/*Data for the table `users` */

insert  into `users`(`user_id`,`approved_by`,`status_id`,`first_name`,`last_name`,`email`,`password`,`gender`,`date_of_birth`,`image`,`home_town`,`is_approve`,`created_at`,`updated_at`) values 
(14,NULL,1,'Washu','Ram','washuramk@gmail.com','909090','Male','1997-06-05','card1.jpg','Agriculture Complex Daharki','Approved','2021-10-14 09:23:06','2021-10-17 01:58:24'),
(15,NULL,1,'John','Kin','johnkin@gmail.com','Daharki9090','Male','1995-09-06','card3.jpg','Latifabad road Hyderabad','Approved','2021-10-14 09:23:06','2021-10-17 01:52:36'),
(16,NULL,1,'Mozam','Sheikh','mozamsheikh@gmail.com','hyderabad','Male','1989-09-05','profile.jpg','Latifabad Hyderabad','Approved','2021-10-14 09:23:06','2021-10-14 21:27:57'),
(17,NULL,1,'Ali','Ahmed','aliahmed@gmail.com','ahmed123','Male','1987-08-05','card.jpg','Latifabad Hyderabad','Approved','2021-10-14 09:23:06','2021-10-14 21:27:56'),
(18,NULL,1,'Iqra','Kanwal','iqrakanwal@gmail.com','iqrak','Female','1994-09-06','profile.jpg','Karachi, Pakistan','Approved','2021-10-14 09:23:06','2021-10-14 21:27:55'),
(19,NULL,1,'Shahid','Abbas','shahidabbas@gmail.com','shahid','Male','1998-09-06','Capture.PNG','Shehdadpur, Hyderabad Sindh Pakistan','Approved','2021-10-14 09:23:06','2021-10-14 21:27:54'),
(22,NULL,1,'Muneeb','Ali','muneeb@gmail.com','muneeb','Male','1985-09-09','card4.jpg','Jamshoro','Approved','2021-10-14 09:23:06','2021-10-14 21:27:53'),
(23,NULL,1,'sam','ali','sam@gmail.com','samali','Male','1999-11-01','card4.jpg','hyderabad','Approved','2021-10-14 09:23:06','2021-10-14 21:27:52'),
(24,NULL,1,'Shaukat','Ahmed','shoukat@gmail.com','shaoukat','Male','1995-09-08','card4.jpg','Kotri','Approved','2021-10-14 09:23:06','2021-10-14 21:27:51'),
(25,NULL,1,'Aftab','Ali','aftab@gmail.com','aftab','Male','1997-09-09','profile.jpg','Daharki','Approved','2021-10-14 09:23:06','2021-10-14 21:27:50'),
(26,NULL,1,'Nadar','Ali','nadar@gmail.com','nadar','Male','1998-09-10','card4.jpg','Umarkot Sindh','Approved','2021-10-14 09:23:06','2021-10-14 21:27:49'),
(27,NULL,1,'Asad','Sheikh','asad90@gmail.com','asad90','Male','1994-12-31','profile.jpg','Nazimabad Karachi','Approved','2021-10-14 09:23:06','2021-10-14 21:27:48'),
(29,NULL,1,'Ram','Parkash','rampk@gmail.com','ram9090','Male','1995-12-31','profile.jpg','Hyderabad','Approved','2021-10-14 09:23:06','2021-10-14 21:27:46'),
(31,NULL,1,'Shahid','Khan','shahid99@gmail.com','shaihd0009','Male','1995-09-14','profile.jpg','Karachi','Approved','2021-10-15 21:20:12','2021-10-17 01:36:28'),
(32,NULL,1,'Fida','Naz','fidanaz@gmail.com','fidanaz','Female','1993-09-09','profile.jpg','Karachi','Approved','2021-10-15 21:41:39','2021-10-17 01:36:27'),
(39,NULL,1,'Pawan','Lal','pawan@gmail.com','pawan12','Male','2010-09-14','profile.jpg','Daharkir','Approved','2021-10-15 22:28:07','2021-10-24 00:49:22'),
(40,NULL,1,'Sanjay','Kumar','sanjaykumar@gmail.com','sanjayk','Male','1993-08-12','profile.jpg','Larkana','Approved','2021-10-15 22:41:41',NULL),
(44,NULL,1,'Oman','Ali','omanalli@gmail.com','omanali','Male','1998-06-10','profile.jpg','lahoreee','Approved','2021-10-15 23:43:55',NULL),
(45,NULL,1,'Sooraj','Kumarr','sooraj@gmail.com','sooraj','Male','1996-06-11','profile.jpg','Islamabad','Approved','2021-10-15 23:45:31',NULL),
(46,NULL,1,'Haresh','Kumar','haresh@gmail.com','haresh','Male','1994-12-30','profile.jpg','Khanpur','Approved','2021-10-16 23:01:13',NULL),
(47,NULL,1,'Saqib','Ali','saqib@gmail.com','saqib','Male','1994-08-29','profile.jpg','Dadu','Approved','2021-10-17 05:14:54','2021-10-18 01:23:57'),
(48,NULL,1,'Sher','Ali','sherali@gmail.com','sherali','Male','1994-09-22','profile.jpg','Faisalabad','Approved','2021-10-17 05:16:07','2021-10-17 06:26:21'),
(49,NULL,1,'Parkash','Kumar','parkash@gmail.com','parkash','Male','1996-12-31','profile.jpg','Mirpur Khaas','Approved','2021-10-17 05:17:29','2021-10-22 11:03:34'),
(50,NULL,1,'Ajay','Kumar','ajaykumar@gmail.com','ajayk','Male','1996-09-23','profile.jpg','Khairpur','Approved','2021-10-24 01:35:41','2021-10-24 01:35:57');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
