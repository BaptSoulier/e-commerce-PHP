<!-- register.php -->

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
    <h2>S'Inscrire</h2>

    <?php
    // Afficher les messages d'erreur ou de succès
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo "<p style='color: red;'>Erreur : Les mots de passe ne correspondent pas.</p>";
    }
    ?>

    <form action="register_process.php" method="post">
        <label for="email">E-mail :</label>
        <input type="email" name="email" required>

        <label for="password">Mot de passe :</label>
        <input type="password" name="password" required>

        <label for="confirm_password">Confirmer le mot de passe :</label>
        <input type="password" name="confirm_password" required>

        <button type="submit">S'Inscrire</button>
    </form>

    <p>Déjà membre ? <a href="login.php">Connectez-vous ici</a></p>
</div>

<?php
// Inclure le footer
include('footer.php');
?>
