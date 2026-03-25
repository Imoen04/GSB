<?php
session_start();
if (!isset($_SESSION['user'])) {
    header('Location: espace-visiteur.php');
    exit();
}

// Connexion à la base de données
$dsn = 'mysql:host=localhost;dbname=gsbv2;charset=utf8';
$user = 'root';
$pass = '';

try {
    $pdo = new PDO($dsn, $user, $pass, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);
} catch (Exception $e) {
    die('Erreur base de données : ' . $e->getMessage());
}

$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $etapes = isset($_POST['etapes']) ? intval($_POST['etapes']) : 0;
    $nuitees = isset($_POST['nuitees']) ? intval($_POST['nuitees']) : 0;
    $kilometres = isset($_POST['kilometres']) ? floatval($_POST['kilometres']) : 0;
    $repas = isset($_POST['repas']) ? floatval($_POST['repas']) : 0;

    // Table de stockage (créée si elle n'existe pas)
    $pdo->exec(
        "CREATE TABLE IF NOT EXISTS remboursement (" .
        "id INT AUTO_INCREMENT PRIMARY KEY, " .
        "etapes INT NOT NULL, " .
        "nuitees INT NOT NULL, " .
        "kilometres DECIMAL(10,2) NOT NULL, " .
        "repas DECIMAL(10,2) NOT NULL, " .
        "created_at DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP" .
        ") ENGINE=InnoDB DEFAULT CHARSET=utf8"
    );

    $stmt = $pdo->prepare(
        'INSERT INTO remboursement (etapes, nuitees, kilometres, repas) VALUES (?, ?, ?, ?)'
    );
    $stmt->execute([$etapes, $nuitees, $kilometres, $repas]);

    $message = 'Données enregistrées avec succès.';
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tableau de bord - Laboratoire GSB</title>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="liste-remboursements.css">
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
            <a href="deconnexion.php">Déconnexion</a>
        </nav>
    </div>
</header>

<section class="login-section">
    <div class="login-card">
        <div class="card-header">
            <h2>Demande de remboursement</h2>
        </div>
        <?php if (!empty($message)): ?>
            <div class="dashboard-message"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></div>
        <?php endif; ?>
        <form action="" method="post">
            <div class="form-row">
                <div>
                    <label for="etapes">Forfait Étape (110€/unité) :</label>
                    <input type="number" id="etapes" name="etapes" min="0" step="1" value="0" placeholder="0" required />
                </div>
                <div>
                    <label for="nuitees">Nuitée Hôtel (80€/nuitée) :</label>
                    <input type="number" id="nuitees" name="nuitees" min="0" step="1" value="0" placeholder="0" required />
                </div>
            </div>

            <div class="form-row">
                <div>
                    <label for="kilometres">Frais kilométriques (0,62€/km) :</label>
                    <input type="number" id="kilometres" name="kilometres" min="0" step="0.01" value="0" placeholder="0" required />
                </div>
                <div>
                    <label for="repas">Unité Repas (25€/unité) :</label>
                    <input type="number" id="repas" name="repas" min="0" step="1" value="0" placeholder="0" required />
                </div>
            </div>

            <button type="submit" class="btn">Envoyer</button>
        </form>
    </div>
</section>

<footer>
    <p>© 2026 Laboratoire GSB - Tous droits réservés</p>
</footer>

<script src="visiteur.js"></script>
</body>
</html>