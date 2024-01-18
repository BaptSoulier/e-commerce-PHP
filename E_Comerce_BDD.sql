-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 18 jan. 2024 à 17:42
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `cart`
--

CREATE TABLE `cart` (
  `ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `PID` int(11) DEFAULT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `command`
--

CREATE TABLE `command` (
  `ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL,
  `Order_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `invoices`
--

CREATE TABLE `invoices` (
  `ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `CID` int(11) DEFAULT NULL,
  `Total` decimal(10,2) NOT NULL,
  `Invoice_date` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `photo`
--

CREATE TABLE `photo` (
  `ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `PID` int(11) DEFAULT NULL,
  `Link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

CREATE TABLE `product` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Price` decimal(10,2) NOT NULL,
  `Description` varchar(255) NOT NULL,
  `Rest` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `rate`
--

CREATE TABLE `rate` (
  `ID` int(11) NOT NULL,
  `UID` int(11) DEFAULT NULL,
  `PID` int(11) DEFAULT NULL,
  `Rate` double NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `First_name` varchar(255) NOT NULL,
  `Last_name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Pw` varchar(255) NOT NULL,
  `birth_date` date DEFAULT NULL,
  `Phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `adress`
--
ALTER TABLE `adress`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UID` (`UID`);

--
-- Index pour la table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `PID` (`PID`);

--
-- Index pour la table `command`
--
ALTER TABLE `command`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `CID` (`CID`);

--
-- Index pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `CID` (`CID`);

--
-- Index pour la table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UID` (`UID`);

--
-- Index pour la table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `PID` (`PID`);

--
-- Index pour la table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`ID`);

--
-- Index pour la table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UID` (`UID`),
  ADD KEY `PID` (`PID`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`);

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
-- AUTO_INCREMENT pour la table `command`
--
ALTER TABLE `command`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `invoices`
--
ALTER TABLE `invoices`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `payment`
--
ALTER TABLE `payment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `photo`
--
ALTER TABLE `photo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `product`
--
ALTER TABLE `product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `rate`
--
ALTER TABLE `rate`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `adress`
--
ALTER TABLE `adress`
  ADD CONSTRAINT `adress_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `product` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `command`
--
ALTER TABLE `command`
  ADD CONSTRAINT `command_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `command_ibfk_2` FOREIGN KEY (`CID`) REFERENCES `cart` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `invoices`
--
ALTER TABLE `invoices`
  ADD CONSTRAINT `invoices_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `invoices_ibfk_2` FOREIGN KEY (`CID`) REFERENCES `cart` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `photo`
--
ALTER TABLE `photo`
  ADD CONSTRAINT `photo_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `photo_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `product` (`ID`) ON DELETE CASCADE;

--
-- Contraintes pour la table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `rate_ibfk_1` FOREIGN KEY (`UID`) REFERENCES `user` (`ID`) ON DELETE CASCADE,
  ADD CONSTRAINT `rate_ibfk_2` FOREIGN KEY (`PID`) REFERENCES `product` (`ID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
