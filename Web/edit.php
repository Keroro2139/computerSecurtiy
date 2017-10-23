<!DOCTYPE html>
<html>
<head>
	<title>Edit USER</title>
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
				<div class="uk-vertical-align-middle uk-width-1-1">
					<?php
						mysql_connect("localhost","cs57160040","Dt8R7ASn2pAEuLVL") or die("Connection Error!!!");
						mysql_select_db("cs57160040");
						$strSQL = "SELECT * FROM member WHERE UserID = '".$_GET['id']."'";
						$q = mysql_query($strSQL);
						$q = mysql_fetch_array($q);
					?>
					<table class="uk-table uk-table-hover uk-table-divider">
						<thead>
							<tr>
							    <th><center><b>UserID</b></center></th>
							    <th><center><b>Username</b></center></th>
							    <th><center><b>Password</b></center></th>
							    <th><center><b>Name</b></center></th>
							    <th><center><b>Status</b></center></th> 
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><input size="5" class="uk-input" type="text" name="id" value="<?php echo $q["UserID"];?>"></td>
								<td><input size="5" class="uk-input" type="text" name="user" value="<?php echo $q["Username"];?>"></td>
								<td><input size="5" class="uk-input" type="text" name="pass" value="<?php echo $q["Password"];?>"></td>
								<td><input size="5" class="uk-input" type="text" name="name" value="<?php echo $q["Name"];?>"></td>
								<td><input size="5" class="uk-input" type="text" name="status" value="<?php echo $q["Status"];?>"></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</body>
</html>