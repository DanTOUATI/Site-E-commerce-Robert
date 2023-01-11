-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 11 jan. 2023 à 22:38
-- Version du serveur : 10.4.22-MariaDB
-- Version de PHP : 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `foot`
--

-- --------------------------------------------------------

--
-- Structure de la table `panier`
--

CREATE TABLE `panier` (
  `id` int(10) NOT NULL,
  `id_produit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(5) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `marque` varchar(50) NOT NULL,
  `categorie` varchar(20) NOT NULL,
  `taille` int(10) NOT NULL,
  `prix` int(10) NOT NULL,
  `img` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `produits`
--

INSERT INTO `produits` (`id`, `nom`, `description`, `marque`, `categorie`, `taille`, `prix`, `img`) VALUES
(1, 'Chaussures de football  Phantom GT2 Elite DF FG', 'La technologie All Conditions Control (ACC) ajoute une texture adhérente dans des conditions humides et sèches lors des dribbles, des passes et des scores.\r\n\r\nIl permet à la surface de conserver le même niveau de friction pour un meilleur contrôle du ballon.', 'Nike', 'Crampons', 40, 270, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/n/i/nike_dr5955-810_0.jpg'),
(2, 'Chaussures de football Phantom GT2 Academy MG', 'Issue de la Phantom GT, la chaussure Nike Phantom GT2 MG affiche un nouveau design et un motif conçus pour vous permettre de placer vos coups avec une précision absolue. Le laçage excentré crée une zone de frappe épurée idéale pour dribbler, faire des passes et marquer avec précision.', 'Nike', 'Crampons', 41, 80, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/d/a/da4433-407_1.jpg'),
(3, 'Chaussures de football Ultra Match FG/AG - Fearles', 'Nos chaussures de foot Ultra Match sont conçues pour vous donner une longueur d’avance sur vos adversaires, avec notre tige améliorée GRIP CONTROL unique pour un meilleur contrôle de la balle, une semelle extérieure TPU SPEEDPLATE pour une adhérence, un contrôle et une propulsion incroyables, et un nouveau bracelet bas en tricot pour un ajustement optimal.', 'Puma', 'Crampons', 39, 85, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/p/u/puma_106868-03_fiery-coral-fizzy-light-puma-black_3.jpg'),
(4, 'Chaussures de football Ultra Ultimate FG/AG - Fast', 'Tige légère ULTRAWEAVE tissée pour une vitesse inégalée. PWRPRINT pour une stabilité de niveau micro. PWRTAPE pour un soutien léger. Contenu recyclé : La tige de cette chaussure est fabriquée avec au moins 20 % de matériaux recyclés pour un avenir meilleur. Semelle extérieure SPEEDPLATE double densité pour la traction et la propulsion. Convient à la fois aux surfaces naturelles fermes et au gazon artificiel', 'Puma', 'Crampons', 42, 160, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/p/u/puma_106931-01_fizzy-light-parisian-night-blue-glimmer_1.jpg'),
(5, 'Chaussures de football X Speedportal.2 MG - Game D', 'Les bons joueurs sont maîtres du temps et de l\'espace. Les excellents joueurs défient les dimensions spatio-temporelles. Explore la vitesse multidimensionnelle avec la chaussure adidas X Speedportal. Stylée et confortable, cette chaussure de football favorise les réactions instantanées grâce aux crampons supplémentaires à l\'avant de sa semelle extérieure optimisée pour différentes surfaces.', 'Adidas', 'Crampons', 43, 140, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/a/d/adidas_gw8450_1.jpg'),
(6, 'Ballon adidas Al Rihla Pro - Game D 2019/2020', 'Le ballon n\'est qu\'un début. Le reste de votre voyage footballistique reste à écrire. Inspiré du look du ballon de match officiel de la Coupe du Monde de la FIFA™, ce ballon adidas Al Rihla Training est idéal pour les séances éreintantes. Sa construction cousue à la machine et sa vessie en butyle assurent résilience et longévité. Une surface texturée permet d\'obtenir une finition parfaite.', 'Adidas', 'Ballons', 5, 35, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/h/5/h57783_1_hardware_photography_front_center_view_white.jpg'),
(7, 'Ballon adidas Hiver Al Rihla Pro - Game D', 'Al Rihla signifie \"le voyage\", et ce ballon n\'est que le début. La suite de ton voyage dans le football reste encore à écrire. Version haute performance du ballon de match de la Coupe du Monde de la FIFA Qatar 2022™, ce ballon adidas Al Rihla Pro est conçu pour affronter l\'hiver. La forme du panneau Speedshell inspirée des voiliers dhow est associée à une texture et un gaufrage en losange pour améliorer l\'effet et la précision. Les graphismes brillants scintillent sous une finition nacrée.', 'Adidas', 'Ballons', 5, 90, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/b/a/ballon_hiver_al_rihla_pro_orange_h57781_01_standard_1.jpg'),
(8, 'Ballon adidas Tiro Match Pro\n2021/2022', 'Simple et classique, le ballon de football adidas Tiro répond à tous les besoins de ton équipe. Certifié aux normes des matchs internationaux avec son label IMS, ce ballon Tiro Match affiche un design fait pour t\'aider à améliorer ta technique sur le terrain d\'entraînement. Il est cousu à la main pour une résistance ultime.', 'Adidas', 'Ballons', 5, 60, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/f/s/fs0368_1_hardware_photography_front_center_view_white.jpg'),
(9, 'Ballon domicile Arsenal Adidas 2022/23', 'Le maillot domicile d\'Arsenal rencontre l\'un des ballons adidas les plus iconiques. Inspiré du modèle classique +Teamgeist lancé en 2006, ce ballon du club affiche un badge d\'Arsenal et le célèbre design incurvé. Cousu à la machine, le revêtement en TPU masque une vessie butyle conçue pour un excellent jeu et un maximum de puissance.', 'Adidas', 'Ballons', 5, 40, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/a/d/adidas_hi2193_1_hardware_photography_front_center_view_white.jpg'),
(10, 'Ballon Nike Premier League Flight 2020', 'Après 8 ans et 1 700 heures de test, le ballon de football Nike Flight est une révolution qui offre une trajectoire uniforme. Les rainures moulées et la texture antidérapante réduisent les mouvements inattendus dans l\'air pour vous permettre de placer le ballon là où vous le souhaitez.', 'Nike', 'Ballons', 5, 70, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/n/i/nike_dn3602-100_blanc-dore_1.jpg'),
(11, 'Maillot Domicile Coupe du monde OM 2022/23', 'Maillots blancs, soulier d’or européen et premier doublé. Le maillot domicile 2022/23 de l’Olympique de Marseille rend hommage aux légendes de l’âge d’or des années 70. Il arbore un design traditionnel avec des détails d’inspiration rétro, honorant l’équipe qui a remporté la coupe en 1969, le championnat en 1971 et le doublé en 1972. Des touches de bleu Limoges viennent parfaire son look. Allez l’OM !', 'Puma', 'Maillots', 1, 69, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/7/6/76608501_3.jpg'),
(12, 'Maillot Domicile Coupe du monde 2022 France', 'Notre ambition est sans limites. Comme les autres maillots de notre collection Stadium, ce modèle replica intégrant un tissu anti-transpiration vous offre un look inspiré de votre équipe préférée sur le terrain.', 'Nike', 'Maillots', 2, 90, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/d/n/dn0690-410-phsfh001.jpg'),
(13, 'Maillot Domicile Coupe du monde 2022 Allemagne', 'Un look qui fait battre les cœurs. Placé au-dessus du cœur et détaillé en or, un insigne d\'équipe tissé occupe le devant de la scène sur ce maillot de football adidas Allemagne. Un changement de direction pour les maillots de domicile modernes, cette bande verticale audacieuse est remplie de l\'ADN de l\'équipe nationale;', 'Adidas', 'Maillots', 4, 55, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/a/d/adidas_hj9606_1_apparel_photography_front_view_white.jpg'),
(14, 'Maillot Domicile Coupe du monde 2022 Argentine', 'Un maillot de supporter pour encourager l\'Argentine à un moment crucial, conçu en matières recyclées.', 'Adidas', 'Maillots', 3, 110, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/h/f/hf2158_b2b012_plp.jpg'),
(15, 'Maillot Domicile Coupe du monde Real Madrid 2022', 'Épuré, classique, créé pour marquer une étape importante. Le look intemporel de ce maillot domicile adidas du Real Madrid est rehaussé de détails violet clair et d\'un blason du club en relief répété sur le tissu blanc. Cette version est dotée de la technologie AEROREADY qui évacue la transpiration pour offrir un maximum de confort aux fans.', 'Adidas', 'Maillots', 4, 79, 'https://media.foot-store.fr/catalog/product/cache/thumbnail/180x/9df78eab33525d08d6e5fb8d27136e95/h/f/hf0291_1_apparel_photography_front_view_white_1.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(5) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(10) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `pwd` varchar(15) NOT NULL,
  `tel` int(10) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `nom`, `prenom`, `mail`, `pwd`, `tel`, `adresse`) VALUES
(1, 'demo', 'demo', 'demo@demo.fr', 'demo', NULL, NULL),
(2, 'TOUATI', 'Dan', 'dantouati18@gmail.com', 'Dt31122001', 783580482, '72 rue pixerécourt');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `panier`
--
ALTER TABLE `panier`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `panier`
--
ALTER TABLE `panier`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
