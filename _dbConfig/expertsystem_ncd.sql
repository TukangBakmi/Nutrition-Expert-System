-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 06, 2023 at 06:11 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `expertsystem_ncd`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin314');

-- --------------------------------------------------------

--
-- Table structure for table `cf_bank_soal`
--

CREATE TABLE `cf_bank_soal` (
  `id` int(4) NOT NULL,
  `code` varchar(4) DEFAULT NULL,
  `id_gejala` int(4) DEFAULT NULL,
  `pertanyaan` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cf_bank_soal`
--

INSERT INTO `cf_bank_soal` (`id`, `code`, `id_gejala`, `pertanyaan`) VALUES
(1, 'Q1', 1, 'Apakah Anda mengalami Anemia ringan, seperti sering kelelahan, sering merasa mual, dan kelopak mata yang pucat?'),
(2, 'Q2', 2, 'Apakah terdapat pembengkakan yang berisi cairan pada bagian tangan atau kaki Anda?'),
(3, 'Q3', 3, 'Apakah perut Anda mengalami pembengkakan atau buncit?'),
(4, 'Q4', 4, 'Apakah akhir-akhir ini berat badan Anda mengalami penurunan?'),
(5, 'Q5', 5, 'Apakah Anda sering berkeringat dingin?'),
(6, 'Q6', 6, 'Apakah Anda mengalami masalah dengan pencernaan Anda?'),
(7, 'Q7', 7, 'Apakah denyut jantung Anda sering berdetak dengan lambat atau cepat secara tiba-tiba?'),
(8, 'Q8', 8, 'Apakah saat ini jantung Anda berdetak dengan cepat?'),
(9, 'Q9', 9, 'Apakah Anda mengalami diare?'),
(10, 'Q10', 10, 'Apakah terdapat infeksi jamur pada kelamin Anda?'),
(11, 'Q11', 11, 'Apakah Anda sering mengalami kegagalan dalam menaikkan berat badan?'),
(12, 'Q12', 12, 'Apakah Anda mengalami penurunan berat badan sampai mengakibatkan tubuh Anda menjadi kurus?'),
(13, 'Q13', 13, 'Apakah kulit Anda menjadi berkerut dan longgar karena lemak yang berkurang?'),
(14, 'Q14', 14, 'Apakah Anda sering mengalami kram otot?'),
(15, 'Q15', 15, 'Apakah kulit Anda kering dan menunjukan garis – garis kulit yang mendalam dan lebar, serta bersisik?'),
(16, 'Q16', 16, 'Apakah akhir-akhir ini Anda menjadi lesu dan kehilangan nafsu makan?'),
(17, 'Q17', 17, 'Apakah Anda mengalami masalah penglihatan?'),
(18, 'Q18', 18, 'Apakah Anda sering mengalami mati rasa atau kebas?'),
(19, 'Q19', 19, 'Apakah Anda sering merasa cemas dan tegang?'),
(20, 'Q20', 20, 'Apakah Anda sering merasa haus?'),
(21, 'Q21', 21, 'Apakah mood Anda sedang tidak stabil?'),
(22, 'Q22', 22, 'Apakah wajah Anda sebelumnya tampak relatif normal selama beberapa waktu, lalu berubah menjadi berkeriput dan menyusut?'),
(23, 'Q23', 23, 'Apakah nafsu makan dan bergerak Anda berkurang?'),
(24, 'Q24', 24, 'Apakah Anda mengalami nyeri di bagian dada?'),
(25, 'Q25', 25, 'Apakah Anda mengalami pembengkakan pada bagian kaki dan perut?'),
(26, 'Q26', 26, 'Apakah pertumbuhan Anda terganggu, seperti berat badan dan tinggi badan yang kurang dari idealnya?'),
(27, 'Q27', 27, 'Apakah Anda sering mengalami pusing atau vertigo?'),
(28, 'Q28', 28, 'Apakah rambut Anda mudah dicabut, tampak kusam kering, halus jarang, dan berubah warna?'),
(29, 'Q29', 29, 'Apakah Anda mengalami sakit kepala?'),
(30, 'Q30', 30, 'Apakah Anda sering berkeringat?'),
(31, 'Q31', 31, 'Apakah Anda sering mengalami kelelahan?'),
(32, 'Q32', 32, 'Apakah Anda sering mual dan muntah?'),
(33, 'Q33', 33, 'Apakah Anda sering mual dan muntah yang diikuti dengan pilek serta demam?'),
(34, 'Q34', 34, 'Apakah Anda sering mengalami sesak napas?'),
(35, 'Q35', 35, 'Apakah wajah Anda menjadi kemerahan?');

-- --------------------------------------------------------

--
-- Table structure for table `cf_bmi`
--

CREATE TABLE `cf_bmi` (
  `id` int(4) NOT NULL,
  `code` varchar(4) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cf_bmi`
--

INSERT INTO `cf_bmi` (`id`, `code`, `name`) VALUES
(1, 'K1', 'Kurus'),
(2, 'K2', 'Normal'),
(3, 'K3', 'Gemuk');

-- --------------------------------------------------------

--
-- Table structure for table `cf_gejala`
--

CREATE TABLE `cf_gejala` (
  `id` int(4) NOT NULL,
  `code` varchar(4) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cf_gejala`
--

INSERT INTO `cf_gejala` (`id`, `code`, `name`) VALUES
(1, 'G1', 'Anemia ringan (sering kelelahan, kelopak mata pucat, sering mual)'),
(2, 'G2', 'Bengkak (berisi cairan) pada bagian tangan atau kaki'),
(3, 'G3', 'Bengkak pada perut (buncit)'),
(4, 'G4', 'Berat badan turun'),
(5, 'G5', 'Berkeringat dingin'),
(6, 'G6', 'Bermasalah dengan pencernaan'),
(7, 'G7', 'Denyut jantung tiba – tiba lambat atau cepat'),
(8, 'G8', 'Detak jantung cepat'),
(9, 'G9', 'Diare'),
(10, 'G10', 'Infeksi jamur pada kelamin'),
(11, 'G11', 'Kegagalan menaikkan berat badan'),
(12, 'G12', 'Kehilangan berat badan sampai berakibat kurus'),
(13, 'G13', 'Kehilangan turgor pada kulit sehingga menjadi berkerut dan longgar karena lemak subkutan hilang dari bantalan pipi'),
(14, 'G14', 'Kram otot'),
(15, 'G15', 'Kulit kering dengan menunjukan garis – garis kulit yang mendalam dan lebar, dan bersisik'),
(16, 'G16', 'Lesu dan nafsu makan hilang'),
(17, 'G17', 'Masalah penglihatan'),
(18, 'G18', 'Mati rasa'),
(19, 'G19', 'Merasa cemas dan tegang'),
(20, 'G20', 'Merasa haus'),
(21, 'G21', 'Mood tidak stabil'),
(22, 'G22', 'Muka dapat tetap tampak relatif normal selama beberaba waktu sebelum menjadi menyusut dan berkeriput'),
(23, 'G23', 'Nafsu makan dan bergerak kurang'),
(24, 'G24', 'Nyeri di dada'),
(25, 'G25', 'Pembengkakan kaki dan perut'),
(26, 'G26', 'Pertumbuhan terganggu, BB dan TB kurang dibandingkan dengan yang sehat'),
(27, 'G27', 'Pusing (Vertigo)'),
(28, 'G28', 'Rambut mudah dicabut, tampak kusam kering, halus jarang dan berubah warna'),
(29, 'G29', 'Sakit kepala'),
(30, 'G30', 'Sering berkeringat'),
(31, 'G31', 'Sering kelelahan'),
(32, 'G32', 'Sering mual dan muntah'),
(33, 'G33', 'Sering mual dan muntah pilek dan demam'),
(34, 'G34', 'Sesak napas'),
(35, 'G35', 'Wajah kemerahan');

-- --------------------------------------------------------

--
-- Table structure for table `cf_penyakit`
--

CREATE TABLE `cf_penyakit` (
  `id` int(4) NOT NULL,
  `code` varchar(4) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(3000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cf_penyakit`
--

INSERT INTO `cf_penyakit` (`id`, `code`, `name`, `description`) VALUES
(1, 'P1', 'Kwashiorkor', 'Kwashiorkor adalah salah satu bentuk malnutrisi berat akibat kekurangan protein dalam jangka panjang. Gejala khas pada penderita kwashiorkor adalah tubuh membengkak dan perut membesar. Kwashiorkor disebabkan oleh kekurangan asupan protein, vitamin, dan mineral dalam jangka panjang. Selain itu, anak yang hanya mengonsumsi makanan sumber karbohidrat, misalnya nasi dan jagung, dalam jangka panjang juga dapat mengalami kwashiorkor.'),
(2, 'P2', 'Marasmus', 'Marasmus adalah penyakit malnutrisi karena kekurangan asupan energi atau kalori dari semua bentuk makronutrien, yang mencakup karbohidrat, lemak, dan protein. Penyakit Marasmus sering terjadi pada anak-anak di negara berkembang. Penyakit ini ditandai dengan kurangnya kalori dan cairan dalam tubuh, serta menipisnya cadangan lemak sehingga mengakibatkan otot-otot tubuh mengecil.'),
(3, 'P3', 'Gula darah', 'Diabetes adalah penyakit kronis yang ditandai dengan meningkatnya kadar gula darah (glukosa) hingga di atas nilai normal. Glukosa merupakan sumber energi utama bagi sel tubuh manusia. Akan tetapi, pada penderita diabetes, glukosa tersebut tidak dapat digunakan oleh tubuh. Diabetes terjadi ketika tubuh pengidapnya tidak lagi mampu mengambil gula (glukosa) ke dalam sel dan menggunakannya sebagai energi. Kondisi ini pada akhirnya menghasilkan penumpukan gula ekstra dalam aliran darah tubuh.'),
(4, 'P4', 'Penurunan daya tahan tubuh (Masuk angin)', 'Penurunan daya tahan tubuh biasa dikenal oleh masyarakat Indonesia dengan istilah masuk angin. Penurunan daya tahan tubuh memiliki gejala yang hampir serupa dengan influenza yang termasuk ke dalam jenis penyakit ISPA. Penyakit ini dapat diobati dengan mengonsumsi obat herbal yang terbuat dari bahan alami seperti jahe, daun mint, atau madu. Selain itu, Anda juga dapat mengatur pola makan, tidur yang cukup serta olahraga ringan agar daya tahan tubuh menjadi lebih baik.'),
(5, 'P5', 'Hipertensi', 'Hipertensi adalah pengertian medis dari penyakit tekanan darah tinggi. Kondisi ini dapat menyebabkan berbagai macam komplikasi kesehatan yang membahayakan nyawa jika dibiarkan. Bahkan, gangguan ini dapat menyebabkan peningkatan risiko terjadinya penyakit jantung, stroke, hingga kematian. Selain konsumsi obat-obatan, pengobatan hipertensi juga bisa dilakukan melalui terapi relaksasi, misalnya terapi meditasi atau olahraga yoga. Namun, pengobatan hipertensi tidak akan berjalan lancar jika tidak disertai dengan pola makan dan hidup yang sehat, serta olahraga secara teratur.'),
(6, 'P6', 'Jantung', 'Penyakit jantung adalah kondisi ketika jantung mengalami gangguan. Bentuk gangguan itu sendiri bermacam-macam, bisa berupa gangguan pada pembuluh darah jantung, katup jantung, atau otot jantung. Penyakit jantung juga dapat disebabkan oleh infeksi atau kelainan lahir. Penanganan penyakit jantung tergantung pada jenis penyakit yang diderita. Metode pengobatannya bisa dengan perubahan gaya hidup menjadi lebih sehat, pemberian obat-obatan, dan tindakan operasi, seperti transplantasi jantung.');

-- --------------------------------------------------------

--
-- Table structure for table `cf_rules`
--

CREATE TABLE `cf_rules` (
  `id` int(4) NOT NULL,
  `id_bmi` int(4) DEFAULT NULL,
  `id_penyakit` int(4) DEFAULT NULL,
  `id_gejala` int(4) DEFAULT NULL,
  `mb` float DEFAULT NULL,
  `md` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cf_rules`
--

INSERT INTO `cf_rules` (`id`, `id_bmi`, `id_penyakit`, `id_gejala`, `mb`, `md`) VALUES
(1, 1, 1, 1, 0.8, 0.1),
(2, 1, 1, 2, 0.7, 0.2),
(3, 1, 1, 3, 0.5, 0.35),
(4, 1, 1, 9, 0.6, 0.5),
(5, 1, 1, 15, 0.9, 0.1),
(6, 1, 1, 26, 0.8, 0.1),
(7, 1, 1, 28, 0.85, 0.1),
(8, 1, 2, 3, 0.5, 0.35),
(9, 1, 2, 6, 0.2, 0.05),
(10, 1, 2, 11, 0.45, 0.1),
(11, 1, 2, 12, 0.7, 0.2),
(12, 1, 2, 13, 0.8, 0.1),
(13, 1, 2, 16, 0.78, 0.31),
(14, 1, 2, 22, 0.89, 0.05),
(15, 1, 3, 4, 0.79, 0.3),
(16, 1, 3, 10, 0.69, 0.39),
(17, 1, 3, 14, 0.45, 0.2),
(18, 1, 3, 17, 0.88, 0.25),
(19, 1, 3, 18, 0.4, 0.2),
(20, 1, 3, 20, 0.5, 0.49),
(21, 1, 3, 21, 0.59, 0.2),
(22, 1, 3, 31, 0.65, 0.49),
(23, 1, 4, 5, 0.48, 0.19),
(24, 1, 4, 9, 0.6, 0.5),
(25, 1, 4, 16, 0.78, 0.31),
(26, 1, 4, 23, 0.6, 0.3),
(27, 1, 4, 31, 0.65, 0.49),
(28, 1, 4, 33, 0.15, 0.09),
(29, 1, 5, 8, 0.87, 0.45),
(30, 1, 5, 27, 0.87, 0.15),
(31, 1, 5, 29, 0.79, 0.15),
(32, 1, 5, 31, 0.65, 0.49),
(33, 1, 5, 35, 0.49, 0.45),
(34, 1, 6, 7, 0.75, 0.3),
(35, 1, 6, 19, 0.7, 0.3),
(36, 1, 6, 24, 0.69, 0.4),
(37, 1, 6, 25, 0.7, 0.31),
(38, 1, 6, 29, 0.79, 0.15),
(39, 1, 6, 30, 0.4, 0.3),
(40, 1, 6, 31, 0.65, 0.49),
(41, 1, 6, 32, 0.15, 0.09),
(42, 1, 6, 34, 0.45, 0.4),
(43, 2, 3, 4, 0.63, 0.43),
(44, 2, 3, 10, 0.78, 0.15),
(45, 2, 3, 14, 0.2, 0.18),
(46, 2, 3, 17, 0.15, 0.07),
(47, 2, 3, 18, 0.45, 0.25),
(48, 2, 3, 20, 0.15, 0.05),
(49, 2, 3, 21, 0.05, 0.02),
(50, 2, 3, 31, 0.35, 0.1),
(51, 2, 4, 5, 0.48, 0.19),
(52, 2, 4, 9, 0.6, 0.5),
(53, 2, 4, 16, 0.78, 0.31),
(54, 2, 4, 23, 0.6, 0.3),
(55, 2, 4, 31, 0.65, 0.49),
(56, 2, 4, 33, 0.15, 0.09),
(57, 2, 5, 8, 0.89, 0.1),
(58, 2, 5, 27, 0.9, 0.27),
(59, 2, 5, 29, 0.81, 0.27),
(60, 2, 5, 31, 0.35, 0.05),
(61, 2, 5, 35, 0.65, 0.35),
(62, 2, 6, 7, 0.75, 0.2),
(63, 2, 6, 19, 0.75, 0.3),
(64, 2, 6, 24, 0.75, 0.4),
(65, 2, 6, 25, 0.73, 0.3),
(66, 2, 6, 29, 0.81, 0.27),
(67, 2, 6, 30, 0.45, 0.3),
(68, 2, 6, 31, 0.35, 0.1),
(69, 2, 6, 32, 0.22, 0.15),
(70, 2, 6, 34, 0.52, 0.33),
(71, 3, 3, 4, 0.75, 0.1),
(72, 3, 3, 10, 0.85, 0.15),
(73, 3, 3, 14, 0.25, 0.15),
(74, 3, 3, 17, 0.2, 0.07),
(75, 3, 3, 18, 0.45, 0.2),
(76, 3, 3, 20, 0.25, 0.05),
(77, 3, 3, 21, 0.05, 0.02),
(78, 3, 3, 31, 0.45, 0.1),
(79, 3, 4, 5, 0.48, 0.19),
(80, 3, 4, 9, 0.6, 0.5),
(81, 3, 4, 16, 0.78, 0.31),
(82, 3, 4, 23, 0.6, 0.3),
(83, 3, 4, 31, 0.65, 0.49),
(84, 3, 4, 33, 0.15, 0.09),
(85, 3, 5, 8, 0.9, 0.3),
(86, 3, 5, 27, 0.92, 0.35),
(87, 3, 5, 29, 0.85, 0.22),
(88, 3, 5, 31, 0.45, 0.15),
(89, 3, 5, 35, 0.68, 0.48),
(90, 3, 6, 7, 0.85, 0.15),
(91, 3, 6, 19, 0.78, 0.3),
(92, 3, 6, 24, 0.78, 0.4),
(93, 3, 6, 25, 0.75, 0.25),
(94, 3, 6, 29, 0.85, 0.22),
(95, 3, 6, 30, 0.15, 0.1),
(96, 3, 6, 31, 0.45, 0.1),
(97, 3, 6, 32, 0.27, 0.15),
(98, 3, 6, 34, 0.57, 0.35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `cf_bank_soal`
--
ALTER TABLE `cf_bank_soal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cf_bmi`
--
ALTER TABLE `cf_bmi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cf_gejala`
--
ALTER TABLE `cf_gejala`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cf_penyakit`
--
ALTER TABLE `cf_penyakit`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cf_rules`
--
ALTER TABLE `cf_rules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cf_bank_soal`
--
ALTER TABLE `cf_bank_soal`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `cf_bmi`
--
ALTER TABLE `cf_bmi`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cf_gejala`
--
ALTER TABLE `cf_gejala`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `cf_penyakit`
--
ALTER TABLE `cf_penyakit`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cf_rules`
--
ALTER TABLE `cf_rules`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
