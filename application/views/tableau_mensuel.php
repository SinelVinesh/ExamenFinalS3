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
    <h1>Tableau mensuel</h1>
<table>
    <tr>
        <th>Id</th>
        <th>Designation</th>
        <th>Type</th>
        <th>Beneficiaire</th>
        <th>Depense</th>
        <th>Entree</th>
        <th>% du budget</th>
    </tr>
    <tr>
        <td>DEP0001</td>
        <td>Achat Jumbo score</td>
        <td><a href="<?php echo site_url('resume/categorie/courses')?>">Courses</a></td>
        <td><a href="<?php echo site_url('resume/beneficiaire/famille')?>">Famille</a></td>
        <td>150000ar</td>
        <td>0</td>
        <td>5%</td>
    </tr>
</table>
</body>
</html>
