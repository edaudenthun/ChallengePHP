<?php

session_start();
include('connexion.php');

$pseudo = isset($_POST['pseudo'])? trim($_POST['pseudo']) : "";
$name = isset($_POST['name'])? trim($_POST['name']) : "";
$profil = isset($_POST['profil'])? trim($_POST['profil']) : "";
$email = isset($_POST['email'])? trim($_POST['email']) : "";
$jeu = isset($_POST['jeu'])? trim($_POST['jeu']) : "";
$date_naissance = isset($_POST['date_naissance'])? trim($_POST['date_naissance']) : "";
$dir = $_SERVER['DOCUMENT_ROOT']."/challengePHP/img";
$filelist = scandir( $dir );
array_splice($filelist,0,2);

$Avatar = $_FILES['profil']['name'];
$type = $_FILES['profil']['type'];

$verif_name = '#[^0-9]#';
$verif_pseudo = '#^[A-Za-z]#';
$verif_date = '#^[0-9]{2}/[0-9]{2}/[0-9]{4}$#';


if(preg_match($verif_name, $name)){
  $name = $name;
} else {
  $name = "";
}

if(preg_match($verif_pseudo, $pseudo)){
  $pseudo = $pseudo;
} else {
  $pseudo = "";
}


if(preg_match($verif_date, $date_naissance)){
  $date_naissance = $date_naissance;
} else {
  $date_naissance = "";
}


$numid= (isset($_POST['modif']))? $_POST['modif'] : "";

$arrayQuery = array();

if ($pseudo) array_push($arrayQuery, "pseudo='$pseudo'");
if ($Avatar) array_push($arrayQuery, "Avatar='$Avatar'");
if ($name) array_push($arrayQuery, "prenom='$name'");
if ($jeu) array_push($arrayQuery, "jeux='$jeu'");
if ($email) array_push($arrayQuery, "mail='$email'");
if ($date_naissance) array_push($arrayQuery, "naissance='$date_naissance'");

$arrayQuery = implode(', ', $arrayQuery);


if($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png'){
  $res = move_uploaded_file($_FILES['profil']["tmp_name"],
"/var/www/html/challengePHP/img/".$_FILES['profil']["name"]);
}

echo "UPDATE form SET $arrayQuery WHERE id='$numid'";
  if(count($arrayQuery) != 0)
  $res = mysqli_query($cnx, "UPDATE form SET $arrayQuery WHERE id='$numid'");

header('location:admin.php');

?>
