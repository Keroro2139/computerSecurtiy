<?php 	
	$hostname ="localhost";
	$username ="cs57160040";
	$password ="Dt8R7ASn2pAEuLVL";
	$db_name="cs57160040";
$link = mysql_connect($hostname,$username,$password) or die ('ติดต่อฐานข้อมูลไม่ได้');
$db_selected = mysql_select_db($db_name, $link) or die ('ไม่พบฐานข้อมูล');
?>