<?php
  $link = mysql_connect("localhost","root","") or die(mysql_error());
          mysql_select_db("workshop") or die(mysql_error());
 
  if(isset($_GET['username']))
  {
    $username=$_GET['username'];
    $query1=mysql_query("delete from login where username='$username'");
    
    if($query1)
      {
        echo '<script language = "JavaScript">alert("Delete Successfully")</script>';
        print '<meta http-equiv="refresh" content="0;URL=admin.php">';
      }
  }
?>