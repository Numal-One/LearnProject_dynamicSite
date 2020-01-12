<?php
$navMenuData = array(
  1 => array(
    'name' => 'Аренда бытовок',
    'fileName' => 'catalog.php',
    'submenu' => array(
      1 => array(
        'name' => 'Аренда бытовок в Видном',
        'fileName' => 'catalog.php'
      ),
      2 => array(
        'name' => 'Аренда бытовок в Домодедово',
        'fileName' => 'catalog.php'
      ),
      3 => array(
        'name' => 'Аренда бытовок в Видном',
        'fileName' => 'catalog.php'
      ),
      4 => array(
        'name' => 'Аренда бытовок в Домодедово',
        'fileName' => 'catalog.php'
      ),
      5 => array(
        'name' => 'Аренда бытовок в Видном',
        'fileName' => 'catalog.php'
      ),
      6 => array(
        'name' => 'Аренда бытовок в Домодедово',
        'fileName' => 'catalog.php'
      ),
      7 => array(
        'name' => 'Аренда бытовок в Видном',
        'fileName' => 'catalog.php'
      ),
      8 => array(
        'name' => 'Аренда бытовок в Домодедово',
        'fileName' => 'catalog.php'
      ),
      
    )
  ),
  2 => array(
    'name' => 'Цены',
    'fileName' => 'price.php',
    'submenu' => array()
  ),
  3 => array(
    'name' => 'Доставка',
    'fileName' => 'delivery.php',
    'submenu' => array()
  ),
  4 => array(
    'name' => 'Фотогалерея',
    'fileName' => 'photogallery.php',
    'submenu' => array()
  ),
  5 => array(
    'name' => 'Контакты',
    'fileName' => 'contacts.php',
    'submenu' => array()
  ),
);

?>


<header class="site_header">
      <div class="header_top">
        <div class="grid-container">
          <div class="grid-x">
            <div class="header_address"><i class="icon-address"></i>ул. Молодогвардейская, д. 58, стр.13, офис 28.
            Мы работаем: Пн - Пт с 10:00 до 19:00
            </div>
            <div class="header_contacts"><a class="mail" href="mailto:5084145@mail.ru"><i class="icon-mail"></i>5084145@mail.ru</a>
              <div class="header_phones"><a class="phone" href="tel:+74957985563">+7 (495) 798-55-63</a><a class="phone" href="tel:+74956418568">+7 (495) 641-85-68</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="header_bottom">
        <div class="grid-container">
          <div class="grid-x">
          <div class="header_logo"><a href="index.php">
                <div class="logo">Бытовки-Сервис.ru</div>
                <div class="logo_text">Аренда бытовок и блок контейнеров с 2008 г.</div></a></div>
            <div class="header_menu">
              <ul class="menu">

                <?php
                foreach ($navMenuData as $menuItm) {
                  echo '<li><a href="'.$menuItm['fileName'].'">'.$menuItm['name'].'</a>';
                    
                  if (count($menuItm['submenu']) !== 0) {
                      echo '<ul class="submenu">';
                        foreach ($menuItm['submenu'] as $submenuItm) {
                         echo '<li><a href="'.$submenuItm['fileName'].'">'.$submenuItm['name'].'</a></li>';
                        }
                      echo '</ul>';
                    }

                  echo '</li>';
                }
                ?>
               
              </ul>

              <div class="header-search"><a class="search_btn" href="#"><i class="icon-search"></i></a>
                <form class="search_form" method="" action="">
                  <div class="search-widget">
                    <input type="text" placeholder="Поиск">
                    <button class="search_btn-close" type="reset"><i class="icon-close"></i></button>
                  </div>
                </form>
                <div class="search-result">
                  <div class="search-bytovka">
                    <div class="search-bytovka-img"><a href="#"><img src="src/assets/img/search1.png"></a></div>
                    <div class="search-bytovka-body"><a class="search-bytovka-title" href="#">Бытовка прорабская (офис)</a>
                      <div class="search-bytovka-gabarits">2400 Х 6000</div>
                    </div>
                  </div>
                  <ul class="search-ul">
                    <li>прорабская <span>бытовка</span></li>
                    <li><span>Бытовка</span>душевая</li>
                    <li><span>бытовка для</span>зимнего проживания</li>
                    <li><span>бытовка</span>склад</li>
                    <li><span>бытовка для</span>строителей</li>
                    <li><span>бытовка для</span>рабочих</li>
                    <li><span>бытовка</span>на шосси</li>
                    <li>вагон<span> бытовка</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>