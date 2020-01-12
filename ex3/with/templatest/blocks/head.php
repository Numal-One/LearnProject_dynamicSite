<?php
$headTitlesData = array(
    'catalog.php' => 'Каталог',
    'price.php' => 'Цены',
    'delivery.php' => 'Доставка',
    'photogallery.php' => 'Галерея',
    'contacts.php' => 'Контакты',
    'index.php' => 'Бытовки'
);

$thisPageName = explode('/', $_SERVER['PHP_SELF']);
$thisPageName = array_pop($thisPageName);

?>

<head>
    <title><?=$headTitlesData[$thisPageName]?></title>
    <meta name="viewport" content="width=device-width">
    <meta charset="utf-8">
    <script src="https://api-maps.yandex.ru/2.1/?apikey=f461f187-b614-45c4-988e-6b214fceb781&amp;lang=ru_RU" type="text/javascript"></script></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css">
    <link rel="stylesheet" href="http://<?=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/css/screen.css">
</head>