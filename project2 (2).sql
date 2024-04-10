-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 apr 2024 om 15:07
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project2`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `contact`
--

CREATE TABLE `contact` (
  `Naam` varchar(30) NOT NULL,
  `Email` varchar(60) NOT NULL,
  `Vraag` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `contact`
--

INSERT INTO `contact` (`Naam`, `Email`, `Vraag`) VALUES
('', '', ''),
('', '', ''),
('Noah', 'ps246628@summacollege.nl', 'Hoi');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `lidworden`
--

CREATE TABLE `lidworden` (
  `name` varchar(30) NOT NULL,
  `email` varchar(70) NOT NULL,
  `Woonplaats` varchar(50) NOT NULL,
  `Leeftijd` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `lidworden`
--

INSERT INTO `lidworden` (`name`, `email`, `Woonplaats`, `Leeftijd`) VALUES
('Noah', 'ps246628@summacollege.nl', '', 0),
('Noah', 'ps246628@summacollege.nl', 'Zeelst', 17),
('Hoi', 'fhfffhh@gmail.com', 'Eindhoven', 17),
('Clone', 'mfmhfmfm@gmail.com', 'Eindhoven', 18),
('Noah', 'ps246628@summacollege.nl', 'Zeelst', 14),
('Noah', 'ps246628@summacollege.nl', 'Eindhoven', 17),
('hoi', 'hoi@gmail.com', 'Eindhoven', 17),
('Noah', 'ps246628@summacollege.nl', 'Eindhoven', 17);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
