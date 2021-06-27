<?php

if ( isset($_POST['btn']) ) {
  $op1 = $_POST['op1'];
  $op2 = $_POST['op2'];
  $sum = $_POST['sum'];

  if ($op1 + $op2 == $sum) {
    $success = 'Решенеие верно!';

    echo "$op1 + $op2 = $sum";
  } else {
    $error = 'Не верное решение!';
  }
}

if ( !isset($error) ) {
  $sourceOperator1 = rand(0, 10);
  $sourceOperator2 = '';
  $sourceSum = rand(0, 10);
} else {
  $sourceOperator1 = $op1;
  $sourceOperator2 = $op2;
  $sourceSum = $sum;
}
?>
