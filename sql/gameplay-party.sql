-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 10:47 AM
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
  `info_url` varchar(100) NOT NULL,
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

INSERT INTO `cinemas` (`cinema_id`, `cinema_name`, `info_url`, `street`, `house_number`, `postal_code`, `city`, `state`, `car_accessibility`, `ov_accessibility`, `bike_accessibility`, `wheelchair_accessibility`, `cinema_conditions`) VALUES
(1, 'Kinepolis Almere', 'kinepolis-almere', 'Forum', 16, '1315 TH', 'Almere', 'Flevoland', 'Met de auto bereikt u Kinepolis Almere door richting Centrum te volgen. Rondom Kinepolis Almere is volop parkeergelegenheid. De P6 Hospitaalgarage of P7 Schippersgarage zijn het gunstigst gelegen t.o.v. de bioscoop. Parkeert u na 18:00 uur, dan geldt het maximale avondtarief van â‚¬5,25 voor de hele avond. ', 'U kunt ons met de trein en bus zeer makkelijk bereiken. Vanaf station Almere Centrum loopt u in circa 5 minuten in zuidelijke richting richting naar Almere Citymall. Kinepolis Almere is tevens goed bereikbaar per bus via haltes Passage (buslijn M1 & M4) en Flevoziekenhuis (buslijn M5 en M7). Voor actuele bustijden kijkt u op 9292.nl.', 'Citymall Almere heeft diverse (bewaakte) fietsenstallingen, bijvoorbeeld aan de Hospitaaldreef.', '1', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen.\r\nKinderen t/m 2 jaar hebben gratis toegang, wanneer ze bij een betalende volwassene op schoot zitten. Is dat niet wenselijk, dan dient er een ticket gekocht te worden.\r\nZondagochtend voordeel geldt alleen op zondag voor de voorstellingen tot 11:59 uur.\r\nOp vertoon van een geldige CJP/Cultuurkaart of BankGiro Loterij VIP-KAART aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nVoor de voorwaarden van het familieticket, het 5-sterrenticket en de 10-sterrenticket zie FAQ.'),
(2, 'Kinepolis Breda', 'kinepolis-breda', 'Bavelseparklaan', 4, '4817 ZX', 'Breda', 'Noord Brabant', 'Met de auto kunt u de bioscoop makkelijk bereiken. LET OP: stel uw navigatiesysteem in op het adres Minervum, Breda. Zodra u vanuit Breda-centrum de A27 kruist of vanaf de snelweg afslag 15-Breda hebt genomen, zet u uw navigatie uit en volgt u de gele bordjes richting Breepark. Houd de borden richting Mc Donalds aan en neem op de rotonde de rechterbaan. De bioscoop bevindt zich aan uw rechterzijde. De parkeergarage zit onder de bioscoop. U kunt bij Kinepolis Breda GRATIS parkeren!', 'U kunt Kinepolis Breda vanaf 11 december goed bereiken met het openbaar vervoer. Maandag t/m vrijdag (tot 18:00 uur) stopt buslijn 131 vanaf het Centraal Station Breda (richting Tilburg) bij de bushalte bij Breepark. In de avond en in het weekend rijden buslijnen 325, 326 en 327 tussen het Centraal Station Breda en Breepark. De bushalte op Breepark bevindt zich direct naast de bioscoop.', 'De gratis en overdekte parkeergarage heeft tevens een zeer grote fietsenstalling.', '1', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen.\r\nKinderen t/m 2 jaar hebben gratis toegang, wanneer ze bij een betalende volwassene op schoot zitten. Is dat niet wenselijk, dan dient er een ticket gekocht te worden.\r\nBij een kinderkaartje of jeugdkaartje kan naar het identiteitsbewijs van het kind/jongere gevraagd worden om de leeftijd vast te stellen. U dient deze dan te tonen om toegang te verkrijgen.\r\nOchtendvoorstellingen zijn enkel op weekenddagen, feestdagen en in vakanties tot 12:00 uur.\r\nOp vertoon van een geldige CJP/Cultuurkaart. BankGiro Loterij VIP-KAART of studentenkaart aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nVoor de voorwaarden van het familieticket, het 5-sterrenticket en de 10-sterrenticket zie FAQ.'),
(3, 'Kinepolis CineMagnus Schagen', 'kinepolis-cinemagnus-schagen', 'Grotewallerweg', 2, '1742 NM', 'Schagen', 'Noord Holland', 'Vanuit alle richtingen volgt u de ANWB borden richting Witte Paal, de bioscoop bevindt zich aan het begin van het bedrijventerrein. De ingang naar het parkeerterrein van de bioscoop zit aan de Grotewallerweg. Voor wie met de auto wil komen, CineMagnus beschikt over eigen (gratis) parkeerplaatsen. Mochten deze vol zijn, dan kunt u uw auto parkeren op de gratis parkeerplaatsen van onze overburen, de Gamma.', 'Het NS- station is op 3 minuten lopen van de bioscoop en de bus stopt voor de deur.', 'CineMagnus is goed bereikbaar per fiets. Volg hiervoor de borden: Witte Paal. Voor de bioscoop zijn fietsenrekken aanwezig.', '1', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen en aanschaf 3D bril.\r\nVroege Vogel Voorstellingen gelden alleen (aanvang voor 12.00 uur) in het weekend en tijdens de schoolvakanties. De voorstelling is niet mogelijk in combinatie met andere kortingen en acties.\r\nVoor de bovengenoemde \"Speciale voorstellingen\" zijn kortingen en acties niet mogelijk.\r\nOp vertoon van een geldige CJP-Cultuurkaart, BankGiroLoterij VIP-kaart of studentenkaart aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nFamilietickets zijn alleen geldig voor vier personen waarvan minimaal twee kinderen jonger dan 12 jaar en minimaal Ã©Ã©n volwassene. Alleen geldig bij kindervoorstellingen in de middag wanneer alle vier de personen naar dezelfde filmvoorstelling gaan. '),
(4, 'Kinepolis CineMeerse', 'kinepolis-cinemeerse-hoofddorp', 'Raadhuisplein', 12, '2132TZ', 'Hoofddorp', 'Noord Holland', 'Met de auto bereikt u CineMeerse door de borden richting Centrum te volgen. Rondom CineMeerse is volop parkeergelegenheid. U kunt uw auto bij Q-Park Polderplein in Hoofddorp parkeren en aan de kassa van CineMeerse een waardekaart kopen. Met deze waardekaart kunt u 3 uur parkeren voor maar â‚¬ 1,50*!\r\n\r\n*Voorwaarden:\r\n- De waardekaart is enkel te verkrijgen in CineMeerse bij een bezoek aan een voorstelling.\r\n- Met de waardekaart kan 24 uur per dag uitgereden worden.\r\n- De waardekaart heeft een tegoed van 3 uur.\r\n- Om de Q-Park waardekaart te activeren dien u altijd langs de betaalautomaat te gaan.\r\n- Indien u langer dan 3 uur parkeert, dient u het verschuldigde tarief bij te betalen.', 'NVT', 'CineMeerse is goed bereikbaar per fiets. Voor de bioscoop zijn fietsenrekken aanwezig.', '1', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen en aanschaf 3D bril.\r\nVroege Vogel Voorstellingen gelden alleen (aanvang voor 12.00 uur) in het weekend en tijdens de schoolvakanties. De voorstelling is niet mogelijk in combinatie met andere kortingen en acties.\r\nVoor de bovengenoemde \"Speciale voorstellingen\" zijn kortingen en acties niet mogelijk.\r\nOp vertoon van een geldige CJP-Cultuurkaart, BankGiroLoterij VIP-kaart of studentenkaart aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nFamilietickets zijn alleen geldig voor vier personen waarvan minimaal twee kinderen jonger dan 12 jaar en minimaal Ã©Ã©n volwassene. Alleen geldig bij kindervoorstellingen in de middag wanneer alle vier de personen naar dezelfde filmvoorstelling gaan. '),
(5, 'Kinepolis Den Bosch', 'kinepolis-den-bosch', 'Bordeslaan', 510, '5223 MX', 'Den Bosch', 'Noord Brabant', 'Met de auto kunt u de bioscoop makkelijk bereiken. Let op: stel uw navigatie in op Spiegeltuin 1, Den Bosch. Hiermee komt u uit bij de Paleisgarage. In deze garage krijgt u tot 50% korting op het reguliere tarief tot maximaal 4 uur. U betaalt dan overdag tot 18.00 uur nog maar â‚¬ 1,15 per uur en na 18.00 uur nog maar â‚¬ 0.50 per uur. Aan de kassaâ€™s in de bioscoop kunt u deze korting verkrijgen. Na het parkeren neemt u de uitgang â€œBelvedereâ€ U zult ons vinden naast de Happy Italy. De parkeergarage is voorzien van parkeren voor minder validen en een lift. Er zijn tevens plaatsen om uw elektrische auto weer op te laden.\r\n\r\nVia de randweg/vlijmenseweg en magistratenlaan komt u makkelijk in het Paleiskwartier uit. Volg de borden naar JBZ ziekenhuis vanaf de A2, A76, A59 en neem de afslag naar het JB ziekenhuis via de randweg.', 'De bioscoop ligt op 5 minuten loopafstand van het centraal station. Met de bus kunt u ook in- en uitstappen bij de halte aan de onderwijsboulevard. Hier vindt u buslijnen: 8-9-121-135-136-203-207-239- 300-301-600-621-628-639-643. U kunt dus ook makkelijk vanaf de omliggende steden en dorpen met openbaar vervoer naar de bioscoop.', 'Voor de bioscoop is er plaats voor bijna 400 fietsen. Wij vragen u vriendelijk om uw fiets in de rekken te plaatsen zodat er genoeg loop- en fietsruimte is voor iedereen. Dank u voor uw medewerking. ', '1', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen.\r\nKinderen t/m 2 jaar hebben gratis toegang, wanneer ze bij een betalende volwassene op schoot zitten. Is dat niet wenselijk, dan dient er een ticket gekocht te worden.\r\nBij een kinderkaartje of jeugdkaartje kan naar het identiteitsbewijs van het kind/jongere gevraagd worden om de leeftijd vast te stellen. U dient deze dan te tonen om toegang te verkrijgen.\r\nOchtendvoorstellingen zijn enkel op weekenddagen, feestdagen en in vakanties tot 12:00 uur.\r\nOp vertoon van een geldige CJP/Cultuurkaart of studentenkaart aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nVoor de voorwaarden van het familieticket, het 5-sterrenticket en de 10-sterrenticket zie de button hieronder.'),
(6, 'Kinepolis Den Helder', 'kinepolis-den-bosch', 'Willemsoord', 51, '1781 AS', 'Den Helder', 'Noord Holland', 'In Den Helder volgt u de ANWB borden richting Willemsoord, de bioscoop bevindt zich op dit terrein. De ingang van Willemsoord zit aan de route voor de veerboot naar Texel. Parkeren kan gratis op het Willemsoord terrein.', 'In Den Helder volgt u de ANWB borden richting Willemsoord, de bioscoop bevindt zich op dit terrein. De ingang van Willemsoord zit aan de route voor de veerboot naar Texel. Parkeren kan gratis op het Willemsoord terrein.', 'Willemsoord is goed bereikbaar per fiets. Volg hiervoor de borden Willemsoord. Voor de bioscoop zijn fietsenrekken aanwezig.', '1', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen.\r\nKinderen t/m 2 jaar hebben gratis toegang, wanneer ze bij een betalende volwassene op schoot zitten. Is dat niet wenselijk, dan dient er een ticket gekocht te worden.\r\nBij een kinderkaartje kan naar het identiteitsbewijs van uw kind gevraagd worden om de leeftijd vast te stellen. U dient deze dan te tonen om toegang te verkrijgen.\r\nZondagochtend voordeel geldt alleen op zondag voor de voorstellingen tot 11:30 uur.\r\nOp vertoon van een geldige CJP/Cultuurkaart of BankGiro Loterij VIP-KAART aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nVoor de voorwaarden van het familieticket, het 5-sterrenticket en de 10-sterrenticket zie FAQ.'),
(7, 'Kinepolis Dordrecht', 'kinepolis-dordrecht', 'Lijnbaan', 200, '3311 RL', 'Dordrecht', 'Zuid Holland', 'Met de auto kunt u ons bereiken via de Noordendijk. U volgt de borden voor parkeergarage Energiehuis De parkeergarage staat naast de bioscoop. Parkeren in Garage Energiehuis: 3,- euro voor 4 uur. Afwaarderen aan onze kassa.', 'U kunt Kinepolis Dordrecht bereiken met buslijn 10, halte Energiehuis. Voor actuele bustijden kijkt u op www.arriva.nl', 'De parkeergarage heeft ook een zeer grote fietsenstalling.', '1', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen.\r\nKinderen t/m 2 jaar hebben gratis toegang, wanneer ze bij een betalende volwassene op schoot zitten. Is dat niet wenselijk, dan dient er een ticket gekocht te worden.\r\nBij een kinderkaartje kan naar het identiteitsbewijs van uw kind gevraagd worden om de leeftijd vast te stellen. U dient deze dan te tonen om toegang te verkrijgen.\r\nOchtendvoorstellingen zijn enkel op weekenddagen, feestdagen en in vakanties tot 12:00 uur.\r\nOp vertoon van een geldige CJP/Cultuurkaart, BankGiro Loterij VIP-KAART of studentenkaart aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nVoor de voorwaarden van het familieticket, het 5-sterrenticket en de 10-sterrenticket zie FAQ.'),
(8, 'Kinepolis Emmen', 'kinepolis-emmen', 'Westeind', 70, '7811 ME', 'Emmen', 'Drente', 'De bioscoop is makkelijk te bereiken met de auto via de afrit van de N381. Volg de borden P Wildlands of Centrum Noord. Voor de bioscoop is er parkeergelegenheid voor â‚¬ 1,70 per 58 minuten. Na 18:00u en op donderdag na 21:00 is parkeren gratis.', 'Kinepolis Emmen is per trein en bus bereikbaar. Vanaf station Emmen is de bioscoop op 10 minuten loopfastand. Met de bus is de bioscoop zeer makkelijk bereiken via halte Centrum Emmen of Frieslandweg. Vanaf hier loopt u in enkele minuten naar de bioscoop.', 'De bioscoop is per fiets bereikbaar. De fietsenstalling staat tegenover de bioscoop.', '1', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen.\r\nKinderen t/m 2 jaar hebben gratis toegang, wanneer ze bij een betalende volwassene op schoot zitten. Is dat niet wenselijk, dan dient er een ticket gekocht te worden.\r\nBij een kinderkaartje kan naar het identiteitsbewijs van uw kind gevraagd worden om de leeftijd vast te stellen. U dient deze dan te tonen om toegang te verkrijgen.\r\nZondagochtend voordeel geldt alleen op zondag voor de voorstellingen tot 11:30 uur.\r\nOp vertoon van een geldige CJP/Cultuurkaart of BankGiro Loterij VIP-KAART aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nVoor de voorwaarden van het familieticket, het 5-sterrenticket en de 10-sterrenticket zie FAQ.'),
(9, 'Kinepolis Enschede', 'kinepolis-enschede', 'Colosseum', 60, '7521 PT', 'Enschede', 'Overijssel', 'Met de auto neemt u bij Enschede afslag 26 richting Universiteit/Stadion. Rij met de weg mee links om de Grolsch Veste. U ziet aan de rechterhand Kinepolis Enschede. U kunt uw auto gratis parkeren op Ã©Ã©n van de parkeerterreinen. Houdt u rekening met extra reistijd op speeldata van FC Twente.', 'Met het openbaar vervoer kunt u met de trein naar station Enschede Kennispark (voorheen Drienerlo). Dit station is te bereiken door middel van de stoptrein vanuit Enschede, Hengelo, Zwolle, Deventer of Almelo. Kinepolis Enschede ligt op ongeveer 5 Ã¡ 10 minuten lopen vanaf het station.', 'NVT', '0', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen.\r\nKinderen t/m 2 jaar hebben gratis toegang, wanneer ze bij een betalende volwassene op schoot zitten. Is dat niet wenselijk, dan dient er een ticket gekocht te worden.\r\nBij een kinderkaartje kan naar het identiteitsbewijs van uw kind gevraagd worden om de leeftijd vast te stellen. U dient deze dan te tonen om toegang te verkrijgen.\r\nOchtendvoorstellingen zijn enkel op weekenddagen, feestdagen en in vakanties tot 12:00 uur.\r\nOp vertoon van een geldige CJP/Cultuurkaart, BankGiro Loterij VIP-KAART of studentenkaart aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nVoor de voorwaarden van het familieticket, het 5-sterrenticket en de 10-sterrenticket zie FAQ.'),
(10, 'Kinepolis Groningen', 'kinepolis-groningen', 'Boumaboulevard', 53, '9723 ZS', 'Groningen', 'Groningen', 'Met de auto neemt u, komende vanaf het Julianaplein, afslag Groningen zuid oost richting Hoogezand, daarna neemt u de afslag Euroborg / Europapark. U kunt parkeren in de parkeergarage (P1) of op P2 (tegenover de Jumbo). In de bioscoop zijn kortingskaarten voor de parkeergarage verkrijgbaar. Deze kosten â‚¬4,80 per stuk en zijn vier uur geldig. Houdt u rekening met extra reistijd op speeldata van FC Groningen. Er zijn beperkte plaatsen beschikbaar in de parkeergarage op wedstrijddagen.', 'Met het openbaar vervoer kunt u vanaf het centraal station van Groningen buslijn 2 of 12 (stadsbus) en lijn 148 (streekbus) richting het Europapark, halte Boumaboulevard nemen. Vanaf de halte is het ongeveer 1 minuut lopen naar de bioscoop. Treinstation Europapark is tevens op loopafstand. ', 'NVT', '1', 'NB bovenstaande prijzen per persoon en zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen.\r\nKinderen t/m 2 jaar hebben gratis toegang, wanneer ze bij een betalende volwassene op schoot zitten. Is dat niet wenselijk, dan dient er een ticket gekocht te worden.\r\nBij een kinderkaartje kan naar het identiteitsbewijs van uw kind gevraagd worden om de leeftijd vast te stellen. U dient deze dan te tonen om toegang te verkrijgen. \r\nOchtendvoorstellingen zijn enkel op weekenddagen, feestdagen en in vakanties tot 12:00 uur.\r\nOp vertoon van een geldige CJP/Cultuurkaart, BankGiro Loterij VIP-KAART of studentenkaart aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nVoor de voorwaarden van het familieticket, het 5-sterrenticket en de 10-sterrenticket zie FAQ.'),
(11, 'Kinepolis Jaarbeurs Utrecht', 'kinepolis-jaarbeurs-utrecht', 'Jaarbeursboulevard', 300, '3521 BC', 'Utrecht', 'Utrecht', 'Met de auto bereikt u Kinepolis Jaarbeurs door op de Ring Utrecht de blauwe ANWB-borden met de aanduiding Jaarbeurs te volgen. Rondom de Jaarbeurs is volop parkeergelegenheid. Parkeren op het Jaarbeursterrein is per 1 mei gratis voor alle automobilisten die een kaartje voor de film hebben gekocht. P1 en P3 zijn het gunstigst gelegen t.o.v. de bioscoop. Houdt u rekening met extra drukte op de parkeerplaatsen tijdens de beurzen in de Jaarbeurs hallen.', 'Kinepolis Jaarbeurs ligt naast de Jaarbeurshallen tegenover het Centraal Station van Utrecht en is dus uitstekend te bereiken met trein, bus en tram. Volg vanaf het Centraal Station de borden Jaarbeursplein en loop richting de Jaarbeurshallen. Binnen enkele minuten vindt u de bioscoop aan uw linkerhand.', 'U kunt uw fiets vlak naast de bioscoop kwijt in de gratis fietsenstalling, gelegen tussen restaurant Miyagi and Jones en parkeerplaats P3.', '1', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen.\r\nKinderen t/m 2 jaar hebben gratis toegang, wanneer ze bij een betalende volwassene op schoot zitten. Is dat niet wenselijk, dan dient er een ticket gekocht te worden.\r\nBij een kinderkaartje kan naar het identiteitsbewijs van uw kind gevraagd worden om de leeftijd vast te stellen. U dient deze dan te tonen om toegang te verkrijgen.\r\nOchtendvoorstellingen zijn enkel op weekenddagen, feestdagen en in vakanties tot 12:00 uur.\r\nOp vertoon van een geldige CJP/Cultuurkaart, BankGiro Loterij VIP-KAART of studentenkaart aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nVoor de voorwaarden van het familieticket, het 5-sterrenticket en de 10-sterrenticket zie FAQ.'),
(12, 'Kinepolis Oss', 'kinepolis-oss', 'Lievekamplaan', 4, '5341 GW', 'Oss', 'Noord Brabant', 'Met de auto volgt u de borden Centrum, Theater de Lievekamp of Politiebureau. De bioscoop bevindt zich naast het politiebureau. U kunt parkeren achter de bioscoop op het parkeerterrein voor â‚¬ 4,00 per dag of â‚¬ 1,45 per uur. Parkeren is ook mogelijk tegenover de bioscoop op de Lievekamplaan voor â‚¬ 2,50 per uur.', 'Kinepolis Oss is bereikbaar vanaf het Centraal Station Oss op 10 minuten loopafstand. De bioscoop bevindt zich naast het politiebureau.', 'De bioscoop is per fiets bereikbaar en er is een (niet bewaakte) fietsenstalling aanwezig aan de voorzijde van de bioscoop.', '1', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen.\r\nKinderen t/m 2 jaar hebben gratis toegang, wanneer ze bij een betalende volwassene op schoot zitten. Is dat niet wenselijk, dan dient er een ticket gekocht te worden.\r\nBij een kinderkaartje kan naar het identiteitsbewijs van uw kind gevraagd worden om de leeftijd vast te stellen. U dient deze dan te tonen om toegang te verkrijgen.\r\nZondagochtend voordeel geldt alleen op zondag voor de voorstellingen tot 11:30 uur.\r\nOp vertoon van een geldige CJP/Cultuurkaart of BankGiro Loterij VIP-KAART aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nVoor de voorwaarden van het familieticket, het 5-sterrenticket en de 10-sterrenticket zie FAQ.'),
(13, 'Kinepolis Zoetermeer', 'kinepolis-zoetermeer', 'Oostwaarts', 70, '2711 BB', 'Zoetermeer', 'Zuid Holland', 'De bioscoop ligt in het centrum en is goed bereikbaar met de auto. Parkeren kan de eerste 2 uur gratis in de parkeergarage aan de Duitslandlaan (P9). Na sluitingstijd van de winkels zijn de buiten parkeerplaatsen gratis parkeren (ma-do en za-zo vanaf 18.00 uur en vr vanaf 21.00 uur).', 'U kunt ons met de bus zeer makkelijk bereiken via halte Oostwaarts (buslijn 71 en 72), Zwaardslootseweg (buslijn 70), Woonhart (buslijn 400) en Stadhuis (Randstadsrail). Voor actuele tijden van het openbaar vervoer kijkt u op 9292.nl.', 'Bij de bushalte Oostwaarts en aan de Duitslandlaan achter de bioscoop zijn fietsenstallingen.', '1', 'N.B. Bovenstaande prijzen zijn per persoon, zijn niet geldig bij evenementen, speciale voorstellingen of besloten voorstellingen en altijd exclusief toeslagen.\r\nKinderen t/m 2 jaar hebben gratis toegang, wanneer ze bij een betalende volwassene op schoot zitten. Is dat niet wenselijk, dan dient er een ticket gekocht te worden.\r\nBij een kinderkaartje kan naar het identiteitsbewijs van uw kind gevraagd worden om de leeftijd vast te stellen. U dient deze dan te tonen om toegang te verkrijgen.\r\nZondagochtend voordeel geldt alleen op zondag voor de voorstellingen tot 12:00 uur.\r\nOp vertoon van een studentenkaart aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nOp vertoon van een geldige CJP/Cultuurkaart aan de kassa van de bioscoop ontvang je korting. Let op: deze korting is alleen geldig van maandag t/m vrijdagmiddag maar niet gedurende vakanties (met uitzondering van de zomervakantie). Deze korting is per persoon en niet geldig in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen.\r\nOp vertoon van een geldige BankGiro Loterij VIP-KAART aan de kassa van de bioscoop ontvang je â‚¬ 1,50 korting. Per bezoek kunt u 4 kaarten met korting bestellen per VIP-KAART. Voor o.a. extra lange vertoningen of 3D-films betaalt u een extra toeslag. De korting is alleen van maandag tot en met vrijdag geldig, niet in combinatie met andere kortingsacties, evenementen, speciale voorstellingen of besloten voorstellingen en niet geldig tijdens vakanties.\r\nVoor de voorwaarden van het familieticket, het 5-sterrenticket en de 10-sterrenticket zie FAQ.');

-- --------------------------------------------------------

--
-- Table structure for table `cinema_pictures`
--

CREATE TABLE `cinema_pictures` (
  `cinema_picture_id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `cinema_picture_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cinema_pictures`
--

INSERT INTO `cinema_pictures` (`cinema_picture_id`, `cinema_id`, `cinema_picture_path`) VALUES
(1, 1, 'almere.jpg'),
(2, 2, 'breda.jpg'),
(3, 3, 'schagen.jpg'),
(4, 4, 'hoofddorp.jpg'),
(5, 5, 'den-bosch.jpg'),
(6, 6, 'den-helder.jpg'),
(7, 7, 'dordrecht.jpg'),
(8, 8, 'emmen.jpg'),
(9, 9, 'enschede.jpg'),
(10, 10, 'groningen.jpg'),
(11, 11, 'utrecht.jpg'),
(12, 12, 'oss.jpg'),
(13, 13, 'zoetermeer.jpg');

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
(1, 'over-ons', '/', 'Het Franse moederbedrijf werd in 1896 opgericht door de Gebroeders Pathe.\r\n\r\nPathe nam in 2010 Minerva Bioscopen over. Minerva Maastricht behoorde voorheen bij Pathe maar werd later afgestoten en overgenomen door Minerva Bioscopen. Door de overname van Pathe keerde Minerva Maastricht weer terug bij Pathe. Drie van de Pathe-bioscopen behoorden oorspronkelijk tot de MustSee-keten.\r\n\r\nIn 2011 werd de video-on-demand-dienst Pathe Thuis opgericht, die via internet films uitbrengt die minimaal enkele maanden eerder werden vertoond in de bioscoop.\r\n\r\nIn september 2014 nam Pathe de CineMec bioscoop in Ede over alsmede de nieuwbouwprojecten in Utrecht en Ressen (Nijmegen). CineMec behield haar eigen merk en kreeg een aparte positie binnen Pathe Nederland. Abonnees van Pathe Unlimited kunnen ook hun abonnement gebruiken bij CineMec, andere kortingskaarten en cadeaubonnen van Pathe zijn ook geldig bij CineMec. In december 2017 kondigde de directrice van Pathe, Dertje Meijer, aan dat in 2018 de drie CineMec bioscopen omgedoopt zullen worden naar Pathe, waarmee er een einde komt aan het CineMec merk.');

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
-- Table structure for table `reservation_times`
--

CREATE TABLE `reservation_times` (
  `id` int(11) NOT NULL,
  `cinema_id` int(11) NOT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservation_times`
--

INSERT INTO `reservation_times` (`id`, `cinema_id`, `start_time`, `end_time`) VALUES
(1, 1, '2018-10-09 17:00:00', '2018-10-09 19:00:00');

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
(2, 3, 'admin', 'admin@cokamel.com', 'password'),
(3, 1, 'Kinepolis Almere', 'almere@kinepolis.nl', 'password');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cinemas`
--
ALTER TABLE `cinemas`
  ADD PRIMARY KEY (`cinema_id`);

--
-- Indexes for table `cinema_pictures`
--
ALTER TABLE `cinema_pictures`
  ADD PRIMARY KEY (`cinema_picture_id`),
  ADD KEY `cinema_id` (`cinema_id`);

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
-- Indexes for table `reservation_times`
--
ALTER TABLE `reservation_times`
  ADD PRIMARY KEY (`id`),
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
  MODIFY `cinema_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cinema_pictures`
--
ALTER TABLE `cinema_pictures`
  MODIFY `cinema_picture_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
-- AUTO_INCREMENT for table `reservation_times`
--
ALTER TABLE `reservation_times`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cinema_pictures`
--
ALTER TABLE `cinema_pictures`
  ADD CONSTRAINT `cinema_pictures_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`cinema_id`);

--
-- Constraints for table `reservations`
--
ALTER TABLE `reservations`
  ADD CONSTRAINT `reservations_ibfk_1` FOREIGN KEY (`reservation_id`) REFERENCES `customers` (`customer_id`),
  ADD CONSTRAINT `reservations_ibfk_2` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`cinema_id`);

--
-- Constraints for table `reservation_times`
--
ALTER TABLE `reservation_times`
  ADD CONSTRAINT `reservation_times_ibfk_1` FOREIGN KEY (`cinema_id`) REFERENCES `cinemas` (`cinema_id`);

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
