/*
Navicat MySQL Data Transfer

Source Server         : localhost_3306
Source Server Version : 50714
Source Host           : localhost:3306
Source Database       : webscraper

Target Server Type    : MYSQL
Target Server Version : 50714
File Encoding         : 65001

Date: 2017-05-15 01:11:37
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `posts`
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
-- Table structure for `roles`
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
INSERT INTO `roles` VALUES ('1', 'client');
INSERT INTO `roles` VALUES ('2', 'administrator');
INSERT INTO `roles` VALUES ('10', 'subscriber');

-- ----------------------------
-- Table structure for `users`
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
  `is_active` tinyint(1) unsigned zerofill NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `user_id` (`role_id`),
  CONSTRAINT `user_id` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'costicanu', 'costicanu@yahoo.com', null, '2017-05-07 15:04:50', '2017-05-14 22:39:35', 'JHcrK8pMdSFPOijeSUEPWHnNTfxt4ulzsSu6DVLVPNSax0SeMwmTUtNTiKky', '1', '1');
INSERT INTO `users` VALUES ('25', 'cocos3', 'csdfdsf@sdfsd.com', null, '2017-05-14 12:12:00', '2017-05-14 22:44:50', null, '1', '0');
