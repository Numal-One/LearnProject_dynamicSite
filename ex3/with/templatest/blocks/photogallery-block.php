<?php
$photogalleryData = array(
  1 =>array(
    'caption' => 'Бытовка-склад',
    'photoName' => 'photo1.jpg'
  ),
  2 =>array(
    'caption' => 'Фото 2',
    'photoName' => 'photo2.jpg'
  ),
  3 =>array(
    'caption' => 'Фото 3',
    'photoName' => 'photo3.jpg'
  ),
  4 =>array(
    'caption' => 'Фото 4',
    'photoName' => 'photo4.jpg'
  ),
  5 =>array(
    'caption' => 'Фото 5',
    'photoName' => 'photo5.jpg'
  ),
  6 =>array(
    'caption' => 'Фото 6',
    'photoName' => 'photo6.jpg'
  ),
  
);
?>


<div class="grid-container">
          <h1>Фотогалерея</h1>
        </div>
        <div class="photogallery">
          <div class="grid-container">

            <div class="photogallery-for slider-dots">

            <?php
            foreach ($photogalleryData as $photo) {
              echo '
                <div class="photogallery-for-item">
                  <div class="photogallery-for-img"><a href="http://'.($_SERVER['SERVER_NAME']).'/ex3/with/src/assets/img/'.$photo['photoName'].'" data-fancybox="photogallery" data-caption="Бытовка-склад" title="">
                    <img src="http://'.($_SERVER['SERVER_NAME']).'/ex3/with/src/assets/img/'.$photo['photoName'].'" alt="" title=""></a>
                  </div>
                  <div class="photogallery-for-caption">'.$photo['caption'].'</div>
                </div>
              ';
            }

            ?>

              <!-- <div class="photogallery-for-item">
                <div class="photogallery-for-img"><a href="http://($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo1.jpg" data-fancybox="photogallery" data-caption="Бытовка-склад" title=""><img src="http://($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo1.jpg" alt="" title=""></a></div>
                <div class="photogallery-for-caption">Бытовка-склад</div>
              </div>

              <div class="photogallery-for-item">
                <div class="photogallery-for-img"><a href="http://($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo2.jpg" data-fancybox="photogallery" data-caption="Фото2" title=""><img src="http://($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo2.jpg" alt="" title=""></a></div>
                <div class="photogallery-for-caption">Фото2</div>
              </div>
              
              <div class="photogallery-for-item">
                <div class="photogallery-for-img"><a href="http://($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo3.jpg" data-fancybox="photogallery" data-caption="Фото3" title=""><img src="http://($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo3.jpg" alt="" title=""></a></div>
                <div class="photogallery-for-caption">Фото3</div>
              </div>

              <div class="photogallery-for-item">
                <div class="photogallery-for-img"><a href="http://($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo4.jpg" data-fancybox="photogallery" data-caption="Фото4" title=""><img src="http://($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo4.jpg" alt="" title=""></a></div>
                <div class="photogallery-for-caption">Фото4</div>
              </div>

              <div class="photogallery-for-item">
                <div class="photogallery-for-img"><a href="http://($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo5.jpg" data-fancybox="photogallery" data-caption="Фото5" title=""><img src="http://($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo5.jpg" alt="" title=""></a></div>
                <div class="photogallery-for-caption">Фото5</div>
              </div>

              <div class="photogallery-for-item">
                <div class="photogallery-for-img"><a href="http://($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo6.jpg" data-fancybox="photogallery" data-caption="Фото6" title=""><img src="http://($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo6.jpg" alt="" title=""></a></div>
                <div class="photogallery-for-caption">Фото6</div>
              </div> -->

            </div>

            <div class="photogallery-nav">

              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="http://<?=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo1.jpg" alt="" title=""></div>
              </div>

              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="http://<?=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo2.jpg" alt="" title=""></div>
              </div>

              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="http://<?=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo3.jpg" alt="" title=""></div>
              </div>

              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="http://<?=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo4.jpg" alt="" title=""></div>
              </div>

              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="http://<?=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo5.jpg" alt="" title=""></div>
              </div>

              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="http://<?=($_SERVER['SERVER_NAME'])?>/ex3/with/src/assets/img/photo6.jpg" alt="" title=""></div>
              </div>

            </div>

          </div>
        </div>