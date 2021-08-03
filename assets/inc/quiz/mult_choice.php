<h3>Question <?php echo $qnumber;?></h3>,<!--$qnumber is the question number-->
<p><?php echo $question;?></p><!--$question should include the quiz question-->
<div>
    <input type="radio" name ="answer1" value = "<?php echo $v1;?>" id="answer1"/><label for="answer1"><?php echo $a1;?><label><br/>
    <input type="radio" name ="answer2" value = "<?php echo $v2;?>" id="answer2"/><label for="answer2"><?php echo $a2;?><label><br/>
    <input type="radio" name ="answer3" value = "<?php echo $v3;?>"  id="answer3" /><label for="answer3"><?php echo $a3;?><label><br/>
    <input type="radio" name ="answer4" value = "<?php echo $v4;?>"  id="answer4"/><label for="large"><?php echo $a4;?><label>
</div><!--$v1-4 are the returned values.
_________________IMPORTANT_______________________
3 of the vaues MUST be a, b and c. The correct answer MUST have a value of t-->
    
