<?php
$priceData = array(
  1 => array(
    "priceTitle" => "Блок контейнер 2,5 х 6 м",
    "priceImage" => "price.jpg",
    "priceTextOuter" => array('Наружная обшивка:','металлический каркас оцинкованный профнастил С-8'),
    "priceTextInner" => array('Внутренняя отделка:','ДВП утепление 50 мм электрика'),
    "priceSumm" => "по запросу"
  ),
);
?>
          
          
          <div class="price_wrapper">


            <?php
            foreach ($priceData as $containerProp) {
              echo (' 
                  <div class="price_item">

                <div class="price_img">
                  <a data-fancybox="price" href="http://'.$_SERVER['SERVER_NAME'].'/ex3/with/src/assets/img/'.$containerProp['priceImage'].'" title="">
                    <img src="http://'.$_SERVER['SERVER_NAME'].'/ex3/with/src/assets/img/'.$containerProp['priceImage'].'" alt="" title="">
                    <a class="lupa" data-fancybox="price" href="http://'.$_SERVER['SERVER_NAME'].'/ex3/with/src/assets/img/'.$containerProp['priceImage'].'"></a>
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


<!-- 
            <div class="price_item">

              <div class="price_img">
                <a data-fancybox="price" href="http://($_SERVER['SERVER_NAME'])/ex3/with/src/assets/img/price.jpg" title="">
                  <img src="http://($_SERVER['SERVER_NAME'])/ex3/with/src/assets/img/price.jpg" alt="" title="">
                  <a class="lupa" data-fancybox="price" href="http://($_SERVER['SERVER_NAME'])/ex3/with/src/assets/img/price.jpg"></a>
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
            </div> -->

           

          </div>
          <div class="grid-x">
            <div class="price_link"><span class="btn_blue">Показать еще</span></div>
          </div>
        