-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2022 at 11:52 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `stock`
--

-- --------------------------------------------------------

--
-- Table structure for table `cartouche`
--

CREATE TABLE IF NOT EXISTS `cartouche` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `name` varchar(50) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `color` varchar(25) NOT NULL,
  `quantity` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=99 ;

--
-- Dumping data for table `cartouche`
--

INSERT INTO `cartouche` (`id`, `date`, `time`, `name`, `ref`, `color`, `quantity`) VALUES
(70, '2022-07-22', '19:19:10', '2010AC', 'T-FC210E-Y', 'Y', 3),
(71, '2022-07-22', '19:19:36', '2010AC', 'T-FC210E-C', 'C', 3),
(72, '2022-07-22', '19:19:53', '2010AC', 'T-FC210E-M', 'M', 2),
(73, '2022-07-22', '19:20:16', '2010AC', 'T-FC210E-K', 'K', 4),
(74, '2022-07-22', '19:22:41', '2505AC', 'T-FC505E-Y', 'Y', 1),
(75, '2022-07-22', '19:27:18', '2505AC', 'T-FC505E-M', 'M', 2),
(76, '2022-07-22', '19:27:28', '2505AC', 'T-FC505E-C', 'C', 2),
(77, '2022-07-22', '19:28:00', '2505AC', 'T-FC505E-K', 'K', 1),
(78, '2022-07-22', '19:29:57', '330AC', 'T-FC330E-K', 'K', 3),
(79, '2022-07-22', '19:30:32', '330AC', 'T-FC330E-M', 'M', 1),
(80, '2022-07-22', '19:30:43', '330AC', 'T-FC330E-C', 'C', 1),
(81, '2022-07-22', '19:31:11', '330AC', 'T-FC330E-Y', 'Y', 1),
(82, '2022-07-22', '19:35:45', '2508A', 'T-3008E', 'K', 1),
(83, '2022-07-22', '19:37:03', '409s', 'T-409E-R', 'K', 2),
(84, '2022-07-22', '19:42:16', '385s', 'PS-ZT3850P-R', 'kit', 2),
(85, '2022-07-22', '19:44:10', '389cs', 'T-FC389EK-R', 'K', 2),
(86, '2022-07-22', '19:44:27', '389cs', 'T-FC389EM-R', 'M', 1),
(87, '2022-07-22', '19:44:57', '389cs', 'T-FC389EY-R', 'Y', 1),
(88, '2022-07-22', '19:45:34', '389cs', 'T-FC389EC-R', 'C', 1),
(89, '2022-07-22', '19:47:04', '338cs', 'T-FC338EK-R', 'K', 3),
(90, '2022-07-22', '19:48:09', '338cs', 'T-FC338EM-R', 'M', 2),
(91, '2022-07-22', '19:48:29', '338cs', 'T-FC338EC-R', 'C', 2),
(92, '2022-07-22', '19:48:41', '338cs', 'T-FC338EY-R', 'Y', 2),
(94, '2022-07-22', '20:37:26', '2050C', 'T-FC30E-Y', 'Y', 1),
(95, '2022-07-22', '20:37:54', '2050C', 'T-FC30E-M', 'M', 1),
(96, '2022-07-22', '20:38:20', '2050C', 'T-FC30E-C', 'C', 1),
(97, '2022-07-22', '20:41:19', 'Lexmark', '24B7185', 'K', 1),
(98, '2026-07-22', '20:06:35', '478s', 'PS-ZT478SE-R', 'Kit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `machine` varchar(50) NOT NULL,
  `type` varchar(5) NOT NULL,
  `ref` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=79 ;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`id`, `date`, `time`, `name`, `phone`, `address`, `machine`, `type`, `ref`) VALUES
(1, '2023-07-22', '18:43:06', 'SCM SOS MEDECIN', 0, '', 'XM12346', 'A4', '70178521082ML'),
(2, '2023-07-22', '18:46:59', 'AGENCE CARTE GRISE', 0, '', 'XM1242', 'A4', '70179203OBYFM'),
(3, '2023-07-22', '19:07:14', 'INEOSURF', 0, '', 'XC4240', 'A3', '7529925144BD6'),
(4, '2023-07-22', '19:07:33', 'LE BATIMENT DU 34', 0, '', '2010AC', 'A3', 'CGNJ26343'),
(5, '2023-07-22', '19:08:54', 'A3CE EXPERTISE COMPTABLE', 0, '', '2010AC', 'A3', 'CGNJ26337'),
(6, '2023-07-22', '19:10:41', 'AMP CONSEILS LEX', 0, '', 'XC4240', 'A4', '7529925144CH6'),
(7, '2023-07-22', '19:12:03', 'AMP CONSEILS', 0, '', '389cs', 'A4', '75280090G51TF'),
(8, '2023-07-22', '19:13:19', 'AMP CONSEILS JAOUAD', 0, '', '338CS', 'A4', '00000'),
(9, '2023-07-22', '19:14:23', 'AMP CONSEILS MAHFOUD', 0, '', '338CS', 'A4', '752905214BN50'),
(10, '2023-07-22', '19:18:06', 'CE ROUILLE COUILON', 0, '', '2010AC', 'A3', 'CNIJ12808'),
(11, '2023-07-22', '19:18:53', 'SRB CONSTRUCTION', 0, '', '2010AC', 'A3', 'CNIJI12811'),
(12, '2023-07-22', '19:19:49', 'FAMILY MARKET', 0, '', '478CS', 'A4', '70189413078J8'),
(13, '2023-07-22', '19:21:37', 'FAMILY MARKET', 0, '', '409P', 'A4', '46010500037T0'),
(14, '2023-07-22', '19:22:22', 'AGOSS SECURITY', 0, '', '2010AC', 'A3', 'CNCK29509'),
(15, '2023-07-22', '19:23:42', 'AGOSS SECURITY', 0, '', '338CS', 'A4', '7529936145XZX'),
(16, '2023-07-22', '19:25:22', 'RENOVE PISCINE', 0, '', '338CS', 'A4', '7529939146FNN'),
(17, '2023-07-22', '19:26:40', 'EUROBAT SUD', 0, '', '2510AC', 'A3', 'CNKJ19996'),
(18, '2023-07-22', '19:27:14', 'EUROBAT SUD', 0, '', '2010AC', 'A3', 'CNAL16914'),
(19, '2023-07-22', '19:27:45', 'LAM BTP', 0, '', '2010AC', 'A3', 'CNLJ24382'),
(20, '2023-07-22', '19:28:40', 'TCE ENERGY', 0, '', '2010AC', 'A3', 'CNAK26126'),
(21, '2023-07-22', '19:30:15', 'DEA', 0, '', '2010AC', 'A3', 'CNCK29517'),
(22, '2023-07-22', '19:30:54', 'AL BARAKA SUD', 0, '', '389CS', 'A4', '75280090G51Z5'),
(23, '2023-07-22', '19:33:03', 'FM''PLANS', 0, '', '2010AC', 'A3', 'CNLJ21519'),
(24, '2023-07-22', '19:36:28', 'SERVICE AND PHONE', 0, '', 'NULL', 'A3', 'CNLJ21517'),
(25, '2023-07-22', '19:37:36', 'CABINET COCHET', 0, '', '338CS', 'A4', '7529948147RHZ'),
(26, '2023-07-22', '19:39:19', 'AFFITRONIC LCD', 0, '', '389CS', 'A4', '75280090G51WW'),
(27, '2023-07-22', '19:40:34', 'AUDIT CONSEIL JOTI', 0, '', '389CS', 'A4', '75280130G5436'),
(28, '2023-07-22', '19:41:46', 'ERRA CHIDA', 0, '', '389CS', 'A4', '75280130G542V'),
(29, '2023-07-22', '19:42:24', 'ELAF', 0, '', '389CS', 'A4', '75280130G5439'),
(30, '2023-07-22', '19:44:02', 'ELAF', 0, '', '338CS', 'A4', 'NULL'),
(31, '2023-07-22', '19:45:22', 'CCFC', 0, '', '389CS', 'A4', '75280180G542R'),
(32, '2023-07-22', '19:46:01', 'KALLISTE', 0, '', '330AC', 'A4', 'CRLK17221'),
(33, '2023-07-22', '19:46:37', 'MOUTON', 0, '', '408S', 'A4', 'N/A'),
(34, '2023-07-22', '19:47:15', 'JDF CONSTRUCTION', 0, '', '2010AC', 'A3', 'CNIK25448'),
(35, '2023-07-22', '19:48:10', 'MENUISERIE MERCEIR', 0, '', '2505AC', 'A3', 'CFCH43263'),
(36, '2023-07-22', '19:48:52', 'ORTHOVET', 0, '', '389CS', 'A4', '752800130G542Y'),
(37, '2023-07-22', '19:49:39', 'ISMAIL', 0, '', '338CS', 'A4', '752905214BN2W'),
(38, '2023-07-22', '19:50:34', 'BUREAU ETUDES CONSEILS', 0, '', '2010AC', 'A3', 'CNAL16890'),
(39, '2023-07-22', '19:51:07', 'BUREAU ETUDES CONSEILS', 0, '', '2010AC', 'A3', 'CNFL13850'),
(40, '2023-07-22', '19:51:54', 'FOOD DESTOCK', 0, '', '409S', 'A4', '7019051001H2V'),
(41, '2023-07-22', '19:52:54', 'ARTAM CONSTRUCTIONS', 0, '', '2010AC', 'A3', 'CNAL18607'),
(42, '2023-07-22', '19:53:38', 'SK BAT', 0, '', '2010AC', 'A3', 'CNLK16235'),
(43, '2023-07-22', '19:54:27', 'ELITECH', 0, '', '2510AC', 'A3', 'CNGK18106'),
(44, '2022-07-24', '02:03:40', 'NINOS''COOL', 0, '', '2510AC', 'A3', 'CNGK18105'),
(45, '2022-07-24', '02:06:15', 'NINOS''COOL', 0, '', '409S', 'A4', '7019117002PC5'),
(46, '2024-07-22', '02:07:32', 'AXA SCHRAP', 0, '', '409S', 'A4', '7019117002PBZ'),
(47, '2024-07-22', '02:08:10', 'AXA SCHRAP', 0, '', '409S', 'A4', '7019117002P5'),
(48, '2024-07-22', '02:08:45', 'TECHICH', 0, '', '2010AC', 'A3', 'CNDL26811'),
(49, '2024-07-22', '02:10:38', 'MEDIBAT', 0, '', '2010AC', 'A3', 'CNFL13820'),
(50, '2024-07-22', '02:12:55', 'ANGUS34', 0, '', '338CS', 'A4', '752992314437W'),
(51, '2024-07-22', '02:13:53', 'ANTUKA', 0, '', '2010AC', 'A3', 'CNFL13804'),
(52, '2024-07-22', '02:14:58', 'SOGECO', 0, '', '338CS', 'A4', '052148MTC'),
(53, '2024-07-22', '02:16:00', '3M Collecte Pignan', 0, '', '2309A', 'A3', 'CLJF17146'),
(54, '2024-07-22', '02:18:14', '3M EMILE ZOLA', 0, '', '385S', 'A4', '70156PLM15HNP'),
(55, '2024-07-22', '02:19:09', '3M EMILE ZOLA', 0, '', '385S', 'A4', '70156PLM15HPZ'),
(56, '2024-07-22', '02:19:48', '3M EMILE ZOLA', 0, '', '385S', 'A4', '70156PLM15HC7'),
(57, '2024-07-22', '02:21:22', '3M JEAN DE LA FONTAINE', 0, '', '2000AC', 'A3', 'CFJF25806'),
(58, '2024-07-22', '02:23:10', 'CAP ALPHA CLAPIERS', 0, '', '2505AC', 'A3', 'CFJF63267'),
(59, '2024-07-22', '02:25:17', '3M EMILE ZOLA', 0, '', '2508A', 'A3', '7CGKF45542'),
(60, '2024-07-22', '02:25:50', '3M LA MOSSON', 0, '', '385S', 'A4', '70156PLM13CTK'),
(61, '2024-07-22', '02:26:44', '3M MED ALBERT', 0, '', '2000AC', 'A3', 'CFLF29883'),
(62, '2024-07-22', '02:27:43', '3M EMILE ZOLA', 0, '', '385S', 'A4', '70156PLM1CNWT'),
(63, '2024-07-22', '02:28:14', '3M MIBI', 0, '', '2505AC', 'A3', 'CGCG57163'),
(64, '2024-07-22', '02:31:55', '3M MIBI', 0, '', '2508A', 'A3', 'CGCG62238'),
(65, '2024-07-22', '02:35:06', '3M JUNON 3EME ETAGE', 0, '', '3008A', 'A3', 'CGCG65159'),
(66, '2024-07-22', '02:35:32', '3M EMILE ZOLA', 0, '', '3005AC', 'A3', 'CFDG56721'),
(67, '2024-07-22', '02:37:52', '3M EMILE ZOLA', 0, '', '385S', 'A4', '70156PLM1GNXB'),
(68, '2024-07-22', '02:38:48', '3M JUNON 6eme ETAGE', 0, '', '2505AC', 'A3', 'CGCG57308'),
(69, '2024-07-22', '02:39:41', '3M EMILE ZOLA', 0, '', '385S', 'A4', '70156PLM1CNPL'),
(70, '2024-07-22', '02:40:26', '3M JUNON 1er ETAGE', 0, '', '3005AC', 'A3', 'CFDG56749'),
(71, '2024-07-22', '02:41:20', '3M EMILE ZOLA', 0, '', '385S', 'A4', '70156PLM1CNW2'),
(72, '2024-07-22', '02:42:31', '3M COLLECTIVE VENDARGUES', 0, '', '2809A', 'A3', 'CLKF18061'),
(73, '2024-07-22', '02:43:01', 'ENSAD', 0, '', '2505AC', 'A3', 'CFJF62912'),
(74, '2024-07-22', '02:44:03', 'BOUMEDIENE', 0, '', '338CS', 'A4', '752912724D8BH'),
(75, '2024-07-22', '02:44:37', 'EVENT 114', 0, '', '330AC', 'A4', 'CRHL26156'),
(76, '2024-07-22', '02:45:05', 'MOGAY AMAL', 0, '', '330AC', 'A4', 'CRKL28623'),
(77, '2024-07-22', '02:45:35', 'UNIVERSAL FIBER', 0, '', '2010AC', 'A3', 'CNHL18465'),
(78, '2024-07-22', '02:46:03', 'TORENOV', 0, '', '2010AC', 'A3', 'CNLJ24315');

-- --------------------------------------------------------

--
-- Table structure for table `imageunit`
--

CREATE TABLE IF NOT EXISTS `imageunit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `name` varchar(255) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `imageunit`
--

INSERT INTO `imageunit` (`id`, `date`, `time`, `name`, `ref`, `quantity`) VALUES
(1, '2022-07-22', '20:21:35', '409s', 'OD-409W-NR', 2);

-- --------------------------------------------------------

--
-- Table structure for table `livrasion`
--

CREATE TABLE IF NOT EXISTS `livrasion` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `machine` varchar(50) NOT NULL,
  `type` varchar(11) NOT NULL,
  `ref` varchar(50) NOT NULL,
  `quantity` int(10) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `livrasion`
--

INSERT INTO `livrasion` (`ID`, `name`, `machine`, `type`, `ref`, `quantity`, `date`, `time`) VALUES
(13, 'Elaf', '', 'Cartouche', 'T-FC505E-C', 2, '2022-07-26', '19:34:45'),
(14, 'FAMILY MARKET', '', 'Cartouche', 'T-FC210E-M', 6, '2026-07-22', '19:37:09'),
(16, 'AXA SCHRAP', '', 'Cartouche', 'T-FC210E-M', 2, '2026-07-22', '19:47:24'),
(17, 'AGOSS SECURITY', '', 'Cartouche', 'T-3008E', 1, '2026-07-22', '20:26:51'),
(18, 'AGOSS SECURITY', '', 'Cartouche', 'T-409E-R', 2, '2026-07-22', '20:27:50'),
(19, 'AL BARAKA SUD', '', 'Tonerbag', 'TB-FC505', 1, '2026-07-22', '22:47:29'),
(20, 'INEOSURF', '', 'cartouche', 'T-FC210E-Y', 1, '2027-07-22', '10:54:29');

-- --------------------------------------------------------

--
-- Table structure for table `tonerbag`
--

CREATE TABLE IF NOT EXISTS `tonerbag` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `name` varchar(25) NOT NULL,
  `ref` varchar(255) NOT NULL,
  `quantity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=armscii8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tonerbag`
--

INSERT INTO `tonerbag` (`id`, `date`, `time`, `name`, `ref`, `quantity`) VALUES
(1, '2022-07-22', '19:59:33', '2010AC', 'TB-FC30', 17),
(2, '2022-07-22', '20:01:42', '2505AC', 'TB-FC505', 4),
(3, '2022-07-22', '20:02:22', '338cs', 'TB-FC338', 4),
(4, '2022-07-22', '20:03:16', '389cs', 'TB-FC389', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
