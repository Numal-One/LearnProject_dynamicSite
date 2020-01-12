<?php

echo "<br> include controller.php";

if ($_SERVER['SCRIPT_NAME'] == '/ex3/with/index.php') {
    printPage('/index.php', $database);
} elseif ($_SERVER['SCRIPT_NAME'] == '/ex3/with/bytovka.php'){
    printPage('/bytovka.php', $database);
} elseif ($_SERVER['SCRIPT_NAME'] == '/ex3/with/catalog.php'){
    printPage('/catalog.php', $database);
}


function printPage($url_key, &$database){
    $data = searchData($database, $url_key);
    if (!empty($data) && file_exists(PATH_TPL . $data['tpl'])){
        include_once(PATH_TPL . $data['tpl']);
    } else {
        die('в базе данных нет данных для вызываемой страницы');
    }
}
?>