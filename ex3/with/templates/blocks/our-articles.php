<?php
$ourArticles = $database['ourArticles'];

?>

<div class="main_article">
        <div class="grid-container">
          <div class="main_article-heading heading">Так же Вам могут быть полезны  
            <a href="#">  наши статьи</a>
            <a class="mobile-more" href="#"></a>
          </div>
          <div class="main_article-wrapper">

          <?php
            foreach ($ourArticles as $article) {
              echo '<a class="main_article-item" href="'.$article['href'].'">'.$article['title'].'</a>';
            }
          ?>
            
      </div>