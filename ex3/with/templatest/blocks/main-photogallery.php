<?php
$mainPhotogalleryData = array(
  1 => array(
    'imgName' => 'gallery.jpg',
    'dataCaption' => 'Фото 1'
  ),
  2 => array(
    'imgName' => 'gallery.jpg',
    'dataCaption' => 'Фото 1'
  ),
  3 => array(
    'imgName' => 'gallery.jpg',
    'dataCaption' => 'Фото 1'
  ),
  4 => array(
    'imgName' => 'gallery.jpg',
    'dataCaption' => 'Фото 1'
  ),
  5 => array(
    'imgName' => 'gallery.jpg',
    'dataCaption' => 'Фото 1'
  ),
  6 => array(
    'imgName' => 'gallery.jpg',
    'dataCaption' => 'Фото 1'
  ),
  7 => array(
    'imgName' => 'gallery.jpg',
    'dataCaption' => 'Фото 1'
  ),
);
?>


<div class="main_photogallery">
        <div class="grid-container">
          <div class="main_photogallery-heading heading">Фотогалерея</div>
          <div class="main_photogallery-slider slider-arrows slider-dots">

          <?php
          foreach ($mainPhotogalleryData as $sliderItem) {
            echo '
            <div class="main_photogallery-item"><a data-fancybox="gallery" href="http://'.$_SERVER['SERVER_NAME'].'/ex3/with/src/assets/img/'.$sliderItem['imgName'].'" data-caption="'.$sliderItem['dataCaption'].'" title=""><img src="http://'.$_SERVER['SERVER_NAME'].'/ex3/with/src/assets/img/'.$sliderItem['imgName'].'" alt="" title=""></a></div>
            ';
          }
         
          ?>

            <!-- <div class="main_photogallery-item"><a data-fancybox="gallery" href="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" alt="" title=""></a></div>
            
            <div class="main_photogallery-item"><a data-fancybox="gallery" href="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" alt="" title=""></a></div>
            <div class="main_photogallery-item"><a data-fancybox="gallery" href="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" alt="" title=""></a></div>
            <div class="main_photogallery-item"><a data-fancybox="gallery" href="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" alt="" title=""></a></div>
            <div class="main_photogallery-item"><a data-fancybox="gallery" href="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" alt="" title=""></a></div>
            <div class="main_photogallery-item"><a data-fancybox="gallery" href="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" alt="" title=""></a></div>
            <div class="main_photogallery-item"><a data-fancybox="gallery" href="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" alt="" title=""></a></div>
            <div class="main_photogallery-item"><a data-fancybox="gallery" href="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" data-caption="Фото 1" title=""><img src="http://<=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/gallery.jpg" alt="" title=""></a></div>
          -->
          </div>
        </div>
      </div>