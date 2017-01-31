<?php
session_start();
include_once("connexion.php");

echo '<form action="loginCheck.php" method="POST">';
echo '<input type="text" name="pseudo" value=""/><br>';
echo '<input type="password" name="mdp" value=""/><br>';
echo '<input type="submit" id="submit" name="submit" value="Send"/>';
echo '</form>';




 ?>
