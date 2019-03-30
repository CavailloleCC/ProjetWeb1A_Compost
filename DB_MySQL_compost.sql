-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  sam. 30 mars 2019 à 17:16
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `compost`
--

-- --------------------------------------------------------

--
-- Structure de la table `aide`
--

CREATE TABLE `aide` (
  `numAide` int(11) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `aide`
--

INSERT INTO `aide` (`numAide`, `description`) VALUES
(1, 'Il y a seulement un indice par lieu.'),
(2, 'Le code pour accéder au compost suit un ordre alphabétique.'),
(3, 'Et si dans le bâtiment Sud, \"si\" était l\'indice ?');

-- --------------------------------------------------------

--
-- Structure de la table `equipe`
--

CREATE TABLE `equipe` (
  `numEquipe` int(11) NOT NULL,
  `login` varchar(20) NOT NULL,
  `mdp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `equipe`
--

INSERT INTO `equipe` (`numEquipe`, `login`, `mdp`) VALUES
(7, 'equipeeug', 'eaf63d6c9f5620918534f224fc6c89db'),
(8, 'equipecel', '42bc352460e9ad5c8badc00730a73bec');

-- --------------------------------------------------------

--
-- Structure de la table `lieu`
--

CREATE TABLE `lieu` (
  `numLieu` int(11) NOT NULL,
  `nomLieu` varchar(20) NOT NULL,
  `image` varchar(20) NOT NULL,
  `enigme1` varchar(500) NOT NULL,
  `enigme2` varchar(500) NOT NULL,
  `enigme3` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `lieu`
--

INSERT INTO `lieu` (`numLieu`, `nomLieu`, `image`, `enigme1`, `enigme2`, `enigme3`) VALUES
(1, 'Bâtiment Ouest', 'batOuest.jpg', 'Il n\'y a pas de potager sans compost, comment faire ? Aide moi à trouver ce compost !!', 'Je suis chaud, plus chaud que le climat, il serait peut-être temps de m\'arrêter', 'Notre école est la première école de cognitique en France'),
(2, 'Patio', 'patio.jpg', 'Regarde cette <a href=\"mapSecrete.php\"> carte secrète </a>, elle t\'aidera peut-être', 'Je te déconseille de t\'asseoir sur ce coussin du Patio !', 'Mon premier est un adjectif possessif au féminin singulier.\r\n                                    Il n\'y a pas de sandwich sans mon deuxième.\r\n\r\n1 + 1 font mon troisième.\r\n\r\nMon quatrième est un \"non\" anglais.\r\n\r\nMon cinquième est un pronom personnel féminin.\r\n\r\nMon tout est un arbre.\r\n\r\nHihihi !'),
(3, 'Bâtiment Nord', 'batNord.png', 'Oups il y a un cours de M.Saracco : \"Pour les statistiques inférentielles du cosinus, la médiane de cette tangente, la formule à résoudre est : 1/n somme de i=1 jusqu\'à n de (6 x 2)/3 ', 'Nina a encore perdu son badge... Tu devrais aller lui dire...', 'Utilisez moi si le radiateur du bâtiment Ouest prend feu'),
(4, 'Bâtiment Sud', 'batSud.jpg', 'Si vous avez un petit creu, utilisez moi !', 'Si vous avez un petit coup de mou, je serais là pour vous !', 'Si les étudiants boivent trop, ils ne seront pas en mesure de bien travailler'),
(5, 'Bâtiment Est', 'batEst.jpg', 'Dieu te guidera vers le chemin', 'Attention ! Les bouteilles en verre ne vont pas dans cette poubelle, renseigne toi mieux !!', 'Au nom du Père, du Fils et du Saint Esprit... Viens nous rejoindre dans le royaume des cieux !');

-- --------------------------------------------------------

--
-- Structure de la table `maitre_du_jeu`
--

CREATE TABLE `maitre_du_jeu` (
  `numMdj` int(11) NOT NULL,
  `loginMdj` varchar(20) NOT NULL,
  `mdpMdj` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `maitre_du_jeu`
--

INSERT INTO `maitre_du_jeu` (`numMdj`, `loginMdj`, `mdpMdj`) VALUES
(1, 'mdjun', 'numberone');

-- --------------------------------------------------------

--
-- Structure de la table `partie`
--

CREATE TABLE `partie` (
  `numPartie` int(11) NOT NULL,
  `tpsTotal` time(6) NOT NULL,
  `nbrAide` int(11) NOT NULL,
  `numEquipe` int(11) NOT NULL,
  `login` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `partie`
--

INSERT INTO `partie` (`numPartie`, `tpsTotal`, `nbrAide`, `numEquipe`, `login`) VALUES
(0, '00:00:30.000000', 2, 3, ''),
(1, '00:00:01.500000', 1, 3, '');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `aide`
--
ALTER TABLE `aide`
  ADD PRIMARY KEY (`numAide`);

--
-- Index pour la table `equipe`
--
ALTER TABLE `equipe`
  ADD PRIMARY KEY (`numEquipe`),
  ADD UNIQUE KEY `login` (`login`);

--
-- Index pour la table `lieu`
--
ALTER TABLE `lieu`
  ADD PRIMARY KEY (`numLieu`);

--
-- Index pour la table `maitre_du_jeu`
--
ALTER TABLE `maitre_du_jeu`
  ADD PRIMARY KEY (`numMdj`);

--
-- Index pour la table `partie`
--
ALTER TABLE `partie`
  ADD PRIMARY KEY (`numPartie`),
  ADD KEY `numEquipe` (`numEquipe`),
  ADD KEY `login` (`login`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `aide`
--
ALTER TABLE `aide`
  MODIFY `numAide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `equipe`
--
ALTER TABLE `equipe`
  MODIFY `numEquipe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `maitre_du_jeu`
--
ALTER TABLE `maitre_du_jeu`
  MODIFY `numMdj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
