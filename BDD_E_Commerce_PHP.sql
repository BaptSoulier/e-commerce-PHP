-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 21 fév. 2024 à 21:57
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `e_comerce`
--

-- --------------------------------------------------------

--
-- Structure de la table `adress`
--

CREATE TABLE `adress` (
  `ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `Country` varchar(255) NOT NULL,
  `Full_name` varchar(255) NOT NULL,
  `Delivery_Phone` varchar(20) NOT NULL,
  `Adress` varchar(255) NOT NULL,
  `Adress_add_info` varchar(255) DEFAULT NULL,
  `Postal_code` varchar(20) NOT NULL,
  `City` varchar(255) NOT NULL,
  `Default_address` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `PID` int(11) DEFAULT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `code`
--

CREATE TABLE `code` (
  `ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `Code` varchar(255) DEFAULT NULL,
  `Nb_Use` int(11) DEFAULT NULL,
  `Expiration_Date` date DEFAULT NULL,
  `Usable` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `order_history`
--

CREATE TABLE `order_history` (
  `ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL,
  `Total` float DEFAULT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `payment`
--

CREATE TABLE `payment` (
  `ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `Method` varchar(255) NOT NULL,
  `BIC` varchar(255) NOT NULL,
  `IBAN` varchar(255) NOT NULL,
  `Card_number` varchar(255) NOT NULL,
  `Name_on_card` varchar(255) NOT NULL,
  `Expiration_Date` varchar(255) NOT NULL,
  `CVV` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Category` varchar(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Image` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Rating` int(11) DEFAULT NULL,
  `Rest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `profil`
--

CREATE TABLE `profil` (
  `ID` int(11) NOT NULL,
  `Admin` tinyint(1) DEFAULT 0,
  `User_Name` varchar(255) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `E_Verif` tinyint(1) DEFAULT 0,
  `PP` varchar(255) NOT NULL,
  `Pw` varchar(255) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL,
  `Loyalty_point` int(11) NOT NULL DEFAULT 0,
  `History` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `rating`
--

CREATE TABLE `rating` (
  `ID` int(11) NOT NULL,
  `PID` int(11) DEFAULT NULL,
  `Rating` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

--
-- Structure de la table `wishlist`
--

CREATE TABLE `wishlist` (
  `ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `PID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_User_id_1` (`UID`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_user_id_3` (`UID`),
  ADD KEY `fk_product_id_2` (`PID`);

--
-- Index pour la table `code`
--
ALTER TABLE `code`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_user_id_2` (`UID`);

--
-- Index pour la table `order_history`
--
ALTER TABLE `order_history`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_cart_id_1` (`CID`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_user_id_4` (`UID`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_rating_id_1` (`Rating`);

--
-- Index pour la table `profil`
--
ALTER TABLE `profil`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD KEY `fk_Order_History_1` (`History`);

--
-- Index pour la table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_product_id_1` (`PID`);

--
-- Index pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_user_id_5` (`UID`),
  ADD KEY `fk_product_id_5` (`PID`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `adress`
--
ALTER TABLE `adress`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `cart`
--
ALTER TABLE `cart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `code`
--
ALTER TABLE `code`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `order_history`
--
ALTER TABLE `order_history`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `profil`
--
ALTER TABLE `profil`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rating`
--
ALTER TABLE `rating`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adress`
--
ALTER TABLE `adress`
  ADD CONSTRAINT `fk_User_id_1` FOREIGN KEY (`UID`) REFERENCES `profil` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `fk_product_id_2` FOREIGN KEY (`PID`) REFERENCES `product` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_id_3` FOREIGN KEY (`UID`) REFERENCES `profil` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `code`
--
ALTER TABLE `code`
  ADD CONSTRAINT `fk_user_id_2` FOREIGN KEY (`UID`) REFERENCES `profil` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `order_history`
--
ALTER TABLE `order_history`
  ADD CONSTRAINT `fk_cart_id_1` FOREIGN KEY (`CID`) REFERENCES `cart` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_user_id_4` FOREIGN KEY (`UID`) REFERENCES `profil` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `fk_rating_id_1` FOREIGN KEY (`Rating`) REFERENCES `rating` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `profil`
--
ALTER TABLE `profil`
  ADD CONSTRAINT `fk_Order_History_1` FOREIGN KEY (`History`) REFERENCES `order_history` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `fk_product_id_1` FOREIGN KEY (`PID`) REFERENCES `product` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `wishlist`
--
ALTER TABLE `wishlist`
  ADD CONSTRAINT `fk_product_id_5` FOREIGN KEY (`PID`) REFERENCES `product` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_user_id_5` FOREIGN KEY (`UID`) REFERENCES `profil` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
