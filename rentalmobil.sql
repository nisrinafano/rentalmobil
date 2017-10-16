-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Okt 2017 pada 20.21
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rentalmobil`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `namaUser` text NOT NULL,
  `role` varchar(255) NOT NULL,
  `emailUser` varchar(255) NOT NULL,
  `passwordUser` varchar(50) NOT NULL,
  `alamatUser` varchar(255) NOT NULL,
  `pekerjaanUser` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`idUser`, `namaUser`, `role`, `emailUser`, `passwordUser`, `alamatUser`, `pekerjaanUser`) VALUES
(1, 'lalala', '', 'lalala', 'lalala', '0', '0'),
(2, 'Endar', '', 'endar@gmail.com', '12345', '0', '0'),
(3, 'endar', '', 'endaasasr@gmail.com', '1234', '0', '0'),
(4, '', '', '', '', '0', '0'),
(5, '', '', '', '', '0', '0'),
(6, '', '', '', '', '0', '0'),
(7, 'endar', '', 'sas', 'asdas', '0', '0'),
(8, 'qweqwe', '', 'qweqwe', 'qweqwe', 'qweqwe', 'qweqwe'),
(9, 'asd', '', 'asd', 'asd', 'asda', 'asdasd'),
(10, '', '', '', '', '', ''),
(11, 'coba', '', 'cobasaja@gmail.com', '12345', 'surabaya', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
