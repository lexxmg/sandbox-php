
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

$sortMatrix = [];

foreach ($matrix as $i => $row) {
  foreach ($row as $column) {
    $sortMatrix[$i][] = $column;
  }
}

for ($i = 0; $i < count($sortMatrix); $i++) {
  for ($j = 0; $j < count($sortMatrix[$i]); $j++) {
    for ($k = 0; $k < count($sortMatrix[$i]); $k++) {
      if ($i % 2 == 0 && $sortMatrix[$i][$j] > $sortMatrix[$i][$k]) {
        $tmp = $sortMatrix[$i][$j];
        $sortMatrix[$i][$j] = $sortMatrix[$i][$k];
        $sortMatrix[$i][$k] = $tmp;
      }

      if ($i % 2 != 0 && $sortMatrix[$i][$j] < $sortMatrix[$i][$k]) {
        $tmp = $sortMatrix[$i][$j];
        $sortMatrix[$i][$j] = $sortMatrix[$i][$k];
        $sortMatrix[$i][$k] = $tmp;
      }
    }
  }
}

// for ($i = 0; $i < count($sortMatrix); $i++) {
//   for ($j = 0; $j < count($sortMatrix); $j++) {
//     if ( $sortMatrix[$i] < $sortMatrix[$j] ) {
//       $tmp = $sortMatrix[$j];
//       $sortMatrix[$j] = $sortMatrix[$i];
//       $sortMatrix[$i] = $tmp;
//     }
//   }
// }



// for ($k = 0; $k < count($matrix); $k++) {
//
//     $row = $matrix[$k];
//
//     for ($i = 0; $i < count($row) - 1; $i++) {
//         $index = $i;
//         for ($j = $i + 1; $j < count($row); $j++) {
//             if (($k % 2 == 0 && $row[$index] > $row[$j]) || ($k % 2 != 0 && $row[$index] < $row[$j])) {
//                 $index = $j;
//             }
//         }
//
//         $tmp = $row[$index];
//         $row[$index] = $row[$i];
//         $row[$i] = $tmp;
//     }
//
//     $matrix[$k] = $row;
// }

// foreach ($matrix as $line) {
//     echo implode(' ', $line) . PHP_EOL;
// }
