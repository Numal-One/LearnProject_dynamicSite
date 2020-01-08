<!DOCTYPE html>
<html lang="ru">

  <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex4/4/templatest/blocks/head.php");?>
  
  <body>
    

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex4/4/templatest/blocks/header.php");?>

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex4/4/templatest/blocks/mobile-menu.php");?>
    
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
    <footer class="site_footer">
      <div class="footer_top">
        <div class="grid-container">
          <div class="grid-x">
            <div class="footer_nav">
              <div class="footer_logo"><a href="/">Бытовки-Сервис.ru</a></div>
              <ul class="footer_menu">
                <li><a href="/">Аренда бытовки</a></li>
                <li><a href="/czenyi/ ">Цены</a></li>
                <li><a href="/dostavka/">Доставка</a></li>
                <li><a href="/fotogalereya/">Фотогалерея</a></li>
                <li><a href="/kontaktyi/">Контакты</a></li>
              </ul>
            </div>
            <div class="footer_links">
              <div class="footer_phones"><a class="phone" href="tel:+74957985563">+7 (495) 798-55-63</a><a class="phone" href="tel:+74956418568">+7 (495) 641-85-68</a></div><a class="callback" href="#">Обратный звонок</a>
            </div>
          </div>
        </div>
      </div>
      <div class="footer_bottom">
        <div class="grid-container">
          <div class="grid-x">
            <div class="footer_copyright"><span>2005-2018 © ООО «Бытовки-Сервис»</span><a class="politics" href="#">Обработка персональных данных</a></div>
            <div class="footer_info">
              <div class="footer_address"><i class="icon-address"></i>ул. Молодогвардейская, д. 58, стр.13, офис 28.<br>Мы работаем: Пн - Пт с 9:00 до 18:00</div>
              <div class="footer_mail"><a class="mail" href="mailto:5084145@mail.ru"><i class="icon-mail"></i>5084145@mail.ru</a></div>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="../assets/js/foundation.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <script src="../assets/js/jquery.fancybox.min.js"></script>
    <script src="../assets/js/jquery.mask.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script async src="../assets/js/main.js"></script>
    <div class="popup_form order_popup reveal" id="popup_order" data-reveal>
      <button class="close-modal" data-close aria-label="Close modal" type="button"></button>
      <form action="" method="">
        <div class="heading">Заказ бытовок</div>
        <div class="order_form-group">
          <label>
            <input type="text">
            <div class="placeholder-input">Ваше имя</div>
          </label>
          <label>
            <input type="tel" required>
            <div class="placeholder-input">Ваш телефон<span>*</span></div>
            <div class="error-message">Пожалуйста, введите корректный номер телефона</div>
          </label>
          <label>
            <textarea></textarea>
            <div class="placeholder-input">Комментарий</div>
          </label>
        </div>
        <div class="order_form-personal">
          <label class="checkbox">
            <input type="checkbox" required>
            <div class="personal-text checkbox-text">Даю согласие на обработку персональных данных.  <a href="/obrabotka-personalnyh-dannyh/"> Узнать подробности</a></div>
          </label>
        </div>
        <button class="to-order btn_pink">Заказать</button>
      </form>
    </div>
  </body>
</html>