SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- Database selecteren (of aanmaken indien nodig)
CREATE DATABASE IF NOT EXISTS `trallo` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `trallo`;

-- Tabel: `planning_board`
DROP TABLE IF EXISTS `planning_board`;
CREATE TABLE IF NOT EXISTS `planning_board` (
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `section` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Tabel: `user`
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8mb4;

-- Dummy data invoegen
INSERT INTO `user` (`email`, `password`) VALUES ('test@example.com', 'hashedpassword1'); --maak hier je eigen acount aan
--https://www.md5hashgenerator.com/ om je wachtwoord te hashen, kies SHA1