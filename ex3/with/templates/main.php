



<!DOCTYPE html>
<html lang="ru">

<?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/head.php");?>
  
  <body>
    

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/header.php");?>

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/mobile-menu.php");?>
    
    <main>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/main-slider.php");  ?>
    

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/bytovka-preview.php");  ?>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/main-map.php");  ?>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/rent.php");  ?>
     
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/tech-characteristics.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/byt-calc.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/our-advantages.php");  ?>
     
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/main-photogallery.php");  ?>

    <div class="price">
      <div class="grid-container">
        <div class="price_heading">
          <div class="heading">Цены на аренду блок-контейнеров</div>
          <div class="link-more"><a href="/czenyi/">Перейти в раздел</a></div>
        </div>

        <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/price.php");  ?>

      </div>
    </div>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/seo-text.php");  ?>
      
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/often-question.php");  ?>
     
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/order-form.php");  ?>
      
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/our-articles.php");  ?>
      
    </main>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/footer.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/scripts.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templates/blocks/popup-form.php");  ?>
    

    
  </body>
</html>