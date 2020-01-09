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


echo "<br> -------------------------- 1.a-m------------------";
echo "<br> 1a - ";
$arrA = ['a', 'b', 'c'];

var_dump($arrA);

echo "<br> 1b - $arrA[0], $arrA[1], $arrA[2]";

$arrC = ['a','b','c','d'];
echo "<br> 1c - $arrC[0] + $arrC[1], $arrC[2] + $arrC[3]";

$arrD = [2,5,3,9];
$result = $arrD[0] * $arrD[1] + $arrD[2] * $arrD[3];
echo "<br> 1d - $result";

$arrE = [];
for ($i = 1; $i < 6; $i++) {
  $arrE[] = $i;
}
echo "<br> 1e - ";
var_dump($arrE);


$arrF = ['a'=>1, 'b'=>2, 'c'=>3];
echo "<br> 1f - ".$arrF['c'];

$arrG = ['a'=>1, 'b'=>2, 'c'=>3];
$arrSum = 0;
foreach ($arrG as $val) {
  $arrSum += $val;
}
echo "<br> 1g - сумма элементов массива = $arrSum";

$arrH = ['Коля'=> '1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo "<br> 1h - Петя получает {$arrH["Петя"]} , а Коля - {$arrH["Коля"]}";


$arrI = ['1'=>'понедельник','2'=>'вторник','3'=>'среда','4'=>'четверг','5'=>'пятница','6'=>'суббота','7'=>'воскресенье'];
$today = (date('w') == 0) ? "7" : date('w');
echo "<br>1i - Сегодня $arrI[$today]";

$arrJ = ['1'=>'понедельник','2'=>'вторник','3'=>'среда','4'=>'четверг','5'=>'пятница','6'=>'суббота','7'=>'воскресенье'];
$day = 3;
echo "<br>1j - день - $arrJ[$day]";

$arrK = [
  'cms' => ['joomla', 'wordpress','drupal'],
  'colors' => ['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
echo "<br>1k - {$arrK["cms"][0]}, {$arrK["cms"][2]}, {$arrK["colors"]["green"]}, {$arrK["colors"]["red"]}";


$arrL = [
  'ru' => ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"],
  'en' => ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"]
];
echo "<br>1l - ".$arrL['ru'][0].", ".$arrL['en'][2];


$arrM = [
  'ru' => ["понедельник", "вторник", "среда", "четверг", "пятница", "суббота", "воскресенье"],
  'en' => ["monday", "tuesday", "wednesday", "thursday", "friday", "saturday", "sunday"]
];
$day = (random_int(0,6));
$lang = (random_int(0,1)) ? 'ru' : 'en';
echo "<br>1m - ".$arrM[$lang][$day];







?>
</body>
</html>