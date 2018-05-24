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
INSERT INTO `postar` (`idPost`, `titulo`, `mensagem`, `arquivo`, `data`) VALUES (NULL, 'Quando vc entrega a prova e vai embora', 'segura esses calc camilo', 'ee14d34487c18e1bcf80ce5d6a8b9354..gif', '2018-05-24 17:48:03')INSERT INTO `postar` VALUES (7, 'DFKLASDFASDF', 'DSAFASDF', '8b412123b7febed363b2fbc0e9275489.png', '2018-05-24 04:16:55');
INSERT INTO `postar` (`idPost`, `titulo`, `mensagem`, `arquivo`, `data`) VALUES (NULL, 'Na hora de chorar nota o professor lembra que vc foi pra Padoca no meio da aula', 'perdoa essa aÃ­', 'df9770a0403471cc8c745620d133f7e9..png', '2018-05-24 17:49:17')

SET FOREIGN_KEY_CHECKS = 1;
