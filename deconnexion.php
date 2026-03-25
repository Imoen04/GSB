<?php
session_start();
session_destroy();

header("Location: espace-visiteur.php");
exit();
?>