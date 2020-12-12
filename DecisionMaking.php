<html>
<body>
<?php echo "ENTER AGE : "?>
<form action='' method = "post">
<input type='num' name='age'>
<input type= 'submit' name='submit' value='submit'>
</form>
<?php   

if (isset($_POST['submit'])) 
{
    checkEligibility();
}
    function checkEligibility(){
        $age = $_POST['age'];
        intval($age);
        if($age<18){
            echo "<br>Not eligible voter.";
        }
        else{
            echo "<br>Eligible voter.";
        }

    }
    
   
?>

