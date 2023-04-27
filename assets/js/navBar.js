const playButton = document.querySelector('.play');
const pauseButton = document.querySelector('.pause');

function playToPause() {
    playButton.style.display = 'none';
    pauseButton.style.display = 'inline-block';
}

function pauseToPlay() {
    pauseButton.style.display = 'none';
    playButton.style.display = 'inline-block';
}

playButton.addEventListener('click', playToPause);
pauseButton.addEventListener('click', pauseToPlay);