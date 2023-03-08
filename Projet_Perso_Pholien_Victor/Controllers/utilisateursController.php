<?php

$uri = $_SERVER['REQUEST_URI'];

if ($uri === "/connexion"){
    require_once "Templates/Utilisateurs/connexion.php";
} elseif ($uri === "/inscription") {
    require_once "Templates/Utilisateurs/inscription.php";
} elseif ($uri === "/profil") {
    require_once "Templates/Utilisateurs/profil.php";
}