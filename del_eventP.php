      <?php

$hostname="localhost"; // Host name
$username="root"; // Mysql username
$db_name="workshop"; // Database name
$tbl_name="event"; // Table name

// Connect to server and select database.
mysql_connect("$hostname", "$username")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$EventId=$_POST['deletecart'];

// Delete data in mysql from row that has this id
$sql="DELETE FROM $tbl_name WHERE EventId='$EventId'";
$result=mysql_query($sql);

// if successfully deleted
if($result){
echo "<script> alert(\"Data has been deleted\"); window.location.href='del_event.php'</script>";
}

else {
echo "ERROR";
}

// close connection
mysql_close();

?>