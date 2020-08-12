-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2020 at 12:00 PM
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
-- Database: `berita`
--

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` varchar(6) NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `penulis` text NOT NULL,
  `id_kategori` varchar(5) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `judul`, `deskripsi`, `gambar`, `penulis`, `id_kategori`, `tanggal`) VALUES
('K02', 'sduis', '<p>AsjopASJ<br></p>', '.PNG', 'Asa', 'K01', '2020-12-08'),
('K03', 'toriq dan sapik', '<p>hshakhskhsahdak<br></p>', '.png', 'khizam', 'K01', '2020-12-08');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` varchar(5) NOT NULL,
  `nama_kategori` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
('K01', 'Ekonomi'),
('K02', 'global');

-- --------------------------------------------------------

--
-- Table structure for table `populer`
--

CREATE TABLE `populer` (
  `id_berita` varchar(5) NOT NULL,
  `jumlah` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Stand-in structure for view `tahu`
-- (See below for the actual view)
--
CREATE TABLE `tahu` (
`id_berita` varchar(6)
,`judul` text
,`deskripsi` text
,`gambar` varchar(255)
,`penulis` text
,`nama_kategori` varchar(10)
,`tanggal` date
);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(65) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`) VALUES
('12y43', 'admin', '$2y$10$TpipIS3PDfeHTJWggvnFO.eT/dVBMyVKI5OcYV1avGMnt8wTqOt5O'),
('U44', 'khizam', '$2y$10$.0bII9Lrwp7C8yzjaVcQueQ94581ZeBazVu86t4d47MjR401/x/1a'),
('U45', 'deni', '$2y$10$eLAV85dlxWz5WcGy/qiQpetXDXkl62JmA3Eizzej7gfPsVJiG.Ody');

-- --------------------------------------------------------

--
-- Structure for view `tahu`
--
DROP TABLE IF EXISTS `tahu`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `tahu`  AS  select `id_berita` AS `id_berita`,`judul` AS `judul`,`deskripsi` AS `deskripsi`,`gambar` AS `gambar`,`penulis` AS `penulis`,`kategori`.`nama_kategori` AS `nama_kategori`,`tanggal` AS `tanggal` from (`berita` join `kategori`) where `id_kategori` = `kategori`.`id_kategori` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `populer`
--
ALTER TABLE `populer`
  ADD KEY `id_berita` (`id_berita`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
