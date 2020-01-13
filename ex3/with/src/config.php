<?php  
// echo "<br> start config file";


// Определяем константы основных путей 

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/ex3/with'); // index.php
define('PATH_SRC', ROOT_PATH.'/src/'); // папка с ресурсами
define('PATH_TPL', ROOT_PATH.'/templates/'); // папка с шаблонами

// создаем массив с подключаемыми файлми
$baseFiles = [];

// заполняем массив
$baseFiles[] = PATH_SRC . 'database.php';
$baseFiles[] = PATH_SRC . 'model.php';
$baseFiles[] = PATH_SRC . 'controller.php';

// подключаем файлы из массива
foreach ($baseFiles as $baseFile) {
    include_once($baseFile);
}

?>
