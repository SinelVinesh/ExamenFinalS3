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
    <h1>Liste des salaries</h1>
<table>
    <tr>
        <th>
            Nom
        </th>
    </tr>
    <tr>
        <td>
            Jean
        </td>
        <td>
            <a href=<?php echo site_url('Salaire/modif_salaire')?>?id='USER01'>Gerer le salaire</a>
        </td>
    </tr>    <tr>
        <td>
            Jeanne
        </td>
        <td>
            <a href="">Gerer le salaire</a>
        </td>
    </tr>    <tr>
        <td>
            Julien
        </td>
        <td>
            <a href="">Gerer le salaire</a>
        </td>
    </tr>
</table>
</body>
</html>
