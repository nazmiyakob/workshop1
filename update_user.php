<html >
  <head>
      <meta charset="UTF-8">
      <title> Update </title>
      <link rel="stylesheet" type="text/css" href="style.css">
      <script src="js/prefixfree.min.js"></script>
  </head>

  <body>

      <div class="body"></div>
      <div class="grad"></div>
      <div class="header">
        <div><span>Event</span><br>Management</div>
      </div><br>
      
      <form method='POST' action="">
        <div class="login">
            <input type="text" placeholder="Full Name" name="fullname" required="required"><br>
            <input type="text" placeholder="I/C Number" name="ic_number" required="required"><br>
            <input type="password" placeholder="password" name="password" required="required"><br>
            <input type="text" placeholder="Matric Number" name="matric_number" required="required"><br>
            <input type="text" placeholder="Phone Number" name="ic_number" required="required"><br>
            <input type="text" placeholder="Email" name="email" required="required"><br>
            <input type="text" placeholder="Faculty" name="faculty" required="required"><br>
            <input type="text" placeholder="Course" name="course" required="required"><br>
            <input  type="submit" name="submit" value="UPDATE">
            <input id="reset" type='reset' name='Reset' value='Reset'>
        </div>
      </form>

      <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    </body>
</html>

<!-- register data -->
<?php
if(isset($_POST['submit']))
{

  $username = "root";
  $password = "";
  $hostname = "localhost";


  $con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");

  mysql_select_db("workshop", $con); 

    $query=mysql_query("SELECT * FROM login WHERE username='".$username."'");
    $numrows=mysql_num_rows($query);
    if($numrows==0)
    {
      $sql = "UPDATE login (fullname, ic_number, username, password, user_type) VALUES('$_POST[fullname]', '$_POST[ic_number]', '$_POST[username]', '$_POST[password]', '$_POST[user_type]')";
      
      $result=mysql_query($sql);
      
      
        mysql_query($sql,$con);
        mysql_close($con);
    
  
}
?>