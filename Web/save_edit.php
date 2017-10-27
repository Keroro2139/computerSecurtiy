<?php
	mysql_connect("localhost","cs57160040","Dt8R7ASn2pAEuLVL");
	mysql_select_db("cs57160040");
	$query = "UPDATE member SET 
								UserId = '".$_POST['uid']."',
								UserName = '".$_POST['user']."',
								Password = '".$_POST['pass']."',
								Name = '".$_POST['name']."'
								WHERE UserID = '".$_POST['uid']."' ";
	$save_query = mysql_query($query);
	if($save_query) {
		header("location:admin_page.php");
	}
	else {
		echo "Error saved [".$query."]";
	}
?>
								