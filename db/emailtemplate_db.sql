-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2023 at 11:04 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `emailtemplate_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `etemp_category`
--

CREATE TABLE `etemp_category` (
  `id` int(11) NOT NULL,
  `category_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etemp_category`
--

INSERT INTO `etemp_category` (`id`, `category_name`) VALUES
(10, 'APPS');

-- --------------------------------------------------------

--
-- Table structure for table `etemp_tags`
--

CREATE TABLE `etemp_tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etemp_tags`
--

INSERT INTO `etemp_tags` (`id`, `tag_name`, `date_created`, `created_by`) VALUES
(1, 'test', '2023-04-06 07:19:08', 1),
(2, 'email templates', '2023-04-06 07:19:32', 1),
(3, 'update contents', '2023-04-06 07:58:59', 1),
(4, 'seo', '2023-04-06 08:18:44', 1);

-- --------------------------------------------------------

--
-- Table structure for table `etemp_templates`
--

CREATE TABLE `etemp_templates` (
  `id` int(11) NOT NULL,
  `template_name` varchar(225) NOT NULL,
  `template_body` text NOT NULL,
  `template_category` varchar(225) NOT NULL,
  `template_date_created` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `template_created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `etemp_users`
--

CREATE TABLE `etemp_users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(225) NOT NULL,
  `last_name` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `etemp_users`
--

INSERT INTO `etemp_users` (`id`, `first_name`, `last_name`, `username`, `password`, `role`) VALUES
(1, 'Obed', 'Ouano', 'bedouano', '202cb962ac59075b964b07152d234b70', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `etemp_category`
--
ALTER TABLE `etemp_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `category_name` (`category_name`);

--
-- Indexes for table `etemp_tags`
--
ALTER TABLE `etemp_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tag_name` (`tag_name`);

--
-- Indexes for table `etemp_templates`
--
ALTER TABLE `etemp_templates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etemp_users`
--
ALTER TABLE `etemp_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `etemp_category`
--
ALTER TABLE `etemp_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `etemp_tags`
--
ALTER TABLE `etemp_tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `etemp_templates`
--
ALTER TABLE `etemp_templates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `etemp_users`
--
ALTER TABLE `etemp_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
