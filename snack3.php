<!-- 
  Creare un array di array. 
  Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore 
  un array di post associati a quella data. 
  Stampare ogni data con i relativi post.
 -->
<?php 
  $posts = [
    '05/02/2022' => [
      'title' => 'post 1',
      'author' => 'Roberto Furetto',
      'text' => 'Ciao, guarda che spettacolo!'
    ],
    '10/02/2022' => [
      'title' => 'post 2',
      'author' => 'Roberto Furetto',
      'text' => 'Ciao, guarda che spettacolo parte 2!'
    ],
    '15/02/2022' => [
      'title' => 'post 3',
      'author' => 'Roberto Furetto',
      'text' => 'Ciao, guarda che spettacolo parte 3!'
    ],
  ];
    
    

  var_dump($posts);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
</head>
<body>
  <h1>Posts di Michele Papagni visualizzati per data:</h1>
  <?php 
    foreach($posts as $x => $val) {
      echo "<h2> Data: $x </h2>";
      echo('<h3>' . $val['title'] . '</h3>');
      echo('<div>'. 'Autore: ' . $val['author'] . '</div>');
      echo('<div>'. 'Testo: ' . $val['text'] . '</div>');
    }
  ?>
</body>
</html>