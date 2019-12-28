-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2019 at 05:59 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `metta`
--

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(255) NOT NULL,
  `nama_admin` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `nama_admin`, `judul`, `isi`, `foto`) VALUES
(60, 'Joese', 'Love Is You', 'Cuma mau bilang, sekarang kita lagi seminar Sinaptika\r\nTanggal 21 Desember 2019\r\n\r\nDi Aula Rektoran Universitas Mercu Buana Meruya\r\nTerimakasih.', '5114b1743e49d1e780c6eb5c57ee0edf.png'),
(61, 'Metta', 'Buku Adalah Jendala Dunia', 'Pengertian Gantt Chart dan Cara Membuatnya â€“ Gantt Chart adalah sejenis grafik batang (Bar Chart) yang digunakan untuk menunjukan Tugas-tugas pada Proyek serta Jadwal dan waktu pelaksanaannya, seperti waktu dimulainya tugas tersebut dan juga batas waktu yang digunakan untuk menyelesaikan tugas yang bersangkutan. Orang atau Departemen yang ditugaskan untuk menyelesaikan Tugas dalam proyek juga harus dituliskan dalam Gantt Chart.\r\n\r\nBeberapa sebutan lain untuk Gantt Chart diantaranya adalah Milestones Chart, Project Bar Chart dan juga activity chart. Gantt Chart yang dikembangkan oleh Henry Laurence Gantt pada tahun 1910 ini pada dasarnya adalah suatu gambaran atas perencanan, penjadwalan dan pemantauan (monitoring) kemajuan setiap kegiatan atau aktivitas pada suatu proyek.\r\n\r\nGantt Chart merupakan salah satu alat yang sangat bermanfaat dalam merencanakan penjadwalan dan memantau kegiatan pada suatu proyek,  mengkomunikasikan kegiatan-kegiatan yang harus dilaksanakan dan juga status pelaksanaannya. Dalam Gantt Chart juga dapat dilihat urutan kegiatan ataupun tugas yang harus dilakukan berdasarkan prioritas waktu yang ditentukan.', 'dua.jpg'),
(62, 'Joese', 'Cara Buat Gant Chart', 'Mengidentifikasikan Tugas yang perlu diselesaikan pada Proyek\r\nMenentukan Milestone (bagian pekerjaan dari suatu tugas) dengan menggunakan Brainstorming ataupun Flow chart.\r\nMengidentifikasikan waktu yang diperlukan dalam menyelesaikan suatu tugas.\r\nMengidentifikasikan urutan pekerjaan ataupun tugas yang akan dikerjakan. Seperti Tugas yang harus diselesaikan sebelum memulai suatu tugas yang baru ataupun tugas-tugas apa yang harus dilakukan secara bersamaan (Simultan).', 'satu.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL DEFAULT 'default.svg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `nama`, `photo`) VALUES
(1, 'joese', 'misdinar7@gmail.com', '$2y$10$iQl5.BGmPKfxeYmZiOphmenu9e9awAyGMh1D8OX43HTh9QjuF0Agm', 'joese', 'default.svg'),
(3, 'Metta', 'fransasisi7@gmail.com', '$2y$10$fPIVOoq4Y57nG0PoC.AgD.W356Ed9oZMk.JcQCQ1x5CdX1Z7l1DCm', 'Genoveva Metta', 'default.svg'),
(5, 'misdinar', 'fransasisi7@gmail.com', '$2y$10$W4Rw07BmOrBlKVaZI31lH.NEBxj0rlii9R6SWH4iaPSgFXdALdRjm', 'Genoveva Metta', 'default.svg'),
(7, 'metta007', 'fransasisi7@gmail.com', '$2y$10$b6A5uHUy05KMN2bENxBk6.ezj8UilHDwodrfiWsRT.uwo7bA8gFEO', 'Genoveva Metta', 'default.svg'),
(8, 'Anton76a', 'antonius@yahoo.com', '$2y$10$5MX5ylQpW5IlyoFHegPOve4a8E6lxPc640Y4rLLzOPtZLb.ULYTVm', 'Antonius', 'default.svg'),
(10, '41518110067', 'rudytoeboe@yahoo.co.id', '$2y$10$aFMSd1HRN8tYo0sQn3lCSu2K/Dbcovfl50pY/owO0KxD3ZZNGETx2', 'Antonius', 'default.svg'),
(12, 'jajang', 'jajang@yahoo.com', '$2y$10$jMNxJAHLRPCKMm4pgx8VD.GMqr7abn..SP1CRlayxsS7DdtmTQvSO', 'jajang', 'default.svg'),
(13, 'ius', 'ius@yahoo.com', '$2y$10$SManK74erFgelsW51GJ7se5mvE8s15W3zoxFiV4Lqxguc.a/RR666', 'ius', 'default.svg'),
(14, 'admin', 'admin@yahoo.com', '$2y$10$d/u3fRbIX7LtRW6i34qmCOSWdGB4Dcmgc7d4ye5x.MpTbiundZf3.', 'admin', 'default.svg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
