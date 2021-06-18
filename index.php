<?php
  include('php/001_simple_arrays.php');
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
    </div>
  </body>
</html>
