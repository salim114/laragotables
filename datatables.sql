-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 28, 2022 at 12:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laragotables`
--

-- --------------------------------------------------------

--
-- Table structure for table `datatables`
--

CREATE TABLE `datatables` (
  `id` int(10) NOT NULL,
  `first_name` varchar(250) NOT NULL DEFAULT '',
  `last_name` varchar(250) NOT NULL DEFAULT '',
  `name_abrv` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `position` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `office` varchar(250) NOT NULL DEFAULT '',
  `start_date_epoch` int(15) DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `age` int(8) DEFAULT NULL,
  `salary` int(8) DEFAULT NULL,
  `seq` int(8) DEFAULT NULL,
  `extn` varchar(8) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datatables`
--

INSERT INTO `datatables` (`id`, `first_name`, `last_name`, `name_abrv`, `position`, `email`, `office`, `start_date_epoch`, `start_date`, `age`, `salary`, `seq`, `extn`) VALUES
(1, 'Tiger', 'Nixon', 'T. Nixon', 'System Architect', 't.nixon@datatables.net', 'Edinburgh', 1303689600, '2011-04-25 00:00:00', 61, 320800, 2, '5421'),
(2, 'Garrett', 'Winters', 'G. Winter', 'Accountant', 'g.winters@datatables.net', 'Tokyo', 1311552000, '2011-07-25 00:00:00', 63, 170750, 22, '8422'),
(3, 'Ashton', 'Cox', 'A. Cox', 'Junior Technical Author', 'a.cox@datatables.net', 'San Francisco', 1231718400, '2009-01-12 00:00:00', 66, 86000, 6, '1562'),
(4, 'Cedric', 'Kelly', 'C. Kelly', 'Senior Javascript Developer', 'c.kelly@datatables.net', 'Edinburgh', 1332979200, '2012-03-29 00:00:00', 22, 433060, 41, '6224'),
(5, 'Airi', 'Satou', 'A. Satou', 'Accountant', 'a.satou@datatables.net', 'Tokyo', 1227830400, '2008-11-28 00:00:00', 33, 162700, 55, '5407'),
(6, 'Brielle', 'Williamson', 'B. Williamson', 'Integration Specialist', 'b.williamson@datatables.net', 'New York', 1354406400, '2012-12-02 00:00:00', 61, 372000, 21, '4804'),
(7, 'Herrod', 'Chandler', 'H. Chandler', 'Sales Assistant', 'h.chandler@datatables.net', 'San Francisco', 1344211200, '2012-08-06 00:00:00', 59, 137500, 46, '9608'),
(8, 'Rhona', 'Davidson', 'R. Davidson', 'Integration Specialist', 'r.davidson@datatables.net', 'Tokyo', 1287014400, '2010-10-14 00:00:00', 55, 327900, 50, '6200'),
(9, 'Colleen', 'Hurst', 'C. Hurst', 'Javascript Developer', 'c.hurst@datatables.net', 'San Francisco', 1252972800, '2009-09-15 00:00:00', 39, 205500, 26, '2360'),
(10, 'Sonya', 'Frost', 'S. Frost', 'Software Engineer', 's.frost@datatables.net', 'Edinburgh', 1229126400, '2008-12-13 00:00:00', 23, 103600, 18, '1667'),
(11, 'Jena', 'Gaines', 'J. Gaines', 'Office Manager', 'j.gaines@datatables.net', 'London', 1229644800, '2008-12-19 00:00:00', 30, 90560, 13, '3814'),
(12, 'Quinn', 'Flynn', 'Q. Flynn', 'Support Lead', 'q.flynn@datatables.net', 'Edinburgh', 1362268800, '2013-03-03 00:00:00', 22, 342000, 23, '9497'),
(13, 'Charde', 'Marshall', 'C. Marshall', 'Regional Director', 'c.marshall@datatables.net', 'San Francisco', 1224115200, '2008-10-16 00:00:00', 36, 470600, 14, '6741'),
(14, 'Haley', 'Kennedy', 'H. Kennedy', 'Senior Marketing Designer', 'h.kennedy@datatables.net', 'London', 1387324800, '2012-12-18 00:00:00', 43, 313500, 12, '3597'),
(15, 'Tatyana', 'Fitzpatrick', 'T. Fitzpatrick', 'Regional Director', 't.fitzpatrick@datatables.net', 'London', 1268784000, '2010-03-17 00:00:00', 19, 385750, 54, '1965'),
(16, 'Michael', 'Silva', 'M. Silva', 'Marketing Designer', 'm.silva@datatables.net', 'London', 1353974400, '2012-11-27 00:00:00', 66, 198500, 37, '1581'),
(17, 'Paul', 'Byrd', 'P. Byrd', 'Chief Financial Officer (CFO)', 'p.byrd@datatables.net', 'New York', 1276041600, '2010-06-09 00:00:00', 64, 725000, 32, '3059'),
(18, 'Gloria', 'Little', 'G. Little', 'Systems Administrator', 'g.little@datatables.net', 'New York', 1239321600, '2009-04-10 00:00:00', 59, 237500, 35, '1721'),
(19, 'Bradley', 'Greer', 'B. Greer', 'Software Engineer', 'b.greer@datatables.net', 'London', 1350086400, '2012-10-13 00:00:00', 41, 132000, 48, '2558'),
(20, 'Dai', 'Rios', 'D. Rios', 'Personnel Lead', 'd.rios@datatables.net', 'Edinburgh', 1348617600, '2012-09-26 00:00:00', 35, 217500, 45, '2290'),
(21, 'Jenette', 'Caldwell', 'J. Caldwell', 'Development Lead', 'j.caldwell@datatables.net', 'New York', 1315008000, '2011-09-03 00:00:00', 30, 345000, 17, '1937'),
(22, 'Yuri', 'Berry', 'Y. Berry', 'Chief Marketing Officer (CMO)', 'y.berry@datatables.net', 'New York', 1245888000, '2009-06-25 00:00:00', 40, 675000, 57, '6154'),
(23, 'Caesar', 'Vance', 'C. Vance', 'Pre-Sales Support', 'c.vance@datatables.net', 'New York', 1323648000, '2011-12-12 00:00:00', 21, 106450, 29, '8330'),
(24, 'Doris', 'Wilder', 'D. Wilder', 'Sales Assistant', 'd.wilder@datatables.net', 'Sydney', 1284940800, '2010-09-20 00:00:00', 23, 85600, 56, '3023'),
(25, 'Angelica', 'Ramos', 'A. Ramos', 'Chief Executive Officer (CEO)', 'a.ramos@datatables.net', 'London', 1255046400, '2009-10-09 00:00:00', 47, 1200000, 36, '5797'),
(26, 'Gavin', 'Joyce', 'G. Joyce', 'Developer', 'g.joyce@datatables.net', 'Edinburgh', 1292976000, '2010-12-22 00:00:00', 42, 92575, 5, '8822'),
(27, 'Jennifer', 'Chang', 'J. Chang', 'Regional Director', 'j.chang@datatables.net', 'Singapore', 1289692800, '2010-11-14 00:00:00', 28, 357650, 51, '9239'),
(28, 'Brenden', 'Wagner', 'B. Wagner', 'Software Engineer', 'b.wagner@datatables.net', 'San Francisco', 1307404800, '2011-06-07 00:00:00', 28, 206850, 20, '1314'),
(29, 'Fiona', 'Green', 'F. Green', 'Chief Operating Officer (COO)', 'f.green@datatables.net', 'San Francisco', 1268265600, '2010-03-11 00:00:00', 48, 850000, 7, '2947'),
(30, 'Shou', 'Itou', 'S. Itou', 'Regional Marketing', 's.itou@datatables.net', 'Tokyo', 1313280000, '2011-08-14 00:00:00', 20, 163000, 1, '8899'),
(31, 'Michelle', 'House', 'M. House', 'Integration Specialist', 'm.house@datatables.net', 'Sydney', 1306972800, '2011-06-02 00:00:00', 37, 95400, 39, '2769'),
(32, 'Suki', 'Burks', 'S. Burks', 'Developer', 's.burks@datatables.net', 'London', 1256169600, '2009-10-22 00:00:00', 53, 114500, 40, '6832'),
(33, 'Prescott', 'Bartlett', 'P. Burks', 'Technical Author', 'p.bartlett@datatables.net', 'London', 1304726400, '2011-05-07 00:00:00', 27, 145000, 47, '3606'),
(34, 'Gavin', 'Cortez', 'G. Cortez', 'Team Leader', 'g.cortez@datatables.net', 'San Francisco', 1224979200, '2008-10-26 00:00:00', 22, 235500, 52, '2860'),
(35, 'Martena', 'Mccray', 'M. Mccray', 'Post-Sales support', 'm.mccray@datatables.net', 'Edinburgh', 1299628800, '2011-03-09 00:00:00', 46, 324050, 8, '8240'),
(36, 'Unity', 'Butler', 'U. Butler', 'Marketing Designer', 'u.butler@datatables.net', 'San Francisco', 1260316800, '2009-12-09 00:00:00', 47, 85675, 24, '5384'),
(37, 'Howard', 'Hatfield', 'H. Hatfield', 'Office Manager', 'h.hatfield@datatables.net', 'San Francisco', 1229385600, '2008-12-16 00:00:00', 51, 164500, 38, '7031'),
(38, 'Hope', 'Fuentes', 'H. Fuentes', 'Secretary', 'h.fuentes@datatables.net', 'San Francisco', 1265932800, '2010-02-12 00:00:00', 41, 109850, 53, '6318'),
(39, 'Vivian', 'Harrell', 'V. Harrell', 'Financial Controller', 'v.harrell@datatables.net', 'San Francisco', 1234569600, '2009-02-14 00:00:00', 62, 452500, 30, '9422'),
(40, 'Timothy', 'Mooney', 'T. Mooney', 'Office Manager', 't.mooney@datatables.net', 'London', 1228953600, '2008-12-11 00:00:00', 37, 136200, 28, '7580'),
(41, 'Jackson', 'Bradshaw', 'J. Bradshaw', 'Director', 'j.bradshaw@datatables.net', 'New York', 1222387200, '2008-09-26 00:00:00', 65, 645750, 34, '1042'),
(42, 'Olivia', 'Liang', 'O. Liang', 'Support Engineer', 'o.liang@datatables.net', 'Singapore', 1296691200, '2011-02-03 00:00:00', 64, 234500, 4, '2120'),
(43, 'Bruno', 'Nash', 'B. Nash', 'Software Engineer', 'b.nash@datatables.net', 'London', 1304380800, '2011-05-03 00:00:00', 38, 163500, 3, '6222'),
(44, 'Sakura', 'Yamamoto', 'S. Yamamoto', 'Support Engineer', 's.yamamoto@datatables.net', 'Tokyo', 1250640000, '2009-08-19 00:00:00', 37, 139575, 31, '9383'),
(45, 'Thor', 'Walton', 'T. Walton', 'Developer', 't.walton@datatables.net', 'New York', 1376179200, '2013-08-11 00:00:00', 61, 98540, 11, '8327'),
(46, 'Finn', 'Camacho', 'F. Camacho', 'Support Engineer', 'f.camacho@datatables.net', 'San Francisco', 1246924800, '2009-07-07 00:00:00', 47, 87500, 10, '2927'),
(47, 'Serge', 'Baldwin', 'S. Baldwin', 'Data Coordinator', 's.baldwin@datatables.net', 'Singapore', 1333929600, '2012-04-09 00:00:00', 64, 138575, 44, '8352'),
(48, 'Zenaida', 'Frank', 'Z. Frank', 'Software Engineer', 'z.frank@datatables.net', 'New York', 1262563200, '2010-01-04 00:00:00', 63, 125250, 42, '7439'),
(49, 'Zorita', 'Serrano', 'Z. Serrano', 'Software Engineer', 'z.serrano@datatables.net', 'San Francisco', 1338508800, '2012-06-01 00:00:00', 56, 115000, 27, '4389'),
(50, 'Jennifer', 'Acosta', 'J. Acosta', 'Junior Javascript Developer', 'j.acosta@datatables.net', 'Edinburgh', 1359676800, '2013-02-01 00:00:00', 43, 75650, 49, '3431'),
(51, 'Cara', 'Stevens', 'C. Stevens', 'Sales Assistant', 'c.stevens@datatables.net', 'New York', 1323129600, '2011-12-06 00:00:00', 46, 145600, 15, '3990'),
(52, 'Hermione', 'Butler', 'H. Butler', 'Regional Director', 'h.butler@datatables.net', 'London', 1300665600, '2011-03-21 00:00:00', 47, 356250, 9, '1016'),
(53, 'Lael', 'Greer', 'L. Greer', 'Systems Administrator', 'l.greer@datatables.net', 'London', 1235692800, '2009-02-27 00:00:00', 21, 103500, 25, '6733'),
(54, 'Jonas', 'Alexander', 'J. Alexander', 'Developer', 'j.alexander@datatables.net', 'San Francisco', 1279065600, '2010-07-14 00:00:00', 30, 86500, 33, '8196'),
(55, 'Shad', 'Decker', 'S. Decker', 'Regional Director', 's.decker@datatables.net', 'Edinburgh', 1226534400, '2008-11-13 00:00:00', 51, 183000, 43, '6373'),
(56, 'Michael', 'Bruce', 'M. Bruce', 'Javascript Developer', 'm.bruce@datatables.net', 'Singapore', 1309132800, '2011-06-27 00:00:00', 29, 183000, 16, '5384'),
(57, 'Donna', 'Snider', 'D. Snider', 'Customer Support', 'd.snider@datatables.net', 'New York', 1295913600, '2011-01-25 00:00:00', 27, 112000, 19, '4226'),
(58, 'Abdelhalim', 'Saidi', 'A. Saidi', 'Head of Service ADM', 's.abdelhalim@hotmail.fr', 'Algiers', 1152144000, '2006-07-01 12:00:00', 44, 120000, 58, '4322');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datatables`
--
ALTER TABLE `datatables`
  ADD PRIMARY KEY (`id`),
  ADD KEY `seq` (`seq`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datatables`
--
ALTER TABLE `datatables`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
