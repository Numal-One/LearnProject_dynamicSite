<?php

// echo "<br> include controller.php";

// if ($_SERVER['SCRIPT_NAME'] == '/ex3/with/index.php') {
//     printPage('/index.php', $database);
// } elseif ($_SERVER['SCRIPT_NAME'] == '/ex3/with/bytovka.php'){
//     printPage('/bytovka.php', $database);
// } elseif ($_SERVER['SCRIPT_NAME'] == '/ex3/with/catalog.php'){
//     printPage('/catalog.php', $database);
// }

// пишем логику на определение текущей страницы
// находим путь до страницы
$thisPath = $_SERVER['SCRIPT_NAME'];
// разбиваем его на массив знаком "/"
$thisPathArr = explode('/', $thisPath);
// получаем нужную строку из последнего элемента массива
$thisPageName = '/' . array_pop($thisPathArr);

// проверяем через другие элементы этого массива, правильный ли путь до файла
if ($thisPathArr[1] == 'ex3' && $thisPathArr[2] == 'with') {
    // если да, то "печатаем" файл используя надо "базу данных"
    printPage($thisPageName, $database);
}


// функция для вывода нужной страницы
// передаем аргумент с именем текущего файла и саму базу
function printPage($url_key, &$database){

    // используем функцию для "поиска" данных в "базе"
    // возвращает массив, согласно адресу текущей страницы
    $data = searchData($database, $url_key);
    // если полученный массив не пуст и файл с таким путем существует, то ....
    if (!empty($data) && file_exists(PATH_TPL . $data['tpl'])){
        // подключаем нужный файл
        include_once(PATH_TPL . $data['tpl']);
    } else {
        // либо прекращаем выполенине
        die('<br> в базе данных нет данных для вызываемой страницы');
    }
}

?>