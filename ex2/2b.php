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

$deposit = [
  'Adam' => [200, -100, 300, 400, -300, -500, 120, 400, 1100],
  'Tommy' => [1000, 500, 5000, -6500, 250, -100, 400],
  'John' => [120, 100, 300, 430, 1200, -1000, 300, -100, -10, -400]
];


function showBalance($arr) {
  foreach ($arr as $key => $value) {
    $arr[$key] = array_sum($value);
  }
  asort($arr);
  echo "<br> Список людей сортирован по сумме вкладов: ";
  foreach ($arr as $key => $value) {
    echo "<br> $key - $value";
  }
}

showBalance($deposit);


?>
  
</body>
</html>