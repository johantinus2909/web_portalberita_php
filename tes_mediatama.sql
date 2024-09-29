-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2024 at 04:27 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tes_mediatama`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tgl_lahir` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`, `email`, `tgl_lahir`) VALUES
(1, 'johan', 'johan', 'johan@gmail.com', '2014-09-19'),
(2, 'admin', 'admin', '', '0000-00-00'),
(3, 'admin1', 'admin', 'admin@gmail.com', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(11) NOT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `judul_berita` varchar(255) NOT NULL,
  `isi_berita` text NOT NULL,
  `gambar_berita` varchar(255) DEFAULT NULL,
  `tgl_berita` date NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id_berita`, `id_kategori`, `judul_berita`, `isi_berita`, `gambar_berita`, `tgl_berita`, `slug`) VALUES
(6, 5, 'belajar Bootstrabb33', 'belajar  framework sangat menyenangkan 3333', '07092024065154img_0156e1d3c930f9a2a9e42e6392dffa83.jpg', '2024-09-04', 'belajar-bootstarab'),
(15, 3, 'Belajar php native', 'belajar php native sesuatu yang menyenangkan bukan?', '070920240652262.png', '2024-09-07', 'belajar-php-native'),
(16, 3, 'Belajar ReactJS', 'Apa Itu ReactJS?\r\nReactJS adalah pustaka JavaScript yang dikembangkan oleh Facebook untuk membangun antarmuka pengguna (UI) yang dinamis dan responsif. Diluncurkan pada 2013, ReactJS telah menjadi salah satu alat yang paling populer dalam pengembangan web, memungkinkan pengembang untuk membuat aplikasi web yang kompleks dengan efisien.\r\n\r\nMengapa Memilih ReactJS?\r\nKomponen Reusable: ReactJS memungkinkan Anda membangun antarmuka dengan komponen-komponen terpisah yang dapat digunakan kembali di berbagai bagian aplikasi. Ini menghemat waktu dan mempermudah pemeliharaan kode.\r\n\r\nVirtual DOM: ReactJS menggunakan Virtual DOM, yang merupakan representasi memori dari UI. Ini memungkinkan React untuk memperbarui UI secara efisien hanya pada bagian yang berubah, bukan keseluruhan halaman, yang meningkatkan performa aplikasi.\r\n\r\nUnidirectional Data Flow: Dengan aliran data satu arah, React memastikan bahwa data hanya mengalir dari komponen induk ke komponen anak. Ini membuat aplikasi lebih mudah dikelola dan debug.\r\n\r\nEkosistem yang Kuat: React memiliki ekosistem yang kaya dengan berbagai alat dan pustaka, seperti React Router untuk navigasi dan Redux untuk manajemen state, yang memudahkan pengembangan aplikasi yang kompleks.', '070920240656201.png', '2024-09-07', 'belajar-reactjs'),
(17, 3, 'Belajar Flask', 'Where does it come from?\r\nContrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.', '090920240536371.png', '2024-09-09', 'belajar-flask'),
(18, 3, 'Webinar', 'MongoDB Fundamentals: Mastering the Basics for Effective Database Management\r\n\r\nSelamat datang di webinar \'MongoDB Fundamentals: Mastering the Basics for Effective Database Management\'! Temukan dasar-dasar MongoDB dari instalasi hingga operasi CRUD, kueri data, keamanan, dan strategi backup. Cocok untuk pengembang yang ingin menguasai pengelolaan basis data dengan MongoDB. Bergabunglah dan tingkatkan keterampilan Anda dalam mengelola basis data dengan efisien!', '09092024054125webinar_johan.png', '2024-09-09', 'webinar'),
(20, 11, 'belajar programming', 'lflafakjfkasjkfkf', '1009202410054711zon_cropped (2).png', '2024-09-10', 'belajar-programming');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_berita`
--

CREATE TABLE `kategori_berita` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori_berita` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori_berita`
--

INSERT INTO `kategori_berita` (`id_kategori`, `nama_kategori_berita`) VALUES
(3, 'Tecnology'),
(4, 'Olahraga'),
(5, 'Hiburon'),
(9, 'Politika'),
(10, 'Pendidikan'),
(11, 'Akademik');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  ADD PRIMARY KEY (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `kategori_berita`
--
ALTER TABLE `kategori_berita`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `berita`
--
ALTER TABLE `berita`
  ADD CONSTRAINT `berita_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `kategori_berita` (`id_kategori`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
