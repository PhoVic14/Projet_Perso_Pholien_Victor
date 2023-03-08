<?php

function createUser($pdo)
{
    try{
        $query = "insert into utilisateurs (nomUser, prenomUser, pseudoUser, passWordUser, emailUser) values (:nomUser, :prenomUser, :pseudoUser, :passWordUser, :emailUser)"; //nom des colonnes utilisateur
        $newUser = $pdo->prepare($query);
        $newUser->execute([
            'nomUser' => $_POST["nom"],
            'prenomUser' => $_POST["prenom"],
            'pseudoUser' => $_POST["pseudo"],
            'passWordUser' => $_POST["mdp"],
            'emailUser' => $_POST["Email"],
        ]);
    }
    catch(PDOException $e){
        $message = $e->getMessage();
        die($message);
    }
}
