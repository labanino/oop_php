<?php

  declare(strict_types = 1);  // 1 = true, 0 = false
  include 'class-autoload.inc.php';

  $oper = $_POST['oper'];
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2'];
  
  $calc = new Calc($oper, (int)$num1, (int)$num2);

  try {
    echo $calc->calculator();
  } catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

?>