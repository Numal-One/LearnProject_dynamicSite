<?php  
echo "<br> start config file";

define('ROOT_PATH', $_SERVER['DOCUMENT_ROOT'].'/ex3/with');
define('PATH_SRC', ROOT_PATH.'/src/');
define('PATH_TPL', ROOT_PATH.'/templatest/');

define('URL_PATH', 'http://'.$_SERVER['SERVER_NAME'].'/ex3/with' );
define('URL_PATH_SRC', URL_PATH . '/src/');

// W:/domains/learnKo3/ex3/with
// W:/domains/learnKo3/ex3/with/src/
// W:/domains/learnKo3/ex3/with/templatest/
// http://learnko3/ex3/with
// http://learnko3/ex3/with/src/

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
