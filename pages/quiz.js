function displayAnswer1() {
    if (document.getElementById('option-1').checked) {
      document.getElementById('ans-1').style.border = '3px solid limegreen'
      document.getElementById('result-1').style.color = 'limegreen'
      document.getElementById('result-1').innerHTML = 'Correct!'
    }else{
		document.getElementById('ans-1').style.border = '3px solid white'
      document.getElementById('result-1').style.color = 'white'
      document.getElementById('result-1').innerHTML = ''
	}
    if (document.getElementById('option-2').checked) {
      document.getElementById('ans-2').style.border = '3px solid red'
      document.getElementById('result-2').style.color = 'red'
      document.getElementById('result-2').innerHTML = 'Incorrect!'
      showCorrectAnswer1()
    }else{
		document.getElementById('ans-1').style.border = '3px solid white'
      document.getElementById('result-1').style.color = 'white'
      document.getElementById('result-1').innerHTML = ''
	}
    if (document.getElementById('option-3').checked) {
      document.getElementById('ans-3').style.border = '3px solid red'
      document.getElementById('result-3').style.color = 'red'
      document.getElementById('result-3').innerHTML = 'Incorrect!'
      showCorrectAnswer1()
    }else{
		document.getElementById('ans-1').style.border = '3px solid white'
      document.getElementById('result-1').style.color = 'white'
      document.getElementById('result-1').innerHTML = ''
	}
    if (document.getElementById('option-4').checked) {
      document.getElementById('ans-4').style.border = '3px solid red'
      document.getElementById('result-4').style.color = 'red'
      document.getElementById('result-4').innerHTML = 'Incorrect!'
      showCorrectAnswer1()
    }else{
		document.getElementById('ans-1').style.border = '3px solid white'
      document.getElementById('result-1').style.color = 'white'
      document.getElementById('result-1').innerHTML = ''
	}
  }
  // the functon displays the link to the correct answer
  function showAnswer1(){
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
