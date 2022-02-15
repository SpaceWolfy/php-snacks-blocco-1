<!-- 
  Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->

 <?php
  
  $numbers = [];
  $randomArray = [];
  
  for($i= 0; $i < 100; $i++) {
    $randomNum = rand(1, 100);  
    if(!in_array($randomNum, $randomArray, true)) {
      $randomArray[] = $randomNum;
    } 
  }

  for($i= 0; $i < 15; $i++) {
    if(!in_array($randomArray[$i], $numbers, true)) {
      $numbers[] = $randomArray[$i];
    } 
  }

  var_dump($numbers)
 ?>