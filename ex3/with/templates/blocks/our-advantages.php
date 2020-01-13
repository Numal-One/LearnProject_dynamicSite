<?php
$ourAdvantagesData = $database['ourAdvantagesData'];
?>


<div class="advantages">
        <div class="grid-container">
          <div class="advantages_heading heading">Наши преимущества</div>
          <div class="advantages_slider slider-dots">
          
          <?php
            foreach ($ourAdvantagesData as $advantages) {
              echo '
              <div class="advantages_item">
                <div class="advantages_item-img"><img src="src/assets/img/'.$advantages['img'].'" alt="" title=""></div>
                <div class="advantages_item-content">'.$advantages['text'].'</div>
              </div>
              ';
            }
          ?>


           
          </div>
        </div>
      </div>