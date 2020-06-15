-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 15 juin 2020 à 02:39
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gestion_stage`
--

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_06_04_112009_create_rapports_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `CIN` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rapports`
--

CREATE TABLE `rapports` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` double(5,3) NOT NULL,
  `chemin` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_soutenance` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `rapports`
--

INSERT INTO `rapports` (`id`, `status`, `note`, `chemin`, `user_id`, `date_soutenance`, `created_at`, `updated_at`) VALUES
(1, 'Validee', 18.000, 'etude-existance_1591424899.pdf', 1, '2000-01-19', '2020-06-06 05:28:19', '2020-06-08 09:01:37'),
(2, 'en attente', 7.000, 'cofee_1591609012.xd', 4, '2000-01-20', '2020-06-08 08:36:52', '2020-06-08 08:51:04'),
(3, 'Validee', 12.000, 'grid_1591610308.png', 6, '2020-10-14', '2020-06-08 08:58:28', '2020-06-08 09:03:06');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau` int(11) NOT NULL,
  `branche` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CIN` varchar(8) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `prenom`, `email`, `niveau`, `branche`, `CIN`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'gharsseloui', 'ghassen', 'ghassengharsseloui@gmail.com', 2, 'DSI', '09870894', '$2y$10$gWKKRmOdLCNxpfM6xBVSyeiUhWl0RLWWY9sUk91EJOiF4ZTmQcCEe', NULL, '2020-06-06 05:20:35', '2020-06-06 05:20:35'),
(2, 'departement', 'chef', 'chef@chef.com', 2, 'TI', '00001111', '$2y$10$Bi6yjniJmDYGSdDlFZYh2.LUZZbueBME0d13.WrJNheGkIYqsK8MS', NULL, '2020-06-06 05:23:55', '2020-06-06 05:23:55'),
(4, 'khalfalah', 'mariem', 'khalfallahmayouma@gmail.com', 1, 'TI', '09870898', '$2y$10$IdSDBqA7ybzR2awqXsOZnOLB73o2EbJxQqOf5Ao9.3VKA/1qePWcq', NULL, '2020-06-08 08:35:16', '2020-06-08 08:35:16'),
(5, 'admin', 'admin', 'admin@admin.com', 1, 'TI', '01234567', '$2y$10$Ya75x5ibdpBhR6/nFYG7De3V5iGVT3.71NVQ.dptzCeKoSBu9y8be', NULL, '2020-06-08 08:40:33', '2020-06-08 08:40:33'),
(6, 'nechi', 'hamza', 'hamza@gmail.com', 1, 'TI', '09870896', '$2y$10$TTWJJ3kj6/TgySwFp/EmhufXkaFHex/IRYT/xfGRdnxIHvzdR5NBW', NULL, '2020-06-08 08:57:53', '2020-06-08 08:57:53');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_cin_index` (`CIN`);

--
-- Index pour la table `rapports`
--
ALTER TABLE `rapports`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `rapports_user_id_unique` (`user_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_cin_unique` (`CIN`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `rapports`
--
ALTER TABLE `rapports`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
