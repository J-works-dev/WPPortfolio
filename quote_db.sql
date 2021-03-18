-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2021 at 05:41 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quote_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `quote_table`
--

CREATE TABLE `quote_table` (
  `id` int(11) NOT NULL,
  `qoute` char(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quote_table`
--

INSERT INTO `quote_table` (`id`, `qoute`) VALUES
(1, 'Be yourself. everyone else is already taken. -Oscar Wilde'),
(2, 'So many books, so little time. -Frank Zappa'),
(3, 'A room without books is like a body without a soul. -Marcus Tullius Cicero'),
(4, 'You only live once, but if you do it right, once is enough. -Mae West'),
(5, 'Be the change that you wish to see in the world. -Mahatma Gandhi'),
(6, 'In three words I can sum up everything I\'ve learned about life. it goes on. -Robert Frost'),
(7, 'If you tell the truth, you don\'t have to remember anything. -Mark Twain'),
(8, 'A friend is someone who knows all about you and still loves you. -Elbert Hubbard'),
(9, 'Always forgive your enemies; nothing annoys them so much. -Oscar Wilde'),
(10, 'Without music, life would be a mistake. -Friedrich Nietzsche, Twilight of the Idols');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quote_table`
--
ALTER TABLE `quote_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quote_table`
--
ALTER TABLE `quote_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
