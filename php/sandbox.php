
<?php

// 1. Создайте переменную с названием value содержащую целое случайное число от 1 до 10 и выведите сообщение: "Полученное число больше 5", если это число действительно больше 5

$value = rand(1, 10);

// 2. Создайте переменную timeToLearn - поместите в нее случайное boolean значение
// Если в переменной будет значение true, то выведите сообщение: "Я как раз сейчас и учусь"
// Если в переменной будет значение false - то выведите сообщение: "Что? Нет, для учебы всегда есть время"

$timeToLearn = rand(0, 1);

if ($timeToLearn)
{
  echo "Я как раз сейчас и учусь";
} else {
  "Что? Нет, для учебы всегда есть время";
}

// 3. Создайте переменную hour, содержащую текущее время в часах, поместите в нее случайное значение от 0 до 23
// Если текущее время находится в диапазоне от 0 до 8 - выведите сообщения: "В это время нужно спать"
// Если время находится в диапазоне от 8 до 21 - выведите сообщения: "В это время занимайтесь полезными делами, или поспите после обеда"
// Если время находится в диапазоне от 21 до 23 - выведите сообщения: "Самое время готовиться ко сну"


// 4. Создайте константу HOURS_IN_DAY и укажите в нее продолжительность суток в часах
// добавьте условие, если значение константы не равно 24 - выведите сообщение: "Неужели я не знаю что в сутках 24 часа?"


// 5. Даны три длины сторон треугольника, нужно понять существует ли такой треугольник.
// Создайте три переменные a, b, c - стороны треугольника, поместите в каждую из них случайное значение от 1 до 5
// Выведите сообщение, что "Треугольник со сторонами {} {} {} существует", или "Невозможно создать треугольник со сторонами {} {} {}",
// вместо {} - должны быть выведены реальные значения сторон треугольника


// 6. Создайте переменную dayNumber, содержащую номер дня недели, поместите в нее случайное значение от 1 до 7
// Выведите это выходной или нет, если неделя начинается с воскресенья (1 день - это воскресенье)
