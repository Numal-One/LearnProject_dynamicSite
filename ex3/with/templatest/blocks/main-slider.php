<?php
$mainSliderData = array(
1 => array(
  'imgName' => 'bytovka1.png',
  'heading' => 'Строительные бытовки недорого!',
  'description' => ''
),
2 => array(
  'imgName' => 'bytovka2.png',
  'heading' => 'Строительные недорого!',
  'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
),
3 => array(
  'imgName' => 'bytovka3.png',
  'heading' => 'Строительные бытовки!',
  'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
),
4 => array(
  'imgName' => 'bytovka4.png',
  'heading' => 'Строительные бытовки дорого!',
  'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
),
5 => array(
  'imgName' => 'bytovka5.png',
  'heading' => 'Бытовки недорого!',
  'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
),
6 => array(
  'imgName' => 'bytovka6.png',
  'heading' => 'Строительные не бытовки недорого!',
  'description' => 'Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья'
)
);

?>

<div class="main_slider-wrapper">
  <div class="grid-container">
    <div class="grid-x">

      <div class="main_slider">
      <?php
        foreach ($mainSliderData as $sliderItem) {
          echo '
          <div class="main_slider-item"><img src="http://'.$_SERVER['SERVER_NAME'].'/ex3/with/src/assets/img/'.$sliderItem['imgName'].'" alt="" title="">
          <div class="main_slider-substrate">
              <div class="main_substrate-heading">'.$sliderItem['heading'].'</div>
              <div class="main_substrate-description">'.$sliderItem['description'].'</div>
              <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
          </div>
          </div>
          ';
        }
      ?>
      
        <!-- <div class="main_slider-item"><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/bytovka1.png" alt="" title="">
        <div class="main_slider-substrate">
            <div class="main_substrate-heading">Строительные бытовки недорого!</div>
            <div class="main_substrate-description"></div>
            <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
        </div>
        </div>

        <div class="main_slider-item"><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/bytovka2.png" alt="" title="">
        <div class="main_slider-substrate">
            <div class="main_substrate-heading">Строительные бытовки недорого!</div>
            <div class="main_substrate-description">Компания "Бытовки-Сервис" предлагает взять в аренду бытовку для жилья</div>
            <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
        </div>
        </div>

        <div class="main_slider-item"><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/bytovka3.png" alt="" title="">
        <div class="main_slider-substrate">
            <div class="main_substrate-heading">Строительные бытовки недорого!</div>
            <div class="main_substrate-description">Компания "Бытовки-Сервис" предлагает взять в аренду бытовку пост-охраны</div>
            <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
        </div>
        </div>

        <div class="main_slider-item"><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/bytovka4.png" alt="" title="">
        <div class="main_slider-substrate">
            <div class="main_substrate-heading">Строительные бытовки недорого!</div>
            <div class="main_substrate-description">Компания "Бытовки-Сервис" предлагает взять в аренду бытовку под склад</div>
            <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
        </div>
        </div>

        <div class="main_slider-item"><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/bytovka5.png" alt="" title="">
        <div class="main_slider-substrate">
            <div class="main_substrate-heading">Строительные бытовки недорого!</div>
            <div class="main_substrate-description">Компания "Бытовки-Сервис" предлагает взять в аренду офисную бытовку</div>
            <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
        </div>
        </div>

        <div class="main_slider-item"><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/bytovka6.png" alt="" title="">
        <div class="main_slider-substrate">
            <div class="main_substrate-heading">Строительные бытовки недорого!</div>
            <div class="main_substrate-description">Компания "Бытовки-Сервис" предлагает взять в аренду бытовку-раздевалку</div>
            <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
        </div>
        </div> -->

      </div>
      
    </div>
  </div>
</div>