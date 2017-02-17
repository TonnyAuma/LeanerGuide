<?php
session_start();
include("connection.php"); //Establishing connection with our database
 
$error = ""; //Variable for storing our errors.

if(empty($_POST["email"]) || empty($_POST["password"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$username=$_POST['email'];
$password=$_POST['password'];
$log=$_POST['logas'];
// To protect from MySQL injection
 
//Check username and password from database
$sql="SELECT FullName,loginas FROM login WHERE Username='$username' and password='$password' and loginas='$log'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
 
//If username and password exist in our database then create a session.
//Otherwise echo error.
 
if(mysqli_num_rows($result) == 1)
{
	if (strcmp($log, 'Administrator') == 0) {
	
		$_SESSION['username'] = $login_user; // Initializing Session
header("location: newArticle.php"); // Redirecting To Other Page
	}elseif(strcmp($log, 'User') == 0){
		$_SESSION['username'] = $login_user; // Initializing Session
	
header("location: newArticle.php"); // Redirecting To Other Page
	}

}else
{
$error = "Incorrect username or password.";
}
 
}

 
?>