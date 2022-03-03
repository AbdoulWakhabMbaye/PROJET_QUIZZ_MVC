<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= WEB_ROOT."css".DIRECTORY_SEPARATOR."style.connexion.css"  ?>" media="screen" type="text/css">
    <title>QUIZZ</title>
</head>
<body>
    <div class="en-tete">
        <img src="<?= WEB_ROOT.'img'.DIRECTORY_SEPARATOR.'Icônes'.DIRECTORY_SEPARATOR.'logo-QuizzSA.png'  ?>" alt="Logo">
        <h1>Le plaisir de jouer</h1>
    </div>
    <div class="container">
        <div class="login-form">
            <h3>Login Form</h3>
            <div class="croix"></div>
        </div>
        <form action="<?= PATH_POST?>" method="POST" name="form" class="form">
        <input type="hidden" name="controller" value="securite">
        <input type="hidden" name="action" value="connexion">

            <input type="text" placeholder="Login" name="login" class="login">
            <small id="email_error">Entrer un Email valide</small>
            <input type="password" placeholder="Password" name="password" class="password">
            <small id="pass_error">Le mot de passe n'est pas valide</small>
            <div class="connect">
            <button type="submit" class="submit" name="connexion">Connexion</button>
            <a href="#"><p>S'inscrire pour jouer?</p></a>
            </div>
        </form>
    </div>

    <script src="<?= WEB_ROOT.'js'.DIRECTORY_SEPARATOR.'connexion.js'  ?>"></script>
</body>
</html>