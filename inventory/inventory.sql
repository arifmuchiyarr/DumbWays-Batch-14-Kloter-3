-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2020 pada 14.37
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `products_tb`
--

CREATE TABLE `products_tb` (
  `id_product` int(11) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `supplier_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `products_tb`
--

INSERT INTO `products_tb` (`id_product`, `product_name`, `supplier_id`) VALUES
(1, 'MSI GL624', 2),
(2, 'Acer Predator Triton 320', 1),
(3, 'Acer Nitro', 1),
(4, 'Macbook Pro 18', 2),
(5, 'Acer Swift', 3),
(9, 'Asus Zenfone 3', 3),
(10, 'Lenovo Legion Y520', 2),
(13, 'Asus ROG', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `suppliers_tb`
--

CREATE TABLE `suppliers_tb` (
  `id_supplier` int(11) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `addresss` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `suppliers_tb`
--

INSERT INTO `suppliers_tb` (`id_supplier`, `company_name`, `addresss`, `phone`) VALUES
(1, 'PT. DumbWays', 'Jalan Kemana Saja', '0838696969'),
(2, 'PT. WaysDumb', 'Jalanin aja dulu', '082169212121'),
(3, 'PT. Mejik', 'Jl Wonderland', '086921692169'),
(4, 'PT. Sera', 'Jl. Nusakambangan', '082169216921'),
(5, 'PT. Mondar Mandir', 'Jl. Kesana Kesini', '087855448896'),
(8, 'PT jaka', 'Jl. Haji', '085622332233'),
(9, 'PT Sinar', 'Jl Rinjani', '08568989898');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `products_tb`
--
ALTER TABLE `products_tb`
  ADD PRIMARY KEY (`id_product`),
  ADD KEY `supplier_id` (`supplier_id`);

--
-- Indeks untuk tabel `suppliers_tb`
--
ALTER TABLE `suppliers_tb`
  ADD PRIMARY KEY (`id_supplier`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `products_tb`
--
ALTER TABLE `products_tb`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `suppliers_tb`
--
ALTER TABLE `suppliers_tb`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `products_tb`
--
ALTER TABLE `products_tb`
  ADD CONSTRAINT `products_tb_ibfk_1` FOREIGN KEY (`supplier_id`) REFERENCES `suppliers_tb` (`id_supplier`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
