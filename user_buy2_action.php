        <?php
          if(isset($_POST['buy']))
          {
            $username = "root";
            $password = "";
            $hostname = "localhost";
            $idevent = $_POST['EventId'];
            $username12 = $_POST['username'];
            $qty = $_POST['qtyTicket'];
            $price = $_POST['price'];

            $totalprice = $qty * $price;
              
            $con = mysql_connect($hostname, $username, $password) or die("Could not connect to database");

            mysql_select_db("workshop", $con); 
            
              echo '<script language = "JavaScript">alert("You cannot buy ticket more than '.$total_qty.' ")</script>';
      

              $total_qty = $row['Latest_Ticket'];
              $total_qty = $total_qty-$qty;

            if($total_qty<0)
            {
              //print '<meta http-equiv="refresh" content="0;URL=user_buy.php">';
            } 
            else
            {  
               $sql2="INSERT INTO s_ticket (EventId, username, qtyTicket) VALUES('$idevent', '$username12', '$qty')";
                mysql_query($sql2,$con);

              for($i=1 ; $i<=$qty ; $i++)
              {
                $sql="INSERT INTO ticket (EventId, username) VALUES('$idevent', '$username12')";
                mysql_query($sql,$con);
              }

              $sql3 = mysql_query("SELECT * FROM event WHERE EventId='$idevent'");
              $row = mysql_fetch_array($sql3);

              


              $sql4 = "UPDATE event SET Latest_Ticket='$total_qty' where EventId='$idevent'";
              mysql_query($sql4,$con);

              echo '<script language = "JavaScript">alert("You have buy ticket. The price is RM'.$totalprice.' ")</script>';
              print '<meta http-equiv="refresh" content="0;URL=user_buy.php">';
            }
           

            mysql_close($con);
          }
        ?>