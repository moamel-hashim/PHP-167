<?php


$cash = 31;
$dinner = 25;
$tax = 10;
$tip = 10;

function restaurant_check($meal, $tax, $tip) {
  $tax_amount = $meal * ($tax / 100);
  $tip_amount = $meal * ($tip / 100);
  return $meal + $tax_amount + $tip_amount;
}

while(($cost = restaurant_check($dinner,$tax,$tip)) < $cash) {
  $tip++;
  echo 'I can afford a tip of '.$tip.'% ('.$cost.')'."\n";
}


?>
