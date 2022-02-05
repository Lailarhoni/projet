<?php 
include 'db.inc.php';
session_start();
if(isset($_POST['codeAp']) && isset($_POST['mdp'] ) ){
$user_code=$_POST['codeAp'];
$password=$_POST['mdp'];

$rqt="SELECT * FROM ginf1 WHERE codeAp='".$user_code."' AND mdp='".$password."'";

$rst=mysqli_query($connection,$rqt);

//$login=mysqli_fetch_assoc($rst);

if(!$rst){
header('location:../index.html?error=not_existed');
}  //exit();
else{
    session_start();
    $row = mysqli_fetch_assoc($rst);
    $_SESSION['codeAp']=$row['codeAp'];
    $_SESSION['nom']=$row['nom'];
    $_SESSION['prenom']=$row['prenom'];
    $_SESSION['tele']=$row['tele'];
    $_SESSION['email']=$row['email'];
    header('location:../bienvenue.php');
}

}
if(isset($_POST['annuler'])){
    header('location:../profil.php');

}





