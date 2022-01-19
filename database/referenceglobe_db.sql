-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2022 at 05:45 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `referenceglobe_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `date_of_joining` date NOT NULL,
  `blood_group` varchar(2) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`id`, `name`, `designation`, `date_of_birth`, `date_of_joining`, `blood_group`, `mobile_no`, `email`, `address`) VALUES
(1, 'Naomie Green Sr.', 'Altenwerth-Kautzer', '1998-04-14', '1983-06-14', 's', '+96(5)79308', 'gcartwright@example.com', '51401 Sipes Camp Apt. 026\nYasmeenhaven, SC 31742-7562'),
(2, 'Xzavier Heller', 'Konopelski, Willms and Kub', '1982-05-24', '1982-09-18', 'a', '425.631.179', 'maritza82@example.com', '2328 Weimann Meadows Apt. 257\nGlennaville, AK 74581-8650'),
(3, 'Nelda West', 'Torphy-Schimmel', '1992-10-21', '1993-11-25', 'o', '(304)545-41', 'coty.boyle@example.com', '868 Geoffrey Hollow Suite 301\nLake Shainamouth, WY 44698-0621'),
(4, 'Maureen Weimann', 'Kub and Sons', '1984-11-16', '2019-06-27', 'b', '00988834129', 'carey09@example.org', '40818 Harber Mill Suite 437\nPort Lloyd, NC 62210-8022'),
(5, 'Cale Okuneva', 'Howell, Weber and Lesch', '2000-12-27', '1991-12-22', 'k', '+30(9)47060', 'tristin71@example.net', '663 Kelly Squares\nRaubury, MI 39359-2317'),
(6, 'Parker Bosco Sr.', 'Grady Ltd', '1980-11-04', '2004-07-01', 'i', '(277)481-20', 'santos.collins@example.org', '6653 Gislason Centers Suite 431\nVonRuedenfort, HI 14341'),
(7, 'Gracie Bayer', 'McCullough Inc', '1997-01-08', '1984-06-08', 'c', '1-891-070-5', 'okoch@example.org', '194 Yundt Extensions Apt. 961\nIrmaberg, PA 90549-4224'),
(8, 'Prof. Noel Hudson PhD', 'Robel LLC', '1975-10-28', '2008-10-08', 'n', '1-982-277-1', 'santiago.carter@example.com', '82015 D\'Amore Isle\nCharleyland, OH 38045'),
(9, 'Kamron Dicki', 'Greenholt, Rodriguez and Daniel', '1988-04-22', '1982-06-14', 'm', '+94(7)59519', 'gorczany.narciso@example.net', '8289 Nedra Land\nEast Einar, NH 14181'),
(10, 'Mikayla Franecki', 'Jones and Sons', '1976-01-17', '2000-05-08', 'l', '04467881965', 'qmacejkovic@example.com', '819 Robel Wall\nNorth Queen, MO 79956'),
(11, 'Albin McGlynn', 'Aufderhar, Rutherford and Stark', '1988-05-10', '1989-02-21', 'c', '(396)226-21', 'obradtke@example.net', '4784 Lela Lights Suite 269\nKrisberg, WY 97357-1661'),
(12, 'Antonia Beatty', 'Ebert, Simonis and Eichmann', '2002-11-29', '2012-06-23', 'i', '05822364819', 'amorar@example.org', '49319 Velva Row Suite 711\nLake Belle, CT 15655-4230'),
(13, 'Bradly Paucek', 'Strosin, Grady and Aufderhar', '1979-06-07', '2001-12-27', 'c', '202-415-728', 'miguel36@example.com', '16147 Hoeger Hills\nWest Ryleigh, MA 12277'),
(14, 'Shanny Kilback', 'Bednar-Reynolds', '1977-12-17', '2008-11-18', 'c', '885-807-602', 'sunny31@example.net', '6151 Erdman Passage Suite 282\nHermantown, AL 34888'),
(15, 'Tiara Predovic', 'Bogan Inc', '2012-04-21', '1999-03-31', 'x', '722-695-125', 'miller.vernon@example.org', '307 Crona Camp Apt. 464\nWalshtown, IA 53511-1184'),
(16, 'Prof. Anibal Willms III', 'Olson LLC', '1993-01-17', '2020-05-15', 'r', '495.755.818', 'beatty.aisha@example.org', '821 Raynor Branch\nEast Laurence, GA 49654-0708'),
(17, 'Ms. Georgianna Barrows', 'Kuphal PLC', '1980-07-24', '2014-06-13', 'j', '020.117.211', 'streich.chance@example.net', '6534 Bernhard Place Apt. 129\nNew Cassidyfort, AZ 87392'),
(18, 'Jan Langworth', 'Koss Inc', '2016-06-07', '2004-05-25', 'w', '+41(2)49749', 'osvaldo45@example.org', '474 Quigley Mountain\nNew Kayliport, MA 96931'),
(19, 'Henriette Koelpin', 'Hartmann, Gleichner and Hand', '2020-08-25', '1977-05-14', 'n', '1-869-059-3', 'adolf.wolf@example.net', '44343 Macejkovic Mountain\nEast Marilyne, LA 84498-5885'),
(20, 'Laurine Dickinson', 'Fritsch, Oberbrunner and Runolfsdottir', '2010-07-20', '1992-06-20', 'c', '1-183-130-1', 'zakary.renner@example.net', '866 Evangeline Lodge Apt. 203\nWest Sienna, TN 59739'),
(21, 'Antonina Renner', 'Kohler and Sons', '1996-06-08', '2004-09-16', 'b', '293.123.974', 'rnolan@example.org', '082 Becker Mountain Suite 975\nPort Bernadette, OK 11101-9579'),
(22, 'Shea Ferry', 'Herzog-Kuvalis', '1976-05-29', '2017-06-14', 'm', '1-718-521-2', 'wilkinson.meta@example.com', '70848 Ansley Freeway Apt. 614\nSouth Cornelius, MD 90562'),
(23, 'Berry Marquardt Sr.', 'Langosh Ltd', '1974-04-10', '2012-11-19', 'q', '837.759.569', 'rolfson.edythe@example.net', '04241 Odessa Mill\nLake Katelyn, WA 00033-5054'),
(24, 'Brennon Zulauf Jr.', 'Heller, Feest and Simonis', '2020-02-25', '1991-07-20', 'o', '986.770.004', 'reichel.jerrold@example.org', '38787 Wuckert Lakes Suite 688\nWest Alvenafort, TX 62016-0827'),
(25, 'Edison Bashirian', 'Fay-Romaguera', '1986-06-03', '1995-01-17', 'l', '852.998.887', 'tpowlowski@example.net', '8637 Josue Parkways\nWest Nettieton, FL 67975-3992'),
(26, 'Priscilla Osinski', 'Bergstrom, Armstrong and O\'Keefe', '2004-05-21', '2001-12-18', 'f', '015.874.371', 'deangelo.hills@example.net', '98624 Taryn Club\nNew Hayleeland, NM 46307-9117'),
(27, 'Maryjane Monahan', 'Larkin, Torphy and Sanford', '2018-11-27', '2004-07-20', 'q', '1-533-552-2', 'nicole.kuhic@example.com', '4070 Cronin Trace Apt. 923\nWisozkmouth, DE 51622'),
(28, 'Eldora Koch', 'Zieme, Labadie and Kozey', '2012-07-12', '2016-01-08', 'y', '(662)455-26', 'alicia09@example.net', '841 Wehner Creek Suite 628\nWillside, DC 15500'),
(29, 'Dr. Jena Kutch', 'Osinski-Olson', '1974-02-13', '1993-12-13', 'w', '(261)127-58', 'mathilde05@example.org', '69784 Alvah Fort\nZulaufhaven, RI 24694'),
(30, 'Creola Schoen', 'Dietrich, Cremin and Denesik', '1985-09-04', '1996-11-29', 'd', '+38(4)39937', 'filomena81@example.org', '139 Lesley Stream\nLake Filomena, SC 41242'),
(31, 'Malachi McGlynn', 'Strosin-Grant', '2010-02-20', '1997-12-18', 'e', '932-439-559', 'karen13@example.org', '179 Jackie Fall Apt. 623\nWilliamhaven, MI 16769-7130'),
(32, 'Jada Rippin', 'Grant Inc', '2010-05-06', '2011-07-16', 'g', '(747)222-06', 'daniel.noel@example.com', '36389 Padberg Shoal Suite 093\nWunschchester, CT 03883'),
(33, 'Lauriane Ziemann', 'Wintheiser Inc', '1985-04-01', '2014-04-06', 'z', '622.898.586', 'myles.spinka@example.com', '2370 Abner Knolls\nNew Waylontown, NJ 12743'),
(34, 'Dr. Reymundo Legros PhD', 'Blick, Ernser and Bergnaum', '1970-09-10', '1980-07-18', 'r', '341.756.250', 'christopher.price@example.com', '5954 Estevan Meadow\nO\'Keefeburgh, KY 23988'),
(35, 'Whitney Botsford', 'Klocko-Bauch', '1991-09-28', '1998-08-11', 'z', '+59(8)13307', 'peggie.herman@example.org', '54208 Haylee Parkways\nSouth Maymouth, UT 97926'),
(36, 'Arely Fahey', 'Hodkiewicz, Bogisich and Feil', '1994-05-13', '1999-07-12', 'w', '667-383-932', 'zdaniel@example.org', '1823 Dylan Trafficway Apt. 367\nDiamondside, NM 11557-7308'),
(37, 'Giles Daugherty', 'Wiza, O\'Conner and Cronin', '1999-02-08', '1998-12-31', 'r', '626.470.595', 'gtrantow@example.net', '57392 Block Viaduct Apt. 441\nNew Adella, OR 69673-1546'),
(38, 'Kaden Greenholt', 'Grady, Runolfsdottir and Monahan', '2010-02-14', '1993-06-03', 'q', '1-762-106-3', 'grace.kuhlman@example.org', '4735 Connelly Trafficway Apt. 957\nEast Anselchester, WY 81039'),
(39, 'Vickie Turner', 'Williamson, Bailey and Cruickshank', '2004-08-11', '2017-11-20', 'm', '896-587-371', 'olemke@example.com', '7749 Conner Orchard\nArchibaldchester, NC 50955'),
(40, 'Bridie Metz', 'O\'Kon-Nikolaus', '1981-11-27', '2002-08-01', 'g', '372-276-155', 'dubuque.delilah@example.net', '8904 Becker Club Suite 757\nNew Jovanyville, MN 71887'),
(41, 'Guadalupe Klocko', 'Schumm Group', '1972-05-15', '1973-08-25', 'f', '445-883-070', 'hillary29@example.com', '41427 Emmerich River Suite 181\nGleasonshire, NV 56318-7813'),
(42, 'Dr. Isabell VonRueden PhD', 'Pouros, Dietrich and Mueller', '1995-05-26', '2000-05-06', 'g', '402.754.732', 'ilowe@example.org', '0583 Mitchell Rapids\nSouth Biankamouth, OH 05509'),
(43, 'Gaylord Cummerata', 'Jacobs-Abbott', '1991-11-16', '1981-04-16', 'p', '1-209-516-8', 'olaf.wilderman@example.com', '7390 Russel Plaza\nLake Antonina, GA 46585-4466'),
(44, 'Mr. Brock Maggio', 'Herzog Group', '1971-03-07', '1982-12-03', 'o', '1-634-705-5', 'emard.scot@example.net', '3844 Jensen Harbor\nLake Alexandreatown, ND 78060-7781'),
(45, 'Gretchen Rice', 'Lemke Group', '2021-12-05', '1977-04-02', 'h', '(393)746-89', 'schmitt.omari@example.org', '6357 Effertz Stravenue Apt. 159\nRickeytown, CO 56825-8309'),
(46, 'Spencer Hagenes', 'Kovacek, Kuvalis and Kunze', '1973-08-14', '2013-12-25', 'k', '315-871-041', 'conroy.lysanne@example.org', '450 Rohan Knoll\nNew Esmeraldaside, RI 60273-9391'),
(47, 'Dr. Roger Kuhn Sr.', 'Thompson Group', '1998-07-13', '2002-03-30', 'q', '028.242.257', 'demarco84@example.com', '298 Dare Valleys Suite 024\nSouth Rebecca, MS 61011'),
(48, 'Arnoldo Leannon', 'Kling, Weissnat and Smith', '1975-12-29', '2001-06-12', 'l', '953.283.609', 'vida.harvey@example.com', '2200 Anais Bridge\nLake Eduardoside, NY 21230'),
(49, 'Prof. Marilou Kohler', 'Kunde Inc', '2020-11-19', '1971-01-09', 'i', '1-080-896-1', 'fredrick.carroll@example.com', '8835 Deshawn Court\nKesslerville, OH 04385-7769'),
(50, 'Fannie Wolf', 'Morar-Schmitt', '2020-07-29', '2009-07-30', 'n', '1-318-250-9', 'ujohnson@example.com', '3669 Freida Avenue Apt. 170\nBergnaumside, IA 94226'),
(51, 'Savannah Ziemann', 'Rau PLC', '1973-06-29', '2007-07-20', 't', '906.164.071', 'kris.liliana@example.com', '23640 Howell Square Apt. 205\nEast Mabel, WV 99889-1434'),
(52, 'Renee Funk', 'Kiehn-Shanahan', '1986-11-29', '2013-04-03', 'w', '1-914-820-2', 'gkihn@example.net', '168 Melvina Way Apt. 400\nLake Hertha, NV 74165'),
(53, 'Mandy Lindgren MD', 'Bins-Howell', '1986-12-08', '2018-09-06', 'f', '1-861-331-3', 'camilla.boyle@example.net', '675 Velva Circle Suite 266\nAshlynnport, AL 10089'),
(54, 'Prof. Israel Kuphal MD', 'Fahey, Bergnaum and Anderson', '1993-11-22', '1984-02-13', 'g', '541-120-441', 'hermann.harber@example.com', '86526 Cronin Court Suite 843\nEast Brandi, AK 76901-9059'),
(55, 'Lily Jerde', 'Gaylord, Brekke and Watsica', '1987-09-30', '1999-12-18', 'd', '(049)902-33', 'marquis79@example.org', '49310 Bosco Bridge Apt. 046\nJonathanton, DC 28129'),
(56, 'Travis Lakin', 'Bartoletti, Beer and Homenick', '1994-09-05', '1999-01-16', 'd', '622.681.401', 'xspinka@example.net', '5280 Little Place Suite 011\nPort Eraborough, WY 68438'),
(57, 'Daisy Macejkovic', 'Hammes-Kreiger', '2020-10-24', '1999-05-29', 'l', '290-715-275', 'cloyd62@example.com', '996 Pfeffer Dam\nNorth Columbusstad, UT 16739-1458'),
(58, 'Eloy Bayer', 'Wehner, Veum and Connelly', '1999-12-13', '1996-06-20', 'm', '108.333.087', 'franecki.edison@example.com', '190 Roy Estates\nGreenholtland, FL 16907-7580'),
(59, 'Michele Considine', 'Ullrich, Walter and Kiehn', '1992-04-20', '2003-07-28', 'd', '307.614.245', 'afritsch@example.org', '091 Hamill Island\nWest Trudieport, ID 03835'),
(60, 'Clementina Kuhn', 'Collins and Sons', '2018-04-10', '1975-06-09', 'n', '1-660-060-7', 'fay.dortha@example.net', '472 Ortiz Garden\nSarinachester, HI 62388'),
(61, 'Arely Murazik', 'Pouros-Schiller', '2016-05-25', '2010-04-19', 'z', '(004)205-69', 'wkoss@example.net', '434 Bertha Trace Suite 827\nMonahanmouth, UT 51325'),
(62, 'Reid Pfeffer', 'Bode-Ward', '1991-03-11', '1997-11-03', 'l', '+64(3)99532', 'louie28@example.org', '7001 Cristal Point Suite 237\nNorth Sandy, AK 66234'),
(63, 'Angus Keeling', 'Nicolas-Murray', '1993-07-24', '1983-08-16', 's', '145.663.726', 'hillard.rowe@example.org', '79527 Lisette Terrace Suite 258\nLake Nelson, OR 92584'),
(64, 'Kamren Rice', 'Graham Inc', '1991-06-11', '1972-08-15', 'r', '657.177.764', 'christ.schmidt@example.net', '37829 Maximillia Mill Apt. 527\nKaiabury, NV 30468-5529'),
(65, 'Justina VonRueden', 'Hilpert Group', '1975-06-27', '1982-07-11', 'y', '096-241-295', 'ethyl65@example.org', '076 Kutch Ridges\nElectastad, WI 55481'),
(66, 'Noelia Bayer', 'Considine-Purdy', '1977-01-31', '1984-04-18', 'a', '1-560-329-6', 'christophe55@example.com', '237 Anahi Way Apt. 827\nNew Ethylberg, ND 40350'),
(67, 'Ms. Selena Lemke V', 'Quigley and Sons', '2011-03-06', '2001-01-18', 'g', '(567)719-19', 'laurence56@example.net', '9842 Skylar Trail\nWest Avis, MO 59647'),
(68, 'Rebeca Bartell', 'Bergstrom, Nader and Carter', '1974-04-04', '1985-09-16', 'h', '(569)116-58', 'madaline24@example.com', '295 Alicia Union Suite 473\nWest Russ, HI 82719-3682'),
(69, 'Irving Kub Sr.', 'Gaylord-Goyette', '2018-12-13', '1998-06-17', 'r', '439-631-472', 'xcarroll@example.org', '98577 Bayer Mountain\nLynchfort, ID 89635-4723'),
(70, 'Dr. Franco Johns', 'Friesen and Sons', '1999-09-13', '1987-02-12', 'a', '694-839-780', 'gkessler@example.org', '952 Grace Rest Suite 933\nKobystad, MN 01434-6696'),
(71, 'Jules Kerluke', 'Schulist PLC', '1987-02-02', '2014-12-01', 't', '1-125-424-8', 'kautzer.garnet@example.org', '378 O\'Conner Garden Suite 002\nJaidabury, NJ 63825'),
(72, 'Madaline Feeney', 'Collins, D\'Amore and Medhurst', '2000-06-11', '1975-08-09', 'n', '310-828-485', 'moses.ziemann@example.com', '28374 Eula Ridge\nNorth Zacheryview, NY 35954'),
(73, 'Mrs. Eve Tillman I', 'Greenholt-Bosco', '1983-11-15', '1987-06-06', 'm', '(389)755-13', 'erica.nikolaus@example.org', '823 Krajcik Valleys\nLeuschkeshire, CA 96359-9147'),
(74, 'Mrs. Shaina Hegmann', 'Schimmel, Smitham and Wolff', '2005-10-08', '1986-05-13', 'd', '(063)429-23', 'taya82@example.org', '30581 Dietrich Way\nVerliemouth, FL 54562'),
(75, 'Dr. Tony Hand DVM', 'Stoltenberg-Hermann', '1972-07-18', '1982-07-02', 'u', '859.844.790', 'garett.williamson@example.net', '128 Runte Forges Suite 044\nWest Elroy, GA 52454-0443'),
(76, 'Mrs. Cecilia Ortiz III', 'Howe, Kessler and Rippin', '2021-02-26', '1989-11-14', 'e', '348.654.162', 'haylee.lehner@example.net', '64020 Cummings Turnpike\nLake Alice, MD 40459'),
(77, 'Leonie Stiedemann', 'Ward-Fisher', '1980-12-06', '2020-06-04', 'j', '288-407-775', 'emely79@example.com', '285 Weimann Trail\nNew Bettieville, WY 75705-0103'),
(78, 'Maxine Casper', 'Gorczany LLC', '1997-03-25', '2018-04-27', 'i', '007.706.436', 'adolfo.lockman@example.com', '96689 Dena Plaza\nNew Ed, WV 90467-5391'),
(79, 'Jaquelin Hansen', 'Stoltenberg, Armstrong and Kilback', '2007-03-20', '1990-06-19', 'e', '514.276.959', 'schultz.jaqueline@example.net', '5014 Roob Street Suite 229\nSanfordbury, MA 81398'),
(80, 'Wendell Murphy', 'Fisher Group', '2013-11-26', '1984-11-04', 'l', '1-732-697-5', 'burnice.osinski@example.com', '315 Lemke Stravenue Apt. 652\nElysemouth, CA 75689-2192'),
(81, 'Jayda Corwin', 'Crist LLC', '2010-06-01', '1987-09-23', 'x', '(389)003-79', 'barry83@example.net', '0375 Stanton Plain Apt. 259\nLangland, VT 28937-6668'),
(82, 'Dr. Arthur Russel DVM', 'Monahan Group', '1979-05-16', '2017-08-24', 'k', '08572694169', 'isobel34@example.net', '12153 Hyatt Hollow Suite 413\nNew Winifredport, RI 05271'),
(83, 'Ellie Metz', 'Koepp Ltd', '1978-11-16', '1993-01-19', 'y', '1-496-092-4', 'lebsack.pearline@example.org', '474 Bartell Loop Suite 733\nBergstromshire, CO 07458'),
(84, 'Augustine Littel', 'Hayes Inc', '1972-12-13', '1996-09-01', 'n', '1-922-256-5', 'alanna.schumm@example.org', '21799 Kunze Plains\nManteview, OH 75096'),
(85, 'Pinkie Anderson', 'Treutel-Rogahn', '2015-01-29', '2010-04-13', 'n', '379-105-760', 'kayleigh.stark@example.com', '47434 Kenyon Lodge Apt. 113\nPort Nathanial, PA 10644-8394'),
(86, 'Sabryna Brekke', 'Hettinger, Mitchell and Leffler', '2016-10-07', '1994-05-03', 'p', '1-065-144-9', 'savion15@example.org', '57396 Kaylee Curve\nLake Johnnyhaven, MA 39728'),
(87, 'Dr. Candido Hane MD', 'Koss-Maggio', '2007-06-26', '1987-12-17', 'h', '1-459-587-4', 'bogan.alexandre@example.net', '7083 Guillermo Drive Suite 456\nLake Roxane, NE 09544-3081'),
(88, 'Dr. Gerardo West DDS', 'Bosco, Johnston and Ferry', '1989-08-05', '2010-01-12', 'a', '+27(4)96035', 'frederique.moen@example.net', '8226 Hipolito Groves Suite 937\nPort Genevieve, SD 77740-4546'),
(89, 'Jacinto Cassin', 'Parisian-Langosh', '1977-02-05', '2016-02-05', 'v', '599-334-844', 'gwalter@example.net', '47608 Schmeler Turnpike Apt. 181\nWest Brendafort, NM 33168'),
(90, 'Jackie Toy', 'Hyatt-Koepp', '1980-08-26', '1989-02-24', 'm', '619.525.662', 'mariah95@example.org', '5372 Katlyn Trail Suite 611\nLeuschkeport, OH 63034'),
(91, 'Prof. Augusta Sawayn', 'Harber, Durgan and Lubowitz', '1987-12-24', '2009-11-07', 'm', '1-626-860-5', 'whackett@example.com', '4091 Anne Ranch Apt. 178\nVolkmanchester, VT 40940-7945'),
(92, 'Arianna Tillman', 'Schamberger, Rosenbaum and Ruecker', '1983-02-14', '2012-02-27', 'f', '434-276-777', 'vhills@example.com', '4617 Cheyanne Valley Apt. 069\nFraneckiville, HI 76016'),
(93, 'Brandy Rice', 'Macejkovic Inc', '2011-06-23', '1992-05-25', 'e', '(291)148-48', 'farrell.magnolia@example.com', '4703 Davin Canyon Suite 643\nLake Jaydon, MA 39891'),
(94, 'Prof. Cade Mante I', 'Bayer, Hayes and Ernser', '1981-06-17', '2015-02-02', 'f', '1-809-091-1', 'eleanore12@example.com', '5820 Romaguera Turnpike Suite 074\nEast Herthafurt, NH 79156-4715'),
(95, 'Stan Reichel', 'Altenwerth, Jast and Jacobson', '1986-06-24', '2001-10-30', 'y', '+44(3)91755', 'xo\'keefe@example.com', '89683 Emard Divide Apt. 471\nHuldaburgh, KS 30886-4582'),
(96, 'Kaela Kub', 'Morar, Gulgowski and Schroeder', '1984-02-22', '1979-08-16', 's', '+91(1)49135', 'antonia.gerlach@example.org', '096 Lottie Shoal\nTreutelhaven, TX 53825'),
(97, 'Cayla Runolfsson', 'Moen, Stokes and Bartell', '1987-03-30', '2008-09-07', 'p', '1-898-543-2', 'keenan03@example.com', '667 Weldon Ports Suite 656\nWardland, AL 57573'),
(98, 'Cleora Huels I', 'Kreiger, Feest and O\'Conner', '1985-12-26', '1980-03-21', 'c', '04524842228', 'boyle.martin@example.net', '77001 Aufderhar Brooks\nFranciscabury, AK 89163-3914'),
(99, 'Dr. Jalyn Spinka', 'DuBuque PLC', '1985-09-18', '2000-09-19', 'k', '1-086-501-2', 'saul.bode@example.org', '34034 Dandre Inlet\nIsabelburgh, CA 79044'),
(100, 'Valentina Labadie', 'Hickle Ltd', '2009-12-22', '2017-03-03', 'x', '1-403-126-3', 'po\'reilly@example.net', '13625 Lemke Village\nSchaeferfurt, NH 52815-9507');

-- --------------------------------------------------------

--
-- Table structure for table `id_table`
--

CREATE TABLE `id_table` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_proof` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `permission_table`
--

CREATE TABLE `permission_table` (
  `p_id` int(11) NOT NULL,
  `p_type` int(11) DEFAULT NULL,
  `p_name` varchar(100) DEFAULT NULL,
  `p_url` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `permission_table`
--

INSERT INTO `permission_table` (`p_id`, `p_type`, `p_name`, `p_url`) VALUES
(1, 2, 'add_user', 'add_user.php'),
(2, 2, 'delete_user', 'delete_user.php'),
(3, 3, 'add_user', 'add_user.php'),
(4, 3, 'edit_user', 'edit_user.php'),
(5, 3, 'delete_user', 'delete_user.php'),
(6, 2, 'view_user', 'view_user.php'),
(7, 3, 'view_user', 'view_user.php');

-- --------------------------------------------------------

--
-- Table structure for table `role_table`
--

CREATE TABLE `role_table` (
  `r_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role_table`
--

INSERT INTO `role_table` (`r_id`, `role_name`, `created_at`) VALUES
(1, 'user', '2022-01-17 14:15:43'),
(2, 'admin', '2022-01-17 14:15:43'),
(3, 'superadmin', '2022-01-17 14:15:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_username` varchar(100) NOT NULL,
  `user_password` varchar(250) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_mobile` varchar(12) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_dob` date NOT NULL,
  `user_photo` varchar(150) DEFAULT NULL,
  `user_signature` varchar(150) DEFAULT NULL,
  `user_role` int(11) NOT NULL DEFAULT 1,
  `user_status` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `user_name`, `user_username`, `user_password`, `user_email`, `user_mobile`, `user_gender`, `user_dob`, `user_photo`, `user_signature`, `user_role`, `user_status`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', 'R0xPQkVwYXNzd29yZA==', 'superadmin@mail.com', '8888899999', 'Male', '2012-01-01', NULL, NULL, 3, 1, '2022-01-17 14:20:50', '2022-01-17 14:20:50'),
(2, 'Admin', 'admin', 'R0xPQkVwYXNzd29yZA==', 'admin@mail.com', '9999988888', 'Female', '2012-02-01', NULL, NULL, 2, 1, '2022-01-17 14:20:50', '2022-01-17 14:20:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `id_table`
--
ALTER TABLE `id_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_table`
--
ALTER TABLE `permission_table`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `p_type` (`p_type`);

--
-- Indexes for table `role_table`
--
ALTER TABLE `role_table`
  ADD PRIMARY KEY (`r_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`user_username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `id_table`
--
ALTER TABLE `id_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permission_table`
--
ALTER TABLE `permission_table`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `role_table`
--
ALTER TABLE `role_table`
  MODIFY `r_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_table`
--
ALTER TABLE `permission_table`
  ADD CONSTRAINT `permission_table_ibfk_1` FOREIGN KEY (`p_type`) REFERENCES `role_table` (`r_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
