<?php include('Includes/login.inc.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1 align="center"> Bonjour cher etudiant : <?php echo $_SESSION['prenom']." ".$_SESSION['nom']; ?> </h1>
    <ul>
        <hr>
        <li> <a href="profil.php">mon profil</a></li>
        <li> <a href="liste.php">liste des eleves</a></li>
        <hr>
        <li> <a href="index.html">Deconnexion</a></li>
        <hr>
    </ul>
</body>
</html>

