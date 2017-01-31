<?php
include_once("connexion.php");
$numid = $_GET['valid'];
$res = mysqli_query($cnx, "SELECT * FROM form WHERE id='$numid'");
$data = mysqli_fetch_assoc($res);
$res = mysqli_query($cnx, "UPDATE form SET valider=1 WHERE id='$numid'");
header('location:admin.php');

?>
