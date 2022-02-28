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
<h1>Ajouter une nouvelle depense</h1>
<form action="<?php echo site_url('Depense/ajout')?>">
    <label for="date"> Date de la depense : </label>
    <input type="date" name="date" id="date">
    <br>
    <label for="montant">Montant de la depense : </label>
    <input type="number" name="montant" id="montant">
    <br>
    <label for="beneficiaire">Beneficiaire de la depense : </label>
    <select name="beneficiaire" id="beneficiaire">
        <option value="Famille">Famille</option>
        <option value="Enfants">Enfants</option>
        <option value="Jean">Jean</option>
    </select>
    <br>
    <button type="submit">Valider</button>
</form>
</body>
</html>
