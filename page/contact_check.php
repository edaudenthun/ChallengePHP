<?php

session_start();
include('connexion.php');

$pseudo = isset($_POST['pseudo'])? $_POST['pseudo'] : "";
$name = isset($_POST['name'])? $_POST['name'] : "";
$profil = isset($_POST['profil'])? $_POST['profil'] : "";
$email = isset($_POST['email'])? $_POST['email'] : "";
$jeu = isset($_POST['jeu'])? $_POST['jeu'] : "";
$date_naissance = isset($_POST['date_naissance'])? $_POST['date_naissance'] : "";

$dir = $_SERVER['DOCUMENT_ROOT']."/challengePHP/img";
$filelist = scandir( $dir );
array_splice($filelist,0,2);

$Avatar = $_FILES['profil']['name'];
$Avatar = explode('.', $Avatar);
$rand = (int)rand(0, 1000);
$Avatar = $Avatar[0].$rand.'.'.$Avatar[1];
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

if($type == 'image/jpg' || $type == 'image/jpeg' || $type == 'image/png'){
  $res = move_uploaded_file($_FILES['profil']["tmp_name"],
"/var/www/html/challengePHP/img/".$Avatar);
if( $Avatar != '' && $pseudo != '' && $name != '' && $email != '' && $jeu != '' && $date_naissance != '' ){
  $res = mysqli_query($cnx,
  "INSERT INTO form (Avatar,pseudo,prenom,jeux,mail,naissance)
  VALUES ('$Avatar', '$pseudo', '$name', '$jeu', '$email', '$date_naissance')");
  }
} else {
  $res = 0;
}


header('location:admin.php');
?>
