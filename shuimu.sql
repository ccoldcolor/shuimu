/*
Navicat MySQL Data Transfer

Source Server         : wangmode
Source Server Version : 50637
Source Host           : localhost:3306
Source Database       : shuimu

Target Server Type    : MYSQL
Target Server Version : 50637
File Encoding         : 65001

Date: 2017-08-01 09:06:51
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for shuimu_admin
-- ----------------------------
DROP TABLE IF EXISTS `shuimu_admin`;
CREATE TABLE `shuimu_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `login_count` int(11) NOT NULL COMMENT '登陆次数',
  `password` varchar(255) NOT NULL COMMENT '密码',
  `salt` varchar(30) NOT NULL,
  `last_login_time` int(11) DEFAULT NULL,
  `status` int(10) NOT NULL DEFAULT '1' COMMENT '用户状态',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shuimu_admin
-- ----------------------------
INSERT INTO `shuimu_admin` VALUES ('1', 'wangmode', '8', '8d421e892a47dff539f46142eb09e56b', '1234', '1501548695', '1');

-- ----------------------------
-- Table structure for shuimu_config
-- ----------------------------
DROP TABLE IF EXISTS `shuimu_config`;
CREATE TABLE `shuimu_config` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL COMMENT '配置名',
  `value` varchar(255) NOT NULL COMMENT '配置值',
  `type` varchar(100) NOT NULL COMMENT '配置分组',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='网站配置';

-- ----------------------------
-- Records of shuimu_config
-- ----------------------------
INSERT INTO `shuimu_config` VALUES ('1', 'title', '6', '8d421e892a47dff539f46142eb09e56b');
