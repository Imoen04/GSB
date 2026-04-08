<?php
session_start();
require '1ere-connexion.php';

if (!empty($_POST['identifiant']) && !empty($_POST['mdp'])) {

    $identifiant = htmlspecialchars($_POST['identifiant']);
    $mdp = $_POST['mdp'];

    

    $sql = "SELECT * FROM visiteur WHERE login = ?";
    $stmt = $bdd->prepare($sql);
    $stmt->execute([$identifiant]);

    $user = $stmt->fetch();

    if ($user) {
        $storedPassword = (string)($user['mdp'] ?? '');

        if (password_verify($mdp, $storedPassword) || hash_equals($storedPassword, $mdp)) {
            // On enregistre la session
            $_SESSION['user'] = $identifiant;

            // REDIRECTION ICI
            header("Location: profil.php");
            exit();
        }
    }

    // REDIRECTION AVEC ERREUR
    header("Location: espace-visiteur.php?error=invalid");
    exit();

} else {
    // REDIRECTION AVEC ERREUR
    header("Location: espace-visiteur.php?error=empty");
    exit();
}
?>