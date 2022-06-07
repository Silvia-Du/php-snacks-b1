<?php 

/*
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
*/

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];
var_dump($_GET);
$check = true;
$errorType = '';

if(empty($name) || empty($mail) || empty($age)){
  $check = false;
  $errorType = 'uno dei dati è mancante';

}elseif(strlen($name) < 3){
 $check = false;
 $errorType = 'il nome è troppo corto';

}elseif(!strpos($mail, '@') || !strpos($mail, '.')){
  $check = false;
  $errorType = 'la mail non è corretta';

}elseif(!is_numeric($age)){
  $check = false;
  $errorType = 'age non è un numero';

}

If($check){
  $output = 'Accesso riuscito';
}else{
  $output = 'Accesso negato';
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack2</title>
</head>
<body>

  <h2>Verifica di accesso:</h2>

  <h3><?php echo $output ?></h3>
  <?php if(!$check): ?>
  <h3>Errore di accesso: <?php echo $errorType ?></h3>
  <?php endif; ?>

</body>
</html>