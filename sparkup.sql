/*
 Navicat Premium Data Transfer

 Source Server         : localhost
 Source Server Type    : MySQL
 Source Server Version : 100119
 Source Host           : localhost:3306
 Source Schema         : sparkup

 Target Server Type    : MySQL
 Target Server Version : 100119
 File Encoding         : 65001

 Date: 23/11/2019 17:58:32
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for about_atc
-- ----------------------------
DROP TABLE IF EXISTS `about_atc`;
CREATE TABLE `about_atc`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of about_atc
-- ----------------------------
INSERT INTO `about_atc` VALUES (1, 'Selamat Datang Di Balai Besar Tekstil Bandung', '', 'Jalan Jenderal Ahmad Yani No. 390 Kota Bandung Jawa Barat – Indonesia', '2019-02-26');

-- ----------------------------
-- Table structure for about_filosofi
-- ----------------------------
DROP TABLE IF EXISTS `about_filosofi`;
CREATE TABLE `about_filosofi`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0) ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of about_filosofi
-- ----------------------------
INSERT INTO `about_filosofi` VALUES (1, '1. VALUE', '2019-03-02 13:24:12');
INSERT INTO `about_filosofi` VALUES (2, '2. FOKUS', '2019-03-02 13:24:12');
INSERT INTO `about_filosofi` VALUES (3, '3. SUSTAINABLE', '2019-03-02 13:24:51');
INSERT INTO `about_filosofi` VALUES (4, '4. PURPOSEFUL', '2019-03-02 13:24:51');
INSERT INTO `about_filosofi` VALUES (5, '5. CONTEXTUAL', '2019-03-02 13:25:12');
INSERT INTO `about_filosofi` VALUES (6, '6. GROWTH', '2019-03-02 13:25:12');
INSERT INTO `about_filosofi` VALUES (7, '7. BALANCE', '2019-03-02 13:25:55');

-- ----------------------------
-- Table structure for about_foto
-- ----------------------------
DROP TABLE IF EXISTS `about_foto`;
CREATE TABLE `about_foto`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of about_foto
-- ----------------------------
INSERT INTO `about_foto` VALUES (1, 'ANTAWIJAYA TRAINING & CONSULTING', 'Kegiatan-20190314151653.jpg');
INSERT INTO `about_foto` VALUES (2, 'ANTAW', 'Kegiatan-20190326151138.png');

-- ----------------------------
-- Table structure for about_metodologi
-- ----------------------------
DROP TABLE IF EXISTS `about_metodologi`;
CREATE TABLE `about_metodologi`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of about_metodologi
-- ----------------------------
INSERT INTO `about_metodologi` VALUES (1, '1. VALUE NETWORKING', '2019-03-02');
INSERT INTO `about_metodologi` VALUES (2, '2. INFORMATION GATHERING', '2019-03-02');
INSERT INTO `about_metodologi` VALUES (3, '3. VALUE CREATION PLAN', '2019-03-02');
INSERT INTO `about_metodologi` VALUES (4, '4. LEVELLING UNIT VALUE TO MARKET', '2019-03-02');
INSERT INTO `about_metodologi` VALUES (5, '5. ONLINE VALUE TO MARKET\r\n', '2019-03-02');
INSERT INTO `about_metodologi` VALUES (6, '6. REALIZING VALUE', '2019-03-02');

-- ----------------------------
-- Table structure for about_nilai
-- ----------------------------
DROP TABLE IF EXISTS `about_nilai`;
CREATE TABLE `about_nilai`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of about_nilai
-- ----------------------------
INSERT INTO `about_nilai` VALUES (1, 'BERPEGANG PADA ETIKA', 'Selalu berpegang teguh pada standar mutu pelatihan', '2019-02-28');
INSERT INTO `about_nilai` VALUES (2, 'GIGIH', 'Terus menerus meningkatkan kualitas dan materi pelatihan dengan standar tinggi berbasis teknologi.', '2019-02-28');
INSERT INTO `about_nilai` VALUES (3, 'PROAKTIF', 'Senantiasa mengupayakan peningkatan pelayanan kepada klien sesempurna mungkin.', '2019-02-28');
INSERT INTO `about_nilai` VALUES (4, 'SALING MENGHORMATI', 'Membangun hubungan berdasarkan prinsip saling menghormati diantara rekan kerja, klien, principal dan masyarakat industri.', '2019-02-28');

-- ----------------------------
-- Table structure for about_sasaran
-- ----------------------------
DROP TABLE IF EXISTS `about_sasaran`;
CREATE TABLE `about_sasaran`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `create_date` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of about_sasaran
-- ----------------------------
INSERT INTO `about_sasaran` VALUES (1, 'MENINGKATKAN DAN MEMPERKUAT NILAI BISNIS ANDA', 'Melalui jasa konsultansi, pelatihan, dan pendampingan bisnis, Antawijaya T&C mendeliver shared-value networking kepada para klien bisnisnya. Fokus Antawijaya T&C adalah bagaimana entitas bisnis klien mampu mencapai tujuannya, memperkuat aset dan SDMnya, membumikan rencana-rencana strategis dan program-program kerjanya, meningkatkan semangat dan budaya organisasinya, memperkuat kepemimpinan dan manajemen perusahaan serta struktur organisasinya, meyakinkan pertumbuhan penjualan dan laba perusahaan, serta memperkuat pengendalian perusahaan melalui tata kelola yang baik (GCG) dan mengimplementasikan manajemen risiko.', '2019-03-15 22:16:00', 'Target-20190315161600.jpg');
INSERT INTO `about_sasaran` VALUES (2, 'MENINGKATKAN KAPASITAS DAN KAPABILITAS ORGANISASI ANDA', 'Antawijaya Training&Consulting menyadari bahwa sumberdaya organisasi diciptakan oleh perusahaan melalui investasi yang optimal. Oleh karena itu Antawijaya T&C akan membantu organisasi meningkatkan dan memperkuat kapasitas dan kapabilitasnya melalui strategic partnerships untuk mencapai tujuan organisasi Anda. Fokus Antawijaya T&C adalah menciptakan nilai pasar asset dan SDM perusahaan agar berdaya saing tinggi. Antawijaya T&C akan mendiagnosa kondisi aset perusahaan, menyerap berbagai informasi mengenai kualitas dan kuantitasnya saat ini, serta membangun kompetensinya.\\r\\n\\r\\nAntawijaya T&C akan melengkapi resource-based management dengan competency-based management bagi organisasi Anda. Tujuannya adalah menyesuaikan aset perusahaan dengan kebutuhan serta daya beli pasar. Aset dan SDM perusahaan harus mampu melayani pasar industri yang tersedia, yang pada akhirnya dapat meningkatkan nilai pelanggan perusahaan. Model investasi yang perlu dikembangkan adalah alokasi sumberdaya perusahaan yang tepat dan optimal.\\r\\n\\r\\nKerangka kerja Antawijaya T&C dalam meningkatkan kapasitas dan kapabilitas organisasi Anda adalah sebagai berikut.\\r\\nAntawijaya Training&Consulting menyadari bahwa sumberdaya organisasi diciptakan oleh perusahaan melalui investasi yang optimal. Oleh karena itu Antawijaya T&C akan membantu organisasi meningkatkan dan memperkuat kapasitas dan kapabilitasnya melalui strategic partnerships untuk mencapai tujuan organisasi Anda. Fokus Antawijaya T&C adalah menciptakan nilai pasar asset dan SDM perusahaan agar berdaya saing tinggi. Antawijaya T&C akan mendiagnosa kondisi aset perusahaan, menyerap berbagai informasi mengenai kualitas dan kuantitasnya saat ini, serta membangun kompetensinya.\\r\\n\\r\\nAntawijaya T&C akan melengkapi resource-based management dengan competency-based management bagi organisasi Anda. Tujuannya adalah menyesuaikan aset perusahaan dengan kebutuhan serta daya beli pasar. Aset dan SDM perusahaan harus mampu melayani pasar industri yang tersedia, yang pada akhirnya dapat meningkatkan nilai pelanggan perusahaan. Model investasi yang perlu dikembangkan adalah alokasi sumberdaya perusahaan yang tepat dan optimal.\\r\\n\\r\\nKerangka kerja Antawijaya T&C dalam meningkatkan kapasitas dan kapabilitas organisasi Anda adalah sebagai berikut.\\r\\n\\r\\n\\r\\n', '2019-03-11 21:27:56', 'default.png');
INSERT INTO `about_sasaran` VALUES (3, 'MEMBANTU ANDA MENYUSUN PERENCANAAN PERUSAHAAN', NULL, '2019-03-11 21:28:01', 'default.png');
INSERT INTO `about_sasaran` VALUES (4, 'MEMPERKUAT NILAI-NILAI DAN BUDAYA PERUSAHAAN ANDA', NULL, '2019-03-11 21:28:05', 'default.png');
INSERT INTO `about_sasaran` VALUES (5, 'MENGEMBANGKAN PROGRAM LEADERSHIP DAN TRANSFORMASI BAGI ORGANISASI ANDA', NULL, '2019-03-11 21:28:08', 'default.png');
INSERT INTO `about_sasaran` VALUES (6, 'MEMBANTU MENGELOLA PERTUMBUHAN PENJUALAN DAN LABA PERUSAHAAN ANDA', NULL, '2019-03-11 21:28:15', 'default.png');
INSERT INTO `about_sasaran` VALUES (7, 'MENYEDIAKAN SISTEM DAN METODE BAGI PENGENDALIAN MANAJEMEN DAN GOOD CORPORATE GOVERNANCE (GCG)', NULL, '2019-03-11 21:28:20', 'default.png');

-- ----------------------------
-- Table structure for about_tim
-- ----------------------------
DROP TABLE IF EXISTS `about_tim`;
CREATE TABLE `about_tim`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jabatan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `linkedin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `website` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of about_tim
-- ----------------------------
INSERT INTO `about_tim` VALUES (1, 'Dr. Tb. Donny Syafardan., SE., MM', 'Strategic Finance', 'Tim-20190429143950.jpg', '2019-04-29 19:39:50', '', '', '');
INSERT INTO `about_tim` VALUES (2, 'Kanaidi, SE., Msi., CSAP', 'E-Marketing', 'Tim-20190429144531.jpeg', '2019-04-29 19:45:31', '', '', '');
INSERT INTO `about_tim` VALUES (3, 'Kusuma Chandra, PhD.', 'Anti Fraud Management', 'Tim-20190317052904.jpg', '2019-03-17 11:29:04', '', '', '');
INSERT INTO `about_tim` VALUES (4, 'Indra Firmansyah SE, Akt.,MM.CA., Dr. Cand.', 'Accounting', 'Tim-20190317052927.jpg', '2019-03-17 11:29:27', '', '', '');
INSERT INTO `about_tim` VALUES (5, 'Dini Wahjoe Hapsari, SE., Ak., MM.', 'Accounting', '2019-03-03 00:07:45', '0000-00-00 00:00:00', NULL, NULL, NULL);
INSERT INTO `about_tim` VALUES (6, 'Akhmad Miftahuddin, SE, Ak., MAFIS ', 'Capital Market', '2019-03-03 00:07:45', '0000-00-00 00:00:00', NULL, NULL, NULL);
INSERT INTO `about_tim` VALUES (7, 'Septiana A Estri Mahani, SE, MM  ', 'e-Commerce', '2019-03-03 00:08:20', '0000-00-00 00:00:00', NULL, NULL, NULL);
INSERT INTO `about_tim` VALUES (8, 'Dr.G.N Sandy Widyasthana ST.MBA ', 'Enterpreunership & Project Business', '2019-03-03 00:08:20', '0000-00-00 00:00:00', NULL, NULL, NULL);
INSERT INTO `about_tim` VALUES (9, 'Henny Utarsih,SE,M.Si ', 'Management Kewirausahaan', '2019-03-03 00:09:06', '0000-00-00 00:00:00', NULL, NULL, NULL);
INSERT INTO `about_tim` VALUES (10, 'Achmad Rochliadi.MS.Ph.D,MRSC  ', 'Seven Habits', '2019-03-03 00:09:06', '0000-00-00 00:00:00', NULL, NULL, NULL);
INSERT INTO `about_tim` VALUES (11, 'Dr. Dhanang Widijawan, SH., LLM. ', 'Legal Bisnis', '2019-03-03 00:10:31', '0000-00-00 00:00:00', NULL, NULL, NULL);
INSERT INTO `about_tim` VALUES (12, 'Dr.dr. Novi Kadarini Rahayu ', 'Managemen Pemasaran', '2019-03-03 00:10:31', '0000-00-00 00:00:00', NULL, NULL, NULL);

-- ----------------------------
-- Table structure for about_visimisi
-- ----------------------------
DROP TABLE IF EXISTS `about_visimisi`;
CREATE TABLE `about_visimisi`  (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of about_visimisi
-- ----------------------------
INSERT INTO `about_visimisi` VALUES (1, 'VISI', 'SDDDDDDTDSDSDSDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDDa', '2019-02-27');
INSERT INTO `about_visimisi` VALUES (2, 'Misi', 'Menciptakan kondisi terbaik pada performa personal, organisasi industri, pemerintah, dan publik dengan menyediakan jasa pelatihan berkualitas tinggi, inovatif, pelayanan prima serta dengan dukungan sumber daya manusia profesional, berintegritas, visioner ', '2019-02-27');

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
  `create_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 28 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

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
INSERT INTO `activities` VALUES (25, 3, 'subject', 'added', '2', 'A new subject was added (Company)', '2019-02-27 21:50:44');
INSERT INTO `activities` VALUES (26, 0, 'subject', 'deleted', '2', 'Subject has been deleted', '2019-02-27 21:50:52');
INSERT INTO `activities` VALUES (27, 0, 'user', 'updated', '2', 'A user was updated (admin)', '2019-11-02 20:12:28');

-- ----------------------------
-- Table structure for banner
-- ----------------------------
DROP TABLE IF EXISTS `banner`;
CREATE TABLE `banner`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sub_title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `content` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of banner
-- ----------------------------
INSERT INTO `banner` VALUES (1, 'Balai Besar Tekstil Bandung', '(022) 7206214, 7206215', 'Jalan Jenderal Achmad Yani No. 390 - Bandung', '11banner.jpg');
INSERT INTO `banner` VALUES (2, 'Pengujian Tekstil', '', 'Standar SNI, ISO, ASTM, BS, AATCC Dan Standar Lain', '2banner.jpg');
INSERT INTO `banner` VALUES (3, 'Kalibrasi', '', 'Telah Memperoleh Akreditasi Oleh Komite Akreditasi', '33banner.jpg');
INSERT INTO `banner` VALUES (4, 'Standarisasi', '', 'Ditetapkan Oleh Badan Standardisasi Nasional (BSN)', '4banner.jpg');
INSERT INTO `banner` VALUES (5, 'Rancang Bangun', '', 'Perancangan Bangun', '5banner.jpg');

-- ----------------------------
-- Table structure for contact
-- ----------------------------
DROP TABLE IF EXISTS `contact`;
CREATE TABLE `contact`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_tlp` varchar(50) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` timestamp(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of contact
-- ----------------------------
INSERT INTO `contact` VALUES (2, 'SUSANTY', '082119565887', '0000-00-00 00:00:00');
INSERT INTO `contact` VALUES (3, 'JOSEPH SUNARDHI, SE. MT', '08122353284 Or 087822984718', '0000-00-00 00:00:00');
INSERT INTO `contact` VALUES (4, 'YULI KATERINA', '082240025175', '0000-00-00 00:00:00');
INSERT INTO `contact` VALUES (5, 'ELI SOPHIAWATI', '081221797730', '0000-00-00 00:00:00');
INSERT INTO `contact` VALUES (6, 'Layla Rukmana, SE', '085846749588', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for customer
-- ----------------------------
DROP TABLE IF EXISTS `customer`;
CREATE TABLE `customer`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 9 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of customer
-- ----------------------------
INSERT INTO `customer` VALUES (2, 'Google Kejar', 'Partner-20190326154538.png', NULL);
INSERT INTO `customer` VALUES (8, 'Adidas', 'Partner-20190326163217.png', '2019-03-26 22:39:10');

-- ----------------------------
-- Table structure for footer
-- ----------------------------
DROP TABLE IF EXISTS `footer`;
CREATE TABLE `footer`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `address` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `phone` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `email` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `fax` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `facebook` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `twitter` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `instagram` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of footer
-- ----------------------------
INSERT INTO `footer` VALUES (1, 'Balai Besar Tekstil', 'Jalan Jenderal Ahmad Yani No. 390 Kota Bandung Jawa Barat – Indonesia', '(022) 7206214', 'informasi@bbt.kemenperin.go.id', '(022) 7206215', '-', '-', '-', '-');

-- ----------------------------
-- Table structure for home_owner
-- ----------------------------
DROP TABLE IF EXISTS `home_owner`;
CREATE TABLE `home_owner`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `gelar` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for home_testi
-- ----------------------------
DROP TABLE IF EXISTS `home_testi`;
CREATE TABLE `home_testi`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sub_nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `testimoni` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of home_testi
-- ----------------------------
INSERT INTO `home_testi` VALUES (1, 'Ayu Permata', 'Mahasiswa', '\"Saya sangat senang, consultan sangat baik hati dan tidak sombong serta rajin menabung. saya sangat mengerti \"', '2019-03-27 23:00:36', 'default.png');
INSERT INTO `home_testi` VALUES (2, 'Libran', 'Mahasiswa ', '\"Hebat sekali hahahaha\"', '2019-03-27 23:00:39', 'default.png');
INSERT INTO `home_testi` VALUES (3, 'Ikhsan', 'Mahasiswa', '\"Wih hebat\"', '2019-03-12 21:52:10', NULL);
INSERT INTO `home_testi` VALUES (4, 'Ayyy', 'Mahasiswi', 'Bagus baget', NULL, 'default.png');
INSERT INTO `home_testi` VALUES (5, 'Ahmad Subekti', 'Dosen', '\"Mantap Pak Eko\"', '2019-03-27 22:41:24', 'Testimoni-20190327164124.png');

-- ----------------------------
-- Table structure for master_pertanyaan
-- ----------------------------
DROP TABLE IF EXISTS `master_pertanyaan`;
CREATE TABLE `master_pertanyaan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of master_pertanyaan
-- ----------------------------
INSERT INTO `master_pertanyaan` VALUES (1, 'Apakah Maumu');
INSERT INTO `master_pertanyaan` VALUES (3, 'Mengapa');
INSERT INTO `master_pertanyaan` VALUES (4, 'Bagaimana?');

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
  `create_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pages
-- ----------------------------
INSERT INTO `pages` VALUES (4, 1, 2, 'welcome', 'Welcome', 'Welcome To The Pretty Bloods', 1, 0, 1, 1, '2018-12-06 21:15:25');
INSERT INTO `pages` VALUES (5, 1, 2, 'about', 'About', 'This is about page for sparkup CMS!', 1, 0, 1, 2, '2018-12-06 21:16:07');

-- ----------------------------
-- Table structure for pertanyaan_pelatihan
-- ----------------------------
DROP TABLE IF EXISTS `pertanyaan_pelatihan`;
CREATE TABLE `pertanyaan_pelatihan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pertanyaan_pelatihan
-- ----------------------------
INSERT INTO `pertanyaan_pelatihan` VALUES (1, 'Bagaimana Persyaratan Yang Diberikan Pada Bagian Pengujian Oleh Balai Besar Tekstil ?');
INSERT INTO `pertanyaan_pelatihan` VALUES (2, 'Bagaimana Waktu Pelayanan Yang Diberikan Oleh Balai Besar Tekstil ?');
INSERT INTO `pertanyaan_pelatihan` VALUES (3, 'Bagaimana Biaya/tarif Yang Diberikan Di Balai Besar Tekstil ?');
INSERT INTO `pertanyaan_pelatihan` VALUES (4, 'Bagaimana Kompetensi Pelaksana Di Bagian Pelatihan ?');
INSERT INTO `pertanyaan_pelatihan` VALUES (5, 'Bagaimana Perilaku Pelaksana Di Bagian Pengujian ?');
INSERT INTO `pertanyaan_pelatihan` VALUES (6, 'Bagaimana Maklumat Yang Diberikan Di Bagian Pengujian ?');
INSERT INTO `pertanyaan_pelatihan` VALUES (7, 'Bagaimana Penanganan Pengaduan, Saran Dan Masukan Di Balai Besar Tekstil ?');

-- ----------------------------
-- Table structure for pertanyaan_pengujian
-- ----------------------------
DROP TABLE IF EXISTS `pertanyaan_pengujian`;
CREATE TABLE `pertanyaan_pengujian`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pertanyaan_pengujian
-- ----------------------------
INSERT INTO `pertanyaan_pengujian` VALUES (1, 'Bagaimana Persyaratan Yang Diberikan Pada Bagian Pengujian Oleh Balai Besar Tekstil ??');
INSERT INTO `pertanyaan_pengujian` VALUES (2, 'Bagaimana Waktu Pelayanan Yang Diberikan Oleh Balai Besar Tekstil ?');
INSERT INTO `pertanyaan_pengujian` VALUES (3, 'Bagaimana Biaya/tarif Yang Diberikan Di Balai Besar Tekstil ?');
INSERT INTO `pertanyaan_pengujian` VALUES (4, 'Bagaimana Kompetensi Pelaksana Di Bagian Pengujian ?');
INSERT INTO `pertanyaan_pengujian` VALUES (5, 'Bagaimana Perilaku Pelaksana Di Bagian Pengujian ? ');
INSERT INTO `pertanyaan_pengujian` VALUES (6, 'Bagaimana Maklumat Yang Diberikan Di Bagian Pengujian ?');
INSERT INTO `pertanyaan_pengujian` VALUES (7, 'Bagaimana Penanganan Pengaduan, Saran Dan Masukan Di Balai Besar Tekstil ?');

-- ----------------------------
-- Table structure for pertanyaan_rancang
-- ----------------------------
DROP TABLE IF EXISTS `pertanyaan_rancang`;
CREATE TABLE `pertanyaan_rancang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of pertanyaan_rancang
-- ----------------------------
INSERT INTO `pertanyaan_rancang` VALUES (1, 'Bagaimana Persyaratan Yang Diberikan Pada Bagian Rancang Bangun Oleh Balai Besar Tekstil ?');
INSERT INTO `pertanyaan_rancang` VALUES (2, 'Bagaimana Waktu Pelayanan Yang Diberikan Oleh Balai Besar Tekstil ?');
INSERT INTO `pertanyaan_rancang` VALUES (3, 'Bagaimana Biaya/tarif Yang Diberikan Di Balai Besar Tekstil ?');
INSERT INTO `pertanyaan_rancang` VALUES (4, 'Bagaimana Kompetensi Pelaksana Di Bagian Rancang Bangun ?');
INSERT INTO `pertanyaan_rancang` VALUES (5, 'Bagaimana Perilaku Pelaksana Di Bagian Pengujian ?');
INSERT INTO `pertanyaan_rancang` VALUES (6, 'Bagaimana Maklumat Yang Diberikan Di Bagian Pengujian ?');
INSERT INTO `pertanyaan_rancang` VALUES (7, 'Bagaimana Penanganan Pengaduan, Saran Dan Masukan Di Balai Besar Tekstil ?');

-- ----------------------------
-- Table structure for product
-- ----------------------------
DROP TABLE IF EXISTS `product`;
CREATE TABLE `product`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sub_judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sub_judul_2` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `deskripsi_2` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `sub_judul_3` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `deskripsi_3` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL DEFAULT '',
  `create_date` timestamp(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of product
-- ----------------------------
INSERT INTO `product` VALUES (1, 'Seminar & Workshop', 'Business Owner Summit', 'Business Owner Summit adalah seminar satu hari dimana satu atau dua orang expert akan membagikan informasi-informasi penting yang berhubungan dengan sebuah topik. Kemudian para peserta juga akan diberikan kesempatan bertanya langsung di sesi tanya jawab.', 'Organization Development', 'Event ini berfokus pada topik Organization Development atau yang dikenal sebagai OD', 'CEO Power Lunch', 'Event ini cocok bagi anda yang akan menyelenggarakan rapat tahunan, acara pemberian reward ke karyawan, dan juga termasuk pelatihan berkala.', 'Feature-20190317051425.jpeg', '0000-00-00 00:00:00');
INSERT INTO `product` VALUES (4, 'In-House Training', '', 'Dengan Inhouse Training para pemilik bisnis bisa menyediakan sebuah sarana pelatihan untuk meningkatkan kinerja karyawannya tanpa harus mengeluarkan biaya berkala', '', '', '', '', 'Feature-20190317051415.jpeg', '0000-00-00 00:00:00');
INSERT INTO `product` VALUES (5, 'Konsultasi Bisnis', '', 'Konsutasi Bisnis cocok bagi para pemilik bisnis yang ingin mencari soluasi atas sebuah kendala atau tantanga baru dengan efektif dan efisien', '', '', '', '', 'Feature-20190317051359.jpeg', '0000-00-00 00:00:00');
INSERT INTO `product` VALUES (6, 'Pelatihan Bisnis', 'Marketing Bisnis', 'Business Coaching atau Pelatihan Bisnis bisa membantu pemilik bisnis dalam menemukan solusi atas tantangan bisnis yang dialami serta strategi untuk mencapai goal yang diinginkan', '', '', '', '', 'Feature-20190317051347.jpeg', '0000-00-00 00:00:00');
INSERT INTO `product` VALUES (7, 'Woyyyyyyyyyyyyyyy', 'ZXzczxczxczxczxxzc', 'awdadawdawdawdawdawdawdaw', '', '', '', '', 'default.png', '0000-00-00 00:00:00');

-- ----------------------------
-- Table structure for produk_jasa
-- ----------------------------
DROP TABLE IF EXISTS `produk_jasa`;
CREATE TABLE `produk_jasa`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_produk_jasa` varchar(10) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sub_judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `deskripsi` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis` enum('produk','jasa') CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` timestamp(0) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Table structure for register
-- ----------------------------
DROP TABLE IF EXISTS `register`;
CREATE TABLE `register`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_tlp` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_perusahaan` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_jasa` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of register
-- ----------------------------
INSERT INTO `register` VALUES (1, 'Ade Rahman', '022-5891534', 'ADE TEKSTILE INDUSTRIES, PT', 'Jl. Raya Banjaran No.590', 'Pengujian', '2019-11-11');
INSERT INTO `register` VALUES (2, 'Zaenul Arifin', '(022)5940144', 'ADE TEXTILES INDUSTRIES, PT', 'Jl. Raya Banjaran No 590, Bandung, Jawa Barat', 'Pelatihan', '2019-11-09');
INSERT INTO `register` VALUES (3, 'Syamsudin', '022-5945577', 'AMADA ANGGUN TEXTILE, PT', 'Jl. Raya Banjaran No.513, Bandung, Jawa Barat', 'RancangBangun', '2019-11-10');
INSERT INTO `register` VALUES (4, 'Librantara', '022 - 505093', 'ARTOS TEXTILE INDUSTRI, PT', 'Jalan  Raya Dayeuhkolot No 66 Desa Psawahan, Bandung', 'Pelatihan', '2019-11-08');
INSERT INTO `register` VALUES (5, 'Saepudin', '022-5891534', 'ASIA KNIT TEXTILINDO, PT', 'Kp. Muara Ciwidey No. 132 Cilampeni – Bandung', 'Pelatihan', '2019-11-07');
INSERT INTO `register` VALUES (6, 'Nurdin', '022-5891534', 'ASIAKNIT TEXTILINDO, PT', 'Jl. Cilampeni No.132 Kp. Muara Ciwidey, Bandung', 'RancangBangun', '2019-11-06');
INSERT INTO `register` VALUES (7, 'Saepul', '022-5205888', 'BANDUNG SAKURA TEXTILE MILL, PT', 'Jl Raya Dayeuh Kolot No 33, Bandung', 'Pengujian', '2019-11-05');
INSERT INTO `register` VALUES (8, 'Fajar', '(022) 5211852', 'BENTARA SINAR PRIMA, PT', 'Jl. Cisirung No.112, Bandung, Jawa Barat', 'Pengujian', '2019-11-04');
INSERT INTO `register` VALUES (9, 'Andri', '022-5950230', 'BIMA JAYA, CV', 'Jl Ciwalengke No .118, Bandung, Jawa Barat', 'Pelatihan', '2019-11-03');
INSERT INTO `register` VALUES (10, 'Fauzan', '022-5941191', 'BIMATEX, PT', 'Jl Raya Banjaran Km 14,7, Bandung, Jawa Barat', 'RancangBangun', '2019-11-02');
INSERT INTO `register` VALUES (11, 'Mia', '022-6030894', 'BINTANG JAYA TEXTILE INDUSTRY', 'Jl Arjuna No 46, Bandung, Jawa Barat', 'Pengujian', '2019-11-14');
INSERT INTO `register` VALUES (12, 'aaaaaaa', '4342', 'sfdsdf', 'sdf', 'Pengujian', '2019-11-14');

-- ----------------------------
-- Table structure for schedule
-- ----------------------------
DROP TABLE IF EXISTS `schedule`;
CREATE TABLE `schedule`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  `durasi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `pembicara` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` timestamp(0) NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 6 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of schedule
-- ----------------------------
INSERT INTO `schedule` VALUES (1, 'Marketing', '2019-04-14', '120menit', 'Ayu Permata', '2019-03-25 20:30:09');
INSERT INTO `schedule` VALUES (2, 'Data Mining', '2019-03-18', '1jam', 'Ayu Permata', '2019-03-13 00:30:53');
INSERT INTO `schedule` VALUES (3, 'Algroritma', '2019-04-25', '2 Jam', 'Ayu Permata', '2019-03-13 00:31:19');
INSERT INTO `schedule` VALUES (4, 'Asdasdas', '2019-03-14', 'asdasdas', 'Asdasd', NULL);
INSERT INTO `schedule` VALUES (5, 'Pelatihan K3', '2019-06-10', '4 Hari', 'Xxxx', NULL);

-- ----------------------------
-- Table structure for service
-- ----------------------------
DROP TABLE IF EXISTS `service`;
CREATE TABLE `service`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `sub_judul` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desk_1` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desk_2` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desk_3` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `desk_4` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desk_5` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desk_6` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desk_7` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desk_8` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desk_9` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desk_10` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desk_11` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desk_12` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desk_13` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desk_14` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `desk_15` text CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL,
  `create_date` timestamp(0) NULL ON UPDATE CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of service
-- ----------------------------
INSERT INTO `service` VALUES (1, 'Feature-20190312151804.jpg', 'STRATEGIC MANAGEMENT TRAINING', 'Penyelenggara Training Workshop', 'Value Networking For Strategic Partnership', 'Strategic Planning For Business', 'Implementing Business Strategy', 'Business Model Canvas', 'Merger And Acquisition', 'Feasibility Study', '', 'Management For Bisnis Development', 'Project Management', '', '', '', '', '', '', '2019-03-12 21:18:04');
INSERT INTO `service` VALUES (2, 'Feature-20190317050652.jpg', 'OPERATIONAL EXCELLENCE TRAINING', 'Penyelenggara Training Workshop', 'Blueprint For Operational Excellence', 'Value Stream Mapping', 'Design For Lean Six Sigma', 'Operational Excellence In Supply Chain Management', 'Project Planning And Control', 'Production/Operation Planning And Control', '', '', '', '', '', '', '', '', '', '2019-03-17 11:06:52');
INSERT INTO `service` VALUES (3, 'Feature-20190317050704.jpg', 'MARKETING TRAINING', 'Penyelenggara Training Workshop', 'Marketing Training', 'Marketing Action Plan', 'Digital Marketing', 'Integrated Marketing', 'Marketing Management', 'Customer Engagement', '', 'Enterpreneur', '', '', '', '', '', '', '', '2019-03-17 11:07:04');
INSERT INTO `service` VALUES (4, 'Feature-20190317050813.jpg', 'HUMAN RESOURCE TRAINING', 'Penyelenggara Training Workshop', 'Strategic Human Resource Planning', 'Developing Human Resource Policy', 'Employee Engagement And Retention', 'Designing Compansation And Benefit', 'Learning And Development Human Resource', 'Building Skills For Leaders', '', '', '', '', '', '', '', '', '', '2019-03-17 11:08:13');
INSERT INTO `service` VALUES (5, 'Feature-20190317050836.jpg', 'PENDAMPINGAN, PENELITIAN, DAN SURVEI', 'PENDAMPINGAN, PENELITIAN, DAN SURVEI', 'Implementasi Model Bisnis', 'Pengampingan Proyek Kerjasama', 'Penelitian Pelanggan', 'Survei Pasar', 'Olah Data Bisnis', '', '', '', '', '', '', '', '', '', '', '2019-03-17 11:08:36');
INSERT INTO `service` VALUES (6, 'Feature-20190317050854.jpg', 'GCG AND MANAGEMENT CONTOL TRAINING', 'Implementation Good Corporate Governance', 'Advanced GCG Workshop', 'Management Planning And Control Systems', 'Internal Control Over Financial Reporting', 'Fraud Management', 'Risk Management And Corporate Control', '', '', '', '', '', '', '', '', '', '', '2019-03-17 11:08:54');

-- ----------------------------
-- Table structure for subjects
-- ----------------------------
DROP TABLE IF EXISTS `subjects`;
CREATE TABLE `subjects`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `create_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of subjects
-- ----------------------------
INSERT INTO `subjects` VALUES (1, 'News', '2018-11-23 20:26:00');
INSERT INTO `subjects` VALUES (2, 'Company', '2018-11-23 22:30:09');

-- ----------------------------
-- Table structure for tb_responden
-- ----------------------------
DROP TABLE IF EXISTS `tb_responden`;
CREATE TABLE `tb_responden`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_kelamin` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `nama_perusahaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `alamat` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `kota` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `provinsi` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `no_tlp` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `jenis_jasa` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 13 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of tb_responden
-- ----------------------------
INSERT INTO `tb_responden` VALUES (1, 'Saipul', 'Pria', 'PT Hansae Indonesia Utama', 'KBN Cakung Jl Jawa 14 Blok A/06 Cilincing', 'Jakarta', 'DKI Jakarta', '(021) 44836313', 'Pengujian', '2019-11-15');
INSERT INTO `tb_responden` VALUES (2, 'Mirna', 'Wanita', 'PT.Hansoll Indo', 'KBN Cakung Jl Jawa 8 Blok C/16 Cilincing', 'Jakarta', 'DKI Jakarta', '(021) 4417670', 'Pelatihan', '2019-11-15');
INSERT INTO `tb_responden` VALUES (3, 'Didin', 'Pria', 'PT.WOONGJIN TEXTILES', 'Korea Center Bldg 6th Floor Suite 604 Jl.Gatot Subroto Kav.58', 'Jakarta Selatan', 'DKI Jakarta', '(021) 5223364/5', 'RancangBangun', '2019-11-15');
INSERT INTO `tb_responden` VALUES (4, 'Putri Anjani', 'Wanita', 'PT.TEXPIA JAYA INDONESIA', 'Central Mas Pasific Build. 404 Jl.Palmerah Utara No.14', 'Jakarta Barat', 'DKI Jakarta', '(021) 53673885/6', 'Pengujian', '2019-11-15');
INSERT INTO `tb_responden` VALUES (5, 'Fauzan', 'Pria', 'PT. Bongman International', 'Jl. Raya Cibening No.205', 'Purwakarta', 'Jawa Barat', '(0264) 215812', 'Pelatihan', '2019-11-15');
INSERT INTO `tb_responden` VALUES (6, 'Sri Wahyuni', 'Wanita', 'PT. Busana Prima Global', 'Jl. Mercedez Benz No.223A Ds. Cicadas Kec. Gunung Putri', 'Bogor', 'Jawa Barat', '(021) 8676110', 'RancangBangun', '2019-11-15');
INSERT INTO `tb_responden` VALUES (7, 'Ujang Kandi', 'Pria', 'PT.SEYON INDONESIA', 'Jl. Pasar Ampera Desa Cikopo Campaka Rt 001/04, Bungursari', 'Purwakarta', 'Jawa Barat', '(0264) 311643', 'Pengujian', '2019-11-15');
INSERT INTO `tb_responden` VALUES (8, 'Kemalawati', 'Wanita', 'PT Sung Chang Indonesia', 'Jl. Raya Wates – Purworejo Km. 2, Desa Triharjo, Wates – Kulonprogo', 'Semarang', 'Jawa Tengah', '(0274) 775321', 'Pelatihan', '2019-11-15');
INSERT INTO `tb_responden` VALUES (9, 'Hilman', 'Pria', 'PT.SEMARANG GARMENT', 'l. Soekarno Hatta Km.25 Ds. Wujil Kec. Bregas', 'Semarang', 'Jawa Tengah', '(024) 6922876', 'RancangBangun', '2019-11-15');
INSERT INTO `tb_responden` VALUES (10, 'Saifudin', 'Pria', 'PT.DAE JAYA JINESIA', 'JL. Madura 4 Blok D-09 Kbn Cakung-Cilincing', 'Jakarta Utara', 'DKI Jakarta', '(021) 44837150', 'Pengujian', '2019-11-16');
INSERT INTO `tb_responden` VALUES (11, 'Maimunah', 'Wanita', 'PT. KWANG LIM INDONESIA', 'Kp. Purwasari RT.01/01 Purwasari Kec. Cicurug', 'Sukabumi', 'Jawa Barat', '(0266) 735172', 'Pelatihan', '2019-11-16');
INSERT INTO `tb_responden` VALUES (12, 'Zaenal Abidin', 'Pria', 'PT. DAEHAN GLOBAL', 'Jl. Mayor Okin Jaya Atmaja No.112B Cibinong', 'Bogor', 'Jawa Barat', '(021) 8753626', 'RancangBangun', '2019-11-16');

-- ----------------------------
-- Table structure for unsur_pelatihan
-- ----------------------------
DROP TABLE IF EXISTS `unsur_pelatihan`;
CREATE TABLE `unsur_pelatihan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` int(11) NOT NULL,
  `unsur_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_4` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_5` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_6` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_7` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` date NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of unsur_pelatihan
-- ----------------------------
INSERT INTO `unsur_pelatihan` VALUES (1, 2, '4', '5', '3', '5', '4', '4', '2', '2019-11-15');
INSERT INTO `unsur_pelatihan` VALUES (2, 5, '3', '5', '5', '3', '4', '2', '3', '2019-11-15');
INSERT INTO `unsur_pelatihan` VALUES (3, 8, '3', '5', '4', '3', '3', '2', '3', '2019-11-15');
INSERT INTO `unsur_pelatihan` VALUES (4, 11, '5', '3', '4', '5', '3', '4', '5', '2019-11-16');

-- ----------------------------
-- Table structure for unsur_pengujian
-- ----------------------------
DROP TABLE IF EXISTS `unsur_pengujian`;
CREATE TABLE `unsur_pengujian`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_4` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_5` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_6` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `unsur_7` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `tanggal` datetime(6) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of unsur_pengujian
-- ----------------------------
INSERT INTO `unsur_pengujian` VALUES (1, '1', '5', '5', '4', '3', '2', '3', '4', '2019-11-15 00:00:00.000000');
INSERT INTO `unsur_pengujian` VALUES (2, '4', '3', '4', '5', '5', '4', '3', '2', '2019-11-15 00:00:00.000000');
INSERT INTO `unsur_pengujian` VALUES (3, '7', '3', '5', '4', '3', '4', '3', '3', '2019-11-15 00:00:00.000000');
INSERT INTO `unsur_pengujian` VALUES (4, '10', '3', '3', '5', '3', '3', '5', '3', '2019-11-16 00:00:00.000000');

-- ----------------------------
-- Table structure for unsur_rancang
-- ----------------------------
DROP TABLE IF EXISTS `unsur_rancang`;
CREATE TABLE `unsur_rancang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_pelanggan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `unsur_1` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `unsur_2` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `unsur_3` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `unsur_4` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `unsur_5` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `unsur_6` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `unsur_7` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `tanggal` datetime(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of unsur_rancang
-- ----------------------------
INSERT INTO `unsur_rancang` VALUES (1, '3', '5', '4', '3', '2', '5', '4', '3', '2019-11-15 00:00:00.000000');
INSERT INTO `unsur_rancang` VALUES (2, '6', '4', '3', '2', '5', '4', '4', '3', '2019-11-15 00:00:00.000000');
INSERT INTO `unsur_rancang` VALUES (3, '9', '3', '5', '4', '3', '5', '5', '3', '2019-11-15 00:00:00.000000');
INSERT INTO `unsur_rancang` VALUES (4, '12', '5', '3', '5', '4', '2', '3', '4', '2019-11-16 00:00:00.000000');

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
  `create_date` timestamp(0) NOT NULL DEFAULT CURRENT_TIMESTAMP(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (2, 'Admin', 'BBT', 'admin', 'ad@Min.com', '21232f297a57a5a743894a0e4a801fc3', '2018-11-23 23:25:16');

-- ----------------------------
-- View structure for laporan
-- ----------------------------
DROP VIEW IF EXISTS `laporan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `laporan` AS SELECT
tb_responden.id,
tb_responden.nama,
tb_responden.jenis_kelamin,
tb_responden.nama_perusahaan,
tb_responden.alamat,
tb_responden.kota,
tb_responden.provinsi,
tb_responden.no_tlp,
tb_responden.tanggal AS tanggal_pendaftaran,
tb_responden.jenis_jasa,
unsur_pelatihan.unsur_1 AS pelatihan_survey_1,
unsur_pelatihan.unsur_2 AS pelatihan_survey_2,
unsur_pelatihan.unsur_3 AS pelatihan_survey_3,
unsur_pelatihan.unsur_4 AS pelatihan_survey_4,
unsur_pelatihan.unsur_5 AS pelatihan_survey_5,
unsur_pelatihan.unsur_6 AS pelatihan_survey_6,
unsur_pelatihan.unsur_7 AS pelatihan_survey_7,
unsur_pengujian.unsur_1 AS pengujian_survey_1,
unsur_pengujian.unsur_2 AS pengujian_survey_2,
unsur_pengujian.unsur_3 AS pengujian_survey_3,
unsur_pengujian.unsur_4 AS pengujian_survey_4,
unsur_pengujian.unsur_5 AS pengujian_survey_5,
unsur_pengujian.unsur_6 AS pengujian_survey_6,
unsur_pengujian.unsur_7 AS pengujian_survey_7,
unsur_rancang.unsur_1 AS rancang_survey_1,
unsur_rancang.unsur_2 AS rancang_survey_2,
unsur_rancang.unsur_3 AS rancang_survey_3,
unsur_rancang.unsur_4 AS rancang_survey_4,
unsur_rancang.unsur_5 AS rancang_survey_5,
unsur_rancang.unsur_6 AS rancang_survey_6,
unsur_rancang.unsur_7 AS rancang_survey_7

FROM
(((tb_responden 
LEFT JOIN unsur_pelatihan ON (tb_responden.id = unsur_pelatihan.id_pelanggan))
LEFT JOIN unsur_pengujian ON (tb_responden.id = unsur_pengujian.id_pelanggan))
LEFT JOIN unsur_rancang ON (tb_responden.id = unsur_rancang.id_pelanggan)) ;

-- ----------------------------
-- View structure for laporan_pelatihan
-- ----------------------------
DROP VIEW IF EXISTS `laporan_pelatihan`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `laporan_pelatihan` AS SELECT
tb_responden.id,
tb_responden.nama,
tb_responden.jenis_kelamin,
tb_responden.nama_perusahaan,
tb_responden.alamat,
tb_responden.kota,
tb_responden.provinsi,
tb_responden.no_tlp,
tb_responden.tanggal AS tanggal_pendaftaran,
tb_responden.jenis_jasa,
unsur_pelatihan.unsur_1 AS pelatihan_survey_1,
unsur_pelatihan.unsur_2 AS pelatihan_survey_2,
unsur_pelatihan.unsur_3 AS pelatihan_survey_3,
unsur_pelatihan.unsur_4 AS pelatihan_survey_4,
unsur_pelatihan.unsur_5 AS pelatihan_survey_5,
unsur_pelatihan.unsur_6 AS pelatihan_survey_6,
unsur_pelatihan.unsur_7 AS pelatihan_survey_7
FROM
(tb_responden 
JOIN unsur_pelatihan ON (tb_responden.id = unsur_pelatihan.id_pelanggan)) ;

-- ----------------------------
-- View structure for laporan_pengujian
-- ----------------------------
DROP VIEW IF EXISTS `laporan_pengujian`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `laporan_pengujian` AS SELECT
tb_responden.id,
tb_responden.nama,
tb_responden.jenis_kelamin,
tb_responden.nama_perusahaan,
tb_responden.alamat,
tb_responden.kota,
tb_responden.provinsi,
tb_responden.no_tlp,
tb_responden.tanggal AS tanggal_pendaftaran,
tb_responden.jenis_jasa,
unsur_pengujian.unsur_1 AS pengujian_survey_1,
unsur_pengujian.unsur_2 AS pengujian_survey_2,
unsur_pengujian.unsur_3 AS pengujian_survey_3,
unsur_pengujian.unsur_4 AS pengujian_survey_4,
unsur_pengujian.unsur_5 AS pengujian_survey_5,
unsur_pengujian.unsur_6 AS pengujian_survey_6,
unsur_pengujian.unsur_7 AS pengujian_survey_7
FROM
(tb_responden 
JOIN unsur_pengujian ON (tb_responden.id = unsur_pengujian.id_pelanggan)) ;

-- ----------------------------
-- View structure for laporan_rancang
-- ----------------------------
DROP VIEW IF EXISTS `laporan_rancang`;
CREATE ALGORITHM = UNDEFINED SQL SECURITY DEFINER VIEW `laporan_rancang` AS SELECT
tb_responden.id,
tb_responden.nama,
tb_responden.jenis_kelamin,
tb_responden.nama_perusahaan,
tb_responden.alamat,
tb_responden.kota,
tb_responden.provinsi,
tb_responden.no_tlp,
tb_responden.tanggal AS tanggal_pendaftaran,
tb_responden.jenis_jasa,
unsur_rancang.unsur_1 AS rancang_survey_1,
unsur_rancang.unsur_2 AS rancang_survey_2,
unsur_rancang.unsur_3 AS rancang_survey_3,
unsur_rancang.unsur_4 AS rancang_survey_4,
unsur_rancang.unsur_5 AS rancang_survey_5,
unsur_rancang.unsur_6 AS rancang_survey_6,
unsur_rancang.unsur_7 AS rancang_survey_7
FROM
(tb_responden 
JOIN unsur_rancang ON (tb_responden.id = unsur_rancang.id_pelanggan)) ;

SET FOREIGN_KEY_CHECKS = 1;
