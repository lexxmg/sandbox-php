
<?php

// Задание 6 - Сортировка массивов
// Возьмите предыдущую матрицу и отсортируйте четные строки по возрастанию, а нечетные по убыванию, и снова выведите массив в удобном формате
// (запрещено использовать встроенные в php функции сортировки *sort|asort|ksort|usort*)
// Пример вывода:
// 4 1 1 1
// 2 3 4 6
// 7 2 2 1
// 0 0 0 7
// 7 5 4 0


$matrix = [];
$m = rand(3, 10);
$n = rand(3, 10);


for ($i = 0; $i < $m; $i++) {
  for ($j = 0; $j < $n ; $j++) {
    $matrix[$i][] = rand(0, 9);
  }
}
