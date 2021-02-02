-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 12, 2020 at 05:57 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `excelfile`
--

-- --------------------------------------------------------

--
-- Table structure for table `milestone`
--

CREATE TABLE `milestone` (
  `ml_id` int(11) NOT NULL,
  `name1` varchar(1000) NOT NULL,
  `name2` varchar(1000) NOT NULL,
  `name3` varchar(1000) NOT NULL,
  `name4` varchar(1000) NOT NULL,
  `name5` varchar(1000) NOT NULL,
  `name6` varchar(1000) NOT NULL,
  `name7` varchar(1000) NOT NULL,
  `name8` varchar(1000) NOT NULL,
  `name9` varchar(1000) NOT NULL,
  `name10` varchar(1000) NOT NULL,
  `name11` varchar(1000) NOT NULL,
  `name12` varchar(1000) NOT NULL,
  `name13` varchar(1000) NOT NULL,
  `name14` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milestone`
--

INSERT INTO `milestone` (`ml_id`, `name1`, `name2`, `name3`, `name4`, `name5`, `name6`, `name7`, `name8`, `name9`, `name10`, `name11`, `name12`, `name13`, `name14`) VALUES
(1, 'Milestone / Advance Payment ID', 'Milestone Title (ENG)', 'Milestone Title (RUS)', 'Level 2 Schedule ID', 'Milestone Date', 'Milestone Price, USD', 'Advance payment, USD', 'Quarterly advance payment depreciation, USD', 'General advance payment depreciation, USD', 'Balance payment, USD', '', '', '', ''),
(2, '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '', '', '', ''),
(3, 'LT.U1.04.00.0.PM.M.0', 'ShEM-3 control rod drive. Start of manufacture (completion of procurement procedure, selection of subcontractor, conclusion of contract, commencement of technical documentation elaboration)', 'ÐŸÑ€Ð¸Ð²Ð¾Ð´ Ð¡Ð£Ð— Ð¨Ð­Ðœ-3. ÐÐ°Ñ‡Ð°Ð»Ð¾ Ð¸Ð·Ð³Ð¾Ñ‚Ð¾Ð²Ð»ÐµÐ½Ð¸Ñ (Ð·Ð°Ð²ÐµÑ€ÑˆÐµÐ½Ð¸Ðµ Ð·Ð°ÐºÑƒÐ¿Ð¾Ñ‡Ð½Ð¾Ð¹ Ð¿Ñ€Ð¾Ñ†ÐµÐ´ÑƒÑ€Ñ‹, Ð²Ñ‹Ð±Ð¾Ñ€Ð° ÑÑƒÐ±Ð¿Ð¾Ð´Ñ€ÑÐ´Ñ‡Ð¸ÐºÐ°, Ð·Ð°ÐºÐ»ÑŽÑ‡ÐµÐ½Ð¸Ðµ Ð´Ð¾Ð³Ð¾Ð²Ð¾Ñ€Ð°, Ð½Ð°Ñ‡Ð°Ð»Ð° Ñ€Ð°Ð·Ñ€Ð°Ð±Ð¾Ñ‚ÐºÐ¸ Ñ‚ÐµÑ…Ð½Ð¸Ñ‡ÐµÑÐºÐ¾Ð¹ Ð´Ð¾ÐºÑƒÐ¼ÐµÐ½Ñ‚Ð°Ñ†Ð¸Ð¸)', 'LT.U1.04.00.0.', '43475', '5783939', '', '-545425.45', '-32968.45000000042', '5205545.1', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `milestone`
--
ALTER TABLE `milestone`
  ADD PRIMARY KEY (`ml_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `milestone`
--
ALTER TABLE `milestone`
  MODIFY `ml_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
