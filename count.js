const StartingMinutes = 0;
let time = StartingMinutes;

const CountdownEl = document.getElementById('countdown');

setInterval(updateCountdown, 1000);

function updateCountdown(){
    const minutes = Math.floor(time);
    CountdownEl.innerHTML = `${minutes}`;
    time++;
}