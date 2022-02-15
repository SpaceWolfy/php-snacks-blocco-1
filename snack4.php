<!-- 
  Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
 -->

 <?php
  
  $numbers = [];
  /* $randomArray = [];
  
  for($i= 0; $i < 100; $i++) {
    $randomNum = rand(1, 100);  
    if(!in_array($randomNum, $randomArray, true)) {
      $randomArray[] = $randomNum;
    } 
  } */
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
   $i = 0;
    while(count($numbers) < 15) {
      $randomNum = rand(1, 100);  
      if(!in_array($randomNum, $numbers, true)) {
        $numbers[] = $randomNum;
      } 
      echo('<div>' . $numbers[$i] . '</div>');
      $i++;
    }
  ?>
 </body>
 </html>