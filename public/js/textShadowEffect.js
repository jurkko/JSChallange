

window.onload = () => {
    const hero = document.querySelector('.hero');
    const text = document.querySelector('.shadowText'); 
    const walk = 100; // 100px

    hero.addEventListener('mousemove', shadow);

    function shadow(e){

    

 
        const { offsetWidth: width, offsetHeight: height } = hero;      // = const width = hero.offsetWidth; && const Height = hero.offsetHeight;
        let { offsetX: x, offsetY: y } = e; // e.x && e.y

        console.log(width,height);
        //if you hover over hero you get x = 0, this method is a fix for that
        if(this !== e.target){
            x = x + e.target.offsetLeft;
            y = y + e.target.offsetTop;
        }

        const xWalk = Math.round(( x / width * walk) - (walk / 2));
        const yWalk = Math.round(( x / height * walk) - (walk / 2));

        text.style.textShadow = `
        ${xWalk}px ${yWalk}px 0 rgba(255,0,255,0.7),
        ${xWalk * -1}px ${yWalk}px 0 rgba(0,255,255,0.7),
        ${yWalk}px ${xWalk * -1}px 0 rgba(0,255,0,0.7),
        ${yWalk * -1}px ${xWalk}px 0 rgba(0,0,255,0.7)
      `;
        //
        //console.log(x,y);
    }


};