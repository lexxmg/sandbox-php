
<?php

$city1 = 101;
$city1Radius = 23;
$city2 = 568;
$city2Radius = 17;

$cars = [];

for ($i = 0; $i < 10; $i++) {
  $carNumber = $i + 1;
  $cars[] = ['car' => $carNumber, 'kilometer' => rand(0, 1000)];
}

//var_dump($cars);

/*
------------1000---------------------------
---23 - 101 + 23----------17 - 568 + 17----

*/
