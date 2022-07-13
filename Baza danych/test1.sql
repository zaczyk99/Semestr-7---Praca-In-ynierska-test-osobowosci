-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 10 Cze 2022, 11:26
-- Wersja serwera: 10.4.22-MariaDB
-- Wersja PHP: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `test1`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `odpowiedzi2`
--

CREATE TABLE `odpowiedzi2` (
  `id` int(11) NOT NULL,
  `sex` enum('m','f','o') NOT NULL,
  `pytanie1` enum('a','b','c','d','e') NOT NULL,
  `pytanie2` enum('a','b','c','d','e') NOT NULL,
  `pytanie3` enum('a','b','c','d','e') NOT NULL,
  `pytanie4` enum('a','b','c','d','e') NOT NULL,
  `pytanie5` enum('a','b','c','d','e') NOT NULL,
  `pytanie6` enum('a','b','c','d','e') NOT NULL,
  `pytanie7` enum('A','B','C') NOT NULL,
  `pytanie8` enum('a','b','c','d','e') NOT NULL,
  `pytanie9` enum('a','b','c','d','e') NOT NULL,
  `pytanie10` enum('a','b','c','d','e') NOT NULL,
  `pytanie11` enum('a','b','c','d','e') NOT NULL,
  `pytanie12` enum('a','b','c','d','e') NOT NULL,
  `pytanie13` enum('a','b','c','d','e') NOT NULL,
  `pytanie14` enum('A','B') NOT NULL,
  `pytanie15` enum('a','b','c','d','e') NOT NULL,
  `pytanie16` enum('a','b','c','d','e') NOT NULL,
  `pytanie17` enum('a','b','c','d','e') NOT NULL,
  `pytanie18` enum('a','b','c','d','e') NOT NULL,
  `pytanie19` enum('a','b','c','d','e') NOT NULL,
  `pytanie20` enum('A','B') NOT NULL,
  `pytanie21` enum('a','b','c','d','e') NOT NULL,
  `pytanie22` enum('a','b','c','d','e') NOT NULL,
  `pytanie23` enum('a','b','c','d','e') NOT NULL,
  `pytanie24` enum('a','b','c','d','e') NOT NULL,
  `pytanie25` enum('a','b','c','d','e') NOT NULL,
  `pytanie26` enum('a','b','c','d','e') NOT NULL,
  `pytanie27` enum('A','B') NOT NULL,
  `pytanie28` enum('A','B') NOT NULL,
  `pytanie29` enum('A','B') NOT NULL,
  `pytanie30` enum('A','B') NOT NULL,
  `pytanie31` enum('A','B') NOT NULL,
  `pytanie32` enum('A','B') NOT NULL,
  `pytanie33` enum('A','B') NOT NULL,
  `pytanie34` enum('A','B') NOT NULL,
  `pytanie35` enum('A','B') NOT NULL,
  `pytanie36` enum('A','B') NOT NULL,
  `pytanie37` enum('A','B') NOT NULL,
  `pytanie38` enum('A','B') NOT NULL,
  `pytanie39` enum('A','B') NOT NULL,
  `pytanie40` enum('A','B') NOT NULL,
  `pytanie41` enum('A','B') NOT NULL,
  `pytanie42` enum('A','B') NOT NULL,
  `pytanie43` enum('A','B') NOT NULL,
  `pytanie44` enum('A','B') NOT NULL,
  `pytanie45` enum('A','B') NOT NULL,
  `pytanie46` enum('A','B') NOT NULL,
  `pytanie47` enum('A','B') NOT NULL,
  `pytanie48` enum('A','B') NOT NULL,
  `pytanie49` enum('A','B') NOT NULL,
  `pytanie50` enum('A','B') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `odpowiedzi2`
--

INSERT INTO `odpowiedzi2` (`id`, `sex`, `pytanie1`, `pytanie2`, `pytanie3`, `pytanie4`, `pytanie5`, `pytanie6`, `pytanie7`, `pytanie8`, `pytanie9`, `pytanie10`, `pytanie11`, `pytanie12`, `pytanie13`, `pytanie14`, `pytanie15`, `pytanie16`, `pytanie17`, `pytanie18`, `pytanie19`, `pytanie20`, `pytanie21`, `pytanie22`, `pytanie23`, `pytanie24`, `pytanie25`, `pytanie26`, `pytanie27`, `pytanie28`, `pytanie29`, `pytanie30`, `pytanie31`, `pytanie32`, `pytanie33`, `pytanie34`, `pytanie35`, `pytanie36`, `pytanie37`, `pytanie38`, `pytanie39`, `pytanie40`, `pytanie41`, `pytanie42`, `pytanie43`, `pytanie44`, `pytanie45`, `pytanie46`, `pytanie47`, `pytanie48`, `pytanie49`, `pytanie50`) VALUES
(1, 'm', 'b', 'd', 'a', 'e', 'd', 'a', 'B', 'e', 'b', 'b', 'a', 'e', 'b', 'A', 'd', 'e', 'b', 'a', 'a', 'A', 'e', 'c', 'b', 'a', 'd', 'e', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B'),
(2, 'm', 'b', 'a', 'd', 'e', 'a', 'a', 'A', 'e', 'e', 'b', 'a', 'c', 'b', 'B', 'd', 'a', 'b', 'e', 'a', 'A', 'a', 'c', 'b', 'e', 'd', 'e', 'B', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B', 'B', 'A'),
(3, 'f', 'd', 'a', 'd', 'b', 'd', 'a', 'B', 'd', 'b', 'a', 'd', 'e', 'b', 'A', 'd', 'e', 'b', 'b', 'a', 'A', 'd', 'a', 'e', 'b', 'd', 'c', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B'),
(4, 'f', 'a', 'e', 'a', 'e', 'a', 'e', 'C', 'a', 'b', 'd', 'b', 'e', 'd', 'B', 'b', 'a', 'e', 'e', 'e', 'B', 'a', 'e', 'a', 'e', 'a', 'a', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A'),
(5, 'f', 'a', 'e', 'a', 'a', 'e', 'a', 'A', 'a', 'e', 'a', 'e', 'e', 'a', 'A', 'b', 'e', 'e', 'b', 'e', 'B', 'a', 'd', 'a', 'e', 'd', 'd', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A'),
(6, 'o', 'a', 'e', 'a', 'a', 'e', 'a', 'A', 'a', 'e', 'a', 'e', 'e', 'a', 'A', 'b', 'e', 'e', 'b', 'e', 'B', 'a', 'd', 'a', 'e', 'd', 'd', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A'),
(7, 'm', 'a', 'e', 'a', 'a', 'e', 'a', 'A', 'a', 'e', 'a', 'e', 'e', 'a', 'A', 'b', 'e', 'e', 'b', 'e', 'B', 'a', 'd', 'a', 'e', 'd', 'd', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A'),
(8, 'f', 'e', 'a', 'e', 'e', 'b', 'a', 'B', 'a', 'b', 'a', 'b', 'e', 'e', 'A', 'b', 'a', 'a', 'b', 'a', 'A', 'a', 'a', 'a', 'a', 'a', 'd', 'B', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A'),
(9, 'o', 'e', 'a', 'e', 'e', 'b', 'a', 'B', 'a', 'b', 'a', 'b', 'e', 'e', 'A', 'b', 'a', 'a', 'b', 'a', 'A', 'a', 'a', 'a', 'a', 'a', 'd', 'B', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A'),
(10, 'm', 'b', 'd', 'e', 'b', 'a', 'b', 'B', 'e', 'd', 'd', 'b', 'b', 'b', 'B', 'a', 'e', 'a', 'd', 'b', 'B', 'b', 'd', 'a', 'd', 'e', 'a', 'B', 'A', 'B', 'A', 'A', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'A'),
(11, 'f', 'b', 'd', 'e', 'b', 'a', 'b', 'B', 'e', 'd', 'd', 'b', 'b', 'b', 'B', 'a', 'e', 'a', 'd', 'b', 'B', 'b', 'd', 'a', 'd', 'e', 'a', 'B', 'A', 'B', 'A', 'A', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'A'),
(12, 'f', 'b', 'd', 'e', 'b', 'a', 'b', 'B', 'e', 'd', 'd', 'b', 'b', 'b', 'B', 'a', 'e', 'a', 'd', 'b', 'B', 'b', 'd', 'a', 'd', 'e', 'a', 'B', 'A', 'B', 'A', 'A', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'A'),
(13, 'f', 'b', 'd', 'e', 'b', 'a', 'b', 'B', 'e', 'd', 'd', 'b', 'b', 'b', 'B', 'a', 'e', 'a', 'd', 'b', 'B', 'b', 'd', 'a', 'd', 'e', 'a', 'B', 'A', 'B', 'A', 'A', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'A'),
(14, 'f', 'e', 'a', 'a', 'e', 'e', 'e', 'C', 'a', 'a', 'a', 'e', 'e', 'b', 'B', 'a', 'e', 'a', 'd', 'b', 'B', 'b', 'd', 'a', 'd', 'e', 'a', 'B', 'A', 'B', 'A', 'A', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'B'),
(15, 'f', 'e', 'a', 'a', 'e', 'e', 'e', 'C', 'a', 'a', 'a', 'e', 'e', 'b', 'B', 'a', 'e', 'a', 'd', 'b', 'B', 'b', 'd', 'a', 'd', 'e', 'a', 'B', 'A', 'B', 'A', 'A', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'B'),
(16, 'o', 'a', 'e', 'a', 'a', 'a', 'a', 'A', 'e', 'e', 'e', 'a', 'a', 'c', 'A', 'c', 'c', 'c', 'c', 'c', 'B', 'b', 'd', 'a', 'd', 'e', 'a', 'B', 'A', 'B', 'A', 'A', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'B'),
(17, 'm', 'e', 'e', 'e', 'e', 'e', 'e', 'C', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A'),
(18, 'm', 'e', 'e', 'e', 'e', 'e', 'e', 'C', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A'),
(19, 'm', 'e', 'e', 'e', 'e', 'e', 'e', 'C', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A'),
(20, 'm', 'e', 'e', 'e', 'e', 'e', 'e', 'C', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A'),
(21, 'f', 'e', 'e', 'e', 'e', 'e', 'e', 'C', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A'),
(22, 'f', 'e', 'e', 'e', 'e', 'e', 'e', 'C', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A'),
(23, 'f', 'e', 'e', 'e', 'e', 'e', 'e', 'C', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A'),
(24, 'o', 'e', 'e', 'e', 'e', 'e', 'e', 'C', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A'),
(25, 'o', 'e', 'e', 'e', 'e', 'e', 'e', 'C', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A'),
(26, 'o', 'e', 'e', 'e', 'e', 'e', 'e', 'C', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'B', 'e', 'e', 'e', 'e', 'e', 'e', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A'),
(27, 'o', 'b', 'b', 'b', 'b', 'b', 'b', 'A', 'b', 'b', 'b', 'b', 'b', 'b', 'A', 'b', 'b', 'b', 'b', 'b', 'A', 'b', 'b', 'b', 'b', 'b', 'b', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B'),
(28, 'o', 'e', 'c', 'e', 'e', 'e', 'e', 'C', 'b', 'c', 'c', 'b', 'c', 'b', 'B', 'e', 'b', 'e', 'b', 'e', 'B', 'd', 'a', 'd', 'a', 'd', 'b', 'B', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'B', 'B', 'B', 'A', 'A'),
(29, 'o', 'e', 'a', 'e', 'a', 'e', 'e', 'B', 'e', 'c', 'a', 'b', 'c', 'd', 'B', 'e', 'e', 'c', 'e', 'e', 'B', 'a', 'e', 'a', 'a', 'd', 'e', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'A', 'B', 'A', 'A', 'B', 'A', 'B', 'B'),
(30, 'm', 'e', 'a', 'e', 'a', 'e', 'e', 'B', 'e', 'c', 'a', 'b', 'c', 'd', 'B', 'e', 'e', 'c', 'e', 'e', 'B', 'a', 'e', 'a', 'a', 'd', 'e', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'A', 'B', 'A', 'A', 'B', 'A', 'B', 'B'),
(31, 'm', 'a', 'b', 'a', 'a', 'c', 'e', 'C', 'b', 'e', 'e', 'e', 'd', 'd', 'B', 'e', 'c', 'c', 'e', 'b', 'A', 'a', 'b', 'b', 'a', 'a', 'a', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'A'),
(32, 'm', 'e', 'e', 'a', 'a', 'a', 'a', 'A', 'e', 'a', 'e', 'a', 'e', 'a', 'A', 'a', 'a', 'a', 'a', 'a', 'B', 'a', 'a', 'a', 'a', 'a', 'a', 'A', 'B', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'B', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'B', 'B'),
(33, 'f', 'e', 'e', 'a', 'a', 'a', 'a', 'A', 'e', 'a', 'e', 'a', 'e', 'a', 'A', 'a', 'a', 'a', 'a', 'a', 'B', 'a', 'a', 'a', 'a', 'a', 'a', 'A', 'B', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'B', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'B', 'B'),
(34, 'o', 'e', 'e', 'a', 'a', 'a', 'a', 'A', 'e', 'a', 'e', 'a', 'e', 'a', 'A', 'a', 'a', 'a', 'a', 'a', 'B', 'a', 'a', 'a', 'a', 'a', 'a', 'A', 'B', 'B', 'B', 'A', 'B', 'B', 'A', 'B', 'B', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'B', 'B'),
(35, 'm', 'a', 'e', 'a', 'e', 'a', 'a', 'C', 'e', 'a', 'e', 'e', 'e', 'a', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'a', 'e', 'a', 'd', 'a', 'A', 'A', 'B', 'B', 'A', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'A', 'A'),
(36, 'm', 'a', 'e', 'a', 'e', 'a', 'a', 'C', 'e', 'a', 'e', 'e', 'e', 'a', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'a', 'e', 'a', 'd', 'a', 'A', 'A', 'B', 'B', 'A', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'A', 'A'),
(37, 'f', 'a', 'e', 'a', 'e', 'a', 'a', 'C', 'e', 'a', 'e', 'e', 'e', 'a', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'a', 'e', 'a', 'd', 'a', 'A', 'A', 'B', 'B', 'A', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'A', 'A'),
(38, 'f', 'a', 'e', 'a', 'e', 'a', 'a', 'C', 'e', 'a', 'e', 'e', 'e', 'a', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'a', 'e', 'a', 'd', 'a', 'A', 'A', 'B', 'B', 'A', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'A', 'A'),
(39, 'f', 'a', 'e', 'a', 'e', 'a', 'a', 'C', 'e', 'a', 'e', 'e', 'e', 'a', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'a', 'e', 'a', 'd', 'a', 'A', 'A', 'B', 'B', 'A', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'B', 'B', 'A', 'A'),
(40, 'm', 'a', 'a', 'a', 'a', 'e', 'a', 'C', 'e', 'e', 'a', 'e', 'a', 'a', 'A', 'e', 'a', 'e', 'e', 'e', 'A', 'a', 'a', 'e', 'a', 'e', 'a', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(41, 'm', 'a', 'a', 'a', 'a', 'e', 'a', 'C', 'e', 'e', 'a', 'e', 'a', 'a', 'A', 'e', 'a', 'e', 'e', 'e', 'A', 'a', 'a', 'e', 'a', 'e', 'a', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(42, 'm', 'a', 'a', 'a', 'a', 'e', 'a', 'C', 'e', 'e', 'a', 'e', 'a', 'a', 'A', 'e', 'a', 'e', 'e', 'e', 'A', 'a', 'a', 'e', 'a', 'e', 'a', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(43, 'm', 'a', 'a', 'a', 'a', 'e', 'a', 'C', 'e', 'e', 'a', 'e', 'a', 'a', 'A', 'e', 'a', 'e', 'e', 'e', 'A', 'a', 'a', 'e', 'a', 'e', 'a', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(44, 'f', 'a', 'a', 'a', 'a', 'e', 'a', 'C', 'e', 'e', 'a', 'e', 'a', 'a', 'A', 'e', 'a', 'e', 'e', 'e', 'A', 'a', 'a', 'e', 'a', 'e', 'a', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(45, 'o', 'a', 'a', 'a', 'a', 'e', 'a', 'C', 'e', 'e', 'a', 'e', 'a', 'a', 'A', 'e', 'a', 'e', 'e', 'e', 'A', 'a', 'a', 'e', 'a', 'e', 'a', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(46, 'o', 'a', 'a', 'a', 'a', 'e', 'a', 'C', 'e', 'e', 'a', 'e', 'a', 'a', 'A', 'e', 'a', 'e', 'e', 'e', 'A', 'a', 'a', 'e', 'a', 'e', 'a', 'B', 'A', 'B', 'B', 'B', 'B', 'B', 'B', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'A', 'B', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(47, 'f', 'a', 'a', 'e', 'a', 'e', 'e', 'C', 'e', 'e', 'a', 'e', 'a', 'e', 'A', 'e', 'e', 'e', 'e', 'e', 'A', 'e', 'a', 'e', 'e', 'e', 'e', 'B', 'A', 'A', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(48, 'f', 'a', 'a', 'e', 'a', 'e', 'e', 'C', 'e', 'e', 'a', 'e', 'a', 'e', 'A', 'e', 'e', 'e', 'e', 'e', 'A', 'e', 'a', 'e', 'e', 'e', 'e', 'B', 'A', 'A', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(49, 'f', 'a', 'a', 'e', 'a', 'e', 'e', 'C', 'e', 'e', 'a', 'e', 'a', 'e', 'A', 'e', 'e', 'e', 'e', 'e', 'A', 'e', 'a', 'e', 'e', 'e', 'e', 'B', 'A', 'A', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(50, 'm', 'a', 'a', 'e', 'a', 'e', 'e', 'C', 'e', 'e', 'a', 'e', 'a', 'e', 'A', 'e', 'e', 'e', 'e', 'e', 'A', 'e', 'a', 'e', 'e', 'e', 'e', 'B', 'A', 'A', 'B', 'B', 'B', 'B', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(51, 'm', 'b', 'b', 'd', 'a', 'e', 'e', 'A', 'e', 'a', 'a', 'a', 'a', 'e', 'A', 'e', 'a', 'a', 'a', 'e', 'A', 'e', 'a', 'a', 'e', 'a', 'e', 'B', 'A', 'A', 'B', 'B', 'A', 'B', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(52, 'm', 'b', 'b', 'd', 'a', 'e', 'e', 'A', 'e', 'a', 'a', 'a', 'a', 'e', 'A', 'e', 'a', 'a', 'a', 'e', 'A', 'e', 'a', 'a', 'e', 'a', 'e', 'B', 'A', 'A', 'B', 'B', 'A', 'B', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(53, 'o', 'b', 'b', 'd', 'a', 'e', 'e', 'A', 'e', 'a', 'a', 'a', 'a', 'e', 'A', 'e', 'a', 'a', 'a', 'e', 'A', 'e', 'a', 'a', 'e', 'a', 'e', 'B', 'A', 'A', 'B', 'B', 'A', 'B', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(54, 'o', 'b', 'b', 'd', 'a', 'e', 'e', 'A', 'e', 'a', 'a', 'a', 'a', 'e', 'A', 'e', 'a', 'a', 'a', 'e', 'A', 'e', 'a', 'a', 'e', 'a', 'e', 'B', 'A', 'A', 'B', 'B', 'A', 'B', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(55, 'o', 'b', 'b', 'd', 'a', 'e', 'e', 'A', 'e', 'a', 'a', 'a', 'a', 'e', 'A', 'e', 'a', 'a', 'a', 'e', 'A', 'e', 'a', 'a', 'e', 'a', 'e', 'B', 'A', 'A', 'B', 'B', 'A', 'B', 'B', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'B'),
(56, 'o', 'b', 'b', 'd', 'e', 'e', 'e', 'A', 'b', 'a', 'a', 'e', 'a', 'e', 'B', 'e', 'a', 'a', 'a', 'e', 'A', 'e', 'e', 'a', 'e', 'a', 'e', 'B', 'A', 'A', 'A', 'B', 'B', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'A', 'A'),
(57, 'o', 'b', 'b', 'd', 'e', 'e', 'e', 'A', 'b', 'a', 'a', 'e', 'a', 'e', 'B', 'e', 'a', 'a', 'a', 'e', 'A', 'e', 'e', 'a', 'e', 'a', 'e', 'B', 'A', 'A', 'A', 'B', 'B', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'A', 'A'),
(58, 'f', 'b', 'b', 'd', 'e', 'e', 'e', 'A', 'b', 'a', 'a', 'e', 'a', 'e', 'B', 'e', 'a', 'a', 'a', 'e', 'A', 'e', 'e', 'a', 'e', 'a', 'e', 'B', 'A', 'A', 'A', 'B', 'B', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'A', 'A'),
(59, 'm', 'b', 'b', 'd', 'e', 'e', 'e', 'A', 'b', 'a', 'a', 'e', 'a', 'e', 'B', 'e', 'a', 'a', 'a', 'e', 'A', 'e', 'e', 'a', 'e', 'a', 'e', 'B', 'A', 'A', 'A', 'B', 'B', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'A', 'A'),
(60, 'm', 'b', 'b', 'd', 'e', 'e', 'e', 'A', 'b', 'a', 'a', 'e', 'a', 'e', 'B', 'e', 'a', 'a', 'a', 'e', 'A', 'e', 'e', 'a', 'e', 'a', 'e', 'B', 'A', 'A', 'A', 'B', 'B', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'A', 'A'),
(61, 'm', 'b', 'b', 'd', 'e', 'e', 'e', 'A', 'b', 'a', 'a', 'e', 'a', 'e', 'B', 'e', 'a', 'a', 'a', 'e', 'A', 'e', 'e', 'a', 'e', 'a', 'e', 'B', 'A', 'A', 'A', 'B', 'B', 'A', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'A', 'A'),
(62, 'm', 'd', 'e', 'd', 'e', 'a', 'e', 'A', 'b', 'a', 'e', 'e', 'e', 'e', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'e', 'e', 'e', 'a', 'e', 'B', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(63, 'm', 'd', 'e', 'd', 'e', 'a', 'e', 'A', 'b', 'a', 'e', 'e', 'e', 'e', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'e', 'e', 'e', 'a', 'e', 'B', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(64, 'm', 'd', 'e', 'd', 'e', 'a', 'e', 'A', 'b', 'a', 'e', 'e', 'e', 'e', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'e', 'e', 'e', 'a', 'e', 'B', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(65, 'm', 'd', 'e', 'd', 'e', 'a', 'e', 'A', 'b', 'a', 'e', 'e', 'e', 'e', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'e', 'e', 'e', 'a', 'e', 'B', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(66, 'm', 'd', 'e', 'd', 'e', 'a', 'e', 'A', 'b', 'a', 'e', 'e', 'e', 'e', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'e', 'e', 'e', 'a', 'e', 'B', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(67, 'm', 'd', 'e', 'd', 'e', 'a', 'e', 'A', 'b', 'a', 'e', 'e', 'e', 'e', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'e', 'e', 'e', 'a', 'e', 'B', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(68, 'f', 'd', 'e', 'd', 'e', 'a', 'e', 'A', 'b', 'a', 'e', 'e', 'e', 'e', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'e', 'e', 'e', 'a', 'e', 'B', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(69, 'f', 'd', 'e', 'd', 'e', 'a', 'e', 'A', 'b', 'a', 'e', 'e', 'e', 'e', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'e', 'e', 'e', 'a', 'e', 'B', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(70, 'f', 'd', 'e', 'd', 'e', 'a', 'e', 'A', 'b', 'a', 'e', 'e', 'e', 'e', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'e', 'e', 'e', 'a', 'e', 'B', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(71, 'o', 'd', 'e', 'd', 'e', 'a', 'e', 'A', 'b', 'a', 'e', 'e', 'e', 'e', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'e', 'e', 'e', 'a', 'e', 'B', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(72, 'o', 'd', 'e', 'd', 'e', 'a', 'e', 'A', 'b', 'a', 'e', 'e', 'e', 'e', 'B', 'a', 'a', 'a', 'a', 'e', 'B', 'e', 'e', 'e', 'e', 'a', 'e', 'B', 'B', 'A', 'A', 'A', 'B', 'A', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(73, 'm', 'd', 'd', 'd', 'a', 'a', 'd', 'B', 'd', 'a', 'd', 'a', 'c', 'd', 'A', 'a', 'd', 'a', 'a', 'a', 'B', 'd', 'a', 'a', 'd', 'a', 'c', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B'),
(74, 'f', 'd', 'd', 'd', 'a', 'a', 'd', 'B', 'd', 'a', 'd', 'a', 'c', 'd', 'A', 'a', 'd', 'a', 'a', 'a', 'B', 'd', 'a', 'a', 'd', 'a', 'c', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B'),
(75, 'o', 'd', 'd', 'd', 'a', 'a', 'd', 'B', 'd', 'a', 'd', 'a', 'c', 'd', 'A', 'a', 'd', 'a', 'a', 'a', 'B', 'd', 'a', 'a', 'd', 'a', 'c', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B'),
(76, 'o', 'd', 'd', 'd', 'a', 'a', 'd', 'B', 'd', 'a', 'd', 'a', 'c', 'd', 'A', 'a', 'd', 'a', 'a', 'a', 'B', 'd', 'a', 'a', 'd', 'a', 'c', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B'),
(77, 'o', 'd', 'd', 'd', 'a', 'a', 'd', 'C', 'd', 'e', 'd', 'e', 'c', 'd', 'B', 'e', 'd', 'e', 'e', 'e', 'B', 'd', 'e', 'a', 'd', 'e', 'c', 'B', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B'),
(78, 'f', 'd', 'd', 'd', 'a', 'a', 'd', 'C', 'd', 'e', 'd', 'e', 'c', 'd', 'B', 'e', 'd', 'e', 'e', 'e', 'B', 'd', 'e', 'a', 'd', 'e', 'c', 'B', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B'),
(79, 'f', 'd', 'd', 'd', 'a', 'a', 'd', 'C', 'd', 'e', 'd', 'e', 'c', 'd', 'B', 'e', 'd', 'e', 'e', 'e', 'B', 'd', 'e', 'a', 'd', 'e', 'c', 'B', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B'),
(80, 'm', 'd', 'd', 'd', 'e', 'a', 'd', 'A', 'a', 'a', 'd', 'a', 'c', 'd', 'A', 'e', 'd', 'a', 'a', 'a', 'B', 'd', 'a', 'a', 'd', 'a', 'c', 'A', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(81, 'm', 'd', 'd', 'd', 'e', 'a', 'd', 'A', 'a', 'a', 'd', 'a', 'c', 'd', 'A', 'e', 'd', 'a', 'a', 'a', 'B', 'd', 'a', 'a', 'd', 'a', 'c', 'A', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(82, 'm', 'd', 'd', 'd', 'e', 'a', 'd', 'A', 'a', 'a', 'd', 'a', 'c', 'd', 'A', 'e', 'd', 'a', 'a', 'a', 'B', 'd', 'a', 'a', 'd', 'a', 'c', 'A', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(83, 'm', 'd', 'd', 'd', 'e', 'a', 'd', 'A', 'a', 'a', 'd', 'a', 'c', 'd', 'A', 'e', 'd', 'a', 'a', 'a', 'B', 'd', 'a', 'a', 'd', 'a', 'c', 'A', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(84, 'f', 'd', 'd', 'd', 'e', 'a', 'd', 'A', 'a', 'a', 'd', 'a', 'c', 'd', 'A', 'e', 'd', 'a', 'a', 'a', 'B', 'd', 'a', 'a', 'd', 'a', 'c', 'A', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(85, 'f', 'd', 'd', 'd', 'e', 'a', 'd', 'A', 'a', 'a', 'd', 'a', 'c', 'd', 'A', 'e', 'd', 'a', 'a', 'a', 'B', 'd', 'a', 'a', 'd', 'a', 'c', 'A', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(86, 'o', 'd', 'd', 'd', 'e', 'a', 'd', 'A', 'a', 'a', 'd', 'a', 'c', 'd', 'A', 'e', 'd', 'a', 'a', 'a', 'B', 'd', 'a', 'a', 'd', 'a', 'c', 'A', 'B', 'A', 'A', 'A', 'A', 'A', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'A', 'A'),
(87, 'm', 'd', 'b', 'a', 'e', 'b', 'b', 'B', 'e', 'b', 'a', 'd', 'e', 'b', 'A', 'c', 'e', 'b', 'b', 'a', 'B', 'b', 'a', 'd', 'e', 'b', 'a', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'A', 'B', 'B'),
(88, 'm', 'd', 'b', 'a', 'e', 'b', 'b', 'B', 'e', 'b', 'a', 'd', 'e', 'b', 'A', 'c', 'e', 'b', 'b', 'a', 'B', 'b', 'a', 'd', 'e', 'b', 'a', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'A', 'B', 'B'),
(89, 'm', 'd', 'b', 'a', 'e', 'b', 'b', 'B', 'e', 'b', 'a', 'd', 'e', 'b', 'A', 'c', 'e', 'b', 'b', 'a', 'B', 'b', 'a', 'd', 'e', 'b', 'a', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'A', 'B', 'B'),
(90, 'm', 'd', 'b', 'a', 'e', 'b', 'b', 'B', 'e', 'b', 'a', 'd', 'e', 'b', 'A', 'c', 'e', 'b', 'b', 'a', 'B', 'b', 'a', 'd', 'e', 'b', 'a', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'A', 'B', 'B'),
(91, 'm', 'd', 'b', 'a', 'e', 'b', 'b', 'B', 'e', 'b', 'a', 'd', 'e', 'b', 'A', 'c', 'e', 'b', 'b', 'a', 'B', 'b', 'a', 'd', 'e', 'b', 'a', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'A', 'B', 'B'),
(92, 'm', 'd', 'b', 'a', 'e', 'b', 'b', 'B', 'e', 'b', 'a', 'd', 'e', 'b', 'A', 'c', 'e', 'b', 'b', 'a', 'B', 'b', 'a', 'd', 'e', 'b', 'a', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'A', 'B', 'B'),
(93, 'm', 'd', 'b', 'a', 'e', 'b', 'b', 'B', 'e', 'b', 'a', 'd', 'e', 'b', 'A', 'c', 'e', 'b', 'b', 'a', 'B', 'b', 'a', 'd', 'e', 'b', 'a', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'A', 'B', 'B'),
(94, 'm', 'd', 'b', 'a', 'e', 'b', 'b', 'B', 'e', 'b', 'a', 'd', 'e', 'b', 'A', 'c', 'e', 'b', 'b', 'a', 'B', 'b', 'a', 'd', 'e', 'b', 'a', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'A', 'B', 'B'),
(95, 'm', 'd', 'b', 'a', 'e', 'b', 'b', 'B', 'e', 'b', 'a', 'd', 'e', 'b', 'A', 'c', 'e', 'b', 'b', 'a', 'B', 'b', 'a', 'd', 'e', 'b', 'a', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'A', 'B', 'B'),
(96, 'm', 'd', 'b', 'a', 'e', 'b', 'b', 'B', 'e', 'b', 'a', 'd', 'e', 'b', 'A', 'c', 'e', 'b', 'b', 'a', 'B', 'b', 'a', 'd', 'e', 'b', 'a', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'A', 'B', 'A', 'B', 'B', 'B', 'A', 'A', 'B', 'A', 'B', 'B'),
(97, 'f', 'b', 'd', 'e', 'a', 'b', 'd', 'C', 'e', 'b', 'a', 'b', 'd', 'e', 'A', 'b', 'a', 'b', 'd', 'e', 'A', 'b', 'a', 'b', 'd', 'e', 'e', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'B', 'A', 'A', 'B', 'A', 'A', 'A', 'A', 'B', 'B', 'B', 'A', 'B', 'A', 'B');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pytania`
--

CREATE TABLE `pytania` (
  `id` int(11) NOT NULL,
  `pytanie1` text NOT NULL,
  `pytanie2` text NOT NULL,
  `pytanie3` text NOT NULL,
  `pytanie4` text NOT NULL,
  `pytanie5` text NOT NULL,
  `pytanie6` text NOT NULL,
  `pytanie7` text NOT NULL,
  `pytanie8` text NOT NULL,
  `pytanie9` text NOT NULL,
  `pytanie10` text NOT NULL,
  `pytanie11` text NOT NULL,
  `pytanie12` text NOT NULL,
  `pytanie13` text NOT NULL,
  `pytanie14` text NOT NULL,
  `pytanie15` text NOT NULL,
  `pytanie16` text NOT NULL,
  `pytanie17` text NOT NULL,
  `pytanie18` text NOT NULL,
  `pytanie19` text NOT NULL,
  `pytanie20` text NOT NULL,
  `pytanie21` text NOT NULL,
  `pytanie22` text NOT NULL,
  `pytanie23` text NOT NULL,
  `pytanie24` text NOT NULL,
  `pytanie25` text NOT NULL,
  `pytanie26` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `pytania`
--

INSERT INTO `pytania` (`id`, `pytanie1`, `pytanie2`, `pytanie3`, `pytanie4`, `pytanie5`, `pytanie6`, `pytanie7`, `pytanie8`, `pytanie9`, `pytanie10`, `pytanie11`, `pytanie12`, `pytanie13`, `pytanie14`, `pytanie15`, `pytanie16`, `pytanie17`, `pytanie18`, `pytanie19`, `pytanie20`, `pytanie21`, `pytanie22`, `pytanie23`, `pytanie24`, `pytanie25`, `pytanie26`) VALUES
(1, 'Gdy musisz wybrać się na cały dzień do innego miasta wolisz planować wyjazd i przebieg całego dnia niż spontan', 'Gdybym był nauczycielem wolałbym uczyć zagadnień czysto opartych na faktach niż teoriach, opiniach i domysłach.', 'Na imprezach jesteś raczej cichy i zdystansowany', 'Częściej podejmujesz decyzje kierowany sercem niż rozumem', 'Wolisz trzymać się ogólnie przyjętych standardów niż próbować wymyślić koło na nowo', 'Pośród swoich znajomych jesteś na bierząco z ich wydarzeniami z ich życia', 'Jaki wpływ ma na ciebie posiadanie listy rzeczy do zrobienia przez weekend', 'Gdy dostajesz specjalne zadanie do wykonania to wolisz poświęcić czas i odpowiednio przygotować wcześniej stanowisko pracy i potrzebne narzędzia', 'Wolę wiele niezobowiązujących przyjaźni z wieloma róznymi ludźmi niż trzymać się głebokiej przyjaźni z wąską grupą osób', 'Bardziej podziwiam ludzi którzy zachowują się normalnie, nie potrzbują być w centrum uwagi', 'Preferuje organizować przyjęcia, imprezy, domówki, spotkania etc z dużym wyprzedzeniem', 'Wolę spędzać czas z realistami niż z marzycielami', 'Gdy jestem w grupie ludzi wolę stać z tyłu i słuchać niż dołączyć do dyskusji ze wszystkimi', 'Większym komplementem dla ciebie jest nazwanie cię', 'Gdy czytasz książkę wolisz by autor wprost powiedział o co chodzi niż żeby używał rozmaitych przenośni, opisów i nawiązań', 'Łatwo mi znaleźć temat i rozmawiać z prawie każdym przez dłuższy okres czasu', 'Jeżeli jest zaplanowane że muszę zrobić konkretną rzecz w konkretnym czasie w konkretny sposób to czuję że moja kreatywność jest ograniczana', 'Wolę podchodzić do problemu we własny sposób w czasie wybranym przez siebie', 'Lepiej radzę sobie z nagłymi nieoczekiwanymi sytuacjami niż z dokładniej zaplanowanymi', 'Jesteś uznawany raczej za osobę', 'W większej grupie pomagam innym się zapoznawać ze sobą aniżeli inni pomagają mi', 'Uważam że logika jest ważniejsza niż emocje', 'Wolisz mieć za przyjaciela kogoś kto twardo stąpa po ziemi niż kogoś bujającego głową w obłokach', 'Chętnie dzielę się informacją o swoich pasjach z nowo poznanymi ludźmi', 'Na codzień w pracy planuję co będę robił cały dzień, nie lubię spontaniczności i braku z góry zaplanowanych zadań', 'Łatwo mi okazywać uczucia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `slowa`
--

CREATE TABLE `slowa` (
  `id` int(11) NOT NULL,
  `27a` text NOT NULL,
  `27b` text NOT NULL,
  `28a` text NOT NULL,
  `28b` text NOT NULL,
  `29a` text NOT NULL,
  `29b` text NOT NULL,
  `30a` text NOT NULL,
  `30b` text NOT NULL,
  `31a` text NOT NULL,
  `31b` text NOT NULL,
  `32a` text NOT NULL,
  `32b` text NOT NULL,
  `33a` text NOT NULL,
  `33b` text NOT NULL,
  `34a` text NOT NULL,
  `34b` text NOT NULL,
  `35a` text NOT NULL,
  `35b` text NOT NULL,
  `36a` text NOT NULL,
  `36b` text NOT NULL,
  `37a` text NOT NULL,
  `37b` text NOT NULL,
  `38a` text NOT NULL,
  `38b` text NOT NULL,
  `39a` text NOT NULL,
  `39b` text NOT NULL,
  `40a` text NOT NULL,
  `40b` text NOT NULL,
  `41a` text NOT NULL,
  `41b` text NOT NULL,
  `42a` text NOT NULL,
  `42b` text NOT NULL,
  `43a` text NOT NULL,
  `43b` text NOT NULL,
  `44a` text NOT NULL,
  `44b` text NOT NULL,
  `45a` text NOT NULL,
  `45b` text NOT NULL,
  `46a` text NOT NULL,
  `46b` text NOT NULL,
  `47a` text NOT NULL,
  `47b` text NOT NULL,
  `48a` text NOT NULL,
  `48b` text NOT NULL,
  `49a` text NOT NULL,
  `49b` text NOT NULL,
  `50a` text NOT NULL,
  `50b` text NOT NULL,
  `pierwa` text NOT NULL,
  `pierwb` text NOT NULL,
  `druga` text NOT NULL,
  `drugb` text NOT NULL,
  `trzea` text NOT NULL,
  `trzeb` text NOT NULL,
  `trzec` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `slowa`
--

INSERT INTO `slowa` (`id`, `27a`, `27b`, `28a`, `28b`, `29a`, `29b`, `30a`, `30b`, `31a`, `31b`, `32a`, `32b`, `33a`, `33b`, `34a`, `34b`, `35a`, `35b`, `36a`, `36b`, `37a`, `37b`, `38a`, `38b`, `39a`, `39b`, `40a`, `40b`, `41a`, `41b`, `42a`, `42b`, `43a`, `43b`, `44a`, `44b`, `45a`, `45b`, `46a`, `46b`, `47a`, `47b`, `48a`, `48b`, `49a`, `49b`, `50a`, `50b`, `pierwa`, `pierwb`, `druga`, `drugb`, `trzea`, `trzeb`, `trzec`) VALUES
(1, 'Zorganizowany', 'Nieorganizowany', 'Fakty', 'Idee', 'Spokojny', 'Energiczny', 'Emocjonalny', 'Racjonalny', 'Marzyciel', 'Realista', 'Ważniejsze są korzyści materialne', 'Ważniejsze są dobra duchowe', 'Rozjemca', 'Sędzia', 'Systematyczność', 'Spontaniczność', 'Oświadczenie', 'Pojęcie', 'Rozmowny', 'Małomówny', 'Analizujący', 'Współczujący', 'Tworzyć', 'Wymyślać', 'Stanowczy', 'Oddany', 'Delikatny', 'Twardy', 'Systematyczny', 'Niedbały', 'Pewny', 'Nie pewny', 'Pełen życia', 'Spokojny', 'Litościwy', 'Obiektywnie osądzający', 'Fascynujący', 'Przytomny', 'Stanowczy', 'Dobry/Ciepły', 'Uczucia', 'Rozum', 'Dosłowny', 'Symboliczny', 'Litościwy', 'Przewidujący konsekwencje czynów', 'Twardy', 'Miękki', 'Pomaga mi', 'Stresuje mnie', 'Stresująca motywacja', 'Osobę szczerą wobec innych', 'Konsekwentą rozsądną osobą', 'Praktyczną osobę', 'Osobę myślącą nieszablonowo');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `testwart`
--

CREATE TABLE `testwart` (
  `id` int(11) NOT NULL,
  `a1` int(11) NOT NULL,
  `b1` int(11) NOT NULL,
  `a2` int(11) NOT NULL,
  `b2` int(11) NOT NULL,
  `a3` int(11) NOT NULL,
  `b3` int(11) NOT NULL,
  `a4` int(11) NOT NULL,
  `b4` int(11) NOT NULL,
  `a5` int(11) NOT NULL,
  `b5` int(11) NOT NULL,
  `a6` int(11) NOT NULL,
  `b6` int(11) NOT NULL,
  `a7` int(11) NOT NULL,
  `b7` int(11) NOT NULL,
  `a8` int(11) NOT NULL,
  `b8` int(11) NOT NULL,
  `a9` int(11) NOT NULL,
  `b9` int(11) NOT NULL,
  `a10` int(11) NOT NULL,
  `b10` int(11) NOT NULL,
  `a11` int(11) NOT NULL,
  `b11` int(11) NOT NULL,
  `a12` int(11) NOT NULL,
  `b12` int(11) NOT NULL,
  `a13` int(11) NOT NULL,
  `b13` int(11) NOT NULL,
  `a14` int(11) NOT NULL,
  `b14` int(11) NOT NULL,
  `a15` int(11) NOT NULL,
  `b15` int(11) NOT NULL,
  `a16` int(11) NOT NULL,
  `b16` int(11) NOT NULL,
  `a17` int(11) NOT NULL,
  `b17` int(11) NOT NULL,
  `a18` int(11) NOT NULL,
  `b18` int(11) NOT NULL,
  `a19` int(11) NOT NULL,
  `b19` int(11) NOT NULL,
  `a20` int(11) NOT NULL,
  `b20` int(11) NOT NULL,
  `a21` int(11) NOT NULL,
  `b21` int(11) NOT NULL,
  `a22` int(11) NOT NULL,
  `b22` int(11) NOT NULL,
  `a23` int(11) NOT NULL,
  `b23` int(11) NOT NULL,
  `a24` int(11) NOT NULL,
  `b24` int(11) NOT NULL,
  `a25` int(11) NOT NULL,
  `b25` int(11) NOT NULL,
  `a26` int(11) NOT NULL,
  `b26` int(11) NOT NULL,
  `a27` int(11) NOT NULL,
  `b27` int(11) NOT NULL,
  `a28` int(11) NOT NULL,
  `b28` int(11) NOT NULL,
  `a29` int(11) NOT NULL,
  `b29` int(11) NOT NULL,
  `a30` int(11) NOT NULL,
  `b30` int(11) NOT NULL,
  `a31` int(11) NOT NULL,
  `b31` int(11) NOT NULL,
  `a32` int(11) NOT NULL,
  `b32` int(11) NOT NULL,
  `a33` int(11) NOT NULL,
  `b33` int(11) NOT NULL,
  `a34` int(11) NOT NULL,
  `b34` int(11) NOT NULL,
  `a35` int(11) NOT NULL,
  `b35` int(11) NOT NULL,
  `a36` int(11) NOT NULL,
  `b36` int(11) NOT NULL,
  `a37` int(11) NOT NULL,
  `b37` int(11) NOT NULL,
  `a38` int(11) NOT NULL,
  `b38` int(11) NOT NULL,
  `a39` int(11) NOT NULL,
  `b39` int(11) NOT NULL,
  `a40` int(11) NOT NULL,
  `b40` int(11) NOT NULL,
  `a41` int(11) NOT NULL,
  `b41` int(11) NOT NULL,
  `a42` int(11) NOT NULL,
  `b42` int(11) NOT NULL,
  `a43` int(11) NOT NULL,
  `b43` int(11) NOT NULL,
  `a44` int(11) NOT NULL,
  `b44` int(11) NOT NULL,
  `a45` int(11) NOT NULL,
  `b45` int(11) NOT NULL,
  `a46` int(11) NOT NULL,
  `b46` int(11) NOT NULL,
  `a47` int(11) NOT NULL,
  `b47` int(11) NOT NULL,
  `a48` int(11) NOT NULL,
  `b48` int(11) NOT NULL,
  `a49` int(11) NOT NULL,
  `b49` int(11) NOT NULL,
  `a50` int(11) NOT NULL,
  `b50` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `testwart`
--

INSERT INTO `testwart` (`id`, `a1`, `b1`, `a2`, `b2`, `a3`, `b3`, `a4`, `b4`, `a5`, `b5`, `a6`, `b6`, `a7`, `b7`, `a8`, `b8`, `a9`, `b9`, `a10`, `b10`, `a11`, `b11`, `a12`, `b12`, `a13`, `b13`, `a14`, `b14`, `a15`, `b15`, `a16`, `b16`, `a17`, `b17`, `a18`, `b18`, `a19`, `b19`, `a20`, `b20`, `a21`, `b21`, `a22`, `b22`, `a23`, `b23`, `a24`, `b24`, `a25`, `b25`, `a26`, `b26`, `a27`, `b27`, `a28`, `b28`, `a29`, `b29`, `a30`, `b30`, `a31`, `b31`, `a32`, `b32`, `a33`, `b33`, `a34`, `b34`, `a35`, `b35`, `a36`, `b36`, `a37`, `b37`, `a38`, `b38`, `a39`, `b39`, `a40`, `b40`, `a41`, `b41`, `a42`, `b42`, `a43`, `b43`, `a44`, `b44`, `a45`, `b45`, `a46`, `b46`, `a47`, `b47`, `a48`, `b48`, `a49`, `b49`, `a50`, `b50`) VALUES
(3, 2, 2, 2, 2, 2, 2, 1, 2, 1, 1, 2, 2, 1, 1, 2, 2, 1, 2, 1, 2, 2, 1, 1, 2, 1, 2, 1, 2, 0, 2, 2, 2, 2, 2, 1, 2, 1, 1, 2, 2, 2, 2, 2, 2, 1, 2, 1, 1, 1, 1, 1, 1, 2, 2, 2, 1, 2, 2, 2, 1, 0, 2, 1, 1, 2, 0, 2, 2, 2, 1, 1, 2, 1, 2, 0, 2, 1, 1, 1, 2, 2, 2, 1, 2, 1, 1, 1, 1, 0, 2, 2, 0, 1, 2, 1, 1, 2, 1, 2, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `typy2`
--

CREATE TABLE `typy2` (
  `id` int(11) NOT NULL,
  `typ` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `typy2`
--

INSERT INTO `typy2` (`id`, `typ`) VALUES
(1, 'ESTJ'),
(2, 'ESTJ'),
(3, 'ISTP'),
(4, 'ESTP'),
(5, 'ENFP'),
(6, 'ENFP'),
(7, 'ENFP'),
(8, 'ENFP'),
(9, 'ENFP'),
(10, 'ENTP'),
(11, 'ENTP'),
(12, 'ENTP'),
(13, 'ENTP'),
(14, 'ENTP'),
(15, 'ENTP'),
(16, 'ENTP'),
(17, 'ISTP'),
(18, 'ISTP'),
(19, 'ISTP'),
(20, 'ISTP'),
(21, 'ISTP'),
(22, 'ISTP'),
(23, 'ISTP'),
(24, 'ISTP'),
(25, 'ISTP'),
(26, 'ISTP'),
(27, 'ESTJ'),
(28, 'INTP'),
(29, 'ISTP'),
(30, 'ISTP'),
(31, 'ESTP'),
(32, 'ENFJ'),
(33, 'ENFJ'),
(34, 'ENFJ'),
(35, 'ENTJ'),
(36, 'ENTJ'),
(37, 'ENTJ'),
(38, 'ENTJ'),
(39, 'ENTJ'),
(40, 'ESFP'),
(41, 'ESFP'),
(42, 'ESFP'),
(43, 'ESFP'),
(44, 'ESFP'),
(45, 'ESFP'),
(46, 'ESFP'),
(47, 'ISFP'),
(48, 'ISFP'),
(49, 'ISFP'),
(50, 'ISFP'),
(51, 'ISFJ'),
(52, 'ISFJ'),
(53, 'ISFJ'),
(54, 'ISFJ'),
(55, 'ISFJ'),
(56, 'ISTJ'),
(57, 'ISTJ'),
(58, 'ISTJ'),
(59, 'ISTJ'),
(60, 'ISTJ'),
(61, 'ISTJ'),
(62, 'INTP'),
(63, 'INTP'),
(64, 'INTP'),
(65, 'INTP'),
(66, 'INTP'),
(67, 'INTP'),
(68, 'INTP'),
(69, 'INTP'),
(70, 'INTP'),
(71, 'INTP'),
(72, 'INTP'),
(73, 'INFJ'),
(74, 'INFJ'),
(75, 'INFJ'),
(76, 'INFJ'),
(77, 'INFP'),
(78, 'INFP'),
(79, 'INFP'),
(80, 'INTJ'),
(81, 'INTJ'),
(82, 'INTJ'),
(83, 'INTJ'),
(84, 'INTJ'),
(85, 'INTJ'),
(86, 'INTJ'),
(87, 'ESTJ'),
(88, 'ESTJ'),
(89, 'INFP');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user_data`
--

CREATE TABLE `user_data` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `user_data`
--

INSERT INTO `user_data` (`id`, `name`, `email`, `phone`, `city`) VALUES
(0, 'qwerase', 'anilora99@interia.pl', '123456723', 'Delhi');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `odpowiedzi2`
--
ALTER TABLE `odpowiedzi2`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `pytania`
--
ALTER TABLE `pytania`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `slowa`
--
ALTER TABLE `slowa`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `testwart`
--
ALTER TABLE `testwart`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `typy2`
--
ALTER TABLE `typy2`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `odpowiedzi2`
--
ALTER TABLE `odpowiedzi2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT dla tabeli `pytania`
--
ALTER TABLE `pytania`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `slowa`
--
ALTER TABLE `slowa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT dla tabeli `testwart`
--
ALTER TABLE `testwart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `typy2`
--
ALTER TABLE `typy2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
