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
      <h1> BUY TICKET </h1><P> 
      <?php 
        include('dbc.php');

        $sql = mysql_query("SELECT * FROM login WHERE username='$username'");

        $row=mysql_fetch_array($sql);

        $fullname = $row['fullname'];

        echo "&nbsp; &nbsp; $fullname";

      ?>

      <?php
        $event_id = $_POST['event_id'];
      ?>
  

      <?php
        include('dbc.php');
        $sql = mysql_query("SELECT * FROM event WHERE EventId='$event_id'");
        $row = mysql_fetch_array($sql);

        $name = $row['Name'];
        $place = $row['Place'];
        $price = $row['Price_Ticket'];
        $qty = $row['Latest_Ticket'];
        $sdate = $row['Start_Date'];
        $edate = $row['End_Date'];
        

      ?>



      <form method="post" action="user_buy2_action.php">
        <div class="login">

              EVENT NAME : <?php echo $name ?><p>
              PLACE : <?php echo $place ?><p>
              PRICE : RM<?php echo $price ?><p>
              DATE : <?php echo $sdate ?><p>
              QUANTITY : <input type=number min=1 max=10 name=qtyTicket>


        </div>
  <?php
        //echo $event_id;
    
   
        echo "<input type='hidden' name='EventId' value=".$event_id." />" ;
        echo "<input type='hidden' name='price' value=".$price." />" ;
        echo "<input type='hidden' name='username' value=".$_COOKIE['username']." />";
        echo "<input  type='submit' name='buy' value='BUY'>";
        echo "<input type='submit' value='BACK' <a href='#' onclick='history.back();'></a>";

   ?>
      </form>
        


</body>
</html>