-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 14 Janvier 2015 à 15:48
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
