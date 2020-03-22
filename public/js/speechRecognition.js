
window.onload = () => {

    window.SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;

    const recognition = new SpeechRecognition();//new instance
    recognition.interimResults = true; //it populates dynamicly, you don't need to stop speaking


    //putting paragraph in div "words"
    let p = document.createElement('p');
    const words = document.querySelector('.words');
    words.appendChild(p);


    
  recognition.addEventListener('result', e => {
    console.log(e.results);
    const transcript = Array.from(e.results)// 
    .map(result => result[0])
    .map(result => result.transcript)
    .join('');

    console.log(transcript);

    const poopScript = transcript.replace(/poop|poo|shit|dump/gi, '💩');
    p.textContent = poopScript;

    if (e.results[0].isFinal) {
      p = document.createElement('p');
      words.appendChild(p);
    }
    
    if(transcript.incudes('hej')){
        console.log('gej');
    }

  });

 

  recognition.addEventListener('end', recognition.start);// if it ends start listening again
  recognition.start();
}


