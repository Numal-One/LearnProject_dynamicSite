<?php
$bytovkaTechCharacteristics = $database['bytovkaTechCharacteristics'];



?>



<div class="tech-characteristics">
        <div class="grid-container">
          <div class="tech-characteristics-heading heading">Технические характеристики бытовок</div>
          <div class="tech-characteristics-wrapper">
            
            <?php
              foreach ($bytovkaTechCharacteristics as  $homeChars) {

                echo '
                <div class="tech-characteristics-item">
                  <div class="tech-characteristics-item-title">'.$homeChars['title'].'</div>
                  <div class="tech-characteristics-item-body">
                    <div class="tech-characteristics-img"><img src="src/assets/img/'.$homeChars['imageName'].'" title="" alt=""></div>
                    <div class="tech-characteristics-item-table">
                    <div class="tech-characteristics-item-tr">'.$homeChars['charsTableHead'].'</div>
                ';

                foreach ($homeChars['characteristics'] as $tableNames) {

                  echo '
                  <div class="tech-characteristics-item-tr">
                    <div class="tech-characteristics-item-td">'.$tableNames[0].'</div>
                    <div class="tech-characteristics-item-td">'.$tableNames[1].'</div>
                  </div>
                  ';
                }

                echo '
                    </div>
                  </div>
                </div>
                ';
              }


            ?>
          </div>
          <div class="grid-x">
            <div class="tech-characteristics-link"><span class="btn_blue">Показать еще</span></div>
          </div>
        </div>
      </div>