<?php
$questionsData = $database['questionsData'];
?>

<div class="often-question">
        <div class="grid-container">
          <div class="often-question heading">Часто задаваемые вопросы</div>
          <div class="often-question-wrapper">

            <?php
            foreach ($questionsData as $question) {
              echo '
              <div class="often-question-item">
                <div class="often-question-ask">'.$question['question'].'</div>
                <div class="often-question-answer">'.$question['answer'].'</div>
              </div>';
            }
            ?>
          </div>
        </div>
      </div>