-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.7.43 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.3.0.6295
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Volcando estructura para tabla bub_pdf.empleados
DROP TABLE IF EXISTS `empleados`;
CREATE TABLE IF NOT EXISTS `empleados` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nombres` varchar(255) DEFAULT NULL,
  `apellidos` varchar(255) DEFAULT NULL,
  `sexo` tinytext,
  `edad` tinyint(4) DEFAULT '1',
  `correo` varchar(255) DEFAULT NULL,
  `rfc` varchar(255) DEFAULT NULL,
  `domicilio` varchar(255) DEFAULT NULL,
  `foto_img` text,
  `deleted` tinyint(4) DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bub_pdf.empleados: ~20 rows (aproximadamente)
DELETE FROM `empleados`;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` (`id`, `nombres`, `apellidos`, `sexo`, `edad`, `correo`, `rfc`, `domicilio`, `foto_img`, `deleted`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 'Oliver', 'Padilla', 'Hombre', 27, 'oliver.padilla@example.com', 'OLPA0123456ERA', 'Francia, El santuario Ext. #010  Int. 02', NULL, 0, NULL, NULL, NULL),
	(2, 'Cesar', 'Ramos', 'Hombre', 32, 'cersar.ramos@example.com', 'CERA0123456AROS', 'Francia, El santuario Ext. #234  Int. 02', NULL, 0, NULL, NULL, NULL),
	(3, 'Maria Guadalupe', 'Gutierrez de la Parra', 'Mujer', 24, 'maria.parra@example.com', 'MAGUAPA0123456IARA', 'Core del Sur, El mangal Ext. #902  Int. 02', NULL, 0, NULL, NULL, NULL),
	(4, 'Felipe de Jésus ', 'Yosafat Hernandez', 'Hombre', 34, 'felipe.hernandez@example.com', 'FEJEYOHE0123456PEEZ', 'Vietnam, La villa Ext. #233  Int. 02', NULL, 0, NULL, NULL, NULL),
	(5, 'Ricardo', 'González', 'Hombre', 33, 'ricardo.gonzalez@example.com', 'RIGO0123456DOEZ', 'Vietnam, La villa Ext. #233  Int. 02', NULL, 0, NULL, NULL, NULL),
	(6, 'Maria', 'Rocio Villar', 'Mujer', 21, 'maria.rocio.villar@example.com', 'MAROVI0123456IAAR', 'Corea del Sur, La villa Ext. #233  Int. 02', NULL, 0, NULL, NULL, NULL),
	(7, 'Esperanza', 'Acevedo', 'Mujer', 45, 'esperanza.acevedo@example.com', 'ESAC0123456ZADO', 'Francisco Villa, El gran cañon Ext. #233  Int. 02', NULL, 0, NULL, NULL, NULL),
	(8, 'Kevin', 'Catala', 'Hombre', 32, 'kevin.catala@example.com', 'KECA0123456INLA', 'Francisco Villa, El gran cañon Ext. #2723  Int. 02', NULL, 0, NULL, NULL, NULL),
	(9, 'Enrique', 'Galiano', 'Hombre', 18, 'enrique.galiano@example.com', 'ENGA0123456UENO', 'Miramar, San Sebastian Ext. #2723  Int. 02', NULL, 0, NULL, NULL, NULL),
	(10, 'Rogelio', 'Villalba', 'Hombre', 67, 'rogelio.villalba@example.com', 'ROVI0123456IOBA', 'Miramar, San Sebastian Ext. #653  Int. 02', NULL, 0, NULL, NULL, NULL),
	(11, 'Roberto Carlos', 'Viña', 'Hombre', 37, 'roberto.vina@example.com', 'ROCA0123456NA', 'Francia, El santuario Ext. #010  Int. 02', NULL, 0, NULL, NULL, NULL),
	(12, 'Ramon', 'Cubero', 'Hombre', 32, 'ramon.cubero@example.com', 'RACU0123456ONRO', 'Francia, El santuario Ext. #234  Int. 02', NULL, 0, NULL, NULL, NULL),
	(13, 'Samuel', 'Quero', 'Hombre', 24, 'samuel.quero@example.com', 'SAQU123456ELRO', 'Core del Sur, El mangal Ext. #902  Int. 02', NULL, 0, NULL, NULL, NULL),
	(14, 'Isidro', 'Cortes', 'Hombre', 34, 'isidro.cortes@example.com', 'ISCO0123456ROES', 'Vietnam, La villa Ext. #233  Int. 02', NULL, 0, NULL, NULL, NULL),
	(15, 'Demetrio', 'Cordero', 'Hombre', 33, 'demetrio.cordero@example.com', 'DECO0123456IORO', 'Vietnam, La villa Ext. #233  Int. 02', NULL, 0, NULL, NULL, NULL),
	(16, 'Abdulia', 'San Miguel', 'Mujer', 21, 'abdulia.san.miguel@example.com', 'ADSAMI0123456IAEL', 'Corea del Sur, La villa Ext. #233  Int. 02', NULL, 0, NULL, NULL, NULL),
	(17, 'Elena', 'Ferreiro', 'Mujer', 45, 'elena.ferreiro@example.com', 'ELFE0123456NARO', 'Francisco Villa, El gran cañon Ext. #233  Int. 02', NULL, 0, NULL, NULL, NULL),
	(18, 'Pedro', 'Luis Miguel', 'Hombre', 32, 'pedro.luis.miguel@example.com', 'PELUMI0123456ROISEL', 'Francisco Villa, El gran cañon Ext. #2723  Int. 02', NULL, 0, NULL, NULL, NULL),
	(19, 'Isidro', 'Matos', 'Hombre', 18, 'isidro.matos@example.com', 'ISMA0123456ROOS', 'Miramar, San Sebastian Ext. #2723  Int. 02', NULL, 0, NULL, NULL, NULL),
	(20, 'Simon', 'Leon', 'Hombre', 67, 'simon.leon@example.com', 'SILE0123456ONON', 'Miramar, San Sebastian Ext. #653  Int. 02', NULL, 0, NULL, NULL, NULL);
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;

-- Volcando estructura para tabla bub_pdf.failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bub_pdf.failed_jobs: ~0 rows (aproximadamente)
DELETE FROM `failed_jobs`;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Volcando estructura para tabla bub_pdf.informacion_de_empleado
DROP TABLE IF EXISTS `informacion_de_empleado`;
CREATE TABLE IF NOT EXISTS `informacion_de_empleado` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `empleado_id` bigint(20) unsigned DEFAULT NULL,
  `no_control` tinytext,
  `tipo` tinytext,
  `razon_social` tinytext,
  `dias_de_trabajo` tinytext,
  `horario` tinytext,
  `firma_img` text,
  `puesto` tinytext,
  `puesto_descripcion` varchar(255) DEFAULT NULL,
  `rol` tinytext,
  `rango` tinytext,
  `duracion` tinytext,
  `salario` decimal(22,2) DEFAULT '0.00',
  `salario_texto` tinytext,
  `contrato_src` text,
  `deleted` tinyint(4) DEFAULT '0',
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `informacion_de_empleado_empleado_id_foreign` (`empleado_id`),
  CONSTRAINT `informacion_de_empleado_empleado_id_foreign` FOREIGN KEY (`empleado_id`) REFERENCES `empleados` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bub_pdf.informacion_de_empleado: ~20 rows (aproximadamente)
DELETE FROM `informacion_de_empleado`;
/*!40000 ALTER TABLE `informacion_de_empleado` DISABLE KEYS */;
INSERT INTO `informacion_de_empleado` (`id`, `empleado_id`, `no_control`, `tipo`, `razon_social`, `dias_de_trabajo`, `horario`, `firma_img`, `puesto`, `puesto_descripcion`, `rol`, `rango`, `duracion`, `salario`, `salario_texto`, `contrato_src`, `deleted`, `deleted_at`, `created_at`, `updated_at`) VALUES
	(1, 1, '100001001', 'Interno', 'Fisica', 'Lunes a Sabado', '12:00 PM - 8:00 PM', NULL, 'Mantenimiento', 'Sin descripción', 'Supervisor', 'Supervisor', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(2, 2, '100001002', 'Interno', 'Fisica', 'Lunes a Sabado', '12:00 PM - 8:00 PM', NULL, 'Mantenimiento', 'Sin descripción', 'Matt. A', 'Matt. A', '1 año', 7200.00, 'Siete mil doscientos', NULL, 0, NULL, NULL, NULL),
	(3, 3, '100001003', 'Interno', 'Fisica', 'Lunes a Sabado', '06:00 AM - 2:00 PM', NULL, 'Mantenimiento', 'Sin descripción', 'Supervisor', 'Supervisor', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(4, 4, '100001004', 'Interno', 'Fisica', 'Lunes a Sabado', '03:00 PM - 11:00 PM', NULL, 'Cocinero A', 'Sin descripción', 'Cocinero A', 'Cocinero A', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(5, 5, '100001005', 'Interno', 'Fisica', 'Lunes a Sabado', '06:00 AM - 2:00 PM', NULL, 'Areas publicas', 'Sin descripción', 'Mozo', 'Mozo', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(6, 6, '100001006', 'Interno', 'Fisica', 'Lunes a Sabado', '12:00 PM - 8:00 PM', NULL, 'Agente de seguridad B', 'Sin descripción', 'Seguridad', 'Seguridad', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(7, 7, '100001007', 'Interno', 'Fisica', 'Lunes a Sabado', '03:00 PM - 11:00 PM', NULL, 'Mantenimiento', 'Sin descripción', 'Supervisor', 'Supervisor', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(8, 8, '100001008', 'Interno', 'Fisica', 'Lunes a Sabado', '06:00 AM - 2:00 PM', NULL, 'DJ', 'Sin descripción', 'DJ', 'DJ', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(9, 9, '100001009', 'Interno', 'Fisica', 'Lunes a Sabado', '12:00 PM - 8:00 PM', NULL, 'Mantenimiento', 'Sin descripción', 'Supervisor', 'Supervisor', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(10, 10, '100001010', 'Interno', 'Fisica', 'Lunes a Sabado', '12:00 PM - 8:00 PM', NULL, 'Areas publicas', 'Sin descripción', 'Mozo', 'Mozo', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(11, 11, '100001011', 'Interno', 'Fisica', 'Lunes a Sabado', '12:00 PM - 8:00 PM', NULL, 'Mesero A', 'Sin descripción', 'Mesero', 'Mesero', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(12, 12, '100001012', 'Interno', 'Fisica', 'Lunes a Sabado', '06:00 AM - 2:00 PM', NULL, 'Mesero B', 'Sin descripción', 'Mesero', 'Mesero', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(13, 13, '100001013', 'Interno', 'Fisica', 'Lunes a Sabado', '10:00 AM - 6:00 PM', NULL, 'Areas publicas', 'Sin descripción', 'Mozo', 'Mozo', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(14, 14, '100001014', 'Interno', 'Fisica', 'Lunes a Sabado', '12:00 PM - 8:00 PM', NULL, 'Recepción', 'Sin descripción', 'Recepción', 'Recepción', '1 año', 7200.00, 'Siete mil doscientos', NULL, 0, NULL, NULL, NULL),
	(15, 15, '100001015', 'Interno', 'Fisica', 'Lunes a Sabado', '06:00 AM - 2:00 PM', NULL, 'Camarista', 'Sin descripción', 'Camarista', 'Camarista', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(16, 16, '100001016', 'Interno', 'Fisica', 'Lunes a Sabado', '03:00 PM - 11:00 PM', NULL, 'Steward', 'Sin descripción', 'Mozo', 'Mozo', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(17, 17, '100001017', 'Interno', 'Fisica', 'Lunes a Sabado', '06:00 AM - 2:00 PM', NULL, 'Steward', 'Sin descripción', 'Mozo', 'Mozo', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(18, 18, '100001018', 'Interno', 'Fisica', 'Lunes a Sabado', '12:00 PM - 8:00 PM', NULL, 'Steward', 'Sin descripción', 'Mozo', 'Mozo', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(19, 19, '100001019', 'Interno', 'Fisica', 'Lunes a Sabado', '03:00 PM - 11:00 PM', NULL, 'Camarista', 'Sin descripción', 'Camarista', 'Camarista', '1 año', 8000.00, 'Ocho mil', NULL, 0, NULL, NULL, NULL),
	(20, 20, '100001020', 'Interno', 'Fisica', 'Lunes a Sabado', '12:00 PM - 8:00 PM', NULL, 'Recepción', 'Sin descripción', 'Recepción', 'Recepción', '1 año', 7200.00, 'Siete mil doscientos', NULL, 0, NULL, NULL, NULL);
/*!40000 ALTER TABLE `informacion_de_empleado` ENABLE KEYS */;

-- Volcando estructura para tabla bub_pdf.migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bub_pdf.migrations: ~4 rows (aproximadamente)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2024_05_12_195930_create_empleados_and_informacion_de_empleados_tables', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Volcando estructura para tabla bub_pdf.password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bub_pdf.password_resets: ~0 rows (aproximadamente)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Volcando estructura para tabla bub_pdf.users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla bub_pdf.users: ~0 rows (aproximadamente)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
