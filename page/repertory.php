<?php
session_start();
include_once('connexion.php');

$res = mysqli_query($cnx,"SELECT * FROM custo WHERE id=1");
$data = mysqli_fetch_assoc($res);

$res1 = mysqli_query($cnx, 'SELECT Avatar, prenom, pseudo, jeux, mail, naissance FROM form WHERE valider = 1');
$data1 = mysqli_fetch_assoc($res1);

?>

<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Challenge PHP de </title>

    <!-- Bootstrap Core CSS -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<style media="screen">
@import url('https://fonts.googleapis.com/css?family=<?php echo $data['font']; ?>');

h1 , h2, h3, h4 {
  color: <?php echo $data['Title']; ?>;
  font-family: <?php echo $data['font']; ?>;
}

a {
  color : <?php echo $data['Urls']; ?>!important;
}

.btn {
  background-color: <?php echo $data['button']; ?>;
}

.grid-item {
  width: 200px;

}

</style>

<body id = "top">

      <!-- Navbar --> <?php include_once('navbar.php'); ?>
      <!-- GoToTop --> <?php include_once('goToTop.php');?>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Repertory</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Friends Row -->
        <?php
            mysqli_data_seek($res1,0);
            while ($data1 = mysqli_fetch_assoc($res1)){
              echo '<div class="col-md-4 img-portfolio">
                  <img class="img-responsive img-portfolio img-hover grid-item" src="../img/'.$data1['Avatar'].'" alt="">
                  <h3>'.$data1['prenom'].'</h3>
                  <p>22 ans <span>'.$data1['naissance'].'</span></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae.</p>
                  <h4>Games</h4>
                  <table class="table table-striped  table-hover">
                      <thead>
                          <tr>
                              <th>Game</td>
                              <th>Username</td>
                          </tr>
                      </thead>
                      <tr>
                          <td>'.$data1['jeux'].'</td>
                          <td>'.$data1['pseudo'].'</td>
                      </tr>
                  </table>
              </div>';
            }
            ?>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SimplonBSM 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
      <script src="https://use.fontawesome.com/182356f2e8.js"></script>
      <script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>
     <script src=../js/index.js></script>

</body>
<?php
    include_once('snow.php');
?>
</html>
