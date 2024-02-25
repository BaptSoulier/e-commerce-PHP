<?php
// Démarrer la session
session_start();

// Détruire toutes les variables de session
$_SESSION = array();

// Effacer le cookie de session
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

// Détruire la session
session_destroy();

// Rediriger vers la page de connexion ou une autre page après la déconnexion
header("Location: login.php");
exit;
?>
