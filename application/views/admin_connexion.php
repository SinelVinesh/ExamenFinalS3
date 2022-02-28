<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page de connexion</title>
</head>
<body>
<h1>Connexion</h1>
<form action="<?php echo site_url('Connexion/connect_as_admin')?>" method="post">
    <label for="username">Nom d'utilisateur : </label>
    <input type="text" name="username" id="username">
    <br>
    <label for="password">Mot de passe : </label>
    <input type="password" name="password" id="password">
    <br>
    <button type="submit">Se connecter</button>
</form>
</body>
</html>