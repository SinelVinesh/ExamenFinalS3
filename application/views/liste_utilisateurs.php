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
    <title>Document</title>
</head>
<body>
    <h1>Liste des utilisateurs</h1>
    <form>
        <label for="nom">Nom : </label>
        <input type="text" name="nom" id="nom">
        <br>
        <label for="login">Login : </label>
        <input type="text" name="login" id="login">
        <br>
        <label for="password">Mot de passe : </label>
        <input type="text" name="password" id="password">
        <br>
        <button type="submit">Ajouter</button>
    </form>
    <form>

        <table>
            <tr>
                <th>Nom</th>
                <th>Login</th>
                <th>Mot de passe</th>
            </tr>
            <tr>
                <td><input type="text" value="Jean"></td>
                <td><input type="text" value="Jean@login"></td>
                <td><input type="text"></td>
            </tr>
        </table>
        <button type="submit">Valider les modifications</button>
    </form>
</body>
</html>
