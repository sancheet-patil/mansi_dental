-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 07:03 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mansi_dental`
--

-- --------------------------------------------------------

--
-- Table structure for table `patient_work`
--

CREATE TABLE `patient_work` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `work_code` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `age` int(11) NOT NULL,
  `abutments` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pontic_design` bigint(20) UNSIGNED DEFAULT NULL,
  `patient_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tooth_Number` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `work_id` bigint(20) UNSIGNED NOT NULL,
  `shade` bigint(20) UNSIGNED NOT NULL,
  `warranty_expiry_date` date DEFAULT NULL,
  `flag` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_work`
--

INSERT INTO `patient_work` (`id`, `work_code`, `doctor_id`, `age`, `abutments`, `pontic_design`, `patient_name`, `tooth_Number`, `work_id`, `shade`, `warranty_expiry_date`, `flag`, `created_at`, `updated_at`) VALUES
(1, '9654684524', 1, 23, 'NONE', NULL, 'Sancheet Patil', '44', 9, 4, NULL, 0, '2021-02-12 08:18:46', '2021-02-12 08:18:46'),
(2, '5182550219', 1, 23, 'NONE', NULL, 'Sancheet Patil', '44', 9, 4, NULL, 0, '2021-02-12 08:19:17', '2021-02-12 08:19:17'),
(3, '4898835567', 1, 23, 'NONE', NULL, 'Sancheet Patil', '31', 9, 5, NULL, 0, '2021-02-12 09:04:09', '2021-02-12 09:04:09'),
(4, '1272042979', 1, 23, 'NONE', NULL, 'Sancheet Patil', '31', 9, 5, NULL, 0, '2021-02-12 09:05:34', '2021-02-12 09:05:34'),
(5, '6785008679', 1, 23, 'Joint', NULL, 'Sancheet Patil', '23', 9, 4, NULL, 0, '2021-02-13 00:14:19', '2021-02-13 00:14:19'),
(6, '8884302454', 1, 23, 'NONE', NULL, 'Kittu', '32', 3, 4, NULL, 0, '2021-02-13 00:23:40', '2021-02-13 00:23:40'),
(7, '8447873686', 2, 24, 'NONE', NULL, 'Kittu', '13,21', 3, 4, NULL, 0, '2021-02-13 01:20:14', '2021-02-13 01:20:14'),
(8, '9099385303', 1, 23, 'Joint', NULL, 'Sancheet Patil', '12,23,32', 8, 4, NULL, 0, '2021-02-18 09:31:43', '2021-02-18 09:31:43'),
(9, '6237721305', 1, 23, 'Joint', NULL, 'Sancheet Patil', '12,23,32', 8, 4, NULL, 0, '2021-02-18 09:43:03', '2021-02-18 09:43:03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patient_work`
--
ALTER TABLE `patient_work`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `patient_work_work_code_unique` (`work_code`) USING HASH,
  ADD KEY `patient_work_doctor_id_foreign` (`doctor_id`),
  ADD KEY `patient_work_work_id_foreign` (`work_id`),
  ADD KEY `patient_work_shade_foreign` (`shade`),
  ADD KEY `patient_work_pontic_design_foreign` (`pontic_design`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patient_work`
--
ALTER TABLE `patient_work`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `patient_work`
--
ALTER TABLE `patient_work`
  ADD CONSTRAINT `patient_work_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patient_work_pontic_design_foreign` FOREIGN KEY (`pontic_design`) REFERENCES `pontic_design` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patient_work_shade_foreign` FOREIGN KEY (`shade`) REFERENCES `tooth_shade` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `patient_work_work_id_foreign` FOREIGN KEY (`work_id`) REFERENCES `work_item` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
