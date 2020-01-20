<?php
$mainSliderData = $database['mainSliderData'];

?>

<div class="main_slider-wrapper">
  <div class="grid-container">
    <div class="grid-x">

      <div class="main_slider">
      <?php
        foreach ($mainSliderData as $sliderItem) {
          echo '
          <div class="main_slider-item"><img src="src/assets/img/'.$sliderItem['imgName'].'" alt="" title="">
          <div class="main_slider-substrate">
              <div class="main_substrate-heading">'.$sliderItem['heading'].'</div>
              <div class="main_substrate-description">'.$sliderItem['description'].'</div>
              <div class="main_substrate-button"><a class="btn_pink" href="#">Заказать<span class="show-for-mobile"> бытовку</span></a></div>
          </div>
          </div>
          ';
        }
      ?>
      </div>
      
    </div>
  </div>
</div>