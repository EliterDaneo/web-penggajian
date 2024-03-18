-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Mar 2024 pada 05.34
-- Versi server: 10.1.38-MariaDB
-- Versi PHP: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penggajian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_ekstra`
--

CREATE TABLE `tbl_ekstra` (
  `id` int(11) NOT NULL,
  `nama_ekstra` varchar(255) DEFAULT NULL,
  `tunjangan_ekstra` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_ekstra`
--

INSERT INTO `tbl_ekstra` (`id`, `nama_ekstra`, `tunjangan_ekstra`) VALUES
(1, 'Guru Ekstra', 130000),
(2, 'Bukan Guru Ekstra', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_golongan`
--

CREATE TABLE `tbl_golongan` (
  `id` int(11) NOT NULL,
  `nama_golongan` varchar(255) DEFAULT NULL,
  `tunjangan_golongan` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_golongan`
--

INSERT INTO `tbl_golongan` (`id`, `nama_golongan`, `tunjangan_golongan`) VALUES
(1, 'IA0', 390200),
(2, 'IA1', 415200),
(3, 'IA2', 440200),
(4, 'IA3', 465200),
(5, 'IA4', 490200),
(6, 'IA5', 515200),
(7, 'IA6', 540200),
(8, 'IA7', 565200),
(9, 'IA8', 590200),
(10, 'IA9', 615200),
(11, 'IA10', 640200),
(12, 'IA11', 665200),
(13, 'IA12', 690200),
(14, 'IA13', 715200),
(15, 'IA14', 740200),
(16, 'IA15', 765200),
(17, 'IA16', 790200),
(18, 'IA17', 815200),
(19, 'IA18', 840200),
(20, 'IA19', 865200),
(21, 'IA20', 890200),
(22, 'IA21', 915200),
(23, 'IA22', 940200),
(24, 'IA23', 965200),
(25, 'IA24', 990200),
(26, 'IA25', 1015200),
(27, 'IA26', 1040200),
(28, 'IA27', 1065200),
(29, 'IB0', 423750),
(30, 'IB1', 443750),
(31, 'IB2', 468750),
(32, 'IB3', 493750),
(33, 'IB4', 518750),
(34, 'IB5', 543750),
(35, 'IB6', 568750),
(36, 'IB7', 593750),
(37, 'IB8', 618750),
(38, 'IB9', 643750),
(39, 'IB10', 668750),
(40, 'IB11', 693750),
(41, 'IB12', 718750),
(42, 'IB13', 743750),
(43, 'IB14', 768750),
(44, 'IB15', 793750),
(45, 'IB16', 818750),
(46, 'IB17', 843750),
(47, 'IB18', 868750),
(48, 'IB19', 893750),
(49, 'IB20', 918750),
(50, 'IB21', 943750),
(51, 'IB22', 968750),
(52, 'IB23', 993750),
(53, 'IB24', 1018750),
(54, 'IB25', 1043750),
(55, 'IB26', 1068750),
(56, 'IB27', 1103750),
(57, 'IC0', 444150),
(58, 'IC1', 469150),
(59, 'IC2', 494150),
(60, 'IC3', 519150),
(61, 'IC4', 544150),
(62, 'IC5', 569150),
(63, 'IC6', 594150),
(64, 'IC7', 619150),
(65, 'IC8', 644150),
(66, 'IC9', 669150),
(67, 'IC10', 694150),
(68, 'IC11', 719150),
(69, 'IC12', 744150),
(70, 'IC13', 769150),
(71, 'IC14', 794150),
(72, 'IC15', 819150),
(73, 'IC16', 844150),
(74, 'IC17', 869150),
(75, 'IC18', 894150),
(76, 'IC19', 919150),
(77, 'IC20', 944150),
(78, 'IC21', 969150),
(79, 'IC22', 994150),
(80, 'IC23', 1019150),
(81, 'IC24', 1044150),
(82, 'IC25', 1069150),
(83, 'IC26', 1094150),
(84, 'IC27', 1119150),
(85, 'ID0', 462950),
(86, 'ID1', 487950),
(87, 'ID2', 512950),
(88, 'ID3', 537950),
(89, 'ID4', 562950),
(90, 'ID5', 587950),
(91, 'ID6', 612950),
(92, 'ID7', 637950),
(93, 'ID8', 662950),
(94, 'ID9', 687950),
(95, 'ID10', 712950),
(96, 'ID11', 737950),
(97, 'ID12', 762950),
(98, 'ID13', 787950),
(99, 'ID14', 812950),
(100, 'ID15', 837950),
(101, 'ID16', 862950),
(102, 'ID17', 887950),
(103, 'ID18', 912950),
(104, 'ID19', 937950),
(105, 'ID20', 962950),
(106, 'ID21', 987950),
(107, 'ID22', 1012950),
(108, 'ID23', 1037950),
(109, 'ID24', 1062950),
(110, 'ID25', 1087950),
(111, 'ID26', 1132950),
(112, 'ID27', 1157950),
(113, 'IIA0', 616216),
(114, 'IIA1', 641216),
(115, 'IIA2', 666216),
(116, 'IIA3', 691216),
(117, 'IIA4', 716216),
(118, 'IIA5', 741216),
(119, 'IIA6', 766216),
(120, 'IIA7', 791216),
(121, 'IIA8', 816216),
(122, 'IIA9', 841216),
(123, 'IIA10', 866216),
(124, 'IIA11', 891216),
(125, 'IIA12', 916216),
(126, 'IIA13', 941216),
(127, 'IIA14', 966216),
(128, 'IIA15', 991216),
(129, 'IIA16', 1016216),
(130, 'IIA17', 1041216),
(131, 'IIA18', 1066216),
(132, 'IIA19', 1091216),
(133, 'IIA20', 1116216),
(134, 'IIA21', 1141216),
(135, 'IIA22', 1166216),
(136, 'IIA23', 1191216),
(137, 'IIA24', 1216216),
(138, 'IIA25', 1241216),
(139, 'IIA26', 1266216),
(140, 'IIA27', 1291216),
(141, 'IIA28', 1316216),
(142, 'IIA29', 1341216),
(143, 'IIA30', 1366216),
(144, 'IIA31', 1391216),
(145, 'IIA32', 1416216),
(146, 'IIA33', 1441216),
(147, 'IIA34', 1466216),
(148, 'IIA35', 1491216),
(149, 'IIA36', 1516216),
(150, 'IIA37', 1541216),
(151, 'IIB0', 632000),
(152, 'IIB1', 662000),
(153, 'IIB2', 692000),
(154, 'IIB3', 722000),
(155, 'IIB4', 752000),
(156, 'IIB5', 782000),
(157, 'IIB6', 812000),
(158, 'IIB7', 842000),
(159, 'IIB8', 872000),
(160, 'IIB9', 902000),
(161, 'IIB10', 932000),
(162, 'IIB11', 962000),
(163, 'IIB12', 992000),
(164, 'IIB13', 1022000),
(165, 'IIB14', 1052000),
(166, 'IIB15', 1082000),
(167, 'IIB16', 1112000),
(168, 'IIB17', 1142000),
(169, 'IIB18', 1172000),
(170, 'IIB19', 1202000),
(171, 'IIB20', 1232000),
(172, 'IIB21', 1262000),
(173, 'IIB22', 1292000),
(174, 'IIB23', 1322000),
(175, 'IIB24', 1352000),
(176, 'IIB25', 1382000),
(177, 'IIB26', 1412000),
(178, 'IIB27', 1442000),
(179, 'IIB28', 1472000),
(180, 'IIB29', 1502000),
(181, 'IIB30', 1532000),
(182, 'IIB31', 1562000),
(183, 'IIB32', 1592000),
(184, 'IIB33', 1622000),
(185, 'IIB34', 1652000),
(186, 'IIB35', 1682000),
(187, 'IIB36', 1712000),
(188, 'IIB37', 1742000),
(189, 'IIC0', 644504),
(190, 'IIC1', 674504),
(191, 'IIC2', 704504),
(192, 'IIC3', 734504),
(193, 'IIC4', 764504),
(194, 'IIC5', 794504),
(195, 'IIC6', 824504),
(196, 'IIC7', 854504),
(197, 'IIC8', 884504),
(198, 'IIC9', 914504),
(199, 'IIC10', 944504),
(200, 'IIC11', 974504),
(201, 'IIC12', 1004504),
(202, 'IIC13', 1034504),
(203, 'IIC14', 1064504),
(204, 'IIC15', 1094504),
(205, 'IIC16', 1124504),
(206, 'IIC17', 1154504),
(207, 'IIC18', 1184504),
(208, 'IIC19', 1214504),
(209, 'IIC20', 1244504),
(210, 'IIC21', 1274504),
(211, 'IIC22', 1304504),
(212, 'IIC23', 1334504),
(213, 'IIC24', 1364504),
(214, 'IIC25', 1394504),
(215, 'IIC26', 1424504),
(216, 'IIC27', 1454504),
(217, 'IIC28', 1484504),
(218, 'IIC29', 1514504),
(219, 'IIC30', 1544504),
(220, 'IIC31', 1574504),
(221, 'IIC32', 1604504),
(222, 'IIC33', 1634504),
(223, 'IIC34', 1664504),
(224, 'IIC35', 1694504),
(225, 'IIC36', 1724504),
(226, 'IIC37', 1754504),
(227, 'IID0', 671776),
(228, 'IID1', 701776),
(229, 'IID2', 731776),
(230, 'IID3', 761776),
(231, 'IID4', 791776),
(232, 'IID5', 821776),
(233, 'IID6', 851776),
(234, 'IID7', 881776),
(235, 'IID8', 911776),
(236, 'IID9', 941776),
(237, 'IID10', 971776),
(238, 'IID11', 1001776),
(239, 'IID12', 1031776),
(240, 'IID13', 1061776),
(241, 'IID14', 1091776),
(242, 'IID15', 1121776),
(243, 'IID16', 1151776),
(244, 'IID17', 1181776),
(245, 'IID18', 1211776),
(246, 'IID19', 1241776),
(247, 'IID20', 1271776),
(248, 'IID21', 1301776),
(249, 'IID22', 1331776),
(250, 'IID23', 1361776),
(251, 'IID24', 1391776),
(252, 'IID25', 1421776),
(253, 'IID26', 1451776),
(254, 'IID27', 1481776),
(255, 'IID28', 1511776),
(256, 'IID29', 1541776),
(257, 'IID30', 1571776),
(258, 'IID31', 1601776),
(259, 'IID32', 1631776),
(260, 'IID33', 1661776),
(261, 'IID34', 1691776),
(262, 'IID35', 1721776),
(263, 'IID36', 1751776),
(264, 'IID37', 1781776),
(265, 'IIIA0', 902790),
(266, 'IIIA1', 932790),
(267, 'IIIA2', 962790),
(268, 'IIIA3', 992790),
(269, 'IIIA4', 1022790),
(270, 'IIIA5', 1052790),
(271, 'IIIA6', 1082790),
(272, 'IIIA7', 1112790),
(273, 'IIIA8', 1142790),
(274, 'IIIA9', 1172790),
(275, 'IIIA10', 1202790),
(276, 'IIIA11', 1232790),
(277, 'IIIA12', 1262790),
(278, 'IIIA13', 1292790),
(279, 'IIIA14', 1322790),
(280, 'IIIA15', 1352790),
(281, 'IIIA16', 1382790),
(282, 'IIIA17', 1412790),
(283, 'IIIA18', 1442790),
(284, 'IIIA19', 1472790),
(285, 'IIIA20', 1502790),
(286, 'IIIA21', 1532790),
(287, 'IIIA22', 1562790),
(288, 'IIIA23', 1592790),
(289, 'IIIA24', 1622790),
(290, 'IIIA25', 1652790),
(291, 'IIIA26', 1682790),
(292, 'IIIA27', 1712790),
(293, 'IIIA28', 1742790),
(294, 'IIIA29', 1772790),
(295, 'IIIA30', 1802790),
(296, 'IIIA31', 1832790),
(297, 'IIIA32', 1862790),
(298, 'IIIA33', 1892790),
(299, 'IIIA34', 1922790),
(300, 'IIIB0', 940975),
(301, 'IIIB1', 975975),
(302, 'IIIB2', 1010975),
(303, 'IIIB3', 1045975),
(304, 'IIIB4', 1080975),
(305, 'IIIB5', 1115975),
(306, 'IIIB6', 1150975),
(307, 'IIIB7', 1185975),
(308, 'IIIB8', 1220975),
(309, 'IIIB9', 1255975),
(310, 'IIIB10', 1290975),
(311, 'IIIB11', 1325975),
(312, 'IIIB12', 1360975),
(313, 'IIIB13', 1395975),
(314, 'IIIB14', 1430975),
(315, 'IIIB15', 1465975),
(316, 'IIIB16', 1500975),
(317, 'IIIB17', 1535975),
(318, 'IIIB18', 1570975),
(319, 'IIIB19', 1605975),
(320, 'IIIB20', 1640975),
(321, 'IIIB21', 1675975),
(322, 'IIIB22', 1710975),
(323, 'IIIB23', 1745975),
(324, 'IIIB24', 1780975),
(325, 'IIIB25', 1815975),
(326, 'IIIB26', 1850975),
(327, 'IIIB27', 1885975),
(328, 'IIIB28', 1920975),
(329, 'IIIB29', 1955975),
(330, 'IIIB30', 1990975),
(331, 'IIIB31', 2025975),
(332, 'IIIB32', 2060975),
(333, 'IIIB33', 2095975),
(334, 'IIIB34', 2130975),
(335, 'IIIC0', 980805),
(336, 'IIIC1', 1020805),
(337, 'IIIC2', 1060805),
(338, 'IIIC3', 1100805),
(339, 'IIIC4', 1140805),
(340, 'IIIC5', 1180805),
(341, 'IIIC6', 1220805),
(342, 'IIIC7', 1260805),
(343, 'IIIC8', 1300805),
(344, 'IIIC9', 1340805),
(345, 'IIIC10', 1380805),
(346, 'IIIC11', 1420805),
(347, 'IIIC12', 1460805),
(348, 'IIIC13', 1500805),
(349, 'IIIC14', 1540805),
(350, 'IIIC15', 1580805),
(351, 'IIIC16', 1620805),
(352, 'IIIC17', 1660805),
(353, 'IIIC18', 1700805),
(354, 'IIIC19', 1740805),
(355, 'IIIC20', 1780805),
(356, 'IIIC21', 1820805),
(357, 'IIIC22', 1860805),
(358, 'IIIC23', 1900805),
(359, 'IIIC24', 1940805),
(360, 'IIIC25', 1980805),
(361, 'IIIC26', 2020805),
(362, 'IIIC27', 2060805),
(363, 'IIIC28', 2100805),
(364, 'IIIC29', 2140805),
(365, 'IIIC30', 2180805),
(366, 'IIIC31', 2220805),
(367, 'IIIC32', 2260805),
(368, 'IIIC33', 2300805),
(369, 'IIIC34', 2340805),
(370, 'IIID0', 1022280),
(371, 'IIID1', 1072280),
(372, 'IIID2', 1122280),
(373, 'IIID3', 1172280),
(374, 'IIID4', 1222280),
(375, 'IIID5', 1272280),
(376, 'IIID6', 1322280),
(377, 'IIID7', 1372280),
(378, 'IIID8', 1422280),
(379, 'IIID9', 1472280),
(380, 'IIID10', 1522280),
(381, 'IIID11', 1572280),
(382, 'IIID12', 1622280),
(383, 'IIID13', 1672280),
(384, 'IIID14', 1722280),
(385, 'IIID15', 1772280),
(386, 'IIID16', 1822280),
(387, 'IIID17', 1872280),
(388, 'IIID18', 1922280),
(389, 'IIID19', 1972280),
(390, 'IIID20', 2022280),
(391, 'IIID21', 2072280),
(392, 'IIID22', 2122280),
(393, 'IIID23', 2172280),
(394, 'IIID24', 2222280),
(395, 'IIID25', 2272280),
(396, 'IIID26', 2322280),
(397, 'IIID27', 2372280),
(398, 'IIID28', 2422280),
(399, 'IIID29', 2472280),
(400, 'IIID30', 2522280),
(401, 'IIID31', 2572280),
(402, 'IIID32', 2622280),
(403, 'IIID33', 2672280),
(404, 'IIID34', 2722280),
(405, 'IVA0', 1065505),
(406, 'IVA1', 1135505),
(407, 'IVA2', 1205505),
(408, 'IVA3', 1275505),
(409, 'IVA4', 1345505),
(410, 'IVA5', 1415505),
(411, 'IVA6', 1485505),
(412, 'IVA7', 1555505),
(413, 'IVA8', 1625505),
(414, 'IVA9', 1695505),
(415, 'IVA10', 1765505),
(416, 'IVA11', 1835505),
(417, 'IVA12', 1905505),
(418, 'IVA13', 1975505),
(419, 'IVA14', 2045505),
(420, 'IVA15', 2115505),
(421, 'IVA16', 2185505),
(422, 'IVA17', 2255505),
(423, 'IVA18', 2325505),
(424, 'IVA19', 2395505),
(425, 'IVA20', 2465505),
(426, 'IVA21', 2535505),
(427, 'IVA22', 2605505),
(428, 'IVA23', 2675505),
(429, 'IVA24', 2745505),
(430, 'IVA25', 2815505),
(431, 'IVA26', 2885505),
(432, 'IVA27', 2955505),
(433, 'IVA28', 3025505),
(434, 'IVA29', 3095505),
(435, 'IVA30', 3165505),
(436, 'IVA31', 3235505),
(437, 'IVA32', 3305505),
(438, 'IVA33', 3375505),
(439, 'IVA34', 3445505),
(440, 'IVB0', 1110585),
(441, 'IVB1', 1195585),
(442, 'IVB2', 1280585),
(443, 'IVB3', 1365585),
(444, 'IVB4', 1450585),
(445, 'IVB5', 1535585),
(446, 'IVB6', 1620585),
(447, 'IVB7', 1705585),
(448, 'IVB8', 1790585),
(449, 'IVB9', 1875585),
(450, 'IVB10', 1960585),
(451, 'IVB11', 2045585),
(452, 'IVB12', 2130585),
(453, 'IVB13', 2215585),
(454, 'IVB14', 2300585),
(455, 'IVB15', 2385585),
(456, 'IVB16', 2470585),
(457, 'IVB17', 2555585),
(458, 'IVB18', 2640585),
(459, 'IVB19', 2725585),
(460, 'IVB20', 2810585),
(461, 'IVB21', 2895585),
(462, 'IVB22', 2980585),
(463, 'IVB23', 3065585),
(464, 'IVB24', 3150585),
(465, 'IVB25', 3235585),
(466, 'IVB26', 3320585),
(467, 'IVB27', 3405585),
(468, 'IVB28', 3490585),
(469, 'IVB29', 3575585),
(470, 'IVB30', 3660585),
(471, 'IVB31', 3745585),
(472, 'IVB32', 3830585),
(473, 'IVB33', 3915585),
(474, 'IVB34', 4000585),
(475, 'IVC0', 1157555),
(476, 'IVC1', 1257555),
(477, 'IVC2', 1357555),
(478, 'IVC3', 1457555),
(479, 'IVC4', 1557555),
(480, 'IVC5', 1657555),
(481, 'IVC6', 1757555),
(482, 'IVC7', 1857555),
(483, 'IVC8', 1957555),
(484, 'IVC9', 2057555),
(485, 'IVC10', 2157555),
(486, 'IVC11', 2257555),
(487, 'IVC12', 2357555),
(488, 'IVC13', 2457555),
(489, 'IVC14', 2557555),
(490, 'IVC15', 2657555),
(491, 'IVC16', 2757555),
(492, 'IVC17', 2857555),
(493, 'IVC18', 2957555),
(494, 'IVC19', 3057555),
(495, 'IVC20', 3157555),
(496, 'IVC21', 3257555),
(497, 'IVC22', 3357555),
(498, 'IVC23', 3457555),
(499, 'IVC24', 3557555),
(500, 'IVC25', 3657555),
(501, 'IVC26', 3757555),
(502, 'IVC27', 3857555),
(503, 'IVC28', 3957555),
(504, 'IVC29', 4057555),
(505, 'IVC30', 4157555),
(506, 'IVC31', 4257555),
(507, 'IVC32', 4357555),
(508, 'IVC33', 4457555),
(509, 'IVC34', 4557555),
(510, 'IVD0', 1206520),
(511, 'IVD1', 1316520),
(512, 'IVD2', 1426520),
(513, 'IVD3', 1536520),
(514, 'IVD4', 1646520),
(515, 'IVD5', 1756520),
(516, 'IVD6', 1866520),
(517, 'IVD7', 1976520),
(518, 'IVD8', 2086520),
(519, 'IVD9', 2196520),
(520, 'IVD10', 2306520),
(521, 'IVD11', 2416520),
(522, 'IVD12', 2526520),
(523, 'IVD13', 2636520),
(524, 'IVD14', 2746520),
(525, 'IVD15', 2856520),
(526, 'IVD16', 2966520),
(527, 'IVD17', 3076520),
(528, 'IVD18', 3186520),
(529, 'IVD19', 3296520),
(530, 'IVD20', 3406520),
(531, 'IVD21', 3516520),
(532, 'IVD22', 3626520),
(533, 'IVD23', 3736520),
(534, 'IVD24', 3846520),
(535, 'IVD25', 3956520),
(536, 'IVD26', 4066520),
(537, 'IVD27', 4176520),
(538, 'IVD28', 4286520),
(539, 'IVD29', 4396520),
(540, 'IVD30', 4506520),
(541, 'IVD31', 4616520),
(542, 'IVD32', 4726520),
(543, 'IVD33', 4836520),
(544, 'IVD34', 4946520),
(545, 'IVE0', 1257585),
(546, 'IVE1', 1387585),
(547, 'IVE2', 1517585),
(548, 'IVE3', 1647585),
(549, 'IVE4', 1777585),
(550, 'IVE5', 1907585),
(551, 'IVE6', 2037585),
(552, 'IVE7', 2167585),
(553, 'IVE8', 2297585),
(554, 'IVE9', 2427585),
(555, 'IVE10', 2557585),
(556, 'IVE11', 2687585),
(557, 'IVE12', 2817585),
(558, 'IVE13', 2947585),
(559, 'IVE14', 3077585),
(560, 'IVE15', 3207585),
(561, 'IVE16', 3337585),
(562, 'IVE17', 3467585),
(563, 'IVE18', 3597585),
(564, 'IVE19', 3727585),
(565, 'IVE20', 3857585),
(566, 'IVE21', 3987585),
(567, 'IVE22', 4117585),
(568, 'IVE23', 4247585),
(569, 'IVE24', 4377585),
(570, 'IVE25', 4507585),
(571, 'IVE26', 4637585),
(572, 'IVE27', 4767585),
(573, 'IVE28', 4897585),
(574, 'IVE29', 5027585),
(575, 'IVE30', 5157585),
(576, 'IVE31', 5287585),
(577, 'IVE32', 5417585),
(578, 'IVE33', 5547585),
(579, 'IVE34', 5677585),
(580, 'Tidak Ada', 750000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_jabatan`
--

CREATE TABLE `tbl_jabatan` (
  `id` int(11) NOT NULL,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `tunjangan_jabatan` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_jabatan`
--

INSERT INTO `tbl_jabatan` (`id`, `nama_jabatan`, `tunjangan_jabatan`) VALUES
(1, 'Kepala Sekolah', 2500000),
(2, 'WKS', 1080000),
(3, 'Koordinator Keuangan', 560000),
(5, 'Staf WKS', 480000),
(6, 'Kabag Keuangan', 480000),
(7, 'KPK', 337500),
(8, 'Kabag TU', 560000),
(9, 'Sekbag Keuangan', 337500),
(10, 'Bendahara Bos', 337500),
(11, 'Bosda', 245000),
(12, 'Kabid SIM', 245000),
(13, 'Kabid Dapodik', 245000),
(14, 'Kabid Publikasi', 245000),
(15, 'Ka Lab', 245000),
(16, 'Kabid BKK', 245000),
(17, 'Ka Perpustakaan', 245000),
(18, 'Sekertaris KPK', 210000),
(19, 'Sekbid', 150000),
(20, 'Koordinator BK', 150000),
(21, 'koordinator intrawajib IPM', 150000),
(22, 'koordinator intrawajib HW', 150000),
(23, 'Pembina Ekstra', 130000),
(24, 'Wali Kelas', 130000),
(25, 'Koordinator Satpam', 100000),
(26, 'Koordinator Caraka', 100000),
(28, 'Tidak Ada', 0),
(29, 'Sekbag TU', 337500);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id` int(11) NOT NULL,
  `nbm` varchar(255) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `tmt` varchar(255) DEFAULT NULL,
  `golongan` varchar(255) DEFAULT NULL,
  `jabatan_wali_kelas` varchar(255) DEFAULT NULL,
  `jabatan_guru_ekstra` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `no_hp` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `role` int(11) DEFAULT '4',
  `no_rekening` bigint(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `kelebihan_jam` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id`, `nbm`, `nama_pegawai`, `jabatan`, `tmt`, `golongan`, `jabatan_wali_kelas`, `jabatan_guru_ekstra`, `jenis_kelamin`, `alamat`, `no_hp`, `foto`, `role`, `no_rekening`, `email`, `password`, `kelebihan_jam`) VALUES
(251, '331006', 'Andriyan Suryadiningrat', 'KPK', '10', 'Tidak Ada', 'Wali Kelas', 'Guru Ekstra', '       L', '                                                                                                                                                                      Wonosobo', '89212121', 'undraw_profile.svg', 1, 123, 'admin@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 10),
(308, '838656', 'Setya Rahmawanto, S.E, M.M.', 'Kepala Sekolah', NULL, 'IIC25', 'Wali Kelas', 'Bukan Guru Ekstra', '   L', '                                                                                Wonosobo', '89212121', 'undraw_profile.svg', 2, 123, 'ks@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 10),
(313, '1188171', 'Sri Agus Suratina, S.Pd.', 'Staf WKS', NULL, 'IA24', 'Bukan Wali Kelas', 'Bukan Guru Ekstra', '    L', '                                                                    Wonosobo', '89212121', 'undraw_profile.svg', 3, 123, 'tina@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 11),
(322, '1034905', 'Tri Sumarni, S.Pd', 'Kabid BKK', NULL, 'IA0', 'Wali Kelas', 'Guru Ekstra', '  L', '                                                  Wonosobo', '89212121', 'undraw_profile.svg', 4, 123, 'sumarni@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 11),
(334, '1234', 'Alip  Sasmito', 'Tidak Ada', NULL, 'IA24', 'Bukan Wali Kelas', 'Bukan Guru Ekstra', '    L', 'Wonosobo', '087738833548', 'undraw_rocket.svg', 4, 12321321, 'alim@admin.com', 'e10adc3949ba59abbe56e057f20f883e', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `hak_akses` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `keterangan`, `hak_akses`) VALUES
(1, 'Admin', 1),
(2, 'SDM', 2),
(3, 'Bendahara', 3),
(4, 'Gukar', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transport`
--

CREATE TABLE `tbl_transport` (
  `id` int(11) NOT NULL,
  `bulan` varchar(255) DEFAULT NULL,
  `nbm` varchar(255) DEFAULT NULL,
  `nama_pegawai` varchar(255) DEFAULT NULL,
  `nama_jabatan` varchar(255) DEFAULT NULL,
  `jenis_kelamin` varchar(255) DEFAULT NULL,
  `tunjangan_kehadiran` bigint(20) DEFAULT NULL,
  `bpjs_kesehatan` bigint(20) DEFAULT NULL,
  `dplk` bigint(20) DEFAULT NULL,
  `angsuran_bank` bigint(20) DEFAULT NULL,
  `angsuran_koperasi_gukar` bigint(20) DEFAULT NULL,
  `simpanan_koperasi_gukar` bigint(20) DEFAULT NULL,
  `belanja_koperasi_gukar` bigint(20) DEFAULT NULL,
  `iuran_anggota_muhammadiyah` bigint(20) DEFAULT NULL,
  `bon_sekolah` bigint(20) DEFAULT NULL,
  `bon_koperasi_gukar` bigint(20) DEFAULT NULL,
  `sosial` bigint(20) DEFAULT NULL,
  `angsuran_bank_mini` bigint(20) DEFAULT NULL,
  `tabungan_bingkisan` bigint(20) DEFAULT NULL,
  `infaq_bulanan` bigint(20) DEFAULT NULL,
  `infaq_qurban` bigint(20) DEFAULT NULL,
  `tabungan_kurban` bigint(20) DEFAULT NULL,
  `jumlah_potongan` bigint(20) DEFAULT NULL,
  `tunjangan_anak` bigint(20) DEFAULT NULL,
  `tunjangan_pangan` bigint(20) DEFAULT NULL,
  `tunjangan_pasangan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_transport`
--

INSERT INTO `tbl_transport` (`id`, `bulan`, `nbm`, `nama_pegawai`, `nama_jabatan`, `jenis_kelamin`, `tunjangan_kehadiran`, `bpjs_kesehatan`, `dplk`, `angsuran_bank`, `angsuran_koperasi_gukar`, `simpanan_koperasi_gukar`, `belanja_koperasi_gukar`, `iuran_anggota_muhammadiyah`, `bon_sekolah`, `bon_koperasi_gukar`, `sosial`, `angsuran_bank_mini`, `tabungan_bingkisan`, `infaq_bulanan`, `infaq_qurban`, `tabungan_kurban`, `jumlah_potongan`, `tunjangan_anak`, `tunjangan_pangan`, `tunjangan_pasangan`) VALUES
(95, '032024', '1234', 'Alip Sasmito', 'Tidak Ada', 'L', 100000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 67500, 45000, 45000, 45000, NULL),
(96, '032024', '331006', 'Andriyan Suryadiningrat', 'Ka Lab', 'L', 100000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 67500, 45000, 45000, 45000, NULL),
(97, '032024', '838656', 'Setya Rahmawanto, S.E, M.M.', 'Kepala Sekolah', 'L', 100000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 675000, 45000, 45000, 45000, NULL),
(98, '032024', '1188171', 'Sri Agus Suratina, S.Pd.', 'Staf WKS', 'L', 100000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 675000, 45000, 45000, 45000, NULL),
(99, '032024', '1034905', 'Tri Sumarni, S.Pd', 'Kabid BKK', 'L', 100000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 45000, 675000, 45000, 45000, 45000, NULL),
(100, '022024', '1234', 'Alip Sasmito', 'Tidak Ada', 'L', 100000, 45000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 45000, 45000, NULL, 45000, 45000, NULL),
(101, '022024', '331006', 'Andriyan Suryadiningrat', 'Ka Lab', 'L', 100000, 45000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 45000, 45000, NULL, 45000, 45000, NULL),
(102, '022024', '838656', 'Setya Rahmawanto, S.E, M.M.', 'Kepala Sekolah', 'L', 100000, 45000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 45000, 45000, NULL, 45000, 45000, NULL),
(103, '022024', '1188171', 'Sri Agus Suratina, S.Pd.', 'Staf WKS', 'L', 100000, 45000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 45000, 45000, NULL, 45000, 45000, NULL),
(104, '022024', '1034905', 'Tri Sumarni, S.Pd', 'Kabid BKK', 'L', 100000, 45000, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 45000, 45000, NULL, 45000, 45000, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_walikelas`
--

CREATE TABLE `tbl_walikelas` (
  `id` int(11) NOT NULL,
  `nama_walikelas` varchar(255) DEFAULT NULL,
  `tunjangan_walikelas` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_walikelas`
--

INSERT INTO `tbl_walikelas` (`id`, `nama_walikelas`, `tunjangan_walikelas`) VALUES
(1, 'Wali Kelas', 130000),
(2, 'Bukan Wali Kelas', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tbl_ekstra`
--
ALTER TABLE `tbl_ekstra`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_golongan`
--
ALTER TABLE `tbl_golongan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_transport`
--
ALTER TABLE `tbl_transport`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tbl_walikelas`
--
ALTER TABLE `tbl_walikelas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tbl_ekstra`
--
ALTER TABLE `tbl_ekstra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tbl_golongan`
--
ALTER TABLE `tbl_golongan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=581;

--
-- AUTO_INCREMENT untuk tabel `tbl_jabatan`
--
ALTER TABLE `tbl_jabatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=335;

--
-- AUTO_INCREMENT untuk tabel `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tbl_transport`
--
ALTER TABLE `tbl_transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT untuk tabel `tbl_walikelas`
--
ALTER TABLE `tbl_walikelas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
