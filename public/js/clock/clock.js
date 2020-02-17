


function setDate(){

    const now = new Date();

    const secondHand = document.querySelector(`.second-hand`);
    const minuteHand = document.querySelector(`.min-hand`);
    const hourHand = document.querySelector(`.hour-hand`);


    const seconds = now.getSeconds();
    const secondsDegrees = ((seconds / 60)*360+90);

    const minutes = now.getMinutes();
    const minutesDegrees = ((minutes / 60)*360)+90;

    const hours = now.getHours();
    const hoursDegrees = ((hours / 12)*360)+90; // -> wtf zakaj 12?


    secondHand.style.transform=`rotate(${secondsDegrees}deg)`;
    minuteHand.style.transform=`rotate(${minutesDegrees}deg)`;
    hourHand.style.transform=`rotate(${hoursDegrees}deg)`;



}


setInterval(setDate,1000);