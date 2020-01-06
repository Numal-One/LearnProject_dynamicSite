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
echo "<br> ---------------- Переработка задания 5c из занятия 1--------------";

$pass1 = 436;
$pass2Se = 213;

function unlockPass($pass1, $pass2) {
  $n = floor($pass1/10) % 10;
  $passSeArr = str_split($pass2, 1);
  if ($n > 5) {

    // Для отладки
    echo "<br>n = $n, [0] = $passSeArr[0] . [1] = $passSeArr[1] . [2] = $passSeArr[2]";
    echo "<br> pass2 = $pass2";
    // ----------

    $pass2 = $passSeArr[2].$passSeArr[1].$passSeArr[0];
   } else {
     $pass2 = $passSeArr[1].$passSeArr[0].$passSeArr[2];
     
     // Для отладки
     echo "<br>n = $n, [0] = $passSeArr[0] . [1] = $passSeArr[1] . [2] = $passSeArr[2]";
     echo "<br> pass2 = $pass2";
    // ----------

   }
   
  return $pass2;
}

echo "<br> pass1 - $pass1, pass2Se - $pass2Se";
echo "<br> ".unlockPass($pass1, $pass2Se);





?>


</body>
</html>