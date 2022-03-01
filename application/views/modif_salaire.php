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
    <h1>Gestion des salaires de Jean</h1>
    <form action="<?php echo site_url('Salaire/modif_salaire')?>">
        <label for="montant">Montant du salaire : </label>
        <input type="number" name="montant" id="montant">
        <br>
        <button type="submit">Valider</button>
    </form>
</body>
</html>
