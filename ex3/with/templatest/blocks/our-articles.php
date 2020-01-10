<?php
$ourArticles = array(
  1 => array(
    'href' => '/pokupka-ili-arenda-byitovok/',
    'title' => 'Покупка или аренда бытовок'
  ),
  2 => array(
    'href' => '/xarakteristiki-byitovok/',
    'title' => 'Характеристики бытовок'
  ),
  3 => array(
    'href' => '/naznachenie-byitovok/',
    'title' => 'Назначение бытовок'
  ),
  4 => array(
    'href' => '/ispolzovanie-krana-manipulyatora/',
    'title' => 'Использование крана-манипулятора'
  ),
  5 => array(
    'href' => '/kupit-byitovku-bu/',
    'title' => 'Кубить бытовку бу'
  ),
  6 => array(
    'href' => '/byitovka-sklad/',
    'title' => 'Бытовка - склад'
  ),
  7 => array(
    'href' => '/bytovka-prorabskaya-ofis/',
    'title' => 'Бытовка прорабская(офис)'
  ),
  8 => array(
    'href' => '/byitovka-zhilaya/',
    'title' => 'Бытовка жилая'
  ),
  9 => array(
    'href' => '/byitovka-stolovaya/',
    'title' => 'Бытовка столовая'
  ),
  10 => array(
    'href' => '/byitovka-razdevalka/',
    'title' => 'Бытовка раздевалка'
  ),
  11 => array(
    'href' => '/bytovka-post-oxrany/',
    'title' => 'Бытовка пост охраны'
  ),
);

?>

<div class="main_article">
        <div class="grid-container">
          <div class="main_article-heading heading">Так же Вам могут быть полезны  
            <a href="#">  наши статьи</a>
            <a class="mobile-more" href="#"></a>
          </div>
          <div class="main_article-wrapper">

          <?php
            foreach ($ourArticles as $article) {
              echo '<a class="main_article-item" href="'.$article['href'].'">'.$article['title'].'</a>';
            }
          ?>
            <!-- <a class="main_article-item" href="/pokupka-ili-arenda-byitovok/">Покупать или арендовать?</a>
            <a class="main_article-item" href="/xarakteristiki-byitovok/">Характеристики бытовок</a>
            <a class="main_article-item" href="/naznachenie-byitovok/">Назначение бытовок</a>
            <a class="main_article-item" href="/ispolzovanie-krana-manipulyatora/">Использование крана-манипулятора</a>
            <a class="main_article-item" href="/kupit-byitovku-bu/">Купить бытовку бу</a>
            <a class="main_article-item" href="/byitovka-sklad/">Бытовка склад</a>
            <a class="main_article-item" href="/bytovka-prorabskaya-ofis/">Бытовка прорабская(офис)</a>
            <a class="main_article-item" href="/byitovka-zhilaya/">Бытовка жилая</a>
            <a class="main_article-item" href="/byitovka-stolovaya/">Бытовка столовая</a>
            <a class="main_article-item" href="/byitovka-razdevalka/">Бытовка раздевалка</a>
            <a class="main_article-item" href="/bytovka-post-oxrany/">Бытовка пост-охраны</a></div> -->
          </div>
      </div>