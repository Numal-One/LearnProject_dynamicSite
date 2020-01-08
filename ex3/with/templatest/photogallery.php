<!DOCTYPE html>
<html lang="ru">

<?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/head.php");?>
  
  <body>
    

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/header.php");?>

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/mobile-menu.php");?>
    
    <main>
      <div class="content">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="#">Главная</a></li>
            <li><span>Фотогалерея</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Фотогалерея</h1>
        </div>
        <div class="photogallery">
          <div class="grid-container">
            <div class="photogallery-for slider-dots">
              <div class="photogallery-for-item">
                <div class="photogallery-for-img"><a href="../assets/img/photo1.jpg" data-fancybox="photogallery" data-caption="Бытовка-склад" title=""><img src="../assets/img/photo1.jpg" alt="" title=""></a></div>
                <div class="photogallery-for-caption">Бытовка-склад</div>
              </div>
              <div class="photogallery-for-item">
                <div class="photogallery-for-img"><a href="../assets/img/photo2.jpg" data-fancybox="photogallery" data-caption="Фото2" title=""><img src="../assets/img/photo2.jpg" alt="" title=""></a></div>
                <div class="photogallery-for-caption">Фото2</div>
              </div>
              <div class="photogallery-for-item">
                <div class="photogallery-for-img"><a href="../assets/img/photo3.jpg" data-fancybox="photogallery" data-caption="Фото3" title=""><img src="../assets/img/photo3.jpg" alt="" title=""></a></div>
                <div class="photogallery-for-caption">Фото3</div>
              </div>
              <div class="photogallery-for-item">
                <div class="photogallery-for-img"><a href="../assets/img/photo4.jpg" data-fancybox="photogallery" data-caption="Фото4" title=""><img src="../assets/img/photo4.jpg" alt="" title=""></a></div>
                <div class="photogallery-for-caption">Фото4</div>
              </div>
              <div class="photogallery-for-item">
                <div class="photogallery-for-img"><a href="../assets/img/photo5.jpg" data-fancybox="photogallery" data-caption="Фото5" title=""><img src="../assets/img/photo5.jpg" alt="" title=""></a></div>
                <div class="photogallery-for-caption">Фото5</div>
              </div>
              <div class="photogallery-for-item">
                <div class="photogallery-for-img"><a href="../assets/img/photo6.jpg" data-fancybox="photogallery" data-caption="Фото6" title=""><img src="../assets/img/photo6.jpg" alt="" title=""></a></div>
                <div class="photogallery-for-caption">Фото6</div>
              </div>
            </div>
            <div class="photogallery-nav">
              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="../assets/img/photo1.jpg" alt="" title=""></div>
              </div>
              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="../assets/img/photo2.jpg" alt="" title=""></div>
              </div>
              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="../assets/img/photo3.jpg" alt="" title=""></div>
              </div>
              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="../assets/img/photo4.jpg" alt="" title=""></div>
              </div>
              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="../assets/img/photo5.jpg" alt="" title=""></div>
              </div>
              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="../assets/img/photo6.jpg" alt="" title=""></div>
              </div>
            </div>
          </div>
        </div>
        <div class="main_article">
          <div class="grid-container">
            <div class="main_article-heading heading">Так же Вам могут быть полезны  <a href="#">  наши статьи</a><a class="mobile-more" href="#"></a></div>
            <div class="main_article-wrapper"><a class="main_article-item" href="/pokupka-ili-arenda-byitovok/">Покупать или арендовать?</a><a class="main_article-item" href="/xarakteristiki-byitovok/">Характеристики бытовок</a><a class="main_article-item" href="/naznachenie-byitovok/">Назначение бытовок</a><a class="main_article-item" href="/ispolzovanie-krana-manipulyatora/">Использование крана-манипулятора</a><a class="main_article-item" href="/kupit-byitovku-bu/">Купить бытовку бу</a><a class="main_article-item" href="/byitovka-sklad/">Бытовка склад</a><a class="main_article-item" href="/bytovka-prorabskaya-ofis/">Бытовка прорабская(офис)</a><a class="main_article-item" href="/byitovka-zhilaya/">Бытовка жилая</a><a class="main_article-item" href="/byitovka-stolovaya/">Бытовка столовая</a><a class="main_article-item" href="/byitovka-razdevalka/">Бытовка раздевалка</a><a class="main_article-item" href="/bytovka-post-oxrany/">Бытовка пост-охраны</a></div>
          </div>
        </div>
      </div>
      </main>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/footer.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/scripts.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/popup-form.php");  ?>
  </body>
</html>