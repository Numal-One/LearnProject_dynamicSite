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
/*


*/
echo "<br>------------Переработка задания 5b из занятия 1----------------------------------";
$password = 32165465165;
echo "<br>";

function findPass($pas, $pos = 0){
  static $result;

  if ($pos == 0) {
    $result = [];
  }

  // Для отладки
  echo "Шаг - $pos , результат - <br>";
  print_r($result);
  echo "<br>";
  // ------------------

  $pasArr = str_split($pas,1);

  if ($pos < count($pasArr)) {

    for ($i = 0; $i < 10; $i++) {
      if ($pasArr[$pos] == $i) {
        $result[] = $i;
        break;
      }
    }

    $pos++;
    findPass($pas, $pos);
  }
  
  return join($result);
}

$newPass = findPass($password);
echo "<br>$password - дано, <br>$newPass - найдено ";

?>


</body>
</html>