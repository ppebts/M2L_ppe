-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 14 Janvier 2015 à 15:56
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

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
-- Structure de la table `actualite`
--

CREATE TABLE IF NOT EXISTS `actualite` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `actualite`
--

INSERT INTO `actualite` (`id`, `titre`, `contenu`, `image`) VALUES
(1, 'le ski c''est la vie', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sport2.jpg'),
(2, 'actu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sport1.jpg'),
(3, 'actu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sport3.jpg'),
(4, 'actu', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'sport4.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `annonce`
--

CREATE TABLE IF NOT EXISTS `annonce` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prix` int(11) NOT NULL,
  `utilisateurAnonce_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_39E8AA79DE504934` (`utilisateurAnonce_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `annonce`
--

INSERT INTO `annonce` (`id`, `titre`, `description`, `image`, `prix`, `utilisateurAnonce_id`) VALUES
(1, 'annonce', 'annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf annonce de ouf ', 'sandwich', 50, 1),
(2, 'velo', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'velo.jpg', 150, 2),
(3, 'raquette', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'raquette.jpg', 100, 2),
(4, 'ballon', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'ballon.jpg', 50, 7);

-- --------------------------------------------------------

--
-- Structure de la table `formation`
--

CREATE TABLE IF NOT EXISTS `formation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `duree` int(11) NOT NULL,
  `debut` datetime NOT NULL,
  `lieu` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nbparticipants` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Contenu de la table `formation`
--

INSERT INTO `formation` (`id`, `nom`, `description`, `duree`, `debut`, `lieu`, `image`, `nbparticipants`) VALUES
(1, 'google', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 101010, '2014-12-18 00:00:00', 'c2', 'google.jpg', 0),
(2, 'word', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 41201, '2015-01-20 00:00:00', 'b4', 'word.png', 0),
(3, 'excel', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 50401, '2015-01-20 00:00:00', 'c3', 'excel.png', 0),
(4, 'powerpoint', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 50103, '2015-01-20 00:00:00', 'a3', 'powerpoint.png', 0);

-- --------------------------------------------------------

--
-- Structure de la table `information`
--

CREATE TABLE IF NOT EXISTS `information` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Contenu de la table `information`
--

INSERT INTO `information` (`id`, `titre`, `contenu`) VALUES
(1, 'statut juridique', 'La Maison des Ligues est un établissement du Conseil Régional. Ce n’est pas une entité juridique en propre.\r\nElle est financée à 100 % (pour son fonctionnement et pour la construction récente de l’extension des bâtiments C et D) par le Conseil Régional et sans aucune participation du Conseil Général de Meurthe et Moselle, bien qu’elle abrite un certain nombre de comités départementaux. Une convention de cogestion a été passée entre le Conseil Régional et le Comité Régional Olympique et Sportif de Lorraine pour la gestion de l’outil « Maison des Ligues ». Le CROSL est une association financée par le ministère via le CNDS (Centre National de Développement du Sport).'),
(2, 'locaux', 'Le site se compose de quatre bâtiments, dont deux dotés de quatre étages et donc de 5 niveaux (les bâtiments A et C) et deux de plain-pied (les bâtiments B et D) dotés d’un seul rez-de-chaussée. Les bâtiments C et D sont neufs. Les bâtiments A et B datent d''une quinzaine d''années.\r\nLes étages des bâtiments A et C hébergent les bureaux des ligues locataires et le rez-de-chaussée des quatre bâtiments héberge des espaces mutualisés : un amphithéâtre de 200 places avec une régie, 8 salles de réunion de 12 à 50 places, un hall d''accueil, une salle de convivialité et son office traiteur, ainsi qu''une salle de formation multimédia dotée de 24 postes. On y trouve également la partie « accueil » des neuf bureaux de l''administration de la M2L. L’autre partie se trouve au premier étage du bâtiment C. Différents locaux de service (archives, stockage local d''entretien ...) se trouvent en sous-sol.\r\nEn fonction de leur taille, les 24 structures hébergées occupent un ou plusieurs bureaux. Au total, la M2L offre 80 bureaux. A chaque étage des bâtiments de bureaux se trouve une petite salle de réunion que les ligues utilisent sans réservation. L''ensemble des autres salles ressources sont accessibles sur réservation, en journée comme en soirée.'),
(3, 'personnel', 'Les personnes qui travaillent ici sont de différentes catégories. Il y a d’abord ceux que j’appelle les «professionnels». Il y a deux employés du Conseil Régional (des factotums). Il y a sept ETP (Équivalents Temps Plein) employés par le CROSL ; il y a le personnel des prestataires (gardiennage, ménage) et les salariés des ligues. Ensuite, il y a les bénévoles qui sont les élus des associations : CROSL, CDOS, ligues, comités départementaux. Il y a également les élus du Conseil Régional et enfin tous les autres : visiteurs, stagiaires, etc.'),
(4, 'materiel', 'Chaque bureau de ligue du bâtiment A dispose de deux prises Ethernet de catégorie 5 et d''une prise téléphonique. Dans le nouveau bâtiment C, ce sont trois prises Ethernet de catégorie 6 qui sont disponibles dans chaque bureau pour connecter du matériel informatique ou un appareil de téléphonie IP.\r\nChaque salle de réunion dispose d''une prise Ethernet pour la connexion d''un PC portable au réseau (de catégorie 5 dans le bâtiment B et 6 dans le bâtiment D). Elle dispose en outre d''un système fixe de vidéo projection, mais pas d''ordinateur à demeure.\r\nLa salle de formation multimédia dispose de 26 prises Ethernet de catégorie 5, une pour chacun des 25 PC (24 PC "stagiaires" et un PC "formateur"), et la dernière pour une imprimante réseau.\r\nL''amphithéâtre dispose de 4 prises Ethernet de catégorie 5 sur le pupitre. Il dispose également d''un système de vidéo projection sur grand écran. Une prise Ethernet est disponible également dans la régie.\r\nLes bureaux d''administration de la M2L disposent en tout de 27 prises de catégorie 6, pour les neuf bureaux. La salle de reprographie est dotée de 4 prises Ethernet de catégorie 6 pour les systèmes d’impression numériques connectés.'),
(5, 'service', 'Les ligues disposent de la possibilité d''imprimer en volume et en qualité d''imprimerie sur des ressources d''impression numériques connectées situées dans le local reprographie du rez-de-chaussée dont l''usage fait l''objet d''une facturation à prix coûtant.\r\nUn système de comptage situé sur le serveur d''impression permet au CROSL d’effectuer une facturation mensuelle auprès des ligues :\r\n- une photocopieuse noir et blanc à 70 pages/minute avec différents dispositifs de finition ;\r\n- une imprimante Laser couleur A4/A3 à encre solide à 25 pages/minute ;\r\n- un traceur A2 (1 page / minute) utilisé pour les affiches et banderoles.');

-- --------------------------------------------------------

--
-- Structure de la table `ligue`
--

CREATE TABLE IF NOT EXISTS `ligue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `url` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sport` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `ligue`
--

INSERT INTO `ligue` (`id`, `nom`, `description`, `url`, `image`, `sport`) VALUES
(3, 'Ligue de Golf', 'Les lorrains et lorraines ont ainsi la chance de voir implantés sur leur région de nombreux golfs. Une activité développée autour de golfs verdoyants dans divers secteurs autour des départements et grandes villes. \r\n\r\nLa Ligue de golf de Lorraine compte alors un peu plus de 13 000 licenciés.', 'http://www.golf-lorraine.com/', 'golf_lorraine.png', 0),
(4, 'Ligue de Football', 'Retrouvez, en un seul clic,  le calendrier des rencontres, les fiches d''inscription et le calendrier des formations, mises en place par l''Equipe Technique Régionale, qui se dérouleront tout au long de l''année 2015.', 'http://lorraine.fff.fr/cg/5600/www/index.shtml', 'foot_lorraine.png', 0),
(5, 'Ligue de Badminton', 'La Ligue Lorraine de Badminton (LLBaD) affiliée à la Fédération Française de Badminton a été créée le 15 septembre 1987. \r\nLa LLBaD est une association régie par la loi des associations du 1er juillet 1901.', 'http://www.lorbad.com/', 'bad_lorraine.jpg', 0),
(6, 'Ligue de Tennis', 'Retrouver toutes les informations concernant le tennis en Lorraine, les matchs prévus, les scores de la saison en cours, les dates des tournois à venir, les règles... \r\n\r\nDésormais il est également possible de s''inscrire au tournois à venir directement sur le site !\r\n\r\n', 'http://www.ligue.fft.fr/lorraine/lorraine_a/cms/index_public.php?PHPSESSID=8e0ff9125332f3ee7d374188daf0a879&us_action=show_note&ui_id_site=1&ui_id_doc=1000600001', 'tennis_lorraine.png', 0),
(7, 'Ligue des sports de glace', 'La Fédération Française des Sports de Glace, agréée par le Ministère de la Jeunesse et des Sports, représente toutes les disciplines issues de sa propre Fédération Internationale (ISU). \r\n\r\nCes disciplines sont au nombre de 9 : le patinage artistique, la danse sur glace, patinage synchronisé, ballet sur glace, le patinage de vitesse, le bobsleigh, la luge, le skeleton, le curling.', 'http://www.lorraine.ffsg.org/accueil/bienvenue_sur_le_site_de_la_ligue.html', 'glace_lorraine.png', 0),
(8, 'Ligue de sport adapté ', 'La Ligue Lorraine a reçu une délégation de service public du Ministère en charge des sports pour organiser, développer, coordonner, promouvoir et contrôler la pratique des activités physiques et sportives ainsi que des manifestations inhérentes à cette pratique en direction des personnes en situation de handicap mental ou psychique.', 'http://www.liguelorrainesportadapte.com/', 'handi.jpg', 0),
(9, 'Ligue d''Aviron', 'Toute l’actualité de l’aviron lorrain est ici en ligne ! Infos, règlements, programmes, résultats, photos, rien ne manquera pour vous faire vivre au quotidien l’aviron en Lorraine ! Bonne navigation à tous et n’hésitez pas à nous contacter pour plus d’informations.', 'http://www.aviron-lorraine.com/', 'aviron.jpg', 0),
(10, 'Ligue d''escrime', 'Bienvenue à tous dans l’association " Ligue Lorraine d’Escrime ".\r\n\r\nJe vous souhaite une excellente navigation, sur cet outil de communication au profit de tous.\r\n\r\nCes pages vont vous permettre de mieux nous connaître. Les informations régulièrement réactualisées vont vous informer de toute notre actualité : événements, manifestations, nouveaux élus, horaires d’ouverture, …\r\n\r\nEn souhaitant vous transmettre notre passion et l’envie de vous joindre rapidement à nous,', 'http://escrime-lorraine.com/', 'escrime.jpg', 0);

-- --------------------------------------------------------

--
-- Structure de la table `sospartenaire`
--

CREATE TABLE IF NOT EXISTS `sospartenaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `heure` time NOT NULL,
  `niveau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `utilisateurSos_id` int(11) NOT NULL,
  `sport_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_181A12638CCD9C74` (`utilisateurSos_id`),
  KEY `IDX_181A1263AC78BCF8` (`sport_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=11 ;

--
-- Contenu de la table `sospartenaire`
--

INSERT INTO `sospartenaire` (`id`, `titre`, `description`, `date`, `heure`, `niveau`, `utilisateurSos_id`, `sport_id`) VALUES
(6, 'sport', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-01-08', '12:30:00', 'expert', 1, 1),
(7, 'sport', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-01-15', '13:30:00', 'naze', 1, 1),
(8, 'sport', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-01-15', '14:00:00', 'expert', 6, 3),
(9, 'sport', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-01-15', '15:50:00', 'bon', 7, 4),
(10, 'sport', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2015-01-15', '11:00:00', 'bon', 8, 5);

-- --------------------------------------------------------

--
-- Structure de la table `sport`
--

CREATE TABLE IF NOT EXISTS `sport` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=12 ;

--
-- Contenu de la table `sport`
--

INSERT INTO `sport` (`id`, `nom`) VALUES
(1, 'foot'),
(2, 'tennis'),
(3, 'ski'),
(4, 'snowboard'),
(5, 'curling'),
(6, 'rugby'),
(7, 'athlétisme'),
(8, 'cyclisme'),
(9, 'basket'),
(10, 'baseball'),
(11, 'skate');

-- --------------------------------------------------------

--
-- Structure de la table `typeutilisateur`
--

CREATE TABLE IF NOT EXISTS `typeutilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `libele` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=4 ;

--
-- Contenu de la table `typeutilisateur`
--

INSERT INTO `typeutilisateur` (`id`, `libele`) VALUES
(1, 'admin'),
(2, 'ligue'),
(3, 'salarié');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE IF NOT EXISTS `utilisateur` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `civilite` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mdp` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `utilisateurType_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_9B80EC64926F6807` (`utilisateurType_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `nom`, `prenom`, `civilite`, `email`, `mdp`, `telephone`, `date_naissance`, `utilisateurType_id`) VALUES
(1, 'magne', 'benjamin', 'monsieur', 'bmagne@ppe.com', 'azeaze', '0675070608', '2014-12-09', 1),
(2, 'Hollande', 'François', 'monsieur', 'francoishollande@tocard.com', 'azeaze', '0674455344', '2014-12-12', 3),
(6, 'sebastien', 'patrcik', 'mr', 'patrick@seb.com', 'azeaze', '0607050405', '2015-01-14', 3),
(7, 'princet', 'alexis', 'mr', 'alexis.princet@y-nov.com', 'azeaze', '0506040506', '2015-01-14', 1),
(8, 'mauray', 'florian', 'mr', 'florian.moray@y-nov.com', 'azeaze', '5040503040', '2015-01-22', 1),
(9, 'durand', 'joffrey', 'mr', 'joffrey.durand@y-nov.com', 'azeaze', '0506040503', '2015-01-07', 1);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur_formation`
--

CREATE TABLE IF NOT EXISTS `utilisateur_formation` (
  `utilisateur_id` int(11) NOT NULL,
  `formation_id` int(11) NOT NULL,
  PRIMARY KEY (`utilisateur_id`,`formation_id`),
  KEY `IDX_20EED493FB88E14F` (`utilisateur_id`),
  KEY `IDX_20EED4935200282E` (`formation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `annonce`
--
ALTER TABLE `annonce`
  ADD CONSTRAINT `FK_39E8AA79DE504934` FOREIGN KEY (`utilisateurAnonce_id`) REFERENCES `utilisateur` (`id`);

--
-- Contraintes pour la table `sospartenaire`
--
ALTER TABLE `sospartenaire`
  ADD CONSTRAINT `FK_181A12638CCD9C74` FOREIGN KEY (`utilisateurSos_id`) REFERENCES `utilisateur` (`id`),
  ADD CONSTRAINT `FK_181A1263AC78BCF8` FOREIGN KEY (`sport_id`) REFERENCES `sport` (`id`);

--
-- Contraintes pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD CONSTRAINT `FK_9B80EC64926F6807` FOREIGN KEY (`utilisateurType_id`) REFERENCES `typeutilisateur` (`id`);

--
-- Contraintes pour la table `utilisateur_formation`
--
ALTER TABLE `utilisateur_formation`
  ADD CONSTRAINT `FK_20EED4935200282E` FOREIGN KEY (`formation_id`) REFERENCES `formation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_20EED493FB88E14F` FOREIGN KEY (`utilisateur_id`) REFERENCES `utilisateur` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
