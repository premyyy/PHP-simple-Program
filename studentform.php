<html>
<body>
<?php
$db_conn = pg_connect("host=localhost port=5432 dbname=php user=postgres password=1230"); 

        if(!$db_conn)
        {
            echo " <center><h1>--NOT CONNECTED--</h1></center>";
        }
        else
        {
            echo "<center><h1>--connected--</h1></center>";
        }
      
?>
<form action="" method = 'post'>
<?php echo "Enter Name :"?> <input type = 'name' name = 'name'>
<?php echo 'Enter ROllno. :'?> <input type = 'number' name = 'rollno'>
<input type = 'submit' name = 'submit' value = 'submit'>
</form>
<?php

if(isset($_POST['submit']))
{
        $number = $_POST['rollno'];
        $name = $_POST['name'];
    echo $number,$name;
    
        $quey = "INSERT INTO new VALUES ($number,'$name');";
        $db_insert = pg_query($db_conn, $quey);
      if(!$db_insert){
          echo "fuck you!";
      }else echo "ohh yaah";

    
      pg_close($db_conn); 
}
?>
</body>
</html>


