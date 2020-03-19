
window.onload = () => {

    //timenodes = nodelist and not an array Solution = Array.from
    const timeNodes = Array.from(document.querySelectorAll('[data-time]'));

    //.map method get's in array -> returns array
    //.reduce get's in array -> returns anything we want
    const seconds = timeNodes.map(
        node => node.dataset.time)
        .map(timeCode => {
            const [mins, secs] = timeCode.split(':').map(parseFloat);
            return (mins * 60)+secs;
            console.log(mins,secs);
        })
        .reduce((total,vidSeconds) => total + vidSeconds);

        let secondsLeft = seconds;
        const hours = Math.floor(secondsLeft / 3600);//Math.floor -> Just whole numbers
        secondsLeft = secondsLeft % 360; // % how many are left afetr being evenly distributed 11 % 5 = 1
        const mins = Math.floor(secondsLeft/60);
        secondsLeft = secondsLeft % 60;

        console.log(hours,mins,secondsLeft);


}





