-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 30-Jun-2020 às 06:18
-- Versão do servidor: 10.4.11-MariaDB
-- versão do PHP: 7.2.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `laravel`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_08_19_000000_create_failed_jobs_table', 1),
(3, '2020_06_29_163253_create_pessoas', 2),
(4, '2020_06_29_172008_create_pessoas_table', 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoas`
--

CREATE TABLE `pessoas` (
  `id` int(10) UNSIGNED NOT NULL,
  `nome` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cpf` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `data_nasc` date NOT NULL,
  `rg` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `local_nasc` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `telefone` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usuario_cadastro` int(11) NOT NULL,
  `usuario_update` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `pessoas`
--

INSERT INTO `pessoas` (`id`, `nome`, `cpf`, `data_nasc`, `rg`, `local_nasc`, `telefone`, `created_at`, `updated_at`, `usuario_cadastro`, `usuario_update`) VALUES
(1, 'JADNA ALMEIDA', '02477158597', '1990-06-10', '0948472073', 'SP', '91841945', '2020-06-29 21:55:16', '2020-06-30 06:10:21', 1, 1),
(4, 'JADNA ALMEIDA DA CRUZ', '02477158597', '1990-05-21', '0948472073', 'BA', '91841945', '2020-06-30 00:33:39', '2020-06-30 00:33:39', 1, NULL),
(5, 'JADNA ALMEIDA DA CRUZ4', '02477158597', '1989-08-14', '0948472073', 'BA', '91841945', '2020-06-30 00:34:53', '2020-06-30 00:34:53', 1, NULL),
(6, 'Teste 4', '02477158597', '1990-08-21', NULL, 'BA', NULL, '2020-06-30 00:52:08', '2020-06-30 00:52:08', 1, NULL),
(7, 'Jadna Almeida 5', '02477158597', '2006-05-21', '0948472073', 'SP', '71991841945', '2020-06-30 00:55:24', '2020-06-30 00:55:24', 1, NULL),
(8, 'Jadna Almeida', '02477158597', '1989-04-21', '0948472073', 'SP', '71991841945', '2020-06-30 06:06:53', '2020-06-30 06:06:53', 1, NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'teste', 'jadna.ac@gmail.com', NULL, '$2y$10$deiT2dl9ArH/MHFnWsJDEOXelcu/uBDxJrE53eM5uQbCpvh0BolxW', NULL, '2020-06-30 03:53:20', '2020-06-30 03:53:20'),
(2, 'João', 'joao@teste.com', NULL, '$2y$10$A8414cPXDvu/qXb1r1MZeuMmZMa6JIUWodnS8TvwkwOt6AeDmFIMe', NULL, '2020-06-30 06:28:44', '2020-06-30 06:28:44'),
(3, 'Maria', 'maria@teste.com', NULL, '$2y$10$IbXLtnJQby3ncmoJHglU5eUHCaXN0vx8RvfUZ.ovQzdXzGfUuJU7e', NULL, '2020-06-30 06:36:10', '2020-06-30 06:36:10'),
(4, 'Nara', 'nara@teste.com', NULL, '$2y$10$M4oBYaardvKTYqPJTk4dbeWf3KikWQPkcuP5ujKpISxwhmgduUBR2', NULL, '2020-06-30 06:54:03', '2020-06-30 06:54:03'),
(5, 'teste', 'teste@teste.com', NULL, '$2y$10$isoARXcAJ2DqK4vBFvYUZ.3uviCkUBEfbEN3KsNQ9.d8xDOKeNbdO', NULL, '2020-06-30 06:55:07', '2020-06-30 06:55:07'),
(6, 'teste1', 'teste1@teste.com', NULL, '$2y$10$EDj1OI9BkKuy05Kylyetge8/k4WTYQU219DCeT7G9FdPx/VZ8O2pG', NULL, '2020-06-30 06:57:19', '2020-06-30 06:57:19');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `pessoas`
--
ALTER TABLE `pessoas`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `pessoas`
--
ALTER TABLE `pessoas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
