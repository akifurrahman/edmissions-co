-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 09, 2023 at 11:08 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userform`
--

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `options` varchar(20) NOT NULL,
  `code` mediumint(50) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `options`, `code`, `status`) VALUES
(1, 'mohammedakif', 'mohdakifurrahman@gmail.com', '$2y$10$0lc6ghsMaMA0lwWFdtKflOwu.f.NLv1/jijAtt.XElrvrt0Q7bXmW', 'student', 0, 'verified'),
(4, 'mohammedafif', 'mohdafifurrahman@gmail.com', '$2y$10$hHXSn6Q37h977ic5pSTciu8aMTsaacnvNvva0TqNWsbKZKS8k6enm', 'student', 0, 'verified'),
(6, 'abc', 'abc@gmail.com', '$2y$10$uo2lM5Iw/jNIHLFco5fapOKoVzsYs76M3Bq20Y6NqjDhhBsA/BOMi', '', 0, 'verified'),
(7, 'abc', 'a@mm', '$2y$10$DpjRyZE3XJ3PyEDDQ0XdGOOIDsKxIJcYUTQPuerwdnkun4VUBeqE.', '', 0, 'verified'),
(8, 'zxc', 'zxc@gmail.com', '$2y$10$6h/xryi1qQglVP18/hE90uiijxwTwxrExsvyvxhpXEQ4fI/6zt8Ty', '', 0, 'verified'),
(9, 'amer', 'amer@gmail.com', '$2y$10$SBCqFg75bzABZNEEXasehehvH0O68IL1h0GRk8Qj72TfcnmwTZzbC', 'student', 0, 'verified'),
(10, 'iop', 'iop@gmail.com', '$2y$10$Ffwo/xbF0WMWy.YFOt6ERO18nVopIUhiTsHvR32jrCzcRBYajPMxS', 'institution', 0, 'verified'),
(11, 'akif', 'akif@gmail.com', '$2y$10$R3swtQYhzBEocqUSQm049unVcXhCE1ottu.RDTTLn4IXZhniQ7Pa2', '', 0, 'verified'),
(12, 'bnm', 'bnm@gmail.com', '$2y$10$PhkNIu4IYS0.ROGclqHyNeTXFRiY42TZJBbKCE2PEQXPddXQuJcBG', '', 0, 'verified'),
(14, 'akif2', 'akif2@gmail.com', '$2y$10$R0JoUsPPwA8umZbpaczEwulBPnyrWT1g2rjHfpYO4B1XsxikAtS86', 'company', 0, 'verified'),
(17, 'afifcompany', 'afifc@gmail.com', '$2y$10$pQ9k4JzVnl7TeHb31hhJNeADj9B/x6E00Cyh.D6g5D9JfQoFYNfG2', 'Company', 0, 'verified'),
(18, 'Akif Company', 'akifc@gmail.com', '$2y$10$sDGsVZc360k8/rr2igqFQOH8dUHkP5A2/d0UDhTu1NuZ5Qe1MeAta', 'Company', 0, 'verified'),
(19, 'akifInstitute', 'akifi@gmail.com', '$2y$10$yXYHpIYXY3rex4qxLpAajuNX69TtU1n3plN9sWD.cnpPSpZZzvdi.', 'Institution', 0, 'verified'),
(20, 'EdVenture Park', 'evp@gmail.com', '$2y$10$bKE0Wv7SUngHKDT0JWr8ieWvIT0o4w/4ywvaLe7ytWRx53kGaBeWq', 'Company', 0, 'verified'),
(21, 'Akif Ur Rahman', 'akifs@gmail.com', '$2y$10$ot87I32BCJpmihDHBqlhe.rjon557UHN8bKrd02avgp8szzk08zGG', 'Student', 0, 'verified'),
(22, 'IIT Hyderabad', 'iithyd@gmail.com', '$2y$10$4Sm.y2rizc7AdWm046Cf3Ofo/4Yu3dyHmMGvJmy39yIZwPwMaEbBe', 'Institution', 0, 'verified');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
