-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1
-- Tid vid skapande: 29 apr 2019 kl 15:53
-- Serverversion: 10.1.38-MariaDB
-- PHP-version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `horoscope`
--

-- --------------------------------------------------------

--
-- Tabellstruktur `horoscope`
--

CREATE TABLE `horoscope` (
  `id` int(1) NOT NULL,
  `dateFrom` date NOT NULL,
  `dateTo` date NOT NULL,
  `horoscopeSign` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumpning av Data i tabell `horoscope`
--

INSERT INTO `horoscope` (`id`, `dateFrom`, `dateTo`, `horoscopeSign`) VALUES
(1, '2019-03-21', '2019-04-19', 'Väduren'),
(2, '2019-04-20', '2019-05-20', 'Oxe'),
(3, '2019-05-21', '2019-06-21', 'Tvillingarna'),
(4, '2019-06-22', '2019-07-22', 'Kräftan'),
(5, '2019-07-23', '2019-08-22', 'Lejonet'),
(6, '2019-08-23', '2019-09-22', 'Jungfrun'),
(7, '2019-09-23', '2019-10-22', 'Vågen'),
(8, '2019-10-23', '2019-11-21', 'Skorpionen'),
(9, '2019-11-22', '2019-12-21', 'Skytten'),
(10, '2019-12-22', '2019-12-31', 'Stenbocken'),
(11, '2019-01-20', '2019-02-18', 'Vattumannen'),
(12, '2019-02-19', '2019-03-20', 'Fiskarna'),
(13, '2019-01-01', '2019-01-19', 'Stenbocken');

--
-- Index för dumpade tabeller
--

--
-- Index för tabell `horoscope`
--
ALTER TABLE `horoscope`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT för dumpade tabeller
--

--
-- AUTO_INCREMENT för tabell `horoscope`
--
ALTER TABLE `horoscope`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
