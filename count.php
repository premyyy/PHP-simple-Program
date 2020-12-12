<html>
<body>
<form action="" method="post">

    <label name="input">Enter String : </label><br>
    <input name="input"><br>
    <input type="submit" value="submit">
    </form>
       
<?php 


$in =  ($_POST["input"]);

function countVowels($in){
    $count = 0;

    $vowels = array("a","e","i","o","u");
    
    for($j=0; $j<strlen($in); $j+=1){
       // echo $in[$j];
       
        for($i = 0; $i < 5; $i += 1)
        {
          // echo $vowels[$i];
           if($in[$j] == $vowels[$i]){
                echo $vowels[$i];         
                $count += 1;
           }
        }
    }
        
echo "<br>".$count;


}

countVowels($in);

?>
</body>
</html>