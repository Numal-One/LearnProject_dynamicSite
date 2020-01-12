<?php
$bytovkaTechCharacteristics = array(
  1 => array(
    "title" => "Стандартная бытовка",
    "charsTableHead" => "Характеристики стандартной строительной бытовки",
    "imageName" => "standartnaya-bytovka-texnicheskie-xarakteristiki.jpg",
    "characteristics" => array(
      "entry" => array("Тип" , "Вход с торца"),
      "profile" => array("Габариты" , "2,5 х 6 х 2,5 м"),
      "frame" => array("Каркас" , "Металлический"),
      "window" => array("Окно" , "Рама деревянная (двойное остекление)"),
      "exterior" => array("Внешняя отделка" , "Оцинкованный профлист"),
      "interior" => array("Внутренняя отделка" , "Деревянная, ПХВ вагонка, оргалит"),
      "flooring" => array("Напольное покрытие" , "Линолеум"),
      "outer door" => array("Дверь наружная" , "Деревянная (с замком, обитая жестью)"),
      "inner door" => array("Дверь межкомнатная" , "ДВП"),
      "insulation" => array("Утепление" , "Минеральная вата 50 мм."),
      "electrical wiring" => array("Электропроводка" , "Стандарт 5 КВт (2 лампы, 1 светильник, 3 розетки двойные, 2 выключателя)"),
      "window grill" => array("Решетка на окне" , "Есть")
    )
  ),
  2 => array(
    "title" => "Не стандартная бытовка",
    "charsTableHead" => "Характеристики не стандартной строительной бытовки",
    "imageName" => "standartnaya-bytovka-texnicheskie-xarakteristiki2.jpg",
    "characteristics" => array(
      "entry" => array("Тип" , "Неведомая 4х мерная хрень"),
      "profile" => array("Габариты" , "2 х 2 х 2 х 2 м"),
      "frame" => array("Каркас" , "Чугуниевый"),
      "window" => array("Окно" , "Отсутствует"),
      "exterior" => array("Внешняя отделка" , "Инкрустация беличьими черепами"),
      "interior" => array("Внутренняя отделка" , "Кожа с жопы дракона"),
      "flooring" => array("Напольное покрытие" , "Вязаный коврик"),
      "outer door" => array("Дверь наружная" , "Гермодверь"),
      "inner door" => array("Дверь межкомнатная" , "Занавеска"),
      "insulation" => array("Утепление" , "Чугунные батареи"),
      "electrical wiring" => array("Электропроводка" , "Отсутствует"),
      "window grill" => array("Решетка на окне" , "Нет")
    )
  ),
);



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