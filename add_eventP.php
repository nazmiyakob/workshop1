<?php
	$host="localhost";  // Host name 
	$username="root";   // Mysql username 
	$password="";       // Mysql password 
	$db_name="workshop";     // Database name 
	$tbl_name="event"; // Table name

	// Connect to server and select database.
	mysql_connect("$host", "$username", "$password") or die("cannot connect server"); 
	mysql_select_db("$db_name")or die("cannot select DB");
	

	$Name=$_POST['Name'];
	$Place=$_POST['Place'];
	$Price_Ticket=$_POST['Price_Ticket'];
	$Latest_Ticket=$_POST['Latest_Ticket']; 
	$Start_Date=$_POST['Start_Date'];
	$End_Date=$_POST['End_Date'];
	
	$sql="INSERT INTO $tbl_name(Name,Place,Price_Ticket,Latest_Ticket,Start_Date,End_Date) VALUES( 
              '$Name', '$Place', '$Price_Ticket', '$Latest_Ticket', '$Start_Date', '$End_Date')";
	$result=mysql_query($sql);	

	echo '<script language = "JavaScript">alert("You add new Event")</script>';
	print '<meta http-equiv="refresh" content="0;URL=add_event.php">';
?>