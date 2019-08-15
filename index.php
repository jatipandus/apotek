<?php 
session_start();
  if (isset($_SESSION["id"])) {
    # code...
    header("Location: indexx.php");
  }
  else{ ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="PerPusWeb (Perpustakaan Berbasis Web)">
    <meta name="author" content="Hakko Bio Richard">
    <link rel="icon" href="../../favicon.ico">

    <title>Apotek Online</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="js/ie-emulation-modes-warning.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body background="img/page-background.png">

    <div class="container">

      <form class="form-signin" action="proseslogin.php" method="post">
        <br><br><br>
        <center><h2 class="form-signin-heading"> Apotek Online </h2></center>
        <div class="input-group">
         <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
         <input type="text" id="id" name="id" class="form-control" placeholder="Username" autocomplete="off" autofocus="on" required>
         </div>
        <div class="input-group" style="margin-top: 5px;">
         <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
         <input type="password" id="password" name="password" class="form-control" placeholder="Password" autocomplete="off" required>
         </div>
        <br />
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
      <form class="form-signin" action="registrasi.php" method="post">
        <center>Belum Punya Akun?? </center><br>
         <button class="btn btn-lg btn-primary btn-block" type="submit">Registrasi</button>
      </form>

    </div> <!-- /container -->

 
<!-- end dialog modal 
konsep tentang web dinamis database
CRUD

-->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
  </body>

</html>

<?php } ?>