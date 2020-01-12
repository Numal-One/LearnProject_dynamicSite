<?php
$ourAdvantagesData = array(
  1=> array (
    'img' => 'ad1.png',
    'text' => 'Наша фирма занимается арендой бытовок с 2008 года, поэтому мы знаем что нужно нашему клиенту!'
  ),
  2=> array (
    'img' => 'ad2.png',
    'text' => 'Оплату за аренду и доставку бытовки можно производить по безналичному и наличному расчету.'
  ),
  3=> array (
    'img' => 'ad3.png',
    'text' => 'Для постоянных клиентов у нас действует гибкая система скидок как по аренде бытовки так и по доставке и вывоза её на склад.'
  ),
);
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