<?php 
if(isset($_POST['submit'])) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	if($user == "admin" && $pass == "admin") {
		header("location:adminPage.html");
	}
	else {
		echo "Failed!!!";
	}
}

 ?>