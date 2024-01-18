<!-- register_process.php -->

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // TODO: Ajouter la logique de vérification des informations d'inscription (e.g., validation, unicité) depuis la base de données

    // vérification
    if ($password === $confirm_password) {
        // Mot de passe confirmé, ajout de l'utilisateur à la base de données
        // TODO: Inclure la logique d'ajout à la base de données ici

        // Informations d'inscription correctes, rediriger vers la page de connexion
        header("Location: login.php?registration=success");
        exit();
    } else {
        // Mot de passe non confirmé, rediriger vers la page d'inscription avec un message d'erreur
        header("Location: register.php?error=1");
        exit();
    }
}
?>
