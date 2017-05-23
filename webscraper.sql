/*
Navicat MySQL Data Transfer

Source Server         : Localhost
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : webscraper

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2017-05-23 17:08:09
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for girls
-- ----------------------------
DROP TABLE IF EXISTS `girls`;
CREATE TABLE `girls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `is_active` tinyint(1) unsigned zerofill DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `own_words` text,
  `interview_id` int(10) unsigned zerofill DEFAULT NULL,
  `ower_comments` text,
  `location` varchar(50) DEFAULT NULL,
  `nearest_station` varchar(200) DEFAULT NULL,
  `available_for` varchar(255) DEFAULT NULL,
  `age` varchar(20) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `statistics` varchar(255) DEFAULT NULL,
  `shoe_size` varchar(40) DEFAULT NULL,
  `hair` varchar(40) DEFAULT NULL,
  `eyes` varchar(40) DEFAULT NULL,
  `nationality` varchar(100) DEFAULT NULL,
  `languages` varchar(100) DEFAULT NULL,
  `hobbies_sports` varchar(100) DEFAULT NULL,
  `smoking` varchar(50) DEFAULT NULL,
  `sexual_orientation` varchar(40) DEFAULT NULL,
  `large_tattoos` varchar(20) DEFAULT NULL,
  `intimate_piercings` varchar(20) DEFAULT NULL,
  `duo_partner` varchar(100) DEFAULT NULL,
  `favorite_restaurants` varchar(100) DEFAULT NULL,
  `favorite_cuisine` varchar(100) DEFAULT NULL,
  `favorite_drink` varchar(100) DEFAULT NULL,
  `favorite_perfume` varchar(100) DEFAULT NULL,
  `rate_1_hour` varchar(10) DEFAULT NULL,
  `rate_1_5_hours` varchar(10) DEFAULT NULL,
  `rate_2_hours` varchar(10) DEFAULT NULL,
  `rate_3_hours` varchar(10) DEFAULT NULL,
  `rate_dinner_date` varchar(10) DEFAULT NULL,
  `rate_overnight_12_hours` varchar(10) DEFAULT NULL,
  `rate_overnight_14_hours` varchar(10) DEFAULT NULL,
  `rate_1_hour_outcall` varchar(10) DEFAULT NULL,
  `rate_1_5_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_2_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_3_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_dinner_date_outcall` varchar(10) DEFAULT NULL,
  `rate_overnight_12_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_overnight_14_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_24_hours` varchar(10) DEFAULT NULL,
  `rate_48_hours` varchar(10) DEFAULT NULL,
  `rate_additional_days` varchar(10) DEFAULT NULL,
  `rate_24_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_48_hours_outcall` varchar(10) DEFAULT NULL,
  `rate_additional_days_outcall` varchar(10) DEFAULT NULL,
  `services` text,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of girls
-- ----------------------------
INSERT INTO `girls` VALUES ('1', null, 'n1', 'own_words1', '0000000001', 'comments here', 'location here', 'station here', 'available for here', '21', '22', '23', '24', 'blonde', 'green', 'irish', 'english', 'swimming', 'no', 'straight', 'no tatoos', 'no piercing', '1,2,3', 'no restaurant', 'no cuisine', 'no drink', 'no perfume', '1', '1.5', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', null, null);
INSERT INTO `girls` VALUES ('2', null, '1212', null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, '2017-05-23 13:51:00', '2017-05-23 13:51:00');

-- ----------------------------
-- Table structure for images
-- ----------------------------
DROP TABLE IF EXISTS `images`;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `girl_id` int(10) unsigned NOT NULL,
  `url` varchar(200) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of images
-- ----------------------------

-- ----------------------------
-- Table structure for posts
-- ----------------------------
DROP TABLE IF EXISTS `posts`;
CREATE TABLE `posts` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `content` text,
  `created_at` varchar(40) DEFAULT NULL,
  `updated_at` varchar(40) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of posts
-- ----------------------------
INSERT INTO `posts` VALUES ('1', 'aaa', '1111', null, null);
INSERT INTO `posts` VALUES ('2', 'bbbb', '2222', null, null);
INSERT INTO `posts` VALUES ('3', 'ccc', '3333', null, null);
INSERT INTO `posts` VALUES ('4', 'ddd', '4444', null, null);
INSERT INTO `posts` VALUES ('7', 'third title', '3just inserted via Eloquent', '2017-04-24 12:05:56', '2017-04-24 12:07:53');

-- ----------------------------
-- Table structure for roles
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('0', 'subscriber');
INSERT INTO `roles` VALUES ('1', 'client');
INSERT INTO `roles` VALUES ('2', 'administrator');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT '',
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `role_id` int(10) unsigned NOT NULL,
  `is_active` tinyint(1) unsigned zerofill DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`role_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'costicanu', 'costicanu@yahoo.com', '$2y$10$rAcSHj.8mRM4Y9XiU66TGezvnR1wJWizs1ua0.YE/R2wWVBxItSCe', '2017-05-07 15:04:50', '2017-05-16 13:16:39', 'CPKhckaXAM9LdYC0tobQQxgupAEsO3r9t1rqDYOV9ZLfDCrpE72GtMWKV1Cq', '2', '1');
INSERT INTO `users` VALUES ('4', 'test', null, null, '2017-05-11 13:22:59', '2017-05-11 13:22:59', null, '2', null);
INSERT INTO `users` VALUES ('6', 'test', null, null, '2017-05-11 13:23:55', '2017-05-11 13:23:55', null, '2', null);
INSERT INTO `users` VALUES ('7', 'test', null, null, '2017-05-11 13:23:59', '2017-05-11 13:23:59', null, '2', null);
INSERT INTO `users` VALUES ('8', 'test', null, null, '2017-05-11 13:24:16', '2017-05-11 13:24:16', null, '2', null);
INSERT INTO `users` VALUES ('11', 'test', null, null, '2017-05-11 13:25:54', '2017-05-11 13:25:54', null, '2', null);
INSERT INTO `users` VALUES ('13', 'cozmel2', 'costicanu7@gmail.com', null, '2017-05-15 12:04:40', '2017-05-17 11:09:43', null, '0', '1');
