
window.onload = () => {


    const msg = new SpeechSynthesisUtterance(); 

    let voices = []; // dump the voices in array

    //opitons
    const voicesDropdown = document.querySelector('[name="voice"]');
    const options = document.querySelectorAll('[type="range"], [name="text"]');
    const speakButton = document.querySelector('#speak');
    const stopButton = document.querySelector('#stop');

    msg.text = document.querySelector('[name="text"]').value;


    function populateVoices() {
        voices = this.getVoices();
        console.log(voices);
        //set voices as options
        voicesDropdown.innerHTML = voices
          .map(voice => `<option value="${voice.name}">${voice.name} (${voice.lang})</option>`)
          .join('');
    }

    //set the voice
    function setVoice() {
        msg.voice = voices.find(voice => voice.name === this.value);
        toggle();
    }


    //cancel the speaking and start again 
    function toggle(startOver = true) {
        speechSynthesis.cancel();
        if (startOver) {
          speechSynthesis.speak(msg);
        }
    }

    function setOption() {
        console.log(this.name, this.value);
        msg[this.name] = this.value;// set changed property to changed value
        toggle();
      }

    speechSynthesis.addEventListener('voiceschanged', populateVoices);
    voicesDropdown.addEventListener('change', setVoice);
    options.forEach(option => option.addEventListener('change', setOption));
    speakButton.addEventListener('click', toggle);
    stopButton.addEventListener('click', () => toggle(false));
  
}


