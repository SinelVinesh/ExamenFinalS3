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
<h1>Insertion d'une nouvelle categorie</h1>
<form action="<?php echo site_url('Categorie/insert')?>" method="post">
    <label for="categorie_name">Nom de la categorie : </label>
    <input type="text" name="categorie_name" id="categorie_name">
    <br>
    <label for="budget_mensuel">Budget mensuel : </label>
    <input type="number" name="budget_mensuel" id="budget_mensuel">
    <br>
    <button type="submit">Valider</button>
</form>
</body>
</html>
