<?php
// Vérifier si l'ID est passé dans l'URL
if(isset($_GET['email'])) {
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

    // Échapper les données pour éviter les injections SQL
    $id = $connexion->real_escape_string($_GET['email']);

    // Construire et exécuter la requête SQL pour supprimer le profil
    $sql = "DELETE FROM profil WHERE Email = '$id'";
    if ($connexion->query($sql) === TRUE) {
        echo "Profil supprimé avec succès.";
        header("Location: logout.php");
    } else {
        echo "Erreur lors de la suppression du profil : " . $connexion->error;
    }

    // Fermer la connexion à la base de données
    $connexion->close();
} else {
    echo "ID non fourni dans l'URL.";
}
?>
