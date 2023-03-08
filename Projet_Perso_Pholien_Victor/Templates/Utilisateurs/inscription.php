<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h1>Inscription</h1>
    <form action="" method="">
        <fieldset>
            <legend>S'inscrire</legend>
            <div>
                <label for="pseudo">Pseudo : </label>
                <input name="pseudo" type="text" id="pseudo">
            </div>
            <div>
                <label for="email">Email :</label>
                <input name="email" type="email" id="email" placeholder="Votre email" required>
            </div>
            <div>
                <label for="prenom">Prenom : </label>
                <input name="prenom" type="text" id="prenom">
            </div>
            <div>
                <label for="nom">Nom : </label>
                <input name="nom" type="text" id="nom">
            </div>
            <div>
                <label for="mdp">Mot de passe :</label>
                <input name="mdp" type="password" id="mdp" minlength="8" required>
            </div>
        </fieldset>
        <fieldset>
            <legend>Inscription</legend>
            <input type="submit" value="S'inscrire">
        </fieldset>
    </form>
</body>
</html>