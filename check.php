<?php
include('connection.php');
session_start();
$user_check=$_SESSION['username'];
 
$sql = mysqli_query($con,"SELECT FullName FROM login WHERE Username='$user_check'");
 
$row=mysqli_fetch_array($sql,MYSQLI_ASSOC);
 
$login_user=$row['FullName'];
 
if(!isset($user_check))
{
header("Location: login.php");
}
?>