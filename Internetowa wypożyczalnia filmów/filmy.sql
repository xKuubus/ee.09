-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 20 Paź 2021, 12:11
-- Wersja serwera: 10.4.21-MariaDB
-- Wersja PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `filmy`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `id` int(11) NOT NULL,
  `nazwa` text NOT NULL,
  `zdjecie` text NOT NULL,
  `opis` text NOT NULL,
  `polecane` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`id`, `nazwa`, `zdjecie`, `opis`, `polecane`) VALUES
(1, 'Alien', 'alien.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 0),
(2, 'Beckett', 'Beckett.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 0),
(3, 'Irlandczyk', 'Irlandczyk.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 1),
(4, 'Koralowa Wyspa', 'koralowawyspa.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 0),
(5, 'krokodyl', 'krokodyl.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 0),
(6, 'Niebo o północy', 'Nieboopółnocy.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 1),
(7, 'Nowiny ze świata', 'Nowinyzeświata.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 0),
(8, 'Pasażer nr 4', 'Pasażernr4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 0),
(9, 'Power', 'Power.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 0),
(10, 'SteamPunk', 'steampunk.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 0),
(11, 'The Old Guard', 'TheOldGuard.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 0),
(12, 'Tlen', 'Tlen.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 1),
(13, 'Velvet', 'Velvet.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 0),
(14, 'Winni', 'Winni.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque eros massa, ornare sit amet ipsum sed, hendrerit pulvinar dui.', 1),
(16, 'N/A', 'na.png', 'N/A', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
