/*
SQLyog Community Edition- MySQL GUI v8.03 
MySQL - 5.1.32-community : Database - bbank
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

CREATE DATABASE /*!32312 IF NOT EXISTS*/`bbank` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `bbank`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `fname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salt` varchar(3) NOT NULL,
  `password` varchar(70) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert  into `admin`(`id`,`fname`,`email`,`salt`,`password`) values (2,'admin','admin@bbank.com','731','2a677c500428bb16e399620327ce9e3c1691b6451ec4b3096f717fb25c106863'),(3,'rubixoft','rubixoft@tavanur.com','fb3','ef5ea6ab55676990d86e1745f94ff8139a66f1f743fad2f23015cbcb7b0ad94d');

/*Table structure for table `camp` */

DROP TABLE IF EXISTS `camp`;

CREATE TABLE `camp` (
  `camp_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) DEFAULT NULL,
  `date` varchar(55) DEFAULT NULL,
  `place` varchar(55) DEFAULT NULL,
  PRIMARY KEY (`camp_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

/*Data for the table `camp` */

insert  into `camp`(`camp_id`,`name`,`date`,`place`) values (1,'i med camp','1-1-15','tavanur'),(4,'Event one','12-2-15','Tavanur IEHSS');

/*Table structure for table `comment` */

DROP TABLE IF EXISTS `comment`;

CREATE TABLE `comment` (
  `id` int(8) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `mail` varchar(128) NOT NULL,
  `comment` text NOT NULL,
  `post_id` int(8) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

/*Data for the table `comment` */

insert  into `comment`(`id`,`name`,`mail`,`comment`,`post_id`,`date`) values (2,'sjanjksda','shamnascv94@gmail.com','this is my comments',100000,'2014-10-15 22:13:54'),(4,'hsadgjas','shamnascv94@gmail.com','there is some other errors',1,'2014-10-15 22:27:23'),(5,'third','shamnascv94@gmail.com','there is some other problem',1,'2014-10-15 22:28:22'),(6,'something','shamnascv94@gmail.com','tjbksfbuiasd ha difu',1,'2014-10-15 22:29:05'),(7,'sasd','gugui@giudsfgui.com','dsgsdhfs\r\n',1,'2014-10-15 22:29:30'),(8,'shamnas cv','shamnascv94@gmail.com','dsfgasdgdfsagdfg',1,'2014-10-15 22:51:16'),(9,'dfguidfgui as','gugui@giudsfgui.com','dfdsnd  dghdf sd',1,'2014-10-15 22:51:35');

/*Table structure for table `contact` */

DROP TABLE IF EXISTS `contact`;

CREATE TABLE `contact` (
  `msg_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) DEFAULT NULL,
  `subject` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `url` varchar(100) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`msg_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `contact` */

insert  into `contact`(`msg_id`,`name`,`subject`,`email`,`url`,`message`) values (2,'shamnas','Good work','shamnascv94@gmail.com','www.bindoz.com','Guys, you are doing a wonderful work through this website.you are doing a good thing to the society also..good work..keep it up ');

/*Table structure for table `members` */

DROP TABLE IF EXISTS `members`;

CREATE TABLE `members` (
  `member_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(33) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `phone` varchar(16) DEFAULT NULL,
  `blood_group` varchar(10) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `place` varchar(33) DEFAULT NULL,
  `status` varchar(15) DEFAULT 'Disabled',
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `members` */

insert  into `members`(`member_id`,`name`,`email`,`phone`,`blood_group`,`age`,`place`,`status`) values (1,'Shamnas cv','shamnascv94@gmail.com','7204320373','Bpositive',21,'Muvankara,Tavanur','Enabled');

/*Table structure for table `paginate` */

DROP TABLE IF EXISTS `paginate`;

CREATE TABLE `paginate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `paginate` */

/*Table structure for table `post` */

DROP TABLE IF EXISTS `post`;

CREATE TABLE `post` (
  `post_id` int(8) NOT NULL AUTO_INCREMENT,
  `post_title` varchar(124) NOT NULL,
  `post_body` text NOT NULL,
  PRIMARY KEY (`post_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

/*Data for the table `post` */

insert  into `post`(`post_id`,`post_title`,`post_body`) values (1,'','');

/*Table structure for table `volounteer` */

DROP TABLE IF EXISTS `volounteer`;

CREATE TABLE `volounteer` (
  `vlntr_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(55) DEFAULT NULL,
  `phone` varchar(55) DEFAULT NULL,
  `email` varchar(55) DEFAULT NULL,
  `place` varchar(55) DEFAULT NULL,
  `education` varchar(100) DEFAULT NULL,
  `age` int(5) DEFAULT NULL,
  `message` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`vlntr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `volounteer` */

insert  into `volounteer`(`vlntr_id`,`name`,`phone`,`email`,`place`,`education`,`age`,`message`) values (2,'someone','3245563','someone@something.com','ggfcsa','be engineering',12,'this is so awesome i want to be here');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
