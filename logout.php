<?php
// set the expiration date to one hour ago
setcookie("username", "", time() - 3600);
?>
<html>
<body>

<?php
	echo '<script language = "JavaScript">alert("Log Out!")</script>';
	print '<meta http-equiv="refresh" content="0;URL=index.php">';
?>

</body>
</html>