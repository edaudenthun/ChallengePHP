<?php

include_once 'connexion.php';

echo '<form action="customization_check.php" method="POST">';
echo "<label for='coltitle'> Title's color : </label>";
echo '<input type="text" name="coltitle" value=""/><br>';

echo "<label for='colnavbar'> Navbar color : </label>";
echo '<input type="text" name="colnavbar" value=""/><br>';

echo "<label for='colurl'> Url's color : </label>";
echo '<input type="text" name="colurl" value=""/><br>';

echo "<label for='colbutton'> Button's color : </label>";
echo '<input type="text" name="colbutton" value=""/><br>';

echo'<select for="font" name="font">
  <option value="Lemonada">Lemonada</option>
  <option value="Pacifico">Pacifico</option>
  <option value="Satisfy">Satisfy</option>
</select><br>';

$res = mysqli_query($cnx, 'SELECT * FROM custo WHERE id=1');
$data = mysqli_fetch_assoc($res);

if ($data['arrow'] == 0) {
    echo '<input type="checkbox" name="arrow" value=""/>Flèches slider<br>';
} else {
         echo '<input type="checkbox" name="arrow" value="" checked/> Flèches slider<br>';
     }

     if ($data['fixed'] == 0) {
         echo '<input type="checkbox" name="fixed" value=""/>navbar fixed<br>';
     } else {
         echo '<input type="checkbox" name="fixed" value="" checked/> navbar fixed<br>';
     }

     if ($data['snow'] == 0) {
         echo '<input type="checkbox" name="snow" value=""/>Neige<br>';
     } else {
              echo '<input type="checkbox" name="snow" value="" checked/> Neige<br>';
          }

echo "<input type='submit' name='submit' value='Submit'/>";
echo '</form>';

$res = mysqli_query($cnx, 'SELECT titlehisto, navbarhisto, urlhisto, buttonhisto FROM custohisto ');
$data = mysqli_fetch_assoc($res);

// echo "<h1> Historique de la customisation</h1><br>";
echo '<table>';
echo'<tr>';
  foreach ($data as $key => $value) {
      echo '<th>'.$key.'</th>';
  }
echo '</tr>';

mysqli_data_seek($res, 0);

while ($data = mysqli_fetch_assoc($res)) {
    echo'<tr>';
    foreach ($data as $key => $value) {
        echo '<td>'.$value.'</td>';
    }
    echo '</tr>';
}
echo '</table>';

 ?>


<style media="screen">
table{
  margin: auto;
  margin-top: 50px;


}
  th{
    background-color: lightgrey;
    color:rgba(255,0,0,0.5);
    text-align: center;
    font-size: 1.5em;
  }

  td{
    color: darkred;
    font-style: italic;
    text-align: center;
    font-size: 1.5em;
    word-wrap: break-word;
    width: 150px;
    border: solid black 1px;
  }

</style>
