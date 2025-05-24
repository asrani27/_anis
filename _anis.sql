/*
 Navicat Premium Dump SQL

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 50739 (5.7.39)
 Source Host           : localhost:3306
 Source Schema         : _anis

 Target Server Type    : MySQL
 Target Server Version : 50739 (5.7.39)
 File Encoding         : 65001

 Date: 24/05/2025 15:15:38
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for distribusi
-- ----------------------------
DROP TABLE IF EXISTS `distribusi`;
CREATE TABLE `distribusi` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `penerima_id` int(11) DEFAULT NULL,
  `pangan_id` int(11) DEFAULT NULL,
  `petugas_id` int(11) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of distribusi
-- ----------------------------
BEGIN;
INSERT INTO `distribusi` (`id`, `penerima_id`, `pangan_id`, `petugas_id`, `keterangan`, `tanggal`, `created_at`, `updated_at`) VALUES (3, 2, 1, 2, 'telah di kirim bantuan', '2025-03-08', '2025-03-08 01:27:53', '2025-03-08 01:29:52');
COMMIT;

-- ----------------------------
-- Table structure for hibah
-- ----------------------------
DROP TABLE IF EXISTS `hibah`;
CREATE TABLE `hibah` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `bentuk` varchar(255) DEFAULT NULL,
  `jumlah` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of hibah
-- ----------------------------
BEGIN;
INSERT INTO `hibah` (`id`, `nama`, `bentuk`, `jumlah`, `keterangan`, `created_at`, `updated_at`) VALUES (1, 'Beras', 'beras', '20000001', 'banjarmasin', '2025-03-08 00:00:38', '2025-05-24 05:42:19');
COMMIT;

-- ----------------------------
-- Table structure for penerima
-- ----------------------------
DROP TABLE IF EXISTS `penerima`;
CREATE TABLE `penerima` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) unsigned DEFAULT NULL,
  `penerima` varchar(255) DEFAULT NULL,
  `tempat_lahir` varchar(255) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jkel` varchar(255) DEFAULT NULL,
  `agama` varchar(255) DEFAULT NULL,
  `kecamatan` varchar(255) DEFAULT NULL,
  `kabupaten` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `tksk_id` int(11) unsigned DEFAULT NULL,
  `keterangan` text,
  `jenis` varchar(255) DEFAULT NULL,
  `tanggal_cair` date DEFAULT NULL,
  `hibah_id` int(11) unsigned NOT NULL,
  `verifikator_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of penerima
-- ----------------------------
BEGIN;
INSERT INTO `penerima` (`id`, `user_id`, `penerima`, `tempat_lahir`, `tanggal_lahir`, `jkel`, `agama`, `kecamatan`, `kabupaten`, `telp`, `alamat`, `created_at`, `updated_at`, `status`, `tksk_id`, `keterangan`, `jenis`, `tanggal_cair`, `hibah_id`, `verifikator_id`) VALUES (1, 10, 'udin', 'jbjm', '2025-03-02', 'L', 'ISLAM', 'asd', 'asd', 'sdf', 'ok', '2025-03-07 23:10:20', '2025-05-24 06:38:56', 'diterima', NULL, NULL, 'HIBAH', '2025-05-30', 1, 1);
INSERT INTO `penerima` (`id`, `user_id`, `penerima`, `tempat_lahir`, `tanggal_lahir`, `jkel`, `agama`, `kecamatan`, `kabupaten`, `telp`, `alamat`, `created_at`, `updated_at`, `status`, `tksk_id`, `keterangan`, `jenis`, `tanggal_cair`, `hibah_id`, `verifikator_id`) VALUES (2, NULL, 'asdasd', 'asd', '2025-03-04', 'L', 'KRISTEN', 'dsf', 'sdf', '234', 'sdf', '2025-03-08 00:25:18', '2025-05-24 06:38:23', 'diterima', 1, 'ok', 'BANSOS', '2025-05-23', 1, 1);
INSERT INTO `penerima` (`id`, `user_id`, `penerima`, `tempat_lahir`, `tanggal_lahir`, `jkel`, `agama`, `kecamatan`, `kabupaten`, `telp`, `alamat`, `created_at`, `updated_at`, `status`, `tksk_id`, `keterangan`, `jenis`, `tanggal_cair`, `hibah_id`, `verifikator_id`) VALUES (4, 12, 'hkjd', 'dfg', '2025-05-23', 'L', 'ISLAM', 'dgh', 'dfg', 'dfg', 'dfg', '2025-05-23 23:19:39', '2025-05-24 06:42:30', 'ditolak', NULL, NULL, 'HIBAH', '2025-05-23', 1, 1);
COMMIT;

-- ----------------------------
-- Table structure for pengaduan
-- ----------------------------
DROP TABLE IF EXISTS `pengaduan`;
CREATE TABLE `pengaduan` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `perihal` text NOT NULL,
  `isi` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of pengaduan
-- ----------------------------
BEGIN;
INSERT INTO `pengaduan` (`id`, `user_id`, `perihal`, `isi`, `created_at`, `updated_at`) VALUES (1, 10, 'jhsddsgfjh', 'aaaaaa jdfgjs', '2025-03-07 22:36:09', '2025-03-07 22:47:24');
COMMIT;

-- ----------------------------
-- Table structure for petugas
-- ----------------------------
DROP TABLE IF EXISTS `petugas`;
CREATE TABLE `petugas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `alamat` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of petugas
-- ----------------------------
BEGIN;
INSERT INTO `petugas` (`id`, `nama`, `jabatan`, `telp`, `alamat`, `created_at`, `updated_at`) VALUES (1, 'udin', 'marketing', '0987651', 'jl pramuka', '2025-03-07 23:41:29', '2025-03-07 23:41:44');
INSERT INTO `petugas` (`id`, `nama`, `jabatan`, `telp`, `alamat`, `created_at`, `updated_at`) VALUES (2, 'budi', 'marketing', '-', '-', '2025-03-08 01:29:42', '2025-03-08 01:29:42');
COMMIT;

-- ----------------------------
-- Table structure for skpd
-- ----------------------------
DROP TABLE IF EXISTS `skpd`;
CREATE TABLE `skpd` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `kepala` varchar(255) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `telp` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of skpd
-- ----------------------------
BEGIN;
INSERT INTO `skpd` (`id`, `nama`, `kepala`, `alamat`, `telp`, `created_at`, `updated_at`) VALUES (1, 'DINAS SOSIAL', 'cief', 'bjm timur', 'banjarmasin', '2025-03-08 00:00:38', '2025-03-08 00:00:44');
COMMIT;

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
BEGIN;
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (1, 'superadmin', 'superadmin', '$2y$12$r0HAFQIZdiAabhk3HwCdVub716cax1jMnmwKnv76nJz8sJx0M3TB6', NULL, NULL, '2024-12-20 02:49:44', 'superadmin');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (10, 'wulan', 'wulan', '$2y$12$FE3tgH6TNhYG.nxsBTMfiuDEOijnViXDoZ2JR58I4f7xjzNbWrARq', NULL, '2025-03-07 21:50:57', '2025-03-07 21:50:57', 'user');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (12, 'udin', 'udin', '$2y$12$XehetnduE/nTDgtr4SjMQ.w10FkuGTHUOQxFTOodEpXMl1JTm4x7i', NULL, '2025-05-23 23:09:41', '2025-05-23 23:09:41', 'user');
INSERT INTO `users` (`id`, `username`, `name`, `password`, `remember_token`, `created_at`, `updated_at`, `roles`) VALUES (13, 'fdg', '32456', '$2y$12$cDuOCA8QPx1GqkPBsjoFteDL0khddPwK6.BlrshvRdllbGdL5dNPu', NULL, '2025-05-24 02:07:22', '2025-05-24 02:09:10', 'superadmin');
COMMIT;

-- ----------------------------
-- Table structure for verifikator
-- ----------------------------
DROP TABLE IF EXISTS `verifikator`;
CREATE TABLE `verifikator` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `jabatan` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `skpd_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`skpd_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of verifikator
-- ----------------------------
BEGIN;
INSERT INTO `verifikator` (`id`, `nama`, `jabatan`, `created_at`, `updated_at`, `skpd_id`) VALUES (1, 'Udin', 'Kadis', '2025-03-08 00:00:50', '2025-05-24 05:33:05', 1);
INSERT INTO `verifikator` (`id`, `nama`, `jabatan`, `created_at`, `updated_at`, `skpd_id`) VALUES (2, 'sdf', 'asd', '2025-05-24 05:32:58', '2025-05-24 05:32:58', 1);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
