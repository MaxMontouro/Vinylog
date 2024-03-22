<?php

$host = 'lakartxela.iutbayonne.univ-pau.fr';
$dbname = 'earbelbide_pro';
$user = 'earbelbide_pro';
$password = 'earbelbide_pro';

try {
    $access = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();

}


?>