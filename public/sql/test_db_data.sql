-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 10:33 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE `answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` tinyint(1) NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `text`, `value`, `question_id`, `created_at`, `updated_at`) VALUES
(13, 'Built a super powerful engine', 0, 6, '2023-02-26 18:08:11', '2023-02-26 18:08:11'),
(14, 'Built an amphibious ekranoplan', 1, 6, '2023-02-26 18:08:11', '2023-02-26 18:08:11'),
(15, 'Air sleds set a speed record in Lithuania', 0, 6, '2023-02-26 18:08:11', '2023-02-26 18:08:11'),
(16, 'Bumblebee', 1, 7, '2023-02-26 18:08:43', '2023-02-26 18:08:43'),
(17, 'Bee', 0, 7, '2023-02-26 18:08:43', '2023-02-26 18:08:43'),
(18, 'Wasp', 0, 7, '2023-02-26 18:08:43', '2023-02-26 18:08:43'),
(19, 'Vladas Kensgaila', 0, 8, '2023-02-26 18:09:08', '2023-02-26 18:09:08'),
(20, 'Zenonas Augutis', 0, 8, '2023-02-26 18:09:08', '2023-02-26 18:09:08'),
(21, 'Romualdas Bėkšta', 1, 8, '2023-02-26 18:09:08', '2023-02-26 18:09:08'),
(22, 'GB-2 Tornado', 0, 9, '2023-02-26 18:34:50', '2023-02-26 18:34:50'),
(23, 'GB-1 Cloud', 1, 9, '2023-02-26 18:34:50', '2023-02-26 18:34:50'),
(24, 'GB-5 Sky', 0, 9, '2023-02-26 18:34:50', '2023-02-26 18:34:50'),
(25, '2011', 1, 10, '2023-02-26 18:35:46', '2023-02-26 18:35:46'),
(26, '2008', 0, 10, '2023-02-26 18:35:46', '2023-02-26 18:35:46'),
(27, '2001', 0, 10, '2023-02-26 18:35:46', '2023-02-26 18:35:46'),
(28, 'Pilėnai', 0, 11, '2023-02-26 18:36:14', '2023-02-26 18:36:14'),
(29, 'Veliuona', 0, 11, '2023-02-26 18:36:14', '2023-02-26 18:36:14'),
(30, 'Medvėgalis', 1, 11, '2023-02-26 18:36:14', '2023-02-26 18:36:14'),
(31, 'Kaunas Aviation Factory', 0, 12, '2023-02-26 18:36:40', '2023-02-26 18:36:40'),
(32, 'Prienai sports aviation factory', 1, 12, '2023-02-26 18:36:40', '2023-02-26 18:36:40'),
(33, 'Zokniai aviation repair factory', 0, 12, '2023-02-26 18:36:40', '2023-02-26 18:36:40'),
(34, 'Šešupė-2', 1, 13, '2023-02-26 18:37:07', '2023-02-26 18:37:07'),
(35, 'Nemunas-15', 0, 13, '2023-02-26 18:37:07', '2023-02-26 18:37:07'),
(36, 'Dangė-1', 0, 13, '2023-02-26 18:37:07', '2023-02-26 18:37:07'),
(37, 'Aviator', 0, 14, '2023-02-26 18:37:29', '2023-02-26 18:37:29'),
(38, 'Wing brothers', 0, 14, '2023-02-26 18:37:29', '2023-02-26 18:37:29'),
(39, 'Flight across the Atlantic', 1, 14, '2023-02-26 18:37:29', '2023-02-26 18:37:29'),
(40, 'RK-7 Bee/Orange', 0, 15, '2023-02-26 18:37:55', '2023-02-26 18:37:55'),
(41, 'VK-8 Dawn', 1, 15, '2023-02-26 18:37:55', '2023-02-26 18:37:55'),
(42, 'Machaon', 0, 15, '2023-02-26 18:37:55', '2023-02-26 18:37:55'),
(43, 'Vladas Kensgaila', 1, 16, '2023-02-26 18:38:22', '2023-02-26 18:38:22'),
(44, 'Jurgis Kairys', 0, 16, '2023-02-26 18:38:22', '2023-02-26 18:38:22'),
(45, 'Vidas Navickas', 0, 16, '2023-02-26 18:38:22', '2023-02-26 18:38:22'),
(46, 'Less than 50 hours', 0, 17, '2023-02-26 18:38:46', '2023-02-26 18:38:46'),
(47, 'More than 200 hours', 0, 17, '2023-02-26 18:38:46', '2023-02-26 18:38:46'),
(48, 'More than 100 hours', 1, 17, '2023-02-26 18:38:46', '2023-02-26 18:38:46'),
(49, 'Additional wings', 0, 18, '2023-02-26 18:39:51', '2023-02-26 18:39:51'),
(50, 'Skis', 1, 18, '2023-02-26 18:39:51', '2023-02-26 18:39:51'),
(51, 'Parachute', 0, 18, '2023-02-26 18:39:51', '2023-02-26 18:39:51'),
(52, '50 km/h', 1, 19, '2023-02-26 18:40:21', '2023-02-26 18:40:21'),
(53, '100 km/h', 0, 19, '2023-02-26 18:40:21', '2023-02-26 18:40:21'),
(54, '70 km/h', 0, 19, '2023-02-26 18:40:21', '2023-02-26 18:40:21'),
(55, 'Zenonas Kižys', 0, 20, '2023-02-26 18:41:07', '2023-02-26 18:41:07'),
(56, 'Jonas Klemanskas', 0, 20, '2023-02-26 18:41:07', '2023-02-26 18:41:07'),
(57, 'Algis Kučinskas', 1, 20, '2023-02-26 18:41:07', '2023-02-26 18:41:07'),
(58, 'Aluminum', 0, 21, '2023-02-26 18:41:31', '2023-02-26 18:41:31'),
(59, 'Wood', 1, 21, '2023-02-26 18:41:31', '2023-02-26 18:41:31'),
(60, 'Plastic', 0, 21, '2023-02-26 18:41:31', '2023-02-26 18:41:31'),
(61, 'Machaon', 1, 22, '2023-02-26 18:42:01', '2023-02-26 18:42:01'),
(62, 'Fly', 0, 22, '2023-02-26 18:42:01', '2023-02-26 18:42:01'),
(63, 'Smakas', 0, 22, '2023-02-26 18:42:01', '2023-02-26 18:42:01'),
(64, '1990 m.', 0, 23, '2023-02-26 18:42:29', '2023-02-26 18:42:29'),
(65, '1988 m.', 0, 23, '2023-02-26 18:42:29', '2023-02-26 18:42:29'),
(66, '1989 m.', 1, 23, '2023-02-26 18:42:29', '2023-02-26 18:42:29'),
(67, 'Agnis', 0, 24, '2023-02-26 18:42:52', '2023-02-26 18:42:52'),
(68, 'Nymph', 1, 24, '2023-02-26 18:42:52', '2023-02-26 18:42:52'),
(69, 'Osiris', 0, 24, '2023-02-26 18:42:52', '2023-02-26 18:42:52'),
(70, 'Motor glider', 1, 25, '2023-02-26 18:43:56', '2023-02-26 18:43:56'),
(71, 'Passenger', 0, 25, '2023-02-26 18:43:56', '2023-02-26 18:43:56'),
(72, 'Helicopter', 0, 25, '2023-02-26 18:43:56', '2023-02-26 18:43:56'),
(73, 'Vakarė', 0, 26, '2023-02-26 18:44:16', '2023-02-26 18:44:16'),
(74, 'Karolina', 0, 26, '2023-02-26 18:44:16', '2023-02-26 18:44:16'),
(75, 'Elzytė', 1, 26, '2023-02-26 18:44:16', '2023-02-26 18:44:16'),
(76, 'As a passenger aircraft', 0, 27, '2023-02-26 18:44:39', '2023-02-26 18:44:39'),
(77, 'For forest conservation purposes', 1, 27, '2023-02-26 18:44:39', '2023-02-26 18:44:39'),
(78, 'Transport organs for transplantation', 0, 27, '2023-02-26 18:44:39', '2023-02-26 18:44:39'),
(79, 'Algis Rimkus with R-1', 1, 28, '2023-02-26 18:45:07', '2023-02-26 18:45:07'),
(80, 'Albertas Pikčius with AP-2', 0, 28, '2023-02-26 18:45:07', '2023-02-26 18:45:07'),
(81, 'Romualdas Bėkšta with RB-1', 0, 28, '2023-02-26 18:45:07', '2023-02-26 18:45:07');

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
-- Table structure for table `front_imgs`
--

CREATE TABLE `front_imgs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `front_imgs`
--

INSERT INTO `front_imgs` (`id`, `img`, `type`, `created_at`, `updated_at`) VALUES
(1, 'oayczauoPUEC51e-1675719608.png', 'quiz', '2023-02-06 19:40:08', '2023-02-06 19:40:08'),
(6, 'QiVYTi6WMA84NgD-1676575246.jpg', 'quiz', '2023-02-16 17:20:46', '2023-02-16 17:20:46'),
(7, 'TtsQH6hoASyDSfk-1676575246.jpg', 'quiz', '2023-02-16 17:20:46', '2023-02-16 17:20:46');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `type`, `value`, `created_at`, `updated_at`) VALUES
(1, 'email', 'test@test.com', NULL, '2023-02-05 19:00:02'),
(5, 'logo', '1677012643.png', NULL, '2023-02-21 18:50:43'),
(6, 'title', 'Quiz_laravel', NULL, '2023-02-19 12:22:11');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_02_05_173112_create_infos_table', 2),
(6, '2023_02_06_202054_create_front_imgs_table', 3),
(7, '2023_02_17_063253_create_questions_table', 4),
(8, '2023_02_17_064046_create_answers_table', 5),
(9, '2023_02_19_171540_create_quizzes_table', 6),
(10, '2023_02_26_182702_create_quiz_questions_table', 7);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `text`, `image`, `created_at`, `updated_at`) VALUES
(6, 'What dream did constructor Ričardas Adomaitis achieve in 1982?', NULL, '2023-02-26 18:08:11', '2023-02-26 18:08:11'),
(7, 'What did the high flying champion Romas Aleksiejus name his plane?', NULL, '2023-02-26 18:08:43', '2023-02-26 18:08:43'),
(8, 'Who built these duck-type aircraft: RB-15, RB-17 and RB-19?', NULL, '2023-02-26 18:09:08', '2023-02-26 18:09:08'),
(9, 'What is the name of the local plane made especially for the ULSA\'85 competition (constructor Gintautas Bielys)?', NULL, '2023-02-26 18:34:50', '2023-02-26 18:34:50'),
(10, 'In what year was the first retro airplane Farman-III created (designer Stanislovas Čepaitis)?', NULL, '2023-02-26 18:35:46', '2023-02-26 18:35:46'),
(11, 'What famous Lithuanian historical castle site is mentioned in Kintautas Juodėnas airplane?', NULL, '2023-02-26 18:36:14', '2023-02-26 18:36:14'),
(12, 'In which factory were the ultralight aircraft of Rolandas Kalinauskas manufactured?', NULL, '2023-02-26 18:36:40', '2023-02-26 18:36:40'),
(13, 'What was the name of Algimantas Kašuba\'s high-wing monoplane, which flew from Marijampolė to the flight of ultralight flying machines held in Panevėžys?', NULL, '2023-02-26 18:37:07', '2023-02-26 18:37:07'),
(14, 'A replica of the Lituanica aircraft was created for the film ...', NULL, '2023-02-26 18:37:29', '2023-02-26 18:37:29'),
(15, 'What is the name of the first agricultural plane built in Lithuania, which entered the Guinness Book of Records as lifting the largest weight according to its size, fertilization quality and other indicators?', NULL, '2023-02-26 18:37:55', '2023-02-26 18:37:55'),
(16, 'In 1999, the first Lithuanian passenger plane VK-9 was built. Who is its constructor?', NULL, '2023-02-26 18:38:22', '2023-02-26 18:38:22'),
(17, 'How many hours have been flown with Vitalijus Klimovskis ultralight aircraft \"VNK\"?', NULL, '2023-02-26 18:38:46', '2023-02-26 18:38:46'),
(18, 'What was attached to Gintautas Končius aircraft \"Duck\"?', NULL, '2023-02-26 18:39:51', '2023-02-26 18:39:51'),
(19, 'What speed did Juozas Kučiauskas KJ-2 \"Merman\" reach?', NULL, '2023-02-26 18:40:21', '2023-02-26 18:40:21'),
(20, 'Who built these aircraft: \"Jerk\", \"Weather vane\", \"Žilvinas\"?', NULL, '2023-02-26 18:41:07', '2023-02-26 18:41:07'),
(21, 'What material was the propeller of Vincas Lapėnas airplane LAV-1 made of?', NULL, '2023-02-26 18:41:31', '2023-02-26 18:41:31'),
(22, 'Which of these planes is the lightest (designer Algirdas Lukoševičius)?', NULL, '2023-02-26 18:42:01', '2023-02-26 18:42:01'),
(23, 'In what year was Algirdas Lukoševičius among self-made authors awarded the first prize of the exhibition for the airplane \"Rebirth\" at the exhibition of technical creations of young scientists held in Vilnius?', NULL, '2023-02-26 18:42:29', '2023-02-26 18:42:29'),
(24, 'Vidas Navickas named one of his aircraft after the nature spirit of Greek and Roman mythology. What kind?', NULL, '2023-02-26 18:42:52', '2023-02-26 18:42:52'),
(25, 'What type is Vidas Navickas plane NV-6 \"Griffon\"?', NULL, '2023-02-26 18:43:56', '2023-02-26 18:43:56'),
(26, 'What name was it renamed to the aircraft \"Hawk\" designed by Albertas Pikčius?', NULL, '2023-02-26 18:44:16', '2023-02-26 18:44:16'),
(27, 'What was the VR-555 \"Silver Titan\" helicopter (constructor Vytautas Radavičius) supposed to be used for?', NULL, '2023-02-26 18:44:39', '2023-02-26 18:44:39'),
(28, 'Who was the first with a Lithuanian registration number to land at the Zokniai airfield after the withdrawal of the USSR army from Lithuania?', NULL, '2023-02-26 18:45:07', '2023-02-26 18:45:07');

-- --------------------------------------------------------

--
-- Table structure for table `quizzes`
--

CREATE TABLE `quizzes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `result` int(11) DEFAULT NULL,
  `questions_list` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quizzes`
--

INSERT INTO `quizzes` (`id`, `result`, `questions_list`, `created_at`, `updated_at`) VALUES
(4, NULL, '[6,10,11,13,14,17,19,20,26,27]', '2023-02-26 18:56:28', '2023-02-26 18:56:28'),
(5, 5, '[7,8,15,18,21,22,23,24,25,28]', '2023-02-28 16:43:37', '2023-02-28 18:44:10'),
(6, NULL, '[9,10,11,12,13,14,16,20,26,27]', '2023-02-28 18:48:43', '2023-02-28 18:48:43'),
(7, 7, '[6,7,8,15,17,18,19,22,23,25]', '2023-02-28 18:50:42', '2023-02-28 18:55:27');

-- --------------------------------------------------------

--
-- Table structure for table `quiz_questions`
--

CREATE TABLE `quiz_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `quiz_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `value` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `quiz_questions`
--

INSERT INTO `quiz_questions` (`id`, `quiz_id`, `question_id`, `value`, `created_at`, `updated_at`) VALUES
(31, 4, 6, NULL, '2023-02-26 18:56:28', '2023-02-26 18:56:28'),
(32, 4, 10, NULL, '2023-02-26 18:56:28', '2023-02-26 18:56:28'),
(33, 4, 11, NULL, '2023-02-26 18:56:28', '2023-02-26 18:56:28'),
(34, 4, 13, NULL, '2023-02-26 18:56:28', '2023-02-26 18:56:28'),
(35, 4, 14, NULL, '2023-02-26 18:56:28', '2023-02-26 18:56:28'),
(36, 4, 17, NULL, '2023-02-26 18:56:28', '2023-02-26 18:56:28'),
(37, 4, 19, NULL, '2023-02-26 18:56:28', '2023-02-26 18:56:28'),
(38, 4, 20, NULL, '2023-02-26 18:56:28', '2023-02-26 18:56:28'),
(39, 4, 26, NULL, '2023-02-26 18:56:28', '2023-02-26 18:56:28'),
(40, 4, 27, NULL, '2023-02-26 18:56:28', '2023-02-26 18:56:28'),
(41, 5, 7, 1, '2023-02-28 16:43:37', '2023-02-28 17:42:18'),
(42, 5, 8, 0, '2023-02-28 16:43:37', '2023-02-28 17:42:10'),
(43, 5, 15, 0, '2023-02-28 16:43:37', '2023-02-28 17:42:02'),
(44, 5, 18, 0, '2023-02-28 16:43:37', '2023-02-28 17:41:54'),
(45, 5, 21, 0, '2023-02-28 16:43:37', '2023-02-28 17:41:46'),
(46, 5, 22, 1, '2023-02-28 16:43:37', '2023-02-28 17:41:36'),
(47, 5, 23, 0, '2023-02-28 16:43:37', '2023-02-28 17:41:23'),
(48, 5, 24, 0, '2023-02-28 16:43:37', '2023-02-28 17:41:15'),
(49, 5, 25, 0, '2023-02-28 16:43:37', '2023-02-28 17:30:56'),
(50, 5, 28, 1, '2023-02-28 16:43:37', '2023-02-28 17:29:39'),
(51, 6, 9, NULL, '2023-02-28 18:48:43', '2023-02-28 18:48:43'),
(52, 6, 10, NULL, '2023-02-28 18:48:43', '2023-02-28 18:48:43'),
(53, 6, 11, NULL, '2023-02-28 18:48:43', '2023-02-28 18:48:43'),
(54, 6, 12, NULL, '2023-02-28 18:48:43', '2023-02-28 18:48:43'),
(55, 6, 13, NULL, '2023-02-28 18:48:43', '2023-02-28 18:48:43'),
(56, 6, 14, NULL, '2023-02-28 18:48:43', '2023-02-28 18:48:43'),
(57, 6, 16, NULL, '2023-02-28 18:48:43', '2023-02-28 18:48:43'),
(58, 6, 20, NULL, '2023-02-28 18:48:43', '2023-02-28 18:48:43'),
(59, 6, 26, NULL, '2023-02-28 18:48:43', '2023-02-28 18:48:43'),
(60, 6, 27, NULL, '2023-02-28 18:48:43', '2023-02-28 18:48:43'),
(61, 7, 6, 1, '2023-02-28 18:50:42', '2023-02-28 18:55:27'),
(62, 7, 7, 1, '2023-02-28 18:50:42', '2023-02-28 18:55:15'),
(63, 7, 8, 1, '2023-02-28 18:50:42', '2023-02-28 18:55:10'),
(64, 7, 15, 1, '2023-02-28 18:50:42', '2023-02-28 18:55:00'),
(65, 7, 17, 0, '2023-02-28 18:50:42', '2023-02-28 18:54:49'),
(66, 7, 18, 1, '2023-02-28 18:50:42', '2023-02-28 18:54:36'),
(67, 7, 19, 0, '2023-02-28 18:50:42', '2023-02-28 18:54:26'),
(68, 7, 22, 0, '2023-02-28 18:50:42', '2023-02-28 18:54:17'),
(69, 7, 23, 1, '2023-02-28 18:50:42', '2023-02-28 18:54:08'),
(70, 7, 25, 1, '2023-02-28 18:50:42', '2023-02-28 18:54:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
(1, 'test', 'test@test.com', NULL, '$2y$10$hXK/gPxC6hUdVB0XQogEROuu4W6I5AMu2ISZhB45eqWy9mYMtGm6u', NULL, '2023-02-05 12:51:28', '2023-02-05 12:51:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answers`
--
ALTER TABLE `answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answers_question_id_foreign` (`question_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `front_imgs`
--
ALTER TABLE `front_imgs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quizzes`
--
ALTER TABLE `quizzes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `quiz_questions_quiz_id_foreign` (`quiz_id`),
  ADD KEY `quiz_questions_question_id_foreign` (`question_id`);

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
-- AUTO_INCREMENT for table `answers`
--
ALTER TABLE `answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `front_imgs`
--
ALTER TABLE `front_imgs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `quizzes`
--
ALTER TABLE `quizzes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answers`
--
ALTER TABLE `answers`
  ADD CONSTRAINT `answers_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `quiz_questions`
--
ALTER TABLE `quiz_questions`
  ADD CONSTRAINT `quiz_questions_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`),
  ADD CONSTRAINT `quiz_questions_quiz_id_foreign` FOREIGN KEY (`quiz_id`) REFERENCES `quizzes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
