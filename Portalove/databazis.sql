-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hostiteľ: 127.0.0.1
-- Čas generovania: Št 17.Dec 2020, 15:38
-- Verzia serveru: 10.4.11-MariaDB
-- Verzia PHP: 7.3.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databáza: `databazis`
--

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `accounts`
--

CREATE TABLE `accounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `accounts`
--

INSERT INTO `accounts` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', 'test', 'test@test.com'),
(2, 'maros', '$2y$10$A7m7/jN7/5InTFfXqLf8Sun01hzo4GQ/DKBrPu/U9D8nhiWOpuzjO', 'maros@gmail.com'),
(3, 'user', '$2y$10$iRf2bfDdgFFZTnkpcwqKGeGe4SRR3tzU3RxFmw8OP0dcyjMrwBw7i', 'user@gmail.com'),
(4, 'maros1', '$2y$10$Ar9rnTB6KXvjCpNZ3krO/.zznwHi/6AhmjuRIk8AQbihN5wQTrhmW', 'maros@maros.com');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `cicavce`
--

CREATE TABLE `cicavce` (
  `id` int(11) NOT NULL,
  `meno` varchar(45) DEFAULT NULL,
  `popis` varchar(45) DEFAULT NULL,
  `image_path` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `cicavce`
--

INSERT INTO `cicavce` (`id`, `meno`, `popis`, `image_path`) VALUES
(1, 'Dwarf Galago', 'Vychodna Amerika', 'img/Cicavce/DwarfGalago.jpg'),
(2, 'Elephant Shrew', 'Afrika', 'img/Cicavce/ElephantShrew.jpg'),
(3, 'Greater bamboo lemur', 'Afrika', 'img/Cicavce/Greaterbamboolemur.jpg'),
(6, 'Black footed Ferret', 'Amerika', 'img/Cicavce/Black-footed-Ferret.jpg'),
(7, 'Leopard', 'Afrika', 'img/Cicavce/Leopard.jpg'),
(8, 'Pangolin', 'Afrika', 'img/Cicavce/Pangolin.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `home`
--

CREATE TABLE `home` (
  `id` int(11) NOT NULL,
  `meno` varchar(45) DEFAULT NULL,
  `popis` varchar(200) DEFAULT NULL,
  `icon` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `home`
--

INSERT INTO `home` (`id`, `meno`, `popis`, `icon`) VALUES
(1, 'Kvalita', 'Nase zvierata su vychovavane v najlepsich podmienkach a za ich zdravie rucime.', 'paw'),
(2, 'Zamestnanci', 'Nasi chovatelia su odbornici vo svojom obore a ku kazdemu zvieratu pristupuju podla jeho specifickych potrieb.', 'user');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `meno` varchar(45) DEFAULT NULL,
  `file_path` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `menu`
--

INSERT INTO `menu` (`id`, `meno`, `file_path`) VALUES
(1, 'Cicavce', 'cicavce'),
(2, 'Plazy', 'plazy'),
(3, 'Angelika', 'plazy'),
(4, 'Registracia', 'plazy');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `onas`
--

CREATE TABLE `onas` (
  `id` int(11) NOT NULL,
  `meno` varchar(30) NOT NULL,
  `popis` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `onas`
--

INSERT INTO `onas` (`id`, `meno`, `popis`) VALUES
(1, 'Praca', 'Folly words widow one downs few age every seven. If miss part by fact he park just shew. Discovered had get considered projection who favourable. Necessary up knowledge it tolerably. Unwilling departure education is be dashwoods or an.'),
(2, 'Vzdelavanie', 'Another journey chamber way yet females man. Way extensive and dejection get delivered deficient sincerity gentleman age. Too end instrument possession contrasted motionless. Calling offence six joy feeling. Coming merits and was talent enough far. Sir joy northward sportsmen education. Discovery incommode earnestly no he commanded if. Put still any about manor heard. '),
(3, 'Trening', 'Village did removed enjoyed explain nor ham saw calling talking. Securing as informed declared or margaret. Joy horrible moreover man feelings own shy. Request norland neither mistake for yet. Between the for morning assured country believe. On even feet time have an no at. Relation so in confined smallest children unpacked delicate. Why sir end believe uncivil respect. Always get adieus nature day course for common. My little garret repair to desire he esteem. '),
(4, 'Kvalita', 'Had denoting properly jointure you occasion directly raillery. In said to of poor full be post face snug. Introduced imprudence see say unpleasing devonshire acceptance son. Exeter longer wisdom gay nor design age. Am weather to entered norland no in showing service. Nor repeated speaking shy appetite. Excited it hastily an pasture it observe. Snug hand how dare here too. ');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `plazy`
--

CREATE TABLE `plazy` (
  `id` int(11) NOT NULL,
  `meno` varchar(45) DEFAULT NULL,
  `popis` varchar(45) DEFAULT NULL,
  `image_path` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `plazy`
--

INSERT INTO `plazy` (`id`, `meno`, `popis`, `image_path`) VALUES
(1, 'Big Headed Turtle', 'Amerika', 'img/Plazy/BigHeadedTurtle.jpg'),
(2, 'Dwarf Gecko', 'Afrika', 'img/Plazy/DwarfGecko.jpg'),
(3, 'Gharial', 'Amerika', 'img/Plazy/Gharial.jpg'),
(4, 'Chinese Alligator', 'Cina', 'img/plazy/ChineseAlligator.jpg'),
(5, 'Leaf Turtle', 'Afrika', 'img/Plazy/LeafTurtle.jpg'),
(6, 'Marbled Gecko', 'Europa', 'img/Plazy/MarbledGecko.jpg');

-- --------------------------------------------------------

--
-- Štruktúra tabuľky pre tabuľku `vtaky`
--

CREATE TABLE `vtaky` (
  `id` int(11) NOT NULL,
  `meno` varchar(45) DEFAULT NULL,
  `popis` varchar(45) DEFAULT NULL,
  `image_path` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Sťahujem dáta pre tabuľku `vtaky`
--

INSERT INTO `vtaky` (`id`, `meno`, `popis`, `image_path`) VALUES
(1, 'Kagu', 'Vychodna Afrika', 'img/Vtaky/Kagu.jpg'),
(14, 'Honduran Emerald', 'Afrika', 'img/Vtaky/HonduranEmerald.jpg'),
(15, 'Orange Bellied Parrot', 'Vychodna Amerika', 'img/Vtaky/OrangeBelliedParrot.jpg');

--
-- Kľúče pre exportované tabuľky
--

--
-- Indexy pre tabuľku `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `cicavce`
--
ALTER TABLE `cicavce`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `home`
--
ALTER TABLE `home`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `onas`
--
ALTER TABLE `onas`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `plazy`
--
ALTER TABLE `plazy`
  ADD PRIMARY KEY (`id`);

--
-- Indexy pre tabuľku `vtaky`
--
ALTER TABLE `vtaky`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pre exportované tabuľky
--

--
-- AUTO_INCREMENT pre tabuľku `accounts`
--
ALTER TABLE `accounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `cicavce`
--
ALTER TABLE `cicavce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pre tabuľku `home`
--
ALTER TABLE `home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pre tabuľku `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `onas`
--
ALTER TABLE `onas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pre tabuľku `plazy`
--
ALTER TABLE `plazy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pre tabuľku `vtaky`
--
ALTER TABLE `vtaky`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
