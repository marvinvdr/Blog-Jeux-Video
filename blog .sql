-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  lun. 09 déc. 2019 à 10:12
-- Version du serveur :  5.7.26
-- Version de PHP :  7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `articleID` int(11) NOT NULL AUTO_INCREMENT,
  `titre` char(255) CHARACTER SET latin1 NOT NULL,
  `contenu` text CHARACTER SET latin1 NOT NULL,
  `dateArt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `catID` int(11) NOT NULL,
  `auteur` char(255) CHARACTER SET latin1 NOT NULL,
  `image` char(255) CHARACTER SET latin1 NOT NULL,
  PRIMARY KEY (`articleID`)
) ENGINE=InnoDB AUTO_INCREMENT=60 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `article`
--

INSERT INTO `article` (`articleID`, `titre`, `contenu`, `dateArt`, `catID`, `auteur`, `image`) VALUES
(33, '[Test PS4] Death Stranding, le jeu de lâ€™annÃ©e ?', 'Quelques jours aprÃ¨s avoir testÃ© Concrete Genie et son gameplay original Ã  base de coups de pinceaux et de tonnes de peintures, me revoilÃ  de nouveau propulsÃ© dans lâ€™univers dâ€™un jeu vidÃ©o Ã©trangement dÃ©paysant avec Death Stranding ! DerniÃ¨re oeuvre en date du gÃ©ant crÃ©ateur Hideo Kojima, Death Stranding a pour rappel dÃ©ferlÃ© la chronique dÃ¨s sa sortie en rÃ©coltant un nombre incalculable de critiques positives. Avec son scÃ©nario Ã©tonnamment mystÃ©rieux et dÃ©calÃ©, son gameplay aussi bien complexe que controversÃ© et son casting XXL, le jeu tout droit sorti de la tÃªte du fondateur de Metal Gear Solid avait en effet de quoi faire parler ! AprÃ¨s quelques bonnes heures de jeu sur le titre et des dizaines de livraisons rÃ©alisÃ©es (la majeure partie du gameplay se concentre lÃ -dessus), je suis donc en mesure de vous donner mes impressions sur cet opus. Accrochez-vous !', '2019-11-28 09:53:12', 7, 'Michel', 'test-death-stranding-ps4.jpg5ddf9908ac958'),
(34, '[Test] Concrete Genie, lâ€™exclusivitÃ© PS4 qui va vous redonner le sourire', ' 5 ans aprÃ¨s avoir connu sa premiÃ¨re entrÃ©e dans lâ€™univers des jeux vidÃ©os avec le titre Entwined sorti sur PS4 en 2014, Pixelopus est de nouveau sur le devant de la scÃ¨ne avec Concrete Genie, cette autre exclusivitÃ© Playstation qui devait proposer un gameplay novateur portÃ© sur lâ€™art et la crÃ©ativitÃ©. DÃ©jÃ  annoncÃ© en 2017, le petit jeu du limitÃ© studio appartenant Ã  Sony Interactive Entertainment avait alors dÃ©ferlÃ© la chronique grÃ¢ce Ã  son univers tout aussi magique que chaotique. Des coups de pinceaux aux couleurs magnifiques et aux lignes merveilleuses pour lutter contre la noirceur tÃ©nÃ©breuse de Denska (la ville du jeu), telle Ã©tait donc la principale devise de Concrete Genie quand il sâ€™est annoncÃ© sur la plateforme. Nous avons eu le plaisir de tester le jeu, et nous rÃ©pondons maintenant Ã  la fameuse question que beaucoup de personnes se posent : que vaut vraiment ce Concrete Genie ?', '2019-11-28 09:54:54', 7, 'Michel', 'concrete-genie-ps4.jpg5ddf996e9e732'),
(36, '[Test] Days Gone, une oeuvre gÃ©nÃ©reuse sur', ' AnnoncÃ© en grande pompe par Sony il y a quelques annÃ©es, Days Gone a enfin pointÃ© le bout de son nez dans nos chaumiÃ¨res. DÃ©veloppÃ© par Bend Studio, connu pour avoir offert des titres tels que Siphon Filter, Uncharted Golden Abyss ou encore Resistance Retribution. Cette fois le studio sâ€™attaque Ã  un nouveau challenge, puisquâ€™ils sâ€™essaient avec Days Gone Ã  leur premier open world. Le jeu de zombie en monde ouvert de Bend Studio tient-il toutes ses promesses ? La rÃ©ponse dans la suite de ce test.', '2019-11-28 09:57:11', 1, 'Michel', 'days-gone-critique-zombi.jpg5ddf99f75aa8b'),
(37, '[Test PS4] Spider-Man : Le tisseur au sommet !', ' AnnoncÃ© en grandes pompes lors de lâ€™E3 2016, Spider-Man Ã©tait trÃ¨s rapidement devenu un jeu trÃ¨s attendu. Les adaptations vidÃ©oludiques du tisseur ont Ã©tÃ© lÃ©gions ces 15-20 derniÃ¨res annÃ©es, avec des jeux de qualitÃ© trÃ¨s variables qui ont Ã©tÃ© capables du meilleur comme du pire. AprÃ¨s deux annÃ©es de teasing et de hype le jeu dâ€™insomniac Games est donc enfin disponible en exclusivitÃ© sur la console de Sony. Que vaut cette nouvelle adaptation de lâ€™homme araignÃ©e ? RÃ©ponse dans le test.', '2019-11-28 09:58:39', 1, 'Michel', 'test-spiderman-ps4-blog-jeux-video.jpg5ddf9a4f66cb9');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `catID` int(11) NOT NULL AUTO_INCREMENT,
  `nomCat` char(255) NOT NULL,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`catID`, `nomCat`) VALUES
(1, 'Combat'),
(2, 'FPS'),
(7, 'Aventure'),
(8, 'Sport');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE IF NOT EXISTS `commentaire` (
  `comID` int(11) NOT NULL AUTO_INCREMENT,
  `membreID` int(11) NOT NULL,
  `articleID` int(11) NOT NULL,
  `dateCom` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `contenuCom` varchar(500) NOT NULL,
  PRIMARY KEY (`comID`)
) ENGINE=InnoDB AUTO_INCREMENT=52 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaire`
--

INSERT INTO `commentaire` (`comID`, `membreID`, `articleID`, `dateCom`, `contenuCom`) VALUES
(50, 11, 36, '2019-11-28 13:20:41', 'fezfezf');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

DROP TABLE IF EXISTS `membre`;
CREATE TABLE IF NOT EXISTS `membre` (
  `membreID` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` char(255) NOT NULL,
  `motDePasse` char(255) NOT NULL,
  `email` char(255) NOT NULL,
  `rol` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`membreID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`membreID`, `pseudo`, `motDePasse`, `email`, `rol`) VALUES
(1, 'Michel', '$2y$10$8959SBn1L14CptQEmD/g8e35hHWFioeLR6rD3PhaArpEFdniJ2BVC', 'Michel@theBoss', 1),
(10, 'Admin', '$2y$10$SHyt.J4x.PRc2x8CA/47kehcnc5FOgp4LDRT7SU/3Y1kREU1suIO2', 'admin@admin.com', 1),
(11, 'membre', '$2y$10$0nm0oTvsNzmuqrh40J6Hl.74rdF/fq9FYSmWfPYiNvIBNjLbZqP9e', 'membre@membre.com', 0),
(12, 'test', '$2y$10$QtmyOaAPwz2bMkBecDURA./3U3QplYazdsPy6bFXjqkbWtv0K3sc2', 'test@test.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
