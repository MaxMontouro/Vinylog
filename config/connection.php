<?php

$host = 'lakartxela.iutbayonne.univ-pau.fr';
$dbname = 'earbelbide_bd';
$user = 'earbelbide_bd';
$password = 'earbelbide_bd';

try {
    $access = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();

}


?>