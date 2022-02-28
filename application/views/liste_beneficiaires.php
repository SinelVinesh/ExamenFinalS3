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
    <label for="designation">Designation du beneficiaire : </label>
    <input type="text">
    <br>
    <button type="submit">Ajouter</button>
</form>
<form>
    <table>
        <tr>
            <th>Designation</th>
        </tr>
        <tr>
            <td><input type="text" value="Famille"></td>
            <td><button>Supprimer</button></td>
        </tr>        <tr>
            <td><input type="text" value="Enfants"></td>
            <td><button>Supprimer</button></td>
        </tr>        <tr>
            <td><input type="text" value="Parents"></td>
            <td><button>Supprimer</button></td>
        </tr>
    </table>
    <button type="submit">Valider les modifications</button>
</form>
</body>
</html>
