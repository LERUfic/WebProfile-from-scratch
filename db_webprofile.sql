-- phpMyAdmin SQL Dump
-- version 4.6.6deb4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 24, 2017 at 05:33 AM
-- Server version: 10.1.22-MariaDB-
-- PHP Version: 7.0.16-3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_webprofile`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataprofile`
--

CREATE TABLE `dataprofile` (
  `iduser` int(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `dd` int(255) NOT NULL,
  `mm` int(255) NOT NULL,
  `yy` int(255) NOT NULL,
  `asal` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nohp` varchar(20) NOT NULL,
  `gnama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataprofile`
--

INSERT INTO `dataprofile` (`iduser`, `username`, `nama`, `password`, `jenis_kelamin`, `dd`, `mm`, `yy`, `asal`, `email`, `nohp`, `gnama`) VALUES
(38, 'hehehe', 'tes', '123', 'perempuan', 1, 9, 1991, 'sby', 'tes@gmail.com', '124365785478', '25052017132855Screenshot from 2017-04-29 16:40:31.'),
(41, 'qwe', 'qwe', 'qwe', 'laki-laki', 1, 1, 1991, 'qwe', 'qwe', 'qwe', '2505201713305901-11-2014-siadim-002.jpg'),
(42, 'asd', 'asd', 'asd', 'laki-laki', 1, 1, 1991, 'asd', 'asd', 'asd', '25052017133119sampulWhite.png'),
(46, 'd', 'd', 'd', 'laki-laki', 1, 1, 1991, 'd', 'd', 'd', '25052017133432sampul.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataprofile`
--
ALTER TABLE `dataprofile`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataprofile`
--
ALTER TABLE `dataprofile`
  MODIFY `iduser` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
