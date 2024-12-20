-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 06-12-2024 a las 21:19:23
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `meestanfilmando`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actors`
--

CREATE TABLE `actors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `actors`
--

INSERT INTO `actors` (`id`, `name`, `birthdate`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Brad Pitt', '1963-12-18', 'Estados Unidos', '2024-11-27 10:53:56', '2024-11-27 10:54:24'),
(2, 'Meryl Streep', '1949-06-22', 'Estados Unidos', '2024-11-27 14:46:01', '2024-11-27 14:46:01'),
(3, 'Leonardo DiCaprio', '1974-11-11', 'Estados Unidos', '2024-11-27 14:46:41', '2024-11-27 14:46:41'),
(4, 'Al Pacino', '1940-04-25', 'Estados Unidos', '2024-11-27 14:47:15', '2024-11-27 14:47:15'),
(5, 'Robert De Niro', '1943-08-17', 'Estados Unidos', '2024-11-27 14:47:58', '2024-11-27 14:47:58'),
(6, 'Tom Hanks', '1956-07-09', 'Estados Unidos', '2024-11-27 14:48:42', '2024-11-27 14:48:42'),
(7, 'Clint Eastwood', '1930-05-31', 'Estados Unidos', '2024-11-27 15:05:53', '2024-11-27 15:05:53'),
(8, 'Bruce Willis', '1955-03-19', 'Estados Unidos', '2024-11-27 15:06:45', '2024-11-27 15:06:45'),
(9, 'Christian Bale', '1974-01-30', 'Estados Unidos', '2024-11-27 15:19:52', '2024-11-27 15:19:52'),
(10, 'Keanu Reeves', '1964-09-02', 'Canadá', '2024-11-27 15:21:24', '2024-11-27 15:21:24'),
(11, 'Nicolas Cage', '1964-01-07', 'Estados Unidos', '2024-11-27 15:22:06', '2024-11-27 15:22:06'),
(12, 'Willem Dafoe', '1955-07-22', 'Estados Unidos', '2024-11-27 15:28:01', '2024-11-27 15:28:01'),
(13, 'George Clooney', '1961-05-06', 'Estados Unidos', '2024-11-27 15:33:38', '2024-11-27 15:33:38'),
(14, 'Tom Cruise', '1962-07-03', 'Estados Unidos', '2024-11-27 15:34:16', '2024-11-27 15:34:16'),
(15, 'Johnny Depp', '1963-06-09', 'Estados Unidos', '2024-11-27 15:37:51', '2024-11-27 15:37:51'),
(16, 'Harrison Ford', '1942-07-13', 'Estados Unidos', '2024-11-28 10:41:17', '2024-11-28 10:41:17'),
(17, 'Ryan Gosling', '1980-11-12', 'Canadá', '2024-11-28 10:42:06', '2024-11-28 10:42:06'),
(18, 'Emma Stone', '1988-11-06', 'Estados Unidos', '2024-11-30 16:09:47', '2024-11-30 16:09:47'),
(19, 'Margot Robbie', '1990-07-02', 'Australia', '2024-11-30 17:07:38', '2024-11-30 17:07:38'),
(20, 'Mel Gibson', '1956-01-03', 'Estados Unidos', '2024-11-30 17:08:37', '2024-11-30 17:08:37'),
(21, 'Jim Carrey', '1962-01-17', 'Canadá', '2024-11-30 17:09:25', '2024-11-30 17:09:25'),
(22, 'Christoph Waltz', '1956-10-04', 'Austria', '2024-12-02 15:08:16', '2024-12-02 15:08:16'),
(23, 'Philip Seymour Hoffman', '1967-07-23', 'Estados Unidos', '2024-12-02 15:19:48', '2024-12-02 15:19:48'),
(24, 'Steve Buscemi', '1957-12-13', 'Estados Unidos', '2024-12-02 15:20:27', '2024-12-02 15:20:27'),
(25, 'Jeff Bridges', '1949-12-04', 'Estados Unidos', '2024-12-02 15:21:44', '2024-12-02 15:21:44'),
(26, 'Julianne Moore', '1960-12-03', 'Estados Unidos', '2024-12-02 15:28:52', '2024-12-02 15:28:52'),
(27, 'Edward Norton', '1969-08-18', 'Estados Unidos', '2024-12-02 15:33:23', '2024-12-02 15:33:23'),
(28, 'Helena Bonham Carter', '1966-05-26', 'Reino Unido', '2024-12-02 15:33:54', '2024-12-02 15:33:54'),
(29, 'Jared Leto', '1971-12-26', 'Estados Unidos', '2024-12-02 15:34:17', '2024-12-02 15:34:17'),
(30, 'Roberto Benigni', '1952-10-27', 'Italia', '2024-12-02 15:45:10', '2024-12-02 15:45:10'),
(31, 'Santiago Segura', '1965-07-17', 'España', '2024-12-02 15:51:38', '2024-12-02 15:51:38'),
(32, 'Penélope Cruz', '1974-04-28', 'España', '2024-12-02 15:52:14', '2024-12-02 15:52:14'),
(33, 'Javier Bardem', '1969-03-01', 'España', '2024-12-02 15:52:40', '2024-12-02 15:52:40'),
(34, 'Antonio Banderas', '1960-08-10', 'España', '2024-12-02 15:53:22', '2024-12-02 15:53:22'),
(35, 'Fernando Fernán Gómez', '1921-08-28', 'España', '2024-12-02 16:05:29', '2024-12-02 16:05:29'),
(36, 'Morgan Freeman', '1937-06-01', 'Estados Unidos', '2024-12-02 16:22:23', '2024-12-02 16:22:23'),
(37, 'Kevin Spacey', '1959-07-26', 'Estados Unidos', '2024-12-02 16:22:52', '2024-12-02 16:22:52'),
(38, 'Gwyneth Paltrow', '1972-09-27', 'Estados Unidos', '2024-12-02 16:23:20', '2024-12-02 16:23:20'),
(39, 'Kurt Russell', '1951-03-17', 'Estados Unidos', '2024-12-02 16:28:06', '2024-12-02 16:28:06'),
(40, 'Sylvester Stallone', '1946-07-06', 'Estados Unidos', '2024-12-02 16:31:58', '2024-12-02 16:31:58'),
(41, 'Shelley Duvall', '1949-07-07', 'Estados Unidos', '2024-12-02 16:38:55', '2024-12-02 16:38:55'),
(42, 'Jack Nicholson', '1937-04-22', 'Estados Unidos', '2024-12-02 16:39:22', '2024-12-02 16:39:22'),
(43, 'Orson Welles', '1915-05-06', 'Estados Unidos', '2024-12-02 16:44:43', '2024-12-02 16:44:43'),
(44, 'Jason Statham', '1967-07-26', 'Reino Unido', '2024-12-02 16:45:45', '2024-12-02 16:45:45'),
(45, 'Kate Winslet', '1975-10-05', 'Reino Unido', '2024-12-02 16:50:06', '2024-12-02 16:50:06'),
(46, 'Mark Ruffalo', '1967-11-22', 'Estados Unidos', '2024-12-02 16:50:45', '2024-12-02 16:50:45'),
(47, 'Samuel L. Jackson', '1948-12-21', 'Estados Unidos', '2024-12-02 16:55:17', '2024-12-02 16:55:17'),
(48, 'Uma Thurman', '1970-04-29', 'Estados Unidos', '2024-12-02 16:55:40', '2024-12-02 16:55:40'),
(49, 'John Travolta', '1954-02-18', 'Estados Unidos', '2024-12-02 16:56:01', '2024-12-02 16:56:01'),
(50, 'Harvey Keitel', '1939-05-13', 'Estados Unidos', '2024-12-02 16:57:05', '2024-12-02 16:57:05'),
(51, 'Sigourney Weaver', '1949-10-08', 'Estados Unidos', '2024-12-02 17:01:34', '2024-12-02 17:01:34'),
(52, 'Tommy Lee Jones', '1946-09-15', 'Estados Unidos', '2024-12-05 18:37:21', '2024-12-05 18:37:21'),
(53, 'Josh Brolin', '1968-02-12', 'Estados Unidos', '2024-12-05 18:38:01', '2024-12-05 18:38:01'),
(54, 'Woody Harrelson', '1961-07-23', 'Estados Unidos', '2024-12-05 18:38:35', '2024-12-05 18:38:35'),
(55, 'Russell Crowe', '1964-04-07', 'Nueva Zelanda', '2024-12-06 16:19:30', '2024-12-06 16:19:30'),
(56, 'Joaquin Phoenix', '1974-10-28', 'Estados Unidos', '2024-12-06 16:20:06', '2024-12-06 16:20:06'),
(57, 'Jonah Hill', '1983-12-20', 'Estados Unidos', '2024-12-06 16:26:13', '2024-12-06 16:26:13'),
(58, 'Matthew McConaughey', '1969-11-04', 'Estados Unidos', '2024-12-06 16:26:56', '2024-12-06 16:26:56'),
(59, 'Arnold Schwarzenegger', '1947-07-30', 'Austria', '2024-12-06 16:33:30', '2024-12-06 16:33:30'),
(60, 'Zoe Saldaña', '1978-06-19', 'Estados Unidos', '2024-12-06 17:03:10', '2024-12-06 17:03:10'),
(61, 'Jeff Goldblum', '1952-10-22', 'Estados Unidos', '2024-12-06 17:09:56', '2024-12-06 17:09:56'),
(62, 'Laura Dern', '1967-02-10', 'Estados Unidos', '2024-12-06 17:10:24', '2024-12-06 17:10:24'),
(63, 'Tim Robbins', '1958-10-16', 'Estados Unidos', '2024-12-06 17:13:53', '2024-12-06 17:13:53'),
(64, 'Cate Blanchett', '1969-05-14', 'Australia', '2024-12-06 17:26:27', '2024-12-06 17:26:27'),
(65, 'Tilda Swinton', '1960-11-05', 'Reino Unido', '2024-12-06 17:27:27', '2024-12-06 17:27:27'),
(66, 'Mahershala Ali', '1974-02-16', 'Estados Unidos', '2024-12-06 17:28:05', '2024-12-06 17:28:05'),
(67, 'Ralph Fiennes', '1962-12-22', 'Reino Unido', '2024-12-06 17:38:17', '2024-12-06 17:38:17'),
(68, 'Bill Murray', '1950-09-21', 'Estados Unidos', '2024-12-06 17:38:51', '2024-12-06 17:38:51'),
(69, 'Owen Wilson', '1968-11-18', 'Estados Unidos', '2024-12-06 17:39:55', '2024-12-06 17:39:55'),
(70, 'Adrien Brody', '1973-04-14', 'Estados Unidos', '2024-12-06 17:40:40', '2024-12-06 17:40:40'),
(71, 'Saoirse Ronan', '1994-04-12', 'Estados Unidos', '2024-12-06 17:41:22', '2024-12-06 17:41:22'),
(72, 'Anthony Hopkins', '1937-12-31', 'Reino Unido', '2024-12-06 17:48:39', '2024-12-06 17:48:39'),
(73, 'Jodie Foster', '1962-11-19', 'Estados Unidos', '2024-12-06 17:49:05', '2024-12-06 17:49:05'),
(74, 'Orlando Bloom', '1977-01-13', 'Reino Unido', '2024-12-06 17:53:20', '2024-12-06 17:53:20'),
(75, 'Christopher Lee', '1922-05-27', 'Reino Unido', '2024-12-06 17:54:06', '2024-12-06 17:54:06'),
(76, 'Ethan Hawke', '1970-11-06', 'Estados Unidos', '2024-12-06 18:00:37', '2024-12-06 18:00:37'),
(77, 'Michael Caine', '1933-03-14', 'Reino Unido', '2024-12-06 18:12:29', '2024-12-06 18:12:29'),
(78, 'Timothée Chalamet', '1995-12-27', 'Estados Unidos', '2024-12-06 18:13:06', '2024-12-06 18:13:06'),
(79, 'Matt Damon', '1970-10-08', 'Estados Unidos', '2024-12-06 18:13:48', '2024-12-06 18:13:48'),
(80, 'Anne Hathaway', '1982-11-12', 'Estados Unidos', '2024-12-06 18:14:16', '2024-12-06 18:14:16'),
(81, 'Jessica Chastain', '1977-03-24', 'Estados Unidos', '2024-12-06 18:14:50', '2024-12-06 18:14:50'),
(82, 'Nick Nolte', '1941-02-08', 'Estados Unidos', '2024-12-06 18:25:53', '2024-12-06 18:25:53'),
(83, 'Bradley Cooper', '1975-01-05', 'Estados Unidos', '2024-12-06 18:35:43', '2024-12-06 18:35:43'),
(84, 'Liam Neeson', '1952-06-07', 'Reino Unido', '2024-12-06 18:43:29', '2024-12-06 18:43:29'),
(85, 'Marlon Brando', '1924-04-03', 'Estados Unidos', '2024-12-06 18:51:10', '2024-12-06 18:51:10'),
(86, 'Jennifer Connelly', '1970-12-12', 'Estados Unidos', '2024-12-06 19:00:47', '2024-12-06 19:00:47'),
(87, 'Natalie Portman', '1981-06-09', 'Israel', '2024-12-06 19:11:48', '2024-12-06 19:11:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `actor_awards`
--

CREATE TABLE `actor_awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `actor_id` bigint(20) UNSIGNED NOT NULL,
  `award_id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatars`
--

CREATE TABLE `avatars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `avatars`
--

INSERT INTO `avatars` (`id`, `picture`, `description`, `created_at`, `updated_at`) VALUES
(1, '/pictures/avatars/1.png', 'Por defecto', '2024-12-02 13:13:04', '2024-12-02 13:13:04'),
(2, '/pictures/avatars/2.png', 'Noir', '2024-12-02 13:17:16', '2024-12-06 14:45:39'),
(3, '/pictures/avatars/3.png', 'Musa', '2024-12-03 19:56:13', '2024-12-03 19:56:22'),
(4, '/pictures/avatars/4.png', 'Mafioso', '2024-12-03 19:56:29', '2024-12-03 19:56:36'),
(5, '/pictures/avatars/5.png', 'Cowboy', '2024-12-03 19:56:56', '2024-12-06 14:47:02'),
(6, '/pictures/avatars/6.png', 'Brujo', '2024-12-03 19:57:18', '2024-12-03 19:57:27'),
(7, '/pictures/avatars/7.png', 'Espía', '2024-12-03 19:57:37', '2024-12-03 19:57:44'),
(8, '/pictures/avatars/8.png', 'Soldado', '2024-12-03 19:57:52', '2024-12-03 20:03:22'),
(9, '/pictures/avatars/9.png', 'Princesa', '2024-12-03 19:58:11', '2024-12-03 19:58:18'),
(10, '/pictures/avatars/10.png', 'Pirata', '2024-12-03 19:58:51', '2024-12-03 19:58:58'),
(11, '/pictures/avatars/11.png', 'Futurista', '2024-12-03 19:59:18', '2024-12-03 19:59:38'),
(12, '/pictures/avatars/12.png', 'Dibujito', '2024-12-03 19:59:51', '2024-12-03 19:59:51'),
(13, '/pictures/avatars/13.png', 'Vampiro', '2024-12-03 20:00:05', '2024-12-06 14:47:43'),
(14, '/pictures/avatars/14.png', 'Alien', '2024-12-03 20:00:18', '2024-12-03 20:00:18'),
(15, '/pictures/avatars/15.png', 'Superhéroe', '2024-12-03 20:00:34', '2024-12-03 20:00:34'),
(16, '/pictures/avatars/16.png', 'Emperador', '2024-12-03 20:01:09', '2024-12-03 20:01:09'),
(17, '/pictures/avatars/17.png', 'Elfo', '2024-12-03 20:01:23', '2024-12-03 20:01:32'),
(18, '/pictures/avatars/18.png', 'Astronauta', '2024-12-03 20:02:19', '2024-12-03 20:02:19'),
(19, '/pictures/avatars/19.png', 'Guerrero', '2024-12-03 20:02:48', '2024-12-03 20:02:48'),
(20, '/pictures/avatars/20.png', 'Merodeador', '2024-12-03 20:03:06', '2024-12-03 20:03:06'),
(21, '/pictures/avatars/21.png', 'Cantante', '2024-12-03 20:03:37', '2024-12-03 20:03:37'),
(22, '/pictures/avatars/22.png', 'Monstruo', '2024-12-03 20:03:51', '2024-12-03 20:03:51'),
(23, '/pictures/avatars/23.png', 'Piloto', '2024-12-03 20:04:04', '2024-12-03 20:04:04'),
(24, '/pictures/avatars/24.png', 'Payaso', '2024-12-03 20:04:15', '2024-12-03 20:04:15'),
(25, '/pictures/avatars/25.png', 'Steampunk', '2024-12-03 20:04:26', '2024-12-03 20:04:26'),
(26, '/pictures/avatars/26.png', 'Mesiánico', '2024-12-03 20:04:35', '2024-12-06 14:48:40');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `awards`
--

CREATE TABLE `awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `plural` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `awards`
--

INSERT INTO `awards` (`id`, `type`, `plural`, `created_at`, `updated_at`) VALUES
(3, 'Globo de oro', 'Globos de oro', '2024-11-26 11:55:07', '2024-11-26 11:55:14'),
(4, 'Oscar', 'Oscars', '2024-11-26 11:55:27', '2024-11-26 11:55:34'),
(6, 'Palma de oro', 'Palmas de oro', '2024-11-27 00:09:15', '2024-11-27 00:09:15'),
(7, 'Premio en el festival de Cannes', 'Premios en el festival de Cannes', '2024-11-27 00:11:04', '2024-11-27 00:11:09'),
(8, 'León de oro', 'Leones de oro', '2024-11-27 00:11:40', '2024-11-27 00:11:45'),
(9, 'León de plata', 'Leones de plata', '2024-11-27 00:11:59', '2024-11-27 00:11:59'),
(10, 'Oso de oro', 'Osos de oro', '2024-11-27 00:12:29', '2024-11-27 00:12:29'),
(11, 'Oso de plata', 'Osos de plata', '2024-11-27 00:12:44', '2024-11-27 00:12:44'),
(12, 'Premio Goya', 'Premios Goya', '2024-11-27 00:13:05', '2024-11-27 00:13:05');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('sorribasjesus44@gmail.com|127.0.0.1', 'i:1;', 1733147003),
('sorribasjesus44@gmail.com|127.0.0.1:timer', 'i:1733147003;', 1733147003),
('ss@sh|127.0.0.1', 'i:1;', 1732473609),
('ss@sh|127.0.0.1:timer', 'i:1732473609;', 1732473609);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED DEFAULT NULL,
  `content` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `comments`
--

INSERT INTO `comments` (`id`, `film_id`, `user_id`, `comment_id`, `content`, `created_at`, `updated_at`) VALUES
(1, 6, 1, NULL, 'Fantástica. Increíble alegoría a la venganza a través de un hombre cuya vida ha sido arrebatada e intenta recomponer pedazo a pedazo.', '2024-12-05 00:15:18', '2024-12-05 00:15:18'),
(2, 6, 3, NULL, 'Menuda mierda. Me dan arcadas y todo cada vez que pienso en lo que acabo de ver. Repugnante. Sólo sé que quien haya dirigido esto es el hijo de puta más grande de la tierra.', '2024-12-05 00:27:51', '2024-12-05 00:27:51'),
(3, 6, 4, NULL, 'Me ha impactado. El final es tan sorprendente como grotesco. La sensación de estupefacción ante la maldad del villano me aterra.', '2024-12-05 00:34:39', '2024-12-05 00:34:39'),
(5, 6, 3, NULL, 'Y por lo visto hay gente a la que le gusta la película. Estoy rodeado de enfermos.', '2024-12-05 00:56:21', '2024-12-05 00:56:21'),
(6, 2, 1, NULL, 'Es simplemente mágica. Una historia que muestra como es el verdadero amor.', '2024-12-05 11:23:48', '2024-12-05 11:23:48');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `directors`
--

CREATE TABLE `directors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `birthdate` date NOT NULL,
  `country` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `directors`
--

INSERT INTO `directors` (`id`, `name`, `birthdate`, `country`, `created_at`, `updated_at`) VALUES
(1, 'Steven Spielberg', '1946-12-18', 'Estados Unidos', '2024-11-27 00:49:11', '2024-11-27 00:49:11'),
(2, 'Quentin Tarantino', '1963-03-27', 'Estados Unidos', '2024-11-27 01:05:11', '2024-11-27 01:05:11'),
(3, 'Christopher Nolan', '1970-07-30', 'Estados Unidos', '2024-11-27 01:14:32', '2024-11-27 01:14:32'),
(4, 'Martin Scorsese', '1942-11-17', 'Estados Unidos', '2024-11-27 01:15:12', '2024-11-27 01:15:12'),
(5, 'Stanley Kubrick', '1928-07-26', 'Estados Unidos', '2024-11-27 01:15:58', '2024-11-27 01:15:58'),
(6, 'Ridley Scott', '1937-11-30', 'Reino Unido', '2024-11-27 01:16:45', '2024-11-27 01:16:45'),
(7, 'David Fincher', '1962-08-28', 'Estados Unidos', '2024-11-27 01:17:25', '2024-11-27 01:17:25'),
(8, 'Santiago Segura', '1965-07-17', 'España', '2024-11-27 01:18:21', '2024-11-27 01:18:21'),
(9, 'Paul Thomas Anderson', '1970-06-26', 'Estados Unidos', '2024-11-27 01:19:07', '2024-11-27 01:19:07'),
(10, 'Ethan & Joel Coen', '1954-11-29', 'Estados Unidos', '2024-11-27 01:21:43', '2024-11-27 01:21:43'),
(11, 'James Cameron', '1954-08-16', 'Canadá', '2024-11-27 01:22:27', '2024-11-27 01:22:27'),
(12, 'Francis Ford Coppola', '1939-04-07', 'Estados Unidos', '2024-11-27 01:23:11', '2024-11-27 01:23:11'),
(13, 'Sofia Coppola', '1971-05-14', 'Estados Unidos', '2024-11-27 01:24:15', '2024-11-27 01:24:15'),
(14, 'Clint Eastwood', '1930-05-31', 'Estados Unidos', '2024-11-27 01:24:54', '2024-11-27 01:24:54'),
(15, 'Ingmar Bergman', '1918-07-14', 'Suecia', '2024-11-27 01:25:50', '2024-11-27 01:25:50'),
(16, 'Andrei Tarkovski', '1932-04-04', 'Rusia', '2024-11-27 01:26:56', '2024-11-27 01:26:56'),
(17, 'Damien Chazelle', '1985-01-19', 'Estados Unidos', '2024-11-27 01:27:36', '2024-11-27 01:27:36'),
(18, 'Wes Anderson', '1969-05-01', 'Estados Unidos', '2024-11-27 01:28:32', '2024-11-27 01:28:32'),
(19, 'Guy Ritchie', '1968-09-10', 'Reino Unido', '2024-11-27 01:29:23', '2024-11-27 01:29:23'),
(20, 'Denis Villeneuve', '1967-10-03', 'Canadá', '2024-11-27 01:30:31', '2024-11-27 01:30:31'),
(21, 'Darren Aronofsky', '1969-02-12', 'Estados Unidos', '2024-11-27 01:31:38', '2024-11-27 01:31:38'),
(22, 'Sam Mendes', '1965-08-01', 'Reino Unido', '2024-11-27 01:32:11', '2024-11-27 01:32:11'),
(23, 'M. Night Shyamalan', '1970-08-06', 'India', '2024-11-27 01:33:19', '2024-11-27 01:33:19'),
(24, 'Todd Phillips', '1970-12-20', 'Estados Unidos', '2024-11-27 01:34:17', '2024-11-27 01:34:17'),
(25, 'Frank Darabont', '1959-01-28', 'Francia', '2024-11-27 01:35:33', '2024-11-27 01:35:33'),
(26, 'Robert Zemeckis', '1952-05-14', 'Estados Unidos', '2024-11-27 01:36:56', '2024-11-27 01:36:56'),
(27, 'Peter Jackson', '1961-10-31', 'Nueva Zelanda', '2024-11-27 01:37:44', '2024-11-27 01:37:44'),
(28, 'Jonathan Demme', '1944-02-22', 'Estados Unidos', '2024-11-27 01:40:30', '2024-11-27 01:40:30'),
(29, 'Park Chan-wook', '1963-08-23', 'Corea del Sur', '2024-11-27 01:41:53', '2024-11-27 01:41:53'),
(30, 'Bong Joon-ho', '1969-09-14', 'Corea del Sur', '2024-11-27 01:42:43', '2024-11-27 01:42:43'),
(31, 'Michel Gondry', '1963-05-08', 'Francia', '2024-11-27 01:44:02', '2024-11-27 01:44:02'),
(32, 'Roberto Benigni', '1952-10-27', 'Italia', '2024-11-27 01:44:59', '2024-11-27 01:44:59'),
(33, 'Alejandro González Iñárritu', '1963-08-15', 'México', '2024-11-27 01:45:57', '2024-11-27 01:45:57'),
(34, 'Valerie Faris & Jonathan Dayton', '1957-07-07', 'Estados Unidos', '2024-11-27 01:48:15', '2024-11-27 01:48:15'),
(35, 'Taika Waititi', '1975-08-16', 'Nueva Zelanda', '2024-11-27 01:48:54', '2024-11-27 01:48:54'),
(36, 'James Gunn', '1966-08-05', 'Estados Unidos', '2024-11-27 01:49:34', '2024-11-27 01:49:34'),
(37, 'Larry Charles', '1956-12-01', 'Estados Unidos', '2024-11-27 01:51:15', '2024-11-27 01:51:15'),
(38, 'Bryan De Palma', '1940-09-11', 'Estados Unidos', '2024-11-27 01:52:04', '2024-11-27 01:52:04'),
(39, 'Rian Johnson', '1973-12-17', 'Estados Unidos', '2024-11-27 01:52:56', '2024-11-27 01:52:56'),
(40, 'Robert Eggers', '1983-07-07', 'Estados Unidos', '2024-11-27 01:54:20', '2024-11-27 01:54:20'),
(41, 'Ari Aster', '1986-07-15', 'Estados Unidos', '2024-11-27 01:54:54', '2024-11-27 01:54:54'),
(42, 'Jordan Peele', '1979-02-21', 'Estados Unidos', '2024-11-27 01:55:21', '2024-11-27 01:55:21'),
(43, 'Alejandro Amenábar', '1972-03-31', 'Chile', '2024-11-27 01:56:11', '2024-11-27 01:56:11'),
(44, 'Alfonso Cuarón', '1961-11-28', 'México', '2024-11-27 10:18:15', '2024-11-27 10:18:15'),
(45, 'Guillermo del Toro', '1964-10-09', 'México', '2024-11-27 10:18:59', '2024-11-27 10:18:59'),
(46, 'John Ford', '1894-02-01', 'Estados Unidos', '2024-11-27 10:20:17', '2024-11-27 10:20:17'),
(47, 'Alfred Hitchcock', '1899-08-13', 'Reino Unido', '2024-11-27 10:21:04', '2024-11-27 10:21:04'),
(48, 'David Lynch', '1946-01-20', 'Estados Unidos', '2024-11-27 10:21:43', '2024-11-27 10:21:43'),
(49, 'Giórgos Lánthimos', '1973-09-23', 'Grecia', '2024-11-27 10:22:33', '2024-11-27 10:22:33'),
(50, 'Orson Welles', '1915-05-06', 'Estados Unidos', '2024-11-27 10:23:42', '2024-11-27 10:23:42'),
(51, 'Martin McDonagh', '1970-03-26', 'Reino Unido', '2024-11-27 10:25:12', '2024-11-27 10:25:12'),
(52, 'Pedro Almodóvar', '1949-09-25', 'España', '2024-11-27 10:26:15', '2024-11-27 10:26:15'),
(53, 'J. A. Bayona', '1975-05-09', 'España', '2024-11-27 10:27:05', '2024-11-27 10:27:05'),
(54, 'José Luis Cuerda', '1947-02-18', 'España', '2024-11-27 10:28:12', '2024-11-27 10:28:12'),
(55, 'Javier Fesser', '1964-02-15', 'España', '2024-11-27 10:29:08', '2024-11-27 10:29:08'),
(56, 'David Lean', '1908-03-25', 'Reino Unido', '2024-11-27 10:30:13', '2024-11-27 10:30:13'),
(57, 'Billy Wilder', '1906-06-22', 'Polonia', '2024-11-27 10:31:18', '2024-11-27 10:31:18'),
(58, 'Victor Fleming', '1889-02-23', 'Estados Unidos', '2024-11-27 10:32:10', '2024-11-27 10:32:10'),
(59, 'Roman Polanski', '1933-08-18', 'Francia', '2024-11-27 10:33:07', '2024-11-27 10:33:07'),
(60, 'Víctor Erice', '1940-06-30', 'España', '2024-11-27 10:34:12', '2024-11-27 10:34:12'),
(61, 'Sergio Leone', '1929-01-03', 'Italia', '2024-11-27 10:35:43', '2024-11-27 10:35:43'),
(62, 'Shawn Levy', '1968-07-23', 'Canadá', '2024-11-27 10:59:06', '2024-11-27 10:59:06'),
(63, 'Peter Weir', '1944-08-21', 'Australia', '2024-11-27 14:50:39', '2024-11-27 14:50:39'),
(64, 'Peter Farrelly', '1956-12-17', 'Estados Unidos', '2024-11-27 14:51:20', '2024-11-27 14:51:20'),
(65, 'Jay Roach', '1957-06-14', 'Estados Unidos', '2024-11-27 14:52:02', '2024-11-27 14:52:02'),
(66, 'Sam Raimi', '1959-10-23', 'Estados Unidos', '2024-11-27 14:53:04', '2024-11-27 14:53:04'),
(67, 'Matt Reeves', '1966-04-27', 'Estados Unidos', '2024-11-27 14:54:23', '2024-11-27 14:54:23'),
(68, 'Mary Harron', '1953-01-12', 'Canadá', '2024-11-27 14:55:21', '2024-11-27 14:55:21'),
(69, 'Tim Burton', '1958-08-25', 'Estados Unidos', '2024-11-27 14:57:06', '2024-11-27 14:57:06'),
(70, 'Joel Schumacher', '1939-08-29', 'Estados Unidos', '2024-11-27 14:58:02', '2024-11-27 14:58:02'),
(71, 'Simon West', '1961-07-17', 'Reino Unido', '2024-11-27 14:58:51', '2024-11-27 14:58:51'),
(72, 'Robert Rodriguez', '1968-06-20', 'Estados Unidos', '2024-11-27 15:02:53', '2024-11-27 15:02:53'),
(73, 'Zack Snyder', '1966-03-01', 'Estados Unidos', '2024-11-27 15:03:36', '2024-11-27 15:03:36'),
(74, 'Tony Kaye', '1952-07-08', 'Reino Unido', '2024-11-27 15:05:00', '2024-11-27 15:05:00'),
(75, 'Luc Besson', '1959-03-18', 'Francia', '2024-11-27 15:07:33', '2024-11-27 15:07:33'),
(76, 'Michael Bay', '1965-02-17', 'Estados Unidos', '2024-11-27 15:08:21', '2024-11-27 15:08:21'),
(77, 'John McTiernan', '1951-01-08', 'Estados Unidos', '2024-11-27 15:09:24', '2024-11-27 15:09:24'),
(78, 'John G. Avildsen', '1935-12-21', 'Estados Unidos', '2024-11-27 15:12:14', '2024-11-27 15:12:14'),
(79, 'Ang Lee', '1954-10-23', 'Taiwán', '2024-11-27 15:13:22', '2024-11-27 15:13:22'),
(80, 'Jerry Zucker', '1950-03-11', 'Estados Unidos', '2024-11-27 15:14:21', '2024-11-27 15:14:21'),
(81, 'Garry Marshall', '1934-11-13', 'Estados Unidos', '2024-11-27 15:15:44', '2024-11-27 15:15:44'),
(82, 'Akira Kurosawa', '1910-03-23', 'Japón', '2024-11-27 15:16:33', '2024-11-27 15:16:33'),
(83, 'John Carpenter', '1948-01-16', 'Estados Unidos', '2024-11-27 15:17:47', '2024-11-27 15:17:47'),
(84, 'George Lucas', '1944-05-14', 'Estados Unidos', '2024-11-27 15:30:20', '2024-11-27 15:30:20'),
(85, 'Gore Verbinski', '1964-03-16', 'Estados Unidos', '2024-11-27 15:31:12', '2024-11-27 15:31:12'),
(86, 'Steven Soderbergh', '1963-01-14', 'Estados Unidos', '2024-11-27 15:32:57', '2024-11-27 15:32:57'),
(87, 'Tony Scott', '1944-06-21', 'Estados Unidos', '2024-11-27 15:35:35', '2024-11-27 15:35:35'),
(88, 'Bryan Singer', '1965-09-17', 'Estados Unidos', '2024-11-27 15:37:02', '2024-11-27 15:37:02'),
(89, 'George Miller', '1945-03-03', 'Australia', '2024-11-28 11:29:45', '2024-11-28 11:29:45'),
(90, 'Terry Jones', '1942-02-01', 'Reino Unido', '2024-11-28 17:01:22', '2024-11-28 17:01:22'),
(91, 'Disney', '1923-10-16', 'Estados Unidos', '2024-11-28 17:57:25', '2024-11-28 17:57:25'),
(92, 'DreamWorks', '1994-10-12', 'Estados Unidos', '2024-11-28 17:58:03', '2024-11-28 17:58:03'),
(93, 'Pixar', '1986-02-03', 'Estados Unidos', '2024-11-28 17:58:30', '2024-11-28 17:58:30'),
(94, 'Blue Sky', '1987-02-22', 'Estados Unidos', '2024-11-28 17:59:31', '2024-11-28 17:59:31'),
(95, 'Illumination', '2007-01-17', 'Estados Unidos', '2024-11-28 18:00:30', '2024-11-28 18:00:30'),
(96, 'Hayao Miyazaki', '1941-01-05', 'Japón', '2024-11-28 18:05:07', '2024-11-28 18:05:07'),
(97, 'Paolo Sorrentino', '1970-05-31', 'Italia', '2024-11-28 23:12:36', '2024-11-28 23:12:36'),
(98, 'Lana & Lilly Wachowski', '1965-06-21', 'Estados Unidos', '2024-12-01 17:26:28', '2024-12-01 17:26:28'),
(99, 'Chad Stahelski', '1968-09-20', 'Estados Unidos', '2024-12-01 17:28:06', '2024-12-01 17:28:06'),
(100, 'Richard Linklater', '1960-07-30', 'Estados Unidos', '2024-12-06 17:59:52', '2024-12-06 17:59:52'),
(101, 'Gaspar Noé', '1963-12-27', 'Argentina', '2024-12-06 18:09:28', '2024-12-06 18:09:28'),
(102, 'Brian Taylor & Mark Neveldine', '1973-05-11', 'Estados Unidos', '2024-12-06 19:07:51', '2024-12-06 19:07:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `director_awards`
--

CREATE TABLE `director_awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `director_id` bigint(20) UNSIGNED NOT NULL,
  `award_id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `films`
--

CREATE TABLE `films` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `director_id` bigint(20) UNSIGNED DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `original` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `duration` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `cinema` tinyint(1) NOT NULL,
  `picture` varchar(255) NOT NULL DEFAULT '/pictures/films/Portada.png',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `films`
--

INSERT INTO `films` (`id`, `director_id`, `title`, `original`, `description`, `duration`, `year`, `cinema`, `picture`, `created_at`, `updated_at`) VALUES
(1, 2, 'Malditos Bastardos', 'Inglourious Basterds', NULL, 153, '2009', 0, '/pictures/films/1.png', '2024-12-02 15:12:35', '2024-12-02 19:05:35'),
(2, 17, 'La La Land', 'La La Land', NULL, 128, '2016', 0, '/pictures/films/2.png', '2024-12-02 15:17:54', '2024-12-02 19:05:52'),
(3, 10, 'El Gran Lebowski', 'The Big Lebowski', NULL, 117, '1998', 0, '/pictures/films/3.png', '2024-12-02 15:25:13', '2024-12-02 19:06:10'),
(4, 17, 'Babylon', 'Babylon', NULL, 189, '2022', 0, '/pictures/films/4.png', '2024-12-02 15:32:20', '2024-12-02 19:06:19'),
(5, 7, 'El Club de la Lucha', 'Fight Club', NULL, 139, '1999', 0, '/pictures/films/5.png', '2024-12-02 15:38:41', '2024-12-02 19:06:29'),
(6, 29, 'OldBoy', 'OldBoy', NULL, 119, '2003', 0, '/pictures/films/6.png', '2024-12-02 15:44:06', '2024-12-02 19:06:39'),
(7, 32, 'La Vida es Bella', 'La Vita e Bella', NULL, 116, '1997', 0, '/pictures/films/7.png', '2024-12-02 15:48:58', '2024-12-02 19:06:47'),
(8, 43, 'Abre los Ojos', 'Abre los Ojos', NULL, 117, '1997', 0, '/pictures/films/8.png', '2024-12-02 15:57:14', '2024-12-02 19:06:58'),
(9, 8, 'Saga Torrente', 'Torrente', NULL, 491, '1998', 0, '/pictures/films/9.png', '2024-12-02 16:00:41', '2024-12-02 19:07:07'),
(10, 54, 'Amanece, que no es poco', 'Amanece, que no es poco', NULL, 110, '1989', 0, '/pictures/films/10.png', '2024-12-02 16:03:11', '2024-12-02 19:07:24'),
(11, 60, 'El espíritu de la colmena', 'El espíritu de la colmena', NULL, 97, '1973', 0, '/pictures/films/11.png', '2024-12-02 16:06:55', '2024-12-02 19:07:34'),
(12, 16, 'Stalker', 'Stalker', NULL, 163, '1979', 0, '/pictures/films/12.png', '2024-12-02 16:13:12', '2024-12-02 19:07:53'),
(13, 15, 'El séptimo sello', 'Det Sjunde Inseglet', NULL, 96, '1957', 0, '/pictures/films/13.png', '2024-12-02 16:17:24', '2024-12-02 19:08:05'),
(14, 3, 'Memento', 'Memento', NULL, 113, '2000', 0, '/pictures/films/14.png', '2024-12-02 16:20:45', '2024-12-02 19:08:16'),
(15, 7, 'Seven', 'Se7en', NULL, 127, '1995', 0, '/pictures/films/15.png', '2024-12-02 16:26:28', '2024-12-06 18:11:23'),
(16, 83, 'La Cosa', 'The Thing', NULL, 109, '1982', 0, '/pictures/films/16.png', '2024-12-02 16:29:34', '2024-12-02 19:09:06'),
(17, 78, 'Saga Rocky', 'Rocky', NULL, 539, '1976', 0, '/pictures/films/17.png', '2024-12-02 16:33:53', '2024-12-02 19:09:16'),
(18, 1, 'E.T. el extraterrestre', 'E.T. the Extra-Terrestrial', NULL, 115, '1982', 0, '/pictures/films/18.png', '2024-12-02 16:37:30', '2024-12-02 19:09:28'),
(19, 5, 'El Resplandor', 'The Shining', NULL, 146, '1980', 0, '/pictures/films/19.png', '2024-12-02 16:42:12', '2024-12-02 19:09:39'),
(20, 19, 'Snatch, cerdos y diamantes', 'Snatch', NULL, 104, '2000', 0, '/pictures/films/20.png', '2024-12-02 16:48:12', '2024-12-02 19:09:48'),
(21, 31, 'Olvídate de mí', 'Eternal Sunshine of the Spotless Mind', NULL, 108, '2004', 0, '/pictures/films/21.png', '2024-12-02 16:52:50', '2024-12-02 19:10:03'),
(22, 2, 'Pulp Fiction', 'Pulp Fiction', NULL, 149, '1994', 0, '/pictures/films/22.png', '2024-12-02 16:59:02', '2024-12-02 19:10:12'),
(23, 6, 'Alien: el octavo pasajero', 'Alien', NULL, 117, '1979', 0, '/pictures/films/23.png', '2024-12-02 17:03:48', '2024-12-02 19:10:20'),
(24, 50, 'Ciudadano Kane', 'Citizen Kane', NULL, 119, '1941', 0, '/pictures/films/24.png', '2024-12-05 18:29:58', '2024-12-05 18:31:07'),
(25, 10, 'No es País para Viejos', 'No Country for Old Men', NULL, 122, '2007', 0, '/pictures/films/25.png', '2024-12-05 18:35:53', '2024-12-05 18:39:16'),
(26, 1, 'Tiburón', 'Jaws', NULL, 124, '1975', 0, '/pictures/films/26.png', '2024-12-06 16:17:32', '2024-12-06 16:17:44'),
(27, 6, 'Gladiator', 'Gladiator', NULL, 155, '2000', 0, '/pictures/films/27.png', '2024-12-06 16:22:36', '2024-12-06 16:22:48'),
(28, 4, 'El Lobo de Wall Street', 'The Wolf of Wall Street', NULL, 180, '2013', 0, '/pictures/films/28.png', '2024-12-06 16:30:47', '2024-12-06 16:30:57'),
(29, 11, 'Saga Terminator (1 & 2)', 'The Terminator', NULL, 244, '1984', 0, '/pictures/films/29.png', '2024-12-06 16:37:34', '2024-12-06 16:40:03'),
(30, 5, '2001: Una Odisea Espacial', '2001: A Space Odyssey', NULL, 149, '1968', 0, '/pictures/films/30.png', '2024-12-06 16:53:45', '2024-12-06 16:54:01'),
(31, 11, 'Saga Avatar', 'Avatar', NULL, 354, '2009', 0, '/pictures/films/31.png', '2024-12-06 17:07:39', '2024-12-06 17:07:50'),
(32, 1, 'Parque Jurásico', 'Jurassic Park', NULL, 127, '1993', 0, '/pictures/films/32.png', '2024-12-06 17:12:20', '2024-12-06 17:12:32'),
(33, 25, 'Cadena Perpetua', 'The Shawshank Redemption', NULL, 142, '1994', 0, '/pictures/films/33.png', '2024-12-06 17:21:29', '2024-12-06 17:21:38'),
(34, 7, 'El Curioso Caso de Benjamin Button', 'The Curious Case of Benjamin Button', NULL, 166, '2008', 0, '/pictures/films/34.png', '2024-12-06 17:25:39', '2024-12-06 17:31:54'),
(35, 68, 'American Psycho', 'American Psycho', NULL, 104, '2000', 0, '/pictures/films/35.png', '2024-12-06 17:37:08', '2024-12-06 17:37:18'),
(36, 18, 'El Gran Hotel Budapest', 'The Grand Budapest Hotel', NULL, 99, '2014', 0, '/pictures/films/36.png', '2024-12-06 17:47:02', '2024-12-06 17:47:15'),
(37, 28, 'El Silencio de los Corderos', 'The Silence of the Lambs', NULL, 118, '1991', 0, '/pictures/films/37.png', '2024-12-06 17:51:22', '2024-12-06 17:51:33'),
(38, 27, 'Triología del Señor de los Anillos', 'The Lord of the Rings', NULL, 558, '2001', 0, '/pictures/films/38.png', '2024-12-06 17:57:56', '2024-12-06 17:58:07'),
(39, 100, 'Saga Antes del Amanecer', 'Before Sunrise', NULL, 294, '1995', 0, '/pictures/films/39.png', '2024-12-06 18:04:55', '2024-12-06 18:05:05'),
(40, 101, 'Irreversible', 'IЯЯƎVƎЯSIBLƎ', NULL, 97, '2002', 0, '/pictures/films/Portada.png', '2024-12-06 18:11:08', '2024-12-06 18:11:08'),
(41, 3, 'Interstellar', 'Interstellar', NULL, 169, '2014', 0, '/pictures/films/41.png', '2024-12-06 18:19:06', '2024-12-06 18:19:17'),
(42, 26, 'Forrest Gump', 'Forrest Gump', NULL, 142, '1994', 0, '/pictures/films/42.png', '2024-12-06 18:24:07', '2024-12-06 18:24:18'),
(43, 4, 'El Cabo del Miedo', 'Cape Fear', NULL, 128, '1991', 0, '/pictures/films/43.png', '2024-12-06 18:29:00', '2024-12-06 18:29:22'),
(44, 6, 'Blade Runner', 'Blade Runner', NULL, 117, '1982', 0, '/pictures/films/44.png', '2024-12-06 18:33:25', '2024-12-06 18:33:36'),
(45, 24, 'Resacón en Las Vegas', 'The Hangover', NULL, 100, '2009', 0, '/pictures/films/45.png', '2024-12-06 18:41:12', '2024-12-06 18:41:27'),
(46, 1, 'La lista de Schindler', 'Schindler\'s List', NULL, 195, '1993', 0, '/pictures/films/46.png', '2024-12-06 18:48:51', '2024-12-06 18:49:06'),
(47, 12, 'Triología de \'El Padrino\'', 'The Godfather', NULL, 539, '1972', 0, '/pictures/films/47.png', '2024-12-06 18:55:23', '2024-12-06 18:55:36'),
(48, 21, 'Requiem por un Sueño', 'Requiem for a Dream', NULL, 102, '2000', 0, '/pictures/films/48.png', '2024-12-06 19:05:28', '2024-12-06 19:05:41'),
(49, 102, 'Crank', 'Crank', NULL, 93, '2006', 0, '/pictures/films/49.png', '2024-12-06 19:09:45', '2024-12-06 19:09:59'),
(50, 21, 'Cisne Negro', 'Black Swan', NULL, 108, '2010', 0, '/pictures/films/50.png', '2024-12-06 19:13:49', '2024-12-06 19:14:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `film_actors`
--

CREATE TABLE `film_actors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `actor_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `film_actors`
--

INSERT INTO `film_actors` (`id`, `film_id`, `actor_id`, `created_at`, `updated_at`) VALUES
(53, 1, 1, '2024-12-02 19:05:35', '2024-12-02 19:05:35'),
(54, 1, 22, '2024-12-02 19:05:35', '2024-12-02 19:05:35'),
(55, 2, 18, '2024-12-02 19:05:52', '2024-12-02 19:05:52'),
(56, 2, 17, '2024-12-02 19:05:52', '2024-12-02 19:05:52'),
(57, 3, 25, '2024-12-02 19:06:11', '2024-12-02 19:06:11'),
(58, 3, 24, '2024-12-02 19:06:11', '2024-12-02 19:06:11'),
(59, 3, 23, '2024-12-02 19:06:11', '2024-12-02 19:06:11'),
(60, 3, 26, '2024-12-02 19:06:11', '2024-12-02 19:06:11'),
(61, 4, 19, '2024-12-02 19:06:19', '2024-12-02 19:06:19'),
(62, 4, 1, '2024-12-02 19:06:19', '2024-12-02 19:06:19'),
(63, 5, 1, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(64, 5, 27, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(65, 5, 28, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(66, 5, 29, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(67, 7, 30, '2024-12-02 19:06:47', '2024-12-02 19:06:47'),
(68, 8, 32, '2024-12-02 19:06:58', '2024-12-02 19:06:58'),
(69, 9, 31, '2024-12-02 19:07:07', '2024-12-02 19:07:07'),
(70, 11, 35, '2024-12-02 19:07:34', '2024-12-02 19:07:34'),
(75, 16, 39, '2024-12-02 19:09:06', '2024-12-02 19:09:06'),
(77, 19, 42, '2024-12-02 19:09:39', '2024-12-02 19:09:39'),
(78, 19, 41, '2024-12-02 19:09:39', '2024-12-02 19:09:39'),
(79, 20, 1, '2024-12-02 19:09:48', '2024-12-02 19:09:48'),
(80, 20, 44, '2024-12-02 19:09:48', '2024-12-02 19:09:48'),
(84, 22, 8, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(85, 22, 49, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(86, 22, 47, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(87, 22, 48, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(88, 22, 50, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(89, 23, 51, '2024-12-02 19:10:20', '2024-12-02 19:10:20'),
(90, 21, 45, '2024-12-05 12:32:10', '2024-12-05 12:32:10'),
(91, 21, 21, '2024-12-05 12:32:10', '2024-12-05 12:32:10'),
(92, 21, 46, '2024-12-05 12:32:10', '2024-12-05 12:32:10'),
(94, 24, 43, '2024-12-05 18:31:07', '2024-12-05 18:31:07'),
(100, 25, 33, '2024-12-05 18:39:17', '2024-12-05 18:39:17'),
(101, 25, 52, '2024-12-05 18:39:17', '2024-12-05 18:39:17'),
(102, 25, 54, '2024-12-05 18:39:17', '2024-12-05 18:39:17'),
(103, 25, 53, '2024-12-05 18:39:17', '2024-12-05 18:39:17'),
(106, 27, 55, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(107, 27, 56, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(112, 28, 3, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(113, 28, 19, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(114, 28, 58, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(115, 28, 57, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(116, 17, 40, '2024-12-06 16:32:21', '2024-12-06 16:32:21'),
(118, 29, 59, '2024-12-06 16:40:03', '2024-12-06 16:40:03'),
(122, 31, 51, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(123, 31, 60, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(124, 31, 45, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(127, 32, 61, '2024-12-06 17:12:32', '2024-12-06 17:12:32'),
(128, 32, 62, '2024-12-06 17:12:32', '2024-12-06 17:12:32'),
(131, 33, 36, '2024-12-06 17:21:38', '2024-12-06 17:21:38'),
(132, 33, 63, '2024-12-06 17:21:38', '2024-12-06 17:21:38'),
(138, 34, 1, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(139, 34, 64, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(140, 34, 66, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(141, 34, 65, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(144, 35, 9, '2024-12-06 17:37:18', '2024-12-06 17:37:18'),
(145, 35, 12, '2024-12-06 17:37:18', '2024-12-06 17:37:18'),
(156, 36, 67, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(157, 36, 68, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(158, 36, 65, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(159, 36, 27, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(160, 36, 69, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(161, 36, 12, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(162, 36, 70, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(163, 36, 61, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(164, 36, 71, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(165, 36, 50, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(168, 37, 72, '2024-12-06 17:51:33', '2024-12-06 17:51:33'),
(169, 37, 73, '2024-12-06 17:51:33', '2024-12-06 17:51:33'),
(173, 38, 74, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(174, 38, 64, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(175, 38, 75, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(177, 39, 76, '2024-12-06 18:05:05', '2024-12-06 18:05:05'),
(178, 15, 1, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(179, 15, 36, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(180, 15, 37, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(181, 15, 38, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(188, 41, 58, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(189, 41, 80, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(190, 41, 81, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(191, 41, 79, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(192, 41, 78, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(193, 41, 77, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(195, 42, 6, '2024-12-06 18:24:18', '2024-12-06 18:24:18'),
(198, 43, 5, '2024-12-06 18:29:22', '2024-12-06 18:29:22'),
(199, 43, 82, '2024-12-06 18:29:22', '2024-12-06 18:29:22'),
(201, 44, 16, '2024-12-06 18:33:36', '2024-12-06 18:33:36'),
(203, 45, 83, '2024-12-06 18:41:27', '2024-12-06 18:41:27'),
(206, 46, 84, '2024-12-06 18:49:06', '2024-12-06 18:49:06'),
(207, 46, 67, '2024-12-06 18:49:06', '2024-12-06 18:49:06'),
(211, 47, 85, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(212, 47, 4, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(213, 47, 5, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(216, 48, 29, '2024-12-06 19:05:41', '2024-12-06 19:05:41'),
(217, 48, 86, '2024-12-06 19:05:41', '2024-12-06 19:05:41'),
(219, 49, 44, '2024-12-06 19:09:59', '2024-12-06 19:09:59'),
(221, 50, 87, '2024-12-06 19:14:06', '2024-12-06 19:14:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `film_awards`
--

CREATE TABLE `film_awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `award_id` bigint(20) UNSIGNED NOT NULL,
  `number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `film_genres`
--

CREATE TABLE `film_genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `film_genres`
--

INSERT INTO `film_genres` (`id`, `film_id`, `genre_id`, `created_at`, `updated_at`) VALUES
(195, 1, 3, '2024-12-02 19:05:35', '2024-12-02 19:05:35'),
(196, 1, 19, '2024-12-02 19:05:35', '2024-12-02 19:05:35'),
(197, 1, 6, '2024-12-02 19:05:35', '2024-12-02 19:05:35'),
(198, 1, 8, '2024-12-02 19:05:35', '2024-12-02 19:05:35'),
(199, 1, 4, '2024-12-02 19:05:35', '2024-12-02 19:05:35'),
(200, 1, 5, '2024-12-02 19:05:35', '2024-12-02 19:05:35'),
(201, 1, 29, '2024-12-02 19:05:35', '2024-12-02 19:05:35'),
(202, 1, 18, '2024-12-02 19:05:35', '2024-12-02 19:05:35'),
(203, 1, 24, '2024-12-02 19:05:35', '2024-12-02 19:05:35'),
(204, 2, 3, '2024-12-02 19:05:52', '2024-12-02 19:05:52'),
(205, 2, 17, '2024-12-02 19:05:52', '2024-12-02 19:05:52'),
(206, 2, 26, '2024-12-02 19:05:52', '2024-12-02 19:05:52'),
(207, 2, 5, '2024-12-02 19:05:52', '2024-12-02 19:05:52'),
(208, 2, 18, '2024-12-02 19:05:52', '2024-12-02 19:05:52'),
(209, 2, 24, '2024-12-02 19:05:52', '2024-12-02 19:05:52'),
(210, 3, 3, '2024-12-02 19:06:11', '2024-12-02 19:06:11'),
(211, 3, 4, '2024-12-02 19:06:11', '2024-12-02 19:06:11'),
(212, 3, 20, '2024-12-02 19:06:11', '2024-12-02 19:06:11'),
(213, 3, 18, '2024-12-02 19:06:11', '2024-12-02 19:06:11'),
(214, 3, 24, '2024-12-02 19:06:11', '2024-12-02 19:06:11'),
(215, 4, 3, '2024-12-02 19:06:19', '2024-12-02 19:06:19'),
(216, 4, 4, '2024-12-02 19:06:19', '2024-12-02 19:06:19'),
(217, 4, 5, '2024-12-02 19:06:19', '2024-12-02 19:06:19'),
(218, 4, 29, '2024-12-02 19:06:19', '2024-12-02 19:06:19'),
(219, 4, 28, '2024-12-02 19:06:19', '2024-12-02 19:06:19'),
(220, 4, 24, '2024-12-02 19:06:19', '2024-12-02 19:06:19'),
(221, 5, 3, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(222, 5, 6, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(223, 5, 11, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(224, 5, 10, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(225, 5, 20, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(226, 5, 28, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(227, 5, 24, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(228, 6, 2, '2024-12-02 19:06:39', '2024-12-02 19:06:39'),
(229, 6, 11, '2024-12-02 19:06:39', '2024-12-02 19:06:39'),
(230, 6, 6, '2024-12-02 19:06:39', '2024-12-02 19:06:39'),
(231, 6, 31, '2024-12-02 19:06:39', '2024-12-02 19:06:39'),
(232, 6, 10, '2024-12-02 19:06:39', '2024-12-02 19:06:39'),
(233, 6, 28, '2024-12-02 19:06:39', '2024-12-02 19:06:39'),
(234, 6, 24, '2024-12-02 19:06:39', '2024-12-02 19:06:39'),
(235, 7, 2, '2024-12-02 19:06:47', '2024-12-02 19:06:47'),
(236, 7, 5, '2024-12-02 19:06:47', '2024-12-02 19:06:47'),
(237, 7, 19, '2024-12-02 19:06:47', '2024-12-02 19:06:47'),
(238, 7, 4, '2024-12-02 19:06:47', '2024-12-02 19:06:47'),
(239, 7, 18, '2024-12-02 19:06:47', '2024-12-02 19:06:47'),
(240, 7, 24, '2024-12-02 19:06:47', '2024-12-02 19:06:47'),
(241, 8, 1, '2024-12-02 19:06:58', '2024-12-02 19:06:58'),
(242, 8, 11, '2024-12-02 19:06:58', '2024-12-02 19:06:58'),
(243, 8, 31, '2024-12-02 19:06:58', '2024-12-02 19:06:58'),
(244, 8, 7, '2024-12-02 19:06:58', '2024-12-02 19:06:58'),
(245, 8, 28, '2024-12-02 19:06:58', '2024-12-02 19:06:58'),
(246, 8, 24, '2024-12-02 19:06:58', '2024-12-02 19:06:58'),
(247, 9, 1, '2024-12-02 19:07:07', '2024-12-02 19:07:07'),
(248, 9, 4, '2024-12-02 19:07:07', '2024-12-02 19:07:07'),
(249, 9, 6, '2024-12-02 19:07:07', '2024-12-02 19:07:07'),
(250, 9, 13, '2024-12-02 19:07:07', '2024-12-02 19:07:07'),
(251, 9, 27, '2024-12-02 19:07:07', '2024-12-02 19:07:07'),
(252, 9, 18, '2024-12-02 19:07:07', '2024-12-02 19:07:07'),
(253, 9, 24, '2024-12-02 19:07:07', '2024-12-02 19:07:07'),
(254, 10, 1, '2024-12-02 19:07:24', '2024-12-02 19:07:24'),
(255, 10, 4, '2024-12-02 19:07:24', '2024-12-02 19:07:24'),
(256, 10, 9, '2024-12-02 19:07:24', '2024-12-02 19:07:24'),
(257, 10, 28, '2024-12-02 19:07:24', '2024-12-02 19:07:24'),
(258, 10, 24, '2024-12-02 19:07:24', '2024-12-02 19:07:24'),
(259, 11, 1, '2024-12-02 19:07:34', '2024-12-02 19:07:34'),
(260, 11, 5, '2024-12-02 19:07:34', '2024-12-02 19:07:34'),
(261, 11, 10, '2024-12-02 19:07:34', '2024-12-02 19:07:34'),
(262, 11, 18, '2024-12-02 19:07:34', '2024-12-02 19:07:34'),
(263, 11, 24, '2024-12-02 19:07:34', '2024-12-02 19:07:34'),
(264, 12, 2, '2024-12-02 19:07:53', '2024-12-02 19:07:53'),
(265, 12, 7, '2024-12-02 19:07:53', '2024-12-02 19:07:53'),
(266, 12, 8, '2024-12-02 19:07:53', '2024-12-02 19:07:53'),
(267, 12, 10, '2024-12-02 19:07:53', '2024-12-02 19:07:53'),
(268, 12, 18, '2024-12-02 19:07:53', '2024-12-02 19:07:53'),
(269, 12, 24, '2024-12-02 19:07:53', '2024-12-02 19:07:53'),
(270, 13, 2, '2024-12-02 19:08:05', '2024-12-02 19:08:05'),
(271, 13, 9, '2024-12-02 19:08:05', '2024-12-02 19:08:05'),
(272, 13, 8, '2024-12-02 19:08:05', '2024-12-02 19:08:05'),
(273, 13, 10, '2024-12-02 19:08:05', '2024-12-02 19:08:05'),
(274, 13, 18, '2024-12-02 19:08:05', '2024-12-02 19:08:05'),
(275, 13, 22, '2024-12-02 19:08:05', '2024-12-02 19:08:05'),
(276, 14, 3, '2024-12-02 19:08:16', '2024-12-02 19:08:16'),
(277, 14, 11, '2024-12-02 19:08:16', '2024-12-02 19:08:16'),
(278, 14, 20, '2024-12-02 19:08:16', '2024-12-02 19:08:16'),
(279, 14, 31, '2024-12-02 19:08:16', '2024-12-02 19:08:16'),
(280, 14, 28, '2024-12-02 19:08:16', '2024-12-02 19:08:16'),
(281, 14, 24, '2024-12-02 19:08:16', '2024-12-02 19:08:16'),
(289, 16, 3, '2024-12-02 19:09:06', '2024-12-02 19:09:06'),
(290, 16, 12, '2024-12-02 19:09:06', '2024-12-02 19:09:06'),
(291, 16, 7, '2024-12-02 19:09:06', '2024-12-02 19:09:06'),
(292, 16, 6, '2024-12-02 19:09:06', '2024-12-02 19:09:06'),
(293, 16, 18, '2024-12-02 19:09:06', '2024-12-02 19:09:06'),
(294, 16, 24, '2024-12-02 19:09:06', '2024-12-02 19:09:06'),
(301, 18, 3, '2024-12-02 19:09:28', '2024-12-02 19:09:28'),
(302, 18, 7, '2024-12-02 19:09:28', '2024-12-02 19:09:28'),
(303, 18, 8, '2024-12-02 19:09:28', '2024-12-02 19:09:28'),
(304, 18, 9, '2024-12-02 19:09:28', '2024-12-02 19:09:28'),
(305, 18, 18, '2024-12-02 19:09:28', '2024-12-02 19:09:28'),
(306, 18, 24, '2024-12-02 19:09:28', '2024-12-02 19:09:28'),
(307, 19, 3, '2024-12-02 19:09:39', '2024-12-02 19:09:39'),
(308, 19, 12, '2024-12-02 19:09:39', '2024-12-02 19:09:39'),
(309, 19, 31, '2024-12-02 19:09:39', '2024-12-02 19:09:39'),
(310, 19, 11, '2024-12-02 19:09:39', '2024-12-02 19:09:39'),
(311, 19, 18, '2024-12-02 19:09:39', '2024-12-02 19:09:39'),
(312, 19, 24, '2024-12-02 19:09:39', '2024-12-02 19:09:39'),
(313, 20, 3, '2024-12-02 19:09:48', '2024-12-02 19:09:48'),
(314, 20, 4, '2024-12-02 19:09:48', '2024-12-02 19:09:48'),
(315, 20, 11, '2024-12-02 19:09:48', '2024-12-02 19:09:48'),
(316, 20, 20, '2024-12-02 19:09:48', '2024-12-02 19:09:48'),
(317, 20, 6, '2024-12-02 19:09:48', '2024-12-02 19:09:48'),
(318, 20, 28, '2024-12-02 19:09:48', '2024-12-02 19:09:48'),
(319, 20, 24, '2024-12-02 19:09:48', '2024-12-02 19:09:48'),
(326, 22, 3, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(327, 22, 20, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(328, 22, 11, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(329, 22, 4, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(330, 22, 28, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(331, 22, 24, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(332, 23, 3, '2024-12-02 19:10:20', '2024-12-02 19:10:20'),
(333, 23, 7, '2024-12-02 19:10:20', '2024-12-02 19:10:20'),
(334, 23, 12, '2024-12-02 19:10:20', '2024-12-02 19:10:20'),
(335, 23, 6, '2024-12-02 19:10:20', '2024-12-02 19:10:20'),
(336, 23, 9, '2024-12-02 19:10:20', '2024-12-02 19:10:20'),
(337, 23, 18, '2024-12-02 19:10:20', '2024-12-02 19:10:20'),
(338, 23, 25, '2024-12-02 19:10:20', '2024-12-02 19:10:20'),
(339, 21, 3, '2024-12-05 12:32:10', '2024-12-05 12:32:10'),
(340, 21, 17, '2024-12-05 12:32:10', '2024-12-05 12:32:10'),
(341, 21, 7, '2024-12-05 12:32:10', '2024-12-05 12:32:10'),
(342, 21, 5, '2024-12-05 12:32:10', '2024-12-05 12:32:10'),
(343, 21, 10, '2024-12-05 12:32:10', '2024-12-05 12:32:10'),
(344, 21, 28, '2024-12-05 12:32:10', '2024-12-05 12:32:10'),
(345, 21, 24, '2024-12-05 12:32:10', '2024-12-05 12:32:10'),
(351, 24, 3, '2024-12-05 18:31:07', '2024-12-05 18:31:07'),
(352, 24, 31, '2024-12-05 18:31:07', '2024-12-05 18:31:07'),
(353, 24, 5, '2024-12-05 18:31:07', '2024-12-05 18:31:07'),
(354, 24, 18, '2024-12-05 18:31:07', '2024-12-05 18:31:07'),
(355, 24, 24, '2024-12-05 18:31:07', '2024-12-05 18:31:07'),
(368, 25, 3, '2024-12-05 18:39:16', '2024-12-05 18:39:16'),
(369, 25, 11, '2024-12-05 18:39:16', '2024-12-05 18:39:16'),
(370, 25, 20, '2024-12-05 18:39:16', '2024-12-05 18:39:16'),
(371, 25, 16, '2024-12-05 18:39:17', '2024-12-05 18:39:17'),
(372, 25, 18, '2024-12-05 18:39:17', '2024-12-05 18:39:17'),
(373, 25, 24, '2024-12-05 18:39:17', '2024-12-05 18:39:17'),
(380, 26, 3, '2024-12-06 16:17:44', '2024-12-06 16:17:44'),
(381, 26, 12, '2024-12-06 16:17:44', '2024-12-06 16:17:44'),
(382, 26, 11, '2024-12-06 16:17:44', '2024-12-06 16:17:44'),
(383, 26, 8, '2024-12-06 16:17:44', '2024-12-06 16:17:44'),
(384, 26, 18, '2024-12-06 16:17:44', '2024-12-06 16:17:44'),
(385, 26, 24, '2024-12-06 16:17:44', '2024-12-06 16:17:44'),
(393, 27, 3, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(394, 27, 6, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(395, 27, 5, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(396, 27, 8, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(397, 27, 29, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(398, 27, 18, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(399, 27, 21, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(407, 28, 3, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(408, 28, 4, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(409, 28, 5, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(410, 28, 11, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(411, 28, 29, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(412, 28, 18, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(413, 28, 24, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(414, 17, 3, '2024-12-06 16:32:21', '2024-12-06 16:32:21'),
(415, 17, 6, '2024-12-06 16:32:21', '2024-12-06 16:32:21'),
(416, 17, 30, '2024-12-06 16:32:21', '2024-12-06 16:32:21'),
(417, 17, 5, '2024-12-06 16:32:21', '2024-12-06 16:32:21'),
(418, 17, 27, '2024-12-06 16:32:21', '2024-12-06 16:32:21'),
(419, 17, 18, '2024-12-06 16:32:21', '2024-12-06 16:32:21'),
(420, 17, 24, '2024-12-06 16:32:21', '2024-12-06 16:32:21'),
(428, 29, 3, '2024-12-06 16:40:03', '2024-12-06 16:40:03'),
(429, 29, 7, '2024-12-06 16:40:03', '2024-12-06 16:40:03'),
(430, 29, 6, '2024-12-06 16:40:03', '2024-12-06 16:40:03'),
(431, 29, 11, '2024-12-06 16:40:03', '2024-12-06 16:40:03'),
(432, 29, 27, '2024-12-06 16:40:03', '2024-12-06 16:40:03'),
(433, 29, 18, '2024-12-06 16:40:03', '2024-12-06 16:40:03'),
(434, 29, 24, '2024-12-06 16:40:03', '2024-12-06 16:40:03'),
(442, 30, 3, '2024-12-06 16:54:01', '2024-12-06 16:54:01'),
(443, 30, 7, '2024-12-06 16:54:01', '2024-12-06 16:54:01'),
(444, 30, 8, '2024-12-06 16:54:01', '2024-12-06 16:54:01'),
(445, 30, 10, '2024-12-06 16:54:01', '2024-12-06 16:54:01'),
(446, 30, 11, '2024-12-06 16:54:01', '2024-12-06 16:54:01'),
(447, 30, 28, '2024-12-06 16:54:01', '2024-12-06 16:54:01'),
(448, 30, 24, '2024-12-06 16:54:01', '2024-12-06 16:54:01'),
(458, 31, 3, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(459, 31, 7, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(460, 31, 9, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(461, 31, 6, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(462, 31, 8, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(463, 31, 29, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(464, 31, 27, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(465, 31, 18, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(466, 31, 25, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(473, 32, 3, '2024-12-06 17:12:32', '2024-12-06 17:12:32'),
(474, 32, 8, '2024-12-06 17:12:32', '2024-12-06 17:12:32'),
(475, 32, 7, '2024-12-06 17:12:32', '2024-12-06 17:12:32'),
(476, 32, 11, '2024-12-06 17:12:32', '2024-12-06 17:12:32'),
(477, 32, 18, '2024-12-06 17:12:32', '2024-12-06 17:12:32'),
(478, 32, 24, '2024-12-06 17:12:32', '2024-12-06 17:12:32'),
(485, 33, 3, '2024-12-06 17:21:38', '2024-12-06 17:21:38'),
(486, 33, 5, '2024-12-06 17:21:38', '2024-12-06 17:21:38'),
(487, 33, 20, '2024-12-06 17:21:38', '2024-12-06 17:21:38'),
(488, 33, 11, '2024-12-06 17:21:38', '2024-12-06 17:21:38'),
(489, 33, 18, '2024-12-06 17:21:38', '2024-12-06 17:21:38'),
(490, 33, 24, '2024-12-06 17:21:38', '2024-12-06 17:21:38'),
(507, 34, 3, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(508, 34, 17, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(509, 34, 9, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(510, 34, 5, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(511, 34, 10, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(512, 34, 29, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(513, 34, 18, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(514, 34, 24, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(521, 35, 3, '2024-12-06 17:37:18', '2024-12-06 17:37:18'),
(522, 35, 11, '2024-12-06 17:37:18', '2024-12-06 17:37:18'),
(523, 35, 4, '2024-12-06 17:37:18', '2024-12-06 17:37:18'),
(524, 35, 12, '2024-12-06 17:37:18', '2024-12-06 17:37:18'),
(525, 35, 18, '2024-12-06 17:37:18', '2024-12-06 17:37:18'),
(526, 35, 24, '2024-12-06 17:37:18', '2024-12-06 17:37:18'),
(532, 36, 3, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(533, 36, 4, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(534, 36, 8, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(535, 36, 18, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(536, 36, 24, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(545, 37, 3, '2024-12-06 17:51:33', '2024-12-06 17:51:33'),
(546, 37, 20, '2024-12-06 17:51:33', '2024-12-06 17:51:33'),
(547, 37, 11, '2024-12-06 17:51:33', '2024-12-06 17:51:33'),
(548, 37, 12, '2024-12-06 17:51:33', '2024-12-06 17:51:33'),
(549, 37, 13, '2024-12-06 17:51:33', '2024-12-06 17:51:33'),
(550, 37, 31, '2024-12-06 17:51:33', '2024-12-06 17:51:33'),
(551, 37, 18, '2024-12-06 17:51:33', '2024-12-06 17:51:33'),
(552, 37, 24, '2024-12-06 17:51:33', '2024-12-06 17:51:33'),
(562, 38, 3, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(563, 38, 9, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(564, 38, 8, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(565, 38, 6, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(566, 38, 5, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(567, 38, 29, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(568, 38, 27, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(569, 38, 18, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(570, 38, 32, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(579, 39, 3, '2024-12-06 18:05:05', '2024-12-06 18:05:05'),
(580, 39, 17, '2024-12-06 18:05:05', '2024-12-06 18:05:05'),
(581, 39, 10, '2024-12-06 18:05:05', '2024-12-06 18:05:05'),
(582, 39, 5, '2024-12-06 18:05:05', '2024-12-06 18:05:05'),
(583, 39, 4, '2024-12-06 18:05:05', '2024-12-06 18:05:05'),
(584, 39, 27, '2024-12-06 18:05:05', '2024-12-06 18:05:05'),
(585, 39, 18, '2024-12-06 18:05:05', '2024-12-06 18:05:05'),
(586, 39, 24, '2024-12-06 18:05:05', '2024-12-06 18:05:05'),
(587, 40, 2, '2024-12-06 18:11:08', '2024-12-06 18:11:08'),
(588, 40, 11, '2024-12-06 18:11:08', '2024-12-06 18:11:08'),
(589, 40, 20, '2024-12-06 18:11:08', '2024-12-06 18:11:08'),
(590, 40, 28, '2024-12-06 18:11:08', '2024-12-06 18:11:08'),
(591, 40, 24, '2024-12-06 18:11:08', '2024-12-06 18:11:08'),
(592, 15, 3, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(593, 15, 11, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(594, 15, 13, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(595, 15, 31, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(596, 15, 20, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(597, 15, 18, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(598, 15, 24, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(607, 41, 3, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(608, 41, 7, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(609, 41, 5, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(610, 41, 8, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(611, 41, 10, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(612, 41, 29, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(613, 41, 18, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(614, 41, 25, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(621, 42, 3, '2024-12-06 18:24:18', '2024-12-06 18:24:18'),
(622, 42, 4, '2024-12-06 18:24:18', '2024-12-06 18:24:18'),
(623, 42, 17, '2024-12-06 18:24:18', '2024-12-06 18:24:18'),
(624, 42, 5, '2024-12-06 18:24:18', '2024-12-06 18:24:18'),
(625, 42, 18, '2024-12-06 18:24:18', '2024-12-06 18:24:18'),
(626, 42, 24, '2024-12-06 18:24:18', '2024-12-06 18:24:18'),
(633, 43, 3, '2024-12-06 18:29:22', '2024-12-06 18:29:22'),
(634, 43, 11, '2024-12-06 18:29:22', '2024-12-06 18:29:22'),
(635, 43, 20, '2024-12-06 18:29:22', '2024-12-06 18:29:22'),
(636, 43, 12, '2024-12-06 18:29:22', '2024-12-06 18:29:22'),
(637, 43, 18, '2024-12-06 18:29:22', '2024-12-06 18:29:22'),
(638, 43, 24, '2024-12-06 18:29:22', '2024-12-06 18:29:22'),
(646, 44, 3, '2024-12-06 18:33:36', '2024-12-06 18:33:36'),
(647, 44, 7, '2024-12-06 18:33:36', '2024-12-06 18:33:36'),
(648, 44, 6, '2024-12-06 18:33:36', '2024-12-06 18:33:36'),
(649, 44, 10, '2024-12-06 18:33:36', '2024-12-06 18:33:36'),
(650, 44, 13, '2024-12-06 18:33:36', '2024-12-06 18:33:36'),
(651, 44, 18, '2024-12-06 18:33:36', '2024-12-06 18:33:36'),
(652, 44, 25, '2024-12-06 18:33:36', '2024-12-06 18:33:36'),
(659, 45, 3, '2024-12-06 18:41:27', '2024-12-06 18:41:27'),
(660, 45, 4, '2024-12-06 18:41:27', '2024-12-06 18:41:27'),
(661, 45, 31, '2024-12-06 18:41:27', '2024-12-06 18:41:27'),
(662, 45, 8, '2024-12-06 18:41:27', '2024-12-06 18:41:27'),
(663, 45, 18, '2024-12-06 18:41:27', '2024-12-06 18:41:27'),
(664, 45, 24, '2024-12-06 18:41:27', '2024-12-06 18:41:27'),
(671, 46, 3, '2024-12-06 18:49:06', '2024-12-06 18:49:06'),
(672, 46, 5, '2024-12-06 18:49:06', '2024-12-06 18:49:06'),
(673, 46, 19, '2024-12-06 18:49:06', '2024-12-06 18:49:06'),
(674, 46, 29, '2024-12-06 18:49:06', '2024-12-06 18:49:06'),
(675, 46, 18, '2024-12-06 18:49:06', '2024-12-06 18:49:06'),
(676, 46, 24, '2024-12-06 18:49:06', '2024-12-06 18:49:06'),
(684, 47, 3, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(685, 47, 20, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(686, 47, 5, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(687, 47, 29, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(688, 47, 27, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(689, 47, 18, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(690, 47, 24, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(696, 48, 3, '2024-12-06 19:05:41', '2024-12-06 19:05:41'),
(697, 48, 11, '2024-12-06 19:05:41', '2024-12-06 19:05:41'),
(698, 48, 5, '2024-12-06 19:05:41', '2024-12-06 19:05:41'),
(699, 48, 28, '2024-12-06 19:05:41', '2024-12-06 19:05:41'),
(700, 48, 24, '2024-12-06 19:05:41', '2024-12-06 19:05:41'),
(708, 49, 3, '2024-12-06 19:09:59', '2024-12-06 19:09:59'),
(709, 49, 6, '2024-12-06 19:09:59', '2024-12-06 19:09:59'),
(710, 49, 11, '2024-12-06 19:09:59', '2024-12-06 19:09:59'),
(711, 49, 4, '2024-12-06 19:09:59', '2024-12-06 19:09:59'),
(712, 49, 20, '2024-12-06 19:09:59', '2024-12-06 19:09:59'),
(713, 49, 28, '2024-12-06 19:09:59', '2024-12-06 19:09:59'),
(714, 49, 24, '2024-12-06 19:09:59', '2024-12-06 19:09:59'),
(721, 50, 3, '2024-12-06 19:14:06', '2024-12-06 19:14:06'),
(722, 50, 11, '2024-12-06 19:14:06', '2024-12-06 19:14:06'),
(723, 50, 12, '2024-12-06 19:14:06', '2024-12-06 19:14:06'),
(724, 50, 5, '2024-12-06 19:14:06', '2024-12-06 19:14:06'),
(725, 50, 28, '2024-12-06 19:14:06', '2024-12-06 19:14:06'),
(726, 50, 24, '2024-12-06 19:14:06', '2024-12-06 19:14:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `film_platforms`
--

CREATE TABLE `film_platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `platform_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `film_platforms`
--

INSERT INTO `film_platforms` (`id`, `film_id`, `platform_id`, `created_at`, `updated_at`) VALUES
(44, 1, 4, '2024-12-02 19:05:35', '2024-12-02 19:05:35'),
(45, 2, 4, '2024-12-02 19:05:52', '2024-12-02 19:05:52'),
(46, 2, 10, '2024-12-02 19:05:52', '2024-12-02 19:05:52'),
(47, 2, 9, '2024-12-02 19:05:52', '2024-12-02 19:05:52'),
(48, 3, 7, '2024-12-02 19:06:11', '2024-12-02 19:06:11'),
(49, 4, 3, '2024-12-02 19:06:19', '2024-12-02 19:06:19'),
(50, 4, 9, '2024-12-02 19:06:19', '2024-12-02 19:06:19'),
(51, 5, 5, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(52, 5, 9, '2024-12-02 19:06:29', '2024-12-02 19:06:29'),
(53, 6, 9, '2024-12-02 19:06:39', '2024-12-02 19:06:39'),
(54, 8, 3, '2024-12-02 19:06:58', '2024-12-02 19:06:58'),
(55, 8, 4, '2024-12-02 19:06:58', '2024-12-02 19:06:58'),
(56, 9, 3, '2024-12-02 19:07:07', '2024-12-02 19:07:07'),
(57, 10, 3, '2024-12-02 19:07:24', '2024-12-02 19:07:24'),
(58, 10, 4, '2024-12-02 19:07:24', '2024-12-02 19:07:24'),
(59, 11, 3, '2024-12-02 19:07:34', '2024-12-02 19:07:34'),
(60, 11, 9, '2024-12-02 19:07:34', '2024-12-02 19:07:34'),
(61, 12, 7, '2024-12-02 19:07:53', '2024-12-02 19:07:53'),
(62, 13, 4, '2024-12-02 19:08:05', '2024-12-02 19:08:05'),
(63, 14, 9, '2024-12-02 19:08:16', '2024-12-02 19:08:16'),
(67, 16, 9, '2024-12-02 19:09:06', '2024-12-02 19:09:06'),
(69, 18, 4, '2024-12-02 19:09:28', '2024-12-02 19:09:28'),
(70, 18, 9, '2024-12-02 19:09:28', '2024-12-02 19:09:28'),
(71, 19, 6, '2024-12-02 19:09:39', '2024-12-02 19:09:39'),
(72, 19, 9, '2024-12-02 19:09:39', '2024-12-02 19:09:39'),
(73, 20, 9, '2024-12-02 19:09:48', '2024-12-02 19:09:48'),
(75, 22, 3, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(76, 22, 6, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(77, 22, 9, '2024-12-02 19:10:12', '2024-12-02 19:10:12'),
(78, 23, 5, '2024-12-02 19:10:20', '2024-12-02 19:10:20'),
(79, 21, 3, '2024-12-05 12:32:10', '2024-12-05 12:32:10'),
(83, 24, 4, '2024-12-05 18:31:07', '2024-12-05 18:31:07'),
(84, 24, 9, '2024-12-05 18:31:07', '2024-12-05 18:31:07'),
(85, 24, 11, '2024-12-05 18:31:07', '2024-12-05 18:31:07'),
(88, 26, 7, '2024-12-06 16:17:44', '2024-12-06 16:17:44'),
(89, 26, 9, '2024-12-06 16:17:44', '2024-12-06 16:17:44'),
(94, 27, 4, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(95, 27, 7, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(96, 27, 12, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(97, 27, 9, '2024-12-06 16:22:48', '2024-12-06 16:22:48'),
(100, 28, 3, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(101, 28, 4, '2024-12-06 16:30:57', '2024-12-06 16:30:57'),
(102, 17, 9, '2024-12-06 16:32:21', '2024-12-06 16:32:21'),
(106, 29, 4, '2024-12-06 16:40:03', '2024-12-06 16:40:03'),
(107, 29, 7, '2024-12-06 16:40:03', '2024-12-06 16:40:03'),
(108, 29, 10, '2024-12-06 16:40:03', '2024-12-06 16:40:03'),
(111, 30, 6, '2024-12-06 16:54:01', '2024-12-06 16:54:01'),
(112, 30, 9, '2024-12-06 16:54:01', '2024-12-06 16:54:01'),
(114, 31, 5, '2024-12-06 17:07:50', '2024-12-06 17:07:50'),
(117, 32, 4, '2024-12-06 17:12:32', '2024-12-06 17:12:32'),
(118, 32, 9, '2024-12-06 17:12:32', '2024-12-06 17:12:32'),
(123, 33, 3, '2024-12-06 17:21:38', '2024-12-06 17:21:38'),
(124, 33, 6, '2024-12-06 17:21:38', '2024-12-06 17:21:38'),
(125, 33, 7, '2024-12-06 17:21:38', '2024-12-06 17:21:38'),
(126, 33, 9, '2024-12-06 17:21:38', '2024-12-06 17:21:38'),
(135, 34, 3, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(136, 34, 4, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(137, 34, 6, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(138, 34, 9, '2024-12-06 17:31:54', '2024-12-06 17:31:54'),
(140, 35, 3, '2024-12-06 17:37:18', '2024-12-06 17:37:18'),
(142, 36, 5, '2024-12-06 17:47:15', '2024-12-06 17:47:15'),
(144, 37, 7, '2024-12-06 17:51:33', '2024-12-06 17:51:33'),
(148, 38, 4, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(149, 38, 6, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(150, 38, 9, '2024-12-06 17:58:07', '2024-12-06 17:58:07'),
(153, 39, 7, '2024-12-06 18:05:05', '2024-12-06 18:05:05'),
(154, 39, 9, '2024-12-06 18:05:05', '2024-12-06 18:05:05'),
(155, 15, 3, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(156, 15, 7, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(157, 15, 9, '2024-12-06 18:11:23', '2024-12-06 18:11:23'),
(162, 41, 3, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(163, 41, 4, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(164, 41, 6, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(165, 41, 9, '2024-12-06 18:19:17', '2024-12-06 18:19:17'),
(167, 42, 12, '2024-12-06 18:24:18', '2024-12-06 18:24:18'),
(169, 43, 7, '2024-12-06 18:29:22', '2024-12-06 18:29:22'),
(172, 44, 6, '2024-12-06 18:33:36', '2024-12-06 18:33:36'),
(173, 44, 9, '2024-12-06 18:33:36', '2024-12-06 18:33:36'),
(177, 45, 3, '2024-12-06 18:41:27', '2024-12-06 18:41:27'),
(178, 45, 6, '2024-12-06 18:41:27', '2024-12-06 18:41:27'),
(179, 45, 9, '2024-12-06 18:41:27', '2024-12-06 18:41:27'),
(181, 46, 7, '2024-12-06 18:49:06', '2024-12-06 18:49:06'),
(187, 47, 3, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(188, 47, 6, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(189, 47, 9, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(190, 47, 10, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(191, 47, 12, '2024-12-06 18:55:36', '2024-12-06 18:55:36'),
(194, 49, 4, '2024-12-06 19:09:59', '2024-12-06 19:09:59'),
(195, 49, 9, '2024-12-06 19:09:59', '2024-12-06 19:09:59'),
(197, 50, 5, '2024-12-06 19:14:06', '2024-12-06 19:14:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `film_users`
--

CREATE TABLE `film_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `film_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pinned',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `film_users`
--

INSERT INTO `film_users` (`id`, `film_id`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(98, 23, 1, 'dontshow', '2024-12-05 20:02:43', '2024-12-06 17:29:10'),
(100, 12, 3, 'pinned', '2024-12-06 00:41:41', '2024-12-06 00:41:41'),
(102, 6, 1, 'pinned', '2024-12-06 17:29:16', '2024-12-06 17:29:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genres`
--

CREATE TABLE `genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `genres`
--

INSERT INTO `genres` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Español', '2024-11-27 11:49:39', '2024-11-27 11:49:50'),
(2, 'Internacional', '2024-11-27 11:50:02', '2024-11-27 11:50:02'),
(3, 'Hollywood', '2024-11-27 11:50:10', '2024-11-27 11:50:10'),
(4, 'Comedia', '2024-11-27 11:50:16', '2024-11-27 11:50:16'),
(5, 'Drama', '2024-11-27 11:50:21', '2024-11-27 11:50:21'),
(6, 'Acción', '2024-11-27 11:50:27', '2024-11-27 11:50:27'),
(7, 'Ciencia Ficción', '2024-11-27 11:50:37', '2024-11-27 11:50:37'),
(8, 'Aventuras', '2024-11-27 11:51:40', '2024-11-27 11:51:40'),
(9, 'Fantasía', '2024-11-27 11:51:49', '2024-11-27 11:51:49'),
(10, 'Filosófico', '2024-11-27 11:52:04', '2024-11-27 11:52:04'),
(11, 'Thriller', '2024-11-27 11:52:52', '2024-11-27 11:52:52'),
(12, 'Terror', '2024-11-27 11:52:57', '2024-11-27 11:52:57'),
(13, 'Policiaco', '2024-11-27 11:53:14', '2024-11-27 11:53:14'),
(14, 'Animación', '2024-11-27 11:53:22', '2024-11-27 11:53:22'),
(15, 'Superhéroes', '2024-11-27 11:55:50', '2024-11-27 11:55:50'),
(16, 'Western', '2024-11-27 11:55:58', '2024-11-27 11:55:58'),
(17, 'Romántico', '2024-11-27 11:57:13', '2024-11-27 11:57:13'),
(18, 'Clásico', '2024-11-27 11:57:40', '2024-11-27 11:57:40'),
(19, 'Bélico', '2024-11-27 11:59:49', '2024-11-27 11:59:49'),
(20, 'Crimen', '2024-11-27 12:00:26', '2024-11-27 12:00:49'),
(21, 'Antiguo', '2024-11-27 12:05:57', '2024-11-27 12:05:57'),
(22, 'Medieval', '2024-11-27 12:06:10', '2024-11-27 12:06:10'),
(23, 'Moderno', '2024-11-27 12:07:02', '2024-11-27 12:07:02'),
(24, 'Contemporáneo', '2024-11-27 12:07:21', '2024-11-27 12:07:21'),
(25, 'Futurista', '2024-11-27 12:07:43', '2024-11-27 12:07:43'),
(26, 'Musical', '2024-11-27 18:33:40', '2024-11-27 18:33:40'),
(27, 'Saga', '2024-11-28 23:53:58', '2024-11-28 23:54:08'),
(28, 'Experimental', '2024-12-01 14:58:04', '2024-12-01 14:58:04'),
(29, '2h30m o más', '2024-12-01 16:32:32', '2024-12-02 16:09:33'),
(30, 'Deportes', '2024-12-01 17:49:14', '2024-12-01 17:49:14'),
(31, 'Misterio', '2024-12-01 18:34:45', '2024-12-01 18:34:45'),
(32, 'Atemporal', '2024-12-03 02:15:06', '2024-12-03 02:15:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000001_create_cache_table', 1),
(2, '0001_01_01_000002_create_jobs_table', 1),
(3, '2024_05_30_181546_create_directors_table', 1),
(4, '2024_06_01_175610_create_films_table', 1),
(5, '2024_06_01_182140_create_actors_table', 1),
(6, '2024_06_01_182855_create_genres_table', 1),
(7, '2024_06_01_182948_create_films_genres_table', 1),
(8, '2024_06_01_183506_create_films_actors_table', 1),
(9, '2024_06_01_184714_create_avatars_table', 1),
(10, '2024_06_02_153304_create_suscriptions_table', 1),
(11, '2024_06_02_211843_create_awards_table', 1),
(12, '2024_06_02_212814_create_directors_awards_table', 1),
(13, '2024_06_02_212829_create_actors_awards_table', 1),
(14, '2024_06_02_222254_create_films_awards_table', 1),
(15, '2024_06_03_192159_create_platforms_table', 1),
(16, '2024_06_03_192241_create_films_platforms_table', 1),
(17, '2025_01_01_000000_create_users_table', 1),
(18, '2025_06_01_183603_create_comments_table', 1),
(19, '2025_06_03_193414_create_films_users_table', 1),
(20, '2025_06_05_190334_create_users_genres_table', 1),
(21, '2025_06_05_213034_create_users_directors_table', 1),
(22, '2025_06_05_213046_create_users_actors_table', 1),
(23, '2025_06_05_213152_create_users_no_films_table', 1),
(24, '2025_06_06_181259_create_users_platforms_table', 1),
(25, '2024_11_02_211843_create_awards_table', 2),
(26, '2024_11_02_212814_create_directors_awards_table', 2),
(27, '2024_11_02_212829_create_actors_awards_table', 2),
(28, '2024_11_02_222254_create_films_awards_table', 2),
(29, '2025_06_01_175610_create_films_table', 3),
(30, '2025_06_01_182948_create_films_genres_table', 3),
(31, '2025_06_01_183506_create_films_actors_table', 3),
(32, '2025_06_03_192241_create_films_platforms_table', 3),
(33, '2025_11_02_222254_create_films_awards_table', 3),
(34, '2025_09_05_213152_create_users_no_films_table', 4),
(35, '2025_10_01_183603_create_comments_table', 4),
(36, '2025_10_03_193414_create_films_users_table', 4),
(37, '2025_11_03_193414_create_films_users_table', 5),
(38, '2025_11_05_193414_create_films_users_table', 6),
(39, '2025_07_05_213034_create_users_directors_table', 7),
(40, '2025_07_05_213046_create_users_actors_table', 7),
(41, '2025_11_30_034417_create_film_genres', 8),
(42, '2025_11_30_034828_create_film_actors', 9),
(43, '2025_11_30_034911_create_film_platforms', 9),
(44, '2025_11_30_035127_create_film_users', 9),
(45, '2025_11_30_035220_create_film_awards', 9),
(46, '2025_11_30_035313_create_director_awards', 9),
(47, '2025_11_30_035339_create_actor_awards', 9),
(48, '2025_11_30_035501_create_user_genres', 9),
(49, '2025_11_30_035621_create_user_platforms', 9),
(50, '2025_11_30_035658_create_user_directors', 9),
(51, '2025_11_30_035725_create_user_actors', 9),
(52, '2025_11_30_035758_create_user_awards', 9),
(53, '2025_12_30_034417_create_film_genres', 10),
(54, '2025_01_02_000000_create_users_table', 11),
(55, '2025_06_02_175610_create_films_table', 11),
(56, '2025_12_30_034828_create_film_actors', 11),
(57, '2025_12_30_034911_create_film_platforms', 11),
(58, '2025_12_30_035127_create_film_users', 11),
(59, '2025_12_30_035220_create_film_awards', 11),
(60, '2025_12_30_035501_create_user_genres', 11),
(61, '2025_12_30_035621_create_user_platforms', 11),
(62, '2025_12_30_035658_create_user_directors', 11),
(63, '2025_12_30_035725_create_user_actors', 11),
(64, '2025_12_30_035758_create_user_awards', 11),
(65, '2026_10_01_183603_create_comments_table', 11),
(66, '2025_01_03_000000_create_users_table', 12),
(67, '2026_11_30_035127_create_film_users', 13),
(68, '2026_11_30_035501_create_user_genres', 13),
(69, '2026_11_30_035621_create_user_platforms', 13),
(70, '2026_11_30_035658_create_user_directors', 13),
(71, '2026_11_30_035725_create_user_actors', 13),
(72, '2026_11_30_035758_create_user_awards', 13),
(73, '2026_12_01_183603_create_comments_table', 13),
(74, '2026_11_30_034417_create_film_genres', 14);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `platforms`
--

CREATE TABLE `platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `platforms`
--

INSERT INTO `platforms` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'Netflix', '2024-11-27 12:16:42', '2024-11-27 12:16:47'),
(4, 'Prime Video', '2024-11-27 12:16:55', '2024-11-27 12:16:55'),
(5, 'Disney+', '2024-11-27 12:17:20', '2024-11-27 12:17:20'),
(6, 'HBO Max', '2024-11-27 12:17:30', '2024-11-27 12:17:30'),
(7, 'Filmin', '2024-11-27 12:17:44', '2024-11-27 12:17:44'),
(8, 'Rakuten TV', '2024-11-27 12:18:20', '2024-11-27 12:18:20'),
(9, 'Movistar Plus+', '2024-11-27 12:18:31', '2024-11-27 12:18:46'),
(10, 'Apple TV+', '2024-11-27 12:18:40', '2024-11-27 12:18:40'),
(11, 'RTVE Play', '2024-11-27 12:19:07', '2024-11-27 12:19:07'),
(12, 'SkyShowtime', '2024-11-27 12:19:19', '2024-11-27 12:19:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `suscriptions`
--

CREATE TABLE `suscriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `duration` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar_id` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `suscription_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `suscription` tinyint(1) NOT NULL DEFAULT 0,
  `recomendation` tinyint(1) NOT NULL DEFAULT 0,
  `order` tinyint(1) NOT NULL DEFAULT 0,
  `admin` tinyint(1) NOT NULL DEFAULT 0,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `avatar_id`, `suscription_id`, `name`, `email`, `email_verified_at`, `password`, `suscription`, `recomendation`, `order`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 4, NULL, 'El Admin', 'admin@admin.com', NULL, '$2y$12$nv/2xa3xMEKJ7mzZJzxtFOzn5BgM7cpwsidpczJWK/U/iW46MH0ma', 0, 1, 0, 1, NULL, '2024-12-02 12:42:49', '2024-12-06 15:33:44'),
(3, 24, NULL, 'Eduardo', 'eduardo@gmail.com', NULL, '$2y$12$Qtq.6MZbZl9ZpCXNLogqHeyKf2j6FTUM0PpZgVyY4uxjLxQImdzDe', 0, 1, 0, 0, NULL, '2024-12-05 00:26:05', '2024-12-05 22:34:53'),
(4, 3, NULL, 'Gerarda', 'gerarda@gmail.com', NULL, '$2y$12$ZanMmgUr0SyK0GMJ0yC34O7pAtenPu3N4g6tRnNZorLSpvMOpzmJy', 0, 0, 0, 0, NULL, '2024-12-05 00:31:32', '2024-12-05 00:31:32');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_actors`
--

CREATE TABLE `user_actors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `actor_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_awards`
--

CREATE TABLE `user_awards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `award_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_directors`
--

CREATE TABLE `user_directors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `director_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_genres`
--

CREATE TABLE `user_genres` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `genre_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user_genres`
--

INSERT INTO `user_genres` (`id`, `genre_id`, `user_id`, `type`, `created_at`, `updated_at`) VALUES
(753, 4, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(754, 5, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(755, 6, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(756, 7, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(757, 8, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(758, 9, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(759, 10, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(760, 11, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(761, 12, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(762, 13, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(763, 14, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(764, 15, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(765, 16, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(766, 17, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(767, 19, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(768, 20, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(769, 26, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(770, 27, 1, 0, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(771, 29, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(772, 30, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(773, 31, 1, 1, '2024-12-05 19:17:11', '2024-12-05 19:17:11'),
(774, 4, 3, 0, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(775, 5, 3, 1, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(776, 6, 3, 0, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(777, 7, 3, 1, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(778, 8, 3, 1, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(779, 9, 3, 0, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(780, 10, 3, 1, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(781, 11, 3, 1, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(782, 12, 3, 0, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(783, 13, 3, 1, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(784, 14, 3, 0, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(785, 15, 3, 0, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(786, 16, 3, 0, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(787, 17, 3, 1, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(788, 19, 3, 0, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(789, 20, 3, 1, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(790, 26, 3, 1, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(791, 27, 3, 0, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(792, 29, 3, 1, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(793, 30, 3, 0, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(794, 31, 3, 1, '2024-12-05 19:18:45', '2024-12-05 19:18:45'),
(795, 32, 3, 0, '2024-12-05 19:18:45', '2024-12-05 19:18:45');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user_platforms`
--

CREATE TABLE `user_platforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `platform_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `actors`
--
ALTER TABLE `actors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `actor_awards`
--
ALTER TABLE `actor_awards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `actor_awards_actor_id_foreign` (`actor_id`),
  ADD KEY `actor_awards_award_id_foreign` (`award_id`);

--
-- Indices de la tabla `avatars`
--
ALTER TABLE `avatars`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `awards`
--
ALTER TABLE `awards`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indices de la tabla `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_film_id_foreign` (`film_id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_comment_id_foreign` (`comment_id`);

--
-- Indices de la tabla `directors`
--
ALTER TABLE `directors`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `director_awards`
--
ALTER TABLE `director_awards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `director_awards_director_id_foreign` (`director_id`),
  ADD KEY `director_awards_award_id_foreign` (`award_id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `films`
--
ALTER TABLE `films`
  ADD PRIMARY KEY (`id`),
  ADD KEY `films_director_id_foreign` (`director_id`);

--
-- Indices de la tabla `film_actors`
--
ALTER TABLE `film_actors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_actors_film_id_foreign` (`film_id`),
  ADD KEY `film_actors_actor_id_foreign` (`actor_id`);

--
-- Indices de la tabla `film_awards`
--
ALTER TABLE `film_awards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_awards_film_id_foreign` (`film_id`),
  ADD KEY `film_awards_award_id_foreign` (`award_id`);

--
-- Indices de la tabla `film_genres`
--
ALTER TABLE `film_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_genres_film_id_foreign` (`film_id`),
  ADD KEY `film_genres_genre_id_foreign` (`genre_id`);

--
-- Indices de la tabla `film_platforms`
--
ALTER TABLE `film_platforms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_platforms_film_id_foreign` (`film_id`),
  ADD KEY `film_platforms_platform_id_foreign` (`platform_id`);

--
-- Indices de la tabla `film_users`
--
ALTER TABLE `film_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_users_film_id_foreign` (`film_id`),
  ADD KEY `film_users_user_id_foreign` (`user_id`),
  ADD KEY `film_users_status_index` (`status`);

--
-- Indices de la tabla `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indices de la tabla `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indices de la tabla `platforms`
--
ALTER TABLE `platforms`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indices de la tabla `suscriptions`
--
ALTER TABLE `suscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_avatar_id_foreign` (`avatar_id`),
  ADD KEY `users_suscription_id_foreign` (`suscription_id`);

--
-- Indices de la tabla `user_actors`
--
ALTER TABLE `user_actors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_actors_actor_id_foreign` (`actor_id`),
  ADD KEY `user_actors_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `user_awards`
--
ALTER TABLE `user_awards`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_awards_award_id_foreign` (`award_id`),
  ADD KEY `user_awards_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `user_directors`
--
ALTER TABLE `user_directors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_directors_director_id_foreign` (`director_id`),
  ADD KEY `user_directors_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `user_genres`
--
ALTER TABLE `user_genres`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_genres_genre_id_foreign` (`genre_id`),
  ADD KEY `user_genres_user_id_foreign` (`user_id`);

--
-- Indices de la tabla `user_platforms`
--
ALTER TABLE `user_platforms`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_platforms_platform_id_foreign` (`platform_id`),
  ADD KEY `user_platforms_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `actors`
--
ALTER TABLE `actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT de la tabla `actor_awards`
--
ALTER TABLE `actor_awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `avatars`
--
ALTER TABLE `avatars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `awards`
--
ALTER TABLE `awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `directors`
--
ALTER TABLE `directors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `director_awards`
--
ALTER TABLE `director_awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `films`
--
ALTER TABLE `films`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT de la tabla `film_actors`
--
ALTER TABLE `film_actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=222;

--
-- AUTO_INCREMENT de la tabla `film_awards`
--
ALTER TABLE `film_awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `film_genres`
--
ALTER TABLE `film_genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=727;

--
-- AUTO_INCREMENT de la tabla `film_platforms`
--
ALTER TABLE `film_platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;

--
-- AUTO_INCREMENT de la tabla `film_users`
--
ALTER TABLE `film_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103;

--
-- AUTO_INCREMENT de la tabla `genres`
--
ALTER TABLE `genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT de la tabla `platforms`
--
ALTER TABLE `platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `suscriptions`
--
ALTER TABLE `suscriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `user_actors`
--
ALTER TABLE `user_actors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `user_awards`
--
ALTER TABLE `user_awards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user_directors`
--
ALTER TABLE `user_directors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `user_genres`
--
ALTER TABLE `user_genres`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=841;

--
-- AUTO_INCREMENT de la tabla `user_platforms`
--
ALTER TABLE `user_platforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `actor_awards`
--
ALTER TABLE `actor_awards`
  ADD CONSTRAINT `actor_awards_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `actor_awards_award_id_foreign` FOREIGN KEY (`award_id`) REFERENCES `awards` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_comment_id_foreign` FOREIGN KEY (`comment_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `director_awards`
--
ALTER TABLE `director_awards`
  ADD CONSTRAINT `director_awards_award_id_foreign` FOREIGN KEY (`award_id`) REFERENCES `awards` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `director_awards_director_id_foreign` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_director_id_foreign` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `film_actors`
--
ALTER TABLE `film_actors`
  ADD CONSTRAINT `film_actors_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `film_actors_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `film_awards`
--
ALTER TABLE `film_awards`
  ADD CONSTRAINT `film_awards_award_id_foreign` FOREIGN KEY (`award_id`) REFERENCES `awards` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `film_awards_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `film_genres`
--
ALTER TABLE `film_genres`
  ADD CONSTRAINT `film_genres_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `film_genres_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `film_platforms`
--
ALTER TABLE `film_platforms`
  ADD CONSTRAINT `film_platforms_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `film_platforms_platform_id_foreign` FOREIGN KEY (`platform_id`) REFERENCES `platforms` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `film_users`
--
ALTER TABLE `film_users`
  ADD CONSTRAINT `film_users_film_id_foreign` FOREIGN KEY (`film_id`) REFERENCES `films` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `film_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_avatar_id_foreign` FOREIGN KEY (`avatar_id`) REFERENCES `avatars` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `users_suscription_id_foreign` FOREIGN KEY (`suscription_id`) REFERENCES `suscriptions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_actors`
--
ALTER TABLE `user_actors`
  ADD CONSTRAINT `user_actors_actor_id_foreign` FOREIGN KEY (`actor_id`) REFERENCES `actors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_actors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_awards`
--
ALTER TABLE `user_awards`
  ADD CONSTRAINT `user_awards_award_id_foreign` FOREIGN KEY (`award_id`) REFERENCES `awards` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_awards_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_directors`
--
ALTER TABLE `user_directors`
  ADD CONSTRAINT `user_directors_director_id_foreign` FOREIGN KEY (`director_id`) REFERENCES `directors` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_directors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_genres`
--
ALTER TABLE `user_genres`
  ADD CONSTRAINT `user_genres_genre_id_foreign` FOREIGN KEY (`genre_id`) REFERENCES `genres` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_genres_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `user_platforms`
--
ALTER TABLE `user_platforms`
  ADD CONSTRAINT `user_platforms_platform_id_foreign` FOREIGN KEY (`platform_id`) REFERENCES `platforms` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_platforms_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
