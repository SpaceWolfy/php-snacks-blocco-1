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
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Snack 4</title>
 </head>
 <body>
   <h2>Disposizione di 15 numeri randomici</h2>
   <?php 
    for($i= 0; $i < 15; $i++) {
      if(!in_array($randomArray[$i], $numbers, true)) {
        $numbers[] = $randomArray[$i];
      } 
      echo('<div>' . $numbers[$i] . '</div>');
    }
  ?>
 </body>
 </html>