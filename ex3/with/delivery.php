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
      <div class="content">

        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="#">Главная</a></li>
            <li><span>Доставка</span></li>
          </ul>
        </div>

       

        <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/delivery-text.php");  ?>
        
        <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/delivery-calc.php");  ?>

        <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/main-photogallery.php");  ?>
        
        <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/order-form.php");  ?>

        <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/our-articles.php");  ?>

      </div>
      </main>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/footer.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/scripts.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/popup-form.php");  ?>
  </body>
</html>