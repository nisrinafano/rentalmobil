-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18 Okt 2017 pada 00.04
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
-- Database: `dbpelo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `contact`
--

CREATE TABLE `contact` (
  `idmsg` int(11) NOT NULL,
  `nama` text NOT NULL,
  `email` text NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `tglContact` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `contact`
--

INSERT INTO `contact` (`idmsg`, `nama`, `email`, `judul`, `isi`, `tglContact`) VALUES
(1, 'fikri', 'fikriadityal@gmail.com', 'saran', 'sebaiknya harganya lebih murah', '0000-00-00'),
(2, 'Ervina', 'ervinachintia@gmail.com', 'Kritik', ' Baju ketika diterima ada cacatnya', '0000-00-00'),
(3, 'Siska Damala', 'siska23@gmail.com', 'Saran', 'Nambah lagi produk yang lebih agak cewek2 gitu dong ', '0000-00-00'),
(4, 'Cincinia Rezi Adinda', 'concon@gmail.com', 'Apresiasi', 'Kainnya enak nyaman murah lagi. ', '2017-05-29'),
(70, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-17'),
(71, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-17'),
(72, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-17'),
(73, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-17'),
(74, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-17'),
(75, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-17'),
(76, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-17'),
(77, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-17'),
(78, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-17'),
(79, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-17'),
(80, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-17'),
(81, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-18'),
(82, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-18'),
(83, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-18'),
(84, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-18'),
(85, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-18'),
(86, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-18'),
(87, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-18'),
(88, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-18'),
(89, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-18'),
(90, 'endar', 'endarsasmito1@gmail.com', 'avanza', 'pesan', '2017-10-18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `katalog`
--

CREATE TABLE `katalog` (
  `idKendaraan` int(11) NOT NULL,
  `merkKendaraan` varchar(100) NOT NULL,
  `namaKendaraan` text NOT NULL,
  `hargaSewa` int(11) NOT NULL,
  `nopolKendaraan` varchar(50) NOT NULL,
  `idPemilik` int(11) NOT NULL,
  `fotoKendaraan` varchar(255) NOT NULL,
  `gambarbrg_model` varchar(255) NOT NULL,
  `statusKendaraan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `katalog`
--

INSERT INTO `katalog` (`idKendaraan`, `merkKendaraan`, `namaKendaraan`, `hargaSewa`, `nopolKendaraan`, `idPemilik`, `fotoKendaraan`, `gambarbrg_model`, `statusKendaraan`) VALUES
(101, 'avanza', 'mobil', 100000, 'N1234nm', 123, '', '', ''),
(102, 'tes', 'tes', 150000, 'L 4576 TY', 2147483647, '', '', ''),
(103, 'Suzuki', 'Ertiga', 225000, 'L 2279 HJ', 2147483647, 'ertiga2.png', 'ertiga2.png', ''),
(104, 'Toyota', 'Hiace', 1000000, 'L 8631 RY', 2147483647, 'hiace1.png', 'hiace1.png', ''),
(105, 'Toyota', 'Innova', 400000, 'L 9755 GH', 2147483647, 'innova1.png', 'innova1.png', ''),
(106, 'Mitshubishi', 'Pajero', 600000, 'L 4937 VN', 2147483647, 'pajero1.png', 'pajero1.png', ''),
(109, 'toyota', 'agya', 250000, 'N 4423 PI ', 2147483647, '', '', ''),
(199, 'tes', 'tes', 250000, 'N 4423 PI ', 2147483647, '', '', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `order`
--

CREATE TABLE `order` (
  `idorder` int(11) NOT NULL,
  `namalengkap` text NOT NULL,
  `email` text NOT NULL,
  `alamat` text NOT NULL,
  `nohp` text NOT NULL,
  `noktp` text NOT NULL,
  `namakendaraan` varchar(100) NOT NULL,
  `jumlahkendaraan` int(100) NOT NULL,
  `durasipeminjaman` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `order`
--

INSERT INTO `order` (`idorder`, `namalengkap`, `email`, `alamat`, `nohp`, `noktp`, `namakendaraan`, `jumlahkendaraan`, `durasipeminjaman`) VALUES
(1, 'Ervina Chintia', 'ervinachintia@gmail.com', 'Sidoarjo', '081233058110', 'Baju-40-2', '', 0, ''),
(2, 'Vaselin', 'vaselinehand@gmail.com', 'Keptutih ITS Surabaya', '081330537663', 'Kaos ITS-Navy-M', '', 0, ''),
(3, 'Dina Mariana', 'dinmr@gmail.com', 'Mulyosari Utara - Surabaya', '085649852695', 'Gelang ITS - Navy - all size - 3', '', 0, ''),
(4, 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 'qwe', 0, 'qwe'),
(5, 'endar', 'endar@gmail.com', 'surabaya', '12213123', '1231241', 'toyota', 2, '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `iduser` int(3) NOT NULL,
  `first` varchar(255) NOT NULL,
  `last` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jeniskelamin` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `authentication` int(11) NOT NULL,
  `coba` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`iduser`, `first`, `last`, `nohp`, `email`, `jeniskelamin`, `username`, `password`, `gambar`, `authentication`, `coba`) VALUES
(2, 'Ervina', 'Chintia', '081330537663', 'ervinachintia@gmail.com', 'female', 'admin1', 'admin', '', 3, 0),
(3, 'Farih', 'Fadli', '081330537663', 'farihfadli44@gmail.com', 'Male', 'admin2', 'admin', '', 0, 0),
(4, 'dani', 'ardyant', '085649852695', 'daniuye@gmail.com', 'Male', 'd4niunyu', '123', '', 0, 0),
(5, 'Dina', 'Mariana', '081330537663', 'dinamariana@gmail.com', 'Female', 'admin', 'admin', '', 2, 0),
(8, 'ad', 'asdasd', '13123123', 'endar@gmail.com', 'Male', 'asd', 'asd', '', 0, 0),
(86, 'endar', 'sasmito', '12213123', 'endar@gmail.com', 'Male', 'admin123', 'admin123', '', 3, 0),
(87, 'endar', 'sasmito', '12213123', 'endar@gmail.com', 'Male', 'admin123', 'admin123', '', 3, 0),
(88, 'endar', 'sasmito', '12213123', 'endar@gmail.com', 'Male', 'admin12345', 'admin123', '', 2, 0),
(89, 'endar', 'sasmito', '12213123', 'endar@gmail.com', 'Male', 'admin12345', 'admin123', '', 2, 0),
(90, 'endar', 'sasmito', '12213123', 'endar@gmail.com', 'Male', 'admin999', 'admin999', '', 0, 0),
(91, 'endar', 'sasmito', '12213123', 'endar@gmail.com', 'Male', 'admin999', 'admin999', '', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`idmsg`);

--
-- Indexes for table `katalog`
--
ALTER TABLE `katalog`
  ADD PRIMARY KEY (`idKendaraan`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`idorder`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `idmsg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `idorder` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
