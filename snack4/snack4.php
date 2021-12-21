
<?php
// snack4
// Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

// Variabili
$massimo  = $_GET['massimo'];
$minimo = $_GET['minimo'];
$lunghezzaArray = $_GET['lunghezzaArray'];
$boolean=false;
$isNegative=false;

// controlli
if($minimo<0 || $massimo<0 || $lunghezzaArray<0 ) $isNegative=true;
if($minimo>$massimo) $boolean=true;

// errori
if($boolean && !$isNegative) echo 'Errore : il valore minimo è maggiore del valore massimo<br>';
if($isNegative) echo 'Errore :è stato inserito almeno un valore negativo';


// programma
if(count($_GET)>2 && !$boolean && !$isNegative) {
  var_dump(checkedArrayOfRandomNumbers($massimo,$minimo,$lunghezzaArray));
}
// -----------------------------------------
// -----------------------------------------
// -----------------------------------------


// Funzioni

function checkedArrayOfRandomNumbers($max,$min,$arrayLength){
  if($arrayLength>$max-$min){
    $arrayLength = $max-$min;
    echo "La lunghezza dell'array è stata posta uguale alla differenza tra valore massimo e valore minimo : ".$arrayLength;
  }
  return getArrayOfRandomNumber($max,$min,$arrayLength);
  
}

function getArrayOfRandomNumber($max,$min,$arrayLength){
  $numbers = [];
  $i=0;
  while($i<$arrayLength){
    $randomNumber = rand($max,$min) ;
    if (!in_array($randomNumber,$numbers)){
      $numbers[]=$randomNumber;
      $i++;
    }
  }
  return $numbers;
}


  
?>
 


  