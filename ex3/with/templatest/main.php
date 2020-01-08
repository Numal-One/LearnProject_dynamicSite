
<?php

$mainPath = $_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/";
$srcPath = "src/";

?>


<!DOCTYPE html>
<html lang="ru">

<?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/head.php");?>
  
  <body>
    

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/header.php");?>

    <?php include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/mobile-menu.php");?>
    
    <main>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/main-slider.php");  ?>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/bytovka-list.php");  ?>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/main-map.php");  ?>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/rent.php");  ?>
     
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/tech-characteristics.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/byt-calc.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/our-advantages.php");  ?>
     
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/main-photogallery.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/price.php");  ?>
      
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/seo-text.php");  ?>
      
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/often-question.php");  ?>
     
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/order-form.php");  ?>
      
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/our-articles.php");  ?>
      
    </main>
    
    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/footer.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/scripts.php");  ?>

    <?php   include_once ($_SERVER['DOCUMENT_ROOT'] . "/ex3/with/templatest/blocks/popup-form.php");  ?>
    

    
  </body>
</html>