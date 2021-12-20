<?php
// Snack 5 
// Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo. 
$paragrafo = "Nato nel 1994 ad opera del danese Rasmus Lerdorf, PHP era in origine una raccolta di script CGI che permettevano una facile gestione delle pagine personali. Secondo l'annuncio originale di PHP 1.0 da parte dell'autore sul newsgroup comp.infosystems.www.authoring.cgi il significato originario dell'acronimo era Personal Home Page.[3]. Il pacchetto originario venne in seguito esteso e riscritto dallo stesso Lerdorf in C, aggiungendo funzionalità quali il supporto alla base di dati mSQL, e iniziò a chiamarsi PHP/FI, dove FI sta per Form Interpreter (interprete di form), prevedendo la possibilità di integrare il codice PHP nel codice HTML in modo da semplificare la realizzazione di pagine dinamiche. Nel 1997 si stimava che circa 50.000 siti Web erano basati su PHP.[4]. Il linguaggio cominciò a godere di una certa popolarità tra i progetti open source del web e venne così notato da Zeev Suraski e Andi Gutmans, due giovani programmatori. I due collaborarono nel 1998 con Lerdorf allo sviluppo della terza versione di PHP, il cui acronimo assunse il significato attuale, riscrivendone il motore che fu battezzato Zend da una contrazione dei loro nomi. Le caratteristiche chiave della versione PHP 3.0, frutto del loro lavoro, erano la straordinaria estensibilità, la connettività alla base di dati e il supporto iniziale per il paradigma a oggetti[5]. Verso la fine del 1998 PHP 3.0 era installato su circa il 10% dei server Web in Internet. PHP diventò a questo punto sufficientemente maturo da competere con i linguaggi lato server come ASP, sviluppato da Microsoft, e cominciò ad essere usato su larga scala. La versione 4 di PHP venne lanciata nel 2000 e prevedeva notevoli migliorie[6].";
$arrayDiFrasi = explode('. ',$paragrafo);
var_dump($arrayDiFrasi);
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
    for($i=0; $i<count($arrayDiFrasi); $i++){
      echo '<li style="padding:30px 0px; >'.$arrayDiFrasi[$i].'</li>';
    }
    ?>
  </ul>
</body>
</html>