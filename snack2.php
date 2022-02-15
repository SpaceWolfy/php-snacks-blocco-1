<!-- 
  Passare come parametri GET name, 
  mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, 
  che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, 
  altrimenti “Accesso negato”
 -->

<?php 

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

if(isset($name) && isset($mail) && isset($age)) {

  if(strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
    echo('accesso consentito');
  } else {
    echo('accesso negato');
  }
} else {
  echo('Inserisci i dati');
}
?> 