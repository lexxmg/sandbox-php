
<?php

// 1. Создайте переменную с названием код ошибки, положите в нее случайное значение от 1 до 3
// для каждого отдельного кода ошибки выведите сообщение:
// 1 - "Что-то пошло не так"
// 2 - "Что-то пошло так как надо, но мы этого не ждали"
// 3 - "Я в домике"

$errCode = rand(1, 3);

/*
switch ($errCode) {
  case 1:
    echo "1 - Что-то пошло не так $errCode";
    break;
  case 2:
    echo "2 - Что-то пошло так как надо, но мы этого не ждали $errCode";
    break;
  case 3:
    echo "Я в домике $errCode";
    break;
*/

// 2. Четный не с нами. Создайте переменную myNumber - в которую поместите случайное значение от 0 до 10
// Если это число четное (2, 4, 6, 8, 10) - то выведите сообщение: "Четный. Ты не с нами!", если это нечетное или 0 - то выведите "Добро пожаловать!"
// Для решения задачи применяйте switch, даже если очень хочется решить с if

$myNumber = rand(0, 10);

/*
switch ($myNumber) {
  case 2:
  case 4:
  case 6:
  case 8:
  case 10:
    echo "Четный. Ты не с нами! $myNumber";
    break;
  default:
    echo "Добро пожаловать! $myNumber";
}
*/

// 3. Создайте массив foods с продуктами питания: Яблоко, Клубника, Апельсин, Кабачок, Патиссон, Банан, Арбуз, Картошка, Лягушачие лапки
// Создайте переменную foodItem - случайное число от 0 до 8 (количество продуктов - 1)
// Определите к какому виду относится продукт из массива foods под индексов foodItem: "Ягода", "Фрукт", "Овощ", "Что-то не вегетарианское"
// Выведите сообщение: "Выбранный продукт {} - это {}", вместо {} подставьте соответственно название продукта и его вид

$foods = [
  'Яблоко', 'Клубника', 'Апельсин', 'Кабачок',
  'Патиссон', 'Банан', 'Арбуз', 'Картошка',
  'Лягушачие лапки'
];

$foodItem = rand(0, count($foods) - 1);

$type = 'Что-то не вегетарианское';

/*
switch ($foodItem) {
  case 0:
  case 2:
  case 5:
    echo "Выбранный продукт $foods[$foodItem] - это Фрукт";
    break;

  case 1:
  case 6:
    echo "Выбранный продукт $foods[$foodItem] - это Ягода";
    break;

  case 3:
  case 4:
  case 7:
    echo "Выбранный продукт $foods[$foodItem] - это Овощ";
    break;

  default:
    echo "Выбранный продукт $foods[$foodItem] - это Что-то не вегетарианское";
    break;
}
*/

switch ($foods[$foodItem]) {
  case 'Яблоко':
  case 'Апельсин':
  case 'Банан':
    $type = 'Фрукт';
    break;

  case 'Клубника':
  case 'Арбуз':
    $type = 'Ягода';
    break;

  case 'Кабачок':
  case 'Патиссон':
  case 'Картошка':
    $type =  'Овощ';
    break;
}

//echo "Выбранный продукт $foods[$foodItem] - это $type";
