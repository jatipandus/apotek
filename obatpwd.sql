-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 11 Okt 2017 pada 22.19
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `obatpwd`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `ktp` varchar(20) NOT NULL,
  `namacustomer` varchar(200) NOT NULL,
  `alamatcustomer` text NOT NULL,
  `notelpcustomer` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`ktp`, `namacustomer`, `alamatcustomer`, `notelpcustomer`) VALUES
('360316', 'panduu', 'sleman', '089090909090');

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `idobat` varchar(20) NOT NULL,
  `namaobat` varchar(20) NOT NULL,
  `hargaobat` int(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`idobat`, `namaobat`, `hargaobat`, `keterangan`) VALUES
('001', 'Paramex', 2000, 'obat pusing');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesanobat`
--

CREATE TABLE IF NOT EXISTS `pesanobat` (
`idpesan` int(20) NOT NULL,
  `idobat` varchar(20) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `idkamar` varchar(20) NOT NULL,
  `tglpesan` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesanobat`
--

INSERT INTO `pesanobat` (`idpesan`, `idobat`, `ktp`, `idkamar`, `tglpesan`) VALUES
(2, '001', '360316', '', '2017-10-27');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stokobat`
--

CREATE TABLE IF NOT EXISTS `stokobat` (
`idstok` int(20) NOT NULL,
  `idobat` varchar(20) NOT NULL,
  `tglkadaluarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
 ADD PRIMARY KEY (`ktp`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
 ADD PRIMARY KEY (`idobat`);

--
-- Indexes for table `pesanobat`
--
ALTER TABLE `pesanobat`
 ADD PRIMARY KEY (`idpesan`), ADD KEY `idobat` (`idobat`), ADD KEY `ktp` (`ktp`);

--
-- Indexes for table `stokobat`
--
ALTER TABLE `stokobat`
 ADD PRIMARY KEY (`idstok`), ADD KEY `idobat` (`idobat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pesanobat`
--
ALTER TABLE `pesanobat`
MODIFY `idpesan` int(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `stokobat`
--
ALTER TABLE `stokobat`
MODIFY `idstok` int(20) NOT NULL AUTO_INCREMENT;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `pesanobat`
--
ALTER TABLE `pesanobat`
ADD CONSTRAINT `pesanobat_ibfk_1` FOREIGN KEY (`idobat`) REFERENCES `obat` (`idobat`),
ADD CONSTRAINT `pesanobat_ibfk_2` FOREIGN KEY (`ktp`) REFERENCES `customer` (`ktp`);

--
-- Ketidakleluasaan untuk tabel `stokobat`
--
ALTER TABLE `stokobat`
ADD CONSTRAINT `stokobat_ibfk_1` FOREIGN KEY (`idobat`) REFERENCES `obat` (`idobat`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
