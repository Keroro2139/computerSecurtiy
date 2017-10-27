<!DOCTYPE html>
<html>
<head>
	<title>Edit USER</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.31/css/uikit.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.31/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.31/js/uikit-icons.min.js"></script>
</head>
<body>
	<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
		<div class="uk-grid" data-uk-grid-margin="">
            <div class="uk-width-medium-1-1 uk-row-first" style="margin-top: 50px">
				<div class="uk-vertical-align-middle uk-width-1-1">
					<?php
						mysql_connect("localhost","cs57160040","Dt8R7ASn2pAEuLVL") or die("Connection Error!!!");
						mysql_select_db("cs57160040");
						$strSQL = "SELECT * FROM member WHERE UserID = '".$_GET['id']."'";
						$q = mysql_query($strSQL);
						$q = mysql_fetch_array($q);
					?>
					<form action="save_edit.php" method="POST">
					<table class="uk-table uk-table-hover uk-table-divider">
						<thead>
							<tr>
							    <th><center><b>UserID</b></center></th>
							    <th><center><b>Username</b></center></th>
							    <th><center><b>Password</b></center></th>
							    <th><center><b>Name</b></center></th>
							    <th><center><b>Status</b></center></th> 
							    <th></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><center><input class="uk-input" type="hidden" name="uid" value="<?php echo $q["UserID"];?>"><?php echo $q["UserID"];?></center></td>
								<td><input class="uk-input" type="text" name="user" value="<?php echo $q["Username"];?>"></td>
								<td><input class="uk-input" type="text" name="pass" value="<?php echo $q["Password"];?>"></td>
								<td><input class="uk-input" type="text" name="name" value="<?php echo $q["Name"];?>"></td>
								<td><input class="uk-input" type="text" name="status" value="<?php echo $q["Status"];?>"></td>
								<td><center><button type="submit" class="uk-button uk-button-primary uk-button-small">Submit</button></center></td>
							</tr>
						</tbody>
					</table>
					</form>
					<div class="uk-vertical-align uk-text-right">
						<form action="admin_page.php">
							<button class="uk-button uk-button-default uk-button-small">Back</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>