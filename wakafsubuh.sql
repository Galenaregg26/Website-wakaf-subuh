-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2023 at 06:21 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.0.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wakafsubuh`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_user`
--

CREATE TABLE `tabel_user` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `fp` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tabel_user`
--

INSERT INTO `tabel_user` (`id`, `name`, `username`, `email`, `password`, `fp`) VALUES
(1, 'reggina indriani', 'galenaregg', 'reggina@gmail.com', 'hiregg', ''),
(2, 'Nafila ', 'nafila123', 'nafilah@yahoo.co.id', 'nafila21', ''),
(3, 'Ibrohim', 'Ibrohim123', 'Ibrohim123@gmail.com', 'ibrohim21', ''),
(4, 'reggita indriani', 'purplejelly', 'reggitaindriani@gmail.com', 'reggita23', ''),
(5, 'Quinsha Khalisa', 'queen', 'queensha@yahoo.co.id', 'annyeongqueen', ''),
(9, 'user1', 'user1', 'user1@gmail.com', '1234user', ''),
(10, 'user2', 'user2', 'user2@gmail.com', '$2y$10$unXh4PWTH2wX9ghjCtgABOL3LTtxHmz2u2IkgFd7tpcgR/RdSMnDm', ''),
(13, 'udin', 'udintamvan', 'udin@gmail.com', '$2y$10$E.yV7JlfXDvejpIF0w.fAOFSVWxA3BCh.P49iNehwqVnr9W/wZ1gS', ''),
(14, 'axios', 'axiosss', 'axios@gmail.com', '$2y$10$zcT00AcUMBLYPvWz5swQyOVE93uJ98sCMiM.MnnT300uad384gSpK', ''),
(15, 'kjkjgsg', 'gadhetteh', 'getwhrth@gmail.com', '$2y$10$h/uEad.lX1EHuvqxHdPPA.kYSSJKE6KnJwd7ClAcTd0cZ/kfXBxEe', ''),
(16, 'gegwhrt', 'hrthrwhtr', 'thhrthwrth@gmail.cpm', '$2y$10$YgG9pLAbFUI.Nf3UX36lgederYwQvjTTW00WIC9kEovsX0vnBXg62', ''),
(17, 'hjtjtyj', 'jtjtjtk', 'tyjtjtj@gmail.com', '$2y$10$xi6RxwyzZAdB86ju4O3UIeOnp5oBIRsbtsF7tb7KG/dcodAeXXKma', '637b9f6f11445.jpg'),
(18, 'amawannew', 'amawannew', 'amawannew@gmail.com', '$2y$10$LMb5K9IQmTBdEB0khkxQou5dSEl8QafofwPC6ctmqlLR4ERcl7AKa', '637b9fa631c0e.jpeg'),
(19, 'Reggina Indriani', 'hireggina', 'regginaindrianiii@yahoo.com', '$2y$10$JKymvE7c3Z1d/HQiuwgVRewsuNb3sQ7VusblvIoQFsszD1H5IpxMW', '6386e72359514.jpg'),
(20, 'test', 'test', 'test@gmail.com', '$2y$10$lFnKNTF/S56DVG9TgrWiU.w7Jk5Lii7rFpkuu2ctkoJNMOytNq6PC', '63a1e08ae0507.'),
(21, 'test1234', 'test1234', '1234@gmail.com', '$2y$10$JGd10lvdbTPqyzlVETflF.m6ZAWJ7TF5HipPvi79relGObKFQScAe', '63a1e491a9a62.jpeg'),
(22, 'test666', 'yyyy', 'vevrtb@gmail.com', '$2y$10$16WFx1tjkSW3uiT7tCU.6.VuOnUE5T7VeMXuafONa8.VuxK34MJuy', '63a1e4c26bf03.'),
(24, 'abdul azis', 'amawan', 'amawan@gmail.com', '$2y$10$zfJUje3ODozzJJtJ0aXGw.53V24Ke3LXsS0B3PEoQCho5xVWvACE.', 'profil-63a229b419bcc.jpg'),
(31, 'name', 'username', 'username@gmail.com', '$2y$10$XpttrohN/.bOh59pAMkmDeaT39Bf0XxMSofiq7IlpX.kBpo10wWdG', 'profil-63ab2e5888854.jpeg'),
(32, 'Namee', 'usernameee', 'usernamee@gmail.com', '$2y$10$Jbb.aObayHPwnrdSR.MhGOS77VbSqOcnL/ziL7/cLLCBPhCJz78zm', 'profil-63bd9ff450b20.png'),
(33, 'zahara', 'zahara1', 'zahara@gmail.com', '$2y$10$tNbOV4ZIu/osKKL5mPcvC.Hx8MMtw0RqBTMVmB2rdjyfY3Pgi4cpK', 'profil-63c166bf3285a.jpg'),
(34, 'Nabilaaa', 'Nabila', 'nabila@gmail.com', '$2y$10$TeZTlR9NwKqYkWngVtS65eQ4Ra9Whut.RuiOhZdYfF4O1b30GoNlq', 'profil-63c18e1f2c7f6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_donasi`
--

CREATE TABLE `tbl_donasi` (
  `id` int(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `kategori` varchar(40) NOT NULL,
  `tempat` varchar(40) NOT NULL,
  `donasi` bigint(20) NOT NULL,
  `transaksi` varchar(40) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `doa` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_donasi`
--

INSERT INTO `tbl_donasi` (`id`, `username`, `Name`, `Email`, `phone`, `kategori`, `tempat`, `donasi`, `transaksi`, `gambar`, `doa`) VALUES
(31, 'Nabila', 'Oxa Kirana', 'oxakirana@gmail.com', '1234', 'Masjid', 'Desa Pardomuan', 340000, 'OVO', 'bukti-transaksi-63c1901d8f89a.jpg', 'aamiin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_saran`
--

CREATE TABLE `tbl_saran` (
  `id` int(11) NOT NULL,
  `subjek` varchar(255) NOT NULL,
  `saran` text NOT NULL,
  `username` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_saran`
--

INSERT INTO `tbl_saran` (`id`, `subjek`, `saran`, `username`) VALUES
(43, 'test1', 'lorem1', 'username'),
(52, 'n', 'n', 'zahara1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_user`
--
ALTER TABLE `tabel_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_donasi`
--
ALTER TABLE `tbl_donasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_user`
--
ALTER TABLE `tabel_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `tbl_donasi`
--
ALTER TABLE `tbl_donasi`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_saran`
--
ALTER TABLE `tbl_saran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
