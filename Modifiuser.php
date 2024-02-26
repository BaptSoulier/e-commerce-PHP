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

    // Récupérer l'e-mail de l'utilisateur à partir de la session
    $email = $_SESSION['username'];
    $param = $_POST['info'];
    $value = $_POST['fname'];
    // Préparer et exécuter la requête SQL pour mettre à jour la colonne "parametre1"
    $query = "UPDATE profil SET $param = '$value' WHERE Email = '$email'";
    echo $query;

    // Vérifier si la mise à jour a réussi
    if ($connexion->query($query) === TRUE) {
        echo "La colonne '.$param.' a été mise à jour avec succès pour l'utilisateur avec l'e-mail $email.";
    } else {
        echo "Aucune mise à jour effectuée. L'utilisateur avec l'e-mail $email n'existe peut-être pas.";
    }
    header("Location: profil.php");
    // Fermer la connexion à la base de données
    $connexion->close();
} else {
    echo "Utilisateur non connecté.";
}
?>