<?php
include('connection.php');
$error = "";
$err="";
if(!is_dir("uploads")){
mkdir("uploads");
}

function savedata(){
	include('connection.php');
	include('check.php');
	$user=$login_user;
	$dpt=$_POST['cat'];
	$title=$_POST['title'];
	$main=$_POST['main'];
	global $_FILES, $_POST,$putitat,$fullname,$d,$t,$user;

 $sql = "insert into article (Title,Category,Main,UploadedBy,DateUploaded,TimeUploaded,image) values('$title','$dpt','$main','$login_user','$d','$t','".$putitat."');"; 
 if(mysqli_query($con,$sql)){

echo '
		<script>
    var x;
    if (confirm("File Successfully added. Do you want to add another file?") == true) {
        
        window.location="newArticle.php";
    } else {
       window.location="index.php";
    }
</script>
';

//header("Location:FileUpload.php");
 }else{
echo"File Upload Failed";

 }
}
$name=$_POST['title'];
$d=date("Y/m/d");
date_default_timezone_set("Africa/Nairobi");//setting the time zone so that the correct time can be picked
$t=date("h:i:sa");
$n=$_FILES['uploadedfile']['name'];
$ext = pathinfo($n, PATHINFO_EXTENSION);
$fullname=$name.".".$ext;
$putitat="uploads/".basename($fullname);

//$s=filesize($putitat)/1024;
if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'],$putitat)){
	savedata();
	//header("location:main.html");
//echo $s;
}else{
	if(copy($_FILES['uploadedfile']['tmp_name'].$putitat)){
		savedata();
		echo $s;
		//header("location:main.html");
	}else{
		echo 'File upload failed click <a href="Fileupload.php">Here</a>';
	}
}



?>