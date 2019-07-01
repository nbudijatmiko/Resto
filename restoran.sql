-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2019 at 07:21 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailpesanan`
--

CREATE TABLE `detailpesanan` (
  `id_detail` varchar(30) NOT NULL,
  `id_menu` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `qty` int(3) NOT NULL,
  `sub_total` int(12) NOT NULL,
  `note` varchar(60) NOT NULL,
  `id_pelayan` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kategori_makanan`
--

CREATE TABLE `kategori_makanan` (
  `id_kategori` int(2) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_makanan`
--

INSERT INTO `kategori_makanan` (`id_kategori`, `kategori`) VALUES
(1, 'Nasi'),
(2, 'Ayam'),
(3, 'Sayur'),
(4, 'Lalapan'),
(5, 'Sambal'),
(6, 'Lauk Lain'),
(7, 'Menu Sea Food');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_minuman`
--

CREATE TABLE `kategori_minuman` (
  `id_kategori` int(2) NOT NULL,
  `kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori_minuman`
--

INSERT INTO `kategori_minuman` (`id_kategori`, `kategori`) VALUES
(1, 'Teh'),
(2, 'Jus'),
(3, 'Aneka Susu'),
(4, 'Kopi'),
(5, 'NutriSari'),
(6, 'Good Day');

-- --------------------------------------------------------

--
-- Table structure for table `meja`
--

CREATE TABLE `meja` (
  `id_meja` int(11) NOT NULL,
  `no meja` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu_minuman`
--

CREATE TABLE `menu_minuman` (
  `id_minuman` int(11) NOT NULL,
  `nama_minuman` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `detail` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `menu__makanan`
--

CREATE TABLE `menu__makanan` (
  `id_makanan` varchar(8) NOT NULL,
  `nama_makanan` varchar(50) NOT NULL,
  `id_kategori` varchar(2) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` text NOT NULL,
  `id_status` varchar(2) NOT NULL,
  `detail` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `menu__makanan`
--

INSERT INTO `menu__makanan` (`id_makanan`, `nama_makanan`, `id_kategori`, `harga`, `gambar`, `id_status`, `detail`) VALUES
('m106', 'telor dadar', '6', 4000, '66', '2', 'lollllllllllllllllllllllllllll'),
('m108', 'kolang-kaling', '1', 4000, 'polll', '1', 'enak'),
('m109', 'bajigur', '1', 4000, 'polll', '1', 'enak'),
('m110', 'kolak', '1', 3000, 'enak', '1', 'pisang'),
('m111', 'nasi', '1', 8000, 'ayam', '1', 'goreng'),
('m112', 'tempe', '1', 3000, 'eank', '1', 'mendoan'),
('m113', 'sambal pecel', '5', 5000, '1561736386.png', '1', 'aa'),
('m114', 'sayur lodeh', '3', 3000, '1561737000.png', '1', 'jos tenan'),
('m115', 'dwa', '1', 291, 'aa', '1', 'da'),
('m116', 'sayur asem', '3', 2000, '1561867072.png', '1', 'enak');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `id_status` int(2) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id_status`, `status`) VALUES
(1, 'Ready'),
(2, 'Sold Out'),
(3, 'Cooking'),
(4, 'Served'),
(5, 'On Queue');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `user_id` varchar(8) NOT NULL,
  `user_name` varchar(20) DEFAULT NULL,
  `user_email` varchar(60) DEFAULT NULL,
  `user_password` varchar(40) DEFAULT NULL,
  `user_kategori` varchar(3) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_kategori`) VALUES
('u-01', 'M Fikri', 'admin', 'e10adc3949ba59abbe56e057f20f883e', '1'),
('u-02', 'Daria', 'kasir', 'e10adc3949ba59abbe56e057f20f883e', '2'),
('u-03', 'Jhon', 'pelayan', 'e10adc3949ba59abbe56e057f20f883e', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tr_pesanan`
--

CREATE TABLE `tr_pesanan` (
  `id_pesanan` varchar(30) NOT NULL,
  `id_detail` varchar(30) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `total` int(12) NOT NULL,
  `id_pelayan` int(11) NOT NULL,
  `id_kasir` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_makanan`
-- (See below for the actual view)
--
CREATE TABLE `v_makanan` (
`id_makanan` varchar(8)
,`nama_makanan` varchar(50)
,`harga` int(11)
,`detail` text
,`gambar` text
,`status` varchar(20)
,`kategori` varchar(20)
);

-- --------------------------------------------------------

--
-- Structure for view `v_makanan`
--
DROP TABLE IF EXISTS `v_makanan`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_makanan`  AS  select `menu__makanan`.`id_makanan` AS `id_makanan`,`menu__makanan`.`nama_makanan` AS `nama_makanan`,`menu__makanan`.`harga` AS `harga`,`menu__makanan`.`detail` AS `detail`,`menu__makanan`.`gambar` AS `gambar`,`status`.`status` AS `status`,`kategori_makanan`.`kategori` AS `kategori` from ((`menu__makanan` join `kategori_makanan`) join `status`) where `menu__makanan`.`id_kategori` = `kategori_makanan`.`id_kategori` and `menu__makanan`.`id_status` = `status`.`id_status` group by `menu__makanan`.`id_makanan` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kategori_makanan`
--
ALTER TABLE `kategori_makanan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `kategori_minuman`
--
ALTER TABLE `kategori_minuman`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kategori_makanan`
--
ALTER TABLE `kategori_makanan`
  MODIFY `id_kategori` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `kategori_minuman`
--
ALTER TABLE `kategori_minuman`
  MODIFY `id_kategori` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `id_status` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
