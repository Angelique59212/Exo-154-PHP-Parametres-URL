<?php
/**
 * Exo 1
 * ------
 * 1. Créez une nouvelle page 'exo1.php'
 * 2. Créez un lien dans index.php ( ici ) qui passe le paramètre 'iteration' avec pour valeur 10 à cette page.
 * 3. Traitez tous les paramètres pour vous prémunir des petits malins.
 * 4. Faites une boucle pour afficher autant de fois Hello World 10 fois en utilisant 'iteration' dans la boucle.
 */

// TODO Votre code ici.

$page = $_GET['p'] ?? 'home';
$page = strip_tags($page);
getPage(
    sprintf(__DIR__ ."/../%s.php", strtolower($page)),
    $page
);

function getPage(String $pageName, String $title):void {
    require __DIR__ .'/../partial/header.php';
    require file_exists($pageName) ? $pageName:__DIR__ .'/../404.php';
    require __DIR__ .'/../partial/footer.php';
}

/**
 * Exo 2
 * ------
 * Faites exactement la même chose que pour l'exercice 1, mais le nouveau fichier sera nommé exo2.php
 * Créez au moins 10 liens à l'aide d'une boucle !!!
 * Pour chaque lien, le paramètre iteration prendra la valeur actuelle de votre variable de boucle ( $i par exemple ).
 */

