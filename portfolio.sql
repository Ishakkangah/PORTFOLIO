-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 05:20 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `work` varchar(128) NOT NULL,
  `city` varchar(128) NOT NULL,
  `date` varchar(128) NOT NULL,
  `religion` varchar(128) NOT NULL,
  `gender` varchar(128) NOT NULL,
  `weight` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `address` varchar(128) NOT NULL,
  `Note` varchar(236) NOT NULL,
  `img` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `biodata`
--

INSERT INTO `biodata` (`id`, `name`, `work`, `city`, `date`, `religion`, `gender`, `weight`, `height`, `address`, `Note`, `img`) VALUES
(4, 'ISHAKK ANGAH', 'WEB DEVELOPMENT', 'Ogan komering ilir', '18 December', 'Islam', 'Male', 57, 162, 'Jl.merdeka cintaraja kecamatan kayuagung, ogan komering ilir, palembang soult sumatera indonesia', 'I am a bit of a quiet person, I am a good listener and environmentalist, I can adapt and work hard and work with a team, I like neww things.', '3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `whatshapp` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `facebook` varchar(128) NOT NULL,
  `instagram` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `whatshapp`, `email`, `facebook`, `instagram`) VALUES
(1, '+629666035046', 'Ishakkangah@gmail.com', 'iironii2', '@Ishakkangah');

-- --------------------------------------------------------

--
-- Table structure for table `education`
--

CREATE TABLE `education` (
  `id` int(11) NOT NULL,
  `education` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `education`
--

INSERT INTO `education` (`id`, `education`) VALUES
(1, 'SD NEGERI 3 KAYUAGUNG'),
(3, 'SMP NEGERI 1 KAYUAGUNG'),
(4, 'SMK NEGERI 1 KAYUAGUNG'),
(5, 'BINA SRIWIJAYA PALEMBANG');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `img` varchar(128) NOT NULL,
  `subject` varchar(236) NOT NULL,
  `title` varchar(128) NOT NULL,
  `date_created` int(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `img`, `subject`, `title`, `date_created`) VALUES
(29, '123.jpg', '', 'Ishakk angah', 1617677412),
(30, '1231.jpg', '', 'Ishakk angah', 1617788641),
(32, '1231.jpg', '', 'Ishakk angah', 1617797180);

-- --------------------------------------------------------

--
-- Table structure for table `hobby`
--

CREATE TABLE `hobby` (
  `id` int(11) NOT NULL,
  `hobby` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hobby`
--

INSERT INTO `hobby` (`id`, `hobby`) VALUES
(1, 'Programming'),
(2, 'Read old history'),
(7, 'Chees & Badminton'),
(8, 'Indonesian food');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `contact` int(11) NOT NULL,
  `message` varchar(528) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `contact`, `message`, `date_created`) VALUES
(17, 'Alig', 0, 'Alig gilo', 1617798305),
(18, 'Ishakk', 0, 'saya', 1617927371),
(19, 'Ishak', 0, 'sda', 1617927454),
(20, 'a', 0, 'ishak', 1617927499),
(21, 'as', 0, 'dss', 1617927727),
(22, 'a', 0, '12', 1617928496),
(23, 'as', 0, 'c', 1617928600),
(24, 'as', 0, 'as', 1617928711),
(25, 'sa', 0, 'as', 1617928767),
(26, 'as', 0, 'd', 1617928813);

-- --------------------------------------------------------

--
-- Table structure for table `poto`
--

CREATE TABLE `poto` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `img` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `poto`
--

INSERT INTO `poto` (`id`, `title`, `img`, `date_created`) VALUES
(46, 'Ishakk angah', '1233.jpg', 1617798232),
(47, 'Ishakk angah', '32.jpg', 1617806706),
(48, 'Ishakk angah', '1234.jpg', 1617806728);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `password` varchar(128) NOT NULL,
  `img` varchar(128) NOT NULL,
  `Live` varchar(128) NOT NULL,
  `Hoby` varchar(128) NOT NULL,
  `jabatan` varchar(356) NOT NULL,
  `is_active` int(2) NOT NULL,
  `date_created` int(11) NOT NULL,
  `role_id` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `img`, `Live`, `Hoby`, `jabatan`, `is_active`, `date_created`, `role_id`) VALUES
(32, 'Ishakk angah', 'Ishakkangah@gmail.com', '$2y$10$Wekek9LYgCrCXrR9RpUIW.TH2WMRwDb66Xj/reIAzoNyCpYbLJYtC', '2.jpg', '', '', '', 1, 1617696737, 1),
(33, 'asd', 'shsdasasd@gmail.com', '$2y$10$N4xLjhheRN6G.lJLJv7dTuqzo8YBAprOI1MsTZkI25nqy3HXEsYIm', 'default.JPG', '', '', '', 0, 1617929111, 2);

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
(5, 1, 1),
(23, 2, 2),
(33, 1, 2),
(34, 1, 3),
(35, 1, 4);

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
(1, 'admin'),
(2, 'user'),
(3, 'menu'),
(4, 'landing_page');

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
(1, 'administator'),
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
(3, 3, 'Menu management', 'menu', 'fas fa-fw fa-folder', 1),
(4, 3, 'Submenu management', 'menu/submenu', 'far fa-fw fa-folder-open', 1),
(62, 1, 'Role', 'admin/role', 'fas fa-fw fa-pencil-ruler', 1),
(66, 2, 'Change password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(67, 2, 'Profile', 'user', 'fas fa-fw fa-users', 1),
(68, 2, 'Edit profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(69, 1, 'Account user', 'admin/account', 'fas fa-fw fa-user-friends', 1),
(70, 4, 'Sunting portfolio', 'landing/Suntingportfolio', 'fas fa-fw fa-pager', 1),
(71, 4, 'Sunting about', 'landing/Suntingabout', 'fas fa-fw fa-user-edit', 1),
(72, 4, 'Back to web-landing', 'landing', 'fas fa-fw fa-undo-alt', 1),
(73, 4, 'Sunting galery', 'landing/suntingGalery', 'fas fa-fw fa-user-edit', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(44, 'ishakkangah@gmail.com', 'CKulk/2DfU2C0fWxp+WqTSXYe5DPkxG3Co8zns8LJ38=', 1617005126),
(45, 'ishakkangah@gmail.com', '033OcKy9CpyqfsGTfKB54/6cwpA3Xv4j+Xvjjoj2axo=', 1617005494),
(46, 'Ishakkangah@gmail.com', 'NCvycKiPWk/1G9WyqDSiPeZryGouUEQyLz/V2fmk/sk=', 1617696685),
(47, 'Ishakkangah@gmail.com', 'pDO32b3P9m6Fr0Kxuq9S5H9Rg0jdrV1XgccrQIsoYx4=', 1617696737),
(48, 'shsdasasd@gmail.com', 'OfOZuLf30dyyda9GrAf+UnfvdKY9nzLlNU7NbVTWZeM=', 1617929111);

-- --------------------------------------------------------

--
-- Table structure for table `work_experience`
--

CREATE TABLE `work_experience` (
  `id` int(11) NOT NULL,
  `experience` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `work_experience`
--

INSERT INTO `work_experience` (`id`, `experience`) VALUES
(7, 'PT.BUMI PASIR PUTIH'),
(8, 'RM.PAGISORE BASUKI RAHMAD');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `education`
--
ALTER TABLE `education`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobby`
--
ALTER TABLE `hobby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poto`
--
ALTER TABLE `poto`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_experience`
--
ALTER TABLE `work_experience`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `education`
--
ALTER TABLE `education`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hobby`
--
ALTER TABLE `hobby`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `poto`
--
ALTER TABLE `poto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `work_experience`
--
ALTER TABLE `work_experience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
