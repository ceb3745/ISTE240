function resetStyles() {
  for(var i=1; i<5; i++){
    document.getElementById(`ans-${i}`).style.border = '0px';
    document.getElementById(`result-${i}`).innerHTML = '';
  }
}

function displayAnswer1() {
    var answerValue = document.getElementsByClassName('answer')[0].value;
    resetStyles();
    if (document.getElementById('option-1').checked && document.getElementById('option-1').value !== answerValue) {
      document.getElementById('ans-1').style.border = '3px solid red'
      document.getElementById('result-1').style.color = 'red'
      document.getElementById('result-1').innerHTML = 'Incorrect!'
    }else if(document.getElementById('option-1').checked && document.getElementById('option-1').value == answerValue){
      document.getElementById('ans-1').style.border = '3px solid limegreen'
      document.getElementById('result-1').style.color = 'limegreen'
      document.getElementById('result-1').innerHTML = 'Correct!'
	  }
    if (document.getElementById('option-2').checked && document.getElementById('option-2').value !== answerValue) {
      document.getElementById('ans-2').style.border = '3px solid red'
      document.getElementById('result-2').style.color = 'red'
      document.getElementById('result-2').innerHTML = 'Incorrect!'
    }else if(document.getElementById('option-2').checked && document.getElementById('option-2').value == answerValue){
      document.getElementById('ans-2').style.border = '3px solid limegreen'
      document.getElementById('result-2').style.color = 'limegreen'
      document.getElementById('result-2').innerHTML = 'Correct!'
	  }
    if (document.getElementById('option-3').checked && document.getElementById('option-3').value !== answerValue) {
      document.getElementById('ans-3').style.border = '3px solid red'
      document.getElementById('result-3').style.color = 'red'
      document.getElementById('result-3').innerHTML = 'Incorrect!'
    }else if(document.getElementById('option-3').checked && document.getElementById('option-3').value == answerValue){
      document.getElementById('ans-3').style.border = '3px solid limegreen'
      document.getElementById('result-3').style.color = 'limegreen'
      document.getElementById('result-3').innerHTML = 'Correct!'
	  }
    if (document.getElementById('option-4').checked && document.getElementById('option-4').value !== answerValue) {
      document.getElementById('ans-4').style.border = '3px solid red'
      document.getElementById('result-4').style.color = 'red'
      document.getElementById('result-4').innerHTML = 'Incorrect!'
    }else if(document.getElementById('option-4').checked && document.getElementById('option-4').value == answerValue){
      document.getElementById('ans-4').style.border = '3px solid limegreen'
      document.getElementById('result-4').style.color = 'limegreen'
      document.getElementById('result-4').innerHTML = 'Correct!'
	  }
  }
  // the functon displays the link to the correct answer
  function showCorrectAnswer1(){
    let showAnswer1 = document.createElement('p')
    showAnswer1.innerHTML = 'Show Corrent Answer'
    showAnswer1.style.position = 'relative'
    showAnswer1.style.top = '-180px'
    showAnswer1.style.fontSize = '1.75rem'
    document.getElementById('showanswer1').appendChild(showAnswer1)
    showAnswer1.addEventListener('click', () => {
      document.getElementById('ans-1').style.border = '3px solid limegreen'
      document.getElementById('result-1').style.color = 'limegreen'
      document.getElementById('result-1').innerHTML = 'Correct!'
      document.getElementById('showanswer1').removeChild(showAnswer1)
	  
    })
  }
