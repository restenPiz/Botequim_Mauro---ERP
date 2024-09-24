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


-- Dumping database structure for erp-botequim-mauro
DROP DATABASE IF EXISTS `erp-botequim-mauro`;
CREATE DATABASE IF NOT EXISTS `erp-botequim-mauro` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `erp-botequim-mauro`;

-- Dumping structure for table erp-botequim-mauro.categories
DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Category_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.clients
DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Name_client` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Age` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Household` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `client_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.debits
DROP TABLE IF EXISTS `debits`;
CREATE TABLE IF NOT EXISTS `debits` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date_to_pay` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Id_client` bigint unsigned NOT NULL,
  `Id_stock` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `debits_id_client_foreign` (`Id_client`),
  KEY `debits_id_stock_foreign` (`Id_stock`),
  CONSTRAINT `debits_id_client_foreign` FOREIGN KEY (`Id_client`) REFERENCES `clients` (`id`),
  CONSTRAINT `debits_id_stock_foreign` FOREIGN KEY (`Id_stock`) REFERENCES `stocks` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.events
DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Event_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Event_date` date NOT NULL,
  `Event_time` time NOT NULL,
  `Number_of_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.password_reset_tokens
DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.payments
DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Name_payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.permissions
DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `permissions_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.permission_role
DROP TABLE IF EXISTS `permission_role`;
CREATE TABLE IF NOT EXISTS `permission_role` (
  `permission_id` bigint unsigned NOT NULL,
  `role_id` bigint unsigned NOT NULL,
  PRIMARY KEY (`permission_id`,`role_id`),
  KEY `permission_role_role_id_foreign` (`role_id`),
  CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.permission_user
DROP TABLE IF EXISTS `permission_user`;
CREATE TABLE IF NOT EXISTS `permission_user` (
  `permission_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`permission_id`,`user_type`),
  KEY `permission_user_permission_id_foreign` (`permission_id`),
  CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.products
DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Sale_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Expiry_date` date NOT NULL,
  `Entry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Id_category` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `products_id_category_foreign` (`Id_category`),
  CONSTRAINT `products_id_category_foreign` FOREIGN KEY (`Id_category`) REFERENCES `categories` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.product_requests
DROP TABLE IF EXISTS `product_requests`;
CREATE TABLE IF NOT EXISTS `product_requests` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Id_stock` bigint unsigned NOT NULL,
  `Id_request` bigint unsigned DEFAULT NULL,
  `Id_client` bigint unsigned NOT NULL,
  `Quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_requests_id_stock_foreign` (`Id_stock`),
  KEY `product_requests_id_request_foreign` (`Id_request`),
  KEY `product_requests_id_client_foreign` (`Id_client`),
  CONSTRAINT `product_requests_id_client_foreign` FOREIGN KEY (`Id_client`) REFERENCES `clients` (`id`),
  CONSTRAINT `product_requests_id_request_foreign` FOREIGN KEY (`Id_request`) REFERENCES `requests` (`id`),
  CONSTRAINT `product_requests_id_stock_foreign` FOREIGN KEY (`Id_stock`) REFERENCES `stocks` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.requests
DROP TABLE IF EXISTS `requests`;
CREATE TABLE IF NOT EXISTS `requests` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Id_client` bigint unsigned NOT NULL,
  `Id_stock` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `requests_id_client_foreign` (`Id_client`),
  KEY `requests_id_stock_foreign` (`Id_stock`),
  CONSTRAINT `requests_id_client_foreign` FOREIGN KEY (`Id_client`) REFERENCES `clients` (`id`),
  CONSTRAINT `requests_id_stock_foreign` FOREIGN KEY (`Id_stock`) REFERENCES `stocks` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.roles
DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_name_unique` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.role_user
DROP TABLE IF EXISTS `role_user`;
CREATE TABLE IF NOT EXISTS `role_user` (
  `role_id` bigint unsigned NOT NULL,
  `user_id` bigint unsigned NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`,`user_type`),
  KEY `role_user_role_id_foreign` (`role_id`),
  CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.sales
DROP TABLE IF EXISTS `sales`;
CREATE TABLE IF NOT EXISTS `sales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Id_stock` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sales_id_stock_foreign` (`Id_stock`),
  CONSTRAINT `sales_id_stock_foreign` FOREIGN KEY (`Id_stock`) REFERENCES `stocks` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.sale__histories
DROP TABLE IF EXISTS `sale__histories`;
CREATE TABLE IF NOT EXISTS `sale__histories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Product_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Total_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Id_stock` bigint unsigned NOT NULL,
  `Id_payment` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sale__histories_id_payment_foreign` (`Id_payment`),
  KEY `sale__histories_id_stock_foreign` (`Id_stock`),
  CONSTRAINT `sale__histories_id_payment_foreign` FOREIGN KEY (`Id_payment`) REFERENCES `payments` (`id`),
  CONSTRAINT `sale__histories_id_stock_foreign` FOREIGN KEY (`Id_stock`) REFERENCES `stocks` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.stocks
DROP TABLE IF EXISTS `stocks`;
CREATE TABLE IF NOT EXISTS `stocks` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Expiry_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Entry_date` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Id_product` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stocks_id_product_foreign` (`Id_product`),
  CONSTRAINT `stocks_id_product_foreign` FOREIGN KEY (`Id_product`) REFERENCES `products` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.stock_outs
DROP TABLE IF EXISTS `stock_outs`;
CREATE TABLE IF NOT EXISTS `stock_outs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `Quantity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Id_stock` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `stock_outs_id_stock_foreign` (`Id_stock`),
  CONSTRAINT `stock_outs_id_stock_foreign` FOREIGN KEY (`Id_stock`) REFERENCES `stocks` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

-- Dumping structure for table erp-botequim-mauro.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Surname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Data exporting was unselected.

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
