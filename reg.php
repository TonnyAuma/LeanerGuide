<?php
include("connection.php"); //Establishing connection with our database
 
$error = ""; //Variable for storing our errors.

if(empty($_POST["email"]) || empty($_POST["password"])|| empty($_POST["name"]))
{
$error = "Both fields are required.";
}else
{
// Define $username and $password
$username=$_POST['email'];
$password=$_POST['password'];
 $fullname=$_POST['name'];
 $loginas=$_POST['logas'];
// To protect from MySQL injection
 
//Check username and password from database


 $sql = "insert into login (Email,Password,Name) values('$username','$password','$fullname');"; 
 if(mysqli_query($con,$sql)){
$error="Success <br/>";
 header("location:index.php");

}else
{
$error = "Incorrect username or password.";
}
 
}

 
?>