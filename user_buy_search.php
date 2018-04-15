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
        <a class="navbar-brand" href="user_event.php">LIST</a>
        <a class="navbar-brand" href="user_buy.php">EVENT</a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li><a href ="logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </nav>

      <?php 
        include('dbc.php');

        $sql = mysql_query("SELECT * FROM login WHERE username='$username'");

        $row=mysql_fetch_array($sql);

        $fullname = $row['fullname'];

        echo "$fullname";

      ?>

<?php

echo '<center>
<form action="user_buy_search.php" method="post">
<table width="606" height="46" border="0">
  <tr>
    <td width="95">Search By :</td>
    <td width="107"><select name="searchtype" required="required" >
      <option value="">Select Options</option>
      <option value="Place">Event Place</option>
      <option value="Name">Event Name</option>
    </select></td>

    <td width="398"><input type="text" name="search_data" size="40"  required="required" /></td>
     <td width="115"><input class="login" type="submit" name="search" value="Search"/></td>
  </tr>
</table>
</form>
</center>';

  if(isset($_POST['search']))
  {
      $searchtype = $_POST['searchtype'];
      $searchdata = $_POST['search_data'];

      include ('dbc.php');
      if($searchtype == 'Place')
      {
      	$query = mysql_query("SELECT * FROM event WHERE Place LIKE '%$searchdata%'") or die(mysql_error());
      	$checkrow = mysql_num_rows($query);
      	if($checkrow > 0)
      	{
      		echo "<p><center><h1> CHOOSE EVENT THAT YOU WANT TO GO</h1></center><p>

      		<table border='1' text-align='center' width='100%'>
     		<tr bgcolor='lightyellow'>
   		    <th><center> EVENT ID </center></th>
        	<th><center> NAME OF EVENT </center></th>
        	<th><center> PLACE </center></th>
        	<th><center> PRICE TICKET </center></th>
        	<th><center> START EVENT </center></th>
        	<th><center> END EVENT </center></th>
       		<th><center> ACTION </center></th>
     		</tr>
     		</div></div>";

     		while($query2=mysql_fetch_array($query))
     		{
     			echo "<form action='user_buy2.php' method='post'>";
		        echo "";
		        echo"<tr height='30px'>";
		        echo "<td align='center' valign='top'>&nbsp;" . $query2['EventId'] . "</td>";
		        echo "<td align='center' valign='top'>&nbsp;" . $query2['Name'] . "</td>";
		        echo "<td align='center' valign='top'>&nbsp;" . $query2['Place'] . "</td>";
		        echo "<td align='center' valign='top'>&nbsp;RM " . $query2['Price_Ticket'] . "</td>";
		        echo "<td align='center' valign='top'>&nbsp;" . $query2['Start_Date'] . "</td>";
		        echo "<td align='center' valign='top'>&nbsp;" . $query2['End_Date'] . "</td>";
		        echo "<input type='hidden' name='event_id' value=" . $query2['EventId'] . ">";
		        echo "<td align='center'><button type='submit' span='2' >BUY</button></form>";
		        echo "</td>";
		        echo "</tr>";
     		}

      		
      	}

      	else if($checkrow < 1)
      	{
      		
     		echo '<script language="javascript">alert("No event data with this place name : '.$searchdata.'")</script>';
      		//print '<meta http-equiv="refresh" content="0;URL=user_buy.php">';

     		
      	}

      }
      
      else if($searchtype == 'Name')
      {
      	$query = mysql_query("SELECT * FROM event WHERE Name LIKE '%$searchdata%'") or die(mysql_error());
      	$checkrow = mysql_num_rows($query);
      	if($checkrow > 0)
      	{
      		echo "<p><center><h1> CHOOSE EVENT THAT YOU WANT TO GO</h1></center><p>

      		<table border='1' text-align='center' width='100%'>
     		<tr bgcolor='lightyellow'>
   		    <th><center> EVENT ID </center></th>
        	<th><center> NAME OF EVENT </center></th>
        	<th><center> PLACE </center></th>
        	<th><center> PRICE TICKET </center></th>
        	<th><center> START EVENT </center></th>
        	<th><center> END EVENT </center></th>
       		<th><center> ACTION </center></th>
     		</tr>
     		</div></div>";

     		while($query2=mysql_fetch_array($query))
     		{
     			echo "<form action='user_buy2.php' method='post'>";
		        echo "";
		        echo"<tr height='30px'>";
		        echo "<td align='center' valign='top'>&nbsp;" . $query2['EventId'] . "</td>";
		        echo "<td align='center' valign='top'>&nbsp;" . $query2['Name'] . "</td>";
		        echo "<td align='center' valign='top'>&nbsp;" . $query2['Place'] . "</td>";
		        echo "<td align='center' valign='top'>&nbsp;RM " . $query2['Price_Ticket'] . "</td>";
		        echo "<td align='center' valign='top'>&nbsp;" . $query2['Start_Date'] . "</td>";
		        echo "<td align='center' valign='top'>&nbsp;" . $query2['End_Date'] . "</td>";
		        echo "<input type='hidden' name='event_id' value=" . $query2['EventId'] . ">";
		        echo "<td align='center'><button type='submit' span='2' >BUY</button></form>";
		        echo "</td>";
		        echo "</tr>";
     		}

      	}
      	else if($checkrow < 1)
      	{
      		
     		echo '<script language="javascript">alert("No name data with this event name : '.$searchdata.'")</script>';
      		//print '<meta http-equiv="refresh" content="0;URL=user_buy.php">';

     		
      	}
      }

  }

  

?>