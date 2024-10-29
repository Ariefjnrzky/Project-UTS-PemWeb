-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2024 at 07:58 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikel`
--

CREATE TABLE `artikel` (
  `id` int(3) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `artikel`
--

INSERT INTO `artikel` (`id`, `judul`, `isi`) VALUES
(1, 'About Me', 'Saya merupakan seorang mahasiswa aktif di program studi Informatika Universitas Pembangunan Jaya dengan minat yang tinggi di bidang Website Developer. Saya memiliki keahlian dalam pemrograman website dan pengalaman dalam merancang antarmuka website. Saya sangat antusias berkontribusi pada pengembangan solusi digital yang inovatif dan kreatif. Saya mengutamakan hasil dan memastikan setiap tugas yang saya tangani diselesaikan dengan baik dan tepat waktu.');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `Whatsapp` varchar(15) NOT NULL,
  `Email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `Whatsapp`, `Email`) VALUES
(1, '', '082123278092', 'ariefjanuarizky@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `myskill`
--

CREATE TABLE `myskill` (
  `id_skill` int(11) NOT NULL,
  `nama_skill` varchar(100) NOT NULL,
  `kategori` varchar(50) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `myskill`
--

INSERT INTO `myskill` (`id_skill`, `nama_skill`, `kategori`, `deskripsi`) VALUES
(1, 'HTML, CSS, Javascript', 'Frontend Development', 'Bahasa markup dan scripting untuk desain dan interaktivitas web.'),
(2, 'Responsive Web Design', 'Frontend Development', 'Kemampuan untuk membuat desain web adaptif pada berbagai perangkat.'),
(3, 'Bootstrap', 'Frontend Framework', 'Framework CSS untuk membangun desain web responsif.'),
(4, 'PHP, Laravel', 'Backend Development', 'Bahasa dan framework untuk pengembangan server-side.'),
(5, 'MySQL', 'Database Management', 'Manajemen basis data dengan sistem relational database.'),
(6, 'Design UI/UX', 'Design', 'Kemampuan merancang antarmuka dan pengalaman pengguna.'),
(7, 'Editor', 'Tools', 'Penggunaan editor seperti VSCode, Sublime, dan lainnya.');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `judul`, `isi`) VALUES
(1, 'Website Responsif', 'Kami menyediakan layanan pengembangan website responsif yang memastikan tampilan dan fungsionalitas optimal di berbagai perangkat, seperti desktop, tablet, dan smartphone. Dengan ini, pengguna akan mendapatkan pengalaman yang konsisten di semua resolusi layar'),
(2, 'Tampilan Interaktif', 'Kami menciptakan tampilan website yang interaktif untuk meningkatkan keterlibatan pengguna melalui animasi, transisi yang halus, dan fitur-fitur interaktif. Layanan ini dirancang agar website Anda terasa lebih hidup dan atraktif.'),
(3, 'HTML, CSS, Javascript', 'Kami membangun website dengan kombinasi HTML, CSS, dan Javascript untuk menghasilkan struktur yang kuat, tampilan visual yang menarik, serta fungsionalitas yang dinamis dan intuitif.'),
(4, 'Bootstrap, Jquery', 'Kami menggunakan Bootstrap untuk mempercepat proses pengembangan dan memastikan website Anda responsif dengan grid system modern. Selain itu, penggunaan jQuery memudahkan penerapan animasi dan interaksi yang kompleks dengan waktu pengembangan lebih efisien.'),
(5, 'Desain UI/UX', 'Kami menawarkan layanan desain UI/UX untuk memastikan setiap elemen website berfungsi secara optimal dan memberikan pengalaman yang memuaskan bagi pengguna. Fokus kami adalah menciptakan tampilan yang estetis sekaligus mudah digunakan, sehingga pengguna merasa nyaman dalam setiap interaksi.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikel`
--
ALTER TABLE `artikel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myskill`
--
ALTER TABLE `myskill`
  ADD PRIMARY KEY (`id_skill`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikel`
--
ALTER TABLE `artikel`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `myskill`
--
ALTER TABLE `myskill`
  MODIFY `id_skill` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
