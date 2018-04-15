<!DOCTYPE html>
<html >
 	<head>
    <meta charset="UTF-8">
    <title> Login </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="js/prefixfree.min.js"></script>
	
	</head>

	<body>

	    <div class="body"></div>
			<div class="grad"></div>
			<div class="header">
				<a href='index.php'><div><span>Event</span><br>Management</div></a>
			</div><br>
			
			<form method='POST' action="authenticate.php">
				<div class="login">
						<input type="text" placeholder="username" name="username" required="required"><br>
						<input type="password" placeholder="password" name="password" required="required"><br>
						<input id="submit" type="submit" name="submit" value="Login">
				</div>
			</form>

			<div class="register">
	   			<a href="register.php"><input id="submit" type="submit" name="submit" value="Register"></a>
	   		</div>

	    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    </body>
</html>
