<?php


$bytovkaPreviewData = $database['bytovkaPreviewData'];

?>


<div class="preview_bytovka-wrapper">
          <div class="grid-container">

          <?php
          foreach ($bytovkaPreviewData as $bytovkaPreviewItm) {
            echo'
            <div class="preview_bytovka-item">
              <div class="preview_bytovka-main">

                <div class="preview_bytovka-img">
                  <div class="preview_bytovka-slider">';
                  
                  // картинки слайдера
                  foreach ($bytovkaPreviewItm['sliderImgs'] as $sliderItm) {
                   echo '
                   <a data-fancybox="sklad" href="src/assets/img/'.$sliderItm['imgName'].'">
                      <img src="src/assets/img/'.$sliderItm['imgName'].'" alt="'.$sliderItm['description'].'" title="'.$sliderItm['title'].'">
                    </a>
                   ';
                  }

                echo '
                  </div>
                </div>

                <div class="preview_bytovka-content"><a class="preview_bytovka-heading" href="'.$bytovkaPreviewItm['href'].'">'.$bytovkaPreviewItm['heading'].'</a>
                <div class="preview_bytovka-gabarits">'.$bytovkaPreviewItm['gabarits'].'</div>
                <div class="preview_bytovka-text">'.$bytovkaPreviewItm['description'].'</div>
                <div class="preview_bytovka-characteristics">

                  <ul class="characteristics">';
                  // набор характеристик отделка, обшивка, дверь, освещение....
                  foreach ($bytovkaPreviewItm['characteristics'] as $charItm) {
                    echo '
                    <li>'.$charItm.'</li>
                    ';
                  }
                                    
                  echo' </ul>

                </div>

                <div>Доступно для заказа в '.$bytovkaPreviewItm['buyLocation'].';</div>

                <div class="preview_bytovka-order">
                  <div class="preview_bytovka-price">Цена: <span>'.$bytovkaPreviewItm['price']['value'].'</span> '.$bytovkaPreviewItm['price']['valuta'].'</div>
                  <div class="preview_bytovka-link"><a class="btn_pink" href="#" data-open="popup_order">Заказать</a></div>
                </div>
                  <a class="preview_bytovka-download" href="#" alt="" title=""></a>
                </div>

              </div>

              <div class="preview_bytovka-additional">
                <div class="preview_bytovka-additional-caption">Может дополнительно комплектоваться:</div>
                <div class="preview_bytovka-icons">';
                
                // иконки дополнительных опций
                foreach ($bytovkaPreviewItm['additionalEquipped'] as $addItm) {
                  echo '<img src="src/assets/img/'.$addItm['imgName'].'" alt="'.$addItm['description'].'" title="'.$addItm['title'].'">';
                }
                               
                  echo '</div>
              </div>
            </div>
            ';       

          }
          ?>

            <div class="grid-x">
              <div class="preview_bytovka-more"><span class="btn_blue">Показать еще</span></div>
            </div>
          </div>
        </div>