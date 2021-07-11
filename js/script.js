'use strict';

//const audio = document.createElement('audio');
const btn = document.querySelector('button[name=button]');

const audio = new Audio('sounds/Sound_08184.mp3');
// audio.setAttribute('src', 'sounds/Sound_08184.mp3');
// audio.setAttribute('controls', 'controls');
// audio.setAttribute('preload', 'auto');
// audio.setAttribute('autoplay', 'autoplay');
//
// document.body.prepend(audio);
//
// document.body.addEventListener('click', () => {
//   audio.play();
// });

btn.addEventListener('click', () => {
  audio.play();

  btn.remove();
});

setTimeout(() => {
  audio.play();
  console.log('play');
}, 10000);
