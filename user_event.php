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

</style>
    <?php
      $username = $_COOKIE['username'];
    ?>
</head>

<body>
<!--menu bar-->

  <div id="wrapper">
  
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="user.php">HOME</a>
        <a class="navbar-brand" href="profile_user.php">PROFILE</a>
        <a class="navbar-brand" href="addEvent_user.php">ADD EVENT</a>
        <a class="navbar-brand" href="user_event.php">LIST</a>
        <a class="navbar-brand" href="user_buy.php">EVENT</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href ="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>
<center>




</center>


    <?php 
      include('dbc.php');

      //$query1=mysql_query("SELECT l.* , e.* , s.* , t.* FROM login l , event e , s_ticket s , ticket t WHERE l.username=s.username and s.EventId=t.EventId and t.EventId=e.EventId and username=$username");

      $query1=mysql_query("SELECT l.* , e.* , s.* , t.* FROM login l , event e , s_ticket s , ticket t WHERE l.username=$username and s.username=$username and t.username=$username and s.EventId=t.EventId and t.EventId=e.EventId");

      echo "<p><center><h1> TICKET THAT YOU HAVE BUY</h1></center><p>

      <table border='1' text-align='center' width='100%'>
      <tr bgcolor='lightyellow'>
        <th><center> TICKET ID </center></th>
        <th><center> NAME OF EVENT </center></th>
        <th><center> PLACE </center></th>
        <th><center> START EVENT </center></th>
        <th><center> END EVENT </center></th>
      </tr>
      </div></div>";

      while($query2=mysql_fetch_array($query1))
      {
        echo "<form action='' method='post'>";
        echo "";
        echo"<tr height='30px'>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['TicketId'] . "</td>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['Name'] . "</td>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['Place'] . "</td>";
        //echo "<td align='center' valign='top'>&nbsp;RM " . $query2['Price_Ticket'] . "</td>";
        //echo "<td align='center' valign='top'>&nbsp;" . $query2['Latest_Ticket'] . "</td>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['Start_Date'] . "</td>";
        echo "<td align='center' valign='top'>&nbsp;" . $query2['End_Date'] . "</td>";
        echo "<input type='hidden' name='event_id' value=" . $query2['EventId'] . ">";
        echo "</td>";
        echo "</tr>";
      }

    echo "</table>";

    ?>

</body>
</html>