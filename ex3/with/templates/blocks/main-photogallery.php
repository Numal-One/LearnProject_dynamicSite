<?php
$mainPhotogalleryData = $database['mainPhotogalleryData'];
?>


<div class="main_photogallery">
        <div class="grid-container">
          <div class="main_photogallery-heading heading">Фотогалерея</div>
          <div class="main_photogallery-slider slider-arrows slider-dots">

          <?php
          foreach ($mainPhotogalleryData as $sliderItem) {
            echo '
            <div class="main_photogallery-item"><a data-fancybox="gallery" href="src/assets/img/'.$sliderItem['imgName'].'" data-caption="'.$sliderItem['dataCaption'].'" title=""><img src="src/assets/img/'.$sliderItem['imgName'].'" alt="" title=""></a></div>
            ';
          }
         
          ?>

          </div>
        </div>
      </div>