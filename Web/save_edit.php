<?php
	
	mysql_connect("localhost","cs57160040","Dt8R7ASn2pAEuLVL");
	mysql_select_db("cs57160040");
	$query = "UPDATE member SET ";
	$query .= "UserID = '".$_POST['uid']."' ";
	$query .= "Username = '".$_POST['user']."' ";
	$query .= "Password = '".$_POST['pass']."' ";
	$query .= "Name = '".$_POST['name']."' ";
	$query .= "Status = '".$_POST['status']."' ";
	$query .= "WHERE UserID = '".$_GET['id']."' ";
	$q = mysql_query($q);
	if($q) {
		echo "Saved";
	}
	else {
		echo "Error saved [".$query."]";
	}
?>