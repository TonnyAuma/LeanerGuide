<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Online File System</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
 <link href="css/login.css" rel="stylesheet">
  

  </head>
  <body>
    <div class="container">
    
        <form class="form-signin" action="" method="post">
   <img src="images/logo.jpg" alt=""  class="img-square displayed">
          <h1 class="text-center">Sign In</h1>
          <p>
            <label class="sr-only" >Email Address</label>
            <input type="email" name="email" placeholder="Email Address" class="form-control" required autofocus>

          </p>

            <label class="sr-only" >Password</label>
            <input type="password" name="password" placeholder="Password" class="form-control" required >

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
include('log.php'); // Include Login Script

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