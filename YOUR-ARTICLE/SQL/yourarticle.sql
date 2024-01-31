-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2023 at 10:43 AM
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
-- Database: `yourarticle`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `Id` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Subject` varchar(255) NOT NULL,
  `Article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`Id`, `Name`, `Email`, `Subject`, `Article`) VALUES
(1, 'Shahid', 'theshahidshaikh07@gmail.com', 'Artificial Intelligence', 'Artificial intelligence (AI) is truly a revolutionary feat of computer science, set to become a core component of all modern software over the coming years and decades. This presents a threat but also an opportunity. AI will be deployed to augment both defensive and offensive cyber operations. Additionally, new means of cyber attack will be invented to take advantage of the particular weaknesses of AI technology. Finally, the importance of data will be amplified by AI’s appetite for large amounts of training data, redefining how we must think about data protection. Prudent governance at the global level will be essential to ensure that this era-defining technology will bring about broadly shared safety and prosperity.'),
(2, 'Gaurav', 'gauravtanpure999@gmail.com', 'Machine Learning', 'The concept of machine learning has been around for a long time (think of the World War II Enigma Machine, for example). However, the idea of automating the application of complex mathematical calculations to big data has only been around for several years, though it’s now gaining more momentum.\r\n\r\nAt a high level, machine learning is the ability to adapt to new data independently and through iterations.  Applications learn from previous computations and transactions and use “pattern recognition” to produce reliable and informed results.'),
(3, 'Abhijeet', 'abhijeetgaikwad670@gmail.com', 'Brain Computer Interface', 'Brain computer interfaces (BCI) provide a direct communication link between the brain and a computer or other external devices. They offer an extended degree of freedom either by strengthening or by substituting human peripheral working capacity and have potential applications in various fields such as rehabilitation, affective computing, robotics, gaming, and neuroscience. Significant research efforts on a global scale have delivered common platforms for technology standardization and help tackle highly complex and non-linear brain dynamics and related feature extraction and classification challenges. Time-variant psycho-neurophysiological fluctuations and their impact on brain signals impose another challenge for BCI researchers to transform the technology from laboratory experiments to plug-and-play daily life.'),
(4, 'Jayesh', 'dudhadejayesh03@gmail.com', 'Blockchain Technology', 'Blockchain is a technology that enables the secure sharing of information. Data, obviously, is stored in a database. Transactions are recorded in an account book called a ledger. A blockchain is a type of distributed database or ledger—one of today’s top tech trends—which means the power to update a blockchain is distributed between the nodes, or participants, of a public or private computer network. This is known as distributed ledger technology, or DLT. Nodes are incentivized with digital tokens or currency to make updates to blockchains.'),
(5, 'Karan', 'sathekaran7777@gmail.com', 'Digital Twin', 'A digital twin is a virtual model of a physical object. It spans the objects lifecycle and uses real time data sent from sensors on the object to simulate the behavior and monitor operations. Digital twins can replicate many real-world items, from single pieces of equipment in a factory to full installations, such as wind turbines and even entire cities. Digital twin technology allows you to oversee the performance of an asset, identify potential faults, and make better-informed decisions about maintenance and lifecycle.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'theshahidshaikh', 'shahid7777'),
(4, 'gaurav', 'gaurav7777'),
(5, 'abhijeet', 'abhi7777'),
(6, 'jayesh', 'jai7777'),
(7, 'karan', 'karan123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
