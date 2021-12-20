
<?php
// snack4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
function getNumbers($max,$min,$arrayLength){
    $numbers = [];
    $i=0;
    if($arrayLength>$max){
      $arrayLength=$max;
    }
    while($i<$arrayLength){
      $randomNumber = rand($max,$min) ;
      if (!in_array($randomNumber,$numbers)){
        $numbers[]=$randomNumber;
        $i++;
      }
    }
    return $numbers;

}
var_dump(getNumbers(1030,1000,5));


?>