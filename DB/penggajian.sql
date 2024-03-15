/*
 Navicat Premium Data Transfer

 Source Server         : SIAKED
 Source Server Type    : MySQL
 Source Server Version : 100138 (10.1.38-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : penggajian

 Target Server Type    : MySQL
 Target Server Version : 100138 (10.1.38-MariaDB)
 File Encoding         : 65001

 Date: 15/03/2024 09:55:22
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for tbl_ekstra
-- ----------------------------
DROP TABLE IF EXISTS `tbl_ekstra`;
CREATE TABLE `tbl_ekstra`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_ekstra` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tunjangan_ekstra` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_ekstra
-- ----------------------------
INSERT INTO `tbl_ekstra` VALUES (1, 'Guru Ekstra', 135000);
INSERT INTO `tbl_ekstra` VALUES (2, 'Bukan Guru Ekstra', 0);

-- ----------------------------
-- Table structure for tbl_golongan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_golongan`;
CREATE TABLE `tbl_golongan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_golongan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tunjangan_golongan` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 581 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_golongan
-- ----------------------------
INSERT INTO `tbl_golongan` VALUES (1, 'IA0', 390200);
INSERT INTO `tbl_golongan` VALUES (2, 'IA1', 415200);
INSERT INTO `tbl_golongan` VALUES (3, 'IA2', 440200);
INSERT INTO `tbl_golongan` VALUES (4, 'IA3', 465200);
INSERT INTO `tbl_golongan` VALUES (5, 'IA4', 490200);
INSERT INTO `tbl_golongan` VALUES (6, 'IA5', 515200);
INSERT INTO `tbl_golongan` VALUES (7, 'IA6', 540200);
INSERT INTO `tbl_golongan` VALUES (8, 'IA7', 565200);
INSERT INTO `tbl_golongan` VALUES (9, 'IA8', 590200);
INSERT INTO `tbl_golongan` VALUES (10, 'IA9', 615200);
INSERT INTO `tbl_golongan` VALUES (11, 'IA10', 640200);
INSERT INTO `tbl_golongan` VALUES (12, 'IA11', 665200);
INSERT INTO `tbl_golongan` VALUES (13, 'IA12', 690200);
INSERT INTO `tbl_golongan` VALUES (14, 'IA13', 715200);
INSERT INTO `tbl_golongan` VALUES (15, 'IA14', 740200);
INSERT INTO `tbl_golongan` VALUES (16, 'IA15', 765200);
INSERT INTO `tbl_golongan` VALUES (17, 'IA16', 790200);
INSERT INTO `tbl_golongan` VALUES (18, 'IA17', 815200);
INSERT INTO `tbl_golongan` VALUES (19, 'IA18', 840200);
INSERT INTO `tbl_golongan` VALUES (20, 'IA19', 865200);
INSERT INTO `tbl_golongan` VALUES (21, 'IA20', 890200);
INSERT INTO `tbl_golongan` VALUES (22, 'IA21', 915200);
INSERT INTO `tbl_golongan` VALUES (23, 'IA22', 940200);
INSERT INTO `tbl_golongan` VALUES (24, 'IA23', 965200);
INSERT INTO `tbl_golongan` VALUES (25, 'IA24', 990200);
INSERT INTO `tbl_golongan` VALUES (26, 'IA25', 1015200);
INSERT INTO `tbl_golongan` VALUES (27, 'IA26', 1040200);
INSERT INTO `tbl_golongan` VALUES (28, 'IA27', 1065200);
INSERT INTO `tbl_golongan` VALUES (29, 'IB0', 423750);
INSERT INTO `tbl_golongan` VALUES (30, 'IB1', 443750);
INSERT INTO `tbl_golongan` VALUES (31, 'IB2', 468750);
INSERT INTO `tbl_golongan` VALUES (32, 'IB3', 493750);
INSERT INTO `tbl_golongan` VALUES (33, 'IB4', 518750);
INSERT INTO `tbl_golongan` VALUES (34, 'IB5', 543750);
INSERT INTO `tbl_golongan` VALUES (35, 'IB6', 568750);
INSERT INTO `tbl_golongan` VALUES (36, 'IB7', 593750);
INSERT INTO `tbl_golongan` VALUES (37, 'IB8', 618750);
INSERT INTO `tbl_golongan` VALUES (38, 'IB9', 643750);
INSERT INTO `tbl_golongan` VALUES (39, 'IB10', 668750);
INSERT INTO `tbl_golongan` VALUES (40, 'IB11', 693750);
INSERT INTO `tbl_golongan` VALUES (41, 'IB12', 718750);
INSERT INTO `tbl_golongan` VALUES (42, 'IB13', 743750);
INSERT INTO `tbl_golongan` VALUES (43, 'IB14', 768750);
INSERT INTO `tbl_golongan` VALUES (44, 'IB15', 793750);
INSERT INTO `tbl_golongan` VALUES (45, 'IB16', 818750);
INSERT INTO `tbl_golongan` VALUES (46, 'IB17', 843750);
INSERT INTO `tbl_golongan` VALUES (47, 'IB18', 868750);
INSERT INTO `tbl_golongan` VALUES (48, 'IB19', 893750);
INSERT INTO `tbl_golongan` VALUES (49, 'IB20', 918750);
INSERT INTO `tbl_golongan` VALUES (50, 'IB21', 943750);
INSERT INTO `tbl_golongan` VALUES (51, 'IB22', 968750);
INSERT INTO `tbl_golongan` VALUES (52, 'IB23', 993750);
INSERT INTO `tbl_golongan` VALUES (53, 'IB24', 1018750);
INSERT INTO `tbl_golongan` VALUES (54, 'IB25', 1043750);
INSERT INTO `tbl_golongan` VALUES (55, 'IB26', 1068750);
INSERT INTO `tbl_golongan` VALUES (56, 'IB27', 1103750);
INSERT INTO `tbl_golongan` VALUES (57, 'IC0', 444150);
INSERT INTO `tbl_golongan` VALUES (58, 'IC1', 469150);
INSERT INTO `tbl_golongan` VALUES (59, 'IC2', 494150);
INSERT INTO `tbl_golongan` VALUES (60, 'IC3', 519150);
INSERT INTO `tbl_golongan` VALUES (61, 'IC4', 544150);
INSERT INTO `tbl_golongan` VALUES (62, 'IC5', 569150);
INSERT INTO `tbl_golongan` VALUES (63, 'IC6', 594150);
INSERT INTO `tbl_golongan` VALUES (64, 'IC7', 619150);
INSERT INTO `tbl_golongan` VALUES (65, 'IC8', 644150);
INSERT INTO `tbl_golongan` VALUES (66, 'IC9', 669150);
INSERT INTO `tbl_golongan` VALUES (67, 'IC10', 694150);
INSERT INTO `tbl_golongan` VALUES (68, 'IC11', 719150);
INSERT INTO `tbl_golongan` VALUES (69, 'IC12', 744150);
INSERT INTO `tbl_golongan` VALUES (70, 'IC13', 769150);
INSERT INTO `tbl_golongan` VALUES (71, 'IC14', 794150);
INSERT INTO `tbl_golongan` VALUES (72, 'IC15', 819150);
INSERT INTO `tbl_golongan` VALUES (73, 'IC16', 844150);
INSERT INTO `tbl_golongan` VALUES (74, 'IC17', 869150);
INSERT INTO `tbl_golongan` VALUES (75, 'IC18', 894150);
INSERT INTO `tbl_golongan` VALUES (76, 'IC19', 919150);
INSERT INTO `tbl_golongan` VALUES (77, 'IC20', 944150);
INSERT INTO `tbl_golongan` VALUES (78, 'IC21', 969150);
INSERT INTO `tbl_golongan` VALUES (79, 'IC22', 994150);
INSERT INTO `tbl_golongan` VALUES (80, 'IC23', 1019150);
INSERT INTO `tbl_golongan` VALUES (81, 'IC24', 1044150);
INSERT INTO `tbl_golongan` VALUES (82, 'IC25', 1069150);
INSERT INTO `tbl_golongan` VALUES (83, 'IC26', 1094150);
INSERT INTO `tbl_golongan` VALUES (84, 'IC27', 1119150);
INSERT INTO `tbl_golongan` VALUES (85, 'ID0', 462950);
INSERT INTO `tbl_golongan` VALUES (86, 'ID1', 487950);
INSERT INTO `tbl_golongan` VALUES (87, 'ID2', 512950);
INSERT INTO `tbl_golongan` VALUES (88, 'ID3', 537950);
INSERT INTO `tbl_golongan` VALUES (89, 'ID4', 562950);
INSERT INTO `tbl_golongan` VALUES (90, 'ID5', 587950);
INSERT INTO `tbl_golongan` VALUES (91, 'ID6', 612950);
INSERT INTO `tbl_golongan` VALUES (92, 'ID7', 637950);
INSERT INTO `tbl_golongan` VALUES (93, 'ID8', 662950);
INSERT INTO `tbl_golongan` VALUES (94, 'ID9', 687950);
INSERT INTO `tbl_golongan` VALUES (95, 'ID10', 712950);
INSERT INTO `tbl_golongan` VALUES (96, 'ID11', 737950);
INSERT INTO `tbl_golongan` VALUES (97, 'ID12', 762950);
INSERT INTO `tbl_golongan` VALUES (98, 'ID13', 787950);
INSERT INTO `tbl_golongan` VALUES (99, 'ID14', 812950);
INSERT INTO `tbl_golongan` VALUES (100, 'ID15', 837950);
INSERT INTO `tbl_golongan` VALUES (101, 'ID16', 862950);
INSERT INTO `tbl_golongan` VALUES (102, 'ID17', 887950);
INSERT INTO `tbl_golongan` VALUES (103, 'ID18', 912950);
INSERT INTO `tbl_golongan` VALUES (104, 'ID19', 937950);
INSERT INTO `tbl_golongan` VALUES (105, 'ID20', 962950);
INSERT INTO `tbl_golongan` VALUES (106, 'ID21', 987950);
INSERT INTO `tbl_golongan` VALUES (107, 'ID22', 1012950);
INSERT INTO `tbl_golongan` VALUES (108, 'ID23', 1037950);
INSERT INTO `tbl_golongan` VALUES (109, 'ID24', 1062950);
INSERT INTO `tbl_golongan` VALUES (110, 'ID25', 1087950);
INSERT INTO `tbl_golongan` VALUES (111, 'ID26', 1132950);
INSERT INTO `tbl_golongan` VALUES (112, 'ID27', 1157950);
INSERT INTO `tbl_golongan` VALUES (113, 'IIA0', 616216);
INSERT INTO `tbl_golongan` VALUES (114, 'IIA1', 641216);
INSERT INTO `tbl_golongan` VALUES (115, 'IIA2', 666216);
INSERT INTO `tbl_golongan` VALUES (116, 'IIA3', 691216);
INSERT INTO `tbl_golongan` VALUES (117, 'IIA4', 716216);
INSERT INTO `tbl_golongan` VALUES (118, 'IIA5', 741216);
INSERT INTO `tbl_golongan` VALUES (119, 'IIA6', 766216);
INSERT INTO `tbl_golongan` VALUES (120, 'IIA7', 791216);
INSERT INTO `tbl_golongan` VALUES (121, 'IIA8', 816216);
INSERT INTO `tbl_golongan` VALUES (122, 'IIA9', 841216);
INSERT INTO `tbl_golongan` VALUES (123, 'IIA10', 866216);
INSERT INTO `tbl_golongan` VALUES (124, 'IIA11', 891216);
INSERT INTO `tbl_golongan` VALUES (125, 'IIA12', 916216);
INSERT INTO `tbl_golongan` VALUES (126, 'IIA13', 941216);
INSERT INTO `tbl_golongan` VALUES (127, 'IIA14', 966216);
INSERT INTO `tbl_golongan` VALUES (128, 'IIA15', 991216);
INSERT INTO `tbl_golongan` VALUES (129, 'IIA16', 1016216);
INSERT INTO `tbl_golongan` VALUES (130, 'IIA17', 1041216);
INSERT INTO `tbl_golongan` VALUES (131, 'IIA18', 1066216);
INSERT INTO `tbl_golongan` VALUES (132, 'IIA19', 1091216);
INSERT INTO `tbl_golongan` VALUES (133, 'IIA20', 1116216);
INSERT INTO `tbl_golongan` VALUES (134, 'IIA21', 1141216);
INSERT INTO `tbl_golongan` VALUES (135, 'IIA22', 1166216);
INSERT INTO `tbl_golongan` VALUES (136, 'IIA23', 1191216);
INSERT INTO `tbl_golongan` VALUES (137, 'IIA24', 1216216);
INSERT INTO `tbl_golongan` VALUES (138, 'IIA25', 1241216);
INSERT INTO `tbl_golongan` VALUES (139, 'IIA26', 1266216);
INSERT INTO `tbl_golongan` VALUES (140, 'IIA27', 1291216);
INSERT INTO `tbl_golongan` VALUES (141, 'IIA28', 1316216);
INSERT INTO `tbl_golongan` VALUES (142, 'IIA29', 1341216);
INSERT INTO `tbl_golongan` VALUES (143, 'IIA30', 1366216);
INSERT INTO `tbl_golongan` VALUES (144, 'IIA31', 1391216);
INSERT INTO `tbl_golongan` VALUES (145, 'IIA32', 1416216);
INSERT INTO `tbl_golongan` VALUES (146, 'IIA33', 1441216);
INSERT INTO `tbl_golongan` VALUES (147, 'IIA34', 1466216);
INSERT INTO `tbl_golongan` VALUES (148, 'IIA35', 1491216);
INSERT INTO `tbl_golongan` VALUES (149, 'IIA36', 1516216);
INSERT INTO `tbl_golongan` VALUES (150, 'IIA37', 1541216);
INSERT INTO `tbl_golongan` VALUES (151, 'IIB0', 632000);
INSERT INTO `tbl_golongan` VALUES (152, 'IIB1', 662000);
INSERT INTO `tbl_golongan` VALUES (153, 'IIB2', 692000);
INSERT INTO `tbl_golongan` VALUES (154, 'IIB3', 722000);
INSERT INTO `tbl_golongan` VALUES (155, 'IIB4', 752000);
INSERT INTO `tbl_golongan` VALUES (156, 'IIB5', 782000);
INSERT INTO `tbl_golongan` VALUES (157, 'IIB6', 812000);
INSERT INTO `tbl_golongan` VALUES (158, 'IIB7', 842000);
INSERT INTO `tbl_golongan` VALUES (159, 'IIB8', 872000);
INSERT INTO `tbl_golongan` VALUES (160, 'IIB9', 902000);
INSERT INTO `tbl_golongan` VALUES (161, 'IIB10', 932000);
INSERT INTO `tbl_golongan` VALUES (162, 'IIB11', 962000);
INSERT INTO `tbl_golongan` VALUES (163, 'IIB12', 992000);
INSERT INTO `tbl_golongan` VALUES (164, 'IIB13', 1022000);
INSERT INTO `tbl_golongan` VALUES (165, 'IIB14', 1052000);
INSERT INTO `tbl_golongan` VALUES (166, 'IIB15', 1082000);
INSERT INTO `tbl_golongan` VALUES (167, 'IIB16', 1112000);
INSERT INTO `tbl_golongan` VALUES (168, 'IIB17', 1142000);
INSERT INTO `tbl_golongan` VALUES (169, 'IIB18', 1172000);
INSERT INTO `tbl_golongan` VALUES (170, 'IIB19', 1202000);
INSERT INTO `tbl_golongan` VALUES (171, 'IIB20', 1232000);
INSERT INTO `tbl_golongan` VALUES (172, 'IIB21', 1262000);
INSERT INTO `tbl_golongan` VALUES (173, 'IIB22', 1292000);
INSERT INTO `tbl_golongan` VALUES (174, 'IIB23', 1322000);
INSERT INTO `tbl_golongan` VALUES (175, 'IIB24', 1352000);
INSERT INTO `tbl_golongan` VALUES (176, 'IIB25', 1382000);
INSERT INTO `tbl_golongan` VALUES (177, 'IIB26', 1412000);
INSERT INTO `tbl_golongan` VALUES (178, 'IIB27', 1442000);
INSERT INTO `tbl_golongan` VALUES (179, 'IIB28', 1472000);
INSERT INTO `tbl_golongan` VALUES (180, 'IIB29', 1502000);
INSERT INTO `tbl_golongan` VALUES (181, 'IIB30', 1532000);
INSERT INTO `tbl_golongan` VALUES (182, 'IIB31', 1562000);
INSERT INTO `tbl_golongan` VALUES (183, 'IIB32', 1592000);
INSERT INTO `tbl_golongan` VALUES (184, 'IIB33', 1622000);
INSERT INTO `tbl_golongan` VALUES (185, 'IIB34', 1652000);
INSERT INTO `tbl_golongan` VALUES (186, 'IIB35', 1682000);
INSERT INTO `tbl_golongan` VALUES (187, 'IIB36', 1712000);
INSERT INTO `tbl_golongan` VALUES (188, 'IIB37', 1742000);
INSERT INTO `tbl_golongan` VALUES (189, 'IIC0', 644504);
INSERT INTO `tbl_golongan` VALUES (190, 'IIC1', 674504);
INSERT INTO `tbl_golongan` VALUES (191, 'IIC2', 704504);
INSERT INTO `tbl_golongan` VALUES (192, 'IIC3', 734504);
INSERT INTO `tbl_golongan` VALUES (193, 'IIC4', 764504);
INSERT INTO `tbl_golongan` VALUES (194, 'IIC5', 794504);
INSERT INTO `tbl_golongan` VALUES (195, 'IIC6', 824504);
INSERT INTO `tbl_golongan` VALUES (196, 'IIC7', 854504);
INSERT INTO `tbl_golongan` VALUES (197, 'IIC8', 884504);
INSERT INTO `tbl_golongan` VALUES (198, 'IIC9', 914504);
INSERT INTO `tbl_golongan` VALUES (199, 'IIC10', 944504);
INSERT INTO `tbl_golongan` VALUES (200, 'IIC11', 974504);
INSERT INTO `tbl_golongan` VALUES (201, 'IIC12', 1004504);
INSERT INTO `tbl_golongan` VALUES (202, 'IIC13', 1034504);
INSERT INTO `tbl_golongan` VALUES (203, 'IIC14', 1064504);
INSERT INTO `tbl_golongan` VALUES (204, 'IIC15', 1094504);
INSERT INTO `tbl_golongan` VALUES (205, 'IIC16', 1124504);
INSERT INTO `tbl_golongan` VALUES (206, 'IIC17', 1154504);
INSERT INTO `tbl_golongan` VALUES (207, 'IIC18', 1184504);
INSERT INTO `tbl_golongan` VALUES (208, 'IIC19', 1214504);
INSERT INTO `tbl_golongan` VALUES (209, 'IIC20', 1244504);
INSERT INTO `tbl_golongan` VALUES (210, 'IIC21', 1274504);
INSERT INTO `tbl_golongan` VALUES (211, 'IIC22', 1304504);
INSERT INTO `tbl_golongan` VALUES (212, 'IIC23', 1334504);
INSERT INTO `tbl_golongan` VALUES (213, 'IIC24', 1364504);
INSERT INTO `tbl_golongan` VALUES (214, 'IIC25', 1394504);
INSERT INTO `tbl_golongan` VALUES (215, 'IIC26', 1424504);
INSERT INTO `tbl_golongan` VALUES (216, 'IIC27', 1454504);
INSERT INTO `tbl_golongan` VALUES (217, 'IIC28', 1484504);
INSERT INTO `tbl_golongan` VALUES (218, 'IIC29', 1514504);
INSERT INTO `tbl_golongan` VALUES (219, 'IIC30', 1544504);
INSERT INTO `tbl_golongan` VALUES (220, 'IIC31', 1574504);
INSERT INTO `tbl_golongan` VALUES (221, 'IIC32', 1604504);
INSERT INTO `tbl_golongan` VALUES (222, 'IIC33', 1634504);
INSERT INTO `tbl_golongan` VALUES (223, 'IIC34', 1664504);
INSERT INTO `tbl_golongan` VALUES (224, 'IIC35', 1694504);
INSERT INTO `tbl_golongan` VALUES (225, 'IIC36', 1724504);
INSERT INTO `tbl_golongan` VALUES (226, 'IIC37', 1754504);
INSERT INTO `tbl_golongan` VALUES (227, 'IID0', 671776);
INSERT INTO `tbl_golongan` VALUES (228, 'IID1', 701776);
INSERT INTO `tbl_golongan` VALUES (229, 'IID2', 731776);
INSERT INTO `tbl_golongan` VALUES (230, 'IID3', 761776);
INSERT INTO `tbl_golongan` VALUES (231, 'IID4', 791776);
INSERT INTO `tbl_golongan` VALUES (232, 'IID5', 821776);
INSERT INTO `tbl_golongan` VALUES (233, 'IID6', 851776);
INSERT INTO `tbl_golongan` VALUES (234, 'IID7', 881776);
INSERT INTO `tbl_golongan` VALUES (235, 'IID8', 911776);
INSERT INTO `tbl_golongan` VALUES (236, 'IID9', 941776);
INSERT INTO `tbl_golongan` VALUES (237, 'IID10', 971776);
INSERT INTO `tbl_golongan` VALUES (238, 'IID11', 1001776);
INSERT INTO `tbl_golongan` VALUES (239, 'IID12', 1031776);
INSERT INTO `tbl_golongan` VALUES (240, 'IID13', 1061776);
INSERT INTO `tbl_golongan` VALUES (241, 'IID14', 1091776);
INSERT INTO `tbl_golongan` VALUES (242, 'IID15', 1121776);
INSERT INTO `tbl_golongan` VALUES (243, 'IID16', 1151776);
INSERT INTO `tbl_golongan` VALUES (244, 'IID17', 1181776);
INSERT INTO `tbl_golongan` VALUES (245, 'IID18', 1211776);
INSERT INTO `tbl_golongan` VALUES (246, 'IID19', 1241776);
INSERT INTO `tbl_golongan` VALUES (247, 'IID20', 1271776);
INSERT INTO `tbl_golongan` VALUES (248, 'IID21', 1301776);
INSERT INTO `tbl_golongan` VALUES (249, 'IID22', 1331776);
INSERT INTO `tbl_golongan` VALUES (250, 'IID23', 1361776);
INSERT INTO `tbl_golongan` VALUES (251, 'IID24', 1391776);
INSERT INTO `tbl_golongan` VALUES (252, 'IID25', 1421776);
INSERT INTO `tbl_golongan` VALUES (253, 'IID26', 1451776);
INSERT INTO `tbl_golongan` VALUES (254, 'IID27', 1481776);
INSERT INTO `tbl_golongan` VALUES (255, 'IID28', 1511776);
INSERT INTO `tbl_golongan` VALUES (256, 'IID29', 1541776);
INSERT INTO `tbl_golongan` VALUES (257, 'IID30', 1571776);
INSERT INTO `tbl_golongan` VALUES (258, 'IID31', 1601776);
INSERT INTO `tbl_golongan` VALUES (259, 'IID32', 1631776);
INSERT INTO `tbl_golongan` VALUES (260, 'IID33', 1661776);
INSERT INTO `tbl_golongan` VALUES (261, 'IID34', 1691776);
INSERT INTO `tbl_golongan` VALUES (262, 'IID35', 1721776);
INSERT INTO `tbl_golongan` VALUES (263, 'IID36', 1751776);
INSERT INTO `tbl_golongan` VALUES (264, 'IID37', 1781776);
INSERT INTO `tbl_golongan` VALUES (265, 'IIIA0', 902790);
INSERT INTO `tbl_golongan` VALUES (266, 'IIIA1', 932790);
INSERT INTO `tbl_golongan` VALUES (267, 'IIIA2', 962790);
INSERT INTO `tbl_golongan` VALUES (268, 'IIIA3', 992790);
INSERT INTO `tbl_golongan` VALUES (269, 'IIIA4', 1022790);
INSERT INTO `tbl_golongan` VALUES (270, 'IIIA5', 1052790);
INSERT INTO `tbl_golongan` VALUES (271, 'IIIA6', 1082790);
INSERT INTO `tbl_golongan` VALUES (272, 'IIIA7', 1112790);
INSERT INTO `tbl_golongan` VALUES (273, 'IIIA8', 1142790);
INSERT INTO `tbl_golongan` VALUES (274, 'IIIA9', 1172790);
INSERT INTO `tbl_golongan` VALUES (275, 'IIIA10', 1202790);
INSERT INTO `tbl_golongan` VALUES (276, 'IIIA11', 1232790);
INSERT INTO `tbl_golongan` VALUES (277, 'IIIA12', 1262790);
INSERT INTO `tbl_golongan` VALUES (278, 'IIIA13', 1292790);
INSERT INTO `tbl_golongan` VALUES (279, 'IIIA14', 1322790);
INSERT INTO `tbl_golongan` VALUES (280, 'IIIA15', 1352790);
INSERT INTO `tbl_golongan` VALUES (281, 'IIIA16', 1382790);
INSERT INTO `tbl_golongan` VALUES (282, 'IIIA17', 1412790);
INSERT INTO `tbl_golongan` VALUES (283, 'IIIA18', 1442790);
INSERT INTO `tbl_golongan` VALUES (284, 'IIIA19', 1472790);
INSERT INTO `tbl_golongan` VALUES (285, 'IIIA20', 1502790);
INSERT INTO `tbl_golongan` VALUES (286, 'IIIA21', 1532790);
INSERT INTO `tbl_golongan` VALUES (287, 'IIIA22', 1562790);
INSERT INTO `tbl_golongan` VALUES (288, 'IIIA23', 1592790);
INSERT INTO `tbl_golongan` VALUES (289, 'IIIA24', 1622790);
INSERT INTO `tbl_golongan` VALUES (290, 'IIIA25', 1652790);
INSERT INTO `tbl_golongan` VALUES (291, 'IIIA26', 1682790);
INSERT INTO `tbl_golongan` VALUES (292, 'IIIA27', 1712790);
INSERT INTO `tbl_golongan` VALUES (293, 'IIIA28', 1742790);
INSERT INTO `tbl_golongan` VALUES (294, 'IIIA29', 1772790);
INSERT INTO `tbl_golongan` VALUES (295, 'IIIA30', 1802790);
INSERT INTO `tbl_golongan` VALUES (296, 'IIIA31', 1832790);
INSERT INTO `tbl_golongan` VALUES (297, 'IIIA32', 1862790);
INSERT INTO `tbl_golongan` VALUES (298, 'IIIA33', 1892790);
INSERT INTO `tbl_golongan` VALUES (299, 'IIIA34', 1922790);
INSERT INTO `tbl_golongan` VALUES (300, 'IIIB0', 940975);
INSERT INTO `tbl_golongan` VALUES (301, 'IIIB1', 975975);
INSERT INTO `tbl_golongan` VALUES (302, 'IIIB2', 1010975);
INSERT INTO `tbl_golongan` VALUES (303, 'IIIB3', 1045975);
INSERT INTO `tbl_golongan` VALUES (304, 'IIIB4', 1080975);
INSERT INTO `tbl_golongan` VALUES (305, 'IIIB5', 1115975);
INSERT INTO `tbl_golongan` VALUES (306, 'IIIB6', 1150975);
INSERT INTO `tbl_golongan` VALUES (307, 'IIIB7', 1185975);
INSERT INTO `tbl_golongan` VALUES (308, 'IIIB8', 1220975);
INSERT INTO `tbl_golongan` VALUES (309, 'IIIB9', 1255975);
INSERT INTO `tbl_golongan` VALUES (310, 'IIIB10', 1290975);
INSERT INTO `tbl_golongan` VALUES (311, 'IIIB11', 1325975);
INSERT INTO `tbl_golongan` VALUES (312, 'IIIB12', 1360975);
INSERT INTO `tbl_golongan` VALUES (313, 'IIIB13', 1395975);
INSERT INTO `tbl_golongan` VALUES (314, 'IIIB14', 1430975);
INSERT INTO `tbl_golongan` VALUES (315, 'IIIB15', 1465975);
INSERT INTO `tbl_golongan` VALUES (316, 'IIIB16', 1500975);
INSERT INTO `tbl_golongan` VALUES (317, 'IIIB17', 1535975);
INSERT INTO `tbl_golongan` VALUES (318, 'IIIB18', 1570975);
INSERT INTO `tbl_golongan` VALUES (319, 'IIIB19', 1605975);
INSERT INTO `tbl_golongan` VALUES (320, 'IIIB20', 1640975);
INSERT INTO `tbl_golongan` VALUES (321, 'IIIB21', 1675975);
INSERT INTO `tbl_golongan` VALUES (322, 'IIIB22', 1710975);
INSERT INTO `tbl_golongan` VALUES (323, 'IIIB23', 1745975);
INSERT INTO `tbl_golongan` VALUES (324, 'IIIB24', 1780975);
INSERT INTO `tbl_golongan` VALUES (325, 'IIIB25', 1815975);
INSERT INTO `tbl_golongan` VALUES (326, 'IIIB26', 1850975);
INSERT INTO `tbl_golongan` VALUES (327, 'IIIB27', 1885975);
INSERT INTO `tbl_golongan` VALUES (328, 'IIIB28', 1920975);
INSERT INTO `tbl_golongan` VALUES (329, 'IIIB29', 1955975);
INSERT INTO `tbl_golongan` VALUES (330, 'IIIB30', 1990975);
INSERT INTO `tbl_golongan` VALUES (331, 'IIIB31', 2025975);
INSERT INTO `tbl_golongan` VALUES (332, 'IIIB32', 2060975);
INSERT INTO `tbl_golongan` VALUES (333, 'IIIB33', 2095975);
INSERT INTO `tbl_golongan` VALUES (334, 'IIIB34', 2130975);
INSERT INTO `tbl_golongan` VALUES (335, 'IIIC0', 980805);
INSERT INTO `tbl_golongan` VALUES (336, 'IIIC1', 1020805);
INSERT INTO `tbl_golongan` VALUES (337, 'IIIC2', 1060805);
INSERT INTO `tbl_golongan` VALUES (338, 'IIIC3', 1100805);
INSERT INTO `tbl_golongan` VALUES (339, 'IIIC4', 1140805);
INSERT INTO `tbl_golongan` VALUES (340, 'IIIC5', 1180805);
INSERT INTO `tbl_golongan` VALUES (341, 'IIIC6', 1220805);
INSERT INTO `tbl_golongan` VALUES (342, 'IIIC7', 1260805);
INSERT INTO `tbl_golongan` VALUES (343, 'IIIC8', 1300805);
INSERT INTO `tbl_golongan` VALUES (344, 'IIIC9', 1340805);
INSERT INTO `tbl_golongan` VALUES (345, 'IIIC10', 1380805);
INSERT INTO `tbl_golongan` VALUES (346, 'IIIC11', 1420805);
INSERT INTO `tbl_golongan` VALUES (347, 'IIIC12', 1460805);
INSERT INTO `tbl_golongan` VALUES (348, 'IIIC13', 1500805);
INSERT INTO `tbl_golongan` VALUES (349, 'IIIC14', 1540805);
INSERT INTO `tbl_golongan` VALUES (350, 'IIIC15', 1580805);
INSERT INTO `tbl_golongan` VALUES (351, 'IIIC16', 1620805);
INSERT INTO `tbl_golongan` VALUES (352, 'IIIC17', 1660805);
INSERT INTO `tbl_golongan` VALUES (353, 'IIIC18', 1700805);
INSERT INTO `tbl_golongan` VALUES (354, 'IIIC19', 1740805);
INSERT INTO `tbl_golongan` VALUES (355, 'IIIC20', 1780805);
INSERT INTO `tbl_golongan` VALUES (356, 'IIIC21', 1820805);
INSERT INTO `tbl_golongan` VALUES (357, 'IIIC22', 1860805);
INSERT INTO `tbl_golongan` VALUES (358, 'IIIC23', 1900805);
INSERT INTO `tbl_golongan` VALUES (359, 'IIIC24', 1940805);
INSERT INTO `tbl_golongan` VALUES (360, 'IIIC25', 1980805);
INSERT INTO `tbl_golongan` VALUES (361, 'IIIC26', 2020805);
INSERT INTO `tbl_golongan` VALUES (362, 'IIIC27', 2060805);
INSERT INTO `tbl_golongan` VALUES (363, 'IIIC28', 2100805);
INSERT INTO `tbl_golongan` VALUES (364, 'IIIC29', 2140805);
INSERT INTO `tbl_golongan` VALUES (365, 'IIIC30', 2180805);
INSERT INTO `tbl_golongan` VALUES (366, 'IIIC31', 2220805);
INSERT INTO `tbl_golongan` VALUES (367, 'IIIC32', 2260805);
INSERT INTO `tbl_golongan` VALUES (368, 'IIIC33', 2300805);
INSERT INTO `tbl_golongan` VALUES (369, 'IIIC34', 2340805);
INSERT INTO `tbl_golongan` VALUES (370, 'IIID0', 1022280);
INSERT INTO `tbl_golongan` VALUES (371, 'IIID1', 1072280);
INSERT INTO `tbl_golongan` VALUES (372, 'IIID2', 1122280);
INSERT INTO `tbl_golongan` VALUES (373, 'IIID3', 1172280);
INSERT INTO `tbl_golongan` VALUES (374, 'IIID4', 1222280);
INSERT INTO `tbl_golongan` VALUES (375, 'IIID5', 1272280);
INSERT INTO `tbl_golongan` VALUES (376, 'IIID6', 1322280);
INSERT INTO `tbl_golongan` VALUES (377, 'IIID7', 1372280);
INSERT INTO `tbl_golongan` VALUES (378, 'IIID8', 1422280);
INSERT INTO `tbl_golongan` VALUES (379, 'IIID9', 1472280);
INSERT INTO `tbl_golongan` VALUES (380, 'IIID10', 1522280);
INSERT INTO `tbl_golongan` VALUES (381, 'IIID11', 1572280);
INSERT INTO `tbl_golongan` VALUES (382, 'IIID12', 1622280);
INSERT INTO `tbl_golongan` VALUES (383, 'IIID13', 1672280);
INSERT INTO `tbl_golongan` VALUES (384, 'IIID14', 1722280);
INSERT INTO `tbl_golongan` VALUES (385, 'IIID15', 1772280);
INSERT INTO `tbl_golongan` VALUES (386, 'IIID16', 1822280);
INSERT INTO `tbl_golongan` VALUES (387, 'IIID17', 1872280);
INSERT INTO `tbl_golongan` VALUES (388, 'IIID18', 1922280);
INSERT INTO `tbl_golongan` VALUES (389, 'IIID19', 1972280);
INSERT INTO `tbl_golongan` VALUES (390, 'IIID20', 2022280);
INSERT INTO `tbl_golongan` VALUES (391, 'IIID21', 2072280);
INSERT INTO `tbl_golongan` VALUES (392, 'IIID22', 2122280);
INSERT INTO `tbl_golongan` VALUES (393, 'IIID23', 2172280);
INSERT INTO `tbl_golongan` VALUES (394, 'IIID24', 2222280);
INSERT INTO `tbl_golongan` VALUES (395, 'IIID25', 2272280);
INSERT INTO `tbl_golongan` VALUES (396, 'IIID26', 2322280);
INSERT INTO `tbl_golongan` VALUES (397, 'IIID27', 2372280);
INSERT INTO `tbl_golongan` VALUES (398, 'IIID28', 2422280);
INSERT INTO `tbl_golongan` VALUES (399, 'IIID29', 2472280);
INSERT INTO `tbl_golongan` VALUES (400, 'IIID30', 2522280);
INSERT INTO `tbl_golongan` VALUES (401, 'IIID31', 2572280);
INSERT INTO `tbl_golongan` VALUES (402, 'IIID32', 2622280);
INSERT INTO `tbl_golongan` VALUES (403, 'IIID33', 2672280);
INSERT INTO `tbl_golongan` VALUES (404, 'IIID34', 2722280);
INSERT INTO `tbl_golongan` VALUES (405, 'IVA0', 1065505);
INSERT INTO `tbl_golongan` VALUES (406, 'IVA1', 1135505);
INSERT INTO `tbl_golongan` VALUES (407, 'IVA2', 1205505);
INSERT INTO `tbl_golongan` VALUES (408, 'IVA3', 1275505);
INSERT INTO `tbl_golongan` VALUES (409, 'IVA4', 1345505);
INSERT INTO `tbl_golongan` VALUES (410, 'IVA5', 1415505);
INSERT INTO `tbl_golongan` VALUES (411, 'IVA6', 1485505);
INSERT INTO `tbl_golongan` VALUES (412, 'IVA7', 1555505);
INSERT INTO `tbl_golongan` VALUES (413, 'IVA8', 1625505);
INSERT INTO `tbl_golongan` VALUES (414, 'IVA9', 1695505);
INSERT INTO `tbl_golongan` VALUES (415, 'IVA10', 1765505);
INSERT INTO `tbl_golongan` VALUES (416, 'IVA11', 1835505);
INSERT INTO `tbl_golongan` VALUES (417, 'IVA12', 1905505);
INSERT INTO `tbl_golongan` VALUES (418, 'IVA13', 1975505);
INSERT INTO `tbl_golongan` VALUES (419, 'IVA14', 2045505);
INSERT INTO `tbl_golongan` VALUES (420, 'IVA15', 2115505);
INSERT INTO `tbl_golongan` VALUES (421, 'IVA16', 2185505);
INSERT INTO `tbl_golongan` VALUES (422, 'IVA17', 2255505);
INSERT INTO `tbl_golongan` VALUES (423, 'IVA18', 2325505);
INSERT INTO `tbl_golongan` VALUES (424, 'IVA19', 2395505);
INSERT INTO `tbl_golongan` VALUES (425, 'IVA20', 2465505);
INSERT INTO `tbl_golongan` VALUES (426, 'IVA21', 2535505);
INSERT INTO `tbl_golongan` VALUES (427, 'IVA22', 2605505);
INSERT INTO `tbl_golongan` VALUES (428, 'IVA23', 2675505);
INSERT INTO `tbl_golongan` VALUES (429, 'IVA24', 2745505);
INSERT INTO `tbl_golongan` VALUES (430, 'IVA25', 2815505);
INSERT INTO `tbl_golongan` VALUES (431, 'IVA26', 2885505);
INSERT INTO `tbl_golongan` VALUES (432, 'IVA27', 2955505);
INSERT INTO `tbl_golongan` VALUES (433, 'IVA28', 3025505);
INSERT INTO `tbl_golongan` VALUES (434, 'IVA29', 3095505);
INSERT INTO `tbl_golongan` VALUES (435, 'IVA30', 3165505);
INSERT INTO `tbl_golongan` VALUES (436, 'IVA31', 3235505);
INSERT INTO `tbl_golongan` VALUES (437, 'IVA32', 3305505);
INSERT INTO `tbl_golongan` VALUES (438, 'IVA33', 3375505);
INSERT INTO `tbl_golongan` VALUES (439, 'IVA34', 3445505);
INSERT INTO `tbl_golongan` VALUES (440, 'IVB0', 1110585);
INSERT INTO `tbl_golongan` VALUES (441, 'IVB1', 1195585);
INSERT INTO `tbl_golongan` VALUES (442, 'IVB2', 1280585);
INSERT INTO `tbl_golongan` VALUES (443, 'IVB3', 1365585);
INSERT INTO `tbl_golongan` VALUES (444, 'IVB4', 1450585);
INSERT INTO `tbl_golongan` VALUES (445, 'IVB5', 1535585);
INSERT INTO `tbl_golongan` VALUES (446, 'IVB6', 1620585);
INSERT INTO `tbl_golongan` VALUES (447, 'IVB7', 1705585);
INSERT INTO `tbl_golongan` VALUES (448, 'IVB8', 1790585);
INSERT INTO `tbl_golongan` VALUES (449, 'IVB9', 1875585);
INSERT INTO `tbl_golongan` VALUES (450, 'IVB10', 1960585);
INSERT INTO `tbl_golongan` VALUES (451, 'IVB11', 2045585);
INSERT INTO `tbl_golongan` VALUES (452, 'IVB12', 2130585);
INSERT INTO `tbl_golongan` VALUES (453, 'IVB13', 2215585);
INSERT INTO `tbl_golongan` VALUES (454, 'IVB14', 2300585);
INSERT INTO `tbl_golongan` VALUES (455, 'IVB15', 2385585);
INSERT INTO `tbl_golongan` VALUES (456, 'IVB16', 2470585);
INSERT INTO `tbl_golongan` VALUES (457, 'IVB17', 2555585);
INSERT INTO `tbl_golongan` VALUES (458, 'IVB18', 2640585);
INSERT INTO `tbl_golongan` VALUES (459, 'IVB19', 2725585);
INSERT INTO `tbl_golongan` VALUES (460, 'IVB20', 2810585);
INSERT INTO `tbl_golongan` VALUES (461, 'IVB21', 2895585);
INSERT INTO `tbl_golongan` VALUES (462, 'IVB22', 2980585);
INSERT INTO `tbl_golongan` VALUES (463, 'IVB23', 3065585);
INSERT INTO `tbl_golongan` VALUES (464, 'IVB24', 3150585);
INSERT INTO `tbl_golongan` VALUES (465, 'IVB25', 3235585);
INSERT INTO `tbl_golongan` VALUES (466, 'IVB26', 3320585);
INSERT INTO `tbl_golongan` VALUES (467, 'IVB27', 3405585);
INSERT INTO `tbl_golongan` VALUES (468, 'IVB28', 3490585);
INSERT INTO `tbl_golongan` VALUES (469, 'IVB29', 3575585);
INSERT INTO `tbl_golongan` VALUES (470, 'IVB30', 3660585);
INSERT INTO `tbl_golongan` VALUES (471, 'IVB31', 3745585);
INSERT INTO `tbl_golongan` VALUES (472, 'IVB32', 3830585);
INSERT INTO `tbl_golongan` VALUES (473, 'IVB33', 3915585);
INSERT INTO `tbl_golongan` VALUES (474, 'IVB34', 4000585);
INSERT INTO `tbl_golongan` VALUES (475, 'IVC0', 1157555);
INSERT INTO `tbl_golongan` VALUES (476, 'IVC1', 1257555);
INSERT INTO `tbl_golongan` VALUES (477, 'IVC2', 1357555);
INSERT INTO `tbl_golongan` VALUES (478, 'IVC3', 1457555);
INSERT INTO `tbl_golongan` VALUES (479, 'IVC4', 1557555);
INSERT INTO `tbl_golongan` VALUES (480, 'IVC5', 1657555);
INSERT INTO `tbl_golongan` VALUES (481, 'IVC6', 1757555);
INSERT INTO `tbl_golongan` VALUES (482, 'IVC7', 1857555);
INSERT INTO `tbl_golongan` VALUES (483, 'IVC8', 1957555);
INSERT INTO `tbl_golongan` VALUES (484, 'IVC9', 2057555);
INSERT INTO `tbl_golongan` VALUES (485, 'IVC10', 2157555);
INSERT INTO `tbl_golongan` VALUES (486, 'IVC11', 2257555);
INSERT INTO `tbl_golongan` VALUES (487, 'IVC12', 2357555);
INSERT INTO `tbl_golongan` VALUES (488, 'IVC13', 2457555);
INSERT INTO `tbl_golongan` VALUES (489, 'IVC14', 2557555);
INSERT INTO `tbl_golongan` VALUES (490, 'IVC15', 2657555);
INSERT INTO `tbl_golongan` VALUES (491, 'IVC16', 2757555);
INSERT INTO `tbl_golongan` VALUES (492, 'IVC17', 2857555);
INSERT INTO `tbl_golongan` VALUES (493, 'IVC18', 2957555);
INSERT INTO `tbl_golongan` VALUES (494, 'IVC19', 3057555);
INSERT INTO `tbl_golongan` VALUES (495, 'IVC20', 3157555);
INSERT INTO `tbl_golongan` VALUES (496, 'IVC21', 3257555);
INSERT INTO `tbl_golongan` VALUES (497, 'IVC22', 3357555);
INSERT INTO `tbl_golongan` VALUES (498, 'IVC23', 3457555);
INSERT INTO `tbl_golongan` VALUES (499, 'IVC24', 3557555);
INSERT INTO `tbl_golongan` VALUES (500, 'IVC25', 3657555);
INSERT INTO `tbl_golongan` VALUES (501, 'IVC26', 3757555);
INSERT INTO `tbl_golongan` VALUES (502, 'IVC27', 3857555);
INSERT INTO `tbl_golongan` VALUES (503, 'IVC28', 3957555);
INSERT INTO `tbl_golongan` VALUES (504, 'IVC29', 4057555);
INSERT INTO `tbl_golongan` VALUES (505, 'IVC30', 4157555);
INSERT INTO `tbl_golongan` VALUES (506, 'IVC31', 4257555);
INSERT INTO `tbl_golongan` VALUES (507, 'IVC32', 4357555);
INSERT INTO `tbl_golongan` VALUES (508, 'IVC33', 4457555);
INSERT INTO `tbl_golongan` VALUES (509, 'IVC34', 4557555);
INSERT INTO `tbl_golongan` VALUES (510, 'IVD0', 1206520);
INSERT INTO `tbl_golongan` VALUES (511, 'IVD1', 1316520);
INSERT INTO `tbl_golongan` VALUES (512, 'IVD2', 1426520);
INSERT INTO `tbl_golongan` VALUES (513, 'IVD3', 1536520);
INSERT INTO `tbl_golongan` VALUES (514, 'IVD4', 1646520);
INSERT INTO `tbl_golongan` VALUES (515, 'IVD5', 1756520);
INSERT INTO `tbl_golongan` VALUES (516, 'IVD6', 1866520);
INSERT INTO `tbl_golongan` VALUES (517, 'IVD7', 1976520);
INSERT INTO `tbl_golongan` VALUES (518, 'IVD8', 2086520);
INSERT INTO `tbl_golongan` VALUES (519, 'IVD9', 2196520);
INSERT INTO `tbl_golongan` VALUES (520, 'IVD10', 2306520);
INSERT INTO `tbl_golongan` VALUES (521, 'IVD11', 2416520);
INSERT INTO `tbl_golongan` VALUES (522, 'IVD12', 2526520);
INSERT INTO `tbl_golongan` VALUES (523, 'IVD13', 2636520);
INSERT INTO `tbl_golongan` VALUES (524, 'IVD14', 2746520);
INSERT INTO `tbl_golongan` VALUES (525, 'IVD15', 2856520);
INSERT INTO `tbl_golongan` VALUES (526, 'IVD16', 2966520);
INSERT INTO `tbl_golongan` VALUES (527, 'IVD17', 3076520);
INSERT INTO `tbl_golongan` VALUES (528, 'IVD18', 3186520);
INSERT INTO `tbl_golongan` VALUES (529, 'IVD19', 3296520);
INSERT INTO `tbl_golongan` VALUES (530, 'IVD20', 3406520);
INSERT INTO `tbl_golongan` VALUES (531, 'IVD21', 3516520);
INSERT INTO `tbl_golongan` VALUES (532, 'IVD22', 3626520);
INSERT INTO `tbl_golongan` VALUES (533, 'IVD23', 3736520);
INSERT INTO `tbl_golongan` VALUES (534, 'IVD24', 3846520);
INSERT INTO `tbl_golongan` VALUES (535, 'IVD25', 3956520);
INSERT INTO `tbl_golongan` VALUES (536, 'IVD26', 4066520);
INSERT INTO `tbl_golongan` VALUES (537, 'IVD27', 4176520);
INSERT INTO `tbl_golongan` VALUES (538, 'IVD28', 4286520);
INSERT INTO `tbl_golongan` VALUES (539, 'IVD29', 4396520);
INSERT INTO `tbl_golongan` VALUES (540, 'IVD30', 4506520);
INSERT INTO `tbl_golongan` VALUES (541, 'IVD31', 4616520);
INSERT INTO `tbl_golongan` VALUES (542, 'IVD32', 4726520);
INSERT INTO `tbl_golongan` VALUES (543, 'IVD33', 4836520);
INSERT INTO `tbl_golongan` VALUES (544, 'IVD34', 4946520);
INSERT INTO `tbl_golongan` VALUES (545, 'IVE0', 1257585);
INSERT INTO `tbl_golongan` VALUES (546, 'IVE1', 1387585);
INSERT INTO `tbl_golongan` VALUES (547, 'IVE2', 1517585);
INSERT INTO `tbl_golongan` VALUES (548, 'IVE3', 1647585);
INSERT INTO `tbl_golongan` VALUES (549, 'IVE4', 1777585);
INSERT INTO `tbl_golongan` VALUES (550, 'IVE5', 1907585);
INSERT INTO `tbl_golongan` VALUES (551, 'IVE6', 2037585);
INSERT INTO `tbl_golongan` VALUES (552, 'IVE7', 2167585);
INSERT INTO `tbl_golongan` VALUES (553, 'IVE8', 2297585);
INSERT INTO `tbl_golongan` VALUES (554, 'IVE9', 2427585);
INSERT INTO `tbl_golongan` VALUES (555, 'IVE10', 2557585);
INSERT INTO `tbl_golongan` VALUES (556, 'IVE11', 2687585);
INSERT INTO `tbl_golongan` VALUES (557, 'IVE12', 2817585);
INSERT INTO `tbl_golongan` VALUES (558, 'IVE13', 2947585);
INSERT INTO `tbl_golongan` VALUES (559, 'IVE14', 3077585);
INSERT INTO `tbl_golongan` VALUES (560, 'IVE15', 3207585);
INSERT INTO `tbl_golongan` VALUES (561, 'IVE16', 3337585);
INSERT INTO `tbl_golongan` VALUES (562, 'IVE17', 3467585);
INSERT INTO `tbl_golongan` VALUES (563, 'IVE18', 3597585);
INSERT INTO `tbl_golongan` VALUES (564, 'IVE19', 3727585);
INSERT INTO `tbl_golongan` VALUES (565, 'IVE20', 3857585);
INSERT INTO `tbl_golongan` VALUES (566, 'IVE21', 3987585);
INSERT INTO `tbl_golongan` VALUES (567, 'IVE22', 4117585);
INSERT INTO `tbl_golongan` VALUES (568, 'IVE23', 4247585);
INSERT INTO `tbl_golongan` VALUES (569, 'IVE24', 4377585);
INSERT INTO `tbl_golongan` VALUES (570, 'IVE25', 4507585);
INSERT INTO `tbl_golongan` VALUES (571, 'IVE26', 4637585);
INSERT INTO `tbl_golongan` VALUES (572, 'IVE27', 4767585);
INSERT INTO `tbl_golongan` VALUES (573, 'IVE28', 4897585);
INSERT INTO `tbl_golongan` VALUES (574, 'IVE29', 5027585);
INSERT INTO `tbl_golongan` VALUES (575, 'IVE30', 5157585);
INSERT INTO `tbl_golongan` VALUES (576, 'IVE31', 5287585);
INSERT INTO `tbl_golongan` VALUES (577, 'IVE32', 5417585);
INSERT INTO `tbl_golongan` VALUES (578, 'IVE33', 5547585);
INSERT INTO `tbl_golongan` VALUES (579, 'IVE34', 5677585);
INSERT INTO `tbl_golongan` VALUES (580, 'Tidak Ada', 750000);

-- ----------------------------
-- Table structure for tbl_jabatan
-- ----------------------------
DROP TABLE IF EXISTS `tbl_jabatan`;
CREATE TABLE `tbl_jabatan`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tunjangan_jabatan` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 29 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_jabatan
-- ----------------------------
INSERT INTO `tbl_jabatan` VALUES (1, 'Kepala Sekolah', 2500000);
INSERT INTO `tbl_jabatan` VALUES (2, 'WKS', 1080000);
INSERT INTO `tbl_jabatan` VALUES (3, 'Koordinator Keuangan', 560000);
INSERT INTO `tbl_jabatan` VALUES (4, 'KA TU', 560000);
INSERT INTO `tbl_jabatan` VALUES (5, 'Staf WKS', 480000);
INSERT INTO `tbl_jabatan` VALUES (6, 'Kabag Keuangan', 480000);
INSERT INTO `tbl_jabatan` VALUES (7, 'KPK', 337500);
INSERT INTO `tbl_jabatan` VALUES (8, 'Kabag TU', 337500);
INSERT INTO `tbl_jabatan` VALUES (9, 'Sekbag Keuangan', 337500);
INSERT INTO `tbl_jabatan` VALUES (10, 'Bendahara Bos', 337500);
INSERT INTO `tbl_jabatan` VALUES (11, 'Bosda', 245000);
INSERT INTO `tbl_jabatan` VALUES (12, 'Kabid SIM', 245000);
INSERT INTO `tbl_jabatan` VALUES (13, 'Kabid Dapodik', 245000);
INSERT INTO `tbl_jabatan` VALUES (14, 'Kabid Publikasi', 245000);
INSERT INTO `tbl_jabatan` VALUES (15, 'Ka Lab', 245000);
INSERT INTO `tbl_jabatan` VALUES (16, 'Kabid BKK', 245000);
INSERT INTO `tbl_jabatan` VALUES (17, 'Ka Perpustakaan', 245000);
INSERT INTO `tbl_jabatan` VALUES (18, 'Sekertaris KPK', 210000);
INSERT INTO `tbl_jabatan` VALUES (19, 'Sekbid', 150000);
INSERT INTO `tbl_jabatan` VALUES (20, 'Koordinator BK', 150000);
INSERT INTO `tbl_jabatan` VALUES (21, 'koordinator intrawajib IPM', 150000);
INSERT INTO `tbl_jabatan` VALUES (22, 'koordinator intrawajib HW', 150000);
INSERT INTO `tbl_jabatan` VALUES (23, 'Pembina Ekstra', 130000);
INSERT INTO `tbl_jabatan` VALUES (24, 'Wali Kelas', 130000);
INSERT INTO `tbl_jabatan` VALUES (25, 'Koordinator Satpam', 100000);
INSERT INTO `tbl_jabatan` VALUES (26, 'Koordinator Caraka', 100000);
INSERT INTO `tbl_jabatan` VALUES (28, 'Tidak Ada', 0);

-- ----------------------------
-- Table structure for tbl_pegawai
-- ----------------------------
DROP TABLE IF EXISTS `tbl_pegawai`;
CREATE TABLE `tbl_pegawai`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nbm` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_pegawai` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `golongan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jabatan_wali_kelas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jabatan_guru_ekstra` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `no_hp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `foto` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `role` int NULL DEFAULT 4,
  `no_rekening` bigint NULL DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 335 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_pegawai
-- ----------------------------
INSERT INTO `tbl_pegawai` VALUES (251, '331006', 'Andriyan Suryadiningrat', 'Ka Lab', 'Tidak Ada', 'Wali Kelas', 'Guru Ekstra', '    L', '                                                                          Wonosobo', '89212121', 'undraw_profile.svg', 1, 123, 'admin@admin.com', '14e1b600b1fd579f47433b88e8d85291');
INSERT INTO `tbl_pegawai` VALUES (308, '838656', 'Setya Rahmawanto, S.E, M.M.', 'Kepala Sekolah', 'IA0', 'Wali Kelas', 'Bukan Guru Ekstra', ' L', '                  Wonosobo', '89212121', 'undraw_profile.svg', 2, 123, 'ks@admin.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `tbl_pegawai` VALUES (313, '1188171', 'Sri Agus Suratina, S.Pd.', 'Staf WKS', 'IA24', 'Bukan Wali Kelas', 'Bukan Guru Ekstra', '   L', '                                    Wonosobo', '89212121', 'undraw_profile.svg', 3, 123, 'tina@admin.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `tbl_pegawai` VALUES (322, '1034905', 'Tri Sumarni, S.Pd', 'Kabid BKK', 'IA0', 'Wali Kelas', 'Guru Ekstra', ' L', '                  Wonosobo', '89212121', 'undraw_profile.svg', 4, 123, 'sumarni@admin.com', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO `tbl_pegawai` VALUES (334, '1234', 'Alip  Sasmito', 'Tidak Ada', 'IA24', 'Bukan Wali Kelas', 'Bukan Guru Ekstra', '   L', '                                                          Wonosobo', '087738833548', 'undraw_rocket.svg', 4, 12321321, 'alim@admin.com', 'e10adc3949ba59abbe56e057f20f883e');

-- ----------------------------
-- Table structure for tbl_role
-- ----------------------------
DROP TABLE IF EXISTS `tbl_role`;
CREATE TABLE `tbl_role`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `keterangan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `hak_akses` int NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_role
-- ----------------------------
INSERT INTO `tbl_role` VALUES (1, 'Admin', 1);
INSERT INTO `tbl_role` VALUES (2, 'SDM', 2);
INSERT INTO `tbl_role` VALUES (3, 'Bendahara', 3);
INSERT INTO `tbl_role` VALUES (4, 'Gukar', 4);

-- ----------------------------
-- Table structure for tbl_transport
-- ----------------------------
DROP TABLE IF EXISTS `tbl_transport`;
CREATE TABLE `tbl_transport`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `bulan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nbm` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_pegawai` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `nama_jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tunjangan_kehadiran` bigint NULL DEFAULT NULL,
  `bpjs_kesehatan` bigint NULL DEFAULT NULL,
  `dplk` bigint NULL DEFAULT NULL,
  `angsuran_bank` bigint NULL DEFAULT NULL,
  `angsuran_koperasi_gukar` bigint NULL DEFAULT NULL,
  `simpanan_koperasi_gukar` bigint NULL DEFAULT NULL,
  `belanja_koperasi_gukar` bigint NULL DEFAULT NULL,
  `iuran_anggota_muhammadiyah` bigint NULL DEFAULT NULL,
  `bon_sekolah` bigint NULL DEFAULT NULL,
  `bon_koperasi_gukar` bigint NULL DEFAULT NULL,
  `sosial` bigint NULL DEFAULT NULL,
  `angsuran_bank_mini` bigint NULL DEFAULT NULL,
  `tabungan_bingkisan` bigint NULL DEFAULT NULL,
  `infaq_bulanan` bigint NULL DEFAULT NULL,
  `infaq_qurban` bigint NULL DEFAULT NULL,
  `tabungan_kurban` bigint NULL DEFAULT NULL,
  `jumlah_potongan` bigint NULL DEFAULT NULL,
  `tunjangan_anak` bigint NULL DEFAULT NULL,
  `tunjangan_pangan` bigint NULL DEFAULT NULL,
  `kelebihan_jam_mengajar` bigint NULL DEFAULT NULL,
  `total_tunjangan` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 100 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_transport
-- ----------------------------
INSERT INTO `tbl_transport` VALUES (95, '032024', '1234', 'Alip Sasmito', 'Tidak Ada', 'L', 100000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 675000, 45000, 45000, 45000, 135000, 135000);
INSERT INTO `tbl_transport` VALUES (96, '032024', '331006', 'Andriyan Suryadiningrat', 'Ka Lab', 'L', 100000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 675000, 45000, 45000, 45000, 135000, 135000);
INSERT INTO `tbl_transport` VALUES (97, '032024', '838656', 'Setya Rahmawanto, S.E, M.M.', 'Kepala Sekolah', 'L', 100000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 675000, 45000, 45000, 45000, 135000, 135000);
INSERT INTO `tbl_transport` VALUES (98, '032024', '1188171', 'Sri Agus Suratina, S.Pd.', 'Staf WKS', 'L', 100000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 675000, 45000, 45000, 45000, 135000, 135000);
INSERT INTO `tbl_transport` VALUES (99, '032024', '1034905', 'Tri Sumarni, S.Pd', 'Kabid BKK', 'L', 100000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 675000, 45000, 45000, 45000, 135000, 135000);

-- ----------------------------
-- Table structure for tbl_walikelas
-- ----------------------------
DROP TABLE IF EXISTS `tbl_walikelas`;
CREATE TABLE `tbl_walikelas`  (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_walikelas` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tunjangan_walikelas` bigint NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tbl_walikelas
-- ----------------------------
INSERT INTO `tbl_walikelas` VALUES (1, 'Wali Kelas', 145000);
INSERT INTO `tbl_walikelas` VALUES (2, 'Bukan Wali Kelas', 0);

SET FOREIGN_KEY_CHECKS = 1;
