<?php
$photogalleryData = $database['photogalleryData'];
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
                  <div class="photogallery-for-img"><a href="src/assets/img/'.$photo['photoName'].'" data-fancybox="photogallery" data-caption="Бытовка-склад" title="">
                    <img src="src/assets/img/'.$photo['photoName'].'" alt="" title=""></a>
                  </div>
                  <div class="photogallery-for-caption">'.$photo['caption'].'</div>
                </div>
              ';
            }

            ?>

             
            </div>

            <div class="photogallery-nav">

              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="src/assets/img/photo1.jpg" alt="" title=""></div>
              </div>

              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="src/assets/img/photo2.jpg" alt="" title=""></div>
              </div>

              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="src/assets/img/photo3.jpg" alt="" title=""></div>
              </div>

              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="src/assets/img/photo4.jpg" alt="" title=""></div>
              </div>

              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="src/assets/img/photo5.jpg" alt="" title=""></div>
              </div>

              <div class="photogallery-nav-item">
                <div class="photogallery-nav-img"><img src="src/assets/img/photo6.jpg" alt="" title=""></div>
              </div>

            </div>

          </div>
        </div>