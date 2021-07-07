'use strict';

const audio = document.createElement('audio');

audio.setAttribute('src', 'sounds/Sound_08184.mp3');
audio.setAttribute('controls', 'controls');
audio.setAttribute('preload', 'auto');
audio.setAttribute('autoplay', 'autoplay');

document.body.prepend(audio);

document.body.addEventListener('click', () => {
  audio.play();
});
