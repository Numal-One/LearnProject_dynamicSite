<?php

echo "<br> include controller.php";

// if ($_SERVER['SCRIPT_NAME'] == '/ex3/with/index.php') {
//     printPage('/index.php', $database);
// } elseif ($_SERVER['SCRIPT_NAME'] == '/ex3/with/bytovka.php'){
//     printPage('/bytovka.php', $database);
// } elseif ($_SERVER['SCRIPT_NAME'] == '/ex3/with/catalog.php'){
//     printPage('/catalog.php', $database);
// }

$thisPath = $_SERVER['SCRIPT_NAME'];
$thisPathArr = explode('/', $thisPath);
$thisPageName = '/' . array_pop($thisPathArr);

echo "<br> $thisPathArr[1]";
echo "<br> $thisPathArr[2]";
echo "<br> $thisPageName";

if ($thisPathArr[1] == 'ex3' && $thisPathArr[2] == 'with') {
    printPage($thisPageName, $database);
}

function printPage($url_key, &$database){
    $data = searchData($database, $url_key);
    echo "<br> 111";
    echo "<br> $url_key";
    echo "<br> " . file_exists(PATH_TPL . $data['tpl']);
    echo "<br> " .$data['tpl'];
    echo "<br> " .PATH_TPL;
    
    
    if (!empty($data) && file_exists(PATH_TPL . $data['tpl'])){
        
        include_once(PATH_TPL . $data['tpl']);
    } else {
        die('<br> в базе данных нет данных для вызываемой страницы');
    }
}

?>