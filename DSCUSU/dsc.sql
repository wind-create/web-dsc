-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Apr 2020 pada 08.06
-- Versi server: 10.4.10-MariaDB
-- Versi PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dsc`
--

DELIMITER $$
--
-- Prosedur
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `DataSertifikat` (IN `duar` INT(11))  begin
select a.nama, b.nama_event, b.tanggal, b.tempat, b.sertifikat from history_acara c
inner join users a on c.id_user=a.id_user
inner join event b on c.id_event=b.id_event
where c.id_history=duar;
end$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `ListAcaraDSC` (IN `duar` VARCHAR(100))  begin
select c.id_history, a.email, c.status, b.nama_event, b.tanggal, b.sertifikat, b.tempat from history_acara c
inner join users a on c.id_user=a.id_user
inner join event b on c.id_event=b.id_event
where a.email=duar
order by b.tanggal desc;
end$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `role` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `nama`, `role`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin'),
(2, 'operator', '74be16979710d4c4e7c6647856088456', 'operator', 'operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `blog`
--

CREATE TABLE `blog` (
  `id` int(11) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `penulis` varchar(200) NOT NULL,
  `tgl_terbit` date NOT NULL,
  `isi` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `blog`
--

INSERT INTO `blog` (`id`, `judul`, `penulis`, `tgl_terbit`, `isi`, `deskripsi`) VALUES
(19, 'University Based Community Powered by Google Developers', 'Willi Nardo', '2020-01-07', '<p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-cbb0fc93-7fff-c6db-2ba6-249b7c8d85fd\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Penasaran apa itu DSC? </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Jadi dibaca dulu penjelasan ini! Bakalan bermanfaat buat kamu!</span></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-cbb0fc93-7fff-c6db-2ba6-249b7c8d85fd\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Developer Student Club (DSC) adalah program Google Developers bagi mahasiswa untuk mempelajari keterampilan pengembangan seluler dan web. Program akan terbuka untuk setiap siswa, mulai dari pengembang pemula yang baru memulai, hingga pengembang tingkat lanjut yang ingin meningkatkan keterampilan mereka. Program ini dimaksudkan sebagai ruang bagi siswa untuk mencoba ide-ide baru dan berkolaborasi untuk memecahkan masalah pengembangan seluler dan web.</span></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-cbb0fc93-7fff-c6db-2ba6-249b7c8d85fd\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Apakah Anda seorang pengembang? Apakah Anda ingin mendorong pengetahuan Anda ke tingkat yang lebih jauh? Google berkolaborasi dengan mahasiswa yang bersemangat mengembangkan komunitas pengembang dan mendukung mereka dengan akses ke sumber daya yang telah disediakan Google. </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Here we are, DSC USU!</span></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: center;margin-top:12pt;margin-bottom:12pt;\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-cbb0fc93-7fff-c6db-2ba6-249b7c8d85fd\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span style=\"border:none;display:inline-block;overflow:hidden;width:602px;height:112px;\"><img src=\"https://lh6.googleusercontent.com/WqB3uaoaGt2BYilb9rMJjerHmJxxdmpLaMmasSgO6U7LpjERg6HKsofAVboRf3DILjatwQU0RDJKJsXUZ2R6Ncp5jRZm1JXyyWfD769GYitHEMMQDg6jUu3gKCUUQw37aQSMTic6\" style=\"margin-left:0px;margin-top:0px;\" width=\"602\" height=\"112\"></span></span></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-cbb0fc93-7fff-c6db-2ba6-249b7c8d85fd\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Apa saja kegiatan kami di DSC USU?</span></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-cbb0fc93-7fff-c6db-2ba6-249b7c8d85fd\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Jadi nantinya bakalan ada kegiatan-kegiatan seperti workshop,event atau lainnya. Disini siswa akan dibekali dengan keterampilan pemrograman untuk digunakan untuk menciptakan solusi bagi masalah masyarakat.&nbsp;</span></b></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><b style=\"font-weight:normal;\" id=\"docs-internal-guid-cbb0fc93-7fff-c6db-2ba6-249b7c8d85fd\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Jadi nanti nya kalian akan mendapatkan kegiatan pelatihan langsung seperti Cloud Study Jam, Flutter Study Jam dan masih banyak lagi. Kita bakal ada adain kemitraan juga dengan komunitas Google lainnya seperti GDG. </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Gimana? Menarik bukan?</span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">&nbsp;</span></b></p><b style=\"font-weight:normal;\" id=\"docs-internal-guid-cbb0fc93-7fff-c6db-2ba6-249b7c8d85fd\"><br><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Alasan kalian harus bergabung! :D</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: center;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span style=\"border:none;display:inline-block;overflow:hidden;width:539px;height:278px;\"><img src=\"https://lh4.googleusercontent.com/tXtwNq1_MaFQSTN13liT5WfISq3RP1aoyt9g0T7GUDH2DBR1yqQ1Lv2GSRGuAIK7nUgeRZz7SvvQJSS2-_1MN_NcxjVFufVsrAwoFoA3DO8_E0h1gih_oVxNG3JT71Si5hcS8ZmE\" style=\"margin-left:0px;margin-top:0px;\" width=\"539\" height=\"278\"></span></span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Tahukah kamu bahwa kamu akan belajar lebih efektif jika mengajar orang lain! :D</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Dengan bergabung ke DSC, kalian bisa membangun jaringan profesional dan pribadi kalian, mendapatkan akses ke toolsnya Google untuk developer, dan kalian bisa mendapatkan kesempatan untuk bekerja sama memecahkan masalah dan membangun solusi di sekitar kita dengan dibimbing oleh orang yang sudah berpengalaman tentunya.</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Jadi disini kamu bakalan mendapatkan pengalaman industri yang relevan dengan memecahkan masalah bagi organisasi lokal dengan solusi berbasis teknologi.</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Kamu juga akan mendapat kesempatan untuk memperlihatkan solusi yang telah kamu selesaikan kepada komunitas lokal dan pemimpin industri mereka.</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Siapa saja yang bisa ikut?</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Program terbuka untuk setiap mahasiswa, jadi bukan cuma anak Fasilkom-TI yang bisa ikut, mahasiswa fakultas lain&nbsp; mulai dari pengembang pemula yang baru memulai, hingga pengembang advanced yang ingin meningkatkan keterampilan mereka juga bisa ikut!</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">USU telah menjadi bagian dari komunitas DSC tahun lalu. Menjadikannya debut pertama sebagai komunitas mahasiswa pengembang pertama di Universitas Sumatera Utara. Sekarang, kami hadir di tahun kedua DSC untuk terus belajar teknologi bersama, membuat lebih banyak dampak dengan teknologi untuk memecahkan masalah kehidupan nyata dan mengundang para siswa yang antusias teknologi yang ingin melakukan hal yang sama.</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: center;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\"><span style=\"border:none;display:inline-block;overflow:hidden;width:602px;height:254px;\"><img src=\"https://lh4.googleusercontent.com/cQljw_KZ8yBCPSq2Rn2hJrjpFaE8_HQrng_FJNxGsXvN5-knd2dJWb5p8zJrRoQ-2s2O-df0sGVW5WvkieM91DGis9XBNudvtGaM3MOtCuoddSHuPO1H6sUq0Dj1BeOTyLjukd6l\" style=\"margin-left:0px;margin-top:0px;\" width=\"602\" height=\"254\"></span></span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Kita akan buka kesempatan buat kalian yang ingin bergabung. Jadi pantau terus saja kegiatan DSC USU dan tunjukkan semangat kalian. </span><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Come and join us!</span></p><br><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Jangan lupa kepoin kami di sosial media :&nbsp;</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Instagram : @dsc.usu</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Medium : Developer Student Clubs Universitas Sumatera Utara</span></p><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:700;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">LinkedIn : Developer Student Clubs Universitas Sumatera Utara</span></p></b><br class=\"Apple-interchange-newline\"><p><br></p>', '<b style=\"font-weight:normal;\" id=\"docs-internal-guid-f79816d0-7fff-49a9-1a3d-7beedf4703e8\"><p dir=\"ltr\" style=\"line-height:1.38;text-align: justify;margin-top:12pt;margin-bottom:12pt;\"><span style=\"font-size:12pt;font-family:\'Times New Roman\';color:#000000;background-color:transparent;font-weight:400;font-style:normal;font-variant:normal;text-decoration:none;vertical-align:baseline;white-space:pre;white-space:pre-wrap;\">Developer Student Club (DSC) adalah program Google Developers bagi mahasiswa untuk mempelajari keterampilan pengembangan seluler dan web. Program akan terbuka untuk setiap siswa, mulai dari pengembang pemula yang baru memulai, hingga pengembang tingkat lanjut yang ingin meningkatkan keterampilan mereka. Program ini dimaksudkan sebagai ruang bagi siswa untuk mencoba ide-ide baru dan berkolaborasi untuk memecahkan masalah pengembangan seluler dan web.</span></p></b><br class=\"Apple-interchange-newline\">');

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `nama_event` varchar(100) NOT NULL,
  `tempat` text NOT NULL,
  `tanggal` date NOT NULL,
  `deskripsi` text NOT NULL,
  `poster` varchar(120) NOT NULL DEFAULT 'default.jpg',
  `sertifikat` varchar(100) NOT NULL,
  `kursi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama_event`, `tempat`, `tanggal`, `deskripsi`, `poster`, `sertifikat`, `kursi`) VALUES
(1, 'Flutter Interact: Viewing Party 2019 ', 'Ruang PUI (Pusat Unggulan IPTEK), Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Sumatera Utara, Jalan  Universitas No. 9 Medan, Indonesia', '2019-12-21', 'Event Date        : Sabtu, 21 Desember 2019\r\nEvent Timing    : 13.00 - 18.00\r\nEvent Location : Ruang PUI (Pusat Unggulan IPTEK), Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Sumatera Utara, Jalan  Universitas No. 9 Medan, Indonesia\r\n\r\nContact us at dscusumedan@gmail.com\r\nContact person : 085277056878 (WA) -  Willi Nardo\r\n\r\nJangan lupa bawa laptop masing2 dan cok sambung tambahan bila memerlukan', '1.JPEG', '', 20),
(2, 'Intro to ML and Google Colabs', 'Ruang PUI (Pusat Unggulan IPTEK), Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Sumatera Utara, Jalan  Universitas No. 9 Medan, Indonesia', '2019-11-30', 'Event Date        : Sabtu, 30 November 2019\r\nEvent Timing    : 10.00 - Selesai\r\nEvent Location : Ruang PUI (Pusat Unggulan IPTEK), Fakultas Ilmu Komputer dan Teknologi Informasi Universitas Sumatera Utara, Jalan  Universitas No. 9 Medan, Indonesia\r\nContact us at dscusumedan@gmail.com\r\nContact person : 081275580160 (WA) -  Ninis\r\n\r\nJangan lupa bawa laptop masing2 dan cok sambung tambahan bila memerlukan\r\n', '2.JPEG', '', 20);

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_acara`
--

CREATE TABLE `history_acara` (
  `id_history` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `log`
--

CREATE TABLE `log` (
  `id` int(4) NOT NULL,
  `time` datetime NOT NULL,
  `log` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `log`
--

INSERT INTO `log` (`id`, `time`, `log`) VALUES
(1, '2020-01-16 12:04:13', ' telah logout'),
(2, '2020-01-16 12:04:39', 'admin telah login'),
(3, '2020-01-16 12:05:17', 'admin telah logout'),
(4, '2020-01-16 12:05:55', 'admin telah login');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `handphone` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-Laki','Perempuan') DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `status` varchar(50) NOT NULL,
  `media_sosial` varchar(100) NOT NULL,
  `tipe_keahlian` varchar(50) NOT NULL,
  `keahlian` text NOT NULL,
  `foto` varchar(50) NOT NULL DEFAULT 'default.jpg',
  `code` varchar(12) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id_user`, `nama`, `alamat`, `email`, `password`, `handphone`, `jenis_kelamin`, `tanggal_lahir`, `status`, `media_sosial`, `tipe_keahlian`, `keahlian`, `foto`, `code`, `active`) VALUES
(2, 'RASYID HAFIZ', '', 'holysyid@gmail.com', '7c3554787e9bc08baf8f749684023bb9', '', NULL, NULL, '', '', '', '', 'default.jpg', 'Ow5ukyPgv1Zq', 1),
(9, 'ammar', '', 'ammar.rafi619@gmail.com', '12345678', '', NULL, NULL, '', '', '', '', 'default.jpg', 'ULNYHbqB2CpP', 1),
(10, 'ruth', '', 'ruthcalistas@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', NULL, NULL, '', '', '', '', 'default.jpg', '4g3upm1kPawE', 1),
(15, 'Alvin', '', 'alvindaeli748@gmail.com', 'ed2b1f468c5f915f3f1cf75d7068baae', '', NULL, NULL, '', '', '', '', 'default.jpg', 'btXaLRgfA8cu', 0),
(22, 'willi nardo', '', 'nardowilli@gmail.com', '25d55ad283aa400af464c76d713c07ad', '', NULL, NULL, '', '', '', '', 'default.jpg', 'pSZDcyAnWYai', 0);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indeks untuk tabel `history_acara`
--
ALTER TABLE `history_acara`
  ADD PRIMARY KEY (`id_history`);

--
-- Indeks untuk tabel `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT untuk tabel `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=623;

--
-- AUTO_INCREMENT untuk tabel `history_acara`
--
ALTER TABLE `history_acara`
  MODIFY `id_history` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT untuk tabel `log`
--
ALTER TABLE `log`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
