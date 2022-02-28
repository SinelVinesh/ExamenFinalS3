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
    <h1>Bienvenue admin</h1>
    <a href="<?php echo site_url('categorie/insertion')?>">Creer une nouvelle categorie</a>
    <br>
    <a href="<?php echo site_url('salaire')?>">Gerer le salaire</a>
    <br>
    <a href="<?php echo site_url('utilisateurs')?>">Gerer les utilisateurs</a>
    <br>
    <a href="<?php echo site_url('beneficiaires')?>">Gerer les beneficiaires</a>
</body>
</html>