-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 28, 2019 at 01:06 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metta`
--

-- --------------------------------------------------------

--
-- Table structure for table `social`
--

CREATE TABLE `social` (
  `id` int(5) NOT NULL,
  `facebook` varchar(1000) NOT NULL,
  `instagram` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social`
--

INSERT INTO `social` (`id`, `facebook`, `instagram`) VALUES
(1, 'https://web.facebook.com/ardhan.hidayat', 'https://www.instagram.com/ardan_hid'),
(2, 'https://facebook.com/argahut', 'https://instagram.com/argahutama'),
(4, 'https://web.facebook.com/Fahras1998?_rdc=1&_rdr', 'https://instagram.com/fahrashidayat');
COMMIT;


CREATE TABLE `author` (
  `foto` varchar(40) NOT NULL,
  `biodata` varchar(1000) NOT NULL,
  `link` varchar(40) NOT NULL,
  `id` int(1) DEFAULT NULL,
  `nama` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`foto`, `biodata`, `link`, `id`, `nama`) VALUES
('assets/images/ardan1.jpg', 'Hanya orang biasa yang suka ngemilin bakwan goreng Suka baca buku , tapi ga pernah tamat', 'assets/UTS/Ardan Hidayat/index.html', 1, 'ARDAN HIDAYAT'),
('assets/UTS/Arga/profilepic.JPG', 'If you never try, you\'ll never know', 'assets/UTS/Arga/index.html', 2, 'ARGA HUTAMA'),
('assets/UTS/fachri/fachri.jpeg', 'Hallo nama Saya Fachri', 'assets/UTS/fachri/index.html', 3, 'FACHRI HUSAINI'),
('assets/UTS/Fahras/fahras.jpeg', 'Stay noob but keep growing', 'https://fahras-curriculum-vi.firebaseapp', 4, 'FAHRAS NUR HIDAYAT');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
