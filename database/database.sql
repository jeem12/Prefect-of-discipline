-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2023 at 06:50 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--
CREATE DATABASE IF NOT EXISTS `db_test` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_test`;

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `birthdate` date NOT NULL,
  `added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Truncate table before insert `authors`
--

TRUNCATE TABLE `authors`;
--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `first_name`, `last_name`, `email`, `birthdate`, `added`) VALUES
(102, 'dsa', 'da', 'asdasd', '2023-02-11', '2023-02-10 20:43:53'),
(103, '1231', '123', '23123', '0013-03-12', '2023-02-10 21:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `img_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `images`
--

TRUNCATE TABLE `images`;
--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `img_name`) VALUES
(1, 'IMG-63f3aa67d6d235.65657711.jpg'),
(2, 'IMG-63f3af45858966.92062828.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `podms_calendar`
--

CREATE TABLE `podms_calendar` (
  `event_id` int(11) NOT NULL,
  `event_name` varchar(255) NOT NULL,
  `event_id_num` varchar(255) NOT NULL,
  `event_date` varchar(255) DEFAULT NULL,
  `event_time` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Truncate table before insert `podms_calendar`
--

TRUNCATE TABLE `podms_calendar`;
-- --------------------------------------------------------

--
-- Table structure for table `podms_duty`
--

CREATE TABLE `podms_duty` (
  `id` int(100) NOT NULL,
  `id_number` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `inci_desc` varchar(255) NOT NULL,
  `inci_date` varchar(255) NOT NULL,
  `inci_time` varchar(255) NOT NULL,
  `violation_level` varchar(255) NOT NULL,
  `violation` varchar(255) NOT NULL,
  `duties` varchar(255) NOT NULL,
  `duty_start` time NOT NULL,
  `duty_end` time NOT NULL,
  `duty_location` varchar(255) NOT NULL,
  `status` int(6) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `podms_duty`
--

TRUNCATE TABLE `podms_duty`;
-- --------------------------------------------------------

--
-- Table structure for table `podms_events`
--

CREATE TABLE `podms_events` (
  `id` int(11) NOT NULL,
  `complainant_id_number` int(11) NOT NULL,
  `complainant_first_name` varchar(255) NOT NULL,
  `complainant_middle_name` varchar(255) NOT NULL,
  `complainant_last_name` varchar(255) NOT NULL,
  `complainant_course` varchar(255) NOT NULL,
  `complained_id_number` int(11) NOT NULL,
  `complained_first_name` varchar(255) NOT NULL,
  `complained_middle_name` varchar(255) NOT NULL,
  `complained_last_name` varchar(255) NOT NULL,
  `complained_course` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `podms_events`
--

TRUNCATE TABLE `podms_events`;
--
-- Dumping data for table `podms_events`
--

INSERT INTO `podms_events` (`id`, `complainant_id_number`, `complainant_first_name`, `complainant_middle_name`, `complainant_last_name`, `complainant_course`, `complained_id_number`, `complained_first_name`, `complained_middle_name`, `complained_last_name`, `complained_course`, `status`, `description`, `title`, `start`, `end`, `time`) VALUES
(51, 7091235, 'quasi', 'officia', 'modi', '', 0, 'maiores', 'non', 'officia', '', 0, '', 'Meeting', '2023-01-09', '2023-01-09', '18:22:00'),
(84, 992730, 'quis', 'reprehenderit', 'maiores', '', 0, 'qui', 'dolor', 'sapiente', '', 0, '', 'Meeting', '2023-02-07', '2023-02-07', '17:52:00'),
(44, 842828196, 'commodi', 'deserunt', 'soluta', '', 2, 'alias', 'voluptatem', 'voluptatibus', '', 0, '', 'Meeting', '2023-02-23', '2023-02-23', '15:53:00'),
(3, 0, 'architecto', 'quasi', 'dolor', '', 655, 'ab', 'nostrum', 'dicta', '', 4, 'asdas', 'Meeting', '2023-02-16', '2023-02-16', '18:18:00'),
(75, 746, 'eaque', 'minus', 'nemo', '', 25815385, 'aperiam', 'est', 'qui', '', 0, 'dada', 'Meeting', '2023-02-16', '2023-02-16', '15:23:00'),
(77, 0, 'inventore', 'quod', 'non', '', 2368, 'aperiam', 'rerum', 'harum', '', 0, 'dada', 'Meeting', '2023-02-16', '2023-02-16', '15:23:00'),
(28, 58, 'maxime', 'quaerat', 'quo', '', 629, 'architecto', 'et', 'cumque', '', 0, '', 'Meeting', '2023-02-16', '2023-02-16', '15:27:00');

-- --------------------------------------------------------

--
-- Table structure for table `podms_profiling`
--

CREATE TABLE `podms_profiling` (
  `id` int(100) NOT NULL,
  `id_number` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `inci_desc` varchar(255) NOT NULL,
  `inci_date` varchar(255) NOT NULL,
  `inci_time` varchar(255) NOT NULL,
  `violation_level` varchar(255) NOT NULL,
  `violation` varchar(255) NOT NULL,
  `duties` varchar(255) NOT NULL,
  `duty_start` time NOT NULL,
  `duty_end` time NOT NULL,
  `duty_location` varchar(255) NOT NULL,
  `status` int(6) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `podms_profiling`
--

TRUNCATE TABLE `podms_profiling`;
--
-- Dumping data for table `podms_profiling`
--

INSERT INTO `podms_profiling` (`id`, `id_number`, `first_name`, `middle_name`, `last_name`, `course`, `inci_desc`, `inci_date`, `inci_time`, `violation_level`, `violation`, `duties`, `duty_start`, `duty_end`, `duty_location`, `status`, `image_name`, `date`) VALUES
(20, 33046, 'Tom', 'Allard', 'Braden', 'Forces Stores ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(21, 66942, 'Eunice', 'Lindquist', 'Doucette', 'Everyday ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(23, 42114, 'Micheline', 'Mccue', 'Casas', 'Migration Industries Corporation', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(24, 44189, 'Shondra', 'Calabrese', 'Myles', 'Township A.G', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(25, 81467, 'Collene', 'Earl', 'Westmoreland', 'Exports Stores Company', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(26, 83280, 'Kecia', 'Lock-Parsons', 'Sheets', 'Chase Energy SIA', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(27, 77975, 'Johnny', 'Dayton', 'Hardison', 'Youth Software B.V', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(28, 22323, 'Mertie', 'Cowart', 'Andrus-Mcguire', 'Affair Stores Ltd', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(30, 78412, 'Valarie', 'Hurtado', 'Seaton', 'Impact Energy GmbH', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(31, 88545, 'Ezequiel', 'Bussey', 'Shah', 'Sharp Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(33, 89753, 'Vickey', 'Zeigler', 'Glass', 'Tanzania Software Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(34, 86966, 'Delila', 'Burr', 'Shipman', 'Constitutional Energy A.G', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(35, 50448, 'Kristi', 'Bounds', 'Dolan-Schwab', 'Width International S.A', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(36, 77687, 'Tomasa', 'Cook', 'Hughey', 'Workflow Holdings SIA', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(37, 20043, 'Lieselotte', 'Ballinger', 'Gainey', 'Tend Stores B.V', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(38, 66375, 'Iris', 'Spruill', 'Gaytan', 'Dubai ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(39, 59564, 'Carolyn', 'Street', 'Nutter', 'Before GmbH', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(40, 90120, 'Norbert', 'Drury', 'Lomax', 'Reaction Stores Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(41, 68761, 'Vincenzo', 'Talbot', 'Diggs', 'Cruises Industries Corporation', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(42, 64203, 'Nikole', 'Chacon', 'Michaels', 'January Mutual S.A', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(43, 14230, 'Edith', 'Hartley', 'Caro', 'Grass ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(44, 20167, 'Demarcus', 'Nye', 'Caswell', 'Tom Software Corp', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(45, 48135, 'Davis', 'Jameson', 'Scholl', 'Projected Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(46, 62296, 'Hettie', 'Peterman', 'Poirier', 'Dishes Energy Corp', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(47, 21812, 'Laurel', 'Romero', 'Albers', 'Invest Stores LLC', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(48, 29481, 'Jung', 'Alvarez', 'Whitt', 'Queensland Industries SIA', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(49, 33947, 'Charlott', 'Christianson', 'Varela', 'Bo International ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(51, 64952, 'Kenyetta', 'Creech', 'Bone', 'Premiere Software ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(52, 70275, 'Josefine', 'Newsome', 'Lemons', 'Sigma Industries Pte. Ltd', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(54, 27953, 'Stephania', 'Minter', 'Dempsey', 'Football Holdings Corp', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(55, 65744, 'Brian', 'Dover', 'Jansen', 'Miller ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(56, 55559, 'Renata', 'Morley', 'Chalmers', 'Louisiana Holdings B.V', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(57, 81325, 'Sunny', 'Navarrete', 'Mccaskill', 'Cabin International ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(58, 51260, 'Carl', 'Hayden', 'Maddox', 'Bluetooth Pte. Ltd', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(59, 41497, 'Maire', 'Fincher', 'Robert', 'Ll A.G', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(60, 99947, 'David', 'Harrison', 'Jones', 'Informed B.V', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(61, 47033, 'Rick', 'Bittner-Preston', 'Ogden', 'Comments Corp', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(62, 75724, 'Harmony', 'Waldron', 'Ritchey-Parr', 'Temporal International ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(63, 62881, 'Harlan', 'Niles', 'Hardwick', 'Peaceful Stores B.V', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(66, 57381, 'Hanh', 'Nation', 'Slayton', 'Movies Industries A.G', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(67, 95870, 'Anneliese', 'Talley', 'Hayden', 'Carb B.V', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(69, 49278, 'Mickie', 'Burt', 'Runyon', 'Albany International ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(72, 51826, 'Santos', 'Harwood', 'Bechtel', 'Need Holdings Corp', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(73, 37175, 'Renae', 'Conte', 'Key', 'Improved International Pte. Ltd', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(74, 68553, 'Reginald', 'Nesbitt', 'Gaytan', 'Bias Stores GmbH', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(75, 94742, 'Charisse', 'Ashworth', 'Richter', 'Humanitarian ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(76, 79369, 'Tristan', 'Burden', 'Mulligan', 'Shore Industries LLC', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(77, 48560, 'Kevin', 'Derrick', 'Ingle-Castaneda', 'Proprietary Industries Corp', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(78, 93593, 'Kenya', 'Maclean', 'Merrick', 'Yourself Stores ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(79, 28668, 'Barabara', 'Bowles', 'Snowden', 'Effectiveness ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(80, 52570, 'Boyce', 'Boston', 'Carlin', 'Equilibrium Pte. Ltd', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(81, 71157, 'Hugo', 'Ketchum', 'Little', 'Suited International SIA', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(82, 50944, 'Lilla', 'French', 'Chism', 'Josh ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(83, 90674, 'Mabelle', 'Dietrich-Mosby', 'Wooldridge', 'Walks Mutual Pte. Ltd', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(84, 43295, 'Krystin', 'Snipes-Kearns', 'Tam', 'Costumes Mutual ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(85, 69237, 'Colby', 'Mesa', 'Bagley', 'Brandon Software A.G', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(87, 55595, 'Larry', 'Mickens', 'Jackman', 'Urgent International A.G', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(89, 96319, 'Chandra', 'Devore', 'Thorne', 'Conclusion GmbH', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(90, 69709, 'Rigoberto', 'Mabry', 'Concepcion', 'Heaven ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(91, 88598, 'Malka', 'Stillwell', 'Tomlinson', 'Insider Holdings Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(92, 40621, 'Chan', 'Taber', 'Van', 'Bmw Software GmbH', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(93, 75388, 'Bernice', 'Lehmann', 'Hicks', 'Horizon Corporation', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(94, 22573, 'Buck', 'Dube', 'Waldrop', 'Programmer ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(96, 84424, 'Noble', 'Wallace', 'Jacks', 'Wishes Mutual Corp', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(97, 42689, 'Lyla', 'Smallwood', 'Mackay', 'Worry Stores Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(99, 29622, 'Tilda', 'Maggard', 'Loftin', 'Consist Software ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(100, 56109, 'Marcelene', 'Harr', 'Allred', 'Assistant Pte. Ltd', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(101, 49486, 'Dell', 'Davis', 'Sneed', 'Informal International Corp', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(102, 96095, 'George', 'Beall', 'Fleck', 'Prix Software ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(104, 54475, 'Heide', 'Jimenez', 'Stacy', 'Mason Software Corporation', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(105, 86754, 'Aurore', 'Tyner', 'Leach', 'Grant Corporation', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(106, 46462, 'Wanda', 'Jacobson', 'Sanders', 'Quote Industries ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(107, 56406, 'Loren', 'Mello', 'Holcomb', 'Developer ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(108, 50426, 'Norene', 'Doughty', 'Ventura', 'Fleet Mutual Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(109, 35666, 'Zack', 'Sides', 'Beaudoin', 'Zum Energy Company', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(112, 96890, 'Francisco', 'Arriola', 'Welker', 'Burke Holdings ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(113, 95921, 'Robbie', 'Velez', 'Espino', 'Christopher Energy GmbH', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(115, 63705, 'Yan', 'Gardner', 'Raynor-Bedard', 'Trader Software LLC', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(116, 96517, 'Ema', 'Partridge', 'Prince', 'Guild Company', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(117, 66997, 'Geneva', 'Laster', 'Ring', 'Forth Software S.A', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(118, 17003, 'Angelo', 'Hartnett', 'Fortney', 'Harvey Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(119, 44228, 'Charlyn', 'Winston-Wagoner', 'Levy', 'Voluntary Energy Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(120, 23590, 'Caryl', 'Collette', 'Connolly', 'Smart International GmbH', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(121, 82552, 'Thersa', 'Grenier', 'Conner', 'Quiz Industries A.G', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(122, 51508, 'Katherina', 'Catlett', 'Sowell', 'Partnership Software Corporation', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(123, 74181, 'Stuart', 'Huerta', 'Hicks', 'Minnesota LLC', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(125, 25608, 'Shakira', 'Holloway', 'Washburn', 'Formerly Industries ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(126, 68641, 'August', 'Mcwhorter', 'Barnes', 'Missile Software Ltd', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(127, 56760, 'Corene', 'Westfall', 'Oconnell', 'Downloading Holdings Ltd', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(128, 99691, 'Kym', 'Ojeda', 'Abner', 'Undo International LLC', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(129, 65157, 'Kylee', 'Deleon', 'Peel', 'Hyundai Stores B.V', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(130, 22909, 'Candra', 'Ramon', 'Escobar', 'Moscow Holdings LLC', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(131, 34060, 'Kermit', 'Corona', 'Grooms', 'Combination Energy B.V', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(132, 66109, 'Karly', 'Sumpter', 'Cushing', 'Friendship Energy ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(133, 88501, 'Shaunte', 'Ott', 'Godinez', 'Medical Mutual ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(134, 87876, 'Demetrius', 'Stitt', 'Steffen', 'Endless ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(135, 46890, 'Stefania', 'Power', 'Amundson', 'Catalogue Mutual Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(137, 83234, 'Arnette', 'Armenta', 'Jackson', 'Betty Stores SIA', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(138, 86066, 'Bethann', 'Strauss', 'Torres', 'Pharmaceuticals ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(139, 49755, 'Treasa', 'Swann', 'Dorn', 'Sonic ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(141, 30314, 'Jaime', 'Dobson', 'Zambrano', 'Wheels Energy Corporation', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(142, 78185, 'Michel', 'Matson', 'Gustafson', 'Walked ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(143, 31430, 'Dorene', 'Woodall', 'Keeton', 'Governance Mutual ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(144, 49841, 'Adan', 'Fay', 'Hayward', 'Promising Holdings ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(145, 98813, 'Silva', 'Irving', 'Settles-Hyde', 'Consumers Software ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(146, 85884, 'Jenelle', 'Labonte', 'Bollinger', 'Computers Corporation', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(147, 63705, 'German', 'Weddle', 'Her', 'Cowboy B.V', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(148, 64365, 'Estelle', 'Jaramillo', 'Herbert', 'Creations Industries Company', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(149, 40494, 'Dortha', 'Buffington-Grogan', 'Mcconnell', 'Motion Software B.V', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(150, 94349, 'Teressa', 'Kunz', 'Pace', 'Lodge Industries ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(151, 98982, 'Graham', 'Blalock', 'Mcmahan', 'Ours Software Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(153, 45544, 'Lashawnda', 'Mahoney', 'Broussard', 'Stone International GmbH', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(154, 27363, 'Robyn', 'Tyree', 'Sadler', 'Apollo Mutual Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(155, 84668, 'Raye', 'Schilling', 'Baron', 'Les Holdings Corp', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(158, 68552, 'Tonda', 'Olvera-Kroll', 'Labonte', 'Included SIA', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(159, 69106, 'Corazon', 'Herbert', 'Adair', 'Self Corporation', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(160, 56283, 'Dacia', 'Reyna', 'Broadway', 'Political Software Inc', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(161, 26888, 'Shani', 'Gamboa', 'Barbee', 'Contains Software ', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(162, 30046, 'Linsey', 'Tran', 'Mccloskey', 'Oxide Energy S.A', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(163, 19016512, 'jm', 'zerna', 'escobar', 'bsit', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(164, 19016512, 'johnmark', 'zerna', 'escobar', 'bsit', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(165, 12312312, 'asdasdsadad', 'asdasd', 'asdasdasd', 'asdasdasdas', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(166, 5615645, 'asdasd', 'dasdasdasdas', 'asdasdas', 'bashdbhjkasd', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(167, 21312, 'asdasd', 'asdas', 'dadas', 'dasdas', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(168, 21312, 'asdasd', 'asdas', 'dadas', 'dasdas', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(169, 12312312, 'dadas', 'dasdas', 'asdas', 'asdasd', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(170, 2147483647, '12313', '123123', '12312', '31231231', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(171, 123123, '123123', '123123', '123123', '123123', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(172, 123123, '1asdas', 'dasd', 'asd', 'asdasd', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(173, 123123, '1231232', '131231', '321312321', '32131312', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(174, 12312312, '123', '12312312', '31232', '1312312', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(175, 123123, '12312', '31231', '321', '12312312', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(177, 2147483647, 'asdasd', 'asd', 'dasd', 'asdas', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(178, 19016512, 'jmjmjm new', 'zerna', 'escobar', 'bsit', 'vandalism ', '2023-02-17', '22:13', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-10'),
(179, 12321312, 'asdasda', 'dasd', 'asdas', 'dasdasdas', 'dasdasd', '2023-02-10', '15:17', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-11'),
(180, 21312, 'dassda', 'asdas', 'asdasd', 'asdasdas', 'asdasdas', '2023-02-16', '03:14', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-11'),
(186, 1231231312, '3new', 'ewqqq', 'ewqqq', 'ewqqq', 'ewqqq', '2023-02-11', '03:28', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-11'),
(188, 2147483647, 'qweqw', 'eqweqw', 'weqewqeqw', '2123121312', '312312321123', '123123-12-23', '12:31', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-11'),
(191, 12312312, 'asdqw', 'dqwd', 'asda', 'asdas', 'dasdda', '2020-03-12', '22:55', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-11'),
(197, 123123, 'qweqw', 'eqwe', 'qweqw', 'eqweqwe', 'qweqweqw', '2023-02-03', '03:33', '', '', '', '00:00:00', '00:00:00', '', 0, '', '2023-02-14'),
(198, 12312312, 'dasd', 'da', 'dada', 'asdasd', 'asdas', '2023-02-08', '03:35', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-14'),
(199, 12312, '312312', '313', '131', '3131', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-17'),
(200, 123123, 'asdasd', 'sadas', 'dasd', 'asdsadad', '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-17'),
(201, 1312312, 'qweqweqwewqeq', 'eqw', 'eqeq', 'eqe', 'qweqweq', '2023-02-17', '02:06', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-02-17');

-- --------------------------------------------------------

--
-- Table structure for table `podms_records`
--

CREATE TABLE `podms_records` (
  `id` int(100) NOT NULL,
  `id_number` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `inci_desc` varchar(255) NOT NULL,
  `inci_date` varchar(255) NOT NULL,
  `inci_time` varchar(255) NOT NULL,
  `violation_level` varchar(255) NOT NULL,
  `violation` varchar(255) NOT NULL,
  `duties` varchar(255) NOT NULL,
  `duty_start` time NOT NULL,
  `duty_end` time NOT NULL,
  `duty_location` varchar(255) NOT NULL,
  `status` int(6) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `podms_records`
--

TRUNCATE TABLE `podms_records`;
--
-- Dumping data for table `podms_records`
--

INSERT INTO `podms_records` (`id`, `id_number`, `first_name`, `middle_name`, `last_name`, `course`, `inci_desc`, `inci_date`, `inci_time`, `violation_level`, `violation`, `duties`, `duty_start`, `duty_end`, `duty_location`, `status`, `image_name`, `date`) VALUES
(70, 14252, 'Merlin', 'Schumacher', 'Gibbs', 'Fashion Corporation', '', '', '', 'major', 'DOLOREM ID CORRUPTI OMNIS VITAE EST UT TEMPORIBUS.', 'community service, duty', '02:37:00', '02:37:00', 'Canteen', 3, 'IMG-63f3bddb6ad062.45589944.jpg', '2023-02-10'),
(110, 17572, 'Jamila', 'Reeves', 'Edgar', 'Blond International A.G', '', '', '', 'grave', 'DOLOREM ID CORRUPTI OMNIS VITAE EST UT TEMPORIBUS.', 'community service, duty', '02:19:00', '02:19:00', 'Canteen', 3, 'IMG-63f3b9b3c045a5.74382481.jpg', '2023-02-10'),
(111, 15450, 'Harriett', 'Dugger', 'Whiteside', 'Rc Software ', '', '', '', 'grave', 'DOLOREM ID CORRUPTI OMNIS VITAE EST UT TEMPORIBUS.', 'community service, duty', '02:18:00', '02:18:00', 'Canteen', 3, 'IMG-63f3b98133bd39.31892445.jpg', '2023-02-10'),
(114, 15232, 'Brittny', 'Sturdivant-Caban', 'Reiss', 'As International A.G', '', '', '', 'minor', 'vandalismaa', 'community service, duty', '02:03:00', '02:03:00', 'Canteen', 3, 'IMG-63f3b5f069da36.35382806.jpg', '2023-02-10'),
(181, 21312, 'asda', 'sdas', 'dasd', 'asdasd', 'asdasdasdas', '2023-02-23', '03:18', 'grave', 'vandalism', 'community service, duty', '02:19:00', '02:19:00', 'Canteen', 3, 'IMG-63f3b9d284e337.23556531.jpg', '2023-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `podms_reports`
--

CREATE TABLE `podms_reports` (
  `id` int(11) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp(),
  `from` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `podms_reports`
--

TRUNCATE TABLE `podms_reports`;
--
-- Dumping data for table `podms_reports`
--

INSERT INTO `podms_reports` (`id`, `date`, `from`, `description`, `content`, `status`) VALUES
(1, '2022-12-05', 'GUIDANCE', 'Guidance sent you a notification', 'Need to report in our office', 1),
(2, '2022-12-05', 'Safety and security', 'Safety and security sent you a notification', 'Need to report in our office', 1),
(3, '2023-01-21', 'SAS', 'DESCP1', 'CONTENT1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `podms_sp_appointment`
--

CREATE TABLE `podms_sp_appointment` (
  `id` int(11) NOT NULL,
  `complainant_id_number` int(11) NOT NULL,
  `complainant_first_name` varchar(255) NOT NULL,
  `complainant_middle_name` varchar(255) NOT NULL,
  `complainant_last_name` varchar(255) NOT NULL,
  `complainant_course` varchar(255) NOT NULL,
  `complained_id_number` int(11) NOT NULL,
  `complained_first_name` varchar(255) NOT NULL,
  `complained_middle_name` varchar(255) NOT NULL,
  `complained_last_name` varchar(255) NOT NULL,
  `complained_course` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `description` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `start` date DEFAULT NULL,
  `end` date DEFAULT NULL,
  `time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Truncate table before insert `podms_sp_appointment`
--

TRUNCATE TABLE `podms_sp_appointment`;
--
-- Dumping data for table `podms_sp_appointment`
--

INSERT INTO `podms_sp_appointment` (`id`, `complainant_id_number`, `complainant_first_name`, `complainant_middle_name`, `complainant_last_name`, `complainant_course`, `complained_id_number`, `complained_first_name`, `complained_middle_name`, `complained_last_name`, `complained_course`, `status`, `description`, `title`, `start`, `end`, `time`) VALUES
(2, 72418, 'sit', 'nobis', 'et', '', 4, 'et', 'culpa', 'quis', '', 0, 'Est architecto dolor laborum quaerat excepturi aut. Illum sit fugit aut et quia unde. Cupiditate et voluptatem perspiciatis odit eius.', 'Ipsum praesentium laborum omnis cumque.', '1972-04-19', '2012-07-06', '04:46:48'),
(4, 339883, 'culpa', 'nobis', 'quae', '', 14090, 'consequatur', 'modi', 'sit', '', 0, 'Quia et dolorem dolor dignissimos assumenda non. Sit voluptatibus eum accusantium dolore sit et architecto. Aliquam veniam ut laborum repellendus molestiae. Fugiat labore nam sit odio tempora. Veritatis sit et labore aliquid ut ipsum.', 'In autem non quas id voluptas deleniti blanditiis.', '1980-05-17', '1985-10-17', '00:25:32'),
(5, 93, 'in', 'amet', 'earum', '', 5, 'consequatur', 'est', 'velit', '', 0, 'Maiores adipisci quisquam veniam facere sed iste. Voluptates alias nobis magni accusamus qui sapiente expedita.', 'Deserunt doloremque vel est harum dolores quia vero voluptas.', '2001-04-25', '1993-06-03', '11:32:33'),
(7, 633014568, 'magni', 'magnam', 'omnis', '', 13, 'necessitatibus', 'et', 'in', '', 0, 'Earum rerum et soluta magnam id. Dicta amet illo odio quaerat omnis. Magni vel sed sint ea voluptatibus nihil.', 'Qui quidem animi ut sequi quos.', '1978-01-29', '1982-12-16', '14:42:57'),
(8, 48353876, 'consequatur', 'omnis', 'modi', '', 95243, 'excepturi', 'praesentium', 'sit', '', 0, 'Quia alias id accusantium omnis. Cumque quae sunt laborum iste non. Sit libero cum atque hic perspiciatis accusantium vel.', 'Est odio omnis commodi illo qui unde velit enim.', '1975-01-08', '2000-02-16', '15:12:04'),
(9, 8573610, 'quia', 'consequuntur', 'aliquid', '', 8, 'laborum', 'dolorem', 'sed', '', 0, 'Occaecati aliquid ducimus exercitationem. Nesciunt aperiam autem voluptas consequatur odit. Itaque soluta aut accusamus quae quos aut temporibus voluptatibus.', 'Ut quia nobis placeat ea illum.', '1982-07-03', '1982-04-05', '01:09:31'),
(11, 26, 'reiciendis', 'reprehenderit', 'hic', '', 1, 'quis', 'et', 'natus', '', 0, 'Sapiente beatae beatae corrupti sit sunt. Facilis earum voluptas culpa porro. Sapiente natus est odit eveniet repellendus est non voluptates. Ipsa consequatur est delectus ut ipsa.', 'Ullam id sint illo.', '1970-12-27', '1982-08-03', '12:16:11'),
(12, 11213513, 'earum', 'et', 'ipsum', '', 910351393, 'at', 'excepturi', 'officiis', '', 0, 'Et numquam et est. Alias possimus et et qui eius et. Eaque placeat natus quia eveniet. Facere error aut et et architecto.', 'Aut molestiae ad deserunt voluptate laudantium nulla.', '2008-02-14', '1971-05-01', '15:19:49'),
(13, 3856565, 'fugiat', 'iusto', 'excepturi', '', 16, 'et', 'ab', 'et', '', 0, 'Mollitia distinctio voluptatem explicabo eaque consectetur perspiciatis. Odit facilis omnis nemo assumenda voluptate quas. Libero enim eos aperiam sint illum placeat. Cum perferendis dolor exercitationem. Pariatur totam nostrum eos quidem dolor voluptas m', 'Qui nemo impedit doloremque cupiditate.', '2010-06-10', '2019-01-31', '20:03:55'),
(14, 20951, 'consequatur', 'magnam', 'architecto', '', 483078842, 'odio', 'fuga', 'sed', '', 0, 'Voluptatum sit placeat eum ut. Laboriosam est quam perspiciatis consequatur.', 'In sint consequatur suscipit repudiandae modi velit libero.', '2016-04-08', '1971-12-01', '19:03:07'),
(15, 679931208, 'repellat', 'dolorum', 'iure', '', 905727172, 'voluptate', 'rem', 'nobis', '', 0, 'Odio magnam dolor id cum qui rerum. Qui voluptas sint voluptatem sit. Quo ullam non atque expedita. Odit rerum voluptate enim voluptas quibusdam consequatur fugit facere.', 'Distinctio adipisci commodi a consequatur.', '1992-06-25', '2014-04-13', '04:00:04'),
(16, 9, 'fuga', 'adipisci', 'magni', '', 2, 'ullam', 'voluptates', 'blanditiis', '', 0, 'Nemo reiciendis aut iure inventore quas. Laboriosam temporibus qui modi ratione. Id voluptate omnis provident autem quas dolor tempora. Blanditiis voluptatem et aperiam ipsam dolorem corporis sit.', 'Voluptas cumque enim ut deserunt.', '1986-02-02', '1988-11-13', '22:05:20'),
(17, 48732684, 'esse', 'laboriosam', 'quisquam', '', 984, 'ex', 'et', 'nulla', '', 0, 'Distinctio magnam non eos itaque. Quo et et velit distinctio.', 'In quaerat quae magnam atque molestiae iusto.', '1986-04-14', '1976-01-01', '19:17:38'),
(18, 209357918, 'facilis', 'praesentium', 'ut', '', 4173, 'quia', 'magnam', 'vel', '', 0, 'Sit illum autem provident maxime ab voluptatem. Harum nisi delectus architecto illo libero ut. Blanditiis quo cupiditate eum aspernatur vel sit eveniet. Aut porro porro corporis.', 'Unde at molestiae aut molestiae quam beatae.', '1982-06-22', '2002-06-05', '23:46:09'),
(19, 37069, 'est', 'a', 'laudantium', '', 73445669, 'quod', 'maxime', 'qui', '', 0, 'Odit commodi mollitia quisquam inventore autem provident. Ipsum a delectus harum sed et repellat et. Dignissimos ut porro suscipit ipsum provident quod et quisquam.', 'Eum harum ea quos dolor.', '1974-03-15', '2001-02-01', '09:05:36'),
(20, 3136002, 'laboriosam', 'sit', 'perferendis', '', 343167920, 'ut', 'non', 'doloremque', '', 0, 'Sunt nobis numquam veniam nulla quia ut. Alias laboriosam ut aspernatur ut quia veniam corrupti dolore. Repellendus laborum enim repudiandae voluptas quae.', 'Molestias soluta libero numquam voluptatibus ullam.', '2014-03-01', '2000-02-22', '20:30:35'),
(21, 0, 'alias', 'provident', 'quia', '', 3, 'facilis', 'qui', 'laboriosam', '', 0, 'Necessitatibus dicta alias doloremque minus necessitatibus. Quibusdam consectetur voluptate omnis nobis eligendi. Minus est autem consequatur in quos. Quis minus sequi aspernatur ab eos a.', 'Dolor beatae sunt tempora dolorem non eius porro qui.', '1984-07-14', '2003-01-13', '19:22:19'),
(22, 521448, 'sunt', 'sed', 'fugiat', '', 44465025, 'necessitatibus', 'voluptatem', 'sunt', '', 0, 'Ab voluptas sed quaerat dolores. Ut est est distinctio omnis aut facere autem. Omnis ea maiores molestiae numquam deleniti quis et.', 'Aliquid et unde et aspernatur molestiae quasi.', '2008-03-24', '1997-12-17', '02:12:39'),
(23, 0, 'non', 'eligendi', 'laboriosam', '', 885944752, 'repellendus', 'porro', 'illum', '', 0, 'Aut quis nesciunt esse omnis. Est assumenda magni provident architecto quam omnis eligendi saepe. Soluta quae sapiente eum quisquam. Eum quia perspiciatis ipsam quae.', 'Rerum ratione qui vel aut quibusdam vel voluptatem.', '1990-04-06', '2016-10-14', '20:54:43'),
(24, 23, 'voluptas', 'cumque', 'et', '', 591, 'reiciendis', 'omnis', 'dolores', '', 0, 'Est quibusdam officia eos soluta nulla rerum est ratione. Error odit doloremque rerum veniam animi est quos. Sint magnam laborum dolorum ipsa sed. Tempore voluptatem consequatur quae vel ratione dolores.', 'Odio mollitia in rerum officia repellat in.', '2014-10-14', '1985-07-28', '12:34:22'),
(25, 77134143, 'debitis', 'sint', 'atque', '', 77, 'sit', 'non', 'fugiat', '', 0, 'Dolores cupiditate quo tempora quidem qui. Sint aut nostrum sit soluta.', 'Eius nihil facilis nihil autem minima qui.', '2014-01-05', '2009-03-18', '00:34:25'),
(26, 0, 'optio', 'hic', 'perspiciatis', '', 45196, 'quia', 'hic', 'non', '', 0, 'Dicta est nihil ut voluptas voluptatem voluptas aut. Quasi rerum tempora ut necessitatibus. Quisquam quaerat necessitatibus dolor in quas repellendus quam.', 'Commodi molestiae expedita et inventore.', '2011-04-01', '2006-03-14', '14:21:30'),
(27, 435413429, 'perspiciatis', 'est', 'minima', '', 244677237, 'odio', 'ut', 'in', '', 0, 'Corporis est vero sed. Corrupti consequatur pariatur ad fuga dolores saepe et. Ea est soluta aperiam non dolor deserunt. Autem dolorum voluptatem culpa quo.', 'Placeat quis illo dolorem eum ea quia.', '1978-05-28', '1988-06-13', '16:43:28'),
(29, 135377958, 'saepe', 'cupiditate', 'ratione', '', 58273, 'culpa', 'fugit', 'quo', '', 0, 'Facilis et quo ipsa quisquam quibusdam dolor occaecati. Possimus doloremque odio enim aliquid possimus sequi hic. Est rem asperiores ratione quia mollitia et.', 'Quo et aut ea soluta occaecati dicta.', '2018-06-20', '1977-07-03', '13:13:11'),
(30, 928682, 'laudantium', 'ea', 'provident', '', 975699214, 'delectus', 'excepturi', 'quod', '', 0, 'Ut fugiat porro est. Impedit eos voluptatem reiciendis sed ut quibusdam. Omnis beatae consequatur veritatis.', 'Et et eos id.', '2001-05-19', '2001-12-16', '04:06:57'),
(31, 727980402, 'est', 'quia', 'ipsum', '', 97, 'recusandae', 'aliquam', 'illum', '', 0, 'Nesciunt vel iure aut unde. Earum qui omnis sit qui maiores. Est porro aut at. Modi est officiis possimus et rem.', 'Similique qui consectetur incidunt sit sequi saepe.', '1971-12-07', '1985-11-02', '04:32:43'),
(32, 403177, 'autem', 'perferendis', 'assumenda', '', 455, 'velit', 'animi', 'quo', '', 0, 'Aut voluptatem in qui quod consectetur quisquam veritatis. Sunt numquam vitae exercitationem impedit. Voluptatem eos numquam sapiente aut quo soluta.', 'Ut est velit ut blanditiis voluptatem modi.', '2012-12-27', '1995-07-03', '03:50:07'),
(33, 0, 'vitae', 'autem', 'et', '', 50571, 'atque', 'impedit', 'est', '', 0, 'Perferendis vel nesciunt alias porro. Pariatur et dicta eveniet tempora. Sit consequatur consectetur fugiat velit ad. Nihil earum dolore aut deserunt similique quo.', 'At ut error amet.', '1978-09-14', '1987-09-30', '01:32:43'),
(34, 6, 'dolore', 'nobis', 'porro', '', 14, 'excepturi', 'officiis', 'quia', '', 0, 'Quod officiis autem cumque ea magnam rerum. Sit similique voluptatem autem asperiores omnis est ea. Sed ullam rerum illo molestiae. Non ut quia ut labore.', 'Aspernatur molestiae quaerat molestias quia quidem sit aut.', '2004-07-09', '1999-06-10', '09:58:17'),
(35, 285764, 'sunt', 'aperiam', 'nulla', '', 1, 'qui', 'omnis', 'sit', '', 0, 'Qui vel fugit culpa et ea quibusdam enim. Nihil rerum ea illo adipisci est officia vero. Aut qui dolor iusto architecto qui et ea.', 'Perspiciatis dolorem unde earum.', '2009-12-08', '1995-11-20', '17:43:20'),
(36, 6, 'reprehenderit', 'et', 'ut', '', 3271, 'sed', 'ut', 'aperiam', '', 0, 'Nostrum nulla ut id atque assumenda. Culpa a sit ratione consequatur recusandae. Quos quas voluptatem facilis aut. Ut doloribus harum quia quae dolorem.', 'Non eveniet eos facilis ex aspernatur tenetur officiis voluptates.', '1971-11-08', '2019-01-20', '20:15:57'),
(37, 99943, 'blanditiis', 'ipsa', 'delectus', '', 66891, 'cum', 'nesciunt', 'cumque', '', 0, 'Optio quam qui deserunt odio veritatis. Minus qui quam et sint eveniet sint nemo. Commodi hic aut aut pariatur dolorum. Sunt et labore aspernatur et.', 'Omnis quas nam qui.', '1993-02-22', '1971-01-12', '02:41:19'),
(38, 608097, 'in', 'laborum', 'natus', '', 558773, 'quas', 'iure', 'itaque', '', 0, 'Commodi nam nemo qui. Quae sed dicta vitae quas adipisci. Non eum provident qui laborum repellat asperiores ut. Non et aut facere molestiae.', 'Eum fuga ut voluptatibus sint dolores quis.', '1976-03-01', '2001-01-04', '03:53:07'),
(39, 556148, 'iusto', 'et', 'nulla', '', 289167579, 'corporis', 'aliquam', 'dolorum', '', 0, 'Voluptatem est dolores eaque quia. Eius nulla ducimus repellendus temporibus. Consequuntur rerum omnis quia laborum voluptatibus. Consectetur nemo vel doloremque.', 'Dolores odio beatae asperiores sit omnis delectus sint.', '1972-05-03', '1977-07-20', '11:38:00'),
(40, 30633600, 'et', 'placeat', 'harum', '', 9, 'blanditiis', 'et', 'tempora', '', 0, 'Ut ea recusandae sequi praesentium dolor in. Quibusdam nostrum maxime iusto rerum. Dolorem aspernatur dolor voluptas similique aliquam. Laborum sint qui autem autem in expedita.', 'Sapiente sint dicta ut non voluptatem.', '1993-04-24', '2003-06-28', '01:13:16'),
(41, 848892892, 'asperiores', 'consequatur', 'nobis', '', 76894, 'in', 'quis', 'sit', '', 0, 'Nisi ducimus accusamus eum ipsum. Sunt vel nisi aspernatur aperiam doloribus quaerat. Alias omnis commodi error cupiditate aut. Debitis saepe quibusdam beatae qui ratione. Et magni facilis libero et.', 'Aliquam accusantium iure et vitae tempora veritatis non.', '2001-05-23', '1971-02-01', '10:49:09'),
(42, 6909619, 'in', 'eveniet', 'aut', '', 75092146, 'quibusdam', 'ipsa', 'voluptas', '', 0, 'Adipisci cumque numquam in aut. Excepturi neque corporis aut laudantium ipsa incidunt provident nihil. Itaque libero repellat ducimus illo velit sapiente. Reprehenderit dicta sit asperiores consequuntur labore ipsa eos. Nostrum corrupti voluptates et nihi', 'Veritatis ea quis voluptatem quas nam expedita.', '1992-02-14', '1977-01-24', '22:33:42'),
(45, 827674, 'incidunt', 'sed', 'eum', '', 77885285, 'ea', 'consequatur', 'veritatis', '', 0, 'Quibusdam aut et est quidem qui soluta. Numquam modi aut doloribus voluptatem temporibus. Necessitatibus iure eos quas suscipit ut. Unde soluta suscipit laudantium non qui in placeat.', 'Placeat quia nihil sed error nihil et commodi.', '1984-02-28', '2002-02-24', '19:18:38'),
(46, 0, 'aut', 'sunt', 'exercitationem', '', 9425, 'quam', 'iure', 'blanditiis', '', 0, 'Magni sapiente iste iste nesciunt officiis accusantium. Est nobis vero impedit. Dolorum sequi in et ratione corporis. Cumque quibusdam qui omnis omnis commodi architecto.', 'Repellat dignissimos qui amet quis facilis.', '2015-08-26', '1993-06-23', '02:54:33'),
(47, 0, 'corrupti', 'consequuntur', 'quo', '', 7191180, 'dolores', 'unde', 'porro', '', 0, 'Consequatur aliquid tenetur labore est magni. Eum consectetur sapiente quos laboriosam porro dolores. Quia eos omnis expedita aspernatur consequatur voluptatibus vitae.', 'Eum libero eos eum quidem.', '1974-03-25', '1975-09-19', '12:52:49'),
(49, 4108423, 'voluptates', 'velit', 'tempore', '', 3607512, 'et', 'accusamus', 'ratione', '', 0, 'Neque sit sed ut sed. Fugiat alias perspiciatis debitis dicta natus.', 'Fuga aut tempora ducimus quibusdam tenetur aliquid aut.', '2007-02-08', '2020-02-27', '11:59:51'),
(52, 942, 'id', 'corporis', 'vel', '', 2358621, 'est', 'hic', 'aut', '', 0, 'Officiis nihil sed dolores adipisci aliquam officiis ea. Alias ut illum omnis aut. Ut rerum vel odio rerum dolor. Architecto qui rerum et suscipit ullam voluptas dolorem nobis.', 'Eligendi et omnis aliquid iusto ut ducimus eius.', '2010-07-31', '2016-04-19', '16:44:28'),
(54, 5, 'amet', 'sint', 'pariatur', '', 78782016, 'consectetur', 'et', 'perferendis', '', 0, 'Ex veniam non pariatur quis vel earum. Voluptas id dolore aliquam qui laboriosam. Reiciendis laboriosam esse minus molestiae excepturi qui temporibus.', 'Sapiente ut aspernatur itaque nihil.', '2011-02-26', '2003-01-27', '20:36:24'),
(55, 28, 'fugiat', 'ex', 'culpa', '', 644063082, 'vel', 'at', 'suscipit', '', 0, 'Veritatis reiciendis quas quisquam soluta et aut voluptatem. Aliquid veritatis impedit sequi sapiente adipisci veniam. Et esse veritatis enim quos.', 'Atque voluptate eveniet fugiat quia et.', '1982-03-20', '2020-04-09', '05:28:22'),
(56, 816, 'possimus', 'nulla', 'ad', '', 7866472, 'est', 'consequatur', 'possimus', '', 0, 'Impedit sed est iste omnis deleniti. Provident suscipit et ratione expedita.', 'Autem fugiat tempora nobis itaque optio.', '1988-12-04', '2007-10-27', '07:14:26'),
(57, 73, 'sit', 'a', 'ut', '', 0, 'dignissimos', 'dolorum', 'reiciendis', '', 0, 'Sit adipisci minima odit aperiam consequuntur. Eligendi rerum recusandae quaerat totam. Quos fuga incidunt aut doloremque harum. Voluptates quo atque dolor ad.', 'Doloribus exercitationem blanditiis quia iusto aperiam sequi.', '2013-04-04', '2020-02-06', '00:43:54'),
(58, 3, 'enim', 'qui', 'eveniet', '', 7, 'officia', 'esse', 'voluptas', '', 0, 'Quam vel amet tenetur voluptas quae et error nihil. Nemo rerum et accusantium fuga. Dignissimos nobis perspiciatis illum vel rerum hic error explicabo. Incidunt iusto cumque quo numquam ab ut optio non.', 'Blanditiis corporis laboriosam voluptatem.', '2004-07-23', '2011-06-09', '19:44:51'),
(59, 910114, 'sunt', 'quisquam', 'eveniet', '', 287, 'aut', 'quia', 'qui', '', 0, 'Distinctio dolore in eum voluptatem fuga. Facere sed modi voluptas repudiandae libero laboriosam porro. Sint officiis in natus quisquam atque qui dolores rem.', 'Rerum vero sint dolore numquam sit repudiandae.', '1980-02-29', '1996-12-19', '02:32:05'),
(60, 314689, 'sit', 'molestiae', 'repudiandae', '', 73, 'nostrum', 'molestias', 'nesciunt', '', 0, 'Voluptas ipsum ut atque ipsam. Eligendi porro inventore quos. Voluptatem veritatis occaecati aspernatur et enim. Dolorem reiciendis sed accusantium nam et est ducimus.', 'Blanditiis et quis quia error velit aut officia.', '2012-12-21', '1973-03-11', '12:10:24'),
(61, 817927710, 'aliquam', 'sed', 'nulla', '', 95, 'et', 'qui', 'et', '', 0, 'Quas ullam voluptas et qui rerum sed dolore. Accusantium nihil inventore ut vitae. Quae placeat itaque et inventore qui impedit. Est harum repellat expedita ab officiis porro.', 'Ad sint nobis sit molestiae ut unde nesciunt.', '2010-11-18', '2007-09-25', '13:08:12'),
(62, 219432, 'maxime', 'aperiam', 'nam', '', 193190993, 'exercitationem', 'quidem', 'consequuntur', '', 0, 'Et et aut accusantium facere incidunt. Vitae id voluptatibus veniam nesciunt quas.', 'Laboriosam porro ex id non ea.', '2005-03-20', '2005-08-23', '21:13:40'),
(63, 86344, 'fugit', 'adipisci', 'velit', '', 52842718, 'corrupti', 'aliquam', 'eligendi', '', 0, 'Sint et quia velit aut reprehenderit rerum consectetur. Cum amet similique ab qui placeat quis suscipit. Eveniet repellat facilis voluptates aut magni et. Nostrum non vel sit culpa veritatis voluptatem ab ipsum.', 'Et corporis qui excepturi mollitia in facilis asperiores.', '1983-08-10', '2019-12-11', '16:56:11'),
(64, 16150285, 'voluptas', 'iste', 'harum', '', 807, 'placeat', 'et', 'voluptatibus', '', 0, 'Autem voluptas omnis nostrum modi aliquid eius. Dolorum laboriosam fugit aut fugiat maxime. Hic voluptas quia recusandae iste temporibus. Nulla quos ut et qui doloribus sed. Sed soluta aperiam nulla dolorum.', 'Ut dolores et recusandae.', '1976-05-05', '1993-02-10', '08:51:36'),
(65, 59, 'repudiandae', 'ipsam', 'sapiente', '', 4727037, 'assumenda', 'et', 'sunt', '', 0, 'Sit architecto quod enim eos id possimus alias vel. Deleniti corporis sed iure. Eos neque tenetur molestias molestias qui accusantium.', 'Nobis totam tempora sit quia eius recusandae.', '1999-09-15', '1990-10-25', '02:56:43'),
(67, 68923851, 'sunt', 'rerum', 'quia', '', 4344294, 'recusandae', 'et', 'porro', '', 0, 'Omnis labore rem esse molestiae odit repellat. Qui qui blanditiis ut autem perspiciatis. Vel reiciendis esse qui magnam nihil corporis tenetur. Quidem adipisci et molestias cupiditate voluptas culpa commodi.', 'Consequatur similique non aperiam ipsum aliquam nihil nihil quidem.', '1981-10-31', '2018-02-18', '05:26:55'),
(68, 5, 'ipsa', 'quis', 'minus', '', 388, 'sit', 'dolorum', 'et', '', 0, 'Quia perspiciatis laboriosam quo voluptas qui quis. Non veritatis consequatur consequatur qui distinctio. Consequatur reiciendis aliquam placeat enim enim deserunt. Recusandae sequi iure repudiandae.', 'Laudantium quia rerum beatae quo at facere.', '2020-03-13', '2008-07-16', '06:56:49'),
(69, 75184500, 'natus', 'ex', 'cupiditate', '', 569, 'non', 'velit', 'quis', '', 0, 'Porro velit error aut autem. Ipsum est omnis ullam omnis. Perspiciatis omnis alias consequatur et laudantium. Et necessitatibus architecto delectus harum nulla cum nulla.', 'Iure quaerat aliquam sunt accusantium minima.', '2013-08-05', '2011-06-30', '13:54:29'),
(70, 70906, 'harum', 'dolores', 'rem', '', 54973, 'harum', 'nihil', 'neque', '', 0, 'Sint maiores consequatur cumque et voluptatem sed ut. Natus corrupti explicabo fugiat voluptas sint ea facilis. In placeat suscipit beatae alias inventore. Voluptas aut quas repellat veniam aut exercitationem voluptate.', 'Ipsam illum autem iure placeat est.', '1970-08-02', '1993-04-01', '18:54:36'),
(71, 1, 'vitae', 'fuga', 'maiores', '', 6490052, 'quo', 'velit', 'aspernatur', '', 0, 'Provident laboriosam ducimus nam aut. Sit iste in veritatis expedita ad. Et deserunt eos iure accusantium molestiae voluptas. Ut ut voluptas quaerat tenetur.', 'Ut aliquam cumque id necessitatibus.', '1974-11-29', '1992-08-17', '23:19:53'),
(72, 812017607, 'nobis', 'dignissimos', 'sed', '', 405, 'minima', 'et', 'a', '', 0, 'Nostrum impedit rem ab quibusdam rem. Qui dolor alias harum fugit rem. Porro accusamus illo facilis nobis ut.', 'Aut voluptatem hic debitis id similique magni et.', '2001-10-27', '2011-05-08', '16:01:10'),
(73, 2379242, 'quam', 'ex', 'iure', '', 606, 'modi', 'aliquam', 'sit', '', 0, 'Voluptatem officiis veniam modi nesciunt molestias et accusamus. Earum perferendis qui ea consectetur. Necessitatibus eius tenetur in consequatur. Qui et ipsam rerum ut fugiat libero. Rerum quasi quasi dolor nam.', 'Molestiae et ex rem suscipit harum quaerat.', '2011-10-26', '2015-08-14', '17:27:17'),
(74, 0, 'dolores', 'autem', 'quasi', '', 9870, 'modi', 'nisi', 'ipsam', '', 0, 'Eos sit ut minus incidunt. Repellendus pariatur id dolores unde autem. Quisquam tempore reprehenderit itaque a labore odio consectetur ut. Error assumenda numquam quia incidunt velit odit ducimus.', 'Libero velit ad voluptatem pariatur ut asperiores maxime.', '1999-01-17', '2002-07-27', '17:26:18'),
(76, 68, 'impedit', 'quasi', 'rerum', '', 9, 'qui', 'voluptatibus', 'culpa', '', 0, 'Ipsum enim ratione sit itaque illum assumenda. Non fugiat tenetur error facilis sit omnis. Molestiae odio est voluptatem itaque facere aut neque. Accusantium aperiam sed odit sint qui mollitia. Quia odit amet doloribus quia quia.', 'Voluptatem aut repudiandae dolorem repudiandae.', '2005-05-10', '1997-03-25', '11:50:37'),
(78, 0, 'omnis', 'commodi', 'voluptas', '', 651450, 'reiciendis', 'fugit', 'quas', '', 0, 'Corporis consectetur nihil perspiciatis molestias atque exercitationem rerum. Vitae vero qui tenetur porro nihil autem qui quia. Distinctio quidem tempora quia qui iusto dolorem voluptas. Veniam facere possimus quas blanditiis enim.', 'Quisquam error nulla nihil reprehenderit sed vitae harum non.', '1986-11-13', '2016-10-25', '04:21:30'),
(79, 518719006, 'est', 'officia', 'enim', '', 1141242, 'error', 'quae', 'voluptas', '', 0, 'Animi saepe eum est et. Illum illum voluptatem consequatur expedita quam consequuntur. Et at ducimus neque nobis eos.', 'Velit aspernatur iste odio et.', '1986-11-02', '2021-05-24', '16:27:02'),
(80, 171968, 'ut', 'placeat', 'dignissimos', '', 3690845, 'consequatur', 'vel', 'nihil', '', 0, 'Magnam aut aperiam sapiente. Ea voluptatibus fuga perferendis et ratione et repudiandae dolor. Facere sint tempora possimus omnis minus debitis. Dicta est et a ipsum impedit alias aut aut. Quia sapiente est omnis est.', 'Rerum reprehenderit quod sapiente eius accusamus.', '1981-04-19', '2006-03-01', '18:34:54'),
(81, 62240, 'ullam', 'ex', 'eligendi', '', 5204, 'ut', 'est', 'beatae', '', 0, 'Et rerum eos eos praesentium praesentium voluptates quia dolor. Beatae voluptatem accusantium hic quasi. Laudantium sed tempore est sequi ut odit exercitationem. Rerum quibusdam quae vel et soluta consequatur.', 'Blanditiis voluptatem quo quae qui qui.', '1995-11-08', '2015-08-11', '18:17:23'),
(82, 8, 'atque', 'harum', 'voluptate', '', 126990972, 'quos', 'eligendi', 'nesciunt', '', 0, 'Ea labore quasi illum et magni recusandae. Voluptatem amet corporis ut ut minus. Quidem doloribus aut et deserunt. Adipisci rem minima exercitationem non.', 'Aliquid a a voluptatem illo velit tenetur cum.', '1971-08-07', '1978-07-27', '20:29:40'),
(83, 843, 'vel', 'soluta', 'sint', '', 49245, 'molestiae', 'nostrum', 'ad', '', 0, 'Velit qui rerum soluta ad illum. Qui et enim adipisci quisquam. Incidunt voluptatem et dolorum excepturi.', 'Sint quae saepe dolore provident.', '1970-04-26', '2017-10-30', '11:41:35'),
(85, 2973, 'totam', 'deleniti', 'ea', '', 65, 'et', 'est', 'dolorem', '', 0, 'Dolorem quo dolorem distinctio nihil aliquam. Repellendus ut voluptatibus iusto. Sit quia aperiam ea non dolorum.', 'Dolorem explicabo rerum aperiam quod modi blanditiis explicabo.', '1990-04-01', '2018-12-13', '06:21:53'),
(86, 332473221, 'itaque', 'veritatis', 'officia', '', 79851, 'sit', 'laudantium', 'velit', '', 0, 'Harum accusamus beatae porro molestias in fugit ut. Aliquid non rerum ab non commodi possimus. Et aliquam ex laborum minima iure.', 'Error autem dolorum totam ad.', '2008-10-26', '1982-04-03', '07:00:07'),
(87, 59, 'molestias', 'soluta', 'est', '', 1861989, 'nobis', 'et', 'aperiam', '', 0, 'Et enim tempora in consequatur. Perferendis adipisci repellat modi distinctio qui. Corporis et distinctio asperiores libero omnis.', 'Quos et excepturi harum quo reprehenderit.', '1998-12-25', '1970-07-10', '20:36:28'),
(88, 296388, 'a', 'ad', 'quae', '', 51426, 'voluptas', 'non', 'et', '', 0, 'Cupiditate praesentium cum dolorum sunt. Autem iure qui aut omnis aut aut. Nisi laboriosam hic vitae recusandae quia vel. Libero ut sunt corporis minus libero sed.', 'Officiis sed nisi similique dolores nesciunt.', '2022-02-24', '2001-11-03', '06:35:55'),
(89, 915335, 'ad', 'quasi', 'ut', '', 578493050, 'sit', 'aut', 'sed', '', 0, 'Quia cumque facere sit. Aut autem recusandae placeat vero quia placeat saepe.', 'Et eius non sit ab corporis.', '2008-11-01', '1980-11-22', '17:49:00'),
(90, 6, 'atque', 'architecto', 'voluptatibus', '', 676776, 'tenetur', 'nemo', 'recusandae', '', 0, 'Commodi qui qui dignissimos ut sit reiciendis aperiam. Ex molestiae et nobis omnis excepturi. Consectetur voluptatem libero omnis amet qui consequatur sunt. Aspernatur qui veniam ut ducimus repudiandae ipsa quia.', 'Optio sapiente quaerat quis rerum id.', '2003-05-26', '1982-03-10', '16:38:12'),
(91, 824, 'enim', 'delectus', 'autem', '', 881839, 'quisquam', 'voluptatum', 'omnis', '', 0, 'Cum numquam temporibus temporibus quidem. Earum velit sed et inventore sed. Cumque maxime nihil sed.', 'Molestias ut ut at ipsam et perferendis doloremque.', '1976-04-24', '1980-03-09', '21:37:00'),
(92, 1548, 'in', 'nihil', 'quas', '', 64342461, 'est', 'voluptatum', 'illo', '', 0, 'Quis rerum eligendi nesciunt ut. Quasi quia quidem a magnam. Eligendi assumenda qui quo culpa dolores id. Id ex aut inventore ut.', 'Rem dolores perspiciatis cumque sunt odit autem.', '2005-01-27', '2000-05-12', '14:03:46'),
(93, 30390, 'aut', 'impedit', 'rerum', '', 0, 'laboriosam', 'minima', 'omnis', '', 0, 'Laborum aliquid et officia cum ducimus. Architecto sint quam quisquam possimus magni. Aut ut quia quidem debitis expedita adipisci laborum.', 'Rerum id quis ad quia.', '1994-06-10', '2019-12-08', '13:32:48'),
(94, 1060873, 'cumque', 'ut', 'ea', '', 6207, 'quis', 'ullam', 'consectetur', '', 0, 'Eum placeat commodi atque perspiciatis nihil in dignissimos. Voluptas voluptas est quisquam voluptas. Quisquam deleniti officia omnis corporis. Laudantium similique mollitia incidunt quia inventore.', 'Qui cupiditate error asperiores totam atque sint dolor minima.', '1973-12-28', '1972-04-17', '10:02:50'),
(95, 24, 'nostrum', 'ut', 'error', '', 792674, 'enim', 'debitis', 'deleniti', '', 0, 'Occaecati quod sed architecto veritatis cum explicabo. Expedita quia a nisi libero nesciunt neque. Voluptatem officiis dolore vel qui quibusdam.', 'Rerum sunt nemo atque.', '1998-11-02', '1973-04-06', '01:55:12'),
(96, 3860, 'est', 'totam', 'pariatur', '', 53, 'maiores', 'quibusdam', 'nihil', '', 0, 'Quis similique animi laborum placeat similique. Dolorem et corrupti ea odit similique sequi quia reprehenderit. Voluptatem est eaque quaerat totam commodi sed error. Est molestiae earum iusto qui velit facere.', 'Esse et saepe et in quia vitae quasi.', '2003-03-19', '2013-04-10', '11:20:12'),
(97, 66559134, 'similique', 'consectetur', 'et', '', 148, 'consectetur', 'sed', 'distinctio', '', 0, 'Qui error dolor debitis modi corrupti consequuntur suscipit. Vel aliquam minima et rerum sed. Odit nostrum neque doloribus animi.', 'Harum odit praesentium corrupti officia sed eligendi.', '2014-09-13', '1980-10-11', '06:38:24'),
(98, 487734613, 'molestiae', 'dignissimos', 'hic', '', 15582173, 'eveniet', 'quis', 'ad', '', 0, 'Libero distinctio veniam quis libero quia nostrum eius. Quo exercitationem quam omnis autem. Aspernatur enim omnis sint ea. Sed omnis itaque qui eos quae.', 'Quam et magni perspiciatis ratione praesentium inventore ipsa.', '2014-06-23', '1990-03-22', '00:33:59'),
(99, 8, 'aliquam', 'sit', 'animi', '', 0, 'eaque', 'dolores', 'doloribus', '', 0, 'Possimus ut consequatur ut quisquam. Explicabo ipsa voluptate cupiditate eveniet dolorem. Qui sequi nobis maxime in provident sed est.', 'Nemo eveniet molestiae officiis dignissimos odio.', '2009-09-28', '1992-10-09', '15:30:04'),
(100, 21624636, 'et', 'et', 'nam', '', 0, 'voluptas', 'et', 'voluptas', '', 0, 'Officia odit sint et veritatis voluptates. Debitis omnis nesciunt fugit minima expedita est eum. Quibusdam est deserunt asperiores distinctio. Porro animi eaque eveniet suscipit quasi et.', 'Molestiae voluptates ducimus qui libero reiciendis dolorem accusamus inventore.', '2012-12-26', '1984-05-19', '19:23:04'),
(101, 448077, 'itaque', 'sunt', 'commodi', '', 951, 'quis', 'consectetur', 'nesciunt', '', 0, 'Eum eos fuga recusandae dolor ab ex. Sint voluptatem culpa ut dignissimos et dolorem.', 'Architecto saepe provident debitis repellat ut eligendi.', '2000-12-12', '1994-05-24', '05:20:01'),
(102, 11419, 'corporis', 'et', 'recusandae', '', 5637370, 'dolores', 'dignissimos', 'autem', '', 0, 'Asperiores aspernatur temporibus laboriosam et facilis. Aut dolorum placeat aspernatur quisquam blanditiis. Consequatur sint sequi illo aut hic blanditiis nam. Voluptatibus dolor tempora rerum eveniet sit itaque laboriosam.', 'Occaecati velit dolores provident ex nulla nostrum.', '1971-05-01', '2020-12-16', '21:01:16'),
(104, 1263, 'amet', 'iste', 'qui', '', 66, 'reiciendis', 'cumque', 'est', '', 0, 'Adipisci dolor sint commodi. Sequi reprehenderit laudantium sequi eveniet ea ea sapiente. Quis officiis dolores aliquam dolorum eum. Ut illo harum totam ducimus neque iste. Enim deleniti consequuntur alias eius tenetur a ut.', 'Repudiandae temporibus facilis cum fugiat explicabo.', '1996-03-18', '1998-08-26', '04:16:48'),
(105, 413101, 'aspernatur', 'debitis', 'hic', '', 355112, 'et', 'reiciendis', 'commodi', '', 0, 'Quia velit sunt voluptas sunt hic earum ut. Quidem omnis sit eligendi est aut. Aut cupiditate placeat quo provident nisi tempore ipsa. Vel rerum aperiam deserunt assumenda iure.', 'Neque ex sunt facere impedit numquam sint porro.', '1978-03-03', '1998-03-26', '15:13:10'),
(106, 0, 'rerum', 'non', 'eligendi', '', 1916264, 'aut', 'sit', 'nobis', '', 0, 'Quos exercitationem temporibus ea nemo atque accusantium sapiente. Perferendis minima modi consequatur dolorum eveniet. Aspernatur modi nesciunt a neque.', 'Voluptate repellat numquam et et ipsum earum sunt.', '2021-12-20', '1971-06-21', '00:53:29'),
(107, 394651, 'nesciunt', 'provident', 'sint', '', 706520020, 'saepe', 'esse', 'non', '', 0, 'Dolore sed corrupti ea magni dolores minima consequatur. Vel provident ut harum sed est facilis. Minima ut iste non a. Laborum aut et nam explicabo.', 'Qui quia laudantium quae sed voluptas adipisci.', '2014-04-01', '1982-03-04', '05:56:06'),
(108, 76940011, 'ut', 'molestias', 'deleniti', '', 12603, 'deserunt', 'omnis', 'exercitationem', '', 0, 'Corporis voluptatibus veniam ea. Perferendis est nihil quo minus. Necessitatibus facere placeat sequi est eligendi molestias omnis.', 'Consequatur qui nihil omnis cumque qui qui molestiae.', '2014-04-12', '1975-02-04', '09:49:01'),
(109, 888, 'modi', 'amet', 'sed', '', 9209213, 'enim', 'harum', 'vel', '', 0, 'Atque labore labore libero. Harum nulla quibusdam iste animi.', 'Aut aut debitis qui quis.', '2018-08-05', '1976-03-22', '09:55:23'),
(110, 52, 'ab', 'qui', 'sint', '', 930200, 'fuga', 'voluptatem', 'dicta', '', 0, 'Rerum eligendi enim asperiores cumque iure nemo fugit. Voluptatem optio officia iusto ab enim ut. Ipsa cum dolore qui.', 'Voluptatibus modi quidem maiores distinctio facilis.', '1990-04-09', '1970-10-03', '20:43:58'),
(111, 75, 'maiores', 'modi', 'omnis', '', 230651696, 'quia', 'itaque', 'consequatur', '', 0, 'Aperiam dolorum error ab minus. Sapiente consequatur architecto magnam dolor et perspiciatis expedita. Temporibus similique et omnis eum.', 'Ea est officia illo optio ea modi.', '1974-03-07', '1974-07-12', '10:50:34'),
(112, 68604503, 'id', 'sed', 'neque', '', 883, 'unde', 'non', 'eaque', '', 0, 'Nemo suscipit ducimus vel inventore voluptatem. Ipsa ad ipsam ducimus eaque ea fugiat. Qui repudiandae ullam corporis ut consequatur aperiam aut omnis.', 'Quasi culpa nulla eos.', '1996-11-04', '1991-05-30', '04:24:34'),
(113, 52608, 'veritatis', 'sit', 'perspiciatis', '', 14, 'voluptatibus', 'tenetur', 'libero', '', 0, 'Dolore consequuntur vitae magnam mollitia veniam velit. Repudiandae sunt enim provident totam est. Ut possimus vitae vitae itaque in.', 'Reprehenderit nobis sint voluptatem doloremque rerum non aut distinctio.', '2020-03-04', '2013-05-20', '07:26:15'),
(114, 95217, 'modi', 'unde', 'sed', '', 12812472, 'aut', 'aperiam', 'recusandae', '', 0, 'Aut quam qui in commodi. Eius perferendis recusandae quo voluptates corrupti qui ad. Ratione qui voluptatem necessitatibus veritatis perferendis vel.', 'Sapiente iusto atque et consequatur.', '2007-06-25', '1972-12-20', '15:36:08'),
(115, 748, 'aut', 'provident', 'qui', '', 83, 'sit', 'eligendi', 'quas', '', 0, 'Necessitatibus aut est et qui omnis est neque. Eaque at voluptates quibusdam aliquam sed. Qui et sit ullam reprehenderit maiores. Voluptate optio velit itaque saepe odit reiciendis voluptatem.', 'Sed ad eaque dolorem ea illum maxime deleniti voluptatibus.', '2013-02-09', '1997-04-27', '17:37:45'),
(116, 82289, 'ullam', 'beatae', 'quisquam', '', 860776, 'sequi', 'quis', 'suscipit', '', 0, 'Qui ipsum non quia occaecati iusto. Sed rerum tempora quam cupiditate optio. Repellendus qui quia nostrum molestias deserunt reiciendis voluptatum. Ut minus exercitationem facere in optio. Adipisci enim autem non asperiores explicabo assumenda.', 'Fugiat non consectetur accusamus eos in quae.', '1990-05-31', '2021-08-23', '22:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `podms_violation`
--

CREATE TABLE `podms_violation` (
  `id` int(11) NOT NULL,
  `viol_name` varchar(255) NOT NULL,
  `viol_first_off` varchar(255) NOT NULL,
  `viol_sec_off` varchar(255) NOT NULL,
  `viol_third_off` varchar(255) NOT NULL,
  `date_added` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `podms_violation`
--

TRUNCATE TABLE `podms_violation`;
--
-- Dumping data for table `podms_violation`
--

INSERT INTO `podms_violation` (`id`, `viol_name`, `viol_first_off`, `viol_sec_off`, `viol_third_off`, `date_added`) VALUES
(1, 'asdasd', 'asd', 'as', 'das', '2023-02-12 16:00:00'),
(2, '213', '123', '123', '123', '2023-02-12 16:00:00'),
(4, '1', '1', '1', '1', '2023-02-12 16:00:00'),
(7, 'abcd', 'abcd', 'abcde', 'abcde', '2023-02-15 08:12:42');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_calendar`
--
ALTER TABLE `podms_calendar`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `podms_duty`
--
ALTER TABLE `podms_duty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_profiling`
--
ALTER TABLE `podms_profiling`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_records`
--
ALTER TABLE `podms_records`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_reports`
--
ALTER TABLE `podms_reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_sp_appointment`
--
ALTER TABLE `podms_sp_appointment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_violation`
--
ALTER TABLE `podms_violation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `podms_calendar`
--
ALTER TABLE `podms_calendar`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `podms_duty`
--
ALTER TABLE `podms_duty`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `podms_profiling`
--
ALTER TABLE `podms_profiling`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT for table `podms_records`
--
ALTER TABLE `podms_records`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `podms_reports`
--
ALTER TABLE `podms_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `podms_sp_appointment`
--
ALTER TABLE `podms_sp_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `podms_violation`
--
ALTER TABLE `podms_violation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
