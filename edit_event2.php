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
</head>

<body>
<!--menu bar-->
  
  <div id="wrapper">
    <div id="header">
      <!--<h1><img src="image/event.jpg" alt="HEADER" width="1360" height="250"></h1>-->
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
      <h1> UPDATE EVENT </h1><P> 
      <?php
        $event_id = $_POST['event_id'];
        //echo $event_id;
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
        <form method="post" action="">
            
            <input type='hidden' name='event_id' value='<?php echo $event_id;?>'>
            EVENT NAME <br><input type="text" value="<?php echo $name ?>" name="Name" required="required"><br><p>

            PLACE <br><input type="text" value="<?php echo $place ?>" name="Place" required="required"><br><p>

            TICKET PRICE (RM  )<br><input type="number" min="1" max="50" value="<?php echo $price ?>" name="Price_Ticket"><br><p>

            TICKET QUANTITY <br><input type="number" min="1" max="3000" value="<?php echo $qty ?>" name="Latest_Ticket"><br><p>

            START DATE <BR><input type=date value="<?php echo $sdate ?>" name=Start_Date><br><p>      

            END DATE <BR><input type=date value="<?php echo $edate ?>" name=End_Date><br><p>

    
<input type='hidden' name='update2' value="<? '$EventId' ?>" />

            <input  type="submit" name="update" value="Update">
            <input id="reset" type='reset' name='Reset' value='Reset'>
        
        </form>
        <?php
        if(isset($_POST['update']))
        {
          $event_id = $_POST['event_id'];
          $name = $_POST['Name'];
          $place = $_POST['Place'];
          $price = $_POST['Price_Ticket'];
          $latest = $_POST['Latest_Ticket'];
          $sdate = $_POST['Start_Date'];
          $edate = $_POST['End_Date'];
         // echo $name;
          //echo $event_id;
            $sql = mysql_query("UPDATE event SET Name='$name' , Place='$place' , Price_Ticket='$price' , Latest_Ticket='$latest' , Start_Date='$sdate' , End_Date='$edate' WHERE EventId='$event_id'");
           print "<meta http-equiv='refresh' content='0;URL=edit_event.php'>";
        }
        ?>
      </center>

  
    

    
</body>
</html>