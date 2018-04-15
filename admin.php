<html>
<head>
<title>EVENT MANAGEMENT</title>
<link rel="stylesheet" href="index.css" type="text/css">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<style>
  body
  {
    background-image:url("image/home2.png");
  } 

  .carousel-inner > .item > img,
  .carousel-inner > .item > a > img 
  {
    width: 100%;
	  height : 85%;
    margin: 0px; 0px; 100px; 100px;
  }

  h1.oblique 
  {
      font-style: oblique;
  }
<?php
        error_reporting(0);   
        $fullname = $_COOKIE['fullname'];
      ?>
</style>
</head>

<body>
<!--menu bar-->

  <div id="wrapper">
    <div id="header">
      <!--<h1><img src="image/event.jpg" alt="HEADER" width="1350" height="250"></h1>-->
    </div>
  
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="admin.php">HOME</a>
        <a class="navbar-brand" href="add_event.php">ADD EVENT</a>
        <a class="navbar-brand" href="edit_event.php">EDIT EVENT</a>
        <a class="navbar-brand" href="del_event.php">DELETE EVENT</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        
        <li><a href ="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>

    <?php 
      include('dbc.php');
      $query1=mysql_query("SELECT * FROM login WHERE user_type='Pengguna'");

      echo " <h1><center> LIST USER </center></h1>
      <p><br>
      <table border='1' text-align='center' width='100%'> 
      <tr bgcolor='lightyellow'>
        <th><center> FULL NAME </center></th>
        <th><center> IC NUMBER </center></th>
        <th><center> USERNAME </center></th>
        <th><center> ACTION </center></th>
      </tr>
      </div></div>";

      while($query2=mysql_fetch_array($query1))
      {
        echo "";
        echo"<tr height='30px'>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['fullname'] . "</td>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['ic_number'] . "</td>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['username'] . "</td>";
        echo "<td align='center'>&nbsp;" . "<form action='' method='POST'><button type='submit' span='2' formaction='user_delete.php?username=".$query2['username']."'>DELETE</button></form>";
        echo "</td>";
        echo "</tr>";
      }

    echo "</table>";

    ?>

    
</body>
</html>