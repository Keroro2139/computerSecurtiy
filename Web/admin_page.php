<?php 

	session_start();
	mysql_connect("localhost","cs57160040","Dt8R7ASn2pAEuLVL");
	mysql_select_db("cs57160040");
	$strSQL = "SELECT * FROM member WHERE Status = 'USER' ORDER BY UserID ASC";
	$q = mysql_query($strSQL);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Welcome admin</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="uikit/dist/css/uikit.min.css">
	<script src="uikit/dist/js/uikit.min.js"></script>
	<script src="uikit/dist/js/uikit-icons.min.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>

	<div class="uk-container uk-container-center uk-margin-top uk-margin-large-bottom">
		<div class="uk-grid" data-uk-grid-margin="">
            <div class="uk-width-medium-1-1 uk-row-first" style="margin-top: 50px">
				<div class="uk-vertical-align-middle uk-width-1-1">
					<h2>Hello admin!!!</h2>
						<table class="uk-table uk-table-hover uk-table-divider">
						    <thead>
						        <tr>
						        	<th><center><b>No.</b></center></th>
						            <th><center><b>Name</b></center></th>
						            <th><center><b>Status</b></center></th> 
						        </tr>
						    </thead>
						    <tbody class="uk-vertical-align uk-text-center">
						            <?php
				            			while ($user = mysql_fetch_array($q)) {
				               				echo '<tr>';
				               				echo '<td>'.'</td>';
				               				echo '<td>'.$user['Name'].'</td>';
				               				echo '<td>'.$user['Status'].'</td>';
				               				echo '</tr>';
				            			}
				        			?>
				        		
						    </tbody>
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