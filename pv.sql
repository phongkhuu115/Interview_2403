/*
 Navicat Premium Data Transfer

 Source Server         : localhost_3306
 Source Server Type    : MySQL
 Source Server Version : 100427
 Source Host           : localhost:3306
 Source Schema         : pv

 Target Server Type    : MySQL
 Target Server Version : 100427
 File Encoding         : 65001

 Date: 24/03/2023 13:16:49
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for email
-- ----------------------------
DROP TABLE IF EXISTS `email`;
CREATE TABLE `email`  (
  `email` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of email
-- ----------------------------
INSERT INTO `email` VALUES ('phongkhuu115@gmail.com');
INSERT INTO `email` VALUES ('thangvh@gmail.com');
INSERT INTO `email` VALUES ('email@email.com');

SET FOREIGN_KEY_CHECKS = 1;
