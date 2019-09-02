-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Agu 2019 pada 11.09
-- Versi Server: 5.5.32
-- Versi PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_antrian_klinik`
--
CREATE DATABASE IF NOT EXISTS `db_antrian_klinik` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `db_antrian_klinik`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tampil`
--

CREATE TABLE IF NOT EXISTS `tampil` (
  `status` text NOT NULL,
  `keterangan` text NOT NULL,
  `nomor_tersedia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tampil`
--

INSERT INTO `tampil` (`status`, `keterangan`, `nomor_tersedia`) VALUES
('BUKA', 'SUDAH BISA MENGAMBIL NOMOR ANTRIAN', 4);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
