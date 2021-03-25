-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 05:04 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dadiresik`
--

-- --------------------------------------------------------

--
-- Table structure for table `pemesanan`
--

CREATE TABLE `pemesanan` (
  `id_pemesanan` bigint(20) UNSIGNED NOT NULL,
  `id` int(11) NOT NULL,
  `id_brg` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `metode_bayar` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pemesanan`
--

INSERT INTO `pemesanan` (`id_pemesanan`, `id`, `id_brg`, `tanggal`, `waktu`, `metode_bayar`, `status`) VALUES
(410200001, 8, 5, '2020-10-30', '00:30:00', 'BAYAR DI TEMPAT', 'Pending'),
(410200002, 8, 1, '2020-10-10', '07:30:00', 'OVO', 'Pending'),
(410200003, 8, 5, '2020-10-24', '22:30:00', 'DANA', 'Pending'),
(410200004, 8, 1, '2020-10-17', '21:30:00', 'TRANSFER BANK', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_brg` int(11) NOT NULL,
  `nama_brg` varchar(128) NOT NULL,
  `keterangan` varchar(128) NOT NULL,
  `kategori` varchar(128) NOT NULL,
  `harga` int(128) NOT NULL,
  `stock` int(128) NOT NULL,
  `gambar_barang` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_barang`
--

INSERT INTO `tb_barang` (`id_brg`, `nama_brg`, `keterangan`, `kategori`, `harga`, `stock`, `gambar_barang`) VALUES
(1, 'paket hemat', 'Pembersihan sofa lebih mudah dan ringan.', 'Furniture', 50000, 5, 'sofa1.jpg'),
(5, 'kursi ', 'paket kursi saja', 'Obat Cair', 50000, 4, '789.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(200) NOT NULL,
  `pos` varchar(200) NOT NULL,
  `kelamin` varchar(200) NOT NULL,
  `hp` int(200) NOT NULL,
  `email` varchar(128) NOT NULL,
  `gambar` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_active` int(1) NOT NULL,
  `date_create` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `alamat`, `kota`, `pos`, `kelamin`, `hp`, `email`, `gambar`, `password`, `role_id`, `user_active`, `date_create`) VALUES
(3, 'Alvian', '', '', '', '', 0, 'alvian@gmail.com', 'default.jpg', '$2y$10$JmB4.G4z9Lfb95d8KfD18ORE9RH5pzulBDJzzcNQPjfhGw0xE2l9C', 2, 1, 1593380446),
(4, 'Wahyu Oktoranda', '', '', '', '', 0, 'wahyuokt@gmail.com', 'default.jpg', '$2y$10$QjHZyrxnvolZaiy2UQ/G/.ZI62wbs4XImsfOTegk1Sp4A3jqTVJ6u', 2, 1, 1593380532),
(5, 'Taufiq Rizal', '', '', '', '', 0, 'tfq21@gmail.com', 'default.jpg', '$2y$10$CCoc.uNfIRRBUjueK4JqlOIFOTmbwD5DkQJ1xM84Vtc02pP4K6PrO', 2, 1, 1593380613),
(7, 'Berto Juni Kristanto', '', '', '', '', 0, 'bertojuni@gmail.com', 'default.jpg', '$2y$10$/lpD.tvu5Wrv4L7MasjSHOVXqqnz7OblQD6aQ.1gJpMC69NNv4uSG', 2, 1, 1595786438),
(8, 'Dickyfli Perdana Putra', 'Jl.Lasoso Jalur 2 No.16', 'Palu', '94111', 'Laki-Laki', 2147483647, 'muaralembu11@gmail.com', 'default.jpg', '$2y$10$r/XFVAgHWNQVS8tqM3OOoO7Cm4aSyGh9wFFhB0DG6h8fFwTAOQKO6', 2, 1, 1596737643),
(9, 'berto', '', '', '', '', 0, 'bertojunikrisnanto@gmail.com', '', 'e10adc3949ba59abbe56e057f20f883e', 2, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(11, 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'Barang');

-- --------------------------------------------------------

--
-- Table structure for table `user_nav_menu`
--

CREATE TABLE `user_nav_menu` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_nav_menu`
--

INSERT INTO `user_nav_menu` (`id`, `title`, `url`, `active`) VALUES
(1, 'Home', '', 1),
(3, 'Pemesanan', 'pesan', 1),
(4, 'Cek Pemesanan', 'pesan/cek', 1),
(5, 'Galery', 'galery', 1),
(6, 'Artikel', 'artikel', 1),
(7, 'About', 'about', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'admin'),
(2, 'member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fa fa-fw fa-user', 1),
(3, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(4, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(5, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(6, 2, 'Edit Profile', 'user/editprofile', 'fas fa-fw fa-user-edit', 1),
(7, 3, 'User Menu Management', 'menu/usermenu', 'far fa-fw fa-id-card', 1),
(8, 4, 'Barang', 'barang', 'fas fa-fw fa-box', 1),
(9, 4, 'Invoices', 'invoices', 'fas fa-file-invoice-dollar', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pemesanan`
--
ALTER TABLE `pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`),
  ADD KEY `id` (`id`),
  ADD KEY `id_brg` (`id_brg`);

--
-- Indexes for table `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_nav_menu`
--
ALTER TABLE `user_nav_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_brg` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_nav_menu`
--
ALTER TABLE `user_nav_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
