-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 26, 2019 at 02:40 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sparkup`
--

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `sub_judul` text NOT NULL,
  `deskripsi` text NOT NULL,
  `create_date` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `judul`, `sub_judul`, `deskripsi`, `create_date`) VALUES
(1, 'Seminar & Workshop', 'Business Owner Summit', 'Business Owner Summit adalah seminar satu hari dimana satu atau dua orang expert akan membagikan informasi-informasi penting yang berhubungan dengan sebuah topik. Kemudian para peserta juga akan diberikan kesempatan bertanya langsung di sesi tanya jawab.', '0000-00-00 00:00:00'),
(2, '', 'Organization Development', 'Event ini berfokus pada topik Organization Development atau yang dikenal sebagai OD', '0000-00-00 00:00:00'),
(3, '', 'Organization Development', 'Event ini cocok bagi anda yang akan menyelenggarakan rapat tahunan, acara pemberian reward ke karyawan, dan juga termasuk pelatihan berkala.', '0000-00-00 00:00:00'),
(4, 'In-House Training', '', 'Dengan Inhouse Training para pemilik bisnis bisa menyediakan sebuah sarana pelatihan untuk meningkatkan kinerja karyawannya tanpa harus mengeluarkan biaya berkala', '0000-00-00 00:00:00'),
(5, 'Konsultasi Bisnis', '', 'Konsutasi Bisnis cocok bagi para pemilik bisnis yang ingin mencari soluasi atas sebuah kendala atau tantanga baru dengan efektif dan efisien', '0000-00-00 00:00:00'),
(6, 'Pelatihan Bisnis', '', 'Business Coaching atau Pelatihan Bisnis bisa membantu pemilik bisnis dalam menemukan solusi atas tantangan bisnis yang dialami serta strategi untuk mencapai goal yang diinginkan', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
