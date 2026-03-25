<?php
try
{
$bdd = new PDO('mysql:host=localhost;dbname=gsbv2;charset=utf8', 'lecteur_gsb',
'lecture123');
}
catch (exception $e)
{
die('Erreur : ' . $e->getMessage());
}
?>