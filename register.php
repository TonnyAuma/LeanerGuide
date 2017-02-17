<?php
include('reg.php');
include("check.php"); 
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>AT-Blog</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/art.css" rel="stylesheet">
<link href="css/main.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-custom head">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header ">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">TECHNOLOGY & INNOVATION (T&I)</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Courses</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Vision</a></li>
            <li><a href="#">Mission</a></li>
            <li><a href="#">ATOM</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Meet The Team</a></li>
           
          </ul>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>


    <div class="container">
        <form class="form-signin" action="" method="post">
          <h1 class="text-center">Add New User</h1>
          <p>
            <label class="sr-only" >Email Address</label>
            <input type="email" name="email" placeholder="Email Address" class="form-control" required autofocus>

          </p>
          <p>

            <label class="sr-only" >Password</label>
            <input type="password" name="password" placeholder="Password" class="form-control" required >

          </p>
           <p>

            <label class="sr-only" >Full Name</label>
            <input type="text" name="name" placeholder="Full Name" class="form-control" required >

          </p>

          <p>
              <select class="form-control" name="logas">
                <option>Login As</option>
                <option>Administrator</option>
                <option>User</option>
              </select>
            </p>

        






          <input type="submit" name="login" value="login" class="btn-primary btn-block"/><br/>
          <div class="alert alert-danger text-center" role="alert">
            <?php
 // Include Login Script
   echo $error;

?>

          </div>

        </form>
    </div>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>