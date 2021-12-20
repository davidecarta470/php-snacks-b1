
<?php
// snack4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
function randomNumber($max,$min,$arrayLength){
    $number = [];
    $i=0;
    
    while($i<$arrayLength){
      $number []= rand($max,$min);
      $i++;
    };
    return $number;
}
var_dump(randomNumber(4,5,10));


?>