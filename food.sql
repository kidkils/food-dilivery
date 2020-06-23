-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2020 at 08:45 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `api_key` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `api_key`) VALUES
(6, 'coba', '$2y$10$zmvceOt.3lOMw7AF/YBq9.RzBMaQiANxYSe/i8XPSCGFmOsPyLBwW', 'a3040f90cc20fa672fe31efcae41d2db'),
(7, 'agus', '$2y$10$dd..aNt.Zn/hEblSW/2zwuFP4phCj7oOcD9KTX1Vb.0M7UX104p8q', '01c3c766ce47082b1b130daedd347ffd'),
(8, 'endang', '$2y$10$nDqN8p54GGdvzQIJek/YAOjqJFnesvEfUzuwd47X3R4w5RMwaGmkW', '64a26ad4780cf7c2ee658c814c8ecbe5');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `kategori` varchar(30) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama`, `deskripsi`, `kategori`, `harga`, `gambar`) VALUES
(1, 'Meat Lover', 'Irisan sosis sapi, daging sapi cincang, burger sapi, sosis ayam.', 'pizza', 49500, 'meat-lover.jpg'),
(2, 'Super Supreme', 'Daging ayam dan sapi asap, daging sapi cincang, burger sapi, jamur, paprika merah dan paprika hijau.', 'pizza', 49500, 'supreme.jpg'),
(3, 'Tuna Melt', 'Irisan daging ikan tuna, butiran jagung, saus mayonnaise.', 'pizza', 49500, 'tuna-melt.jpg'),
(4, 'American Favourite', 'Pepperoni sapi, daging sapi cincang, jamur.', 'pizza', 49500, 'american-favourite.jpg'),
(5, 'Beef Spaghetti', 'Pepperoni sapi, daging sapi cincang, jamur.', 'pasta', 43000, 'beef-spaghetti.jpg'),
(6, 'Beef Lasagna', 'Dipanggang, daging sapi cincang. krim putih lembut di tiap lapisan.', 'pasta', 48000, 'beef-lasagna.jpg'),
(7, 'Creamy Beef Fettuccine', 'Daging sapi asap dan jamur, ditumis dengan saus krim lembut.', 'pasta', 43000, 'creamy-beef-fettuccine.jpg'),
(8, 'Meatballs Beef Mushroom', 'Bola daging sapi dengan saus daging sapi cincang dan jamur.', 'nasi', 40000, 'meatballs-beef-mushroom.jpg'),
(9, 'Black Pepper Chicken', 'Ayam dengan saus lada hitam.', 'nasi', 40000, 'black-pepper-chicken.jpg'),
(10, 'Oriental Chicken', 'aging ayam berpadu dengan saus oriental.', 'nasi', 40000, 'oriental-chicken.jpg'),
(11, 'Choco Mint', '', 'minuman', 24000, 'choco-mint.jpg'),
(12, 'Toffee Coffee', '', 'minuman', 24000, 'toffee-coffee.jpg'),
(13, 'Green Tea Shake', '', 'minuman', 24000, 'green-tea-shake.jpg'),
(14, 'Strawberry Milkshake', '', 'minuman', 24000, 'strawberry-milkshake.jpg'),
(15, 'Chocolate Milkshake', '', 'minuman', 24000, 'chocolate-milkshake.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
