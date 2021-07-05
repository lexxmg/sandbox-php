
<?php

$city1 = 201;
$city1Radius = 123;
$city2 = 768;
$city2Radius = 117;

$cars = [];

for ($i = 0; $i < 10; $i++) {
  $carNumber = $i + 1;
  $kilometer = rand(0, 1000);

  $cars[$kilometer] = ['car' => $carNumber, 'kilometer' => $kilometer];
}

//var_dump($cars);

/*
------------1000---------------------------
---23 - 101 + 23----------17 - 568 + 17----

*/
