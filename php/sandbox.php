
<?php

// Задание 3 - Поиск min элемента в массиве
// Создайте массив values содержащий 10 случайных чисел от 0 до 100, найдите в этом массиве минимальное значение.
// Выведите сам массив, минимальное значение и его позицию в массиве, если таких значений несколько, то выведите первое из них.

$values = [];

for ($i=0; $i < 10; $i++) {
  $values[] = rand(0, 100);
}

//var_dump($values);

$min = 100;
$index = 0;
foreach ($values as $key => $item) {
  if ($item < $min) {
    $min = $item;
    $index = $key;
  }
}

//echo $min;

//Решение 2

$index2 = 0;

foreach ($values as $key => $item) {
  if ($values[$index2] > $item) {
    $index2 = $key;
  }
}

echo $index2 . ' - ' .  $values[$index2];
