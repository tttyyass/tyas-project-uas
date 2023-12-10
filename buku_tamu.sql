-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 03 Agu 2016 pada 00.10
-- Versi Server: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buku_tamu`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `table_buku_tamu`
--

CREATE TABLE `table_buku_tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `table_buku_tamu`
--

INSERT INTO `table_buku_tamu` (`id`, `nama`, `subject`, `isi`, `tanggal`) VALUES
(1, 'Judhi', 'tamu', 'sdk skdk', '2016-08-02 20:59:13'),
(2, 'Agung lala', 'ahsakda', 'Apa aja', '2016-08-02 19:24:57'),
(6, 'Deni Dermawan', 'Kuliah', 'Program PHP dan Mysql', '2016-08-02 18:41:41'),
(7, 'Iman', 'test', 'isi buku tamu', '2016-08-02 21:04:55');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `full_name` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `full_name`) VALUES
(1, 'admin', '81dc9bdb52d04dc20036dbd8313ed055', 'agung wibowo'),
(2, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Akhmad Nurul Iman');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `table_buku_tamu`
--
ALTER TABLE `table_buku_tamu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `table_buku_tamu`
--
ALTER TABLE `table_buku_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
