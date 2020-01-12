<?php  
echo "<br> start config file";

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/ex3/with');
define('PATH_SRC', ROOT_PATH.'/src/');
define('PATH_TPL', ROOT_PATH.'/templates/');

$baseFiles = [];

$baseFiles[] = PATH_SRC . 'database.php';
$baseFiles[] = PATH_SRC . 'model.php';
$baseFiles[] = PATH_SRC . 'controller.php';
echo "<br> print baseFiles: ";
print_r($baseFiles);


foreach ($baseFiles as $baseFile) {
    include_once($baseFile);
}

?>
