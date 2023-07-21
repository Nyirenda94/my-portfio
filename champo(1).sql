-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2023 at 02:13 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `champo`
--

-- --------------------------------------------------------

--
-- Table structure for table `my skills`
--

CREATE TABLE `my skills` (
  `ID` int(10) NOT NULL,
  `Skills` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patson`
--

CREATE TABLE `patson` (
  `ID` int(10) NOT NULL,
  `Bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patson`
--

INSERT INTO `patson` (`ID`, `Bio`) VALUES
(1, '<section class=\"bio\" id=\"about\">\r\n    <div class=\"student-bio\">\r\n      <h3>I\'m Patson Vincent Nyirenda</h3>\r\n      <h4>A Web Designer</h4>\r\n      <p><img class=\"me\" src=\"./Images/1.png\"  alt=\"1\" \r\n        style=\"width:170px;height:170px;margin-right:15px;\">\r\n        I\'m a Lilongwe based man pursuing a bachelors degree \r\n        in Information<br> and Communicatio Technology(ICT) \r\n        at Mzuzu University, weekend class<br> which is under\r\n         the Faculty of Faculty of Science, Technology and Innovation.\r\n      </p>\r\n     \r\n    </div>\r\n  </section>');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `ID` int(10) NOT NULL,
  `my projects` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
