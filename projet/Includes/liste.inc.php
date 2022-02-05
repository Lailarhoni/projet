<?php 
include 'db.inc.php';
$rqt="SELECT * from GINF1 ";
session_start();
$student=mysqli_query($connection,'select codeAp, nom, prenom,tele,email from GINF1');
?>