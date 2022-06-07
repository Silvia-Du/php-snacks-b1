<?php 

/*
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
*/

function getUniqueRNumber($min, $max, $limit){
  $numContainer = [];

  if($limit > ($max - $min)){
    $limit = $max - $min +1;
  }

  if($max < $min){
    $temp = $max;
    $max = $min;
    $min = $temp;
  }

  while(count($numContainer) <= $limit){
    $num = rand($min, $max);
    if(!in_array($num, $numContainer )){
      $numContainer [] = $num;
    }
  }

  return $numContainer;

}

$uniqueRNum = getUniqueRNumber(1, 30, 15);

var_dump($uniqueRNum);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack4</title>
</head>
<body>
  
</body>
</html>