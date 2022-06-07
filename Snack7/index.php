<?php 

/*
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.
*/

$class61 = [
  [
    'name' => 'Marcolino',
    'lastName' => 'Ughetto',
    'vote' => [
      'mat' => 5, 
      'italiano' => 7, 
      'musica' => 8, 
      'arte' => 10, 
    ]
  ],
  [
    'name' => 'Giulio',
    'lastName' => 'Bernardi',
    'vote' => [
      'mat' => 6, 
      'italiano' => 8, 
      'musica' => 5, 
      'arte' => 6, 
    ]
  ],
  [
    'name' => 'Valeria',
    'lastName' => 'Sognante',
    'vote' => [
      'mat' => 5, 
      'italiano' => 6.5, 
      'musica' => 9, 
      'arte' => 10, 
    ]
  ],
  [
    'name' => 'Sara',
    'lastName' => 'Dritta',
    'vote' => [
      'mat' => 7.5, 
      'italiano' => 7, 
      'musica' => 8, 
      'arte' => 7, 
    ]
  ],
];

// var_dump($class61);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./style.css" type="text/css">
  <title>Snack7</title>
</head>
<body>

  <h1>Alunni Classe 61:</h1>
  <div class="container">

    <?php for($i = 0; $i < count($class61); $i++): ?>
      
      <div class="alunno">
    
        <p>Nome: <?php echo $class61[$i]['name'] ?></p>
        <p>Cognome: <?php echo $class61[$i]['lastName'] ?></p>
        <p>Meida dei voti: <?php echo round((array_sum($class61[$i]['vote'])/ count($class61[$i]['vote'])), 2) ?></p>

      </div>

    <?php endfor; ?>
  </div>

  
</body>
</html>