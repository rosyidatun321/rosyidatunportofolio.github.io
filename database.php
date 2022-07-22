-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP DATABASE IF EXISTS `rosemedica`;
CREATE DATABASE `rosemedica` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;
USE `rosemedica`;

DROP TABLE IF EXISTS `t_datadiri`;
CREATE TABLE `t_datadiri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `no_rm` int(11) NOT NULL,
  `nama` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenkel` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_rawat` varchar(1) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keluhan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruang_rawat` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `t_datadiri` (`id`, `no_rm`, `nama`, `alamat`, `jenkel`, `jenis_rawat`, `no_hp`, `keluhan`, `ruang_rawat`) VALUES
(1,	332196811,	'Rosyidatun Nur Rohmah',	'Klaten, Jawa Tengah',	'P',	'2',	'085702547331',	'istihadlhoh',	'-'),
(2,	2147483647,	'Rosyi',	'Klaten',	'P',	'2',	'085702547331',	'nothing',	'-'),
(3,	132468,	'jaskda',	'sdsdf',	'P',	'2',	'085702547331',	'sdffd',	'-');

-- 2022-07-15 04:49:37
