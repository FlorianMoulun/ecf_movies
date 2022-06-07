<?php

// Réaliser une requête affichant le nombre d'années entre le film le plus récent et le film le plus vieux

require_once('../connect.php');

$getDifference = $db->prepare("SELECT MAX(release_year) - MIN(release_year) FROM release_years");
$getDifference->execute();
$res_getDifference = $getDifference->fetchAll(PDO::FETCH_ASSOC);

/*print_r($res_getDifference);*/