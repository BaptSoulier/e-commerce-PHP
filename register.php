<!-- register.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Inscription</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>S'Inscrire</h2>
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
</body>
</html>
