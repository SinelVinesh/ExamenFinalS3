<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bienvenue sur le site</title>
</head>
<body>
<h1>Welcome</h1>
    <a href="<?php echo site_url('connexion/admin')?>">Connexion Admin</a>
    <br>
    <a href="<?php echo site_url('connexion/user')?>">Connexion User</a>
    <br>
    <a href="<?php echo site_url('resume')?>">Tableau mensuel</a>
    <br>
    <a href="">Graphique par categorie</a>
</body>
</html>