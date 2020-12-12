<?php
$arr = array('sdf','34','35','sdaf','fd','sa');
echo "Array : ";
foreach($arr as $a){echo $a." ";}
echo "<br> keys :-  ";
foreach(array_keys($arr) as $a){ echo $a." ";}

echo "<br> Size of an Array : ".count($arr);
 echo "<br>";
 echo array_search(35,$arr);
 echo "<br>Element deleted is 35<br>";
 \array_splice($arr,2,1);
foreach($arr as $a){echo $a." ";}

?>
