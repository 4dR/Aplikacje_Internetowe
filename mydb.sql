-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 21 Sty 2022, 02:04
-- Wersja serwera: 10.4.17-MariaDB
-- Wersja PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `mydb`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `assigntoproject`
--

CREATE TABLE `assigntoproject` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `customer`
--

INSERT INTO `customer` (`id`, `name`, `description`, `email`) VALUES
(2, 'Filip', 'Amatorski gracz runescape.', 'filipsze@wp.pl'),
(3, 'Adrian', 'Amatorski programista zasad bezpieczestwa PHP.', 'adrian@adrrian.pl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `time` datetime NOT NULL,
  `group_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `project`
--

INSERT INTO `project` (`id`, `name`, `time`, `group_id`, `customer_id`, `owner_id`) VALUES
(2, 'chuj', '2022-01-20 23:52:04', -1, 3, 0);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `timelogentry`
--

CREATE TABLE `timelogentry` (
  `id` int(11) NOT NULL,
  `start_time` double NOT NULL,
  `end_time` double NOT NULL,
  `projekt_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `timelogentry`
--

INSERT INTO `timelogentry` (`id`, `start_time`, `end_time`, `projekt_id`, `user_id`) VALUES
(26, 1642706277, 1642706288, 0, 0),
(27, 1642706320, 1642706375, 0, 3),
(28, 1642706429, 1642706431, 0, 3),
(29, 1642706432, 1642706434, 0, 3),
(30, 1642706461, 1642706481, 0, 0),
(31, 1642706484, 1642706486, 0, 3),
(32, 1642708194, 1642708204, 0, 3),
(33, 1642723066, 0, 0, 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` double NOT NULL,
  `registerDate` datetime NOT NULL,
  `UsersRole_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `login`, `password`, `time`, `registerDate`, `UsersRole_id`) VALUES
(2, 'test@test.pl', '12345678', 8, '2022-01-20 16:58:50', 1),
(3, 'test1@test.pl', '12345678', 106, '2022-01-20 17:07:37', 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usersgroup`
--

CREATE TABLE `usersgroup` (
  `id` int(11) NOT NULL,
  `description` varchar(45) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `owner_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `usersgroup`
--

INSERT INTO `usersgroup` (`id`, `description`, `name`, `owner_id`) VALUES
(2, 'chuj', 'zxczxc', 3);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `usersrole`
--

CREATE TABLE `usersrole` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `usersrole`
--

INSERT INTO `usersrole` (`id`, `role`) VALUES
(1, 'user'),
(2, 'admin');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `assigntoproject`
--
ALTER TABLE `assigntoproject`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `timelogentry`
--
ALTER TABLE `timelogentry`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UsersRole_id` (`UsersRole_id`);

--
-- Indeksy dla tabeli `usersgroup`
--
ALTER TABLE `usersgroup`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `usersrole`
--
ALTER TABLE `usersrole`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `assigntoproject`
--
ALTER TABLE `assigntoproject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `timelogentry`
--
ALTER TABLE `timelogentry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT dla tabeli `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `usersgroup`
--
ALTER TABLE `usersgroup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT dla tabeli `usersrole`
--
ALTER TABLE `usersrole`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`UsersRole_id`) REFERENCES `usersrole` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
