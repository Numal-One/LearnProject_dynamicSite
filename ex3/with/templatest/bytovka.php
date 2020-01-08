<!DOCTYPE html>
<html lang="ru">

<?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/head.php");?>
  
  <body>
    

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/header.php");?>

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/mobile-menu.php");?>
    
    <main>
      <div class="content">
        <div class="grid-container">
          <ul class="breadcrumbs">
            <li><a href="#">Главная</a></li>
            <li><a href="#">Аренда бытовки</a></li>
            <li><span>Бытовка прорабская (офис)</span></li>
          </ul>
        </div>
        
        <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/card-bytovka.php");?>

        <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/our-articles.php");?>
        
      </div>
    </main>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/footer.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/scripts.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/popup-form.php");  ?>

  </body>
</html>