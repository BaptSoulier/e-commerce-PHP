<?php
// Démarrer la session
session_start();

// Vérifier si l'utilisateur est connecté
if(isset($_SESSION['username'])) {
    // Informations de connexion à la base de données
    $serveur = "localhost";
    $utilisateur = "root";
    $motdepasse = "";
    $basededonnees = "bdd_php";

    // Connexion à la base de données
    $connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("La connexion à la base de données a échoué : " . $connexion->connect_error);
    }

    // Récupérer l'ID du profil en fonction du nom d'utilisateur de la session
    $username = $_SESSION['username'];
    $query = "SELECT ID FROM profil WHERE Email = '$username'";
    $result = $connexion->query($query);

    // Vérifier si la requête a réussi
    if ($result) {
        // Récupérer l'ID du profil
        $row = $result->fetch_assoc();
        $profile_id = $row['ID'];
        $pq = $connexion->real_escape_string($_GET['pq']);
        $pid = $connexion->real_escape_string($_GET['pid']);
        echo ''.$pid.'   /    ';
        echo ''.$pq.'    /    ';
        echo ''.$profile_id.'';

        // Insérer l'ID du profil dans une autre table (à remplacer avec le nom de votre table)
        $insert_query = "INSERT INTO cart (UID, PID, Quantity) VALUES ('$profile_id', '$pid', '$pq')";
        if ($connexion->query($insert_query) === TRUE) {
            echo "ID du profil inséré avec succès dans la table.";
        } else {
            echo "Erreur lors de l'insertion de l'ID du profil : " . $connexion->error;
        }
    } else {
        echo "Erreur lors de la récupération de l'ID du profil : " . $connexion->error;
    }

    // Fermer la connexion à la base de données
    $connexion->close();
} else {
    echo "Utilisateur non connecté.";
}
header("Location: cart.php");
?>
