<?php

// Réaliser une requête qui permet de récupérer toutes les catégories

require_once('../connect.php');


$req_getCategories = "SELECT category FROM categories";
$req_getCategories = $db->prepare($req_getCategories);
$req_getCategories->execute();
$cat = $req_getCategories->fetchAll(PDO::FETCH_ASSOC);

/*print_r($cat);*/

// Réaliser une requête qui permet d'afficher le nombre de films par catégories

$film_cat = $db->prepare("SELECT categories.category, COUNT(infos_movies_id) FROM categories_has_infos_movies
                          INNER JOIN categories ON categories.id = categories_has_infos_movies.categories_id
                          GROUP BY categories_id");
$film_cat->execute();
$res_film_cat = $film_cat->fetchAll(PDO::FETCH_ASSOC);


/*print_r($res_film_cat);*/