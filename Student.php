<html>
    <body>
    <?php
    session_start();
    ?>
        <form action = "" method = 'post'>
            <?php echo "ENTER MARKS : <br>"?>     <?php echo '<br>English : ';?>   </label><input type="number" name = 'english'>
            <?php echo '<br>Hindi: ';?>      </label><input type="number" name = 'hindi'>
            <?php echo '<br>Marathi: ';?>    </label><input type="number" name = 'marathi'>
            <?php echo '<br>Math: ';?>       </label><input type="number" name = 'math'>
            <?php echo '<br>Information Technology: ';?></label><input type="number" name = 'it'>
            <br>
            <input type = 'submit' name = 'submit' value = 'submit'>
            
        <?php
    if(isset($_POST['submit']))
    {
        
        {
            
            $english = $_POST['english'];
            $hindi = $_POST['hindi'];
            $marathi = $_POST['marathi'];
            $math = $_POST['math'];
            $it = $_POST['it'];
        $total = '0';
        $mark = array('english' => $english,'hindi' => $hindi,'marathi' => $marathi,'math' => $math,'it' => $it);
        echo "<br>Mark of student : <br>";
        foreach($mark as $subject => $arr){
           {echo "mark in {$subject} : {$arr}<br>";}}
        $total = array_sum($mark);
        $percentage = $total * 100/500;
        echo "<br>total marks are {$total}<br>";
        echo "Percentage is {$percentage}";
       }
    }
        
        $_SESSION = 0;?>
    
</html>