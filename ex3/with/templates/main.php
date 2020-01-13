



<!DOCTYPE html>
<html lang="ru">

<?php include_once (PATH_TPL . "blocks/head.php");?>
  
  <body>
    

    <?php include_once (PATH_TPL . "blocks/header.php");?>

    <?php include_once (PATH_TPL . "blocks/mobile-menu.php");?>
    
    <main>

    <?php   include_once (PATH_TPL . "blocks/main-slider.php");  ?>
    

    <?php   include_once (PATH_TPL . "blocks/bytovka-preview.php");  ?>
    
    <?php   include_once (PATH_TPL . "blocks/main-map.php");  ?>
    
    <?php   include_once (PATH_TPL . "blocks/rent.php");  ?>
     
    <?php   include_once (PATH_TPL . "blocks/tech-characteristics.php");  ?>

    <?php   include_once (PATH_TPL . "blocks/byt-calc.php");  ?>

    <?php   include_once (PATH_TPL . "blocks/our-advantages.php");  ?>
     
    <?php   include_once (PATH_TPL . "blocks/main-photogallery.php");  ?>

    <div class="price">
      <div class="grid-container">
        <div class="price_heading">
          <div class="heading">Цены на аренду блок-контейнеров</div>
          <div class="link-more"><a href="/czenyi/">Перейти в раздел</a></div>
        </div>

        <?php   include_once (PATH_TPL . "blocks/price.php");  ?>

      </div>
    </div>

    <?php   include_once (PATH_TPL . "blocks/seo-text.php");  ?>
      
    <?php   include_once (PATH_TPL . "blocks/often-question.php");  ?>
     
    <?php   include_once (PATH_TPL . "blocks/order-form.php");  ?>
      
    <?php   include_once (PATH_TPL . "blocks/our-articles.php");  ?>
      
    </main>
    
    <?php   include_once (PATH_TPL . "blocks/footer.php");  ?>

    <?php   include_once (PATH_TPL . "blocks/scripts.php");  ?>

    <?php   include_once (PATH_TPL . "blocks/popup-form.php");  ?>
    

    
  </body>
</html>