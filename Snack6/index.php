<?php
/*
Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
*/


$db = [
  'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
  ],
  'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
  ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 6</title>
  <!-- style -->
  <style>

    .rettangolo{
      display: inline-block;
      padding: 15px 100px 15px 30px;
      min-height: 100px;
      margin-bottom: 20px;
    }
    .teachers{
      background-color: gray;
    }

    .pm{
      background-color: green;
      color: white;
    }

    ul{
      border: 1px solid white;
      padding: 15px 30px;
      border-radius: 15px;
    }

  </style>

</head>
<body>
  <h1>Compito:</h1>

  <?php foreach($db as $key=> $category): ?>

  <div class="rettangolo <?php echo $key ?>">
    <h3>Cathegory: <?php echo ucfirst($key) ?></h3>
    <?php foreach($category as $data): ?>
      <ul>
        <li><?php echo $data['name']?></li>
        <li><?php echo $data['lastname']?></li>
      </ul>
    <?php endforeach; ?>
  </div>
  <?php endforeach; ?>
  
</body>
</html>