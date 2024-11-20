-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Nov 2024 pada 14.00
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarpras`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `GetAllInventaris` ()   BEGIN
    SELECT 
        id_inventaris,
        nama,
        kondisi,
        keterangan,
        jumlah,
        id_jenis,
        tanggal_register,
        id_ruang,
        kode_inventaris,
        id_petugas
    FROM 
        inventaris;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `tanggal_register` date NOT NULL,
  `id_ruang` int(11) NOT NULL,
  `kode_inventaris` int(50) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `nama`, `kondisi`, `keterangan`, `jumlah`, `id_jenis`, `tanggal_register`, `id_ruang`, `kode_inventaris`, `id_petugas`) VALUES
(2, 'laptop', '', 'lenovo plusss', 0, 1, '1333-02-12', 1, -1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nama_jenis` varchar(100) NOT NULL,
  `kode_jenis` varchar(50) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama_pegawai` varchar(100) NOT NULL,
  `nip` int(11) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) NOT NULL,
  `tanggal_pinjam` date NOT NULL,
  `tanggal_kembali` date NOT NULL,
  `status_peminjaman` varchar(100) NOT NULL,
  `id_petugas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `nama_petugas` varchar(50) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `level`) VALUES
(10, 'jidan', '827ccb0eea8a706c4c34a16891f84e7b', 'zidan bimantara', 'admin'),
(11, 'Zaidan', 'c7adf40892c93d1484077147c11300ed', 'jidan', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pinjam`
--

CREATE TABLE `pinjam` (
  `id_detail_pinjam` int(11) NOT NULL,
  `id_inventaris` int(11) NOT NULL,
  `id_peminjaman` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `pinjam`
--

INSERT INTO `pinjam` (`id_detail_pinjam`, `id_inventaris`, `id_peminjaman`, `jumlah`) VALUES
(8, 2, 1, 1);

--
-- Trigger `pinjam`
--
DELIMITER $$
CREATE TRIGGER `delete_pinjam` AFTER DELETE ON `pinjam` FOR EACH ROW BEGIN
UPDATE inventaris SET jumlah = jumlah + OLD.jumlah where id_inventaris = OLD.id_inventaris;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `peminjaman` AFTER INSERT ON `pinjam` FOR EACH ROW BEGIN
    UPDATE inventaris
    SET jumlah = jumlah - NEW.jumlah
    WHERE id_inventaris = NEW.id_inventaris;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) NOT NULL,
  `nama_ruang` varchar(50) NOT NULL,
  `kode_ruang` varchar(11) NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `kode_ruang`, `keterangan`) VALUES
(4, 'bengkel PPLG1', '12', 'kosong');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`),
  ADD UNIQUE KEY `id_ruang` (`id_ruang`),
  ADD KEY `id_jenis` (`id_jenis`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indeks untuk tabel `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indeks untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indeks untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`),
  ADD KEY `peminjaman_ibfk_1` (`id_petugas`);

--
-- Indeks untuk tabel `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indeks untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD PRIMARY KEY (`id_detail_pinjam`),
  ADD KEY `id_peminjaman` (`id_peminjaman`),
  ADD KEY `id_inventaris` (`id_inventaris`);

--
-- Indeks untuk tabel `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  MODIFY `id_detail_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `petugas` (`id_petugas`);

--
-- Ketidakleluasaan untuk tabel `pinjam`
--
ALTER TABLE `pinjam`
  ADD CONSTRAINT `pinjam_ibfk_3` FOREIGN KEY (`id_inventaris`) REFERENCES `inventaris` (`id_inventaris`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
