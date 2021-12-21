<?php
 
$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];
$defaultStyle = '<h2 style="padding:20px; 
                            margin:20px auto; 
                            color:white; 
                            width:50%; 
                            text-align:center; 
                            border: 3px solid yellow;
                            background-color:';


$color1 = 'gray';
$color2 = 'green';
$closeTag='">';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <div class="container" style="background-color: lightgreen;padding:40px 0;">
  <?php
    foreach($db as $key=>$value){
      $key === 'teachers'? $lastStyle = $defaultStyle.$color1.$closeTag :  $lastStyle = $defaultStyle.$color2.$closeTag;
      $color3='blue';
      for($i=0; $i<count($db[$key]); $i++){
        echo $lastStyle.$db[$key][$i]['name'].' '. $db[$key][$i]['lastname'].'</h2>';
      }
    
    }
  ?>
  </div>
  
</body>
</html>