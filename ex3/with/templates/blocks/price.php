<?php
$priceData = $database['priceData'];
?>
          
          
          <div class="price_wrapper">


            <?php
            foreach ($priceData as $containerProp) {
              echo (' 
                  <div class="price_item">

                <div class="price_img">
                  <a data-fancybox="price" href="src/assets/img/'.$containerProp['priceImage'].'" title="">
                    <img src="src/assets/img/'.$containerProp['priceImage'].'" alt="" title="">
                    <a class="lupa" data-fancybox="price" href="src/assets/img/'.$containerProp['priceImage'].'"></a>
                  </a>
                </div>

                <div class="price_content">

                  <div class="price_description">
                    <div class="price_title"> '.$containerProp['priceTitle'].'</div>
                    <div class="price_text">
                      <div><span>'.$containerProp['priceTextOuter'][0].' </span>'.$containerProp['priceTextOuter'][1].'</div>
                      <div><span>'.$containerProp['priceTextInner'][0].' </span>'.$containerProp['priceTextInner'][1].'</div>
                    </div>
                  </div>

                  <div class="price_summ"><span></span>'.$containerProp['priceSumm'].'</div>
                </div>
              </div>
              ');
            }
            

            ?>

          </div>
          <div class="grid-x">
            <div class="price_link"><span class="btn_blue">Показать еще</span></div>
          </div>
        