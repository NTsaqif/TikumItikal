-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2022 pada 11.33
-- Versi server: 10.4.22-MariaDB
-- Versi PHP: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tikum`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `food`
--

CREATE TABLE `food` (
  `id_food` int(11) NOT NULL,
  `nama_food` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kategori` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `food`
--

INSERT INTO `food` (`id_food`, `nama_food`, `harga`, `deskripsi`, `kategori`) VALUES
(1, 'Rice Chicken Stuffed Cheese', '19K', 'Ayam katsu dengan isian keju didalamnya ditambah sauce dan salad sayur segar saat penyajian', 'food'),
(2, 'Rice Chicken Salted Egg', '20K', 'Potongan ayam krispi dengan sauce keju yang gurih krimi dan ditambahkan salad sayur segar saat penyajian', 'food'),
(3, 'Barbeque Chicken Rice', '18K', 'Potongan ayam krispi dengan sauce barbeque yang khas dan ditambahkan salad sayur segar saat penyajian', 'food'),
(4, 'Rice Chicken Lava Sauce', '18K', 'Potongan ayam krispi dengan sauce lava yang pedas manis dan ditambahkan salad sayur segar saat penyajian', 'food'),
(5, 'Rice Chicken Matta Chili Sauce', '18K', 'Potongan ayam krispi dengan sambal matta yang dibuat dari bahan-bahan segar', 'food'),
(6, 'Potato Cheese Ball', '15K', 'Bola bola kentang dengan isian keju lumer didalamnya, disajikan dengan keadaan hangat cocok dinikmati sambil bersantai', 'snack'),
(7, 'Mix Potagis', '15K', 'Perncampuran berbagai macam snack seperti nugget, potato, onion ring, dan sausage', 'snack'),
(8, 'French Fries', '11K', 'Potongan kentang yang digoreng pada minyak panas', 'snack'),
(9, 'Coffee Latte', '17K', 'Paduan espresso dan susu yang memiliki rasa soft dapat mencerahkan harimu agar lebih bahagia', 'espresso based'),
(10, 'Ice Coffe Milk', '15K', 'Es kopi susu dengan berbagai varian rasa yang dapat kamu nikmati sesuai isi hatimu', 'espresso based'),
(11, 'Americano Hot', '13K', 'Espresso dengan tambahan air panas mengeluarkan rasa espresso yang soft dan kompleks', 'espresso based'),
(12, 'Americano Ice', '14K', 'Espresso dengan tambahan air dan es batu mengeluarkan rasa espresso yang soft tapi tetap kompleks', 'espresso based'),
(13, 'Sanger Hot', '14K', 'Sering disebut “Bonbon Coffee” espresso dan susu kondensasi yang disajikan dengan air panas', 'espresso based'),
(14, 'Sanger Ice', '15K', 'Sering disebut “Bonbon Coffee” espresso dan susu kondensasi yang disajikan dengan es', 'espresso based'),
(15, 'Shakerato Ice', '15K', 'Espresso dengan tambahan air panas mengeluarkan rasa espresso yang soft tapi tetap kompleks\r\nPerpaduan espresso, gula, es batu \r\n', 'espresso based'),
(16, 'Coffee Filter Method Hot', '14K', 'Biji single origin dengan seduhan panas menggunakan driper filter', 'manual brewing'),
(17, 'Coffee Filter Method Ice ', '16K', 'Biji single origin dengan seduhan dingin menggunakan driper filter', 'manual brewing'),
(18, 'Robusta Drip', '11K', 'Kopi robusta yang diseduh dengan driper filter Vietnam drip', 'manual brewing'),
(19, 'Robusta Drip Susu', '12K', 'Kopi robusta dengan tambahan susu kondensasi yang diseduh dengan driper filter Vietnam drip', 'manual brewing'),
(20, 'Robusta Tubruk', '10K', 'Biji kopi robusta diseduh dengan air panas', 'manual brewing'),
(21, 'Robusta Tubruk Susu', '11K', 'Biji kopi robusta dan susu kondensasi diseduh dengan air panas', 'manual brewing'),
(22, 'Arabika Tubruk', '12K', 'Biji kopi arabika diseduh dengan air panas', 'manual brewing'),
(23, 'Red Velvet Ice', '17K', 'Powder Redvelvet dengan tambahan susu yang membuat rasa lebih krimi dan disajikan dalam bentuk dingin', 'milk based'),
(24, 'Red Velvet Hot', '16K', 'Powder Redvelvet dengan tambahan susu yang membuat rasa lebih krimi dan disajikan dalam bentuk panas', 'milk based'),
(25, 'Matcha Ice', '16K', 'Powder matcha dengan tambahan susu disajikan dalam bentuk dingin', 'milk based'),
(26, 'Matcha Hot', '15K', 'Powder matcha dengan tambahan susu disajikan dalam bentuk panas', 'milk based'),
(27, 'Vanilla Strawberry Ice', '17K', 'Powder vanilla dan sirup strawberry dengan tambahan susu', 'milk based'),
(28, 'Chocolate Ice', '15K', 'Powder coklat dengan tambahan susu disajikan dalam bentuk dingin', 'milk based'),
(29, 'Chocolate Hot', '14K', 'Powder coklat dengan tambahan susu disajikan dalam bentuk panas', 'milk based'),
(30, 'Vanilla Ice', '15K', 'Powder vanila dengan tambahan susu disajikan dalam bentuk dingin', 'milk based'),
(31, 'Vanilla Hot', '14K', 'Powder vanila dengan tambahan susu disajikan dalam bentuk panas', 'milk based'),
(32, 'Aurora', '13K', 'Strawberry, jeruk, lemon, gula, soda  ', 'fresh from tikum'),
(33, 'Viola', '13K', 'Rose, lemon, gula, soda', 'fresh from tikum'),
(34, 'Sunset', '13K', 'Jeruk, lemon, apel, gula, soda', 'fresh from tikum'),
(35, 'Jupiter', '13K', 'Jeruk, strawberry, apel, gula, soda', 'fresh from tikum');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`id_food`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `food`
--
ALTER TABLE `food`
  MODIFY `id_food` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
