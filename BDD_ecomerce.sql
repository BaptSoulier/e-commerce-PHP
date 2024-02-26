    -- phpMyAdmin SQL Dump
    -- version 5.2.1
    -- https://www.phpmyadmin.net/
    --
    -- Hôte : 127.0.0.1:3306
    -- Généré le : dim. 25 fév. 2024 à 14:08
    -- Version du serveur : 8.0.35
    -- Version de PHP : 8.2.13

    SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
    START TRANSACTION;
    SET time_zone = "+00:00";


    /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
    /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
    /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
    /*!40101 SET NAMES utf8mb4 */;

    --
    -- Base de données : `bdd_php`
    --

    --
    -- Structure de la table `cart`
    --

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `ID` int NOT NULL AUTO_INCREMENT,
  `UID` int DEFAULT NULL,
  `PID` int DEFAULT NULL,
  `Quantity` int NOT NULL,
  PRIMARY KEY (`ID`),
  KEY `fk_user_id_3` (`UID`),
  KEY `fk_product_id_2` (`PID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

-- --------------------------------------------------------

    --
    -- Structure de la table `code`
    --

    DROP TABLE IF EXISTS `code`;
    CREATE TABLE IF NOT EXISTS `code` (
      `ID` int NOT NULL AUTO_INCREMENT,
      `UID` int DEFAULT NULL,
      `Code` varchar(255) COLLATE utf8mb3_bin DEFAULT NULL,
       `Value` varchar(255) COLLATE utf8mb3_bin DEFAULT NULL,
      `Nb_Use` int DEFAULT NULL,
      `Expiration_Date` date DEFAULT NULL,
      `Usable` tinyint(1) DEFAULT '0',
      PRIMARY KEY (`ID`),
      KEY `fk_user_id_2` (`UID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

    -- --------------------------------------------------------

    --
    -- Structure de la table `order_history`
    --

    DROP TABLE IF EXISTS `order_history`;
    CREATE TABLE IF NOT EXISTS `order_history` (
      `ID` int NOT NULL AUTO_INCREMENT,
      `UID` int DEFAULT NULL,
      `CID` int DEFAULT NULL,
      `Total` float DEFAULT NULL,
      `Date` date NOT NULL,
      PRIMARY KEY (`ID`),
      KEY `fk_cart_id_1` (`CID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

    -- --------------------------------------------------------

    --
    -- Structure de la table `payment`
    --

    DROP TABLE IF EXISTS `payment`;
    CREATE TABLE IF NOT EXISTS `payment` (
      `ID` int NOT NULL AUTO_INCREMENT,
      `UID` int DEFAULT NULL,
      `Method` varchar(255) COLLATE utf8mb3_bin NOT NULL,
      `BIC` varchar(255) COLLATE utf8mb3_bin NOT NULL,
      `IBAN` varchar(255) COLLATE utf8mb3_bin NOT NULL,
      `Card_number` varchar(255) COLLATE utf8mb3_bin NOT NULL,
      `Name_on_card` varchar(255) COLLATE utf8mb3_bin NOT NULL,
      `Expiration_Date` varchar(255) COLLATE utf8mb3_bin NOT NULL,
      `CVV` varchar(255) COLLATE utf8mb3_bin NOT NULL,
      PRIMARY KEY (`ID`),
      KEY `fk_user_id_4` (`UID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

    -- --------------------------------------------------------

    --
    -- Structure de la table `product`
    --

    DROP TABLE IF EXISTS `product`;
    CREATE TABLE IF NOT EXISTS `product` (
      `ID` int NOT NULL AUTO_INCREMENT,
      `Category` varchar(255) COLLATE utf8mb3_bin NOT NULL,
      `Name` varchar(255) COLLATE utf8mb3_bin NOT NULL,
      `Image` varchar(255) COLLATE utf8mb3_bin NOT NULL,
      `Price` decimal(10,2) NOT NULL,
      `Description` varchar(255) COLLATE utf8mb3_bin NOT NULL,
      `Rest` int NOT NULL,
      PRIMARY KEY (`ID`)
    ) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

    --
    -- Déchargement des données de la table `product`
    --

    INSERT INTO `product` (`ID`, `Category`, `Name`, `Image`, `Price`, `Description`, `Rest`)
    VALUES
        (0, 'Pokemon', 'pokemon display black&white plasma blast', 'img/Pokemon/Black&white/black&white_PB_display.png', 40.00, 'Pokémon Plasma Blast Display contient un assortiment de boosters qui offrent des possibilités passionnantes pour les collectionneurs. Avec des illustrations vibrantes, des Pokémon puissants et des cartes rares, cette série promet des combats épiques.', 1),
        (1, 'Pokemon', 'Booster Sun&Moon burning shadows', 'img/Pokemon/Sun&Moon/sun&moon_BS_booster.png', 20.00, 'Le booster Sun and Moon Burning Shadows est une extension du jeu de cartes Pokémon. Il contient des cartes illustrées avec des Pokémon et des attaques emblématiques de la série.', 0),
        (2, 'Pokemon', 'Booster Sun&Moon Crimson Invasion', 'img/Pokemon/Sun&Moon/sun&moon_CI_booster.png', 20.00, 'Le booster Sun and Moon Crimson Invasion est une extension du jeu de cartes Pokémon. Il contient des cartes illustrées avec des Pokémon et des attaques emblématiques de la série.', 0),
        (3, 'Pokemon', 'Display Sun&Moon', 'img/Pokemon/Sun&Moon/Sun&moon_display.png', 40.00, 'La Display Sun ans Moon est une extension du jeu de cartes Pokémon. Il contient des cartes illustrées avec des Pokémon et des attaques emblématiques de la série.', 0),
        (4, 'Pokemon', 'Booster Sun&Moon Guardians Rising', 'img/Pokemon/Sun&Moon/sun&moon_GR_booster.png', 20.00, 'Le booster Sun and Moon Guardians Rising est une extension du jeu de cartes Pokémon. Il contient des cartes illustrées avec des Pokémon et des attaques emblématiques de la série.', 0),
        (5, 'Pokemon', 'Booster XY Evolutions', 'img/Pokemon/XY/XY_E_booster.png', 20.00, 'Le booster XY Evolutions est une extension du jeu de cartes Pokémon. Il contient des cartes illustrées avec des Pokémon et des attaques emblématiques de la série.', 0),
        (6, 'Pokemon', 'Booster XY Stream Siege', 'img/Pokemon/XY/XY_SS_booster.png', 20.00, 'Le booster XY Stream Siege est une extension du jeu de cartes Pokémon. Il contient des cartes illustrées avec des Pokémon et des attaques emblématiques de la série.', 0),
        (7, 'Yu-Gi-Oh', 'Display BattlePack Liga De Monsters', 'img/Yu-Gi-Oh/BattlePack_LigaDeMonsters_display.png', 50.00, 'Le Battle Pack Liga De Monsters de Yu-Gi-Oh! offre une expérience de jeu compétitive et équilibrée avec des cartes Monster League spécialement sélectionnées pour des duels dynamiques.', 0),
        (8, 'Yu-Gi-Oh', 'Booster Battles Of Legend', 'img/Yu-Gi-Oh/BattlesOfLegend_booster.png', 20.00, 'Le booster Yu-Gi-Oh! Battles Of Legend propose une collection de cartes spéciales de l\'histoire de Yu-Gi-Oh! dans un format premium. Avec des cartes rares, holographiques et puissantes.', 0),
        (9, 'Yu-Gi-Oh', 'Display Maximun Crisis', 'img/Yu-Gi-Oh/maximunCrisis_display.png', 70.00, 'La display Maximun Crisis de Yu-Gi-Oh! offre une expérience de jeu compétitive et équilibrée avec des cartes Monster League spécialement sélectionnées pour des duels dynamiques.', 0),
        (10, 'Yu-Gi-Oh', 'Booster Secrety Of Eternity', 'img/Yu-Gi-Oh/secretyOfEternity_booster.png', 20.00, 'Le booster Yu-Gi-Oh! Secrety Of Eternity propose une collection de cartes spéciales de l\'histoire de Yu-Gi-Oh! dans un format premium. Avec des cartes rares, holographiques et puissantes.', 0),
        (11, 'Yu-Gi-Oh', 'Display Starpack 2014', 'img/Yu-Gi-Oh/Starpack2014_display.png', 20.00, 'La display Starpack 2014 de Yu-Gi-Oh! offre une expérience de jeu compétitive et équilibrée avec des cartes Monster League spécialement sélectionnées pour des duels dynamiques.', 0),
        (12, 'Yu-Gi-Oh', 'Display Vanguard', 'img/Yu-Gi-Oh/Vanguard_display.png', 70.00, 'La display Vanguard de Yu-Gi-Oh! offre une expérience de jeu compétitive et équilibrée avec des cartes Monster League spécialement sélectionnées pour des duels dynamiques.', 0),
        (13, 'Magic', 'Booster Amonkhet', 'img/Magic/Amonkhet_booster.png', 20.00, 'Le booster Amonkhet offre une plongée épique dans l\'Égypte antique, présentant des dieux, des créatures mythiques et des sorts puissants pour des duels Magic: The Gathering remplis d\'aventure et de mystère.', 0),
        (14, 'Magic', 'Display Eldritch Moon', 'img/Magic/EldritchMoon_display.png', 70.00, 'La display magic Eldritch Moon offre une expérience immersive avec des cartes terrifiantes, des mécanismes de folie et des créatures cauchemardesques, plongeant les joueurs dans un monde sombre et mystérieux.', 0),
        (15, 'Magic', 'Booster Hour Of Devastation', 'img/Magic/hourOfDevastation_booster.png', 20.00, 'Le booster Hour Of Devastation offre une plongée épique dans l\'Égypte antique, présentant des dieux, des créatures mythiques et des sorts puissants pour des duels Magic: The Gathering remplis d\'aventure et de mystère.', 0),
        (16, 'Magic', 'Booster Ixalan', 'img/Magic/ixalan_booster.png', 20.00, 'Le booster Ixalan offre une plongée épique dans l\'Égypte antique, présentant des dieux, des créatures mythiques et des sorts puissants pour des duels Magic: The Gathering remplis d\'aventure et de mystère.', 0);


    -- --------------------------------------------------------

    --
    -- Structure de la table `profil`
    --

    DROP TABLE IF EXISTS `profil`;
    CREATE TABLE IF NOT EXISTS `profil` (
      `ID` int NOT NULL AUTO_INCREMENT,
      `Admin` tinyint(1) DEFAULT '0',
      `First_name` varchar(255) NOT NULL,
      `Last_name` varchar(255) NOT NULL,
      `Email` varchar(255) NOT NULL,
      `E_Verif` tinyint(1) DEFAULT '0',
      `PP` varchar(255) NOT NULL,
      `Pw` varchar(255) NOT NULL,
      `birth_date` date DEFAULT NULL,
      `Phone` varchar(20) DEFAULT NULL,
      `Country` varchar(255) NOT NULL,
      `Adress` varchar(255) NOT NULL,
      `Postal_code` varchar(20) NOT NULL,
      `City` varchar(255) NOT NULL,
      `Loyalty_point` int NOT NULL DEFAULT '0',
      `History` int DEFAULT NULL,
      PRIMARY KEY (`ID`)
    );

    --
    -- Déchargement des données de la table `profil`
    --

    INSERT INTO `profil` (`ID`, `Admin`, `First_name`, `Last_name`, `Email`, `E_Verif`, `PP`, `Pw`, `birth_date`, `Phone`, `Country`, `Adress`, `Postal_code`, `City`, `Loyalty_point`, `History`) VALUES
    (9, 1, 'djebril', 'harhad', 'djebrilharhad@gmail.com', 0, 'https://images.hdqwalls.com/download/rick-and-morty-in-another-dimension-illustration-6c-3840x2400.jpg', '$2y$10$TbyXM2/A2BisIl6UUHOFfOyi/cg4AYjN3IgKmGZVPPG1jWlmhwmP.', NULL, '0605297821', 'france', '26 rue etienne marcel', '77450', 'montry', 0, NULL);

    -- --------------------------------------------------------

    --
    -- Structure de la table `rating`
    --


    CREATE TABLE IF NOT EXISTS `rating` (
        `ID` int NOT NULL AUTO_INCREMENT,
        `UID` int DEFAULT NULL,
        `PID` int DEFAULT NULL,
        `Rating` float DEFAULT NULL,
        PRIMARY KEY (`ID`),
        UNIQUE KEY `fk_rating_1` (`Rating`)  -- Add this line
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

    -- --------------------------------------------------------

    --
    -- Structure de la table `wishlist`
    --

    DROP TABLE IF EXISTS `wishlist`;
    CREATE TABLE IF NOT EXISTS `wishlist` (
      `ID` int NOT NULL AUTO_INCREMENT,
      `UID` int DEFAULT NULL,
      `PID` int DEFAULT NULL,
      PRIMARY KEY (`ID`),
      KEY `fk_user_id_5` (`UID`),
      KEY `fk_product_id_5` (`PID`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_bin;

    --
    -- Contraintes pour les tables déchargées
    --

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
    -- Contraintes pour la table `rating`
    --
    ALTER TABLE `rating`
        ADD CONSTRAINT `fk_user_id_6` FOREIGN KEY (`UID`) REFERENCES `profil` (`ID`) ON DELETE CASCADE,
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
