/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MariaDB
 Source Server Version : 100131
 Source Host           : localhost:3306
 Source Schema         : querover

 Target Server Type    : MariaDB
 Target Server Version : 100131
 File Encoding         : 65001

 Date: 24/05/2018 04:42:46
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for postar
-- ----------------------------
DROP TABLE IF EXISTS `postar`;
CREATE TABLE `postar`  (
  `idPost` int(255) NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `mensagem` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `arquivo` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `data` datetime(0) NOT NULL,
  PRIMARY KEY (`idPost`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 18 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of postar
-- ----------------------------
INSERT INTO `postar` VALUES (6, 'TESTE', 'TESTET', '0b7b52b3ac461f77d34e8b893fbe97b0.jpg', '2018-05-24 04:15:02');
INSERT INTO `postar` VALUES (7, 'DFKLASDFASDF', 'DSAFASDF', '8b412123b7febed363b2fbc0e9275489.png', '2018-05-24 04:16:55');
INSERT INTO `postar` VALUES (8, 'RETRETWE', 'RTERWTRE', 'd850c6ad9b37deaabba8a9d9a41a4955.png', '2018-05-24 04:17:31');
INSERT INTO `postar` VALUES (9, 'RETRETWE', 'RTERWTRE', '5d89e3b8c19862a5c3022096861cc41a.png', '2018-05-24 04:18:19');
INSERT INTO `postar` VALUES (10, 'RETRETWE', 'RTERWTRE', '3b76f33a272f22dda8410f2ae9ecafc2.png', '2018-05-24 04:18:29');
INSERT INTO `postar` VALUES (11, 'DFDFDS', 'SDFDSF', 'added193105b654813e67051593bf4f0.jpg', '2018-05-24 04:18:34');
INSERT INTO `postar` VALUES (12, 'DFDFDS', 'SDFDSF', '8b515483c2d2a2e2527e5122da0af69d.jpg', '2018-05-24 04:18:48');
INSERT INTO `postar` VALUES (13, 'DFDFDS', 'SDFDSF', '4a8c743b11581600f5657dbc37ad0c18.jpg', '2018-05-24 04:18:54');
INSERT INTO `postar` VALUES (14, 'dfdf', 'dfdsfd', '8f0bdd90ff5a31721aadf642d3c406c6.jpg', '2018-05-24 04:20:49');
INSERT INTO `postar` VALUES (15, 'sdsd', 'sdasd', 'df7267672974aa89e7b851654f586589.jpg', '2018-05-24 04:21:29');
INSERT INTO `postar` VALUES (16, 'fdfdf', 'dfdf', '4a2735def89ffb147ff1dc781fff233e.jpg', '2018-05-24 04:25:07');
INSERT INTO `postar` VALUES (17, 'dsfdfds', 'dfsdfds', '3600f698ca73f11de50384143e85da3b.jpg', '2018-05-24 04:31:13');

SET FOREIGN_KEY_CHECKS = 1;
