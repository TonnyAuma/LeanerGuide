<?php
include('layout.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>AT-Blog</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
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
  <div class="row">
    <div class="col-md-3 profile">
    <aside>
      <img src="images/logo.jpg" alt=""  class="img-circle">
      <h4>Authorized Training Department</h4>
      <p>Pension Towers</p>
      <hr>
      <p>Share this Page</p>
      
      <ul class="clearfix">
        <li><a href="" ><i class="fa fa-facebook-square fa-3x"></i></a></li>
        <li><a href=""><i class="fa fa-twitter-square fa-3x"></i></a></li>
        <li><a href=""><i class="fa fa-linkedin-square fa-3x"></i></a></li>
        <li><a href=""><i class="fa fa-google-plus-square fa-3x"></i></a></li>
      </ul>
    </aside>
    <aside>
      <p><h3> Quick Links</h3></p>
      <ul class="clearfix">
        <li><a href="" >New Classes</a></li>
        <li><a href="">The Art Of Software Development</a></li>
        <li><a href="">The New Of Structured Cabling</a></li>
        <li><a href="">The Future For Android Developers</a></li>
                <li><a href="">The Art Of Software Development</a></li>
        <li><a href="">The New Of Structured Cabling</a></li>
        <li><a href="">The Future For Android Developers</a></li>
      </ul>


    </aside>
    </div
    </div class="col-md-9" ><h1>News and Events</h1><DIV>
    <article>
        <div class="class">
          <div>
            <h2><?php echo $textline1; ?> Listed</h2>
            <p><?php echo $textline2; ?></p>
            <p class="fix"><?php echo $list?></p>
            <div id="pagination_controls" class="mynav"><?php echo $paginationCtrls; ?></div>
          </div>
          <div class="navbar-text pull-right">
    <a href=""><i class="fa fa-chevron-circle-up fa-3x"></i></a>
  </div>
        </div>
        <footer>
          <span class

        </footer>
    </article>





  </div>


   </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>