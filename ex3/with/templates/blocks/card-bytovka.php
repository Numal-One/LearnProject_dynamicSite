<?php
 $bytovkaCardData = array(
  'sliderImgs' => array(
    1 => array(
      'imgName' => 'preview1.png',
      'title' => 'title1',
      'description' => 'alt1'
    ),
    2 => array(
      'imgName' => 'preview2.png',
      'title' => 'title1',
      'description' => 'alt1'
    ),
    3 => array(
      'imgName' => 'preview3.png',
      'title' => 'title1',
      'description' => 'alt1'
    ),
    4 => array(
      'imgName' => 'preview4.png',
      'title' => 'title1',
      'description' => 'alt1'
    ),
    5 => array(
      'imgName' => 'preview5.png',
      'title' => 'title1',
      'description' => 'alt1'
    ),
    6 => array(
      'imgName' => 'preview6.png',
      'title' => 'title1',
      'description' => 'alt1'
    ),
  ),
  'href' => '#',
  'heading' => 'Бытовка склад',
  'gabarits' => '3000 x 6000',
  'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.', 
  'characteristics' => array('Отделка оргалит','Усиленный каркас', 'Стальные решетки на окнах','Электропроводка','Освещение','Наружная обшивка оцинкованный профнастил','Металлическая дверь','Пол – доска окрашенная','Возможность постановки бытовки на бытовку'),
  'buyLocation' => 'Город-Н',
  'price' => array(
    'value' => 8000,
    'valuta' => 'руб.'
  ),
  'additionalEquipped' => array(
    1 => array(
      'imgName' => 'add-ic1.svg',
      'title' => 'title1',
      'description' => 'alt1'
    ),
    2 => array(
      'imgName' => 'add-ic2.svg',
      'title' => 'title2',
      'description' => 'alt2'
    ),
    3 => array(
      'imgName' => 'add-ic3.svg',
      'title' => 'title3',
      'description' => 'alt3'
    ),
    4 => array(
      'imgName' => 'add-ic4.png',
      'title' => 'title4',
      'description' => 'alt4'
    ),
    5 => array(
      'imgName' => 'add-ic5.svg',
      'title' => 'title5',
      'description' => 'alt5'
    ),
  )
);
?>

<div class="grid-container">
          <h1>Бытовка прорабская1 (офис)</h1>
        </div>
        <div class="card_bytovka-wrapper">
          <div class="grid-container">
            <div class="card_bytovka-item">
              <div class="card_bytovka-main">

                <div class="card_bytovka-img">
                  <div class="card_bytovka-min-rent">Минимальный срок аренды - <span> 30 дней</span></div>
                  <div class="card_bytovka-for slider-dots">

                  <?php
                    foreach ($bytovkaCardData['sliderImgs'] as $cardSliderItm) {
                      echo '
                      <a data-fancybox="sklad" href="src/assets/img/preview1.png" title="">
                      <img src="src/assets/img/'.$cardSliderItm['imgName'].'" alt="'.$cardSliderItm['description'].'" title="'.$cardSliderItm['title'].'">
                      </a>
                      ';
                    }

                  ?>
                    
                  </div>
                  
                  <div class="card_bytovka-nav">
                  <?php
                    foreach ($bytovkaCardData['sliderImgs'] as $cardSliderItm) {
                      echo '
                      <div class="card_bytovka-nav-item">
                        <div class="card_bytovka-nav-wrap"><img src="src/assets/img/'.$cardSliderItm['imgName'].'" alt="'.$cardSliderItm['description'].'" title="'.$cardSliderItm['title'].'"></div>
                      </div>
                      ';
                    }

                  
                   
                  echo '</div>
                </div>

                <div class="card_bytovka-content">

                  <div class="card_bytovka-price">Цена аренды:<span> '.$bytovkaCardData['price']['value'].'</span> '.$bytovkaCardData['price']['valuta'].'</div>
                  <div class="card_bytovka-rent">Аренда от трех бытовок:<span> по запросу</span></div>
                  <div class="card_bytovka-link"><a class="btn_pink" href="#" data-open="popup_order">Заказать</a></div>
                  <div class="card_bytovka-gabarits">Размеры: '.$bytovkaCardData['gabarits'].'</div>
                  <div class="card_bytovka-text">'.$bytovkaCardData['description'].'</div>
                  
                  <div class="card_bytovka-characteristics">
                    <ul class="characteristic">';

                    foreach ($bytovkaCardData['characteristics'] as $charItm) {
                      echo '
                      <li>'.$charItm.'</li>
                      ';
                    }

                    echo '</ul>
                  </div>

                  <div class="card_bytovka-advantages">
                    <ul class="adv">
                      <li>Залога нет</li>
                      <li>Предоплата от двух месяцев</li>
                    </ul>
                  </div><a class="card_bytovka-download" href="#" alt="" title="">Скачать договор аренды бытовки-склада</a>
                </div>

                ';
                ?>

              </div>
              <div class="card_bytovka-info">
                <div class="card_bytovka-video">
                  <div class="video-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/dNZb_KtKhTc&amp;showinfo=0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
                </div>

                <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/card-bytovka-calc.php");  ?>

               
                <div class="preview_bytovka-additional">
                  <div class="preview_bytovka-additional-caption">Может дополнительно комплектоваться:</div>
                  <div class="preview_bytovka-icons">
                    <img src="src/assets/img/add-ic1.svg" alt="" title="">
                    <img src="src/assets/img/add-ic2.svg" alt="" title="">
                    <img src="src/assets/img/add-ic3.svg" alt="" title="">
                    <img src="src/assets/img/add-ic4.png" alt="" title="">
                    <img src="src/assets/img/add-ic5.svg" alt="" title="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>