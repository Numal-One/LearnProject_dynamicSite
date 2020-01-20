<?php

// функция "поиска" информации для отображения нужной страницы
// возвращает массив данных для текущей страницы, если такая есть, либо возвращает false
function searchData(&$database, $url_key){

    foreach ($database['pages'] as $value) {
        if ($value['url_key'] == $url_key){
            return $value;
        }
    }
    echo '<br> not data in base';
    return false;

}
?>