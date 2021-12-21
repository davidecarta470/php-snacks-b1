<?php
//  snack 3 
// Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
$posts = [
  "05-01-2007" =>[
                  "title" =>"post4",
                  "author" =>"utente1",
                  "text" => "testo post5"
                ],
  "04-01-2007" =>[
                  "title" =>"post3",
                  "author" =>"utente1",
                  "text" => "testo post4"
                ],
  "03-01-2007" =>[
                  "title" =>"post2",
                  "author" =>"utente1",
                  "text" => "testo post3"
                ],
  "02-01-2007" =>[
                  "title" =>"post1",
                  "author" =>"utente1",
                  "text" => "testo post2"
                ],
  "01-01-2007" =>[
                  "title" =>"post1",
                  "author" =>"utente1",
                  "text" => "testo post1"
                ],
];

$i = 0;
$postskey = array_keys($posts) ;
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
  <ul>
  <?php
  foreach($posts as $value){
    echo '<li>'.$postskey[$i].'<br>'.$value['text'].'</li>'.'<br> '.'<br>';
    $i++;
  }
  ?>
  </ul>
  
</body>
</html>