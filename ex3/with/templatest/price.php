<!DOCTYPE html>
<html lang="ru">

<?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/head.php");?>
  
  <body>
    

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/header.php");?>

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/mobile-menu.php");?>
    
    <main>
      <div class="content price-page">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="#">Главная</a></li>
            <li><span>Цены</span></li>
          </ul>
        </div>
        <div class="grid-container">
          <h1>Цены</h1>
        </div>
        <div class="price">
          <div class="grid-container">
            <div class="price_wrapper">
              <div class="price_item">
                <div class="price_img">
                  <a data-fancybox="price" href="../assets/img/price.jpg">
                    <img src="../assets/img/price.jpg">
                    <a class="lupa" data-fancybox="price" href="../assets/img/price.jpg"></a>
                  </a>
                </div>
                <div class="price_content">
                  <div class="price_description">
                    <div class="price_title"> Блок контейнер 2,5 х 6 м</div>
                    <div class="price_text">
                      <div><span>Наружная обшивка: </span>металлический каркас оцинкованный профнастил С-8</div>
                      <div><span>Внутренняя отделка: </span>ДВП утепление 50 мм электрика</div>
                    </div>
                  </div>
                  <div class="price_summ"><span></span>по запросу</div>
                </div>
              </div>
              <div class="price_item">
                <div class="price_img"><a data-fancybox="price" href="../assets/img/price.jpg"><img src="../assets/img/price.jpg"><a class="lupa" data-fancybox="price" href="../assets/img/price.jpg"></a></a></div>
                <div class="price_content">
                  <div class="price_description">
                    <div class="price_title"> Блок контейнер 2,5 х 6 м</div>
                    <div class="price_text">
                      <div><span>Наружная обшивка: </span>металлический каркас оцинкованный профнастил С-8</div>
                      <div><span>Внутренняя отделка: </span>пластик, деревянная вагонка утепление 50 мм электрика</div>
                    </div>
                  </div>
                  <div class="price_summ"><span></span>по запросу</div>
                </div>
              </div>
              <div class="price_item">
                <div class="price_img"><a data-fancybox="price" href="../assets/img/price.jpg"><img src="../assets/img/price.jpg"><a class="lupa" data-fancybox="price" href="../assets/img/price.jpg"></a></a></div>
                <div class="price_content">
                  <div class="price_description">
                    <div class="price_title">Бытовка склад 2400 x 6000 см</div>
                    <div class="price_text">
                      <div><span>Наружная обшивка: </span>Металлический каркас Наружная обшивка оцинкованный профнастил</div>
                      <div><span>Внутренняя отделка: </span>Стенды ДВП, Электропроводка Освещение Выключатели  Металлическая дверь На выходе автомат 16А Стальные решетки на окнах</div>
                    </div>
                  </div>
                  <div class="price_summ"><span></span>по запросу</div>
                </div>
              </div>
              <div class="price_item">
                <div class="price_img"><a data-fancybox="price" href="../assets/img/price.jpg"><img src="../assets/img/price.jpg"><a class="lupa" data-fancybox="price" href="../assets/img/price.jpg"></a></a></div>
                <div class="price_content">
                  <div class="price_description">
                    <div class="price_title">Бытовка-офис 2400 x 6000см</div>
                    <div class="price_text">
                      <div><span>Наружная обшивка: </span>Металлический каркас Наружная обшивка оцинкованный профнастил Стенды ДВП Электропроводка Розетки</div>
                      <div><span>Внутренняя отделка: </span>Освещение Выключатели На выходе автомат 16А</div>
                    </div>
                  </div>
                  <div class="price_summ"><span></span>по запросу</div>
                </div>
              </div>
              <div class="price_item">
                <div class="price_img"><a data-fancybox="price" href="../assets/img/price.jpg"><img src="../assets/img/price.jpg"><a class="lupa" data-fancybox="price" href="../assets/img/price.jpg"></a></a></div>
                <div class="price_content">
                  <div class="price_description">
                    <div class="price_title"> Блок контейнер 2,5 х 6 м</div>
                    <div class="price_text">
                      <div><span>Наружная обшивка: </span>металлический каркас оцинкованный профнастил С-8</div>
                      <div><span>Внутренняя отделка: </span>ДВП утепление 50 мм электрика</div>
                    </div>
                  </div>
                  <div class="price_summ"><span></span>по запросу</div>
                </div>
              </div>
            </div>
            <div class="grid-x">
              <div class="price_download"><a class="price-download" href="#" target="_blank"><i class="icon-load"></i>Скачать прайс-лист</a></div>
            </div>
          </div>
        </div>
        <div class="calculator">
          <div class="grid-container">
            <form class="calculator_form">
              <div class="calculator_top">
                <div class="calculator_heading heading">Калькулятор подбора бытовки</div>
                <div class="calculator_wrap">
                  <div class="calculator_block">
                    <select class="select">
                      <option></option>
                      <option value="storage">Бытовка склад</option>
                      <option value="office">Бытовка прорабская (офис)</option>
                      <option value="living">Бытовка жилая</option>
                      <option value="security">Бытовка пост охрана</option>
                    </select>
                  </div>
                  <div class="calculator_block">
                    <div class="calculator_input">
                      <label class="input"><span>Количество:</span>
                        <input class="number" type="text" name="count">
                      </label>
                    </div>
                    <div class="calculator_input">
                      <label class="input"><span>Срок аренды:<span>(мес)</span></span>
                        <input class="number" type="text" name="rent">
                      </label>
                    </div>
                  </div>
                  <div class="calculator_block pay">
                    <label class="radio">
                      <input type="radio" name="pay">
                      <div class="radio-text">Помесячная оплата</div>
                    </label>
                    <label class="radio">
                      <input type="radio" name="pay">
                      <div class="radio-text">Разовая оплата</div>
                    </label>
                  </div>
                  <div class="calculator_block delivery">
                    <label class="checkbox">
                      <input type="checkbox">
                      <div class="checkbox-text">Доставка</div>
                    </label>
                    <label>
                      <input class="number" type="text" disabled name="distance"><span>километров до объекта</span>
                    </label>
                  </div>
                </div>
              </div>
              <div class="calculator_bottom">
                <div class="calculator_price">Выберите тип оплаты
                  <!--span="35 000 Р/мес"-->
                </div>
                <div class="calculator_button"><a class="btn_pink" href="#" data-open="popup_order">Заказать</a></div>
              </div>
            </form>
          </div>
        </div>
        <div class="grid-container">
          <div class="seo_text">
            <p>Компания «Бытовки-Сервис» (Москва) предлагает взять в аренду блок контейнеры и вагончики недорого. Мы гарантируем клиентам выгодные условия сотрудничества и самостоятельно доставляем бытовки до строительных объектов.</p>
            <p>Аренда блок контейнера – это возможность получить качественное временное жилье, не тратясь на его приобретение. Арендовать такое сооружение можно гораздо дешевле, чем купить. К тому же наниматель не тратится на монтаж и демонтаж бытовки: все работы выполняют специалисты нашей компании.</p>
            <p>Преимущества сотрудничества с ООО «Бытовки-Сервис»</p>
            <p>Аренда бытовки может осуществляться на любой срок по желанию клиента. Все обязательства прописываются в договоре, действие которого можно продлить. Для постоянных клиентов действуют специальные предложения. </p>
            <ul>Аренда бытовок – оптимальный вариант для многих организаций. Каждому клиенту гарантированы следующие преимущества:
              <li>возможность арендовать вагончик любого типа, как утепленный, так и металлический, с разными вариантами отделки и оборудования;</li>
              <li>индивидуальный подход к заказу: учитываются все пожелания клиентов, подбирается наиболее оптимальный вариант сотрудничества для каждого;</li>
              <li>выгодные цены на услуги;</li>
              <li>оперативная доставка сооружений на объект;</li>
              <li>Бытовка арендуется без залога, по договору.</li>
            </ul>
            <ul>Мы предлагаем различные виды бытовок:
              <li>для складов: с решетками на окнах, внутренней отделкой, металлической дверью;</li>
              <li>для офисных помещений: с окнами, дверями, подведенными инженерными коммуникациями, отделкой;</li>
              <li>для торговых точек: с выходами, к которым подключается торговое оборудование, с коммуникациями;</li>
              <li>для проживания: с системой сигнализации, мебелью, отделкой и различными удобствами;</li>
              <li>для охранных постов со всем необходимым оснащением и мебелью.</li>
            </ul>
            <p>Аренда бытовки может осуществляться на любой срок по желанию клиента. Все обязательства прописываются в договоре, действие которого можно продлить. Для постоянных клиентов действуют специальные предложения. </p>
            <p>Звоните по телефонам:<span class="tel">+7 (495) 789-55-63</span>,<span class="tel">+7 (495) 641-85-68 </span>, и наши консультанты подберут для вас наиболее выгодные условия сотрудничества."</p>
          </div>
        </div>
      </div>
    </main>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/footer.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/scripts.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/popup-form.php");  ?>
  </body>
</html>