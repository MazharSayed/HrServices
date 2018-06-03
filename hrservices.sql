-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2017 at 06:30 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hrservices`
--

-- --------------------------------------------------------

--
-- Table structure for table `hruser`
--

CREATE TABLE IF NOT EXISTS `hruser` (
  `name` varchar(100) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hruser`
--

INSERT INTO `hruser` (`name`, `username`, `password`, `email`, `gender`) VALUES
('mubeen', 'mub', '123456', '0', 'male'),
('mubeen', 'mub', '12345', 'mubeenmohd97@gmail.com', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `name` varchar(200) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `resume` int(3) NOT NULL,
  `path` varchar(500) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `email`, `resume`, `path`, `status`) VALUES
('afroz', 'Afroz123', 'Afroz123', 'afrozshaikh3333@gmail.com', 1, 'resumes/Final-demo-2017.pdf', '1'),
('zeeshan ahmed', 'zeeshan', 'mubeen', 'ahmedzeeshan314@gmail.com', 1, 'resumes/ch19.pdf', '1'),
('farhan ahmed khan', 'farhan kha', 'farhan007', 'farhan.fk12@gmail.com', 0, '', '0'),
('mohammad kamran', 'mk11', 'mk123', 'kamranmd386@gmail.com', 1, 'resumes/NATURAL-RESOURCES-AND-ENVIRONMENTAL-JUSTICE-BOOK-REVIEW-28th.pdf', '1'),
('nadeem shaikh', 'nsk3240', 'nsk3240', 'nsk3240@gmail.com', 1, 'resumes/Final-demo-2017.pdf', '1'),
('ahmed', 'ahmed', 'asdf', 'rajpateel248@gmaul.com', 0, '', '0'),
('sadat hussain', 'sadat', '12345', 'sadcompiler@gmail.com', 1, 'resumes/From-16-2016-2017.pdf', '0'),
('tauseef', 'taa', '1234', 'sadsain@rediffmail.com', 1, 'resumes/PYBOM00468960000000207.pdf', '1'),
('Abdul NAveed', 'AbdulNavee', 'naveedn1433', 'snaveed166@gmail.com', 0, '', '0'),
('tau', 'ahm', '9922', 'tauseefahmed782@gmail.com', 1, 'resumes/The-Depletion-of-Natural-Resources.pdf', '0'),
('prity', 'prity', '123456', 'thakurpriti00@gmai.com', 1, 'resumes/NATURAL-RESOURCES-AND-ENVIRONMENTAL-JUSTICE-BOOK-REVIEW-28th.pdf', '1'),
('prity', 'prity', '123456', 'thakurpriti00@gmail.com', 1, 'resumes/NATURAL-RESOURCES-AND-ENVIRONMENTAL-JUSTICE-BOOK-REVIEW-28th.pdf', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hruser`
--
ALTER TABLE `hruser`
 ADD PRIMARY KEY (`email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`email`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
