-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 21 Novembre 2014 à 16:40
-- Version du serveur: 5.5.37-0ubuntu0.14.04.1
-- Version de PHP: 5.5.9-1ubuntu4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `blogkanita`
--

-- --------------------------------------------------------

--
-- Structure de la table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(255) CHARACTER SET utf8 NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `author` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8 NOT NULL,
  `content` text CHARACTER SET utf8 NOT NULL,
  `date_create` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_update` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `author_id` int(11) NOT NULL,
  `cat_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `post`
--

INSERT INTO `post` (`id`, `title`, `content`, `date_create`, `date_update`, `author_id`, `cat_id`) VALUES
(1, 'Mon voyage', 'je test je test', '2014-11-19 14:20:47', '0000-00-00 00:00:00', 0, 0),
(2, 'Ce que j''aime', 'je test je test', '2014-11-19 14:20:47', '0000-00-00 00:00:00', 0, NULL),
(3, 'LALALAAL', 'OUIOUIOUOII', '2014-11-19 14:58:10', '0000-00-00 00:00:00', 0, NULL),
(4, 'COmmment?', 'AHHHHHH OKKKK', '2014-11-19 14:58:10', '0000-00-00 00:00:00', 0, NULL),
(5, 'Mes enfants', '"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."', '2014-11-19 14:58:31', '0000-00-00 00:00:00', 0, NULL),
(6, 'jhk', '<p>hjkjhjk</p>', '2014-11-21 14:28:35', '0000-00-00 00:00:00', 0, NULL),
(7, 'dfgfdgdg', '<p>dfgdfgdgdfg</p>', '2014-11-21 14:29:22', '0000-00-00 00:00:00', 0, NULL),
(8, 'vbnvn', '<p>vbnv</p>', '2014-11-21 14:40:11', '0000-00-00 00:00:00', 0, NULL),
(9, 'kjhkjhk', '<p>hkjhkhhjk</p>', '2014-11-21 15:17:46', '0000-00-00 00:00:00', 0, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) CHARACTER SET utf8 NOT NULL,
  `pass` char(64) CHARACTER SET utf8 NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `admin` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `nom`, `pass`, `email`, `admin`) VALUES
(1, 'kanita', 'kathy', 'kanita@kanita.com', 1),
(2, 'matthias', 'matthias', 'matthias@kanita.com', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
