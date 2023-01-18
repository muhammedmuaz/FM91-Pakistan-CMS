-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2023 at 06:45 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fm91pakistancms`
--

-- --------------------------------------------------------

--
-- Table structure for table `day1s`
--

CREATE TABLE `day1s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `showname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `showPicture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starttime` time NOT NULL,
  `closetime` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `day1s`
--

INSERT INTO `day1s` (`id`, `showname`, `authorname`, `details`, `showPicture`, `starttime`, `closetime`, `created_at`, `updated_at`) VALUES
(4, 'GENERATION DESI', 'RJ TAIMOOR', 'This is RJ Taimoor show', 'Generation Desi 1_1669591404.jpg', '10:00:00', '12:00:00', '2022-11-28 07:23:24', '2022-11-28 07:33:33'),
(5, 'Campus Radio', 'RJ Wafa', 'This is campus radio show', 'Campus Radio With RJ WAFA - Copy_1669591522.jpg', '15:00:00', '17:00:00', '2022-11-28 07:25:22', '2022-11-28 07:25:22'),
(6, 'NOMO FOMO', 'Aima Baig', 'This is FM91 show', 'Nomo_Fomo_1669592204.jpg', '13:00:00', '15:00:00', '2022-11-28 07:36:44', '2022-11-28 07:36:44');

-- --------------------------------------------------------

--
-- Table structure for table `day2s`
--

CREATE TABLE `day2s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `showname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `showPicture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starttime` time NOT NULL,
  `closetime` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `day2s`
--

INSERT INTO `day2s` (`id`, `showname`, `authorname`, `details`, `showPicture`, `starttime`, `closetime`, `created_at`, `updated_at`) VALUES
(1, 'NOMO FOMO', 'Aima Baig', 'This is FM91 Show', 'Nomo_Fomo_1669592255.jpg', '13:00:00', '15:00:00', '2022-11-28 07:37:35', '2022-11-28 07:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `day3s`
--

CREATE TABLE `day3s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `showname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `showPicture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starttime` time NOT NULL,
  `closetime` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `day3s`
--

INSERT INTO `day3s` (`id`, `showname`, `authorname`, `details`, `showPicture`, `starttime`, `closetime`, `created_at`, `updated_at`) VALUES
(1, 'DOST KIYA SCENE HAI', 'DINO', 'This is Fm91 show', 'DKSH_1669591955.jpg', '10:00:00', '18:00:00', '2022-11-28 07:32:35', '2022-11-28 07:32:35'),
(2, 'NOMO FOMO', 'Aima Baig', 'This is FM91 Show', 'Nomo_Fomo_1669592306.jpg', '13:00:00', '15:00:00', '2022-11-28 07:38:26', '2022-11-28 07:38:26');

-- --------------------------------------------------------

--
-- Table structure for table `day4s`
--

CREATE TABLE `day4s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `showname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `showPicture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starttime` time NOT NULL,
  `closetime` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `day5s`
--

CREATE TABLE `day5s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `showname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `showPicture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starttime` time NOT NULL,
  `closetime` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `day5s`
--

INSERT INTO `day5s` (`id`, `showname`, `authorname`, `details`, `showPicture`, `starttime`, `closetime`, `created_at`, `updated_at`) VALUES
(1, 'Tailor Made', 'Munib Nawaz', 'This is FM91 Show', 'Munneb 1_1669592111.jpg', '18:00:00', '20:00:00', '2022-11-28 07:35:11', '2022-11-28 07:35:11');

-- --------------------------------------------------------

--
-- Table structure for table `day6s`
--

CREATE TABLE `day6s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `showname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `showPicture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starttime` time NOT NULL,
  `closetime` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `day6s`
--

INSERT INTO `day6s` (`id`, `showname`, `authorname`, `details`, `showPicture`, `starttime`, `closetime`, `created_at`, `updated_at`) VALUES
(2, 'KYNETIK', 'DJ Shahrukh', 'This is fm91 show', 'Kynetik with DJ Shahrukh_1669592710.png', '14:00:00', '16:00:00', '2022-11-28 07:45:10', '2022-11-28 07:45:10');

-- --------------------------------------------------------

--
-- Table structure for table `day7s`
--

CREATE TABLE `day7s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `showname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `authorname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `showPicture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `starttime` time NOT NULL,
  `closetime` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `day7s`
--

INSERT INTO `day7s` (`id`, `showname`, `authorname`, `details`, `showPicture`, `starttime`, `closetime`, `created_at`, `updated_at`) VALUES
(1, 'WHERE YOUR WISHES COME TRUE', 'Radio Genie', 'This is FM91 Show', 'Radio Genie Rizwan_1669592415.jpg', '22:00:00', '12:00:00', '2022-11-28 07:40:15', '2022-11-28 07:40:15');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `event_name`, `event_description`, `event_img`, `created_at`, `updated_at`) VALUES
(5, 'NOMO FOMO', 'This is Nomo Fomo Event', 'FZ8_GLjXEAEX-YD_1669719030.jpg', '2022-11-29 18:50:30', '2022-11-29 18:50:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `local_ads`
--

CREATE TABLE `local_ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clicks` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `local_ads`
--

INSERT INTO `local_ads` (`id`, `company_name`, `url`, `cover`, `clicks`, `created_at`, `updated_at`) VALUES
(1, 'Honda', 'Testing', 'Fb-1_1670003845.png', 0, '2022-12-02 12:57:25', '2022-12-02 12:57:25'),
(3, 'Testing Add2', 'Testing', 'public/Adds/Fb4snzRWQAAg69j_1670005161.png', 0, '2022-12-02 13:19:21', '2022-12-02 13:19:21'),
(4, 'Testing Add3', 'ffefe', 'http://127.0.0.1:8000public/AddsFb-2_1670005490.png', 0, '2022-12-02 13:24:50', '2022-12-02 13:24:50'),
(7, 'Honda', 'https://fm91.com.pk/', 'http://10.0.2.2:8000/storage/Adds/Rjsophie-radio_1670102813.png', 0, '2022-12-04 05:26:53', '2022-12-04 05:26:53');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(4, '2022_11_20_133239_create_palylistnames_table', 1),
(5, '2022_11_20_212940_create_day1s_table', 1),
(6, '2022_11_20_213955_create_day2s_table', 1),
(7, '2022_11_20_214050_create_day3s_table', 1),
(8, '2022_11_20_214159_create_day4s_table', 1),
(9, '2022_11_20_214214_create_day5s_table', 1),
(10, '2022_11_20_214229_create_day6s_table', 1),
(11, '2022_11_20_214243_create_day7s_table', 1),
(12, '2022_11_24_012557_create_playlistsongs_table', 1),
(13, '2022_11_26_110218_create_playlistheadings_table', 1),
(14, '2022_11_27_215309_create_events_table', 2),
(15, '2022_12_02_170807_create_local_ads_table', 3),
(16, '2022_12_02_190239_create_users_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `palylistnames`
--

CREATE TABLE `palylistnames` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `playlistname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `heading` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `palylistnames`
--

INSERT INTO `palylistnames` (`id`, `playlistname`, `total`, `heading`, `created_at`, `updated_at`) VALUES
(1, 'Baazi', 0, 1, '2022-11-27 23:35:30', '2022-11-27 23:35:30'),
(2, 'Baazi 2', 0, 1, '2022-11-28 08:22:08', '2022-11-28 08:22:08'),
(3, 'Biggest Baazi', 0, 2, '2022-11-28 08:22:21', '2022-11-28 08:22:21'),
(4, 'Biggest Hits', 0, 1, '2022-12-04 21:51:07', '2022-12-04 21:51:07'),
(5, 'POP', 0, 1, '2022-12-04 21:51:25', '2022-12-04 21:51:25'),
(6, 'Coke Studio Season 15', 0, 1, '2022-12-04 21:51:46', '2022-12-04 21:51:46');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 1, 'my-app-token', 'cfc00eeb127c760ddfd851567a8cd86cb6f30de558abae8d2a1f3caf3ec6fc48', '[\"*\"]', '2022-12-02 14:20:46', NULL, '2022-12-02 14:13:09', '2022-12-02 14:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `playlistheadings`
--

CREATE TABLE `playlistheadings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playlistheadings`
--

INSERT INTO `playlistheadings` (`id`, `Name`, `created_at`, `updated_at`) VALUES
(1, 'BIGGEST HITS', NULL, NULL),
(2, 'POP', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `playlistsongs`
--

CREATE TABLE `playlistsongs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `song_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `song_pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `song_audio` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `playlist_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `playlistsongs`
--

INSERT INTO `playlistsongs` (`id`, `song_name`, `song_pic`, `song_audio`, `playlist_id`, `created_at`, `updated_at`) VALUES
(2, 'NOMO FOMO KOMO', 'FZ8_GLjXEAEX-YD_1669563977.jpg', 'y2mate.com - Chal Chaiya Chaiya  4K Video Song  Dil Se 1998  Sukhwinder Singh  Sapna Awasthi  Shahrukh Khan_1669563977.mp3', 1, '2022-11-27 23:46:17', '2022-11-29 18:40:30'),
(4, 'NOMO FOMO', 'FZ8_GLjXEAEX-YD_1669563977.jpg', 'y2mate.com - Chal Chaiya Chaiya  4K Video Song  Dil Se 1998  Sukhwinder Singh  Sapna Awasthi  Shahrukh Khan_1669563977.mp3', 1, NULL, NULL),
(5, 'NOMO FOMO', 'FZ8_GLjXEAEX-YD_1669563977.jpg', 'y2mate.com - Chal Chaiya Chaiya  4K Video Song  Dil Se 1998  Sukhwinder Singh  Sapna Awasthi  Shahrukh Khan_1669563977.mp3', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `podcastcovers`
--

CREATE TABLE `podcastcovers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `podcast_name` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `podcastcovers`
--

INSERT INTO `podcastcovers` (`id`, `podcast_name`, `cover_image`, `author_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Dino', 'testing', 'testing', 'Lorem Ipsum', NULL, NULL),
(2, 'Dinner with Dino', 'testing', 'testing', 'Lorem Ipsum', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'John Doe', 'maaz@gmail.com', NULL, '$2y$10$lsyttE38KMbgWj1HQR6uMO.CetDSPS.rHNAzpKRBvkoFG3NcD56/C', NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `day1s`
--
ALTER TABLE `day1s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day2s`
--
ALTER TABLE `day2s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day3s`
--
ALTER TABLE `day3s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day4s`
--
ALTER TABLE `day4s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day5s`
--
ALTER TABLE `day5s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day6s`
--
ALTER TABLE `day6s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `day7s`
--
ALTER TABLE `day7s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `local_ads`
--
ALTER TABLE `local_ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `palylistnames`
--
ALTER TABLE `palylistnames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `playlistheadings`
--
ALTER TABLE `playlistheadings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `playlistsongs`
--
ALTER TABLE `playlistsongs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `day1s`
--
ALTER TABLE `day1s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `day2s`
--
ALTER TABLE `day2s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `day3s`
--
ALTER TABLE `day3s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `day4s`
--
ALTER TABLE `day4s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `day5s`
--
ALTER TABLE `day5s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `day6s`
--
ALTER TABLE `day6s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `day7s`
--
ALTER TABLE `day7s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `local_ads`
--
ALTER TABLE `local_ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `palylistnames`
--
ALTER TABLE `palylistnames`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `playlistheadings`
--
ALTER TABLE `playlistheadings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `playlistsongs`
--
ALTER TABLE `playlistsongs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
