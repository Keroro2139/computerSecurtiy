<?php
	session_start();
	mysql_connect("localhost","cs57160040","Dt8R7ASn2pAEuLVL");
	mysql_select_db("cs57160040");
	$strSQL = "SELECT * FROM member WHERE Username = '".mysql_real_escape_string($_POST['user'])."' 
	and Password = '".mysql_real_escape_string($_POST['pass'])."'";
	$objQuery = mysql_query($strSQL);
	$objResult = mysql_fetch_array($objQuery);
	if(!$objResult)
	{
			echo "Username and Password Incorrect!";
	}
	else
	{
			$_SESSION["UserID"] = $objResult["UserID"];
			$_SESSION["Status"] = $objResult["Status"];

			session_write_close();
			
			if($objResult["Status"] == "ADMIN")
			{
				header("location:admin_page.php");
			}
			else
			{
				header("location:user_page.php");
			}
	}
	mysql_close();
?>