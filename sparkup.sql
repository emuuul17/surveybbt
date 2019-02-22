/*
 Navicat Premium Data Transfer

 Source Server         : Xampp 5.4
 Source Server Type    : MySQL
 Source Server Version : 50539
 Source Host           : localhost:3306
 Source Schema         : sparkup

 Target Server Type    : MySQL
 Target Server Version : 50539
 File Encoding         : 65001

 Date: 22/02/2019 23:29:25
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for activities
-- ----------------------------
DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resource_id` int(11) NOT NULL,
  `type` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `action` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `user_id` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `message` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 25 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of activities
-- ----------------------------
INSERT INTO `activities` VALUES (1, 1, 'subject', 'added', '1', 'A new subject was added (Company)', '2018-11-15 21:15:32');
INSERT INTO `activities` VALUES (2, 0, 'subject', 'updated', '1', 'A subject (Limit Company) was renamed (Limit Company)', '2018-11-21 20:53:31');
INSERT INTO `activities` VALUES (3, 0, 'subject', 'updated', '1', 'A subject (Limit Company) was renamed To (JessNoLimit)', '2018-11-21 20:54:45');
INSERT INTO `activities` VALUES (4, 0, 'subject', 'deleted', '1', 'Subject has been deleted', '2018-11-21 20:57:59');
INSERT INTO `activities` VALUES (5, 1, 'subject', 'added', '1', 'A new subject was added (News)', '2018-11-23 20:26:00');
INSERT INTO `activities` VALUES (6, 1, 'page', 'added', '1', 'A new subject was added (FAK THE RULES)', '2018-11-23 21:02:21');
INSERT INTO `activities` VALUES (7, 2, 'page', 'added', '1', 'A new subject was added (ANOTHER FUCK THE RULES)', '2018-11-23 22:12:15');
INSERT INTO `activities` VALUES (8, 2, 'subject', 'added', '1', 'A new subject was added (Company)', '2018-11-23 22:30:09');
INSERT INTO `activities` VALUES (9, 0, 'page', 'updated', '1', 'A page was added (FAK THE)', '2018-11-23 22:30:51');
INSERT INTO `activities` VALUES (10, 3, 'page', 'added', '1', 'A new page was added (XAXAXAXA)', '2018-11-23 22:33:06');
INSERT INTO `activities` VALUES (11, 0, 'page', 'deleted', '1', 'Page has been deleted', '2018-11-23 22:33:15');
INSERT INTO `activities` VALUES (12, 1, 'user', 'added', '1', 'A new user was added (admin)', '2018-11-23 23:03:06');
INSERT INTO `activities` VALUES (13, 0, 'user', 'updated', '1', 'A user was updated (admin)', '2018-11-23 23:23:56');
INSERT INTO `activities` VALUES (14, 0, 'user', 'deleted', '1', 'User has been deleted', '2018-11-23 23:24:49');
INSERT INTO `activities` VALUES (15, 2, 'user', 'added', '1', 'A new user was added (admin)', '2018-11-23 23:25:16');
INSERT INTO `activities` VALUES (16, 3, 'page', 'added', '1', 'A new page was added (Welcome)', '2018-12-06 20:38:21');
INSERT INTO `activities` VALUES (17, 0, 'page', 'updated', '1', 'A page was edited (ANOTHER FUCK THE RULES)', '2018-12-06 20:59:48');
INSERT INTO `activities` VALUES (18, 0, 'page', 'deleted', '2', 'Page has been deleted', '2018-12-06 21:14:48');
INSERT INTO `activities` VALUES (19, 0, 'page', 'deleted', '2', 'Page has been deleted', '2018-12-06 21:14:52');
INSERT INTO `activities` VALUES (20, 0, 'page', 'deleted', '2', 'Page has been deleted', '2018-12-06 21:14:55');
INSERT INTO `activities` VALUES (21, 4, 'page', 'added', '2', 'A new page was added (Welcome)', '2018-12-06 21:15:25');
INSERT INTO `activities` VALUES (22, 5, 'page', 'added', '2', 'A new page was added (About)', '2018-12-06 21:16:07');
INSERT INTO `activities` VALUES (23, 0, 'page', 'updated', '2', 'A page was edited (About)', '2018-12-06 21:16:55');
INSERT INTO `activities` VALUES (24, 0, 'page', 'updated', '2', 'A page was edited (Welcome)', '2018-12-06 21:17:18');

-- ----------------------------
-- Table structure for pages
-- ----------------------------
DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_id` int(11) NOT NULL DEFAULT 0,
  `user_id` int(11) NOT NULL,
  `slug` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `body` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `is_published` tinyint(1) NOT NULL DEFAULT 1,
  `is_featured` tinyint(1) NOT NULL DEFAULT 0,
  `in_menu` tinyint(1) NOT NULL DEFAULT 1,
  `order` int(11) NOT NULL DEFAULT 1,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES (4, 1, 2, 'welcome', 'Welcome', 'Welcome To The Pretty Bloods', 1, 0, 1, 1, '2018-12-06 21:15:25');
INSERT INTO `pages` VALUES (5, 1, 2, 'about', 'About', 'This is about page for sparkup CMS!', 1, 0, 1, 2, '2018-12-06 21:16:07');

-- ----------------------------
-- Table structure for subjects
-- ----------------------------
DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of subjects
-- ----------------------------
INSERT INTO `subjects` VALUES (1, 'News', '2018-11-23 20:26:00');
INSERT INTO `subjects` VALUES (2, 'Company', '2018-11-23 22:30:09');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `last_name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `username` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '0',
  `create_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'admin', 'sparkup', 'admin', 'ad@Min.com', '21232f297a57a5a743894a0e4a801fc3', '2018-11-23 23:25:16');

SET FOREIGN_KEY_CHECKS = 1;
