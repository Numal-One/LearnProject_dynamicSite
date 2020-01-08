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
            <li><span>Доставка</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Доставка</h1>
        </div>
        <div class="grid-container">
          <div class="seo_text"><img class="content-img" src="/assets/img/delivery.png" alt="" title="">
            <p>Для того, чтобы избавить своих клиентов от лишних проблем наша компания предлагает такие услуги как: доставка бытовок и блок-контейнеров.</p>
            <p>Доставка бытовок включает в себя не только транспортировку, но и погрузочно-разгрузочные работы, а также их установку. Перевозка бытовок производится в собранном виде при помощи манипулятора. Это значительно сокращает расходы, так как избавляет от необходимости использования грузоподъемной техники.</p>
            <p>Стоимость услуги до 50 км от склада (г. Химки, МО) на сегодняшний день составляет 6 500 рублей. Перевозка бытовок на более дальнее расстояние осуществляется по прейскуранту 50 рублей за каждый дополнительный километр.</p>
            <p>Все разрешения на перевозку бытовок наша компания получает самостоятельно. Вам нужно сделать только заказ и указать начальную и конечную точку перевозки. Остальные формальности наша компания берет на себя. Необходимо учитывать, чтобы на месте погрузки и выгрузки бытовок был свободный подъезд манипулятора.</p>
            <p>Звоните по телефонам:<span class="tel">+7 (495) 789-55-63</span>,<span class="tel">+7 (495) 641-85-68 </span>, и наши консультанты подберут для вас наиболее выгодные условия сотрудничества.</p>
          </div>
        </div>
        <div class="delivery_calculator">
          <div class="grid-container">
            <div class="delivery_calculator-top">
              <div class="delivery_calculator-heading">Расчет стоимости доставки</div>
              <div class="grid-x">
                <div class="delivery_calculator-wrap">
                  <label class="checkbox">
                    <input type="checkbox">
                    <div class="checkbox-text">Растояние от склада более 50 км</div>
                  </label>
                </div>
                <div class="delivery_calculator-wrap">
                  <label>Введите расстояние, км:
                    <input class="number" type="text" required disabled>
                  </label>
                </div>
              </div>
            </div>
            <div class="grid-x delivery_calculator-bottom">
              <div class="delivery_calculator-price">Цена: <span>6500</span></div>
              <div class="delivery_calculator-button"><a class="btn_pink" href="#" data-open="popup_order">Заказать</a></div>
            </div>
          </div>
        </div>
        <div class="main_photogallery">
          <div class="grid-container">
            <div class="main_photogallery-heading heading">Фотогалерея</div>
            <div class="main_photogallery-slider slider-arrows slider-dots">
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
              <div class="main_photogallery-item"><a data-fancybox="gallery" href="../assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="../assets/img/gallery.jpg" alt="" title=""></a></div>
            </div>
          </div>
        </div>
        <div class="order_form-block">
          <div class="grid-container">
            <div class="order_form-heading">У нас Вы можете быстро оформить заказ бытовки</div>
            <form class="order_form" action="" method="">
              <div class="order_form-group">
                <label>
                  <input type="text" name="name">
                  <div class="placeholder-input">Ваше имя</div>
                </label>
                <label>
                  <input type="tel" name="phone" required>
                  <div class="placeholder-input">Ваш телефон<span>*</span></div>
                </label>
                <label>
                  <input type="text" name="message">
                  <div class="placeholder-input">Ваше сообщение</div>
                </label>
              </div>
              <div class="order_form-personal">
                <label class="checkbox">
                  <input type="checkbox">
                  <div class="personal-text checkbox-text">Даю согласие на обработку персональных данных.  <a href="/obrabotka-personalnyh-dannyh/"> Узнать подробности</a></div>
                </label>
              </div>
              <button class="btn_pink">Заказать<span class="show-for-mobile"> бытовку</span></button>
            </form>
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