<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laboratoire GSB</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- HEADER -->
<header>
    <div class="top-bar">
        <span>📞 Contact : +33 00 00 00 00 00</span>
    </div>

    <div class="navbar">
        <div class="logo">
            <img src="logo.png" alt="Logo GSB">
            <h1>Laboratoire GSB</h1>
        </div>

        <nav>
            <a href="index.php">Accueil</a>
            <a href="le-laboratoire.php">Le laboratoire</a>
            <a href="#produits">Produits & Recherche</a>
            <a href="espace-visiteur.php">Espace Visiteur</a>
        </nav>
    </div>
</header>

<!-- HERO -->
<section class="hero">
    <div class="hero-content">
        <h2>Votre laboratoire pharmaceutique en ligne</h2>
        <p>Médicaments livrés en 24h – Sécurité & Fiabilité</p>
        <button class="btn" onclick="scrollToProducts()">Voir les produits</button>
    </div>
</section>

<!-- PRODUITS -->
<section class="section" id="produits">
    <h3>Nouveautés</h3>

    <div class="cards">

        <div class="card">
            <img src="image-médoc/Wegovy.jpg" alt="Wegovy" class="card-img">
            <div class="card-content">
                <h4>Wegovy</h4>
                <p>Résultats impressionnants dans la perte de poids, ouvrant la voie à de nouveaux traitements innovants.</p>
            </div>
        </div>

        <div class="card">
            <img src="image-médoc/Retatrutide.png" alt="Retatrutide" class="card-img">
            <div class="card-content">
                <h4>Retatrutide</h4>
                <p>Perte de poids significative de 24,2 % en 11 mois, améliorant la qualité de vie et réduisant les risques métaboliques.</p>
            </div>
        </div>

        <div class="card">
            <img src="image-médoc/Lyfnua.png" alt="Géfapixant (Lyfnua)" class="card-img">
            <div class="card-content">
                <h4>Géfapixant (Lyfnua)</h4>
                <p>Autorisé pour la toux chronique réfractaire, une première en Europe pour cette indication.</p>
            </div>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer>
    <div class="footer-content">
        <div>Informations</div>
        <div>Informations légales</div>
        <div>Avis Clients ⭐⭐⭐⭐⭐</div>
    </div>
    <p>© 2026 Laboratoire GSB - Tous droits réservés</p>
</footer>

<script src="script.js"></script>
</body>
</html>