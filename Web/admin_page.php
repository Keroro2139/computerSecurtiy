<?php 
	session_start();
	mysql_connect("localhost","cs57160040","Dt8R7ASn2pAEuLVL");
	mysql_select_db("cs57160040");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.31/css/uikit.min.css" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.31/js/uikit.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.31/js/uikit-icons.min.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
		<div class="uk-grid" data-uk-grid-margin="">
            <div class="uk-width-medium-1-1 uk-row-first" style="margin-top: 50px">
				<div class="uk-vertical-align-middle uk-width-1-1">
					<?php
						$strSQL = "SELECT * FROM member WHERE UserID = '".$_SESSION['UserID']."'";
						$q = mysql_query($strSQL);
						$q = mysql_fetch_array($q);
					?>
					<h2>Hello admin: <b><?php echo $q["Name"]; ?></b> </h2>
					<?php
						$strSQL = "SELECT * FROM member WHERE Status = 'USER' ORDER BY UserID ASC";
						$q = mysql_query($strSQL);
					?>
						<table class="uk-table uk-table-hover uk-table-divider">
						    <thead>
						        <tr>
						        	<th><center><b>No.</b></center></th>
						            <th><center><b>Name</b></center></th>
						            <th><center><b>Status</b></center></th>
						            <th><center><b>Function</b></center></th> 
						        </tr>
						    </thead>
						    <tbody class="uk-vertical-align uk-text-center">
						            <?php
				            			while ($user = mysql_fetch_array($q)) {
				            		?>
									    <tbody class="uk-vertical-align uk-text-center">
									    	<tr>
									    		<td></td>
									    		<td><?php echo $user['Name']; ?></td>
									    		<td><?php echo $user['Status']; ?></td>
									    		<td>
													<a href="edit.php?id=<?php echo $user["UserID"]; ?>">
														<button class="uk-button uk-button-primary uk-button-small">Edit</button>
													</a>
												</td>
									    	</tr>
									    </tbody>
				            		<?php
				            			}
				        			?>
						</table>
						<?php
				            while ($user = mysql_fetch_array($q)) {
				                echo '<b>Name : </b>'.$user['Name'].'&nbsp;';
				                echo '<b>Status : </b>'.$user['Status'].'<br>';
				            }
				        ?> <br>
				        <div class="uk-vertical-align uk-text-right">
							<form action="logout.php">
								<input class="uk-button uk-button-danger" type="submit" name="submit" value="Logout">
							</form>
						</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>