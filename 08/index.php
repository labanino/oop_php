<?php include 'includes/person.inc.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP Static Properties And Methods</title>
</head>
<body>
  
  <?php
    $person1 = new Person('Alex', 'Brown', 56); 
    echo $person1->getDA();
  ?>

</body>
</html>