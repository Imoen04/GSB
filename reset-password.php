<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Réinitialisation - GSB</title>
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
        <h2>Réinitialiser le mot de passe</h2>

        <form id="resetForm">
            <input type="email" id="resetEmail" placeholder="Votre adresse email" required>
            <button type="submit" class="btn">Envoyer le lien</button>
        </form>

        <p class="register-link">
            <a href="espace-visiteur.php">Retour à la connexion</a>
        </p>
    </div>
</section>

<footer>
    <p>© 2026 Laboratoire GSB - Tous droits réservés</p>
</footer>

<script src="visiteur.js"></script>
</body>
</html>