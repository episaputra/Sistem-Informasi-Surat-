-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Jan 2019 pada 07.42
-- Versi server: 10.1.37-MariaDB
-- Versi PHP: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `surat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratkeluar`
--

CREATE TABLE `suratkeluar` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(15) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `sifat_surat` varchar(100) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `tembusan` varchar(100) NOT NULL,
  `berkas` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `suratkeluar`
--

INSERT INTO `suratkeluar` (`id`, `no_surat`, `judul`, `tujuan`, `tanggal`, `sifat_surat`, `lampiran`, `jenis`, `tembusan`, `berkas`, `keterangan`) VALUES
(4, '420/BKD/1.3/X/2', 'Penerimaan mahasiswa kerja praktek', 'Fakultas sains dan teknologi - Uin Suska Riau', '2018-10-19', '', '', '', '', 'Bab_I.pdf', 'bagian umum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `suratmasuk`
--

CREATE TABLE `suratmasuk` (
  `id` int(11) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `asal` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `tanggalDiterima` date NOT NULL,
  `jenis_surat` varchar(100) NOT NULL,
  `sifat_surat` varchar(100) NOT NULL,
  `tembusan` varchar(100) NOT NULL,
  `disposisi` varchar(100) NOT NULL,
  `penerima_surat` varchar(100) NOT NULL,
  `lampiran` varchar(100) NOT NULL,
  `berkas` varchar(255) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `suratmasuk`
--

INSERT INTO `suratmasuk` (`id`, `no_surat`, `judul`, `asal`, `tanggal`, `tanggalDiterima`, `jenis_surat`, `sifat_surat`, `tembusan`, `disposisi`, `penerima_surat`, `lampiran`, `berkas`, `keterangan`) VALUES
(1, '123/tes/123/sedre', 'testing', 'UIN SUSKA', '2019-01-05', '0000-00-00', '', '', '', '', '', '', 'ABSTRAK2.pdf', '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `nama_lengkap` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`username`, `password`, `jabatan`, `nama_lengkap`) VALUES
('admin', 'admin', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `suratkeluar`
--
ALTER TABLE `suratkeluar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `suratmasuk`
--
ALTER TABLE `suratmasuk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
