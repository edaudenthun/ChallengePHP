<?php

$numid= (isset($_GET['modif']))? $_GET['modif'] : "";

 ?>
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
<div class="row">
    <!-- Form Column -->
    <div class="col-md-4">
        <!-- Contact form -->
        <form enctype="multipart/form-data" action="modifcheck.php" method="POST" name="sentMessage" id="contactForm" novalidate>
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

            <div class="control-group form-group">
                <div class="controls">
                    <label>Date de naissance:</label>
                    <input type="hidden" class="form-control" name="modif" value="<?php echo $numid ?>"id="date_naissance" required data-validation-required-message="Please enter your email address.">
                </div>
            </div>


            <div id="success"></div>
            <button type="submit" class="btn btn-primary">Send Message</button>
        </form>
    </div>
</div>
