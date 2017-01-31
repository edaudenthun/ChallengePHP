<?php
include 'connexion.php';

session_start();
$res = mysqli_query($cnx, 'SELECT * FROM custo WHERE id=1');
$data = mysqli_fetch_assoc($res);

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/main.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <title></title>
  </head>
  <style media="screen">

  .navbar-inverse{
    background-color: <?php echo $data['Navbar']; ?>;
  }

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
  }

  h1 , h2, h3, h4 {
    color: <?php echo $data['Title']; ?>;
  }

  a {
    color : <?php echo $data['Urls']; ?>!important;
  }

  .btn {
    background-color: <?php echo $data['button']; ?>;
  }

  img{
    height: 100px;
    width: 100px;
  }

  </style>
  <body>

  </body id="top">

  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
          <!-- Left -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="../index.php">Start Bootstrap</a>
          </div>
          <!-- Right -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav navbar-right">
                  <li>
                    <a href="customization.php">Customization</a>
                  </li>
                  <li>
                      <a href="../index.php">Home</a>
                  </li>
                  <li>
                      <a href="repertory.php">Repertory</a>
                  </li>
                  <li>
                      <a href="about.php">About</a>
                  </li>
                  <li>
                      <a href="contact.php">Contact</a>
                  </li>
                  <li>
                    <?php

                    $_SESSION['log'] = isset($_SESSION['log']) ? $_SESSION['log'] : '';

                    if ($_SESSION['log'] === true) {
                        echo "<a href='admin.php'>Admin</a>
                      </li>
                      <li>
                      <a href='logout.php'>Deconnexion</a>
                      </li>";
                    } else {
                        echo "<a href='login.php'>Connexion</a>";
                    }
                    ?>

              </ul>
          </div>
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>


  <!-- GoToTop --> <?php include_once 'goToTop.php'; ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://use.fontawesome.com/182356f2e8.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  <script src=../js/index.js></script>
  </body>
</html>


<?php

$res = mysqli_query($cnx, 'SELECT * FROM form ');
$data = mysqli_fetch_assoc($res);
echo '<div id="tableau class="table-responsive">';
echo "<table class=' table-bordered'>";
  echo '<tr>';
  foreach ($data as $key => $value) {
      echo '<th>'.$key.'</th>';
  }

    echo '<th> Valider ? <th> Supprimer ? </th> <th> Modifier ? </th></tr>';

      echo '</tr>';
mysqli_data_seek($res, 0);
while ($data = mysqli_fetch_assoc($res)) {
    echo '<tr>';
    foreach ($data as $key => $value) {
        if ($key == 'Avatar') {
            echo "<td><img class='img-responsive center-block' src='../img/".$value."'></td>";
        } else {
            echo '<td>'.$value.'</td>';
        }
    }
    echo "<td><a href='validation.php?valid=".$data['id']."'><i class='fa fa-2x fa-check-square-o' aria-hidden='true'></i>
</a></td>";
    echo "<td>
                   <form action ='delete.php?suppr=".$data['id']."' method='post' >
                     <input type=checkbox name='checkbox'>Sûre?
                     <input type=submit name ='suppr' id='suppr' value = 'Supprimer'></td>
                   </form>";

    echo '<td> <a href="modif.php?modif='.$data['id']."\"'><i class='fa fa-cog fa-2x' aria-hidden='true'></i></a>";

    echo '</tr>';
}
echo '</table>';
echo '</div>';

 ?>
