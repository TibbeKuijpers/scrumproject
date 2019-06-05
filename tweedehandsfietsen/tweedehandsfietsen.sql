-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 05 jun 2019 om 10:47
-- Serverversie: 10.1.35-MariaDB
-- PHP-versie: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tweedehandsfietsen`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestellingdetails`
--

CREATE TABLE `bestellingdetails` (
  `bestellingNummer` int(255) NOT NULL,
  `fietsID` int(255) NOT NULL,
  `totaalAantalBestellingen` int(255) NOT NULL,
  `prijsPerStuk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bestellingen`
--

CREATE TABLE `bestellingen` (
  `bestellingNummer` int(255) NOT NULL,
  `bestellingsDatum` date NOT NULL,
  `status` varchar(255) NOT NULL,
  `commentaar` varchar(255) NOT NULL,
  `klantID` int(255) NOT NULL,
  `werknemerID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `fietsen`
--

CREATE TABLE `fietsen` (
  `fietsID` int(255) NOT NULL,
  `fietsNaam` varchar(255) NOT NULL,
  `fietsMerk` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `genre`
--

CREATE TABLE `genre` (
  `genreID` int(255) NOT NULL,
  `fietsGenre` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `klantgegevens`
--

CREATE TABLE `klantgegevens` (
  `klantID` int(225) NOT NULL,
  `gebruikersNaam` varchar(225) NOT NULL,
  `geslacht` varchar(225) NOT NULL,
  `voorNaam` varchar(225) NOT NULL,
  `achterNaam` varchar(225) NOT NULL,
  `telefoonNummer` int(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `woonPlaats` varchar(255) NOT NULL,
  `postCode` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Gegevens worden geëxporteerd voor tabel `klantgegevens`
--

INSERT INTO `klantgegevens` (`klantID`, `gebruikersNaam`, `geslacht`, `voorNaam`, `achterNaam`, `telefoonNummer`, `adres`, `woonPlaats`, `postCode`, `email`) VALUES
(3, '', '', '', '', 0, '', '', 0, ''),
(4, 'Mike', 'Man', 'Mike', 'Meijer', 637357133, 'Hoefijzer 28', 'Didam', 6942, 'mike.meijer@student.graafschapcollege.nl'),
(5, 'Mike', 'Man', 'Mike', 'Meijer', 637357133, 'Hoefijzer 28', 'Didam', 6942, 'mike.meijer@student.graafschapcollege.nl'),
(6, 'Mike', 'Man', 'Mike', 'Meijer', 637357133, 'Hoefijzer 28', 'Didam', 6942, 'mike.meijer@student.graafschapcollege.nl'),
(7, 'Mike', 'Man', 'Mike', 'Meijer', 637357133, 'Hoefijzer 28', 'Didam', 6942, 'mike.meijer@student.graafschapcollege.nl'),
(8, 'Mike', 'Man', 'Mike', 'Meijer', 637357133, 'Hoefijzer 28', 'Didam', 6942, 'mike.meijer@student.graafschapcollege.nl'),
(9, 'Mike', 'Man', 'Mike', 'Meijer', 637357133, 'Hoefijzer 28', 'Didam', 6942, 'mike.meijer@student.graafschapcollege.nl');

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `werknemers`
--

CREATE TABLE `werknemers` (
  `werknemerID` int(255) NOT NULL,
  `gebruikersNaam` varchar(255) NOT NULL,
  `geslacht` varchar(255) NOT NULL,
  `voorNaam` varchar(255) NOT NULL,
  `achterNaam` varchar(255) NOT NULL,
  `telefoonNummer` int(255) NOT NULL,
  `adres` varchar(255) NOT NULL,
  `woonPlaats` varchar(255) NOT NULL,
  `postCode` varchar(255) NOT NULL,
  `functie` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bestellingdetails`
--
ALTER TABLE `bestellingdetails`
  ADD PRIMARY KEY (`bestellingNummer`);

--
-- Indexen voor tabel `bestellingen`
--
ALTER TABLE `bestellingen`
  ADD PRIMARY KEY (`bestellingNummer`);

--
-- Indexen voor tabel `fietsen`
--
ALTER TABLE `fietsen`
  ADD PRIMARY KEY (`fietsID`);

--
-- Indexen voor tabel `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genreID`);

--
-- Indexen voor tabel `klantgegevens`
--
ALTER TABLE `klantgegevens`
  ADD PRIMARY KEY (`klantID`);

--
-- Indexen voor tabel `werknemers`
--
ALTER TABLE `werknemers`
  ADD PRIMARY KEY (`werknemerID`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `fietsen`
--
ALTER TABLE `fietsen`
  MODIFY `fietsID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `genre`
--
ALTER TABLE `genre`
  MODIFY `genreID` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT voor een tabel `klantgegevens`
--
ALTER TABLE `klantgegevens`
  MODIFY `klantID` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT voor een tabel `werknemers`
--
ALTER TABLE `werknemers`
  MODIFY `werknemerID` int(255) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
