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
      <h1> ADD EVENT </h1><P> 
        <form method="post" action="add_eventPuser.php">

            EVENT NAME <br><input type="text" placeholder="Event Name" name="Name" required="required"><br><p>

            PLACE <br><input type="text" placeholder="Place" name="Place" required="required"><br><p>

            TICKET PRICE (RM  )<br><input type="number" min="1" max="50" name="Price_Ticket" required="required"><br><p>

            TICKET QUANTITY <br><input type="number" min="1" max="3000" name="Latest_Ticket" required="required"><br><p>

            START DATE <BR><input type="date" name="Start_Date" required="required"><br><p>      

            END DATE <BR><input type="date" name="End_Date" required="required"><br><p>

            <input  type="submit" name="submit" value="Add_Event">
            <input id="reset" type='reset' name='Reset' value='Reset'>
        </form>
      </center>

          
</body>
</html>