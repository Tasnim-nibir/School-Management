-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2020 at 05:36 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schoolproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `number` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `role_id` int(11) NOT NULL,
  `rolename` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`role_id`, `rolename`) VALUES
(1, 'Admin'),
(2, 'Co Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_school`
--

CREATE TABLE `tbl_school` (
  `school_id` int(200) NOT NULL,
  `schoolname` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_school`
--

INSERT INTO `tbl_school` (`school_id`, `schoolname`, `branch`) VALUES
(1, 'ABC', 'Sunamgonj'),
(2, 'DEF', 'Sunamgonj'),
(3, 'GHI', 'Sunamgonj'),
(4, 'PQR', 'Sunamgonj'),
(5, 'XYZ', 'Sunamgonj'),
(6, 'EFG', 'Sunamgonj'),
(7, 'NTR', 'Sunamgonj'),
(8, 'PTR', 'Sunamgonj'),
(9, 'SST', 'Sunamgonj'),
(10, 'LLM', 'Sunamgonj'),
(12, 'ABCD', 'Sunamgonj');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student`
--

CREATE TABLE `tbl_student` (
  `id` int(200) NOT NULL,
  `studentname` varchar(200) NOT NULL,
  `school_id` int(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_student`
--

INSERT INTO `tbl_student` (`id`, `studentname`, `school_id`, `gender`, `email`, `class`) VALUES
(2, 'Akash', 8, 'Male', 'akash@gmail.com', '3'),
(3, 'Nibir', 9, 'Female', 'nibir@gmail.com', '3'),
(4, 'Toma', 10, 'Female', 'admin@gmail.com', '6'),
(5, 'Ema', 8, 'Female', 'tasnim@gmail.com', '2'),
(6, 'Mumu', 8, 'Female', 'tasnim@gmail.com', '9'),
(7, 'Shorme', 8, 'Female', 'admin@gmail.com', '10'),
(10, 'Rahat', 8, 'Male', 'rahat@gmail.com', '8'),
(11, 'Nibir', 8, 'Female', 'admin@gmail.com', '1'),
(12, 'Tasnim', 8, 'Female', 'admin@gmail.com', '2'),
(13, 'Nibir', 8, 'Female', 'tasnim@gmail.com', '10'),
(14, 'Suma', 8, 'Female', 'tasnim@gmail.com', '3'),
(15, 'Rima', 8, 'Female', 'admin@gmail.com', '4'),
(16, 'Abid', 8, 'Female', 'admin@gmail.com', '4'),
(17, 'Arif', 8, 'Female', 'admin@gmail.com', '5'),
(18, 'Rasel', 8, 'Female', 'admin@gmail.com', '6'),
(19, 'Anik', 8, 'Male', 'tasnim@gmail.com', '7'),
(20, 'Riya', 8, 'Female', 'tasnim@gmail.com', '8'),
(21, 'Nibir', 8, 'Female', 'tasnim@gmail.com', '4'),
(22, 'Tasnim', 8, 'Female', 'admin@gmail.com', '10'),
(23, 'Tasnim', 8, 'Female', 'tasnim@gmail.com', '5'),
(24, 'Tasnim', 8, 'Female', 'admin@gmail.com', '2'),
(25, 'Akash', 8, 'Female', 'admin@gmail.com', '9'),
(26, 'Tasnim', 8, 'Female', 'tasnim@gmail.com', '1'),
(27, 'Rima', 8, 'Female', 'admin@gmail.com', '5'),
(28, 'Rakib', 8, 'Female', 'rakib@gmail.com', '6'),
(29, 'Taniya', 3, 'Female', 'taniya@gmail.com', '7'),
(30, 'Ripa', 3, 'Female', 'ripa@gmail.com', '8'),
(31, 'Koli', 3, 'Female', 'koli@gmail.com', '10'),
(32, 'Shefa', 3, 'Female', 'admin@gmail.com', '7'),
(33, 'Akash', 1, 'Male', 'akash@gmail.com', '3'),
(34, 'Nibir', 1, 'Female', 'nibir@gmail.com', '3'),
(35, 'Toma', 1, 'Female', 'admin@gmail.com', '6'),
(36, 'Ema', 1, 'Female', 'tasnim@gmail.com', '2'),
(37, 'Mumu', 1, 'Female', 'tasnim@gmail.com', '9'),
(38, 'Shorme', 1, 'Female', 'admin@gmail.com', '10'),
(39, 'Rahat', 1, 'Male', 'rahat@gmail.com', '8'),
(40, 'Nibir', 2, 'Female', 'admin@gmail.com', '1'),
(41, 'Tasnim', 2, 'Female', 'admin@gmail.com', '2'),
(42, 'Nibir', 2, 'Female', 'tasnim@gmail.com', '10'),
(43, 'Suma', 2, 'Female', 'tasnim@gmail.com', '3'),
(44, 'Rima', 2, 'Female', 'admin@gmail.com', '4'),
(45, 'Abid', 2, 'Female', 'admin@gmail.com', '4'),
(46, 'Arif', 2, 'Female', 'admin@gmail.com', '5'),
(47, 'Rasel', 2, 'Female', 'admin@gmail.com', '6'),
(48, 'Anik', 2, 'Male', 'tasnim@gmail.com', '7'),
(49, 'Riya', 2, 'Female', 'tasnim@gmail.com', '8'),
(50, 'Nibir', 2, 'Female', 'tasnim@gmail.com', '4'),
(51, 'Tasnim', 1, 'Female', 'admin@gmail.com', '10'),
(52, 'Tasnim', 1, 'Female', 'tasnim@gmail.com', '5'),
(53, 'Tasnim', 1, 'Female', 'admin@gmail.com', '2'),
(54, 'Akash', 2, 'Female', 'admin@gmail.com', '9'),
(55, 'Tasnim', 3, 'Female', 'tasnim@gmail.com', '1'),
(56, 'Rima', 3, 'Female', 'admin@gmail.com', '5'),
(57, 'Rakib', 3, 'Female', 'rakib@gmail.com', '6'),
(58, 'Tasnim', 3, 'Female', 'tasnim@gmail.com', '1'),
(59, 'Rima', 3, 'Female', 'admin@gmail.com', '5'),
(60, 'Rakib', 3, 'Female', 'rakib@gmail.com', '6'),
(61, 'Akash', 1, 'Male', 'akash@gmail.com', '3'),
(62, 'Nibir', 1, 'Female', 'nibir@gmail.com', '3'),
(63, 'Toma', 1, 'Female', 'admin@gmail.com', '6'),
(64, 'Ema', 1, 'Female', 'tasnim@gmail.com', '2'),
(65, 'Mumu', 1, 'Female', 'tasnim@gmail.com', '9'),
(66, 'Shorme', 1, 'Female', 'admin@gmail.com', '10'),
(67, 'Rahat', 1, 'Male', 'rahat@gmail.com', '8'),
(68, 'Nibir', 2, 'Female', 'admin@gmail.com', '1'),
(69, 'Tasnim', 2, 'Female', 'admin@gmail.com', '2'),
(70, 'Nibir', 2, 'Female', 'tasnim@gmail.com', '10'),
(71, 'Suma', 2, 'Female', 'tasnim@gmail.com', '3'),
(72, 'Rima', 2, 'Female', 'admin@gmail.com', '4'),
(73, 'Abid', 2, 'Female', 'admin@gmail.com', '4'),
(74, 'Arif', 2, 'Female', 'admin@gmail.com', '5'),
(75, 'Rasel', 2, 'Female', 'admin@gmail.com', '6'),
(76, 'Anik', 2, 'Male', 'tasnim@gmail.com', '7'),
(77, 'Riya', 2, 'Female', 'tasnim@gmail.com', '8'),
(78, 'Nibir', 2, 'Female', 'tasnim@gmail.com', '4'),
(79, 'Tasnim', 1, 'Female', 'admin@gmail.com', '10'),
(80, 'Tasnim', 1, 'Female', 'tasnim@gmail.com', '5'),
(81, 'Tasnim', 1, 'Female', 'admin@gmail.com', '2'),
(82, 'Akash', 2, 'Female', 'admin@gmail.com', '9'),
(83, 'Tasnim', 3, 'Female', 'tasnim@gmail.com', '1'),
(84, 'Rima', 3, 'Female', 'admin@gmail.com', '5'),
(85, 'Rakib', 3, 'Female', 'rakib@gmail.com', '6'),
(86, 'Akash', 1, 'Male', 'akash@gmail.com', '3'),
(87, 'Nibir', 1, 'Female', 'nibir@gmail.com', '3'),
(88, 'Toma', 1, 'Female', 'admin@gmail.com', '6'),
(89, 'Ema', 1, 'Female', 'tasnim@gmail.com', '2'),
(90, 'Mumu', 1, 'Female', 'tasnim@gmail.com', '9'),
(91, 'Shorme', 1, 'Female', 'admin@gmail.com', '10'),
(92, 'Rahat', 1, 'Male', 'rahat@gmail.com', '8'),
(93, 'Nibir', 2, 'Female', 'admin@gmail.com', '1'),
(94, 'Tasnim', 2, 'Female', 'admin@gmail.com', '2'),
(95, 'Nibir', 2, 'Female', 'tasnim@gmail.com', '10'),
(96, 'Suma', 2, 'Female', 'tasnim@gmail.com', '3'),
(97, 'Rima', 2, 'Female', 'admin@gmail.com', '4'),
(98, 'Abid', 2, 'Female', 'admin@gmail.com', '4'),
(99, 'Arif', 2, 'Female', 'admin@gmail.com', '5'),
(100, 'Rasel', 2, 'Female', 'admin@gmail.com', '6'),
(101, 'Anik', 2, 'Male', 'tasnim@gmail.com', '7'),
(102, 'Riya', 2, 'Female', 'tasnim@gmail.com', '8'),
(103, 'Nibir', 2, 'Female', 'tasnim@gmail.com', '4'),
(104, 'Tasnim', 1, 'Female', 'admin@gmail.com', '10'),
(105, 'Tasnim', 1, 'Female', 'tasnim@gmail.com', '5'),
(106, 'Tasnim', 1, 'Female', 'admin@gmail.com', '2'),
(107, 'Akash', 2, 'Female', 'admin@gmail.com', '9'),
(108, 'Tasnim', 3, 'Female', 'tasnim@gmail.com', '1'),
(109, 'Rima', 3, 'Female', 'admin@gmail.com', '5'),
(110, 'Rakib', 3, 'Female', 'rakib@gmail.com', '6'),
(111, 'Akash', 4, 'Male', 'akash@gmail.com', '2'),
(112, 'Arfan', 4, 'Male', 'arfan@gmail.com', '3'),
(113, 'Abir', 4, 'Male', 'abir@gmail.com', '1'),
(114, 'Nibir', 4, 'Female', 'nibir@gmail.com', '2'),
(115, 'Nila', 4, 'Female', 'admin@gmail.com', '3'),
(116, 'Rima', 4, 'Female', 'admin@gmail.com', '4'),
(117, 'Ruhan', 4, 'Male', 'rrrr@gmail.com', '4'),
(119, 'Ruhan', 4, 'Male', 'ruahn@gmail.com', '5'),
(120, 'Akash', 4, 'Male', 'akash@gmail.com', '3'),
(121, 'Nibir', 4, 'Female', 'nibir@gmail.com', '3'),
(122, 'Toma', 4, 'Female', 'admin@gmail.com', '6'),
(123, 'Ema', 4, 'Female', 'tasnim@gmail.com', '2'),
(124, 'Mumu', 4, 'Female', 'tasnim@gmail.com', '9'),
(125, 'Shorme', 4, 'Female', 'admin@gmail.com', '10'),
(126, 'Rahat', 4, 'Male', 'rahat@gmail.com', '8'),
(127, 'Nibir', 4, 'Female', 'admin@gmail.com', '1'),
(128, 'Tasnim', 4, 'Female', 'admin@gmail.com', '2'),
(129, 'Nibir', 4, 'Female', 'tasnim@gmail.com', '10'),
(130, 'Suma', 4, 'Female', 'tasnim@gmail.com', '3'),
(131, 'Rima', 4, 'Female', 'admin@gmail.com', '4'),
(132, 'Abid', 4, 'Female', 'admin@gmail.com', '4'),
(133, 'Arif', 4, 'Female', 'admin@gmail.com', '5'),
(134, 'Rasel', 4, 'Female', 'admin@gmail.com', '6'),
(135, 'Anik', 4, 'Male', 'tasnim@gmail.com', '7'),
(136, 'Riya', 4, 'Female', 'tasnim@gmail.com', '8'),
(137, 'Nibir', 4, 'Female', 'tasnim@gmail.com', '4'),
(138, 'Tasnim', 4, 'Female', 'admin@gmail.com', '10'),
(139, 'Tasnim', 4, 'Female', 'tasnim@gmail.com', '5'),
(140, 'Tasnim', 4, 'Female', 'admin@gmail.com', '2'),
(141, 'Akash', 4, 'Female', 'admin@gmail.com', '9'),
(142, 'Tasnim', 4, 'Female', 'tasnim@gmail.com', '1'),
(143, 'Rima', 4, 'Female', 'admin@gmail.com', '5'),
(144, 'Rakib', 4, 'Female', 'rakib@gmail.com', '6'),
(145, 'Akash', 5, 'Male', 'akash@gmail.com', '3'),
(146, 'Nibir', 5, 'Female', 'nibir@gmail.com', '3'),
(147, 'Toma', 5, 'Female', 'admin@gmail.com', '6'),
(148, 'Ema', 5, 'Female', 'tasnim@gmail.com', '2'),
(149, 'Mumu', 5, 'Female', 'tasnim@gmail.com', '9'),
(150, 'Shorme', 5, 'Female', 'admin@gmail.com', '10'),
(151, 'Rahat', 5, 'Male', 'rahat@gmail.com', '8'),
(152, 'Nibir', 5, 'Female', 'admin@gmail.com', '1'),
(153, 'Tasnim', 5, 'Female', 'admin@gmail.com', '2'),
(154, 'Nibir', 5, 'Female', 'tasnim@gmail.com', '10'),
(155, 'Suma', 5, 'Female', 'tasnim@gmail.com', '3'),
(156, 'Rima', 5, 'Female', 'admin@gmail.com', '4'),
(157, 'Abid', 5, 'Female', 'admin@gmail.com', '4'),
(158, 'Arif', 5, 'Female', 'admin@gmail.com', '5'),
(159, 'Rasel', 5, 'Female', 'admin@gmail.com', '6'),
(160, 'Anik', 5, 'Male', 'tasnim@gmail.com', '7'),
(161, 'Riya', 5, 'Female', 'tasnim@gmail.com', '8'),
(162, 'Nibir', 5, 'Female', 'tasnim@gmail.com', '4'),
(163, 'Tasnim', 5, 'Female', 'admin@gmail.com', '10'),
(164, 'Tasnim', 5, 'Female', 'tasnim@gmail.com', '5'),
(165, 'Tasnim', 5, 'Female', 'admin@gmail.com', '2'),
(166, 'Akash', 5, 'Female', 'admin@gmail.com', '9'),
(167, 'Tasnim', 5, 'Female', 'tasnim@gmail.com', '1'),
(168, 'Rima', 5, 'Female', 'admin@gmail.com', '5'),
(169, 'Rakib', 5, 'Female', 'rakib@gmail.com', '6'),
(170, 'Akash', 9, 'Male', 'akash@gmail.com', '3'),
(171, 'Nibir', 9, 'Female', 'nibir@gmail.com', '3'),
(172, 'Toma', 9, 'Female', 'admin@gmail.com', '6'),
(173, 'Ema', 9, 'Female', 'tasnim@gmail.com', '2'),
(174, 'Mumu', 9, 'Female', 'tasnim@gmail.com', '9'),
(175, 'Shorme', 9, 'Female', 'admin@gmail.com', '10'),
(176, 'Rahat', 9, 'Male', 'rahat@gmail.com', '8'),
(177, 'Nibir', 9, 'Female', 'admin@gmail.com', '1'),
(178, 'Tasnim', 9, 'Female', 'admin@gmail.com', '2'),
(179, 'Nibir', 9, 'Female', 'tasnim@gmail.com', '10'),
(180, 'Suma', 9, 'Female', 'tasnim@gmail.com', '3'),
(181, 'Rima', 9, 'Female', 'admin@gmail.com', '4'),
(182, 'Abid', 9, 'Female', 'admin@gmail.com', '4'),
(183, 'Arif', 9, 'Female', 'admin@gmail.com', '5'),
(184, 'Rasel', 9, 'Female', 'admin@gmail.com', '6'),
(185, 'Anik', 9, 'Male', 'tasnim@gmail.com', '7'),
(186, 'Riya', 9, 'Female', 'tasnim@gmail.com', '8'),
(187, 'Nibir', 9, 'Female', 'tasnim@gmail.com', '4'),
(188, 'Tasnim', 9, 'Female', 'admin@gmail.com', '10'),
(189, 'Tasnim', 9, 'Female', 'tasnim@gmail.com', '5'),
(190, 'Tasnim', 9, 'Female', 'admin@gmail.com', '2'),
(191, 'Akash', 9, 'Female', 'admin@gmail.com', '9'),
(192, 'Tasnim', 9, 'Female', 'tasnim@gmail.com', '1'),
(193, 'Rima', 9, 'Female', 'admin@gmail.com', '5'),
(194, 'Rakib', 9, 'Female', 'rakib@gmail.com', '6'),
(195, 'Akash', 10, 'Male', 'akash@gmail.com', '3'),
(196, 'Nibir', 10, 'Female', 'nibir@gmail.com', '3'),
(197, 'Toma', 10, 'Female', 'admin@gmail.com', '6'),
(198, 'Ema', 10, 'Female', 'tasnim@gmail.com', '2'),
(199, 'Mumu', 10, 'Female', 'tasnim@gmail.com', '9'),
(200, 'Shorme', 10, 'Female', 'admin@gmail.com', '10'),
(201, 'Rahat', 10, 'Male', 'rahat@gmail.com', '8'),
(202, 'Nibir', 10, 'Female', 'admin@gmail.com', '1'),
(203, 'Tasnim', 10, 'Female', 'admin@gmail.com', '2'),
(204, 'Nibir', 10, 'Female', 'tasnim@gmail.com', '10'),
(205, 'Suma', 10, 'Female', 'tasnim@gmail.com', '3'),
(206, 'Rima', 10, 'Female', 'admin@gmail.com', '4'),
(207, 'Abid', 10, 'Female', 'admin@gmail.com', '4'),
(208, 'Arif', 10, 'Female', 'admin@gmail.com', '5'),
(209, 'Rasel', 10, 'Female', 'admin@gmail.com', '6'),
(210, 'Anik', 10, 'Male', 'tasnim@gmail.com', '7'),
(211, 'Riya', 10, 'Female', 'tasnim@gmail.com', '8'),
(212, 'Nibir', 10, 'Female', 'tasnim@gmail.com', '4'),
(213, 'Tasnim', 10, 'Female', 'admin@gmail.com', '10'),
(214, 'Tasnim', 10, 'Female', 'tasnim@gmail.com', '5'),
(215, 'Tasnim', 10, 'Female', 'admin@gmail.com', '2'),
(216, 'Akash', 10, 'Female', 'admin@gmail.com', '9'),
(217, 'Tasnim', 10, 'Female', 'tasnim@gmail.com', '1'),
(218, 'Rima', 10, 'Female', 'admin@gmail.com', '5'),
(219, 'Rakib', 10, 'Female', 'rakib@gmail.com', '6'),
(220, 'Akash', 1, 'Male', 'akash@gmail.com', '3'),
(221, 'Nibir', 1, 'Female', 'nibir@gmail.com', '3'),
(222, 'Toma', 1, 'Female', 'admin@gmail.com', '6'),
(223, 'Ema', 1, 'Female', 'tasnim@gmail.com', '2'),
(224, 'Mumu', 1, 'Female', 'tasnim@gmail.com', '9'),
(225, 'Shorme', 1, 'Female', 'admin@gmail.com', '10'),
(226, 'Rahat', 1, 'Male', 'rahat@gmail.com', '8'),
(227, 'Nibir', 1, 'Female', 'admin@gmail.com', '1'),
(228, 'Tasnim', 1, 'Female', 'admin@gmail.com', '2'),
(229, 'Nibir', 1, 'Female', 'tasnim@gmail.com', '10'),
(230, 'Suma', 1, 'Female', 'tasnim@gmail.com', '3'),
(231, 'Rima', 1, 'Female', 'admin@gmail.com', '4'),
(232, 'Abid', 1, 'Female', 'admin@gmail.com', '4'),
(233, 'Arif', 1, 'Female', 'admin@gmail.com', '5'),
(234, 'Rasel', 1, 'Female', 'admin@gmail.com', '6'),
(235, 'Anik', 1, 'Male', 'tasnim@gmail.com', '7'),
(236, 'Riya', 1, 'Female', 'tasnim@gmail.com', '8'),
(237, 'Nibir', 1, 'Female', 'tasnim@gmail.com', '4'),
(238, 'Tasnim', 1, 'Female', 'admin@gmail.com', '10'),
(239, 'Tasnim', 1, 'Female', 'tasnim@gmail.com', '5'),
(240, 'Tasnim', 1, 'Female', 'admin@gmail.com', '2'),
(241, 'Akash', 1, 'Female', 'admin@gmail.com', '9'),
(242, 'Tasnim', 1, 'Female', 'tasnim@gmail.com', '1'),
(243, 'Rima', 1, 'Female', 'admin@gmail.com', '5'),
(244, 'Rakib', 1, 'Female', 'rakib@gmail.com', '6'),
(245, 'Akash', 1, 'Male', 'akash@gmail.com', '3'),
(246, 'Nibir', 1, 'Female', 'nibir@gmail.com', '3'),
(247, 'Toma', 1, 'Female', 'admin@gmail.com', '6'),
(248, 'Ema', 1, 'Female', 'tasnim@gmail.com', '2'),
(249, 'Mumu', 1, 'Female', 'tasnim@gmail.com', '9'),
(250, 'Shorme', 1, 'Female', 'admin@gmail.com', '10'),
(251, 'Rahat', 1, 'Male', 'rahat@gmail.com', '8'),
(252, 'Nibir', 1, 'Female', 'admin@gmail.com', '1'),
(253, 'Tasnim', 1, 'Female', 'admin@gmail.com', '2'),
(254, 'Nibir', 1, 'Female', 'tasnim@gmail.com', '10'),
(255, 'Suma', 1, 'Female', 'tasnim@gmail.com', '3'),
(256, 'Rima', 1, 'Female', 'admin@gmail.com', '4'),
(257, 'Abid', 1, 'Female', 'admin@gmail.com', '4'),
(258, 'Arif', 1, 'Female', 'admin@gmail.com', '5'),
(259, 'Rasel', 1, 'Female', 'admin@gmail.com', '6'),
(260, 'Anik', 1, 'Male', 'tasnim@gmail.com', '7'),
(261, 'Riya', 1, 'Female', 'tasnim@gmail.com', '8'),
(262, 'Nibir', 1, 'Female', 'tasnim@gmail.com', '4'),
(263, 'Tasnim', 1, 'Female', 'admin@gmail.com', '10'),
(264, 'Tasnim', 1, 'Female', 'tasnim@gmail.com', '5'),
(265, 'Tasnim', 1, 'Female', 'admin@gmail.com', '2'),
(266, 'Akash', 1, 'Female', 'admin@gmail.com', '9'),
(267, 'Tasnim', 1, 'Female', 'tasnim@gmail.com', '1'),
(268, 'Rima', 1, 'Female', 'admin@gmail.com', '5'),
(269, 'Rakib', 1, 'Female', 'rakib@gmail.com', '6'),
(272, 'Rahat', 7, 'Male', 'rahat@gmail.com', '4'),
(273, 'Tahmid', 7, 'Male', 'tahmid@gmail.com', '5'),
(274, 'priya', 6, 'Female', 'priya@gmail.com', '9'),
(275, 'Tasnim', 12, 'Female', 'tasnim@gmail.com', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teacher`
--

CREATE TABLE `tbl_teacher` (
  `id` int(200) NOT NULL,
  `teachername` varchar(200) NOT NULL,
  `school_id` int(200) NOT NULL,
  `phnnum` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `class` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_teacher`
--

INSERT INTO `tbl_teacher` (`id`, `teachername`, `school_id`, `phnnum`, `email`, `gender`, `class`) VALUES
(1, 'Nibir', 2, '01654789524', 'admin@gmail.com', 'Female', '10'),
(2, 'Tasnim', 1, '01524153624', 'tasnim@gmail.com', 'Female', '9'),
(3, 'Taspia', 1, '01748526179', 'tasnim@gmail.com', 'Female', '8'),
(4, 'Joyita', 1, '01745862765', 'toma@gmail.com', 'Female', '3'),
(5, 'Shorme', 1, '0175423168574', 'admin@gmail.com', 'Female', '2'),
(6, 'Tasnim', 1, '0132457836', 'tasnim@gmail.com', 'Female', '4'),
(7, 'Wahida', 1, '01784521673', 'tasnim@gmail.com', 'Female', '6'),
(8, 'Papia', 2, '01723456789', 'tasnim@gmail.com', 'Female', '7'),
(9, 'Taspia', 2, '01723456789', 'toma@gmail.com', 'Female', '9'),
(10, 'Shorme', 2, '01723456789', 'toma@gmail.com', 'Female', '2'),
(11, 'Wahida', 2, '01723456789', 'mumu@gmail.com', 'Female', '6'),
(12, 'Nibir', 2, '01748574256', 'admin@gmail.com', 'Female', '10'),
(13, 'Tasnim', 1, '01524153624', 'tasnim@gmail.com', 'Female', '9'),
(14, 'Taspia', 1, '01748526179', 'tasnim@gmail.com', 'Female', '8'),
(15, 'Joyita', 1, '01745862765', 'toma@gmail.com', 'Female', '3'),
(16, 'Shorme', 1, '0175423168574', 'admin@gmail.com', 'Female', '2'),
(17, 'Tasnim', 1, '0132457836', 'tasnim@gmail.com', 'Female', '4'),
(18, 'Wahida', 1, '01784521673', 'tasnim@gmail.com', 'Female', '6'),
(19, 'Papia', 2, '01723456789', 'tasnim@gmail.com', 'Female', '7'),
(20, 'Taspia', 2, '01723456789', 'toma@gmail.com', 'Female', '9'),
(21, 'Shorme', 2, '01723456789', 'toma@gmail.com', 'Female', '2'),
(22, 'Wahida', 2, '01723456789', 'mumu@gmail.com', 'Female', '6'),
(23, 'Nibir', 3, '01654789524', 'admin@gmail.com', 'Female', '10'),
(24, 'Tasnim', 3, '01524153624', 'tasnim@gmail.com', 'Female', '9'),
(25, 'Taspia', 3, '01748526179', 'tasnim@gmail.com', 'Female', '8'),
(26, 'Joyita', 3, '01745862765', 'toma@gmail.com', 'Female', '3'),
(27, 'Shorme', 3, '0175423168574', 'admin@gmail.com', 'Female', '2'),
(28, 'Tasnim', 3, '0132457836', 'tasnim@gmail.com', 'Female', '4'),
(29, 'Wahida', 3, '01784521673', 'tasnim@gmail.com', 'Female', '6'),
(30, 'Papia', 3, '01723456789', 'tasnim@gmail.com', 'Female', '7'),
(31, 'Taspia', 3, '01723456789', 'toma@gmail.com', 'Female', '9'),
(32, 'Shorme', 3, '01723456789', 'toma@gmail.com', 'Female', '2'),
(33, 'Wahida', 3, '01723456789', 'mumu@gmail.com', 'Female', '6'),
(34, 'Nibir', 3, '01748574256', 'admin@gmail.com', 'Female', '10'),
(35, 'Tasnim', 4, '01524153624', 'tasnim@gmail.com', 'Female', '9'),
(36, 'Taspia', 4, '01748526179', 'tasnim@gmail.com', 'Female', '8'),
(37, 'Joyita', 4, '01745862765', 'toma@gmail.com', 'Female', '3'),
(38, 'Shorme', 4, '0175423168574', 'admin@gmail.com', 'Female', '2'),
(39, 'Tasnim', 4, '0132457836', 'tasnim@gmail.com', 'Female', '4'),
(40, 'Wahida', 4, '01784521673', 'tasnim@gmail.com', 'Female', '6'),
(41, 'Papia', 4, '01723456789', 'tasnim@gmail.com', 'Female', '7'),
(42, 'Taspia', 4, '01723456789', 'toma@gmail.com', 'Female', '9'),
(43, 'Shorme', 4, '01723456789', 'toma@gmail.com', 'Female', '2'),
(44, 'Wahida', 4, '01723456789', 'mumu@gmail.com', 'Female', '6'),
(45, 'Nibir', 5, '01654789524', 'admin@gmail.com', 'Female', '10'),
(46, 'Tasnim', 8, '01524153624', 'tasnim@gmail.com', 'Female', '9'),
(47, 'Taspia', 9, '01748526179', 'tasnim@gmail.com', 'Female', '8'),
(48, 'Joyita', 10, '01745862765', 'toma@gmail.com', 'Female', '3'),
(49, 'Shorme', 5, '0175423168574', 'admin@gmail.com', 'Female', '2'),
(50, 'Tasnim', 8, '0132457836', 'tasnim@gmail.com', 'Female', '4'),
(51, 'Wahida', 9, '01784521673', 'tasnim@gmail.com', 'Female', '6'),
(52, 'Papia', 10, '01723456789', 'tasnim@gmail.com', 'Female', '7'),
(53, 'Taspia', 5, '01723456789', 'toma@gmail.com', 'Female', '9'),
(54, 'Shorme', 8, '01723456789', 'toma@gmail.com', 'Female', '2'),
(55, 'Wahida', 9, '01723456789', 'mumu@gmail.com', 'Female', '6'),
(56, 'Nibir', 10, '01748574256', 'admin@gmail.com', 'Female', '10'),
(57, 'Tasnim', 5, '01524153624', 'tasnim@gmail.com', 'Female', '9'),
(58, 'Taspia', 8, '01748526179', 'tasnim@gmail.com', 'Female', '8'),
(59, 'Joyita', 9, '01745862765', 'toma@gmail.com', 'Female', '3'),
(60, 'Shorme', 10, '0175423168574', 'admin@gmail.com', 'Female', '2'),
(61, 'Tasnim', 5, '0132457836', 'tasnim@gmail.com', 'Female', '4'),
(62, 'Wahida', 8, '01784521673', 'tasnim@gmail.com', 'Female', '6'),
(63, 'Papia', 9, '01723456789', 'tasnim@gmail.com', 'Female', '7'),
(64, 'Taspia', 10, '01723456789', 'toma@gmail.com', 'Female', '9'),
(65, 'Shorme', 5, '01723456789', 'toma@gmail.com', 'Female', '2'),
(66, 'Wahida', 8, '01723456789', 'mumu@gmail.com', 'Female', '6'),
(67, 'Nibir', 9, '01654789524', 'admin@gmail.com', 'Female', '10'),
(68, 'Tasnim', 10, '01524153624', 'tasnim@gmail.com', 'Female', '9'),
(69, 'Taspia', 5, '01748526179', 'tasnim@gmail.com', 'Female', '8'),
(70, 'Nibir', 5, '01654789524', 'admin@gmail.com', 'Female', '10'),
(71, 'Tasnim', 5, '01524153624', 'tasnim@gmail.com', 'Female', '9'),
(72, 'Taspia', 5, '01748526179', 'tasnim@gmail.com', 'Female', '8'),
(73, 'Joyita', 5, '01745862765', 'toma@gmail.com', 'Female', '3'),
(74, 'Shorme', 5, '0175423168574', 'admin@gmail.com', 'Female', '2'),
(75, 'Tasnim', 5, '0132457836', 'tasnim@gmail.com', 'Female', '4'),
(76, 'Wahida', 8, '01784521673', 'tasnim@gmail.com', 'Female', '6'),
(77, 'Papia', 8, '01723456789', 'tasnim@gmail.com', 'Female', '7'),
(78, 'Taspia', 8, '01723456789', 'toma@gmail.com', 'Female', '9'),
(79, 'Shorme', 8, '01723456789', 'toma@gmail.com', 'Female', '2'),
(80, 'Wahida', 8, '01723456789', 'mumu@gmail.com', 'Female', '6'),
(81, 'Nibir', 8, '01748574256', 'admin@gmail.com', 'Female', '10'),
(82, 'Tasnim', 8, '01524153624', 'tasnim@gmail.com', 'Female', '9'),
(83, 'Taspia', 9, '01748526179', 'tasnim@gmail.com', 'Female', '8'),
(84, 'Joyita', 9, '01745862765', 'toma@gmail.com', 'Female', '3'),
(85, 'Shorme', 9, '0175423168574', 'admin@gmail.com', 'Female', '2'),
(86, 'Tasnim', 9, '0132457836', 'tasnim@gmail.com', 'Female', '4'),
(87, 'Wahida', 9, '01784521673', 'tasnim@gmail.com', 'Female', '6'),
(88, 'Papia', 9, '01723456789', 'tasnim@gmail.com', 'Female', '7'),
(89, 'Taspia', 10, '01723456789', 'toma@gmail.com', 'Female', '9'),
(90, 'Shorme', 10, '01723456789', 'toma@gmail.com', 'Female', '2'),
(91, 'Wahida', 10, '01723456789', 'mumu@gmail.com', 'Female', '6'),
(92, 'Nibir', 10, '01654789524', 'admin@gmail.com', 'Female', '10'),
(93, 'Tasnim', 10, '01524153624', 'tasnim@gmail.com', 'Female', '9'),
(94, 'Taspia', 10, '01748526179', 'tasnim@gmail.com', 'Female', '8'),
(95, 'Riya', 6, 'riya@gmail.com', 'riya@gmail.com', 'Female', '4'),
(96, 'Taniya', 6, 'taniya@gmail.com', 'taniya@gmail.com', 'Female', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` int(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `school_id` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `role_id` int(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `confpwd` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `username`, `school_id`, `email`, `gender`, `role_id`, `password`, `confpwd`) VALUES
(1, 'Admin', 0, 'admin@gmail.com', 'Female', 1, '1234', '1234'),
(2, 'Tasnim', 1, 'tasnim@gmail.com', 'Female', 2, '1234', '1234'),
(3, 'Nibir', 2, 'nibir@gmail.com', 'Female', 2, '1234', '1234'),
(5, 'Toma', 3, 'toma@gmail.com', 'Female', 2, '1234', '1234'),
(6, 'Mumu', 4, 'mumu@gmail.com', 'Female', 2, '1234', '1234'),
(7, 'Ema', 6, 'ema@gmail.com', 'Female', 2, '1234', '1234'),
(8, 'Shorme', 7, 'shorme@gmail.com', 'Female', 2, '1234', '1234'),
(9, 'Taspia', 8, 'taspia@gmail.com', 'Female', 2, '1234', '1234'),
(10, 'Joyita', 9, 'joyita@gmail.com', 'Female', 2, '1234', '1234'),
(11, 'Wahida', 10, 'wahida@gmail.com', 'Female', 2, '1234', '1234'),
(12, 'Archita', 11, 'archita@gmail.com', 'Female', 2, '1234', '1234'),
(13, 'Nibir', 5, 'nibir@gmail.com', 'Female', 2, '1234', '1234'),
(14, 'Shima', 12, 'shima@gmail.com', 'Female', 2, '1234', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `tbl_school`
--
ALTER TABLE `tbl_school`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `tbl_student`
--
ALTER TABLE `tbl_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_school`
--
ALTER TABLE `tbl_school`
  MODIFY `school_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_student`
--
ALTER TABLE `tbl_student`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=276;

--
-- AUTO_INCREMENT for table `tbl_teacher`
--
ALTER TABLE `tbl_teacher`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `user_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
