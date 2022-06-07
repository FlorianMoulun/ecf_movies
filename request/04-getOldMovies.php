<?php

// Réaliser une requête qui permet de récupérer tous les films d'avant 2002

require_once('../connect.php');

$getOldMovies = $db->prepare("SELECT title, release_year FROM infos_movies INNER JOIN release_years ON release_years.id = release_years_id HAVING release_year < 2002");
$getOldMovies->execute();
$res_getOldMovies = $getOldMovies->fetchAll(PDO::FETCH_ASSOC);

print_r($res_getOldMovies);