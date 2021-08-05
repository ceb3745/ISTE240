<div>

<?php
  echo "<h3>Question ".$qnumber."</h3>";
?>


<div>
  <div id='ans-1' >
    <label for='option-1' >
      <input type='radio' name='option' value='1' <?php echo (isset($Answer) && $Answer == 'option1') ? 'class="quizOption answer"' : 'class="quizOption"' ?>  id='option-1' />
      <?php echo $Option1 ?></label>
    <span id='result-1'></span>
  </div>
  <hr />

  <div id='ans-2' >
    <label for='option-2' >
      <input type='radio' name='option' value='2' <?php echo (isset($Answer) && $Answer == 'option2') ? 'class="quizOption answer"' : 'class="quizOption"' ?>  id='option-2' />
      <?php echo $Option2 ?></label>
    <span id='result-2'></span>
  </div>
  <hr />

  <div id='ans-3' >
    <label for='option-3' >
      <input type='radio' name='option' value='3' <?php echo (isset($Answer) && $Answer == 'option3') ? 'class="quizOption answer"' : 'class="quizOption"' ?> id='option-3' />
      <?php echo $Option3 ?></label>
    <span id='result-3'></span>
  </div>
  <hr />

  <div id='ans-4' >
    <label for='option-4' >
      <input type='radio' name='option' value='4' <?php echo (isset($Answer) && $Answer == 'option4') ? 'class="quizOption answer"' : 'class="quizOption"' ?> id='option-4' />
      <?php echo $Option4 ?></label>
    <span id='result-4'></span>
  </div>
  <hr />
  <button type='button' onclick='displayAnswer1()'>Submit</button>
</div>
<a id='showanswer1'></a><!--$v1-4 are the returned values.
</div>
_________________IMPORTANT_______________________
3 of the vaues MUST be a, b and c. The correct answer MUST have a value of t-->
    
