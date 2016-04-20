-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Структура на таблица `actions`
--

CREATE TABLE `actions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `actions`
--

INSERT INTO `actions` (`id`, `name`) VALUES
(1, 'Chance created'),
(2, 'Goal'),
(3, 'Miss'),
(4, 'Save'),
(5, 'Blocked shot'),
(6, 'Nothing happened');

-- --------------------------------------------------------

--
-- Структура на таблица `matches`
--

CREATE TABLE `matches` (
  `id` int(11) NOT NULL,
  `team_1_id` int(11) NOT NULL,
  `team_2_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура на таблица `minutes`
--

CREATE TABLE `minutes` (
  `id` int(11) NOT NULL,
  `match_id` int(11) NOT NULL,
  `minute` int(11) NOT NULL,
  `action_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Структура на таблица `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf32_unicode_ci NOT NULL,
  `att` int(100) NOT NULL,
  `mid` int(100) NOT NULL,
  `def` int(100) NOT NULL,
  `gk` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Схема на данните от таблица `teams`
--

INSERT INTO `teams` (`id`, `name`, `att`, `mid`, `def`, `gk`) VALUES
(1, 'Arsenal', 81, 79, 76, 9),
(2, 'Liverpool', 77, 77, 79, 7),
(3, 'Manchester City', 81, 81, 81, 8),
(4, 'Chelsea', 83, 82, 81, 8),
(5, 'Leicester City', 75, 76, 74, 8);

-- --------------------------------------------------------

--
-- Структура на таблица `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username_sign` varchar(255) NOT NULL,
  `password_sign` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `second_name` varchar(255) NOT NULL,
  `team` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Схема на данните от таблица `users`
--

INSERT INTO `users` (`id`, `username_sign`, `password_sign`, `email`, `first_name`, `second_name`, `team`, `avatar`) VALUES
(7, 'bager', '8febe631fd4fef5700c2568d9184f5cb', 'bager@bager.bager', 'bager', 'bager', '2', ''),
(8, 'bagerMan', '81dc9bdb52d04dc20036dbd8313ed055', 'toshko_1998@abv.bg', 'Todor', 'Nikolov', 'BagerTown', ''),
(9, '?????????', '25f9e794323b453885f5181f1b624d0b', 'djeioadjjoiawe@abv.bg', 'dheiudhiuaui', '????????EIJWDAIJWH', '3', ''),
(10, '?????????', '25f9e794323b453885f5181f1b624d0b', 'djeioadjjoiawe@abv.bg', 'dheiudhiuaui', '????????EIJWDAIJWH', '3', ''),
(11, 'vaset0', '6267630cae0b3107b2d9e7a5b677049d', 'vaset0_98@abv.bg', 'vaset0', 'vaset0', '0', ''),
(12, 'zdravko', 'c9a43a39d6155531602c670e54b2a93b', 'zdravo98@gmail.com', 'Zdravko', 'Nedelchev', '3', ''),
(13, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'vaset0_98@abv.bg', 'admin', 'admin', '0', ''),
(14, 'asen', '7b036b60acfb075358681cb138297e13', 'asen@abv.bg', 'asen', 'asen', '2', ''),
(15, 'zxcasdsa', '81dc9bdb52d04dc20036dbd8313ed055', 'sssss@abbs', 'ssssssss', 'ssssssss', '0', ''),
(16, 'qwertyuiopasdfghjkl', '81dc9bdb52d04dc20036dbd8313ed055', 'sdadas@abv.bg', 'asdasdasd', 'dsadsada', '0', ''),
(17, 'admin1', '81dc9bdb52d04dc20036dbd8313ed055', 'vaset0_98@abv.bg', 'Nasko', 'Admiralov', 'Arsenal', 'http://vehicle.local/media/template_for_the_final_course.jpg'),
(18, '??????????', 'e10adc3949ba59abbe56e057f20f883e', 'kdjkkkaowd@abv.bg', '?????', '??????', 'Arsenal', 'http://vehicle.local/media/manager_32.png'),
(19, 'Damqn', '40a48f4a938862fc0400d5cc34ea5681', 'damqn@abv.bg', 'Damqn', 'Dimitrov', 'Man City', 'http://vehicle.local/media/4.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actions`
--
ALTER TABLE `actions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `matches`
--
ALTER TABLE `matches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minutes`
--
ALTER TABLE `minutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `actions`
--
ALTER TABLE `actions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `matches`
--
ALTER TABLE `matches`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `minutes`
--
ALTER TABLE `minutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
