<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Espace Visiteur - Laboratoire GSB</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="visiteur.css">
</head>
<body>

<header>
    <div class="top-bar">
        📞 Contact : +33 00 00 00 00 00
    </div>

    <div class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo GSB">
            <h1>Laboratoire GSB</h1>
        </div>

        <nav>
            <a href="index.php">Accueil</a>
        </nav>
    </div>
</header>

<section class="login-section">
    <div class="login-card">
        <h2>Connexion à l'Espace Visiteur</h2>
        <?php
        if (isset($_SESSION['user'])) {
            header('Location: profil.php');
            exit();
        }

        // Afficher les messages d'erreur
        if (isset($_GET['error'])) {
            if ($_GET['error'] == 'invalid') {
                echo '<p class="error-message">Identifiants incorrects. Veuillez vérifier votre identifiant et mot de passe.</p>';
            } elseif ($_GET['error'] == 'empty') {
                echo '<p class="error-message">Veuillez remplir tous les champs.</p>';
            }
        }
        ?>

        <form id="loginForm" method="post" action="traitement_login.php">
            <input type="text" id="username" name="identifiant" placeholder="Identifiant" required>
            <input type="password" id="password" name="mdp" placeholder="Mot de passe" required>
            <button type="submit" class="btn">Se connecter</button>
        </form>

        <p class="register-link">
            Nouveau visiteur ? <a href="inscription.php">Créer un compte</a>
        </p>
        <p class="register-link">
            <a href="reset-password.php">Mot de passe oublié ?</a>
        </p>

        <p class="login-info">Accès réservé aux visiteurs médicaux</p>
    </div>
</section>

<footer>
    <p>© 2026 Laboratoire GSB - Tous droits réservés</p>
</footer>

<script src="visiteur.js"></script>
</body>
</html>