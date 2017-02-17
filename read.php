<?php
$host='localhost';
$user='root';
$pass='root';
$db='AT-Blog';

include 'secure.php';

mysql_connect($host,$user,$pass) or die (mysql_error());
mysql_select_db($db) or die (mysql_error());

 $id =decrypt_url($_GET['id']);
	$result=mysql_query("select * from article WHERE Id='$id'")or die (mysql_error());
	
	
?>
<?php
$query=mysql_query("select * from comment WHERE articleid='$id'")or die (mysql_error());
$list = '';
while($row = mysql_fetch_array($query)){
	$name = $row["name"];
	$comment = $row["comment"];
	$img=$row['image'];
	$list.="<p style='text-align:justify'> <b>$name</b> <br/> $comment <hr></p>";
}
?>

