<?php
session_start();

include('snow.php');
$res = mysqli_query($cnx,"SELECT * FROM custo WHERE id=1");
$data = mysqli_fetch_assoc($res);

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

</style>

<body id="top">

        <!-- Navbar --> <?php include_once('navbar.php'); ?>
        <!-- GoToTop --> <?php include_once('goToTop.php');?>
    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Contact</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Contact</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">
            <!-- Form Column -->
            <div class="col-md-4">
                <!-- Contact form -->
                <form enctype="multipart/form-data" action="contact_check.php" method="POST" name="sentMessage" id="contactForm" novalidate>
                  <div class="control-group form-group">
                      <div class="controls">
                          <label>Pseudo : </label>
                          <input type="text" name="pseudo" class="form-control" id="pseudo" required data-validation-required-message="Please enter your name.">
                          <p class="help-block"></p>
                      </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Full Name:</label>
                            <input type="text" class="form-control" name="name" id="name" required data-validation-required-message="Please enter your name.">
                            <p class="help-block"></p>
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Photo de profil :</label>
                            <input type="file" name="profil" id="profil" required data-validation-required-message="format jpg, jpeg ou png uniquement">
                            <p class="help-block"></p>
                        </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Email Address:</label>
                            <input type="email" class="form-control" name="email" id="email" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Jeu favoris:</label>
                            <input type="email" class="form-control" name="jeu" id="jeu" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>
                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Date de naissance:</label>
                            <input type="text" class="form-control" name="date_naissance" id="date_naissance" required data-validation-required-message="Please enter your email address.">
                        </div>
                    </div>

                    <div class="control-group form-group">
                        <div class="controls">
                            <label>Message:</label>
                            <textarea rows="4" cols="100" class="form-control" name="message" id="message" required data-validation-required-message="Please enter your message" maxlength="999" style="resize:none"></textarea>
                        </div>
                    </div>
                    <div id="success"></div>
                    <button type="submit" class="btn btn-primary">Send Message</button>
                </form>
            </div>
        </div>
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
    <script src="../js/bootstrap.min.js"></script>
    <script src=../js/index.js></script>

</body>
<?php
    include_once('snow.php');
?>
</html>
