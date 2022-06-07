<?php 


/* 
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60
*/

$MatchesJune = [
  [
    'home' => 'Milano',
    'guest'=> 'Cantù',
    'homeScore' => 45,
    'guestScore' => 58
  ],
  [
    'home' => 'Bologna',
    'guest'=> 'Rimini',
    'homeScore' => 60,
    'guestScore' => 42
  ],
  [
    'home' => 'Cagliari',
    'guest'=> 'MarianoComense',
    'homeScore' => 45,
    'guestScore' => 62
  ],
  [
    'home' => 'Palermo',
    'guest'=> 'Civitavecchia',
    'homeScore' => 58,
    'guestScore' => 45
  ],
 
];

var_dump($MatchesJune);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack1</title>
</head>
<body>

<h2>Ecco le partite in programma per Giugno:</h2>

<ul>
  <?php for( $i = 0; $i < count($MatchesJune); $i++ ): ?>
  <li>
    <?php echo $MatchesJune[$i]['home'].' - '. $MatchesJune[$i]['guest'] .' | '. $MatchesJune[$i]['homeScore'].'-'.$MatchesJune[$i]['guestScore']?>
  </li>
  <?php endfor; ?>
</ul>

  
</body>
</html>