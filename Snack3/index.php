<?php
/*
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
*/



$db =[
  '12-09-2021' =>[
    [
      'title' => 'un bel domani',
      'author' => 'jimmy il bello',
      'testo' => 'bla bla 1',
    ],
    [
      'title' => 'stare bene',
      'author' => 'july stey',
      'testo' => 'bla bla 2',
    ],
    [
      'title' => 'che bello',
      'author' => 'jennifer gioe',
      'testo' => 'bla bla 3',
    ],
    
  ],
  '15-01-2022' =>[
    [
      'title' => 'cosa fare qui',
      'author' => 'Giulio gary',
      'testo' => 'bla bla 7',
    ],
    [
      'title' => 'Pomeriggi belli',
      'author' => 'Franz Stayr',
      'testo' => 'bla bla 8',
    ],
    [
      'title' => 'Non ho titolo',
      'author' => 'Guzzi Guz',
      'testo' => 'bla bla 9',
    ],
    
  ],
  '11-03-2022' =>[
    [
      'title' => 'Bo bo',
      'author' => 'Fred Ferdy',
      'testo' => 'bla bla 11',
    ]
    
  ]
];

// var_dump($db);
// die;



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 6</title>
 
<style>
  .post{
    border: 1px solid black;
    padding: 10px;
    background-color: white;
  }

  .data{
    border: 1px solid black;
    padding: 15px;
    background-color: wheat;
    margin-bottom: 15px;
  }
</style>

</head>
<body>
  <h1>Posts:</h1>

  <?php foreach($db as $date=> $posts): ?>
  <div class="data">
    <h3>Data: <?php echo $date ?></h3>

    <?php foreach($posts as $post): ?>
    <div class="post">
      <p>Title: <?php echo $post['title'] ?></p>
      <p>Author: <?php echo $post['author'] ?></p>
      <p>text: <?php echo $post['testo'] ?></p>
    </div>
    <?php endforeach; ?>

  </div>
  <?php endforeach; ?>

  
  
  
</body>
</html>