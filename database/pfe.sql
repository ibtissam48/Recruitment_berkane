-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : sam. 02 juil. 2022 à 18:09
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.4.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `pfe`
--

-- --------------------------------------------------------

--
-- Structure de la table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `company_category_id` int(10) UNSIGNED NOT NULL,
  `company_ville_id` int(10) UNSIGNED NOT NULL,
  `Company_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Commercial_register` int(11) NOT NULL,
  `Workforce_number` int(11) NOT NULL,
  `phone_number` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `company_category_id`, `company_ville_id`, `Company_name`, `Commercial_register`, `Workforce_number`, `phone_number`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 'Gabrato company', 534278, 10, 843892045, '2022-07-01 22:21:08', '2022-07-01 22:21:08');

-- --------------------------------------------------------

--
-- Structure de la table `company_categories`
--

CREATE TABLE `company_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `company_categories`
--

INSERT INTO `company_categories` (`id`, `category_name`) VALUES
(1, 'Smart city'),
(2, 'Software'),
(3, 'qa'),
(4, 'dba'),
(5, 'Systems'),
(6, 'Network'),
(7, 'web'),
(8, 'info design'),
(9, 'Security'),
(10, 'technical support'),
(11, 'Energy'),
(12, 'Agriculture'),
(13, 'General labor'),
(14, 'Gouvernment'),
(15, 'Manufacturing'),
(16, 'Writing'),
(17, 'Editing'),
(18, 'Human ressources'),
(19, 'Education/teaching'),
(20, 'Innovation and culture'),
(21, 'Skilled trades/artisan'),
(22, 'Ecology and Environment '),
(23, 'Health and Well-Being');

-- --------------------------------------------------------

--
-- Structure de la table `company_villes`
--

CREATE TABLE `company_villes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ville_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `company_villes`
--

INSERT INTO `company_villes` (`id`, `ville_name`) VALUES
(1, 'Berkane'),
(2, 'Ahfir'),
(3, 'Saidia'),
(4, 'Oujda'),
(5, 'Naima'),
(6, 'Beni Drar'),
(7, 'Jerada'),
(8, 'Ain Beni Mathar'),
(9, 'Taourirt'),
(10, 'Figuig'),
(11, 'Bouarfa'),
(12, 'nador'),
(13, 'Ras El Ma'),
(14, 'Zaio'),
(15, 'Selouane'),
(16, 'Driouch');

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
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
-- Structure de la table `jobseekers`
--

CREATE TABLE `jobseekers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `Birthday` date NOT NULL,
  `Nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Linkdin_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Town_of_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Civility` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Level_of_education` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Field_of_study` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `School` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `School_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_year` int(11) NOT NULL,
  `to_year` int(11) NOT NULL,
  `resume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_10_09_104919_create_permission_tables', 1),
(6, '2020_10_09_144234_create_company_categories_table', 1),
(7, '2020_10_09_145555_create_companies_table', 1),
(8, '2020_10_11_024354_create_posts_table', 1),
(9, '2020_10_12_133736_create_post_user_table', 1),
(10, '2020_10_13_111952_create_job_applications_table', 1),
(11, '2022_04_26_141118_create_company_villes_table', 1),
(12, '2022_05_11_225430_create_recruiters_table', 1),
(13, '2022_05_11_225617_create_jobseekers_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 2),
(3, 'App\\Models\\User', 3);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'view-dashboard', 'web', '2022-07-01 22:21:00', '2022-07-01 22:21:00'),
(2, 'create-post', 'web', '2022-07-01 22:21:00', '2022-07-01 22:21:00'),
(3, 'edit-post', 'web', '2022-07-01 22:21:00', '2022-07-01 22:21:00'),
(4, 'delete-post', 'web', '2022-07-01 22:21:00', '2022-07-01 22:21:00'),
(5, 'manage-authors', 'web', '2022-07-01 22:21:00', '2022-07-01 22:21:00'),
(6, 'author-section', 'web', '2022-07-01 22:21:00', '2022-07-01 22:21:00'),
(7, 'create-category', 'web', '2022-07-01 22:21:01', '2022-07-01 22:21:01'),
(8, 'edit-category', 'web', '2022-07-01 22:21:01', '2022-07-01 22:21:01'),
(9, 'delete-category', 'web', '2022-07-01 22:21:01', '2022-07-01 22:21:01'),
(10, 'create-company', 'web', '2022-07-01 22:21:01', '2022-07-01 22:21:01'),
(11, 'edit-company', 'web', '2022-07-01 22:21:01', '2022-07-01 22:21:01'),
(12, 'delete-company', 'web', '2022-07-01 22:21:01', '2022-07-01 22:21:01');

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_level` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vacancy_count` smallint(5) UNSIGNED NOT NULL,
  `employment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deadline` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `education_level` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `skills` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `specifications` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `views` mediumint(8) UNSIGNED NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `company_id`, `job_title`, `job_level`, `vacancy_count`, `employment_type`, `salary`, `job_location`, `deadline`, `education_level`, `experience`, `skills`, `specifications`, `views`, `created_at`, `updated_at`) VALUES
(1, 1, 'Php laravel developer', 'Senior level', 4, 'full time', '20k - 50k', 'kathmandu-18,Nepal', '2022-07-03 22:21:08', 'bachelors', '2 years', 'Team player, Active listener', '<p></p>', 1, '2022-07-01 22:21:08', '2022-07-01 22:21:08'),
(2, 1, 'Marketing Expert', 'Senior level', 2, 'full time', '20k - 50k', 'kathmandu-18,Nepal', '2022-07-03 22:21:08', 'bachelors', '2 years', 'Team player, Active listener', '<p></p>', 1, '2022-07-01 22:21:08', '2022-07-01 22:21:08'),
(3, 1, 'Professional designer', 'Top level', 3, 'Part time', '20k - 50k', 'kathmandu-18,Nepal', '2022-07-03 22:21:09', 'bachelors', '2 years', 'Team player, Active listener', '<p></p>', 1, '2022-07-01 22:21:09', '2022-07-01 22:21:09'),
(4, 1, 'Dotnet programmer', 'Senior level', 8, 'full time', '20k - 50k', 'kathmandu-18,Nepal', '2022-07-03 22:21:09', 'high school', '2 years', 'Team player, Active listener', '<p></p>', 1, '2022-07-01 22:21:09', '2022-07-01 22:21:09'),
(5, 1, 'Sales Executive', 'Senior level', 8, 'Part time', '20k - 50k', 'kathmandu-18,Nepal', '2022-07-03 22:21:09', 'bachelors', '2 years', 'Team player, Active listener', '<p></p>', 1, '2022-07-01 22:21:09', '2022-07-01 22:21:09'),
(6, 1, 'Maths Teacher', 'Senior level', 7, 'full time', '20k - 50k', 'kathmandu-18,Nepal', '2022-07-03 22:21:09', 'master', '2 years', 'Team player, Active listener', '<p></p>', 1, '2022-07-01 22:21:09', '2022-07-01 22:21:09');

-- --------------------------------------------------------

--
-- Structure de la table `post_user`
--

CREATE TABLE `post_user` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `recruiters`
--

CREATE TABLE `recruiters` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `Company_Name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `line_of_business` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Workforce_number` int(11) NOT NULL,
  `City` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Phone_Number` double NOT NULL,
  `Commercial_Register` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2022-07-01 22:20:59', '2022-07-01 22:20:59'),
(2, 'author', 'web', '2022-07-01 22:20:59', '2022-07-01 22:20:59'),
(3, 'user', 'web', '2022-07-01 22:20:59', '2022-07-01 22:20:59');

-- --------------------------------------------------------

--
-- Structure de la table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(6, 2),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1),
(12, 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int(11) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `phone_number`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin user', 'admin', 'admin@admin.com', 612131415, '2022-07-01 22:21:07', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'eqdJ6alQvp', '2022-07-01 22:21:07', '2022-07-01 22:21:07'),
(2, 'recruteur user', 'recruteur', 'author@author.com', 632131415, '2022-07-01 22:21:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'Y0Xna0UQWa', '2022-07-01 22:21:08', '2022-07-01 22:21:08'),
(3, 'Candidat', 'user_simple', 'user@user.com', 642131415, '2022-07-01 22:21:08', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NULL, 'XurwcCSRn7', '2022-07-01 22:21:08', '2022-07-01 22:21:08'),
(4, 'test', 'testtt', 'iboussala748@gmail.com', 684536274, NULL, '$2y$10$yYQcsfWC.NBPsKfo68p8pex2DguYccJQCyOL70S8K8fHXCdYbetXq', NULL, NULL, NULL, '2022-07-01 22:22:48', '2022-07-01 22:22:48');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `company_categories`
--
ALTER TABLE `company_categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `company_villes`
--
ALTER TABLE `company_villes`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobseekers`
--
ALTER TABLE `jobseekers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `post_user`
--
ALTER TABLE `post_user`
  ADD PRIMARY KEY (`post_id`,`user_id`);

--
-- Index pour la table `recruiters`
--
ALTER TABLE `recruiters`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_number_unique` (`phone_number`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `company_categories`
--
ALTER TABLE `company_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT pour la table `company_villes`
--
ALTER TABLE `company_villes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobseekers`
--
ALTER TABLE `jobseekers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `recruiters`
--
ALTER TABLE `recruiters`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
