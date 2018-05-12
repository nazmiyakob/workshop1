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
      <h1> UPDATE PROFILE </h1><P> 
      <?php
        include('dbc.php');
        $sql = mysql_query("SELECT * FROM login WHERE username='$username'");
        $row = mysql_fetch_array($sql);

        $username = $row['username'];
        $fullname = $row['fullname'];
        $password = $row['password'];
        $ic_number = $row['ic_number'];
        $matric_number = $row['matric_number'];
        $phone_number = $row['phone_number'];
        $email = $row['email'];
        $faculty = $row['faculty'];
        $course = $row['course'];

      ?>

        <form method="post" action="">
            
            FULL NAME <br><input type="text" value="<?php echo $fullname ?>" name="fullname" required="required"><br><p>

            PASSWORD <br><input type="password" value="<?php echo $password ?>" name="password" required="required"><br><p>

            I/C NUMBER <br><input type="text" value="<?php echo $ic_number ?>" name="ic_number"><br><p>

            MATRIC NUMBER <br><input type="text" value="<?php echo $matric_number ?>" name="matric_number"><br><p>

            PHONE NUMBER <BR><input type=text value="<?php echo $phone_number ?>" name=phone_number><br><p>      

            EMAIL <BR><input type=text value="<?php echo $email ?>" name=email><br><p>

            FACULTY <BR><input type=text value="<?php echo $faculty ?>" name=faculty><br><p>      

            COURSE <BR><input type=text value="<?php echo $course ?>" name=course><br><p>

    
<input type='hidden' name='update2' value="<? '$username' ?>" />

            <input  type="submit" name="update" value="Update">
            <input id="reset" type='reset' name='Reset' value='Reset'>
        
        </form>   
        <?php
        if(isset($_POST['update']))
        {
          $fullname = $_POST['fullname'];
          $password = $_POST['password'];
          $ic_number = $_POST['ic_number'];
          $matric_number = $_POST['matric_number'];
          $phone_number = $_POST['phone_number'];
          $email = $_POST['email'];
          $faculty = $_POST['faculty'];
          $course = $_POST['course'];
         // echo $name;
          //echo $event_id;
            $sql = mysql_query("UPDATE login SET username='$username' , fullname='$fullname' , password='$password' , ic_number='$ic_number' , matric_number='$ic_number' , matric_number='$matric_number' , phone_number='$phone_number' , email='$email' , faculty='$faculty' , course='$course' WHERE username='$username'");
           print "<meta http-equiv='refresh' content='0;URL=profile_user.php'>";
        }
        ?>

</center>


</body>
</html>