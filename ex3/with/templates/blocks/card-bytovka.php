<?php
 $bytovkaCardData = $database['bytovkaCardData'];
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