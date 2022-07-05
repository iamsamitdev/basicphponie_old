<?php
$sum = 0;

for($a=1; $a<=10; $a++){
  if($a == 5){
    break;
  }
  echo "Hello<br>";  
  $sum += $a; 
}

echo $sum;