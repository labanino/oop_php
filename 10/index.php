<?php
  // declare(strict_types = 1);  // 1 = true, 0 = false
  include 'includes/class-autoload.inc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP Type Declarations</title>
</head>
<body>
  
  <?php
    $person1 = new Person(); 

    try {
      $person1->setName('Alex');
        echo $person1->getName();
    } catch (TypeError $e) {
        echo "Error!: " . $e->getMessage();
    }
  ?>

</body>
</html>