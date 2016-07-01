/*
 Navicat Premium Data Transfer

 Source Server         : MAMP
 Source Server Type    : MySQL
 Source Server Version : 50538
 Source Host           : localhost
 Source Database       : myPHP

 Target Server Type    : MySQL
 Target Server Version : 50538
 File Encoding         : utf-8

 Date: 07/01/2016 14:14:47 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `member`
-- ----------------------------
DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(255) NOT NULL,
  `member_pass` varchar(255) NOT NULL,
  `member_create` datetime NOT NULL,
  `member_type` int(11) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `member`
-- ----------------------------
BEGIN;
INSERT INTO `member` VALUES ('1', 'user', 'pass', '2016-06-29 18:53:43', '1');
COMMIT;

-- ----------------------------
--  Table structure for `tb_brand`
-- ----------------------------
DROP TABLE IF EXISTS `tb_brand`;
CREATE TABLE `tb_brand` (
  `id_brand` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_brand`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tb_brand`
-- ----------------------------
BEGIN;
INSERT INTO `tb_brand` VALUES ('1', 'Apple'), ('2', 'Samsung'), ('3', 'Sony');
COMMIT;

-- ----------------------------
--  Table structure for `tb_car`
-- ----------------------------
DROP TABLE IF EXISTS `tb_car`;
CREATE TABLE `tb_car` (
  `id_car` int(11) NOT NULL AUTO_INCREMENT,
  `car_name` varchar(255) NOT NULL,
  PRIMARY KEY (`id_car`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tb_car`
-- ----------------------------
BEGIN;
INSERT INTO `tb_car` VALUES ('1', 'Honda'), ('2', 'Toyota'), ('3', 'Mitsubitshi'), ('4', 'Nissan'), ('5', 'Benz'), ('6', 'MG'), ('7', 'Chevrolet'), ('8', 'Cadilac'), ('9', 'Pergeot'), ('10', 'Kia');
COMMIT;

-- ----------------------------
--  Table structure for `tb_model`
-- ----------------------------
DROP TABLE IF EXISTS `tb_model`;
CREATE TABLE `tb_model` (
  `id_model` int(11) NOT NULL AUTO_INCREMENT,
  `model` varchar(255) NOT NULL,
  `id_brand` int(11) NOT NULL,
  PRIMARY KEY (`id_model`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tb_model`
-- ----------------------------
BEGIN;
INSERT INTO `tb_model` VALUES ('1', 'iPhone5', '1'), ('2', 'iPhone6', '1'), ('3', 'GalaxyS3', '2'), ('4', 'GalaxyS4', '2'), ('5', 'Xperia Z4', '3'), ('6', 'Xperia Z5', '3');
COMMIT;

-- ----------------------------
--  Table structure for `tb_name`
-- ----------------------------
DROP TABLE IF EXISTS `tb_name`;
CREATE TABLE `tb_name` (
  `id_name` int(255) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `id_car` int(11) NOT NULL,
  PRIMARY KEY (`id_name`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `tb_name`
-- ----------------------------
BEGIN;
INSERT INTO `tb_name` VALUES ('1', 'สมชาย', '1'), ('2', 'พวงทอง', '1'), ('3', 'มานะ', '2'), ('4', 'ทองสวย', '2'), ('5', 'สายทอง', '3'), ('6', 'ทองเปลว', '3'), ('7', 'พงสัก', '4'), ('8', 'สมดี', '4'), ('9', 'มีใจ', '5'), ('10', 'สายหยุด', '5'), ('11', 'มีทอง', '6'), ('12', 'กรารุน', '6'), ('13', 'หมูสาย', '7'), ('14', 'ไก่ทอง', '7'), ('15', 'ปลาพิม', '8'), ('16', 'พิมขา', '8'), ('17', 'เขมิกา', '9'), ('18', 'สมพบ', '9'), ('19', 'พบพัก', '10'), ('20', 'มีนา', '10');
COMMIT;

-- ----------------------------
--  Table structure for `test`
-- ----------------------------
DROP TABLE IF EXISTS `test`;
CREATE TABLE `test` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `lat` varchar(255) NOT NULL,
  `long` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `test`
-- ----------------------------
BEGIN;
INSERT INTO `test` VALUES ('15', 'NN', '10', '20'), ('16', 'NN', '10', '20'), ('17', 'NN', '10', '20'), ('18', 'NN', '10', '20'), ('19', 'NN', '10', '20'), ('20', 'NN', '10', '20'), ('22', 'NN', '10', '20'), ('23', 'NN', '10', '20'), ('24', 'NN', '10', '20'), ('25', 'NN', '10', '20'), ('26', 'NN', '10', '20'), ('27', 'NN', '10', '20'), ('28', 'NN', '10', '20');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
