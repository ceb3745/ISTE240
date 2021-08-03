
<h3>Question <?php echo $qnumber;?></h3>,<!--$qnumber is the question number-->
<p><?php echo $question;?></p><!--$question should include the quiz question-->


<div>
  <h3>question</h3>
  <hr />

  <div id='ans-1' >
    <label for='option-1' >
      <input type='radio' name='option' value='' id='option-1'/>
      1</label>
    <span id='result-1'></span>
  </div>
  <hr />

  <div id='ans-2' >
    <label for='option-2' >
      <input type='radio' name='option' value='' id='option-2' />
      2</label>
    <span id='result-2'></span>
  </div>
  <hr />

  <div id='ans-3' >
    <label for='option-3' >
      <input type='radio' name='option' value='' id='option-3'  />
      3</label>
    <span id='result-3'></span>
  </div>
  <hr />

  <div id='block-4' >
    <label for='option-4' >
      <input type='radio' name='option' value='' id='option-4' />
      4</label>
    <span id='result-4'></span>
  </div>
  <hr />
  <button type='button' onclick='displayAnswer1()'>Submit</button>
</div>
<a id='showanswer1'></a><!--$v1-4 are the returned values.
_________________IMPORTANT_______________________
3 of the vaues MUST be a, b and c. The correct answer MUST have a value of t-->
    
