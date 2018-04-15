<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password=""; // Mysql password 
$db_name="workshop"; // Database name 
$tbl_name="event"; // Table name 
$conn = mysql_connect($host, $username, $password);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}

// Connect to server and select databse.
//mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
//mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form 
$EventId=$_POST['update2']; 
$Name=$_POST['Name']; 
$Place=$_POST['Place']; 
$Price_Ticket=$_POST['Price_Ticket'];
$Latest_Ticket=$_POST['Latest_Ticket'];
$Start_Date=$_POST['Start_Date'];
$End_Date=$_POST['End_Date']; 
//$bangsa=$_POST['bangsa']; 
//$jantina=$_POST['jantina']; 

	  
$sql="UPDATE event 
SET Name='$Name', Place='$Place', Price_Ticket='$Price_Ticket', Latest_Ticket='$Latest_Ticket', Start_Date='$Start_Date', End_Date='$End_Date' 
where EventId = '$EventId'";
 
mysql_select_db('workshop');
$retval = mysql_query( $sql, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
//echo "data telah masuk.. :)\n";

header("location:edit_event.php");

mysql_close($conn);


		
?>