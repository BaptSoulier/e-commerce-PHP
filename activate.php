<!-- activate.php -->

<?php
if (isset($_GET['token'])) {
    $activation_token = $_GET['token'];

    // TODO: Ajouter la logique pour activer le compte dans la base de données

    // Exemple simple : Mettez à jour le statut du compte dans la base de données
    // N'oubliez pas de valider et sécuriser le token pour éviter les attaques

    // Informer l'utilisateur que le compte est activé
    echo "Votre compte a été activé avec succès. Vous pouvez maintenant vous connecter.";
} else {
    // Rediriger vers une page d'erreur si le token n'est pas présent
    header("Location: error.php");
    exit();
}
?>
