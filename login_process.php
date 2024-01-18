<!-- login_process.php -->

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];

    // TODO: Ajout de la logique de vérification des informations de connexion depuis la base de données

    // vérification 
    if ($email === "exemple@email.com" && $password === "motdepasse") {
        // Informations correctes, démarrer une session
        $_SESSION["user_email"] = $email;
        header("Location: index.php"); // Rediriger vers la page d'accueil après la connexion
        exit();
    } else {
        // Informations incorrectes, rediriger vers la page de connexion avec un message d'erreur
        header("Location: login.php?error=1");
        exit();
    }
}
?>
