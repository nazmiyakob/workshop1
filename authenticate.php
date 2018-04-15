<?php

require('dbc.php');

if(!empty($_POST['username']) && !empty($_POST['password']))
{
	$username = mysql_real_escape_string($_POST['username']);
	$password = mysql_real_escape_string($_POST['password']);
	$query = mysql_query("SELECT * FROM login WHERE username = '$username'");
	$numrow = mysql_num_rows($query);
	
	if($numrow!=0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			$db_username = $row['username'];
			$db_password = $row['password'];
			$db_usertype = $row['user_type'];
		}
	
		if(($username==$db_username) && ($password==$db_password) && ($db_usertype!='Admin'))
		{
			setcookie('username',"$username");
			session_start();	
			header("location:user.php");
			
		}
		
		if(($username==$db_username) && ($password==$db_password) && ($db_usertype=='Admin'))
		{
			setcookie('username',"$username");
			session_start();
			header("location:admin.php");
		}
		else
		{
			//header("location:login.php?feedback=Incorrect Password");
			echo '<script language = "JavaScript">alert("Kata Laluan dan Nama Pengguna tidak sah!")</script>';
			print '<meta http-equiv="refresh" content="0;URL=login.php">';
		} 	
	}
	else
	{
		//header("location:login.php?feedback=User Doesnt Exist");
		echo '<script language = "JavaScript">alert("Pengguna Tidak Wujud!")</script>';
			print '<meta http-equiv="refresh" content="0;URL=login.php">';
	}
}
else
{
	//header("location:login.php?feedback=All Fields Are Required");
	echo '<script language = "JavaScript">alert(" Semua Ruangan Perlu Di Isikan")</script>';
			print '<meta http-equiv="refresh" content="0;URL=login.php">';
}



?>