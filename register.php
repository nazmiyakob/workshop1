<html >
 	<head>
    	<meta charset="UTF-8">
    	<title> Register </title>
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
						<input type="text" placeholder="Username" name="username" required="required"><br>
						<input type="password" placeholder="password" name="password" required="required"><br>
						<input type="text" placeholder="Matric Number" name="matric_number" required="required"><br>
						<input type="text" placeholder="Phone Number" name="phone_number" required="required"><br>
						<input type="text" placeholder="Email" name="email" required="required"><br>
						<input type="text" placeholder="Faculty" name="faculty" required="required"><br>
						<input type="text" placeholder="Course" name="course" required="required"><br>
						<input hidden type='radio' name='user_type' value="Pengguna" checked><br>
						<input  type="submit" name="submit" value="Register">
						<input id="reset" type='reset' name='Reset' value='Reset'><br>
						<input type="button" value="Go back!" onclick="history.back()">


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

		$query=mysql_query("SELECT * FROM login WHERE ic_number='$_POST[ic_number]");
		$numrows=mysql_num_rows($query);
		if($numrows==0)
		{
			$sql = "INSERT INTO login (username,fullname, ic_number, password, matric_number, phone_number, email, faculty, course, user_type) VALUES('$_POST[username]','$_POST[fullname]', '$_POST[ic_number]', '$_POST[password]', '$_POST[matric_number]', '$_POST[phone_number]', '$_POST[email]', '$_POST[faculty]', '$_POST[course]', '$_POST[user_type]')";
			
			$result=mysql_query($sql);
			
			if($result)
			{
				$getid = mysql_query("SELECT MAX(id) AS maxid FROM login") or die(mysql_error());
				$result1 = mysql_fetch_assoc($getid);
				$id = $result1['maxid'];
				if($result1)
				{
					$getusername = mysql_query("SELECT * FROM login WHERE id='".$id."' ") or die(mysql_error());
					$result2 = mysql_fetch_assoc($getusername);
					$username = $result2['username'];
					echo '<script language = "JavaScript">alert("Your Data Has Been Save ! Your USERNAME is '.$username.'")</script>';
					print '<meta http-equiv="refresh" content="0;URL=index.php">';
				}
				
			}
			else
			{
				echo '<script language = "JavaScript">alert("PLEASE CHANGE YOUR I/C NUMBER.")</script>';
				print '<meta http-equiv="refresh" content="0;URL=register.php">';
			}
		}
		else if($numrows > 0)
		{
			echo '<script language = "JavaScript">alert("username dah wujud")</script>';
			print '<meta http-equiv="refresh" content="0;URL=register.php">';
		}
		
	
}
?>