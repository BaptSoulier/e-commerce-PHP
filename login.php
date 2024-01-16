<!-- login.php -->

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Se Connecter</h2>
        <form action="login_process.php" method="post">
            <label for="email">E-mail :</label>
            <input type="email" name="email" required>

            <label for="password">Mot de passe :</label>
            <input type="password" name="password" required>

            <button type="submit">Se Connecter</button>
        </form>
        <p>Vous n'avez pas de compte ? <a href="register.php">S'inscrire ici</a></p>
    </div>
</body>
</html>
