<!-- login_process.php -->

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];

    // TODO: Ajout de la logique de vérification des informations de connexion depuis la base de données

    // Exemple de vérification simple 
    if ($email === "exemple@email.com" && $password === "motdepasse") {
        // Informations correctes, démarrer une session
        $_SESSION["user_email"] = $email;
        header("Location: profile.php"); // Redirige vers la page de profil après la connexion
        exit();
    } else {
        // Informations incorrectes, redirige vers la page de connexion avec un message d'erreur
        header("Location: login.php?error=1");
        exit();
    }
}
?>
