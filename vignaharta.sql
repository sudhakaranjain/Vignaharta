-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2015 at 02:40 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `vignaharta`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `book_id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(5) NOT NULL,
  `link` varchar(40) NOT NULL,
  `page` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `name`, `price`, `link`, `page`) VALUES
(1, 'Interstellar', 200, 'images/sp1.jpg', ''),
(2, 'Gravity', 180, 'images/sp2.jpg', ''),
(3, 'The Imitation Game', 180, 'images/sp3.jpg', ''),
(4, 'A.I.Artificial Intelligence', 150, 'images/sp4.jpg', ''),
(5, 'Her', 100, 'images/sp5.jpg', ''),
(6, 'Avatar', 200, 'images/sp6.jpg', ''),
(7, 'Life of Pi', 180, 'images/tfios.jpg', 'TFIOS.php'),
(8, 'The Pursuit of Happyness', 150, 'images/ss1.jpg', 'SIDNEY.php'),
(9, 'The Theory of Everything', 180, 'images/hp1.jpg', 'HP.php'),
(10, 'Chappie', 100, 'images/lfa.jpg', 'LOOKINGphp'),
(11, 'Computer Networks', 599, 'images/tech1.jpg', 'CN.php'),
(12, 'Programming in Java', 699, 'images/j1.jpg', 'JAVA.php'),
(13, 'Java: Complete Reference', 645, 'images/java.jpg', 'JAVA2.php'),
(14, 'Concepts of Physics', 499, 'images/s1.jpeg', 'conofphy,php'),
(15, 'Engg. Thermodynamics', 499, 'images/s2.jpeg', 'enggthermo.php'),
(16, 'Principles of Physic', 499, 'images/s4.jpeg', 'princiofphy.php'),
(17, 'Financial Planning', 399, 'images/b1.jpeg', 'finanplan.php'),
(18, 'Business Mathematics', 499, 'images/b2.jpeg', 'busmath.php'),
(19, 'Style of Business', 299, 'images/b3.jpg', 'styleofbus.php'),
(20, 'JEE MAIN', 399, 'images/e1.jpeg', 'jeemain.php'),
(21, 'NDA & NA', 499, 'images/e2.jpeg', 'nda.php'),
(22, 'NDA/NA', 499, 'images/e3.jpeg', 'na.php'),
(23, 'Natwar Singh', 299, 'images/a1.jpeg', 'natwarsingh.php'),
(24, 'Dilip Kumar', 499, 'images/a2.jpeg', 'dilipkumar.php'),
(25, 'Ramchandra Guha', 199, 'images/a3.jpeg', 'ramchandraguha.php'),
(26, 'Islamic Stories', 499, 'images/r1.jpg', 'Islamicstories.php'),
(27, 'Islam: Religion Dialogue', 399, 'images/r2.jpg', 'Religiondialogue.php'),
(28, 'Holy Bible', 499, 'images/r3.jpg', 'theholybible.php'),
(29, 'The Siege', 499, 'images/h1.jpeg', 'SIEGE.php'),
(30, 'Ayodhya', 499, 'images/h2.jpeg', 'AYODHYA.php'),
(31, 'India since Independence', 349, 'images/h3.jpeg', 'ISI.php'),
(32, 'Akbar Birbal Stories', 299, 'images/c0.jpeg', 'AKBAR.php'),
(33, 'Ruskin Bond', 299, 'images/c1.jpeg', 'RUSKIN.php'),
(34, 'Tales of Toyland', 249, 'images/c2.jpeg', 'TOT.php');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
`contact_id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `comment` varchar(200) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `name`, `email`, `mobile`, `comment`) VALUES
(1, 'gmgk', 'fef', 88741, '');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE IF NOT EXISTS `registered` (
`customer_id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`customer_id`, `name`, `username`, `password`, `mobile`, `email`) VALUES
(1, 'Gloria', 'gloria', 'admin', 0, '9876543210'),
(2, 'Gloria', 'teknack', 'teknack', 88741, 'tellglorianazareth@g'),
(3, 'sta', 'sta', 'sta', 4456789078, ''),
(4, 'ac', 'ac', 'ac', 9967012920, '');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
`sales_id` int(3) NOT NULL,
  `customer_id` int(3) NOT NULL,
  `username` varchar(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `book_id` int(3) NOT NULL,
  `book_name` varchar(40) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `address` varchar(40) NOT NULL,
  `town` varchar(15) NOT NULL,
  `pincode` int(6) NOT NULL,
  `order_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`sales_id`, `customer_id`, `username`, `email`, `book_id`, `book_name`, `cost`, `address`, `town`, `pincode`, `order_date`) VALUES
(1, 1, 'abcd', 'tellglorianazareth@gmail.com', 1, 'Game Of Thrones', '500', 'ghj', 'm.m', 4020, '0000-00-00'),
(2, 1, 'gloria', 'aa@w', 2, 'Lord Of The Rings', '200', 'vgr', 'ggg', 400604, '0000-00-00'),
(3, 1, 'gloria', 'aa@w', 2, 'Lord Of The Rings', '200', 'vgr', 'ggg', 400604, '0000-00-00'),
(4, 1, 'greg', 'aa@w', 2, 'Lord Of The Rings', '200', 'g', 'y5h', 512, '0000-00-00'),
(5, 1, 'teknack', 'an@ax', 1, 'Game Of Thrones', '500', 'dcsd', 'csdc', 4520, '0000-00-00'),
(6, 1, 'teknack', 'an@ax', 1, 'Game Of Thrones', '500', 'dcsd', 'csdc', 4520, '0000-00-00'),
(7, 2, 'vev', 'an@ax', 8, 'Sidney Sheldon', '0', 'erev', 'vev', 4520, '0000-00-00'),
(8, 3, 'sta', '', 1, 'Game Of Thrones', '500', 'asd', 'dsc', 900876, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE IF NOT EXISTS `wishlist` (
`id` int(2) NOT NULL,
  `customer_id` int(2) NOT NULL,
  `book_id` int(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id`, `customer_id`, `book_id`) VALUES
(1, 1, 1),
(3, 1, 2),
(20, 2, 7),
(4, 2, 9),
(5, 2, 12),
(6, 2, 14),
(7, 2, 16),
(8, 2, 19),
(9, 2, 20),
(10, 2, 21),
(11, 2, 21),
(12, 2, 22),
(13, 2, 23),
(14, 2, 24),
(15, 2, 25),
(16, 2, 26),
(17, 2, 27),
(18, 2, 28),
(19, 2, 29),
(21, 2, 30),
(22, 2, 31),
(23, 2, 33),
(24, 2, 34),
(25, 3, 1),
(26, 3, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
 ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
 ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
 ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
 ADD PRIMARY KEY (`sales_id`), ADD KEY `customer_id` (`customer_id`), ADD KEY `book_id` (`book_id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
 ADD PRIMARY KEY (`id`), ADD KEY `customer_id` (`customer_id`,`book_id`), ADD KEY `book_id` (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
MODIFY `customer_id` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
MODIFY `sales_id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `sales`
--
ALTER TABLE `sales`
ADD CONSTRAINT `sales_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `registered` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `sales_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);

--
-- Constraints for table `wishlist`
--
ALTER TABLE `wishlist`
ADD CONSTRAINT `wishlist_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `registered` (`customer_id`),
ADD CONSTRAINT `wishlist_ibfk_2` FOREIGN KEY (`book_id`) REFERENCES `books` (`book_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
