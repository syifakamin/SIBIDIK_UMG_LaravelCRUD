/*
 Navicat Premium Data Transfer

 Source Server         : MySQL - Localhost - amin
 Source Server Type    : MySQL
 Source Server Version : 100411
 Source Host           : localhost:3306
 Source Schema         : laravelcrud

 Target Server Type    : MySQL
 Target Server Version : 100411
 File Encoding         : 65001

 Date: 24/11/2020 16:34:43
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for camaba
-- ----------------------------
DROP TABLE IF EXISTS `camaba`;
CREATE TABLE `camaba`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `no_reg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `program_studi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of camaba
-- ----------------------------
INSERT INTO `camaba` VALUES (2, '15621052', 'SASUKE UCIHA NARUTO', 'KONOHAKURE', 'PELATIHAN NINJA HATORI', '2020-11-23 09:22:07', '2020-11-23 09:22:07');
INSERT INTO `camaba` VALUES (3, '20200642', 'H. Bolot', 'EKONOMI DAN BISNIS', 'KEWIRAUSAHAAN', '2020-11-17 17:18:19', '2020-11-17 17:18:19');
INSERT INTO `camaba` VALUES (4, '20201138', 'M. SODIKIN', 'SUNDA EMPIRE', 'TATA KELOLA EMPIRE', '2020-11-18 19:09:54', '2020-11-18 19:09:54');
INSERT INTO `camaba` VALUES (5, '123456', 'sueb', 'TEKNIK', 'TEKNIK TERNAK IKAN', '2020-11-23 09:46:01', '2020-11-23 09:46:01');
INSERT INTO `camaba` VALUES (7, '123', 'bram', 'teknik', 'bahasa ikan', '2020-11-24 09:31:17', '2020-11-24 09:31:17');

-- ----------------------------
-- Table structure for failed_jobs
-- ----------------------------
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp(0) NOT NULL DEFAULT current_timestamp(0),
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for hasil_akhir
-- ----------------------------
DROP TABLE IF EXISTS `hasil_akhir`;
CREATE TABLE `hasil_akhir`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nilai` double NOT NULL,
  `rangking` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `keputusan` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for hasil_perhitungan
-- ----------------------------
DROP TABLE IF EXISTS `hasil_perhitungan`;
CREATE TABLE `hasil_perhitungan`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `camaba_id` bigint(20) UNSIGNED NOT NULL,
  `kriteria_id` bigint(20) UNSIGNED NOT NULL,
  `nilai` double NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 17 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of hasil_perhitungan
-- ----------------------------
INSERT INTO `hasil_perhitungan` VALUES (1, 2, 2, 50, NULL, '2020-11-23 20:27:58');
INSERT INTO `hasil_perhitungan` VALUES (2, 2, 3, 90, NULL, '2020-11-23 20:27:58');
INSERT INTO `hasil_perhitungan` VALUES (3, 2, 4, 90, NULL, '2020-11-23 20:27:58');
INSERT INTO `hasil_perhitungan` VALUES (4, 3, 2, 90, NULL, NULL);
INSERT INTO `hasil_perhitungan` VALUES (5, 3, 3, 10, NULL, NULL);
INSERT INTO `hasil_perhitungan` VALUES (6, 3, 4, 40, NULL, NULL);
INSERT INTO `hasil_perhitungan` VALUES (7, 4, 2, 50, NULL, '2020-11-23 09:22:39');
INSERT INTO `hasil_perhitungan` VALUES (8, 4, 3, 40, NULL, '2020-11-23 09:22:39');
INSERT INTO `hasil_perhitungan` VALUES (9, 4, 4, 80, NULL, '2020-11-23 09:22:39');
INSERT INTO `hasil_perhitungan` VALUES (11, 5, 2, 22, NULL, NULL);
INSERT INTO `hasil_perhitungan` VALUES (12, 5, 3, 11, NULL, NULL);
INSERT INTO `hasil_perhitungan` VALUES (13, 5, 4, 33, NULL, NULL);
INSERT INTO `hasil_perhitungan` VALUES (14, 7, 2, 11, NULL, NULL);
INSERT INTO `hasil_perhitungan` VALUES (15, 7, 3, 22, NULL, NULL);
INSERT INTO `hasil_perhitungan` VALUES (16, 7, 4, 33, NULL, NULL);

-- ----------------------------
-- Table structure for kriteria
-- ----------------------------
DROP TABLE IF EXISTS `kriteria`;
CREATE TABLE `kriteria`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nama_kriteria` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of kriteria
-- ----------------------------
INSERT INTO `kriteria` VALUES (2, 'Nilai Test Akademik', 'Benefit', '50', '2020-11-17 17:15:40', '2020-11-17 17:17:11');
INSERT INTO `kriteria` VALUES (3, 'Nilai Test Kemampuan Dasar', 'Benefit', '40', '2020-11-17 17:16:20', '2020-11-17 17:16:20');
INSERT INTO `kriteria` VALUES (4, 'Nilai Prestasi', 'Benefit', '10', '2020-11-17 17:16:37', '2020-11-17 17:16:37');

-- ----------------------------
-- Table structure for migrations
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 32 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES (24, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` VALUES (25, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` VALUES (26, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` VALUES (27, '2020_07_10_061721_create_camaba_table', 1);
INSERT INTO `migrations` VALUES (28, '2020_11_16_102142_create_kriteria_table', 1);
INSERT INTO `migrations` VALUES (29, '2020_11_17_144736_create_hasil_perhitungan_table', 1);
INSERT INTO `migrations` VALUES (30, '2020_11_17_144913_create_hasil_akhir_table', 1);
INSERT INTO `migrations` VALUES (31, '2020_11_19_072241_create_nilai_hitung_2_table', 2);

-- ----------------------------
-- Table structure for password_resets
-- ----------------------------
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets`  (
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  INDEX `password_resets_email_index`(`email`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp(0) NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_user` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NULL DEFAULT NULL,
  `created_at` timestamp(0) NULL DEFAULT NULL,
  `updated_at` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `users_email_unique`(`email`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 1 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci ROW_FORMAT = Dynamic;

SET FOREIGN_KEY_CHECKS = 1;
