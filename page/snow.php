<?php
include('connexion.php');

$res1 = mysqli_query($cnx,"SELECT * FROM custo WHERE id=1");
$data1 = mysqli_fetch_assoc($res1);

if ($data1['snow'] == 1) {
 echo '<script src="../js/snowstorm.js"></script>';
 echo "<script>
       snowStorm.snowColor = '#F8F8FF ';   // blue-ish snow!?
       snowStorm.flakesMaxActive = 96;    // show more snow on screen at once
       snowStorm.useTwinkleEffect = true; // let the snow flicker in and out of view
       </script>";
}

?>
