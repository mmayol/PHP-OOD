<?php
function discountCalculation($discount,$percentage,$price){
  //calculate the final amount after applying the discount and return it
  //considering $discount as a %
if($percentage!=0){
    $discountCalculation=($price * $discount)/$percentage;

  return $price - $discountCalculation;
}
else return "Discount can't be 0";
}

discountCalculation(10,0,50);

function discountCalculation_2($discount,$percentage,$price){
  //calculate the final amount after applying the discount and return it
  //considering $discount as a %
if($percentage!=0){
    $discountCalculation=($price * $discount)/$percentage;

  return $price - $discountCalculation;
}
else return "Discount can't be 0";
}

discountCalculation_2(10,0,50);

?>
