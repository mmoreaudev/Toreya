-- Adminer 4.8.1 MySQL 10.6.11-MariaDB-1:10.6.11+maria~deb10 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `user_pass` varchar(250) NOT NULL,
  `user_access` tinyint(1) NOT NULL,
  `avatar_url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `admin_users` (`id`, `username`, `user_id`, `user_pass`, `user_access`, `avatar_url`) VALUES
(1,	'Administrateur',	'admin@exemple.com',	'29f4f#RhNAH5gs',	1,	'https://ui-avatars.com/api/?name=Admin');

DROP TABLE IF EXISTS `review`;
CREATE TABLE `review` (
  `image` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `etoiles` varchar(1) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `nom` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `prix` varchar(255) NOT NULL,
  `img_url` text NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `img1` text DEFAULT 'https://toreya.pleven-dev.fr/images/None.png',
  `img3` text DEFAULT 'https://toreya.pleven-dev.fr/images/None.png',
  `img2` text DEFAULT 'https://toreya.pleven-dev.fr/images/None.png',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


-- 2023-02-13 11:51:21
