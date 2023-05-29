-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Bulan Mei 2023 pada 13.42
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbecommerce_rina`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_kategori`
--

CREATE TABLE `tb_kategori` (
  `kat_id` tinyint(3) NOT NULL,
  `kat_nama` varchar(50) NOT NULL,
  `kat_keterangan` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_kategori`
--

INSERT INTO `tb_kategori` (`kat_id`, `kat_nama`, `kat_keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Bunga Mawar', 'Bunga mawar merupakan jenis bunga yang paling sering dijadikan sebagai bahan dalam membuat buket bunga. Jenis bunga mawar sendiri sangat beragam.', '2023-05-29 10:51:58', NULL),
(2, 'Bunga Carnation', 'Jenis bunga dalam pembuatan buket bunga berikutnya adalah Bunga Carnation. Bunga Carnation atau juga lebih dikenal dengan bunga anyelir memiliki banyak arti dan simbol.', '2023-05-29 10:53:02', NULL),
(3, 'Bunga Matahari', 'Bunga Matahari memiliki warna yang mencolok dan memancarkan kekaguman serta melambangkan keceriaan.', '2023-05-29 10:54:05', NULL),
(4, 'Bunga Tulip', 'Salah satu keunggulan bunga tulip saat dijadikan buket bunga adalah daya tahannya yang lebih lama, bahkan jenis bunga yang satu ini dapat bertahan 10 hari setelah dipetik.', '2023-05-29 10:54:39', NULL),
(5, 'Bunga Anggrek', 'Bunga Anggrek adalah salah satu bunga dengan tampilan yang anggun dan memiliki kekuatan yang murni. Anggrek sendiri memiliki banyak jenis dan warna.', '2023-05-29 10:55:24', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_keranjang`
--

CREATE TABLE `tb_keranjang` (
  `ker_id` int(11) NOT NULL,
  `ker_id_user` int(11) NOT NULL,
  `ker_id_produk` int(11) NOT NULL,
  `ker_harga` double DEFAULT NULL,
  `ker_jml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_keranjang`
--

INSERT INTO `tb_keranjang` (`ker_id`, `ker_id_user`, `ker_id_produk`, `ker_harga`, `ker_jml`) VALUES
(1, 1, 1, 0, 20),
(2, 2, 2, 90, 15),
(3, 3, 3, 110, 10),
(4, 4, 4, 70, 6),
(5, 5, 5, 120, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order`
--

CREATE TABLE `tb_order` (
  `order_id` int(11) NOT NULL,
  `order_id_user` int(11) NOT NULL,
  `order_tgl` timestamp NOT NULL DEFAULT current_timestamp(),
  `order_kode` varchar(50) NOT NULL,
  `order_ttl` double DEFAULT NULL,
  `order_kurir` varchar(100) DEFAULT NULL,
  `order_ongkir` int(11) DEFAULT 0,
  `order_byr_deadline` datetime DEFAULT NULL,
  `order_batal` tinyint(1) DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_order`
--

INSERT INTO `tb_order` (`order_id`, `order_id_user`, `order_tgl`, `order_kode`, `order_ttl`, `order_kurir`, `order_ongkir`, `order_byr_deadline`, `order_batal`, `updated_at`) VALUES
(1, 1, '2023-05-29 11:27:06', '001', 20, 'JNT', 0, '2023-05-22 00:00:00', NULL, NULL),
(2, 2, '2023-05-29 11:28:23', '002', 10, 'EXPRESS', 0, '2022-02-10 00:00:00', NULL, NULL),
(3, 3, '2023-05-29 11:29:03', '003', 10, 'SICEPAT', 0, '2022-08-14 00:00:00', NULL, NULL),
(4, 4, '2023-05-29 11:29:52', '004', 15, 'SICEPAT', 0, '2022-09-10 00:00:00', NULL, NULL),
(5, 5, '2023-05-29 11:30:32', '005', 11, 'JNT', 0, '2022-06-19 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_order_detail`
--

CREATE TABLE `tb_order_detail` (
  `detail_id_order` int(11) NOT NULL,
  `detail_id_produk` int(11) NOT NULL,
  `detail_harga` double DEFAULT NULL,
  `detail_jml` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_order_detail`
--

INSERT INTO `tb_order_detail` (`detail_id_order`, `detail_id_produk`, `detail_harga`, `detail_jml`) VALUES
(1, 1, 100, 20),
(2, 2, 90, 15),
(3, 3, 110, 10),
(4, 4, 70, 8),
(5, 5, 120, 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_produk`
--

CREATE TABLE `tb_produk` (
  `produk_id` int(11) NOT NULL,
  `produk_id_kat` tinyint(3) NOT NULL,
  `produk_id_user` int(11) NOT NULL,
  `produk_kode` varchar(50) NOT NULL,
  `produk_nama` varchar(256) NOT NULL,
  `produk_hrg` double DEFAULT 0,
  `produk_keterangan` text DEFAULT NULL,
  `produk_stock` int(11) DEFAULT 0,
  `produk_photo` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_produk`
--

INSERT INTO `tb_produk` (`produk_id`, `produk_id_kat`, `produk_id_user`, `produk_kode`, `produk_nama`, `produk_hrg`, `produk_keterangan`, `produk_stock`, `produk_photo`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '1', 'Bunga Mawar', 100, 'Warnanya yang bervariasi dan bentuk serta tampilan yang cantik menjadikan bunga mawar sebagai jenis bunga paling populer di dunia.', 20, 'mawar.jpg', '2023-05-29 11:13:19', NULL),
(2, 2, 2, '2', 'Bunga Carnation', 90, 'Carnation berasal dari kata “corone” yang memiliki arti bunga kalung atau karangan bunga. Dalam bahasa latin disebut “carnis” yang memiliki arti “daging” karena warna asli Bunga Carnation adalah merah muda.', 15, 'carnation.jpg', '2023-05-29 11:15:19', NULL),
(3, 3, 3, '3', 'Bunga Matahari', 110, 'Anda dapat memberikan hadiah buket bunga matahari kepada orang yang Anda kagumi. Bunga matahari dapat dengan mudah Anda temukan karena banyak tersebar di wilayah Indonesia.', 10, 'matahari.jpg', '2023-05-29 11:16:45', NULL),
(4, 4, 4, '4', 'Bunga Tulip', 70, 'Bunga ini banyak dibudidayakan di Indonesia, hal ini karena bunga tulip banyak digunakan-toko-toko bunga yang memanfaatkannya sebagai bahan dalam pembuatan hand bouquet dan karangan bunga.', 8, 'tuip.jpg', '2023-05-29 11:17:59', NULL),
(5, 5, 5, '5', 'Bunga Anggrek', 120, 'Banyak pencinta tanaman hias yang rela merogoh kocek yang tak sedikit untuk mendapatkan bunga Anggrek. Hal ini karena keunikan dan keindahannya yang enak dipandang.', 5, 'anggrek.jpg', '2023-05-29 11:19:22', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_users`
--

CREATE TABLE `tb_users` (
  `user_id` int(11) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_nama` varchar(100) DEFAULT NULL,
  `user_alamat` text DEFAULT NULL,
  `user_hp` varchar(25) DEFAULT NULL,
  `user_pos` varchar(5) DEFAULT NULL,
  `user_role` tinyint(2) DEFAULT NULL,
  `user_aktif` tinyint(2) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `tb_users`
--

INSERT INTO `tb_users` (`user_id`, `user_email`, `user_password`, `user_nama`, `user_alamat`, `user_hp`, `user_pos`, `user_role`, `user_aktif`, `created_at`, `updated_at`) VALUES
(1, 'nurkosrina@gmail.com', '12345', 'Nurkosrina', 'Panyabungan', '082245678920', '22789', 10, 1, '2023-05-29 11:02:34', NULL),
(2, 'rinalubis2011@gmail.com', 'panyabungan123', 'Rina Lubis22', 'Kayu Laut', '084568793010', '22567', 11, 2, '2023-05-29 11:04:06', NULL),
(3, 'azzura2011gmail.com', 'dirumah saja', 'Hilya Quinza', 'Sayur Matinggi', '081256789020', '99035', 12, 3, '2023-05-29 11:05:28', NULL),
(4, 'lizalubis2022@gmail.com', 'lubismargana10', 'Liza Susanti', 'Simpang Durian', '085240679810', '22179', 13, 4, '2023-05-29 11:07:00', NULL),
(5, 'azdraubis208', 'simpang marbau', 'Azdra Izza', 'Rantau Prapat', '082456981620', '35690', 14, 5, '2023-05-29 11:09:47', NULL);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  ADD PRIMARY KEY (`kat_id`);

--
-- Indeks untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD PRIMARY KEY (`ker_id`),
  ADD KEY `ker_id_user` (`ker_id_user`),
  ADD KEY `ker_id_produk` (`ker_id_produk`);

--
-- Indeks untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD PRIMARY KEY (`order_id`),
  ADD UNIQUE KEY `order_kode` (`order_kode`),
  ADD KEY `order_id_user` (`order_id_user`);

--
-- Indeks untuk tabel `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD KEY `detail_id_order` (`detail_id_order`),
  ADD KEY `detail_id_produk` (`detail_id_produk`);

--
-- Indeks untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD PRIMARY KEY (`produk_id`),
  ADD UNIQUE KEY `produk_kode` (`produk_kode`),
  ADD KEY `produk_id_kat` (`produk_id_kat`),
  ADD KEY `produk_id_user` (`produk_id_user`);

--
-- Indeks untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_kategori`
--
ALTER TABLE `tb_kategori`
  MODIFY `kat_id` tinyint(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  MODIFY `ker_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  MODIFY `produk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_keranjang`
--
ALTER TABLE `tb_keranjang`
  ADD CONSTRAINT `tb_keranjang_ibfk_1` FOREIGN KEY (`ker_id_user`) REFERENCES `tb_users` (`user_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_keranjang_ibfk_2` FOREIGN KEY (`ker_id_produk`) REFERENCES `tb_produk` (`produk_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_order`
--
ALTER TABLE `tb_order`
  ADD CONSTRAINT `tb_order_ibfk_1` FOREIGN KEY (`order_id_user`) REFERENCES `tb_users` (`user_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_order_detail`
--
ALTER TABLE `tb_order_detail`
  ADD CONSTRAINT `tb_order_detail_ibfk_1` FOREIGN KEY (`detail_id_order`) REFERENCES `tb_order` (`order_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_order_detail_ibfk_2` FOREIGN KEY (`detail_id_produk`) REFERENCES `tb_produk` (`produk_id`) ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tb_produk`
--
ALTER TABLE `tb_produk`
  ADD CONSTRAINT `tb_produk_ibfk_1` FOREIGN KEY (`produk_id_kat`) REFERENCES `tb_kategori` (`kat_id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `tb_produk_ibfk_2` FOREIGN KEY (`produk_id_user`) REFERENCES `tb_users` (`user_id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
