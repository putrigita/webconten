-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2018 pada 14.55
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcontent`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User'),
(3, 'guest', 'Guest'),
(4, 'others', 'others'),
(5, 'enduser', 'enduser');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_article`
--

CREATE TABLE `tb_article` (
  `article_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `article_title` varchar(255) NOT NULL,
  `article_slug` varchar(255) NOT NULL,
  `article_img` varchar(255) NOT NULL,
  `article_content` text NOT NULL,
  `visitors` int(11) NOT NULL,
  `created_on` int(11) NOT NULL,
  `updated_on` int(11) NOT NULL,
  `author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_article`
--

INSERT INTO `tb_article` (`article_id`, `category_id`, `article_title`, `article_slug`, `article_img`, `article_content`, `visitors`, `created_on`, `updated_on`, `author`) VALUES
(1, 7, 'Tes Article', 'tes-article', 'tes-article.jpg', '<p>Tes Uncategory</p>', 5, 1508332525, 1515159719, 1),
(2, 10, 'Tes', 'tes', 'tes.jpeg', '<p>Tes</p>', 2, 1508332537, 1515159669, 1),
(3, 8, 'Baru', 'baru', 'baru.jpg', '<p>Member</p>', 5, 1508424149, 1515159742, 2),
(4, 6, 'dasd', 'dasd', 'dasd.jpg', '<p>sadada</p>', 2, 1508425112, 1515160135, 2),
(5, 6, 'Ts', 'ts', 'ts.jpg', '<p>Hhhiihuuuhaaa</p>', 7, 1508425350, 1515160152, 4),
(6, 7, 'Time1', 'time1', 'time11.png', '<p>Tes Waktu1</p>', 5, 1510500445, 1519515605, 1),
(7, 8, 'Tes Baru', 'tes-baru', 'tes-baru1.jpg', '<p>Tes yaa</p>', 3, 1515160298, 1515160298, 2),
(8, 10, 'Ms', 'ms', 'ms.png', '<p>Apa</p>', 0, 1516460901, 1516460901, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_category`
--

CREATE TABLE `tb_category` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(10) NOT NULL,
  `chain_for` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_category`
--

INSERT INTO `tb_category` (`category_id`, `category_name`, `chain_for`) VALUES
(1, 'Uncategory', 'news'),
(2, 'Sci-Tech', 'news'),
(3, 'Music', 'news'),
(4, 'Sports', 'news'),
(5, 'Politics', 'news'),
(6, 'Life', 'article'),
(7, 'Intermezzo', 'article'),
(8, 'Technology', 'article'),
(9, 'Uncategory', 'article'),
(10, 'Musics', 'article');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_info`
--

CREATE TABLE `tb_info` (
  `info_id` int(11) NOT NULL,
  `info_title` varchar(10) NOT NULL,
  `info_content` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_info`
--

INSERT INTO `tb_info` (`info_id`, `info_title`, `info_content`) VALUES
(1, 'Owner Name', 'Muhammad Reza Ramadhan'),
(2, 'Profesion', 'Programmer, Music Enthusiast, Big Dreamer'),
(3, 'Address', 'Kp. Kabasiran RT 02/02 Kec. Parungpanjang Kab. Bogor - 16360'),
(4, 'Contact', '(+62) 85781586837'),
(5, 'Email', 'rezarpl3@gmail.com'),
(6, 'LinkedIn', 'rezaaramadhann'),
(7, 'Facebook', 'rezaaramadhann'),
(8, 'Twitter', 'rezaa_ramadhann'),
(9, 'Instagram', 'rezaa.ramadhann'),
(10, 'Remote.com', 'rezarpl');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_news`
--

CREATE TABLE `tb_news` (
  `news_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `news_title` varchar(255) NOT NULL,
  `news_slug` varchar(255) NOT NULL,
  `news_img` varchar(255) NOT NULL,
  `news_content` text NOT NULL,
  `visitors` int(11) NOT NULL,
  `created_on` int(11) NOT NULL,
  `updated_on` int(11) NOT NULL,
  `author` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_news`
--

INSERT INTO `tb_news` (`news_id`, `category_id`, `news_title`, `news_slug`, `news_img`, `news_content`, `visitors`, `created_on`, `updated_on`, `author`) VALUES
(3, 1, 'Tes Admin', 'tes-admin', 'tes-admin.png', '<p>Tes Admin</p>', 4, 1508234550, 1515161075, 1),
(4, 3, 'Tes Member', 'tes-member', 'tes-member.jpeg', '<p>Tes Member</p>', 5, 1508235549, 1515159222, 2),
(5, 4, 'Tes Guest', 'tes-guest', 'tes-guest.jpg', '<p>Tes Guest</p>', 5, 1508235618, 1515159123, 4),
(6, 2, 'Time', 'time', 'time.jpg', '<p>Tes Local Time</p>', 3, 1510522321, 1515161680, 1),
(7, 2, 'Sebuah kapal selam dikendalikan dengan joystick milik konsol Xbox 360.', 'sebuah-kapal-selam-dikendalikan-dengan-joystick-milik-konsol-xbox-360', 'tes-baru.jpg', '<p>Sebuah kapal selam biasanya akan dilengkapi dengan periskop dan alat kendali lain. Sayangnya, peralatan itu tak akan ditemukan lagi pada kapal selam Angkatan Laut Amerika Serikat generasi baru.</p>\r\n\r\n<p>Pada September 2017 lalu, Angkatan Laut Amerika Serikat mengganti periskop pada sejumlah kapal selam nuklirnya dengan perangkat yang lebih modern dan canggih. Uniknya, periskop itu dikendalikan dengan joystick milik konsol Xbox 360.</p>\r\n\r\n<p>Periskop pada kapal selam nuklir AL AS ini diganti dengan dua tiang photonik yang dapat berputar 360 derajat. Tiang ini dilengkapi oleh kamera beresolusi tinggi.</p>\r\n\r\n<p>Tidak seperti periskop konvensional yang citranya hanya dapat dilihat oleh satu orang, citra yang ditangkap oleh tiang photonik dapat ditampilkan di monitor besar, sehingga dapat dilihat oleh banyak orang.</p>', 11, 1515159045, 1516017887, 1),
(8, 5, 'Apa', 'apa', 'apa.jpg', '<p>Apa Kek</p>', 3, 1516460796, 1516460796, 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_project`
--

CREATE TABLE `tb_project` (
  `project_id` int(11) NOT NULL,
  `project_nama` varchar(255) NOT NULL,
  `project_deskripsi` text NOT NULL,
  `project_url_local` varchar(255) NOT NULL,
  `project_url_public` varchar(255) NOT NULL,
  `project_company` varchar(255) NOT NULL,
  `developed_in` int(11) NOT NULL,
  `shows_order` int(11) NOT NULL,
  `project_img` varchar(255) NOT NULL,
  `project_slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_project`
--

INSERT INTO `tb_project` (`project_id`, `project_nama`, `project_deskripsi`, `project_url_local`, `project_url_public`, `project_company`, `developed_in`, `shows_order`, `project_img`, `project_slug`) VALUES
(1, 'School Administration Application', 'Administrative Panel of Tuition Fees', 'http://ujikom.apps', 'http://-', 'SMK Bina Putra Mandiri', 2015, 1, 'aplikasi-tata-usaha-sekolah1.png', 'school-administration-application'),
(2, 'Japanese Mizu Steak House', 'Company Profile Japanese Mizu Restaurant', 'http://mizu.apps', 'http://japanesmizu.com', 'Japanes Mizu Steak House', 2016, 2, 'japanese-mizu-steak-house1.png', 'japanese-mizu-steak-house'),
(3, 'Ticketing', 'Helpdesk Application of the Ministry of Marine Affairs and Fisheries  of the Republic of Indonesia', 'http://tiketing.apps', 'http://helpdesk.lpse.kkp.go.id', 'Kementerian Kelautan dan Perikanan', 2016, 2, 'ticketing1.png', 'ticketing'),
(4, 'AdVIP', 'Company Profile AdVIP', 'http://advip.apps', 'http://advip.id', 'AdVIP', 2017, 2, 'advip.png', 'advip'),
(5, 'Industrial Tourism Apps', 'Industrial Database and Tourism Events on Ministry of Tourism of the Republic of Indonesia', 'http://industri.apps', 'http://-', 'LAN / Kementerian Pariwisata', 2017, 2, 'database-industri.png', 'industrial-tourism-apps'),
(6, 'Regnas', 'Application of Map of Institutional Relations Cooperation on Ministry of Tourism  of the Republic of Indonesia', 'http://petakerjasama.apps', 'http://-', 'LAN / Kementerian Pariwisata', 2017, 2, 'regnas.png', 'regnas'),
(7, 'Festival Questionnaire Apps', 'Portal of Tourism Event Questionnaire on Ministry of Tourism  of the Republic of Indonesia', 'http://festival.apps', 'http://-', 'LAN / Kementerian Pariwisata', 2017, 2, 'festival-quesionare1.png', 'festival-questionnaire-apps'),
(8, 'Panel Quesinare Apps', 'Panel Administrator Festival Questionare on Ministry of Tourism  of the Republic of Indonesia', 'http://panel.festival.apps', 'http://-', 'LAN / Kementerian Pariwisata', 2017, 2, 'panel-quesinare-apps1.png', 'panel-quesinare-apps'),
(9, 'APPGINDO', 'Web Design Fronted End Company Profile APPGINDO', 'http://-/', 'http://appgindo.com', 'ASOSIASI PENGUSAHA PERNIKAHAN DAN GAUN INDONESIA', 2016, 2, 'appgindo1.png', 'appgindo'),
(10, 'MRR Web', 'My Portfolio', 'http://mrrweb.apps', 'http://mrrweb.id', 'MRR Inc.', 2017, 0, 'mrr-web1.png', 'mrr-web'),
(11, 'Top 3 Task Manager', 'Task Manager Application to Evaluate and Monitor Priority Activities of each Work Unit for each specified period', 'http://top3kemenpar.apps', 'http://top3kemenpar.000webhostapp.com', 'Kementerian Pariwisata', 2018, 2, 'top-3-task-manager.PNG', 'top-3-task-manager');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `email` varchar(254) NOT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `salt`, `email`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`, `photo`) VALUES
(1, '127.0.0.1', 'gita', '$2y$08$pO44FIO.tQp6gAIZiAY7IuZQUcYofhmDr1lmLZBWG.C6/FncuFZUG', '', 'admin@admin.com', '', NULL, NULL, NULL, 1268889823, 1543758928, 1, 'Putri Gita ', 'Andriyani', 'PGA. Inc', '0989787', 'photo_1_Muhammad Reza.png'),
(2, '127.0.0.1', 'member', '$2y$08$6PZigXG.GzKMLssgOyy9Nu1gLWpVCu0nG0VM9DcNR5.srZJa3HY9G', NULL, 'new@member.com', NULL, NULL, NULL, NULL, 1505354853, 1517146122, 1, 'Member', 'Baru', 'Member', '9999', 'photo_2_Member.png'),
(3, '127.0.0.1', 'membertes', '$2y$08$jIQca3vNxKRu5msZ0RyKOuc7e/lgCg2BcS4zY407TDYtWo0ATnn32', NULL, 'membertes@membertes.com', NULL, NULL, NULL, NULL, 1505355290, 1516786412, 1, 'member', 'female', 'Member', '99', 'photo_3_member.png'),
(4, '127.0.0.1', 'lenovo', '$2y$08$1x2b/pWWBZcz4hyuKMolk.K5vlfJNDFvjZu2dq1TWpXIBS5UO.C6G', NULL, 'tes@mail.com', NULL, NULL, NULL, NULL, 1505461903, 1516901373, 1, 'leno', 'vo', 'Guest', '999', 'photo_4_leno.png'),
(5, '127.0.0.1', 'tesuser', '$2y$08$qQ6YkvPGE0M3ho7J/ub0I..MZ.D6CtAS/2FLKo8SO1h5OVZJbvF2u', NULL, 'tes.baru@mail.com', NULL, NULL, NULL, NULL, 1513061880, 1516901034, 1, 'Tes', 'Lagi', 'Com', '00999', 'photo_5_Tes.png');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(32, 1, 1),
(37, 2, 2),
(38, 2, 5),
(51, 3, 4),
(52, 3, 5),
(35, 4, 3),
(53, 5, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_article`
--
ALTER TABLE `tb_article`
  ADD PRIMARY KEY (`article_id`);

--
-- Indeks untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indeks untuk tabel `tb_info`
--
ALTER TABLE `tb_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indeks untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indeks untuk tabel `tb_project`
--
ALTER TABLE `tb_project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_article`
--
ALTER TABLE `tb_article`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_info`
--
ALTER TABLE `tb_info`
  MODIFY `info_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `tb_news`
--
ALTER TABLE `tb_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `tb_project`
--
ALTER TABLE `tb_project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `users_groups`
--
ALTER TABLE `users_groups`
  ADD CONSTRAINT `fk_users_groups_groups1` FOREIGN KEY (`group_id`) REFERENCES `groups` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_users_groups_users1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
