
'use strict';

const form = document.forms.myForm;

console.log(form);
console.log(form.elements);

form.addEventListener('submit', event => {
  //event.preventDefault();
  console.log(event);
});
