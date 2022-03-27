
'use strict';

fetch('/api/ip')
  .then(res => res.json())
  .then(data => {
    const result = data.filter(item => {
      return item.user ? true : false;
    })

    console.log(result);
  });
