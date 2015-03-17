﻿# Host: localhost  (Version: 5.5.40)
# Date: 2015-03-16 22:44:07
# Generator: MySQL-Front 5.3  (Build 4.120)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "uolor_album"
#

DROP TABLE IF EXISTS `uolor_album`;
CREATE TABLE `uolor_album` (
  `Id` bigint(11) NOT NULL AUTO_INCREMENT,
  `imgrl` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `userid` int(11) NOT NULL DEFAULT '0',
  `datetime` datetime DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `describe` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=gbk;

#
# Data for table "uolor_album"
#

/*!40000 ALTER TABLE `uolor_album` DISABLE KEYS */;
INSERT INTO `uolor_album` VALUES (1,'1.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(2,'2.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(3,'3.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(4,'4.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(5,'5.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(6,'1.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(7,'2.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(8,'3.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(9,'4.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(10,'5.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(11,'1.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(12,'2.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(13,'3.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(14,'4.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(15,'5.jpg','人物',1,'2015-03-06 00:00:00','法越馨的相册','测试测试'),(16,'1.jpg','更多展示',2,'2015-03-16 00:00:00','更多展示','更多展示');
/*!40000 ALTER TABLE `uolor_album` ENABLE KEYS */;

#
# Structure for table "uolor_comment"
#

DROP TABLE IF EXISTS `uolor_comment`;
CREATE TABLE `uolor_comment` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `content` varchar(255) DEFAULT NULL,
  `userid` int(11) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `picturesid` bigint(20) DEFAULT NULL,
  `albumid` bigint(20) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=gbk;

#
# Data for table "uolor_comment"
#

/*!40000 ALTER TABLE `uolor_comment` DISABLE KEYS */;
INSERT INTO `uolor_comment` VALUES (1,'第1个评论',1,'2015-03-12 00:00:00',1,1),(2,'第2个评论',1,'2015-03-12 04:37:50',1,1),(3,'第3个评论',2,'2015-03-12 04:39:26',1,1),(4,'第4个评论',2,'2015-03-12 04:39:27',1,1),(5,'第5个评论',3,'2015-03-12 04:39:28',1,1),(6,'第6个评论',3,'2015-03-12 04:39:30',1,1),(7,'第7个评论',7,'2015-03-12 04:39:31',1,1),(8,'第8个评论',8,'2015-03-12 04:39:32',1,1),(9,'第9个评论',9,'2015-03-12 04:39:33',1,1),(10,'第10个评论',10,'2015-03-12 04:39:34',1,1),(11,'第11个评论',11,'2015-03-12 04:39:35',1,1),(12,'第12个评论',12,'2015-03-12 04:39:36',1,1),(13,'第13个评论',13,'2015-03-12 04:39:37',1,1),(14,'第14个评论',14,'2015-03-12 04:39:38',1,1),(15,'第15个评论',15,'2015-03-12 04:41:07',1,1),(16,'第16个评论',16,'2015-03-12 04:41:46',1,1),(17,'第17个评论',17,'2015-03-12 05:07:37',1,1),(18,'第18个评论',1,'2015-03-12 10:50:23',1,1),(19,'第19个评论',1,'2015-03-12 10:52:02',1,1);
/*!40000 ALTER TABLE `uolor_comment` ENABLE KEYS */;

#
# Structure for table "uolor_pictures"
#

DROP TABLE IF EXISTS `uolor_pictures`;
CREATE TABLE `uolor_pictures` (
  `Id` bigint(11) NOT NULL AUTO_INCREMENT,
  `imgurl` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `describe` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `albumid` bigint(1) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=gbk;

#
# Data for table "uolor_pictures"
#

/*!40000 ALTER TABLE `uolor_pictures` DISABLE KEYS */;
INSERT INTO `uolor_pictures` VALUES (1,'636696397337325376.jpg','2015-03-05 00:00:00','暂无','法越馨','人物',1),(2,'1176283927691812002.jpg','2015-03-05 00:00:00','暂无','法越馨','人物',1),(3,'2453617372004583189.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(4,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(5,'2869637387583213756.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(6,'6630886346280027184.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(7,'6630896241884677100.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(8,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(9,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(10,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(11,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(12,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(13,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(14,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(15,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(16,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(17,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(18,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(19,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(20,'2843460214748930054.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(21,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(22,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(23,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(24,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(25,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(26,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(27,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(28,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(29,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(30,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(31,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(32,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(33,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(34,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(35,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(36,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(37,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(38,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(39,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(40,'636696397337325376.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(41,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(42,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(43,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(44,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(45,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(46,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(47,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(48,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(49,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(50,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(51,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(52,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(53,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(54,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(55,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(56,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(57,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(58,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(59,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(60,'1176283927691812002.jpg','2015-03-06 00:00:00','暂无','法越馨','人物',1),(61,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述61','法越馨61','人物61',16),(62,'img2_cover_10058845.jpg','2015-03-16 00:00:00','描述62','法越馨62','人物62',16),(63,'img2_cover_10078064.jpg','2015-03-16 00:00:00','描述63','法越馨63','人物63',16),(64,'img2_cover_10081602.jpg','2015-03-16 00:00:00','描述64','法越馨64','人物64',16),(65,'img2_cover_10100944.jpg','2015-03-16 00:00:00','描述65','法越馨65','人物65',16),(66,'img2_cover_10110626.jpg','2015-03-16 00:00:00','描述66','法越馨66','人物66',16),(67,'img2_src_10113103.jpg','2015-03-16 00:00:00','描述67','法越馨67','人物67',16),(68,'img2_cover_10070840.jpg','2015-03-16 00:00:00','描述68','法越馨68','人物68',16),(69,'img2_cover_10066007.jpg','2015-03-16 00:00:00','描述69','法越馨69','人物69',16),(70,'img2_cover_10061231.jpg','2015-03-16 00:00:00','描述70','法越馨70','人物70',16),(71,'img2_cover_10059175.jpg','2015-03-16 00:00:00','描述71','法越馨71','人物71',16),(72,'img2_cover_10058834.jpg','2015-03-16 00:00:00','描述72','法越馨72','人物72',16),(73,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述73','法越馨73','人物73',16),(74,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述74','法越馨74','人物74',16),(75,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述75','法越馨75','人物75',16),(76,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述76','法越馨76','人物76',16),(77,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述77','法越馨77','人物77',16),(78,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述78','法越馨78','人物78',16),(79,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述79','法越馨79','人物79',16),(80,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述80','法越馨80','人物80',16),(81,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述81','法越馨81','人物81',16),(82,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述82','法越馨82','人物82',16),(83,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述83','法越馨83','人物83',16),(84,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述84','法越馨84','人物84',16),(85,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述85','法越馨85','人物85',16),(86,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述86','法越馨86','人物86',16),(87,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述87','法越馨87','人物87',16),(88,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述88','法越馨88','人物88',16),(89,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述89','法越馨89','人物89',16),(90,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述90','法越馨90','人物90',16),(91,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述91','法越馨91','人物91',16),(92,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述92','法越馨92','人物92',16),(93,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述93','法越馨93','人物93',16),(94,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述94','法越馨94','人物94',16),(95,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述95','法越馨95','人物95',16),(96,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述96','法越馨96','人物96',16),(97,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述97','法越馨97','人物97',16),(98,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述98','法越馨98','人物98',16),(99,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述99','法越馨99','人物99',16),(100,'img2_cover_10071531.jpg','2015-03-16 00:00:00','描述100','法越馨100','人物100',16);
/*!40000 ALTER TABLE `uolor_pictures` ENABLE KEYS */;

#
# Structure for table "uolor_user"
#

DROP TABLE IF EXISTS `uolor_user`;
CREATE TABLE `uolor_user` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL DEFAULT '',
  `sex` tinyint(1) DEFAULT NULL,
  `localplace` varchar(255) DEFAULT NULL,
  `labels` varchar(255) DEFAULT NULL,
  `connection` varchar(255) DEFAULT NULL,
  `datetime` datetime DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `status` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=MyISAM AUTO_INCREMENT=221 DEFAULT CHARSET=gbk;

#
# Data for table "uolor_user"
#

/*!40000 ALTER TABLE `uolor_user` DISABLE KEYS */;
INSERT INTO `uolor_user` VALUES (1,'巍廉胖子',1,'北京','摄影','2582253358@qq.com','2015-03-05 00:00:00','123',0),(2,'junmu',1,'上海','音乐','2582253359@qq.com','2015-03-05 00:00:00','1234',0),(3,'陈呛呛',0,'苏州','摄影','1113334456@qq.com','2015-03-05 00:00:00',NULL,0),(4,'仓巴',1,'北京','文学','1113334456@qq.com','2015-03-05 00:00:00',NULL,0),(5,'Oneice',1,'北京','旅行','1113334455@qq.com','2015-00-06 00:00:00',NULL,0),(6,'陈呛呛6',1,'苏州','旅行','111223446@qq.com','2015-03-13 00:00:00','123',0),(7,'陈呛呛7',1,'苏州','旅行','111223447@qq.com','2015-03-13 00:00:00','123',0),(8,'陈呛呛8',1,'苏州','旅行','111223448@qq.com','2015-03-13 00:00:00','123',0),(9,'陈呛呛9',1,'苏州','旅行','111223449@qq.com','2015-03-13 00:00:00','123',0),(10,'陈呛呛10',1,'苏州','旅行','1112234410@qq.com','2015-03-13 00:00:00','123',0),(11,'陈呛呛11',1,'苏州','旅行','1112234411@qq.com','2015-03-13 00:00:00','123',0),(12,'陈呛呛12',1,'苏州','旅行','1112234412@qq.com','2015-03-13 00:00:00','123',0),(13,'陈呛呛13',1,'苏州','旅行','1112234413@qq.com','2015-03-13 00:00:00','123',0),(14,'陈呛呛14',1,'苏州','旅行','1112234414@qq.com','2015-03-13 00:00:00','123',0),(15,'陈呛呛15',1,'苏州','旅行','1112234415@qq.com','2015-03-13 00:00:00','123',0),(16,'陈呛呛16',1,'苏州','旅行','1112234416@qq.com','2015-03-13 00:00:00','123',0),(17,'陈呛呛17',1,'苏州','旅行','1112234417@qq.com','2015-03-13 00:00:00','123',0),(18,'陈呛呛18',1,'苏州','旅行','1112234418@qq.com','2015-03-13 00:00:00','123',0),(19,'陈呛呛19',1,'苏州','旅行','1112234419@qq.com','2015-03-13 00:00:00','123',0),(20,'陈呛呛20',1,'苏州','旅行','1112234420@qq.com','2015-03-13 00:00:00','123',0),(21,'陈呛呛21',1,'苏州','旅行','1112234421@qq.com','2015-03-13 00:00:00','123',0),(22,'陈呛呛22',1,'苏州','旅行','1112234422@qq.com','2015-03-13 00:00:00','123',0),(23,'陈呛呛23',1,'苏州','旅行','1112234423@qq.com','2015-03-13 00:00:00','123',0),(24,'陈呛呛24',1,'苏州','旅行','1112234424@qq.com','2015-03-13 00:00:00','123',0),(25,'陈呛呛25',1,'苏州','旅行','1112234425@qq.com','2015-03-13 00:00:00','123',0),(26,'陈呛呛26',1,'苏州','旅行','1112234426@qq.com','2015-03-13 00:00:00','123',0),(27,'陈呛呛27',1,'苏州','旅行','1112234427@qq.com','2015-03-13 00:00:00','123',0),(28,'陈呛呛28',1,'苏州','旅行','1112234428@qq.com','2015-03-13 00:00:00','123',0),(29,'陈呛呛29',1,'苏州','旅行','1112234429@qq.com','2015-03-13 00:00:00','123',0),(30,'陈呛呛30',1,'苏州','旅行','1112234430@qq.com','2015-03-13 00:00:00','123',0),(31,'陈呛呛31',1,'苏州','旅行','1112234431@qq.com','2015-03-13 00:00:00','123',0),(32,'陈呛呛32',1,'苏州','旅行','1112234432@qq.com','2015-03-13 00:00:00','123',0),(33,'陈呛呛33',1,'苏州','旅行','1112234433@qq.com','2015-03-13 00:00:00','123',0),(34,'陈呛呛34',1,'苏州','旅行','1112234434@qq.com','2015-03-13 00:00:00','123',0),(35,'陈呛呛35',1,'苏州','旅行','1112234435@qq.com','2015-03-13 00:00:00','123',0),(36,'陈呛呛36',1,'苏州','旅行','1112234436@qq.com','2015-03-13 00:00:00','123',0),(37,'陈呛呛37',1,'苏州','旅行','1112234437@qq.com','2015-03-13 00:00:00','123',0),(38,'陈呛呛38',1,'苏州','旅行','1112234438@qq.com','2015-03-13 00:00:00','123',0),(39,'陈呛呛39',1,'苏州','旅行','1112234439@qq.com','2015-03-13 00:00:00','123',0),(40,'陈呛呛40',1,'苏州','旅行','1112234440@qq.com','2015-03-13 00:00:00','123',0),(41,'陈呛呛41',1,'苏州','旅行','1112234441@qq.com','2015-03-13 00:00:00','123',0),(42,'陈呛呛42',1,'苏州','旅行','1112234442@qq.com','2015-03-13 00:00:00','123',0),(43,'陈呛呛43',1,'苏州','旅行','1112234443@qq.com','2015-03-13 00:00:00','123',0),(44,'陈呛呛44',1,'苏州','旅行','1112234444@qq.com','2015-03-13 00:00:00','123',0),(45,'陈呛呛45',1,'苏州','旅行','1112234445@qq.com','2015-03-13 00:00:00','123',0),(46,'陈呛呛46',1,'苏州','旅行','1112234446@qq.com','2015-03-13 00:00:00','123',0),(47,'陈呛呛47',1,'苏州','旅行','1112234447@qq.com','2015-03-13 00:00:00','123',0),(48,'陈呛呛48',1,'苏州','旅行','1112234448@qq.com','2015-03-13 00:00:00','123',0),(49,'陈呛呛49',1,'苏州','旅行','1112234449@qq.com','2015-03-13 00:00:00','123',0),(50,'陈呛呛50',1,'苏州','旅行','1112234450@qq.com','2015-03-13 00:00:00','123',0),(51,'陈呛呛51',1,'苏州','旅行','1112234451@qq.com','2015-03-13 00:00:00','123',0),(52,'陈呛呛52',1,'苏州','旅行','1112234452@qq.com','2015-03-13 00:00:00','123',0),(53,'陈呛呛53',1,'苏州','旅行','1112234453@qq.com','2015-03-13 00:00:00','123',0),(54,'陈呛呛54',1,'苏州','旅行','1112234454@qq.com','2015-03-13 00:00:00','123',0),(55,'陈呛呛55',1,'苏州','旅行','1112234455@qq.com','2015-03-13 00:00:00','123',0),(56,'陈呛呛56',1,'苏州','旅行','1112234456@qq.com','2015-03-13 00:00:00','123',0),(57,'陈呛呛57',1,'苏州','旅行','1112234457@qq.com','2015-03-13 00:00:00','123',0),(58,'陈呛呛58',1,'苏州','旅行','1112234458@qq.com','2015-03-13 00:00:00','123',0),(59,'陈呛呛59',1,'苏州','旅行','1112234459@qq.com','2015-03-13 00:00:00','123',0),(60,'陈呛呛60',1,'苏州','旅行','1112234460@qq.com','2015-03-13 00:00:00','123',0),(61,'陈呛呛61',1,'苏州','旅行','1112234461@qq.com','2015-03-13 00:00:00','123',0),(62,'陈呛呛62',1,'苏州','旅行','1112234462@qq.com','2015-03-13 00:00:00','123',0),(63,'陈呛呛63',1,'苏州','旅行','1112234463@qq.com','2015-03-13 00:00:00','123',0),(64,'陈呛呛64',1,'苏州','旅行','1112234464@qq.com','2015-03-13 00:00:00','123',0),(65,'陈呛呛65',1,'苏州','旅行','1112234465@qq.com','2015-03-13 00:00:00','123',0),(66,'陈呛呛66',1,'苏州','旅行','1112234466@qq.com','2015-03-13 00:00:00','123',0),(67,'陈呛呛67',1,'苏州','旅行','1112234467@qq.com','2015-03-13 00:00:00','123',0),(68,'陈呛呛68',1,'苏州','旅行','1112234468@qq.com','2015-03-13 00:00:00','123',0),(69,'陈呛呛69',1,'苏州','旅行','1112234469@qq.com','2015-03-13 00:00:00','123',0),(70,'陈呛呛70',1,'苏州','旅行','1112234470@qq.com','2015-03-13 00:00:00','123',0),(71,'陈呛呛71',1,'苏州','旅行','1112234471@qq.com','2015-03-13 00:00:00','123',0),(72,'陈呛呛72',1,'苏州','旅行','1112234472@qq.com','2015-03-13 00:00:00','123',0),(73,'陈呛呛73',1,'苏州','旅行','1112234473@qq.com','2015-03-13 00:00:00','123',0),(74,'陈呛呛74',1,'苏州','旅行','1112234474@qq.com','2015-03-13 00:00:00','123',0),(75,'陈呛呛75',1,'苏州','旅行','1112234475@qq.com','2015-03-13 00:00:00','123',0),(76,'陈呛呛76',1,'苏州','旅行','1112234476@qq.com','2015-03-13 00:00:00','123',0),(77,'陈呛呛77',1,'苏州','旅行','1112234477@qq.com','2015-03-13 00:00:00','123',0),(78,'陈呛呛78',1,'苏州','旅行','1112234478@qq.com','2015-03-13 00:00:00','123',0),(79,'陈呛呛79',1,'苏州','旅行','1112234479@qq.com','2015-03-13 00:00:00','123',0),(80,'陈呛呛80',1,'苏州','旅行','1112234480@qq.com','2015-03-13 00:00:00','123',0),(81,'陈呛呛81',1,'苏州','旅行','1112234481@qq.com','2015-03-13 00:00:00','123',0),(82,'陈呛呛82',1,'苏州','旅行','1112234482@qq.com','2015-03-13 00:00:00','123',0),(83,'陈呛呛83',1,'苏州','旅行','1112234483@qq.com','2015-03-13 00:00:00','123',0),(84,'陈呛呛84',1,'苏州','旅行','1112234484@qq.com','2015-03-13 00:00:00','123',0),(85,'陈呛呛85',1,'苏州','旅行','1112234485@qq.com','2015-03-13 00:00:00','123',0),(86,'陈呛呛86',1,'苏州','旅行','1112234486@qq.com','2015-03-13 00:00:00','123',0),(87,'陈呛呛87',1,'苏州','旅行','1112234487@qq.com','2015-03-13 00:00:00','123',0),(88,'陈呛呛88',1,'苏州','旅行','1112234488@qq.com','2015-03-13 00:00:00','123',0),(89,'陈呛呛89',1,'苏州','旅行','1112234489@qq.com','2015-03-13 00:00:00','123',0),(90,'陈呛呛90',1,'苏州','旅行','1112234490@qq.com','2015-03-13 00:00:00','123',0),(91,'陈呛呛91',1,'苏州','旅行','1112234491@qq.com','2015-03-13 00:00:00','123',0),(92,'陈呛呛92',1,'苏州','旅行','1112234492@qq.com','2015-03-13 00:00:00','123',0),(93,'陈呛呛93',1,'苏州','旅行','1112234493@qq.com','2015-03-13 00:00:00','123',0),(94,'陈呛呛94',1,'苏州','旅行','1112234494@qq.com','2015-03-13 00:00:00','123',0),(95,'陈呛呛95',1,'苏州','旅行','1112234495@qq.com','2015-03-13 00:00:00','123',0),(96,'陈呛呛96',1,'苏州','旅行','1112234496@qq.com','2015-03-13 00:00:00','123',0),(97,'陈呛呛97',1,'苏州','旅行','1112234497@qq.com','2015-03-13 00:00:00','123',0),(98,'陈呛呛98',1,'苏州','旅行','1112234498@qq.com','2015-03-13 00:00:00','123',0),(99,'陈呛呛99',1,'苏州','旅行','1112234499@qq.com','2015-03-13 00:00:00','123',0),(100,'陈呛呛100',1,'苏州','旅行','11122344100@qq.com','2015-03-13 00:00:00','123',0),(101,'陈呛呛101',1,'苏州','旅行','11122344101@qq.com','2015-03-13 00:00:00','123',0),(102,'陈呛呛102',1,'苏州','旅行','11122344102@qq.com','2015-03-13 00:00:00','123',0),(103,'陈呛呛103',1,'苏州','旅行','11122344103@qq.com','2015-03-13 00:00:00','123',0),(104,'陈呛呛104',1,'苏州','旅行','11122344104@qq.com','2015-03-13 00:00:00','123',0),(105,'陈呛呛105',1,'苏州','旅行','11122344105@qq.com','2015-03-13 00:00:00','123',0),(106,'陈呛呛106',1,'苏州','旅行','11122344106@qq.com','2015-03-13 00:00:00','123',0),(107,'陈呛呛107',1,'苏州','旅行','11122344107@qq.com','2015-03-13 00:00:00','123',0),(108,'陈呛呛108',1,'苏州','旅行','11122344108@qq.com','2015-03-13 00:00:00','123',0),(109,'陈呛呛109',1,'苏州','旅行','11122344109@qq.com','2015-03-13 00:00:00','123',0),(110,'陈呛呛110',1,'苏州','旅行','11122344110@qq.com','2015-03-13 00:00:00','123',0),(111,'陈呛呛111',1,'苏州','旅行','11122344111@qq.com','2015-03-13 00:00:00','123',0),(112,'陈呛呛112',1,'苏州','旅行','11122344112@qq.com','2015-03-13 00:00:00','123',0),(113,'陈呛呛113',1,'苏州','旅行','11122344113@qq.com','2015-03-13 00:00:00','123',0),(114,'陈呛呛114',1,'苏州','旅行','11122344114@qq.com','2015-03-13 00:00:00','123',0),(115,'陈呛呛115',1,'苏州','旅行','11122344115@qq.com','2015-03-13 00:00:00','123',0),(116,'陈呛呛116',1,'苏州','旅行','11122344116@qq.com','2015-03-13 00:00:00','123',0),(117,'陈呛呛117',1,'苏州','旅行','11122344117@qq.com','2015-03-13 00:00:00','123',0),(118,'陈呛呛118',1,'苏州','旅行','11122344118@qq.com','2015-03-13 00:00:00','123',0),(119,'陈呛呛119',1,'苏州','旅行','11122344119@qq.com','2015-03-13 00:00:00','123',0),(120,'陈呛呛120',1,'苏州','旅行','11122344120@qq.com','2015-03-13 00:00:00','123',0),(121,'陈呛呛121',1,'苏州','旅行','11122344121@qq.com','2015-03-13 00:00:00','123',0),(122,'陈呛呛122',1,'苏州','旅行','11122344122@qq.com','2015-03-13 00:00:00','123',0),(123,'陈呛呛123',1,'苏州','旅行','11122344123@qq.com','2015-03-13 00:00:00','123',0),(124,'陈呛呛124',1,'苏州','旅行','11122344124@qq.com','2015-03-13 00:00:00','123',0),(125,'陈呛呛125',1,'苏州','旅行','11122344125@qq.com','2015-03-13 00:00:00','123',0),(126,'陈呛呛126',1,'苏州','旅行','11122344126@qq.com','2015-03-13 00:00:00','123',0),(127,'陈呛呛127',1,'苏州','旅行','11122344127@qq.com','2015-03-13 00:00:00','123',0),(128,'陈呛呛128',1,'苏州','旅行','11122344128@qq.com','2015-03-13 00:00:00','123',0),(129,'陈呛呛129',1,'苏州','旅行','11122344129@qq.com','2015-03-13 00:00:00','123',0),(130,'陈呛呛130',1,'苏州','旅行','11122344130@qq.com','2015-03-13 00:00:00','123',0),(131,'陈呛呛131',1,'苏州','旅行','11122344131@qq.com','2015-03-13 00:00:00','123',0),(132,'陈呛呛132',1,'苏州','旅行','11122344132@qq.com','2015-03-13 00:00:00','123',0),(133,'陈呛呛133',1,'苏州','旅行','11122344133@qq.com','2015-03-13 00:00:00','123',0),(134,'陈呛呛134',1,'苏州','旅行','11122344134@qq.com','2015-03-13 00:00:00','123',0),(135,'陈呛呛135',1,'苏州','旅行','11122344135@qq.com','2015-03-13 00:00:00','123',0),(136,'陈呛呛136',1,'苏州','旅行','11122344136@qq.com','2015-03-13 00:00:00','123',0),(137,'陈呛呛137',1,'苏州','旅行','11122344137@qq.com','2015-03-13 00:00:00','123',0),(138,'陈呛呛138',1,'苏州','旅行','11122344138@qq.com','2015-03-13 00:00:00','123',0),(139,'陈呛呛139',1,'苏州','旅行','11122344139@qq.com','2015-03-13 00:00:00','123',0),(140,'陈呛呛140',1,'苏州','旅行','11122344140@qq.com','2015-03-13 00:00:00','123',0),(141,'陈呛呛141',1,'苏州','旅行','11122344141@qq.com','2015-03-13 00:00:00','123',0),(142,'陈呛呛142',1,'苏州','旅行','11122344142@qq.com','2015-03-13 00:00:00','123',0),(143,'陈呛呛143',1,'苏州','旅行','11122344143@qq.com','2015-03-13 00:00:00','123',0),(144,'陈呛呛144',1,'苏州','旅行','11122344144@qq.com','2015-03-13 00:00:00','123',0),(145,'陈呛呛145',1,'苏州','旅行','11122344145@qq.com','2015-03-13 00:00:00','123',0),(146,'陈呛呛146',1,'苏州','旅行','11122344146@qq.com','2015-03-13 00:00:00','123',0),(147,'陈呛呛147',1,'苏州','旅行','11122344147@qq.com','2015-03-13 00:00:00','123',0),(148,'陈呛呛148',1,'苏州','旅行','11122344148@qq.com','2015-03-13 00:00:00','123',0),(149,'陈呛呛149',1,'苏州','旅行','11122344149@qq.com','2015-03-13 00:00:00','123',0),(150,'陈呛呛150',1,'苏州','旅行','11122344150@qq.com','2015-03-13 00:00:00','123',0),(151,'陈呛呛151',1,'苏州','旅行','11122344151@qq.com','2015-03-13 00:00:00','123',0),(152,'陈呛呛152',1,'苏州','旅行','11122344152@qq.com','2015-03-13 00:00:00','123',0),(153,'陈呛呛153',1,'苏州','旅行','11122344153@qq.com','2015-03-13 00:00:00','123',0),(154,'陈呛呛154',1,'苏州','旅行','11122344154@qq.com','2015-03-13 00:00:00','123',0),(155,'陈呛呛155',1,'苏州','旅行','11122344155@qq.com','2015-03-13 00:00:00','123',0),(156,'陈呛呛156',1,'苏州','旅行','11122344156@qq.com','2015-03-13 00:00:00','123',0),(157,'陈呛呛157',1,'苏州','旅行','11122344157@qq.com','2015-03-13 00:00:00','123',0),(158,'陈呛呛158',1,'苏州','旅行','11122344158@qq.com','2015-03-13 00:00:00','123',0),(159,'陈呛呛159',1,'苏州','旅行','11122344159@qq.com','2015-03-13 00:00:00','123',0),(160,'陈呛呛160',1,'苏州','旅行','11122344160@qq.com','2015-03-13 00:00:00','123',0),(161,'陈呛呛161',1,'苏州','旅行','11122344161@qq.com','2015-03-13 00:00:00','123',0),(162,'陈呛呛162',1,'苏州','旅行','11122344162@qq.com','2015-03-13 00:00:00','123',0),(163,'陈呛呛163',1,'苏州','旅行','11122344163@qq.com','2015-03-13 00:00:00','123',0),(164,'陈呛呛164',1,'苏州','旅行','11122344164@qq.com','2015-03-13 00:00:00','123',0),(165,'陈呛呛165',1,'苏州','旅行','11122344165@qq.com','2015-03-13 00:00:00','123',0),(166,'陈呛呛166',1,'苏州','旅行','11122344166@qq.com','2015-03-13 00:00:00','123',0),(167,'陈呛呛167',1,'苏州','旅行','11122344167@qq.com','2015-03-13 00:00:00','123',0),(168,'陈呛呛168',1,'苏州','旅行','11122344168@qq.com','2015-03-13 00:00:00','123',0),(169,'陈呛呛169',1,'苏州','旅行','11122344169@qq.com','2015-03-13 00:00:00','123',0),(170,'陈呛呛170',1,'苏州','旅行','11122344170@qq.com','2015-03-13 00:00:00','123',0),(171,'陈呛呛171',1,'苏州','旅行','11122344171@qq.com','2015-03-13 00:00:00','123',0),(172,'陈呛呛172',1,'苏州','旅行','11122344172@qq.com','2015-03-13 00:00:00','123',0),(173,'陈呛呛173',1,'苏州','旅行','11122344173@qq.com','2015-03-13 00:00:00','123',0),(174,'陈呛呛174',1,'苏州','旅行','11122344174@qq.com','2015-03-13 00:00:00','123',0),(175,'陈呛呛175',1,'苏州','旅行','11122344175@qq.com','2015-03-13 00:00:00','123',0),(176,'陈呛呛176',1,'苏州','旅行','11122344176@qq.com','2015-03-13 00:00:00','123',0),(177,'陈呛呛177',1,'苏州','旅行','11122344177@qq.com','2015-03-13 00:00:00','123',0),(178,'陈呛呛178',1,'苏州','旅行','11122344178@qq.com','2015-03-13 00:00:00','123',0),(179,'陈呛呛179',1,'苏州','旅行','11122344179@qq.com','2015-03-13 00:00:00','123',0),(180,'陈呛呛180',1,'苏州','旅行','11122344180@qq.com','2015-03-13 00:00:00','123',0),(181,'陈呛呛181',1,'苏州','旅行','11122344181@qq.com','2015-03-13 00:00:00','123',0),(182,'陈呛呛182',1,'苏州','旅行','11122344182@qq.com','2015-03-13 00:00:00','123',0),(183,'陈呛呛183',1,'苏州','旅行','11122344183@qq.com','2015-03-13 00:00:00','123',0),(184,'陈呛呛184',1,'苏州','旅行','11122344184@qq.com','2015-03-13 00:00:00','123',0),(185,'陈呛呛185',1,'苏州','旅行','11122344185@qq.com','2015-03-13 00:00:00','123',0),(186,'陈呛呛186',1,'苏州','旅行','11122344186@qq.com','2015-03-13 00:00:00','123',0),(187,'陈呛呛187',1,'苏州','旅行','11122344187@qq.com','2015-03-13 00:00:00','123',0),(188,'陈呛呛188',1,'苏州','旅行','11122344188@qq.com','2015-03-13 00:00:00','123',0),(189,'陈呛呛189',1,'苏州','旅行','11122344189@qq.com','2015-03-13 00:00:00','123',0),(190,'陈呛呛190',1,'苏州','旅行','11122344190@qq.com','2015-03-13 00:00:00','123',0),(191,'陈呛呛191',1,'苏州','旅行','11122344191@qq.com','2015-03-13 00:00:00','123',0),(192,'陈呛呛192',1,'苏州','旅行','11122344192@qq.com','2015-03-13 00:00:00','123',0),(193,'陈呛呛193',1,'苏州','旅行','11122344193@qq.com','2015-03-13 00:00:00','123',0),(194,'陈呛呛194',1,'苏州','旅行','11122344194@qq.com','2015-03-13 00:00:00','123',0),(195,'陈呛呛195',1,'苏州','旅行','11122344195@qq.com','2015-03-13 00:00:00','123',0),(196,'陈呛呛196',1,'苏州','旅行','11122344196@qq.com','2015-03-13 00:00:00','123',0),(197,'陈呛呛197',1,'苏州','旅行','11122344197@qq.com','2015-03-13 00:00:00','123',0),(198,'陈呛呛198',1,'苏州','旅行','11122344198@qq.com','2015-03-13 00:00:00','123',0),(199,'陈呛呛199',1,'苏州','旅行','11122344199@qq.com','2015-03-13 00:00:00','123',0),(200,'陈呛呛200',1,'苏州','旅行','11122344200@qq.com','2015-03-13 00:00:00','123',0),(201,'陈呛呛201',1,'苏州','旅行','11122344201@qq.com','2015-03-13 00:00:00','123',0),(202,'陈呛呛202',1,'苏州','旅行','11122344202@qq.com','2015-03-13 00:00:00','123',0),(203,'陈呛呛203',1,'苏州','旅行','11122344203@qq.com','2015-03-13 00:00:00','123',0),(204,'陈呛呛204',1,'苏州','旅行','11122344204@qq.com','2015-03-13 00:00:00','123',0),(205,'陈呛呛205',1,'苏州','旅行','11122344205@qq.com','2015-03-13 00:00:00','123',0),(206,'陈呛呛206',1,'苏州','旅行','11122344206@qq.com','2015-03-13 00:00:00','123',0),(207,'陈呛呛207',1,'苏州','旅行','11122344207@qq.com','2015-03-13 00:00:00','123',0),(208,'陈呛呛208',1,'苏州','旅行','11122344208@qq.com','2015-03-13 00:00:00','123',0),(209,'陈呛呛209',1,'苏州','旅行','11122344209@qq.com','2015-03-13 00:00:00','123',0),(210,'陈呛呛210',1,'苏州','旅行','11122344210@qq.com','2015-03-13 00:00:00','123',0),(211,'陈呛呛211',1,'苏州','旅行','11122344211@qq.com','2015-03-13 00:00:00','123',0),(212,'陈呛呛212',1,'苏州','旅行','11122344212@qq.com','2015-03-13 00:00:00','123',0),(213,'陈呛呛213',1,'苏州','旅行','11122344213@qq.com','2015-03-13 00:00:00','123',0),(214,'陈呛呛214',1,'苏州','旅行','11122344214@qq.com','2015-03-13 00:00:00','123',0),(215,'陈呛呛215',1,'苏州','旅行','11122344215@qq.com','2015-03-13 00:00:00','123',0),(216,'陈呛呛216',1,'苏州','旅行','11122344216@qq.com','2015-03-13 00:00:00','123',0),(217,'陈呛呛217',1,'苏州','旅行','11122344217@qq.com','2015-03-13 00:00:00','123',0),(218,'陈呛呛218',1,'苏州','旅行','11122344218@qq.com','2015-03-13 00:00:00','123',0),(219,'陈呛呛219',1,'苏州','旅行','11122344219@qq.com','2015-03-13 00:00:00','123',0),(220,'陈呛呛220',1,'苏州','旅行','11122344220@qq.com','2015-03-13 00:00:00','123',0);
/*!40000 ALTER TABLE `uolor_user` ENABLE KEYS */;

#
# Procedure "autoinsert"
#

DROP PROCEDURE IF EXISTS `autoinsert`;
CREATE PROCEDURE `autoinsert`()
begin
declare i int;
set i=6;
repeat
insert into album values(i,'3.jpg','人物','1','2015-03-06','法越馨的相册','测试测试');
set i = i+1;
until i>10
end repeat;
end;

#
# Procedure "autoinsert2"
#

DROP PROCEDURE IF EXISTS `autoinsert2`;
CREATE PROCEDURE `autoinsert2`()
begin
declare i int;
set i=6;
repeat
insert into album values(i,CONCAT(i-5,'.jpg'),'人物','1','2015-03-06','法越馨的相册','测试测试');
set i = i+1;
until i>10
end repeat;
end;

#
# Procedure "autoinsert3"
#

DROP PROCEDURE IF EXISTS `autoinsert3`;
CREATE PROCEDURE `autoinsert3`()
begin
declare i int;
set i=11;
repeat
insert into album values(i,CONCAT(i-10,'.jpg'),'人物','1','2015-03-06','法越馨的相册','测试测试');
set i = i+1;
until i>15
end repeat;
end;

#
# Procedure "autoinsertpic"
#

DROP PROCEDURE IF EXISTS `autoinsertpic`;
CREATE PROCEDURE `autoinsertpic`()
begin
declare i int;
set i=61;
repeat
insert into uolor_pictures values(i,'img2_cover_10071531.jpg','2015-03-16',CONCAT('描述',i),CONCAT('法越馨',i),CONCAT('人物',i),'16');
set i = i+1;
until i>100
end repeat;
end;

#
# Procedure "autostatus"
#

DROP PROCEDURE IF EXISTS `autostatus`;
CREATE PROCEDURE `autostatus`()
begin
declare i int;
set i=1;
repeat
update uolor_user set status=0 where Id=i;
set i = i+1;
until i>5
end repeat;
end;

#
# Procedure "autostatus220"
#

DROP PROCEDURE IF EXISTS `autostatus220`;
CREATE PROCEDURE `autostatus220`()
begin
declare i int;
set i=6;
repeat
update uolor_user set status=0 where Id=i;
set i = i+1;
until i>220
end repeat;
end;

#
# Procedure "autouserinfo"
#

DROP PROCEDURE IF EXISTS `autouserinfo`;
CREATE PROCEDURE `autouserinfo`()
begin
declare i int;
set i=6;
repeat
update uolor_user set datetime='2015-03-13'  where Id=i;
set i = i+1;
until i>220
end repeat;
end;

#
# Procedure "pictureautoinsert"
#

DROP PROCEDURE IF EXISTS `pictureautoinsert`;
CREATE PROCEDURE `pictureautoinsert`()
begin
declare i int;
set i=41;
repeat
insert into pictures values(i,'1176283927691812002.jpg','2015-03-06','暂无','法越馨','人物','1');
set i = i+1;
until i>60
end repeat;
end;

#
# Procedure "userautoinsert"
#

DROP PROCEDURE IF EXISTS `userautoinsert`;
CREATE PROCEDURE `userautoinsert`()
begin
declare i int;
set i=11;
repeat
insert into user values(i,CONCAT('我可能是小光',i),'1','北京','摄影','1112223344@qq.com','2015-03-06');
set i = i+1;
until i>100
end repeat;
end;
