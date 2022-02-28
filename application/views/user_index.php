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
<a href="<?php echo site_url('depense/ajout')?>">Ajouter une nouvelle depense</a>
<br>
<a href="<?php echo site_url('entree/ajout')?>">Ajouter une depense imprevue</a>
</body>
</html>