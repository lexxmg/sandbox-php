
<?php

$title = 'Список книг';

$red = (bool) rand(0, 1);

$result3 = [
  'authors' => [
    'Dostoevsky@fake.net' => [
      'fullName' => 'Достоевский Фёдор Михайлович',
      'email' => 'Dostoevsky@fake.net',
      'yearOfBirth' => '1821'
    ],
    'Pushkin@fake.net' => [
      'fullName' => 'Пушкин Александр Сергеевич',
      'email' => 'Pushkin@fake.net',
      'yearOfBirth' => '1799'
    ],
    'Sigmund@fake.net' => [
      'fullName' => 'Фрейд Зигмунд',
      'email' => 'Sigmund@fake.net',
      'yearOfBirth' => '1856'
    ]
  ],
  'books' => [
    [
      'name' => 'Преступление и наказание',
      'email' => 'Dostoevsky@fake.net'
    ],
    [
      'name' => 'Идиот',
      'email' => 'Dostoevsky@fake.net'
    ],
    [
      'name' => 'Братья Карамазовы',
      'email' => 'Dostoevsky@fake.net'
    ],
    [
      'name' => 'Руслан и Людмила',
      'email' => 'Pushkin@fake.net'
    ],
    [
      'name' => 'Евгений Онегин',
      'email' => 'Pushkin@fake.net'
    ],
    [
      'name' => 'О психоанализе',
      'email' => 'Sigmund@fake.net'
    ],
    [
      'name' => 'Печаль и меланхолия',
      'email' => 'Sigmund@fake.net'
    ],
    [
      'name' => 'Исследования истерии',
      'email' => 'Sigmund@fake.net'
    ]
  ]
];
