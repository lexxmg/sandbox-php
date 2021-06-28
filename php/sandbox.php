<?php

if ( isset($_POST['btn']) ) {
  $op1 = $_POST['op1'];
  $op2 = $_POST['op2'];
  $sum = $_POST['sum'];

  if ( is_numeric($op2) ) {
    if ($op1 + $op2 == $sum) {
      $success = 'Решенеие верно!';
    } else {
      $error = 'Не верное решение!';
    }
  } elseif ( $op2 === '' ) {
    $invalid = 'Поле не может быть пустым!';
  } else {
    $invalid = 'Введены не верные даные';
  }
}

if ( !isset($error) && !isset($invalid) ) {
  $sourceOperator1 = rand(0, 10);
  $sourceOperator2 = '';
  $sourceSum = rand(0, 10);
} else {
  $sourceOperator1 = $op1;
  $sourceOperator2 = $op2;
  $sourceSum = $sum;
}
?>
