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
  <center>
    <h1> UPDATE EVENT </h1><p> 
    <?php 
      include('dbc.php');
      $query1=mysql_query("SELECT * FROM event");

      echo "<p><br>
      <table border='1' text-align='center' width='100%'>
      <tr bgcolor='lightyellow'>
        <th><center> NAME OF EVENT </center></th>
        <th><center> START EVENT </center></th>
        <th><center> END EVENT </center></th>
        <th><center> PLACE </center></th>
        <th><center> PRICE TICKET </center></th>
        <th><center> QUANTITY TICKET </center></th>
        <th><center> ACTION </center></th>
      </tr>
      </div></div>";

      while($query2=mysql_fetch_array($query1))
      {
        echo "<form action='edit_event2.php' method='post'>";
        echo "";
        echo"<tr height='30px'>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['Name'] . "</td>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['Start_Date'] . "</td>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['End_Date'] . "</td>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['Place'] . "</td>";
        echo "<td align='center' valign='top'>&nbsp;RM " . $query2['Price_Ticket'] . "</td>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['Latest_Ticket'] . "</td>";
        echo "<input type='hidden' name='event_id' value=" . $query2['EventId'] . ">";
        echo "<td align='center'>
        
        <button type='submit' span='2' >EDIT</button></form>";
        echo "</td>";
        echo "</tr>";
      }

    echo "</table>";

    ?>

    </center>
</body>
</html>