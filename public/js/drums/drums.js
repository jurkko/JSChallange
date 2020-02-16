
window.addEventListener('keydown',function(e){
  
    const audio = document.querySelector(`audio[data-key="${e.keyCode}"]`);
    const key = document.querySelector(`.key[data-key="${e.keyCode}"]`);
    const key2 = document.querySelector(`.keywhite[data-key="${e.keyCode}"]`);


    if(!audio) return; //stops the function
    audio.currentTime = 0;
    audio.play();

    if(key==null){
        key2.classList.add('playing');
    } else{
        key.classList.add('playing');
    }
  
  
});



window.addEventListener('keyup',function(e){
    const key = document.querySelector(`.key[data-key="${e.keyCode}"]`)
    const key2 = document.querySelector(`.keywhite[data-key="${e.keyCode}"]`)
    console.log(key2);

    if(key!=null){
        key.classList.remove('playing');
    } else{
        key2.classList.remove('playing');
    }
});




 
