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
            <li><span>Контакты</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Контакты</h1>
        </div>
        <div class="contacts_block">
          <div class="grid-container">
            <div class="grid-x contacts-wrapper">
              <div class="contacts-info">
                <div class="contacts-info-address">
                  <div>Москва, ул. Молодогвардейская, д. 58, стр. 13, офис 28</div>
                  <p><span class="bold">Схема проезда:</span>Проезд на автомобиле: За МКАДом, поверните направо с Ленинградского ш. на улицу Репина. После переезда железнодорожного разъезда, поверните налево, на Коммунальный пр. С него съезжайте налево на Транспортный пр. В конце проезда, по правую руку, Вы увидите железные ворота. Здесь находится владение 4.</p>
                </div>
                <div class="contacts-info-mail"><a class="mail" href="mailto:5084145@mail.ru">5084145@mail.ru</a></div>
                <div class="contacts-info-phone"><a class="phone" href="tel:+74957895563">+7 (495) 789-55-63</a><a class="phone" href="tel:+74956418568">+7 (495) 641-85-68</a></div>
              </div>
              <div class="contacts-map" id="contact-map"></div>
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
      </div>
      </main>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/footer.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/scripts.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/popup-form.php");  ?>
  </body>
</html>