-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2023 at 08:05 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `podms_claimed_items`
--

CREATE TABLE `podms_claimed_items` (
  `id` int(100) NOT NULL,
  `id_number` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `status` int(6) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `podms_claimed_items`
--

INSERT INTO `podms_claimed_items` (`id`, `id_number`, `first_name`, `middle_name`, `last_name`, `section`, `course`, `status`, `item_name`, `item_desc`, `date`) VALUES
(5, 2147483647, 'uyguukyhk', 'iui', 'uu', '', 'uouiouio', 3, 'uiouio', 'ui', '2023-02-24'),
(7, 2147483647, 'uiyui', 'yiy', 'uiyui', '', 'iyuiyuiyuiyui', 3, 'yui', 'yuiyuyuiyuiyuiy', '2023-02-24'),
(9, 213123123, '213123123', '123123', '213123123', '21321312', '12312312', 3, '321312', '321312', '2023-02-24'),
(10, 1907612, 'Troy', 'Valdez', 'Dugan', '4204', 'BSIT', 3, 'Underwear', 'walang suot na panty', '2023-02-24'),
(12, 1312312, 'jan clarence', 'gentile', 'castillo', '4204', 'bsit', 3, 'vape', 'ewqewqeqw', '2023-02-25');

-- --------------------------------------------------------

--
-- Table structure for table `podms_confiscated`
--

CREATE TABLE `podms_confiscated` (
  `id` int(100) NOT NULL,
  `id_number` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `section` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `status` int(6) NOT NULL,
  `item_name` varchar(255) NOT NULL,
  `item_desc` varchar(255) NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `podms_confiscated`
--

INSERT INTO `podms_confiscated` (`id`, `id_number`, `first_name`, `middle_name`, `last_name`, `section`, `course`, `status`, `item_name`, `item_desc`, `date`) VALUES
(3, 19016512, 'John Mark', 'Zerna', 'Escobar', '', 'BSIT', 1, 'Earrings', 'dada', '2023-02-24'),
(4, 12312312, 'asdasd', 'asdas', 'y', '', 'hjg', 1, 'hjghj', 'ghjghjghhjg', '2023-02-24'),
(6, 12312312, 'jkghjk', 'hjkhjkhjkh', 'jkhjkhjkhkhjkh', '', 'jkhjkhjkhjkhjk', 2, 'hhjkhjkhjkhjk', 'hjkhjkh', '2023-02-24'),
(8, 2147483647, 'uiyhusyaukhdkashkdhaskjh', 'jkhjkhdsajkhdjkashkdjh', 'jkhdjkashjkdhjashdkh', '', 'hjkhsdjkhdjkashdhasjkhdjk', 2, 'hjkdhjkashjkhdjkashjdhasjkh', 'jkhdjkashjkdhaskhdasdas', '2023-02-24'),
(11, 12312312, '3qweqwe', 'qweqw', 'eqwe', 'qweqwe', 'qweqw', 2, 'eqwewq', 'eqw', '2023-02-24');

-- --------------------------------------------------------

--
-- Table structure for table `podms_duty`
--

CREATE TABLE `podms_duty` (
  `id` int(100) NOT NULL,
  `complainant_id_number` int(255) NOT NULL,
  `complainant_first_name` varchar(255) NOT NULL,
  `complainant_middle_name` varchar(255) NOT NULL,
  `complainant_last_name` varchar(255) NOT NULL,
  `complainant_section` varchar(255) NOT NULL,
  `complainant_course` varchar(255) NOT NULL,
  `complained_id_number` int(255) DEFAULT NULL,
  `complained_first_name` varchar(255) DEFAULT NULL,
  `complained_middle_name` varchar(255) DEFAULT NULL,
  `complained_last_name` varchar(255) NOT NULL,
  `complained_section` varchar(255) DEFAULT NULL,
  `complained_course` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `podms_duty`
--

INSERT INTO `podms_duty` (`id`, `complainant_id_number`, `complainant_first_name`, `complainant_middle_name`, `complainant_last_name`, `complainant_section`, `complainant_course`, `complained_id_number`, `complained_first_name`, `complained_middle_name`, `complained_last_name`, `complained_section`, `complained_course`, `inci_desc`, `inci_date`, `inci_time`, `violation_level`, `violation`, `duties`, `duty_start`, `duty_end`, `duty_location`, `status`, `image_name`, `date`) VALUES
(168, 21312, 'asdasd', 'asdas', 'dadas', '', 'dasdas', 12321, '31232', '131', '3131', '313', '1231', '', '', '', 'minor', '1231231', 'NULL, duty', '13:14:00', '13:14:00', '12321312', 2, 'IMG-6401823045f372.58552836.jpg', '2023-02-10'),
(207, 12312, '312321', '3123', '123213', '12312', '3123', 123123, '12312', '312', '312312', '31232', '131123', '12312312', '2023-03-03', '13:26', 'minor', '12312312312', 'NULL, community service, duty', '13:26:00', '13:26:00', 'canteen', 2, 'IMG-64018525d02453.64820441.jpg', '2023-03-03');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `podms_events`
--

INSERT INTO `podms_events` (`id`, `complainant_id_number`, `complainant_first_name`, `complainant_middle_name`, `complainant_last_name`, `complainant_course`, `complained_id_number`, `complained_first_name`, `complained_middle_name`, `complained_last_name`, `complained_course`, `status`, `description`, `title`, `start`, `end`, `time`) VALUES
(3, 0, 'architecto', 'quasi', 'dolor', '', 655, 'ab', 'nostrum', 'dicta', '', 4, 'asdas', 'Meeting', '2023-02-16', '2023-02-16', '18:18:00'),
(12, 11213513, 'earum', 'et', 'ipsum', '', 910351393, 'at', 'excepturi', 'officiis', '', 0, '', 'Meeting', '2023-02-28', '2023-02-28', '14:55:00'),
(28, 58, 'maxime', 'quaerat', 'quo', '', 629, 'architecto', 'et', 'cumque', '', 0, '', 'Meeting', '2023-02-16', '2023-02-16', '07:27:00'),
(44, 842828196, 'commodi', 'deserunt', 'soluta', '', 2, 'alias', 'voluptatem', 'voluptatibus', '', 0, '', 'Meeting', '2023-02-23', '2023-02-23', '15:53:00'),
(51, 7091235, 'quasi', 'officia', 'modi', '', 0, 'maiores', 'non', 'officia', '', 0, '', 'Meeting', '2023-01-09', '2023-01-09', '18:22:00'),
(65, 59, 'repudiandae', 'ipsam', 'sapiente', '', 4727037, 'assumenda', 'et', 'sunt', '', 0, 'daadada', 'Meeting', '2023-02-27', '2023-02-27', '10:51:00'),
(75, 746, 'eaque', 'minus', 'nemo', '', 25815385, 'aperiam', 'est', 'qui', '', 0, 'dada', 'Meeting', '2023-02-16', '2023-02-16', '15:23:00'),
(77, 0, 'inventore', 'quod', 'non', '', 2368, 'aperiam', 'rerum', 'harum', '', 0, 'dada', 'Meeting', '2023-02-16', '2023-02-16', '15:23:00'),
(84, 992730, 'quis', 'reprehenderit', 'maiores', '', 0, 'qui', 'dolor', 'sapiente', '', 0, '', 'Meeting', '2023-02-07', '2023-02-07', '17:52:00'),
(114, 95217, 'modi', 'unde', 'sed', '', 12812472, 'aut', 'aperiam', 'recusandae', '', 0, '', 'Meeting', '2023-02-22', '2023-02-22', '05:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `podms_profiling`
--

CREATE TABLE `podms_profiling` (
  `id` int(100) NOT NULL,
  `complainant_id_number` int(255) NOT NULL,
  `complainant_first_name` varchar(255) NOT NULL,
  `complainant_middle_name` varchar(255) NOT NULL,
  `complainant_last_name` varchar(255) NOT NULL,
  `complainant_section` varchar(255) NOT NULL,
  `complainant_course` varchar(255) NOT NULL,
  `complained_id_number` int(255) DEFAULT NULL,
  `complained_first_name` varchar(255) DEFAULT NULL,
  `complained_middle_name` varchar(255) DEFAULT NULL,
  `complained_last_name` varchar(255) NOT NULL,
  `complained_section` varchar(255) DEFAULT NULL,
  `complained_course` varchar(255) DEFAULT NULL,
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
  `image_name` mediumblob NOT NULL,
  `date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `podms_profiling`
--

INSERT INTO `podms_profiling` (`id`, `complainant_id_number`, `complainant_first_name`, `complainant_middle_name`, `complainant_last_name`, `complainant_section`, `complainant_course`, `complained_id_number`, `complained_first_name`, `complained_middle_name`, `complained_last_name`, `complained_section`, `complained_course`, `inci_desc`, `inci_date`, `inci_time`, `violation_level`, `violation`, `duties`, `duty_start`, `duty_end`, `duty_location`, `status`, `image_name`, `date`) VALUES
(216, 131231232, '131', '3123', '213123', '131', '3123', NULL, NULL, NULL, '', NULL, NULL, '12312321', '2023-03-03', '15:53', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(219, 48, '78', '64', '56', '61', '51', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(221, 30, '58', '60', '7', '93', '74', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(222, 62, '63', '22', '22', '12', '32', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(223, 86, '39', '17', '75', '69', '32', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(224, 26, '35', '9', '91', '86', '84', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(225, 80, '3', '28', '43', '83', '89', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(226, 63, '98', '95', '48', '60', '43', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(227, 22, '7', '65', '15', '45', '90', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(228, 68, '34', '2', '84', '82', '63', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(229, 87, '42', '17', '53', '60', '49', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(230, 84, '31', '51', '23', '1', '66', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(231, 89, '43', '67', '47', '91', '79', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(232, 97, '58', '26', '23', '78', '5', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(233, 60, '78', '91', '38', '23', '39', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(234, 62, '90', '51', '56', '1', '3', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(235, 80, '78', '94', '89', '51', '11', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(236, 77, '92', '64', '47', '100', '23', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(237, 82, '10', '10', '8', '25', '19', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(238, 48, '83', '89', '69', '88', '43', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(239, 89, '83', '84', '35', '22', '38', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(240, 68, '77', '62', '40', '11', '90', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(242, 48, '32', '14', '29', '50', '37', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(243, 25, '94', '44', '38', '59', '31', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(244, 42, '26', '93', '98', '32', '74', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(246, 18, '19', '42', '91', '72', '86', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(247, 57, '15', '87', '83', '64', '47', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(248, 63, '54', '87', '18', '15', '59', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(249, 99, '32', '74', '7', '44', '53', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(250, 74, '84', '48', '5', '28', '40', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(251, 99, '37', '66', '51', '16', '6', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(252, 91, '76', '67', '99', '61', '16', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(253, 13, '36', '54', '100', '82', '22', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(254, 36, '42', '72', '81', '18', '74', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(255, 53, '71', '44', '66', '27', '37', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(256, 80, '1', '63', '8', '8', '24', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(257, 75, '87', '74', '64', '25', '50', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(258, 61, '29', '97', '39', '15', '19', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(259, 22, '78', '84', '25', '81', '42', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(260, 65, '83', '80', '61', '8', '11', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(261, 58, '34', '9', '73', '27', '84', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(262, 23, '30', '62', '93', '19', '96', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(263, 62, '1', '46', '57', '5', '80', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(264, 97, '6', '12', '76', '98', '79', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(265, 69, '52', '41', '53', '85', '48', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(266, 63, '40', '48', '96', '95', '31', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(267, 77, '73', '7', '65', '69', '99', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(268, 95, '72', '61', '38', '61', '70', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(269, 97, '87', '86', '80', '53', '81', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(270, 48, '63', '2', '16', '86', '27', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(271, 88, '27', '22', '11', '54', '7', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(272, 64, '61', '43', '44', '37', '98', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(273, 80, '42', '87', '57', '54', '1', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(274, 23, '95', '65', '3', '69', '2', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(276, 45, '58', '96', '54', '69', '98', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(277, 68, '71', '39', '17', '28', '41', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(278, 44, '55', '98', '94', '77', '64', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(279, 62, '100', '43', '36', '82', '40', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(280, 98, '26', '69', '53', '55', '66', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(281, 48, '40', '81', '83', '12', '76', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(282, 45, '9', '73', '89', '16', '71', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(283, 86, '69', '7', '58', '41', '97', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(284, 26, '100', '14', '84', '69', '17', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(285, 68, '93', '86', '50', '62', '60', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(286, 95, '51', '7', '25', '54', '38', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(287, 18, '72', '18', '29', '68', '83', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(288, 53, '34', '58', '51', '48', '67', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(289, 59, '54', '97', '98', '3', '52', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(291, 93, '81', '62', '68', '28', '23', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(292, 79, '66', '39', '25', '28', '93', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(293, 69, '64', '7', '47', '47', '72', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(294, 68, '30', '19', '10', '42', '38', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(295, 90, '20', '74', '44', '29', '8', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(296, 78, '10', '81', '90', '20', '37', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(298, 47, '8', '60', '27', '71', '33', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(299, 34, '8', '55', '48', '99', '98', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(300, 36, '56', '50', '64', '21', '63', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(301, 29, '10', '65', '26', '49', '41', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(302, 45, '41', '83', '74', '39', '41', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(305, 68, '77', '29', '88', '56', '24', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(306, 13, '38', '24', '70', '33', '36', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(307, 26, '55', '64', '64', '12', '94', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(308, 31, '63', '70', '27', '47', '54', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(309, 16, '57', '10', '87', '80', '87', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(310, 42, '68', '15', '4', '93', '40', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(311, 29, '45', '13', '76', '46', '57', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(312, 46, '30', '24', '34', '100', '28', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(313, 88, '55', '2', '58', '88', '99', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(314, 20, '63', '45', '32', '55', '46', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(315, 67, '81', '80', '29', '99', '4', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(316, 94, '41', '33', '84', '45', '6', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(317, 11, '71', '21', '77', '7', '29', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03'),
(318, 24, '96', '92', '75', '56', '28', NULL, NULL, NULL, '', NULL, NULL, '', '', '', '', '', '', '00:00:00', '00:00:00', '', 1, '', '2023-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `podms_records`
--

CREATE TABLE `podms_records` (
  `id` int(100) NOT NULL,
  `complainant_id_number` int(255) NOT NULL,
  `complainant_first_name` varchar(255) NOT NULL,
  `complainant_middle_name` varchar(255) NOT NULL,
  `complainant_last_name` varchar(255) NOT NULL,
  `complainant_section` varchar(255) NOT NULL,
  `complainant_course` varchar(255) NOT NULL,
  `complained_id_number` int(255) DEFAULT NULL,
  `complained_first_name` varchar(255) DEFAULT NULL,
  `complained_middle_name` varchar(255) DEFAULT NULL,
  `complained_last_name` varchar(255) NOT NULL,
  `complained_section` varchar(255) DEFAULT NULL,
  `complained_course` varchar(255) DEFAULT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `podms_records`
--

INSERT INTO `podms_records` (`id`, `complainant_id_number`, `complainant_first_name`, `complainant_middle_name`, `complainant_last_name`, `complainant_section`, `complainant_course`, `complained_id_number`, `complained_first_name`, `complained_middle_name`, `complained_last_name`, `complained_section`, `complained_course`, `inci_desc`, `inci_date`, `inci_time`, `violation_level`, `violation`, `duties`, `duty_start`, `duty_end`, `duty_location`, `status`, `image_name`, `date`) VALUES
(28, 22323, 'Mertie', 'Cowart', 'Andrus-Mcguire', '', 'Affair Stores Ltd', 12321, '312', '3131', '31', '3131', '31231', '', '', '', 'grievance', '12312312', '', '00:00:00', '00:00:00', '', 3, 'IMG-64018364b0a1c4.67597239.jpg', '2023-02-10'),
(47, 21812, 'Laurel', 'Romero', 'Albers', '', 'Invest Stores LLC', 12321, '3123', '131', '231312', '31232', '1321312312', '', '', '', 'grievance', '123123', '', '00:00:00', '00:00:00', '', 2, 'IMG-640182c0d3a1e4.32773046.jpg', '2023-02-10'),
(118, 17003, 'Angelo', 'Hartnett', 'Fortney', '', 'Harvey Inc', 1312, '313', '1231', '313', '131', '31312321', '', '', '', 'grievance', '1231231', 'community service, duty', '04:17:00', '04:17:00', 'Canteen', 2, 'IMG-640181c9bea884.78568114.jpg', '2023-02-10'),
(167, 21312, 'asdasd', 'asdas', 'dadas', '', 'dasdas', 321, '312', '312312', '321', '21312', '123', '', '', '', 'grievance', '1231231', '', '00:00:00', '00:00:00', '', 2, 'IMG-6401820aeb11e6.71100994.jpg', '2023-02-10'),
(180, 21312, 'dassda', 'asdas', 'asdasd', '', 'asdasdas', 12312, '312312', '31', '3131', '3131', '31312', 'asdasdas', '2023-02-16', '03:14', 'grievance', '12312321', '', '00:00:00', '00:00:00', '', 2, 'IMG-64018294780ee0.54607427.jpg', '2023-02-11'),
(203, 123, '123213123', '13', '131', '', '31321', 12312312, 'sdasdas', 'asda', 'dad', 'asdas', 'BSIT', '3131', '2023-02-10', '06:16', 'minor', 'vandalisma', 'community service, duty', '08:27:00', '08:27:00', 'Canteen', 3, 'IMG-64013ee528d876.86017991.jpg', '2023-02-27'),
(204, 213, 'sd', 'qwwd', 'qwq', '', 'dqw', 12312, 'qweqw', 'ewqe', 'qweqw', 'eqwe', 'qweqweqweq', 'qdqwdqw', '2023-02-27', '06:22', 'minor', 'qweqeq', 'community service, duty', '08:34:00', '08:34:00', 'Canteen', 3, 'IMG-640140a0a69d36.93683096.jpg', '2023-02-27'),
(206, 0, '', '', '', '', '', 12312, '312312', '312', '32131', '312312', '312321312', 'sadasd', '2023-03-03', '13:25', 'grievance', '12312312', '', '00:00:00', '00:00:00', '', 3, 'IMG-6401855b04b1d4.99400875.jpg', '2023-03-03'),
(208, 1123123, '12weqe', 'qweq', 'ewew', 'ewqe', 'wqeqw', 12312321, 'wqeqewqeqeqweqw', 'qweqweq', 'qweqwe', 'qwe', 'qeqweqweq', 'eqeq', '2023-03-03', '14:56', 'grievance', 'qweqe', '', '00:00:00', '00:00:00', '', 3, 'IMG-64019b2a10d788.69683651.jpg', '2023-03-03'),
(209, 12312312, 'qweqeq', 'weqweq', 'eqwe', 'qeqw', 'eqw', 1231231, '31221', '312wqeqwe', 'qeq', 'eqweqw', 'eqweqweqe', 'eqeqeq', '2023-03-03', '15:01', 'grievance', 'qweqeq', '', '00:00:00', '00:00:00', '', 3, 'IMG-64019b9fe170d5.19347723.jpg', '2023-03-03'),
(210, 12312, '312312', '312', '321321', '312321', '3213', 12313, '12321', '231', '3123', '132', '132131', '131231231', '2023-03-03', '15:03', 'grievance', '21awqeqweqweq', '', '00:00:00', '00:00:00', '', 3, 'IMG-64019c8a0c99b5.43553036.jpg', '2023-03-03'),
(211, 12312, '3123', '131', '32131', '312', '13', 12312, '312321', '321', '31', '313', '1231123', '12312321', '2023-03-03', '00:31', 'grievance', '1231231', '', '00:00:00', '00:00:00', '', 3, 'IMG-64019ce11fbd78.52489779.jpg', '2023-03-03'),
(212, 12312, '312312', '312', '3123', '123', '12312', 123123, '123213', '12321', '312312', '312312', '312321312', '312312312312', '2023-03-03', '15:08', 'grievance', '1231231231', '', '00:00:00', '00:00:00', '', 3, 'IMG-64019dade3d6c3.42533176.jpg', '2023-03-03'),
(213, 123123, '2131', '313', '13131', '231', '3131', 1232, '3123123', '1312', '321321', '321321', '3131312', '31312', '2023-03-03', '15:09', 'grievance', '2131232', '', '00:00:00', '00:00:00', '', 3, 'IMG-64019fc6e7d2a7.95866878.jpg', '2023-03-03'),
(214, 12312, '31313', '131', '31', '3213', '131', 13, '1231232', '123123', '123', '13', '12312312', '3131321', '2023-03-03', '15:20', 'grievance', '21awqeqweqweq', '', '00:00:00', '00:00:00', '', 3, 'IMG-6401a3fa5704a6.05697573.jpg', '2023-03-03'),
(215, 234234, '234242', '42342', '4234', '23423', '2342424', 2147483647, 'asd', 'asdadasdad', 'ad', 'dad', 'asda', '2343242', '2023-02-02', '04:24', 'grievance', '12312312312', '', '00:00:00', '00:00:00', '', 3, 'IMG-6401a787056c30.29568902.jpg', '2023-03-03'),
(217, 123123, '12321', '321312', '3123', '12312', '312', 123123121, '312', '12312', '123', '2312', '1231', '312312312', '2023-03-03', '15:57', 'grievance', '21312321', '', '00:00:00', '00:00:00', '', 3, 'IMG-6401a86aab7458.52029337.jpg', '2023-03-03'),
(218, 123123, '12312', '3123213', '132', '1321', '32132', 123, '123213', '123', '1231', '23123', '123123123', '1312312312312', '2023-03-03', '16:14', 'grievance', '12312312', '', '00:00:00', '00:00:00', '', 3, 'IMG-6401ac598471e1.71925225.png', '2023-03-03'),
(220, 3, '9', '73', '40', '23', '60', 123, '12312', '312', '3123', '312312', '312312', '', '', '', 'grievance', '21312312', '', '00:00:00', '00:00:00', '', 3, 'IMG-6401b019837de2.19281914.png', '2023-03-03'),
(241, 10, '31', '45', '12', '2', '15', 123, '12312', '3123', '2131', '3123', '21312', '', '', '', 'grievance', '12312312', '', '00:00:00', '00:00:00', '', 3, 'IMG-640308fe7a8d69.55761303.png', '2023-03-03'),
(245, 4, '61', '28', '81', '29', '50', 123123, '12312', '321', '12321', '123', '123', '', '', '', 'grievance', '21312312', '', '00:00:00', '00:00:00', '', 3, 'IMG-6401bec71f4253.91131824.png', '2023-03-03'),
(275, 4, '9', '72', '68', '72', '90', 312, '12312', '213', '321', '321', '21312', '', '', '', 'grievance', '123123213123123', '', '00:00:00', '00:00:00', '', 3, 'IMG-6401b0248cb699.92073909.png', '2023-03-03'),
(290, 1, '51', '75', '67', '2', '83', 12312, '312312', '312', '313', '1212', '123123', '', '', '', 'grievance', '12312312', '', '00:00:00', '00:00:00', '', 3, 'IMG-6401af90e65572.17576568.png', '2023-03-03'),
(297, 1, '12', '16', '51', '26', '80', 312312, '312', '312', '12312', '213', '123123', '', '', '', 'grievance', '21312312', '', '00:00:00', '00:00:00', '', 3, 'IMG-6401affb2ca055.33532241.jpg', '2023-03-03'),
(303, 4, '6', '53', '4', '98', '3', 123123, '12321', '213', '12312', '123', '123112312', '', '', '', 'grievance', '1231312', '', '00:00:00', '00:00:00', '', 3, 'IMG-6401b09caa50c5.44433417.png', '2023-03-03'),
(304, 11, '54', '38', '75', '13', '80', 19016512, 'john marjj', 'zerna', 'escobar', '4204', 'bsit', '', '', '', 'minor', '21awqeqweqweq', 'NULL, duty', '01:26:00', '01:26:00', 'qweqwewqeqweq', 3, 'IMG-640773c24e2253.77120759.png', '2023-03-03');

-- --------------------------------------------------------

--
-- Table structure for table `podms_reports`
--

CREATE TABLE `podms_reports` (
  `id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `from` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `podms_reports`
--

INSERT INTO `podms_reports` (`id`, `date`, `from`, `description`, `content`, `status`) VALUES
(1, '2022-12-04 16:00:00', 'GUIDANCE', 'Guidance sent you a notification', 'Need to report in our office', 1),
(2, '2022-12-04 16:00:00', 'Safety and security', 'Safety and security sent you a notification', 'Need to report in our office', 1),
(3, '2023-01-20 16:00:00', 'SAS', 'DESCP1', 'CONTENT1', 1),
(5, '2023-02-25 16:00:00', 'SAS', 'asdasdasdashjkdhajkh', 'jkhjkdashjkdhjkashdjkashdhkjashdasdasdasdas', 1),
(6, '2023-02-25 16:00:00', 'CLINIC', 'asdasdaskhjdhaskhjdklj', 'kljdilsjaildjilasjldjasdasdasdasdasd', 1),
(7, '2023-02-25 19:37:54', 'Academic', 'sdaasdasdasdjkahjkdasjkhdkasjk', 'hjkdhsajkhdjkahsjkdhjkashjkdasdas', 1);

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `podms_sp_appointment`
--

INSERT INTO `podms_sp_appointment` (`id`, `complainant_id_number`, `complainant_first_name`, `complainant_middle_name`, `complainant_last_name`, `complainant_course`, `complained_id_number`, `complained_first_name`, `complained_middle_name`, `complained_last_name`, `complained_course`, `status`, `description`, `title`, `start`, `end`, `time`) VALUES
(4, 339883, 'culpa', 'nobis', 'quae', '', 14090, 'consequatur', 'modi', 'sit', '', 0, 'Quia et dolorem dolor dignissimos assumenda non. Sit voluptatibus eum accusantium dolore sit et architecto. Aliquam veniam ut laborum repellendus molestiae. Fugiat labore nam sit odio tempora. Veritatis sit et labore aliquid ut ipsum.', 'In autem non quas id voluptas deleniti blanditiis.', '1980-05-17', '1985-10-17', '00:25:32'),
(5, 93, 'in', 'amet', 'earum', '', 5, 'consequatur', 'est', 'velit', '', 0, 'Maiores adipisci quisquam veniam facere sed iste. Voluptates alias nobis magni accusamus qui sapiente expedita.', 'Deserunt doloremque vel est harum dolores quia vero voluptas.', '2001-04-25', '1993-06-03', '11:32:33'),
(7, 633014568, 'magni', 'magnam', 'omnis', '', 13, 'necessitatibus', 'et', 'in', '', 0, 'Earum rerum et soluta magnam id. Dicta amet illo odio quaerat omnis. Magni vel sed sint ea voluptatibus nihil.', 'Qui quidem animi ut sequi quos.', '1978-01-29', '1982-12-16', '14:42:57'),
(8, 48353876, 'consequatur', 'omnis', 'modi', '', 95243, 'excepturi', 'praesentium', 'sit', '', 0, 'Quia alias id accusantium omnis. Cumque quae sunt laborum iste non. Sit libero cum atque hic perspiciatis accusantium vel.', 'Est odio omnis commodi illo qui unde velit enim.', '1975-01-08', '2000-02-16', '15:12:04'),
(9, 8573610, 'quia', 'consequuntur', 'aliquid', '', 8, 'laborum', 'dolorem', 'sed', '', 0, 'Occaecati aliquid ducimus exercitationem. Nesciunt aperiam autem voluptas consequatur odit. Itaque soluta aut accusamus quae quos aut temporibus voluptatibus.', 'Ut quia nobis placeat ea illum.', '1982-07-03', '1982-04-05', '01:09:31'),
(11, 26, 'reiciendis', 'reprehenderit', 'hic', '', 1, 'quis', 'et', 'natus', '', 0, 'Sapiente beatae beatae corrupti sit sunt. Facilis earum voluptas culpa porro. Sapiente natus est odit eveniet repellendus est non voluptates. Ipsa consequatur est delectus ut ipsa.', 'Ullam id sint illo.', '1970-12-27', '1982-08-03', '12:16:11'),
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
(115, 748, 'aut', 'provident', 'qui', '', 83, 'sit', 'eligendi', 'quas', '', 0, 'Necessitatibus aut est et qui omnis est neque. Eaque at voluptates quibusdam aliquam sed. Qui et sit ullam reprehenderit maiores. Voluptate optio velit itaque saepe odit reiciendis voluptatem.', 'Sed ad eaque dolorem ea illum maxime deleniti voluptatibus.', '2013-02-09', '1997-04-27', '17:37:45'),
(116, 82289, 'ullam', 'beatae', 'quisquam', '', 860776, 'sequi', 'quis', 'suscipit', '', 0, 'Qui ipsum non quia occaecati iusto. Sed rerum tempora quam cupiditate optio. Repellendus qui quia nostrum molestias deserunt reiciendis voluptatum. Ut minus exercitationem facere in optio. Adipisci enim autem non asperiores explicabo assumenda.', 'Fugiat non consectetur accusamus eos in quae.', '1990-05-31', '2021-08-23', '22:46:01');

-- --------------------------------------------------------

--
-- Table structure for table `podms_users`
--

CREATE TABLE `podms_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `podms_users`
--

INSERT INTO `podms_users` (`id`, `name`, `username`, `password`, `position`) VALUES
(36, 'Admin', 'admin@bcp.com', 'as1jPyY=', 'admin'),
(37, 'Staff', 'staff1@bcp.com', 'eN1vMC5v', 'staff'),
(39, 'Jan Clarence Castillo', 'castillo.staff@bcp.com', 'YchgNSQ/ARHv9PPW7reD2+/OexkRcm79', 'staff');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `podms_violation`
--

INSERT INTO `podms_violation` (`id`, `viol_name`, `viol_first_off`, `viol_sec_off`, `viol_third_off`, `date_added`) VALUES
(1, 'asdasd', 'asd', 'as', 'das', '2023-02-12 16:00:00'),
(2, '213', '123', '123', '123', '2023-02-12 16:00:00'),
(4, '1', '1', '1', '1', '2023-02-12 16:00:00'),
(7, 'abcd', 'abcd', 'abcde', 'abcde', '2023-02-15 08:12:42'),
(8, '', '', '', '', '2023-02-23 17:41:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `podms_calendar`
--
ALTER TABLE `podms_calendar`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `podms_claimed_items`
--
ALTER TABLE `podms_claimed_items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_confiscated`
--
ALTER TABLE `podms_confiscated`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_duty`
--
ALTER TABLE `podms_duty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_events`
--
ALTER TABLE `podms_events`
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
-- Indexes for table `podms_users`
--
ALTER TABLE `podms_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podms_violation`
--
ALTER TABLE `podms_violation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `podms_calendar`
--
ALTER TABLE `podms_calendar`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `podms_claimed_items`
--
ALTER TABLE `podms_claimed_items`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `podms_confiscated`
--
ALTER TABLE `podms_confiscated`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `podms_duty`
--
ALTER TABLE `podms_duty`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `podms_events`
--
ALTER TABLE `podms_events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=115;

--
-- AUTO_INCREMENT for table `podms_profiling`
--
ALTER TABLE `podms_profiling`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=319;

--
-- AUTO_INCREMENT for table `podms_records`
--
ALTER TABLE `podms_records`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=305;

--
-- AUTO_INCREMENT for table `podms_reports`
--
ALTER TABLE `podms_reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `podms_sp_appointment`
--
ALTER TABLE `podms_sp_appointment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;

--
-- AUTO_INCREMENT for table `podms_users`
--
ALTER TABLE `podms_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `podms_violation`
--
ALTER TABLE `podms_violation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
