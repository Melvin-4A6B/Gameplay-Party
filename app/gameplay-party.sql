-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2018 at 10:22 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gameplay-party`
--

-- --------------------------------------------------------

--
-- Table structure for table `cinemas`
--

CREATE TABLE `cinemas` (
  `cinema_id` int(11) NOT NULL,
  `cinema_name` varchar(100) NOT NULL,
  `street` varchar(100) NOT NULL,
  `house_number` int(11) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `car_accessibility` text NOT NULL,
  `ov_accessibility` text NOT NULL,
  `bike_accessibility` text NOT NULL,
  `wheelchair_accessibility` enum('0','1') NOT NULL DEFAULT '0',
  `cinema_conditions` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cinemas`
--

INSERT INTO `cinemas` (`cinema_id`, `cinema_name`, `street`, `house_number`, `postal_code`, `city`, `state`, `car_accessibility`, `ov_accessibility`, `bike_accessibility`, `wheelchair_accessibility`, `cinema_conditions`) VALUES
(1, 'Kinepolis Almere', 'Forum', 16, '1315 TH', 'Almere', 'Flevoland', 'Met de auto bereikt u Kinepolis Almere door richting Centrum te volgen. Rondom Kinepolis Almere is volop parkeergelegenheid. De P6 Hospitaalgarage of P7 Schippersgarage zijn het gunstigst gelegen t.o.v. de bioscoop. Parkeert u na 18:00 uur, dan geldt het maximale avondtarief van â‚¬5,25 voor de hele avond. ', 'U kunt ons met de trein en bus zeer makkelijk bereiken. Vanaf station Almere Centrum loopt u in circa 5 minuten in zuidelijke richting richting naar Almere Citymall. Kinepolis Almere is tevens goed bereikbaar per bus via haltes Passage (buslijn M1 & M4) en Flevoziekenhuis (buslijn M5 en M7). Voor actuele bustijden kijkt u op 9292.nl.', 'Citymall Almere heeft diverse (bewaakte) fietsenstallingen, bijvoorbeeld aan de Hospitaaldreef.', '1', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen.\r\nKinderen t/m 2 jaar hebben gratis toegang, wanneer ze bij een betalende volwassene op schoot zitten. Is dat niet wenselijk, dan dient er een ticket gekocht te worden.\r\nZondagochtend voordeel geldt alleen op zondag voor de voorstellingen tot 11:59 uur.\r\nOp vertoon van een geldige CJP/Cultuurkaart of BankGiro Loterij VIP-KAART aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nVoor de voorwaarden van het familieticket, het 5-sterrenticket en de 10-sterrenticket zie FAQ.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone_number` varchar(50) NOT NULL,
  `street_name` varchar(25) NOT NULL,
  `house_number` int(11) NOT NULL,
  `addition` varchar(25) NOT NULL,
  `postal_code` varchar(10) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `page_id` int(11) NOT NULL,
  `page_name` varchar(50) NOT NULL,
  `page_slug` varchar(25) NOT NULL,
  `page_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`page_id`, `page_name`, `page_slug`, `page_content`) VALUES
(1, 'over-ons', '/', 'Test content van het bedrijf');

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `reservation_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `reservation_date` datetime NOT NULL,
  `begin_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `amount_persons` int(11) NOT NULL,
  `subtotal` double NOT NULL,
  `total` double NOT NULL,
  `reserved` enum('0','1') NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`role_id`, `role_name`) VALUES
(1, 'cinema'),
(2, 'customer'),
(3, 'admin'),
(4, 'owner'),
(5, 'editor');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `amount_chairs` int(11) NOT NULL,
  `wheelchair_places` int(11) NOT NULL,
  `screen_size` varchar(100) NOT NULL,
  `facilities` varchar(255) NOT NULL,
  `room_versions` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `role_id`, `user_name`, `email`, `password`) VALUES
(1, 5, 'hanneke', 'hannekejones@gameplay-party.nl', 'password'),
(2, 3, 'admin', 'admin@cokamel.com', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`page_id`);

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`reservation_id`),
  ADD KEY `cinema_id` (`cinema_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`),
  ADD KEY `cinema_id` (`cinema_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `role_id` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cinemas`
--
ALTER TABLE `cinemas`
  MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `page_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `reservation_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`cinema_id`);

--
-- Constraints for table `rooms`
--
ALTER TABLE `rooms`
  ADD CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`cinema_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
