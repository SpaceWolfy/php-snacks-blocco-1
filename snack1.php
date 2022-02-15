<!-- 
  Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
  Ogni array avrà una squadra di casa e una squadra ospite, 
  punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. 
-->

<?php 

  $partite = [
    [
      'SquadraC' => 'Friuli',
      'PuntiC' => 30,
      'SquadraO' => 'Roma',
      'PuntiO' => 46,
    ],

    [
      'SquadraC' => 'Frosinone',
      'PuntiC' => 59,
      'SquadraO' => 'Rieti',
      'PuntiO' => 21,
    ],

    [
      'SquadraC' => 'Firenze',
      'PuntiC' => 38,
      'SquadraO' => 'Romagna',
      'PuntiO' => 38,
    ]
  ];

  /* 
  var_dump($partite);
  echo($partite[0]['SquadraC']) 
  */

  echo('<h2> Esiti partite del giorno: </h2>');

  /* 
  Output: Olimpia Milano - Cantù | 55-60
  */

  for($i = 0; $i < count($partite); $i++ ) {
    echo('<div>' . $partite[$i]['SquadraC'] . ' - ' . $partite[$i]['SquadraO'] . ' | ' . $partite[$i]['PuntiC']. '-' . $partite[$i]['PuntiO'] .'</div>');
  };
?>