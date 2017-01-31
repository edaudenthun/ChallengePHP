<?php

include_once('connexion.php');

$coltitle = isset($_POST['coltitle'])? $_POST['coltitle'] : "";
$colnavbar = isset($_POST['colnavbar'])? $_POST['colnavbar'] : "";
$colurl = isset($_POST['colurl'])? $_POST['colurl'] : "";
$colbutton = isset($_POST['colbutton'])? $_POST['colbutton'] : "";
$font = isset($_POST['font'])? $_POST['font'] : "";

if($coltitle != ''){
$res = mysqli_query($cnx, "UPDATE custo SET Title='$coltitle' WHERE id=1");

}

if($colnavbar != ''){
$res = mysqli_query($cnx, "UPDATE custo SET Navbar='$colnavbar' WHERE id=1");

}

if($colurl != ''){
$res = mysqli_query($cnx, "UPDATE custo SET Urls='$colurl' WHERE id=1");

}

if($colbutton != ''){
$res = mysqli_query($cnx, "UPDATE custo SET button='$colbutton' WHERE id=1");

}

if($font != ''){
$res = mysqli_query($cnx, "UPDATE custo SET font='$font' WHERE id=1");
}


$res =  mysqli_query($cnx, "INSERT INTO custohisto(titlehisto, navbarhisto, urlhisto, buttonhisto) VALUES('$coltitle','$colnavbar', '$colurl', '$colbutton')");



$arrow = isset($_POST['arrow']);
 $arrow = (int)$arrow;

 $fixed = isset($_POST['fixed']);
 $fixed = (int)$fixed;

 $snow = isset($_POST['snow']);
 $snow = (int)$snow;

 $res = mysqli_query($cnx, "UPDATE custo SET arrow='$arrow' WHERE id=1");
 $res = mysqli_query($cnx, "UPDATE custo SET fixed='$fixed' WHERE id=1");
 $res = mysqli_query($cnx, "UPDATE custo SET snow='$snow' WHERE id=1");
header('location:../index.php');
?>
