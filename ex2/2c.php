<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  
<?php

$arr = [100, 200];

function getPrimeNumbers($input){
  [$min, $max] = $input;

  if ($max < 3) {
    $outPrimeNumbers = [2];
  }

  $innerPrimeNumbers = [2];
  $otherNumbers = [];
  $outPrimeNumbers = [];

  for ($i = 3; $i <= $max; $i++){
    $isPrime = true;

    foreach ($innerPrimeNumbers as $value) {
      $division = $i % $value;
      if ($division == 0) {
        $isPrime = false;
        if (($i >= $min) &&($i <= $max)) {
          $otherNumbers[] = $i;
        }
       break;
      }
    }

    if ($isPrime) {
      $innerPrimeNumbers[] = $i;
      if (($i >= $min) &&($i <= $max)) {
        $outPrimeNumbers[] = $i;
      }
    }
  }

  echo "<br> Простые числа в диапазоне $min - $max => ".join(', ',$outPrimeNumbers).".";
  echo "<br> Обычные числа: ".join(', ', $otherNumbers).".";
}


getPrimeNumbers($arr);

?>

</body>
</html>