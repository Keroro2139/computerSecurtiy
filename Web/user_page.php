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
	<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
		<div class="uk-grid" data-uk-grid-margin="">
            <div class="uk-width-medium-1-1 uk-row-first" style="margin-top: 50px">
            	<div class="uk-vertical-align uk-text-center">
					<div class="uk-vertical-align-middle uk-width-1-1">
					<h1>Hello user!!!</h1>
					Name : <?php echo $q["Name"]; ?>
				</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>