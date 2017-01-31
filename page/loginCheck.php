<?php

session_start();
include_once("connexion.php");

$pseudo = isset($_POST['pseudo'])? $_POST['pseudo'] : "";
$mdp = isset($_POST['mdp'])? $_POST['mdp'] : "";

$pseudo = mysqli_real_escape_string($cnx, $pseudo);
$mdp = mysqli_real_escape_string($cnx, $mdp);

$res = mysqli_query($cnx,"SELECT * FROM challPHP WHERE pseudo='$pseudo' AND mdp='$mdp'");
$data = mysqli_fetch_assoc($res);

if($data['pseudo'] == $pseudo && $data['mdp'] == $mdp) {
  $identifiant = 'true';
} else {
  $identifiant = '';
}

if($identifiant != '') {
  $_SESSION['log'] = true;
} else {
  $_SESSION['log'] = false;
}

header('location:../index.php');

 ?>
