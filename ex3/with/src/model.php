<?php
echo "<br> include model.php";

function searchData(&$database, $url_key){

    foreach ($database['pages'] as $value) {
        if ($value['url_key'] == $url_key){
            return $value;
        }
    }
    return false;

}
?>