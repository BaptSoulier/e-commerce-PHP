<!-- register_process.php -->

<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirm_password = $_POST["confirm_password"];

    // TODO: Ajout de la logique de vérification des informations d'inscription (e.g., validation, unicité) depuis la base de données

    // Vérification simple
    if ($password === $confirm_password) {
        // Générer un jeton unique pour l'activation du compte
        $activation_token = bin2hex(random_bytes(16));

        // TODO: logique d'ajout à la base de données ici avec le jeton d'activation

        // Envoyer un e-mail de confirmation
        $subject = "Activation de compte";
        $message = "Cliquez sur le lien suivant pour activer votre compte : " . 
                   "http://votre-site.com/activate.php?token=$activation_token";
        $headers = "From: webmaster@votre-site.com";

        // Utilise la fonction mail() de PHP pour envoyer l'e-mail
        mail($email, $subject, $message, $headers);

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