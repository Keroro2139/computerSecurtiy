<?php 

	session_start();
	mysql_connect("localhost","cs57160040","Dt8R7ASn2pAEuLVL");
	mysql_select_db("cs57160040");
	$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."'";
	$q = mysql_query($strSQL);
	$q = mysql_fetch_array($q);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome user</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="uikit/dist/css/uikit.min.css">
	<script src="uikit/dist/js/uikit.min.js"></script>
	<script src="uikit/dist/js/uikit-icons.min.js"></script>
</head>
<body>
		<h1>Hello user!!!</h1>
		Name : <?php echo $q["Name"]; ?>
</body>
</html>