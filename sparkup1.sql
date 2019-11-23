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

 Date: 23/11/2019 17:58:58
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
-- Table structure for master_pertanyaan
-- ----------------------------
DROP TABLE IF EXISTS `master_pertanyaan`;
CREATE TABLE `master_pertanyaan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

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
-- Table structure for pertanyaan_pelatihan
-- ----------------------------
DROP TABLE IF EXISTS `pertanyaan_pelatihan`;
CREATE TABLE `pertanyaan_pelatihan`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

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
-- Table structure for pertanyaan_rancang
-- ----------------------------
DROP TABLE IF EXISTS `pertanyaan_rancang`;
CREATE TABLE `pertanyaan_rancang`  (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pertanyaan` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

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
