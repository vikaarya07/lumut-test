-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping structure for table lumut-test.accounts
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `accounts_email_unique` (`email`),
  UNIQUE KEY `accounts_username_unique` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lumut-test.accounts: ~5 rows (approximately)
INSERT INTO `accounts` (`id`, `name`, `email`, `username`, `password`, `created_at`, `updated_at`) VALUES
	(1, 'Sabrina Anggraini M.M.', 'vrahayu@example.com', 'yolanda.lantar', '$2y$12$/g6nZG93Y1p6uUpEXW/9P.cuvV1tLw2UzOEVwgqSFHGB5PZs0/4XC', '2025-03-11 01:55:47', '2025-03-11 01:55:47'),
	(2, 'Wirda Patricia Hariyah', 'wsudiati@example.net', 'mustofa.purwanto', '$2y$12$OFujfSKiCLCnSoHd/9J1C.v0..HszEAloyO972AnKIMnruP2PCZxm', '2025-03-11 01:55:47', '2025-03-11 01:55:47'),
	(3, 'Rahmi Rahimah S.IP', 'unggul.hutagalung@example.com', 'budiman.ida', '$2y$12$EH4ktAYfQT5RkLq7eYUv9e1c7YKSrjhL9.6HfjFONEOMK4P4edlRO', '2025-03-11 01:55:47', '2025-03-11 01:55:47'),
	(4, 'Estiono Zulkarnain S.Pd', 'carla60@example.net', 'cnamaga', '$2y$12$W3cYRJajOR.umFfF4q.NLurh6X85y12VceWxABki2LYOxJaPevsoa', '2025-03-11 01:55:47', '2025-03-11 01:55:47'),
	(5, 'Wahyu Tamba', 'psihotang@example.org', 'aris05', '$2y$12$VP7oVYmul23aiiAtGGwQiuoiOmTM1IBLcPlLL6jDuTZPq3vHX7wmi', '2025-03-11 01:55:47', '2025-03-11 01:55:47');

-- Dumping structure for table lumut-test.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lumut-test.cache: ~0 rows (approximately)

-- Dumping structure for table lumut-test.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lumut-test.cache_locks: ~0 rows (approximately)

-- Dumping structure for table lumut-test.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lumut-test.failed_jobs: ~0 rows (approximately)

-- Dumping structure for table lumut-test.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lumut-test.jobs: ~0 rows (approximately)

-- Dumping structure for table lumut-test.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lumut-test.job_batches: ~0 rows (approximately)

-- Dumping structure for table lumut-test.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lumut-test.migrations: ~1 rows (approximately)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2025_03_11_025001_create_posts_table', 1),
	(5, '2025_03_11_025013_create_accounts_table', 1);

-- Dumping structure for table lumut-test.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lumut-test.password_reset_tokens: ~0 rows (approximately)

-- Dumping structure for table lumut-test.posts
CREATE TABLE IF NOT EXISTS `posts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `user_id` bigint unsigned NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `posts_slug_unique` (`slug`),
  KEY `posts_user_id_foreign` (`user_id`),
  CONSTRAINT `posts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lumut-test.posts: ~15 rows (approximately)
INSERT INTO `posts` (`id`, `user_id`, `title`, `slug`, `content`, `created_at`, `updated_at`) VALUES
	(1, 2, 'Aut ex totam consequatur blanditiis ex sed a saepe.', 'quos-asperiores-possimus-molestiae-et-vero-accusamus-facere', 'Qui eos voluptatem at ducimus. Ea autem sint repudiandae repudiandae autem. Quod illum aut accusamus dolorem unde consequatur. Quasi dolorem quo ipsa a distinctio.', '2025-03-11 01:55:45', '2025-03-11 01:55:45'),
	(2, 2, 'Quo corrupti ut architecto et eum maiores maxime.', 'ea-ullam-voluptas-totam-nulla-eos-ab-repellendus', 'Temporibus ipsa blanditiis earum. Temporibus dolorum est qui et enim consequatur. Id optio quas est hic impedit saepe ut eaque.', '2025-03-11 01:55:45', '2025-03-11 01:55:45'),
	(3, 1, 'Admin-2', 'admin-2', 'Quas quae modi dolores sed. Reiciendis ex qui dolorum ducimus sit. Omnis eius sint earum dolores omnis. Id ut qui recusandae recusandae consectetur rem.', '2025-03-11 01:55:45', '2025-03-11 02:16:05'),
	(4, 1, 'Admin-3', 'admin-3', 'Sint et non necessitatibus eos fugiat deserunt. Quisquam dolor maxime ipsam dolor dolorum. Reprehenderit illo et ex distinctio minus ut sint beatae. Eligendi sed impedit qui magnam.', '2025-03-11 01:55:45', '2025-03-11 02:17:01'),
	(5, 2, 'Qui et numquam occaecati hic quia eaque saepe sit.', 'placeat-sint-debitis-ad-aliquam-natus', 'Esse eum pariatur ratione eum fugiat eos non. Quos est corporis consequatur dignissimos occaecati. Ducimus a nihil facilis. Dolores sapiente accusamus sunt qui.', '2025-03-11 01:55:45', '2025-03-11 01:55:45'),
	(6, 2, 'Sed mollitia reprehenderit cum provident.', 'nulla-cupiditate-illum-dolor-iusto', 'Occaecati iure eveniet perferendis cupiditate molestiae delectus. Error cumque saepe deleniti. Qui sed in eos minus deleniti. Voluptatem aut alias eum hic.', '2025-03-11 01:55:45', '2025-03-11 01:55:45'),
	(7, 2, 'Rerum voluptatem incidunt corporis itaque possimus aut.', 'voluptatem-et-aut-sequi-mollitia', 'Est aut quia quas eveniet. Et sapiente maiores culpa dicta. Ea reiciendis provident sit neque nobis non sit. Facilis minima ullam dolore sapiente eveniet. Nulla qui eos veniam quidem temporibus possimus.', '2025-03-11 01:55:45', '2025-03-11 01:55:45'),
	(8, 2, 'Dolorem suscipit nesciunt est voluptatem sit est.', 'nihil-id-in-aperiam-sequi-iusto-maiores', 'Libero blanditiis et et asperiores dignissimos enim. Sequi dolor maxime ab sed. Voluptatem eum veritatis consequatur provident sunt neque. Et quo non corrupti quis excepturi sint quae.', '2025-03-11 01:55:45', '2025-03-11 01:55:45'),
	(9, 1, 'Admin-4', 'admin-4', 'Hic dolores facere quis quidem illum sunt expedita. Et neque nemo possimus architecto sed rerum quam. Dolorem totam consequatur est harum. Molestias quos nostrum voluptas et doloribus eos ducimus minima.', '2025-03-11 01:55:45', '2025-03-11 02:17:41'),
	(11, 1, 'Admin-5', 'admin-5', 'Et vero enim et et nisi. Veniam maxime nostrum debitis hic necessitatibus atque. Sequi fuga omnis aut ut. Et omnis ducimus libero.', '2025-03-11 01:55:45', '2025-03-11 02:26:37'),
	(12, 2, 'Qui dolorem ex voluptates vitae labore.', 'in-totam-dolor-neque-et-rerum', 'Exercitationem fugiat sit unde eos accusantium eum ab. Molestiae natus quia aliquid quaerat eum molestiae eligendi numquam. Non molestias asperiores veniam autem.', '2025-03-11 01:55:45', '2025-03-11 01:55:45'),
	(14, 2, 'Ab delectus quia eum itaque qui possimus laudantium.', 'porro-et-quo-dignissimos-illum-accusamus', 'Cumque inventore ut labore quis doloremque. Illo quisquam voluptates cumque eum. Sunt provident porro quasi dicta dolor ratione.', '2025-03-11 01:55:45', '2025-03-11 01:55:45'),
	(15, 2, 'Voluptas libero sit sapiente beatae consequatur cum.', 'recusandae-labore-occaecati-qui-rerum-assumenda-dolor-est', 'Necessitatibus sed error ea temporibus minus voluptatem maiores consequatur. Cum qui culpa ipsum dolor consequatur. Consequatur delectus minima quibusdam illo. Corporis iusto eligendi neque non.', '2025-03-11 01:55:46', '2025-03-11 01:55:46'),
	(16, 1, 'Admin', 'admin', 'Quas quae modi dolores sed. Reiciendis ex qui dolorum ducimus sit. Omnis eius sint earum dolores omnis. Id ut qui recusandae recusandae consectetur rem.', '2025-03-11 02:12:49', '2025-03-11 02:12:49');

-- Dumping structure for table lumut-test.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lumut-test.sessions: ~1 rows (approximately)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('WkiGJG84GT88k6IxnexokXJVx2cOrJnVtWZasLVO', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/133.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiYVJoNlNzSWh1NnpZaUJ5OUZzZWowUEs2NWptcWlpMTVXMlNaYkNKeiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM0OiJodHRwOi8vbHVtdXQtdGVzdC50ZXN0L2FkbWluL3Bvc3RzIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjU6ImxvZ2luIjthOjA6e319', 1741685380);

-- Dumping structure for table lumut-test.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table lumut-test.users: ~2 rows (approximately)
INSERT INTO `users` (`id`, `name`, `username`, `email`, `email_verified_at`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Admin', 'admin', 'admin@gmail.com', NULL, '$2y$12$Kv0tAxvvxGHsainGR8t4Ju42Hyc9g4gzlcfIVwZwTcDN1B2LK2IXS', 1, NULL, '2025-03-11 01:55:45', '2025-03-11 01:55:45'),
	(2, 'Author', 'author', 'author@gmail.com', NULL, '$2y$12$PcuU5DuFd7dkTv333klPJujXbxBkL267pR6LAPD/lwGDm.3ED0DLm', 0, NULL, '2025-03-11 01:55:45', '2025-03-11 01:55:45');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
