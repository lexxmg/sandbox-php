<?php
  include('php/001_simple_arrays.php');
  include('php/002_multy_arrays.php');
  include('php/003_data_in_arrays.php');
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>sandbox php</title>

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/master.css">

    <link rel="stylesheet" href="lib/slick/slick-theme.css">
    <link rel="stylesheet" href="lib/slick/slick.css">

    <script src="lib/jQuery/jquery-3.5.1.min.js" defer></script>
    <script src="lib/slick/slick.min.js" defer></script>
    <script src="js/script.js" defer></script>
  </head>

  <body>
    <div class="fixed-container">
      <h1>Массивы</h1>

      <h2>Массив</h2>

      <span>массив целых чисел: $arrInt = [1, 4, 45];</span>
      <pre><?php var_dump($numbers);?></pre>

      <span>массив строк: $lines = ['text-1', 'string', 'какой то текст'];</span>
      <pre><?php var_dump($lines);?></pre>

      <span>массив с ключом 34: $one = [34 => 8];</span>
      <pre><?php var_dump($one);?></pre>

      <span>массив ключ значение: $dictionary = [
          'mouse' => 'это животное грызун',
          'horse' => 'скачет по полям',
          'pig' => 'кушает желуди'
        ];
      </span>
      <pre><?php var_dump($dictionary);?></pre>

      <span>Вывод из массива $dictionary значения 'mouse': var_dump($dictionary['mouse']);</span>
      <pre><?php var_dump($dictionary['mouse']);?></pre>

      <span>Вывод из массива $dictionary значения 'mouse': var_dump($dictionary['pig']);</span>
      <pre><?php var_dump($dictionary['pig']);?></pre>

      <span>Вывод третeго элемента из массива numbers: var_dump($numbers[2]);</span>
      <pre><?php var_dump($numbers[2]);?></pre>

      <span>Переназначение третeго элемента из массива numbers: $numbers[2] = 3.14;</span>
      <?php $numbers[2] = 3.14;?>
      <pre><?php var_dump($numbers[2]);?></pre>

      <span>массив ключ значение: $days = [
          1 => '1 - Понедельник',
          2 => '2 - Вторник',
          3 => '3 - Среда',
          4 => '4 - Четверг',
          5 => '5 - Пятница',
          6 => '6 - Суббота',
          7 => '7 - Воскресение'
        ];
      </span>
      <pre><?php var_dump($days);?></pre>

      <h2>Многомерный массив</h2>

      <span>массив матрица: $matrix = [
          [1, 2, 3],
          [4, 5, 6],
          [7, 8, 9]
        ];
      </span>
      <pre><?php var_dump($matrix);?></pre>

      <span>Вывод центральный элемент (на строке 2 в столбце 2) $matrix: var_dump($matrix[1][1]);</span>
      <pre><?php var_dump($matrix[1][1]);?></pre>

      <span>Вывод последний элемент в первой строке из этой матрицы $matrix: var_dump($matrix[0][2]);</span>
      <pre><?php var_dump($matrix[0][2]);?></pre>

      <span>Вывод сумму элементов из этой матрицы, расположенных ниже и левее диагонали 1 5 9 $matrix: var_dump($matrix[1][0] + $matrix[2][0] + $matrix[2][1]);</span>
      <pre><?php var_dump($matrix[1][0] + $matrix[2][0] + $matrix[2][1]);?></pre>

      <span>массив пользователи: $users = [
          ['name' => 'Никита', 'age' => 29, 'profession' => 'плотник'],
          ['name' => 'Вася', 'age' => 13, 'profession' => 'футболист'],
          ['name' => 'Николай Николаевич', 'age' => 77, 'profession' => 'профессиональный игрок в DotA']
        ];
      </span>
      <pre><?php var_dump($users);?></pre>

      <span>Добовление нового элемента из массива $users: $users[] = ['name' => 'Виталий', 'age' => 30, 'profession' => 'программист'];</span>
      <?php $users[] = ['name' => 'Виталий', 'age' => 30, 'profession' => 'программист'];?>
      <pre><?php var_dump($users);?></pre>

      <span>
        Загадочный пользователь: $mysteriousUser = [
          'name' => $users[2]['name'],
          'age' => $users[0]['age'],
          'profession' => $users[1]['profession']
        ];
      </span>
      <pre><?php var_dump($mysteriousUser);?></pre>

      <h2>Массивы с данными</h2>

      <span>Животные:</span>
      <pre><?php var_dump($animals);?></pre>

      <span>Строения:</span>
      <pre><?php var_dump($buildings);?></pre>

      <span>Колличество лап у хрюши:</span>
      <pre><? var_dump($farm['animals']['pig']['legsCount']); ?></pre>

      <span>Цвет будки:</span>
      <pre><? var_dump($farm['buildings']['dogHouse']['color']); ?></pre>

      <span>Длинна хвоста у коня:</span>
      <pre><? var_dump($farm['animals']['horse']['tail']['length']); ?></pre>

      <span>Описание животного из переменной $animal:</span>
      <pre><? var_dump($farm['animals'][$animal]['description']); ?></pre>

      <span>Название помещения, в котором живет мышь:</span>
      <pre><? var_dump($farm['buildings'][$farm['animals']['mouse']['house']]['name']); ?></pre>
    </div>
  </body>
</html>