<!-- login.php -->

<?php
session_start();

// Vérifier si l'utilisateur est déjà connecté, le rediriger vers la page d'accueil
if (isset($_SESSION['user_email'])) {
    header("Location: index.php");
    exit();
}

// Inclure le header
include('header.php');
?>

<div class="container">
    <h2>Se Connecter</h2>

    <?php
    // Afficher les messages d'erreur ou de succès
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo "<p style='color: red;'>Erreur : Identifiants incorrects.</p>";
    } elseif (isset($_GET['registration']) && $_GET['registration'] == 'success') {
        echo "<p style='color: green;'>Inscription réussie. Connectez-vous maintenant.</p>";
    }
    ?>

    <form action="login_process.php" method="post">
        <label for="email">E-mail :</label>
        <input type="email" name="email" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>

        <button type="submit">Se Connecter</button>
    </form>

    <p>Vous n'avez pas de compte ? <a href="register.php">S'inscrire ici</a></p>
</div>

<?php
// Inclure le footer
include('footer.php');
?>
