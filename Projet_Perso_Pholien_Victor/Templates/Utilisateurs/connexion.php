<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion</title>
</head>
<body>
    <h1>Connexion</h1>
    <form action="" method="">
        <fieldset>
            <legend>Se connecter</legend>
            <div>
                <label for="pseudo">Pseudo : </label>
                <input name="pseudo" type="text" id="pseudo" required>
            </div>
            <div>
                <label for="email">Email :</label>
                <input name="email" type="email" id="email" placeholder="Votre email" required>
            </div>
            <div>
                <label for="mdp">Mot de passe:</label>
                <input name="mdp" type="password" id="mdp" minlength="8" required>
            </div>
        </fieldset>
        <fieldset>
            <legend>Connexion</legend>
            <input type="submit" value="Se connecter">
        </fieldset>
    </form>
</body>
</html>