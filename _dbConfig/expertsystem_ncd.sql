-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Des 2022 pada 15.35
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

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
CREATE DATABASE IF NOT EXISTS `expertsystem_ncd` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `expertsystem_ncd`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) DEFAULT 'admin'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', 'admin314');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cf_evidences`
--

CREATE TABLE `cf_evidences` (
  `id` int(4) NOT NULL,
  `code` varchar(4) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cf_evidences`
--

INSERT INTO `cf_evidences` (`id`, `code`, `name`) VALUES
(1, 'G1', 'Anemia ringan (sering kelelahan, kelopak mata pucat, sering mual)'),
(2, 'G2', 'Bengkak (berisi cairan) pada bagian tangan atau kaki'),
(3, 'G3', 'Bengkak pada perut (buncit)'),
(4, 'G4', 'Berat badan berlebih'),
(5, 'G5', 'Berat badan turun'),
(6, 'G6', 'Berkeringat dingin'),
(7, 'G7', 'Bermasalah dengan pencernaan'),
(8, 'G8', 'Denyut jantung tiba – tiba lambat atau cepat'),
(9, 'G9', 'Detak jantung cepat'),
(10, 'G10', 'Diare'),
(11, 'G11', 'Henti napas untuk sementara secara tiba-tiba saat tidur'),
(12, 'G12', 'Infeksi jamur pada kelamin'),
(13, 'G13', 'Kegagalan menaikkan berat badan'),
(14, 'G14', 'Kehilangan berat badan sampai berakibat kurus'),
(15, 'G15', 'Kehilangan turgor pada kulit sehingga menjadi berkerut dan longgar karena lemak subkutan hilang dari bantalan pipi'),
(16, 'G16', 'Kram otot'),
(17, 'G17', 'Kulit kering dengan menunjukan garis – garis kulit yang mendalam dan lebar, dan bersisik'),
(18, 'G18', 'Lesu dan nafsu makan hilang'),
(19, 'G19', 'Masalah penglihatan'),
(20, 'G20', 'Mati rasa'),
(21, 'G21', 'Mendengkur'),
(22, 'G22', 'Merasa cemas dan tegang'),
(23, 'G23', 'Merasa haus'),
(24, 'G24', 'Mood tidak stabil'),
(25, 'G25', 'Muka dapat tetap tampak relatif normal selama beberaba waktu sebelum menjadi menyusut dan berkeriput'),
(26, 'G26', 'Nafsu makan dan bergerak kurang'),
(27, 'G27', 'Nyeri di dada'),
(28, 'G28', 'Nyeri punggung atau sendi'),
(29, 'G29', 'Pembengkakan kaki dan perut'),
(30, 'G30', 'Pertumbuhan terganggu, BB dan TB kurang dibandingkan dengan yang sehat'),
(31, 'G31', 'Pusing (Vertigo)'),
(32, 'G32', 'Rambut mudah dicabut, tampak kusam kering, halus jarang dan berubah warna'),
(33, 'G33', 'Sakit kepala'),
(34, 'G34', 'Selalu merasa panas'),
(35, 'G35', 'Sering berkeringat'),
(36, 'G36', 'Sering kelelahan'),
(37, 'G37', 'Sering mual dan muntah'),
(38, 'G38', 'Sering mual dan muntah pilek dan demam'),
(39, 'G39', 'Sesak napas'),
(40, 'G40', 'Wajah kemerahan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cf_imt`
--

CREATE TABLE `cf_imt` (
  `id` int(4) NOT NULL,
  `code` varchar(4) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cf_imt`
--

INSERT INTO `cf_imt` (`id`, `code`, `name`) VALUES
(1, 'K1', 'Kurus'),
(2, 'K2', 'Normal'),
(3, 'K3', 'Gemuk');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cf_problems`
--

CREATE TABLE `cf_problems` (
  `id` int(4) NOT NULL,
  `code` varchar(4) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cf_problems`
--

INSERT INTO `cf_problems` (`id`, `code`, `name`, `description`) VALUES
(1, 'P1', 'Kwashiorkor', 'Kwashiorkor adalah salah satu bentuk malnutrisi berat akibat kekurangan protein dalam jangka panjang. Gejala khas pada penderita kwashiorkor adalah tubuh membengkak dan perut membesar.'),
(2, 'P2', 'Marasmus', 'Marasmus adalah kondisi yang ditandai dengan kurangnya kalori dan cairan dalam tubuh, serta menipisnya cadangan lemak. Hal ini mengakibatkan otot-otot tubuh mengecil.'),
(3, 'P3', 'Gula darah', 'Penyakit gula darah atau diabetes adalah penyakit kronis atau yang berlangsung jangka panjang. Penyakit ini ditandai dengan meningkatnya kadar gula darah (glukosa) hingga di atas nilai normal. Diabetes terjadi ketika tubuh pengidapnya tidak lagi mampu men'),
(4, 'P4', 'Masuk Angin', 'Masuk angin merupakan istilah yang sering digunakan oleh masyarakat Indonesia ketika sedang tidak enak badan. Gejala masuk angin ini hampir serupa dengan influenza yang termasuk ke dalam jenis penyakit ISPA. Penyakit yang dikenal dengan sebutan masuk angi'),
(5, 'P5', 'Hipertensi', 'Hipertensi adalah pengertian medis dari penyakit tekanan darah tinggi. Kondisi ini dapat menyebabkan berbagai macam komplikasi kesehatan yang membahayakan nyawa jika dibiarkan. Bahkan, gangguan ini dapat menyebabkan peningkatan risiko terjadinya penyakit '),
(6, 'P6', 'Jantung', 'Penyakit jantung adalah kondisi ketika jantung mengalami gangguan. Bentuk gangguan itu sendiri bermacam-macam, bisa berupa gangguan pada pembuluh darah jantung, katup jantung, atau otot jantung. Penyakit jantung juga dapat disebabkan oleh infeksi atau kel'),
(7, 'P7', 'Obesitas', 'Obesitas adalah kondisi ketika lemak yang menumpuk di dalam tubuh sangat banyak akibat kalori masuk lebih banyak dibandingkan yang dibakar. Jika tidak segera ditangani, obesitas dapat meningkatkan risiko terjadinya penyakit jantung, hipertensi, hingga dia');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cf_rules`
--

CREATE TABLE `cf_rules` (
  `id` int(4) NOT NULL,
  `id_imt` int(4) DEFAULT NULL,
  `id_problem` int(4) DEFAULT NULL,
  `id_evidence` int(4) DEFAULT NULL,
  `cf` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `cf_rules`
--

INSERT INTO `cf_rules` (`id`, `id_imt`, `id_problem`, `id_evidence`, `cf`) VALUES
(1, 1, 1, 1, 0.7),
(2, 1, 1, 2, 0.5),
(3, 1, 1, 3, 0.15),
(4, 1, 1, 10, 0.1),
(5, 1, 1, 17, 0.8),
(6, 1, 1, 30, 0.7),
(7, 1, 1, 32, 0.75),
(8, 1, 2, 3, 0.15),
(9, 1, 2, 7, 0.15),
(10, 1, 2, 13, 0.35),
(11, 1, 2, 14, 0.5),
(12, 1, 2, 15, 0.7),
(13, 1, 2, 18, 0.47),
(14, 1, 2, 25, 0.84),
(15, 1, 3, 5, 0.49),
(16, 1, 3, 12, 0.3),
(17, 1, 3, 16, 0.25),
(18, 1, 3, 19, 0.63),
(19, 1, 3, 20, 0.2),
(20, 1, 3, 23, 0.01),
(21, 1, 3, 24, 0.39),
(22, 1, 3, 36, 0.16),
(23, 1, 4, 6, 0.29),
(24, 1, 4, 10, 0.1),
(25, 1, 4, 18, 0.47),
(26, 1, 4, 26, 0.3),
(27, 1, 4, 36, 0.16),
(28, 1, 4, 38, 0.06),
(29, 1, 5, 9, 0.42),
(30, 1, 5, 31, 0.72),
(31, 1, 5, 33, 0.64),
(32, 1, 5, 36, 0.16),
(33, 1, 5, 40, 0.04),
(34, 1, 6, 8, 0.45),
(35, 1, 6, 22, 0.4),
(36, 1, 6, 27, 0.29),
(37, 1, 6, 29, 0.39),
(38, 1, 6, 33, 0.64),
(39, 1, 6, 35, 0.1),
(40, 1, 6, 36, 0.16),
(41, 1, 6, 37, 0.06),
(42, 1, 6, 39, 0.05),
(43, 2, 3, 5, 0.2),
(44, 2, 3, 12, 0.63),
(45, 2, 3, 16, 0.02),
(46, 2, 3, 19, 0.08),
(47, 2, 3, 20, 0.2),
(48, 2, 3, 23, 0.1),
(49, 2, 3, 24, 0.03),
(50, 2, 3, 36, 0.25);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indeks untuk tabel `cf_evidences`
--
ALTER TABLE `cf_evidences`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cf_imt`
--
ALTER TABLE `cf_imt`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cf_problems`
--
ALTER TABLE `cf_problems`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `cf_rules`
--
ALTER TABLE `cf_rules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_evidence` (`id_evidence`),
  ADD KEY `id_problem` (`id_problem`),
  ADD KEY `id_imt` (`id_imt`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `cf_evidences`
--
ALTER TABLE `cf_evidences`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `cf_imt`
--
ALTER TABLE `cf_imt`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `cf_problems`
--
ALTER TABLE `cf_problems`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `cf_rules`
--
ALTER TABLE `cf_rules`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `cf_rules`
--
ALTER TABLE `cf_rules`
  ADD CONSTRAINT `cf_rules_ibfk_1` FOREIGN KEY (`id_imt`) REFERENCES `cf_imt` (`id`),
  ADD CONSTRAINT `cf_rules_ibfk_2` FOREIGN KEY (`id_evidence`) REFERENCES `cf_evidences` (`id`),
  ADD CONSTRAINT `cf_rules_ibfk_3` FOREIGN KEY (`id_problem`) REFERENCES `cf_problems` (`id`),
  ADD CONSTRAINT `cf_rules_ibfk_4` FOREIGN KEY (`id_imt`) REFERENCES `cf_imt` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
