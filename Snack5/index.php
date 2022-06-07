<?php 

/*
Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
aggiungete poi i seguenti snack da realizzare
*/

$text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam animi aperiam consectetur quas voluptates quo maxime! Accusantium enim eaque ea quis voluptate, nam sunt exercitationem? Voluptatem non molestias similique eaque quod natus laborum aliquid ipsa eum cum. Non, sapiente cum soluta explicabo voluptatem debitis aliquam molestias ab error ex rerum, animi corporis qui excepturi perferendis obcaecati fugiat facere reiciendis? Autem est consequuntur eveniet ipsum inventore distinctio molestias labore in dolorem dicta. Magni repellendus eaque assumenda et laborum. Rem cupiditate possimus beatae qui consectetur labore numquam amet. Quas necessitatibus aut error sed tempora beatae pariatur. Libero sit architecto doloremque inventore unde.';

$paragraphs = explode('.', $text);

var_dump($paragraphs)

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack5</title>
</head>
<body>

<h2>Testo:</h2>

<p><?php echo $text ?></p>

<h2>Suddivisione in paragrafi</h2>

<ul>
  <?php for($i = 0; $i < count($paragraphs); $i++ ): ?>
    <?php if(strlen($paragraphs[$i]) > 0):?>
      <li><?php echo $paragraphs[$i]?></li>
    <?php endif; ?>
  <?php endfor; ?>
</ul>
  
</body>
</html>