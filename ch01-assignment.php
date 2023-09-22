<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ch01 assignment</title>
</head>
<body>
 <?php
 /**
  * okay so for this assignment ill be doing something that will calculate value of purchase
  */
  $price = 150;
  $tax = 0.07;
  $addingTax = $price * $tax;
  $total = $price + $addingTax;
  echo 'The total price for item is '. $total;
 ?>
</body>
</html>
