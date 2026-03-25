<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inscription - Laboratoire GSB</title>
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
            <a href="espace-visiteur.php">Espace Visiteur</a>
        </nav>
    </div>
</header>

<section class="login-section">
    <div class="login-card">
        <h2>Créer un compte</h2>

        <form id="registerForm">
            <input type="text" id="newUsername" placeholder="Identifiant" required>
            <input type="email" id="email" placeholder="Email" required>
            <input type="password" id="newPassword" placeholder="Mot de passe" required>
            <button type="submit" class="btn">S'inscrire</button>
        </form>

        <p class="register-link">
            Déjà inscrit ? <a href="espace-visiteur.php">Se connecter</a>
        </p>
    </div>
</section>

<footer>
    <p>© 2026 Laboratoire GSB - Tous droits réservés</p>
</footer>

<script src="visiteur.js"></script>
</body>
</html>