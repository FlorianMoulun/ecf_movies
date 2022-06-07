<?php

// Réaliser une requête affichant le nombre d'années entre le film le plus récent et le film le plus vieux

require_once('../connect.php');

$ecart_year = $db->prepare("SELECT MAX(release_year) - MIN(release_year) FROM release_years");
$ecart_year->execute();
$res_ecart_year = $ecart_year->fetchAll(PDO::FETCH_ASSOC);

/*print_r($res_ecart_year);*/