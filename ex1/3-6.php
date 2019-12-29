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

echo "<br>-------------------3_a-----------------------";
$a = 5;
$b = 3;
$c = 5;
$d = 11;

$p = $a + $b + $c + $d;

echo "<br> периметр P = $p";

echo "<br>-------------------3_b-----------------------";

$x = 1/2;
$a = 7 * $x;
$b = 21 * $x;

$s = ($a + $b) ** 2;
echo "<br> S = $s";

echo "<br>-------------------4_a-b-----------------------";

// задаем стороны трапеции
$a = 11;
$b = 28;
$c = 26;
$d = 25;

// задаем выбор площади или периметра
$Why = true;

// проверка на трапецию. если а = b, то это уже паралеллограмм.
if ($a !== $b) {
  
  if ($Why) {
    // формула площади трапеции через стороны
    $res = (($a+$b)/2) * ($c ** 2 - ((($b -$a) ** 2 + $c ** 2 - $d ** 2)/(2 * ($b -$a)))) ** 0.5;
    echo "<br> Площадь трапеции = $res";
  } else {
    $res = $a + $b + $c + $d;
    echo "<br> Периметр трапеции = $res";
  }
} else {
  echo "<br> не трапеция";
}


echo "<br>-------------------5_a-----------------------";
$sum = 0;
// цикл от 1 до 100 
for ($i = 0; $i < 100; $i++) {
  // копим результат
  $sum += rand(0 , 1);
}

if ($sum >= 50) {
  echo "<br>$sum Оптимист";
} else {
  echo "<br>$sum Пессимист";
}


echo "<br>-------------------5_b-----------------------";

// переберем пароли
$password = 302390;
$max = 999999;
$result = null;

for ($i = 0; $i <= $max; $i++) {
  if ($i === $password) {
    $result = $i;
    break;  
  }
}

echo "<br> pas =  $result";


echo "<br>-------------------5_c-d-----------------------";


$pass1 = 436;
$pass2Se = 123;

// перевод в строку для более удобной манипуляции разрядами
$pass2SeStr = strval($pass2Se);
// получаем цифру второго разряда для условия
$z = floor($pass1/10) % 10;

if ($z > 5) {
  $pass2 = $pass2SeStr[2].$pass2SeStr[1].$pass2SeStr[0];
} else {
  $pass2 = $pass2SeStr[1].$pass2SeStr[0].$pass2SeStr[2];
}

echo "<br> $pass2";

// для выполнения части d задания необходимо просто поменять местами в коде
// переменные $pass2 и $pass2Se



echo "<br>-------------------6_a-----------------------";

$a = 'семь';
$b = 'четыре';

// следуя принципу DRY
function textToNumb($str) {
  switch ($str) {
    case 'ноль':
      return 0;
      break;
    case 'один':
      return 1;
      break;
    case 'два':
      return 2;
      break;
    case 'три':
      return 3;
      break;
    case 'четыре':
      return 4;
      break;
    case 'пять':
      return 5;
      break;
    case 'шесть':
      return 6;
      break;
    case 'семь':
      return 7;
      break;
    case 'восемь':
      return 8;
      break;
    case 'девять':
      return 9;
      break;
    
    default:
      return "введенное текстовое значение не подходит";
      break;
  }
}

$sum = textToNumb($a) + textToNumb($b);

$nSum = $sum;
$n = 0;

while ($nSum > 0) {
 $n++;
 $nSum = floor($nSum / 10);
}

$message = $n > 1 ? " - Большое число" : " - Маленькое число";

echo "<br> Сумма = {$sum}, разрядность = {$n}, $message";



echo "<br>-------------------6_b-----------------------";

// цена и налог в процентах
$price = 10051;
$tax = 13;

// цена с налогом
$taxPrice = $price * (1 + $tax/100);

// разделение на рубли и копейки
$rub = floor($taxPrice / 100);
$kop = $taxPrice % 100;

// отделение последних 2 разрядов в рублях и одного в копейках
// для последующего определения окончания слов
$rubEndNumb = $rub % 100;
$kopEndNumb = $kop % 10;

// определяем окончания для рублей
if ($rubEndNumb <= 20 && $rubEndNumb >=5) {
  $rubEndChar = 'лей';
} else {
  $rubEndNumb = $rubEndNumb % 10;
  $rubEndChar = ($rubEndNumb == 1) ? "ль" : (($rubEndNumb >=2 && $rubEndNumb <= 4) ? "ля" : "лей");
}

// определяем окончания для копеек
if ($kop <= 20 && $kop >=5) {
  $kopEndChar = 'ек';
} else {
  $kopEndChar = ($kopEndNumb == 1) ? "йка" : (($kopbEndNumb >= 2 && $kopEndNumb <= 4) ? "йки" : "ек");
}

// выводим результат
echo "<br> $rub руб{$rubEndChar} $kop копе{$kopEndChar}  --  {$rub}.{$kop} руб.";




echo "<br>-------------------6_с-----------------------";

// вводим Ip адрес

// $ip = "192.168.1.1";
// $ip = "3232235777";

$ip = "192.168.1.168";
// $ip = "3232235944";

// Определяем, есть ли в строке с адресом символ "."
// если есть, что формат IPv4
$isIpV4 = stripos($ip, '.');

// начальная степень для вычисления (256 ** n)
$n = 3;
// Длинна строки для перебора в цикле
$ipLength = strlen($ip);

echo "<br> IP- $ip";
echo "<br> IP-длинна строки $ipLength";

// если в строке нет точки, то переводим в IPv4
if ( $isIpV4 === false ) {
  echo "<br>адрес в формате IP-number";
  // строку преобразуем в целое число
  $ip = intval($ip);
  // в результате будет строка. указываем пустую.
  $result = '';
  // пока число больше нуля делать
  while ( $ip > 0) {
    // точка для разделения ip адреса.
    // если это первая группа цифр адреса, т.е. result == '', то точку не надо
    $point = ($result) ? '.' : '';
    // целая часть от деления пишется в ip адрес
    $result = $result . $point . floor($ip / (256 ** $n));
    // остаток от деления - остаток для последующих делений с уменьшением n
    $ip = $ip % (256 ** $n);
    // уменьшаем степень n
    $n--;
  }

} else {
  echo "<br>адрес в формате IPv4";
  $result = 0;
  $numbStr = '';

  // перебираем строку посимвольно
  for ($i = 0; $i < $ipLength; $i++) {
    // сюда складываем цифры 
    $numbStr .= $ip[$i];
    // если текущий символ "." или это последний символ в строке
    if (($ip[$i] === '.') || ($i === $ipLength - 1)) {
      // удаляем точку из текущей строки, если она есть
      $numbStr = str_replace('.', '', $numbStr);
      // преобразуем получившийся кусок ip адреса в число
      // согласно позиции адреса
      $result += intval($numbStr) * (256 ** $n);
      
      $n--;
      // обнуляем переменную с очередным куском ip адреса
      $numbStr = '';
    }

  }
}

echo "<br> Результат преобразования: $result";








?>
</body>
</html>