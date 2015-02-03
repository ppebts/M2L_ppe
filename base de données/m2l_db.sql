-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 03 Février 2015 à 15:46
-- Version du serveur :  5.5.38
-- Version de PHP :  5.5.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `m2l_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `Actualite`
--

CREATE TABLE IF NOT EXISTS `Actualite` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Actualite`
--

INSERT INTO `Actualite` (`id`, `titre`, `contenu`, `image`) VALUES
(1, 'Remise en forme', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sport1.jpg'),
(2, 'Course a pied', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sport2.jpg'),
(3, 'Concours', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sport3.jpg'),
(4, 'Défi n°1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sport4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `Annonce`
--

CREATE TABLE IF NOT EXISTS `Annonce` (
  `id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Annonce`
--

INSERT INTO `Annonce` (`id`, `utilisateur_id`, `titre`, `description`, `image`, `prix`) VALUES
(1, 3, 'Ballon', 'Ballon utilisé par CR7. En très bon état.', 'ballon.jpg', 80),
(2, 3, 'Vélo', 'Vélo de course performant datant de 2010 avec pédales en or massif et guidon en carbon.', 'velo.jpg', 500),
(3, 3, 'Raquette', 'Raquette ProModel de Raphael Nadal, modèle rolland garros 2015', 'raquette.jpg', 130);

-- --------------------------------------------------------

--
-- Structure de la table `Formation`
--

CREATE TABLE IF NOT EXISTS `Formation` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `duree` int(11) NOT NULL,
  `debut` datetime NOT NULL,
  `lieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nbparticipants` int(11) NOT NULL,
  `nbinscrits` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Formation`
--

INSERT INTO `Formation` (`id`, `nom`, `description`, `duree`, `debut`, `lieu`, `image`, `nbparticipants`, `nbinscrits`) VALUES
(1, 'Excel', 'Formation pour apprendre à utiliser le logiciel Microsoft Excel 2013.', 30, '2015-02-19 00:00:00', 'A3', 'excel.png', 15, 1);

-- --------------------------------------------------------

--
-- Structure de la table `formation_user`
--

CREATE TABLE IF NOT EXISTS `formation_user` (
  `formation_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `formation_user`
--

INSERT INTO `formation_user` (`formation_id`, `user_id`) VALUES
(1, 3);

-- --------------------------------------------------------

--
-- Structure de la table `Information`
--

CREATE TABLE IF NOT EXISTS `Information` (
  `id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Information`
--

INSERT INTO `Information` (`id`, `titre`, `contenu`) VALUES
(1, 'Statut juridique', 'La Maison des Ligues est un établissement du Conseil Régional. Ce n’est pas une entité juridique en propre.\r\n\r\nElle est financée à 100 % (pour son fonctionnement et pour la construction récente de l’extension des bâtiments C et D) par le Conseil Régional et sans aucune participation du Conseil Général de Meurthe et Moselle, bien qu’elle abrite un certain nombre de comités départementaux. Une convention de cogestion a été passée entre le Conseil Régional et le Comité Régional Olympique et Sportif de Lorraine pour la gestion de l’outil « Maison des Ligues ». Le CROSL est une association financée par le ministère via le CNDS (Centre National de Développement du Sport).'),
(2, 'Locaux de la M2L', 'Le site se compose de quatre bâtiments, dont deux dotés de quatre étages et donc de 5 niveaux (les bâtiments A et C) et deux de plain-pied (les bâtiments B et D) dotés d’un seul rez-de-chaussée. Les bâtiments C et D sont neufs. Les bâtiments A et B datent d''une quinzaine d''années.\r\n\r\nLes étages des bâtiments A et C hébergent les bureaux des ligues locataires et le rez-de-chaussée des quatre bâtiments héberge des espaces mutualisés : un amphithéâtre de 200 places avec une régie, 8 salles de réunion de 12 à 50 places, un hall d''accueil, une salle de convivialité et son office traiteur, ainsi qu''une salle de formation multimédia dotée de 24 postes. On y trouve également la partie « accueil » des neuf bureaux de l''administration de la M2L. L’autre partie se trouve au premier étage du bâtiment C. Différents locaux de service (archives, stockage local d''entretien ...) se trouvent en sous-sol.\r\n\r\nEn fonction de leur taille, les 24 structures hébergées occupent un ou plusieurs bureaux. Au total, la M2L offre 80 bureaux. A chaque étage des bâtiments de bureaux se trouve une petite salle de réunion que les ligues utilisent sans réservation. L''ensemble des autres salles ressources sont accessibles sur réservation, en journée comme en soirée.'),
(3, 'Personnel', 'Les personnes qui travaillent ici sont de différentes catégories. Il y a d’abord ceux que j’appelle les «professionnels». Il y a deux employés du Conseil Régional (des factotums). Il y a sept ETP (Équivalents Temps Plein) employés par le CROSL ; il y a le personnel des prestataires (gardiennage, ménage) et les salariés des ligues. Ensuite, il y a les bénévoles qui sont les élus des associations : CROSL, CDOS, ligues, comités départementaux. Il y a également les élus du Conseil Régional et enfin tous les autres : visiteurs, stagiaires, etc.'),
(4, 'Matériel', 'Chaque bureau de ligue du bâtiment A dispose de deux prises Ethernet de catégorie 5 et d''une prise téléphonique. Dans le nouveau bâtiment C, ce sont trois prises Ethernet de catégorie 6 qui sont disponibles dans chaque bureau pour connecter du matériel informatique ou un appareil de téléphonie IP.\r\nChaque salle de réunion dispose d''une prise Ethernet pour la connexion d''un PC portable au réseau (de catégorie 5 dans le bâtiment B et 6 dans le bâtiment D). Elle dispose en outre d''un système fixe de vidéo projection, mais pas d''ordinateur à demeure.\r\nLa salle de formation multimédia dispose de 26 prises Ethernet de catégorie 5, une pour chacun des 25 PC (24 PC "stagiaires" et un PC "formateur"), et la dernière pour une imprimante réseau.\r\nL''amphithéâtre dispose de 4 prises Ethernet de catégorie 5 sur le pupitre. Il dispose également d''un système de vidéo projection sur grand écran. Une prise Ethernet est disponible également dans la régie.\r\nLes bureaux d''administration de la M2L disposent en tout de 27 prises de catégorie 6, pour les neuf bureaux. La salle de reprographie est dotée de 4 prises Ethernet de catégorie 6 pour les systèmes d’impression numériques connectés.'),
(5, 'Services', 'Les ligues disposent de la possibilité d''imprimer en volume et en qualité d''imprimerie sur des ressources d''impression numériques connectées situées dans le local reprographie du rez-de-chaussée dont l''usage fait l''objet d''une facturation à prix coûtant.\r\nUn système de comptage situé sur le serveur d''impression permet au CROSL d’effectuer une facturation mensuelle auprès des ligues :\r\n- une photocopieuse noir et blanc à 70 pages/minute avec différents dispositifs de finition ;\r\n- une imprimante Laser couleur A4/A3 à encre solide à 25 pages/minute ;\r\n- un traceur A2 (1 page / minute) utilisé pour les affiches et banderoles.');

-- --------------------------------------------------------

--
-- Structure de la table `Ligue`
--

CREATE TABLE IF NOT EXISTS `Ligue` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sport` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `Ligue`
--

INSERT INTO `Ligue` (`id`, `user_id`, `nom`, `description`, `url`, `image`, `sport`) VALUES
(1, 4, 'Ligue de football', 'Comme son nom nous le fait penser, le football nous vient d''Angleterre, où il était pratiqué, bien moins rigoureusement que maintenant, et même sous forme de rugby (on disait d''ailleurs rugby-football, c''est-à-dire le football pratiqué dans la ville de Rugby, tout comme il y avait des footballs différents dans d''autres villes anglaises ; on jouait aussi au jeu de ballon en France, sous le nom de "soule" depuis le XVIIe siècle). Petit à petit, les partisans du football joué exclusivement au pied s''organisent et tentent d''unifier leurs règles, que ce soit dans le Royaume-Uni, en Allemagne ou en France.', 'http://lorraine.fff.fr/', 'foot_lorraine.png', 1),
(2, 6, 'Ligue d''aviron', 'Toute l’actualité de l’aviron lorrain est ici en ligne ! Infos, règlements, programmes, résultats, photos, rien ne manquera pour vous faire vivre au quotidien l’aviron en Lorraine ! Bonne navigation à tous et n’hésitez pas à nous contacter pour plus d’informations.', 'http://www.aviron-lorraine.com/', 'aviron.jpg', 1),
(3, 7, 'Ligue de golf', 'La Fédération Française de Golf supprime les délégations régionales en 1983 pour créer des ligues régionales.\r\nAinsi la Ligue de Golf de l''Est regroupe les régions d''Alsace, Champagne-Ardenne, Franche-Comté et Lorraine.\r\nLe Président en est Daniel TURIN, ancien Délégué Régional, entouré de Paul LEVY-RUEFF et René RABERT, vice-présidents, Charles BOHEME, secrétaire et Jacques NANTY, trésorier. La Ligue compte alors 1 800 licenciés.', 'http://www.golf-lorraine.com/', 'golf_lorraine.png', 1),
(4, 8, 'Ligue d''escrime', 'Bienvenue à tous dans l’association " Ligue Lorraine d’Escrime ".\r\nJe vous souhaite une excellente navigation, sur cet outil de communication au profit de tous.\r\nCes pages vont vous permettre de mieux nous connaître. Les informations régulièrement réactualisées vont vous informer de toute notre actualité : événements, manifestations, nouveaux élus, horaires d’ouverture, …\r\nEn souhaitant vous transmettre notre passion et l’envie de vous joindre rapidement à nous,\r\nLe Président.', 'http://www.escrime-lorraine.com/', 'escrime.jpg', 1);

-- --------------------------------------------------------

--
-- Structure de la table `SosPartenaire`
--

CREATE TABLE IF NOT EXISTS `SosPartenaire` (
  `id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  `utilisateur_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `niveau` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `Sport`
--

CREATE TABLE IF NOT EXISTS `Sport` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `User`
--

CREATE TABLE IF NOT EXISTS `User` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `locked` tinyint(1) NOT NULL,
  `expired` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL,
  `confirmation_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)',
  `credentials_expired` tinyint(1) NOT NULL,
  `credentials_expire_at` datetime DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `phone_number` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `born_date` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `User`
--

INSERT INTO `User` (`id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `locked`, `expired`, `expires_at`, `confirmation_token`, `password_requested_at`, `roles`, `credentials_expired`, `credentials_expire_at`, `first_name`, `last_name`, `gender`, `phone_number`, `born_date`) VALUES
(3, 'admin@m2l.fr', 'admin@m2l.fr', 'admin@m2l.fr', 'admin@m2l.fr', 1, '9f3zllkm33kso0o80scwc40cwcoswok', 'jMzVmjJxhybAgCUKVTCmiMFCbdQ6foc23/jOsK8MYzLSDv0RobWN0gUodGZTPj1MuiHsCEC+Ul7Ku38acWrn2A==', '2015-02-03 09:37:56', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:9:"ROLE_USER";i:1;s:10:"ROLE_ADMIN";}', 0, NULL, 'admin', 'admin', 'm', '0564465567', '2015-02-11'),
(4, 'jpdupont@m2l.fr', 'jpdupont@m2l.fr', 'jpdupont@m2l.fr', 'jpdupont@m2l.fr', 1, 'kcnpar4khtwg004gk8480sc8080ogsw', 'rd6TVyrhEYp/uQiJoRHiEJ/hM08PUKMryzxICXJX9eIRUagGjiiR7XAMfFyKgabOYPk0Imf18Ay1Rgg14ZcYHA==', '2015-02-03 09:18:59', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:9:"ROLE_USER";i:1;s:10:"ROLE_LIGUE";}', 0, NULL, 'Jean paul', 'Dupont', 'm', '0674534567', '2015-02-03'),
(5, 'jdavid@m2l.fr', 'jdavid@m2l.fr', 'jdavid@m2l.fr', 'jdavid@m2l.fr', 1, 'ddj03omqd80s88ooowksw8w0cg8wog0', 'yFZfRyHVpXak+sTCZuioAOIupprG2kqF70LhGtrYVTYTbkSYzE7akh5FJpLG9pRyuGs9noSy87Yo+WKztUgo1A==', '2015-02-03 09:20:01', 0, 0, NULL, NULL, NULL, 'a:1:{i:0;s:9:"ROLE_USER";}', 0, NULL, 'John', 'David', 'm', '0655678798', '2015-02-03'),
(6, 'psebastien@m2l.fr', 'psebastien@m2l.fr', 'psebastien@m2l.fr', 'psebastien@m2l.fr', 1, 'bvo0foz6otcgs00s0wwgo44wogww0kk', '/79WZUfnHEGcd65AE1y1hEfcTyXMwslsGi6hb9essMS8FFJ4JugFkbsiVWdTFNnXmkM2ZIqCWGwGMH4v5bQz3A==', '2015-02-03 09:29:47', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:9:"ROLE_USER";i:1;s:10:"ROLE_LIGUE";}', 0, NULL, 'Patrick', 'Sebastien', 'm', '0564354576', '1981-02-19'),
(7, 'mtarraut@m2l.fr', 'mtarraut@m2l.fr', 'mtarraut@m2l.fr', 'mtarraut@m2l.fr', 1, 'bzs9k233m1kc04scgg0ck8sgcgwosg0', 'FNSAh2ALq6QeWAB0/TSvTDeljSWKlP5jSPP8caOmjzTMzSL94eudxaA7+Uhxgu1TifCKDtv/yMcd26RciMy1Kw==', '2015-02-03 09:33:53', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:9:"ROLE_USER";i:1;s:10:"ROLE_LIGUE";}', 0, NULL, 'marcel', 'tarraut', 'm', '0546644534', '1958-02-19'),
(8, 'mpatoulacci@m2l.fr', 'mpatoulacci@m2l.fr', 'mpatoulacci@m2l.fr', 'mpatoulacci@m2l.fr', 1, 'eywvbbv3jns4w4ssg8scswogc44cw44', 'B0k+P3s4er9vYPp+PYcSgHfMo3hsYyw4pUqgh/tPC+7uAVjvXp1k9kyt6HUy5t9CX0Xx/67r87JySuZlcbKzIA==', '2015-02-03 09:37:51', 0, 0, NULL, NULL, NULL, 'a:2:{i:0;s:9:"ROLE_USER";i:1;s:10:"ROLE_LIGUE";}', 0, NULL, 'Marcel', 'patoulacci@m2l.fr', 'm', '0546345463', '1947-02-22');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `Actualite`
--
ALTER TABLE `Actualite`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Annonce`
--
ALTER TABLE `Annonce`
  ADD PRIMARY KEY (`id`), ADD KEY `IDX_39E8AA79FB88E14F` (`utilisateur_id`);

--
-- Index pour la table `Formation`
--
ALTER TABLE `Formation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `formation_user`
--
ALTER TABLE `formation_user`
  ADD PRIMARY KEY (`formation_id`,`user_id`), ADD KEY `IDX_DA4C33095200282E` (`formation_id`), ADD KEY `IDX_DA4C3309A76ED395` (`user_id`);

--
-- Index pour la table `Information`
--
ALTER TABLE `Information`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `Ligue`
--
ALTER TABLE `Ligue`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_3F073F1DA76ED395` (`user_id`);

--
-- Index pour la table `SosPartenaire`
--
ALTER TABLE `SosPartenaire`
  ADD PRIMARY KEY (`id`), ADD KEY `IDX_181A1263AC78BCF8` (`sport_id`), ADD KEY `IDX_181A1263FB88E14F` (`utilisateur_id`);

--
-- Index pour la table `Sport`
--
ALTER TABLE `Sport`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `User`
--
ALTER TABLE `User`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `UNIQ_2DA1797792FC23A8` (`username_canonical`), ADD UNIQUE KEY `UNIQ_2DA17977A0D96FBF` (`email_canonical`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `Actualite`
--
ALTER TABLE `Actualite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `Annonce`
--
ALTER TABLE `Annonce`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `Formation`
--
ALTER TABLE `Formation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `Information`
--
ALTER TABLE `Information`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `Ligue`
--
ALTER TABLE `Ligue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `SosPartenaire`
--
ALTER TABLE `SosPartenaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `Sport`
--
ALTER TABLE `Sport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `User`
--
ALTER TABLE `User`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `Annonce`
--
ALTER TABLE `Annonce`
ADD CONSTRAINT `FK_39E8AA79FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `User` (`id`);

--
-- Contraintes pour la table `formation_user`
--
ALTER TABLE `formation_user`
ADD CONSTRAINT `FK_DA4C33095200282E` FOREIGN KEY (`formation_id`) REFERENCES `Formation` (`id`) ON DELETE CASCADE,
ADD CONSTRAINT `FK_DA4C3309A76ED395` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `Ligue`
--
ALTER TABLE `Ligue`
ADD CONSTRAINT `FK_3F073F1DA76ED395` FOREIGN KEY (`user_id`) REFERENCES `User` (`id`);

--
-- Contraintes pour la table `SosPartenaire`
--
ALTER TABLE `SosPartenaire`
ADD CONSTRAINT `FK_181A1263AC78BCF8` FOREIGN KEY (`sport_id`) REFERENCES `Sport` (`id`),
ADD CONSTRAINT `FK_181A1263FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `User` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
