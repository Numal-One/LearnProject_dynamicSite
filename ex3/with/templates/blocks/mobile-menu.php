<?php
$navMenuData = $database['navMenuData'];
?>

<div class="mobile_menu">
      <div class="mobile_wrap">
        <div class="grid-container">
          <div class="grid-x">
            <div class="hamburger">Меню</div><a class="phone" href="tel:+74957985563">+7 (495) 798-55-63</a>
          </div>
        </div>
      </div>
      <div class="dropdown_menu">
        <ul class="menu">

        <?php
        foreach ($navMenuData as $menuItm) {
          echo ' <li class="parent"><a href="templates/'.$menuItm['fileName'].'">'.$menuItm['name'].'</a>';
            
          if (count($menuItm['submenu']) !== 0) {
              echo '<ul class="submenu">';
                foreach ($menuItm['submenu'] as $submenuItm) {
                  echo '<li><a href="templates/'.$submenuItm['fileName'].'">'.$submenuItm['name'].'</a></li>';
                }
              echo '
              </ul>
              <div class="menu-arrows"></div>
              ';
            }

          echo '</li>';
        }
        ?>

       
        </ul>
        <div class="search">
          <form class="search_form" method="" action="">
            <div class="search-widget">
              <input type="text" placeholder="Поиск">
              <button class="search_btn-close" type="submit"><i class="icon-search"></i></button>
            </div>
          </form>
        </div>
        <div class="phones"><a class="phone" href="tel:+74957985563">+7 (495) 798-55-63</a><a class="phone" href="tel:+74956418568">+7 (495) 641-85-68</a></div>
      </div>
    </div>