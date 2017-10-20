<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="uikit/dist/css/uikit.min.css">
	<script src="uikit/dist/js/uikit.min.js"></script>
	<script src="uikit/dist/js/uikit-icons.min.js"></script>
</head>
<body>
	<form action="connect.php" method="POST">
		<div class="uk-margin">
			<div class="uk-inline">
				<span class="uk-form-icon" uk-icon="icon: user"></span>
				<input class="uk-input" type="text" name="user" placeholder="Your username">
			</div>
		</div>
		<div class="uk-margin">
			<div class="uk-inline">
				<span class="uk-form-icon" uk-icon="icon: lock"></span>
				<input class="uk-input" type="password" name="pass" placeholder="Your password">
			</div>
		</div>
		<input type="submit" name="submit" value="Login"></button>
	</form>
</body>
</html>