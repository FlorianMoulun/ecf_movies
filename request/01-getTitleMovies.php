<?php
// Réaliser une requête qui permet de récupérer tous les titres des films

require_once('../connect.php');


$req_getTitleMovies = "SELECT title FROM infos_movies";
$req_getTitleMovies = $db->prepare($req_getTitleMovies);
$req_getTitleMovies->execute();
$title = $req_getTitleMovies->fetchAll(PDO::FETCH_ASSOC);


/*var_dump($title);*/