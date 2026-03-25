<?php
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

// Assurer que la table existe
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

// Récupérer les demandes
$stmt = $pdo->query('SELECT * FROM remboursement ORDER BY created_at DESC');
$remboursements = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Liste des remboursements - Laboratoire GSB</title>
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
            <a href="profil.php">Profil</a>
            <a href="#" onclick="logout()">Déconnexion</a>
        </nav>
    </div>
</header>

<section class="login-section">
    <div class="login-card table-card">
        <h2>Historique des demandes</h2>

        <?php if (empty($remboursements)): ?>
            <p class="empty-message">Aucune demande de remboursement enregistrée.</p>
        <?php else: ?>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th>Étapes</th>
                            <th>Nuitées</th>
                            <th>Kilomètres</th>
                            <th>Repas</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($remboursements as $row): ?>
                            <tr>
                                <td><?php echo htmlspecialchars($row['etapes'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($row['nuitees'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($row['kilometres'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($row['repas'], ENT_QUOTES, 'UTF-8'); ?></td>
                                <td><?php echo htmlspecialchars($row['created_at'], ENT_QUOTES, 'UTF-8'); ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        <?php endif; ?>

        <div class="profile-actions">
            <a href="dashboard.php" class="btn">Ajouter une demande</a>
            <a href="profil.php" class="btn">Retour au profil</a>
        </div>
    </div>
</section>

<footer>
    <p>© 2026 Laboratoire GSB - Tous droits réservés</p>
</footer>

<script src="visiteur.js"></script>
</body>
</html>
