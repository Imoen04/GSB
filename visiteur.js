// Ce script est volontairement minimal :
// l'authentification (login / mot de passe) est gérée côté serveur en PHP.
// Le seul comportement restant ici est la redirection vers la page de déconnexion.

function logout() {
    window.location.href = "deconnexion.php";
}
