<?php
include('read.php');
$title="";
$content="";
$mdate="";
if($row=mysql_fetch_array($result)){
    $title=$row['Title'];
    $content=$row['Main'];    
    $mdate=$row['DateUploaded'];
    $img=$row['image'];
    }else{
    echo "Sorry Nothing to be displayed";
    } 
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
    </div class="col-md-12" ><h1>News and Events</h1><DIV>
    <article>
      <header><h2><?php echo $title. "<br/>" ?></h2>
        <footer><h4><span class="label label-info"><?php echo "Posted On: ".$mdate ?></span></h4></footer>
        <div class="class">
          <div>
            <?php 
             echo "<p style='text-align:justify'>$content </p>";
             echo "<embed src='$img' width='500px' height='400px'/>";
             
              ?>
              <hr/>
            
              
               


                  <div class="profiles">

                   

                      <p>Share this Page</p>
      
                    <ul class="clearfix">
                      <li><a href="" ><i class="fa fa-facebook-square fa-3x"></i></a></li>
                      <li><a href=""><i class="fa fa-twitter-square fa-3x"></i></a></li>
                      <li><a href=""><i class="fa fa-linkedin-square fa-3x"></i></a></li>
                      <li><a href=""><i class="fa fa-google-plus-square fa-3x"></i></a></li>
                    </ul>
                  
                    </div>

                </div>
          
          <form class="form-signin" action="" method="post">
          <h1 class="text-center">Comment This Article</h1>

            <p>

            <label class="sr-only" >Full Name</label>
            <input type="text" name="fname" placeholder="Full Name" class="form-control" autofocus required >

          </p>
          <p>
            <textarea class="form-control" rows="5" name="Comment" placeholder="Type your comment here"></textarea>                    
          </p>
          
                
                      <button type="submit" class="btn btn-primary" name="register">Post Comment</button>
                    
                 
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