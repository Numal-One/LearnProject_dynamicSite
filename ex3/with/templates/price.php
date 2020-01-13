

<!DOCTYPE html>
<html lang="ru">

<?php include_once (PATH_TPL . "blocks/head.php");?>
  
  <body>
    

    <?php include_once (PATH_TPL . "blocks/header.php");?>

    <?php include_once (PATH_TPL . "blocks/mobile-menu.php");?>
    
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

            <?php   include_once (PATH_TPL . "blocks/price.php");  ?>

          </div>
        </div>
        
        <?php   include_once (PATH_TPL . "blocks/byt-calc.php");  ?>

        <?php   include_once (PATH_TPL . "blocks/seo-text.php");  ?>

      </div>
    </main>
    
    <?php   include_once (PATH_TPL . "blocks/footer.php");  ?>

    <?php   include_once (PATH_TPL . "blocks/scripts.php");  ?>

    <?php   include_once (PATH_TPL . "blocks/popup-form.php");  ?>

  </body>
</html>