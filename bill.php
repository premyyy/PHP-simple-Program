<html>
<body>

    <form action="" method="post">
    <?php echo "Enter Electricity Bill :";?>
    <input type="text" name='bill'>
    <input type='submit' name='submit' value='submit'>
    </form>

    <?php 
    if(isset($_POST['submit']))
        { 
            $bill =  $_POST['bill'];
            intval($bill);
            if($bill <= 100)
            {
                $totalBill = $bill *4;
                
            }
            else if($bill > 100 && $bill <= 200)
            {
                $nextUnit = $bill - 100;
                $totalBill = 400 + ( $nextUnit * 5);
            }
            else if($bill>200)
            {
                $nextUnit = $bill - 200;
                $totalBill = 900 + ($nextUnit * 6);
            }

            echo "Total Electricity Bill : {$totalBill}";
        }
    ?>
</body>
</html>