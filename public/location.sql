-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  mer. 22 nov. 2017 à 22:07
-- Version du serveur :  10.1.22-MariaDB
-- Version de PHP :  7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `location`
--

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(2, 'ridha rahmi', 'ridha.rahmi13@gmail.com', 'aaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaavvvvvvvvvvvvbbbbb hhhhhhhhhhhhh', '2017-11-18 19:10:01', '2017-11-18 19:10:01');

-- --------------------------------------------------------

--
-- Structure de la table `demandes`
--

CREATE TABLE `demandes` (
  `id` int(10) UNSIGNED NOT NULL,
  `adresse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateDebut` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nmbejour` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `total` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `voiture_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `demandes`
--

INSERT INTO `demandes` (`id`, `adresse`, `tel`, `dateDebut`, `nmbejour`, `total`, `voiture_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'skanes, monastir', '97949888', '2017-11-23', '2', '120', 3, 2, '2017-11-22 19:03:06', '2017-11-22 19:03:06'),
(2, 'sousse tunisie', '97949888', '2017-11-30', '1', '90', 10, 2, '2017-11-22 19:04:23', '2017-11-22 19:04:23'),
(3, 'skanes, monastir', '97949888', '2017-12-10', '2', '140', 5, 2, '2017-11-22 19:24:49', '2017-11-22 19:24:49');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_11_14_190601_create_roles_table', 1),
('2017_11_14_190711_create_role_users_table', 1),
('2017_11_14_191237_create_contacts_table', 1),
('2017_11_14_191258_create_voitures_table', 1),
('2017_11_20_201532_create_demandes_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'client', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `role_users`
--

CREATE TABLE `role_users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `role_users`
--

INSERT INTO `role_users` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(2, 2, 2, '2017-11-15 18:42:23', '2017-11-15 18:42:23');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin location', 'admin@gmail.com', '$2y$10$45.69Xcok8tF//p2Me7z/.6LBMHygaNDNH6CstX0RW8d3tHtpjoMq', 'xsss4ZWLANRaUY4SEj3RjE4dWkwiFlAqEVKesI9BbouowvQz0IIWK25CZgSQ', '2017-11-15 18:19:46', '2017-11-22 19:59:22'),
(2, 'ridha rahmi', 'ridha.rahmi13@gmail.com', '$2y$10$IfjD2ZdmkbSpCYbANflOy.DGiHBEQlIVCkW8xIMiU1TLVKkSE3CqK', 'e6kH71l1F53XhlXEDri4xAu5SZG9k1PgjSs2sTOzWwOQLWm5jTBHM7eyKRJN', '2017-11-15 18:42:23', '2017-11-22 20:02:29');

-- --------------------------------------------------------

--
-- Structure de la table `voitures`
--

CREATE TABLE `voitures` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `voitures`
--

INSERT INTO `voitures` (`id`, `title`, `description`, `price`, `image`, `user_id`, `created_at`, `updated_at`) VALUES
(3, 'kia rouge', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens', '60', 'images/voiture/2017-11-20-09-14-50_9a96f27eb7202bd07c31b597a6a3805884552601.jpg', 1, '2017-11-20 20:14:50', '2017-11-20 20:14:50'),
(4, 'kia noire', 'On sait depuis longtemps que travailler avec du texte lisible et contenant du sens', '65', 'images/voiture/2017-11-20-09-16-59_66adaf543827c9fe7fcc84e8fd4db2fa8aedec8f.jpg', 1, '2017-11-20 20:16:59', '2017-11-20 20:44:06'),
(5, 'Toyota rouge', 'Plusieurs variations de Lorem Ipsum peuvent être trouvées ici ou là, mais la majeure partie d\'entre elles a été altérée', '70', 'images/voiture/2017-11-21-07-47-47_7dbd511e3f94e21cc5b28d11fa88bac818563ff1.jpg', 1, '2017-11-21 18:47:47', '2017-11-21 18:47:47'),
(6, 'Toyota noire', 'Contrairement à une opinion répandue, le Lorem Ipsum n\'est pas simplement du texte aléatoire', '80', 'images/voiture/2017-11-21-07-49-42_f4426e5c69fcf94a402007b79f859a92f65aec72.jpg', 1, '2017-11-21 18:49:42', '2017-11-21 18:49:42'),
(7, 'Citroën neuf', 'L\'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit', '65', 'images/voiture/2017-11-21-08-09-10_edae662750349ad695e912cacf977f778baab4be.jpg', 1, '2017-11-21 19:09:10', '2017-11-21 19:09:10'),
(8, 'Fiat noire', 'Le Lorem Ipsum ainsi obtenu ne contient aucune répétition, ni ne contient des mots farfelus, ou des touches d\'humour.', '70', 'images/voiture/2017-11-21-08-10-58_1ed76d6bbcdcae759a11aaf5d06dc44457f3c409.jpg', 1, '2017-11-21 19:10:58', '2017-11-21 19:11:11'),
(9, 'voiture pigeo', 'L\'extrait standard de Lorem Ipsum utilisé depuis le XVIè siècle est reproduit ci-dessous pour les curieux', '52', 'images/voiture/2017-11-21-08-20-10_75ac16a10a90299c515a26214ae5315a111b45b8.jpg', 1, '2017-11-21 19:20:10', '2017-11-21 19:20:10'),
(10, 'Porsche noire', 'combinaison de plusieurs structures de phrases, pour générer', '90', 'images/voiture/2017-11-21-08-21-49_8281428c8b55837114e6ec9ae0f18202e86edddf.jpg', 1, '2017-11-21 19:21:49', '2017-11-21 19:21:49'),
(11, 'Hyundai', 'la littérature classique, découvrit la source incontestable du Lorem Ipsum', '45', 'images/voiture/2017-11-21-08-23-32_2060316ad7352ec6199c519e31d6f1353dbf02c0.jpg', 1, '2017-11-21 19:23:32', '2017-11-21 19:23:32');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `demandes_voiture_id_foreign` (`voiture_id`),
  ADD KEY `demandes_user_id_foreign` (`user_id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role_users`
--
ALTER TABLE `role_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `role_users_user_id_unique` (`user_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Index pour la table `voitures`
--
ALTER TABLE `voitures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `voitures_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `demandes`
--
ALTER TABLE `demandes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `role_users`
--
ALTER TABLE `role_users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `voitures`
--
ALTER TABLE `voitures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `demandes`
--
ALTER TABLE `demandes`
  ADD CONSTRAINT `demandes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `demandes_voiture_id_foreign` FOREIGN KEY (`voiture_id`) REFERENCES `voitures` (`id`);

--
-- Contraintes pour la table `role_users`
--
ALTER TABLE `role_users`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `voitures`
--
ALTER TABLE `voitures`
  ADD CONSTRAINT `voitures_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
