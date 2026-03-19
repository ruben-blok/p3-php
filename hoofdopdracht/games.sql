-- Database: p3_app
-- Tabel: games

CREATE DATABASE IF NOT EXISTS `p3_app`;
USE `p3_app`;

CREATE TABLE `games` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `release_year` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `games` (`title`, `price`, `release_year`) VALUES
('Minecraft', 30, 2009),
('Snake', 5, 1998),
('Roblox', 10, 2006),
('Fortnite', 0, 2017);
