<?php

include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/src/config.php");

?>

<!DOCTYPE html>
<html lang="ru">

<?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/head.php");?>
  
  <body>
    

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/header.php");?>

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/mobile-menu.php");?>
    
    <main>
      <div class="content price-page">

        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="#">Главная</a></li>
            <li><span>Цены</span></li>
          </ul>
        </div>

        <div class="price">
          <div class="grid-container">
            <h1>Цены</h1>

            <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/price.php");  ?>

          </div>
        </div>
        
        <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/byt-calc.php");  ?>

        <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/seo-text.php");  ?>

      </div>
    </main>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/footer.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/scripts.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/popup-form.php");  ?>

  </body>
</html>