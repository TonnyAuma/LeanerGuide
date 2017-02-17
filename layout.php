<?php

$host='localhost';
$user='root';
$pass='root';
$db='AT-Blog';

include 'secure.php';

mysql_connect($host,$user,$pass) or die (mysql_error());
mysql_select_db($db) or die (mysql_error());

$sql = "SELECT COUNT(Id) FROM article";
$query = mysql_query( $sql);
$row = mysql_fetch_row($query);
// Here we have the total row count
$rows = $row[0];
// This is the number of results we want displayed per page
$page_rows = 5;
// This tells us the page number of our last page
$last = ceil($rows/$page_rows);
// This makes sure $last cannot be less than 1
if($last < 1){
	$last = 1;
}
// Establish the $pagenum variable
$pagenum = 1;
// Get pagenum from URL vars if it is present, else it is = 1
if(isset($_GET['pn'])){
	$pagenum = preg_replace('#[^0-9]#', '', $_GET['pn']);
}
// This makes sure the page number isn't below 1, or more than our $last page
if ($pagenum < 1) { 
    $pagenum = 1; 
} else if ($pagenum > $last) { 
    $pagenum = $last; 
}
// This sets the range of rows to query for the chosen $pagenum
$limit = 'LIMIT ' .($pagenum - 1) * $page_rows .',' .$page_rows;
// This is your query again, it is for grabbing just one page worth of rows by applying $limit
$sql = "SELECT * FROM article  ORDER BY id DESC $limit";
$query = mysql_query($sql);
// This shows the user what page they are on, and the total number of pages
$textline1 = "Latest Articles (<b>$rows</b>)";
$textline2 = "Page <b>$pagenum</b> of <b>$last</b>";
// Establish the $paginationCtrls variable
$paginationCtrls = '';
// If there is more than 1 page worth of results
if($last != 1){
	/* First we check if we are on page one. If we are then we don't need a link to 
	   the previous page or the first page so we do nothing. If we aren't then we
	   generate links to the first page, and to the previous page. */
	if ($pagenum > 1) {
        $previous = $pagenum - 1;
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$previous.'">Previous</a> &nbsp; &nbsp; ';
		// Render clickable number links that should appear on the left of the target page number
		for($i = $pagenum-4; $i < $pagenum; $i++){
			if($i > 0){
		        $paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
			}
	    }
    }
	// Render the target page number, but without it being a link
	$paginationCtrls .= ''.$pagenum.' &nbsp; ';
	// Render clickable number links that should appear on the right of the target page number
	for($i = $pagenum+1; $i <= $last; $i++){
		$paginationCtrls .= '<a href="'.$_SERVER['PHP_SELF'].'?pn='.$i.'">'.$i.'</a> &nbsp; ';
		if($i >= $pagenum+4){
			break;
		}
	}
	// This does the same as above, only checking if we are on the last page, and then generating the "Next"
    if ($pagenum != $last) {
        $next = $pagenum + 1;
        $paginationCtrls .= ' &nbsp; &nbsp; <a href="'.$_SERVER['PHP_SELF'].'?pn='.$next.'">Next</a> ';
    }
}
$list = '';
while($row = mysql_fetch_array($query)){
	$id = $row["id"];
	$title = $row["Title"];
	$main = $row["Main"];
	$cat=$row['Category'];
	$by=$row['UploadedBy'];
	$dt=$row['DateUploaded'];
	$t=$row['TimeUploaded'];


	
	$list.="<p style='text-align:justify'> <b>$title</b> <br/> $main ...  <a href=Main.php?id=".encrypt_url($row['id']).">Read More</a><br/><br/><span class='label label-primary fix'> By: $by</span>&nbsp<span class='label label-primary fix'> Category: $cat</span>&nbsp<span class='label label-primary fix'> Date Uploaded: $dt. ''.$t</span><hr></p>";
}

?>