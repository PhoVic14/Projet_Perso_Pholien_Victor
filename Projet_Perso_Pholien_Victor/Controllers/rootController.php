<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/index.php" || $uri === "/"){
    require_once "Templates/acceuil/pageAccueil.php";
} /*elseif ($uri === "/leChampion") {
    require_once "Templates/acceuil/acceuil.php";
}*/