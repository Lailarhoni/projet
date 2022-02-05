<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sty_list.css">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>liste des étudiants GINF1 </h1>
        <br><br><br>
    <table border="10px" class="tabl">
        <hr>
        <tr>
            <td>code apogee   </td>
            <td>nom   </td>
            <td>prenom   </td>
            <td>telephone  </td>
            <td>email  </td>
        </tr>

    <?php
    include 'Includes/liste.inc.php';
    foreach($student as $GINF1): ?>
        <tr>
        <td> <?=$GINF1["codeAp"] ?></td>
        <td> <?= $GINF1["nom"] ?></td>
        <td> <?= $GINF1["prenom"] ?></td>
        <td> <?= $GINF1["tele"] ?></td>
        <td> <?= $GINF1["email"] ?></td>
        </tr>

    <?php endforeach ?>
    </table>
    <hr>
    
    <a href="add.php">ajouter eleve</a> <br>
    <a href="bienvenue.php">annuler</a>
    </center>
</body>
</html>