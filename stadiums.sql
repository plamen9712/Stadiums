-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 13 юни 2020 в 01:20
-- Версия на сървъра: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stadiums`
--

-- --------------------------------------------------------

--
-- Структура на таблица `stadium`
--

CREATE TABLE `stadium` (
  `name` varchar(50) DEFAULT NULL,
  `venue` varchar(40) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `seatsNumber` int(11) DEFAULT NULL,
  `standingNumber` int(11) DEFAULT NULL,
  `inUefa` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `stadium`
--

INSERT INTO `stadium` (`name`, `venue`, `address`, `seatsNumber`, `standingNumber`, `inUefa`) VALUES
('Маракана', 'Рио де Жанейро', 'Av. Pres. Castelo Branco, Portão 3 - Maracanã', 68838, 12442, 'Не'),
('Камп Ноу', 'Барселона', 'C. d\'Arístides Maillol, 12, 08028', 88838, 3124, 'Да'),
('Етихад', 'Манчестър', 'Ashton New Rd, Manchester M11 3FF', 55000, 1000, 'Да');

-- --------------------------------------------------------

--
-- Структура на таблица `venue`
--

CREATE TABLE `venue` (
  `city` varchar(40) DEFAULT NULL,
  `country` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Схема на данните от таблица `venue`
--

INSERT INTO `venue` (`city`, `country`) VALUES
('Мадрид', 'Испания'),
('Манчестър', 'Англия'),
('Париж', 'Франция'),
('Мюнхен', 'Германия'),
('Барселона', 'Испания'),
('Лондон', 'Англия'),
('Амстердам', 'Холандия'),
('Рио де Жанейро', 'Бразилия'),
('Мексико Сити', 'Мексико'),
('Виена', 'Австрия');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
