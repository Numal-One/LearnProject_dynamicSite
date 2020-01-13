
<!DOCTYPE html>
<html lang="ru">

<?php include_once (PATH_TPL . "blocks/head.php");?>
  
  <body>
    

    <?php include_once (PATH_TPL . "blocks/header.php");?>

    <?php include_once (PATH_TPL . "blocks/mobile-menu.php");?>
    
    <main>
      <div class="content">

        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="#">Главная</a></li>
            <li><span>Фотогалерея</span></li>
          </ul>
        </div>

        <?php   include_once (PATH_TPL . "blocks/photogallery-block.php");  ?>

        <?php   include_once (PATH_TPL . "blocks/our-articles.php");  ?>

      </div>
      </main>
    
    <?php   include_once (PATH_TPL . "blocks/footer.php");  ?>

    <?php   include_once (PATH_TPL . "blocks/scripts.php");  ?>

    <?php   include_once (PATH_TPL . "blocks/popup-form.php");  ?>
  </body>
</html>