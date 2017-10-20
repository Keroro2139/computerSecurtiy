<?php 
if (isset($_POST['submit'])) {

	$hostname ="localhost";
	$username ="cs57160040";
	$password ="Dt8R7ASn2pAEuLVL";
	$db_name="cs57160040";
 	$conn = mysql_connect($hostname,$username,$password) or die ('ติดต่อฐานข้อมูลไม่ได้');
 	$db_selected = mysql_select_db($db_name, $conn) or die ('ไม่พบฐานข้อมูล');
	

	$user = $_POST['user'];
	$pass = $_POST['pass'];

	$sql = "SELECT * FROM member WHERE Username='$user' AND Password='$pass'";
	$result = $conn->query($sql) or die ("Username or Password incorrect");
	


	$conn->close();
}	
?>