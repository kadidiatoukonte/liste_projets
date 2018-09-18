-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Mar 18 Septembre 2018 à 14:12
-- Version du serveur :  5.7.23-0ubuntu0.16.04.1
-- Version de PHP :  7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `basket_addict`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `basket`
--

CREATE TABLE `basket` (
  `id` int(11) NOT NULL,
  `id_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `info_site`
--

CREATE TABLE `info_site` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `info_site`
--

INSERT INTO `info_site` (`id`, `name`) VALUES
(1, 'Basket Addict');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `content` text NOT NULL,
  `dispo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `content`, `dispo`) VALUES
(1, 'Nike Air Span II SE Mini Swoosh - Black/Red', 109, 'Une fois de plus, la marque américaine présente une nouvelle version d’une silhouette lancée à la fin des années 80, la Nike Air Span 2. Ce modèle aux lignes rétro arbore une construction associant différents matériaux comme du mesh, de la feutrine et du cuir. Côté coloris, cette édition présente une association de noir et de détails rouges apportant du contraste à l’ensemble à l’image du mini-Swoosh. Une semelle blanc cassé finalise son design. Cette Nike Air Span II SE Mini Swoosh Black/Red fait partie de la collection automne/hiver 2018.', 1),
(2, 'New Balance M1500.9 FT - Made in UK', 109, 'Les équipes de la marque américaine ont revu le design de l’emblématique New Balance 1500 en lui apportant un côté plus technique avec cette semelle empruntée à la NB990v3. Ce changement confère un look tout de suite plus moderne à la silhouette. Son assemblage a été réalisé dans l’usine anglaise de la marque à Flimby avec ce mélange de cuir suédé et de mesh. Aux niveaux des couleurs, la paire affiche un mix de différents bleus, de rose, de blanc et de gris. Cette New Balance M1500.9 FT, Made in UK, appartient à la collection Automne/Hiver 2018.', 1),
(3, 'Asics Gel Saga - White/Asics Blue', 109, 'Pour sa nouvelle collection, la firme japonaise relance l\'Asics Gel Saga dans son coloris d\'origine. Initialement lancé en 1991, le modèle arbore une empeigne mêlant du mesh à des empiècements en feutrine comme à son origine. Côté coloris, cette édition se pare d’une teinte blanche accompagnée par des touches de bleu et d’orange. Le tout est posé sur une semelle blanche couplée à une semelle d’usure reprenant les teintes de l’empeigne. Cette Asics Gel Saga White/Asics Blue est issue de la collection Automne/Hiver 2018.', 1),
(4, 'Reebok ACT 300 MU - Chalk/Teal Energy', 109, 'Reebok propose une version très sobre de la Reebok ACT 300. L’édition est parée d’un cuir entièrement beige. On remarque que l’ensemble des logos sont dans une teinte verte. Ces détails confèrent à cette édition un look vintage. Une bande verte, sur l’arrière du modèle, vient apporter du contraste à l’ensemble. Enfin une semelle monochrome beige parachève le design de cette itération. Cette Reebok ACT 300 MU Chalk/Teal Energy appartient à la collection Automne/Hiver 2018.', 1);

-- --------------------------------------------------------

--
-- Structure de la table `source_img`
--

CREATE TABLE `source_img` (
  `id` int(11) NOT NULL,
  `src` varchar(255) NOT NULL,
  `product_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `source_img`
--

INSERT INTO `source_img` (`id`, `src`, `product_id`) VALUES
(1, 'img/air-span.jpg', 1),
(2, 'img/new-balance-made-in-uk.jpg', 2),
(3, 'img/gel-saga-whiteasics-blue.jpg', 3),
(4, 'img/act-300-mu-chalkteal-energy.jpg', 4);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Index pour la table `info_site`
--
ALTER TABLE `info_site`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `source_img`
--
ALTER TABLE `source_img`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `info_site`
--
ALTER TABLE `info_site`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `source_img`
--
ALTER TABLE `source_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `basket`
--
ALTER TABLE `basket`
  ADD CONSTRAINT `basket_ibfk_1` FOREIGN KEY (`id_product`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `source_img`
--
ALTER TABLE `source_img`
  ADD CONSTRAINT `source_img_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
